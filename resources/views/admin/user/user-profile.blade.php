@extends('admin.master')
@section('title')
    User Profile
@endsection
@section('content')
    <main id="main" class="main">
        <div class="pagetitle">
            <h1>Profile</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
                    <li class="breadcrumb-item">Users</li>
                    <li class="breadcrumb-item active">Profile</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section profile">
            <div class="row">
                <div class="col-xl-4">

                    <div class="card">
                        <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">

                            <img src="{{asset($user->profile_photo_path)}}" alt="Profile"
                                 class="rounded-circle">
                            <h2>{{$user->name}}</h2>
                            @if($user->user_type == 1)
                                <h3>Admin</h3>
                            @elseif($user->user_type == 2)
                                <h3>Agent</h3>
                            @elseif($user->user_type == 3)
                                <h3>Employee</h3>
                            @else
                                <h3>Customer</h3>
                            @endif

                            <div class="social-links mt-2">
                                <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                                <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                                <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                                <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="col-xl-8">

                    <div class="card">
                        <div class="card-body pt-3">
                            <!-- Bordered Tabs -->
                            <ul class="nav nav-tabs nav-tabs-bordered">

                                <li class="nav-item">
                                    <button class="nav-link active" data-bs-toggle="tab"
                                            data-bs-target="#profile-overview">Overview
                                    </button>
                                </li>

                                <li class="nav-item">
                                    <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">Edit
                                        Profile
                                    </button>
                                </li>

                                {{--                                <li class="nav-item">--}}
                                {{--                                    <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-settings">Settings</button>--}}
                                {{--                                </li>--}}

                                {{--                                <li class="nav-item">--}}
                                {{--                                    <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-change-password">Change Password</button>--}}
                                {{--                                </li>--}}

                            </ul>
                            <div class="tab-content pt-2">

                                <div class="tab-pane fade show active profile-overview" id="profile-overview">
                                    <h5 class="card-title">Profile Details</h5>

                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label ">Full Name</div>
                                        <div class="col-lg-9 col-md-8">{{$user->name}}</div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label">Address</div>
                                        <div class="col-lg-9 col-md-8">{{$user->address}}</div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label">Phone</div>
                                        <div class="col-lg-9 col-md-8">{{$user->phone}}</div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label">Email</div>
                                        <div class="col-lg-9 col-md-8">{{$user->email}}</div>
                                    </div>

                                </div>


                                <div class="tab-pane fade profile-edit pt-3" id="profile-edit">

                                    <!-- Profile Edit Form -->

{{--                                    Code written here--}}
                                    <form action="{{route('edit.user')}}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <div class="row mb-3">
                                            <label for="profileImage" class="col-md-4 col-lg-3 col-form-label">Profile
                                                Image</label>
                                            <div class="col-md-8 col-lg-9">
                                                <img src="{{asset($user->profile_photo_path)}}" alt="Profile">
                                                <div class="pt-2">
                                                    <input type="hidden" name="user_id" value="{{$user->id}}">
                                                    <input type="file" class="btn btn-sm"
                                                       title="Upload new profile image" name="profile_photo_path">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Full
                                                Name</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input type="text" class="form-control" name="name"
                                                       value="{{$user->name}}">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="Address"
                                                   class="col-md-4 col-lg-3 col-form-label">Address</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="address" type="text" class="form-control" name="address"
                                                       value="{{$user->address}}">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="Phone" class="col-md-4 col-lg-3 col-form-label">Phone</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="phone" type="text" class="form-control" name="ahone"
                                                       value="{{$user->phone}}">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="Email" class="col-md-4 col-lg-3 col-form-label">Email</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="email" type="email" class="form-control" id="email"
                                                       value="{{$user->email}}">
                                            </div>
                                        </div>

{{--                                        <div class="row mb-3">--}}
{{--                                            <label for="Twitter" class="col-md-4 col-lg-3 col-form-label">Twitter--}}
{{--                                                Profile</label>--}}
{{--                                            <div class="col-md-8 col-lg-9">--}}
{{--                                                <input name="twitter" type="text" class="form-control" id="Twitter"--}}
{{--                                                       value="https://twitter.com/#">--}}
{{--                                            </div>--}}
{{--                                        </div>--}}

{{--                                        <div class="row mb-3">--}}
{{--                                            <label for="Facebook" class="col-md-4 col-lg-3 col-form-label">Facebook--}}
{{--                                                Profile</label>--}}
{{--                                            <div class="col-md-8 col-lg-9">--}}
{{--                                                <input name="facebook" type="text" class="form-control" id="Facebook"--}}
{{--                                                       value="https://facebook.com/#">--}}
{{--                                            </div>--}}
{{--                                        </div>--}}

{{--                                        <div class="row mb-3">--}}
{{--                                            <label for="Instagram" class="col-md-4 col-lg-3 col-form-label">Instagram--}}
{{--                                                Profile</label>--}}
{{--                                            <div class="col-md-8 col-lg-9">--}}
{{--                                                <input name="instagram" type="text" class="form-control" id="Instagram"--}}
{{--                                                       value="https://instagram.com/#">--}}
{{--                                            </div>--}}
{{--                                        </div>--}}

{{--                                        <div class="row mb-3">--}}
{{--                                            <label for="Linkedin" class="col-md-4 col-lg-3 col-form-label">Linkedin--}}
{{--                                                Profile</label>--}}
{{--                                            <div class="col-md-8 col-lg-9">--}}
{{--                                                <input name="linkedin" type="text" class="form-control" id="Linkedin"--}}
{{--                                                       value="https://linkedin.com/#">--}}
{{--                                            </div>--}}
{{--                                        </div>--}}

                                        <div class="text-left mt-3">
                                            <label for="Linkedin" class="col-md-4 col-lg-3 col-form-label"></label>
                                                <button type="submit" class="btn btn-outline-primary">Save Changes</button>
                                            </div>
                                        </form><!-- End Profile Edit Form -->

                                    </div>

                                    <div class="tab-pane fade pt-3" id="profile-settings">

                                        <!-- Settings Form -->
                                        <form>

                                            <div class="row mb-3">
                                                <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Email
                                                    Notifications</label>
                                                <div class="col-md-8 col-lg-9">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" id="changesMade"
                                                               checked>
                                                        <label class="form-check-label" for="changesMade">
                                                            Changes made to your account
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" id="newProducts"
                                                               checked>
                                                        <label class="form-check-label" for="newProducts">
                                                            Information on new products and services
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" id="proOffers">
                                                        <label class="form-check-label" for="proOffers">
                                                            Marketing and promo offers
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" id="securityNotify"
                                                               checked disabled>
                                                        <label class="form-check-label" for="securityNotify">
                                                            Security alerts
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="text-center">
                                                <button type="submit" class="btn btn-primary">Save Changes</button>
                                            </div>
                                        </form><!-- End settings Form -->

                                    </div>

                                    <div class="tab-pane fade pt-3" id="profile-change-password">
                                        <!-- Change Password Form -->
                                        <form>

                                            <div class="row mb-3">
                                                <label for="currentPassword" class="col-md-4 col-lg-3 col-form-label">Current
                                                    Password</label>
                                                <div class="col-md-8 col-lg-9">
                                                    <input name="password" type="password" class="form-control"
                                                           id="currentPassword">
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <label for="newPassword" class="col-md-4 col-lg-3 col-form-label">New
                                                    Password</label>
                                                <div class="col-md-8 col-lg-9">
                                                    <input name="newpassword" type="password" class="form-control"
                                                           id="newPassword">
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <label for="renewPassword" class="col-md-4 col-lg-3 col-form-label">Re-enter
                                                    New Password</label>
                                                <div class="col-md-8 col-lg-9">
                                                    <input name="renewpassword" type="password" class="form-control"
                                                           id="renewPassword">
                                                </div>
                                            </div>

                                            <div class="text-center">
                                                <button type="submit" class="btn btn-primary">Change Password</button>
                                            </div>
                                        </form><!-- End Change Password Form -->

                                    </div>

                                </div><!-- End Bordered Tabs -->

                            </div>
                        </div>

                    </div>
                </div>
            </section>
        </main>
    @endsection

