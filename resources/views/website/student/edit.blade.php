@extends('website.master')

@section('title')
    Edit page
@endsection

@section('body')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Edit Brand Form</h4>
                    <p class="text-center text-success">{{Session::get('message')}}</p>
                    <form action="{{route('student.update',['id' => $student->id])}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-3">
                            <label for="" class="col-md-3">Student Full Name</label>
                            <div class="col-md-9">
                                <input type="text" value="{{$student->name}}" class="form-control" name="name"/>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="" class="col-md-3">Student Email Address</label>
                            <div class="col-md-9">
                                <input type="email" value="{{$student->email}}" class="form-control" name="email"/>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="" class="col-md-3">Password</label>
                            <div class="col-md-9">
                                <div class="row">
                                    <div class="col-md-8">
                                        <input type="password" value="{{$student->password}}" class="form-control" id="password" name="password"/>
                                    </div>
                                    <div class="col-md-4 mt-2">
                                        <label for=""><input type="checkbox"  id="showPassword">Show Password</label>
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
                                <input type="text" value="{{$student->mobile}}" class="form-control" name="mobile"/>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="" class="col-md-3">Student Certificate</label>
                            <div class="col-md-9">
                                <input type="file" value="{{$student->certificate}}" class="form-control" name="certificate[]" multiple/>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="" class="col-md-3">Student Image</label>
                            <div class="col-md-9">
                                <img src="{{asset($student->image)}}" alt="{{$student->name}}" height="100" width="130">
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
                                <input type="submit" class="btn btn-outline-info" value="Update student"/>
                            </div>
                        </div>

                        <div class="form-group row justify-content-end">
                            <div class="col-sm-9">
                                <div>
                                    <button type="submit" class="btn btn-primary w-md">Update Student info</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
