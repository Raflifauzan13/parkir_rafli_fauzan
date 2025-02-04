<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <button onclick="pindahHalaman()">tambah data</button>

        <script>
            function pindahHalaman() {
        window.location.href = "tambah.php";
        }   
    </script>
    <table border = "2">
        <tr>
            <th>id_kendaraan</th>
            <th>id_parkir</th>
            <th>jenis_kendaraan</th>
        </tr>
        <?php
            include '../../config/koneksi.php';
            $query=mysqli_query($coon, "SELECT * FROM kendaraan");

            if(mysqli_num_rows($query) > 0){
                while($result=mysqli_fetch_assoc($query)){
                    ?>
                    <tr>
                        <td><?php echo $result['id_kendaraan']?></td>
                        <td><?php echo $result['id_parkir']?></td>
                        <td><?php echo $result['jenis_kenadaraan']?></td>
                    </tr>
                    <?php
                }
            }else{
                echo "data kosong";
            }
            ?>
    </table>
</body>
</html>