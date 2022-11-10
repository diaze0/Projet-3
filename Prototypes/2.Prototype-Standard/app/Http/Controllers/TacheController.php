<?php

namespace App\Http\Controllers;

use App\Models\Brief;
use App\Models\tache;
use Illuminate\Http\Request;

class TacheController extends Controller
{

    public function index()
    {
        $tache = tache::all();
        return view('brief.edit',compact('tache'));
    }


    public function create(Request $request)
    {
        $id= $request->brief_id;
        return view('tache.create',compact('id'));
    }


    public function store(Request $request)
    {
        tache::create([
            "Nom_de_la_tache"=> $request->nom,
            "Debut_de_la_tache"=> $request->debut_tache,
            "Fin_de_la_tache"=> $request->fin_tache,
            "brief_id"=> $request->brief_id,
        ])->save();
        return redirect('brief/'.$request->brief_id .'/edit');
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $tache = tache::where('id',$id)
        ->get();
        return view('tache.edit',compact('tache'));
    }


    public function update(Request $request, $id)
    {
        tache::find($id)
        ->update([
            "Nom_de_la_tache"=> $request->nom,
            "Debut_de_la_tache"=> $request->debut_tache,
            "Fin_de_la_tache"=> $request->fin_tache,
        ]);
        return redirect('brief/'.$request->brief_id.'/edit');
    }


    public function destroy($id)
    {
        tache::find($id)
        ->delete();
        return back();
    }
}
