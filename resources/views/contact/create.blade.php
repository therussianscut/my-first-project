@extends('layout.app')



@section('content')

    <h1> Contact Us</h1>


    <p> Sean's Company</p>




    @if ( ! session()->has('message'))



    <form action=" " method="post" enctype="multipart/form-data">

        @csrf

        <div class="form-group pb-4">
            <label for="name"> Name </label>

            <input type="text" name="name" value="{{old('name')}} " class="form-control">
            {{$errors->first('name')}}
        </div>


        <div class="form-group">
            <label for="email"> E-mail</label>

            <input type="email" name="email" value="{{old('name')}} " class="form-control">
            {{$errors->first('email')}}
        </div>

        <div class="form-group">
            <label for="message"> Message</label>

            <textarea  name="message" id="message" value="{{old('message')}} " class="form-control">
                {{$errors->first('message')}} </textarea>
        </div>



        <button class="btn btn-primary"> Submit Details</button>


    </form>


        @endif






@endsection
