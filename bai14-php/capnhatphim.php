<?php
    $id = $_GET['id'];
    $sql = "SELECT * FROM phim WHERE id='$id'";
    $result = mysqli_query($conn, $sql);
    $phim = mysqli_fetch_assoc($result);
    $sqlTL = "SELECT * FROM phim_the_loai WHERE phim_id='$id'";
    $resultTL = mysqli_query($conn, $sqlTL);
    $theLoaiPhim = mysqli_fetch_assoc($resultTL);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cập nhật phim</title>
</head>
<body>
<h1>Cập nhật phim</h1>
<form action="index.php?page_layout=capnhatphim&id=<?php echo $id; ?>" method="POST">
    <div>
        <input type="text" name="tenPhim"
        value="<?php echo $phim['ten_phim']; ?>" placeholder="Tên phim">
    </div>
    <div>
        <input type="text" name="quocGia"
        value="<?php echo $phim['quoc_gia']; ?>" placeholder="Quốc gia">
    </div>
    <div>
        <select name="idDaoDien">
            <?php
                $sqlDaoDien = "SELECT * FROM dao_dien";
                $resultDaoDien = mysqli_query($conn, $sqlDaoDien);
                while($rowDD = mysqli_fetch_assoc($resultDaoDien)){
            ?>
                <option value="<?php echo $rowDD['id']; ?>"
                <?php
                    if($rowDD['id'] == $phim['dao_dien_id']){
                        echo "selected";
                    }
                ?>>
                    <?php echo $rowDD['ho_ten']; ?>
                </option>
            <?php
                }
            ?>
        </select>
    </div>
    <div>
        <select name="idTheLoai">
            <?php
                $sqlTheLoai = "SELECT * FROM the_loai";
                $resultTheLoai = mysqli_query($conn, $sqlTheLoai);
                while($rowTL = mysqli_fetch_assoc($resultTheLoai)){
            ?>
                <option value="<?php echo $rowTL['id']; ?>"
                <?php
                    if(isset($theLoaiPhim['the_loai_id']) &&
                       $rowTL['id'] == $theLoaiPhim['the_loai_id']){
                        echo "selected";
                    }
                ?>>
                    <?php echo $rowTL['ten_the_loai']; ?>
                </option>
            <?php
                }
            ?>
        </select>
    </div>
    <div>
        <input type="number" name="nam"
        value="<?php echo $phim['nam']; ?>" placeholder="Năm">
    </div>
    <div>
        <input type="text" name="doTuoi"
        value="<?php echo $phim['do_tuoi']; ?>" placeholder="Độ tuổi">
    </div>
    <div>
        <input type="text" name="moTa"
        value="<?php echo $phim['mo_ta']; ?>" placeholder="Mô tả">
    </div>
    <button type="submit">Cập nhật</button>
</form>
<?php
    if(isset($_POST['tenPhim']) &&
       isset($_POST['quocGia']) &&
       isset($_POST['idDaoDien']) &&
       isset($_POST['idTheLoai']) &&
       isset($_POST['nam']) &&
       isset($_POST['doTuoi']) &&
       isset($_POST['moTa']))
    {
        $tenPhim = $_POST['tenPhim'];
        $quocGia = $_POST['quocGia'];
        $idDaoDien = $_POST['idDaoDien'];
        $idTheLoai = $_POST['idTheLoai'];
        $nam = $_POST['nam'];
        $doTuoi = $_POST['doTuoi'];
        $moTa = $_POST['moTa'];

        if(!empty($tenPhim) &&
           !empty($quocGia) &&
           !empty($idDaoDien) &&
           !empty($idTheLoai) &&
           !empty($nam) &&
           !empty($doTuoi))
        {
            $sql = "UPDATE phim
                    SET ten_phim='$tenPhim',
                        quoc_gia='$quocGia',
                        dao_dien_id='$idDaoDien',
                        nam='$nam',
                        do_tuoi='$doTuoi',
                        mo_ta='$moTa'
                    WHERE id='$id'";

            $result = mysqli_query($conn, $sql);

            if($result){

                $sqlCheck = "SELECT * FROM phim_the_loai WHERE phim_id='$id'";
                $resultCheck = mysqli_query($conn, $sqlCheck);

                if(mysqli_num_rows($resultCheck) > 0){

                    $sqlUpdateTL = "UPDATE phim_the_loai
                                    SET the_loai_id='$idTheLoai'
                                    WHERE phim_id='$id'";

                    $resultUpdateTL = mysqli_query($conn, $sqlUpdateTL);

                }else{

                    $sqlInsertTL = "INSERT INTO phim_the_loai
                                    (phim_id, the_loai_id)
                                    VALUES ('$id', '$idTheLoai')";

                    $resultUpdateTL = mysqli_query($conn, $sqlInsertTL);
                }

                if($resultUpdateTL){
                    header("Location: index.php?page_layout=phim");
                }else{
                    echo "Cập nhật thể loại thất bại!";
                }

            }else{
                echo "Cập nhật phim thất bại!";
            }
        }
        else{
            echo "<p style='color:red'>Vui lòng nhập đầy đủ thông tin</p>";
        }
    }

?>

</body>
</html>

