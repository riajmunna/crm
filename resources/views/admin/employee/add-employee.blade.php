@extends('admin.master')
@section('title')
    Add Employee
@endsection
@section('content')
    <main id="main" class="main">
        @include('admin.include.alert')
    <div class="col-lg-9 offset-md-2">

        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Add Employee</h5>

                <!-- Vertical Form -->
                <form class="row g-3" action="{{route('add.user')}}" method="post">
                    @csrf

                    <input type="hidden" name="user_type" value="3">

                    <div id="test" style="display:block">
                        <div class="col-12">
                            <label for="inputNanme4" class="form-label">Employee Batch ID</label>
                            <select name="batch_id" class="form-control">
                                <option value="">Select</option>
                                @foreach($batches as $batch)
                                    <option value="{{ $batch->id }}">{{ $batch->batch_id }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="col-12"><br>
                            <label for="inputEmail4" class="form-label">Employee Registration Number</label>
                            <input type="text" class="form-control" name="employee_registration_number" placeholder="Enter Registration Number">
                        </div>
                    </div>

                    <div class="col-12">
                        <label for="inputNanme4" class="form-label">User Name</label>
                        <input type="text" class="form-control" name="name" placeholder="Enter User Name">
                    </div>
                    <div class="col-12">
                        <label for="inputNanme4" class="form-label">User Phone Number</label>
                        <input type="text" class="form-control" name="phone" placeholder="Enter User Phone Number">
                    </div>
                    <div class="col-12">
                        <label for="inputEmail4" class="form-label">User Email</label>
                        <input type="email" class="form-control" name="email" placeholder="Enter User Email">
                    </div>

                    <div class="col-12">
                        <label for="inputEmail4" class="form-label">User Address</label>
                        <textarea type="text" class="form-control" name="address" placeholder="Enter User Address"></textarea>
                    </div>

                    <div class="col-12">
                        <label for="inputPassword4" class="form-label">User Password</label>
                        <input type="password" class="form-control"  name="password" placeholder="Enter User Password">
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
