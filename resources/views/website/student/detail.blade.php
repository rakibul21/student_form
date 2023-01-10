@extends('website.master')

@section('title')
    Details page
@endsection

@section('body')
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-10 mx-auto">
                    <div class="card">
                        <div class="card-header text-center">Student Details Information</div>
                        <div class="card-body">
                            <p class="text-center">{{Session::get('message')}}</p>
                            <table class="table table-bordered table-hover">

                                <tr>
                                    <th>Student Id</th>
                                    <td>{{$student->id}}</td>
                                </tr>

                                <tr>
                                    <th>Student Name</th>
                                    <td>{{$student->name}}</td>
                                </tr>

                                <tr>
                                    <th>Student Email</th>
                                    <td>{{$student->email}}</td>
                                </tr>

                                <tr>
                                    <th>Student Password</th>
                                    <td>{{$student->password}}</td>
                                </tr>

                                <tr>
                                    <th>Student Mobile</th>
                                    <td>{{$student->mobile}}</td>
                                </tr>

                                <tr>
                                    <th>Student Certificate</th>
                                    <td><img src="{{asset($student->certificate)}}" alt="" height="100" width="120"></td>
                                </tr>

                                <tr>
                                    <th> Student Image</th>
                                    <td><img src="{{asset($student->image)}}" alt="" height="100" width="120"></td>


                                <tr>
                                    <th>Student Mobile</th>
                                    <td><img src="{{asset($student->subject)}}" alt="" height="100" width="120"></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
