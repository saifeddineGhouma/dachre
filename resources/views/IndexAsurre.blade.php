@extends('layouts.app1')

@section('content')




<div class="container">
 <div class="row">
    <div class="col-md-4 col-md-offset-10">
<!--         <a href="{{route('autos.create')}}" class="btn btn-success">Nouveau Contrat</a>

 -->        <!--a href="{{url('create',$assureur->nom)}}" class="btn btn-success">Nouveau Contrat</a-->

<div class="dropdown">
  <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Nouveau Contrat
  <span class="caret"></span></button>
  <ul class="dropdown-menu">
  
    <li><a href="{{url('create/autos',$assureur->nom)}}">Autos/2 Roues</a></li>
      <li><a href="{{url('create/rds',$assureur->nom)}}">RDS</a></li>
    <!--li><a href="#">JavaScript</a></li-->
  </ul>
</div>
    </div>
 </div>   
<div class="row">
        <div class="col-md-12 ">
            <h4>Recherche Rapide</h4>
            <div class="col-lg-12">
                <table id="example" class="display" style="width:100%">
        <thead>
            <tr>
                
                <th>Assuré(e)</th>
                <th>Numéro de contrat</th>
                <th>CIN client(e)</th>
                 <th>Type</th>
                  <th>Etat</th>
               <th> Changament Etat  </th>
                
            </tr>
        </thead>
        <tbody>
             @foreach($contrats as $contrat)
            <tr>
                <td><a href="">{{$contrat->numero}}</a></td>
                <td>{{$contrat->numero}}</td>
                <td>{{$contrat->client->cin}}</td>
                 <td>{{$contrat->type}}</td>
                  <td> @if ($contrat->etat =="0")
                             en cours
                          @elseif($contrat->etat  =="1")
                             Resilier
                           @else ($contrat->etat  =="2")
                            suspendu
                        @endif

                   </td>
                  <td><button class="btn btn-info"type="button" data-toggle="modal" data-target="#exampleModal{{$contrat->id}}" >changer</button></td>
                
            </tr>
           @endforeach
            
            
            
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
@foreach($contrats as $contrat)

<div class="modal fade" id="exampleModal{{$contrat->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title center" id="exampleModalLabel">modifer Etat contrat</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <form method="post" action="{{url('changerEtat/'.$contrat->id)}}">
             {{ csrf_field() }}
                <div class="radio">
                   <label><input type="radio" value="0" name="etat"  @if ($contrat->etat  =="0") checked @endif>En Cours </label>
              </div>
           <div class="radio">
                 <label><input type="radio"value="1" name="etat" @if ($contrat->etat  =="1") checked @endif > Resilier</label>
            </div>
        <div class="radio">
               <label><input type="radio" value="2"name="etat" @if ($contrat->etat  =="2") checked @endif> Suspendu</label>
       </div>
              <button type="submit" class="btn btn-primary">Modifier</button>
        </form>
      </div>
      <!--div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div-->
    </div>
  </div>
</div>
@endforeach
@endsection
