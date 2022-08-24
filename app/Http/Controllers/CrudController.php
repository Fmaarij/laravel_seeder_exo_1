<?php

namespace App\Http\Controllers;

use App\Models\Personnes;
use Illuminate\Http\Request;

class CrudController extends Controller {
    public function showhomePage() {
        $Personnes = Personnes::all();
        return view( 'pages.home', compact( 'Personnes' ) );
    }

    //addPage

    public function showAddPage() {
        $Personnes = Personnes::all();
        return view( 'pages.addPersonne', compact( 'Personnes' ) );
    }

    //add

    public function store( Request $request ) {
        $store = new Personnes;
        $store->nom = $request->nom;
        $store->age = $request->age;
        $store->email = $request->email;
        $store->tel = $request->tel;
        $store->save();
        return redirect()->back();
    }
    //showEditPage
    public function showEditPage($id){
        $Personnes = Personnes::find($id);
        return view( 'pages.editPersonne', compact( 'Personnes' ));
    }

    //Edit personnes
    public function editPersonne(Request $request, $id){
        $editPersonne = Personnes::find($id);
        $editPersonne->nom = $request->nom;
        $editPersonne->age = $request->age;
        $editPersonne->email = $request->email;
        $editPersonne->tel = $request->tel;
        $editPersonne->save();
        return redirect()->back();
    }

    //delete par id

    public function delPersonne( $id ) {
        $delPersonne = Personnes::find( $id );
        $delPersonne->delete();
        return redirect()->back();
    }

    //delete all

    public function delAll() {
        $delAll = Personnes::truncate();
        $delAll->delete();
        return redirect()->back();
    }
}
