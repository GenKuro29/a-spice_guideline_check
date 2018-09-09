@extends('layouts.app')

@section('content')
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
    <div class="tab-content">
        <div class="tab-pane active" id="MAN3">
            <table class="table table-bordered">
                <thead>
                    <tr class="text-center bg-success">
                        <th class="text-center col-xs-2 col-sm-2 col-md-2 col-lg-2">プロセスエリア</th>
                        <th class="text-center col-xs-2 col-sm-2 col-md-2 col-lg-2">ガイドラインNo.</th>
                        <th class="text-center">概要</th>
                    </tr>
                </thead>
                <tbody>
                    @if (count($man3_guidelines) > 0)
                        @foreach ($man3_guidelines as $guideline)
                        <tr>
                            <td class="text-center">{{ $guideline->process_area_name }}</td>
                            <td class="text-center">{{ $guideline->guideline_id }}</td>
                            <td class="text-left">{!! nl2br($guideline->guideline_description) !!}</td>
                        </tr>
                        @endforeach
                    @endif
                </tbody>
            </table>
        </div>
        <div class="tab-pane" id="SWE1">
            <table class="table table-bordered">
                <thead>
                    <tr class="text-center bg-success">
                        <th class="text-center col-xs-2 col-sm-2 col-md-2 col-lg-2">プロセスエリア</th>
                        <th class="text-center col-xs-2 col-sm-2 col-md-2 col-lg-2">ガイドラインNo.</th>
                        <th class="text-center">概要</th>
                    </tr>
                </thead>
                <tbody>
                    @if (count($swe1_guidelines) > 0)
                        @foreach ($swe1_guidelines as $guideline)
                        <tr>
                            <td class="text-center">{{ $guideline->process_area_name }}</td>
                            <td class="text-center">{{ $guideline->guideline_id }}</td>
                            <td class="text-left">{!! nl2br($guideline->guideline_description) !!}</td>
                        </tr>
                        @endforeach
                    @endif
                </tbody>
            </table>
        </div>
        <div class="tab-pane" id="SWE6">
            <table class="table table-bordered">
                <thead>
                    <tr class="text-center bg-success">
                        <th class="text-center col-xs-2 col-sm-2 col-md-2 col-lg-2">プロセスエリア</th>
                        <th class="text-center col-xs-2 col-sm-2 col-md-2 col-lg-2">ガイドラインNo.</th>
                        <th class="text-center">概要</th>
                    </tr>
                </thead>
                <tbody>
                    @if (count($swe6_guidelines) > 0)
                        @foreach ($swe6_guidelines as $guideline)
                        <tr>
                            <td class="text-center">{{ $guideline->process_area_name }}</td>
                            <td class="text-center">{{ $guideline->guideline_id }}</td>
                            <td class="text-left">{!! nl2br($guideline->guideline_description) !!}</td>
                        </tr>
                        @endforeach
                    @endif
                </tbody>
            </table>
        </div>
    </div>
@endsection