const swal = $('.swal').data('swal');
if(swal){
    Swal.fire({
        text: swal,
    })
}

function loading() {

    Swal.fire({
        html: 'Memproses...', // add html attribute if you want or remove
        allowOutsideClick: false,
        showCancelButton: false,
        showConfirmButton: false,
        willOpen: () => {
            Swal.showLoading()
        },
    });
}