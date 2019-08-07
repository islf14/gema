$(document).ready(function($){
    cargarpersonas();
    cargarvehiculos();
    cargarconductor();
    var ban=0;
    $('#btnModalNuePro').click(function(e){
        limpiarcampospersona();
    });

    $( "#tipopersona" ).change(function() {
        var val = $('#tipopersona').val();
        if(val!="P"){
            $('#ccsegvial').removeAttr("disabled");
        }else{
            $("#ccsegvial").val("").trigger("change");
            $("#ccsegvial").attr("disabled", true);
        }
    });

    $('#savepersona').click(function(e){
        validarpersona();
        if(ban == 0){
            guardarpersona();
        }else{
            alert("Complete datos");
        }
    });

    $('#closepersona').click(function(e){
        $('#form_persona').trigger('reset');
        cargarpersonas();
        cargarconductor();
    });

    function validarpersona(text){
        ban=0;
        if($('#nombres').val()==""){
            ban=1;
        }
        if($('#apellidos').val()===""){
            ban=2;
        }
        if($('#dni').val()==""){
            ban=3;
        }
        if($('#domicilio').val()==""){
            ban=4;
        }
        if($('#departamento').val()==""){
            ban=5;
        }
        if($('#provincia').val()==""){
            ban=6;
        }
        if($('#distrito').val()==""){
            ban=7;
        }
        if($('#nro_licencia').val()==""){
            ban=8;
        }
        if($('#antecendentespenales').val()==""){
            ban=9;
        }
        if($('#antecendentesjudiciales').val()==""){
            ban=10;
        }
        if($('#antecedentespoliciales').val()==""){
            ban=11;
        }
        if($('#tipopersona').val()==""){
            ban=11;
        }
        console.log("valiando.. ban="+ban);        
    }

    function guardarpersona(){
        var token = $('meta[name="csrf-token"]').attr('content');
        var route = '../persona';
        var formData = {
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
                    console.log("registrando a "+response);
                }
            }
        }).done(function(data){
            $("#propietarioModal").modal('hide');
            limpiarcampospersona();
            cargarpersonas();
            cargarconductor();
            // ban=0;
            toastr.success('Guardado correctamente.', 'Mensaje de éxito', {timeOut: 3000});
        });
    }

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
    function cargarpersonas() {
        console.log("cargando personas");
        $.ajax({
            url: '../personas',
            type: 'GET',
            success: function(response) {
                $('#idpropietario').children().remove();
                $('#idpropietario').append(new Option("Seleccione...",""));
                response.forEach(task => {
                    if(task.PERtipo == "P" || task.PERtipo == "A"){
                        $('#idpropietario').append(new Option(task.PERnombres+" "+task.PERapellidos +" "+task.PERDNI,task.id));
                    }
                });
            }
        });
    }
    /////////////////////////////
    function cargarconductor() {
        console.log("cargando Conductor");
        $.ajax({
            url: '../personas',
            type: 'GET',
            success: function(response) {
                $('#idchofer').children().remove();
                $('#idchofer').append(new Option("Seleccione...",""));
                response.forEach(task => {
                    if(task.PERtipo == "C" || task.PERtipo == "A"){
                        $('#idchofer').append(new Option(task.PERnombres+" "+task.PERapellidos +" "+task.PERDNI,task.id));
                    }
                });
            }
        });
    }
    //fin funcion

    ////////////////////////////////////////////////////////
    /////////////////////vehículo//////////////////////////
    //////////////////////////////////////////////////////

    $('#savevehiculo').click(function(e){
        validarvehiculo();
        if(ban == 0){
            guardarvehiculo();
        }else{
            alert("Complete datos");
        }
    });

    function guardarvehiculo(){
        var token = $('meta[name="csrf-token"]').attr('content');
        const url = '../vehiculo';
        const postData = {
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
            VEHestado: "A",
            VEHobservaciones: $('#observaciones_v').val()
        };
        // console.log(postData, url);
        $.ajax({
            url: url,
            headers: {'X-CSRF-TOKEN': token},
            data: postData,
            type: 'POST',
            dataType: 'json',
            success: function (response) {
                if(!response.error) {
                console.log("registrando a "+response);
                }
            } 
        }).done(function(data){
            $("#vehiculoModal").modal('hide');
            $('#form_vehiculo').trigger('reset');
            cargarvehiculos();
            toastr.success('Evento creado correctamente.', 'Mensaje de éxito', {timeOut: 9000});
        });
    }

    function validarvehiculo(){
        ban=0;
        if($('#placa').val()==""){
            ban=1;
        }
        if($('#tarjetapropiedad').val()===""){
            ban=2;
        }
        if($('#aniofabricacion').val()==""){
            ban=3;
        }
        if($('#color').val()==""){
            ban=4;
        }
        if($('#vigencia_soat_ini').val()==""){
            ban=5;
        }
        if($('#vigencia_soat_fin').val()==""){
            ban=6;
        }
        if($('#vigencia_afocat_ini').val()==""){
            ban=7;
        }
        if($('#vigencia_afocat_fin').val()==""){
            ban=8;
        }
        if($('#vigencia_citv_ini').val()==""){
            ban=9;
        }
        if($('#vigencia_citv_fin').val()==""){
            ban=10;
        }
        if($('#reso_auto_oper').val()==""){
            ban=11;
        }
        if($('#vigencia_rao_ini').val()==""){
            ban=12;
        }
        if($('#vigencia_rao_fin').val()==""){
            ban=13;
        }
        
        console.log("valiando.. ban="+ban);        
    }

    $('#closevehiculo').click(function (e) {
        $('#form_vehiculo').trigger('reset');
        cargarvehiculos();
    });

    /////////////////////////////
    function cargarvehiculos() {
        console.log("cargando vehiculos");
        $.ajax({
            url: '../vehiculos',
            type: 'GET',
            success: function(response) {
                // console.log(response);
                $('#idvehiculo').children().remove();
                $('#idvehiculo').append(new Option("Seleccione...",""));
                response.forEach(task => {
                    $('#idvehiculo').append(new Option("Placa: "+task.VEHplaca+" - Tarj-Prop:  "+task.VEHtarjetapropiedad +" - Color: "+task.VEHcolor,task.id));
                });
            }
        });
    }

    //fin funcion
    $('#guardartransporteeeee').click(function(e){
        e.preventDefault();
        console.log("en boton guardar");
        const postData = {
	        idpropietario: $('#idpropietario').val(),
            idvehiculo: $('#idvehiculo').val(),
            idasociacion: $('#idasociacion').val()
        };
        console.log(postData);
    });
    //fin 
});