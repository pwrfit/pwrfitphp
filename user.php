<?php
	include_once 'database/conect.php';
   session_start();

   if (!isset($_SESSION['rol'])) {
      header('location: login');
   }else {
      if ($_SESSION['rol'] != 3) {
         header('location: login');
      }
   }
   
   $sql = "SELECT * FROM videos" ;
   $result = mysqli_query($conn, $sql);
   $resultado = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <link rel="icon" type="image/png" href="assets/img/favicon.png">
      <title>PWR FIT</title>
      <link rel="shortcut icon" href="assets/img/favicon.png">
      <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
      <link rel="stylesheet" href="assets/css/style.css">
      <link rel="stylesheet" href="assets/fontawesome/css/all.css">
      <link rel="stylesheet" href="assets/fontawesome5/css/all.css">
      <script src="assets/jquery/dist/jquery.js"></script>
      <script src="assets/bootstrap/js/bootstrap.min.js"></script>
      <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons"rel="stylesheet">
      <!--Slider-->
      <script src="assets/slick-carousel/slick/slick.min.js"></script>
      <link rel="stylesheet" type="text/css" href="assets/slick-carousel/slick/slick-theme.css" />
      <link rel="stylesheet" type="text/css" href="assets/slick-carousel/slick/slick.css" />
      <script src="assets/chosen-js/chosen.jquery.min.js"></script>
      <script src="assets/waypoints/lib/jquery.waypoints.min.js"></script>
      <script src="js/main.js"></script>
   </head>
   <body>
      <div class="sidebar">
         <div class="logo-details">
            <i class="fa-solid fa-bars" id="btn"></i>
         </div>
         <ul class="nav-list">
            <li>
               <a href="#">
               <i class="fa-solid fa-house-heart"></i>
               <span class="links_name">Inicio</span>
               </a>
               <span class="tooltip">Inicio</span>
            </li>
            <li>
               <a href="#">
               <i class="fa-solid fa-list"></i>
               <span class="links_name">Categorías</span>
               </a>
               <span class="tooltip">Categorías</span>
            </li>
            <li>
               <a href="#">
               <i class="fa-solid fa-calendars"></i>
               <span class="links_name">Calendario</span>
               </a>
               <span class="tooltip">Calendario</span>
            </li>
            <li>
               <a href="#">
               <i class="fa-solid fa-user-group"></i>
               <span class="links_name">Amigos</span>
               </a>
               <span class="tooltip">Amigos</span>
            </li>
            <li>
               <a href="#">
               <i class="fa-solid fa-users"></i>
               <span class="links_name">Otros usuarios</span>
               </a>
               <span class="tooltip">Otros usuarios</span>
            </li>
            <li>
               <a href="#">
               <i class="fa-solid fa-message"></i>
               <span class="links_name">Chat</span>
               </a>
               <span class="tooltip">Chat</span>
            </li>
            <li>
               <a href="#">
               <i class="fa-solid fa-shapes"></i>
               <span class="links_name">Rutinas seguidas</span>
               </a>
               <span class="tooltip">Rutinas seguidas</span>
            </li>
            <li>
               <a class="darkmode" id="darkmode">
               <i class="dark fa-solid fa-sun"></i>
               <span class="dark links_name">Modo claro</span>
               <i class="light fa-solid fa-moon"></i>
               <span class="light links_name">Modo oscuro</span>
               </a>
               <span class="tooltip">Modo claro/oscuro</span>
            </li>
            <li>
               <a href="#">
               <i class="fa-solid fa-user-gear"></i>
               <span class="links_name">Mi cuenta</span>
               </a>
               <span class="tooltip">Mi cuenta</span>
            </li>
            <li class="profile">
               <div class="profile-details">
                  <img src="assets/img/user.jpg" draggable="false">
                  <div class="name_job">
                     <div class="name">User</div>
                     <div class="job">user@mail.com</div>
                  </div>
               </div>
               <a href="logout" class="log_out"><i class='fa-solid fa-right-from-bracket' id="log_out" name="log_out"></i></a>
            </li>
         </ul>
      </div>
      <script>
         let sidebar = document.querySelector(".sidebar");
         let closeBtn = document.querySelector("#btn");
         
         closeBtn.addEventListener("click", ()=>{
           sidebar.classList.toggle("open");
           menuBtnChange();
         });
         
         
         function menuBtnChange() {
          if(sidebar.classList.contains("open")){
            closeBtn.classList.replace("fa-bars", "fa-bars-staggered");
          }else {
            closeBtn.classList.replace("fa-bars-staggered","fa-bars");
          }
         }
      </script>
      <section>
         <main id="main" class="site-main home-main user-main overflow">
            <div class="business-category">
               <div class="container">
                  <div class="col-12" style="padding-top: 15px;">
                     <div class="section-title">
                        <h2>Categorías</h2>
                     </div>
                  </div>
                  <hr>
                  <div class="slick-sliders offset-item">
                     <div class="slick-slider business-cat-slider slider-pd30" data-item="6" data-arrows="true" data-itemScroll="6" data-dots="true" data-centerPadding="50" data-tabletitem="3" data-tabletscroll="3" data-smallpcitem="4" data-smallpcscroll="4" data-mobileitem="2" data-mobilescroll="2" data-mobilearrows="false">
                        <div class="bsn-cat-item rosy-pink">
                           <a href="#">
                           <center><i><img src="assets/img/peach.png" style="height: 50px;"></i></center>
                           <span class="title">Gluteos</span>
                           <span class="place">25 videos</span>
                           </a>
                        </div>
                        <div class="bsn-cat-item dark-green">
                           <a href="#">
                           <center><i><img src="assets/img/abdominales.svg" style="height: 50px;"></i></center>
                           <span class="title">Abdominales</span>
                           <span class="place">32 videos</span>
                           </a>
                        </div>
                        <div class="bsn-cat-item hard-orange">
                           <a href="#">
                           <center><i><img src="assets/img/full-body.png" style="height: 50px;"></i></center>
                           <span class="title">Full-body</span>
                           <span class="place">7 videos</span>
                           </a>
                        </div>   
                        <div class="bsn-cat-item sky-blue">
                           <a href="#">
                           <center><i><img src="assets/img/loto.svg" style="height: 50px;"></i></center>
                           <span class="title">Yoga</span>
                           <span class="place">13 videos</span>
                           </a>
                        </div>
                        <div class="bsn-cat-item charcoal-purple">
                           <a href="#">
                           <center><i><img src="assets/img/aerobicos.svg" style="height: 50px;"></i></center>
                           <span class="title">Aeróbicos</span>
                           <span class="place">15 videos</span>
                           </a>
                        </div>
                        <div class="bsn-cat-item fancy-purple">
                           <a href="#">
                           <center><i><img src="assets/img/espalda.png" style="height: 50px;"></i></center>
                           <span class="title">Espalda</span>
                           <span class="place">22 videos</span>
                           </a>
                        </div>
                        <div class="bsn-cat-item chetwode-blue">
                           <a href="#">
                           <center><i><img src="assets/img/stretching.svg" style="height: 50px;"></i></center>
                           <span class="title">Calentamiento</span>
                           <span class="place">9 videos</span>
                           </a>
                        </div>
                        <div class="bsn-cat-item rose-pearl">
                           <a href="#">
                           <i class="fa-light fa-heart-pulse"></i>
                           <span class="title">Cardio</span>
                           <span class="place">11 videos</span>
                           </a>
                        </div>
                        <div class="bsn-cat-item banana-color">
                           <a href="#">
                           <center><i><img src="assets/img/piernas.svg" style="height: 50px;"></i></center>
                           <span class="title">Piernas</span>
                           <span class="place">19 videos</span>
                           </a>
                        </div>
                        <div class="bsn-cat-item fruit-salad">
                           <a href="#">
                           <center><i><img src="assets/img/fuerza.png" style="height: 50px;"></i></center>
                           <span class="title">Fuerza</span>
                           <span class="place">15 videos</span>
                           </a>
                        </div>
                        <div class="bsn-cat-item robins-egg-blue">
                           <a href="#">
                           <center><i><img src="assets/img/deporte.svg" style="height: 50px;"></i></center>
                           <span class="title">Resistencia</span>
                           <span class="place">8 videos</span>
                           </a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </main>
         <hr>
      </section>
      <section class="content-section">
         <div class="container">
            <div class="row">
               <div class="col-12">
                  <div class="section-title">
                     <h2>Lo más reciente</h2>
                  </div>
                  <!-- end section-title --> 
               </div>
               <!-- end col-12 -->
               <div class="container-fluid pb-0">
                  <hr>
                  <div class="video-block section-padding">
                     <div class="row">
					 <?php foreach($resultado as $fila):?>
                        <div class="col-xl-3 col-sm-6 mb-3">
                           <div class="video-card">
                              <div class="video-card-image">
                                 <a class="play-icon" href="video?video=<?php echo $fila['IdVideo']; ?>"><i class="fas fa-play-circle"></i></a>
                                 <a href="video?video=<?php echo $fila['IdVideo']; ?>"><img class="img-fluid" src="uploads/<?php echo $fila['TituloVideo']; ?>/<?php echo $fila['Miniatura']; ?>" alt=""></a>
                                 <div class="time">24:47</div>
                              </div>
                              <div class="video-card-body">
                                 <div class="video-title">
                                    <a href="video?video=<?php echo $fila['IdVideo']; ?>"><?php echo $fila['TituloVideo']; ?></a>
                                 </div>
                                 <div class="video-page text-success">
                                    Abdominales
                                 </div>
                                 <i class="fas fa-calendar-alt"></i> Hace 2 días
                              </div>
                           </div>
                        </div>
					<?php endforeach ?>
                     </div>
                  </div>
                  <!-- ============ LAST VIDEOS END ============ -->
                  <!-- ============ TRAINERS ============ -->
                  <hr class="mt-0">
                  <div class="video-block section-padding">
                     <div class="row">
                        <div class="col-12" style="padding-top: 15px;">
                           <div class="section-title">
                              <h2>Nuestros trainers</h2>
                           </div>
                        </div>
                        <div class="col-xl-3 col-sm-6 mb-3">
                           <div class="channels-card">
                              <div class="channels-card-image">
                                 <a href="#"><img class="img-fluid" src="assets/img/juan.jpg" alt=""></a>
                                 <div class="channels-card-image-btn"><button type="button" class="btn btn-outline-danger btn-sm">Seguir</button></div>
                              </div>
                              <div class="channels-card-body">
                                 <div class="channels-title">
                                    <a href="#">Juan Guzmán</a>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-xl-3 col-sm-6 mb-3">
                           <div class="channels-card">
                              <div class="channels-card-image">
                                 <a href="#"><img class="img-fluid" src="assets/img/natalia.jpg" alt=""></a>
                                 <div class="channels-card-image-btn"><button type="button" class="btn btn-outline-danger btn-sm">Seguir</button></div>
                              </div>
                              <div class="channels-card-body">
                                 <div class="channels-title">
                                    <a href="#">Natalia Echeverri</a>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-xl-3 col-sm-6 mb-3">
                           <div class="channels-card">
                              <div class="channels-card-image">
                                 <a href="#"><img class="img-fluid" src="assets/img/edith.jpg" alt=""></a>
                                 <div class="channels-card-image-btn"><button type="button" class="btn btn-outline-danger btn-sm">Seguir</button></div>
                              </div>
                              <div class="channels-card-body">
                                 <div class="channels-title">
                                    <a href="#">Edith Ramirez</a>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-xl-3 col-sm-6 mb-3">
                           <div class="channels-card">
                              <div class="channels-card-image">
                                 <a href="#"><img class="img-fluid" src="assets/img/cr7.jpg" alt=""></a>
                                 <div class="channels-card-image-btn"><button type="button" class="btn btn-outline-danger btn-sm">Seguir</button></div>
                              </div>
                              <div class="channels-card-body">
                                 <div class="channels-title">
                                    <a href="#">CR7</a>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- end container --> 
      </section>
      <!-- end content-section -->
      <script type="text/javascript" src="assets/js/darkmode.js"></script>
      <script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>
      <script src="vendor/jquery/jquery.min.js"></script>
   </body>
</html>