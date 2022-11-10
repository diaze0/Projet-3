<?php

namespace App\Http\Controllers;

use App\Models\apprenant;
use App\Models\brief;
use App\Models\apprenant_brief;
use Illuminate\Http\Request;

class AssignerController extends Controller
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
                "apprenant_id"=>$request->apprenant_id,
                "brief_id"=>$request->brief_id,
            ]);
          return back();
    }


    public function show( $id)
    {
        $apprenant = apprenant::all();
        $apprenantAssigner = brief::find($id)->apprenant;
        return view('brief.assigner',compact('apprenant','apprenantAssigner','id'));
    }

    public function edit(AssignerController $assignerController)
    {
        //
    }

    public function update(Request $request, AssignerController $assignerController)
    {
        //
    }


    public function destroy(Request $request ,$id)
    {

       apprenant_brief::where([

        ['apprenant_id',$request->apprenant_id],
        ['brief_id',$request->brief_id]
      ])->delete();



        return back();
    }
}
