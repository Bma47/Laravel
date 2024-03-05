@extends('layouts.layouts')
@section('content-login')

    <title>
        @yield('pagetitle') | login
    </title>


<body>
<!-- BEGIN MENU -->


<!-- BEGIN PAGINA CONTAINER -->
<div class="container main-content">
    <div class="row first-row">
        <div class="col s6 push-s3">
                <div class="row first-row">

                        <!-- BEGIN LOGIN FORMULIER -->
                        <div class="card">
                            <div class="card-content">
                                <div class="row">
                                    @if(Session::has('erorr'))
                                        <div class="alert alert-success" role="alert">
                                            {{Session::get('erorr')}}
                                        </div>
                                    @endif
                                    <form class="col s12" method="POST" action="{{route('login')}}">
                                        @csrf
                                        <h1 class="title">Aanmelden</h1>
                                        <div class="row">
                                            <div class="input-field col s12">
                                                <input id="Email" name="email" type="text" class="validate">
                                                <label for="Email">Email</label>
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
                                                    Aanmelden
                                                </button>
                                            </div>
                                        </div>


                                    </form>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>


<!-- EINDE PAGINA CONTAINER -->
@endsection
