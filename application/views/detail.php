<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Grupo Celebration - Servicios</title>
    <meta name="description"
          content="Grupo Celebration. EVENTOS, BANQUETES, CONGRESOS Y CONVENCIONES. QUEREMOS SER TU PROVEEDORA DE CONFIANZA">
    <meta name="robots" content="all">
    <meta name="distribution" content="global">
    <meta name="rating" content="general">
    <link rel="canonical" href="http://www.grupocelebration.com/"/>
    <link rel="shortcut icon" type="image/png" href="<?php echo base_url('assets/img/favicon.png'); ?>"/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/font-awesome.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/celebration.css'); ?>">
</head>
<body>
<!-- TODO COMIENZA MENÚ PARA ESCRITORIO -->
<div class="container-fluid bg-white">
    <div class="container">
        <div id="original-nav" class="row align-items-center pt-4 txt-blue-celebration
							justify-content-sm-end">
            <a href="<?php echo base_url(); ?>" class="col-sm-auto p-sm-3 d-none d-sm-inline
								p-md-3
				                pt-lg-3 pb-lg-3 pl-lg-2 pr-lg-2
								p-xl-3 ancla order-lg-2">
                <div class="indicator"><div></div></div>
                NOSOTROS
            </a>
            <div class="d-none d-sm-block border-right-2 bg-blue-celebration h-25-px order-lg-3"></div>
            <a href="#service2" class="col-sm-auto p-sm-3 d-none d-sm-inline
								p-md-3
				                pt-lg-3 pb-lg-3 pl-lg-2 pr-lg-2
								p-xl-3 order-lg-4 active">
                <div class="indicator"><div></div></div>
                SERVICIOS
            </a>
            <div class="d-none d-sm-block border-right-2 bg-blue-celebration h-25-px order-lg-5"></div>
            <a href="<?php echo base_url(); ?>" class="col-sm-auto p-sm-3 d-none d-sm-inline
				                p-md-3
				                pt-lg-3 pb-lg-3 pl-lg-2 pr-lg-2
				                p-xl-3 order-lg-6">
                <div class="indicator"><div></div></div>
                CLIENTES
            </a>
            <div class="d-none d-sm-block border-right-2 bg-blue-celebration h-25-px order-lg-7"></div>
            <a href="#contact" class="col-sm-auto p-sm-3 d-none d-sm-inline
								p-md-3
				                pt-lg-3 pb-lg-3 pl-lg-2 pr-lg-2
				                p-xl-3 ancla order-lg-8">
                <div class="indicator"><div></div></div>
                CONTACTO
            </a>
        </div>
    </div>
</div>
<!-- TODO TERMINA MENÚ PARA ESCRITORIO -->

<!-- TODO COMIENZA MENÚ PARA MÓVILES -->
<div class="container-fluid bg-white fixed-top d-sm-none">
    <div class="row align-items-center no-gutters">
        <div class="col text-left text-uppercase">Grupo Celebration</div>
        <div class="col-auto ml-auto text-right">
            <i class="fa fa-bars rounded pl-2 pr-2 m-2" data-toggle="collapse" data-parent="#accordion"
               href="#collapseOne" aria-expanded="true" aria-controls="collapseOne"></i>
        </div>
    </div>
    <div id="collapseOne" class="collapse" role="tabpanel" aria-labelledby="headingOne">
        <div href="#about" class="pt-1 pb-1 ancla">NOSOTROS</div>
        <div href="#service2" class="pt-1 pb-1 ancla">SERVICIOS</div>
        <div href="#team" class="pt-1 pb-1 ancla">CLIENTES</div>
        <div href="#contact" class="pt-1 pb-1 ancla">CONTACTO</div>
    </div>
</div>
<!-- TODO TERMINA MENÚ PARA MÓVILES -->

