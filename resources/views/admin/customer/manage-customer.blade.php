@extends('admin.master')
@section('title')
    Customer Management
@endsection
@section('content')
    <main id="main" class="main">
        <div class="container mt-lg-5">
            <div class="row">
                <div class="col-lg-12" style="display: block; margin-left: auto; margin-right: auto;">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Manage Customer Info.</h5>

                            <!-- Table with stripped rows -->
                            <div class="table-responsive">
                                <table id="example2" class="table table-striped" style="text-align: center">
                                    <thead>
                                    <tr>
                                        <th scope="col">List ID</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Mobile</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Address</th>
                                        <th scope="col">Social Link</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @php $i=1 @endphp
                                    @foreach($customers as $customer)
                                        <tr>
                                            <td scope="row">{{$i++}}</td>
                                            <td scope="row">{{$customer->customer_name}}</td>
                                            <td scope="row">{{$customer->customer_phone}}</td>
                                            <td scope="row">{{$customer->customer_email}}</td>
                                            <td scope="row">{{$customer->customer_address}}</td>
                                            <td scope="row">{{$customer->customer_facebook_link}}</td>
                                            <td scope="row">
                                                <table>
                                                    <tr>
                                                        <td>
                                                            <a href="" class="btn btn-primary btn-sm">Edit</a>
                                                        </td>
                                                        <td>&nbsp;</td>
                                                        <td>
                                                            <form action="{{ route('delete.customer',['id'=>$customer->id]) }}" method="post">
                                                                @csrf
                                                                <input type="hidden" name="customer_id" value="{{$customer->id}}">
                                                                <button type="submit" class="btn btn-danger btn-sm"
                                                                        onclick="return confirm('Are you sure??')">Delete
                                                                </button>
                                                            </form>
                                                        </td>
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

