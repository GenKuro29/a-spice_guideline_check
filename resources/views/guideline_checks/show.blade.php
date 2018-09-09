@extends('layouts.app')

@section('content')
    <h1>{{ $project->prj_name }}のガイドラインチェック</h1>
    
    <!--ガイドラインのチェック状況を表示/更新フォーム-->
    <!--プロセスエリアの切り替え用タブ-->
    <ul class="nav nav-pills">
        <?php $first=true; ?>
        @foreach($process_results as $process_result)
            @if($first == true)
                <li class="active"><a href=#{{ $process_result->process_area_name }} data-toggle="tab">{{ $process_result->process_area_name }}</a></li>
                <?php $first = false; ?>
            @else
                <li><a href=#{{ $process_result->process_area_name }} data-toggle="tab">{{ $process_result->process_area_name }}</a></li>
            @endif
        @endforeach
    </ul>
    
    
    
    <?php $first = true; ?>
    {!! Form::model($project, ['route' => ['guidelinechecks.update', $project->id], 'method'=> 'put',]) !!}
        <div class="tab-content">
            @foreach($process_results as $process_result)
                @if($first == true)
                    <div class="tab-pane active" id= {{ $process_result->process_area_name }}>
                    <?php $first = false; ?>
                @else
                    <div class="tab-pane" id= {{ $process_result->process_area_name }}>
                @endif
                        <table class="table table-bordered">
                            <thead>
                                <tr class="bg-success">
                                    <th class="text-center col-xs-2 col-sm-2 col-md-1 col-lg-1"">チェック結果</th>
                                    <th class="text-center col-xs-2 col-sm-2 col-md-2 col-lg-2">ガイドライン番号</th>
                                    <th class="text-center">概要</th>
                                </tr>
                            </thead>
                            <tbody>
                                    <!--$process_resultに紐づくガイドラインチェックを取得する-->
                                    <?php $guideline_checks = $process_result->guideline_checks()->get(); ?>
                                    
                                    
                                        @foreach($guideline_checks as $guideline_check)
                                        
                                        <!--ガイドラインチェックに紐づくガイドラインの情報を取得する-->
                                            <?php $guideline =  $guideline_check->guideline()->first(); ?>
                                            @if($guideline->first())
                                                
                                                @if($guideline_check->guideline_rule_check_result === 0)
                                                    <tr class ="bg-danger">
                                                        <td>{!! Form::select('guideline_result[]',['null' => '', 'done' => '済', 'not_yet' => '未'], $guideline_check->guideline_result, ['class' => 'form-control']) !!}</td>
                                                        <td>{{ $guideline->guideline_id }}</td>
                                                        <td>{!! nl2br($guideline->guideline_description) !!}</td>
                                                    </tr>
                                                @else
                                                    <tr>
                                                        <td>{!! Form::select('guideline_result[]',['null' => '', 'done' => '済', 'not_yet' => '未'], $guideline_check->guideline_result, ['class' => 'form-control']) !!}</td>
                                                        <td>{{ $guideline->guideline_id }}</td>
                                                        <td>{!! nl2br($guideline->guideline_description) !!}</td>
                                                    </tr>
                                                @endif    
                                            @endif
                                        @endforeach
                            </tbody>
                        </table>
                    </div>
            @endforeach
        </div>
        
        {!! Form::submit('更新',['class' => 'btn btn-primary']) !!}
    {!! Form::close() !!}
@endsection