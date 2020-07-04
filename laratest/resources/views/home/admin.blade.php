@extends('layout/main')

@section('main_title')
Admin| Home
 @endsection

@section('title')
Admin DashBoard
 @endsection
@section('main')

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Title</th>
      <th scope="col">Link</th>
      <th scope="col">Type</th>
      <th scope="col">Option</th>
    </tr>
  </thead>
  <tbody>
    @foreach($all as $alls)
    <tr>
      <th scope="row">{{$alls->id}}</th>
      <td>{{$alls->title}}</td>
      <td>{{$alls->link}}</td>
      <td>{{$alls->type}}</td>
      <td><a href="/admin/{{$alls->id}} "><button type="button" class="btn btn-danger">Unpublish</button></a></td>
    </tr>
  @endforeach
  </tbody>
</table>


 @endsection