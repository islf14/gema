$(document).ready(function($){
    var idpersona = "";
    var idpropietario = $('#id_temp_pro').val();
    var idvehiculo = $('#id_temp_veh').val();
    var idchofer = $('#id_temp_cho').val();
    console.log("idpropietario inicio: "+idpropietario);
    console.log("idvehiculo inicio: "+idvehiculo);
    console.log("idchofer inicio: "+idchofer);

    cargarpropietario();
    cargarvehiculos();
    cargarconductor();
    
    ///////////////////////////////////////////////
    //////////////////////////////////////////////

    $("#idpropietario").change(function() {
        var val = $('#idpropietario').val();
        if(val!=""){
            $('#btnModalActuPro').removeAttr("disabled");
        }else{
            $("#btnModalActuPro").attr("disabled", true);
        }
    });
    
    $("#idchofer").change(function() {
        var val = $('#idchofer').val();
        if(val!=""){
            $('#btnModalActCho').removeAttr("disabled");
        }else{
            $("#btnModalActCho").attr("disabled", true);
        }
    });
    //////////////////////////////////////////////////////////////////////

    $('#btnModalActuPro').click(function(e){
        limpiarcampospersona();
        idpropietario="";
        idchofer="";
        console.log("reseteando idpropietario: "+idpropietario);
        var valp = $('#idpropietario').val();
        var valc = $('#idchofer').val();
        if(valp!=""){
            idpropietario = valp;
            idchofer = valc;
            cargarpersona(valp);
        }else{
            alert("Seleccione propietario");
            $("#propietarioModal").hide();
            console.log("vacío")
        }
    });
    
    $('#btnModalActCho').click(function(e){
        limpiarcampospersona();
        idpropietario="";
        idchofer="";
        console.log("reseteando idchofer: "+idchofer);
        var valp = $('#idpropietario').val();
        var valc = $('#idchofer').val();
        if(valc!=""){
            idpropietario = valp;
            idchofer = valc;
            cargarpersona(valc);
        }else{
            alert("Seleccione propietario");
            $("#propietarioModal").hide();
            console.log("vacío")
        }
    });

    //////////////////////////////////
    function cargarpersona(ident) {
        console.log("idpropietario: "+idpropietario);
        console.log("idchofer: "+idchofer);
        idpersona = "";
        var token = $('meta[name="csrf-token"]').attr('content');
        var route = '../../personadatos';
        const postData = {
	        idpersona: ident
        };
        $.ajax({
            url: route,
            headers: {'X-CSRF-TOKEN': token},
            type: 'POST',
            dataType: 'json',
            data: postData,
            success: function(response) {
                console.log(response);
                $('#nombres').val(response.PERnombres);
                $('#apellidos').val(response.PERapellidos);
                $('#dni').val(response.PERDNI);
                $('#telefono').val(response.PERtelefono);
                $('#departamento').val(response.PERdepartamento);
                $("#departamento").val(response.PERdepartamento).trigger("change");
                $('#provincia').val(response.PERprovincia);
                $('#distrito').val(response.PERdistrito);
                $('#domicilio').val(response.PERdomicilio);
                $('#nro_licencia').val(response.PERnrolicencia);
                $('#antecendentespenales').val(response.PERantepenales);
                $("#antecendentespenales").val(response.PERantepenales).trigger("change");
                $('#antecendentesjudiciales').val(response.PERantejudiciales);
                $('#antecendentesjudiciales').val(response.PERantejudiciales).trigger("change");
                $('#antecedentespoliciales').val(response.PERantepoliciales);
                $('#antecedentespoliciales').val(response.PERantepoliciales).trigger("change");
                $('#reportesg').val(response.PERreporteseguridad);
                $('#tipopersona').val(response.PERtipo);
                $('#tipopersona').val(response.PERtipo).trigger("change");
                $('#ccsegvial').val(response.PERcertcapsegvial);
                $('#ccsegvial').val(response.PERcertcapsegvial).trigger("change");
                $('#observaciones_p').val(response.PERobservaciones);
                
                idpersona= ident;
                console.log("cargando idpersona: "+idpersona);
            }
        }).done(function(data){
            toastr.success('Cargando datos...', 'Cargando', {timeOut: 1000});
        });
    }
    ////////////////

    $('#savepersona').click(function(e){
        e.preventDefault();        
        var token = $('meta[name="csrf-token"]').attr('content');
        var route = '../../actualizarpersona';
        var formData = {
            idpersona: idpersona,
            PERnombres: $('#nombres').val(),
            PERapellidos: $('#apellidos').val(),
            PERDNI: $('#dni').val(),
            PERdomicilio: $('#domicilio').val(),
            PERdepartamento: $('#departamento').val(),
            PERprovincia: $('#provincia').val(),
            PERdistrito: $('#distrito').val(),
            PERtelefono: $('#telefono').val(),
            PERnrolicencia: $('#nro_licencia').val(),
            PERreporteseguridad: $('#reportesg').val(),
            PERantepenales: $('#antecendentespenales').val(),
            PERantejudiciales: $('#antecendentesjudiciales').val(),
            PERantepoliciales: $('#antecedentespoliciales').val(),
            PERcertcapsegvial: $('#ccsegvial').val(),
            PERobservaciones: $('#observaciones_p').val(),
            PERtipo: $('#tipopersona').val()
        }
        $.ajax({
            url: route,
            headers: {'X-CSRF-TOKEN': token},
            type: 'POST',
            dataType: 'json',
            data: formData,
            success: function (response) {
                if(!response.error) {
                    console.log("actualizando a "+response);
                }
            }
        }).done(function(data){
            $("#propietarioModal").modal('hide');
            limpiarcampospersona();
            cargarpropietario();
            cargarconductor();
            toastr.success('Actualizado', 'Mensaje de éxito', {timeOut: 1000});
        });
    });

    $('#closepersona').click(function (e) {
        console.log("idpropietario in close: "+idpropietario);
        console.log("idchofer in close: "+idchofer);
        limpiarcampospersona();
        cargarpropietario();
        cargarconductor();
    });

    function limpiarcampospersona(){
        $('#form_persona').trigger('reset');
        $("#departamento").val("").trigger("change");
        $("#antecendentespenales").val("").trigger("change");
        $('#antecendentesjudiciales').val("").trigger("change");
        $('#antecedentespoliciales').val("").trigger("change");
        $('#tipopersona').val("").trigger("change");
        $('#ccsegvial').val("").trigger("change");
    }

    ////////////////////////
    function cargarpropietario() {
        $.ajax({
            url: '../../personas',
            type: 'GET',
            success: function(response) {
                $('#idpropietario').children().remove();
                $('#idpropietario').append(new Option("Seleccione...",""));
                response.forEach(task => {
                    if(task.PERtipo == "P" || task.PERtipo == "A"){
                        $('#idpropietario').append(new Option(task.PERnombres+" "+task.PERapellidos +" - "+task.PERDNI,task.id));
                    }
                });
                if(idpropietario){
                    $("#idpropietario").val("").trigger("change");
                    $("#idpropietario").val(idpropietario).trigger("change");
                    console.log("idpropietario cc: "+idpropietario);
                }else{
                    console.log("idpropietario esta vacío");
                    $("#idpropietario").val("").trigger("change");
                }
            }
        });
    console.log("cargando propietario");
    }

    /////////////////
    function cargarconductor() {
        $.ajax({
            url: '../../personas',
            type: 'GET',
            success: function(response) {
                $('#idchofer').children().remove();
                $('#idchofer').append(new Option("Seleccione...",""));
                response.forEach(task => {
                    if(task.PERtipo == "C" || task.PERtipo == "A"){
                        $('#idchofer').append(new Option(task.PERnombres+" "+task.PERapellidos +" "+task.PERDNI,task.id));
                    }
                });
                if(idchofer){
                    $("#idchofer").val("").trigger("change");
                    $("#idchofer").val(idchofer).trigger("change");
                    console.log("idchofer cc: "+idchofer);
                }else{
                    console.log("idchofer esta vacío");
                    $("#idchofer").val("").trigger("change");
                }
            }
        });
        console.log("en cargando Conductor");
    }

    ////////////////////////////////////////////////////////
    /////////////////////vehículo//////////////////////////
    //////////////////////////////////////////////////////

    $( "#idvehiculo" ).change(function() {
        // alert( "Handler for .change() called." );
        var val = $('#idvehiculo').val();
        if(val!=""){
            $('#btnModalActuVeh').removeAttr("disabled");
        }else{
            $("#btnModalActuVeh").attr("disabled", true);
        }
    });

    $('#btnModalActuVeh').click(function(e){
        limpiarcamposvehiculo();
        idvehiculo="";
        console.log("reseteando idvehiculo: "+idvehiculo);
        var val = $('#idvehiculo').val();
        if(val!=""){
            cargardatosvehiculo();
        }else{
            alert("Seleccione vehículo");
            // $("#propietarioModal").hide();
            console.log("vacío")
        }
    });

    //////////////////////////////////
    function cargardatosvehiculo() {
        var token = $('meta[name="csrf-token"]').attr('content');
        var route = '../../vehiculodatos';
        const postData = {
	        idvehiculo: $('#idvehiculo').val()
        };
        $.ajax({
            url: route,
            headers: {'X-CSRF-TOKEN': token},
            type: 'POST',
            dataType: 'json',
            data: postData,
            success: function(response) {
                // console.log(response);
                var ft="";
                $('#placa').val(response.VEHplaca);
                $('#tarjetapropiedad').val(response.VEHtarjetapropiedad);
                $('#aniofabricacion').val(response.VEHaniofabricacion);
                $('#color').val(response.VEHcolor);
                ft = response.VEHsoatfechaini.split('-');
                $('#vigencia_soat_ini').datepicker("setDate", new Date(ft[0],ft[1]-1,ft[2]));
                ft = response.VEHsoatfechaven.split('-');
                $("#vigencia_soat_fin").datepicker("setDate", new Date(ft[0],ft[1]-1,ft[2]));
                ft = response.VEHafocatfechaini.split('-');
                $('#vigencia_afocat_ini').datepicker("setDate", new Date(ft[0],ft[1]-1,ft[2]));
                ft = response.VEHafocatfechaven.split('-');
                $('#vigencia_afocat_fin').datepicker("setDate", new Date(ft[0],ft[1]-1,ft[2]));
                ft = response.VEHcitvfechaini.split('-');
                $('#vigencia_citv_ini').datepicker("setDate", new Date(ft[0],ft[1]-1,ft[2]));
                ft = response.VEHcitvfechaven.split('-');
                $('#vigencia_citv_fin').datepicker("setDate", new Date(ft[0],ft[1]-1,ft[2]));
                $('#reso_auto_oper').val(response.VEHnroresolucionautoop);
                ft = response.VEHresoautoopfechaini.split('-');
                $("#vigencia_rao_ini").datepicker("setDate", new Date(ft[0],ft[1]-1,ft[2]));
                ft = response.VEHresoautoopfechaven.split('-');
                $('#vigencia_rao_fin').datepicker("setDate", new Date(ft[0],ft[1]-1,ft[2]));
                $('#reso_auto_ingreso').val(response.VEHnroresoautoingreso);
                $('#reso_sust_retiro').val(response.VEHnroresosustretmovil);
                $('#observaciones_v').val(response.VEHobservaciones);
                $('#estadovehiculo').val(response.VEHestado);
                $('#estadovehiculo').val(response.VEHestado).trigger("change");
                idvehiculo= $('#idvehiculo').val();
                console.log("cargando idvehiculo: "+idvehiculo);
            }
        }).done(function(data){
            toastr.success('Cargando datos...', 'Cargando', {timeOut: 1000});
        });
    }

    $('#savevehiculo').click(function (e) {
        // console.log("en  guardando modal");
        e.preventDefault();
        var token = $('meta[name="csrf-token"]').attr('content');
        const url = '../../actualizarvehiculo';
        const postData = {
            idvehiculo: idvehiculo,
	        VEHplaca: $('#placa').val(),
            VEHtarjetapropiedad: $('#tarjetapropiedad').val(),
            VEHaniofabricacion: $('#aniofabricacion').val(),
            VEHcolor: $('#color').val(),
            VEHsoatfechaini: $('#vigencia_soat_ini').val(),
            VEHsoatfechaven: $('#vigencia_soat_fin').val(),
            VEHafocatfechaini: $('#vigencia_afocat_ini').val(),
            VEHafocatfechaven: $('#vigencia_afocat_fin').val(),
            VEHcitvfechaini: $('#vigencia_citv_ini').val(),
            VEHcitvfechaven: $('#vigencia_citv_fin').val(),
            VEHnroresolucionautoop: $('#reso_auto_oper').val(),
            VEHresoautoopfechaini: $('#vigencia_rao_ini').val(),
            VEHresoautoopfechaven: $('#vigencia_rao_fin').val(),
            VEHnroresoautoingreso: $('#reso_auto_ingreso').val(),
            VEHnroresosustretmovil: $('#reso_sust_retiro').val(),
            VEHestado: $('#estadovehiculo').val(),
            VEHobservaciones: $('#observaciones_v').val()
        };
        console.log(postData, url);
        $.ajax({
            url: url,
            headers: {'X-CSRF-TOKEN': token},
            data: postData,
            type: 'POST',
            dataType: 'json',
            success: function (response) {
                if(!response.error) {
                console.log("Actualizando a "+response);
                }
            } 
        }).done(function(data){
            $("#vehiculoModal").modal('hide');
            limpiarcamposvehiculo();
            cargarvehiculos();
            toastr.success('Evento creado correctamente.', 'Mensaje de éxito', {timeOut: 9000});
        });
    });

    function limpiarcamposvehiculo(){
        $('#form_vehiculo').trigger('reset');
        $("#estadovehiculo").val("").trigger("change");
    }

    $('#closevehiculo').click(function(e) {
        limpiarcamposvehiculo();
        cargarvehiculos();
    });
    
    
    //fin funcion
    function cargarvehiculos() {
        console.log("en cargando vehiculos");
        $.ajax({
            url: '../../vehiculos',
            type: 'GET',
            success: function(response) {
                //const tasks = JSON.parse(response);
                // console.log(response);
                $('#idvehiculo').children().remove();
                $('#idvehiculo').append(new Option("Seleccione...",""));
                response.forEach(task => {
                    $('#idvehiculo').append(new Option("Placa: "+task.VEHplaca+" - Tarj-Prop:  "+task.VEHtarjetapropiedad +" - Color: "+task.VEHcolor,task.id));
                });
                if(idvehiculo){
                    $("#idvehiculo").val(idvehiculo).trigger("change");
                    // $('#idpropietario').prop("value","0");
                }else{
                    console.log("idvehiculo esta vacío");
                    $("#idvehiculo").val("").trigger("change");
                }
            }
        });
    }
    //fin funcion
    //fin 

    $('#verificarestado').click(function(e){
        var ft = "2019-07-04".split('-');
        $('#vigencia_soat_ini_2').datepicker("setDate", new Date(ft[0],ft[1]-1,ft[2]));
        $("#vigencia_soat_fin_2").datepicker("setDate", new Date(2019,7-1,21));
        // $('#vigencia_soat_ini_2').val("2019-07-10");
        // $("#vigencia_soat_fin_2").val("2019-07-20");

    });
});