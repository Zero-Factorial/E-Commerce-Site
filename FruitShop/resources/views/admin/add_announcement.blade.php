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
            <form action="{{url('/save-announcement')}}" method="POST">
                {{ csrf_field() }}
                <div class="form-group input-group input-group-lg">
                    <div class="col-md-1"></div>
                    <label class="labelfont">Announcement Title</label>
                    <div class="space"></div>
                    <input name="announcement_title" class="form-control col-md-7" type="text" aria-label="Large"
                        aria-describedby="inputGroup-sizing-sm" required>

                </div>
                <div class="form-group input-group input-group-lg">
                    <div class="col-md-1"></div>
                    <label class="labelfont">Announcement Detail</label>
                    <div class="space1"></div>
                    <textarea class="form-control col-md-7" name="announcement_detail" aria-label="Large"
                        aria-describedby="inputGroup-sizing-sm" required></textarea>

                </div>
                <p align="center"> <button type="submit" class="btn btn-primary">Save Announcement</button>
                </p>
            </form>
        </div>
    </div>
</div>
@endsection