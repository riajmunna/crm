@extends('admin.master')
@section('title')
    Add Agent
@endsection
@section('content')
    <main id="main" class="main">
        @include('admin.include.alert')
        <div class="col-lg-9 offset-md-2">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Add Agent</h5>
                    <form class="row g-3" action="{{route('add.user')}}" method="post">
                        @csrf
                        <input type="hidden" name="user_type" value="2">

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
                            <input type="password" class="form-control" name="password"
                                   placeholder="Enter User Password">
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

