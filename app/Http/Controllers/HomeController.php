<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Client;
use App\Assureur;
use App\Contrat;
use App\Auto;
use App\Prime;
use Session;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
   /* public function __construct()
    {
        $this->middleware('auth');
    }*/

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       // dd($_GET['cp']);
        return view('home');
    }
    public function create_rds(Request $request,$nom)
    {
        return view('RD',['nom'=>$nom]);
    }
     public function create_autos(Request $request,$nom)
    {
        return view('automobile',['nom'=>$nom]);
    }
     public function indexAll()
    {
        return view('index');
    }
     public function indexAssureur(Request $request){

       $assureur=Assureur::where('nom',$_GET['cp'])->first();
     // dd($assureur);
       if(count($assureur)>0)
        { 
            $contrat=contrat::where('assureurs_id',$assureur->id)->get();
         
        return view('IndexAsurre',['contrats'=>$contrat,'assureur'=>$assureur]);
    }
    else
    {
               Session::flash('error','vous ete pas des contrat dans Gat');
               // Session::flash('message','Contrat de auto  avec success :)');
              //return redirect()->route('home');
        }
       
       

        
    }
}
