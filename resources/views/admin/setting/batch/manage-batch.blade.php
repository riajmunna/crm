@extends('admin.master')
@section('title')
    Batch Management
@endsection
@section('content')
    <main id="main" class="main">
        <div class="container mt-lg-5">
            @include('admin.include.alert')
            <div class="row">

                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Add Batch</h5>
                            <form class="row g-3" action="{{route('add.batch')}}" method="post">
                                @csrf
                                <div class="col-12">
                                    <label class="form-label">Batch ID </label>
                                    <input type="text" class="form-control" name="batch_id" placeholder="Enter Batch ID">
                                </div>

                                <div class="text-left">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>

                <div class="col-lg-8" style="display: block; margin-left: auto; margin-right: auto;">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Manage Batch Info.</h5>

                            <!-- Table with stripped rows -->
                            <div class="table-responsive">
                                <table id="example2" class="table table-striped" style="text-align: center; font-size: 12px">
                                    <thead>
                                    <tr>
                                        <th scope="col">List ID</th>
                                        <th scope="col">Batch ID</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @php $i=1 @endphp
                                    @foreach($batches as $batch)
                                        <tr>
                                            <td scope="row">{{$i++}}</td>
                                            <td scope="row">{{$batch->batch_id}}</td>
                                            <td scope="row">
                                                <table>
                                                    <tr>
                                                        <td>
                                                            <a href="" style="font-size: 10px" class="btn btn-primary btn-sm">Edit</a>
                                                        </td>
                                                        <td>&nbsp;</td>
                                                        <td>
                                                            <form action="{{ route('delete.batch',['id'=>$batch->id]) }}" method="post">
                                                                @csrf
                                                                <input type="hidden" name="batch_id" value="{{$batch->id}}">
                                                                <button type="submit" class="btn btn-danger btn-sm" style="font-size: 10px"
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

