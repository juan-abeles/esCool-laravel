<!DOCTYPE html>
<html>
    <head>
        <?php require 'head.php'; ?>
        <title>EsCool - Preguntas Frecuentes</title>
    </head>

    <body>
        <!-- Header -->
        <header class="encabezado">
            <?php require 'navbar.php'; ?>
            <h2 class="text-center text-uppercase text-secondary mb-0 py-4">Preguntas Frecuentes</h2>
        </header>

        <!-- Preguntas Frecuentes -->
        <section id="faq">
            <div class="container">
                <div class="" id="accordion">

                    <!-- Preguntas Generales -->
                    <div class="faqTitle">Preguntas Generales</div>
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-header questions">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">¿Qué es EsCool?</a>
                            </h4>
                        </div>
                        <div id="collapseOne" class="panel-collapse collapse answers">
                            <div class="card-block">
                                EsCool es una plataforma web de gestión escolar, pensada para mejorar la interacción y la comunicación. EsCool es una solución innovadora, debido a que 
                                no sólo está pensada para ser usada entre alumnos y docentes, sino para generar una herramienta útil para varios miembros del sistema educativo. 
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-header questions">
                                <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">¿Qué no es EsCool?</a>
                            </h4>
                        </div>
                        <div id="collapseTwo" class="panel-collapse collapse answers">
                            <div class="card-block">
                                EsCool <strong>no </strong>es una plataforma para realizar cursos ni programas de aprendizaje online. 
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-header questions">
                                <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">¿Quiénes usan EsCool?</a>
                            </h4>
                        </div>
                        <div id="collapseThree" class="panel-collapse collapse answers">
                            <div class="card-block">
                                EsCool es una plataforma multiusuario, entre ellos se destacan Alumnos, Docentes, Preceptores, Padres y Directivos.
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-header questions">
                                <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFour">¿Qué puedo hacer con EsCool?</a>
                            </h4>
                        </div>
                        <div id="collapseFour" class="panel-collapse collapse answers">
                            <div class="card-block">
                                Las funcionalidades de EsCool se adecúan automáticamente en función del usuario:
                                <ul>
                                    <li>Alumnos: Podrán comunicarse con el docente, obtener información, consultar sus calificaciones y faltas.</li>
                                    <li>Docentes: Podrán comunicarse con los alumnos, subir información, calificaciones y apercibimientos.</li>
                                    <li>Preceptores: Podrán subir calificaciones, faltas y apercibimientos de los alumnos.</li>
                                    <li>Padres: Podrán consultar las calificaciones, faltas y apercibimientos de sus hijos. También podrán abonar la cuota desde la plataforma.</li>
                                    <li>Directivos: Tendrán acceso total a la plataforma, pudiendo hacer cualquiera de las acciones disponibles.</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Funcionamiento -->
                    <div class="faqTitle">Funcionamiento</div>
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-header questions">
                                <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFive">¿Sobre qué plataformas funciona EsCool?</a>
                            </h4>
                        </div>
                        <div id="collapseFive" class="panel-collapse collapse answers">
                            <div class="card-block">
                                EsCool es multiplataforma, debido a que es una <strong>aplicación web</strong>.
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-header questions">
                                <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseSix">¿Cómo comienzo a utilizar EsCool?</a>
                            </h4>
                        </div>
                        <div id="collapseSix" class="panel-collapse collapse answers">
                            <div class="card-block">
                                Los pasos involucrados en éste proceso son muy sencillos. Todo lo que debes hacer es:
                                <ul>
                                    <li>Crear una cuenta</li>
                                    <li>Activar tu cuenta</li>
                                    <li>Elegir a cuál institución educativa perteneces.</li>
                                    <li>El último paso es esperar la aprobación, la cual suele tomar alrededor de 48 horas.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-header questions">
                                <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseSeven">¿Puedo proponer cambios y mejoras en la plataforma?</a>
                            </h4>
                        </div>
                        <div id="collapseSeven" class="panel-collapse collapse answers">
                            <div class="card-block">
                                Claro que sí! Quién mejor que los usuarios para mejorar la aplicación, puede enviarnos todas las ideas y mejoras a <strong>ideas@escool.com</strong>.
                                <br />
                            </div>
                        </div>
                    </div>
                    
                    <!-- Pagos -->
                    <div class="faqTitle">Pagos</div>
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-header questions">
                                <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseEight">¿Cuánto sale la licencia de EsCool?</a>
                            </h4>
                        </div>
                        <div id="collapseEight" class="panel-collapse collapse answers">
                            <div class="card-block">
                                Nada, EsCool es una plataforma totalmente gratuita (<strong>Al menos por ahora!</strong>).
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <?php require 'footer.php'; ?>
        <?php require 'scripts.php'; ?>
    </body>
</html>