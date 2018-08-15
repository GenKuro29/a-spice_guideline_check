@extends('layouts.app')

@section('content')
    @if (count($projects) > 0)
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>プロジェクト名</th>
                        <th>MAN.3</th>
                        <th>SWE.1</th>
                        <!--<th>SWE.6</th>-->
                    </tr>
                </thead>
                <tbody>
                    @foreach ($projects as $project) 
                        <tr>
                            <!--<td>{{ $project->prj_name }}</td>-->
                            <td>{!! link_to_route('projects.show', $project->prj_name, ['id' => $project->id]) !!}</td>
                            <td>{{ $process_results->where('project_id', $project->id)->where('process_area_name', 'MAN.3')->first()->process_result }}</td>
                            <td>{{ $process_results->where('project_id', $project->id)->where('process_area_name', 'SWE.1')->first()->process_result }}</td>
                            <!--<td>{{ $process_results->first()->process_result }}</td>-->
                            <!--<td>{{ $process_results->find(2)->process_result }}</td>-->
                        </tr>
                    @endforeach
                </tbody>
            </table>
    @endif
@endsection