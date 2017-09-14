/**
 * Created by ziga on 23-Aug-17.
 */

var tr =    "<tr id=\"kosarica-item${tbag_id}\">\
            <td data-th=\"Izdelek\">\
            <div class=\"row\">\
            <div class=\"col-sm-4 hidden-xs\"><img src=\"http://placehold.it/300x150\" alt=\"...\" class=\"img-responsive\"/></div>\
            <div class=\"col-sm-8\">\
            <h4 class=\"nomargin\">${tbag_name}</h4>\
            <p>${description}</p>\
            </div>\
            </div>\
            </td>\
            <td id=\"kosarica-price${tbag_id}\" data-th=\"Cena izdelka\">${tbag_price}</td>\
            <td data-th=\"Količina\">\
            <input id=\"kosarica-input${tbag_id}\" type=\"number\" class=\"form-control text-center\" value=\"${count}\" onblur=\"calculate_price(${tbag_id})\">\
            </td> \
            <td id=\"kosarica-price-all${tbag_id}\" data-th=\"Cena\" class=\"text-center kosarica-price-all\">${parseFloat(tbag_price * count).toFixed(2)}</td>\
            <td class=\"actions\" data-th=\"\">\
            <button class=\"btn btn-danger btn-sm\" onclick=\"thrash_click(${tbag_id})\"><i class=\"fa fa-trash-o\"></i></button>\
            </td>\
            </tr>";

window.onload = function ()
{
    if (!localStorage_is_supported())
    {
        return;
    }

    for (var i = 0; i < localStorage.length; i++){
        var key = localStorage.key(i);
        var item = localStorage.getItem(key);
        var tbag = JSON.parse(item);

        if (key === "kosaricaCount")
        {
            continue;
        }

        $.tmpl(tr , tbag).appendTo( "#cart-items" );
    }

    calculate_price_all();
};

function calculate_price(id_num)
{
    var input_id = "#kosarica-input".concat(String(id_num));
    var price_id = "#kosarica-price".concat(String(id_num));
    var price_all_id = "#kosarica-price-all".concat(String(id_num));

    var input_el = $( input_id );
    var price_el = $( price_id );
    var price_all_el = $( price_all_id );

    var value = parseInt(input_el.val());

    if (isNaN(value))
    {
        input_el.val("1");
        value = 1;
    }
    else if (value < 1)
    {
        input_el.val("1");
        value = 1;
    }
    else if (value > 50)
    {
        input_el.val("50");
        value = 50;
    }

    input_el.val(String(value));

    var itemJSON = localStorage[String(id_num)];
    var item = JSON.parse(itemJSON);

    item.count = value;
    localStorage[String(id_num)] = JSON.stringify(item);

    value = parseFloat(value);
    var price = parseFloat(price_el.text());

    var result = price * value;

    price_all_el.html(String(result.toFixed(2)));

    calculate_price_all();
}

function calculate_price_all()
{
    var price_class = $( ".kosarica-price-all" );
    var skupaj_class = $( ".skupaj-class" );

    var total = parseFloat(0);

    price_class.each(function (index) {
        total += parseFloat($( this ).text())
    });

    skupaj_class.each(function (index) {
        $( this ).html("<strong>Skupaj ".concat(String(total.toFixed(2))).concat("€</strong>"));
    });
}

function thrash_click(id_num)
{
    var id = String(id_num);
    var tr_id = "#kosarica-item".concat(String(id_num));

    $(tr_id).remove();

    if (!localStorage_is_supported())
    {
        return;
    }

    localStorage.kosaricaCount = localStorage.kosaricaCount - 1;
    localStorage.removeItem(String(id));

    calculate_price_all();
}