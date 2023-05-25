<?php
if (isset($_GET['kode'])) {
    $data_buku = $_GET['kode'];
    $file = file('DataBukuu.txt');

    foreach ($file as $key => $line) {
        $rowData = explode("-", $line);

        if ($rowData[0] === $data_buku) {
            $kode_buku = $rowData[0];
            $judul = $rowData[1];
            $pengarang = $rowData[2];
            $tahun = $rowData[3];
            $halaman = $rowData[4];
            $penerbit = $rowData[5];
            $kategori = $rowData[6];
            $cover = $rowData[7];

            unset($file[$key]);
            break;
        }
    }

    file_put_contents('DataBukuu.txt', implode("", $file));
} 

if (isset($_POST['submit'])) {
    $kode_buku = $_POST['kode_buku'];
    $judul = $_POST['judul_buku'];
    $pengarang = $_POST['pengarang'];
    $tahun = $_POST['tahun_terbit'];
    $halaman = $_POST['jumlah_halaman'];
    $penerbit = $_POST['penerbit'];
    $kategori = $_POST['kategori'];
    $cover = $_POST['cover'];

    $data_update = $kode_buku . "-" . $judul . "-" . $pengarang . "-" . $tahun . "-" . $halaman . "-" . $penerbit . "-" . $kategori . "-" . $cover . "\n";

    file_put_contents('DataBukuu.txt', $data_update, FILE_APPEND);
    header("Location: cekdatabuku.php");
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perpustakaan 094 - Update Data Buku</title>
</head>

<body>
    <h2>Update Data Buku</h2>
    <form action="updatedatabuku.php" method="POST">
        <input type="hidden" name="kode_buku" value="<?php echo $kode_buku; ?>">
        <label for="judul_buku">Judul Buku:</label><br>
        <input type="text" id="judul_buku" name="judul_buku" value="<?php echo $judul; ?>"><br><br>
        <label for="pengarang">Pengarang:</label><br>
        <input type="text" id="pengarang" name="pengarang" value="<?php echo $pengarang; ?>"><br><br>
        <label for="tahun_terbit">Tahun Terbit:</label><br>
        <input type="number" id="tahun_terbit" name="tahun_terbit" value="<?php echo $tahun; ?>"><br><br>
        <label for="jumlah_halaman">Jumlah Halaman Buku:</label><br>
        <input type="number" id="jumlah_halaman" name="jumlah_halaman" value="<?php echo $halaman; ?>"><br><br>
        <label for="penerbit">Penerbit:</label><br>
        <input type="text" id="penerbit" name="penerbit" value="<?php echo $penerbit; ?>"><br><br>
        <label for="kategori">Kategori:</label><br>
        <input type="text" id="kategori" name="kategori" value="<?php echo $kategori; ?>"><br><br>
        <label for="cover">Cover:</label><br>
        <input type="file" id="cover" name="cover" value="<?php echo $cover; ?>"><br><br>
        <input type="submit" name="submit" value="Update">
    </form>
</body>

</html>
