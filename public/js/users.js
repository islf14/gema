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
                              <button class="task-delete btn btn-info">
                                  Ver
                              </button>
                          </td>
                          <td>
                              <button class="task-delete btn btn-success">
                                  Editar
                              </button>
                          </td>
                          <td>
                              <button class="task-delete btn btn-danger">
                                  Eliminar
                              </button>
                          </td>
                      </tr>
                  `
        });
        $('#users').html(template);
      }
    })
  }




});