<!-- TODO COMIENZA MENÚ FIXED -->
<div class="container-fluid bg-white fixed-top nav-inactive d-none d-sm-block" id="fixed-nav">
    <div class="container">
        <div class="row align-items-center justify-content-sm-end txt-blue-celebration">
            <a href="<?php echo base_url(); ?>" class="col-sm-auto p-sm-3
								p-md-3
				                pt-lg-3 pb-lg-3 pl-lg-2 pr-lg-2
								p-xl-3 order-lg-2">
                <div class="indicator"><div></div></div>
                NOSOTROS
            </a>
            <div class="d-none d-sm-block border-right-2 bg-blue-celebration h-25-px order-lg-3"></div>
            <a href="#service2" class="col-sm-auto p-sm-3
								p-md-3
				                pt-lg-3 pb-lg-3 pl-lg-2 pr-lg-2
								p-xl-3 ancla order-lg-4 active">
                <div class="indicator"><div></div></div>
                SERVICIOS
            </a>
            <div class="d-none d-sm-block border-right-2 bg-blue-celebration h-25-px order-lg-5"></div>
            <a href="<?php echo base_url(); ?>" class="col-sm-auto p-sm-3
				                p-md-3
				                pt-lg-3 pb-lg-3 pl-lg-2 pr-lg-2
				                p-xl-3 order-lg-6">
                <div class="indicator"><div></div></div>
                CLIENTES
            </a>
            <div class="d-none d-sm-block border-right-2 bg-blue-celebration h-25-px order-lg-7"></div>
            <a href="#contact" class="col-sm-auto p-sm-3
								p-md-3
				                pt-lg-3 pb-lg-3 pl-lg-2 pr-lg-2
				                p-xl-3 ancla order-lg-8">
                <div class="indicator"><div></div></div>
                CONTACTO
            </a>
        </div>
    </div>
</div>
<!-- TODO TERMINA MENÚ FIXED -->


<div id="img-carousel" class="container-fluid p-3 p-sm-4 p-lg-5 mt-4 mt-sm-0">
    <div id="carouselExampleControls" class="carousel slide h-100" data-ride="carousel">
        <ol class="carousel-indicators">
            <?php if ($handle = opendir('assets/img/gal/' . $imgSet)) {
                $indice = 0;
                while (false !== ($entry = readdir($handle))) {
                    if ($entry != "." && $entry != "..") {
                        ?>
                        <?php if ($indice == 0) { ?>
                            <li data-target="#carouselExampleControls" data-slide-to="0" class="active" style="background-image: url('<?php echo base_url('assets/img/gal/' . $imgSet . '/' . $entry); ?>');"></li>
                        <?php } else { ?>
                            <li data-target="#carouselExampleControls" data-slide-to="<?php echo $indice; ?>" style="background-image: url('<?php echo base_url('assets/img/gal/' . $imgSet . '/' . $entry); ?>');"></li>
                        <?php } ?>
                        <?php $indice++;
                    }
                }
                closedir($handle);
            } ?>
        </ol>
        <div class="carousel-inner h-100 align-items-center">
            <?php if ($handle = opendir('assets/img/gal/' . $imgSet)) {
                $indice2 = 0;
                while (false !== ($entry = readdir($handle))) {
                    if ($entry != "." && $entry != "..") {
                        ?>
                        <?php if ($indice2 == 0) { ?>
                            <div class="carousel-item active h-100">
                                <img class="d-block w-100 h-100 img-carousel"
                                     style="background-image: url('<?php echo base_url('assets/img/gal/' . $imgSet . '/' . $entry); ?>');">
                            </div>
                        <?php } else { ?>
                            <div class="carousel-item h-100">
                                <img class="d-block w-100 h-100 img-carousel"
                                     style="background-image: url('<?php echo base_url('assets/img/gal/' . $imgSet . '/' . $entry); ?>');">
                            </div>
                        <?php } ?>
                        <?php $indice2++;
                    }
                }
                closedir($handle);
            } ?>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
        <div class="shadow"></div>
    </div>
</div>

