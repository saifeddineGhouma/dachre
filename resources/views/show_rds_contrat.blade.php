@extends('layouts.app1')
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script type="text/javascript">
function create_champ(i) {
var i2 = i + 1;
document.getElementById('leschamps_'+i).innerHTML = '<h3>Assuré</h3><div class="col-md-12"><div class="form-group col-md-6 "><label class="col-2 col-form-label"> Identité Assuré :</label><div class="col-10"><input class="form-control" type="text" name="produit['+i+'][0]" ></div></div> <div class="form-group col-md-6 "><div class="form-group col-md-12 "> <label class="col-2 col-form-label"> N°CIN/RC :</label><div class="col-10"><input class="form-control" type="text" name="produit['+i+'][1]" ></div></div></div ><div class="col-md-12"><div class="form-group col-md-6 "><label class="col-2 col-form-label"> Tel :</label><div class="col-10"><input class="form-control" type="text" name="produit['+i+'][2]" ></div></div> <div class="form-group col-md-6 "><div class="form-group col-md-12 "> <label class="col-2 col-form-label"> Adresse :</label><div class="col-10"><input class="form-control" type="text" name="produit['+i+'][3]" ></div></div></div ></div><br></span> ';
}
</script>
<style type="text/css">
.btn-radio {
width: 100%;
}
.img-radio {
opacity: 0.5;
margin-bottom: 5px;
}
.space-20 {
margin-top: 20px;
}
</style>
@section('content')
<div class="container " >
  <div class="row">
    <div class="col-md-12">
      <div class="panel panel-primary">
        <div class="panel-heading">
          <h3 class="text-center" > Afficher Contrat Automobiles :{{$contrat->numero}} </h3>
        </div>
        <div class="panel-body"><h3 style="color: #000;text-align: center;">
       
           <div class="list-group"  >
             @foreach($contrat->rds as $rd)
                <div  class="list-group-item list-group-item-info  ">RD</div>
                <div  class="list-group-item"><span style="float: left">Nature de Risque</span>{{$rd->nature}}</div>
                 @endforeach
              </div>
      
         
         
          <div class="row">
            <div class="col-md-12">
              <div class="list-group"  >
                <div  class="list-group-item list-group-item-info  ">assureur</div>
                <div  class="list-group-item  "><span style="float: left">Nom de agence :</span>{{$contrat->assureur->nom}}</div>
                
              </div>
            </div>
            <div class="col-md-12">
              <div class="list-group"  >
                <div  class="list-group-item list-group-item-info">Client</div>
                <div  class="list-group-item  "><span style="float: left">identite:</span><span>{{$contrat->client->identite}}</span></div>
                <div  class="list-group-item " > <span style="float: left">Cin:</span>{{$contrat->client->cin}}</div>
                <div  class="list-group-item "> <span style="float: left">Telephone:</span>{{$contrat->client->tel}}</div>
                <div  class="list-group-item "><span style="float: left">Adresse:</span>{{$contrat->client->adresse}}</div>
              </div>
            </div>
          </div>

               @if($contrat->primes->count())
               <div class="list-group">
                <div  class="list-group-item list-group-item-info">Prime</div>
          <table class="table">
            <thead>
              <th>prix</th>
              <th>date de prime</th>
              <th>espece</th>
              <th>check</th>
             
              
            </thead>
            <tbody>
              @foreach($contrat->primes as $prim)
              <tr>
                
                <td> {{$prim->prix}}</td>
                <td> {{$prim->date_prime}}</td>
                <td> {{$prim->espece}}</td>
                <td> {{$prim->check}}</td>
                
              </tr>
              @endforeach
            </tbody>
          </table>

       </div>
          @endif
        </div>
        <div class="panel-footer"><h3 style="color: #000;text-align: center;">
          Afficher Contrat Automobiles</h3>
        </div>
        
        
      </div>
    </div>
  </div>
  
</div>
@endsection