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
            <form action="{{url('/save-product')}}" method="POST" enctype = "multipart/form-data">
                {{ csrf_field() }}
                <div class="form-group input-group input-group-lg">
                    <div class="col-md-1"></div>
                    <label class="labelfont">Fruit Name :</label>
                    <div class="space"></div>
                    <input name="fruit_name" class="form-control col-md-7" type="text" aria-label="Large"
                        aria-describedby="inputGroup-sizing-sm" required>

                </div>
              
        
                <div class="form-group input-group input-group-lg">
                    <div class="col-md-1"></div>
                    <label class="labelfont">Fruit Price :</label>
                    <div class="space"></div>
                    <input name="Fruit_price" class="form-control col-md-7" type="text" aria-label="Large"
                        aria-describedby="inputGroup-sizing-sm" required>

                </div>
                <div class="form-group input-group input-group-lg">
                    <div class="col-md-1"></div>
                    <label class="labelfont">Fruit Description :</label>
                    <div class="space1"></div>
                    <textarea class="form-control col-md-7" name="fruit_description" aria-label="Large"
                        aria-describedby="inputGroup-sizing-sm" required></textarea>

                </div>
                <div class="form-group input-group input-group-lg">
                    <div class="col-md-1"></div>
                    <label class="labelfont">Select Category :</label>
                    <div class="space"></div>
                    <div class="form-group">

                        <select class="form-control" name="category_id">

                            @foreach($categories as $category)
                            <option value="{{ $category -> category_id}}">{{ $category -> category_name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group input-group input-group-lg">
                    <div class="col-md-1"></div>
                    <label class="labelfont">Fruit Image :</label>
                    <div class="space"></div>
                    <input class="input-file uniform_on" name="fruit_image" id="fileInput" type="file">

                </div>
                <p align="center"> <button type="submit" class="btn btn-primary">Save Product</button>
                </p>
            </form>
        </div>
    </div>
</div>
@endsection