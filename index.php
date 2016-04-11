<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Teste Fita K Sete</title>

    <!-- CSS Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/principal.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <!-- Fonte -->
    <link href='http://fonts.googleapis.com/css?family=Lato&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
  </head>
  <body>
    <!-- Cabecalho -->
    <header class="cabecalho navbar-fixed-top">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
              <h3>Barra de Música</h3>
          </div>
        </div>
      </div>
    </header>

    <!-- Logo -->
    <section class="logo">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
              <div class="imagem-logo">
                <img src="img/logo-fran.png">
              </div>
          </div>
          <div class="col-md-8">
          </div>
        </div>
      </div>
    </section>

    <!-- Menu -->
    <section class="menu">
      <nav class="navbar navbar-default retirar-fundo">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="">Início</a>
          </div>

          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">A Fita <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="#sobre">Sobre</a></li>
                  <li><a href="#parceiros">Parceiros</a></li>
                </ul>
              </li>
              <li><a href="#programacao">Programação</a></li>
              <li><a href="#podcast">Podcast</a></li>
              <li><a href="#contato">Contato</a></li>
            </ul>
          </div>
        </div>
      </nav>
    </section>

    <!-- Slide -->
    <section>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
              <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
              </ol>

              <div class="carousel-inner" role="listbox">
                <div class="item active">
                  <img src="img/banner1.jpg" alt="Banner1">
                  <div class="carousel-caption">
                    <h3>É só dar Play e mergulhar no som!</h3>
                    <p>Este é um paragrafo de teste.</p>
                  </div>
                </div>
                <div class="item">
                  <img src="img/banner2.jpg" alt="Banner2">
                  <div class="carousel-caption">
                    <h3>Let's Dance (Tributo a David Bowie)</h3>
                    <p>Este é um paragrafo de teste.</p>
                  </div>
                </div>
                <div class="item">
                  <img src="img/banner3.jpg" alt="Banner3">
                  <div class="carousel-caption">
                    <h3>Crianças realizam evento pela paz mundial!</h3>
                    <p>Este é um paragrafo de teste.</p>
                  </div>
                </div>
              </div>

              <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left seta-slide" aria-hidden="true"></span>
                <span class="sr-only">Anterior</span>
              </a>
              <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right seta-slide" aria-hidden="true"></span>
                <span class="sr-only">Próximo</span>
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Sobre -->
    <section>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <a name="sobre"><h3>Sobre</h3></a>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse suscipit fermentum est a finibus. Fusce semper ex nec ex finibus, quis tincidunt sapien iaculis. Suspendisse congue sodales mi, quis elementum orci tempor quis. In viverra eleifend lacus. Morbi a purus viverra, mattis quam ut, accumsan augue. Donec ullamcorper scelerisque dolor at consequat. Vivamus fermentum bibendum mi quis mattis. Vestibulum nibh nisi, lobortis eleifend tincidunt vitae, venenatis eget velit. Proin in sem odio. Suspendisse potenti. Morbi et metus vulputate, laoreet risus a, cursus erat. Pellentesque ut accumsan risus. Ut mollis, nibh vel luctus gravida, felis ligula lacinia felis, nec egestas nibh urna ullamcorper lorem.</p>
          </div>
          <div class="col-md-6">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse suscipit fermentum est a finibus. Fusce semper ex nec ex finibus, quis tincidunt sapien iaculis. Suspendisse congue sodales mi, quis elementum orci tempor quis. In viverra eleifend lacus. Morbi a purus viverra, mattis quam ut, accumsan augue. Donec ullamcorper scelerisque dolor at consequat. Vivamus fermentum bibendum mi quis mattis. Vestibulum nibh nisi, lobortis eleifend tincidunt vitae, venenatis eget velit. Proin in sem odio. Suspendisse potenti. Morbi et metus vulputate, laoreet risus a, cursus erat. Pellentesque ut accumsan risus. Ut mollis, nibh vel luctus gravida, felis ligula lacinia felis, nec egestas nibh urna ullamcorper lorem.</p>
          </div>
        </div>
      </div>
    </section>

    <!-- Parceiros -->
    <section>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <hr>
            <a name="parceiros"><h3>Parceiros</h3></a>
          </div>
        </div>
        <div class="row">
          <div class="col-md-3">
            <a href="#" class="thumbnail">
              <img src="img/parceiro1.jpg" alt="Parceiro1">
            </a>
          </div>

          <div class="col-md-3">
            <a href="#" class="thumbnail">
              <img src="img/parceiro1.jpg" alt="Parceiro1">
            </a>
          </div>

          <div class="col-md-3">
            <a href="#" class="thumbnail">
              <img src="img/parceiro1.jpg" alt="Parceiro1">
            </a>
          </div>

          <div class="col-md-3">
            <a href="#" class="thumbnail">
              <img src="img/parceiro1.jpg" alt="Parceiro1">
            </a>
          </div>
        </div>
      </div>
    </section>

    <!-- Programação -->
    <section>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <hr>
            <a name="programacao"><h3>Programação</h3></a>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="panel-group" id="accordion">
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">
                      0h - Elvis Forever
                    </a>
                  </h4>
                </div>
                <div id="collapse1" class="panel-collapse collapse">
                  <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                  sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
                  minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                  commodo consequat.</div>
                </div>
              </div>
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">
                    1h - I Am The Blues
                    </a>
                  </h4>
                </div>
                <div id="collapse2" class="panel-collapse collapse">
                  <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                  sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
                  minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                  commodo consequat.</div>
                </div>
              </div>
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">
                    2h - Mistério do Planeta
                    </a>
                  </h4>
                </div>
                <div id="collapse3" class="panel-collapse collapse">
                  <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                  sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
                  minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                  commodo consequat.</div>
                </div>
              </div>
            </div>
          </div>
        <div>
      </div>
    </section>

    <!-- Podcast -->
    <section>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <hr>
            <a name="podcast"><h3>Podcast</h3></a>
          </div>
        </div>
      </div>
    </section>

    <!-- Contato -->
    <section>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <hr>
            <a name="contato"><h3>Contato</h3></a>
          </div>
        </div>
        <div class="row">
          <div class="col-md-7">
            <form class="form-horizontal" role="form">
              <div class="form-group">
                <label class="control-label col-sm-3" for="nome">Seu Nome:</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" id="nome" placeholder="Informe um Nome">
                </div>
              </div>

              <div class="form-group">
                <label class="control-label col-sm-3" for="email">Seu Email:</label>
                <div class="col-sm-9">
                  <input type="email" class="form-control" id="email" placeholder="Informe um E-mail">
                </div>
              </div>

              <div class="form-group">
                <label class="control-label col-sm-3" for="telefone">Seu Telefone:</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" id="telefone" placeholder="Informe um Telefone">
                </div>
              </div>

              <div class="form-group">
                <label class="control-label col-sm-3" for="assunto">Assunto:</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" id="assunto" placeholder="Informe um Assunto">
                </div>
              </div>

              <div class="form-group">
                <label class="control-label col-sm-3" for="mensagem">Mensagem:</label>
                <div class="col-sm-9">
                  <textarea class="form-control" id="mensagem" placeholder="Informe uma Mensagem"></textarea>
                </div>
              </div>

              <div class="form-group"> 
                <div class="col-sm-offset-10 col-sm-2">
                  <button type="submit" class="btn btn-default">Enviar</button>
                </div>
              </div>
            </form>
          </div>
          <div class="col-md-5">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3704.808676647183!2d-46.55156358441705!3d-21.787660304372928!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94c9dd223cdb3bf7%3A0x2cf1a2cbdd3cacc9!2sR.+Ac%C3%A1cia%2C+Po%C3%A7os+de+Caldas+-+MG!5e0!3m2!1spt-BR!2sbr!4v1460393995477" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
          </div>
        </div>
      </div>
    </section>

    <!-- Rodapé -->
    <footer>
      <div class="container">
        <div class="row">
          <hr>
          <div class="col-md-6">
            <ul class="lista">
              <li>sobre</li>
              <li>parceiros</li>
              <li>programação</li>
              <li>podcast</li>
              <li>seja um parceiro</li>
            </ul>
          </div>
          <div class="col-md-6">
            <div class="social-media">
              <i class="fa fa-facebook-square"></i>
              <i class="fa fa-twitter-square"></i>
              <i class="fa fa-apple"></i>
              <i class="fa fa-soundcloud"></i>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="copyright">
              <h6>Todos os direitos reservados 2016 ® Fita K Sete</h6>
            </div>
          </div>
        </div>
      </div>
    </footer>

    <!-- JS Bootstrap -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>