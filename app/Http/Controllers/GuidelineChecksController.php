<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;
use App\Process_result;
use App\Guideline;
use App\Guidelinecheck;

class GuidelineChecksController extends Controller
{
    public function show($id)
    {
        $project = Project::find($id);
        $process_results = $project->process_results()->get(["id","process_area_name"]);
        $process_area_name_lists = \Config::get('const.process_area_name_lists');


        return view('guideline_checks.show', [
            'project' => $project,
            'process_results' => $process_results,
            'process_area_name_lists' => $process_area_name_lists,
            
            // 'project_guideline_checks' => $project_guideline_checks,
        ]);
    }
    
    public function update(Request $request, $id)
    {
        $project = Project::find($id); //該当プロジェクトを取得
        $process_results = $project->process_results()->get(["id","process_area_name"]); //紐づくプロセスを取得
        $i=0;
        foreach ($process_results as $process_result)
        {
            $guideline_checks = $process_result->guideline_checks()->get(); //　対象のプロセスに紐づくガイドラインチェックを取得
            
            foreach($guideline_checks as $guideline_check)
            {
                $guideline_check->guideline_result = $request->guideline_result[$i];
                $guideline_check->save();
                $i++;
            }
        }
        
        return back();
        
    }
}
