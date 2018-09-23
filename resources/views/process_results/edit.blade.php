
<!-- process_resultsのデータ更新フォーム-->
                <!--プロセスエリア切り替え用のタブ-->
                <ul class="nav nav-pills">
                    <?php $i=true; ?>
                    @foreach($process_results as $process_result)
                        @if($i == true)
                            <li class="active"><a href=#{{ $process_result->process_area_name }} data-toggle="tab">{{ $process_result->process_area_name }}</a></li>
                            <?php $i=false; ?>
                        @else
                            <li ><a href=#{{ $process_result->process_area_name }} data-toggle="tab">{{ $process_result->process_area_name }}</a></li>
                        @endif
                    @endforeach
                </ul>
                {!! link_to_route('guidelinechecks.show', $project->prj_name . "のガイドラインチェック", ['id' => $project->id], ['target' => 'a_blank']) !!}
                {!! link_to_route('projects.excel', "Excel out", ['id' => $project->id], ['class' => "pull-right"]) !!}
                <div class="tab-content">
                    <?php $i=true; ?>
                    @foreach($process_results as $process_result)
                        @if($i == true)
                            <div class="tab-pane active" id={{ $process_result->process_area_name }}>
                            <?php $i=false; ?>
                        @else
                            <div class="tab-pane" id={{ $process_result->process_area_name }}>
                        @endif
                       
                            <table class="table table-bordered">
                                <thead>
                                    <tr class="bg-success">
                                        <th class="text-center col-xs-2 col-sm-2 col-md-2 col-lg-2">{{ $process_result->process_area_name }}評定</th>
                                        <th class="text-center">{{ $process_result->process_area_name }}コメント</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>{!! Form::select('process_result[]',[''=>'', 'F'=>'F', 'L'=>'L', 'P'=>'P', 'N'=>'N'],  $process_result->process_result, ['class' => 'form-control']) !!}</td>
                                        <td>{!! Form::textarea('process_comment[]', $process_result->process_comment, ['class' => 'form-control', 'rows' => '2']) !!}</td>
                                    </tr>
                                </tbody>
                            </table>
                            <table class="table table-bordered">
                                <thead>
                                    <tr class="bg-success">
                                        <th class="text-center col-xs-1 col-sm-1 col-md-1 col-lg-1">BP</th>
                                        <th class="text-center col-xs-1 col-sm-1 col-md-1 col-lg-1">評定</th>
                                        <th class="text-center col-xs-1 col-sm-1 col-md-1 col-lg-1">コメント種別</th>
                                        <th class="text-center col-xs-6 col-sm-6 col-md-6 col-lg-6">コメント</th>
                                        <th class="text-center col-xs-3 col-sm-3 col-md-3 col-lg-3">エビデンス</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                        $bp_results = $process_result->bp_results()->get();
                                    ?>
                                    
                                        @foreach ($bp_results as $bp_result)
                                        
                                        <?php
                                            $bp_description = App\Bp_description::where('process_area_name', $process_result->process_area_name)->where('bp_number', $bp_result->bp_number)->first();
                                            
                                        ?>
                                            
                                            <?php
                                                $first = true; //rowspanで初回のみ表示するコンテンツを制御する
                                                // 対象BPに紐づくエビデンスのデータを全て取得する
                                                $evidence = $bp_result->evidence()->get();
                                            ?>
                                            <tr>
                                                <td rowspan="3">{{ $bp_result->bp_number }}</td>
                                                @if($bp_description != null)
                                                    <td colspan="4">{!! nl2br($bp_description->bp_description) !!}</td>
                                                @else
                                                    <td colspan="4">(BP概要記載予定)</td>
                                                @endif
                                            </tr>
                                            @foreach ($evidence as $a_evidence)
                                                <tr>
                                                    @if ($first == true)
                                                        <td rowspan="2">{!! Form::select('bp_result[]',['null'=>'', 'F'=>'F', 'L'=>'L', 'P'=>'P', 'N'=>'N'],  $bp_result->bp_result, ['class' => 'form-control']) !!}</td>
                                                        <?php $first = false; ?>
                                                    @endif
                                                    <td>{!! Form::select('evidence_type[]',['null'=>'', 'strength'=>'+', 'weakness'=>'-', 'neutral'=>'±'],  $a_evidence->evidence_type, ['class' => 'form-control']) !!}</td>
                                                    <td>{!! Form::textarea('evidence_comment[]', $a_evidence->evidence_comment, ['class' => 'form-control', 'rows' => '2']) !!}</td>
                                                    <td>{!! Form::text('evidence_document[]', $a_evidence->evidence_document, ['class' => 'form-control']) !!}</td>
                                                </tr>
                                            @endforeach
                                            
                                        @endforeach
                                    
                                </tbody>
                            </table>
                        </div>
                        @endforeach
                </div>