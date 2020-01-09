@extends('header')
@section('content')
<div class="container">
    <div class="card">
        <table class="table table-striped table-bordered bootstrap-datatable datatable">
            <thead>
                <tr>
                    <th><p align = "center">Announcement Title</p></th>
                    <th><p align = "center">Announcement Detail</p></th>
                    <th><p align = "center">Publication Date</p></th>
                    <th><p align = "center">Actions</p></th>
                </tr>
            </thead>

           @foreach($all_announcements as $announcement)
    
            <tbody>
                <tr>
                    <td align = "center">{{ $announcement ->announcement_title }}</tda>
                    <td align = "center">{{ substr($announcement ->announcement_detail,0,30) }}...</td>
                    <td align = "center">{{ $announcement -> publication_date }}</td>
                    <td align = "center">
                        <a class="btn btn-danger" href="{{URL :: to('/delete-announcement/'.$announcement -> announce_id)}}">
                        <i class="fa fa-trash-o"></i>
                        </a>
                    </td>
                </tr>
            </tbody>
            @endforeach
        </table>
        
    </div>
    <p align = "center"><a class = "btn btn-success" href = "{{URL :: to('/add-announcement')}}">Add New Announcement</a></p>
</div>
@endsection