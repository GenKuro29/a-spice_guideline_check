<!-- process_resultsのデータ更新フォーム-->
                <!--プロセスエリア切り替え用のタブ-->
                <ul class="nav nav-pills">
                    <li class="active"><a href="#man3" data-toggle="tab">MAN.3</a></li>
                    <li><a href="#swe1" data-toggle="tab">SWE.1</a></li>
                    <li><a href="#swe6" data-toggle="tab">SWE.6</a></li>
                </ul>
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
                                    <td>{!! Form::text('MAN3_process_comment', $process_results->where('process_area_name', 'MAN.3')->first()->process_comment, ['class' => 'form-control']) !!}</td>
                                </tr>
                            </tbody>
                        </table>
                         <table class="table table-bordered">
                            <thead>
                                <tr class="bg-success">
                                    <th class="text-center">BP</th></th>
                                    <th class="text-center">評定</th>
                                    <th class="text-center">種別</th>
                                    <th class="text-center">コメント</th>
                                    <th class="text-center">エビデンス</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($man3_bp_results as $man3_bp_result)
                                    <tr>
                                        <td>{{ $man3_bp_result->bp_number }}</td>
                                        <td>{!! Form::text('man3_bp_result[]', $man3_bp_result->bp_result, ['class' => 'form-control']) !!}</td>
                                        <td>エビデンス_comment</td>
                                        <td>エビデンス_type</td>
                                        <td>エビデンス</td>
                                    </tr>
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
                                    <td>{!! Form::text('SWE1_process_comment', $process_results->where('process_area_name', 'SWE.1')->first()->process_comment, ['class' => 'form-control']) !!}</td>
                                </tr>
                            </tbody>
                        </table>
                         <table class="table table-bordered">
                            <thead>
                                <tr class="bg-success">
                                    <th class="text-center">BP</th></th>
                                    <th class="text-center">評定</th>
                                    <th class="text-center">種別</th>
                                    <th class="text-center">コメント</th>
                                    <th class="text-center">エビデンス</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($swe1_bp_results as $swe1_bp_result)
                                    <tr>
                                        <td>{{ $swe1_bp_result->bp_number }}</td>
                                        <td>{!! Form::text('swe1_bp_result[]', $swe1_bp_result->bp_result, ['class' => 'form-control']) !!}</td>
                                        <td>エビデンス_comment</td>
                                        <td>エビデンス_type</td>
                                        <td>エビデンス</td>
                                    </tr>
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
                                    <td>{!! Form::text('SWE6_process_comment', $process_results->where('process_area_name', 'SWE.6')->first()->process_comment, ['class' => 'form-control']) !!}</td>
                                </tr>
                            </tbody>
                        </table>
                         <table class="table table-bordered">
                            <thead>
                                <tr class="bg-success">
                                    <th class="text-center">BP</th></th>
                                    <th class="text-center">評定</th>
                                    <th class="text-center">種別</th>
                                    <th class="text-center">コメント</th>
                                    <th class="text-center">エビデンス</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($swe6_bp_results as $swe6_bp_result)
                                    <tr>
                                        <td>{{ $swe6_bp_result->bp_number }}</td>
                                        <td>{!! Form::text('swe6_bp_result[]', $swe6_bp_result->bp_result, ['class' => 'form-control']) !!}</td>
                                        <td>エビデンス_comment</td>
                                        <td>エビデンス_type</td>
                                        <td>エビデンス</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>