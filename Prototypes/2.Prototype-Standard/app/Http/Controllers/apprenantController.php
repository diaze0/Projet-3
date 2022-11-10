<?php

namespace App\Http\Controllers;

use App\Models\apprenant;
use Illuminate\Http\Request;

class apprenantController extends Controller
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
        //
    }

    
    public function show($id)
    {
        
    }

   
    public function edit($id)
    {
        //
    }

    
    public function update(Request $request, $id)
    {
        //
    }

    
    public function destroy($id)
    {
        //
    }
}
