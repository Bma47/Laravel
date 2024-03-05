@extends('layouts.layouts')

@section('content-register')
    @yield('content')
<body>


<!-- BEGIN PAGINA CONTAINER -->
<div class="container main-content">
    <div class="row first-row">

        <!-- BEGIN REGISTRATIE FORMULIER -->
        <div class="col s6 push-s3">
            <div class="card">
                <div class="card-content">
                    <div class="row">
                        @if(Session::has('success'))
                            <div class="alert alert-success" role="alert">
                                {{Session::get('success')}}
                            </div>
                        @endif
                        <form class="col s12" method="POST" action="{{route('register')}}">
                            @csrf
                            <h1 class="title">Registreren</h1>
                            <div class="row">
                                <div class="input-field col s12">
                                    <input id="Username" name="name" type="text" class="validate">
                                    <label for="Username">Username</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12">
                                    <input id="Email" name="email" type="email" class="validate">
                                    <label for="email">Email</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12">
                                    <input id="Password" type="password" name="password" class="validate">
                                    <label for="Password">Wachtwoord</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col s12">
                                    <button class="btn waves-effect waves-light right" type="submit" name="action">
                                        Registreren
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- EINDE REGISTRATIE FORMULIER -->

    </div>
</div>
<!-- EINDE PAGINA CONTAINER -->
@endsection
