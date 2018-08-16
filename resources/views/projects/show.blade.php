@extends('layouts.app')

@section('content')
    <h1>{{ $project->prj_name }}の詳細</h1>
    
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-offset-1 col-md-10 col-lg-offset-1 col-lg-10">
            {!! Form::model($project, ['route' => ['projects.update', $project->id], 'method'=> 'put',]) !!}
                
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th class="text-center bg-success">評価目的</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{!! Form::text('prj_purpose', null, ['class' => 'form-control input-lg']) !!}</td>
                        </tr>
                    </tbody>
                    

                <!--projectsのテーブルデータ更新フォーム-->
                <table class="table table-bordered">
                    <tr>
                        <th class="text-center bg-success">プロジェクト名</th>
                        <td>{!! Form::text('prj_name', null, ['class' => 'form-control']) !!}</td>
                    </tr>
                    
                    <tr>
                        <th class="text-center bg-success">被アセスメント組織</th>
                        <td>{!! Form::text('assessed_organization', null, ['class' => 'form-control']) !!}</td>
                        <th class="text-center bg-success">実施日</th>
                        <td>{!! Form::date('assessment_date', null, ['class' => 'form-control']) !!}</td>
                    </tr>
                    
                    <tr>
                        <th class="text-center bg-success">対象プロセス</th>
                        <td>{!! Form::text('process_scope', null, ['class' => 'form-control']) !!}</td>
                        <th class="text-center bg-success">場所</th>
                        <td>{!! Form::text('location', null, ['class' => 'form-control']) !!}</td>
                    </tr>
                    
                    <tr>
                        <th class="text-center bg-success">アセッサー</th>
                        <td>{!! Form::text('assessor', null, ['class' => 'form-control']) !!}</td>
                        <th class="text-center bg-success">インタビューされた人</th>
                        <td>{!! Form::text('interviewed_person', null, ['class' => 'form-control']) !!}</td>
                    </tr>
                    
                </table>
                
            <!-- process_resultsのデータ更新フォーム-->
            <!--プロセスエリア切り替え用のタブ-->
                <ul class="nav nav-pills">
                    <li class="active"><a href="#man3" data-toggle="tab">MAN.3</a></li>
                    <li><a href="#swe1" data-toggle="tab">SWE.1</a></li>
                    <li><a href="#swe6" data-toggle="tab">SWE.6</a></li>
                </ul>
                <div class="tab-content">
                    
                    <div class="tab-pane active" id="man3">
                        <table class="table table-bordered">
                            <thead>
                                <tr class="bg-success">
                                    <th class="text-center col-xs-2 col-sm-2 col-md-2 col-lg-2">MAN.3評定</th>
                                    <th class="text-center">MAN.3コメント</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>{!! Form::text('MAN3_process_result', $process_results->where('process_area_name', 'MAN.3')->first()->process_result, ['class' => 'form-control']) !!}</td>
                                    <td>{!! Form::text('MAN3_process_comment', $process_results->where('process_area_name', 'MAN.3')->first()->process_comment, ['class' => 'form-control']) !!}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    
                    
                    <div class="tab-pane" id="swe1">
                        <div class="form-group">
                            {!! Form::label('process_results', 'SWE.1評定') !!}
                            {!! Form::text('SWE1_process_result', $process_results->where('process_area_name', 'SWE.1')->first()->process_result, ['class' => 'form-control']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('process_results', 'SWE.1コメント') !!}
                            {!! Form::text('SWE1_process_comment', $process_results->where('process_area_name', 'SWE.1')->first()->process_comment, ['class' => 'form-control']) !!}
                        </div>
                    </div>
                    
                    <div class="tab-pane" id="swe6">
                        <div class="form-group">
                            {!! Form::label('process_results', 'SWE.6評定') !!}
                            {!! Form::text('SWE6_process_result', $process_results->where('process_area_name', 'SWE.6')->first()->process_result, ['class' => 'form-control']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('process_results', 'SWE.6コメント') !!}
                            {!! Form::text('SWE6_process_comment', $process_results->where('process_area_name', 'SWE.6')->first()->process_comment, ['class' => 'form-control']) !!}
                        </div>
                    </div>
                </div>


                {!! Form::submit('更新',['class' => 'btn btn-primary']) !!}

            {!! Form::close() !!}
        </div>
    </div>


@endsection