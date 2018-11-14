<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use App\Client;
use App\Assureur;
use App\Contrat;
use App\Rd;
use App\Prime;
use App\Garantie;
use Session;
class RdController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $rds= RD::all();
             $contrat=Contrat::where('type','RD')->get();

        return view ('indexRds',['contrats'=>$contrat]);
    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('RD');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function changerEtat($id,Request $request)
    {
           $contrat= Contrat::find($id);
           if($contrat)
           {
            $contrat->etat=$request->etat;
            $contrat->update();
           // return redirect()->route('rds.index');
            return back();
           }

    }
         //  methode  rechercher 
    public function Recherche($request)
    {
            
    }
    public function store(Request $request)
    {
      $request->validate([
    'numero' => 'required|max:255',
    'date' => 'required',
    'duree' => 'required',
    'echeance' => 'required|max:255',
    'identite' => 'required|max:255',
    'cin' => 'required|max:255',
    'tel' => 'required|max:255',
    'adresse' => 'required|max:255',
    'name' => 'required|max:255',
    'prix' => 'required|max:255',
    
    
]);
         //   creation new  client
   
        $client=Client::where('cin',$request->cin)->first();
        //dd($client);
  if(!$client)
    {   $client=new Client();
       $client->identite=$request->identite;
       $client->cin=$request->cin;
       $client->tel=$request->tel;
       $client->adresse=$request->adresse;
       $client->save();
     }
    // creation new assureur  star-maghrbia-- slim...
     $assureur=Assureur::where('nom',$request->cp)->first();
        if(!$assureur)
        {
       $assureur= new Assureur();
       $assureur->nom=$request->cp;
       $assureur->save();

     }

    //  creation new contrat

       $contrat=new Contrat();
       $contrat->client_id=$client->id;
       $contrat->assureurs_id=$assureur->id;
       $contrat->numero  =   $request->numero;
       $contrat->date   =   $request->date;
       $contrat->duree   =   $request->duree;
       $contrat->echeance   =   $request->echeance;
       $contrat->etat   ="0";
       $contrat->type   =  "RD";
       $contrat->observation=$request->observation;

       
       $contrat->save();

    //   creation new  RD 

       $rd=new Rd();
       $rd->nature=$request->risque;
       $rd->contrat_id=$contrat->id;
       $rd->save();
   

    // create new prime  
     foreach($request->input('prix') as $key => $value)

       {
        $prime =new Prime();
               $prime->prix=$value;
                $prime->date_prime=$request->input('name')[$key];
                $prime->espece=$request->input('espece')[$key];
                $prime->check=$request->input('check')[$key];
                 $prime->contrat_id=$contrat->id;
                     $prime->save();

             }

       // create new garantie

      foreach($request->input('situation') as $key => $value) {
        $gartie =new Garantie();
        $gartie->situation=$value;
        
      if($request->hasFile('file'))

               {
    $gartie->gartie = $request->file('file')[$key]->store('Garantie') ;}
         
                 $gartie->rds_id=$rd->id;

                     $gartie->save();
                    
             }
        
         // return response()->json(array('msg'=> $msg), 200);
    //return response()->json($contrat);
                     Session::flash('message','Contrat de rds  avec success :)');
                    

          return redirect()->route('rds.index');

              }
            

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $contrat=Contrat::find($id);
      
        return view('show_rds_contrat',compact('contrat'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
          $contrat=Contrat::find($id);
      
        return view('edit_rds',compact('contrat'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $contrat=Contrat::find($id);

        // edit client 

         $client_edit=$contrat->client;
        $client_edit->identite=$request->identite;
        $client_edit->cin=$request->cin;
        $client_edit->tel=$request->tel;
        $client_edit->adresse=$request->adresse;
        $client_edit->update();

        // edit assureur

        $assurance_edit=$contrat->assureur;
        $assurance_edit->nom=$request->cp;
        $assurance_edit->update();

        // edit contrat 


        $contrat->numero  =   $request->numero;
        $contrat->date   =   $request->date;
        $contrat->duree   =   $request->duree;
        $contrat->echeance   =   $request->echeance;
          if($request->type_auto =="")
       {
            $contrat->type   =  "RD";
        }
          else{
            $contrat->type   =  $contrat->type;
          }
 
        $contrat->observation=$request->observation;

        $contrat->update();
           //  edit RD 
        foreach ($contrat->rds as $key => $rd) {
          $rd->nature=$rd->risque[$key];
          $rd->update();
        }
        // edit prime

        foreach ($contrat->primes as $key => $prime) {
          $prime->prix=$request->prix[$key];
          $prime->date_prime=$request->name[$key];
          $prime->espece=$request->espece[$key];
          $prime->check=$request->check[$key];
          $prime->update();  
        }
        return redirect()->route('rds.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
