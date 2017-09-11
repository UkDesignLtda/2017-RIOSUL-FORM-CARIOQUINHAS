<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="description" content="Formulário Carioquinhas 2017">
        <meta name="keywords" content="formulário, riosul, shopping, carioquinhas, 2017">
        <title>Formulário de Inscrição | Carioquinhas RioSul</title>
        <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
        <link rel="stylesheet" href="styles/riosul.css">
        <link rel="stylesheet" href="styles/home-concurso-cultural.css">
    </head>
    <body>
        <section class="sec-inscricao parallax" style="background-image: url('img/bkg-concurso-cultural.jpg');">
            <div class="jumbotron jumbotron-fluid" id="banner" style="background: transparent">       
                <div class="text-center" >
                    <div class="parallax-pattern-overlay">
                        <div class="container text-center" style="height:580px;padding-top:370px;">
                            <h2 class="display-2"><button class="btn btn-primary btn-lg" value="QUERO PARTICIPAR!" id="participar" autofocus="">QUERO PARTICIPAR!</button></h2>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="theForm" style="border-top: 5px solid #ccc; padding-top: 3em; padding-bottom: 3em">
            <div class="parallax"></div>
            <div class="container">
                <div class="row">
                    <form class="form" id="inscricao" name="inscricao" action="processa-envio.php" method="POST" accept-charset="utf-8">
                        <fieldset>

                            <!-- Form Name -->
                            <legend>Formulário de Inscrição para o Concurso Cultural </legend>

                            <!-- Text input-->
                            <div class="form-group">
                                <label class="col-md-8 control-label" for="nomeDaCrianca">Nome Completo da Criança</label>
                                <div class="col-md-12">
                                    <input id="nomeDaCrianca" name="nomeDaCrianca" type="text" placeholder="" class="form-control input-md" required="" >
                                    <span class="help-block">Nome completo conforme certidão de nascimento.</span>
                                </div>
                            </div>

                            <!-- Text input-->
                            <div class="form-group">
                                <label class="col-md-8 control-label" for="nomeCompleto">Nome Completo do(a) Responsável</label>
                                <div class="col-md-12">
                                    <input id="nomeCompleto" name="nomeCompleto" type="text" placeholder="" class="form-control input-md" required="" >
                                    <span class="help-block">Nome completo conforme identidade.</span>
                                </div>
                            </div>


                            <!-- Text input-->
                            <div class="form-group">
                                <label class="col-md-8 control-label" for="bairro">Bairro</label>
                                <div class="col-md-12">
                                    <input id="bairro" name="bairro" type="text" placeholder="" class="form-control input-md" required="" >
                                    <span class="help-block">Nome do bairro, sem abreviar.</span>
                                </div>
                            </div>

                            <!-- Text input-->
                            <div class="form-group col-md-6">
                                <label class="control-label" for="email">Email</label>
                                <div class="">
                                    <input id="email" name="email" type="email" placeholder="joao@dominio.com.br" class="form-control input-md" required="">
                                    <span class="help-block">Por favor informe um email válido e ativo para contato.</span>
                                </div>
                            </div>

                            <!-- Text input-->
                            <div class="form-group col-md-6">
                                <label class="control-label" for="telefone">Telefone/Celular</label>
                                <div class="">
                                    <input id="telefone" name="telefone" type="tel" placeholder="(21) 9999-9999" class="form-control input-md" required="">
                                    <span class="help-block">Código de área + número p/contato (celular ou fixo)</span>
                                </div>
                            </div>                     

                            <!-- Text input-->
                            <!--
                                                        <div class="form-group col-md-4">
                                                            <label class="control-label" for="rg">RG</label>
                                                            <div class="">
                                                                <input id="rg" name="rg" type="text" placeholder="" class="form-control input-md" required="">
                                                                <span class="help-block">Número de identidade conforme documento oficial.</span>
                                                            </div>
                                                        </div>
                            -->

                            <!-- Text input-->
                            <!--
                                                        <div class="form-group col-md-4">
                                                            <label class="control-label" for="orgaoExpedidor">Órgão Expedidor</label>
                                                            <div class="">
                                                                <input id="orgaoExpedidor" name="orgaoExpedidor" type="text" placeholder="" class="form-control input-md" required="">
                                                                <span class="help-block">Preencher de acordo com documento oficial.</span>
                                                            </div>
                                                        </div>
                            -->

                            <!-- Text input-->
                            <!--
                                                        <div class="form-group col-md-4">
                                                            <label class="control-label" for="cpf">CPF</label>
                                                            <div class="">
                                                                <input id="cpf" name="cpf" type="text" placeholder="" class="form-control input-md" required="">
                                                                <span class="help-block">Usar somente números.</span>
                                                            </div>
                                                        </div>
                            -->

                            <!-- Text input-->
                            <!--
                                                        <div class="form-group col-md-2">
                                                            <label class="control-label" for="cep">CEP</label>
                                                            <div class="">
                                                                <input id="cep" name="cep" type="text" placeholder="" class="form-control input-md" required="">
                                                                <span class="help-block"></span>
                                                            </div>
                                                        </div>
                            -->

                            <!-- Text input-->
                            <!--
                                                        <div class="form-group col-md-4">
                                                            <label class="control-label" for="logradouro">Logradouro</label>
                                                            <div class="">
                                                                <input id="logradouro" name="logradouro" type="text" placeholder="" class="form-control input-md" required="">
                                                                <span class="help-block">Rua, Avenida, etc.</span>
                                                            </div>
                                                        </div>
                            -->

                            <!-- Text input-->
                            <!--
                                                        <div class="form-group col-md-1">
                                                            <label class="control-label" for="numero">Número</label>
                                                            <div class="">
                                                                <input id="numero" name="numero" type="text" placeholder="" class="form-control input-md">
                                                                <span class="help-block"></span>
                                                            </div>
                                                        </div>
                            -->

                            <!-- Text input-->
                            <!--
                                                        <div class="form-group col-md-2">
                                                            <label class="control-label" for="complemento">Complemento</label>
                                                            <div class="">
                                                                <input id="complemento" name="complemento" type="text" placeholder="" class="form-control input-md">
                                                                <span class="help-block">Nº do Apartamento, bloco, etc se aplicável.</span>
                                                            </div>
                                                        </div>		
                            -->
                            <!-- Text input-->
                            <div class="form-group col-md-3">
                                <label class="control-label" for="bairro">Bairro</label>
                                <div class="">
                                    <input id="bairro" name="bairro" type="text" placeholder="" class="form-control input-md">
                                    <span class="help-block">Nome do Bairro, sem abreviar.</span>
                                </div>
                            </div>

                            <!-- Text input-->
                            <div class="form-group col-md-3">
                                <label class="control-label" for="instagram">Instagram</label>
                                <div class="">
                                    <input id="bairro" name="bairro" type="text" placeholder="" class="form-control input-md">
                                    <span class="help-block">Somente .</span>
                                </div>
                            </div>

                            <!-- Text input-->
                            <div class="form-group col-md-3">
                                <label class="control-label" for="faixaEtaria">Faixa Etária</label>
                                <div class="">
                                    <select id="faixaEtaria" class="selectpicker">
                                        <option>0-1 anos</option>
                                        <option>1-3 anos</option>
                                        <option>3-5 anos</option>
                                    </select>
                                    <span class="help-block">Somente .</span>
                                </div>
                            </div>


                            <!-- Textarea -->
                            <div class="form-group">
                                <label class="col-md-8 control-label" for="fraseConcurso">Como soube do evento?</label>
                                <div class="col-md-12">
                                    <input type="text" class="form-control" id="fraseConcurso" name="comoSoubeDoEvento" required="">
                                </div>
                            </div>

                            <!-- Check Box -->
                            <div class="form-group">
                                <div class="col-md-6">
                                    <input id="confirma" name="confirma" type="checkbox" class="form-control" style="display: inline-block; width: auto; vertical-align: -8px; margin-right: 1em; margin-top: 1em;" >Concordo que li e estou a par dos termos do regulamento deste concurso.
                                </div>
                            </div>
                            <!-- Send Button -->
                            <div class="form-group">
                                <div class="col-md-offset-6 col-md-6">
                                    <button id="enviar" name="enviar" type="button" class="btn btn-block" value="ENVIAR INSCRIÇÃO" disabled="">ENVIAR INSCRIÇÃO</button>
                                </div>
                            </div>                     

                        </fieldset>
                    </form>
                </div>
            </div>
        </section>
        <footer style="background: #ccc; color: #555; padding-top: 4em; padding-bottom: 2em">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <p class="text-center">Copyrights © 2017 <a href="http://www.riosul.com.br/" target="_blank">Shopping RIOSUL</a>. Desenvolvido por <a href="http://www.ukdesign.com.br/" target="_blank">Uk Design Ltda.</a></p>

                    </div>
                </div>
            </div>
        </footer>
        <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha256-gL1ibrbVcRIHKlCO5OXOPC/lZz/gpdApgQAzskqqXp8=" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
        <script src="scripts/jquery.mask.min.js"></script>
        <script>
            var SPMaskBehavior = function (val) {
                return val.replace(/\D/g, '').length === 11 ? '(00) 00000-0000' : '(00) 0000-00009';
            },
                    spOptions = {
                        onKeyPress: function (val, e, field, options) {
                            field.mask(SPMaskBehavior.apply({}, arguments), options);
                        }
                    };

            $('#telefone').mask(SPMaskBehavior, spOptions);
            $('#cep').mask('00000-000');
            $('#cpf').mask('000.000.000-00');

            // Testa CPF
            function testaCPF(strCPF) {
                var Soma;
                var Resto;
                var listaNegra = ["00000000000", "11111111111", "22222222222", "33333333333", "44444444444", "55555555555", "66666666666", "77777777777", "88888888888", "99999999999"];
                Soma = 0;
                // Elimina tudo o que não for número.
                strCPF = strCPF.replace(/\D/g, '');

                if (isInArray(strCPF, listaNegra)) {
                    return false;
                }
                ;

                for (i = 1; i <= 9; i++) {
                    Soma = Soma + parseInt(strCPF.substring(i - 1, i)) * (11 - i);
                }
                Resto = (Soma * 10) % 11;

                if ((Resto === 10) || (Resto === 11)) {
                    Resto = 0;
                }

                if (Resto !== parseInt(strCPF.substring(9, 10))) {
                    return false;
                }

                Soma = 0;
                for (i = 1; i <= 10; i++) {
                    Soma = Soma + parseInt(strCPF.substring(i - 1, i)) * (12 - i);
                }
                Resto = (Soma * 10) % 11;

                if ((Resto === 10) || (Resto === 11)) {
                    Resto = 0;
                }

                if (Resto !== parseInt(strCPF.substring(10, 11))) {
                    return false;
                }
                return true;
            }

            $('#cpf').blur(function () {
                if ($('#cpf').val() !== "") {
                    if (!testaCPF($('#cpf').val())) {
                        alert('ERRO: CPF Inválido.');
                        $('#cpf').val("").change();
                    }
                }
            });

            $('#confirma').on('click', function () {
                $form = $('#inscricao');
                // Checa se a form está devidamente preenchida e se o
                // usuário confirmou estar a par das regras do 
                tudoOk = $form[0].checkValidity() && $("#confirma").is(":checked");
                console.log(tudoOk);
                $('#enviar').prop('disabled', !tudoOk);
            });

            // Scroller
            function smoothScrollTo(elContainer, elScrollTo) {
                var container = $(elContainer),
                        scrollTo = $(elScrollTo),
                        posit = scrollTo.offset().top - container.offset().top + container.scrollTop();
                console.log('container::' + container + ' scrollTo::' + scrollTo + ' posit::' + posit);
                container.animate({scrollTop: posit});
            }

            $('#participar').on('click', function () {
                smoothScrollTo('body', '#inscricao');
                $('#nomeCompleto').focus();
            });

            $('#enviar').on('click', function (e) {
                e.preventDefault();
                $('#enviar').val('AGUARDE, ENVIANDO...');
                $('#enviar').prop('disabled', true);
                $('#inscricao').change();
                $('#inscricao')[0].checkValidity();
                $('#inscricao').submit();
            });

        </script>
    </body>
</html>
