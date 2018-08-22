@extends('layouts.app')

@section('content')

<h1>ガイドラインの新規登録(管理者用)</h1>

{!! Form::model($guideline, ['route' => 'guidelines.store']) !!}
        <div class="form-group">
            {!! Form::label('process_area_name', 'プロセスエリア') !!}
            {!! Form::text('process_area_name', null, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('guideline_id', 'ガイドラインNo.') !!}
            {!! Form::text('guideline_id', null, ['class' => 'form-control']) !!}
        </div>
            <div class="form-group">
            {!! Form::label('guideline_description', '概要') !!}
            {!! Form::textarea('guideline_description', null, ['class' => 'form-control']) !!}
        </div>
        
        {!! Form::submit('登録', ['class' => 'btn btn-primary']) !!}
    {!! Form::close() !!}

@endsection