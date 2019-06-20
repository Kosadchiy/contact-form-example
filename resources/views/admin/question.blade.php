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
                            <h3 class="section-title">Question</h3>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                    <div class="form-group">
                                        <span class="col-form-label">Name</span>
                                        <p>{{$formQuestion->name}}</p>
                                    </div>
                                    <div class="form-group">
                                        <span class="col-form-label">Email</span>
                                        <p>{{$formQuestion->email}}</p>
                                    </div>
                                    <div class="form-group">
                                        <span class="col-form-label">Question</span>
                                        <p>{{$formQuestion->question}}</p>
                                    </div>
                                    <div class="form-group">
                                        <span class="col-form-label">Files</span>
                                        <ul>
                                        @foreach ($formQuestion->files as $file)
                                            <li>
                                                <a href="/admin/files/download?path={{$file->src}}&name={{$file->name}}">
                                                    {{$file->name}}
                                                </a>
                                            </li>
                                        @endforeach
                                        </ul>
                                    </div>
                                @if ($formQuestion->answer)
                                    <div class="form-group">
                                        <span>Answer</span>
                                        <p>{{$formQuestion->answer->text}}</p>
                                    </div>
                                @else
                                <form method="POST" action="/admin/questions/{{$formQuestion->id}}/addanswer">
                                    @csrf
                                    <div class="form-group">
                                        <label for="text">Answer</label>
                                        <textarea name="text" placeholder="Enter your answer..." class="form-control" rows="3">
                                            {{ old('text') }}
                                        </textarea>
                                        @if ($errors->has('text'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('text') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                    <input class="btn" type="submit" value="Send">
                                </form>
                                @endif
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