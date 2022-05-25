<?php
   include 'database/conect.php';

   session_start();

   if (!isset($_SESSION['rol'])) {
      header('location: login');
   }else {
      if ($_SESSION['rol'] != 2) {
         header('location: login');
      }
   }

   if (isset($_POST['publicar'])) {
      $titulo = $_POST['titulovideo'];
      $descripcion = $_POST['descripcion'];
      mkdir("uploads/" . $titulo);
      $directorio = "uploads/" . $titulo . "/" ;
      $video = $directorio . basename($_FILES['video']['name']);
      $archivovideo = $_FILES['video']['name'];
      $miniatura = $directorio . basename($_FILES['miniatura']['name']);
      $archivominiatura = $_FILES['miniatura']['name'];

      if (move_uploaded_file($_FILES['video']['tmp_name'] , $video)) {
         if (move_uploaded_file($_FILES['miniatura']['tmp_name'] , $miniatura)) {

            $sql = "INSERT INTO videos (titulovideo, descripcionvideo, video, miniatura) VALUES ('$titulo','$descripcion','$archivovideo','$archivominiatura')";
            $result = mysqli_query($conn, $sql);
            if ($result) {
               echo "<script>alert('¡Felicitaciones! el video ha sido subido éxitosamente.'); window.location='teacher'</script>";
            }
         }
      }


   }
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
      <!-- Tagify -->
      <script src="https://unpkg.com/@yaireo/tagify"></script>
      <script src="https://unpkg.com/@yaireo/tagify/dist/tagify.polyfills.min.js"></script>
      <link href="https://unpkg.com/@yaireo/tagify/dist/tagify.css" rel="stylesheet" type="text/css" />
   </head>
   <body>
      <div class="sidebar">
         <div class="logo-details">
            <i class="fa-solid fa-bars" id="btn"></i>
         </div>
         <ul class="nav-list">
            <li>
               <a href="teacher">
               <i class="fa-solid fa-house-heart"></i>
               <span class="links_name">Inicio</span>
               </a>
               <span class="tooltip">Inicio</span>
            </li>
            <li>
               <a href="#">
               <i class="fa-solid fa-list"></i>
               <span class="links_name">Categoría</span>
               </a>
               <span class="tooltip">Categoría</span>
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
               <i class="fa-solid fa-cloud-arrow-up"></i>
               <span class="links_name">Subir video</span>
               </a>
               <span class="tooltip">Subir video</span>
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
                  <img src="assets/img/teacher.jpg" draggable="false">
                  <div class="name_job">
                     <div class="name">Teacher</div>
                     <div class="job">teacher@mail.com</div>
                  </div>
               </div>
               <a href="logout.php" class="log_out"><i class='fa-solid fa-right-from-bracket' id="log_out" name="log_out"></i></a>
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

                    <form action="" method="post" enctype="multipart/form-data">
                        <h2 style="display: inline-block;margin-right: 68%;">Subir video</h2>
                    <form action="" method="post">
                        <button type="submit" name="publicar" class="btnf btn-danger" style="color:#fff;display:inline-block;"><i class="fa-duotone fa-paper-plane-top"></i></i>&nbsp;&nbsp;Publicar</button>
                     </div>
                  </div>
                  <hr>
                </div>
                <div class="container">
                        <div class="container">
                        <label class="form-label" for="nombrevideo">Título del video <span class="text-danger">*</span></label>
                        <input type="text" required placeholder="Título del video" id="nombrevideo" name="titulovideo" class="form-control"><br>
                        <label for="descripcion">Descripción del video <span class="text-danger">*</span> </label>
                        <textarea name="descripcion" class="form-control" id="descripcion" maxlength="255" cols="30" rows="9" style="resize:none;"></textarea>
                        <label for="tags" style="padding-top: 30px;">Etiquetas (separalas por comas)</label>
                        <input required id="tags" type="text" placeholder="Cardio, piernas, etc." class="form-control">
                        <script>
                            var input = document.querySelector('input[id=tags]')
                            var tagify = new Tagify(input, {
                                whitelist: ["Gluteos", "Abdominales", "Full-body","Yoga","Aeróbicos","Espalda","Calentamiento","Cardio","Piernas","Fuerza","Resistencia"],
                                maxTags: 3
                            });
                        </script>
                        <label style="padding-top: 30px;">Sube tu video (MP4, AVI, etc)</label>
                        <input type="file" name="video" id="video" class="form-control" accept="video/*">
                        <label style="padding-top: 30px;">Sube una miniatura para tu video (JPG, JPEG, PNG, etc)</label>
                        <input type="file" id="miniatura" name="miniatura" class="form-control" accept="image/*">
                        </div>
                        <!-- <div class="container" style="background-color:#F1F1F1;width:100%;background-image:url(assets/img/uploadvideo.svg);background-repeat:no-repeat;background-size:cover;">
                        <i class="fa-solid fa-cloud-arrow-up" style="font-size: 250px;color:#F23849;"></i>
                        <header>Arrastra y suelta para subir un video</header> -->

                    </div>
                    <button type="submit" name="publicar" class="btnf btn-danger" style="color:#fff;margin-top:20px;margin-left:87%;"><i class="fa-duotone fa-paper-plane-top"></i></i>&nbsp;&nbsp;Publicar</button>
                    </form>
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