<div id="service2" class="container-fluid pt-5 pb-5 txt-blue-celebration">
    <div class="container pt-4 pb-4">
        <div class="row align-items-center justify-content-center">
            <h1 class="text-center w-100 d-none d-sm-block font-champagne-bold">Más Servicios</h1>
            <h3 class="text-center w-100 d-sm-none font-champagne-bold">Más Servicios</h3>
        </div>
    </div>

    <div class="row justify-content-center pt-4 no-gutters">
        <?php if ($imgSet != 'empresariales') { ?>
            <div class="col-sm-9 col-md-2">
                <div class="p-3 m-2 p-relative text-center bg-blue-celebration">
                    <a href="<?php echo base_url('servicio/empresariales'); ?>"
                       class="ml-auto mr-auto d-flex align-items-center justify-content-center text-white sq-50 bg-light rounded-circle">
                        <img class="" src="<?php echo base_url('assets/img/1.png'); ?>">
                    </a>
                </div>
                <div class="service-title mt-3">
                    <h6 class="text-uppercase text-center">Empresariales</h6>
                    <p class="text-center description">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                    </p>
                </div>
            </div>
        <?php } ?>
        <?php if ($imgSet != 'sociales') { ?>
            <div class="col-sm-9 col-md-2">
                <div class="p-3 m-2 p-relative text-center bg-green-celebration">
                    <a href="<?php echo base_url('servicio/sociales'); ?>"
                       class="ml-auto mr-auto d-flex align-items-center justify-content-center text-white sq-50 bg-light rounded-circle">
                        <img class="" src="<?php echo base_url('assets/img/2.png'); ?>">
                    </a>
                </div>
                <div class="service-title mt-3">
                    <h6 class="text-uppercase text-center">Sociales</h6>
                    <p class="text-center description">
                        Ve los eventos sociales que hemos organizado y cómo te podemos proveer.
                    </p>
                </div>
            </div>
        <?php } ?>
        <?php if ($imgSet != 'privados') { ?>
            <div class="col-sm-9 col-md-2">
                <div class="p-3 m-2 p-relative text-center bg-red-celebration">
                    <a href="<?php echo base_url('servicio/privados'); ?>"
                       class="ml-auto mr-auto d-flex align-items-center justify-content-center text-white sq-50 bg-light rounded-circle">
                        <img class="" src="<?php echo base_url('assets/img/3.png'); ?>">
                    </a>
                </div>
                <div class="service-title mt-3">
                    <h6 class="text-uppercase text-center">Privados</h6>
                    <p class="text-center description">
                        Bodas, Cumpleaños, Despedidas. Todo lo que gustes para tu evento privado.
                    </p>
                </div>
            </div>
        <?php } ?>
        <?php if ($imgSet != 'cocina') { ?>
            <div class="col-sm-9 col-md-2">
                <div class="p-3 m-2 p-relative text-center bg-blue-sky-celebration">
                    <a href="<?php echo base_url('servicio/cocina'); ?>"
                       class="ml-auto mr-auto d-flex align-items-center justify-content-center text-white sq-50 bg-light rounded-circle">
                        <img class="" src="<?php echo base_url('assets/img/4.png'); ?>">
                    </a>
                </div>
                <div class="service-title mt-3">
                    <h6 class="text-uppercase text-center">Cocina</h6>
                    <p class="text-center description">
                        Comida, equipos industriales, utencilios. Todo lo que necesitas para un banquete y tu cocina.
                    </p>
                </div>
            </div>
        <?php } ?>
        <?php if ($imgSet != 'profesionales') { ?>
            <div class="col-sm-9 col-md-2">
                <div class="p-3 m-2 p-relative text-center bg-purple-celebration">
                    <a href="<?php echo base_url('servicio/profesionales'); ?>"
                       class="ml-auto mr-auto d-flex align-items-center justify-content-center text-white sq-50 bg-light rounded-circle">
                        <img class="" src="<?php echo base_url('assets/img/5.png'); ?>">
                    </a>
                </div>
                <div class="service-title mt-3">
                    <h6 class="text-uppercase text-center">Profesionales</h6>
                    <p class="text-center description">
                        Profesionales en todos los ámbitos que te ofrezcan el mejor servicio para tus eventos.
                    </p>
                </div>
            </div>
        <?php } ?>
        <?php if ($imgSet != 'decoracion') { ?>
            <div class="col-sm-9 col-md-2">
                <div class="p-3 m-2 p-relative text-center bg-blue-gray-celebration">
                    <a href="<?php echo base_url('servicio/decoracion'); ?>"
                       class="ml-auto mr-auto d-flex align-items-center justify-content-center text-white sq-50 bg-light rounded-circle">
                        <img class="" src="<?php echo base_url('assets/img/6.png'); ?>">
                    </a>
                </div>
                <div class="service-title mt-3">
                    <h6 class="text-uppercase text-center">Decoración</h6>
                    <p class="text-center description">
                        A veces solo necesitas un pequeño detalle para la perfección. Nosotros te lo conseguimos, uno o
                        más.
                    </p>
                </div>
            </div>
        <?php } ?>
    </div>
