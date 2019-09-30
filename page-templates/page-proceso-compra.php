<?php
/*
 Template Name: Página Proceso Compra
 *
 * This is your custom page template. You can create as many of these as you need.
 * Simply name is "page-whatever.php" and in add the "Template Name" title at the
 * top, the same way it is here.
 *
 * When you create your page, you can just select the template and viola, you have
 * a custom page template to call your very own. Your mother would be so proud.
 *
 * For more info: http://codex.wordpress.org/Page_Templates
*/
?>
<?php get_header();?>
    <main class="main-post main-proceso-compra padding-toggler-no" role="main">
        <header class="proceso-compra-header bg-cover" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/proceso-compra-stitchkin.jpg);">   
        </header>
        <section class="proceso-compra-content main-post__content">
            <div class="container">
                <div class="row content-title">
                    <div class="col-12"><h1><?php the_title();?></h1></div>
                </div>
                <div class="row justify-content-center proceso-compra-info d-none d-sm-none d-md-flex">
                    <div class="col-md-10 col-12">
                        <div class="row proceso-box__nav">
                            <div class="col-md-3 col-12">
                                <a class="" href="#procesoCotiza">
                                    <div class="box-somos text-center">
                                        <div class="box-somos__icon icon-trayectoria">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/cotiza.png" alt="">
                                        </div>
                                        <div class="box-somos__title">1.- Cotiza</div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-3 col-12">
                                <a class="" href="#procesoReserva">
                                    <div class="box-somos text-center">
                                        <div class="box-somos__icon icon-trayectoria">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/reserva.png" alt="">
                                        </div>
                                        <div class="box-somos__title">2.- Reserva</div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-3 col-12">
                                <a class="" href="#procesoPromesa">
                                    <div class="box-somos text-center">
                                        <div class="box-somos__icon icon-trayectoria">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/promesa.png" alt="">
                                        </div>
                                        <div class="box-somos__title">3.- Promesa</div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-3 col-12">
                                <a class="" href="#procesoCredito">
                                    <div class="box-somos text-center">
                                        <div class="box-somos__icon icon-trayectoria">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/proceso_escritura.png" alt="">
                                        </div>
                                        <div class="box-somos__title">4.- Crédito Hipotecario</div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-3 col-12">
                                <a class="" href="#procesoEscritura">
                                    <div class="box-somos text-center">
                                        <div class="box-somos__icon icon-trayectoria">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/escritura.png" alt="">
                                        </div>
                                        <div class="box-somos__title">5.- Escritura</div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-3 col-12">
                                <a class="" href="#procesoEntrega">
                                    <div class="box-somos text-center">
                                        <div class="box-somos__icon icon-trayectoria">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/entrega.png" alt="">
                                        </div>
                                        <div class="box-somos__title">6.- Entrega</div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-3 col-12">
                                <a class="" href="#procesoManual">
                                    <div class="box-somos text-center">
                                        <div class="box-somos__icon icon-trayectoria">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/entrega_manual.png" alt="">
                                        </div>
                                        <div class="box-somos__title">7.- Entrega Manual</div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-3 col-12">
                                <a class="" href="#procesoPostVenta">
                                    <div class="box-somos text-center">
                                        <div class="box-somos__icon icon-trayectoria">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/post_venta.png" alt="">
                                        </div>
                                        <div class="box-somos__title">8.- Post Venta</div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row proceso-box__content content-post justify-content-center d-none d-sm-none d-md-flex">
                    <div class="col-md-10 col-12 py-5">
                        <div class="owl-carousel owl-theme carousel-proceso">
                            <div class="item carousel-proceso__item" data-hash="procesoCotiza">
                                <h2>1.- Cotización</h2>
                                <p>Para solicitar una cotización, recomendamos que te acerques a la Sala de Ventas del proyecto Stitchkin de tu interés.
                                Nuestros ejecutivos te asesorarán para elegir el departamento que mejor se adapte a tus necesidades.
                                </p>
                                <p><b>Para cotizar:</b></p>
                                <p>1.- Selecciona el departamento de tu interés.</p>
                                <p>2.- Entrega al Ejecutivo de Ventas tu nombre completo, Rut, teléfono y correo electrónico.</p>
                                <p>3.- Nuestro ejecutivo te entregará la cotización con el departamento escogido.</p>
                                <p><b>Para tener en cuenta:</b> La cotización tiene una validez de siete días corridos y no es considerada una reserva del inmueble.</p>     
                            </div>
                            <div class="item carousel-proceso__item" data-hash="procesoReserva">
                                <h2>2.- Reserva</h2>
                                <p>Una vez elegido el departamento de preferencia, nuestro Ejecutivo de Ventas te guiará para que emitas la Oferta de Compra,
                                y así reserves el inmueble a tu nombre.
                                </p>
                                <p><b>Para reservar:</b></p>
                                <p>1.- Con la asesoría de nuestro Ejecutivo de Ventas podrás acordar el plan de pago de tu nuevo departamento u oficina, que será incluido en la Oferta de Compra.</p>
                                <p>2.- Para formalizar la reserva, deberás pagar un monto definido previamente en la Sala de Ventas, mediante cheque o transferencia bancaria.</p>
                                <p>3.- Una vez recibida la oferta de compra, el inmueble quedará reservado a tu nombre.</p>
                                <p>4.- Recibirás una confirmación de la aprobación de la Oferta de Compra dentro de los 10 días posteriores.</p>
                                <p><b>Para tener en cuenta:</b> El siguiente paso es la firma de la Promesa de Compraventa, para esto se requiere de una pre aprobación de crédito hipotecario,
                                para lo cual contarás con la asesoría de nuestro Ejecutivo de Ventas.</p>  
                            </div>
                            <div class="item carousel-proceso__item" data-hash="procesoPromesa">
                                <h2>3.- Promesa de Compraventa</h2>
                                <p>Posterior a la aprobación de tu Oferta de Compra y con un Crédito Hipotecario pre aprobado, el Ejecutivo de Ventas se contactará
                                contigo para coordinar la firma de la Promesa de Compraventa. Este contrato es el documento legal en el que ambas partes se comprometen a la compra y venta del departamento.
                                </p>
                                <p><b>Firma de Promesa de Compraventa en Sala de Ventas:</b></p>
                                <p>1.- Revisa en detalle tu información personal, domicilio, y correo electrónico en el contrato, ya que esta información es fundamental para mantener el contacto contigo
                                durante todo el proceso de compra.</p>
                                <p>2.- Revisa el número de los inmuebles, el monto y forma de pago del pie, el número de cuotas, y la forma de pago del saldo del precio.</p>
                                <p>3.- Una vez revisado, ambas partes involucradas deben firmar la Promesa de Compraventa, para luego legalizarla ante notario. Pasados 20 días de la firma de la promesa,
                                podrás retirar tu copia en la Sala de Ventas.</p>
                                <p><b>Para tener en cuenta:</b> Si realizas una compra en verde, nosotros nos preocuparemos de gestionar la póliza de seguro de venta en verde. Este documento es requerido
                                para la legalización de la Promesa de Compraventa en notaría.</p>   
                            </div>
                            <div class="item carousel-proceso__item" data-hash="procesoCredito">
                                <h2>4.- Crédito Hipotecario</h2>
                                <p>Aproximadamente un mes antes de la fecha estimada de recepción del edificio, un Ejecutivo de Escrituración se pondrá en contacto contigo para asesorarte en los pasos
                                previos a la firma de la escritura y guiarte en la obtención de tu crédito hipotecario.
                                </p>
                                <p><b>Pasos para la obtención del crédito hipotecario:</b></p>
                                <p>1.- Te recomendamos cotizar tu crédito hipotecario en dos o tres bancos de tu preferencia, para que tomes la opción que más se adapte a tus necesidades.</p>
                                <p>2.- Una vez que definas con qué bancos evaluarás tu crédito, deberás recopilar y entregarles toda la información requerida para que el banco apruebe y formalice tu crédito.</p>
                                <p>3.- Con tu crédito aprobado y el porcentaje final de financiamiento definido, podrás firmar el set hipotecario y la declaración personal de salud en el banco seleccionado.</p>
                                <p><b>Para tener en cuenta:</b> Es importante que cuando nuestro Ejecutivo de Escrituración se contacte contigo, le informes el banco y Ejecutivo con el que decidiste tomar el crédito hipotecario.</p>
                            </div>
                            <div class="item carousel-proceso__item" data-hash="procesoEscritura">
                                <h2>5.- Firma de Escritura</h2>
                                <p>Con la recepción del edificio, la ley de copropiedad y los planos, inscritos en el Conservador de Bienes Raíces, recibirás una carta certificada en tu domicilio, donde se notifica el inicio del
                                periodo de 60 días hábiles para firmar la Escritura de Compraventa. Este es el documento legal que te acredita como propietario del inmueble.
                                </p>
                                <p><b>Para firmar la Escritura de Compraventa de tu nuevo departamento Stitchkin:</b></p>
                                <p>1.- Previo a la firma la escritura deberás asegurarte del pago total del precio pactado.</p>
                                <p>2.- Nuestro Ejecutivo de Escrituración coordinará la fecha de firma de la Escritura en la Notaría designada.</p>
                                <p>3.- En la Notaría te acompañará nuestro procurador para asesorarte frente a cualquier duda que se presente en este proceso.</p>
                                <p>4.- Con la Escritura firmada por todas las partes involucradas, e inscrita en el Conservador de Bienes Raíces, pasarás a ser el propietario oficial del departamento Stitchkin.</p>
                                <p><b>Para tener en cuenta:</b> Existen gastos adicionales asociados a la firma de Escritura como la Tasación del inmueble, estudio de títulos, gastos notariales, inscripción en el
                                Conservador de Bienes Raíces y el pago de fondo del edificio, establecido en Reglamento de Copropiedad.</p>   
                            </div>
                            <div class="item carousel-proceso__item" data-hash="procesoEntrega">
                                <h2>6.- Entrega</h2>
                                <p>Dentro de los 10 días hábiles posteriores a la firma de la Escritura de Compraventa, te contactaremos para programar la entrega de tu nuevo departamento.
                                </p>
                                <p><b>Para recibir tu nueva propiedad:</b></p>
                                <p>1.- Un Ejecutivo de Entrega te estará esperando en el proyecto, según el día y hora acordados, para hacer la entrega de tu nuevo departamento Stitchkin.</p>
                                <p>2.- Durante la entrega podrás revisar tu nueva propiedad. En caso de que tengas observaciones, estas quedarán registradas en un Acta de Entrega, para su reparación.</p>
                                <p>3.- En caso de que tengas observaciones, la Constructora se encargará de repararlas. Una vez resueltas todas las observaciones, te contactarán para firmar el Acta de Conformidad.</p>
                                <p><b>Para tener en cuenta:</b> Es importante que firmes el Acta de Entrega para asegurarte de que tus observaciones sean resueltas.</p>    
                            </div>
                            <div class="item carousel-proceso__item" data-hash="procesoManual">
                                <h2>7.- Manual de uso y mantención del inmueble</h2>
                                <p>En la entrega se incluirá el “Manual de Uso y Mantenciones Preventivas”, donde encontrarás toda la información referente a la mantención del inmueble y los
                                manuales de los artefactos incluidos en el departamento.
                                </p>
                                <p><b>Recomendaciones:</b></p>
                                <p>1.- En este manual encontrarás el detalle de todas las garantías otorgadas por los proveedores de las terminaciones y los artefactos.</p>
                                <p>2.- Debes tener en cuenta que la garantía no es válida si las instalaciones son intervenidas por personal no calificado, de existir mala manipulación y/o de
                                no efectuarse las mantenciones Preventivas.</p>
                                <p>3.- Para que tu departamento se mantenga siempre nuevo, es recomendable que realices las mantenciones periódicas correspondientes con los proveedores calificados.</p>
                                <p><b>Para tener en cuenta:</b> En caso de que se presente un desperfecto, revisa el manual de uso y mantención del inmueble para confirmar que el desperfecto a reclamar esté cubierto por
                                nuestra garantía y que no se deba a mal uso o falta de mantención.</p>    
                            </div>
                            <div class="item carousel-proceso__item" data-hash="procesoPostVenta">
                                <h2>8.- Post Venta</h2>
                                <p>En el Acta de Entrega estará el contacto de Post Venta de la Constructora del proyecto, para que puedas contactarlos directamente ante cualquier duda o requerimiento relacionado a la construcción del inmueble.
                                En estos casos es importante copiar en los correos a <b>servicioalcliente@stitchkin.cl</b> para que podamos realizar un seguimiento de tu caso.
                                </p>
                                <p>Para cualquier otro requerimiento podrás contactarte directamente con nosotros a servicioalcliente@stitchkin.cl</p>
                                <p><b>Para tener en cuenta:</b> El servicio de postventas cubre desperfectos del departamento que provengan del proceso constructivo de este y no por uso cotidiano o desgaste natural.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center proceso-mobile d-block d-sm-none">
                    <div class="col-md-10 col-12">
                        <div class="accordion" id="accordionExample">
                            <div class="card">
                                <div class="card-header" id="headingCotiza">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseCotiza" aria-expanded="true" aria-controls="collapseCotiza">
                                            1.- Cotización
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapseCotiza" class="collapse show" aria-labelledby="headingCotiza" data-parent="#accordionExample">
                                <div class="card-body">
                                    <p>Para solicitar una cotización, recomendamos que te acerques a la Sala de Ventas del proyecto Stitchkin de tu interés.
                                    Nuestros ejecutivos te asesorarán para elegir el departamento que mejor se adapte a tus necesidades.
                                    </p>
                                    <p><b>Para cotizar:</b></p>
                                    <p>1.- Selecciona el departamento de tu interés.</p>
                                    <p>2.- Entrega al Ejecutivo de Ventas tu nombre completo, Rut, teléfono y correo electrónico.</p>
                                    <p>3.- Nuestro ejecutivo te entregará la cotización con el departamento escogido.</p>
                                    <p><b>Para tener en cuenta:</b> La cotización tiene una validez de siete días corridos y no es considerada una reserva del inmueble.</p>
                                </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingReserva">
                                <h2 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseReserva" aria-expanded="false" aria-controls="collapseReserva">
                                        2.- Reserva
                                    </button>
                                </h2>
                                </div>
                                <div id="collapseReserva" class="collapse" aria-labelledby="headingReserva" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <p>Una vez elegido el departamento de preferencia, nuestro Ejecutivo de Ventas te guiará para que emitas la Oferta de Compra,
                                        y así reserves el inmueble a tu nombre.
                                        </p>
                                        <p><b>Para reservar:</b></p>
                                        <p>1.- Con la asesoría de nuestro Ejecutivo de Ventas podrás acordar el plan de pago de tu nuevo departamento u oficina, que será incluido en la Oferta de Compra.</p>
                                        <p>2.- Para formalizar la reserva, deberás pagar un monto definido previamente en la Sala de Ventas, mediante cheque o transferencia bancaria.</p>
                                        <p>3.- Una vez recibida la oferta de compra, el inmueble quedará reservado a tu nombre.</p>
                                        <p>4.- Recibirás una confirmación de la aprobación de la Oferta de Compra dentro de los 10 días posteriores.</p>
                                        <p><b>Para tener en cuenta:</b> El siguiente paso es la firma de la Promesa de Compraventa, para esto se requiere de una pre aprobación de crédito hipotecario,
                                        para lo cual contarás con la asesoría de nuestro Ejecutivo de Ventas.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingCompra">
                                <h2 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseCompra" aria-expanded="false" aria-controls="collapseCompra">
                                        3.- Promesa de Compraventa
                                    </button>
                                </h2>
                                </div>
                                <div id="collapseCompra" class="collapse" aria-labelledby="headingCompra" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <p>Posterior a la aprobación de tu Oferta de Compra y con un Crédito Hipotecario pre aprobado, el Ejecutivo de Ventas se contactará
                                        contigo para coordinar la firma de la Promesa de Compraventa. Este contrato es el documento legal en el que ambas partes se comprometen a la compra y venta del departamento.
                                        </p>
                                        <p><b>Firma de Promesa de Compraventa en Sala de Ventas:</b></p>
                                        <p>1.- Revisa en detalle tu información personal, domicilio, y correo electrónico en el contrato, ya que esta información es fundamental para mantener el contacto contigo
                                        durante todo el proceso de compra.</p>
                                        <p>2.- Revisa el número de los inmuebles, el monto y forma de pago del pie, el número de cuotas, y la forma de pago del saldo del precio.</p>
                                        <p>3.- Una vez revisado, ambas partes involucradas deben firmar la Promesa de Compraventa, para luego legalizarla ante notario. Pasados 20 días de la firma de la promesa,
                                        podrás retirar tu copia en la Sala de Ventas.</p>
                                        <p><b>Para tener en cuenta:</b> Si realizas una compra en verde, nosotros nos preocuparemos de gestionar la póliza de seguro de venta en verde. Este documento es requerido
                                        para la legalización de la Promesa de Compraventa en notaría.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingCredito">
                                <h2 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseCredito" aria-expanded="false" aria-controls="collapseCredito">
                                        4.- Crédito Hipotecario
                                    </button>
                                </h2>
                                </div>
                                <div id="collapseCredito" class="collapse" aria-labelledby="headingCredito" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <p>Aproximadamente un mes antes de la fecha estimada de recepción del edificio, un Ejecutivo de Escrituración se pondrá en contacto contigo para asesorarte en los pasos
                                        previos a la firma de la escritura y guiarte en la obtención de tu crédito hipotecario.
                                        </p>
                                        <p><b>Pasos para la obtención del crédito hipotecario:</b></p>
                                        <p>1.- Te recomendamos cotizar tu crédito hipotecario en dos o tres bancos de tu preferencia, para que tomes la opción que más se adapte a tus necesidades.</p>
                                        <p>2.- Una vez que definas con qué bancos evaluarás tu crédito, deberás recopilar y entregarles toda la información requerida para que el banco apruebe y formalice tu crédito.</p>
                                        <p>3.- Con tu crédito aprobado y el porcentaje final de financiamiento definido, podrás firmar el set hipotecario y la declaración personal de salud en el banco seleccionado.</p>
                                        <p><b>Para tener en cuenta:</b> Es importante que cuando nuestro Ejecutivo de Escrituración se contacte contigo, le informes el banco y Ejecutivo con el que decidiste tomar el crédito hipotecario.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingFirma">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFirma" aria-expanded="false" aria-controls="collapseFirma">
                                            5.- Firma de Escritura
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapseFirma" class="collapse" aria-labelledby="headingFirma" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <p>Con la recepción del edificio, la ley de copropiedad y los planos, inscritos en el Conservador de Bienes Raíces, recibirás una carta certificada en tu domicilio, donde se notifica el inicio del
                                        periodo de 60 días hábiles para firmar la Escritura de Compraventa. Este es el documento legal que te acredita como propietario del inmueble.
                                        </p>
                                        <p><b>Para firmar la Escritura de Compraventa de tu nuevo departamento Stitchkin:</b></p>
                                        <p>1.- Previo a la firma la escritura deberás asegurarte del pago total del precio pactado.</p>
                                        <p>2.- Nuestro Ejecutivo de Escrituración coordinará la fecha de firma de la Escritura en la Notaría designada.</p>
                                        <p>3.- En la Notaría te acompañará nuestro procurador para asesorarte frente a cualquier duda que se presente en este proceso.</p>
                                        <p>4.- Con la Escritura firmada por todas las partes involucradas, e inscrita en el Conservador de Bienes Raíces, pasarás a ser el propietario oficial del departamento Stitchkin.</p>
                                        <p><b>Para tener en cuenta:</b> Existen gastos adicionales asociados a la firma de Escritura como la Tasación del inmueble, estudio de títulos, gastos notariales, inscripción en el
                                        Conservador de Bienes Raíces y el pago de fondo del edificio, establecido en Reglamento de Copropiedad.</p>   
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingEntrega">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseEntrega" aria-expanded="false" aria-controls="collapseEntrega">
                                            6.- Entrega
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapseEntrega" class="collapse" aria-labelledby="headingEntrega" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <p>Dentro de los 10 días hábiles posteriores a la firma de la Escritura de Compraventa, te contactaremos para programar la entrega de tu nuevo departamento.
                                        </p>
                                        <p><b>Para recibir tu nueva propiedad:</b></p>
                                        <p>1.- Un Ejecutivo de Entrega te estará esperando en el proyecto, según el día y hora acordados, para hacer la entrega de tu nuevo departamento Stitchkin.</p>
                                        <p>2.- Durante la entrega podrás revisar tu nueva propiedad. En caso de que tengas observaciones, estas quedarán registradas en un Acta de Entrega, para su reparación.</p>
                                        <p>3.- En caso de que tengas observaciones, la Constructora se encargará de repararlas. Una vez resueltas todas las observaciones, te contactarán para firmar el Acta de Conformidad.</p>
                                        <p><b>Para tener en cuenta:</b> Es importante que firmes el Acta de Entrega para asegurarte de que tus observaciones sean resueltas.</p>   
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingManual">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseManual" aria-expanded="false" aria-controls="collapseManual">
                                            7.- Manual de uso y mantención del inmueble
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapseManual" class="collapse" aria-labelledby="headingManual" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <p>En la entrega se incluirá el “Manual de Uso y Mantenciones Preventivas”, donde encontrarás toda la información referente a la mantención del inmueble y los
                                        manuales de los artefactos incluidos en el departamento.
                                        </p>
                                        <p><b>Recomendaciones:</b></p>
                                        <p>1.- En este manual encontrarás el detalle de todas las garantías otorgadas por los proveedores de las terminaciones y los artefactos.</p>
                                        <p>2.- Debes tener en cuenta que la garantía no es válida si las instalaciones son intervenidas por personal no calificado, de existir mala manipulación y/o de
                                        no efectuarse las mantenciones Preventivas.</p>
                                        <p>3.- Para que tu departamento se mantenga siempre nuevo, es recomendable que realices las mantenciones periódicas correspondientes con los proveedores calificados.</p>
                                        <p><b>Para tener en cuenta:</b> En caso de que se presente un desperfecto, revisa el manual de uso y mantención del inmueble para confirmar que el desperfecto a reclamar esté cubierto por
                                        nuestra garantía y que no se deba a mal uso o falta de mantención.</p>    
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingPostVenta">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapsePostVenta" aria-expanded="false" aria-controls="collapsePostVenta">
                                            8.- Post Venta
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapsePostVenta" class="collapse" aria-labelledby="headingPostVenta" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <p>En el Acta de Entrega estará el contacto de Post Venta de la Constructora del proyecto, para que puedas contactarlos directamente ante cualquier duda o requerimiento relacionado a la construcción del inmueble.
                                        En estos casos es importante copiar en los correos a <b>servicioalcliente@stitchkin.cl</b> para que podamos realizar un seguimiento de tu caso.
                                        </p>
                                        <p>Para cualquier otro requerimiento podrás contactarte directamente con nosotros a servicioalcliente@stitchkin.cl</p>
                                        <p><b>Para tener en cuenta:</b> El servicio de postventas cubre desperfectos del departamento que provengan del proceso constructivo de este y no por uso cotidiano o desgaste natural.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
<?php
get_footer();