/**
 * Created by ziga on 18-Aug-17.
 */

var buttonKosarica = $( '#button-kosarica' );

if (localStorage_is_supported())
{
    if(!localStorage["kosaricaCount"])
    {
        localStorage["kosaricaCount"] = 0;
    }

    buttonKosarica.attr('value', 'Kosarica('.concat(localStorage["kosaricaCount"]).concat(')'));
}

function localStorage_is_supported() {
    if (localStorage)
    {
        return true;
    }
    else
    {
        alert('Your browser is not supported');
        return false;
    }
}

function add_tbag(tbagJSON, count)
{
    var tbag = JSON.parse(tbagJSON);

    tbag.count = String(count);

    if (localStorage_is_supported()) {
        var bag = localStorage.getItem(String(tbag.tbag_id));

        if (!bag) {
            localStorage["kosaricaCount"] = parseInt(localStorage["kosaricaCount"]) + 1;
            localStorage.setItem(String(tbag.tbag_id), JSON.stringify(tbag));

            buttonKosarica.attr('value', '');
            buttonKosarica.attr('value', 'Kosarica('.concat(localStorage.kosaricaCount).concat(')'));

            return true;
        }
    }

    return false;
}

function kupi_click(tbagJSON, count)
{
    add_tbag(tbagJSON, count);
}


function kosarica_click(tbagJSON, count) {
    if (add_tbag(tbagJSON, count)) {
        alert('Izdelek je bil dodan v košarico');
    }
    else {
        alert('Izdelek je že v košarici');
    }
}