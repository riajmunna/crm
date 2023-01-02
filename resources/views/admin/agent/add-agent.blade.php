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
                    <form class="row g-3" action="{{route('add.agent')}}" method="post">
                        @csrf
                        <div class="col-12">
                            <label for="inputNanme4" class="form-label">Agent Name</label>
                            <input type="text" class="form-control" name="agent_name" placeholder="Enter Name">
                        </div>

                        <div class="col-12">
                            <label for="inputEmail4" class="form-label">Agent Phone</label>
                            <input type="text" class="form-control" name="agent_phone" placeholder="Enter Phone">
                        </div>

                        <div class="col-12">
                            <label for="inputEmail4" class="form-label">Agent Email</label>
                            <input type="email" class="form-control" name="agent_email" placeholder="Enter Email">
                        </div>

                        <div class="col-12">
                            <label for="inputEmail4" class="form-label">Agent Address</label>
                            <textarea type="text" class="form-control" name="agent_address" placeholder="Enter Address"></textarea>
                        </div>

                        <div class="col-12">
                            <label for="inputPassword4" class="form-label">Password</label>
                            <input type="password" class="form-control" id="inputPassword4" name="agent_password" placeholder="Enter Password">
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

