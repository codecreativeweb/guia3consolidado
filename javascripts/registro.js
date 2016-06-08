
$(function () {
    $('#btnRegistro').click(function (e) {
        e.preventDefault();
        registrarPersona();
    });
});

function registrarPersona() {

    var idPersona = $('#idPersona').val();
    var nombre = $('#nombre').val();
    var apellido = $('#apellido').val();
    var descripcion = $('#descripcion').val();
    var idCiudad = $('#idCiudad').val();
    var idTipoPersona = $('#idTipoPersona').val();
    var correo = $('#correo').val();
    var idTipoTelefono = $('#idTipoTelefono').val();
    var idTipoDireccion = $('#idTipoPersona').val();
    var detalle = $('#detalle').val();
    var detalle2 = $('#detalle2').val();
    var contrasena = $('#contrasena').val();
    var telefono = $('#telefono').val();
    $.ajax({
        url: "php/registro.php",
        type: "POST",
        data: {
            idPersona: idPersona, nombre: nombre, apellido: apellido, descripcion: descripcion, idCiudad: idCiudad, idTipoPersona: idTipoPersona,
            correo: correo, idTipoTelefono: idTipoTelefono, telefono:telefono, idTipoDireccion: idTipoDireccion, detalle: detalle, detalle2: detalle2, contrasena: contrasena
        }
    }).done(function (respuesta) {
        alert(respuesta);
    });
}