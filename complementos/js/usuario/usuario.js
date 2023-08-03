/**
 * |||||||||||||||||||||||||||||||||||||OBTENER LOS DATOS DE LA TABLA MEDIANTE AJAX|||||||||||||||||||||||||||||||||||||||||||||||||||||||||
 */
$(document).ready(function () {    
    $.ajax({
      url: "controller/ControllerUser.php",
      type: "POST",
      data:  { accion: "cargarDatos" },
      dataType: "json",
      success: function (data) {
        // Verificar si se obtuvieron datos correctamente
        if (Array.isArray(data.data) && data.data.length > 0) {
          $("#tabla_usuarios").show();

          // Agregar la columna de checkbox a los datos obtenidos
          data.data.forEach(function (row) {
            var checkboxId = row[0]; // Obtener el ID dinámico desde la columna "id_checkbox"
            // Concatenar el ID dinámico en el HTML del checkbox
            row.unshift("<div class='icheck-primary d-inline'><input type='checkbox' id='" + checkboxId + "' ><label for='" + checkboxId + "'></label></div>");
          });

          if ($.fn.DataTable.isDataTable("#tabla_usuarios")) {
            // Si ya existe una instancia de DataTables, actualizar los datos
            var table = $("#tabla_usuarios").DataTable();
            table.clear().rows.add(data.data).draw();
          }
          else{
            // Inicializar la tabla con DataTables y DataTables Buttons
            var table = $("#tabla_usuarios").DataTable({
              data: data.data,
              responsive: true,
              buttons: [
                "copy", "csv", "excel", "pdf", "print", "colvis"
              ]
            }).buttons().container().appendTo("#tabla_usuarios_wrapper .col-md-6:eq(0)");
          }
        } else {         
          $("#tabla_usuarios").hide();
          console.log("No se encontraron datos en la tabla.");
        }
      },
      
      error: function (jqXHR, textStatus, errorThrown) {
        $("#tabla_usuarios").hide();
        console.log("Error al obtener los datos de la tabla.");
        // Mostrar el mensaje de error en la consola
      console.log("Error al obtener los datos de la tabla. Detalles del error:");
      console.log("Status de la solicitud: " + textStatus);
      console.log("Error arrojado: " + errorThrown);
      }
    });
    $("#logo_load_tableuser").hide();
  });

  /**
   * |||||||||||||||||||||||||||||||||||||Evento click para las celdas de cada fila|||||||||||||||||||||||||||||||||||||||||||||||||||||
   */
$('#tabla_usuarios tbody').on('click', 'tr', function () {
  // Obtener el checkbox dentro de la fila seleccionada
  var checkbox = $(this).find('.icheck-primary input[type="checkbox"]');
  
  // Cambiar el estado del checkbox (marcar o desmarcar)
  checkbox.prop('checked', !checkbox.prop('checked'));
});

  /**
   * |||||||||||||||||||||||||||||||||||||Obtener los items seleccionados|||||||||||||||||||||||||||||||||||||||||||||||||||||
   */
$('#obtenerids').on('click', function () {
  var registrosSeleccionados = [];

  // Obtener todos los checkboxes marcados
  $('.icheck-primary input[type="checkbox"]:checked').each(function () {
    // Obtener toda la información de la fila seleccionada
    var fila = $(this).closest('tr');
    var rowData = {
      id: $(this).attr('id'), // ID del registro
      columna1: fila.find('td:eq(1)').text(), // Obtener el contenido de la columna 1
      columna2: fila.find('td:eq(2)').text(), // Obtener el contenido de la columna 2
      // Agrega más columnas aquí según tus necesidades
    };
    registrosSeleccionados.push(rowData);
  });

  // Mostrar los registros seleccionados en la consola (puedes hacer algo más con ellos)
  console.log("Registros seleccionados:", registrosSeleccionados);
});
