@extends('header')
@section('content')
<div class="container">
    
    <div class="card">
       
        <div class="col-md-8 personal-info">
            
            <h3>Personal info</h3>

            <form class="form-horizontal" role="form" action = "{{url('/update-account')}}" method = "POST">
                {{ csrf_field() }}
                <div class="form-group">
                    <label class="col-lg-3 control-label">First name:</label>
                    <div class="col-lg-8">
                        <input class="form-control" name = "first_name" type="text" value="{{ $profile -> first_name }}">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-lg-3 control-label">Last name:</label>
                    <div class="col-lg-8">
                        <input class="form-control" type="text" name = "last_name" value="{{ $profile -> last_name }}">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-lg-3 control-label">Email address:</label>
                    <div class="col-lg-8">
                        <input class="form-control" type="text" name = "email_address" value="{{ $profile -> email_address }}">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-lg-3 control-label">Mailing address:</label>
                    <div class="col-lg-8">
                        <input class="form-control" type="text" name = "mailing_address" value="{{ $profile -> mailing_address }}">
                    </div>
                </div>
                
                <div class="form-group">
                    <label class="col-md-3 control-label">Username:</label>
                    <div class="col-md-8">
                        <input class="form-control" type="text" name = "user_name"value="{{ $profile -> user_name }}">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label">Password:</label>
                    <div class="col-md-8">
                        <input class="form-control" type="password" name = "password" value="{{ $profile -> password }}">
                    </div>
                </div>
                
                <div class="form-group">
                    <label class="col-md-3 control-label"></label>
                    <div class="col-md-8">
                        <button type="submit" class="btn btn-primary">Update profile</button>
                        <span></span>
                        <input type="reset" class="btn btn-default" value="Cancel">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<hr>
@endsection