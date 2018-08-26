@extends('layouts.app')

@section('content')
    <h1>{{ $project->prj_name }}の詳細</h1>
    
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-offset-1 col-md-10 col-lg-offset-1 col-lg-10">
            {!! Form::model($project, ['route' => ['projects.update', $project->id], 'method'=> 'put',]) !!}
                
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th class="text-center bg-success">評価目的</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{!! Form::textarea('prj_purpose', null, ['class' => 'form-control', 'rows' => '4']) !!}</td>
                        </tr>
                    </tbody>
                    

                <!--projectsのテーブルデータ更新フォーム-->
                <table class="table table-bordered">
                    <tr>
                        <th class="text-center bg-success">プロジェクト名</th>
                        <td>{!! Form::text('prj_name', null, ['class' => 'form-control']) !!}</td>
                    </tr>
                    
                    <tr>
                        <th class="text-center bg-success">被アセスメント組織</th>
                        <td>{!! Form::text('assessed_organization', null, ['class' => 'form-control']) !!}</td>
                        <th class="text-center bg-success">実施日</th>
                        <td>{!! Form::date('assessment_date', null, ['class' => 'form-control']) !!}</td>
                    </tr>
                    
                    <tr>
                        <th class="text-center bg-success">対象プロセス</th>
                        <td>{!! Form::text('process_scope', null, ['class' => 'form-control']) !!}</td>
                        <th class="text-center bg-success">場所</th>
                        <td>{!! Form::text('location', null, ['class' => 'form-control']) !!}</td>
                    </tr>
                    
                    <tr>
                        <th class="text-center bg-success">アセッサー</th>
                        <td>{!! Form::text('assessor', null, ['class' => 'form-control']) !!}</td>
                        <th class="text-center bg-success">インタビューされた人</th>
                        <td>{!! Form::text('interviewed_person', null, ['class' => 'form-control']) !!}</td>
                    </tr>
                    
                </table>
                
                <!--各プロセスに対する結果を表示-->
                @include('process_results.edit')

                {!! Form::submit('更新',['class' => 'btn btn-primary']) !!}

            {!! Form::close() !!}

        </div>
        
        
    </div>


@endsection