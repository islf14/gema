$(document).ready(function() {


    $('#equipos').DataTable({
        buttons: [
            'copy', 'excel', 'pdf'
        ]
    } );
});

// {
//         buttons: [
//             'copy', 'excel', 'pdf'
//         ],
//         ajax: 'equipos',
//         columns: [
//             { data: 'codigo_pat' },
//             { data: 'nomTipoE' },
//             { data: 'nomDependencia' },
//             { data: 'nomEstado' },
//             { data: 'nomMarca' }
//         ]
//     } 