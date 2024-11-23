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
                        <h5 class="carsltitle">Reference Text</h5>
                        <p class="carsltxt">helloooo this is information1</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="./img/testimg2.png" alt="Second slide">
                    <div class="carousel-caption">
                        <h5 class="carsltitle">Reference Text</h5>
                        <p class="carsltxt">helloooo this is information2</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="./img/testimg3.png" alt="Third slide">
                    <div class="carousel-caption">
                        <h5 class="carsltitle">Reference Text</h5>
                        <p class="carsltxt">helloooo this is information3</p>
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
    <h1>uwuwuuw</h1>
    
    <section id="abt">
    <h3>title</h3>
    <p>texxxtt</p>
    </section>

    <section id="obj">
        <h3>title2</h3>
        <p>texxxtt</p>
    </section>

    <section id="try">
        <h3>title3</h3>
    <p>texxxtt</p>
    <div class="scroll-wrapper">
        <button class="scroll-btn left-btn" onclick="scrollToLeft()">&#8249;</button>
    
        <?php
        include 'card.php';
        ?>
        
        <button class="scroll-btn right-btn" onclick="scrollToRight()">&#8250;</button>

    </div>        
    </section>

    
    <section id="loc">
        <h3>title4</h3>
        <div class="container py-5">
            <div class="row">
                <div class="col-md-6 mb-4 mb-md-0">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3410.1767359287137!2d-58.1067861!3d-31.2712062!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95adecb04d7457bd%3A0x98aa53d46aa8cd3f!2sR%C3%ADo%20Bermejo%2C%20La%20Criolla%2C%20Entre%20R%C3%ADos!5e0!3m2!1sen!2sar!4v1732322910432!5m2!1sen!2sar"
                    width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div class="col-md-6">
                    <p>Our shop is located at 123 Main Street, Springfield. You can find us near the central park, opposite the big supermarket.</p>
                    <p><strong>By Car:</strong> Take Exit 5 from the highway, then follow Main Street for 2 miles.</p>
                    <p><strong>By Bus:</strong> Take Bus 24 or 36 and stop at Central Park Station.</p>
                </div>
            </div>
        </div>


    <script src="script.js"></script>
    <script src="theme.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>