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
<script type="text/javascript">
$(function () {
$('.btn-radio').click(function(e) {
$('.btn-radio').not(this).removeClass('active')
.siblings('input').prop('checked',false)
.siblings('.img-radio').css('opacity','0.5');
$(this).addClass('active')
.siblings('input').prop('checked',true)
.siblings('.img-radio').css('opacity','1');
});
});
</script>
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading"><h3 style="color: #000;text-align: center;">Creation Contrat Automobiles</h3></div>
                
                <form action="{{route('autos.store')}}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="panel-body" >
                        <input type="hidden" name="cp" value="@if (isset($_GET['cp'])){{$_GET['cp']}} @else {{$nom}} @endif">
                        <!-- <div class="col-md-12">
                            <div class="row">
                                <div class="col-xs-4">
                                    <img src="{{asset('images/star.png')}}" class="img-responsive img-radio">
                                    <button type="button" class="btn btn-primary btn-radio">Star</button>
                                    <input type="checkbox" id="left-item" class="hidden">
                                </div>
                                <div class="col-xs-4">
                                    <img src="{{asset('images/magh.png')}}" class="img-responsive img-radio">
                                    <button type="button" class="btn btn-primary btn-radio">Maghrbia</button>
                                    <input type="checkbox" id="middle-item" class="hidden">
                                </div>
                                <div class="col-xs-4">
                                    <img src="{{asset('images/salim.png')}}" class="img-responsive img-radio">
                                    <button type="button" class="btn btn-primary btn-radio">Salim</button>
                                    <input type="checkbox" id="right-item" class="hidden">
                                </div>
                            </div>
                        </div> -->
                        <div class="col-md-12">
                            <div class="form-group col-md-6  {{ $errors->has('numero') ? ' has-error' : '' }}">
                                <label for="example-text-input">N° Contrat : </label>
                                
                                <input class="form-control" type="text" name="numero" value="{{old('numero')}}"id="example-text-input">
                                @if ($errors->has('numero'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('numero') }}</strong>
                                </span>
                                @endif
                            </div>
                            <div class="form-group col-md-6  {{ $errors->has('type_auto') ? ' has-error' : '' }}">
                                <label for="example-text-input">Type Auto : </label>
                                
                                <select class="form-control"  name="type_auto">
                                    <option disabled selected>choisir Type Auto</option>
                                    <option value="Moteur ">Moteur</option>
                                    <option value="Voiture">Voiture</option>
                                    
                                    
                                </select>
                                @if ($errors->has('type_auto'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('type_auto') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        <div class=" col-md-12">
                            <div class="form-group col-md-4 {{ $errors->has('date') ? ' has-error' : '' }} ">
                                <label for="example-url-input" class="col-2 col-form-label">Date d'effet : </label>
                                <div class="col-10">
                                    <input class="form-control" type="date" name="date"value="{{old('date')}}"id="example-url-input">
                                    @if ($errors->has('date'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('date') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            
                            
                            
                            
                            <div class="form-group col-md-4  ">
                                <label for="example-date-input" class="col-2 col-form-label">Durée : </label>
                                <div class="col-10">
                                    <select class="form-control" id="sel1" name="duree">
                                        <option disabled selected>choisir duree</option>
                                        <option value="RA">Annuelle </option>
                                        <option value="S">Semestrielle </option>
                                        <option value="Fermer">Fermer</option>
                                        
                                    </select>
                                </div>
                            </div>
                            
                            <div class="form-group col-md-4 {{ $errors->has('echeance') ? ' has-error' : '' }}">
                                <label for="example-number-input" class="col-2 col-form-label">Echeance : </label>
                                <div class="col-10">
                                    <input class="form-control" type="date" value="{{old('echeance')}}"name="echeance" id="echeance">
                                    @if ($errors->has('echeance'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('echeance') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group col-md-4 {{ $errors->has('classe') ? ' has-error' : '' }} ">
                                <label for="example-text-input">Classe : </label>
                                
                                <input class="form-control" type="text" name="classe" value="{{old('classe')}}" id="example-text-input">
                                @if ($errors->has('classe'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('classe') }}</strong>
                                </span>
                                @endif
                            </div>
                            <div class="form-group col-md-4 {{ $errors->has('nbr_de_sinistre') ? ' has-error' : '' }} ">
                                <label for="example-text-input">Nbr de sinistre : </label>
                                
                                <input class="form-control" type="text" name="nbr_de_sinistre" value="{{old('nb_de_sinistre')}}" id="example-text-input">
                                @if ($errors->has('nbr_de_sinistre'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('nbr_de_sinistre') }}</strong>
                                </span>
                                @endif
                            </div>
                            <div class="form-group col-md-4 {{ $errors->has('nbr_de_sinistre') ? ' has-error' : '' }} ">
                                <label for="example-text-input">N° Châssis: </label>
                                
                                <input class="form-control" type="text" name="num_choissir" value="{{old('num_choissir')}}" id="example-text-input">
                                @if ($errors->has('nbr_de_sinistre'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('nbr_de_sinistre') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        <!-- <div class=" form-group col-md-12">
                            <span id="leschamps_1">
                                <h3> <a href="javascript:create_champ(1)">Assuré</a></h3>
                            </span>
                        </div> -->
                        <div class="col-md-12">
                            <h3 style="text-decoration:  underline;">Assuré</h3>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group col-md-4 {{ $errors->has('identite') ? ' has-error' : '' }}">
                                <label class="col-2 col-form-label"> Type de l'Assuré :</label>
                                <div class="col-10 ">
                                    <select class="form-control" name="type" id="type_personne">
                                        <option disabled selected>--coisir un Type--</option>
                                        <option value="Personne physique">Personne physique</option>
                                        <option value="Personne morale">personne morale </option>
                                        
                                    </select>
                                    
                                    @if ($errors->has('identite'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('identite') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group col-md-4 {{ $errors->has('identite') ? ' has-error' : '' }}">
                                <label class="col-2 col-form-label"> Identité de l'Assuré :</label>
                                <div class="col-10">
                                    <input class="form-control" type="text" value="{{old('identite')}}" name="identite" >
                                    @if ($errors->has('identite'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('identite') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            
                            
                            <!--div class="form-group col-md-4 RC ">
                                <div class="form-group col-md-12  ">
                                    <label class="col-2 col-form-label"> N°RC :</label>
                                    <div class="col-10">
                                        <input class="form-control" type="text" value="{{old('rc')}}" name="rc" >@if ($errors->has('rc'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('rc') }}</strong>
                                    </span>
                                    @endif
                                        
                                    </div>
                                </div>
                            </div -->
                            <div class="form-group col-md-4  " >
                                <div class="form-group col-md-12 {{ $errors->has('cin') ? ' has-error' : '' }} ">
                                    <label class="col-2 col-form-label" id="change_cin"> N° CIN/RC:</label>
                                    <div class="col-10">
                                        <input class="form-control" type="text" value="{{old('cin')}}" name="cin" >
                                        @if ($errors->has('cin'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('cin') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>
                            </div >
                        </div>
                        
                        <div class="col-md-10 offset-1">
                            
                            
                            
                        </div>
                        <div class="col-md-12">
                            <div class="form-group col-md-6 {{ $errors->has('tel') ? ' has-error' : '' }}">
                                <label class="col-2 col-form-label"> Tel :</label>
                                <div class="col-10">
                                    <input class="form-control" type="text" value="{{old('tel')}}" name="tel" >
                                    @if ($errors->has('tel'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('tel') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group col-md-6 ">
                                <div class="form-group col-md-12 {{ $errors->has('adresse') ? ' has-error' : '' }}">
                                    <label class="col-2 col-form-label"> Adresse :</label>
                                    <div class="col-10">
                                        <input class="form-control" type="text" value="{{old('adresse')}}" name="adresse" >
                                        @if ($errors->has('adresse'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('adresse') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>
                            </div >
                        </div>
                        <div class="col-md-12">
                            <h3 style="text-decoration:  underline;">Véhicule assuré</h3>
                            <span>  <button type="button" name="add" id="add_v" class="btn btn-success">Add Voiture</button></span>
                        </div>
                        <!--    premier div  -->
                        <div class="row" id="dynamic_field_v">
                            <div class="col-md-12" id="test"  >
                                <div class="form-group col-md-6 {{ $errors->has('immatriculation') ? ' has-error' : '' }}">
                                    <label class="col-2 col-form-label"> Immatriculation :</label>
                                    <div class="col-10" >
                                        <input class="form-control" type="text" name="immatriculation[]" >
                                        @if ($errors->has('immatriculation'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('immatriculation') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group col-md-6 ">
                                    <div class="form-group col-md-12 {{ $errors->has('mise_en_circulation') ? ' has-error' : '' }} ">
                                        <label class="col-2 col-form-label"> 1er mise en circulation :</label>
                                        <div class="col-10">
                                            <input class="form-control" type="date" name="mise_en_circulation[]" >
                                            @if ($errors->has('mise_en_circulation'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('mise_en_circulation') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                            <div class="col-md-12">
                                <div class="form-group col-md-6 {{ $errors->has('marque') ? ' has-error' : '' }}">
                                    <label class="col-2 col-form-label"> Marque :</label>
                                    <div class="col-10">
                                        <input class="form-control" type="text" name="marque[]" >
                                        @if ($errors->has('marque'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('marque') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group col-md-6 ">
                                    <div class="form-group col-md-12 {{ $errors->has('nbre_de_place') ? ' has-error' : '' }}">
                                        <label class="col-2 col-form-label"> Nbr de place :</label>
                                        <div class="col-10">
                                            <input class="form-control" type="text" name="nbre_de_place[]" >
                                            @if ($errors->has('nbre_de_place'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('nbre_de_place') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                    </div>
                                </div >
                            </div>
                            <div class="col-md-12">
                                <div class="form-group col-md-6 {{ $errors->has('puissance') ? ' has-error' : '' }}">
                                    <label class="col-2 col-form-label"> Puissance : (CV)</label>
                                    <div class="col-10">
                                        <input class="form-control" type="text" name="puissance[]" >
                                        @if ($errors->has('puissance'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('puissance') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group col-md-6 ">
                                    <div class="form-group col-md-12 {{ $errors->has('genre') ? ' has-error' : '' }}">
                                        <label class="col-2 col-form-label"> Genre :</label>
                                        <div class="col-10">
                                            
                                            <select class="form-control" name="genre[]">
                                                <option disabled selected >choisir genre </option>
                                                <option value="Voiture particulière">Voiture particulière</option>
                                                <option value="Voiture mixte">Voiture mixte</option>
                                                <option value="Utilitaire I">Utilitaire I</option>
                                                <option value="Utilitaire II">Utilitaire II</option>
                                                <option value="Engins de chantiers">Engins de chantiers</option>
                                                <option value="Tracteur agricole">Tracteur agricole</option>
                                                <option value="Moissonneuse batteuse">Moissonneuse batteuse</option>
                                                <option value="Taxi">Taxi</option>
                                                <option value="Auto-école">Auto-école</option>
                                            </select>
                                            @if ($errors->has('genre'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('genre') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                            <div class="form-group col-md-12">
                                
                                <label class="col-2 col-form-label"> Contrats/avenants :</label>
                                <div class="col-10 {{ $errors->has('garantie') ? ' has-error' : '' }}">
                                    <input class="form-control" type="file" name="garantie[]" >
                                    @if ($errors->has('garantie'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('garantie') }}</strong>
                                    </span>
                                    @endif
                                </div>
                                
                                
                            </div>
                            <!---  div_test -->
                        </div>
                        
                        
                        <div class="col-md-12">
                            <h4 style="text-decoration:  underline;"> Primes : (de chaque écheance)</h4>
                        </div>
                        <div class="col-md-12">
                            
                            <!---------     ajouter prime  -->
                            <table class="table table-bordered" id="dynamic_field">
                                <tr>
                                    <td><input type="date" name="name[]" placeholder="Enter your Name" class="form-control name_list" /></td>
                                    <td><input type="text" name="prix[]" placeholder="Enter prix prime" class="form-control name_list" /></td>
                                    <td><input type="text" name="espece[]" placeholder="Enter prix espece" class="form-control name_list" /></td>
                                    <td><input type="text" name="check[]" placeholder="Enter prix check" class="form-control name_list" /></td>
                                    <td><button type="button" name="add" id="add" class="btn btn-success">Add Prime</button></td>
                                </tr>
                            </table>
                            <!---------------------------     end ajouter prime        -->
                        </div>
                        <div class="col-md-12">
                            <h4 style="text-decoration:  underline;"> Observation :</h4>
                        </div>
                        <div class="form-group col-md-12{{ $errors->has('observation') ? ' has-error' : '' }} ">
                            
                            <div class="col-10">
                                <textarea class="form-control" id="exampleTextarea" name="observation" rows="3"></textarea>
                                @if ($errors->has('observation'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('observation') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="col-md-3 col-md-offset-9">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                        
                        
                        
                    </div>
                </form>
            </div>
        </div>
    </div>
    
</div>
<script type="text/javascript">
$(document).ready(function(){
///  star code date echance
$('#type_personne').change(function(){

if($(this).val()=="Personne physique"){

$('#change_cin').text('N° CIN :');
}else if($(this).val()=="Personne morale")
{


$('#change_cin').text('N° RC :');
}
});
$("#example-url-input").click(function(){

$('#sel1').change(function(){

////////////////////////////////   calculer date
var date = new Date($('#example-url-input').val());
var last6 = new Date(date.getFullYear(),date.getMonth()-5,0);
if(last6.getMonth()+1<=6)
{

var last6 =  new Date(last6.setFullYear(last6.getFullYear() + 1));
}
var last6 =  new Date(last6.setDate(Math.min(date.getDate(),last6.getDate())));



var last1 =  new Date(date.setFullYear (date.getFullYear () + 1));

var last1 = new Date(date.setDate (date.getDate () - 1));

///////////////////////////   end claculer date




////    code 0  pour jour et month
var monJour=new Map();
var monMois=new Map();
for(var i=10;i<=31;i++){
monJour.set(i,i);
}
monJour.set(1,"01");
monJour.set(2,"02");
monJour.set(3,"03");
monJour.set(4,"04");
monJour.set(5,"05");
monJour.set(6,"06");
monJour.set(7,"07");
monJour.set(8,"08");
monJour.set(9,"09");
monMois.set(1,"01");
monMois.set(2,"02");
monMois.set(3,"03");
monMois.set(4,"04");
monMois.set(5,"05");
monMois.set(6,"06");
monMois.set(7,"07");
monMois.set(8,"08");
monMois.set(9,"09");
monMois.set(10,"10");
monMois.set(11,"11");
monMois.set(12,"12");
//////  end code
if($(this).val()=="S")
{


$("#echeance").val(last6.getFullYear()+"-"+monMois.get(last6.getMonth()+1)+"-"+monJour.get(last6.getDate()-1));
}
else if($(this).val()=="RA")
{


$("#echeance").val(last1.getFullYear()+"-"+monMois.get(last1.getMonth()+1)+"-"+monJour.get(last1.getDate()));



}
else if($(this).val()=="Fermer")
{
//console.log("test");
$("#echeance").val(last1.getFullYear()+"-"+monMois.get(last1.getMonth()+1)+"-"+monJour.get(last1.getDate()));
//alert('teststs');
}




});


})
///   end code   date echance
var postURL = "<?php echo url('addmore'); ?>";
var i=1;
$('#add').click(function(){
i++;
$('#dynamic_field').append('<tr id="row'+i+'" class="dynamic-added"><td><input type="date" name="name[]" placeholder="Enter your Name" class="form-control name_list" /></td>  <td><input type="text" name="prix[]" placeholder="Enter prix  prime" class="form-control name_list" /></td> <td><input type="text" name="name[]" placeholder="Enter prix espece" class="form-control name_list" /></td>  <td><input type="text" name="prix[]" placeholder="Enter prix check" class="form-control name_list" /></td>  <td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></td></tr>');

});
$(document).on('click', '.btn_remove', function(){
var button_id = $(this).attr("id");
$('#row'+button_id+'').remove();
});
$.ajaxSetup({
headers: {
'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
}
});
$('#submit').click(function(){
$.ajax({
url:postURL,
method:"POST",
data:$('#add_name').serialize(),
type:'json',
success:function(data)
{
if(data.error){
printErrorMsg(data.error);
}else{
i=1;
$('.dynamic-added').remove();
$('#add_name')[0].reset();
$(".print-success-msg").find("ul").html('');
$(".print-success-msg").css('display','block');
$(".print-error-msg").css('display','none');
$(".print-success-msg").find("ul").append('<li>Record Inserted Successfully.</li>');
}
}
});
});
function printErrorMsg (msg) {
$(".print-error-msg").find("ul").html('');
$(".print-error-msg").css('display','block');
$(".print-success-msg").css('display','none');
$.each( msg, function( key, value ) {
$(".print-error-msg").find("ul").append('<li>'+value+'</li>');
});
}
});

</script>
<script type="text/javascript">
$(document).ready(function(){
var postURL = "<?php echo url('addmore'); ?>";
var i=1;
$('#add_v').click(function(){
i++;
//  $('#dynamic_field_v').append('<tr id="row'+i+'" class="dynamic-added"><td><input type="text" name="immatriculation[]"  class="form-control name_list" /></td><td><input type="date" name="mise_en_circulation[]"  class="form-control name_list" /></td>  <td><input type="text" name="marque[]"  class="form-control name_list" /></td>  <td><input type="text" name="nbre_de_place[]"  class="form-control name_list" /></td>  <td><input type="text" name="puissance[]"  class="form-control name_list" /></td>   <td><select class="form-control" name="genre[]"><option disabled selected >choisir genre </option><option value="Voiture particulière">Voiture particulière</option><option value="Voiture mixte">Voiture mixte</option><option value="Utilitaire I">Utilitaire I</option><option value="Utilitaire II">Utilitaire II</option><option value="Engins de chantiers">Engins de chantiers</option><option value="Tracteur agricole">Tracteur agricole</option><option value="Moissonneuse batteuse">Moissonneuse batteuse</option></select></td><td> <input class="form-control" type="file" name="garantie[]" ></td> <td> <button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></td></tr><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button>');
$('#dynamic_field_v').append('<div class="row'+i+'" ><div class="col-md-12" id="test"  > <div class="form-group col-md-6 "> <label class="col-2 col-form-label"> Immatriculation :</label> <div class="col-10" > <input class="form-control" type="text" name="immatriculation[]" ><span class="help-block"><strong></strong></span></div></div><div class="form-group col-md-6 "><div class="form-group col-md-12 "> <label class="col-2 col-form-label"> 1er mise en circulation :</label><div class="col-10"><input class="form-control" type="date" name="mise_en_circulation[]" ><span class="help-block"><strong></strong></span></div></div></div ></div>  <div class="col-md-12"><div class="form-group col-md-6 "><label class="col-2 col-form-label"> Marque :</label><div class="col-10"><input class="form-control" type="text" name="marque[]" ><span class="help-block"><strong></strong></span></div></div><div class="form-group col-md-6 "><div class="form-group col-md-12 "> <label class="col-2 col-form-label"> Nbr de place :</label><div class="col-10"><input class="form-control" type="text" name="nbre_de_place[]" ><span class="help-block"><strong></strong></span></div></div></div ></div><div class="col-md-12"><div class="form-group col-md-6 "><label class="col-2 col-form-label"> Puissance : (CV)</label><div class="col-10"><input class="form-control" type="text" name="puissance[]" ><span class="help-block"><strong></strong></span></div></div><div class="form-group col-md-6 "><div class="form-group col-md-12 "> <label class="col-2 col-form-label"> Genre :</label><div class="col-10"><select class="form-control" name="genre[]"><option disabled selected >choisir genre </option><option value="Voiture particulière">Voiture particulière</option><option value="Voiture mixte">Voiture mixte</option><option value="Utilitaire I">Utilitaire I</option><option value="Utilitaire II">Utilitaire II</option><option value="Engins de chantiers">Engins de chantiers</option><option value="Tracteur agricole">Tracteur agricole</option><option value="Moissonneuse batteuse">Moissonneuse batteuse</option></select><span class="help-block"><strong></strong></span></div></div></div></div><div class="form-group col-md-12"> <label class="col-2 col-form-label"> Garanties :</label> <div class="col-10 "><input class="form-control" type="file" name="garantie[]" ><span class="help-block"><strong></strong></span></div><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_prime">X</button></div><!---  div_test --></div>')
});
$(document).on('click', '.btn_prime', function(){
var button_id = $(this).attr("id");
$('.row'+button_id+'').remove();
//  console.log(button_id);
});
$.ajaxSetup({
headers: {
'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
}
});
$('#submit').click(function(){
$.ajax({
url:postURL,
method:"POST",
data:$('#add_name').serialize(),
type:'json',
success:function(data)
{
if(data.error){
printErrorMsg(data.error);
}else{
i=1;
$('.dynamic-added').remove();
$('#add_name')[0].reset();
$(".print-success-msg").find("ul").html('');
$(".print-success-msg").css('display','block');
$(".print-error-msg").css('display','none');
$(".print-success-msg").find("ul").append('<li>Record Inserted Successfully.</li>');
}
}
});
});
function printErrorMsg (msg) {
$(".print-error-msg").find("ul").html('');
$(".print-error-msg").css('display','block');
$(".print-success-msg").css('display','none');
$.each( msg, function( key, value ) {
$(".print-error-msg").find("ul").append('<li>'+value+'</li>');
});
}
});
</script>
@endsection