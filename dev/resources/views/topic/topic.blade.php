@extends('layouts.layouts')


@section('content-create')
    <!-- BEGIN PAGINA CONTAINER -->
    <div class="container main-content">
        <div class="row first-row">

            <div class="col s12">



                <!-- TOEVOEGEN VAN EEN REPLY -->
                <div class="card">
                    <h1 style="padding: 10px; text-align: center">Create Topic</h1>

                    <div class="card-content">
                        <form method="POST" action="">
                            <div class="row">
                                <div class="input-field col s6 has-error">
                                    <input id="title" type="text" name="title" placeholder="Tik hier een titel voor het onderwerp in">
                                    <label for="title" class="active">Titel van de topic</label>
                                    <input id="content" type="text" name="content" placeholder="Tik hier een titel voor het onderwerp in">

                                    <span>Titel is verplicht!</span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col s12">
                                    <textarea id="message-body" name="body"></textarea>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col s6 push-s6">
                                    <a href="" class="btn right cyan darken-1">
                                        Bewaren
                                    </a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- EINDE TOEVOEGEN VAN EEN REPLY -->

            </div>
        </div>
    </div>
    <!-- EINDE PAGINA CONTAINER -->

@endsection
