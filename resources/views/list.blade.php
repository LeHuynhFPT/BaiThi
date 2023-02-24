@extends('layout')
@section("content_header")
    <div class="col-sm-6">
        <h1 class="m-0 text-dark">Students</h1>
    </div>
    <div class="col-sm-6 text-right">
        <a class="btn btn-outline-primary" href="{{url("create")}}">Create a new Student</a>
    </div>
@endsection
@section("main_content")
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Bordered Table</h3>
            <div class="card-tools">
                <form action="{{url("admin/product")}}" method="get">
                    <div class="input-group input-group-sm float-left " style="width: 150px;">
                        <input value="{{app("request")->input("search")}}" type="text" name="search" class="form-control float-right" placeholder="Search">
                        <div class="input-group-append">
                            <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th style="width: 10px">  </th>
                    <th>Name</th>
                    <th style="width: 35px">Age</th>
                    <th>Address</th>
                    <th>Telephone</th>
                </tr>
                </thead>
                <tbody>
                @foreach($data as $item)
                    <tr>
                        <td>{{$item->id}}</td>
                        <td>{{$item->name}}</td>
                        <td>{{$item->age}}</td>
                        <td>{{$item->address}}</td>
                        <td>{{$item->tel}}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>

        <!-- /.card-body -->
        <div class="card-footer clearfix">
            {!! $data->appends(app("request")->input())->links("pagination::bootstrap-4") !!}
        </div>
    </div>
    <!-- /.card -->
@endsection
