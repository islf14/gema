$(document).ready(function () {
  $('#equipos').DataTable({
    "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
    dom: 'Blfrtip',
    buttons: [
      'colvis',
      'copy',
      'excel',
      'pdf',
      'print'
      // 'pageLength'
    ]
    // ajax: 'equipos',
    // columns: [
    //   { data: 'codigo_pat' },
    //   { data: 'nomTipoE' },
    //   { data: 'nomDependencia' },
    //   { data: 'nomEstado' },
    //   { data: 'nomMarca' },
    //   { data: 'modelo' }
    // ]
  });

  function confirmarenvio(){
    $("#mi-modal").modal('show');
  }

  var modalConfirm = function (callback) {

    $("#btn-confirm").on("click", function () {
      $("#mi-modal").modal('show');
    });

    $("#modal-btn-si").on("click", function () {
      callback(true);
      $("#mi-modal").modal('hide');
    });

    $("#modal-btn-no").on("click", function () {
      callback(false);
      $("#mi-modal").modal('hide');
    });
  };

  modalConfirm(function (confirm) {
    if (confirm) {
      //Acciones si el usuario confirma
      // $("#result").html("CONFIRMADO");
    } else {
      //Acciones si el usuario no confirma
      // $("#result").html("NO CONFIRMADO");
    }
  });
});