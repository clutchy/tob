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

    set_button_kosarica(localStorage["kosaricaCount"]);
}

function set_button_kosarica(num)
{
    buttonKosarica.attr('value', 'Kosarica('.concat(num).concat(')'));
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

/*
 * Adds or removes a single tbag
 */
function add_tbag(tbagJSON, count)
{
    var tbag = JSON.parse(tbagJSON);

    tbag.count = String(count);

    if (localStorage_is_supported()) {
        var bag = localStorage.getItem(String(tbag.tbag_id));
        var inc;

        if (parseInt(count) >= 0)
        {
            inc = 1;
        }
        else
        {
            inc = -1;
        }

        if (!bag) {
            localStorage["kosaricaCount"] = parseInt(localStorage["kosaricaCount"]) + parseInt(inc);
            localStorage.setItem(String(tbag.tbag_id), JSON.stringify(tbag));

            set_button_kosarica(localStorage.kosaricaCount);

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

function empty_basket() {
    if (!localStorage_is_supported()) {
        return;
    }

    localStorage.clear();
    localStorage["kosaricaCount"] = 0;

    set_button_kosarica(localStorage.kosaricaCount);

    alert("Hvala za naročilo. Vaš TOB:)")
}