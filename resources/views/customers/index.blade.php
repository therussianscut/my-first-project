@extends('layout.app')

@section('title', 'Seans Customers')

@section('content')

<h1 class="pt-5"> Customer List</h1>



<a href="customers.create"> Add Customer</a>




            <div class="container">




                @foreach($customers as $customer)




                    <div class="row">


                        <div class="col-2">

                            {{$customer->id}}




                        </div>

                        <div class="col-4"><a href="/customers/{{$customer->id}}">{{$customer->name}}</a></div>
                        <div class="col-4">{{$customer->company->name}}</div>
                        <div class="col-2">{{$customer->active }}</div>





                    </div>










                    @endforeach








                </div>




    @endsection