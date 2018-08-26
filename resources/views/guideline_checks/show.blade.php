@extends('layouts.app')

@section('content')
    <h1>{{ $project->prj_name }}のガイドラインチェック</h1>
    
    <!--ガイドラインのチェック状況を表示/更新フォーム-->
    <!--プロセスエリアの切り替え用タブ-->
    <ul class="nav nav-pills">
        <li class="active"><a href="#man3" data-toggle="tab">MAN.3</a></li>
        <li><a href="#swe1" data-toggle="tab">SWE.1</a></li>
        <li><a href="#swe6" data-toggle="tab">SWE.6</a></li>
    </ul>
    {!! Form::model($project, ['route' => ['guidelinechecks.update', $project->id], 'method'=> 'put',]) !!}
        <div class="tab-content">
            <!--TAB"MAN.3#を選択時の表示-->
            <div class="tab-pane active" id="man3">
                <table class="table table-bordered">
                    <thead>
                        <tr class="bg-success">
                            <th class="text-center">チェック結果</th>
                            <th class="text-center">ガイドライン番号</th>
                            <th class="text-center">概要</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!--対象プロジェクトのMan3に紐づくガイドラインチェック結果を取得する-->
                        
                        
                        @foreach($process_results as $process_result)
                            <?php $guideline_checks = $process_result->guideline_checks()->get(); ?>
                            
                                @foreach($guideline_checks as $guideline_check)
                                    <?php $guideline =  $guideline_check->guideline()->where('process_area_name', 'MAN.3')->get(); ?>
                                    @if($guideline->first())
                                    <tr>
                                        <td>{!! Form::text('guideline_result[]', $guideline_check->guideline_result, ['class' => 'form-control']) !!}</td>
                                        <td>{{ $guideline->first()->guideline_id }}</td>
                                        <td>{{ $guideline->first()->guideline_description }}</td>
                                    </tr>
                                    @endif
                                @endforeach
                        @endforeach
                        
                    </tbody>
                </table>
            </div>
            
            
            <!--TAB"SWE.1"を選択時の表示-->
            <div class="tab-pane active" id="swe1">
                <table class="table table-bordered">
                    <thead>
                        <tr class="bg-success">
                            <th class="text-center">チェック結果</th>
                            <th class="text-center">ガイドライン番号</th>
                            <th class="text-center">概要</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!--対象プロジェクトのMan3に紐づくガイドラインチェック結果を取得する-->
                        
                        
                        @foreach($process_results as $process_result)
                            <?php $guideline_checks = $process_result->guideline_checks()->get(); ?>
                            
                                @foreach($guideline_checks as $guideline_check)
                                    <?php $guideline =  $guideline_check->guideline()->where('process_area_name', 'SWE.1')->get(); ?>
                                    @if($guideline->first())
                                    <tr>
                                        <td>{!! Form::text('guideline_result[]', $guideline_check->guideline_result, ['class' => 'form-control']) !!}</td>
                                        <td>{{ $guideline->first()->guideline_id }}</td>
                                        <td>{{ $guideline->first()->guideline_description }}</td>
                                    </tr>
                                    @endif
                                @endforeach
                        @endforeach
                        
                    </tbody>
                </table>
            </div>
            
            
                        <!--TAB"SWE.6"を選択時の表示-->
            <div class="tab-pane active" id="swe6">
                <table class="table table-bordered">
                    <thead>
                        <tr class="bg-success">
                            <th class="text-center">チェック結果</th>
                            <th class="text-center">ガイドライン番号</th>
                            <th class="text-center">概要</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!--対象プロジェクトのMan3に紐づくガイドラインチェック結果を取得する-->
                        
                        
                        @foreach($process_results as $process_result)
                            <?php $guideline_checks = $process_result->guideline_checks()->get(); ?>
                            
                                @foreach($guideline_checks as $guideline_check)
                                    <?php $guideline =  $guideline_check->guideline()->where('process_area_name', 'SWE.6')->get(); ?>
                                    @if($guideline->first())
                                    <tr>
                                        <td>{!! Form::text('guideline_result[]', $guideline_check->guideline_result, ['class' => 'form-control']) !!}</td>
                                        <td>{{ $guideline->first()->guideline_id }}</td>
                                        <td>{{ $guideline->first()->guideline_description }}</td>
                                    </tr>
                                    @endif
                                @endforeach
                        @endforeach
                        
                    </tbody>
                </table>
            </div>
            
            
            
        </div>
    {!! Form::close() !!}
@endsection