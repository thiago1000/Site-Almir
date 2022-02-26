<?php
date_default_timezone_set('America/Sao_Paulo');
 
require_once('php/src/PHPMailer.php');
require_once('php/src/SMTP.php');
require_once('php/src/Exception.php');
 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

if ($_POST) {
    if((isset($_POST['email']) && !empty(trim($_POST['email']))) && (isset($_POST['mensagem']) && !empty(trim($_POST['mensagem'])))) {
 
	$nome = !empty($_POST['nome']) ? $_POST['nome'] : 'Não informado';
	$email = $_POST['email'];
	// $assunto = !empty($_POST['assunto']) ? utf8_decode($_POST['assunto']) : 'Não informado';
	$mensagem = $_POST['mensagem'];
	$data = date('d/m/Y H:i:s');
 
	$mail = new PHPMailer();
    $mail->isSMTP();
    $mail->CharSet = 'UTF-8';
	$mail->Host = 'smtp.weblink.com.br';
	$mail->SMTPAuth = true;
	$mail->Username = 'contato@almirandradepersonal.com.br';
	$mail->Password = 'Pp@8905';
	$mail->Port = 587;
 
	$mail->setFrom('contato@almirandradepersonal.com.br');
    $mail->addAddress('contato@almirandradepersonal.com.br');
    $mail->addAddress($email,$nome);
 
	$mail->isHTML(true);
	$mail->Subject = "Contato";
	$mail->Body = "Nome: {$nome}<br>
				   Email: {$email}<br>
				   Mensagem: {$mensagem}<br>
                   Data/hora: {$data}";
    // $mail->SMTPDebug = 2;
 
	if($mail->send()) {
		echo '<script language="javascript">';
        echo 'alert("Mensagem enviada com sucesso!")';
        echo '</script>';
	} else {
		echo '<script language="javascript">';
        echo 'alert("Mensagem não enviada")';
        echo '</script>';
	}
} 
}

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="Personal">
    <meta name="description" content="Personal trainer">
    <meta property="og:image" content="images/capa.png"/>
    <title>Almir - Personal Trainer</title>
    <!-- Loading Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Loading Template CSS -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link rel="stylesheet" href="css/pe-icon-7-stroke.css">
    <link href="css/style-magnific-popup.css" rel="stylesheet">
    <!-- Awsome Fonts -->
    <link rel="stylesheet" href="css/all.min.css">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500&display=swap" rel="stylesheet">
    <!-- Font Favicon -->
    <link rel="shortcut icon" href="images/favicon.ico">
    
</head>

