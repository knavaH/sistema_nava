function validPerfil() {

  var nombre = $('#nombre').val();
  var apellido = $('#apellidos').val();
  var correo = $('#correo').val();
  var telefono = $('#telefono').val();
  var lvlEstudio = $('#nivelEstudio').val();
  var password = $('#pass').val();
  var confPass = $('#confPass').val();
  var expr = /^[A-Za-z áéíóú \s]*$/;
  var expr2 = /^[0-9]*$/;
  var expr3 = /^[A-Za-z\s0-9]*$/;

  if (!expr.test(nombre)) {
    $('#nombre')[0].setCustomValidity("Solo se admiten letras");
  } else {
    $('#nombre')[0].setCustomValidity('');
  }

  if (!expr.test(apellido)) {
    $('#apellidos')[0].setCustomValidity("Solo se admiten letras");
  } else {
    $('#apellidos')[0].setCustomValidity('');
  }

  if (!expr2.test(telefono)) {
    $('#telefono')[0].setCustomValidity("Solo se admiten numeros");
  } else {
    $('#telefono')[0].setCustomValidity('');
  }

  if (!expr3.test(password)) {
    $('#pass')[0].setCustomValidity("No se admiten caracteres especiales");
  } else {
    $('#pass')[0].setCustomValidity('');
  }

  if (password != confPass) {
    $('#confPass')[0].setCustomValidity('Las contraseñas no coinciden');

  } else {
    $('#confPass')[0].setCustomValidity('');
  }
}

//Funcion para la validacion del edit
function validarCalModal() {
  var expr = /^\d+(?:\.\d{0,1})*$/; //expresion numeros decimales.
  var expr2 = /^[0-9]*$/; //expresion para porcentajes
  var p1 = $("#p1").val();
  var ap1 = $("#ap1").val();
  var p2 = $("#p2").val();
  var ap2 = $("#ap2").val();
  var co = $("#co").val();

  //Validacion parcial 1
  if (!expr.test(p1) || p1 > 10) {
    if (p1 != "") {
      $("#p1")[0].setCustomValidity("Solo se aceptan numero de 0-10");
    } else {
      $("#p1")[0].setCustomValidity("");
    }
  } else {
    $("#p1")[0].setCustomValidity("");
  }

  //Validacion asistencia parcial 1
  if (!expr2.test(ap1) || ap1 > 100) {
    if (ap1 != "") {
      $("#ap1")[0].setCustomValidity("Solo se aceptan numero de 0-100");
    } else {
      $("#ap1")[0].setCustomValidity("");
    }
  } else {
    $("#ap1")[0].setCustomValidity("");
  }

  //Validacion parcial 2
  if (!expr.test(p2) || p2 > 10) {
    if (p2 != "") {
      $("#p2")[0].setCustomValidity("Solo se aceptan numero de 0-10");
    } else {
      $("#p2")[0].setCustomValidity("");
    }
  } else {
    $("#p2")[0].setCustomValidity("");
  }

  //Validacion asistencia parcial 2
  if (!expr2.test(ap2) || ap2 > 100) {
    if (ap2 != "") {
      $("#ap2")[0].setCustomValidity("Solo se aceptan numero de 0-100");
    } else {
      $("#ap2")[0].setCustomValidity("");
    }
  } else {
    $("#ap2")[0].setCustomValidity("");
  }

  //Validacion ordinario
  if (!expr.test(co) || co > 10) {
    if (co != "") {
      $("#co")[0].setCustomValidity("Solo se aceptan numero de 0-10");
    } else {
      $("#co")[0].setCustomValidity("");
    }
  } else {
    $("#co")[0].setCustomValidity("");
  }
} //end function validarCalModal

//Funcion para el promedio editModal
function promedioModal() {
  var p1 = $("#p1").val();
  var p2 = $("#p2").val();
  var pp;
  var expr = /^\d+(?:\.\d{0,1})*$/;

  if (!expr.test(p1) || !expr.test(p2)) {
    $("#pp").val("");
  } else {
    pp = ((parseFloat(p1) + parseFloat(p2)) / 2).toFixed(1);
    $("#pp").val(pp);
  }

  var ap1 = $("#ap1").val();
  var ap2 = $("#ap2").val();
  var pp = $("#pp").val();
  var co = $("#co").val();
  var aco, cf, acf;

  if (!expr.test(pp) || !expr.test(co)) {
    $("#cf").val("");
    $("#aco").val("");
    $("#acf").val("");
  } else {
    cf = ((parseFloat(pp) + parseFloat(co)) / 2).toFixed(1);
    aco = ((parseInt(ap1) + parseInt(ap2)) / 2).toFixed(0);
    $("#cf").val(cf);
    $("#aco").val(aco);
    acf = ((parseInt(ap1) + parseInt(ap2) + parseInt(aco)) / 3).toFixed(0);
    $("#acf").val(acf);
  }
}

