<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Perpusatakaan 094</title>
    <style>
        .button {
            padding: 10px 20px;
            background-color: #888888;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            display: flex;
        }

        .button:hover {
            background-color: #45a049;
        }

        .button:active {
            background-color: #3e8e41;
        }
    </style>
</head>
<body>
<h2>Form Input Data Buku</h2>
    <form action="submitdatabuku.php" method="post">
        <table>
            <tr>
                <td><label for="kode">Kode Buku : </label></td>
                <td><input type="number" name="kode" id="kode"></td>
            </tr>

            <tr>
                <td><label for="judul">Judul Buku :</label></td>
                <td><input type="text" name="judul" id="judul"></td>
            </tr>

            <tr>
                <td><label for="pengarang">Pengarang :</label></td>
                <td><input type="text" name="pengarang" id="pengarang"></td>
            </tr>

            <tr>
                <td><label for="tahun">Tahun Terbit Buku : </label></td>
                <td><input type="number" name="tahun" id="tahun"></td>
            </tr>

            <tr>
                <td><label for="halaman">Jumlah Halaman Buku : </label></td>
                <td><input type="number" name="halaman" id="halaman"></td>
            </tr>

            <tr>
                <td><label for="penerbit">Penerbit : </label></td>
                <td><input type="text" name="penerbit" id="penerbit"></td>
            </tr>

            <tr>
                <td><label for="kategori">Kategori Buku</label></td>
                <td><input type="text" name="kategori" id="kategori"></td>
            </tr>
            <tr>
                <td><label for="cover">cover</label></td>
                <td><input type="file" name="cover" id="cover"></td>
            </tr>
            <tr>
                <td><input type="submit" name="submit" id="submit"></td>
            </tr>
        </table>
    </form>
    <br><br>
    <a href='cekdatabuku.php'><button class="button">Cek Data</button></a>
</body>
</html>