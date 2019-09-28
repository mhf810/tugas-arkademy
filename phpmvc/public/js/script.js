$(function () {
    $('.tombolTambah').on('click', function () {
        $('#judulModal').html('Tambah Data Mahasiswa');
        $('.modal-footer button[type=submit]').html('Tambah Data');
    });

    $('.ubahModal').on('click', function () {
        $('#judulModal').html('Ubah Data Mahasiswa');
        $('.modal-footer button[type=submit]').html('Ubah Data');

        const id = $(this).data('id');

        // ajax
        $.ajax({
            url: 'http://localhost/phpmvc/public/mahasiswa/getedit',
            data: {
                id: id
            },
            method: 'post',
            dataType: 'json',
            success: function (data) {
                $('#nama').val(data.nama);
                $('#nim').val(data.nim);
                $('#jurusan').val(data.jurusan);
                $('#email').val(data.email);
            }
        })
    });
});