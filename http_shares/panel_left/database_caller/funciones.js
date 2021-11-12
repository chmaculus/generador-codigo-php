function refreshtables() {
	var database = '';
	database = document.getElementById('database').value;
	// document.getElementById('text1').value = book;
	$('#database option:selected').each(function () {
		$.post("tablas.inc.php", { database: database }, function(data){
			$("#tabla").html(data);
		});			
	});			
}

