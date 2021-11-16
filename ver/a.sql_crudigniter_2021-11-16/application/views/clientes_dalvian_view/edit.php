<?php echo form_open('clientes_dalvian/edit/'.$clientes_dalvian['id']); ?>

	<div>
		Codigo Cliente : 
		<input type="text" name="codigo_cliente" value="<?php echo ($this->input->post('codigo_cliente') ? $this->input->post('codigo_cliente') : $clientes_dalvian['codigo_cliente']); ?>" />
	</div>
	<div>
		Apellido : 
		<input type="text" name="apellido" value="<?php echo ($this->input->post('apellido') ? $this->input->post('apellido') : $clientes_dalvian['apellido']); ?>" />
	</div>
	<div>
		Nombres : 
		<input type="text" name="nombres" value="<?php echo ($this->input->post('nombres') ? $this->input->post('nombres') : $clientes_dalvian['nombres']); ?>" />
	</div>
	<div>
		Tipo Documento : 
		<input type="text" name="tipo_documento" value="<?php echo ($this->input->post('tipo_documento') ? $this->input->post('tipo_documento') : $clientes_dalvian['tipo_documento']); ?>" />
	</div>
	<div>
		Numero Documento : 
		<input type="text" name="numero_documento" value="<?php echo ($this->input->post('numero_documento') ? $this->input->post('numero_documento') : $clientes_dalvian['numero_documento']); ?>" />
	</div>
	<div>
		Manzana : 
		<input type="text" name="manzana" value="<?php echo ($this->input->post('manzana') ? $this->input->post('manzana') : $clientes_dalvian['manzana']); ?>" />
	</div>
	<div>
		Casa : 
		<input type="text" name="casa" value="<?php echo ($this->input->post('casa') ? $this->input->post('casa') : $clientes_dalvian['casa']); ?>" />
	</div>
	<div>
		Calle : 
		<input type="text" name="calle" value="<?php echo ($this->input->post('calle') ? $this->input->post('calle') : $clientes_dalvian['calle']); ?>" />
	</div>
	<div>
		Numero : 
		<input type="text" name="numero" value="<?php echo ($this->input->post('numero') ? $this->input->post('numero') : $clientes_dalvian['numero']); ?>" />
	</div>
	<div>
		Piso : 
		<input type="text" name="piso" value="<?php echo ($this->input->post('piso') ? $this->input->post('piso') : $clientes_dalvian['piso']); ?>" />
	</div>
	<div>
		Dpto : 
		<input type="text" name="dpto" value="<?php echo ($this->input->post('dpto') ? $this->input->post('dpto') : $clientes_dalvian['dpto']); ?>" />
	</div>
	<div>
		Cod Postal : 
		<input type="text" name="cod_postal" value="<?php echo ($this->input->post('cod_postal') ? $this->input->post('cod_postal') : $clientes_dalvian['cod_postal']); ?>" />
	</div>
	<div>
		Telefono : 
		<input type="text" name="telefono" value="<?php echo ($this->input->post('telefono') ? $this->input->post('telefono') : $clientes_dalvian['telefono']); ?>" />
	</div>
	<div>
		Email : 
		<input type="text" name="email" value="<?php echo ($this->input->post('email') ? $this->input->post('email') : $clientes_dalvian['email']); ?>" />
	</div>
	<div>
		Imagen Nombre : 
		<input type="text" name="imagen_nombre" value="<?php echo ($this->input->post('imagen_nombre') ? $this->input->post('imagen_nombre') : $clientes_dalvian['imagen_nombre']); ?>" />
	</div>
	<div>
		Fecha Creado : 
		<input type="text" name="fecha_creado" value="<?php echo ($this->input->post('fecha_creado') ? $this->input->post('fecha_creado') : $clientes_dalvian['fecha_creado']); ?>" />
	</div>
	<div>
		Fecha Modificado : 
		<input type="text" name="fecha_modificado" value="<?php echo ($this->input->post('fecha_modificado') ? $this->input->post('fecha_modificado') : $clientes_dalvian['fecha_modificado']); ?>" />
	</div>
	<div>
		Observaciones : 
		<textarea name="observaciones"><?php echo ($this->input->post('observaciones') ? $this->input->post('observaciones') : $clientes_dalvian['observaciones']); ?></textarea>
	</div>
	
	<button type="submit">Save</button>
	
<?php echo form_close(); ?>