@extends('layout/app')

@section('content')
    @if ($errors->any())
        <div class="alert alert-danger w-50 mx-auto">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="container col-6">
        <div class="card">
            <div class="card-body">
                <form method="POST" action="{{route('employees.store')}}">
                    @csrf
                    <div class="form-group mb-4">
                        <label for="">Employee Name</label>
                        <input type="text" name="empName" class="form-control">
                    </div>
                    <div class="form-group mb-4">
                        <label for="">Employee Salary</label>
                        <input type="text" name="empSalary" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-info">Send Data</button>
                </form>
            </div>
        </div>
    </div>
@endsection
