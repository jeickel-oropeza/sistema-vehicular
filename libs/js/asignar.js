$(document).ready(function() {

  var f = 0;
  var g = 0;
  var idu = 1;
  var idv = 0;
  var idp = 0;

   $('#table-vehiculo tr td').click(function () {
    var a = $(this).parent('tr');
    idv = a.attr("id");
    a.css('background-color', '#999');
    $('#table-vehiculo tr td').click(function () {
      var b = $(this).parent('tr');
      //idv = a.attr("id"); error
      idv = b.attr("id");
      a.css('background-color', '#fff');
      b.css('background-color', '#999');

    });
    f = 1;
    if(g > 0){
      $("#btn_asignar").removeClass("btn-default disabled");
      $("#btn_asignar").addClass('btn-primary');
    }

  });

    $('#table-persona tr td').click(function () {
    var c = $(this).parent('tr');

    idp = c.attr("id");
    c.css('background-color', '#999');
    $('#table-persona tr td').click(function () {
      var d = $(this).parent('tr');
      idp = c.attr("id");
      c.css('background-color', '#fff');
      d.css('background-color', '#999');

    });
    g = 1;


    if(f > 0){

      $("#btn_asignar").removeClass("btn-default disabled");
      $("#btn_asignar").addClass('btn-primary');

      $("#btn_asignar").click( function(){
        var url = "?view=asignacion&mode=add"; 
        $.ajax({
            url: url,
      	    type: "POST",
            //dataType: 'json',
      	    data: {id_vehiculo:idv, id_persona:idp},
            beforeSend: function(){
              console.log('esperando...');
            },
            success: function(data){
              alert('Asignacion realizada');
              console.log('enviado');
              $(location).attr('href',url);
            },
            error: function(data){
              alert('Error...');
              console.log('error');
            }
      	});

        console.log('vehiculo: '+idv+' persona: '+idp);
      });
    }

  });

});

 function asignar(){
   alert("Asignacion Realizada!");
 }
