@extends('layouts.app1')
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>





@section('content')
<div class="container">    
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading"><h3 style="color: #000;text-aoptiongn: center;">Risques Divers</h3></div>
                <form action="{{route('rds.store')}}" method="post" enctype="multipart/form-data">
                  
                  {{ csrf_field() }}
                    
                     <input type="hidden" name="cp" id="cp" value="@if (isset($_GET['cp'])){{$_GET['cp']}} @else {{$nom}} @endif">

                    <div class="panel-body" >
                  
                        <div class="col-md-12">
                            <div class="form-group col-md-6 {{ $errors->has('numero') ? ' has-error' : '' }} ">
                              <label for="example-text-input">N° Contrat : </label>
                              
                                <input class="form-control" type="text" name="numero" id="example-text-input"value="{{ old('numero') }}" >
                              @if ($errors->has('numero'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('numero') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                       <div class=" col-md-12"> 
                            <div class="form-group col-md-3 {{ $errors->has('date') ? ' has-error' : '' }} ">
                              <label for="example-url-input" class="col-2 col-form-label">Date d'effet : </label>
                              <div class="col-10">
                                <input class="form-control" type="date" name="date" value="{{ old('date') }}" id="example-url-input">
                                @if ($errors->has('date'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('date') }}</strong>
                                    </span>
                                @endif
                              </div>
                            </div>
                              
                            
                            
                            
                            <div class="form-group col-md-3 {{ $errors->has('duree') ? ' has-error' : '' }}  ">
                              <label for="example-date-input" class="col-2 col-form-label">Durée : </label>
                              <div class="col-10">
                                      <select class="form-control" id="sel1" name="duree">
                                       <option disabled selected>choisir duree</option>
                                        <option value="RA">Annuelle </option>
                                        <option value="S">Semestrielle </option>
                                        <option value="Fermer">Fermer</option>
                                        
                                      </select>                              </div>
                            </div>
                        

                            <div class="form-group col-md-3 {{ $errors->has('echeance') ? ' has-error' : '' }}  ">
                              <label for="example-number-input" class="col-2 col-form-label">Echeance : </label>
                              <div class="col-10">
                                <input class="form-control" type="date" name="echeance" id="echeance" value="{{ old('echeance') }}">
                                @if ($errors->has('echeance'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('echeance') }}</strong>
                                    </span>
                                @endif
                              </div>
                            </div>
                         </div>
                        
                        <div class="col-md-12">
                            <h3 style="text-decoration:  underoptionne;">Assuré</h3>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group col-md-6 {{ $errors->has('identite') ? ' has-error' : '' }} ">
                                <label class="col-2 col-form-label"> Identité de l'Assuré :</label>
                                <div class="col-10">
                                    <input class="form-control" type="text" name="identite" id="identite" value="{{ old('identite') }}">
                                    @if ($errors->has('identite'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('identite') }}</strong>
                                    </span>
                                @endif
                                </div>
                            </div>
                            <div class="form-group col-md-6 ">
                                <div class="form-group col-md-12 {{ $errors->has('cin') ? ' has-error' : '' }} "> 
                                    <label class="col-2 col-form-label"> N°CIN/RC :</label>
                                    <div class="col-10">
                                        <input class="form-control" type="text" name="cin"value="{{ old('cin') }}" >
                                        @if ($errors->has('cin'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('cin') }}</strong>
                                    </span>
                                @endif
                                    </div>
                                </div>
                            </div >
                        </div>    
                        <div class="col-md-12">
                            <div class="form-group col-md-6 {{ $errors->has('tel') ? ' has-error' : '' }}  ">
                                <label class="col-2 col-form-label"> Num° Tel :</label>
                                <div class="col-10">
                                    <input class="form-control" type="telephone" name="tel" value="{{ old('tel') }}">
                                    @if ($errors->has('tel'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('tel') }}</strong>
                                    </span>
                                @endif
                                </div>
                            </div>
                            <div class="form-group col-md-6 ">
                                <div class="form-group col-md-12 {{ $errors->has('adresse') ? ' has-error' : '' }}  "> 
                                    <label class="col-2 col-form-label"> Adresse :</label>
                                    <div class="col-10">
                                        <input class="form-control" type="text" name="adresse"value="{{ old('adresse') }}" >
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
                            <h4 style="text-decoration:  underoptionne;"> Nature de risque :</h4>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group col-md-6 ">
                                
                                <div class="col-10">
                                    <select class="form-control"name="risque" id="Re_Prime">
                                        <option disabled selected>----choisir----</option>
                                            <option value="RC">Responsabilité Civile</option>
                                            <option value="Multirisques Habitations">Multirisques Habitations</option>
                                            <option value="Multirisques Profesionnelles">Multirisques Profesionnelles</option>
                                            <option value="Individuelle Accident"class="Re_Prime">Individuelle Accident</option>

                                            <option value="Incendie" >Incendie</option>
                                            <option value="Vol">Vol</option>

                                            <option value="Tous Risques Chantiers">Tous Risques Chantiers</option>
                                            <option value="Engins de chantiers">Engins de chantiers</option>
                                            <option value="RC décennale">RC décennale</option>
                                            <option value="Transport" class="Re_Prime">Transport</option>
                                            <option value="Corps Maritime" class="Re_Prime">Corps Maritime</option>
                                            <option value="Assistance en Voyage" class="Re_Prime">Assistance en Voyage</option>
                                            <option value="Tous Risques Ordinateurs">Tous Risques Ordinateurs</option>

                                            <option value="Mortalité de bétails" class="Re_Prime">Mortalité de bétails</option>
                                            <!--option value="Groupes Maladies">Groupes Maladies</option-->
                                            <option value="Grêle">Grêle</option>
                                            <option value="Ecolia">Ecolia</option>
                                      </select>
                                </div>
                            </div>
                            
                        </div>
                        <div class="col-md-12">
                            <h4 style="text-decoration:  underoptionne;" class="Re_prime"> Situation de risque :</h4>
                        </div>
                        <div class="col-md-10 ">
                            <div class="set-form">




                                <table class="table table-bordered" id="dynamic_field">  
                                     <tr>
                                      <th>Situation</th>
                                      <th>Garantie</th>
                                    </tr>
                    <tr>  
                        <td><input type="text" name="situation[]" placeholder="Enter situation" class="form-control name_list" /></td>  
                         <td><input type="file" name="file[]" placeholder="Enter prix prime" class="form-control name_list" /></td>  

                            
                        <td><button type="button" name="add" id="add" class="btn btn-success">Add situation</button></td>  
                    </tr>  
                </table>  
                                 
                                 
                                

                              
                            </div>
                        </div>
                        <div class="col-md-12">
                            <h4 style="text-decoration:  underoptionne;"> Primes :</h4>
                        </div>

                        <div class="col-md-12">
                            <!--ul>
                                <option>-</option>
                                <option>-</option>
                                <option>-</option>
                            </ul-->
                            <table class="table table-bordered" id="dynamic_field_prime">  
                    <tr>  
                        <td>
                          <input type="date" name="name[]" placeholder="Enter your Name" class="form-control name_list" />
                        </td>  
                         <td>
                          <input type="text" name="prix[]" placeholder="Enter prix prime" class="form-control name_list" />
                         </td>
                         <td> 
                         <input type="text" name="espece[]" placeholder="Enter prix espece" class="form-control name_list" />
                         </td> 
                         <td>
                         <input type="text" name="check[]" placeholder="Enter prix par check" class="form-control name_list" />
                         </td>  


                        <td><button type="button" name="add" id="add_prime" class="btn btn-success">Add Prime </button></td>  
                    </tr>  
                </table>  
                             @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                                @if ($errors->has('prix'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('prix') }}</strong>
                                    </span>
                                @endif
                        </div>
                        <div class="col-md-12">
                            <h4 style="text-decoration:  underoptionne;"> Observation :</h4>
                        </div>
                        <div class="form-group col-md-12 {{ $errors->has('Observation') ? ' has-error' : '' }}  ">      
                                
                                <div class="col-10">
                                   <textarea class="form-control" id="exampleTextarea" id="observation"name="observation" rows="3">{{ old('observation') }}</textarea>
                                
                                       @if ($errors->has('observation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('observation') }}</strong>
                                    </span>
                                @endif

                                </div>
                            </div>
                        

                        <div class="col-md-3 col-md-offset-9">
                            <button type="submit"id="submit_btn" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    
</div>
<script type="text/javascript"> 




</script>

    <script src="https://code.jquery.com/jquery-2.2.4.js" integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI=" crossorigin="anonymous"></script>


<script type="text/javascript">
 $(document).ready(function(){   

          ///   star submit ajax 
         
         $('#Re_Prime').change(function(){
            var array=["Individuelle Accident","Transport","Corps Maritime","Assistance en Voyage","Mortalité de bétails"]
           

             if(jQuery.inArray($(this).val(), array) !== -1)

            // if($(this).val()=="Transport" )
             { 
           $('#dynamic_field').css("display","none");
                  } else{
                          
                          $('#dynamic_field').css("display","block");

                  }
         } );
     /* $("#submit_btn").click(function(){
          // e.preventdefault();
           alert('data inserted');
              $.ajax({
                    url: "rds.store",
                    method: 'POST',
                   
                    data: {
                        '_token':"{{csrf_token()}}",
                        
                    },
                    success: function(data) {
                        alert('data inserted');
                    },
                });
      });*/
       ///   end ajax submit
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


    // end ajax crud    
      var postURL = "<?php echo url('addmore'); ?>";
      var i=1;  


      $('#add').click(function(){  
           i++;  
           $('#dynamic_field').append('<tr id="row'+i+'" class="dynamic-added"><td><input type="text" name="situation[]" placeholder="Enter your Name" class="form-control name_list" /></td>  <td><input type="file" name="file[]" placeholder="Enter prix  prime" class="form-control name_list" /></td>    <td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></td></tr>');  
     

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
///////////   code ajax submit rd

   
/// end ajax submit

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


      $('#add_prime').click(function(){  
           i++;  
           $('#dynamic_field_prime').append('<tr id="row'+i+'" class="dynamic-added"><td><input type="date" name="name[]" placeholder="Enter situation" class="form-control name_list" /></td>  <td><input type="text" name="prix[]" placeholder="Enter prix  prime" class="form-control name_list" /></td><td><input type="text" name="check[]" placeholder="Enter prix  espece" class="form-control name_list" /></td><td><input type="text" name="check[]" placeholder="Enter prix par check" class="form-control name_list" /></td>    <td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></td></tr>');  
     

      });  


      $(document).on('click', '.btn_remove_prime', function(){  
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

@endsection
