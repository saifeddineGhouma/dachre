@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-6 col-lg-offset-4">
            <img src="{{asset('images/logo.png')}}" style="height: 150px;width: 300px;margin-left: 15px;">
        <br/><br/><br/>
        </div>
    </div>
    @if(Auth::check())
    <div class="row">
        <div class="col-lg-12">
            <hr class="col-lg-4">
            <div class="col-lg-3" style="text-align:  center; "><h4><strong>Compagnies</strong></h4></div>
            <hr class="col-lg-4">
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="col-md-4">
            
            <a href="contrat?cp=Star">
                <img style="height: 168px;width: 300px;"src="{{asset('images/star.png')}}">
            </a>
            <br>
            <!--h4 style="text-align:center; margin-top:2% ;font-size: x-large;"> <a style ="color:black"  href="star" class="btn-link">Assurances Star</a></h4-->
                     
           
          </div>
          <div class="col-md-4">
            <a href="contrat?cp=Ctama">
                <img style="height: 168px;width: 300px;" src="{{asset('images/ctama.png')}}">
            </a>
            <br>
            <!--h4 style="text-align:center; margin-top:2% ;font-size: x-large;"> <a style ="color:black"  href="star" class="btn-link">Assurances Star</a></h4-->
            
          </div>
          <div class="col-md-4">
            <a href="contrat?cp=Maghrbia">
                <img style="height: 168px;width: 300px;" src="{{asset('images/magh.png')}}">
            </a>
            <br>
            <!--h4 style="font-size: x-large;text-align:center; margin-top:2%"> <a style ="color:black"  href="maghribia" class="btn-link">Assurances MAGHRIBIA</a></h4-->
          </div>





          <div class="col-lg-12">
            <div class="col-md-4">
            
            <a href="contrat?cp=Salim">
                <img style="height: 168px;width: 300px;"src="{{asset('images/salim.png')}}">
            </a>
            <br>
            <!--h4 style="font-size: x-large;text-align:center; margin-top:2%"> <a style ="color:black"  href="slim" class="btn-link">Assurances Salim</a></h4-->
           
            
           
          </div>
          <div class="col-md-4">
            <a href="contrat?cp=Carte">
                <img style="height: 168px;width: 300px;" src="{{asset('images/carte.png')}}">
            </a>
            <br>
            <!--h4 style="font-size: x-large;text-align:center; margin-top:2%"> <a style ="color:black"  href="slim" class="btn-link">Assurances Salim</a></h4-->
          </div>
          <div class="col-md-4">
            <a href="contrat?cp=Comar">
                <img style="height: 168px;width: 300px;" src="{{asset('images/comar.png')}}">
            </a>
            <br>
            <!--h4 style="font-size: x-large;text-align:center; margin-top:2%"> <a style ="color:black"  href="maghribia" class="btn-link">Assurances MAGHRIBIA</a></h4-->
          </div>



        </div>



        <div class="col-lg-12">
            <div class="col-md-4 col-lg-offset-4">
            
            <a href="contrat?cp=GAT">
                <img style="height: 168px;width: 300px;"src="{{asset('images/gat.png')}}">
            </a>
            <br>
            <!--h4 style="font-size: x-large;text-align:center; margin-top:2%"> <a style ="color:black"  href="slim" class="btn-link">Assurances Salim</a></h4-->
           
            
           
          </div>
      </div>
    </div>

   @endif 
</div>
  

@endsection
