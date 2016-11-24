$(document).ready(function() {
	var idv=0;
	$('#table tr td #enviar').click(function() {
		var a = $(this).parent("td");
		idv = a.attr("id");
		console.log(idv);
		var url = "?view=vehiculos&mode=mantenimiento";
		$.ajax({
            url: url,
      	    type: "POST",
            //dataType: 'json',
      	    data: {id:idv},
            beforeSend: function(){
              console.log('esperando...');
            },
            success: function(data){
              console.log('enviado');
              alert('El vehiculo fue enviado a mantenimiento');
              $(location).attr('href',url);
            },
            error: function(data){
              console.log('error');
              alert('Error...');
            }
      	});
	});
});