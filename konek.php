<?php 
$konek=mysql_konek("licalhost","root","","penerimaan mahasiswa");
if (mysqli_connect_errno()) {
    echo "koneksi gagal " . mysqli_connect_error();
    
}
