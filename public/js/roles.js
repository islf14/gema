$(document).ready(function () {

  fetchRoles();

  function fetchRoles() {
    $.ajax({
      url: 'roles',
      type: 'GET',
      success: function (response) {
        let tasks = JSON.parse(response);
        console.log(tasks);
        let template = '';
        tasks.forEach(task => {
          console.log(task.name);
          template += `
            <tr taskId=1>
                <td>kh</td>
                <td>
                  <button type="button" class="btn-show btn btn-info" data-toggle="modal" data-target="#modal-see"><i class='fa fa-newspaper-o'></i> Ver</button>
                </td>
                <td>
                  <a href='usuario/8/edit' class='btn btn-success'><i class='fa fa-edit'></i> Editar </a>
                </td>
                <td>
                  <button class="btn-delete btn btn-danger"><i class='fa fa-trash-o'></i> Delete</button>
                </td>
            </tr>
          `
        });
        $('#roles').html(template);
      }
    });
  }
});