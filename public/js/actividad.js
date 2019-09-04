$(document).ready(function () {
  $('#actividad').DataTable({
    "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
    dom: 'Blfrtip',
    buttons: [
      'colvis',
      'copy',
      'excel',
      'pdf',
      'print'
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
});