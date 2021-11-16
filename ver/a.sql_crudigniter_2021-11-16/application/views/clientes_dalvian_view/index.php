<table border="1" width="100%">
    <tr>
		<th>ID</th>
		<th>Codigo Cliente</th>
		<th>Apellido</th>
		<th>Nombres</th>
		<th>Tipo Documento</th>
		<th>Numero Documento</th>
		<th>Manzana</th>
		<th>Casa</th>
		<th>Calle</th>
		<th>Numero</th>
		<th>Piso</th>
		<th>Dpto</th>
		<th>Cod Postal</th>
		<th>Telefono</th>
		<th>Email</th>
		<th>Imagen Nombre</th>
		<th>Fecha Creado</th>
		<th>Fecha Modificado</th>
		<th>Observaciones</th>
		<th>Actions</th>
    </tr>
	<?php foreach($clientes_dalvian as $c){ ?>
    <tr>
		<td><?php echo $c['id']; ?></td>
		<td><?php echo $c['codigo_cliente']; ?></td>
		<td><?php echo $c['apellido']; ?></td>
		<td><?php echo $c['nombres']; ?></td>
		<td><?php echo $c['tipo_documento']; ?></td>
		<td><?php echo $c['numero_documento']; ?></td>
		<td><?php echo $c['manzana']; ?></td>
		<td><?php echo $c['casa']; ?></td>
		<td><?php echo $c['calle']; ?></td>
		<td><?php echo $c['numero']; ?></td>
		<td><?php echo $c['piso']; ?></td>
		<td><?php echo $c['dpto']; ?></td>
		<td><?php echo $c['cod_postal']; ?></td>
		<td><?php echo $c['telefono']; ?></td>
		<td><?php echo $c['email']; ?></td>
		<td><?php echo $c['imagen_nombre']; ?></td>
		<td><?php echo $c['fecha_creado']; ?></td>
		<td><?php echo $c['fecha_modificado']; ?></td>
		<td><?php echo $c['observaciones']; ?></td>
		<td>
            <a href="<?php echo site_url('clientes_dalvian/edit/'.$c['id']); ?>">Edit</a> | 
            <a href="<?php echo site_url('clientes_dalvian/remove/'.$c['id']); ?>">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>
<div class="pull-right">
    <?php echo $this->pagination->create_links(); ?>    
</div>