<body>

    <!--begin header -->
    <header class="header">
        <!--begin navbar-fixed-top -->
        <nav class="navbar navbar-default navbar-fixed-top">    
            <!--begin container -->
            <div class="container">
                <!--begin navbar -->
                <nav class="navbar navbar-expand-lg">
                    <!--begin logo -->
                    <a class="navbar-brand" href="#"><img src="images/logo.svg" class="img-fluid" width="90px" alt=""></a>
                    <!--end logo -->
                    <!--begin navbar-toggler -->
                    <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"><i class="fas fa-bars"></i></span>
                    </button>
                    <!--end navbar-toggler -->
                    <!--begin navbar-collapse -->
                    <div class="navbar-collapse collapse" id="navbarCollapse" style="">
                        <!--begin navbar-nav -->
                        <ul class="navbar-nav ml-auto">
                            <li><a href="#home">Home</a></li>
                            <li><a href="#sobre">Sobre</a></li>
                            <li><a href="#consultoria">Consultoria</a></li>
                            <li><a href="#planos">Planos</a></li>
                            <li><a href="#contato">Contato</a></li>
                        </ul>
                        <!--end navbar-nav -->
                    </div>
                    <!--end navbar-collapse -->
                </nav>
                <!--end navbar -->
            </div>
    		<!--end container -->
        </nav>
    	<!--end navbar-fixed-top -->
    </header>
    <!--end header -->
    <!--begin home section -->
    <section class="home-section" id="home">
        <div class="home-section-overlay"></div>
		<!--begin container -->
		<div class="container">
	        <!--begin row -->
	        <div class="row">
	            <!--begin col-md-5-->
	            <div class="col-md-6 padding-top-270">
	          		<h1 class="text-center">Descubra como ter o seu melhor agora</h1>
	            </div>
	            <!--end col-md-5-->
                <!--begin col-md-2-->
                <div class="col-md-1"></div>
                <!--end col-md-2-->
				<!--begin col-md-5-->
	            <div class="col-md-5 margin-top-20 invisible">
                    <!--begin register-form-wrapper-->
                    <div class="register-form-wrapper invisible">

                        <h3>Get Started Today</h3>

                        <p>Velis demo enim quia tempor magnet.</p>

                        <!--begin form-->
                        <div>
                             
                            <!--begin success message -->
                            <p class="register_success_box" style="display:none;">We received your message and you'll hear from us soon. Thank You!</p>
                            <!--end success message -->
                            
                            <!--begin register form -->
                            <form id="register-form" class="register-form register" action="php/register.php" method="post">
                                
                    
                                <input class="register-input white-input" required="" name="register_names" placeholder="Your Name*" type="text">
                            
                                <input class="register-input white-input" required="" name="register_email" placeholder="Email Adress*" type="email">

                                <input class="register-input white-input" required="" name="register_phone" placeholder="Phone Number*" type="text">
                               
                                <input value="Get Started Today!" class="register-submit" type="submit">
                                    
                            </form>
                            <!--end register form -->

                            <p class="register-form-terms">No Credit Card &#8226; No Installation Required</p>
                            
                        </div>
                        <!--end form-->

                    </div>
                    <!--end register-form-wrapper-->
	            </div>
	            <!--end col-md-5-->
	        </div>
	        <!--end row -->
		</div>
		<!--end container -->
    </section>
    <!--end home section -->
    <!--begin section-white -->
    <section class="section-white section-bottom-border" id="sobre">
        <!--begin container-->
        <div class="container">
            <!--begin row-->
            <div class="row">
                <div class="col-md-12 text-center mb-4">
                    <h2 class="section-title">SOBRE</h2>
                </div>
                <!--begin col-md-6-->
                <div class="col-md-6">
                    <img src="images/sobre.png" class="width-100 margin-right-15 box-shadow" alt="Sobre">
                </div>
                <!--end col-sm-6-->
                <!--begin col-md-6-->
                <div class="col-md-6 padding-top-120">
                    <h4>Um pouco sobre mim.</h4>
                    <p>Personal Trainer e Coach Fitness, Autor do livro “De Fatness para Fitness”. Minha missão é ajudar mulheres e homens na perda de peso, ganho de massa muscular e condicionamento físico, para maior longevidade e qualidade de vida. </p>
                    <p class="section-subtitle"><cite>“A minha responsabilidade e fazer você chegar onde nunca chegou sozinho. Se prepare para o mais desafiador programa de emagrecimento e ganho de massa muscular que você poderia ter na vida. Não tem moleza! Mas no final você vai me agradecer, pode ter certeza!”</cite></p>
                </div>
                <!--end col-md-6-->
            </div>
            <!--end row-->
        </div>
        <!--end container-->
    </section>
    <!--end section-white-->
    <section class="section-white" id="consultoria">
        <!--begin container -->
        <div class="container">
            <!--begin row -->
            <div class="row">
                <!--begin col-md-12 -->
                <div class="col-md-12 text-center">
                    <h2 class="section-title">CONSULTORIA</h2>
                    <p class="section-subtitle">Prescrição e periodização de Treinamentos personalizados e individualizados para o perfil, metas e desafios e objetivos de cada aluno que deseja praticar em Casa ou em Academia. Especializada na perda de gordura e ganho de massa muscular, com dicas de alimentação e suplementação. Os programas de treinamento possuem prazos e são rígidos e engajados pelos objetivos a serem alcançados. Sempre com feedbacks e acompanhamento. </p>
                    <!-- <iframe class="mt-lg-4" width="660" height="400" src="https://www.youtube-nocookie.com/embed/tMHwdVOFkUw" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->
                </div>
                <div class="w-100"></div>
                <div class="col-md-12 text-center padding-top-50">
                    <h3>Livro</h3>
                </div>
                <div class="col-md-8 offset-md-2 text-center">
                    <img src="images/livro.png"  class="img-fluid livro" alt="capa do livro"><br>
                </div>
                <div class="col-md-12 text-center padding-top-20">
                    <h5><a href="https://www.amazon.com/Fatness-para-Fitness-condicionamento-Portuguese-ebook/dp/B08VHZVY56" target="_blank">Compre seu livro aqui!!!</a></h5>
                </div>
                <!-- <div class="col-md-12 text-center padding-top-50">
                    <h3>Foi prorrogado, última oportunidade para o download gratuito do livro <br><b>De Fatness para Fitness</b> </h3>
                </div> -->
                <!-- <div class="col-md-8 offset-md-2 text-center wow bounceIn"> -->
                <!-- Begin Mailchimp Signup Form -->
                    <link href="//cdn-images.mailchimp.com/embedcode/classic-10_7.css" rel="stylesheet" type="text/css">
                    <style type="text/css">
                        #mc_embed_signup{background:#fff; clear:left; font:14px Helvetica,Arial,sans-serif; margin-top: 0;}
                        /* Add your own Mailchimp form style overrides in your site stylesheet or in this style block.
                        We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
                    </style>
                    <div id="mc_embed_signup">
                    <!-- <form action="https://gmail.us7.list-manage.com/subscribe/post?u=6d02148cd0e33a953074c0475&amp;id=e56634b8e2" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                        <div id="mc_embed_signup_scroll">
                        <h2>Faça o download do livro De Fatness para Fitness</h2> -->
                    <!-- <div class="indicates-required"><span class="asterisk">*</span> indicates required</div> -->
                    <!-- <div class="mc-field-group">
                        <label for="mce-FNAME">Nome  <span class="asterisk">*</span>
                    </label>
                        <input type="text" value="" name="FNAME" class="required" id="mce-FNAME">
                    </div>
                    <div class="mc-field-group">
                        <label for="mce-EMAIL">Email  <span class="asterisk">*</span>
                    </label>
                        <input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL">
                    </div>
                        <div id="mce-responses" class="clear">
                            <div class="response" id="mce-error-response" style="display:none"></div>
                            <div class="response" id="mce-success-response" style="display:none"></div>
                        </div>  
                        <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_6d02148cd0e33a953074c0475_e56634b8e2" tabindex="-1" value=""></div>
                        <div class="clear"><input type="submit" value="Receba o livro" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
                        </div>
                    </form> -->
                    </div>
                    <script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[1]='FNAME';ftypes[1]='text';fnames[0]='EMAIL';ftypes[0]='email';fnames[2]='LNAME';ftypes[2]='text';fnames[3]='ADDRESS';ftypes[3]='address';fnames[4]='PHONE';ftypes[4]='phone';fnames[5]='BIRTHDAY';ftypes[5]='birthday'; /**
                    * Translated default messages for the $ validation plugin.
                    * Locale: PT_PT
                    */
                    $.extend($.validator.messages, {
                        required: "Campo de preenchimento obrigat&oacute;rio.",
                        remote: "Por favor, corrija este campo.",
                        email: "Por favor, introduza um endere&ccedil;o eletr&oacute;nico v&aacute;lido.",
                        url: "Por favor, introduza um URL v&aacute;lido.",
                        date: "Por favor, introduza uma data v&aacute;lida.",
                        dateISO: "Por favor, introduza uma data v&aacute;lida (ISO).",
                        number: "Por favor, introduza um n&uacute;mero v&aacute;lido.",
                        digits: "Por favor, introduza apenas d&iacute;gitos.",
                        creditcard: "Por favor, introduza um n&uacute;mero de cart&atilde;o de cr&eacute;dito v&aacute;lido.",
                        equalTo: "Por favor, introduza de novo o mesmo valor.",
                        accept: "Por favor, introduza um ficheiro com uma extens&atilde;o v&aacute;lida.",
                        maxlength: $.validator.format("Por favor, n&atilde;o introduza mais do que {0} caracteres."),
                        minlength: $.validator.format("Por favor, introduza pelo menos {0} caracteres."),
                        rangelength: $.validator.format("Por favor, introduza entre {0} e {1} caracteres."),
                        range: $.validator.format("Por favor, introduza um valor entre {0} e {1}."),
                        max: $.validator.format("Por favor, introduza um valor menor ou igual a {0}."),
                        min: $.validator.format("Por favor, introduza um valor maior ou igual a {0}.")
                    });}(jQuery));var $mcj = jQuery.noConflict(true);</script>
                    <!--End mc_embed_signup-->
                <!-- </div> -->
                <!--end col-md-12 -->
                <div class="col-md-12 text-center mt-5">
                    <h3>Benefícios</h3>
                </div>
                <div class="col-md-4 wow fadeIn">
                    <div class="process">
                        <i class="fas fa-dumbbell"></i>
                        <h3>Treine em casa ou na academia</h3>
                        <p>Treine no local que desejar seja ele em sua casa ou na academia.</p>
                    </div>
                </div>
                <div class="col-md-4 wow fadeIn" data-wow-delay=".5s">
                    <div class="process">
                        <i class="fas fa-camera"></i>
                        <h3>Avaliação física fotográfica + medidas e circunferências</h3>
                        <p>Avaliação periódica para acompanhamento e prescrição de treinamento, avaliado por foto, medidas e circunferências.</p>
                    </div>
                </div>
                <div class="col-md-4 wow fadeIn" data-wow-delay=".8s">
                    <div class="process">
                        <i class="fas fa-user"></i>
                        <h3>Prescrição de treinamento personalizado</h3>
                        <p>Treino personalizado e individualizado para alcance dos suas metas.</p>
                    </div>
                </div>
                <div class="col-md-4 wow fadeIn" data-wow-delay="1.1s">
                    <div class="process">
                        <i class="fas fa-clock"></i>
                        <h3>Periodização de treinamento</h3>
                        <p>Treinamento pensado para cada fase da sua evolução.</p>
                    </div>
                </div>
                <div class="col-md-4 wow fadeIn" data-wow-delay="1.4s">
                    <div class="process">
                        <i class="fab fa-whatsapp-square"></i>
                        <h3>Dúvidas e dicas via whatsapp ou email</h3>
                        <p>Tire todas suas dúvidas com contato direto comigo, a qualquer momento do dia 7 dias por semana.</p>
                    </div>
                </div>
                <div class="col-md-4 wow fadeIn" data-wow-delay="1.7s">
                    <div class="process">
                        <i class="fas fa-utensils"></i>
                        <h3>Dicas sobre alimentação e suplementação</h3>
                        <p>Aprenda como otimizar sua alimentação para melhores resultados.</p>
                    </div>
                </div>
                <div class="w-100"></div>
                <div class="col-md-4 wow fadeIn offset-md-4" data-wow-delay="2s">
                    <div class="process">
                        <i class="fas fa-envelope"></i>
                        <h3>Feedbacks semanais via whatsapp ou email</h3>
                        <p>Vamos todas as semanas bater um papo sobre como está indo seu treino, revisar metas e desafios.</p>
                    </div>
                </div>
            </div>
            <!--end row -->
        </div>
        <!--end container -->
        <!--begin container -->
        
        <!--end container -->

    </section>
    

    <!--begin pricing section -->
    <section class="section-white" id="planos">
        <div class="demo">
            <div class="container">
                <div class="row text-center">
                    <div class="col-12">
                        <h2 class="section-title mb-4">PLANOS</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 col-sm-6">
                        <div class="pricingTable wow fadeIn">
                            <div class="pricingTable-header">
                                <h3 class="heading">Standard Fit</h3>
                                <span class="subtitle">30 Dias</span>
                                <!-- <span class="texto-promo"><b>De <span>79,90</span> por</b></span><br> -->
                                <!--  texto-promo-alterar -->
                                <div class="price-value">    
                                    79,90*
                                </div><br>
                                <!-- <span class="texto-tempo invisible">Por tempo limitado</span> -->
                            </div>
                            <ul class="pricing-content fa-ul text-left">
                                <li><span class="fa-li"><i class="fas fa-check"></i></span>Treine em casa ou na acadêmia</li>
                                <li><span class="fa-li"><i class="fas fa-check"></i></span>Avaliação física fotográfica + medidas e circunferências</li>
                                <li><span class="fa-li"><i class="fas fa-check"></i></span>Prescrição de treinamento personalizado</li>
                                <li class="text-muted"><span class="fa-li"><i class="fas fa-times"></i></span>Periodização de treinamento</li>
                                <li><span class="fa-li"><i class="fas fa-check"></i></span>Dúvidas e dicas via Whatsapp ou Email</li>
                                <li><span class="fa-li"><i class="fas fa-check"></i></span>Dicas sobre alimentação e suplementação</li>
                                <li><span class="fa-li"><i class="fas fa-check"></i></span>Feedbacks semanais via Email</li>
                                <li class="invisible"><span class="fa-li"><i class="fas fa-check"></i></span>Dicas sobre alimentação e suplementação</li>
                            </ul>
                            <!-- <a href="https://pag.ae/7WPvV-i2H/button" target="_blank" title="Pagar com PagSeguro"><img src="//assets.pagseguro.com.br/ps-integration-assets/botoes/pagamentos/205x30-pagar.gif" alt="Pague com PagSeguro - é rápido, grátis e seguro!" /></a> -->
                            <a href="https://api.whatsapp.com/send/?phone=5511981008005" target="_blank" class="btn-pagar btn">Pagar</a>
                            <p class="atencao"><b>*à vista no cartão de crédito ou boleto bancário</b></p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="pricingTable gold wow fadeIn" data-wow-delay="0.5s">
                            <div class="pricingTable-header q2">
                                <h3 class="heading">Premium Gold</h3>
                                <span class="subtitle">90 Dias</span>
                                <div class="price-value">
                                    179,90*
                                </div>
                            </div>
                            <ul class="pricing-content fa-ul text-left">
                                <li><span class="fa-li"><i class="fas fa-check"></i></span>Treine em casa ou na acadêmia</li>
                                <li><span class="fa-li"><i class="fas fa-check"></i></span>Avaliação física fotográfica + medidas e circunferências <b>a cada 30 dias</b></li>
                                <li><span class="fa-li"><i class="fas fa-check"></i></span>Prescrição de treinamento personalizado <b>a cada 30 dias</b></li>
                                <li><span class="fa-li"><i class="fas fa-check"></i></span>Periodização de treinamento <b>3 meses</b></li>
                                <li><span class="fa-li"><i class="fas fa-check"></i></span>Dúvidas e dicas via Whatsapp ou Email</li>
                                <li><span class="fa-li"><i class="fas fa-check"></i></span>Dicas sobre alimentação e suplementação</li>
                                <li><span class="fa-li"><i class="fas fa-check"></i></span>Feedbacks semanais via Whatsapp ou Email</li>
                            </ul>
                            <!-- <a href="https://pag.ae/7WQ2NGNzn/button" target="_blank" title="Pagar com PagSeguro"><img src="//assets.pagseguro.com.br/ps-integration-assets/botoes/pagamentos/205x30-pagar.gif" alt="Pague com PagSeguro - é rápido, grátis e seguro!" /></a> -->
                            <a href="https://api.whatsapp.com/send/?phone=5511981008005" target="_blank" class="btn-pagar btn">Pagar</a>
                            <p class="atencao"><b>*valor em até 3x no cartão de crédito</b></p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="pricingTable diamond wow fadeIn" data-wow-delay="1s">
                            <div class="pricingTable-header q3">
                                <h3 class="heading">Special Diamond</h3>
                                <span class="subtitle">180 Dias</span>
                                <div class="price-value">
                                    299,90*
                                </div>
                            </div>
                            <ul class="pricing-content fa-ul text-left">
                                <li><span class="fa-li"><i class="fas fa-check"></i></span>Treine em casa ou na acadêmia</li>
                                <li><span class="fa-li"><i class="fas fa-check"></i></span>Avaliação física fotográfica + medidas e circunferências <b>a cada 30 dias</b></li>
                                <li><span class="fa-li"><i class="fas fa-check"></i></span>Prescrição de treinamento personalizado <b>a cada 30 dias</b></li>
                                <li><span class="fa-li"><i class="fas fa-check"></i></span>Periodização de treinamento <b>6 meses</b></li>
                                <li><span class="fa-li"><i class="fas fa-check"></i></span>Dúvidas e dicas via Whatsapp ou Email</li>
                                <li><span class="fa-li"><i class="fas fa-check"></i></span>Dicas sobre alimentação e suplementação</li>
                                <li><span class="fa-li"><i class="fas fa-check"></i></span>Feedbacks semanais via Whatsapp ou Email</li>
                            </ul>
                            <a href="https://api.whatsapp.com/send/?phone=5511981008005" target="_blank" class="btn-pagar btn">Pagar</a>
                            <p class="atencao"><b>*valor em até 6x no cartão de crédito</b></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!--end pricing section -->

    <section class="section-white section-bottom-border" id="contato">
        <!--begin container-->
        <div class="container">
            <!--begin row-->
            <div class="row">
                <!--begin col-md-6 -->
                <div class="col-md-10 offset-md-1">
                    <h2 class="section-title text-center mb-4">CONTATO</h2>
                    <!--begin success message -->
                    <p class="contact_success_box" style="display:none;">We received your message and you'll hear from us soon. Thank You!</p>
                    <!--end success message -->
                    <!--begin contact form -->
                    <form id="contact-form" class="contact" action=""  method="post">
                        <input class="contact-input white-input" required="" name="nome" placeholder="Nome" type="text">
                        <input class="contact-input white-input" required="" name="email" placeholder="Email" type="email">
                        <textarea class="contact-commnent white-input" rows="2" cols="20" name="mensagem" placeholder="Escreva aqui sua mensagem"></textarea>
                        <input value="Enviar" id="submit-button" class="contact-submit" type="submit">
                    </form>
                    <!--end contact form -->
                </div>
                <!--end col-md-6 -->
            </div>
            <!--end row-->
        </div>
        <!--end container-->
    </section>
    <div class="footer">
        <div class="container-fluid">
            <div class="row">
                <div class="container text-center">
                    <div class="row">
                        <div class="col-md-6">
                            <img src="images/logo.svg" class="logo-rodape" alt="Logo do rodapé">
                        </div>
                        <div class="col-md-6 redes">
                            <h5 class="text-white">Redes Sociais</h5> 
                            <a href="https://instagram.com/almirandradepersonal" class="fab fa-instagram" target="_blank"></a>
                            <a href="https://www.facebook.com/almir.andrade.9" class="fab fa-facebook" target="_blank"></a>
                            <a href="https://www.youtube.com/user/almirandradep" class="fab fa-youtube" target="_blank"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- Load JS here for greater good =============================-->
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.scrollTo-min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/jquery.nav.js"></script>
<script src="js/wow.js"></script>
<script src="js/plugins.js"></script>
<script src="js/custom.js"></script>

<script type="text/javascript">
(function () {
var options = {
    whatsapp: "+5511981008005", // Número do WhatsApp
    company_logo_url: "//www.ferafox.com.br/themes/infinity/images/perfil.jpg", // URL com o logo da empresa
    greeting_message: "Olá! A primeira mensagem a ser exibida, escreva aqui.", // Texto principal
    call_to_action: "Tire suas dúvidas.", // Chamada para ação
    position: "right", // Posição do widget na página 'right' ou 'left'
};
var proto = document.location.protocol, host = "whatshelp.io", url = proto + "//static." + host;
var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/widget-send-button/js/init.js';
s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
})();
</script>
</body>
</html>