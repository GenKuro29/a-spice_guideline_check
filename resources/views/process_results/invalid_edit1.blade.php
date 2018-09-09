
<!-- process_resultsのデータ更新フォーム-->
                <!--プロセスエリア切り替え用のタブ-->
                <ul class="nav nav-pills">
                    <?php $i=true; ?>
                    @foreach($process_area_info as $a_process_area_info)
                        @if($i == true)
                            <li class="active"><a href=#{{ $a_process_area_info['process_area_name'] }} data-toggle="tab">{{ $a_process_area_info['process_area_name'] }}</a></li>
                            <?php $i=false; ?>
                        @else
                            <li ><a href=#{{ $a_process_area_info['process_area_name'] }} data-toggle="tab">{{ $a_process_area_info['process_area_name'] }}</a></li>
                        @endif
                    @endforeach
                </ul>
                {!! link_to_route('guidelinechecks.show', $project->prj_name . "のガイドラインチェック", ['id' => $project->id], ['target' => 'a_blank']) !!}
                <div class="tab-content">
                    
                    <!--TAB"MAN3"選択時の表示-->
                    <div class="tab-pane active" id="MAN3">
                        <table class="table table-bordered">
                            <thead>
                                <tr class="bg-success">
                                    <th class="text-center col-xs-2 col-sm-2 col-md-2 col-lg-2">MAN3評定</th>
                                    <th class="text-center">MAN3コメント</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>{!! Form::select('MAN3_process_result',[''=>'', 'F'=>'F', 'L'=>'L', 'P'=>'P', 'N'=>'N'],  $process_results->where('process_area_name', 'MAN3')->first()->process_result, ['class' => 'form-control']) !!}</td>
                                    <td>{!! Form::textarea('MAN3_process_comment', $process_results->where('process_area_name', 'MAN3')->first()->process_comment, ['class' => 'form-control', 'rows' => '2']) !!}</td>
                                </tr>
                            </tbody>
                        </table>
                        <table class="table table-bordered">
                            <thead>
                                <tr class="bg-success">
                                    <th class="text-center">BP</th>
                                    <th class="text-center">評定</th>
                                    <th class="text-center">種別</th>
                                    <th class="text-center">コメント</th>
                                    <th class="text-center">エビデンス</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    $man3_bp_results = $process_results->where('process_area_name','MAN3')->first()->bp_results()->get();
                                ?>
                                @foreach ($man3_bp_results as $man3_bp_result)
                                    
                                    <?php
                                        $first = true; //rowspanで初回のみ表示するコンテンツを制御する
                                        // 対象BPに紐づくエビデンスのデータを全て取得する
                                        $evidence = $man3_bp_result->evidence()->get();
                                    ?>
                                    @foreach ($evidence as $a_evidence)
                                        <tr>
                                            @if ($first == true)
                                                <td rowspan="2">{{ $man3_bp_result->bp_number }}</td>
                                                <td rowspan="2">{!! Form::select('man3_bp_result[]',['null'=>'', 'F'=>'F', 'L'=>'L', 'P'=>'P', 'N'=>'N'],  $man3_bp_result->bp_result, ['class' => 'form-control']) !!}</td>
                                                <?php $first = false; ?>
                                            @endif
                                            <td>{!! Form::select('man3_evidence_type[]',['null'=>'', 'strength'=>'+', 'weakness'=>'-', 'neutral'=>'±'],  $a_evidence->evidence_type, ['class' => 'form-control']) !!}</td>
                                            <td>{!! Form::textarea('man3_evidence_comment[]', $a_evidence->evidence_comment, ['class' => 'form-control', 'rows' => '2']) !!}</td>
                                            <td>{!! Form::text('man3_evidence_document[]', $a_evidence->evidence_document, ['class' => 'form-control']) !!}</td>
                                        </tr>
                                    @endforeach
                                    
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    
                    <!--TAB"SWE1"選択時の表示-->
                    <div class="tab-pane" id="SWE1">
                        <table class="table table-bordered">
                            <thead>
                                <tr class="bg-success">
                                    <th class="text-center col-xs-2 col-sm-2 col-md-2 col-lg-2">SWE1評定</th>
                                    <th class="text-center">SWE1コメント</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>{!! Form::select('SWE1_process_result',[''=>'', 'F'=>'F', 'L'=>'L', 'P'=>'P', 'N'=>'N'], $process_results->where('process_area_name', 'SWE1')->first()->process_result, ['class' => 'form-control']) !!}</td>
                                    <td>{!! Form::textarea('SWE1_process_comment', $process_results->where('process_area_name', 'SWE1')->first()->process_comment, ['class' => 'form-control', 'rows' => '2']) !!}</td>
                                </tr>
                            </tbody>
                        </table>
                         <table class="table table-bordered">
                            <thead>
                                <tr class="bg-success">
                                    <th class="text-center">BP</th>
                                    <th class="text-center">評定</th>
                                    <th class="text-center">種別</th>
                                    <th class="text-center">コメント</th>
                                    <th class="text-center">エビデンス</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                $swe1_bp_results = $process_results->where('process_area_name','SWE1')->first()->bp_results()->get();
                                ?>
                                @foreach ($swe1_bp_results as $swe1_bp_result)
                                    <?php
                                        $first = true; //rowspanで初回のみ表示するコンテンツを制御する
                                        // 対象BPに紐づくエビデンスのデータを全て取得する
                                        $evidence = $swe1_bp_result->evidence()->get();
                                    ?>
                                    @foreach ($evidence as $a_evidence)
                                        <tr>
                                            @if ($first == true)
                                                <td rowspan="2">{{ $swe1_bp_result->bp_number }}</td>
                                                <td rowspan="2">{!! Form::select('swe1_bp_result[]',['null'=>'', 'F'=>'F', 'L'=>'L', 'P'=>'P', 'N'=>'N'],  $swe1_bp_result->bp_result, ['class' => 'form-control']) !!}</td>
                                                <?php $first = false; ?>
                                            @endif
                                            <td>{!! Form::select('swe1_evidence_type[]',['null'=>'', 'strength'=>'+', 'weakness'=>'-', 'neutral'=>'±'],  $a_evidence->evidence_type, ['class' => 'form-control']) !!}</td>
                                            <td>{!! Form::textarea('swe1_evidence_comment[]', $a_evidence->evidence_comment, ['class' => 'form-control', 'rows' => '2']) !!}</td>
                                            <td>{!! Form::text('swe1_evidence_document[]', $a_evidence->evidence_document, ['class' => 'form-control']) !!}</td>
                                        </tr>
                                    @endforeach
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                    <!--TAB"SWE6"選択時の表示-->
                    <div class="tab-pane" id="SWE6">
                        <table class="table table-bordered">
                            <thead>
                                <tr class="bg-success">
                                    <th class="text-center col-xs-2 col-sm-2 col-md-2 col-lg-2">SWE6評定</th>
                                    <th class="text-center">SWE6コメント</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>{!! Form::select('SWE6_process_result', [''=>'', 'Fully'=>'F', 'L'=>'L', 'P'=>'P', 'N'=>'N'], $process_results->where('process_area_name', 'SWE6')->first()->process_result, ['class' => 'form-control']) !!}</td>
                                    <td>{!! Form::textarea('SWE6_process_comment', $process_results->where('process_area_name', 'SWE6')->first()->process_comment, ['class' => 'form-control', 'rows' => '2']) !!}</td>
                                </tr>
                            </tbody>
                        </table>
                         <table class="table table-bordered">
                            <thead>
                                <tr class="bg-success">
                                    <th class="text-center">BP</th>
                                    <th class="text-center">評定</th>
                                    <th class="text-center">種別</th>
                                    <th class="text-center">コメント</th>
                                    <th class="text-center">エビデンス</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                $swe6_bp_results = $process_results->where('process_area_name','SWE6')->first()->bp_results()->get();
                                ?>
                                @foreach ($swe6_bp_results as $swe6_bp_result)
                                    <?php
                                        $first = true; //rowspanで初回のみ表示するコンテンツを制御する
                                        // 対象BPに紐づくエビデンスのデータを全て取得する
                                        $evidence = $swe6_bp_result->evidence()->get();
                                    ?>
                                    @foreach ($evidence as $a_evidence)
                                        <tr>
                                            @if ($first == true)
                                                <td rowspan="2">{{ $swe6_bp_result->bp_number }}</td>
                                                <td rowspan="2">{!! Form::select('swe6_bp_result[]',['null'=>'', 'F'=>'F', 'L'=>'L', 'P'=>'P', 'N'=>'N'],  $swe6_bp_result->bp_result, ['class' => 'form-control']) !!}</td>
                                                <?php $first = false; ?>
                                            @endif
                                            <td>{!! Form::select('swe6_evidence_type[]',['null'=>'', 'strength'=>'+', 'weakness'=>'-', 'neutral'=>'±'],  $a_evidence->evidence_type, ['class' => 'form-control']) !!}</td>
                                            <td>{!! Form::textarea('swe6_evidence_comment[]', $a_evidence->evidence_comment, ['class' => 'form-control', 'rows' => '2']) !!}</td>
                                            <td>{!! Form::text('swe6_evidence_document[]', $a_evidence->evidence_document, ['class' => 'form-control']) !!}</td>
                                        </tr>
                                    @endforeach
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>