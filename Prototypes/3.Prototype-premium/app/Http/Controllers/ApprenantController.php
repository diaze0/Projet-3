<?php

namespace App\Http\Controllers;

use App\Models\apprenant;
use Illuminate\Http\Request;

class ApprenantController extends Controller
{
    
    public function index()
    {
        //
    }

    
    public function create(Request $request)
    {
        $id = $request->promotion_id;
        return view('apprenant.create',compact('id'));
    }

    
    public function store(Request $request)
    {
        apprenant::create([
            'Nom'=>$request->nom,
            'Prenom'=>$request->prenom,
            'Email'=>$request->email,
            'promotion_id'=>$request->promotion_id
        ])->save();
        return redirect('promotion/'.$request->promotion_id.'/edit');
    }

    
    public function show(apprenant $apprenant)
    {
        //
    }

    
    public function edit( $id)
    {
        $apprenant =apprenant::find($id);
        return view('apprenant.edit',compact('apprenant'));
    }

    
    public function update(Request $request, $id)
    {
        apprenant::find($id)
        ->update([
            'Nom'=>$request->nom,
            'Prenom'=>$request->prenom,
            'Email'=>$request->email,
            'promotion_id'=>$request->promotion_id
        ]);
        return redirect('promotion/'.$id.'/edit');
    }

   
    public function destroy($id)
    {
        apprenant::find($id)
        ->delete();
        return back();
    }
}
