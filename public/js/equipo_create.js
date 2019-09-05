$(document).ready(function ($) {
  $('#btnGuardar').attr("disabled", true);
  $("#idTipoEquipo").change(function () {
    var val = $('#idTipoEquipo').val();
    if (val == "") {
      $('#btnGuardar').attr("disabled",true);
    } else {
      $('#btnGuardar').removeAttr("disabled");
    }
  });
});