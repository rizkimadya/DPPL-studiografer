function nomorBarang() {
    var nomorUnit = document.getElementById("nomor_unit").value;
    var tahunBelanja = document.getElementById("tahun_belanja").value;
    var kategoriBarang = document.getElementById("kategori_barang").value;
    var urutanBarang = document.getElementById("urutan_pengadaan_barang").value;
    document.getElementById("nomor_barang").innerHTML = nomorUnit + '.' + tahunBelanja + '.' + kategoriBarang + '.' + urutanBarang;
}

function updateNomorBarang() {
    var nomorUnit = document.getElementById("nomor_unit").value;
    var tahunBelanja = document.getElementById("tahun_belanja").value;
    var kategoriBarang = document.getElementById("kategori_barang").value;
    var urutanBarang = document.getElementById("urutan_pengadaan_barang").value;
    document.getElementById("nomor_barang").innerHTML = nomorUnit + '.' + tahunBelanja + '.' + kategoriBarang + '.' + urutanBarang;
}
