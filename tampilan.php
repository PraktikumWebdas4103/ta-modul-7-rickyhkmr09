<?php
require_once("db.php");
?>
<!DOCTYPE html>
<head>
    <title>hasil</title>
</head>
<body background="nightsky.gif_C200">
    <center>
    <h1><font color="white">DATA MAHASISWA</h1>
    <table border= "2" align="center">
        <tr>
            <td colspan="3" align="right">
                <form action="tampilan.php" method="GET">
                    <input type="hidden" name="aksi" value="search">
                    <input type="text" name="datamahasiswa">
                    <input type="submit" value="Search">
                </form>
            </td>
        </tr>
        <?php  
            if(isset($_GET['aksi']) && $_GET['aksi'] == 'search' && isset($_GET['datamahasiswa'])){
                $datamahasiswa      = $_GET['datamahasiswa'];
                $query              = "SELECT `nim`, `nama` FROM `mahasiswa` WHERE `nim` LIKE '%$datamahasiswa%' OR 'nama' LIKE '%$datamahasiswa%'";
            }else{
                $query              = "SELECT * FROM `mahasiswa`";
            }
        ?>
         <tr>
            <th>nim</th>
            <th>nama</th>
        </tr>

       <?php
            $result = mysqli_query($conn, $query);
            $row = mysqli_num_rows($result);
            if ($row > 0) {
                while ($row = mysqli_fetch_array($result)) {
                    $id = $row["nim"];
                    echo "<td>" . $row["nim"] . "</td>";
                    echo "<td>" . $row["nama"] . "</td>";
                    echo "<td>" . "<a href ='delete.php?nim=$id'>Hapus</a> </td>";
                    echo "<td>" . "<a href ='view.php?nim=$id'>deskripsi<a/></td>";
                    echo "<td>" . "<a href ='editData.php?nim=$id'>Ubah</a> </td>";
                    echo "</tr>";
                }
            }else {
                echo "<tr><td colspan='4' align='center'>0 results.</td></tr>";
            }
        ?>
    </table>
</body>
</html>