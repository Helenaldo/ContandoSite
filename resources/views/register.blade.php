@extends('layouts.layout')

@section('content')

<div class="no-bottom no-top" id="content">
    <div id="top"></div>

    <!-- section begin -->
    <section id="subheader" data-bgimage="url(images/background/5.png) bottom">
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

                    <form name="contactForm" id='contact_form' class="form-border" method="post" action='blank.php'>

                        <div class="row">

                            <div class="col-md-6">
                                <div class="field-set">
                                    <label>Tipo de Identificação*</label>
                                    <select class="form-control" name="tipo_identificacao" required >
                                      <option value="">Selecione...</option>
                                      <option value="CNPJ">Pessoa Física</option>
                                      <option value="CPF">Pessoa Jurídica</option>
                                    </select>

                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="field-set">
                                    <label>CNPJ ou CPF*</label>
                                    <input type='text' name='cnpj_cpf' id='cnpj_cpf' class="form-control" required>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="field-set">
                                    <label>Nome/Nome Empresarial*</label>
                                    <input type='text' name='nome' id='nome' class="form-control" required>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="field-set">
                                    <label>E-mail*</label>
                                    <input type='text' name='email' id='email' class="form-control" required>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="field-set">
                                    <label>CEP*</label>
                                    <input type='text' name='cep' id='cep' class="form-control" required>
                                </div>
                            </div>

                            <div class="col-md-8">
                                <div class="field-set">
                                    <label>Logradouro*</label>
                                    <input type='text' name='logradouro' id='logradouro' class="form-control" required>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="field-set">
                                    <label>Número*</label>
                                    <input type='text' name='numero' id='numero' class="form-control" required>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="field-set">
                                    <label>Bairro*</label>
                                    <input type='text' name='bairro' id='bairro' class="form-control" required>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="field-set">
                                    <label>Complemento</label>
                                    <input type='text' name='complemento' id='complemento' class="form-control">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="field-set">
                                    <label>Telefone*</label>
                                    <input type='text' name='telefone' id='telefone' class="form-control" required>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="field-set">
                                    <label>Cidade*</label>
                                    <select class="form-control" name="cidade" required >
                                      <option value="">Selecione...</option>
                                      <option value="Teresina-PI">Teresina-PI</option>
                                      <option value="São Paulo-SP">São Paulo-SP</option>
                                    </select>

                                </div>
                            </div>


                            <div class="col-md-12">

                                <div id='submit' class="pull-left">
                                    <input type='submit' id='send_message' value='Cadastrar' class="btn btn-custom color-2">
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
