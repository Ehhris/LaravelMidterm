@extends('layouts.master')
@section('css')
    <style>
        body{
            background-color:grey;
        }
    </style>
@endsection
@section('content')
<div class="card">
    <div class="card-header">
        Post
    </div>
    <div class="card-body">
        <table class="table">
            <thead>
              <tr>
                <th scope="col">First</th>
                <th scope="col">Email</th>
                <th scope="col">Comment</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>{{$name}}</td>
                <td>{{$email}}</td>
                <td>{{$comment}}</td>
              </tr>
            </tbody>
          </table>
    </div>
</div>
@endsection

@section('script')
    
@endsection