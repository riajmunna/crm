@extends('admin.master')
@section('title')
    Agent Management
@endsection
@section('content')
    <main id="main" class="main">
        <div class="container mt-lg-5">
            @include('admin.include.alert')
            <div class="row">
                <div class="col-lg-12" style="display: block; margin-left: auto; margin-right: auto;">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Manage Agent Info.</h5>

                            <!-- Table with stripped rows -->
                            <div class="table-responsive">
                                <table id="example2" class="table table-striped" style="text-align: center; font-size: 12px">
                                    <thead>
                                    <tr>
                                        <th scope="col">Sl</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Mobile</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Address</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @php $i=1 @endphp
                                    @foreach($agents as $agent)
                                        <tr>
                                            <td scope="row">{{$i++}}</td>
                                            <td scope="row">{{$agent->name}}</td>
                                            <td scope="row">{{$agent->phone}}</td>
                                            <td scope="row">{{$agent->email}}</td>
                                            <td scope="row">{{$agent->address}}</td>
                                            @if($agent->status == 1)
                                                <td class="text-success">Active</td>
                                            @else
                                                <td class="text-danger">Inactive</td>
                                            @endif
                                            <td scope="row">
                                                <table>
                                                    <tr>
                                                        <td>
                                                            <a href="" style="font-size: 10px" class="btn btn-primary btn-sm">Edit</a>
                                                        </td>
                                                        <td>&nbsp;</td>
                                                        <td>
                                                            <form
                                                                action="{{ route('delete.user',['id'=>$agent->id]) }}"
                                                                method="post">
                                                                @csrf
                                                                <input type="hidden" name="user_id"
                                                                       value="{{$agent->id}}">
                                                                <button type="submit" style="font-size: 10px" class="btn btn-danger btn-sm"
                                                                        onclick="return confirm('Are you sure??')">
                                                                    Delete
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

