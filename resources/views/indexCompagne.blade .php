@extends('layouts.app1')

@section('content')




<div class="container">
 <div class="row">
    <div class="col-md-4 col-md-offset-10">
<!--         <a href="{{route('autos.create')}}" class="btn btn-success">Nouveau Contrat</a>
 -->        <a href="compagnie" class="btn btn-success">Nouveau Contrat</a>

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
                 <th>Asurreur</th>
                
            </tr>
        </thead>
        <tbody>
             @foreach($contrats as $contrat)
            <tr>
                <td><a href="">{{$contrat->numero}}</a></td>
                <td>{{$contrat->numero}}</td>
                <td>{{$contrat->client->cin}}</td>
                 <td>{{$contrat->assureur->nom}}</td>
                
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
