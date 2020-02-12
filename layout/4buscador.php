<section id="buscador" class="d-flex flex-wrap">

    <div class="d-flex align-items-center col-12 col-md-3 col-lg-3 col-xl-3 titulo_buscador">
        <div class="container">
            <h2> Encuentre su inmueble </h2>
        </div>
    </div>

    <div class="d-flex align-items-center justify-content-center col-12 col-md-9 col-lg-9 col-xl-9 contenido_buscador">

        <section id="formulario">

            <div class="rounded">

                <div class="col-12">
                    <div class="row ">

                        <div class="col-3 form-group f11">
                            <input placeholder="Código" type="number" class="form-control f1" id="codigo_buscar" aria-describedby="emailHelp">
                        </div>

                        <div  class="col-3 form-group f11">
                            <select class="form-control f1 select-min" id="tipo_inmueble_buscar">
                                <option selected default> Tipo de Inmueble </option>
                            </select>
                        </div>

                        <div class="col-3 form-group f11">
                            <select class="form-control f1 select-min" id="tipo_gestion_buscar">
                                <option selected default> Tipo de Gestión </option>
                            </select>
                        </div>

                        <div class="col-3 form-group f11">
                            <select class="form-control f1" id="ciudad_buscar">
                                <option selected default> Ciudad </option>
                            </select>
                        </div>

                        <div class="col-3 form-group f11">
                            <select class="form-control f1" id="barrio_buscar">
                                <option selected default> Barrio </option>
                            </select>
                        </div>

           
                        <div class="col-3 form-group f11">
                            <select id="price" class="form-control f1">
                                <option value="0">Precio</option>
                                <option value="1">$ 500.000 a $ 1.000.000</option>
                                <option value="2">$ 1.000.000 a $ 5.000.000</option>
                                <option value="3">$ 5.000.000 a $ 8.000.000</option>
                                <option value="4">$ 8.000.000 a $ 30.000.000</option>
                                <option value="5">$ 30.000.000 a $ 50.000.000</option>
                                <option value="6">$ 50.000.000 a $ 300.000.000</option>
                                <option value="7">$ 300.000.000 a $ 600.000.000</option>
                                <option value="8">$ 600.000.000 a $ 1.000.000.000</option>
                                <option value="9">$1.000.000.000 a $ 2.000.000.000</option>
                                <option value="10">$2.000.000.000 a $ 12.000.000.000</option>
                            </select>
                        </div>
                      

                        <div class="col-6">
                            <div class="wrapper">
                                <div class="range-slider">
                                    <input type="text" class="js-range-slider" value="" />
                                </div>
                                <div class="extra-controls form-inline">
                                    <div class="form-group" style="display:none;">
                                        <input type="text" class="js-input-from form-control" id="area_minima_buscar" value="0" aria-describedby="emailHelp" />
                                        <input type="text" class="js-input-to form-control" id="area_maxima_buscar" value="0" aria-describedby="emailHelp" />
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="col-3 form-group f11">
                            <input placeholder="Baños" type="number" class="form-control f1" id="banios_buscar" aria-describedby="emailHelp">
                        </div>

                        <div class="col-3 form-group f11">
                            <input placeholder="Alcobas" type="number" class="form-control f1" id="alcobas_buscar" aria-describedby="emailHelp">
                        </div>

                        <div class="col-3 form-group f11">
                            <input placeholder="Garajes " type="number" class="form-control f1" id="garajes_buscar" aria-describedby="emailHelp">
                        </div>
                        <div class="col-3 form-group f11">
                            <button type="button" id="buscar" class="col-12 btn boton_principal"> Buscar </button>
                        </div>

                    </div>
                </div>

            </div>

        </section>

    </div>


</section>
