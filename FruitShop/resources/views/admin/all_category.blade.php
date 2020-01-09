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
                        <p align="center">Category Id</p>
                    </th>
                    <th>
                        <p align="center">Category Name</p>
                    </th>
                    <th>
                        <p align="center">Category Description</p>
                    </th>
                    <th>
                        <p align="center">Actions</p>
                    </th>
                </tr>
            </thead>

            @foreach($all_category as $category)

            <tbody>
                <tr>
                    <td align="center">{{ $category -> category_id }}</tda>
                    <td align="center">{{ $category -> category_name }}</td>
                    <td align="center">{{ $category -> category_description }}</td>
                    <td align="center">
                        <a class="btn btn-danger" href="{{URL :: to('/delete-category/'.$category -> category_id)}}">
                            <i class="fa fa-trash-o"></i>
                        </a>
                        <a href="{{URL :: to('/edit-category/'.$category -> category_id)}}" class="btn btn-info">
                        <i class="fa fa-edit"></i>
                        </a>
                    </td>
                </tr>
            </tbody>
            @endforeach
        </table>

    </div>
    <p align="center"><a class="btn btn-success" href="{{URL :: to('/add-category')}}">Add New category</a></p>
</div>
@endsection