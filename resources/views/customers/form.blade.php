
@csrf
<div class="form-group pb-4">
    <label for="name"> Name </label>

    <input type="text" name="name" value="{{old('name')}}" class="form-control">
    {{$errors->first('name')}}
</div>


<div class="form-group">
    <label for="email"> E-mail</label>

    <input type="email" name="email" value="{{old('name')}}" class="form-control">
    {{$errors->first('email')}}
</div>

<div class="form-group">



    <label> Status</label>
    <select name="active" id="active">

        <option value= "" disabled>Choose...</option>


        @foreach($customer->activeOptions() as $activeOptionKey => $activeOptionValue)

            <option value= "{{$activeOptionKey}}" {{$customer->active == '$activeOptionValue' ? 'selected' : ''}}>{{$activeOptionValue}}</option>




            @endforeach






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