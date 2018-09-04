<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Project;
use App\Process_result;
use App\Bp_result;
use App\Evidence;
use App\Guideline;
use App\Guideline_check;



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
        
        $this->validate($request,[
            'prj_name' => 'required|max:191',
            'prj_purpose' => 'required|max:191',
            'assessed_organization' => 'required|max:191',
            'process_scope'=> 'max:191',
            'location' => 'max:191',
            'assessor' => 'max:191',
            'interviewed_person' => 'max:191',
        ]);
        
        
    try{
    // DBトランザクション処理
        \DB::transaction(function () use ($request) {
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
        
    }); //ここまでトランザクション処理
    return redirect('/projects');
    
    }catch(\Exception $e){
        return redirect()->back()->with('message', 'エラーのため、登録されませんでした');
        // return redirect()->back()->with('message', $e->getMessage());
    }
        
        
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
            'process_scope'=> 'max:191',
            'location' => 'max:191',
            'assessor' => 'max:191',
            'interviewed_person' => 'max:191',
            'process_comment' => 'max:191',
            'evidence_comment' => 'max:191',
            'evidence_document' => 'max:191',
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
        
        
        $i = 0; //プロセスに対して、1つのデータがある場合、$requestに対して何番目のデータを扱っているかに使用 (process_resultなど)
        $j = 0; //プロセスに対して、複数のデータがある場合、$requestに対して何番目のデータを扱っているかに使用(bp_resultなど)
        $k = 0; //BPに対して、複数のデータがある場合、$requestに対して何番目のデータを扱っているかに使用(evidenceなど)
        $count=true;
        
        $process_results = $project->process_results()->get();
        foreach($process_results as $process_result)
        {
            // $process_results = Process_result::where('project_id', $id)->where('process_area_name', $a_process_area_info['process_area_name'])->first();
            $process_result->process_result = $request->process_result[$i];
            $process_result->process_comment = $request->process_comment[$i];
            $process_result->save();
            $i++;
            
            
            //各BPのデータを更新
            $process_id = $process_result->id;
            $bp_amount = $process_area_info[$process_result->process_area_name]['bp_amount'];
            // dd($bp_amount);
            for ($bp_number=1; $bp_number <= $bp_amount; $bp_number++)
            {
                $bp_results = Bp_result::where('process_id', $process_id)->where('bp_number','BP' . $bp_number)->first();
                // dd($bp_results);
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
