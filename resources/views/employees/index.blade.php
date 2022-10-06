@extends('layout/app')

@section('content')
    @if(Session::has('done'))
        <div class="alert alert-success w-50 mx-auto">
            {{Session::get('done')}}
        </div>
    @endif
    <div class="container col-6">
        <div class="card">
            <div class="card-body">
                <table class="table table-dark table-hover">
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Salary</th>
                        <th>Operations</th>
                    </tr>
                    @foreach($employees as $data)
                        <tr>
                            <td>{{$data->id}}</td>
                            <td>{{$data->name}}</td>
                            <td>{{$data->salary}}</td>
                            <td>
                                <a class="btn btn-info" href="{{route('employees.show', $data->id)}}">Show</a>
                                <a class="btn btn-success" href="{{route('employees.edit', $data->id)}}">Edit</a>
                                <a class="btn btn-danger" href="{{route('employees.destroy', $data->id)}}">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection
