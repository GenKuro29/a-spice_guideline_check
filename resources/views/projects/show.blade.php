@extends('layouts.app')

@section('content')
    <h1>id: {{ $project->name }}の詳細</h1>
    
    <div class="row">
        <div class="col-xs-12 col-sm-offset-2 col-sm-8 col-md-offset-2 col-md-8 col-lg-offset-3 col-lg-6">
            {!! Form::model($project, ['route' => ['projects.update', $project->id], 'method'=> 'put']) !!}
                
                <!--projectsのテーブルデータ更新フォーム-->
                
                <div class="form-group">
                    {!! Form::label('prj_name', 'プロジェクト名') !!}
                    {!! Form::text('prj_name', null, ['class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('prj_purpose', '目的') !!}
                    {!! Form::text('prj_purpose', null, ['class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('assessed_organization', '被アセスメント組織') !!}
                    {!! Form::text('assessed_organization', null, ['class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('assessment_date', 'アセスメント実施日') !!}
                    {!! Form::date('assessment_date', null, ['class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('process_scope', '対象プロセス') !!}
                    {!! Form::text('process_scope', null, ['class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('location', '場所') !!}
                    {!! Form::text('location', null, ['class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('assessor', 'アセッサー') !!}
                    {!! Form::text('assessor', null, ['class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('interviewed_person', 'インタビューされた人') !!}
                    {!! Form::text('interviewed_person', null, ['class' => 'form-control']) !!}
                </div>
                <!-- process_resultsのテーブルデータ更新フォーム-->
                    <div class="form-group">
                        {!! Form::label('process_results', 'MAN.3評定') !!}
                        {!! Form::text('MAN3_process_result', $process_results->where('process_area_name', 'MAN.3')->first()->process_result, ['class' => 'form-control']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('process_results', 'SWE.1評定') !!}
                        {!! Form::text('SWE1_process_result', $process_results->where('process_area_name', 'SWE.1')->first()->process_result, ['class' => 'form-control']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('process_results', 'SWE.6評定') !!}
                        {!! Form::text('SWE6_process_result', $process_results->where('process_area_name', 'SWE.6')->first()->process_result, ['class' => 'form-control']) !!}
                    </div>

                {!! Form::submit('更新',['class' => 'btn btn-default']) !!}

            {!! Form::close() !!}
        </div>
    </div>


@endsection