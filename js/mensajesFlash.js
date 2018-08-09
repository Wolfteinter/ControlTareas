function mostrarMensajeFlash(clase, texto, duracion) {
    if(clase == "msj-success") {
        iziToast.success({
            title: 'OK',
            message: texto,
            position: 'bottomRight',
            timeout: duracion,
        });
    }
    else if(clase == "msj-danger") {
        iziToast.error({
            title: 'Error',
            message: texto,
            position: 'bottomRight',
            timeout: duracion,
        });
    }
    else if(clase == "msj-warning") {
        iziToast.warning({
            title: 'Advertencia',
            message: texto,
            position: 'bottomRight',
            timeout: duracion,
        });
    }
}
