<?php
require_once("layouts/header.php");
?>
<a href="index.php?m=nuevo" class="btn">Nuevo</a>
<table>
	<tr>
		<td>ID</td>
		<td>CONTRASEÑA</td>
		<td>USUARIO</td>
		<td>ACCION</td>
	</tr>
	<tbody>
		<?php
		    if (!empty($dato)):
		  	 // code...
		  	    foreach ($dato as $key => $value)
		  		    foreach ($value as $v):?>
		  		    	<tr>
		  		     		<td><?php echo $v['user_id'] ?> </td>
		  		     		<td><?php echo $v['contrasenia'] ?> </td>
		  		     		<td><?php echo $v['usuario'] ?> </td>
				  		    <td>
				  		 		
				  		    </td>
		  		        </tr>
		  	        <?php endforeach;?>
		     	<?php else: ?>
		  		<tr>
		  			<td colspan="3">NO HAY REGISTROS</td>
		  		</tr>
		  	<?php endif ?>
	</tbody>
</table>
<?php
	require_once("layouts/footer.php");