<!-- Lấy giá trị trong bảng -->

<?php

include_once __DIR__ . '/../phongthuychimi/Model/Person.php';
include_once __DIR__ . '/../phongthuychimi/Model/House.php';
?>


<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $ten = test_input($_POST["ten"]);
    $gioitinh = test_input($_POST["gioitinh"]);
    $namsinh = test_input($_POST["namsinh"]);
    $dohuongnha = test_input($_POST["dohuongnha"]);
    $namlamnha = test_input($_POST["namlamnha"]);
    // $daivan = test_input($_POST["daivan"]);
}

function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>

<h2>Xem nhà</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <div>
        Tên chủ nhà: <input type="text" name="ten">
        <br><br>
        Giới Tính:
        <input type="radio" name="gioitinh" value="Nữ">Nữ
        <input type="radio" name="gioitinh" value="Nam" checked>Nam
        <br><br>
        Năm Sinh: <input type="text" name="namsinh">
        <br><br>
        Độ hướng nhà: <input type="text" name="dohuongnha">
        <br><br>
        Năm làm nhà: <input type="text" name="namlamnha">
        <br><br>
        <!-- Phi tinh: <select name="daivan">
        <option value="1">Vận 1</option>
        <option value="2">Vận 2</option>
        <option value="3">Vận 3</option>
        <option value="4">Vận 4</option>
        <option value="5">Vận 5</option>
        <option value="6">Vận 6</option>
        <option value="7">Vận 7</option>
        <option value="8">Vận 8</option>
        <option value="9" selected="selected">Vận 9</option>
    </select> -->

        <br><br>
        <input type="submit" name="submit" value="Submit">
    </div>
</form>

<?php
$ten = "A";
$gioitinh = "Nam";
$namsinh = 1989;
$dohuongnha = 175;
$namlamnha = 2024;
$baoloi = "";
?>


<!-- Tìm các thông số của chủ nhà -->

<?php

$chunha_thiencan = $chunha_diachi = $chunha_cungmenh = "";
$huong_8huong = "";
$tinhchatcung = "";
$huong_24son = $son_24son = "";
$namlam_thiencan = $namlam_diachi = $namlam_napam = "";
$xemthaitue = "";

$nguoi1 = new Person();
$nguoi1->set_name($ten);
$nguoi1->set_namsinh($namsinh);
$nguoi1->set_gioitinh($gioitinh);

// Thông tin chủ nhà
$chunha_thiencan = $nguoi1->tim_thiencan();
$chunha_diachi = $nguoi1->tim_diachi();
$chunha_cungmenh = $nguoi1->tim_cungmenh();
$chunha_napam =  $nguoi1->tim_napam();


//Thông tin năm làm nhà
$namlam = new Person();
$namlam->set_namsinh($namlamnha);
$namlam_thiencan = $namlam->tim_thiencan();
$namlam_diachi = $namlam->tim_diachi();
$namlam_napam = $namlam->tim_napam();


// Thông tin của nhà 
$huong_8huong = huongnha_8huong($dohuongnha);
$huong_24son = huongnha_24son($dohuongnha);
$son_24son = son_24son($huong_24son);
$tinhchatcung = tinhchat2cung($huong_8huong, $chunha_cungmenh);
$xemthaitue_24huong = xemthaitue_sonhuong($namlam_diachi, $huong_24son);
$xemthaitue_24son = xemthaitue_sonhuong($namlam_diachi, $son_24son);

if ($xemthaitue_24huong == "Phạm") {
    $xemthaitue = "Hướng $huong_24son Phạm";
} else if ($xemthaitue_24son == "Phạm") {
    $xemthaitue = "Sơn $son_24son Phạm";
} else {
    $xemthaitue = "Không Phạm";
}



?>

<div>
    Tên chủ nhà : <?php echo $ten; ?>
    <br>
    Năm sinh : <?php echo $namsinh; ?> - <?php echo $chunha_thiencan  . " " .  $chunha_diachi  ?>
    <br>
    Cung mệnh : <?php echo $chunha_cungmenh;  ?>
    <br>
    Niên hành: <?php echo $chunha_napam; ?>
    <br>
</div>
<br>

<div>
    Năm làm nhà : <?php echo $namlamnha; ?> - <?php echo $namlam_thiencan  . " " .  $namlam_diachi     ?>
    <br>
    Niên hành: <?php echo $namlam_napam;  ?>
    <br>


</div>

<div>
    Hướng nhà: <?php echo $dohuongnha . " - " . $huong_8huong; ?>
    <br>
    Nhà hướng: <?php echo  $huong_24son; ?> được <?php echo  $tinhchatcung; ?>
    <br>
    <?php   ?>
    <br>
    Nhà tọa sơn : <?php echo $son_24son; ?>
    <br>
    Thái Tuế: <?php echo $xemthaitue; ?>
    <br>
    Mệnh :


</div>
<br>

<?php

$diachi_nhihop = tim_nhihop($chunha_diachi);
$diachi_tamhop = tim_tamhop($chunha_diachi);

?>

<div>
    Đặt cổng :
    <br>
    1. Địa chi hợp : <?php echo $diachi_nhihop;
                        print_r($diachi_tamhop); ?>
    2. Cung cát : 

</div>

<?php echo $baoloi; ?>
<p><a href="../phongthuychimi/index.html">Home page</a></p>