@extends('layouts.app')

@section('content')
    @if (count($projects) > 0)
            <table class="table table-bordered">
                <thead>
                    <tr class="text-center bg-primary">
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
                                <!--表示する値によって、背景色を分ける-->
                                @if ($process_results->where('project_id', $project->id)->where('process_area_name', 'MAN.3')->first()->process_result == "F" )
                                    <td class="text-center bg-success">{{ $process_results->where('project_id', $project->id)->where('process_area_name', 'MAN.3')->first()->process_result }}</td>
                                @elseif($process_results->where('project_id', $project->id)->where('process_area_name', 'MAN.3')->first()->process_result == "L" )
                                    <td class="text-center bg-info">{{ $process_results->where('project_id', $project->id)->where('process_area_name', 'MAN.3')->first()->process_result }}</td>
                                @elseif($process_results->where('project_id', $project->id)->where('process_area_name', 'MAN.3')->first()->process_result == "P" )
                                    <td class="text-center bg-warning">{{ $process_results->where('project_id', $project->id)->where('process_area_name', 'MAN.3')->first()->process_result }}</td>
                                @elseif($process_results->where('project_id', $project->id)->where('process_area_name', 'MAN.3')->first()->process_result == "N" )
                                    <td class="text-center bg-danger">{{ $process_results->where('project_id', $project->id)->where('process_area_name', 'MAN.3')->first()->process_result }}</td>
                                @else
                                    <td class="text-center">{{ $process_results->where('project_id', $project->id)->where('process_area_name', 'MAN.3')->first()->process_result }}</td>
                                @endif
                            @endif
                            @if ($process_results->where('project_id', $project->id)->where('process_area_name', 'SWE.1')->first())
                                @if ($process_results->where('project_id', $project->id)->where('process_area_name', 'SWE.1')->first()->process_result == "F")
                                    <td class="text-center bg-success">{{ $process_results->where('project_id', $project->id)->where('process_area_name', 'SWE.1')->first()->process_result }}</td>
                                @elseif ($process_results->where('project_id', $project->id)->where('process_area_name', 'SWE.1')->first()->process_result == "L")
                                    <td class="text-center bg-info">{{ $process_results->where('project_id', $project->id)->where('process_area_name', 'SWE.1')->first()->process_result }}</td>
                                @elseif ($process_results->where('project_id', $project->id)->where('process_area_name', 'SWE.1')->first()->process_result == "P")
                                    <td class="text-center bg-warning">{{ $process_results->where('project_id', $project->id)->where('process_area_name', 'SWE.1')->first()->process_result }}</td>
                                @elseif ($process_results->where('project_id', $project->id)->where('process_area_name', 'SWE.1')->first()->process_result == "N")
                                    <td class="text-center bg-danger">{{ $process_results->where('project_id', $project->id)->where('process_area_name', 'SWE.1')->first()->process_result }}</td>     
                                @else
                                    <td class="text-center">{{ $process_results->where('project_id', $project->id)->where('process_area_name', 'SWE.1')->first()->process_result }}</td>
                                @endif
                            @endif
                            
                            @if ($process_results->where('project_id', $project->id)->where('process_area_name', 'SWE.6')->first())
                                @if ($process_results->where('project_id', $project->id)->where('process_area_name', 'SWE.6')->first()->process_result =="F")
                                    <td class="text-center bg-success">{{ $process_results->where('project_id', $project->id)->where('process_area_name', 'SWE.6')->first()->process_result }}</td>
                                @elseif ($process_results->where('project_id', $project->id)->where('process_area_name', 'SWE.6')->first()->process_result =="L")
                                    <td class="text-center bg-info">{{ $process_results->where('project_id', $project->id)->where('process_area_name', 'SWE.6')->first()->process_result }}</td>
                                @elseif ($process_results->where('project_id', $project->id)->where('process_area_name', 'SWE.6')->first()->process_result =="P")
                                    <td class="text-center bg-warning">{{ $process_results->where('project_id', $project->id)->where('process_area_name', 'SWE.6')->first()->process_result }}</td>
                                @elseif ($process_results->where('project_id', $project->id)->where('process_area_name', 'SWE.6')->first()->process_result =="N")
                                    <td class="text-center bg-danger">{{ $process_results->where('project_id', $project->id)->where('process_area_name', 'SWE.6')->first()->process_result }}</td>
                                @else
                                    <td class="text-center">{{ $process_results->where('project_id', $project->id)->where('process_area_name', 'SWE.6')->first()->process_result }}</td>
                                @endif
                                
                            @endif
                        </tr>
                    @endforeach
                </tbody>
            </table>
    @endif
@endsection