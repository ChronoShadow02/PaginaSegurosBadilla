$(function () {
    ValidarfrmModal();
    ValidarfrmIndex();
    creaEventos();
    creaEventosFrmPrincipal();
});

function ValidarfrmModal() {
    $("#frmContactoModal").validate({
        rules: {
            NombreCompletoModal: {
                required: true,
            },
            EmailModal: {
                required: true,
                email: true
            },
            TelefonoModal: {
                required: true
            },
            opcionSeguro:{
                required: true
            }
        }
    });
}
function ValidarfrmIndex() {
    $("#frmContacto").validate({
        rules: {
            NombreYApellido: {
                required: true,
            },
            Email: {
                required: true,
                email: true
            },
            Telefono: {
                required: true
            }
        }
    });
}
///Crear eventos de envio de formulario en el MODAL
function creaEventos() {
    $("#btnAceptarModal").on("click", function () {
        ///se asigna el resultado del formulario
        var formulario = $("#frmContactoModal");

        ///se ejecuta la validacion
        formulario.validate();

        if (formulario.valid()) {
            ///se obtienen los datos del formulario

            var nombre = $("#txtNombreCompletoModal").val();
            var correo = $("#txtEmailModal").val();
            var telefono = $("#txtTelefonoModal").val();
            var opcionSeguro = $("#ddlopcionSeguro").val();
            ///url donde se van a enviar los datos
            var url = 'enviarcorreo.php';

            $.ajax(
                {
                    url: url,
                    type: 'post',
                    data: {
                        pnombre: nombre,
                        pcorreo: correo,
                        ptelefono: telefono,
                        popcionSeguro: opcionSeguro
                    }
                }
            ).done(function (resp) {
                if (resp > 0) {
                    Swal.fire(
                        '¡Se ha llenado el formulario correctamente!',
                        'Gracias por la información, nos estaremos comunicando pronto con usted',
                        'success'
                    )
                    $("#frmContactoModal")[0].reset();
                    $("#ModalContacto").modal("hide");
                } else {
                    Swal.fire({
                        icon: 'error',
                        title: 'Hubo un error',
                        text: 'No se pudo enviar su información',
                    })
                }
            })
        }///Fin cuando el formulario es valido
    });///Fin evento click del modal
}
function creaEventosFrmPrincipal() {
    $("#EnviarForm").on("click", function () {

        ///se asigna el resultado del formulario
        var formulario = $("#frmContacto");

        ///se ejecuta la validacion
        formulario.validate();

        if (formulario.valid()) {
            ///se obtienen los datos del formulario

            var nombre = $("#txtNombreCompleto").val();
            var correo = $("#txtEmail").val();
            var telefono = $("#txtTelefono").val();
            var seguro = $("#RadioSeguro").val();

            ///url donde se van a enviar los datos
            var url = 'enviarcorreo.php';

            $.ajax(
                {
                    url: url,
                    type: 'post',
                    data: {
                        pnombre: nombre,
                        pcorreo: correo,
                        ptelefono: telefono,
                        pseguro : seguro
                    }
                }
            ).done(function (resp) {
                if (resp > 0) {
                    Swal.fire(
                        '¡Se ha llenado el formulario correctamente!',
                        'Gracias por la información, nos estaremos comunicando pronto con usted',
                        'success'
                    )
                    $("#frmContacto")[0].reset();
                } else {
                    Swal.fire({
                        icon: 'error',
                        title: 'Hubo un error',
                        text: 'No se pudo enviar su información',
                    })
                }
            })
        }
    })
}
