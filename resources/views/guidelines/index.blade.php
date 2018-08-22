@extends('layouts.app')

@section('content')
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
        <div class="tab-pane" id="swe1">
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
        <div class="tab-pane" id="swe6">
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