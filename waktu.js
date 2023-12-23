
var hari = new Array("Senin","Selasa","Rabu","Kamis","Jumat","Sabtu","Minggu");
var bulan = new Array("Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember");
var t = new Date();
var hari_ini = hari[t.getDay()-1];
var tanggal = t.getDate();
var bulan_ini = bulan[t.getMonth()];
var tahun = t.getFullYear();

var jam = t.getHours();
var menit = t.getMinutes();
var detik = t.getSeconds();
document.getElementById("waktu").innerHTML = "<b><center>Sekarang adalah hari: "+hari_ini + ",tanggal : "+tanggal +" "+ bulan_ini+" " +tahun;
