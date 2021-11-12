function categoria() {
	var categoria = '';
	categoria = document.getElementById('categoria').value;
	// document.getElementById('text1').value = book;

	$('#categoria option:selected').each(function () {
		$.post("descripcion.inc.php", { categoria: categoria }, function(data){
			$("#descripcion").html(data);
		});			
	});			
}

