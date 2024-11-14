<section class="contact__container container">
    <h2 class="header__title">Contáctanos</h2>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <form action="#">
                    <h3 class="h4 mb-4">Ingresá tus datos</h3>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="row form-group">
                                <div class="col-md-12">
                                    <label for="nombre">Nombre</label>
                                    <input type="text" id="nombre" class="form-control rounded-0"
                                        placeholder="Nombre" />
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-md-12">
                                    <label for="telefono">Teléfono</label>
                                    <input type="text" id="telefono" class="form-control rounded-0"
                                        placeholder="Teléfono" />
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-md-12">
                                    <label for="email">Email</label>
                                    <input type="text" id="email" data-tipo="mail" class="form-control rounded-0"
                                        placeholder="Email" />
                                    <div style="color: red" id="error_email"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="row form-group">
                                <div class="col-md-12">
                                    <label for="subject">Asunto</label>
                                    <input type="text" id="subject" class="form-control rounded-0"
                                        placeholder="Asunto" />
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-md-12">
                                    <label for="message">Consulta</label>
                                    <textarea id="message" rows="4" class="form-control rounded-0"
                                        placeholder="Escribí tus consultas aquí"
                                        style="resize: none; height: 138px"></textarea>
                                    <div style="color: red" id="error_message"></div>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-md-12 text-right">
                                    <a href="#" class="cta">Enviar</a>
                                    <div id="mensajeRespuesta"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>