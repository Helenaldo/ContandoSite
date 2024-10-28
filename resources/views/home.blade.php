@extends('layouts.layout')
@section('title', 'Home')

@section('content')

<div class="no-bottom no-top" id="content">
    <div id="top"></div>

    <section data-bgimage="url(/assets/images/background/1.png) bottom" class="full-height vertical-center">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 wow fadeInRight" data-wow-delay=".5s">
                    <h4>O que você <span class="id-color">Contador</span> precisa?</h4>
                    <div class="spacer-10"></div>
                    <h1>Sistema de controle paralegal grátis você encontra no <span class="id-color">CONTANDO</span>.</h1>
                    <p class="lead">Saia das planilhas e tenha todos os seus processos paralegais controlados em um só lugar, <span class="id-color">grátis</span>.</p>
                    <div class="spacer-20"></div>
                    <a class="btn-custom" href="{{route('register')}}">Cadastre-se</a>
                    <div class="mb-sm-30"></div>
                </div>

                <div class="col-lg-6 offset-lg-1 wow fadeInLeft" data-wow-delay=".5s">
                    <img src="/assets/images/misc/1.png" class="img-fluid" alt="" />
                </div>
            </div>
        </div>
    </section>

    {{-- SESSÃO NOSSO SERVIÇOS --}}
    <section id="section-highlight" data-bgimage="url(/assets/images/background/2.png) top">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="text-center">
                        <h2><span class="uptitle id-color">Serviços</span>O que fazemos?</h2>
                        <p class="lead">O Contando Processos trata-se de uma plataforma para anotação e controle de processos paralegais para seu escritório.</p>
                        <div class="spacer-20"></div>
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- feature box begin -->
                <div class="col-lg-4 col-md-6 mb40 wow fadeInUp" data-wow-delay="0s">
                    <div class="feature-box f-boxed style-3">
                        <i class="bg-color i-circle fa fa-laptop"></i>
                        <div class="text">
                            <a href="service-single.html"><h4>Design Moderno</h4></a>
                            Sistema intutivo, responsivo e moderno, tudo com a finalidade de levar maior produtividade para o usuário.
                        </div>
                        <i class="wm fa fa-laptop"></i>
                    </div>
                </div>
                <!-- feature box close -->

                <!-- feature box begin -->
                <div class="col-lg-4 col-md-6 mb40 sq-item wow fadeInUp" data-wow-delay=".25s">
                    <div class="feature-box f-boxed style-3">
                        <i class="bg-color-2 i-circle fa fa-paper-plane-o"></i>
                        <div class="text">
                            <a href="service-single.html"><h4>Notificação por e-mail</h4></a>
                            O gestor do escritório recebe semanalmente um relatório com os principais indicadores do seu paralegal.
                        </div>
                        <i class="wm fa fa-paper-plane-o"></i>
                    </div>
                </div>
                <!-- feature box close -->

                <!-- feature box begin -->
                <div class="col-lg-4 col-md-6 mb40 sq-item wow fadeInUp" data-wow-delay=".5s">
                    <div class="feature-box f-boxed style-3">
                        <i class="bg-color-3 i-circle fa fa-line-chart"></i>
                        <div class="text">
                            <a href="service-single.html"><h4>Analise Gráfica</h4></a>
                            Dashboards úteis para visualização de indicadores como: quantidade de processos, processos em atraso, processos por cliente, etc.
                        </div>
                        <i class="wm i-circle fa fa-line-chart"></i>
                    </div>
                </div>
                <!-- feature box close -->

                <div class="col-md-12 text-center">
                    <a class="btn-custom" href="{{route('register')}}">Cadastre-se grátis</a>
                </div>
            </div>
        </div>
    </section>

    {{-- SESSÃO SEGURANÇA --}}
    {{-- <section id="section-banner" class="no-top" data-bgimage="url(/assets/images/background/3.png) top">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 d-none d-lg-block d-xl-block text-center wow fadeInRight" data-wow-delay="0s">
                    <img class="relative img-fluid" src="/assets/images/misc/5.png" alt="" />
                </div>

                <div class="col-lg-5 offset-md-1 wow fadeInLeft" data-wow-delay="0s">
                    <h2>
                        Data security with<br />
                        <span class="id-color">256-bit</span> encryption
                    </h2>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                        aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. .
                    </p>
                    <div class="spacer-half"></div>
                    <a class="btn-custom" href="#">Get Started</a>
                </div>

                <div class="spacer-double"></div>

                <div class="col-md-12 wow fadeInUp" data-wow-delay="0s">
                    <div id="owl-logo" class="logo-carousel owl-carousel owl-theme">
                        <img src="/assets/images/logo-clients/1.png" class="img-fluid" alt="" />
                        <img src="/assets//assets/images/logo-clients/2.png" class="img-fluid" alt="" />
                        <img src="/assets/images/logo-clients/3.png" class="img-fluid" alt="" />
                        <img src="/assets/images/logo-clients/4.png" class="img-fluid" alt="" />
                        <img src="/assets/images/logo-clients/5.png" class="img-fluid" alt="" />
                        <img src="/assets/images/logo-clients/6.png" class="img-fluid" alt="" />
                        <img src="/assets/images/logo-clients/7.png" class="img-fluid" alt="" />
                        <img src="/assets/images/logo-clients/8.png" class="img-fluid" alt="" />
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

    {{-- SESSÃO TESTEMUNHOS --}}
    {{-- <section id="section-testimonial" data-bgimage="url(/assets/images/background/2.png)  top">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-center">
                        <h2><span class="uptitle id-color">Testimonial</span>What They Says</h2>
                        <div class="spacer-20"></div>
                    </div>
                    <div class="owl-carousel owl-theme wow fadeInUp" id="testimonial-carousel">
                        <div class="item">
                            <div class="de_testi opt-2">
                                <blockquote>
                                    <p>Great support, like i have never seen before. Thanks to the support team, they are very helpfull. This company provide customers great solution, that makes them best.</p>
                                    <div class="de_testi_by"><img alt="" class="rounded-circle" src="/assets/images/people/1.jpg" /> <span>John, Pixar Studio</span></div>
                                </blockquote>
                            </div>
                        </div>
                        <div class="item">
                            <div class="de_testi opt-2">
                                <blockquote>
                                    <p>Great support, like i have never seen before. Thanks to the support team, they are very helpfull. This company provide customers great solution, that makes them best.</p>
                                    <div class="de_testi_by"><img alt="" class="rounded-circle" src="/assets/images/people/2.jpg" /> <span>Sarah, Microsoft</span></div>
                                </blockquote>
                            </div>
                        </div>
                        <div class="item">
                            <div class="de_testi opt-2">
                                <blockquote>
                                    <p>Great support, like i have never seen before. Thanks to the support team, they are very helpfull. This company provide customers great solution, that makes them best.</p>
                                    <div class="de_testi_by"><img alt="" class="rounded-circle" src="/assets/images/people/3.jpg" /> <span>Michael, Apple</span></div>
                                </blockquote>
                            </div>
                        </div>
                        <div class="item">
                            <div class="de_testi opt-2">
                                <blockquote>
                                    <p>Great support, like i have never seen before. Thanks to the support team, they are very helpfull. This company provide customers great solution, that makes them best.</p>
                                    <div class="de_testi_by"><img alt="" class="rounded-circle" src="/assets/images/people/4.jpg" /> <span>Thomas, Samsung</span></div>
                                </blockquote>
                            </div>
                        </div>
                        <div class="item">
                            <div class="de_testi opt-2">
                                <blockquote>
                                    <p>Great support, like i have never seen before. Thanks to the support team, they are very helpfull. This company provide customers great solution, that makes them best.</p>
                                    <div class="de_testi_by"><img alt="" class="rounded-circle" src="/assets/images/people/1.jpg" /> <span>John, Pixar Studio</span></div>
                                </blockquote>
                            </div>
                        </div>
                        <div class="item">
                            <div class="de_testi opt-2">
                                <blockquote>
                                    <p>Great support, like i have never seen before. Thanks to the support team, they are very helpfull. This company provide customers great solution, that makes them best.</p>
                                    <div class="de_testi_by"><img alt="" class="rounded-circle" src="/assets/images/people/2.jpg" /> <span>Sarah, Microsoft</span></div>
                                </blockquote>
                            </div>
                        </div>
                        <div class="item">
                            <div class="de_testi opt-2">
                                <blockquote>
                                    <p>Great support, like i have never seen before. Thanks to the support team, they are very helpfull. This company provide customers great solution, that makes them best.</p>
                                    <div class="de_testi_by"><img alt="" class="rounded-circle" src="/assets/images/people/3.jpg" /> <span>Michael, Apple</span></div>
                                </blockquote>
                            </div>
                        </div>
                        <div class="item">
                            <div class="de_testi opt-2">
                                <blockquote>
                                    <p>Great support, like i have never seen before. Thanks to the support team, they are very helpfull. This company provide customers great solution, that makes them best.</p>
                                    <div class="de_testi_by"><img alt="" class="rounded-circle" src="/assets/images/people/4.jpg" /> <span>Thomas, Samsung</span></div>
                                </blockquote>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

    {{-- SESSÃO NOSSOS NÚMEROS --}}
    {{-- <section id="section-fun-facts" class="pt60 pb60 text-light bg-color-3">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0s">
                    <div class="de_count">
                        <h3 class="timer" data-to="15425" data-speed="3000">0</h3>
                        <span>Website Powered</span>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay=".25s">
                    <div class="de_count">
                        <h3 class="timer" data-to="8745" data-speed="3000">0</h3>
                        <span>Clients Supported</span>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay=".5s">
                    <div class="de_count">
                        <h3 class="timer" data-to="235" data-speed="3000">0</h3>
                        <span>Awards Winning</span>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay=".75s">
                    <div class="de_count">
                        <h3 class="timer" data-to="15" data-speed="3000">0</h3>
                        <span>Years Experience</span>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
</div>

@endsection
