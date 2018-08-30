@extends('layouts.app')

@section('content')
    @if (count($projects) > 0)
            <table class="table table-bordered">
                <thead>
                    <tr class="text-center bg-success">
                        <th class="text-center">プロジェクト名</th>
                            @foreach($process_area_name_lists as $process_area_name_list)
                                <th class="text-center">{{ $process_area_name_list }}</th>
                            @endforeach
                    </tr>
                </thead>
                <tbody>
                    @foreach ($projects as $project) 
                        <tr>
                            <td class="text-center">{!! link_to_route('projects.show', $project->prj_name, ['id' => $project->id]) !!}</td>
                                @foreach($process_area_name_lists as $process_area_name_list)
                                    @if ($process_results->where('project_id', $project->id)->where('process_area_name', $process_area_name_list)->first())
                                    <!--表示する値によって、背景色を分ける-->
                                        <?php $p_result =$process_results->where('project_id', $project->id)->where('process_area_name', $process_area_name_list)->first()->process_result; ?>
                                        <td class="text-center {{ \Config::get('const.back_ground')[$p_result] }}">{{ $p_result }}</td>
                                    @endif
                                @endforeach
                        </tr>
                    @endforeach
                </tbody>
            </table>
    @endif
@endsection