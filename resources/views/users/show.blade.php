@extends('layouts.app')

@section('content')
<style>
    body{
        margin: 0;
        padding: 0;        
    }
</style>
    <div class="d-flex justify-content-center align-items-center bg-primary text-white mb-4" style="height: 100px;" >
        <h1 style="color:white;">Welcome {{$user->name}}</h1>
    </div>
    
    <div class="card">
        <div class="card-body d-flex justify-content-between align-items-center">
            <div>
                <h1>Password</h1>
                <p>Change your password</p>
            </div>
            <div>
                <a href="{{url('password/reset')}}">Change password</a>
            </div>
        </div>
        <div class="card-body d-flex justify-content-between align-items-center">
            <div>
                <h1>Personal Information</h1>
                <div class="d-flex justify-content-between">
                    <div>
                        <p>Email:</p>
                        <p>Name:</p>
                        <p>Phone Number:</p>
                        <p>Date of Birth:</p>
                        <p>Address:</p>
                    </div>
                    <div>
                        <p>{{$user->email}}</p>
                        <p>{{$user->name}}</p>
                        <p>{{$user->phonenumber}}</p>
                        <p>{{$user->birth}}</p>
                        <p>{{$user->address}}</p>
                    </div>
                </div>
            </div>
            <div>
                <a href={{$user->id."/edit" }}>Edit Personal Info</a>
            </div>
        </div>
        <div class="card-body d-flex justify-content-between align-items-center">
            <h1>Account Deactivate</h1>
            <form action={{url('users/'. $user->id)}} method="POST">
                @csrf
                @method("DELETE")
                <button class="btn btn-danger">Delete the account</button>
            </form>
        </div>
    </div>
@endsection

