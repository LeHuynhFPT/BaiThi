@extends('layout')
@section("custom_css")
    <link rel="stylesheet" href="/plugins/select2/css/select2.min.css">
    <link rel="stylesheet" href="/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
@endsection
@section("custom_js")
    <script src="/plugins/select2/js/select2.full.min.js"></script>
    <script type="text/javascript">
        $('.select2').select2();
    </script>
@endsection
@section("content_header")
    <div class="col-sm-6">
        <h1 class="m-0 text-dark">Create a new student</h1>
    </div><!-- /.col -->
@endsection
@section("main_content")
    <div class="row">
        <!-- left column -->
        <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Student information</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form method="post" action="{{url("create")}}" role="form">
                    @csrf
                    <div class="card-body">
                        @include("input",[
                            "label"=>"Student Name",
                            "key"=>"name",
                            "type"=>"text",
                            "required"=>true
                        ])
                        @include("input",[
                            "label"=>"Age",
                            "key"=>"price",
                            "type"=>"number",
                            "required"=>true
                        ])
                        @include("input",[
                            "label"=>"Address",
                            "key"=>"address",
                            "type"=>"text",
                            "required"=>true
                        ])
                        @include("input",[
                            "label"=>"Tel",
                            "key"=>"tel",
                            "type"=>"text",
                            "required"=>true
                        ])
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
