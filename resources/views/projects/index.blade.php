@extends('layouts.app')

@section('content')
    @if (count($projects) > 0)
            <table class="table table-bordered">
                <thead>
                    <tr class="text-center bg-success">
                        <th class="text-center" style="width:100px; font-size:10px; vertical-align: middle;">プロジェクト名</th>
                            @foreach($process_area_info as $a_process_area_info)
                                <th class="text-center" style="width:50px; font-size:10px; vertical-align: middle;">{{ $a_process_area_info['process_area_name'] }}</th>
                            @endforeach
                    </tr>
                </thead>
                <tbody>
                    @foreach ($projects as $project) 
                        <tr>
                            <td class="text-center" style="width:100px;">{!! link_to_route('projects.show', $project->prj_name, ['id' => $project->id]) !!}</td>
                                @foreach($process_area_info as $a_process_area_info)
                                    @if ($process_results->where('project_id', $project->id)->where('process_area_name', $a_process_area_info['process_area_name'])->first())
                                    <!--表示する値によって、背景色を分ける-->
                                        <?php $p_result =$process_results->where('project_id', $project->id)->where('process_area_name', $a_process_area_info['process_area_name'])->first()->process_result; ?>
                                        <td class="text-center {{ \Config::get('const.back_ground')[$p_result] }}">{{ $p_result }}</td>
                                    @else
                                        <td class="text-center" style="background-color: #ddd">-</td>
                                    @endif
                                @endforeach
                        </tr>
                    @endforeach
                </tbody>
            </table>
    @endif
@endsection
