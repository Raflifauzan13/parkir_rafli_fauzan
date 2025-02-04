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
    <table border="2">
        <tr>
            <th>id_parkir</th>
            <th>alamat</th>
            <th>harga</th>
            <th>aksi</th>
        </tr>
        <?php
            include '../../config/koneksi.php';
            $query=mysqli_query($coon, "SELECT * FROM parkir");

            if(mysqli_num_rows($query) > 0){
                while($result=mysqli_fetch_assoc($query)){
                    ?>
                    <tr>
                        <td><?php echo $result['id_parkir']?></td>
                        <td><?php echo $result['alamat']?></td>
                        <td><?php echo $result['harga']?></td>
                        <td>
                            <a href="">edit</a>
                            <a href="">hapus</a>
                        </td>
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