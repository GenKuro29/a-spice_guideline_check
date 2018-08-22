<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Guideline;

const man3_RL_amount = 17;
const man3_RC_amount = 31;
const swe1_RL_amount = 10;
const swe1_RC_amount = 12;
const swe6_RL_amount = 12;
const swe6_RC_amount = 6;

class GuidelinesController extends Controller
{
    public function index()
    {
        $man3_guidelines = Guideline::orderBy('created_at','asc')->where('process_area_name','MAN.3')->get();
        $swe1_guidelines = Guideline::orderBy('created_at','asc')->where('process_area_name','SWE.1')->get();
        $swe6_guidelines = Guideline::orderBy('created_at','asc')->where('process_area_name','SWE.6')->get();
        
        return view('guidelines.index',[
            'man3_guidelines' => $man3_guidelines,
            'swe1_guidelines' => $swe1_guidelines,
            'swe6_guidelines' => $swe6_guidelines,
        ]);
        
    }
    
        public function create()
    {
        $guideline = new Guideline;
        
        return view('guidelines.create',[
            'guideline' => $guideline,
        ]);
    }
    
    public function store(Request $request)
    {
        //テーブル"projects"にデータを保存
        $guideline = new Guideline;
        $guideline->process_area_name = $request->process_area_name;
        $guideline->guideline_id = $request->guideline_id;
        $guideline->guideline_description = $request->guideline_description;
        $guideline->save();
        
        return redirect('/guidelines/create');
    }
}
