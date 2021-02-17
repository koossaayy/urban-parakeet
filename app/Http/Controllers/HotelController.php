<?php

namespace App\Http\Controllers;

use App\Models\Hotel;
use Illuminate\Http\Request;

class HotelController extends Controller
{
    //en tant que admin on doir 
    /**
     * Afficher tous les hotels
     * Créer un hotel
     * Modifier un hotel
     * Supprimer un hotel
     */

     public function afficherTous() 
     {
         $hotels = Hotel::all();
         return view('admin.hotels.afficherTous')->with('hotels', $hotels);
     }


     public function creerHotel()
     {
         return view('admin.hotels.creerHotel');
     }

     public function enregistrerHotel(Request $request)
     {
         $hotel = new Hotel();

         $hotel->nom = $request->input('nom');
         $hotel->etoile = $request->input('etoile');
         $hotel->localisation = $request->input('local');
         $hotel->save();

         return redirect()->route('hotels.afficher');
     }

     public function supprimer($id)
     {
         $hotel = Hotel::find($id);
         $hotel->delete();
         return redirect()->route('hotels.afficher');

     }
}
