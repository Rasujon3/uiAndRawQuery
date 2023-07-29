@extends('App.app')
@section('keyTitle', 'view page')
@section('MainContent')
    <div class="container">
        <div class="row">
            <h1>user Info from contact table</h1>
            <div class="col-lg-8">
                @if ('msgKey')
                    <h3 class="alert alert-danger"> {{ session('msgKey') }}</h3>
                @endif
                <table class="table">
                    <th>name</th>
                    <th>email</th>
                    <th>phone</th>
                    <th>msg</th>
                    <th>edit</th>
                    <th>delete</th>

                    <tbody>

                        @foreach ($userInfo as $item)
                            <tr>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->email }}</td>
                                <td>{{ $item->phone }}</td>
                                <td>{{ $item->msg }}</td>
                                <td><a href="{{ url('/edit/' . $item->id) }}"><button class="btn btn-success">edit</button></a>
                                </td>
                                <td><a href="{{ url('/delete/' . $item->id) }}"><button
                                            class="btn btn-warning">delete</button></a></td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
