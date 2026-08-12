// Live Search Pakai Jquery

// Koneksi ke jquery lalu cari dokumen yang siap
$(document).ready(function () {
    // Hilangkan tombol cari dengan jquery
    $('#cari').hide();

    // Membuat event ketika keyword di inputkan
    $('#keyword').on('keyup', function () {
        // Munculkan icon loading ketika data masih di proses
        $('#loading').show();
        // Ajax menggunakan load
        // $('#container').load('ajax/supercars.php?keyword=' + $('#keyword').val(), function () {
        //     $('#loading').hide();
        // });

        // Ajax pakai get
        $.get('ajax/supercars.php?keyword=' + $('#keyword').val(), function (data) {
            $('#container').html(data);
            $('#loading').hide();
        });
    });
});