<!-- Lấy giá trị trong bảng -->

<?php


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
$namsinh = "1989";
$dohuongnha = "175";
$namlamnha = "2024";
$baoloi = "";
?>


<!-- Tìm các thông số của chủ nhà -->

<?php
$thongtinchunha = array("");
$thongtinnamlam = array("");
$cungmenhchu = "";
$huongnha = "";
$tinhchatcung = "";

//$thiencan = $diachi = "";
//$dohuongnha = $huongnha = 0;
$huong24 = "";
$son24 = "";

// tìm cung mệnh
include_once __DIR__ . '/../phongthuy/Info/Person.php';
include_once __DIR__ . '/../phongthuy/Info/House.php';

$thongtinchunha[1] = cungmenh($namsinh, $gioitinh);
$cungmenhchu = cungmenh($namsinh, $gioitinh);

$thongtinchunha[2] = napam($namsinh);
$thongtinnamlam[2] = napam($namlamnha);


$thongtinchunha[3] = thiencan($namsinh);
$thongtinnamlam[3] = thiencan($namlamnha);

$thongtinchunha[4] = diachi($namsinh);
$thongtinnamlam[4] = diachi($namlamnha);

$huongnha = huongnha8($dohuongnha);
$tinhchatcung = tinhchat2cung($huongnha, $cungmenhchu);
// echo $huongnha . $cungmenhchu . $tinhchatcung;


//xem hướng nhà vào tiểu hay đại không vong
if (19.5 < $dohuongnha && $dohuongnha < 25.5 || 64.5 < $dohuongnha && $dohuongnha < 69.5 || 109.5 < $dohuongnha && $dohuongnha < 115.5 || 154.5 < $dohuongnha && $dohuongnha < 159.5 || 199.5 < $dohuongnha && $dohuongnha < 205.5 || 244.5 < $dohuongnha && $dohuongnha < 249.5 || 289.5 < $dohuongnha && $dohuongnha < 295.5 || 334.5 < $dohuongnha && $dohuongnha < 339.5) {
    $tinhkhongvong = "Đại không vong";
} else if (4.5 < $dohuongnha && $dohuongnha < 10.5 || 34.5 < $dohuongnha && $dohuongnha < 40.5 || 49.5 < $dohuongnha && $dohuongnha < 55.5 || 79.5 < $dohuongnha && $dohuongnha < 85.5 || 94.5 < $dohuongnha && $dohuongnha < 100.5 || 124.5 < $dohuongnha && $dohuongnha < 130.5 || 139.5 < $dohuongnha && $dohuongnha < 145.5 || 169.5 < $dohuongnha && $dohuongnha < 175.5 || 184.5 < $dohuongnha && $dohuongnha < 190.5 || 209.5 < $dohuongnha && $dohuongnha < 215.5 || 229.5 < $dohuongnha && $dohuongnha < 235.5 || 259.5 < $dohuongnha && $dohuongnha < 265.5 || 274.5 < $dohuongnha && $dohuongnha < 280.5 || 304.5 < $dohuongnha && $dohuongnha < 310.5 || 319.5 < $dohuongnha && $dohuongnha < 325.5 || 349.5 < $dohuongnha && $dohuongnha < 355.5) {
    $tinhkhongvong = "Tiểu không vong";
} else {
    $tinhkhongvong = "";
}

// xem sơn, hướng có phạm thái tuế không
$huong24 = huongnha24($dohuongnha);
$son24 = son24($huong24);
if (xemthaitue(diachi($namlamnha), $huong24) == "Phạm") {
    $xemthaituehuong = "Hướng $huong24 Phạm";
} else if (xemthaitue(diachi($namlamnha), $son24) == "Phạm") {
    $xemthaituehuong = "Sơn $son24 Phạm";
} else {
    $xemthaituehuong = "Không Phạm";
}
?>

<div>
    Tên chủ nhà : <?php echo $ten; ?>
    <br>
    Năm sinh : <?php echo $namsinh; ?> - <?php echo $thongtinchunha[3] . $thongtinchunha[4]; ?>
    <br>
    Cung mệnh : <?php echo $thongtinchunha[1]; ?>
    <br>
    Niên hành: <?php echo $thongtinchunha[2]; ?>
    <br>
    <!-- Linh vật : <?php echo $thongtinchunha[3]; ?>
    <br>
    Can : <?php echo $thongtinchunha[4]; ?> -->
    <br>

</div>
<div>
    Năm làm nhà : <?php echo $namlamnha; ?> - <?php echo $thongtinnamlam[3] . $thongtinnamlam[4]; ?>
    <br>
    Niên hành: <?php echo $thongtinnamlam[2]; ?>
    <br>


</div>

<div>
    Hướng nhà: <?php echo $dohuongnha . " - " . huongnha8($dohuongnha); ?>
    <br>
    Nhà hướng: <?php echo  huongnha24($dohuongnha); ?> được <?php echo  $tinhchatcung; ?>
    <br>
    <?php echo $tinhkhongvong;  ?>
    <br>
    Nhà tọa sơn : <?php echo son24(huongnha24($dohuongnha)); ?>
    <br>

    Thái Tuế: <?php echo $xemthaituehuong; ?>
    <br>
    Mệnh :


</div>


<?php echo $baoloi; ?>
<p><a href="../phongthuy/index.html">Home page</a></p>