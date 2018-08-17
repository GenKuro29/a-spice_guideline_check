<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Project;
use App\Process_result;
use App\Bp_result;
use App\Evidence;

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

        return view('projects.index', [
            'projects' => $projects,
            'process_results' => $process_results,
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
        //テーブル"projects"にデータを保存
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
        //MAN.3
        $process_result = new Process_result;
        $process_result->project_id = $project->id;
        $process_result->process_area_name = 'MAN.3';
        $process_result->save();
        
        //テーブル(process_results)に必ず紐づく子テーブル(bp_results)のレコードを作成する
        for ($i=1; $i <11; $i++){
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
        
        //SWE.1
        $process_result = new Process_result;
        $process_result->project_id = $project->id;
        $process_result->process_area_name = 'SWE.1';
        $process_result->save();
        
        //テーブル(process_results)に必ず紐づく子テーブル(bp_results)のレコードを作成する
        for ($i=1; $i <9; $i++){
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
        
        //SWE.6
        $process_result = new Process_result;
        $process_result->project_id = $project->id;
        $process_result->process_area_name = 'SWE.6';
        $process_result->save();
        
        //テーブル(process_results)に必ず紐づく子テーブル(bp_results)のレコードを作成する
        for ($i=1; $i <8; $i++){
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
        
        return view('projects.show', [
            'project' => $project,
            'process_results' => $process_results,
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
        
        // MAN.3の結果を更新
        $process_results = Process_result::where('project_id', $id)->where('process_area_name', 'MAN.3')->first();
        $process_results->process_result = $request->MAN3_process_result;
        $process_results->process_comment = $request->MAN3_process_comment;
        $process_results->save();
        
        
        //各BPのデータを更新
        $man3_process_id = $process_results->id;
        $j=0;
        for ($i=1; $i <11; $i++)
        {
            $bp_results = Bp_result::where('process_id', $man3_process_id)->where('bp_number','BP' . $i)->first();
            $bp_results->bp_result = $request->man3_bp_result[$i-1];
            $bp_results->save();
            
            //エビデンスの情報を更新(2つ固定)
            $evidence = $bp_results->evidence()->get();
            foreach ($evidence as $a_evidence)
            {
                $a_evidence->evidence_type = $request->man3_evidence_type[$j];
                $a_evidence->evidence_comment = $request->man3_evidence_comment[$j];
                $a_evidence->evidence_document = $request->man3_evidence_document[$j];
                $a_evidence->save();
                $j++;
            }
            
        }

        // SWE.1の結果を更新        
        $process_results = Process_result::where('project_id', $id)->where('process_area_name', 'SWE.1')->first();
        $process_results->process_result = $request->SWE1_process_result;
        $process_results->process_comment = $request->SWE1_process_comment;
        $process_results->save();
        
        //各BPのデータを更新
        $swe1_process_id = $process_results->id;
        $j=0;
        for ($i=1; $i <9; $i++)
        {
            $bp_results = Bp_result::where('process_id', $swe1_process_id)->where('bp_number','BP' . $i)->first();
            $bp_results->bp_result = $request->swe1_bp_result[$i-1];
            $bp_results->save();
            
            //エビデンスの情報を更新(2つ固定)
            $evidence = $bp_results->evidence()->get();
            foreach ($evidence as $a_evidence)
            {
                $a_evidence->evidence_type = $request->swe1_evidence_type[$j];
                $a_evidence->evidence_comment = $request->swe1_evidence_comment[$j];
                $a_evidence->evidence_document = $request->swe1_evidence_document[$j];
                $a_evidence->save();
                $j++;
            }
        }
        
        // SWE.6の結果を更新        
        $process_results = Process_result::where('project_id', $id)->where('process_area_name', 'SWE.6')->first();
        $process_results->process_result = $request->SWE6_process_result;
        $process_results->process_comment = $request->SWE6_process_comment;
        $process_results->save();
        
        //各BPのデータを更新
        $j=0;
        $swe6_process_id = $process_results->id;
        for ($i=1; $i <8; $i++)
        {
            $bp_results = Bp_result::where('process_id', $swe6_process_id)->where('bp_number','BP' . $i)->first();
            $bp_results->bp_result = $request->swe6_bp_result[$i-1];
            $bp_results->save();
            
             //エビデンスの情報を更新(2つ固定)
            $evidence = $bp_results->evidence()->get();
            foreach ($evidence as $a_evidence)
            {
                $a_evidence->evidence_type = $request->swe6_evidence_type[$j];
                $a_evidence->evidence_comment = $request->swe6_evidence_comment[$j];
                $a_evidence->evidence_document = $request->swe6_evidence_document[$j];
                $a_evidence->save();
                $j++;
            }
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
