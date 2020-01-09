@extends('header')
@section('content')

<div class="container">
    <div class="card">
        <table class="table table-striped table-bordered bootstrap-datatable datatable">
            <thead>
                <tr>
                    <th>Announcement Title</th>
                    <th>Announcement Detail</th>
                    <th>Publication Date</th>
                    
                </tr>
            </thead>

           @foreach($all_announcements as $announcement)
    
            <tbody>
                <tr>
                    <td class="center">{{ $announcement ->announcement_title }}</td>
                    <td class="center">{{ substr($announcement ->announcement_detail,0,30) }}...</td>
                    <td class="center">{{ $announcement -> publication_date }}</td>
                    
                </tr>
            </tbody>
            @endforeach
        </table>
    </div>
</div>
@endsection