// Live Search Pakai Ajax
// ambil element yang di butuhkan
let keyword = document.getElementById('keyword');
let btncari = document.getElementById('cari');
let container = document.getElementById('container');

// Tambahkan event ketika keyword di tulis
keyword.addEventListener('keyup', function () {
    // buat object ajax
    let xhr = new XMLHttpRequest();
    // Cek kesiapan ajax
    xhr.onreadystatechange = function () {
        if (xhr.readyState === 4 && xhr.status === 200) {
            container.innerHTML = xhr.responseText;
        }
    };
    // Eksekusi ajax
    xhr.open('GET', 'ajax/supercars.php?keyword=' + keyword.value, true);
    xhr.send();
});