@extends('layouts.app')

@section('content')
    @if (count($projects) > 0)
            <table class="table table-bordered">
                <thead>
                    <tr class="text-center bg-success">
                        <th class="text-center">プロジェクト名</th>
                        <th class="text-center">MAN.3</th>
                        <th class="text-center">SWE.1</th>
                        <th class="text-center">SWE.6</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($projects as $project) 
                        <tr>
                            <td class="text-center">{!! link_to_route('projects.show', $project->prj_name, ['id' => $project->id]) !!}</td>
                            @if ($process_results->where('project_id', $project->id)->where('process_area_name', 'MAN.3')->first())
                                <td class="text-center">{{ $process_results->where('project_id', $project->id)->where('process_area_name', 'MAN.3')->first()->process_result }}</td>
                            @endif
                            @if ($process_results->where('project_id', $project->id)->where('process_area_name', 'SWE.1')->first())    
                                <td class="text-center">{{ $process_results->where('project_id', $project->id)->where('process_area_name', 'SWE.1')->first()->process_result }}</td>
                            @endif
                            @if ($process_results->where('project_id', $project->id)->where('process_area_name', 'SWE.6')->first())    
                                <td class="text-center">{{ $process_results->where('project_id', $project->id)->where('process_area_name', 'SWE.6')->first()->process_result }}</td>
                            @endif
                        </tr>
                    @endforeach
                </tbody>
            </table>
    @endif
@endsection