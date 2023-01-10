@extends('website.master')

@section('title')
    All student information
@endsection

@section('body')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header col-md-4 mx-auto bg-black text-white mt-4">
                    <h4 class="card-title text-center">All Student Information</h4>
                </div>
                <div class="card-body">
                    <p class="card-title-desc text-center text-danger">{{Session::get('message')}}</p>

                    <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                        <tr>
                            <th>SL NO</th>
                            <th>Student Name</th>
                            <th>Student Email</th>
                            <th>Student Mobile</th>
                            <th>Student Image</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($students as $student)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$student->name}}</td>
                                <td>{{$student->email}}</td>
                                <td>{{$student->mobile}}</td>
                                <td><img src="{{asset($student->image)}}" alt="{{$student->name}}" height="50" width="70"/></td>
                                <td>
                                    <a href="{{route('student.detail',['id' => $student->id])}}" class="btn btn-outline-info">
                                        <i class="fa fa-book">Details</i>
                                    </a>

                                    <a href="{{route('student.edit',['id' => $student->id])}}" class="btn btn-outline-success">
                                        <i class="fa fa-edit">Update</i>
                                    </a>

                                    <a href="{{route('student.delete',['id' => $student->id])}}" class="btn btn-outline-danger" >
                                        <i class="fa fa-trash">Delete</i>
                                    </a>

                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->
@endsection
