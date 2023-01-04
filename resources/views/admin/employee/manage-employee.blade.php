
@extends('admin.master')
@section('title')
    Employee Management
@endsection
@section('content')

        <main id="main" class="main">
        <div class="container mt-lg-5">
            @include('admin.include.alert')
            <div class="row">
                <div class="col-lg-12" style="display: block; margin-left: auto; margin-right: auto;">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Employee Info.</h5>

                            <!-- Table with stripped rows -->
                            <div class="table-responsive">
                            <table id="example2" class="table table-striped" style="text-align: center; font-size: 12px">
                                <thead>
                                <tr>
                                    <th scope="col">List ID</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Mobile</th>
                                    <th scope="col">Address</th>
                                    <th scope="col">Registration Number</th>
                                    <th scope="col">Login Time</th>
                                    <th scope="col">Logout Time</th>
                                    <th scope="col">Total Number of Mail</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @php $i=1 @endphp
                                @foreach($employees as $employee)
                                    <tr>
                                        <td scope="row">{{$i++}}</td>
                                        <td scope="row">
                                            {{$employee->name}} <br>
                                            <small>{{$employee->email}}</small>
                                        </td>
                                        <td scope="row">{{$employee->phone}}</td>
                                        <td scope="row">{{$employee->address}}</td>

                                        <td scope="row">{{$employee->employee_registration_number}}</td>
                                        <td scope="row">{{$employee->created_at}}</td>
                                        <td scope="row">{{$employee->updated_at}}</td>
                                        <td scope="row"></td>

                                        @if($employee->status == 1)
                                            <td>Active</td>
                                        @else
                                            <td>Inactive</td>
                                        @endif
                                        <td scope="row">
                                            <table>
                                                <tr>
                                                    <td>
                                                        <a href="" style="font-size: 10px" class="btn btn-primary btn-sm">Edit</a>
                                                    </td>
                                                    <td>&nbsp;</td>
                                                    <td>
                                                        <form action="{{ route('delete.user',['id'=>$employee->id]) }}" method="post">
                                                            @csrf
                                                            <input type="hidden" name="employee_id" value="{{$employee->id}}">
                                                            <button type="submit" class="btn btn-danger btn-sm" style="font-size: 10px"
                                                                    onclick="return confirm('Are you sure??')">Delete
                                                            </button>
                                                        </form>
                                                    </td>
                                                    <td>&nbsp;</td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            </div>
                            <!-- End Table with stripped rows -->

                        </div>
                    </div>

                </div>
            </div>
        </div>
        </main>
@endsection

