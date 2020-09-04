$(function () {
    tiempoModal();
});
var tiempo;
function tiempoModal() {
    tiempo = setTimeout(modal, 5000);
}
function modal() {
    $("#ModalContacto").modal('show');
    $("#ModalContacto").modal('toggle');
}