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

                 <th>numero contrat </th>
                <th>Type contrta </th>
               
                <th>client </th>
                <th> assureur</th>
                
                  <th>Etat</th>
               
                
            </tr>
        </thead>
        <tbody>
          @foreach($contrat_serche as $contrat)
            
            <tr>
                <td>{{$contrat->numero}}</td>
                <td>{{$contrat->type}}</td>
                <td>{{$contrat->client->identite}}</td>
                 
                 <td>{{$contrat->assureur->nom}}</td>
                  <td>
                    @if ($contrat->etat =="0")
                            <a href="#exampleModal{{$contrat->id}}" data-toggle="modal" data-target="#exampleModal{{$contrat->id}}"> en cours</a> 
                          @elseif($contrat->etat  =="1")
                           <a href="#exampleModal{{$contrat->id}}" data-toggle="modal" data-target="#exampleModal{{$contrat->id}}">  Resilier </a>
                           @else ($contrat->etat  =="2")
                           <a href="#exampleModal{{$contrat->id}}" data-toggle="modal" data-target="#exampleModal{{$contrat->id}}">  Suspendu</a>
                        @endif

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

@endsection
