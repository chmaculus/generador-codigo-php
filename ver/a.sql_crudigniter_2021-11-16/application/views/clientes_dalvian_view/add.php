<?php echo form_open('clientes_dalvian/add'); ?>

	<div>
		Codigo Cliente : 
		<input type="text" name="codigo_cliente" value="<?php echo $this->input->post('codigo_cliente'); ?>" />
	</div>
	<div>
		Apellido : 
		<input type="text" name="apellido" value="<?php echo $this->input->post('apellido'); ?>" />
	</div>
	<div>
		Nombres : 
		<input type="text" name="nombres" value="<?php echo $this->input->post('nombres'); ?>" />
	</div>
	<div>
		Tipo Documento : 
		<input type="text" name="tipo_documento" value="<?php echo $this->input->post('tipo_documento'); ?>" />
	</div>
	<div>
		Numero Documento : 
		<input type="text" name="numero_documento" value="<?php echo $this->input->post('numero_documento'); ?>" />
	</div>
	<div>
		Manzana : 
		<input type="text" name="manzana" value="<?php echo $this->input->post('manzana'); ?>" />
	</div>
	<div>
		Casa : 
		<input type="text" name="casa" value="<?php echo $this->input->post('casa'); ?>" />
	</div>
	<div>
		Calle : 
		<input type="text" name="calle" value="<?php echo $this->input->post('calle'); ?>" />
	</div>
	<div>
		Numero : 
		<input type="text" name="numero" value="<?php echo $this->input->post('numero'); ?>" />
	</div>
	<div>
		Piso : 
		<input type="text" name="piso" value="<?php echo $this->input->post('piso'); ?>" />
	</div>
	<div>
		Dpto : 
		<input type="text" name="dpto" value="<?php echo $this->input->post('dpto'); ?>" />
	</div>
	<div>
		Cod Postal : 
		<input type="text" name="cod_postal" value="<?php echo $this->input->post('cod_postal'); ?>" />
	</div>
	<div>
		Telefono : 
		<input type="text" name="telefono" value="<?php echo $this->input->post('telefono'); ?>" />
	</div>
	<div>
		Email : 
		<input type="text" name="email" value="<?php echo $this->input->post('email'); ?>" />
	</div>
	<div>
		Imagen Nombre : 
		<input type="text" name="imagen_nombre" value="<?php echo $this->input->post('imagen_nombre'); ?>" />
	</div>
	<div>
		Fecha Creado : 
		<input type="text" name="fecha_creado" value="<?php echo $this->input->post('fecha_creado'); ?>" />
	</div>
	<div>
		Fecha Modificado : 
		<input type="text" name="fecha_modificado" value="<?php echo $this->input->post('fecha_modificado'); ?>" />
	</div>
	<div>
		Observaciones : 
		<textarea name="observaciones"><?php echo $this->input->post('observaciones'); ?></textarea>
	</div>
	
	<button type="submit">Save</button>

<?php echo form_close(); ?>