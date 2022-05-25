<?php
   
   session_start();

   if (isset($_SESSION['rol'])) {
      header('location: login');
   }
?>
<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <link rel="shortcut icon" href="assets/img/favicon.png">
      <title>Recuperar contraseña</title>
      <!--================ STYLES ================-->
      <link rel="stylesheet" href="assets/css/slick.min.css">
      <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.css">
      <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
      <link rel="stylesheet" href="assets/fontawesome/css/all.css">
      <link rel="stylesheet" href="assets/css/style.css">
   </head>
   <body class="body-auth">
      <div class="back-to-home rounded d-none d-sm-block">
         <a href="index" class="btn btn-icon btn-primary" style="height: 35px;"><i class="fa-regular fa-house"></i></a>
      </div>
      <!-- Hero Start -->
      <section class="bg-home bg-circle-gradiant d-flex align-items-center">
         <div class="bg-overlay bg-overlay-white"></div>
         <div class="container">
            <div class="row justify-content-center">
               <div class="col-lg-5 col-md-8">
                  <div class="card shadow rounded border-0">
                     <div class="card-body">
                        <h4 class="card-title text-center">Recupera tu contraseña</h4>
                        <form class="login-form mt-4">
                           <div class="row">
                              <div class="col-lg-12">
                                 <p class="text-muted">Por favor ingresa tu correo electrónico. Recibirás un código para crear una nueva contraseña.</p>
                                 <div class="mb-3">
                                    <label class="form-label">Correo electrónico <span class="text-danger">*</span></label>
                                    <div class="form-icon position-relative">
                                       <i class="fa-regular input fa-envelope"></i>
                                       <input type="email" class="form-control ps-5" placeholder="email@mail.com" name="email" required="">
                                    </div>
                                 </div>
                              </div>
                              <div class="col-lg-12">
                                 <div class="d-grid">
                                    <button class="btnf btn-primary">Enviar</button>
                                 </div>
                              </div>
                              <div class="mx-auto">
                                 <p class="mb-0 mt-3"><small class="me-2">¿Recuerdas tu contraseña?</small> <a href="login" class="fw-bold">Inicia sesión</a></p>
                              </div>
                           </div>
                        </form>
                     </div>
                  </div>
               </div>
               <!--end col-->
            </div>
            <!--end row-->
         </div>
         <!--end container-->
      </section>
      <script type="text/javascript" src="assets/js/darkmode.js"></script><!--end section-->
      <!-- Hero End -->
   </body>
</html>