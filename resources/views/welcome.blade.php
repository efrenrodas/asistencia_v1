<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ASISMEDIUM</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" type="text/css" href="icons/icomoon.css">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <style>
        html {
            line-height: 1.15;
            -webkit-text-size-adjust: 100%
        }

        body {
            margin: 0
        }

        a {
            background-color: transparent
        }

        [hidden] {
            display: none
        }

        html {
            font-family: system-ui, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Helvetica Neue, Arial, Noto Sans, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji;
            line-height: 1.5
        }

        .px-6 {
            padding-left: 7.9rem;
            padding-right: 4.9rem
        }

        .fixed {
            position: fixed
        }

        .top-0 {
            top: -0.8rem
        }

        .right-0 {
            right: 0
        }

        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
</head>

<body class="antialiased">

    <header id="linkHome">
        <nav id="navFixed" class="navbar fixed-top navbar-expand-lg navbar-light bg-light p-10px">
            <div class="logo">
                <img src="images/logo1.png" alt="">
            </div>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a class="nav-link scroll current" href="#linkHome">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link scroll" href="#linkFeatures">Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link scroll" href="#linkAbout">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link scroll" href="#linkTestimonial">Testimonial</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link scroll" href="#linkContacto">Contacto</a>
                    </li>

                    @if (Route::has('login'))
                    <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                        @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
                        @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline btn btn-success">Log in</a>

                        @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline btn btn-primary">Register</a>
                        @endif
                        @endauth
                    </div>
                    @endif
                </ul>
            </div>
        </nav>
        <div class="boxHeader">
            <div class="textosHeader">
                <h1>Control Asistencia Laboral</h1>
                <p>Cuando conoces los tiempos que labora cada uno de tus trabajadores, resulta más sencillo conocer el valor de la hora trabajada, garantizando la correcta evaluación y seguimiento de la gestión organizacional.</p>
                <a class="botonGetStarted" href="#" rel="nofollow noopener">Empezar</a>
            </div>
            <div class="imgHeader">
                <img src="images/laboral.jpg" alt="">
            </div>
        </div>
    </header>

    <main>
        <a id="subir" class="icon-arrow-up scroll" href="#linkHome"></a>
        <!-- Sección Features -->
        <section class="boxFeatures" id="linkFeatures">
            <h3>Gratis hasta 50 usuarios</h3>
            <div class="features">
                <div class="cardFeatures">
                    <span class="icon-refresh"></span>
                    <h4>Control</h4>
                    <p>Registra y controla la hora de entrada y salida del personal que trabaja en tu empresa</p>
                </div>
                <div class="cardFeatures">
                    <span class="icon-refresh"></span>
                    <h4>Informes</h4>
                    <p>Genera informes de manera rápida y ágil, para medir la productividad del personal.</p>
                </div>
                <div class="cardFeatures">
                    <span class="icon-refresh"></span>
                    <h4>Adaptable</h4>
                    <p>Nuestro software puede integrarse con todos los sistemas de control de presencia como: tablets, dispositivos biométricos, lectores de tarjetas.</p>
                </div>
                <div class="cardFeatures">
                    <span class="icon-refresh"></span>
                    <h4>Flexible</h4>
                    <p>Se puede hacer configuraciones y ajuste de acuerdo a las necesidades de cada empresa.</p>
                </div>
                <div class="cardFeatures">
                    <span class="icon-refresh"></span>
                    <h4>Escalable</h4>
                    <p>A medida que crece la empresa y aumenta el personal los equipos de registro pueden volverse un limitante. Nos adaptamos a cualquier necesidad y tamaño</p>
                </div>
                <div class="cardFeatures">
                    <span class="icon-refresh"></span>
                    <h4>Ahorro</h4>
                    <p>Evita la compra de equipos que con el tiempo tendrán obsolescencia.</p>
                </div>
            </div>
        </section>
        <!-- Sección Call To Actions -->
        <section class="boxCallToActions">
            <div class="callToActions">
                <div class="imgCallToActions">
                    <img src="images/do_ui_kit_download_cta_floating_devices-2x.png" alt="">
                </div>
                <article class="contenido">
                    <h3>Create interactive <br>prototypes</h3>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aperiam possimus nemo sequi cum? Obcaecati eos possimus ea numquam fugit. Quae et labore accusamus consectetur voluptatum placeat incidunt quaerat quibusdam accusantium.</p>
                    <ul>
                        <li> <span class="icon-check"></span> Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        </li>
                        <li> <span class="icon-check"></span> Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        </li>
                    </ul>
                    <div class="boxCardCallToActions" id="cardAnimada">
                        <div class="cardCallToActions">
                            <div class="boxProfesional">
                                <div class="imgProfesional">
                                    <img src="images/person_1.jpg" alt="">
                                </div>
                                <div class="datosProfesional">
                                    <h5>Amalia G.</h5>
                                    <h6>Co-Founder, XYZ Inc.</h6>
                                </div>
                            </div>
                            <p>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita odit est ullam quis recusandae ab illum sunt ut in excepturi tenetur a, aspernatur iste. Accusamus dolorem delectus tempore debitis quaerat."</p>
                        </div>
                    </div>
                </article>
            </div>
        </section>
        <!-- Sección About -->
        <section class="boxAbout" id="linkAbout">
            <h3>About Us</h3>
            <div class="about">
                <div class="imgAbout">
                    <img src="images/about_1.jpg" alt="">
                </div>
                <article class="contenidoAbout">
                    <h3>Create interactive prototypes</h3>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aperiam possimus nemo sequi cum? Obcaecati eos possimus ea numquam fugit. Quae et labore accusamus consectetur voluptatum placeat incidunt quaerat quibusdam accusantium.</p>
                    <a class="botonGetStarted" href="#">Learn More</a>
                </article>
            </div>
        </section>
        <!-- Sección Contacto -->
        <section class="boxContacto" id="linkContacto">
            <h3>Get In Touch</h3>
            <div class="container contacto">
                <form id="miForm">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputName"><b>First Name</b></label>
                            <input type="text" class="form-control" id="inputName" placeholder="First Name..." required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputLastName"><b>Last Name</b></label>
                            <input type="text" class="form-control" id="inputLastName" placeholder="Last Name..." required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail"><b>Email</b></label>
                        <input type="email" class="form-control" id="inputEmail" placeholder="Email..." required>
                    </div>
                    <div class="form-group">
                        <label for="inputSubject"><b>Subject</b></label>
                        <input type="text" class="form-control" id="inputSubject" placeholder="Subject..." required>
                    </div>
                    <div class="form-group">
                        <label for="message"><b>Message</b></label>
                        <textarea class="form-control" rows="5" id="message" placeholder="Message..." required></textarea>
                    </div>
                    <button type="submit" class="botonEnviarMensaje">Send Message</button>
                </form>
            </div>
        </section>
    </main>
     <!--Sección Footer-->
    <footer class="footer">
        <div class="boxTextFooter">
            <p>Copyright-2022<span class="icon-heart"></span> <a href="https://github.com/oscarcornejo" target="_blank"> @ASISMEDIUM.EC</a></p>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="js/dataApi.js"></script>
    <script src="js/app.js"></script>

</body>
</html>