/**
 * Created by ziga on 15-Aug-17.
 */

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