<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manos Norteñas</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.11/typed.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"/>

</head>
<body>
    <div class="scroll-up-btn">
        <i class="fas fa-angle-up"></i>
    </div>
    <nav class="navbar">
        <div class="max-width">
            <div class="logo"><a href="#">Manos<span> Norteñas</span></a></div>
            <ul class="menu">
                <li><a href="index.html" class="menu-btn">Inicio</a></li>
                <li><a href="#about" class="menu-btn">Nosotros</a></li>
                <li><a href="servicios.html" class="menu-btn">Servicios</a></li>
                <li><a href="#skills" class="menu-btn">Lo mejor del Dia</a></li>
                <li><a href="#teams" class="menu-btn">Equipo</a></li>
                <li><a href="#contact" class="menu-btn">Contáctanos</a></li>
                <li><a href="#intranet" class="menu-btn">Intranet</a></li>
            </ul>
            <div class="menu-btn">
                <i class="fas fa-bars"></i>
            </div>
        </div>
    </nav>

    <!-- bannersito  -->
    <section class="home" id="home">
        <div class="max-width">
            <div class="home-content">
                <div class="text-1">Bienvenidos a</div>
                <div class="text-2">MANOS NORTEÑAS</div>
                <div class="text-3">prueba de nuestra sazon <span class="typing"></span></div>
                <a href="#">Ingresar</a>
            </div>
        </div>
    </section>

   

    <!-- Contactanos -->
    <section class="contact" id="contact">
        <div class="max-width">
            <h2 class="title">Contáctanos</h2>
            <div class="contact-content">
                <div class="column left">
                    <div class="text">Informacion de Contacto</div>
                    <p>Hola!!! En esta parte te podemos ayudar con cualquier duda o reserva que tengas de nuestro restaurant</p>
                    <div class="icons">
                        <div class="row">
                            <i class="fas fa-user"></i>
                            <div class="info">
                                <div class="head">Nombre del restaurant</div>
                                <div class="sub-title">Manos Norteñas</div>
                            </div>
                        </div>
                        <div class="row">
                            <i class="fas fa-map-marker-alt"></i>
                            <div class="info">
                                <div class="head">Direccion</div>
                                <div class="sub-title"> Av. Villaverde 278 a la altura de la Crd.6 San German, Lima-Peru</div>
                            </div>
                        </div>
                        <div class="row">
                            <i class="fas fa-envelope"></i>
                            <div class="info">
                                <div class="head">Email</div>
                                <div class="sub-title">ContactanosURSS@gmail.com</div>
                            </div>
                        </div>
                    </div>
                </div>








                <div class="column right">
                    <div class="text">Escríbenos</div>
                    <form action="#">
                        <div class="fields">
                            <div class="field name">
                                <input id="name" type="text" placeholder="Nombre *" required>
                            </div>
                            <div class="field email">
                                <input  id="email" type="email" placeholder="Email *" required>
                            </div>
                        </div>
                        <div class="field">
                            <input id="subject" type="text" placeholder="Asunto *" required>
                        </div>
                        <div class="field textarea">
                            <textarea  id="body" cols="30" rows="10" placeholder="Mensaje *" required></textarea>
                        </div>
                        <div class="button">

                        <button type="button" onclick="sendEmail()" value="Send An Email">Enviar</button> 
                            
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>


    
	<script src="http://code.jquery.com/jquery-3.3.1.min.js"></script>
	<script type="text/javascript">
        function sendEmail() {
            var name = $("#name");
            var email = $("#email");
            var subject = $("#subject");
            var body = $("#body");

            if (isNotEmpty(name) && isNotEmpty(email) && isNotEmpty(subject) && isNotEmpty(body)) {
                $.ajax({
                   url: 'sendEmail.php',
                   method: 'POST',
                   dataType: 'json',
                   data: {
                       name: name.val(),
                       email: email.val(),
                       subject: subject.val(),
                       body: body.val()
                   }, success: function (response) {
                        $('#myForm')[0].reset();
                        $('.sent-notification').text("Message Sent Successfully.");
                        
                   }
                });
            }
        }

        function isNotEmpty(caller) {
            if (caller.val() == "") {
                caller.css('border', '1px solid red');
                return false;
            } else
                caller.css('border', '');

            return true;
        }
    </script>

    



    <!-- FOOTER-->
    <footer>
        <span>Created By <a href="https://www.youtube.com/watch?v=sOdjy77yy_U">DERROCHANDO SKILL</a> | <span class="far fa-copyright"></span> 2020 All rights reserved.</span>
    </footer>

    <script src="script.js"></script>
</body>
</html>