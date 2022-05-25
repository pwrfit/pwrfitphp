<?php

   include_once 'conect.php';
   session_start();

   if (!isset($_SESSION['rol'])) {
      header('location: ../login');
   }else {
      if ($_SESSION['rol'] != 1) {
         header('location: ../login');
      }
   }
   $IdUsuario=$_GET['IdUsuario'];
   $sql = "SELECT * FROM usuarios WHERE IdUsuario='$IdUsuario' ";
   $result = mysqli_query($conn, $sql);
   $resultado = mysqli_fetch_all($result, MYSQLI_ASSOC);

   if(isset($_POST['guardar'])) {
      $rolusuario = $_POST['rolusuario'];
      $nombres = $_POST['nombres'];
      $apellidos = $_POST['apellidos'];
      $username = $_POST['username'];
      $contrasenna = md5($_POST['contrasenna']);
      $correo = $_POST['correo'];
      $direccion = $_POST['direccion'];
      $telefono = $_POST['telefono'];
      $celular = $_POST['celular'];

      if (empty($contrasenna)) {
         $sql = "UPDATE usuarios SET RolUsuario='$rolusuario', Nombres='$nombres', Apellidos='$apellidos', Direccion='$direccion', Telefono='$telefono', Celular='$celular', username='$username', correo='$correo' WHERE IdUsuario='$IdUsuario' ";
         $result = mysqli_query($conn, $sql);
         if ($result) {
            echo "<script>alert('Usuario actualizado exitósamente'); window.location='../admin' </script>";
         }
         } else {
         $sql = "UPDATE usuarios SET RolUsuario='$rolusuario', Nombres='$nombres', Apellidos='$apellidos', Direccion='$direccion', Telefono='$telefono', Celular='$celular', username='$username', contrasenna='$contrasenna' , correo='$correo' WHERE IdUsuario='$IdUsuario'";
         $result = mysqli_query($conn, $sql);
         if ($result) {
            echo "<script>alert('Usuario actualizado exitósamente'); window.location='../admin' </script>";
         }
      }
   }

?>

<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <link rel="icon" type="image/png" href="../assets/img/favicon.png">
      <title>PWR FIT</title>
      <link rel="shortcut icon" href="../assets/img/favicon.png">
      <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
      <link rel="stylesheet" href="../assets/css/style.css">
      <link rel="stylesheet" href="../assets/fontawesome/css/all.css">
      <link rel="stylesheet" href="../assets/fontawesome5/css/all.css">
      <script src="../assets/jquery/dist/jquery.js"></script>
      <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
      <script src="../js/main.js"></script>
   </head>
   <body>
      <div class="sidebar">
         <div class="logo-details">
            <i class="fa-solid fa-bars" id="btn"></i>
         </div>
         <ul class="nav-list">
            <li>
               <a href="../admin">
               <i class="fa-solid fa-house-heart"></i>
               <span class="links_name">Inicio</span>
               </a>
               <span class="tooltip">Inicio</span>
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
            <li class="profile">
               <div class="profile-details">
                  <img src="../assets/img/teacher.jpg" draggable="false">
                  <div class="name_job">
                     <div class="name">admin</div>
                     <div class="job">admin@mail.com</div>
                  </div>
               </div>
               <a href="../logout" class="log_out"><i class='fa-solid fa-right-from-bracket' id="log_out" name="log_out"></i></a>
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
      <section style="padding-left: 20px;">
         <center><form method="post" name="myForm" class="userform">
            <?php foreach($resultado as $columna):?>
                              <div class="row">
                                 <div class="col-6">
                                    <div class="mb-3">
                                       <div class="form-icon position-relative">
                                          <i class="fa-regular input fa-user-check"></i>
                                          <input name="nombres" type="text" class="form-control ps-5" placeholder="Nombres" value="<?php echo $columna['Nombres']; ?>" required>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-6">
                                    <div class="mb-3">
                                       <div class="form-icon position-relative">
                                          <i class="fa-regular input fa-user-check"></i>
                                          <input name="apellidos" type="text" class="form-control ps-5" placeholder="Apellidos" value="<?php echo $columna['Apellidos']; ?>" required>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-6">
                                    <div class="mb-3">
                                       <div class="form-icon position-relative">
                                          <i class="fa-regular input fa-user"></i>
                                          <input name="username" type="text" class="form-control ps-5" placeholder="Usuario" value="<?php echo $columna['Username']; ?>" required>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-6">
                                    <div class="mb-3">
                                       <div class="form-icon position-relative">
                                          <i class="fa-regular input fa-key-skeleton"></i>
                                          <input name="contrasenna" type="password" class="form-control ps-5" placeholder="&bull;&bull;&bull;&bull;&bull;&bull;&bull;&bull;">
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-12">
                                    <div class="mb-3">
                                       <div class="form-icon position-relative">
                                          <i class="fa-regular input fa-envelope"></i>
                                          <input name="correo" id="email" type="email" class="form-control ps-5" placeholder="email@mail.com" value="<?php echo $columna['Correo']; ?>" required>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-6">
                                    <div class="mb-3">
                                       <div class="form-icon position-relative">
                                          <i class="fa-regular input fa-hashtag"></i>
                                          <input name="direccion" type="text" class="form-control ps-5" value="<?php echo $columna['Direccion']; ?>" placeholder="Dirección">
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-6">
                                    <div class="mb-3">
                                       <div class="form-icon position-relative">
                                          <i class="fa-regular input fa-phone"></i>
                                          <input name="telefono" type="text" class="form-control ps-5" value="<?php echo $columna['Telefono']; ?>" placeholder="Teléfono">
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-6">
                                    <div class="mb-3">
                                       <div class="form-icon position-relative">
                                          <i class="fa-regular input fa-phone"></i>
                                          <input name="celular" type="text" class="form-control ps-5" value="<?php echo $columna['Celular']; ?>" placeholder="Celular">
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-6">
                                    <div class="mb-3">
                                          <select name="rolusuario" class="form-control">
                                             <option value="1">Administrador</option>
                                             <option value="2">Instructor</option>
                                             <option value="3" selected>Usuario</option>
                                          </select>
                                    </div>
                                 </div>
                              </div>
                              <div class="row">
                                 <div class="col-6">
                                    <div class="d-grid">
                                       <button type="submit" name="guardar" class="btne btn-primary"><strong>Actualizar</strong></button>
                                    </div>
                                 </div>
                                 <div class="col-6">
                                    <div class="d-grid">
                                       <a class="btne btn-success" style="height: 50px;" href="../admin"><strong>Volver</strong><a/>
                                    </div>
                                 </div>
                              </div>
                              <?php endforeach ?>
                           </form></center>
      </section>
      <script type="text/javascript" src="../assets/js/darkmode.js"></script>
      <script src="../assets/bootstrap/js/bootstrap.bundle.min.js"></script>
      <script src="../vendor/jquery/jquery.min.js"></script>
   </body>
</html>