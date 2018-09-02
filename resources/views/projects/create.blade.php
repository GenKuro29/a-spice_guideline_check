@extends('layouts.app')

@section('content')

    <h1>プロジェクトの新規登録</h1>
    
    @if (session('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif
    
    {!! Form::model($project, ['route' => 'projects.store']) !!}
        <div class="form-group">
            {!! Form::label('prj_name', 'プロジェクト名') !!}
            {!! Form::text('prj_name', old('prj_name'), ['class' => 'form-control', 'value' => old('prj_name')]) !!}
        </div>
        <div class="form-group">
            {!! Form::label('prj_purpose', '目的') !!}
            {!! Form::text('prj_purpose', old('prj_purpose'), ['class' => 'form-control', 'value' => old('prj_purpose')]) !!}
        </div>
        <div class="form-group">
            {!! Form::label('assessed_organization', '被アセスメント組織') !!}
            {!! Form::text('assessed_organization', old('assessed_organization'), ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('assessment_date', 'アセスメント実施日') !!}
            {!! Form::date('assessment_date', old('assessment_date'), ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('process_scope', '対象プロセス') !!}
            {!! Form::text('process_scope', old('process_scope'), ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('location', '場所') !!}
            {!! Form::text('location', old('location'), ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('assessor', 'アセッサー') !!}
            {!! Form::text('assessor', old('assessor'), ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('interviewed_person', 'インタビューされた人') !!}
            {!! Form::text('interviewed_person', old('interviewed_person'), ['class' => 'form-control']) !!}
        </div>
        
        {!! Form::submit('登録', ['class' => 'btn btn-primary']) !!}
    {!! Form::close() !!}
        
@endsection