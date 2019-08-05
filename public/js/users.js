$(document).ready(function () {

  fetchUsers();

  function fetchUsers() {
    $.ajax({
      url: 'usuarios',
      type: 'GET',
      success: function (response) {
        let tasks = JSON.parse(response);
        console.log(tasks);
        let template = '';
        tasks.forEach(task => {
          // console.log(task.id);
          template += `
            <tr taskId=${task.id}>
                <td>${task.name}</td>
                <td>${task.last_name}</td>
                <td>${task.email}</td>
                <td>${task.dni}</td>
                <td>
                  <a href='usuario/${task.id}' class='btn btn-info'><i class='fa fa-newspaper-o'></i> Ver </a>
                </td>
                <td>
                  <a href='usuario/${task.id}/edit' class='btn btn-success'><i class='fa fa-edit'></i> Editar </a>
                </td>
                <td>
                  <button class="btn-delete btn btn-danger">Delete</button>
                </td>
            </tr>
          `
        });
        $('#users').html(template);
      }
    })
  }

  $(document).on('click', '.btn-delete', function () {
    if (confirm('¿Estás seguro de eliminar usuario?')) {
      let element = $(this)[0].parentElement.parentElement;
      let id = $(element).attr('taskId');
      let url = 'usuario/'+id;
      var token = $('meta[name="csrf-token"]').attr('content');
      $.ajax({
        url: url,
        headers: {'X-CSRF-TOKEN': token},
        type: 'DELETE',  // user.destroy
        success: function (result) {
          console.log(result);
          if("eliminado" == result){
            fetchUsers();
          }
        }
      });
    }
  });




});