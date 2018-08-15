@extends('layouts.app')

@section('content')

    <h1>プロジェクトの新規登録</h1>
    
    {!! Form::model($project, ['route' => 'projects.store']) !!}
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
        
        {!! Form::submit('登録', ['class' => 'btn btn-primary btn-block']) !!}
    {!! Form::close() !!}
        
@endsection