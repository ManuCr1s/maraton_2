@extends('template.template')
@section('header')
    @vite(['resources/css/app.css'])
@endsection
@section('container')
    <div class="container-fluid">
        <div class="container">
            <div class="row justify-content-between m-0 bg-light">
                <ul class="list">
                    <li class="item__list"><i class="fa-brands fa-square-facebook icon-button"></i></li>
                    <li class="item__list"><i class="fa-brands fa-tiktok icon-button"></i></li>
                    <li class="item__list"><i class="fa-brands fa-youtube icon-button"></i></li>
                    <li class="item__list"><i class="fa-brands fa-square-x-twitter icon-button"></i></li>
                </ul>
                <a href="" class="button button--orange">
                    <i class="fa-solid fa-print icon"></i>VERIFICA TU INSCRIPCION
                </a>                
            </div>
            <hr class="separator">
            <x-navs.main/>
            <x-sliders.main/>
            <div class="row">
                <div class="col-4">
                    <i class="fa-solid fa-clock"></i>
                    LA CARRERA COMIENZA:
                </div>
                <div class="col-8">
                    <div id="count"></div>
                </div>
            </div>
            <hr>
            <div class="row justify-content-center">
                <h5>FECHA MAXIMA DE INSCRIPCION</h5>
            </div>
            <hr>
            <x-contents.level/>
            
        </div>
    </div>
@endsection
@section('footer')
    @vite(['resources/js/app.js'])
@endsection

