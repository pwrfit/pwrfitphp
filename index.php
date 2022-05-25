<?php

   session_start();

   if (isset($_SESSION['rol'])) {
      header('location: login');
   }
?>

<!DOCTYPE html>
<html>
   <head>
      <meta charset="UTF-8">
      <title>PWR FIT</title>
      <link rel="shortcut icon" href="assets/img/favicon.png">
      <link rel="stylesheet" href="assets/css/slick.min.css">
      <link rel="stylesheet" href="assets/css/bootstrap-grid.css">
      <link rel="stylesheet" href="assets/fontawesome/css/all.css">
      <link rel="stylesheet" href="assets/fontawesome5/css/all.css">
      <link rel="stylesheet" href="assets/css/style.css">
   </head>
   <body id="home" class="light">
      <header id="topnav" class="defaultscroll sticky">
         <div class="container">
            <a class="logo" href="index">
            <img src="assets/img/logo.png" height="50px">
            </a>
            <div class="buy-button">
               <a href="#prices" class="btnh btn-primary">Únete ahora</a>
            </div>
            <div id="navigation">
               <ul class="navigation-menu">
                  <li><a href="index" class="sub-menu-item">Inicio</a></li>
                  <li><a href="index#services" class="sub-menu-item">Servicios</a></li>
                  <li><a href="index#prices" class="sub-menu-item">Precios</a></li>
                  <li><a href="index#calendar" class="sub-menu-item">Calendario</a></li>
                  <li><a href="index#newsletter" class="sub-menu-item">Boletín</a></li>
                  <li><a href="contact" class="sub-menu-item">Contacto</a></li>
               </ul>
               <div class="buy-menu-btn d-none">
                  <a href="#prices" class="btn btn-primary">Únete</a>
               </div>
            </div>
         </div>
      </header>
      <section class="home-section" id="home">
         <div class="darkmode" id="darkmode">
            <i class="light fa-light fa-sun"></i>
            <i class="dark fa-duotone fa-moon"></i>
         </div>
         <div class="container">
            <div class="row align-items-center">
               <div class="col-md-6">
                  <h1>Un Gimnasio Como Nunca Lo Habías Visto</h1>
                  <p class="hero-text">Descubre cientos de videos y rutinas con los que podrás mantener un buen estado de salud físico y mental. ¡Únete Ahora!</p>
                  <div class="mt-4">
                     <a href="#prices" class="btnn btn-primary mt-2 me-2"><i class="fa-duotone fa-user"></i> Únete</a>
                     <a href="login" class="btnn btn-outline-primary mt-2"><i class="fa-duotone fa-arrow-right-to-bracket"></i> Inicia Sesión</a>
                  </div>
               </div>
               <div class="col-md-6">
                  <img src="assets/img/meditation.svg" draggable="false">
               </div>
            </div>
         </div>
      </section>
      <section class="services" id="services">
         <div class="container">
            <h2 class="title-decor">Bienvenido a <span>PWR FIT</span></h2>
            <p class="slogan">No seas una máquina, sé la máquina.</p>
            <div class="row align-items-center">
               <div class="col-lg-5">
                  <div class="section-right-image text-center animate-float-bob-y wow fadeInDown" data-wow-delay="0ms" data-wow-duration="2000ms">
                     <img src="assets/img/healthyhabit.svg" draggable="false">
                  </div>
               </div>
               <div class="col-lg-7">
                  <div class="icon-boxes-wrapper icon-boxes-grid">
                     <div class="single-iconic-box iconic-box-v2">
                        <div class="iconic-box-icon iconic-box-gradient-3">
                           <i class="fa-duotone fa-heart-pulse"></i>
                        </div>
                        <div class="iconic-box-body">
                           <h5 class="iconic-box-title">Cardio</h5>
                           <p class="iconic-box-content">
                              Nuestras rutinas de cardio harán que tu corazón se fortalezca y la salud de nuestros pulmones sea buena.
                           </p>
                        </div>
                     </div>
                     <div class="single-iconic-box iconic-box-v2">
                        <div class="iconic-box-icon iconic-box-gradient-4">
                           <i class="fa-duotone fa-weight-hanging"></i>
                        </div>
                        <div class="iconic-box-body">
                           <h5 class="iconic-box-title">Full-body</h5>
                           <p class="iconic-box-content">
                              Con nuestras rutinas de fullbody activaremos una gran cantidad de músculos.
                           </p>
                        </div>
                     </div>
                     <div class="single-iconic-box iconic-box-v2">
                        <div class="iconic-box-icon iconic-box-gradient-5">
                           <i class="fa-duotone fa-dumbbell"></i>
                        </div>
                        <div class="iconic-box-body">
                           <h5 class="iconic-box-title">Entrenamiento Exhaustivo</h5>
                           <p class="iconic-box-content">
                              Con nuestras rutinas de ejercicio exhaustivo la disciplina y perseverancia harán de ti y de tu cuerpo un templo.
                           </p>
                        </div>
                     </div>
                     <div class="single-iconic-box iconic-box-v2">
                        <div class="iconic-box-icon iconic-box-gradient-6">
                           <i class="fa-duotone fa-peach"></i>
                        </div>
                        <div class="iconic-box-body">
                           <h5 class="iconic-box-title">Gluteos</h5>
                           <p class="iconic-box-content">
                              ¿Quiéres ser una Kardashian? hello amiga, ya sabes en dónde podrás serlo.
                           </p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         </div>
         </div>
      </section>
      <section class="prices" id="prices">
         <div class="container">
         <h2 class="title-decor">¡ELIGE EL PACK QUE <span>MEJOR SE ADAPTE A TI!</span></h2>
         <p class="slogan">Tenemos los mejores precios en el mercado, solo elige el plan que desees y haz parte de esta familia</p>
         <div class="container">
            <div class="row">
               <div class="col-lg-4">
                  <div class="pricing-table basic-plan" style="background-image: url(assets/img/bg-price-1.svg">
                     <div class="pricing-plan-title">
                        <div class="pricing-table-basic-icon">
                           <h5 class="plan-title">Deportista casual</h5>
                           <img class="pricing-image" src="assets/img/basic_prev_ui1.png" draggable="false">
                        </div>
                        <div class="pricing-plan-cost">
                           <span class="payment-currency">$</span>
                           <span class="plan-price">20.900</span><br>
                           <span class="plan-type">/ Mes</span>
                        </div>
                     </div>
                     <div class="pricing-plan-features">
                        <ul>
                           <li class="plan-feature">Acceso ilimitado a todas las rutinas</li>
                           <li class="plan-feature">Lives ilimitados</li>
                           <li class="plan-feature">Cancela cuando quieras</li>
                           <li class="plan-feature">7 días de prueba GRATIS</li>
                        </ul>
                     </div>
                     <div class="pricing-table-foot">
                        <div class="plan-select">
                           <a href="register" class="filled-btn bg-burning-red">Únete <i class="fa-duotone fa-arrow-right"></i></a>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4">
                  <div class="pricing-table king-plan" style="background-image: url(assets/img/bg-price-2.svg">
                     <div class="pricing-plan-title">
                        <div class="pricing-table-icon">
                           <h5 class="plan-title bg-gold-gradient">Leo Messi</h5>
                           <img class="pricing-image" src="assets/img/king_prev_ui1.png" draggable="false">
                        </div>
                        <div class="pricing-plan-cost">
                           <span class="payment-currency">$</span>
                           <span class="plan-price">199.900</span><br>
                           <span class="plan-type">/ Año</span>
                        </div>
                     </div>
                     <div class="pricing-plan-features">
                        <ul>
                           <li class="plan-feature">Acceso ilimitado a todas las rutinas</li>
                           <li class="plan-feature">Únete a los lives que desees</li>
                           <li class="plan-feature">Cancela cuando quieras</li>
                           <li class="plan-feature">30 días de prueba GRATIS</li>
                        </ul>
                     </div>
                     <div class="pricing-table-foot">
                        <div class="plan-select">
                           <a href="register" class="filled-btn bg-gold-gradient">Únete <i class="fa-duotone fa-arrow-right"></i></i></a>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4">
                  <div class="pricing-table amateur-plan" style="background-image: url(assets/img/bg-price-3.svg">
                     <div class="pricing-plan-title">
                        <div class="pricing-table-amateur-icon">
                           <h5 class="plan-title">Aficionado</h5>
                           <img class="pricing-image" src="assets/img/amateur_prev_ui1.png" draggable="false">
                        </div>
                        <div class="pricing-plan-cost">
                           <span class="payment-currency">$</span>
                           <span class="plan-price">5.900</span><br>
                           <span class="plan-type">/ Mes</span>
                        </div>
                     </div>
                     <div class="pricing-plan-features">
                        <ul>
                           <li class="plan-feature">Escoges las rutinas que desees</li>
                           <li class="plan-feature">Puedes escoger solo de 1 a 3 rutinas</li>
                           <li class="plan-feature plan-feature-disabled">Cancela cuando quieras</li>
                           <li class="plan-feature plan-feature-disabled">7 días días de prueba GRATIS</li>
                        </ul>
                     </div>
                     <div class="pricing-table-foot">
                        <div class="plan-select">
                           <a href="register" class="filled-btn bg-blue">Únete <i class="fa-duotone fa-arrow-right"></i></a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      </section>
      <section class="fit-calendar" id="calendar" style="background-image: url(assets/img/bg-calendar.svg);">
         <div class="container">
         <h2 class="title-decor">Nuestro <span>Calendario</span></h2>
         <div class="training-schedule-cover">
            <main>
               <table class="calendar">
                  <caption class="calendar__banner--month">
                  <h1>Abril</h1>
                  <thead>
                     <tr>
                        <th class="calendar__day__header">Lun</th>
                        <th class="calendar__day__header">Mar</th>
                        <th class="calendar__day__header">Mie</th>
                        <th class="calendar__day__header">Jue</th>
                        <th class="calendar__day__header">Vie</th>
                        <th class="calendar__day__header">Sab</th>
                        <th class="calendar__day__header">Dom</th>
                     </tr>
                  </thead>
                  <tbody>
                     <tr>
                        <td class="calendar__day__cell"></td>
                        <td class="calendar__day__cell"></td>
                        <td class="calendar__day__cell"></td>
                        <td class="calendar__day__cell"></td>
                        <td class="calendar__day__cell">1</td>
						<td class="calendar__day__cell">2</td>
                        <td class="calendar__day__cell">3</td>
                     </tr>
                     <tr>
                        <td class="calendar__day__cell">4</td>
                        <td class="calendar__day__cell" day-text="PIERNAS">5</td>
                        <td class="calendar__day__cell">6</td>
                        <td class="calendar__day__cell">7</td>
                        <td class="calendar__day__cell" day-text="CARDIO">8</td>
                        <td class="calendar__day__cell" >9</td>
                        <td class="calendar__day__cell sunday">10</td>
                     </tr>
                     <tr>
                        <td class="calendar__day__cell" day-text="ESPALDA">11</td>
                        <td class="calendar__day__cell">12</td>
                        <td class="calendar__day__cell">13</td>
                        <td class="calendar__day__cell" style="color:#e66053">14</td>
                        <td class="calendar__day__cell" style="color:#e66053">15</td>
                        <td class="calendar__day__cell">16</td>
                        <td class="calendar__day__cell sunday">17</td>
                     </tr>
                     <tr>
                        <td class="calendar__day__cell">18</td>
                        <td class="calendar__day__cell" day-text="PIERNAS">19</td>
                        <td class="calendar__day__cell">20</td>
                        <td class="calendar__day__cell" day-text="CUERPO ENTERO">21</td>
                        <td class="calendar__day__cell">22</td>
                        <td class="calendar__day__cell" day-text="GLUTEOS">23</td>
                        <td class="calendar__day__cell sunday">24</td>
                     </tr>
                     <tr>
                        <td class="calendar__day__cell" day-text="AEROBICOS">25</td>
                        <td class="calendar__day__cell">26</td>
                        <td class="calendar__day__cell">27</td>
                        <td class="calendar__day__cell">28</td>
                        <td class="calendar__day__cell" day-text="PIERNAS">29</td>
                        <td class="calendar__day__cell">30</td>
                        <td class="calendar__day__cell sunday"></td>
                     </tr>
                  </tbody>
               </table>
            </main>
         </div>
      </section>
      <section class="newsletter" id="newsletter">
         <div class="container">
            <h2 class="title-decor">Suscribete a nuestro <span>Boletín</span></h2>
            <p class="slogan">¡Suscríbete a nuestro boletín y recibe correos con promociones y ofertas para tí!</p>
            <form class="subscribe-form" action="#" method="post">
               <input class="inp-form" type="email" name="subscribe" placeholder="Tu E-mail" required>
               <button type="submit" class="btn" style="height:50px">Suscribirse</button>
            </form>
         </div>
      </section>
      <footer style="background-image: url(assets/img/bg-1-min.pngs)">
         <div class="container">
            <div class="row">
               <div class="col-sm-6 col-lg-3 footer-item footer-item-list">
               </div>
               <div class="col-sm-6 col-lg-3 footer-item-logo">
                  <a href="index" class="logo-footer"><img src="assets/img/logo.png"></a>
                  <p>Desafío aceptado</p>
                  <ul class="social-list">
                     <li><a target="_blank" href=""><i class="fab fa-facebook"></i></i></a></li>
                     <li><a target="_blank" href=""><i class="fab fa-youtube"></i></a></li>
                     <li><a target="_blank" href=""><i class="fab fa-instagram"></i></a></li>
                  </ul>
               </div>
               <div class="col-sm-6 col-lg-3 footer-item">
                  <h3>Contáctanos</h3>
                  <ul class="footer-cont">
                     <li><i class="fa fa-phone"></i><a href="tel:3105963564">3105963564</a></li>
                     <li><i class="fa fa-envelope"></i><a href="mailto:gym@gmail.com">gym@gmail.com</a></li>
                     <li><i class="fa fa-map-marker"></i><a href="contact">Calle 99 #48a-23</a></li>
                  </ul>
               </div>
            </div>
         </div>
      </footer>
      <a class="to-top" href="#home">
      <i class="fa fa-chevron-up"></i>
      </a>
      <script src="assets/js/jquery-2.2.4.min.js"></script>
      <script src="assets/js/slick.min.js"></script>
      <script src="assets/js/scripts.js"></script>
      <script type="text/javascript" src="assets/js/darkmode.js"></script>
   </body>
</html>
