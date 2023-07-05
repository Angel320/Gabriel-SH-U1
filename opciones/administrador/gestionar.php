<?php  
ob_start();
session_start();
if(($_SESSION['correo'])!=''){
?>


<!DOCTYPE html>
<html lang="en">
    <head>

        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="Cabecera-secundaria" />
        <meta name="author" content="" />
        <title>LATAM-erica</title>
        <!-- Favicon-->
        <link rel="icon" href="https://exploralat.am/images/shadowlight.png" />

        <!-- Libreria para validar con JQuery -->
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"> </script>
        <!-- Libreria de sweetalert 2-->
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
        <!-- Libreria para Iconos-->
        <script src="https://kit.fontawesome.com/0727983454.js" crossorigin="anonymous"></script>




        <!-- Libreria para DATABLES-->
        <link rel="stylesheet" type="text/css" href="librerias/datatable/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="librerias/datatable/dataTables.bootstrap4.min.css">
        <script src="../../Librerias/datatable/jquery.dataTables.min.js"></script>
        <script src="../../Librerias/datatable/dataTables.bootstrap4.min.js"></script>




   
         <!-- Estilo pero con diferente ruta para las otras vistas-->
        <link href="../../css/styles.css" rel="stylesheet" />
        <link rel="stylesheet" href="../../css/contacto.css">




    </head>
    <body>

        <!-- MENU-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="../BD/logout.php">Home</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    	<li class="nav-item"><a class="nav-link" href="Comentarios.php">Preguntas y Respuestas</a></li>
                        <li class="nav-item"><a class="nav-link" href="../../BD/logout.php">Salir</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- MENU-->


        
        <section class="py-5">
            <div class="container my-5">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                      <h2>Usuarios Registrados</h2>

								<!-- Card -->
								<br>
									<div class="container" id="1">
										<div class="row">
											<div class="col-sm-12">
												<div class="card text-left">
													<div class="card-header">
														Tabla de datos de usuarios
													</div>
													<div class="card-body">
								
								
														<hr>
														<div class="table-responsive">
														<div id="tablaDatatable4"></div>
														</div>
													</div>
													<div class="card-footer text-muted">
														Latam-erica
													</div>
												</div>
											</div>
										</div>
									</div>
								<br>
								<!-- Card -->									
                    </div>
                </div>
            </div>
        </section>
        <!-- PRIMER CONTENEDOR-->




        <!-- PIE DE PAGINA-->
        <footer class="py-5 bg-dark">
            <div class="container"><p class="m-0 text-center text-white">Copyright &copy; LATAM-erica Website 2023</p></div>
        </footer>
        <!-- PIE DE PAGINA-->






    </body>
</html>



<!-- SCRIPT QUE MUESTRA LA TABLA MATERIAS -->
<script type="text/javascript">
    $(document).ready(function(){
        $('#tablaDatatable4').load('tabla-de-usuarios.php');
    });
</script>











<?php  
require_once "../pie-secundario.php";

}
else{
header("Location:../../Mensajes/error.php");
ob_end_flush();
}
?>





