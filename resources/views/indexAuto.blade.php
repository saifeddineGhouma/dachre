@extends('layouts.app1')

@section('content')




<div class="container">
 <div class="row">
    <div class="col-md-4 col-md-offset-10">
<!--         <a href="{{route('autos.create')}}" class="btn btn-success">Nouveau Contrat</a>
 -->        <a href="autos/compagnie" class="btn btn-success">Nouveau Contrat</a>

    </div>
</div>

<div class="row">
        <div class="col-md-12 ">
            <h4>Recherche Rapide</h4>
            <div class="col-lg-12">
                <table id="example" class="display" style="width:100%">
        <thead>
            <tr>

                 <th>{{$contrats->count()}}</th>
                <th>Assuré(e)</th>
               
                <th>CIN client(e)</th>
                
                  <th>Etat</th>
               <th> Action</th>
                
            </tr>
        </thead>
        <tbody>
             @foreach($contrats as $contrat)
            <tr>
                <td>{{$contrat->numero}}</td>
                <td>{{$contrat->assureur->nom}}</td>
                <td>{{$contrat->client->cin}}</td>
                 
                 
                  <td> @if ($contrat->etat =="0")
                            <a href="#exampleModal{{$contrat->id}}" data-toggle="modal" data-target="#exampleModal{{$contrat->id}}"> en cours</a> 
                          @elseif($contrat->etat  =="1")
                           <a href="#exampleModal{{$contrat->id}}" data-toggle="modal" data-target="#exampleModal{{$contrat->id}}">  Resilier </a>
                           @else ($contrat->etat  =="2")
                           <a href="#exampleModal{{$contrat->id}}" data-toggle="modal" data-target="#exampleModal{{$contrat->id}}">  Suspendu</a>
                        @endif

                   </td>
                   
                  
                   <td>

                    <a href="{{route('autos.show',$contrat->id)}}" style="padding-left: 5px"><span class="glyphicon glyphicon-eye-open"></span></a>
                    <a href="{{route('autos.edit',$contrat->id)}}" style="padding-left: 5px"><span class="glyphicon glyphicon-pencil"></span></a> 

                  
 
                   </td>

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
                   <label><input type="radio" value="0" onclick="this.form.submit()" name="etat"  @if ($contrat->etat  =="0") checked @endif>En Cour </label>
              </div>
           <div class="radio">
                 <label><input type="radio"value="1" onclick="this.form.submit()" name="etat" @if ($contrat->etat  =="1") checked @endif > Resilier</label>
            </div>
        <div class="radio">
               <label><input type="radio" value="2"  onclick="this.form.submit()" name="etat" @if ($contrat->etat  =="2") checked @endif> Suspendu</label>
       </div>
        </form>
      </div>
      
    </div>
  </div>
</div>
@endforeach
@endsection
