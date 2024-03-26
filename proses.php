<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Pengolahan</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST['nama'];
    $umur = isset($_POST['umur']) ? $_POST['umur'] : 18;
    $prodi = isset($_POST['prodi']) ? $_POST['prodi'] : "Sistem Informasi"; 
    $nilai = $_POST['nilai'];
   
    if ($nilai >= 80) {
        $grade = "A";
    } elseif ($nilai >= 70) {
        $grade = "B";
    } elseif ($nilai >= 60) {
        $grade = "C";
    } elseif ($nilai >= 50) {
        $grade = "D";
    } else {
        $grade = "E";
    }

    $hasil = $nilai >= 60 ? 'Lulus' : 'Tidak Lulus';
    ?>

    <table>
        <tr>
            <th>Atribut</th>
            <th>Nilai</th>
        </tr>
        <tr>
            <td>Nama</td>
            <td><?php echo $nama; ?></td>
        </tr>
        <tr>
            <td>Umur</td>
            <td><?php echo $umur; ?></td>
        </tr>
        <tr>
            <td>Program Studi</td>
            <td><?php echo $prodi; ?></td>
        </tr>
        <tr>
            <td>Nilai</td>
            <td><?php echo $nilai; ?></td>
        </tr>
        <tr>
            <td>Grade</td>
            <td><?php echo $grade; ?></td>
           
        </tr>
        <tr>
        <td>Hasil</td>
            <td><?php echo $hasil; ?></td>
        </tr>
    </table>
<?php
} else {
    echo "Tidak ada data yang dikirimkan.";
}
?>
</body>
</html>
