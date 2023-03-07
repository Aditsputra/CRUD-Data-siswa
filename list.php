<?php 

include('connection.php');

$query = mysqli_query($connect, "SELECT * FROM users");
$results = mysqli_fetch_all($query, MYSQLI_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Siswa</title>
</head>
<body>
    <h1>Data Siswa</h1>

    <table border="1 ">
        <tr>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Umur</th>
            <th>Jenis Kelamin</th>
        </tr>

        <?php
            foreach ($results as $result) : ?>
               <tr>
               <td><?= $result['name'] ?></td>
               <td><?= $result['alamat'] ?></td>
               <td><?= $result['umur'] ?></td>
               <td><?= $result['gender'] ?></td>
               </tr>
            <?php endforeach; ?>
    </table>
    
</body>
</html>