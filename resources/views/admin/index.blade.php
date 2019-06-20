@extends('admin.layouts.layout')

@section('content')
        <div id="app" class="container-fluid  dashboard-content">
            <!-- ============================================================== -->
            <!-- pageheader -->
            <!-- ============================================================== -->
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="page-header">
                        <h2 class="pageheader-title">Questions </h2>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- end pageheader -->
            <!-- ============================================================== -->
           
                <div class="row">
                    <!-- ============================================================== -->
                    <!-- striped table -->
                    <!-- ============================================================== -->
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="card">
                            <h5 class="card-header">Questions Table</h5>
                            <div class="card-body">
                                <questions-list :items="{{$formQuestions}}"></questions-list>
                            </div>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- end striped table -->
                    <!-- ============================================================== -->
                </div>
           
        </div>
@endsection