
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>@yield('title','Inicio')</title>

    
    <!-- Custom styles for this template -->
    {!!Html::style('assets/css/bootstrap.min.css')!!}
    {!!Html::style('assets/css/admin.css')!!}
    <link href="navbar-fixed-top.css" rel="stylesheet">

  </head>

  <body>

    <!-- Fixed navbar -->
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          
          <a class="navbar-brand" href="#">Paladinus</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li >{!!link_to_route('home', $title = 'Inicio', null, $attributes = null)!!}</li>
             @if (Auth::check())
            <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Cadastros <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a>{!!link_to_route('funcionario.index', $title = 'Funcionarios', null, $attributes = null)!!}</a></li>
                <li role="separator" class="divider"></li>
                <li><a>{!!link_to_route('produto.index', $title = 'Produtos', null, $attributes = null)!!}</a></li>
              </ul>
            </li>            
            <li><a href="about">Sobre</a></li>
            <li><a href="contact">Contato</a></li>
            </ul>

            <ul class="nav navbar-nav navbar-right">

                    <li><a href="#">{{ Auth::user()->name }}</a></li>
                    <li><a href="/auth/logout">Logout</a></li>
            @endif
          </ul>
          
        </div><!--/.nav-collapse -->
      </div>
    </nav>
@section('principal')
    

@show

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="/assets/js/bootstrap.min.js"></script>

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
    <div class="navbar navbar-inverse navbar-fixed-bottom" role="navigation">

    <footer class="section section-primary">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <h1>Paladinus</h1>
                        
                    </div>
                    <div class="col-sm-6">
                        <p class="text-info text-right">
                            <br>
                            <br>
                        </p>
                        <div class="row">
                            <div class="col-md-12 hidden-lg hidden-md hidden-sm text-left">
                                <a href="#"><i class="fa fa-3x fa-fw fa-instagram text-inverse"></i></a>
                                <a href="#"><i class="fa fa-3x fa-fw fa-twitter text-inverse"></i></a>
                                <a href="#"><i class="fa fa-3x fa-fw fa-facebook text-inverse"></i></a>
                                <a href="#"><i class="fa fa-3x fa-fw fa-github text-inverse"></i></a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 hidden-xs text-right">
                                <a href="#"><i class="fa fa-3x fa-fw fa-instagram text-inverse"></i></a>
                                <a href="#"><i class="fa fa-3x fa-fw fa-twitter text-inverse"></i></a>
                                <a href="#"><i class="fa fa-3x fa-fw fa-facebook text-inverse"></i></a>
                                <a href="#"><i class="fa fa-3x fa-fw fa-github text-inverse"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        </div>
  </body>
</html>
