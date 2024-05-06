@extends('layouts.layout')
@section('title', 'Seja bem vindo!')

@section('content')

<div>
    <div class="no-bottom no-top" id="content">
        <div id="top"></div>

        <section id="section-hero" class="full-height vertical-center">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-5 wow fadeInRight" data-wow-delay=".5s">
                        <h4 class="id-color">Contando: para contadores expert.</h4>
                        <div class="spacer-10"></div>
                        <h1>Pronto para transformar o seu escritório?</h1>
                        <p class="lead">Você vai receber um e-mail com orientações para <b>ativar a sua conta.</b> É rápido, prático e seguro.</p>
                        <div class="spacer-20"></div>
                        <a class="btn-custom" href="#">Reenviar e-mail</a>&nbsp;
                        <a class="btn-custom bg-color-2" href="#">Ir para login</a>
                        <div class="mb-sm-30"></div>
                    </div>
                    <div class="col-lg-7 wow fadeInLeft" data-wow-delay=".5s">
                        <img src="/assets/images/misc/3.png" class="img-fluid" alt="" />
                    </div>
                </div>
            </div>
        </section>

    </div>
</div>


@endsection
