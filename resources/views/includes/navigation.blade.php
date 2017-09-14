<!-- Navigation -->
<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{ url('/') }}">
                <img alt="Brand" src="{{ asset('images/logo.png') }}">
            </a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li>
                    <a class="navbar-item" href="{{ url('/') }}">Torbice</a>
                </li>
                <li>
                    <a class="navbar-item" href="{{ url('/') }}">O nas</a>
                </li>
            </ul>
            <form action="{{ url('kosarica') }}" method="get">
                <input id="button-kosarica" class="btn btn-default navbar-btn navbar-right" type="submit" value="Košarica (0)" />
            </form>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>