@extends('layouts.app')

@section('content')

    <div class="row">
                   <div  class="col-lg-10 col-lg-offset-2"  >
                        <h4>Choisissez une compagnie</h4>
                    </div>
                    <div  class="col-lg-12"  >    
                             <div class="col-md-4">
                                    <a style="text-align: center;" href="create?cp=Star"> <img src="{{asset('images/star.png')}}"></a>
                               </div>
                                <div class="col-md-4">
                                    <a style="text-align: center;" href="create?cp=Salim"><img src="{{asset('images/salim.png')}}">
                                        
                                    </a>
                                </div>
                                <div class="col-md-4">
                                    <a style="text-align: center;" href="create?cp=Maghrbia"><img style="height: 135px;width: 180px;"src="{{asset('images/magh.png')}}">
                                        
                                    </a></div>
                                    <div class="col-lg-12">
                               <div class="col-md-4">
                                    <a style="text-align: center;" href="create?cp=Ctama"><img style="height: 135px;width: 180px;"src="{{asset('images/Ctama.png')}}">
                                        
                                    </a></div>
                               <div class="col-md-4">
                                    <a style="text-align: center;" href="create?cp=Carte"><img style="height: 135px;width: 180px;"src="{{asset('images/Carte.png')}}">
                                        
                                    </a>
                                </div>
                                <div class="col-md-4">
                                    <a style="text-align: center;" href="create?cp=Comar"><img style="height: 135px;width: 180px;"src="{{asset('images/Comar.png')}}">
                                        
                                    </a>
                                </div>
                            </div>
                                    <div class="col-lg-12">
                                <div class="col-md-4 col-md-offset-4">
                                    <a style="text-align: center;" href="create?cp=GAT"><img style="height: 135px;width: 180px;"src="{{asset('images/gat.png')}}">
                                        
                                    </a>
                                </div>
                            </div>
                               
                         
                            
                           
                    </div> 
                                  
  </div>

@endsection          


