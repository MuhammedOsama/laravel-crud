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
                    </tr>
                    <tr>
                        <td>{{$employees->id}}</td>
                        <td>{{$employees->name}}</td>
                        <td>{{$employees->salary}}</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
@endsection
