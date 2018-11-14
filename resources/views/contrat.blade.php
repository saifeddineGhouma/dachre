@extends('layouts.app1')

@section('content')

<div class="row">
        <div class="col-lg-2 ">
            <img src="{{asset('images/logo.png')}}" style="height: 90px;">
        </div>
        <div class="col-lg-2 col-lg-offset-8">
            <img src="{{asset('images/star.png')}}" style="height: 90px;">
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
      <a class="navbar-brand" href="#">Star</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        
        
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Automobile <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">One more separated link</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">I.R.D.SS <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">One more separated link</a></li>
          </ul>
        </li>
        <li><a href="#">Vie</a></li>
      </ul>
      <form class="navbar-form navbar-right">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>
      
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>


<div class="container">
    <h4>Contrats de l'Assuré(e): Hermione Butler SOS</h4>
    
<div class="row">
        <div class="col-md-12 ">
            <h4>Quick search</h4>
            <div class="col-lg-12">
                <table id="example" class="display" style="width:100%">
        <thead>
            <tr>
                
                <th>Contrats</th>
                <th>Etat</th>
                
                
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><a href="">XXXX</a></td>
                
                <td>xxx</td>
                
            </tr>
            <tr>
                <td><a href="">XXXXX</a></td>
                
                <td>En cours</td>
                
            </tr>
            <tr>
                <td><a href="">XXXXX</a></td>
                
                <td>En cours</td>
                
            </tr>
           
            
            
        </tbody>
        <tfoot>
            <tr>
                
                <th>Assuré(e)</th>
                <th>Nombre de contrat</th>
                
            </tr>
        </tfoot>
    </table>
           </div>
        </div>
    </div>

    
</div>
@endsection
