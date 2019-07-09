@extends('layout.app')

@section('title', 'Seans Customers')

@section('content')

    <h1 class="pt-5"> Details for {{$customer->name}}</h1>



<div class="container">
    <div class="row">

        {{$customer->email}}



    </div>

    <div class="row">

        {{$customer->name}}

    </div>

    <div class="row">

        <a href="/customers/{{$customer->id}}/edit"> Edit</a>




    </div>


    <form action="/customers/{{$customer->id}}" method="post" enctype="multipart/form-data">
        @csrf


        <div class="form-group pb-4">
            <label for="name"> Name </label>

            <input type="text" name="name" value="{{$customer->name}}" class="form-control">
            {{$errors->first('name')}}
        </div>


        <div class="form-group">
            <label for="email"> E-mail</label>

            <input type="email" name="email" value="{{$customer->email}}" class="form-control">
            {{$errors->first('email')}}
        </div>










        <button class="btn btn-primary"> Submit</button>



    </form>




</div>










@endsection

