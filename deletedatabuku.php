<?php
if(isset($_GET['kode'])){
    $data_buku = $_GET['kode'];
    $File = 'DataBukuu.txt';
    $data = file($File);

    foreach ($data as $key => $line) {
        $rowData = explode("-", $line);

        if (trim($rowData[0]) === $data_buku) {
            unset($data[$key]);
            break; 
        }
    }

    file_put_contents($File, implode("", $data));
    
    echo "<script> 
            alert('Data Successfully Deleted');
            window.location.href = 'cekdatabuku.php';
          </script>";
}
?>
