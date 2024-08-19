@extends('template.template')
@section('header')
    @vite(['resources/css/app.css'])
@endsection
@section('container')
    <div class="container-fluid">
        <div class="container">
            <div class="row justify-content-end m-0 pt-5">
                <i class="fa-solid fa-magnifying-glass px-3"></i><h6 class="bold">VERIFICA TU INSCRIPCION</h6>
            </div>
            <hr>
            <x-navs.main/>
            <x-sliders.main/>
            <div class="row">
                <div class="col-4">
                    <i class="fa-solid fa-clock"></i>
                    LA CARRERA COMIENZA:
                </div>
                <div class="col-8">
                </div>
            </div>
            <hr>
        </div>
    </div>
@endsection
@section('footer')
    @vite(['resources/js/app.js'])
@endsection

