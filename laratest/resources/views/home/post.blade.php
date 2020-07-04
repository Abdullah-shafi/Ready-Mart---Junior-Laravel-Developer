@extends('layout/main')

@section('main_title')
Admin| Post
 @endsection

@section('title')
Admin Upload Post
 @endsection

@section('main')

<div class="container">
            <div class="row">
                <h1 class="text-primary text-bold" style="margin-left: 480px; margin-top: 30px;">Upload Post</h1>
            </div>
        </div>
<div class="container">
            <div class="row">
                <div class="col-lg-2"></div>
           <center><h5 style="color:#4ABA70 ">{{session('upload')}}</h5></center>  
            </div>
        </div>
<form method="post" enctype="multipart/form-data">
  {{csrf_field()}}
        <div class="container">
            <div class="addForm" style="margin-top: 35px;">
                <div class="row">
                    <div class="col-lg-3"></div>
                    <div class="col-lg-6" style="margin-left: 10px;">
                            <div class="form-group">
                              <label for="title">Post Title:<span style="color: red">*</span></label>
                              <input type="text" class="form-control" id="title" placeholder="Enter Post Title.." name="title" >
                            </div>
                            <div class="form-group">
                                <label for="section">Type:<span style="color: red">*</span></label>
                                <select class="form-control" name="type">
                                  <option>Post</option>
                                  <option>Video</option>
                                  
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="section">Section:<span style="color: red">*</span></label>
                                <select class="form-control" name="section">
                                  <option>1</option>
                                  <option>2</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="brief">Brief:<span style="color: red">*</span></label>
                                <input type="text" class="form-control" id="brief" placeholder="Enter Brief..." name="brief" >
                            </div>
                            <div class="form-group">
                                <label for="body">Body:<span style="color: red">*</span></label>
                                <input type="text" class="form-control" id="body" placeholder="Enter Body..." name="body" >
                            </div>
                             <div class="form-group">
                                <label for="link">Shareable Link:<span style="color: red">*</span></label>
                                <input type="text" class="form-control" id="bookMonth" placeholder="Enter Share Link" name="link" >
                            </div>
                             <div class="form-group">
                                <label for="link">Image:<span style="color: red">*</span></label>
                                <input type="file" name="pic" class="form-control" id="" placeholder="Enter Share Link"  >
                            </div>
                             <div class="form-group">
                                <label for="video_id">Video_id(only):</label>
                                <input type="text" class="form-control" id="video_id" placeholder="Enter Video_id" name="video_id" >
                            </div>
                            <h4 style="color: red">  @foreach($errors->all() as $err)
    {{$err}} <br>
  @endforeach</h2>
                            <div class="form-group">                                                             
                                <button type="submit" id="loadAdd" class="btn btn-success font-weight-bold" style="margin-left: 250px;">Upload</button>
                            </div>                     
                    </div>
                    <div class="col-lg-3"></div>
                </div>
            </div>
        </div>
</form>

 @endsection