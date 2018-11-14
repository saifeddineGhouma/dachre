@extends('layouts.app1')
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

@section('content')

<div class="container">   

    <div class="row">
     
      
        <div class="col-md-6">
            <div class="panel panel-default">
                <div class="panel-heading"><h3 class="center"style="color: #000;text-align:center;">Risques Divers</h3>  </div>
                <form action="{{ route('rds.store') }}" method="POST" enctype="multipart/form-data"id="frds">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                     
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
                            <div class="form-group col-md-4 {{ $errors->has('date') ? ' has-error' : '' }} ">
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
                            
                            
                            
                            
                            <div class="form-group col-md-4 {{ $errors->has('duree') ? ' has-error' : '' }}  ">
                              <label for="example-date-input" class="col-2 col-form-label">Durée : </label>
                              <div class="col-10">
                                      <select class="form-control" id="sel1" name="duree">
                                        <option value="RA">RA</option>
                                        <option value="S">S</option>
                                        
                                      </select>                              </div>
                            </div>
                        

                            <div class="form-group col-md-4 {{ $errors->has('echeance') ? ' has-error' : '' }}  ">
                              <label for="example-number-input" class="col-2 col-form-label">Echeance : </label>
                              <div class="col-10">
                                <input class="form-control" type="date" name="echeance" value="{{ old('echeance') }}">
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
                                <label class="col-2 col-form-label"> Identité Assuré :</label>
                                <div class="col-10">
                                    <input class="form-control" type="text" name="identite" value="{{ old('identite') }}">
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
                                <label class="col-2 col-form-label"> Tel :</label>
                                <div class="col-10">
                                    <input class="form-control" type="text" name="tel" value="{{ old('tel') }}">
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
                                    <select class="form-control"name="risque">
                                            <option>RC</option>
                                            <option value="Multirisques Habitations">Mult.Hab.</option>
                                            <option value="Multirisques Profesionnelles">Mult.Prof.</option>
                                            <option value="Individuelle Accident">Ind.Accident</option>

                                            <option value="Incendie">Incendie</option>
                                            <option value="Vol">Vol</option>
                                            <option value="Corps">Corps</option>

                                            <option value="Tous Risques Chantiers">T.R.C</option>
                                            <option value="Engins de chantiers">Engins de chantiers</option>
                                            <option value="RC décennale">R.C.D</option>
                                            <option value="Transport">Transport</option>
                                            <option value="Assistance Voyage">Assistance Voyage</option>
                                            <option value="Tous Risques Ordinateurs">T.R.O</option>

                                            <option value="Mortaoptionté de bétails">Mortaoptionté de bétails</option>
                                            <option value="Groupe Maladie">Groupe Maladie</option>
                                            <option value="Grêle">Grêle</option>
                                      </select>
                                </div>
                            </div>
                            
                        </div>
                        <div class="col-md-12">
                            <h4 style="text-decoration:  underoptionne;"> Situation de risque :</h4>
                        </div>
                        <div class="col-md-10 col-md-offset-2">
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
                        <td><input type="date" name="name[]" placeholder="Enter your Name" class="form-control name_list" /></td>  
                         <td><input type="text" name="prix[]" placeholder="Enter prix prime" class="form-control name_list" /></td>  


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
                                   <textarea class="form-control" id="exampleTextarea" name="observation" rows="3">{{ old('observation') }}</textarea>
                                
                                       @if ($errors->has('observation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('observation') }}</strong>
                                    </span>
                                @endif

                                </div>
                            </div>
                        

                        <div class="col-md-3 col-md-offset-9">
                            <button type="submit"id="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>


   <div class="col-md-6">
    
            <div class="panel panel-default">
                <div class="panel-heading"><h3 style="color: #000;text-align: center;">Automobiles</h3> </div>
                  
                  <form action="{{route('autos.store')}}" method="POST" enctype="multipart/form-data">
                      {{ csrf_field() }}
                <div class="panel-body" >
                        <input type="hidden" name="cp" value="{{$nom}}">
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
                              
                                <input class="form-control" type="text" name="numero" id="example-text-input">
                              @if ($errors->has('numero'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('numero') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                       <div class=" col-md-12"> 
                            <div class="form-group col-md-4 {{ $errors->has('date') ? ' has-error' : '' }} ">
                              <label for="example-url-input" class="col-2 col-form-label">Date d'effet : </label>
                              <div class="col-10">
                                <input class="form-control" type="date" name="date" id="example-url-input">
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
                                        <option value="RA">RA</option>
                                        <option value="S">S</option>
                                        
                                      </select>
                                </div>
                            </div>
                        

                            <div class="form-group col-md-4 {{ $errors->has('echeance') ? ' has-error' : '' }}">
                              <label for="example-number-input" class="col-2 col-form-label">Echeance : </label>
                              <div class="col-10">
                                <input class="form-control" type="date" name="echeance" >
                                  @if ($errors->has('echeance'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('echeance') }}</strong>
                                    </span>
                                @endif
                              </div>
                            </div>
                         </div>

                         <div class="col-md-12">
                            <div class="form-group col-md-6 {{ $errors->has('classe') ? ' has-error' : '' }} ">
                              <label for="example-text-input">Classe : </label>
                              
                                <input class="form-control" type="text" name="classe" id="example-text-input">
                              @if ($errors->has('classe'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('classe') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group col-md-6 {{ $errors->has('nbr_de_sinistre') ? ' has-error' : '' }} ">
                              <label for="example-text-input">Nbr de sinistre : </label>
                              
                                <input class="form-control" type="text" name="nbr_de_sinistre" id="example-text-input">
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
                            <div class="form-group col-md-6 {{ $errors->has('identite') ? ' has-error' : '' }}">
                                <label class="col-2 col-form-label"> Identité Assuré :</label>
                                <div class="col-10">
                                    <input class="form-control" type="text" name="identite" >
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
                                        <input class="form-control" type="text" name="cin" >
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
                            <div class="form-group col-md-6 {{ $errors->has('tel') ? ' has-error' : '' }}">
                                <label class="col-2 col-form-label"> Tel :</label>
                                <div class="col-10">
                                    <input class="form-control" type="text" name="tel" >
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
                                        <input class="form-control" type="text" name="adresse" >
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
                        </div>
                        <div class="col-md-12">
                            <div class="form-group col-md-6 {{ $errors->has('immatriculation') ? ' has-error' : '' }}">
                                <label class="col-2 col-form-label"> Immatriculation :</label>
                                <div class="col-10">
                                    <input class="form-control" type="text" name="immatriculation" >
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
                                        <input class="form-control" type="date" name="mise_en_circulation" >
                                        @if ($errors->has('mise_en_circulation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('mise_en_circulation') }}</strong>
                                    </span>
                                @endif
                                    </div>
                                </div>
                            </div >
                        </div>    
                        <div class="col-md-12">
                            <div class="form-group col-md-6 {{ $errors->has('marque') ? ' has-error' : '' }}">
                                <label class="col-2 col-form-label"> Marque :</label>
                                <div class="col-10">
                                    <input class="form-control" type="text" name="marque" >
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
                                        <input class="form-control" type="text" name="nbre_de_place" >
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
                                <label class="col-2 col-form-label"> Puissance :</label>
                                <div class="col-10">
                                    <input class="form-control" type="text" name="puissance" >
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
                                        <input class="form-control" type="text" name="genre" >
                                        @if ($errors->has('genre'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('genre') }}</strong>
                                    </span>
                                @endif
                                    </div>
                                </div>
                            </div >
                        </div>

                        <div class="col-md-12">
                            
                                <label class="col-2 col-form-label"> Garanties :</label>
                                <div class="col-10 {{ $errors->has('garantie') ? ' has-error' : '' }}">
                                    <input class="form-control" type="file" name="garantie" >
                                    @if ($errors->has('garantie'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('garantie') }}</strong>
                                    </span>
                                @endif
                                </div>
                            
                            
                        </div>
                        
                        <div class="col-md-12">
                            <h4 style="text-decoration:  underline;"> Primes : (de chaque écheance)</h4>
                        </div>

                        <div class="col-md-12">
                            
                       <!---------     ajouter prime  -->

                         <table class="table table-bordered" id="dynamic_field_auto">  
                    <tr>  
                        <td><input type="date" name="name[]" placeholder="Enter your Name" class="form-control name_list" /></td>  
                         <td><input type="text" name="prix[]" placeholder="Enter prix prime" class="form-control name_list" /></td>  


                        <td><button type="button" name="add" id="add_prime_auto" class="btn btn-success">Add More</button></td>  
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


</script>
<script type="text/javascript">
    $(document).ready(function(){      
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
           $('#dynamic_field_prime').append('<tr id="row'+i+'" class="dynamic-added"><td><input type="date" name="name[]" placeholder="Enter situation" class="form-control name_list" /></td>  <td><input type="text" name="prix[]" placeholder="Enter prix  prime" class="form-control name_list" /></td>    <td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></td></tr>');  
     

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
      $('#rds').click(function(){

   $("#frds").css('display','block');

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



<!----- add   prime-->

<script type="text/javascript">
    $(document).ready(function(){      
      var postURL = "<?php echo url('addmore'); ?>";
      var i=1;  


      $('#add_prime_auto').click(function(){  

           i++;  
           $('#dynamic_field_auto').append('<tr id="row'+i+'" class="dynamic-added"><td><input type="date" name="name[]" placeholder="Enter your Name" class="form-control name_list" /></td>  <td><input type="text" name="prix[]" placeholder="Enter prix  prime" class="form-control name_list" /></td>    <td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></td></tr>');  
     

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

@endsection
