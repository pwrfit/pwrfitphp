<?php
	include_once 'database/conect.php';
   session_start();

   if (!isset($_SESSION['rol'])) {
      header('location: login');
   }else {
      if ($_SESSION['rol'] != 1) {
         header('location: login');
      }
   }
   
   
   $sql = "SELECT * FROM usuarios" ;
   $result = mysqli_query($conn, $sql);
   $usuariostotal = mysqli_num_rows($result);
   //Admin
   $sqladm = "SELECT * FROM adminp";
   $resultadm = mysqli_query($conn, $sqladm);
   $resultadoadm = mysqli_fetch_all($resultadm, MYSQLI_ASSOC);
   //Entrenador
   $sqlent = "SELECT * FROM entrenador";
   $resultent = mysqli_query($conn, $sqlent);
   $resultadoent = mysqli_fetch_all($resultent, MYSQLI_ASSOC);
   //Cliente
   $sqlcl = "SELECT * FROM cliente";
   $resultcl = mysqli_query($conn,$sqlcl);
   $resultadocl = mysqli_fetch_all($resultcl, MYSQLI_ASSOC);
   //
   if (isset($_POST['btn_buscar'])) {
        $texto = $_POST['buscar'];
        $sql = "SELECT * FROM usuarios WHERE idusuario='$texto'";
        $result = mysqli_query($conn, $sql);
        $resultado= mysqli_fetch_all($result, MYSQLI_ASSOC);
        if (empty($texto)) {
            $sql = "SELECT * FROM usuarios" ;
            $result = mysqli_query($conn, $sql);
            $resultado = mysqli_fetch_all($result, MYSQLI_ASSOC);
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
                  <img src="assets/img/teacher.jpg" draggable="false">
                  <div class="name_job">
                     <div class="name">admin</div>
                     <div class="job">admin@mail.com</div>
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
		<div class="card-group">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12">
                                    <h2 class="m-b-0"><i class="mdi mdi-briefcase-check text-info"></i></h2>
                                    <h3 class=""><?php echo "$usuariostotal" ?></h3>
                                    <h6 class="card-subtitle">Total de usuarios en la plataforma <span class="small numtotal">100</span></h6></div>
                                <div class="col-12">
                                    <div class="progress">
                                        <div class="progress-bar bg-main" role="progressbar" style="width: <?php echo "$usuariostotal" ?>%; height: 6px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
					
	  </section>
	  <section>
	  <div class="users-table">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Control de usuarios</h4>
                            </div>
							<div>
			<form action="" class="formulario" method="post" style="padding: 10px 0px 0px 10px;">
				<input name="buscar" type="text" class="ps-3 input__text" placeholder="Buscar id, username, nombres, apellidos o correo" value="<?php if(isset($buscar_text)) echo $buscar_text; ?>">
				<input type="submit" class="btnf btn-info" name="btn_buscar" value="Buscar" style="color: #fff;">
				
				<a href="database/nuevo" class="btnf btn-success" style="position: absolute; left: 550px; height: 45px; padding-top: 11px;">Nuevo</a>
			</form>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-responsive-md">
                                        <thead>
                                            <tr>
												<th>Id</th>
                                                <th>Nombres</th>
                                                <th>Apellidos</th>
                                                <th>Dirección</th>
                                                <th>Teléfono</th>
                                                <th>Celular</th>
												<th>Correo</th>
												<th>Acciones</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php foreach($resultadoadm as $filaadm):?>
                                            <tr>
                                                <td><strong><?php echo $filaadm['IdAdmin']; ?></strong></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
												<td></td>
                                                <td>
													<a type="button" class="btne btn-warning" style="color: #000;" href="database/editar?IdAdmin=<?php echo $filaadm['IdAdmin']; ?>"><i class="fa-regular fa-pen"></i></a>
													<a type="button" class="btne btn-danger" style="color: #000;" href="database/eliminar?IdUsuario=<?php echo $filaadm['IdAdmin']; ?>"><i class="fa-duotone fa-trash-can"></i></a>
												</td>
                                            </tr>
										<?php endforeach ?>
                                        <?php foreach($resultadoent as $filaent):?>
                                            <tr>
                                                <td><strong><?php echo $filaent['IdEntrenador']; ?></strong></td>
                                                <td><?php echo $filaent['Nombres']; ?></td>
                                                <td><?php echo $filaent['Apellidos']; ?></td>
                                                <td><?php echo $filaent['Direccion']; ?></td>
                                                <td><?php echo $filaent['Telefono']; ?></td>
                                                <td><?php echo $filaent['Celular']; ?></td>
												<td><?php echo $filaent['Correo']; ?></td>
                                                <td>
													<a type="button" class="btne btn-warning" style="color: #000;" href="database/editar?IdUsuario=<?php echo $fila['IdUsuario']; ?>"><i class="fa-regular fa-pen"></i></a>
													<a type="button" class="btne btn-danger" style="color: #000;" href="database/eliminar?IdUsuario=<?php echo $fila['IdUsuario']; ?>"><i class="fa-duotone fa-trash-can"></i></a>
												</td>
                                            </tr>
										<?php endforeach ?>
										<?php foreach($resultadocl as $filacl):?>
                                            <tr>
                                                <td><strong><?php echo $filacl['IdCliente']; ?></strong></td>
                                                <td><?php echo $filacl['Nombres']; ?></td>
                                                <td><?php echo $filacl['Apellidos']; ?></td>
                                                <td><?php echo $filacl['Direccion']; ?></td>
                                                <td><?php echo $filacl['Telefono']; ?></td>
                                                <td><?php echo $filacl['Celular']; ?></td>
												<td><?php echo $filacl['Correo']; ?></td>
                                                <td>
													<a type="button" class="btne btn-warning" style="color: #000;" href="database/editar?IdUsuario=<?php echo $fila['IdUsuario']; ?>"><i class="fa-regular fa-pen"></i></a>
													<a type="button" class="btne btn-danger" style="color: #000;" href="database/eliminar?IdUsuario=<?php echo $fila['IdUsuario']; ?>"><i class="fa-duotone fa-trash-can"></i></a>
												</td>
                                            </tr>
											<?php endforeach ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
					</section>
      <script type="text/javascript" src="assets/js/darkmode.js"></script>
      <script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>
      <script src="vendor/jquery/jquery.min.js"></script>
   </body>
</html>