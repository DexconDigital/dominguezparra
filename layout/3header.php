<header class="sticky-top position-fixed">

    <section id="seccion_redes">

        <div class="container d-flex align-items-center justify-content-end h-100">
            <div class="contenedor_iconos d-flex justify-content-around align-items-center h-100">
                <div>
                    <a target="blank" href="<?php echo $redes_sociales['facebook']['link'] ?>"><i class="color_iconos <?php echo $redes_sociales['facebook']['icono'] ?>"></i></a>
                </div>

                <div>
                    <a target="blank" href="<?php echo $redes_sociales['twitter']['link'] ?>"><i class="color_iconos <?php echo $redes_sociales['twitter']['icono'] ?>"></i></a>
                </div>

                <div>
                    <a target="blank" href="<?php echo $datos_contacto['principal']['whatsapp']['link'] ?>"><i class="color_iconos <?php echo $datos_contacto['principal']['whatsapp']['icono'] ?>"></i></a>
                </div>
            </div>

        </div>

    </section>

    <section id="menu">

        <div class="container position-relative">

            <nav class="navbar w-100 d-flex align-items-center justify-content-between navbar navbar-expand-lg navbar-light p-0">

                <div>
                    <a href="index.php"><img style="width:350px" src="images/logo_color.png" alt=""></a>
                </div>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="ml-5 collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav">

                        <li class="nav-item <?php if ($page == 'Inicio') { echo 'active2';} ?>">
                            <a class="nav-link" href="index.php"> Inicio </a>
                        </li>

                        <li class="nav-item <?php if ($page == 'Nosotros') { echo 'active2';} ?>">
                            <a class="nav-link" href="nosotros.php"> Nosotros </a>
                        </li>

                        <li class="nav-item <?php if ($page == 'Servicios') { echo 'active2';} ?>">
                            <a class="nav-link" href="servicios.php"> Servicios </a>
                        </li>

                        <li class="nav-item <?php if ($page == 'Inmuebles') { echo 'active2';} ?>">
                            <a class="nav-link" href="inmuebles.php"> Inmuebles </a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Clientes
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" target="blank" href="https://www.simiinmobiliarias.com/base/simired/simidocsapi1.0/index.php?inmo=986&tipo=2"> Arrendatarios </a>
                                <a class="dropdown-item" target="blank" href="https://www.simiinmobiliarias.com/base/simired/simidocsapi1.0/index.php?inmo=986&tipo=1"> Propietarios </a>    
                                <a class="dropdown-item" href="#"> Pagos PSE </a>

                            </div>
                        </li>

                        <li class="nav-item <?php if ($page == 'Contáctenos') { echo 'active2';} ?>">
                            <a class="nav-link" href="contactenos.php"> Contáctenos </a>
                        </li>

                        <li class="nav-item">
                            <div>
                                <a href="#"><img class="logo_pse" src="images/logopse.png" alt=""></a>
                            </div>
                        </li>

                    </ul>

                </div>

            </nav>

        </div>

        <div class="position-absolute telefono">

            <a href="tel:<?php echo $datos_contacto['principal']['telefono_fijo']['link'] ?>">
                <div class=" w-100 d-flex flex-column align-items-center justify-content-center">

                    <div><i class="<?php echo $datos_contacto['principal']['telefono_fijo']['icono'] ?>"></i></div>

                    <div><?php echo $datos_contacto['principal']['telefono_fijo']['imprimir'] ?></div>
                </div>
            </a>

        </div>

    </section>

</header>