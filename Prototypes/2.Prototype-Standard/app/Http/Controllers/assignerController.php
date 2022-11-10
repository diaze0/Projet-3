<?php

namespace App\Http\Controllers;

use App\Models\apprenant;
use App\Models\apprenant_brief;
use App\Models\Brief;
use Illuminate\Http\Request;

class assignerController extends Controller
{
    
    public function index()
    {
        $apprenant = apprenant::all();
        return view('brief.assigner',compact('apprenant'));
    }

    
    public function create()
    {
        //
    }

   
    public function store(Request $request)
    {
        apprenant_brief::create([
            'apprenant_id' => $request->apprenant_id,
            'brief_id' => $request->brief_id,
        ]);
        return back();
    }

    
    public function show($id)
    {
        $apprenant =apprenant::all();
        $apprenantAssinger = Brief::find($id)->apprenant;
        return view('brief.assigner',compact('apprenant','apprenantAssinger','id'));
    }

   
    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

   
    public function destroy(Request $request )
    {
        apprenant_brief::where([
        ['apprenant_id',$request->apprenant_id],
        ['brief_id',$request->brief_id]
        ])->delete();
        return back();
    }
}
