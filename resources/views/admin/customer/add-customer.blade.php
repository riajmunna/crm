@extends('admin.master')
@section('title')
    Add Customer
@endsection
@section('content')
    <main id="main" class="main">
        @include('admin.include.alert')
        <div class="col-lg-9 offset-md-2">

            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Add Customer</h5>

                    <!-- Vertical Form -->
                    <form class="row g-3" action="{{route('add.customer')}}" method="post">
                        @csrf
                        <div class="col-12">
                            <label class="form-label">Customer Name</label>
                            <input type="text" class="form-control" name="customer_name" placeholder="Enter Name">
                        </div>

                        <div class="col-12">
                            <label class="form-label">Customer Phone</label>
                            <input type="text" class="form-control" name="customer_phone" placeholder="Enter Phone">
                        </div>

                        <div class="col-12">
                            <label class="form-label">Customer Email</label>
                            <input type="email" class="form-control" name="customer_email" placeholder="Enter Email ">
                        </div>
                        <div class="col-12">
                            <label class="form-label">Customer Address</label>
                            <textarea name="customer_address" cols="30" rows="10" class="form-control"></textarea>
                        </div>

                        <div class="col-12">
                            <label class="form-label">Customer Facebook Link</label>
                            <input type="text" class="form-control" name="customer_facebook_link" placeholder="Enter Facebook Link">
                        </div>

                        <div class="col-12">
                            <button type="submit" class="btn btn-primary">Submit</button>
                              </div>
                    </form>

                </div>
            </div>

        </div>
    </main>
@endsection
