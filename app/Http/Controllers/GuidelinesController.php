<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Guideline;

class GuidelinesController extends Controller
{
    public function index()
    {
        $process_area_info = \Config::get('const.process_area_info');
        
        // 各プロセスエリアに該当するガイドラインを取得する
        foreach($process_area_info as $a_process_area_info)
        {
            $all_guidelines[$a_process_area_info['process_area_name']] = Guideline::orderBy('created_at','asc')->where('process_area_name', $a_process_area_info['process_area_name'])->get();    
        }

        return view('guidelines.index',[
            'process_area_info' => $process_area_info,
            'all_guidelines' => $all_guidelines,
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
        $this->validate($request,[
            'guideline_description' => 'required|max:500',
        ]);
        
        //テーブル"projects"にデータを保存
        $guideline = new Guideline;
        $guideline->process_area_name = $request->process_area_name;
        $guideline->guideline_id = $request->guideline_id;
        $guideline->guideline_description = $request->guideline_description;
        $guideline->save();
        
        return redirect('/guidelines/create');
    }
}
