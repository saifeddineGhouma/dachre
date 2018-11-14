<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    
    <!-- Styles -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet">
    <style>
     .show{
            text-align: left;
        }
    .dropdown-submenu {
    position: relative;
    }
    .dropdown-submenu .dropdown-menu {
    top: 0;
    left: 100%;
    margin-top: -1px;
    }
    </style>
    
    
  </head>
  <body>
    <div id="app">
      <div class="row">
        <!-- <div class="col-lg-2 ">
          <img src="{{asset('images/star.png')}}" style="height: 90px;">
        </div> -->
        <div class="col-md-6">
          
          @if (isset($_GET['cp']))
          @if($_GET['cp']=="Star")
          <img style="height: 112px;width: 200px; margin-left: 20px; margin-top: 20px;"src="{{asset('images/star.png')}}">
             </br><span style="padding-left: 193px;">281</span>
          @endif
          @if($_GET['cp']=="Salim")
          <img style="height: 112px;width: 200px; margin-left: 20px; margin-top: 20px; "src="{{asset('images/salim.png')}}">
           </br><span style="padding-left: 193px;">216</span>
          @endif
          @if($_GET['cp']=="Maghrbia")
          <img style="height: 112px;width: 200px; margin-left: 20px; margin-top: 20px;"src="{{asset('images/magh.png')}}">
           </br><span style="padding-left: 193px;">87Z</span>
          @endif
          @if($_GET['cp']=="Ctama")
          <img style="height: 112px;width: 200px; margin-left: 20px; margin-top: 20px;"src="{{asset('images/Ctama.png')}}">
           </br><span style="padding-left: 193px;">58/164</span>
          @endif
          @if($_GET['cp']=="Carte")
          <img style="height: 112px;width: 200px; margin-left: 20px; margin-top: 20px; "src="{{asset('images/Carte.png')}}">
           </br><span style="padding-left: 193px;">152</span>
          @endif
          @if($_GET['cp']=="Comar")
          <img style="height: 112px;width: 200px; margin-left: 20px; margin-top: 20px;"src="{{asset('images/Comar.png')}}">
           </br><span style="padding-left: 193px;">519</span>
          @endif
          @if($_GET['cp']=="GAT")
          <img style="height: 112px;width: 200px; margin-left: 20px; margin-top: 20px; "src="{{asset('images/gat.png')}}">
           </br><span style="padding-left: 193px;">202</span>
          @endif
          @elseif(isset($nom))
          @if($nom=="star")
          <img style="height: 112px;width: 200px; margin-left: 20px; margin-top: 20px;"src="{{asset('images/star.png')}}">
           </br><span style="padding-left: 193px;">281</span>
          @endif
          @if($nom=="Salim")
          <img style="height: 112px;width: 200px; margin-left: 20px; margin-top: 20px;"src="{{asset('images/salim.png')}}">
           </br><span style="padding-left: 193px;">216</span>
          @endif
          @if($nom=="Maghrbia")
          <img style="height: 112px;width: 200px; margin-left: 20px; margin-top: 20px; "src="{{asset('images/magh.png')}}">
           </br><span style="padding-left: 193px;">87Z</span>
          @endif
          
          @if($nom=="Ctama")
          <img style="height: 112px;width: 200px; margin-left: 20px; margin-top: 20px; "src="{{asset('images/Ctama.png')}}">
           </br><span style="padding-left: 193px;">58/164</span>
          @endif
          @if($nom=="Carte")
          <img style="height: 112px;width: 200px; margin-left: 20px; margin-top: 20px; "src="{{asset('images/Carte.png')}}">
           </br><span style="padding-left: 193px;">152</span>
          @endif
          @if($nom=="Comar")
          <img style="height: 112px;width: 200px; margin-left: 20px; margin-top: 20px; "src="{{asset('images/Comar.png')}}">
           </br><span style="padding-left: 193px;">519</span>
          @endif
          @if($nom=="GAT")
          <img style="height: 112px;width: 200px; margin-left: 20px; margin-top: 20px; "src="{{asset('images/gat.png')}}"s>
           </br><span style="padding-left: 193px;">202</span>
          @endif
          @endif
          
          
        </div>
        <div class="col-md-6">
          <a href="{{route('home')}}">
            <img src="{{asset('images/logo.png')}}" style="height: 100px; width: 200px; margin-right: 20px; margin-top: 30px ; float:right">
          </a>
        </div>
      </div>
      <nav class="navbar navbar-default">
        <div class="container-fluid">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            </button>
            <!--a class="navbar-brand" href="#">Star</a-->
          </div>
          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-left" style="margin-top:13px;">
              <li>
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" v-pre>Gestion des Contrats
                  <span class="caret"></span>
                </a>
                <ul class="dropdown-menu">
                  <li><a href="{{route('autos.index')}}" tabindex="-1">Automobile/2 Roues</a></li>
                  <!--li><a href=""tabindex="-1" >2 Roues</a></li-->
                  <li><a href="{{route('rds.index')}}"tabindex="-1" >Risques Divers</a></li>
                  <li><a href="#">Groupe Maladie</a></li>
                  
                  <li><a href="">Vie</a></li>
                </ul>
              </li>
              <li><a href="">Gestion des finances</a></li>
              <li><a href="">Gestion de Comptabilité</a></li>
            </ul>
            <form class="navbar-form navbar-right" method="GET" action="{{url('/serche')}}">
              <div class="form-group">
                <input type="text" class="form-control" name="recherche" placeholder="Rechercher">
              </div>
              <button type="submit" class="btn btn-default"><img src="{{asset('images/search.png')}}" style="height: 20px;width: 20px"></button>
            </form>
            
            </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
          </nav>
          @yield('content')
        </div>
        <!-- Scripts -->
        
        
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
        
        <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
        <script src="{{ asset('js/app.js') }}"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
        <script type="text/javascript">
        @if(Session::has('message'))
        
        toastr.success("{{ Session::get('message') }}");
        @endif
        </script>
        <script type="text/javascript">
        @if(Session::has('edit'))
        
        toastr.success("{{ Session::get('edit') }}");
        @endif
        </script>
        <script src="//cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js" type="text/javascript"></script>
        <script type="text/javascript">
        $(document).ready(function() {
        $('#example').DataTable();
        } );
        </script>
        <script>
        $(document).ready(function(){
        $('.dropdown-submenu a.test').on("click", function(e){
        $(this).next('ul').toggle();
        e.stopPropagation();
        e.preventDefault();
        });
        });
        </script>
      </body>
    </html>