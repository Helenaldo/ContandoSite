@extends('layouts.layout')
@section('title', 'Verificação de E-mail')

@section('content')
<div class="no-bottom no-top" id="content">
    <div id="top"></div>

    <section id="section-text" data-bgimage="url(/assets/images/background/3d.png) bottom">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 d-none d-lg-block d-xl-block text-center wow fadeInRight" data-wow-delay="0s">
                    <img class="relative img-fluid" src="/assets/images/misc/4.png" alt="" />
                </div>

                <div class="col-lg-5 offset-md-1 wow fadeInLeft" data-wow-delay="0s">
                    <h2>Ative sua conta informando os dados abaixo</h2>
                    <form class="form-border" method="post" action='{{ route('verify.email.action')}}'>
                        @csrf
                        <div class="row">

                            <div class="col-md-12">
                                <div class="field-set">
                                    <label>Contrato*</label>
                                    <input type='text' value="{{ old('contrato') }}" name='contrato' id='contrato' class="form-control" required>
                                    <div class="text-danger">
                                        {{ isset($apierrors['contrato']) ? $apierrors['contrato'][0] : '' }}
                                    </div>

                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="field-set">
                                    <label>Escolha um nome para seu Usuário*</label>
                                    <input type='text' value="{{ old('user_name') }}" name='user_name' class="form-control" required>
                                    <div class="text-danger">
                                        {{ isset($apierrors['user_name']) ? $apierrors['user_name'][0] : '' }}
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="field-set">
                                    <label>Senha Provisória*</label>
                                    <input type='text' value="{{ old('senha_provisoria') }}" name='senha_provisoria' class="form-control" required>
                                    <div class="text-danger">
                                        {{ isset($apierrors['senha_provisoria']) ? $apierrors['senha_provisoria'][0] : '' }}
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="field-set">
                                    <label>Nova Senha*</label>
                                    <input type='password' value="{{ old('password') }}" name='password' class="form-control" required>
                                    <div class="text-danger">
                                        {{ isset($apierrors['password']) ? $apierrors['password'][0] : '' }}
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="field-set">
                                    <label>Confirmar Senha*</label>
                                    <input type='password' value="{{ old('password_confirmation') }}" name='password_confirmation' class="form-control" required>
                                    <div class="text-danger">
                                        {{ isset($apierrors['password_confirmation']) ? $apierrors['password_confirmation'][0] : '' }}
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12">

                                <div class="pull-left">
                                    <button type='submit' class="btn btn-custom color-2">Ativar Conta</button>
                                </div>

                            </div>

                        </div>
                    </form>

                </div>
            </div>
        </div>
    </section>

</div>


@endsection