</div>

<div id="contact" class="container-fluid bg-blue-gray-celebration text-white pt-5 pb-5">
    <div class="container pt-4 pb-4">
        <div class="row align-items-center justify-content-center">
            <h1 class="text-center w-100 d-none d-sm-block font-champagne-bold">Contáctanos</h1>
            <h3 class="text-center w-100 d-sm-none font-champagne-bold">Contáctanos</h3>
            <p class="text-center w-75 d-none d-lg-block mt-3">
                "Envíanos un correo y te cotizamos tu evento."
            </p>
            <p class="text-center w-100 d-lg-none mt-3">
                "Envíanos un correo y te cotizamos tu evento."
            </p>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-xs-12 col-sm-auto form-col bg-blue-celebration p-4 m-4 rounded">
            <?php echo form_open('', array('class' => 'form_send d-none d-md-block')); ?>
            <div class="row no-gutters mb-4">
                <?php
                echo form_label('Nombre', '', array(
                    'class' => 'col-2'
                ));
                echo form_input(array(
                    'name' => 'name',
                    'class' => 'col-10',
                    'id' => 'name'
                ));
                ?>
            </div>
            <div class="row no-gutters mb-4">
                <?php
                echo form_label('Teléfono', '', array(
                    'class' => 'col-2'
                ));
                echo form_input(array(
                    'type' => 'text',
                    'name' => 'phone',
                    'class' => 'col-4'
                ));
                echo form_label('E-mail', '', array(
                    'class' => 'col-2 text-center'
                ));
                echo form_input(array(
                    'type' => 'text',
                    'name' => 'email',
                    'class' => 'col-4'
                ));
                ?>
            </div>
            <div class="row no-gutters mb-4">
                <?php
                echo form_label('Mensaje', '', array(
                    'class' => 'col-2'
                ));
                echo form_textarea(array(
                    'name' => 'message',
                    'class' => 'col-10',
                    'rows' => '4'
                ));
                ?>
            </div>
            <div class="row no-gutters ">
                <?php
                echo form_submit('enviar', 'Enviar', array(
                    'class' => 'col-auto ml-auto pl-5 pr-5'
                ));
                ?>
            </div>
            <?php echo form_close(); ?>

            <?php echo form_open('', array('class' => 'w-100 d-md-none')); ?>
            <div class="row no-gutters mb-4">
                <?php
                echo form_label('Nombre', '', array(
                    'class' => 'col-12'
                ));
                echo form_input(array(
                    'name' => 'name',
                    'class' => 'col-12',
                    'id' => 'name'
                ));
                ?>
            </div>
            <div class="row no-gutters mb-4">
                <?php
                echo form_label('Teléfono', '', array(
                    'class' => 'col-12'
                ));
                echo form_input(array(
                    'type' => 'text',
                    'name' => 'phone',
                    'class' => 'col-12'
                ));
                ?>
            </div>
            <div class="row no-gutters mb-4">
                <?php
                echo form_label('E-mail', '', array(
                    'class' => 'col-12r'
                ));
                echo form_input(array(
                    'type' => 'text',
                    'name' => 'email',
                    'class' => 'col-12'
                ));
                ?>
            </div>
            <div class="row no-gutters mb-4">
                <?php
                echo form_label('Mensaje', '', array(
                    'class' => 'col-12'
                ));
                echo form_textarea(array(
                    'name' => 'message',
                    'class' => 'col-12',
                    'rows' => '4'
                ));
                ?>
            </div>
            <div class="row no-gutters ">
                <?php
                echo form_submit('enviar', 'Enviar', array(
                    'class' => 'col-12'
                ));
                ?>
            </div>
            <?php echo form_close(); ?>
        </div>
    </div>
    <!-- end col-6 -->
