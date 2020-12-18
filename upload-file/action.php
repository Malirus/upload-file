<!DOCTYPE html>
<html>
<head>
    <title>Upload File MySQL - PHP</title>
</head>
<body>
    <h1>Membuat Upload File Dengan PHP dan MySQL</h1>
    <?php
    include 'config.php';
    if($_POST['upload']){
        $ekstensi_diperbolehkan = array('png','jpg','jpeg');
        $nama = $_FILES['file']['name'];
        $x = explode('.', $nama);
        $ekstensi = strtolower(end($x));
        $ukuran = $_FILES['file']['size'];
        $file_tmp = $_FILES['file']['tmp_name'];

        $sql_insert = "INSERT INTO upload (upload) VALUES('$nama')";
        $sql_all = "select * from upload";

        if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
            if($ukuran < 1044070){
                move_uploaded_file($file_tmp, 'file/'.$nama);
                
                $query = mysqli_query($db, $sql_insert);
                
                if($query){
                    echo 'FILE BERHASIL DI UPLOAD';
                }else{
                    echo 'FILE GAGAL DI UPLOAD';
                }
            }else{
                echo 'UKURAN FILE TERLALU BESAR';
            }
        }else{
            //echo 'EKSISTENSI FILE YANG DI UPLOAD TIDAK DI PERBOLEHKAN';
            echo "<script>alert('Ekstensi gambar yang boleh hanya jpg atau png.');window.location='index.php';</script>";
        }
    }
    ?>
    <br/>
    <br/>
    <a href="index.php">Upload Baru</a>
    <br/>
    <br/>

    <table>
        <?php
        $data = mysqli_query($db, $sql_all);
        while($d = mysqli_fetch_array($data)){
        ?> 
        <tr>
            <td>
                <img src="<?php echo "file/".$d['nama_file']; ?>">
            </td>
        </tr>   
        <?php } ?>
    </table>
</body>
</html>