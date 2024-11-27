<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CFP N°61</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <link id="theme-stylesheet" rel="stylesheet" href="lightmode.css">

    <link rel="shortcut icon" href="img/CFPlogo.png">
    <link rel="icon" href="img/CFPlogo.png">
</head>

<body>
    <header>
        <nav class="navbar mb-3">
            <div class="container-fluid position-relative">
                <img src="img/CFPlogo.png" alt="Centro Formación Profesional N°61" class="navbar-brand">
        
                <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#menuitem"
                    aria-controls="menuitem" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
        
                <div class="collapse position-absolute w-100 mt-3" id="menuitem" style="top: 100%; left: 0;">
                    <div class="collapsed-content">
                        <button class="btn btn-primary mb-2 bttnz" data-section="abt">¿Quienes somos?</button>
                        <button class="btn btn-primary mb-2 bttnz" data-section="obj">Propósitos y objetivos</button>
                        <button class="btn btn-primary mb-2 bttnz" data-section="try">Trayectos</button>
                        <button class="btn btn-primary mb-2 bttnz" data-section="loc">¿Dónde estamos? </button>
                        <button class="btn btn-primary mb-2 bttnz" data-section="cnt">Contacto, Solicitud de Certificados</button>
                        <a href="" class="btn btn-primary mb-2 bttnz">Novedades</a>
                        <a href="" class="btn btn-primary mb-2 bttnz">Galería</a>
        
                        <button class="btn btn-primary mb-2 spcbttnz" id="toggle-dark-mode">Cambiar tema</button>
                        <a href="login.html" class="btn btn-primary mb-2 spcbttnz">Administrar contenido</a>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <div class="container">
        <div id="carslpics" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carslpics" data-slide-to="0" class="active"></li>
                <li data-target="#carslpics" data-slide-to="1"></li>
                <li data-target="#carslpics" data-slide-to="2"></li>
            </ol>

            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="./img/testimg1.png" alt="First slide">
                    <div class="carousel-caption">
                        <h5 class="carsltitle">Centro Formación Profesional N°61</h5>
                        <p class="carsltxt">Dependiente de la Dirección de Educación Técnico Profesional del Consejo General de Educación.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="./img/testimg2.png" alt="Second slide">
                    <div class="carousel-caption">
                        <h5 class="carsltitle">Centro Formación Profesional N°61</h5>
                        <p class="carsltxt">Funciona en la localidad de La Criolla desde el año 2014 y actualmente cuenta con un anexo en la ciudad vecina de Colonia Ayuí.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="./img/testimg3.png" alt="Third slide">
                    <div class="carousel-caption">
                        <h5 class="carsltitle">Centro Formación Profesional N°61</h5>
                        <p class="carsltxt">La Formación Profesional permite compatibilizar la promoción social, profesional y personal.</p>
                    </div>
                </div>
            </div>

            <a class="carousel-control-prev" href="#carslpics" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            </a>
            <a class="carousel-control-next" href="#carslpics" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
            </a>
        </div>
    </div>
    <h1>Centro Formación Profesional N°61</h1>
    <section id="abt">
        <h3>¿Quienes Somos?</h3>
        <p>texxxtt</p>
    </section>
    <br>

    <section id="obj">
        <h3>Propósitos y objetivos:</h3>
        <p>texxxtt</p>
    </section>
    <br>

    <section id="try">
        <h3>Trayectos</h3>
        <p>textetxtetxttx</p>
    <div class="scroll-wrapper">
        <button class="scroll-btn left-btn" onclick="scrollToLeft()">&#8249;</button>
    
        <?php
        include 'card.php';
        ?>
        
        <button class="scroll-btn right-btn" onclick="scrollToRight()">&#8250;</button>

    </div>        
    </section>
    <br>
    
    <section id="loc">
        <h3>¿Dónde estamos?</h3>
        <div class="container py-5">
            <div class="row">
                <div class="col-md-6 mb-4 mb-md-0">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3410.1767359287137!2d-58.1067861!3d-31.2712062!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95adecb04d7457bd%3A0x98aa53d46aa8cd3f!2sR%C3%ADo%20Bermejo%2C%20La%20Criolla%2C%20Entre%20R%C3%ADos!5e0!3m2!1sen!2sar!4v1732322910432!5m2!1sen!2sar"
                    width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div class="col-md-6">
                    <p>Río Bermejo N°278 La Criolla, Dpto. Concordia.</p>
                    <p>Instalaciones del Club Juan B. Alberdi.</p>
                </div>
            </div>
        </div>
        <br>

        <section id="cnt">
        <h3>Redes Sociales</h3>
        <p>auauha</p>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-3 col-sm-6 clumn1">
                    <div class="d-flex align-items-center">
                        <div class="icon-box"><i class="fab fa-whatsapp"></i></div>
                        <a href="https://wa.me/34541233356"
                            class="btn btn-primary btn-block social-btn cntcbttnz">Whatsapp</a>
                    </div>
                    <div class="d-flex align-items-center">
                        <div class="icon-box"><i class="fab fa-instagram"></i></div>
                        <a href="https://www.instagram.com/cfp61lacriolla"
                            class="btn btn-primary btn-block social-btn cntcbttnz">Instagram</a>
                    </div>
                    <div class="d-flex align-items-center">
                        <div class="icon-box"><i class="fab fa-facebook"></i></div>
                        <a href="https://www.facebook.com/cfp61"
                            class="btn btn-primary btn-block social-btn cntcbttnz">Facebook</a>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 clumn2">
                    <div class="d-flex align-items-center">
                        <div class="icon-box"><i class="fab fa-google"></i></div>
                        <a href="mailto:cfplacriolla@gmail.com" class="btn btn-primary btn-block social-btn cntcbttnz">Administración</a>
                    </div>
                    <div class="d-flex align-items-center">
                        <div class="icon-box"><i class="fab fa-google"></i></div>
                            <a href="mailto:cfp61.lacriolla@gmail.com" class="btn btn-primary btn-block social-btn cntcbttnz">Rectoría</a>
                        </div>
                    <div class="d-flex align-items-center">
                        <div class="icon-box"><i class="fab fa-google"></i></div>
                        <a href="mailto:cfp61.cd@entrerios.com.ar" class="btn btn-primary btn-block social-btn cntcbttnz">Institucional</a>
                    </div>
                </div>                
            </div><br>
    </section>

    <div class="wrapper">
        <div class="content">
            <h3>Contáctanos por Email</h3>
            <p><b>Requisitos para la solicitud de Certificados Formación Profesional:</b></p>
            <p>- Ser mayor de 18 años.</p>
            <p>- Contar con DNI o cerficado de inicio de trámite.</p>
            <br>
            <p><b>Dependiendo del Curso o Trayecto Formativo, se puede solicitar:</b></p>
            <p>- Nivel Primario Completo.</p>
            <p>- Ciclo básico del nivel Secundario completo.</p>
            <p>- Nivel Secundario completo.</p>
            <br>
            <p><b>Puede contactarnos directamente a nuestro email a través de este formulario:</b></p>
            <form id="contactForm" action="#" method="POST">
                <label for="name">Nombre:</label>
                <input type="text" id="name" name="name" placeholder="Tu Nombre" pattern="^[a-zA-Z\s]{2,50}$"
                    title="Por favor añada un nombre válido." required><br>

                <label for="email">Email:</label>
                <input type="email" id="email" name="email" placeholder="nombre@gmail.com"
                    pattern="[a-z0-9._%+-]+@gmail\.com$" title="Por favor añada un gmail válido" required><br>

                <label for="phone">Teléfono (opcional):</label>
                <input type="text" id="phone" name="phone" placeholder="Tu Número de Teléfono"
                    pattern="^\+?[0-9]{10,15}$" title="Por favor añada un número de teléfono válido."><br>

                <label for="sbjct">Asunto:</label>
                <input type="text" id="sbjct" name="sbjct" placeholder="Razón de Contacto" pattern=".{2,100}"
                    title="El mínimo de caracteres es de 2" required><br>

                <label for="msg">Cuerpo:</label>
                <textarea id="msg" name="msg" rows="4" placeholder="El cuerpo del mensaje" minlength="50"
                    title="El mínimo de caracteres es de 50" required></textarea><br>

                <button type="submit" class="frmbttnz">Enviar</button>
            </form>
        </div>
    </div>
</section>

<footer>
    <img src="img/CFPlogo.png" alt="Logo" id="logo">
    <p>&copy; 2024 Centro de Formación Profesional N°61. All rights reserved.</p>
    <p>&copy; 2024 Miyuki "Snake" Shiro : Programmer.</p>
    <button onclick="topFunction()" id="back-to-top" title="Go to top">&uarr;</button>
</footer>
</div>

    <script src="script.js"></script>
    <script src="theme.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>