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
          // console.log(task.name);
          template += `
            <tr taskId=${task.id}>
                <td>${task.name}</td>
                <td width="10px">
                  <button type="button" class="btn-show btn btn-info" data-toggle="modal" data-target="#modalsee"><i class='fa fa-newspaper-o'></i> Ver</button>
                </td>
                <td width="10px">
                  <a href='rol/${task.id}/edit' class='btn btn-success'><i class='fa fa-edit'></i> Editar </a>
                </td>
                <td width="10px">
                  <button class="btn-delete btn btn-danger"><i class='fa fa-trash-o'></i> Delete</button>
                </td>
            </tr>
          `
        });
        $('#tableroles').html(template);
      }
    });
  }

  $('#btnModalNew').click(function(e){
    cleannewuser();
  });

  function cleannewuser(){
    $('#formnewrol').trigger('reset');
  }

  $('#SaveUser').click(function(e){
    var user = $('#name').val();
    if(user != null){
      let url = 'rol/store';
      var token = $('meta[name="csrf-token"]').attr('content');
      var formData = {
            name: user
            }
      $.ajax({
        url: url,
        headers: {'X-CSRF-TOKEN': token},
        type: 'POST',
        data: formData,
        success: function (result) {
          console.log(result);
          if("false" == result){
            alert("Ya existe ese rol");
          }
        }
      }).done(function(data){
        $("#modalnew").modal('hide');
        fetchRoles();
        cleannewuser();
      });
    }
  });


  $(document).on('click', '.btn-delete', function () {
    if (confirm('¿Estás seguro de eliminar rol?')) {
      let element = $(this)[0].parentElement.parentElement;
      let id = $(element).attr('taskId');
      let url = 'rol/'+id;
      var token = $('meta[name="csrf-token"]').attr('content');
      $.ajax({
        url: url,
        headers: {'X-CSRF-TOKEN': token},
        type: 'DELETE',  // user.destroy
        success: function (result) {
          console.log(result);
          if("true" == result){
            fetchRoles();
          }else{
            alert("No se puede eliminar este tipo de rol");
          }
        }
      });
    }
  });

  $(document).on('click', '.btn-show', function () {
    clean();
    let element = $(this)[0].parentElement.parentElement;
    let id = $(element).attr('taskId');
    let url = 'rol/' + id;
    var token = $('meta[name="csrf-token"]').attr('content');
    $.ajax({
      url: url,
      type: 'GET',
      headers: { 'X-CSRF-TOKEN': token },
      success: function (response) {
        let data = JSON.parse(response);
        // console.log(data);
        $('#nombre_rol').text(data[0][0]);
        $('#guard_name').text(data[0][1]);
        data[1].forEach(element => {
          $("#haspermissions").append("<li>" + element + "</li>");
        });
      }
    });

  });

  function clean() {
    $('#nombre_rol').text("");
    $('#guard_name').text("");
    $("#haspermissions").empty();
  }

  

});