<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Project;
use App\Process_result;

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
        
        //SWE.1
        $process_result = new Process_result;
        $process_result->project_id = $project->id;
        $process_result->process_area_name = 'SWE.1';
        $process_result->save();
        
        //SWE.6
        $process_result = new Process_result;
        $process_result->project_id = $project->id;
        $process_result->process_area_name = 'SWE.6';
        $process_result->save();
        
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
        $process_results = Process_result::where('project_id', $id)->get();
        
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
        $process_results->save();

        // SWE.1の結果を更新        
        $process_results = Process_result::where('project_id', $id)->where('process_area_name', 'SWE.1')->first();
        $process_results->process_result = $request->SWE1_process_result;
        $process_results->save();
        
        // SWE.6の結果を更新        
        $process_results = Process_result::where('project_id', $id)->where('process_area_name', 'SWE.6')->first();
        $process_results->process_result = $request->SWE6_process_result;
        $process_results->save();
        
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
