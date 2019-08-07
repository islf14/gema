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
                  <button type="button" class="btn-show btn btn-info" data-toggle="modal" data-target="#modal-default"><i class='fa fa-newspaper-o'></i> Ver</button>
                </td>
                <td>
                  <a href='usuario/${task.id}/edit' class='btn btn-success'><i class='fa fa-edit'></i> Editar </a>
                </td>
                <td>
                  <button class="btn-delete btn btn-danger"><i class='fa fa-trash-o'></i> Delete</button>
                </td>
            </tr>
          `
        });
        $('#tableusers').html(template);
      }
    });
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

  $(document).on('click', '.btn-show', function () {
    clean();
    let element = $(this)[0].parentElement.parentElement;
    let id = $(element).attr('taskId');
    let url = 'usuario/' + id;
    var token = $('meta[name="csrf-token"]').attr('content');
    $.ajax({
      url: url,
      type: 'GET',
      headers: { 'X-CSRF-TOKEN': token },
      success: function (response) {
        let data = JSON.parse(response);
        // console.log(data);
        $('#nombres').text(data[0][0]);
        $('#apellidos').text(data[0][1]);
        $('#dni').text(data[0][2]);
        $('#telefono').text(data[0][3]);
        $('#email').text(data[0][4]);
        data[1].forEach(element => {
          $("#hasroles").append("<li>"+ element +"</li>"); 
        });
      }
    });

  });

  function clean(){
    $('#nombres').text("");
    $('#apellidos').text("");
    $('#dni').text("");
    $('#telefono').text("");
    $('#email').text("");
    $("#roles").empty();
  }

});