function validarCal(id) {
  var expr = /^\d+(?:\.\d{0,1})*$/; //expresion numeros decimales.
  var expr2 = /^[0-9]*$/; //expresion para porcentajes
  var p1 = $("#p1" + id).val();
  var ap1 = $("#ap1" + id).val();
  var p2 = $("#p2" + id).val();
  var ap2 = $("#ap2" + id).val();
  var co = $("#co" + id).val();

  //Validacion Parcial 1 y Asistencia 1 (required)
  if (p1 != "" || ap1 != "") {
    $("#p1" + id).attr('required', 'required');
    $("#ap1" + id).attr('required', 'required');
  } else {
    $("#p1" + id).removeAttr('required');
    $("#ap1" + id).removeAttr('required');
  }

  //Validacion Parcial 2 y Asistencia 2 (required)
  if (p2 != "" || ap2 != "") {
    $("#p2" + id).attr('required', 'required');
    $("#ap2" + id).attr('required', 'required');
  } else {
    $("#p2" + id).removeAttr('required');
    $("#ap2" + id).removeAttr('required');
  }

  //Validacion parcial 1
  if (!expr.test(p1) || p1 > 10) {
    if (p1 != "") {
      $("#p1" + id)[0].setCustomValidity("Solo se aceptan numero de 0-10");
    } else {
      $("#p1" + id)[0].setCustomValidity("");
    }
  } else {
    $("#p1" + id)[0].setCustomValidity("");
  }

  //Validacion asistencia parcial 1
  if (!expr2.test(ap1) || ap1 > 100) {
    if (ap1 != "") {
      $("#ap1" + id)[0].setCustomValidity("Solo se aceptan numero de 0-100");
    } else {
      $("#ap1" + id)[0].setCustomValidity("");
    }
  } else {
    $("#ap1" + id)[0].setCustomValidity("");
  }

  //Validacion parcial 2
  if (!expr.test(p2) || p2 > 10) {
    if (p2 != "") {
      $("#p2" + id)[0].setCustomValidity("Solo se aceptan numero de 0-10");
    } else {
      $("#p2" + id)[0].setCustomValidity("");
    }
  } else {
    $("#p2" + id)[0].setCustomValidity("");
  }

  //Validacion asistencia parcial 2
  if (!expr2.test(ap2) || ap2 > 100) {
    if (ap2 != "") {
      $("#ap2" + id)[0].setCustomValidity("Solo se aceptan numero de 0-100");
    } else {
      $("#ap2" + id)[0].setCustomValidity("");
    }
  } else {
    $("#ap2" + id)[0].setCustomValidity("");
  }

  //Validacion ordinario
  if (!expr.test(co) || co > 10) {
    if (co != "") {
      $("#co" + id)[0].setCustomValidity("Solo se aceptan numero de 0-10");
    } else {
      $("#co" + id)[0].setCustomValidity("");
    }
  } else {
    $("#co" + id)[0].setCustomValidity("");
  }
} //end function validarCal

//Funcion para calcular promedio de (captura_cal)
function Promedio(id) {
  var p1 = $("#p1" + id).val();
  var p2 = $("#p2" + id).val();
  var pp;
  var expr = /^\d+(?:\.\d{0,1})*$/;

  if (!expr.test(p1) || !expr.test(p2)) {
    $("#pp" + id).val("");
  } else {
    pp = ((parseFloat(p1) + parseFloat(p2)) / 2).toFixed(1);
    $("#pp" + id).val(pp);
  }
  var ap1 = $("#ap1" + id).val();
  var ap2 = $("#ap2" + id).val();
  var pp = $("#pp" + id).val();
  var co = $("#co" + id).val();
  var aco, cf, acf;

  if (!expr.test(pp) || !expr.test(co)) {
    $("#cf" + id).val("");
    $("#aco" + id).val("");
    $("#acf" + id).val("");
  } else {
    cf = ((parseFloat(pp) + parseFloat(co)) / 2).toFixed(1);
    aco = ((parseInt(ap1) + parseInt(ap2)) / 2).toFixed(0);
    $("#cf" + id).val(cf);
    $("#aco" + id).val(aco);
    acf = ((parseInt(ap1) + parseInt(ap2) + parseInt(aco)) / 3).toFixed(0);
    $("#acf" + id).val(acf);
  }
} //end function Promedio

//Funcion para confirmacion de datos.
function redireccion() {
  if (!confirm("\u00BFEsta seguro que los datos son correctos?")) {
    return false;
  }
}

//Funcion de Tooltip
$(document).ready(function() {
  $('[data-toggle="tooltip"]').tooltip();
});

//Funcion modal fecha captura
$(document).ready(function() {
  $('#myModal').modal();
});

$(document).ready(function() {
  $('#perfiles').click(function() {
    $('#perfil').modal();
  })
});

//Funcion modal editar calificaciones
function modal(name, p1, ap1, p2, ap2, pp, co, aco, cf, acf, ma) {

  $('#nombre').val(name);
  $('#p1').val(p1);
  $('#ap1').val(ap1);
  $('#p2').val(p2);
  $('#ap2').val(ap2);
  $('#pp').val(pp);
  $('#co').val(co);
  $('#aco').val(aco);
  $('#cf').val(cf);
  $('#acf').val(acf);
  $('#matricula').val(ma);
}

/*function editPerfil(nombre, apellidos, correo, telefono, nivelEstudios){

  $('#nombre').val(nombre);
  $('#apellidos').val(apellidos);
  $('#correo').val(correo);
  $('#telefono').val(telefono);
  $('#nivelEstudio').val(nivelEstudios);
}*/

$('#btn-edit-perfil').click(function(){
  $('#editPerfil').modal()

});

$(document).ready(function(){

  $('#btn-change-pass').click(function(){
    $('#confirm').on('shown.bs.collapse', function(){
      $('#pass').removeAttr('readonly');
      $('#confPass').removeAttr('readonly');
    });

    $('#confirm').on('hidden.bs.collapse', function(){
      $('#pass').attr('readonly','readonly');
      $('#confPass').attr('readonly','readonly');
    });
  });
});


//Funcion para bloqueo de celdas
$(document).ready(function() {

  $('.cal input[type="numeric"]').each(function() {
    if ($(this).val().length == 0) {
      $(this).removeAttr('readonly');
    } else {
      //console.log("no esta vacio");
      $(this).attr('readonly', 'readonly');
    }
  });
});
