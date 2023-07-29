@extends('App.app')
@section('keyTitle', 'view page')
@section('MainContent')
    @foreach ($key as $item)
    @endforeach
    @if ('msgKey')
        <h3 class="alert alert-danger"> {{ session('msgKey') }}</h3>
    @endif
    <form class="form" method="post" action="{{ url('/update/' . $item->id) }}">
        @csrf
        <input type="text" value="{{ $item->name }}" name="name" placeholder="enter name" class="form-control">
        <input type="email"value="{{ $item->email }}" name="email" placeholder="enter email" class="form-control">
        <input type="number"value="{{ $item->phone }}"name="number" placeholder="enter phone" class="form-control">
        <textarea name="msg"value="{{ $item->msg }}" placeholder="write your  message...." class="form-control text-area"
            id="" cols="30" rows="10"></textarea>
        <button class="btn btn-primary form-control">Update</button>
        <a href="{{ url('/view') }}">view </a>
    </form>
@endsection