</div>

<div class="container-fluid pt-3 pb-3 txt-blue-celebration">
    <div class="container pt-4 pb-4">
        <div class="row align-items-center justify-content-center">
            <h4 class="text-center w-100 font-champagne-bold">
                <a href="tel:01555550 5520" class="txt-blue-celebration">Tel. 5550 5520</a>
            </h4>
            <h5 class="text-center w-100 font-champagne-bold break-word">
                contacto@grupocelebration.com
            </h5>
            <h4 class="text-center w-100 font-champagne-bold">
                RFC: CCE0803282J2
            </h4>
        </div>
    </div>
</div>

<footer class="container-fluid bg-blue-celebration text-white pt-4 pb-4">
    <div class="row align-items-center justify-content-sm-center">
        <a href="<?php echo base_url(); ?>" class="text-uppercase col-md-auto p-sm-3 text-center text-md-left
								p-md-3
				                pt-lg-3 pb-lg-3 pl-lg-2 pr-lg-2
								p-xl-3">
            www.grupocelebration.com
        </a>
        <a href="<?php echo base_url(); ?>" class="col-sm-auto p-sm-3 d-none d-sm-inline
								p-md-3
				                pt-lg-3 pb-lg-3 pl-lg-2 pr-lg-2
								p-xl-3 ancla">
            NOSOTROS
        </a>
        <div class="d-none d-sm-block border-right-2 bg-white h-25-px"></div>
        <div href="#service2" class="col-sm-auto p-sm-3 d-none d-sm-inline
								p-md-3
				                pt-lg-3 pb-lg-3 pl-lg-2 pr-lg-2
								p-xl-3 ancla">
            SERVICIOS
        </div>
        <div class="d-none d-sm-block border-right-2 bg-white h-25-px"></div>
        <a href="<?php echo base_url(); ?>" class="col-sm-auto p-sm-3 d-none d-sm-inline
				                p-md-3
				                pt-lg-3 pb-lg-3 pl-lg-2 pr-lg-2
				                p-xl-3 ancla">
            CLIENTES
        </a>
        <div class="d-none d-sm-block border-right-2 bg-white h-25-px"></div>
        <div href="#contact" class="col-sm-auto p-sm-3 d-none d-sm-inline
								p-md-3
				                pt-lg-3 pb-lg-3 pl-lg-2 pr-lg-2
				                p-xl-3 ancla">
            CONTACTO
        </div>
    </div>
</footer>


<script type="application/javascript" src="<?php echo base_url('assets/js/jquery-3.2.1.min.js'); ?>"></script>
<script type="application/javascript" src="<?php echo base_url('assets/js/tether.min.js'); ?>"></script>
<script type="application/javascript" src="<?php echo base_url('assets/js/popper.min.js'); ?>"></script>
<script type="application/javascript" src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>
<script type="application/javascript" src="<?php echo base_url('assets/js/celebration.js'); ?>"></script>
</body>
</html>