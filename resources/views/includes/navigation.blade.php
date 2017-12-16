<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{ url('/') }}">Tobak torbice TOB</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class="@yield('active-class')"><a href="{{ url('/') }}">Torbice</a></li>
                <li><a href="{{ url('/kontakt') }}">Kontakt</a></li>
                <li><a href="{{ url('/o-nas') }}">O nas</a></li>
            </ul>
            <form class="navbar-form navbar-right" action="{{ url('kosarica') }}" method="get">
                <input id="button-kosarica" class="btn btn-default navbar-btn navbar-right" type="submit" value="Košarica (0)" />
            </form>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>