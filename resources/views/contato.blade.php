@extends('layouts.layout')
@section('title', 'Contato!')

@section('content')

<div>
    <div class="no-bottom no-top" id="content">
        <div id="top"></div>


        <section id="subheader" data-bgimage="url(images/background/5.png) bottom">
            <div class="center-y relative text-center" data-scroll-speed="4">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 offset-md-2">
                            <form action='blank.php' class="row" id='form_subscribe' method="post" name="myForm">
                        <div class="col-md-12 text-center">
                            <h1>CONTATO</h1>
                            <p>Será um prazer lhe responder</p>
                        </div>
                        <div class="clearfix"></div>
                    </form>
                        </div>
                    </div>
                </div>
            </div>
    </section>

    <section class="no-top" data-bgimage="url(images/background/3.png) top">
        <div class="container">
                <div class="row">

                    <div class="col-lg-8 offset-md-2 mb-sm-30">
                    <h3>Como podemos ajudar?</h3>

                    <form name="contactForm" id="contact_form" class="form-border" method="post" action="email.php">
                        <div class="field-set">
                            <input type="text" name="name" id="name" class="form-control" placeholder="Nome" />
                        </div>

                        <div class="field-set">
                            <input type="text" name="email" id="email" class="form-control" placeholder="Melhor E-mail" />
                        </div>

                        <div class="field-set">
                            <input type="text" name="phone" id="phone" class="form-control" placeholder="Telefone" />
                        </div>

                        <div class="field-set">
                            <textarea name="message" id="message" class="form-control" placeholder="Mensagem"></textarea>
                        </div>

                        <div class="spacer-half"></div>

                        <div id="submit">
                            <input type="submit" id="send_message" value="Enviar" class="btn btn-custom" />
                        </div>

                    </form>
                </div>

                </div>
            </div>
        </div>

    </section>


    </div>
</div>


@endsection
