<?php 

require_once "../../BD/conexion-objeto.php";
$obj= new conectar();
$conexion=$obj->conexion();


$sql="SELECT 
correo,
psw,
pais
from social";
$result=mysqli_query($conexion,$sql);
?>


<div>
	<table class="table table-hover table-condensed table-bordered" id="iddatatable4">
		<thead style="background-color: #457EB6;color: white; font-weight: bold;">
			<tr>
				<td>Correo</td>
				<td>Contraseña</td>
				<td>Pais</td>
			</tr>
		</thead>
		<tfoot style="background-color: #ccc;color: white; font-weight: bold;">
			<tr>
				<td>Correo</td>
				<td>Contraseña</td>
				<td>Pais</td>
			</tr>
		</tfoot>
		<tbody >
			<?php 
			while ($mostrar=mysqli_fetch_row($result)) {
				?>
				<tr >
					<td><?php echo $mostrar[0] ?></td>
					<td><?php echo $mostrar[1] ?></td>
					<td><?php echo $mostrar[2] ?></td>

					<!-- PRIMER CONTENEDOR<td style="text-align: center;">
						<span class="btn btn-warning btn-sm" data-toggle="modal" data-target="#modalEditar4" onclick="agregaFrmActualizar4('<?php echo $mostrar[0] ?>')">
							<span class="fa fa-pencil-square-o"></span>
						</span>
					</td>-->
				</tr>
				<?php 
			}
			?>
		</tbody>
	</table>
</div>

<script type="text/javascript">
	$(document).ready(function() {
		$('#iddatatable4').DataTable();
	} );
</script>