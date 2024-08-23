@extends('template.template')
@section('header')
    @vite(['resources/css/app.css'])
@endsection
@section('container')
    <div class="container-fluid">
        <div class="container bg-white">
            <div class="row justify-content-between m-0">
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
            <x-contents.slider/>
            <div class="row">
                <div class="col-md-12 col-lg-6 text-body">
                    <i class="fa-solid fa-clock icon-body"></i>
                    LA CARRERA COMIENZA:
                </div>
                <div class="col-sm-12 col-lg-6">
                    <div id="count" class="d-flex"></div>
                </div>
            </div>
            <hr>
            <div class="row justify-content-center">
                <div class="col-12">
                    <h6 class="text-body_max">FECHA MAXIMA DE INSCRIPCION</h6>
                    <h5 class="text-body_date">2 DE NOVIEMBRE DEL 2024</h5>
                </div>
            </div>
            <hr>
            <x-contents.level/>
        </div>
        <div class="row p-5 main-footer">
            <div class="container">
                <h5 class="text-footer_secondary">NUESTROS SON</h5>
                <h5 class="text-footer_main">AUSPICIADORES</h5>
            </div>
        </div>
        <div class="row p-3 secondary-footer">
            <p class="m-0">© MARATON INTERNACIONAL MESETA DEL BOMBON 2024</p>
        </div>
    </div>
@endsection
@section('footer')
    @vite(['resources/js/app.js'])
@endsection

