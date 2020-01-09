@extends('header')
@section('content')
<br>
<div class="container">
    <div class="card">
        <div class="card-body">

            @if(Session :: get('save_message'))
            <div class="alert alert-success col-md-4">
                <strong>{{ Session :: get('save_message') }}</strong>
            </div>
            <?php Session :: put('save_message',null); ?>
            @endif
            <br>
            <form action="{{url('/update-category/'.$category -> category_id)}}" method="POST">
                {{ csrf_field() }}
                <div class="form-group input-group input-group-lg">
                    <div class="col-md-1"></div>
                    <label class="labelfont">Category Name</label>
                    <div class="space"></div>
                    <input name="category_name" class="form-control col-md-7" type="text" aria-label="Large"
                        aria-describedby="inputGroup-sizing-sm" value = "{{ $category -> category_name }}" required>

                </div>
                <div class="form-group input-group input-group-lg">
                    <div class="col-md-1"></div>
                    <label class="labelfont">Category Description</label>
                    <div class="space1"></div>
                    <textarea class="form-control col-md-7" name="category_description" aria-label="Large"
                        aria-describedby="inputGroup-sizing-sm" required> {{ $category -> category_description }}</textarea>

                </div>
                <p align="center"> <button type="submit" class="btn btn-primary">Update Category</button>
                </p>
            </form>
        </div>
    </div>
</div>
@endsection