@extends('admin.layouts.layout')

@section('content')
<div class="container-fluid dashboard-content">
        <div class="row">
            <div class="col-xl-10">
                <!-- ============================================================== -->
                <!-- pageheader  -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <!-- ============================================================== -->
                <!-- basic form  -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="section-block" id="basicform">
                            <h3 class="section-title">Settings</h3>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <form method="POST" action="/admin/settings">
                                    @csrf
                                    <div class="form-group">
                                        <label for="text">Email for questions</label>
                                        <input name="questions_email" value="{{$questions_email ?? old('questions_email')}}" class="form-control">
                                        @if ($errors->has('questions_email'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('questions_email') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                    <input class="btn" type="submit" value="Send">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- end basic form  -->
                <!-- ============================================================== -->
                
            </div>
        </div>
    </div>
@endsection