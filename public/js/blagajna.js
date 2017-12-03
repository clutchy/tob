/**
 * Created by ziga on 25-Aug-17.
 */

var no_shipping = calculate_total_no_shipping();
var shipping = 2.5;

$( "#validator-form" ).submit(function (event)
{
    var response = grecaptcha.getResponse();
    if (response.length === 0)
    {
        event.preventDefault();
        return;
    }

    if (!localStorage_is_supported())
    {
        event.preventDefault();
        return;
    }

    var ids = {};

    for (var i = 0; i < localStorage.length; i++)
    {
        var key = localStorage.key(i);
        var item = localStorage.getItem(key);
        var tbag = JSON.parse(item);

        if (key === "kosaricaCount" || tbag.tbag_id === undefined)
        {
            continue;
        }

        ids[String(key)] = String(tbag.count);
    }

    var idsJSON = JSON.stringify(ids);
    $( '#ids-blagajna' ).val(idsJSON);
});

window.onload = function ()
{
    set_table_values(no_shipping, shipping);
};

function set_table_values(no_shipping, shipping) {
    $( '#total_no_shipping' ).text(String(no_shipping.toFixed(2)).concat('€'));

    if (no_shipping != 0) {
        $('#shipping').text(String(shipping.toFixed(2)).concat('€'));
        $('#total').text(String((no_shipping + shipping).toFixed(2)).concat('€'));
    }
    else {
        $('#shipping').text(String(no_shipping.toFixed(2)).concat('€'));
        $('#total').text(String(no_shipping.toFixed(2)).concat('€'));
    }
}

function shipping_click()
{
    shipping = 2.5;

    set_table_values(no_shipping, shipping);
}

function no_shipping_click()
{
    shipping = 0;

    set_table_values(no_shipping, shipping);
}

function calculate_total_no_shipping()
{
    var total = 0;

    for (var i = 0; i < localStorage.length; i++)
    {
        var key = localStorage.key(i);
        var item = localStorage.getItem(key);
        var tbag = JSON.parse(item);

        if (key === "kosaricaCount" ||
            tbag.tbag_id === undefined)
        {
            continue;
        }

        total += tbag.tbag_price * tbag.count;
    }

    return total;
}