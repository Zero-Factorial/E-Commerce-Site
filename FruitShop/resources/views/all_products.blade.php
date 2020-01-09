@extends('header')
@section('content')
<div class="container">
    <div class="card">
        
        @if(Session :: get('save_message'))
        <div class="alert alert-success col-md-4">
                <strong>{{ Session :: get('save_message') }}</strong>
            </div>
            <?php Session :: put('save_message',null); ?>
        @endif
        <table class="table table-striped table-bordered bootstrap-datatable datatable">
            <thead>
                <tr>
                    <th>
                        <p align="center">Fruit Name</p>
                    </th>
                    
                    <th>
                        <p align="center">Fruit Price</p>
                    </th>
                    <th>
                        <p align="center">Fruit Description</p>
                    </th>
                    <th>
                        <p align="center">Fruit Image</p>
                    </th>
                    <th>
                        <p align="center">Actions</p>
                    </th>
                </tr>
            </thead>

            @foreach($all_fruits as $fruit)

            <tbody>
                <tr>
                    <td align="center">{{ $fruit -> fruit_name }}</tda>
                    <td align="center">{{ $fruit -> fruit_price }}</td>
                    <td align="center">{{ $fruit -> fruit_description }}</td>
                    <td align="center"><img src = "{{ URL :: to($fruit -> fruit_image) }}" style = "width : 80px; height : 80px;"></td>
                    <td align="center">
                        <a class="btn btn-danger" href="{{URL :: to('/delete-product/'.$fruit -> fruit_id)}}">
                            <i class="fa fa-trash-o"></i>
                        </a>
                        <a href="{{URL :: to('/edit-product/'.$fruit -> fruit_id)}}" class="btn btn-info">
                        <i class="fa fa-edit"></i>
                        </a>
                    </td>
                </tr>
            </tbody>
            @endforeach
        </table>

    </div>
    <p align="center"><a class="btn btn-success" href="{{URL :: to('/add-product')}}">Add New Fruit</a></p>
</div>
@endsection