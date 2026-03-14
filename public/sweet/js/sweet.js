
100%
$(".formulario-eliminar").submit(function (e) {
    e.preventDefault();
    Swal.fire({
        title: '¿Está seguro?',
        text: '¡ No podrá recuperar este registro !',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#2CB073',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Aceptar',
        cancelButtonText: 'Salir',
        reverseButtons: true,
        position: 'top',
        padding: '20px',
        backdrop: true
    }).then((result) => {
        if (result.isConfirmed) {
            this.submit();
        }
    });
});



