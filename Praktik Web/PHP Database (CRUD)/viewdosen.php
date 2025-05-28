<?php
include 'koneksi.php';   
?>
<!DOCTYPE html>
<html>
<head>
<style>
    table{
        width: 840px;
        margin: auto;
    }
    h1{
        text-align: center;
    }
</style>
</head>
<body>
    <h1>Tabel Dosen</h1>
    <center><a href="input.php">Input Data</a></center>
    <br>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nama Dosen</th>
            <th>No HP</th>
            <th>Pilihan</th>
        </tr>
        <?php
        $query = "SELECT * FROM t_dosen ORDER BY IdDosen ASC";
        $result = mysqli_query($link, $query);

        if(!$result){
            die ("Query Error: ".mysqli_errno($link).
                 " - ".mysqli_error($link));
        }

        while ($data = mysqli_fetch_assoc($result))
        {
            echo "<tr>";
            echo "<td>".$data['idDosen']."</td>"; 
            echo "<td>".$data['namaDosen']."</td>"; 
            echo "<td>".$data['noHP']."</td>"; 

            echo "<td>";
            echo "<a href='editdosen.php?idDosen=".$data['idDosen']."'>Edit</a> / ";
            echo "<a href='hapusdosen.php?idDosen=".$data['idDosen']."'
                     onclick=\"return confirm('Anda yakin akan menghapus data?')\">Hapus</a>";
            echo "</td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>
