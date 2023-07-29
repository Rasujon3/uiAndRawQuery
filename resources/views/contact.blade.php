@extends('App.app')

@section('keyTitle', 'contact page')
@section('MainContent')
    <div class="container mt-5 ">
        <h1 class="text-center p-5 ">Contact Us</h1>
        <div class="row">
            <div class="col-lg-7">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                @if ('msgKey')
                    <h3 class="alert alert-danger"> {{ session('msgKey') }}</h3>
                @endif
                <form class="form" method="post" action="{{ url('/insert') }}">
                    @csrf
                    <input type="text" name="name" placeholder="enter name" class="form-control">
                    <input type="email" name="email" placeholder="enter email" class="form-control">
                    <input type="number"name="number" placeholder="enter phone" class="form-control">
                    <textarea name="msg" placeholder="write your  message...." class="form-control text-area" id=""
                        cols="30" rows="10"></textarea>
                    <button class="btn btn-primary form-control">send</button>
                    <a href="{{ url('/view') }}">view </a>
                </form>
            </div>
            <div class="col-lg-5">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d233668.43066476667!2d90.25446913226716!3d23.780548981026623!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b8b087026b81%3A0x8fa563bbdd5904c2!2sDhaka!5e0!3m2!1sen!2sbd!4v1682562664645!5m2!1sen!2sbd"
                    width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
@endsection
