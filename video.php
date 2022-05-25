<?php
   include_once 'database/conect.php';
   session_start();
   
   if (!isset($_SESSION['rol'])) {
      header('location: login');
   }
   $video = $_GET['video'];
   if($video){
    $sql = "SELECT * FROM videos WHERE IdVideo='$video'" ;
    $result = mysqli_query($conn, $sql);
    $resultado = mysqli_fetch_all($result, MYSQLI_ASSOC);
	
	$sql2 = "SELECT * FROM comentarios WHERE IdVideo='$video'";
	$result2 = mysqli_query($conn, $sql2);
	$resultado2 = mysqli_fetch_all($result2, MYSQLI_ASSOC);
	
	if(!empty($_GET['nuevocomentario'])){
		$nuevocomentario = $_GET['nuevocomentario'];
		if($nuevocomentario){
			$sql1 = "INSERT INTO comentarios(IdVideo, Comentario) VALUES('$video','$nuevocomentario')";
			$result1 = mysqli_query($conn,$sql1);
			if($result1){
				header("location: video?video=$video");
			}
		}
	}
   }else{
    header('location: index');
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
      <!--Video-->
      <script src="https://cdn.jwplayer.com/libraries/gLDA4jp5.js"></script>
	  <link rel="stylesheet" href="assets/css/main.css">
   </head>
   <body>
      <div class="sidebar">
         <div class="logo-details">
            <i class="fa-solid fa-bars" id="btn"></i>
         </div>
         <ul class="nav-list">
            <li>
               <a href="index">
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
            <?php 
               if ($_SESSION['rol'] == 2) {
                  echo "<li>
                  <a href='upload'>
                  <i class='fa-solid fa-cloud-arrow-up'></i>
                  <span class='links_name'>Subir video</span>
                  </a>
                  <span class='tooltip'>Subir video</span>
               </li>";
               }
               ?>
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
                  <img src="assets/img/<?php
                     if ($_SESSION['rol'] == 2) {
                        echo "teacher";
                     }else {
                        if ($_SESSION['rol'] == 3) {
                           echo "user";
                        }
                     }
                     ?>.jpg" draggable="false">
                  <div class="name_job">
                     <div class="name"><?php
                        if ($_SESSION['rol'] == 2) {
                           echo "Teacher";
                        }else {
                           if ($_SESSION['rol'] == 3) {
                              echo "User";
                           }
                        }
                        ?></div>
                     <div class="job"><?php
                        if ($_SESSION['rol'] == 2) {
                           echo "teacher";
                        }else {
                           if ($_SESSION['rol'] == 3) {
                              echo "user";
                           }
                        }
                        ?>@mail.com</div>
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
         <?php foreach($resultado as $columna): ?>
         <main id="main" class="site-main home-main user-main overflow">
            <div class="business-category">
               <div class="container">
                  <div class="col-12" style="padding-top: 15px;">
                     <div id="myElement"></div>
                     <div class="section-title">
                        <h2 style="display: inline-block;margin-right: 68%; padding-top: 10px;"><?php echo $columna['TituloVideo'] ?></h2>
                     </div>
                     <script type="text/JavaScript">
                        jwplayer("myElement").setup({ 
                            "playlist": [{
                        "image": "uploads/<?php echo $columna['TituloVideo'] ?>/<?php echo $columna['Miniatura'] ?>",
                                "file": "uploads/<?php echo $columna['TituloVideo'] ?>/<?php echo $columna['Video'] ?>"
                            }]
                        });
                     </script>
					<p style=" width: 960px height: 40px">
							 <?php echo $columna['DescripcionVideo'] ?>
					</p>
                  </div>
               </div>
            </div>
         </main>
         <?php endforeach ?>
      </section>
	  <section class="content" style="padding-top:50px"> 
		<div class="content__head">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<ul class="nav nav-tabs content__tabs" id="content__tabs" role="tablist">
							<li class="nav-item">
								<a class="nav-link active" style="color: #28282D" data-toggle="tab" role="tab" aria-controls="tab-1" aria-selected="true">Comentarios</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>

		<div class="container">
			<div class="row">
				<div class="col-12 col-lg-11 col-xl-11">
					<!-- content tabs -->
					<div class="tab-content" id="myTabContent">
						<div class="tab-pane fade show active" id="tab-1" role="tabpanel" aria-labelledby="1-tab">
							<div class="row">
								<!-- comments -->
								<div class="col-12">
								<form class="form" method="get">
											<textarea id="text" name="nuevocomentario" class="form__textarea" placeholder="Añadir comentario" maxlength="255" required></textarea>
											<input type="hidden" name="video" value="1">
											<button type="submit" class="form__btn">Publicar</button>
										</form>
									<div class="comments" style="padding-top:20px">
										<ul class="comments__list">
										<?php foreach($resultado2 as $columna2): ?>
											<li class="comments__item">
												<div class="comments__autor">
													<img class="comments__avatar" src="assets/img/user.jpg" alt="">
													<span class="comments__name">user</span>
													<span class="comments__time">Fecha</span>
												</div>
												<p class="comments__text"><?php echo $columna2['Comentario'] ?></p>
												
											</li>
											<?php endforeach ?>
										</ul>
									</div>
								</div>
								<!-- end comments -->
							</div>
						</div>
	<!-- Root element of PhotoSwipe. Must have class pswp. -->
	<div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">

		<!-- Background of PhotoSwipe. 
		It's a separate element, as animating opacity is faster than rgba(). -->
		<div class="pswp__bg"></div>

		<!-- Slides wrapper with overflow:hidden. -->
		<div class="pswp__scroll-wrap">

			<!-- Container that holds slides. PhotoSwipe keeps only 3 slides in DOM to save memory. -->
			<!-- don't modify these 3 pswp__item elements, data is added later on. -->
			<div class="pswp__container">
				<div class="pswp__item"></div>
				<div class="pswp__item"></div>
				<div class="pswp__item"></div>
			</div>

			<!-- Default (PhotoSwipeUI_Default) interface on top of sliding area. Can be changed. -->
			<div class="pswp__ui pswp__ui--hidden">

				<div class="pswp__top-bar">

					<!--  Controls are self-explanatory. Order can be changed. -->

					<div class="pswp__counter"></div>

					<button class="pswp__button pswp__button--close" title="Close (Esc)"></button>

					<button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>

					<!-- Preloader -->
					<div class="pswp__preloader">
						<div class="pswp__preloader__icn">
							<div class="pswp__preloader__cut">
								<div class="pswp__preloader__donut"></div>
							</div>
						</div>
					</div>
				</div>

				<button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)"></button>

				<button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)"></button>

				<div class="pswp__caption">
					<div class="pswp__caption__center"></div>
				</div>
			</div>
		</div>
	</div>
</section>
      <!-- end content-section -->
      <script type="text/javascript" src="assets/js/darkmode.js"></script>
      <script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>
      <script src="vendor/jquery/jquery.min.js"></script>
   </body>
</html>