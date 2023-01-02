@extends('admin.master')
@section('title')
    Add Employee
@endsection
@section('content')
    <main id="main" class="main">
    <div class="col-lg-9 offset-md-2">

        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Add Employee Form</h5>

                <!-- Vertical Form -->
                <form class="row g-3" action="{{route('add.employee')}}" method="post">
                    @csrf
                    <div class="col-12">
                        <label for="inputNanme4" class="form-label">Batch ID</label>
                        <input type="text" class="form-control" name="batch_id" placeholder="Enter Batch ID">
                    </div>
                    <div class="col-12">
                        <label for="inputNanme4" class="form-label">Employee Name</label>
                        <input type="text" class="form-control" name="employee_name" placeholder="Enter Name">
                    </div>

                    <div class="col-12">
                        <label for="inputEmail4" class="form-label">Employee Phone</label>
                        <input type="text" class="form-control" name="employee_phone" placeholder="Enter Phone">
                    </div>

                    <div class="col-12">
                        <label for="inputEmail4" class="form-label">Employee Email</label>
                        <input type="email" class="form-control" name="employee_email" placeholder="Enter Email">
                    </div>

                    <div class="col-12">
                        <label for="inputEmail4" class="form-label">Employee Registration Number</label>
                        <input type="text" class="form-control" name="employee_registration_number" placeholder="Enter Registration Number">
                    </div>

                    <div class="col-12">
                        <label for="inputPassword4" class="form-label">Password</label>
                        <input type="password" class="form-control"  name="password" placeholder="Enter Password">
                    </div>

                    <div class="text-left">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>

            </div>
        </div>

    </div>
    </main>
@endsection
