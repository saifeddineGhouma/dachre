@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-6 col-lg-offset-4">
            <img src="{{asset('images/logo.png')}}">
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <form>
              <div class="form-group col-md-6  ">
                          <label for="example-text-input">Assureur : </label>
                          
                            <input class="form-control" type="text" name="societe" id="example-text-input">
                          
                        </div>
                        
                        
                        <div class="form-group col-md-6  ">
                          <label for="example-url-input" class="col-2 col-form-label">Type : </label>
                          <div class="col-10">
                            <input class="form-control" type="text" name="objet" id="example-url-input">
                          </div>
                        </div>
                        
                        
                        
                        
                        <div class="form-group col-md-6  ">
                          <label for="example-date-input" class="col-2 col-form-label">Date : </label>
                          <div class="col-10">
                            <input class="form-control" type="date" name="date" id="example-date-input">
                          </div>
                        </div>
                    

                        <div class="form-group col-md-6 ">
                          <label for="example-number-input" class="col-2 col-form-label">Assuré : </label>
                          <div class="col-10">
                            <input class="form-control" type="text" name="intitule" >
                          </div>
                        </div>

                        

                        <div class="col-md-3 col-md-offset-9">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>   
            </form>
        </div>
    </div>

    
</div>


@endsection
