<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Client;
use App\Assureur;
use App\Contrat;
use App\Auto;
use App\Prime;
use Toastr;
use Session;
class AutoController extends Controller
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
       $autos= Auto::all();
       $contrat=Contrat::where('type','!=','RD')->get();
     
        return view ('indexAuto',['contrats'=>$contrat]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('automobile');
    }
     public function changerEtatAuto($id,Request $request)
    {
           $contrat= Contrat::find($id);
           if($contrat)
           {
            $contrat->etat=$request->etat;
            $contrat->update();
            return redirect()->route('autos.index');
      }

    }

    public function serche(Request $request)
    {

      $contrat_serche=Contrat::where('numero', 'like', "{$request->recherche}%")->get();

      
        $Client_serche=Client::where('identite', 'like', "{$request->recherche}%")->get();
        
      
       $auto_serche=Auto::where('immatriculation', 'like', "{$request->recherche}%")->get();
      // dd($contrat_serche);
       return view('rechercher',compact('contrat_serche'));

    //   dd($contrat_serche,$Client_serche,$auto_serche);
        
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    $request->validate([
    'numero' => 'required|max:255',
    'date' => 'required',
    'echeance' => 'required',
    'classe' => 'required|max:255',
    'nbr_de_sinistre' => 'required',
    'identite' => 'required',
    'cin' => 'required|max:255',
    'tel' => 'required',
    'adresse' => 'required',
    'immatriculation' => 'required|max:255',
    'mise_en_circulation' => 'required',
    'marque' => 'required',
    'nbre_de_place' => 'required',
    'puissance' => 'required',
    'genre' => 'required',
    'garantie' => 'required',
    'observation' => 'required',
    
]);
    //   creation new  client

        $client=Client::where('cin',$request->cin)->first();
  if(!$client)
    {   $client=new Client();
       $client->identite=$request->identite;
       if($request->cin !="")
       {
        $client->cin=$request->cin;
      }
     else{
            $client->cin=$request->rc;
     }
       $client->tel=$request->tel;
       $client->adresse=$request->adresse;
       $client->type=$request->type;
       $client->save();}
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
       $contrat->type   =  $request->type_auto;

       $contrat->observation=$request->observation;
      
      //$contart->observation= $request->observation;
       
       $contrat->save();

    //   creation new  auto 
    //   dd($request->garantie);
foreach ($request->input('immatriculation') as $key => $value) {
  # code...

       $auto = new Auto();
       $auto->classe = $request->input('classe');
       $auto->nbr_de_sinistre = $request->input('nbr_de_sinistre')[$key];
       $auto->immatriculation = $value;
       $auto->mise_en_circulation = $request->input('mise_en_circulation')[$key];
       $auto->marque = $request->input('marque')[$key];
       $auto->nbre_de_place = $request->input('nbre_de_place')[$key] ;
       $auto->puissance = $request->input('puissance')[$key];
       $auto->genre = $request->input('genre')[$key] ;
       $auto->contrat_id=$contrat->id;
       $auto->type=$request->type_auto;
       $auto->num_choissir=$request->num_choissir;

       //if($request->hasFile('garantie'))
   // {

               $path = $request->file('garantie')[$key]->store('Fichier');
      

       $auto->garantie = $path ;
 //  }
$auto->save();
}
    // create new prime  
      
      foreach($request->input('prix') as $key => $value) {
        $prime =new Prime();
               $prime->prix=$value;
                $prime->date_prime=$request->input('name')[$key];
                $prime->check=$request->input('check')[$key];
                $prime->espece=$request->input('espece')[$key];
                 $prime->contrat_id=$contrat->id;
                     $prime->save();

             }

        Session::flash('message','Contrat de auto  avec success :)');
      return redirect()->route('autos.index');
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
        return view('show_contrat',compact('contrat'));
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
                         
        
        return view('edit_auto',compact('contrat'));
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
        
        //edit assurance

        $assurance_edit=$contrat->assureur;
        $assurance_edit->nom=$request->cp;
        $assurance_edit->update();
        //edit contrat
       
       
        $contrat->numero  =   $request->numero;
        $contrat->date   =   $request->date;
        $contrat->duree   =   $request->duree;
        $contrat->echeance   =   $request->echeance;
          if($request->type_auto =="")
       {
            $contrat->type   =  $request->type_auto;
        }
          else{
            $contrat->type   =  $contrat->type;
          }
 
        $contrat->observation=$request->observation;

        $contrat->update();
        // edit auto
        
        foreach ($contrat->autos as $key=>$auto) {
            # code...
          
                 
                 $auto->classe = $request->classe[$key];
                 $auto->nbr_de_sinistre = $request->nbr_de_sinistre[$key];
                 $auto->immatriculation = $request->immatriculation[$key];
                 $auto->mise_en_circulation = $request->mise_en_circulation[$key];
                 $auto->marque = $request->marque[$key];
                 $auto->nbre_de_place = $request->nbre_de_place[$key];
                 $auto->puissance = $request->puissance[$key];
                 $auto->genre = $request->genre[$key] ;
                 $auto->contrat_id=$contrat->id;
                 $auto->type=$request->type_auto;
                 $auto->num_choissir=$request->num_choissir[$key];
                 $auto->update();
                 //if($request->hasFile('garantie'))
             // {
          
                       //  $path = $request->file('garantie')[$key]->store('Fichier');
                
          
                // $auto->garantie = $path ;
           //  }
         
          }


          //  edit prime
          foreach ($contrat->primes as $key =>$prime) {
            $prime->prix=$request->prix[$key];
            $prime->date_prime=$request->name[$key];
            $prime->check=$request->check[$key];
            $prime->espece=$request->espece[$key];
            // $prime->contrat_id=$contrat->id;
                 $prime->update();
          }
          
    
    
          Session::flash('edit','Contrat edit  de auto  avec success :)');
          return back();
         // return redirect()->route('autos.index');

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
