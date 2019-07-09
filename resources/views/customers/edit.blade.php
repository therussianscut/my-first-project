@extends('layout.app')

@section('title', ' Edit Seans Customers')

@section('content')

    <h1 class="pt-5"> Edit {{$customer->name}}</h1>


    <form action="/customers/{{$customer->id}}" method="post" enctype="multipart/form-data">
        @method('patch')
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


        <div class="form-group">



            <label> Status</label>
            <select name="active" id="active">

                <option value= "" disabled>Choose...</option>
                <option value="1" {{$customer->active == 'Active' ? 'selected' : ''}}>Active</option>
                <option value="2" {{$customer->active == 'inActive' ? 'selected' : ''}}>Inactive</option>

            </select>


        </div>


        <div class="form-group">



            <label for="company_id"> Company</label>
            <select name="company_id" id="company_id">


                @foreach($companies as $company)


                    <option value="{{$company->id}}"> {{$company->name}}</option>

                @endforeach

            </select>


        </div>


        <button class="btn btn-primary"> Submit</button>



    </form>


    <form method="post" action="/customers/{{$customer->id}}">
        @method('delete')
        @csrf


        <button type="submit" class="btn btn-danger">Delete Project</button>
    </form>













@endsection
