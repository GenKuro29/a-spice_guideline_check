@extends('layouts.app')

@section('content')
    <h1>{{ $project->prj_name }}のガイドラインチェック</h1>
    
    <!--ガイドラインのチェック状況を表示/更新フォーム-->
    <!--プロセスエリアの切り替え用タブ-->
    <ul class="nav nav-pills">
        <li class="active"><a href="#man3" data-toggle="tab">MAN.3</a></li>
        <li><a href="#sew1" data-toggle="tab">SWE.1</a></li>
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

                        <?php
                            $man3_guideline_checks = $process_results->where('process_area_name','MAN.3')->first()->guideline_checks()->get();
                        ?>
                        
                        @foreach ($project_guideline_checks as $project_guideline_check)
                            <tr>
                                <td>{!! Form::text('man3_guideline_result[]', $project_guideline_check['guideline_result'], ['class' => 'form-control']) !!}</td>
                                <td>{{ $project_guideline_check['guideline_ref_id'] }}</td>
                                <td>{{ $project_guideline_check['guideline_ref_id'] }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    {!! Form::close() !!}
@endsection