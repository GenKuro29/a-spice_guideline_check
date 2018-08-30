<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Project;
use App\Process_result;
use App\Bp_result;
use App\Evidence;
use App\Guideline;
use App\Guideline_check;


//テーブル"projects"にデータを保存
// const man3_bp_amount = 10;
// const swe1_bp_amount = 8;
// const swe6_bp_amount = 7;

/* 2次元配列をclass外で定義できないのか？(defineで1次元はできる)
$process_bp_amount = array();
$process_bp_amount[0]['name'] = "MAN.3";
$process_bp_amount[0]['bp_amount'] = 10;
$process_bp_amount[1]['name'] = "SWE.1";
$process_bp_amount[1]['bp_amount'] = 8;
$process_bp_amount[2]['name'] = "SWE.6";
$process_bp_amount[2]['bp_amount'] = 7;
*/

class ProjectsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = Project::all();
        $process_results = Process_result::all();
        $process_area_name_lists = \Config::get('const.process_area_name_lists');


        return view('projects.index', [
            'projects' => $projects,
            'process_results' => $process_results,
            'process_area_name_lists' => $process_area_name_lists,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $project = new Project;
        
        return view('projects.create',[
            'project' => $project,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $process_area_info = \Config::get('const.process_area_info');

        $project = new Project;
        $project->prj_name = $request->prj_name;
        $project->prj_purpose = $request->prj_purpose;
        $project->assessed_organization = $request->assessed_organization;
        $project->assessment_date = $request->assessment_date;
        $project->process_scope = $request->process_scope;
        $project->location = $request->location;
        $project->assessor = $request->assessor;
        $project->interviewed_person = $request->interviewed_person;
        $project->save();

        //プロジェクトに必ず紐づく子テーブル(process_results)のレコードを作成する 
        
        foreach($process_area_info as $a_process_area_info)
        {
            $bp_amount = $a_process_area_info['bp_amount'];   
            $process_result = new Process_result;
            $process_result->project_id = $project->id;
            $process_result->process_area_name = $a_process_area_info['process_area_name'];
            $process_result->save();
            
            //テーブル(process_results)に必ず紐づく子テーブル(bp_results)のレコードを作成する
            for ($i=1; $i <= $bp_amount; $i++){
                $bp_result = new Bp_result;
                $bp_result->process_id = $process_result->id;
                $bp_result->bp_number = 'BP'. $i;
                $bp_result->save();
                
                //テーブル(bp_results)に必ず紐づく子テーブル(evidences)のレコードを2つ作成
                for ($j=0; $j<2; $j++){
                    $evidence = new Evidence;
                    $evidence->bp_id = $bp_result->id;
                    $evidence->save();
                }
            }
            
            //テーブル(process_results)に必ず紐づく子テーブル(guideline_checks)のレコードを作成する
            $guidelines = Guideline::where('process_area_name', $a_process_area_info['process_area_name'])->get();
            foreach ($guidelines as $guideline)
            {
                $guideline_check = new Guideline_check;
                $guideline_check->process_id = $process_result->id;
                $guideline_check->guideline_ref_id = $guideline->id;
                $guideline_check->save();
            }
        }
        
        
/* ここから削除予定
        // //MAN.3
        // $process_result = new Process_result;
        // $process_result->project_id = $project->id;
        // $process_result->process_area_name = 'MAN.3';
        // $process_result->save();
        
        // //テーブル(process_results)に必ず紐づく子テーブル(bp_results)のレコードを作成する
        // for ($i=1; $i <= $man3_bp_amount; $i++){
        //     $bp_result = new Bp_result;
        //     $bp_result->process_id = $process_result->id;
        //     $bp_result->bp_number = 'BP'. $i;
        //     $bp_result->save();
            
        //     //テーブル(bp_results)に必ず紐づく子テーブル(evidences)のレコードを2つ作成
        //     for ($j=0; $j<2; $j++){
        //         $evidence = new Evidence;
        //         $evidence->bp_id = $bp_result->id;
        //         $evidence->save();
        //     }
        // }
        
        // //テーブル(process_results)に必ず紐づく子テーブル(guideline_checks)のレコードを作成する
        // $guidelines = Guideline::where('process_area_name', 'MAN.3')->get();
        // foreach ($guidelines as $guideline)
        // {
        //     $guideline_check = new Guideline_check;
        //     $guideline_check->process_id = $process_result->id;
        //     $guideline_check->guideline_ref_id = $guideline->id;
        //     $guideline_check->save();
        // }
        
        // //SWE.1
        // $process_result = new Process_result;
        // $process_result->project_id = $project->id;
        // $process_result->process_area_name = 'SWE.1';
        // $process_result->save();
        
        // //テーブル(process_results)に必ず紐づく子テーブル(bp_results)のレコードを作成する
        // for ($i=1; $i <= $swe1_bp_amount; $i++){
        //     $bp_result = new Bp_result;
        //     $bp_result->process_id = $process_result->id;
        //     $bp_result->bp_number = 'BP'. $i;
        //     $bp_result->save();
            
        //     //テーブル(bp_results)に必ず紐づく子テーブル(evidences)のレコードを2つ作成
        //     for ($j=0; $j<2; $j++){
        //         $evidence = new Evidence;
        //         $evidence->bp_id = $bp_result->id;
        //         $evidence->save();
        //     }
        // }
        
        // //テーブル(process_results)に必ず紐づく子テーブル(guideline_checks)のレコードを作成する
        // $guidelines = Guideline::where('process_area_name', 'SWE.1')->get();
        // foreach ($guidelines as $guideline)
        // {
        //     $guideline_check = new Guideline_check;
        //     $guideline_check->process_id = $process_result->id;
        //     $guideline_check->guideline_ref_id = $guideline->id;
        //     $guideline_check->save();
        // }
        
        // //SWE.6
        // $process_result = new Process_result;
        // $process_result->project_id = $project->id;
        // $process_result->process_area_name = 'SWE.6';
        // $process_result->save();
        
        // //テーブル(process_results)に必ず紐づく子テーブル(bp_results)のレコードを作成する
        // for ($i=1; $i <= $swe6_bp_amount; $i++){
        //     $bp_result = new Bp_result;
        //     $bp_result->process_id = $process_result->id;
        //     $bp_result->bp_number = 'BP'. $i;
        //     $bp_result->save();
            
        //     //テーブル(bp_results)に必ず紐づく子テーブル(evidences)のレコードを2つ作成
        //     for ($j=0; $j<2; $j++){
        //         $evidence = new Evidence;
        //         $evidence->bp_id = $bp_result->id;
        //         $evidence->save();
        //     }
        // }
        
        // //テーブル(process_results)に必ず紐づく子テーブル(guideline_checks)のレコードを作成する
        // $guidelines = Guideline::where('process_area_name', 'SWE.6')->get();
        // foreach ($guidelines as $guideline)
        // {
        //     $guideline_check = new Guideline_check;
        //     $guideline_check->process_id = $process_result->id;
        //     $guideline_check->guideline_ref_id = $guideline->id;
        //     $guideline_check->save();
        // }
        ここまで削除予定
        */
        
        return redirect('/projects');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $project = Project::find($id);
        $process_results = $project->process_results()->get();
        $process_area_info = \Config::get('const.process_area_info');
        // dd($process_area_info);
        
        return view('projects.show', [
            'project' => $project,
            'process_results' => $process_results,
            'process_area_info' => $process_area_info,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $process_area_info = \Config::get('const.process_area_info');
        $man3_bp_amount = \Config::get('const.bp_amount.man3');
        $swe1_bp_amount = \Config::get('const.bp_amount.swe1');
        $swe6_bp_amount = \Config::get('const.bp_amount.swe6');
        $this->validate($request,[
            'prj_name' => 'required|max:191',
            'prj_purpose' => 'required|max:191',
            'assessed_organization' => 'required|max:191',
        ]);
        
      
        
        // プロジェクトの情報を更新
        $project = Project::find($id);
        $project->prj_name = $request->prj_name;
        $project->prj_purpose = $request->prj_purpose;
        $project->assessed_organization = $request->assessed_organization;
        $project->assessment_date = $request->assessment_date;
        $project->process_scope = $request->process_scope;
        $project->location = $request->location;
        $project->assessor = $request->assessor;
        $project->interviewed_person = $request->interviewed_person;
        $project->save();
        
        
        $i = 0;
        $j = 0;
        $k = 0;
        $count=true;
        
        foreach($process_area_info as $a_process_area_info)
        {
            $process_results = Process_result::where('project_id', $id)->where('process_area_name', $a_process_area_info['process_area_name'])->first();
            $process_results->process_result = $request->process_result[$i];
            $process_results->process_comment = $request->process_comment[$i];
            $process_results->save();
            $i++;
            
            
            //各BPのデータを更新
            $process_id = $process_results->id;
            $bp_amount = $a_process_area_info['bp_amount'];
            
            for ($bp_number=1; $bp_number <= $bp_amount; $bp_number++)
            {
                $bp_results = Bp_result::where('process_id', $process_id)->where('bp_number','BP' . $bp_number)->first();
                $bp_results->bp_result = $request->bp_result[$j]; 
                $bp_results->save();
                $j++;
                
                //エビデンスの情報を更新(2つ固定)
                $evidence = $bp_results->evidence()->get();
                foreach ($evidence as $a_evidence)
                {
                    $a_evidence->evidence_type = $request->evidence_type[$k];
                    $a_evidence->evidence_comment = $request->evidence_comment[$k];
                    $a_evidence->evidence_document = $request->evidence_document[$k];
                    $a_evidence->save();
                    $k++;
                }
                
            }
            $count = false;
           
        }
        
        return redirect('/projects');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    
    
}
