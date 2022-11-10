<?php

namespace App\Http\Controllers;

use App\Models\promotion;
use Illuminate\Http\Request;

class PromotionController extends Controller
{
    
    public function index()
    {
        $promotion = promotion::all();
        return view('promotion.index',compact("promotion"));
    }

    public function create()
    {
        return view('promotion.create');
    }

    
    public function store(Request $request)
    {
         promotion::create([
            'nom'=>$request->nom,
         ])->save();
             return redirect('promotion');
    }

    
    public function show(promotion $promotion)
    {
        //
    }

    
    public function edit( $id)
    {
        $promotion = promotion::find($id);
        $apprenant = promotion::find($id)->hasManyApprenant;
        return view('promotion.edit',compact('promotion','apprenant'));
    }

    
    public function update(Request $request, $id)
    {
        promotion::find($id)
        ->update([
            'nom'=>$request->nom,
        ]);
        return redirect('promotion/'.$id.'/edit');
    }

    
    public function destroy( $id)
    {
        promotion::find($id)
        ->delete();
        return back();
    }
}
