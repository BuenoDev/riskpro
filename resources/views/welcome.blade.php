<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Risk Pro</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        {{-- bootstrap 4 cdn --}}
        <script src="./js/test.js"></script>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
        
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    
    
        <style>
            .navbar{
                position: fixed;
                width: 100%;
                z-index: 10;
            }
            .page-footer{
                background-color: #343a40;
                color: aliceblue
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            {{-- Navbar --}}
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <a class="navbar-brand" href="/">Risk Pro</a>
                <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="collapsibleNavId">
                    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Sobre nos <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Vendedores</a>
                        </li>
                        <li class="nav-item">
                                <a class="nav-link" href="#">Empresas</a>
                            </li>
                        {{-- <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                            <div class="dropdown-menu" aria-labelledby="dropdownId">
                                <a class="dropdown-item" href="#">Action 1</a>
                                <a class="dropdown-item" href="#">Action 2</a>
                            </div>
                        </li> --}}
                    </ul>
                    <div class="pull-right">
                            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                                    <li class="nav-item active">
                                        <a class="nav-link" href="#">Login <span class="sr-only">(current)</span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Cadastro</a>
                                    </li>
                                 
                                    {{-- <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                                        <div class="dropdown-menu" aria-labelledby="dropdownId">
                                            <a class="dropdown-item" href="#">Action 1</a>
                                            <a class="dropdown-item" href="#">Action 2</a>
                                        </div>
                                    </li> --}}
                    </div>
                    {{-- <form class="form-inline my-2 my-lg-0">
                        <input class="form-control mr-sm-2" type="text" placeholder="Search">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                    </form> --}}
                </div>
            </nav>
            {{-- img --}}
            {{-- <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-1-12">
                            
                        <img src="{{ URL::asset('/img/vendor.jpg') }}" class="img-fluid ${3|rounded-top,rounded-right,rounded-bottom,rounded-left,rounded-circle,|}" alt="">
                    </div>
                </div>
            </div><br> --}}
            <div class="container-fluid">
                          <div class="jumbotron">
                <h1 class="display-3">Lorem ipsum</h1>
                <p class="lead">Lorem ipsum sis amet</p>
                <hr class="my-2">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit modi quisquam molestias doloremque delectus, ipsam aut a in praesentium iure dolor numquam qui officiis voluptatum nam beatae quam ullam libero.</p>
                <p class="lead">
                    <a class="btn btn-primary btn-lg" href="Jumbo action link" role="button">Jumbo action name</a>
                </p>
            </div>
            {{-- Cards --}}
            <div class="container-fluid">
                <div class="row">
                    {{-- card --}}
                    <div class="col-sm-4">
                            <div class="card text-center">
                            <img class="card-img-top" src="{{ URL::asset('/img/vendor.jpg') }}" alt="">
                            <div class="card-body">
                                <h4 class="card-title">Lorem Ipsum</h4>
                                <h5 class="card-title">Lorem Ipsum</h5>
                                <p class="card-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptatem non, officiis, id nam beatae soluta temporibus recusandae commodi assumenda porro obcaecati alias. Dolore voluptatum expedita illo dignissimos nobis. Minus, assumenda.</p>
                            </div>
                            </div>
                        </div>
                    {{-- card --}}
                    <div class="col-sm-4">
                            <div class="card text-center">
                            <img class="card-img-top" src="{{ URL::asset('/img/vendor.jpg') }}" alt="">
                            <div class="card-body">
                                <h4 class="card-title">Lorem Ipsum</h4>
                                <h5 class="card-title">Lorem Ipsum</h5>
                                <p class="card-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptatem non, officiis, id nam beatae soluta temporibus recusandae commodi assumenda porro obcaecati alias. Dolore voluptatum expedita illo dignissimos nobis. Minus, assumenda.</p>
                            </div>
                            </div>
                        </div>
                    {{-- card --}}
                    <div class="col-sm-4">
                            <div class="card text-center">
                            <img class="card-img-top" src="{{ URL::asset('/img/vendor.jpg') }}" alt="">
                            <div class="card-body">
                                <h4 class="card-title">Lorem Ipsum</h4>
                                <h5 class="card-title">Lorem Ipsum</h5>
                                <p class="card-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptatem non, officiis, id nam beatae soluta temporibus recusandae commodi assumenda porro obcaecati alias. Dolore voluptatum expedita illo dignissimos nobis. Minus, assumenda.</p>
                            </div>
                            </div>
                        </div>
                           
                </div><br>
                <div class="row">
                        {{-- card --}}
                        <div class="col-sm-4">
                                <div class="card text-center">
                                <img class="card-img-top" src="{{ URL::asset('/img/vendor.jpg') }}" alt="">
                                <div class="card-body">
                                    <h4 class="card-title">Lorem Ipsum</h4>
                                    <h5 class="card-title">Lorem Ipsum</h5>
                                    <p class="card-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptatem non, officiis, id nam beatae soluta temporibus recusandae commodi assumenda porro obcaecati alias. Dolore voluptatum expedita illo dignissimos nobis. Minus, assumenda.</p>
                                </div>
                                </div>
                            </div>
                        {{-- card --}}
                        <div class="col-sm-4">
                                <div class="card text-center">
                                <img class="card-img-top" src="{{ URL::asset('/img/vendor.jpg') }}" alt="">
                                <div class="card-body">
                                    <h4 class="card-title">Lorem Ipsum</h4>
                                    <h5 class="card-title">Lorem Ipsum</h5>
                                    <p class="card-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptatem non, officiis, id nam beatae soluta temporibus recusandae commodi assumenda porro obcaecati alias. Dolore voluptatum expedita illo dignissimos nobis. Minus, assumenda.</p>
                                </div>
                                </div>
                            </div>
                        {{-- card --}}
                        <div class="col-sm-4">
                                <div class="card text-center">
                                <img class="card-img-top" src="{{ URL::asset('/img/vendor.jpg') }}" alt="">
                                <div class="card-body">
                                    <h4 class="card-title">Lorem Ipsum</h4>
                                    <h5 class="card-title">Lorem Ipsum</h5>
                                    <p class="card-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptatem non, officiis, id nam beatae soluta temporibus recusandae commodi assumenda porro obcaecati alias. Dolore voluptatum expedita illo dignissimos nobis. Minus, assumenda.</p>
                                </div>
                                </div>
                            </div>
                               
                    </div>
            </div>
           
            <br></div></div>
            <!-- Footer -->
    <footer class="page-footer font-small blue pt-4">

        <!-- Footer Links -->
        <div class="container-fluid text-center text-md-left">
    
          <!-- Grid row -->
          <div class="row">
    
            <!-- Grid column -->
            <div class="col-md-6 mt-md-0 mt-3">
    
              <!-- Content -->
              <h5 class="text-uppercase">Plataforma MasterMind</h5>
              <p>Solução Relacionamento em Negócios <br>
                    Avenida 7 Setembro <br>
                    Manejo <br>
                    Resende - RJ</p>
    
            </div>
            <!-- Grid column -->
    
            <hr class="clearfix w-100 d-md-none pb-3">
    
            <!-- Grid column -->
            <div class="col-md-3 mb-md-0 mb-3">
    
                <!-- Links -->
                <h5 class="text-uppercase">Contato</h5>
    
                <ul class="list-unstyled">
                    <li>
                        
                        <p>
                       
                            <a href="mailto:mastermind.resende@gmail.com">mastermind.resende@gmail.com</a>
                        </p>
                        <br>
                    </li>
                    <li >
                        <h6>Telefones</h6>
                        <ul class="list-unstyled">
                            <li> 12 9-9207-7973</li>
                            <li> 12 9-9207-7973 </li>
                        </ul>
                    </li>
                </ul>
    
              </div>
              <!-- Grid column -->
    
              <!-- Grid column -->
              <div class="col-md-3 mb-md-0 mb-3">
    
                <!-- Links -->
                {{-- <h5 class="text-uppercase">Contato</h5>
    
                <ul class="list-unstyled">
                    <li>
                        <i class="fas fa-mail-bulk    "></i>
                        <a href="mailto:mastermind.resende@gmail.com">mastermind.resende@gmail.com</a>

                    </li>
                </ul> --}}
    
              </div>
              <!-- Grid column -->
    
          </div>
          <!-- Grid row -->
    
        </div>
        <!-- Footer Links -->
    
        <!-- Copyright -->
        {{-- <div class="footer-copyright text-center py-3">© 2018 Copyright:
          <a href="https://mdbootstrap.com/education/bootstrap/"> MDBootstrap.com</a> --}}
        </div>
        <!-- Copyright -->
        
      </footer>
      <!-- Footer -->
        
        
    </body>
            
  
</html>
