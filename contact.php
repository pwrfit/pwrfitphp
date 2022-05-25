<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <link rel="shortcut icon" href="assets/img/favicon.png">
      <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
      <link rel="stylesheet" href="assets/css/style.css">
      <link rel="stylesheet" href="assets/fontawesome/css/all.css">
      <link rel="stylesheet" href="assets/fontawesome5/css/all.css">
      <title>Contáctanos | PWR FIT</title>
   </head>
   <body style="background-color: #fff;" class="body-payment">
      <header id="topnav" class="defaultscroll sticky">
         <div class="container">
            <a class="logo" href="index">
            <img src="assets/img/logo.png" height="50px">
            </a>
            <div class="buy-button">
               <a href="register" class="btnh btn-primary">Únete ahora</a>
            </div>
            <div id="navigation">
               <ul class="navigation-menu">
                  <li><a href="index" class="sub-menu-item">Inicio</a></li>
                  <li><a href="index#services" class="sub-menu-item">Servicios</a></li>
                  <li><a href="index#prices" class="sub-menu-item">Precios</a></li>
                  <li><a href="index#calendar" class="sub-menu-item">Calendario</a></li>
                  <li><a href="index#newsletter" class="sub-menu-item">Boletín</a></li>
                  <li><a href="#" class="sub-menu-item">Contacto</a></li>
               </ul>
               <div class="buy-menu-btn d-none">
                  <a href="register" class="btn btn-primary">Únete</a>
               </div>
            </div>
         </div>
      </header>
      <section class="contact-form pb-0">
         <div class="darkmode" id="darkmode">
            <i class="light fa-light fa-sun"></i>
            <i class="dark fa-duotone fa-moon"></i>
         </div>
         <div class="container mt-100 mt-60">
            <div class="row align-items-center">
               <div class="col-lg-5 col-md-6 pt-2 pt-sm-0 order-2 order-md-1">
                  <div class="card shadow rounded border-0">
                     <div class="card-body py-5">
                        <h4 class="card-title">¿Tienes alguna queja, reclamo o sugerencia? ¡Contáctanos!</h4>
                        <div class="custom-form mt-3">
                           <form method="post" name="myForm" onsubmit="return validateForm()">
                              <p id="error-msg" class="mb-0"></p>
                              <div id="simple-msg"></div>
                              <div class="row">
                                 <div class="col-12">
                                    <div class="mb-3">
                                       <label class="form-label">Nombre completo <span class="text-danger">*</span></label>
                                       <div class="form-icon position-relative">
                                          <i class="fa-regular input fa-user-check"></i>
                                          <input name="name" id="name" type="text" class="form-control ps-5" placeholder="Nombres">
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-12">
                                    <div class="mb-3">
                                       <label class="form-label">Tu correo <span class="text-danger">*</span></label>
                                       <div class="form-icon position-relative">
                                          <i class="fa-regular input fa-envelope"></i>
                                          <input name="email" id="email" type="email" class="form-control ps-5" placeholder="email@mail.com">
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-12">
                                    <div class="mb-3">
                                       <label class="form-label">Asunto <span class="text-danger">*</span></label>
                                       <div class="form-icon position-relative">
                                          <i class="fa-regular input fa-book"></i>
                                          <input name="subject" id="subject" class="form-control ps-5" placeholder="Asunto :">
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-12">
                                    <div class="mb-3">
                                       <label class="form-label">Comentarios <span class="text-danger">*</span></label>
                                       <div class="form-icon position-relative">
                                          <i class="fa-regular input fa-message-lines"></i>
                                          <textarea name="comments" id="comments" rows="4" class="form-control ps-5" placeholder="Mensaje :"></textarea>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="row">
                                 <div class="col-12">
                                    <div class="d-grid">
                                       <button type="submit" id="submit" name="send" class="btn btn-primary">Enviar</button>
                                    </div>
                                 </div>
                              </div>
                           </form>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-lg-7 col-md-6 order-1 order-md-2">
                  <div class="card border-0">
                     <div class="card-body p-0">
                        <img src="assets/img/form.svg" class="img-fluid" draggable="false">
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="container">
            <div class="row">
               <div class="col-md-4">
                  <div class="card border-0 text-center features feature-clean">
                     <div class="icons text-primary text-center mx-auto">
                        <i><img src="assets/img/contact2.png" draggable="false"></i>
                     </div>
                     <div class="content mt-3">
                        <h5 class="fw-bold">Teléfono</h5>
                        <p class="text-muted">Contáctanos via WhatsApp a través del número</p>
                        <a href="tel:+573105963564" class="text-primary">+57 3105963564</a>
                     </div>
                  </div>
               </div>
               <div class="col-md-4 mt-4 mt-sm-0 pt-2 pt-sm-0">
                  <div class="card border-0 text-center features feature-clean">
                     <div class="icons text-primary text-center mx-auto">
                        <i><img src="assets/img/contact1.png" draggable="false"></i>
                     </div>
                     <div class="content mt-3">
                        <h5 class="fw-bold">Correo</h5>
                        <p class="text-muted">Contáctanos via correo eléctronico a través de la dirección</p>
                        <a href="mailto:contact@example.com" class="text-primary">contact@example.com</a>
                     </div>
                  </div>
               </div>
               <div class="col-md-4 mt-4 mt-sm-0 pt-2 pt-sm-0">
                  <div class="card border-0 text-center features feature-clean">
                     <div class="icons text-primary text-center mx-auto">
                        <i><img src="assets/img/contact3.png" draggable="false"></i>
                     </div>
                     <div class="content mt-3">
                        <h5 class="fw-bold">Úbicación</h5>
                        <p class="text-muted">Calle 99 #48a-23, <br>Medellín, Colombia</p>
                        <a href="#"
                           data-type="iframe" class="video-play-icon text-primary lightbox">Ver en Google Maps</a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <script type="text/javascript" src="assets/js/contact-form.js"></script>
      <script type="text/javascript" src="assets/js/darkmode.js"></script>
   </body>
</html>