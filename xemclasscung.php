<?php
include __DIR__ . '/../phongthuychimi/Model/Cung.php';
include __DIR__ . '/../phongthuychimi/Model/Person.php';
include __DIR__ . '/../phongthuychimi/Controller/Timcacchiso.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $ten = test_input($_POST["ten"]);
    $gioitinh = test_input($_POST["gioitinh"]);
    $ngaysinh = test_input($_POST["ngaysinh"]);
    $thangsinh = test_input($_POST["thangsinh"]);
    $namsinh = test_input($_POST["namsinh"]);
    $giosinh = test_input($_POST["giosinh"]);
}

function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

$cungti = new Cung($ten, $gioitinh, $namsinh, $ngaysinh, $thangsinh, $giosinh, "Tỵ");
$cungngo = new Cung($ten, $gioitinh, $namsinh, $ngaysinh, $thangsinh, $giosinh, "Ngọ");
$cungmui = new Cung($ten, $gioitinh, $namsinh, $ngaysinh, $thangsinh, $giosinh, "Mùi");
$cungthan = new Cung($ten, $gioitinh, $namsinh, $ngaysinh, $thangsinh, $giosinh, "Thân");
$cungthin = new Cung($ten, $gioitinh, $namsinh, $ngaysinh, $thangsinh, $giosinh, "Thìn");
$cungmao = new Cung($ten, $gioitinh, $namsinh, $ngaysinh, $thangsinh, $giosinh, "Mão");
$cungdau = new Cung($ten, $gioitinh, $namsinh, $ngaysinh, $thangsinh, $giosinh, "Dậu");
$cungtuat = new Cung($ten, $gioitinh, $namsinh, $ngaysinh, $thangsinh, $giosinh, "Tuất");
$cungdan = new Cung($ten, $gioitinh, $namsinh, $ngaysinh, $thangsinh, $giosinh, "Dần");
$cungsuu = new Cung($ten, $gioitinh, $namsinh, $ngaysinh, $thangsinh, $giosinh, "Sửu");
$cungty = new Cung($ten, $gioitinh, $namsinh, $ngaysinh, $thangsinh, $giosinh, "Tý");
$cunghoi = new Cung($ten, $gioitinh, $namsinh, $ngaysinh, $thangsinh, $giosinh, "Hợi");


$nguoilap_cuc = tim_cuc($namsinh);
$nguoilap_nienmenh = timnapam($namsinh);
$nguoilap_thiencan = timthiencan($namsinh);
$nguoilap_amduong = tim_amduong($nguoilap_thiencan, $gioitinh);

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Địa bàn</title>
    <link href="Cungdiaban.css" rel="stylesheet" type="text/css">
    <link href="Model/Stylecung.css" rel="stylesheet" type="text/css">
</head>

<body>
    <nav class="navtop">
        <div>
            <h1>Lập lá số</h1>
        </div>
    </nav>
    <div class="Diaban">
        <div class="cungtren">
            <div class="Cungti">
                <?= $cungti ?>
            </div>
            <div class="Cungngo">
                <?= $cungngo ?>
            </div>
            <div class="Cungmui">
                <?= $cungmui ?>
            </div>
            <div class="Cungthan">
                <?= $cungthan ?>
            </div>

            <div class="cungpai">
                <div class="Cungthin">
                    <?= $cungthin ?>
                </div>
                <div class="Cungmao">
                    <?= $cungmao ?>
                </div>
            </div>
            <div class="thienban">
                <div>
                    Họ và tên : <?php echo $ten; ?>
                    <br>
                    Ngày Sinh : <?php echo $ngaysinh; ?>
                    <br>
                    Tháng sinh : <?php echo $thangsinh; ?>
                    <br>
                    Năm sinh : <?php echo $namsinh . " - " . $nguoilap_amduong; ?>
                    <br>
                    Giờ sinh : <?php echo $giosinh; ?>
                    <br>
                </div>
                <div>
                    Niên Mệnh : <?php echo $nguoilap_nienmenh; ?>
                    <br>
                    Cục : <?php echo $nguoilap_cuc; ?>

                </div>

            </div>

            <div class="cungtrai">
                <div class="Cungdau">
                    <?= $cungdau ?>
                </div>
                <div class="Cungtuat">
                    <?= $cungtuat ?>
                </div>
            </div>
            <div class="Cungdan">
                <?= $cungdan ?>
            </div>
            <div class="Cungsuu">
                <?= $cungsuu ?>
            </div>
            <div class="Cungty">
                <?= $cungty ?>
            </div>
            <div class="Cunghoi">
                <?= $cunghoi ?>
            </div>

        </div>
    </div>

</body>

</html>