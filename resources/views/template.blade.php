<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('titre')</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    {!! Html::style('https://netdna.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css') !!}
		{!! Html::style('https://netdna.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css') !!}
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
    <script>
        $(function() {
            $( "#datepicker" ).datepicker({
                dateFormat: "yy-mm-dd"
            });
        });
    </script>
    <style> textarea { resize: none; }
        .PAlert
        {
            background: none;
        }

    </style>

</head>
<body>
<nav class="navbar navbar-default">
    <div class="container-fluid" style="border-top:2px rgb(180,220,100) solid;">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" style="background-color:black; color:white; margin-right:2px;">À faire</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li onmouseover="this.style.background='lightgrey';" onmouseout="this.style.background='white';"> <!--class="active" --> <a href={{URL::to('/')}}>Ajouter <span class="sr-only">(current)</span></a></li>
                <li onmouseover="this.style.background='lightgrey';" onmouseout="this.style.background='white';"><a href={{URL::to('/list')}}>Voir mes tâches</a></li>
                <li onmouseover="this.style.background='lightgrey';" onmouseout="this.style.background='white';"><a href={{URL::to('/about')}}>À propos</a></li>

            </ul>

            <ul class="nav navbar-nav navbar-right">
                @if(auth()->guest())
                    @if(!Request::is('auth/login'))
                        <li onmouseover="this.style.background='lightgrey';" onmouseout="this.style.background='white';"><a href="{{ url('/auth/login') }}">S'identifier</a></li>
                    @endif
                    @if(!Request::is('auth/register'))
                        <li onmouseover="this.style.background='lightgrey';" onmouseout="this.style.background='white';"><a href="{{ url('/auth/register') }}">S'enregistrer</a></li>
                    @endif
                @else
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ auth()->user()->name }} <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li onmouseover="this.style.background='lightgrey';" onmouseout="this.style.background='white';"><a href="{{ url('/auth/logout') }}">Se déconnecter</a></li>
                        </ul>
                    </li>
                @endif
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>
@if(Session::has('flash_message'))
    <div class="alert alert-success" role="alert">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        {{Session::get('flash_message')}}
    </div>
@endif
@if(Session::has('flash_message_bad'))
    <div class="alert alert-danger" role="alert">
        <a class="close" data-dismiss="alert" aria-label="close">&times;</a>
        {{Session::get('flash_message_bad')}}
    </div>
@endif
@yield('contenu')

<script>
    $(document).ready(function() {
        $('.row').css({
            'margin-left': '0px',
            'margin-right': '0px',

        });
    });

</script>
</body>
</html>
