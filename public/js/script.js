$(function() {

    $('.tampilModalTambah').on('click', function() {
        $('#FormModalLabel').html('Tambah Data Mahasiswa');
        $('.modal-footer button[type=submit]').html('Tambah Data');
    });
    $('.tampilModalUbah').on('click', function() {
        $('#FormModalLabel').html('Ubah Data Mahasiswa');
        $('.modal-footer button[type="submit"]').html('Ubah Data');
        $('.modal-body form').attr('action', 'http://localhost/myapp/public/home/ubah');

        const id = $(this).data('id');
        $.ajax({
            url: 'http://localhost/myapp/public/home/getedit/',
            data: {id: id},
            method: 'post',
            dataType: 'json',
            success: function(data) {
                $('#nama').val(data.nama);
                $('#npm').val(data.npm);
                $('#email').val(data.email);
                $('#jurusan').val(data.jurusan);
                $('#id').val(data.id);
            }
        });
    });

});