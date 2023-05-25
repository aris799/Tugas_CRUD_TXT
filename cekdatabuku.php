<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perpustakaan 094</title>
    <style>
        table {
            width: 100%;
            max-width: 1000px;
            border-collapse: collapse;
            margin: 40px auto;
        }

        h2 {
            text-align: center;
        }

        tr,td {
            border: 1px solid black;
            padding: 10px;
            text-align: center;
        }

        th {
            border: 1px solid black;
            background-color: #888888;
            color: #ffffff;
        }

        .button {
            padding: 10px 20px;
            background-color: #888888;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            align-items: center;
            display: flex;
            justify-content: center;
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
    <h2>Data Buku Perpustakaan 094</h2>
    <?php
    $read = file('DataBukuu.txt');
    ?>
    <table border="1">
        <tr>
            <th>Kode Buku</th>
            <th>Judul Buku</th>
            <th>Pengarang</th>
            <th>Tahun Terbit</th>
            <th>Jumlah Halaman Buku</th>
            <th>Penerbit</th>
            <th>Kategori</th>
            <th>Cover</th>
            <th>ACTION</th>
        </tr>
        <?php
        foreach ($read as $buku) {
            $data_buku = explode("-", $buku);
            echo "<tr>";
            echo "<td>$data_buku[0]</td>";
            echo "<td>$data_buku[1]</td>";
            echo "<td>$data_buku[2]</td>";
            echo "<td>$data_buku[3]</td>";
            echo "<td>$data_buku[4]</td>";
            echo "<td>$data_buku[5]</td>";
            echo "<td>$data_buku[6]</td>";
            echo "<td>$data_buku[7]</td>";
            echo "<td>
                <a href='deletedatabuku.php?kode=$data_buku[0]'>Hapus</a>
                <a href='updatedatabuku.php?kode=$data_buku[0]'>Update</a>
                </td>";
            echo "</tr>";
        }
        ?>
    </table>
    <center>
        <br> <a href='formbuku.php'><button class="button">Form Input Data Buku</button></a>
    </center>
</body>

</html>
