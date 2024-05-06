@extends('layouts.layout')
@section('title', 'Cadastro')
@section('content')

<div class="no-bottom no-top" id="content">
    <div id="top"></div>

    <!-- section begin -->
    <section id="subheader" data-bgimage="url(/assets/images/background/5.png) bottom">
            <div class="center-y relative text-center" data-scroll-speed="4">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 offset-md-2">
                            <form action='blank.php' class="row" id='form_subscribe' method="post" name="myForm">
                        <div class="col-md-12 text-center">
                            <h1>Cadastro</h1>
                            <p>Quero usar o Contando agora mesmo...</p>
                        </div>
                        <div class="clearfix"></div>
                    </form>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <!-- section close -->


    <section class="no-top" data-bgimage="url(/assets/images/background/3.png) top">
        <div class="container">
            <div class="row">
                <div class="col-md-8 offset-md-2">

                    <div class="spacer-10"></div>

                    <form class="form-border" method="post" action='{{ route('register.action')}}'>
                        @csrf
                        <div class="row">

                            <div class="col-md-6">
                                <div class="field-set">
                                    <label>Tipo de Identificação*</label>
                                    <select class="form-control" name="tipo_identificacao" id="tipo_identificacao" required >
                                      <option value="">Selecione...</option>
                                      <option value="CNPJ">Pessoa Jurídica</option>
                                      <option value="CPF">Pessoa Física</option>
                                    </select>
                                    <div class="text-danger">
                                        {{ isset($errors['tipo_identificacao']) ? $errors['tipo_identificacao'][0] : '' }}
                                    </div>

                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="field-set">
                                    <label id="cnpjCpfLabel">CNPJ ou CPF*</label>
                                    <input type='text' value="{{ old('cnpj_cpf') }}" name='cnpj_cpf' id='cnpj_cpf' class="form-control" required>
                                    <div class="text-danger">
                                        {{ isset($errors['cnpj_cpf']) ? $errors['cnpj_cpf'][0] : '' }}
                                    </div>

                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="field-set">
                                    <label>Nome/Nome Empresarial*</label>
                                    <input type='text' value="{{ old('nome') }}" name='nome' id='nome' class="form-control" required>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="field-set">
                                    <label>E-mail*</label>
                                    <input type='text' value="{{ old('email') }}" name='email' id='email' class="form-control" required>
                                    <div class="text-danger">
                                        {{ isset($errors['email']) ? $errors['email'][0] : '' }}
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="field-set">
                                    <label>CEP*</label>
                                    <input type='text' value="{{ old('cep') }}" name='cep' id='cep' onblur="pesquisacep(this.value);" class="form-control" required>
                                    <div class="text-danger">
                                        {{ isset($errors['cep']) ? $errors['cep'][0] : '' }}
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-8">
                                <div class="field-set">
                                    <label>Logradouro*</label>
                                    <input type='text' value="{{ old('logradouro') }}" name='logradouro' id='logradouro' class="form-control" required>
                                    <div class="text-danger">
                                        {{ isset($errors['logradouro']) ? $errors['logradouro'][0] : '' }}
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="field-set">
                                    <label>Número*</label>
                                    <input type='text' value="{{ old('numero') }}" name='numero' id='numero' class="form-control" required>
                                    <div class="text-danger">
                                        {{ isset($errors['numero']) ? $errors['numero'][0] : '' }}
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="field-set">
                                    <label>Bairro*</label>
                                    <input type='text' value="{{ old('bairro') }}" name='bairro' id='bairro' class="form-control" required>
                                    <div class="text-danger">
                                        {{ isset($errors['bairro']) ? $errors['bairro'][0] : '' }}
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="field-set">
                                    <label>Complemento</label>
                                    <input type='text' value="{{ old('complemento') }}" name='complemento' id='complemento' class="form-control">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="field-set">
                                    <label>Telefone*</label>
                                    <input type='text' value="{{ old('telefone') }}" name='telefone' id='telefone' class="form-control" required>
                                    <div class="text-danger">
                                        {{ isset($errors['telefone']) ? $errors['telefone'][0] : '' }}
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="field-set">
                                    <label>Cidade*</label>
                                    <input type="hidden" id="cidade" value="">
                                    <input type="hidden" id="uf" value="">
                                    <select class="form-control select2" value="{{ old('cidade_id') }}" name="cidade_id" id="cidade_id" required >
                                        <option value="">Selecione...</option>
                                        @foreach ($cidades as $cidade)

                                            <option value="{{ $cidade['id'] }}">{{ $cidade['nome'] }}</option>

                                        @endforeach


                                    </select>

                                </div>
                            </div>


                            <div class="col-md-12">

                                <div class="pull-left">
                                    <button type='submit' class="btn btn-custom color-2">Cadastrar</button>
                                </div>

                                <div id='mail_success' class='success'>Your message has been sent successfully.</div>
                                <div id='mail_fail' class='error'>Sorry, error occured this time sending your message.</div>
                                <div class="clearfix"></div>

                            </div>

                        </div>
                    </form>

                </div>
            </div>
        </div>
    </section>

    <section class="pt60 pb60 bg-color-2 text-light">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-8 mb-sm-30 text-lg-left text-sm-center">
                    <h3 class="no-bottom">Veja o que o Contando pode fazer pelo seu escritório.</h3>
                </div>

                <div class="col-md-4 text-lg-right text-sm-center">
                    <a href="#" class="btn-custom capsule med">Já sou cadastrado</a>
                </div>
            </div>
        </div>
    </section>

</div>

@endsection

@section('css')
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <style>
        .select2-selection__rendered {
            line-height: 42px !important;
        }
        .select2-container .select2-selection--single {
            height: 42px !important;
            border-color: #cccc;
        }
        .select2-selection__arrow {
            height: 42px !important;
        }
        </style>
@endsection

@section('js')
    <script src="/assets/js/cep.js"></script>
    <script src="/assets/js/mascaras.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.select2').select2();
        });
    </script>
@endsection
