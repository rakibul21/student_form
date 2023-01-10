@extends('website.master')

@section('title')
    Add student page
@endsection

@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header mx-auto bg-info text-color">Add Student Form</div>
                        <div class="card-body">
                            <p class="card-title-desc text-center text-danger">{{Session::get('message')}}</p>
                            <form action="{{route('student.create')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="row mb-3">
                                    <label for="" class="col-md-3">Student Full Name</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="name"/>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="" class="col-md-3">Student Email Address</label>
                                    <div class="col-md-9">
                                        <input type="email" class="form-control" name="email"/>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="" class="col-md-3">Password</label>
                                    <div class="col-md-9">
                                        <div class="row">
                                            <div class="col-md-8">
                                                <input type="password" class="form-control" id="password" name="password"/>
                                            </div>
                                            <div class="col-md-4 mt-2">
                                                <label for=""><input type="checkbox" id="showPassword">Show Password</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="" class="col-md-3">Confirm Password</label>
                                    <div class="col-md-9">
                                        <div class="row">
                                            <div class="col-md-8">
                                                <input type="password" class="form-control" id="confirmPassword" name="password"/>
                                                <span id="confirmPasswordError" class="text-danger"></span>
                                            </div>
                                            <div class="col-md-4 mt-2">
                                                <input type="checkbox" id="showConfirmPassword">Show Confirm Password
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="" class="col-md-3">Mobile Number</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="mobile"/>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="" class="col-md-3">Student Certificate</label>
                                    <div class="col-md-9">
                                        <input type="file" class="form-control" name="certificate[]" multiple/>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="" class="col-md-3">Student Image</label>
                                    <div class="col-md-9">
                                        <input type="file" class="form-control" name="image" accept="image/*"/>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="" class="col-md-3">Subject Name</label>
                                    <div class="col-md-9">
                                        @foreach($subjects as $subject)
                                        <label for=""><input type="checkbox" value="{{$subject->id}}" name="subject[]">{{$subject->name}}</label>

                                        @endforeach
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="" class="col-md-3"></label>
                                    <div class="col-md-9">
                                        <input type="submit" class="btn btn-outline-info" value="Create New student"/>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection
