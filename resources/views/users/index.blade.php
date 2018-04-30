@extends("layouts.app")

@section("content");
<div class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <h1>Usuarios</h1>
            <ul>
                @foreach($users as $user)
                    <h2>{{$user->name}}</h2>
                        @foreach($user->posts as $post)
                            <li class="well">  {{$post}} </li>
                        @endforeach
                @endforeach
            </ul>
        </div>
    </div>
</div>
@endsection