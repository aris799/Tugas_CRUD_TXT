<?php
    if($_POST){
        $buku = $_POST['kode']."-".$_POST['judul']."-".$_POST['pengarang']."-".$_POST['tahun']."-".$_POST['halaman']."-".$_POST['penerbit']."-".$_POST['kategori']."-".$_POST['cover']."\n";
        $file = "DataBukuu.txt";
        if(file_put_contents($file,$buku,FILE_APPEND)>0){
            echo "Data Has Been Added Successfully!";
        }else{
            echo "Data Failed to Add!";
        }
    }

echo "<br> <a href='formbuku.php'><button>Back</button></a>";
echo "<br><br> <a href='cekdatabuku.php'><button>Cek Data</button></a>"
?>