/**
 * Created by ziga on 25-Aug-17.
 */

$( "#blagajna-form" ).submit(function (event) {
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

    for (var i = 0; i < localStorage.length; i++){
        var key = localStorage.key(i);
        var item = localStorage.getItem(key);
        var tbag = JSON.parse(item);

        if (key === "kosaricaCount")
        {
            continue;
        }

        ids[String(key)] = String(tbag.count);
    }

    var idsJSON = JSON.stringify(ids);

    $('<input />').attr('type', 'hidden')
        .attr('name', 'ids')
        .attr('value', idsJSON)
        .appendTo('#blagajna-form');
});