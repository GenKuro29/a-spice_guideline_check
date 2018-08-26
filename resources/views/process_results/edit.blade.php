
<!-- process_resultsのデータ更新フォーム-->
                <!--プロセスエリア切り替え用のタブ-->
                <ul class="nav nav-pills">
                    <li class="active"><a href="#man3" data-toggle="tab">MAN.3</a></li>
                    <li><a href="#swe1" data-toggle="tab">SWE.1</a></li>
                    <li><a href="#swe6" data-toggle="tab">SWE.6</a></li>
                </ul>
                {!! link_to_route('guidelinechecks.show', $project->prj_name . "のガイドラインチェック", ['id' => $project->id], ['target' => 'a_blank']) !!}
                <div class="tab-content">
                    
                    <!--TAB"MAN.3"選択時の表示-->
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
                                    <td>{!! Form::textarea('MAN3_process_comment', $process_results->where('process_area_name', 'MAN.3')->first()->process_comment, ['class' => 'form-control', 'rows' => '2']) !!}</td>
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
                                    $man3_bp_results = $process_results->where('process_area_name','MAN.3')->first()->bp_results()->get();
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
                                                <td rowspan="2">{!! Form::text('man3_bp_result[]', $man3_bp_result->bp_result, ['class' => 'form-control']) !!}</td>
                                                <?php $first = false; ?>
                                            @endif
                                            <td>{!! Form::text('man3_evidence_type[]', $a_evidence->evidence_type, ['class' => 'form-control']) !!}</td>
                                            <td>{!! Form::text('man3_evidence_comment[]', $a_evidence->evidence_comment, ['class' => 'form-control']) !!}</td>
                                            <td>{!! Form::text('man3_evidence_document[]', $a_evidence->evidence_document, ['class' => 'form-control']) !!}</td>
                                        </tr>
                                    @endforeach
                                    
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    
                    <!--TAB"SWE.1"選択時の表示-->
                    <div class="tab-pane" id="swe1">
                        <table class="table table-bordered">
                            <thead>
                                <tr class="bg-success">
                                    <th class="text-center col-xs-2 col-sm-2 col-md-2 col-lg-2">SWE.1評定</th>
                                    <th class="text-center">SWE.1コメント</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>{!! Form::text('SWE1_process_result', $process_results->where('process_area_name', 'SWE.1')->first()->process_result, ['class' => 'form-control']) !!}</td>
                                    <td>{!! Form::textarea('SWE1_process_comment', $process_results->where('process_area_name', 'SWE.1')->first()->process_comment, ['class' => 'form-control', 'rows' => '2']) !!}</td>
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
                                $swe1_bp_results = $process_results->where('process_area_name','SWE.1')->first()->bp_results()->get();
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
                                                <td rowspan="2">{!! Form::text('swe1_bp_result[]', $swe1_bp_result->bp_result, ['class' => 'form-control']) !!}</td>
                                                <?php $first = false; ?>
                                            @endif
                                            <td>{!! Form::text('swe1_evidence_type[]', $a_evidence->evidence_type, ['class' => 'form-control']) !!}</td>
                                            <td>{!! Form::text('swe1_evidence_comment[]', $a_evidence->evidence_comment, ['class' => 'form-control']) !!}</td>
                                            <td>{!! Form::text('swe1_evidence_document[]', $a_evidence->evidence_document, ['class' => 'form-control']) !!}</td>
                                        </tr>
                                    @endforeach
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                    <!--TAB"SWE.6"選択時の表示-->
                    <div class="tab-pane" id="swe6">
                        <table class="table table-bordered">
                            <thead>
                                <tr class="bg-success">
                                    <th class="text-center col-xs-2 col-sm-2 col-md-2 col-lg-2">SWE.6評定</th>
                                    <th class="text-center">SWE.6コメント</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>{!! Form::text('SWE6_process_result', $process_results->where('process_area_name', 'SWE.6')->first()->process_result, ['class' => 'form-control']) !!}</td>
                                    <td>{!! Form::textarea('SWE6_process_comment', $process_results->where('process_area_name', 'SWE.6')->first()->process_comment, ['class' => 'form-control', 'rows' => '2']) !!}</td>
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
                                $swe6_bp_results = $process_results->where('process_area_name','SWE.6')->first()->bp_results()->get();
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
                                                <td rowspan="2">{!! Form::text('swe6_bp_result[]', $swe6_bp_result->bp_result, ['class' => 'form-control']) !!}</td>
                                                <?php $first = false; ?>
                                            @endif
                                            <td>{!! Form::text('swe6_evidence_type[]', $a_evidence->evidence_type, ['class' => 'form-control']) !!}</td>
                                            <td>{!! Form::text('swe6_evidence_comment[]', $a_evidence->evidence_comment, ['class' => 'form-control']) !!}</td>
                                            <td>{!! Form::text('swe6_evidence_document[]', $a_evidence->evidence_document, ['class' => 'form-control']) !!}</td>
                                        </tr>
                                    @endforeach
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>