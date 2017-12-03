<link rel="stylesheet" type="text/css" href="{{ asset('css/kosarica.css') }}">

<h5>Ime in priimek:</h5>
<p>{{ $name }}</p>
<h5>Ulica in hišna številka:</h5>
<p>{{ $address }}</p>
<h5>Poštna številka:</h5>
<p>{{ $post_number }}</p>
<h5>Pošta:</h5>
<p>{{ $post }}</p>
<h5>Telefonska številka:</h5>
<p>{{ $phone }}</p>
<h5>Dodatno sporočilo:</h5>
<p>{{ $extra_text }}</p>

<table id="cart" class="table table-hover table-condensed center">
    <thead>
    <tr>
        <th style="width:50%">Izdelek</th>
        <th style="width:10%">Cena izdelka</th>
        <th style="width:8%">Količina</th>
        <th style="width:22%" class="text-center">Cena</th>
        <th style="width:10%"></th>
    </tr>
    </thead>
    <tbody id="cart-items" style="border-bottom: 1px solid #000">
        @foreach($tbags as $tbag)
            <tr>
                <td data-th="Izdelek">
                    <div class="row">
                        <div class="col-sm-10">
                            <h4 class="nomargin">{{ $tbag[0]->tbag_name }}</h4>
                        </div>
                    </div>
                </td>
                <td data-th="Cena izdelka">{{ (string) number_format(floatval($tbag[0]->tbag_price), 2, '.', '') }}</td>
                <td data-th="Količina">
                    <p>{{ $tbag[1] }}</p>
                </td>
                <td data-th="Cena" class="text-center">{{ (string) number_format(floatval($tbag[0]->tbag_price) * floatval($tbag[1]), 2, '.', '') }}</td>
            </tr>
        @endforeach
    </tbody>
    <tfoot>
    </tfoot>
</table>

<p><strong>Skupaj: {{ (string) number_format(floatval($total), 2, '.', '') }}</strong></p>