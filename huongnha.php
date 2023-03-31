<head>
    <style type="text/css">
        table,
        th,
        td {
            border: 1px solid black;
        }

        table {
            border-collapse: collapse;
            empty-cells: hide;
        }

        td {
            padding: 20px 40px;
        }
    </style>
</head>
<?php
// define variables and set to empty values
$ten = $gioitinh =  "";
$ngaysinh = $thangsinh = $namsinh = 0;
$dohuongnha = $huongnha = 0;
$huong24 = "";
$son24 = "";
$daivan = 0;
$tinhchatsao = "";
$tinhsaoson = $tinhsaohuong = "";
$tinhkhongvong = "";
$thiencan = $diachi = "";
$xemthaituehuong = $xemthaitueson = "";
//
$cachcuccan6 = $cachcuckham1 = $cachcuckham1 = $cachcuccan8 = $cachcucchan3 = $cachcucton4 = $cachcucly9 = $cachcuckhon2 = $cachcucdoai7 = "";
$numbercccan6 = $numbercckham1 = $numbercckham1 = $numbercccan8 = $numberccchan3 = $numberccton4 = $numberccly9 = $numbercckhon2 = $numberccdoai7 = 0;
$saohuongtrung = $saohuongcan6 = $saohuongdoai7 = $saohuongcan8 = $saohuongly9 = $saohuongkham1 = $saohuongkhon2 = $saohuongchan3 = $saohuongton4 = 0;
$saosontrung = $saosoncan6 = $saosondoai7 = $saosoncan8 = $saosonly9 = $saosonkham1 = $saosonkhon2 = $saosonchan3 = $saosonton4 = 0;
$huongbayson = $huongbayhuong = "";
$saovantrung = $saovancan6 = $saovandoai7 = $saovancan8 = $saovanly9 = $saovankham1 = $saovankhon2 = $saovanchan3 = $saovanton4 = 0;
//Định nghĩa các ô trên bản đồ
$can6 = $kham1 = $can8 = $chan3 = $ton4 = $ly9 = $khon2 = $doai7 = "";

//Định nghĩa
$thiencan = $diachi = "";
//Mệnh chủ
$quechu = "";
//Lỗi
$baoloi = "";

$nguhanhnapam = array("Hải trung Kim", "Hải trung Kim", "Lô trung Hỏa", "Lô trung Hỏa", "Đại lâm Mộc", "Đại lâm Mộc", "Lộ bàng Thổ", "Lộ bàng Thổ", "Kiếm phong Kim", "Kiếm phong Kim", "Sơn dầu Hỏa", "Sơn dầu Hỏa", "Giản hạ Thủy", "Giản hạ Thủy", "Thành đầu Thổ", "Thành đầu Thổ", "Bạch lạp Kim", "Bạch lạp Kim", "Dương liễu Mộc", "Dương liễu Mộc", "Tuyền trung Thủy", "Tuyền trung Thủy", "Ốc thượng Thổ", "Ốc thượng Thổ", "Tích lịch Hỏa", "Tích lịch Hỏa", "Tùng bách Mộc", "Tùng bách Mộc", "Tràng lưu Thủy", "Tràng lưu Thủy", "Sa trung Kim", "Sa trung Kim", "Sơn hạ Hỏa", "Sơn hạ Hỏa", "Bình địa Mộc", "Bình địa Mộc", "Bích thượng Thổ", "Bích thượng Thổ", "Kim bạch Kim", "Kim bạch Kim", "Phú đăng Hỏa", "Phú đăng Hỏa", "Thiên hà Thủy", "Thiên hà Thủy", "Đại trạch Thổ", "Đại trạch Thổ", "Thoa xuyến Kim", "Thoa xuyến Kim", "Tang giá Mộc", "Tang giá Mộc", "Đại khê Thủy", "Đại khê Thủy", "Sa trung Thổ", "Sa trung Thổ", "Thiên thượng Hỏa", "Thiên thượng Hỏa", "Thạch lựu Mộc", "Thạch lựu Mộc", "Đại hải Thủy", "Đại hải Thủy");

$napammenh = "";
//Lấy giá trị trong bảng
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $ten = test_input($_POST["ten"]);
    $gioitinh = test_input($_POST["gioitinh"]);
    $namsinh = test_input($_POST["namsinh"]);
    $dohuongnha = test_input($_POST["dohuongnha"]);
    $daivan = test_input($_POST["daivan"]);
}

function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>

<h2>Xem hướng nhà</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    Tên: <input type="text" name="ten">
    <br><br>
    Giới Tính:
    <input type="radio" name="gioitinh" value="Nữ">Nữ
    <input type="radio" name="gioitinh" value="Nam" checked>Nam
    <br><br>
    Năm Sinh: <input type="text" name="namsinh">
    <br><br>
    Độ hướng nhà: <input type="text" name="dohuongnha">
    <br><br>
    Phi tinh: <select name="daivan">
        <option value="1">Vận 1</option>
        <option value="2">Vận 2</option>
        <option value="3">Vận 3</option>
        <option value="4">Vận 4</option>
        <option value="5">Vận 5</option>
        <option value="6">Vận 6</option>
        <option value="7">Vận 7</option>
        <option value="8">Vận 8</option>
        <option value="9" selected="selected">Vận 9</option>
    </select>

    <br><br>
    <input type="submit" name="submit" value="Submit">
</form>

<?php

function quechu($namsinh, $gioitinh)
{
    $menhchu = array(
        "Nam" => array("Khôn", "Khảm", "Ly", "Cấn", "Đoài", "Càn", "Khôn", "Đoài", "Chấn"),
        "Nữ" => array("Tốn", "Cấn", "Càn", "Đoài", "Cấn", "Ly", "Khảm", "Khôn")
    );
    $cungphi = ((int)($namsinh / 1000) + (int)($namsinh / 100) % 10 + (int)($namsinh / 10) % 10 + $namsinh % 10) % 9;
    return $menhchu[$gioitinh][$cungphi];
};
// Tìm quẻ chủ
$quechu = quechu($namsinh, $gioitinh);




// tìm sao vận
$saovantrung = $daivan;
if ($saovantrung == 9) {
    $saovancan6 = 1;
    $saovandoai7 = 2;
    $saovancan8 = 3;
    $saovanly9 = 4;
    $saovankham1 = 5;
    $saovankhon2 = 6;
    $saovanchan3 = 7;
    $saovanton4 = 8;
} else if ($saovantrung == 8) {
    $saovancan6 = 9;
    $saovandoai7 = 1;
    $saovancan8 = 2;
    $saovanly9 = 3;
    $saovankham1 = 4;
    $saovankhon2 = 5;
    $saovanchan3 = 6;
    $saovanton4 = 7;
} else if ($saovantrung == 7) {
    $saovancan6 = 8;
    $saovandoai7 = 9;
    $saovancan8 = 1;
    $saovanly9 = 2;
    $saovankham1 = 3;
    $saovankhon2 = 4;
    $saovanchan3 = 5;
    $saovanton4 = 6;
} else if ($saovantrung == 6) {
    $saovancan6 = 7;
    $saovandoai7 = 8;
    $saovancan8 = 9;
    $saovanly9 = 1;
    $saovankham1 = 2;
    $saovankhon2 = 3;
    $saovanchan3 = 4;
    $saovanton4 = 5;
} else if ($saovantrung == 5) {
    $saovancan6 = 6;
    $saovandoai7 = 7;
    $saovancan8 = 8;
    $saovanly9 = 9;
    $saovankham1 = 1;
    $saovankhon2 = 2;
    $saovanchan3 = 3;
    $saovanton4 = 4;
} else if ($saovantrung == 4) {
    $saovancan6 = 5;
    $saovandoai7 = 6;
    $saovancan8 = 7;
    $saovanly9 = 8;
    $saovankham1 = 9;
    $saovankhon2 = 1;
    $saovanchan3 = 2;
    $saovanton4 = 3;
} else if ($saovantrung == 3) {
    $saovancan6 = 4;
    $saovandoai7 = 5;
    $saovancan8 = 6;
    $saovanly9 = 7;
    $saovankham1 = 8;
    $saovankhon2 = 9;
    $saovanchan3 = 1;
    $saovanton4 = 2;
} else if ($saovantrung == 2) {
    $saovancan6 = 3;
    $saovandoai7 = 4;
    $saovancan8 = 5;
    $saovanly9 = 6;
    $saovankham1 = 7;
    $saovankhon2 = 8;
    $saovanchan3 = 9;
    $saovanton4 = 1;
} else if ($saovantrung == 1) {
    $saovancan6 = 2;
    $saovandoai7 = 3;
    $saovancan8 = 4;
    $saovanly9 = 5;
    $saovankham1 = 6;
    $saovankhon2 = 7;
    $saovanchan3 = 8;
    $saovanton4 = 9;
} else {

    $baoloi .= "Lỗi tìm sao trung cung";
}
// Tìm Hướng nhà qua độ
function huongnha8($dohuongnha)
{
    $huongnha8 = array("Khảm", "Cấn", "Chấn", "Tốn", "Ly", "Khôn", "Đoài", "Càn");
    if ($dohuongnha <= 360 && 0 <= $dohuongnha) {
        $sodu = 0;
        if ($dohuongnha >= 337.5) {
            $sodu = 0;
        } else {
            $sodu = floor(($dohuongnha + 22.5) / 45);
        }

        return $huongnha8[$sodu];
    } else {
        return "Nhập sai độ hướng nhà";
    }


    $huongnha = array(
        "Càn" => array(6, "Tuất", "Càn", "Hợi"),
        "Khảm" => array(1, "Nhâm", "Tý", "Quý"),
        "Cấn" => array(8, "Sửu", "Cấn", "Dần"),
        "Chấn" => array(3, "Giáp", "Mão", "Ất"),
        "Tốn" => array(4, "Thìn", "Tốn", "Tỵ"),
        "Ly" => array(9, "Bính", "Ngọ", "Đinh"),
        "Khôn" => array(2, "Mùi", "Khôn", "Thân"),
        "Đoài" => array(7, "Canh", "Dậu", "Tân")
    );

    $huong24 = array("Nhâm", "Tý", "Quý", "Sửu", "Cấn", "Dần", "Giáp", "Mão", "Ất", "Thìn", "Tốn", "Tỵ", "Bính", "Ngọ", "Đinh", "Mùi", "Khôn", "Thân", "Canh", "Dậu", "Tân", "Tuất", "Càn", "Hợi");
}

$huongnha = huongnha8($dohuongnha);

// Tìm Hướng nhà qua độ theo 24 sơn hướng
function huongnha24($dohuongnha)
{

    $huong24 = array("Tý" , "Quý", "Sửu", "Cấn", "Dần", "Giáp", "Mão", "Ất", "Thìn", "Tốn", "Tỵ", "Bính", "Ngọ", "Đinh", "Mùi", "Khôn", "Thân", "Canh", "Dậu", "Tân", "Tuất", "Càn", "Hợi", "Nhâm");

    if ($dohuongnha <= 360 && 0 <= $dohuongnha) {
        $sodu = 0;
        $so1 = $so2 = 0;
        if ($dohuongnha >= 352.5) {
            $sodu = 0;
        } else {
            $sodu = floor(($dohuongnha + 7.5) / 15);
        }

        return $huong24[$sodu];
    } else {
        return "Nhập sai độ hướng nhà";
    }   
}

$huong24 = huongnha24($dohuongnha);

// Tìm sơn sau khi biết hướng
function son24($huong){
    
    $huongson = array("Tý" => "Ngọ" , "Quý"=>"Đinh", "Sửu"=>"Mùi", "Cấn"=>"Khôn", "Dần"=>"Thân", "Giáp"=>"Canh", "Mão"=>"Dậu", "Ất"=>"Tân", "Thìn"=>"Tuất", "Tốn"=>"Càn", "Tỵ"=>"Hợi", "Bính"=>"Nhâm", "Ngọ"=>"Tý", "Đinh"=>"Quý", "Mùi"=>"Sửu", "Khôn"=>"Cấn", "Thân"=>"Dần", "Canh"=>"Giáp", "Dậu"=>"Mão", "Tân"=>"Ất", "Tuất"=>"Thìn", "Càn"=>"Tốn", "Hợi"=>"Tỵ", "Nhâm"=>"Bính");
    return $huongson[$huong];
}
$son24 = son24($huong24);

/*độ hướng nhà
if (352.5 < $dohuongnha && $dohuongnha <= 360 || 0 <= $dohuongnha && $dohuongnha <= 7.5) {
    $huongnha = "Khảm";
    $huong24 = "Tý";
    $son24 = "Ngọ";
    $saohuongtrung = $saovankham1;
    $saosontrung = $saovanly9;
    $tinhchatsao = "Âm";
} else if (7.5 < $dohuongnha && $dohuongnha <= 22.5) {
    $huongnha = "Khảm";
    $huong24 = "Quý";
    $son24 = "Đinh";
    $saohuongtrung = $saovankham1;
    $saosontrung = $saovanly9;
    $tinhchatsao = "Âm";
} else if (22.5 < $dohuongnha && $dohuongnha <= 37.5) {
    $huongnha = "Cấn";
    $huong24 = "Sửu";
    $son24 = "Mùi";
    $saohuongtrung = $saovancan8;
    $saosontrung = $saovankhon2;
    $tinhchatsao = "Âm";
} else if (37.5 < $dohuongnha && $dohuongnha <= 52.5) {
    $huongnha = "Cấn";
    $huong24 = "Cấn";
    $son24 = "Khôn";
    $saohuongtrung = $saovancan8;
    $saosontrung = $saovankhon2;
    $tinhchatsao = "Dương";
} else if (52.5 < $dohuongnha && $dohuongnha <= 67.5) {
    $huongnha = "Cấn";
    $huong24 = "Dần";
    $son24 = "Thân";
    $saohuongtrung = $saovancan8;
    $saosontrung = $saovankhon2;
    $tinhchatsao = "Dương";
} else if (67.5 < $dohuongnha && $dohuongnha <= 82.5) {
    $huongnha = "Chấn";
    $huong24 = "Giáp";
    $son24 = "Canh";
    $saohuongtrung = $saovanchan3;
    $saosontrung = $saovandoai7;
    $tinhchatsao = "Dương";
} else if (82.5 < $dohuongnha && $dohuongnha <= 97.5) {
    $huongnha = "Chấn";
    $huong24 = "Mão";
    $son24 = "Dậu";
    $tinhchatsao = "Âm";
    $saohuongtrung = $saovanchan3;
    $saosontrung = $saovandoai7;
} else if (97.5 < $dohuongnha && $dohuongnha <= 112.5) {
    $huongnha = "Chấn";
    $huong24 = "Ất";
    $son24 = "Tân";
    $tinhchatsao = "Âm";
    $saohuongtrung = $saovanchan3;
    $saosontrung = $saovandoai7;
} else if (112.5 < $dohuongnha && $dohuongnha <= 127.5) {
    $huongnha = "Tốn";
    $huong24 = "Thìn";
    $son24 = "Tuất";
    $saohuongtrung = $saovanton4;
    $saosontrung = $saovancan6;
    $tinhchatsao = "Âm";
} else if (127.5 < $dohuongnha && $dohuongnha <= 142.5) {
    $huongnha = "Tốn";
    $huong24 = "Tốn";
    $son24 = "Càn";
    $saohuongtrung = $saovanton4;
    $saosontrung = $saovancan6;
    $tinhchatsao = "Dương";
} else if (142.5 < $dohuongnha && $dohuongnha <= 157.5) {
    $huongnha = "Tốn";
    $huong24 = "Tỵ";
    $son24 = "Hợi";
    $saohuongtrung = $saovanton4;
    $saosontrung = $saovancan6;
    $tinhchatsao = "Dương";
} else if (157.5 < $dohuongnha && $dohuongnha <= 172.5) {
    $huongnha = "Ly";
    $huong24 = "Bính";
    $son24 = "Nhâm";
    $saohuongtrung = $saovanly9;
    $saosontrung = $saovankham1;
    $tinhchatsao = "Dương";
} else if (172.5 < $dohuongnha && $dohuongnha <= 187.5) {
    $huongnha = "Ly";
    $huong24 = "Ngọ";
    $son24 = "Tý";
    $saohuongtrung = $saovanly9;
    $saosontrung = $saovankham1;
    $tinhchatsao = "Âm";
} else if (187.5 < $dohuongnha && $dohuongnha <= 202.5) {
    $huongnha = "Ly";
    $huong24 = "Đinh";
    $son24 = "Quý";
    $saohuongtrung = $saovanly9;
    $saosontrung = $saovankham1;
    $tinhchatsao = "Âm";
} else if (202.5 < $dohuongnha && $dohuongnha <= 217.5) {
    $huongnha = "Khôn";
    $huong24 = "Mùi";
    $son24 = "Sửu";
    $saohuongtrung = $saovankhon2;
    $saosontrung = $saovancan8;
    $tinhchatsao = "Âm";
} else if (217.5 < $dohuongnha && $dohuongnha <= 232.5) {
    $huongnha = "Khôn";
    $huong24 = "Khôn";
    $son24 = "Cấn";
    $saohuongtrung = $saovankhon2;
    $saosontrung = $saovancan8;
    $tinhchatsao = "Dương";
} else if (232.5 < $dohuongnha && $dohuongnha <= 247.5) {
    $huongnha = "Khôn";
    $huong24 = "Thân";
    $son24 = "Dần";
    $saohuongtrung = $saovankhon2;
    $saosontrung = $saovancan8;
    $tinhchatsao = "Dương";
} else if (247.5 < $dohuongnha && $dohuongnha <= 262.5) {
    $huongnha = "Đoài";
    $huong24 = "Canh";
    $son24 = "Giáp";
    $saohuongtrung = $saovandoai7;
    $saosontrung = $saovanchan3;
    $tinhchatsao = "Dương";
} else if (262.5 < $dohuongnha && $dohuongnha <= 277.5) {
    $huongnha = "Đoài";
    $huong24 = "Dậu";
    $son24 = "Mão";
    $saohuongtrung = $saovandoai7;
    $saosontrung = $saovanchan3;
    $tinhchatsao = "Âm";
} else if (277.5 < $dohuongnha && $dohuongnha <= 292.5) {
    $huongnha = "Đoài";
    $huong24 = "Tân";
    $son24 = "Ất";
    $saohuongtrung = $saovandoai7;
    $saosontrung = $saovanchan3;
    $tinhchatsao = "Âm";
} else if (292.5 < $dohuongnha && $dohuongnha <= 307.5) {
    $huongnha = "Càn";
    $huong24 = "Tuất";
    $son24 = "Thìn";
    $saohuongtrung = $saovancan6;
    $saosontrung = $saovanton4;
    $tinhchatsao = "Âm";
} else if (307.5 < $dohuongnha && $dohuongnha <= 322.5) {
    $huongnha = "Càn";
    $huong24 = "Càn";
    $son24 = "Tốn";
    $saohuongtrung = $saovancan6;
    $saosontrung = $saovanton4;
    $tinhchatsao = "Dương";
} else if (322.5 < $dohuongnha && $dohuongnha <= 337.5) {
    $huongnha = "Càn";
    $huong24 = "Hợi";
    $son24 = "Tỵ";
    $saohuongtrung = $saovancan6;
    $saosontrung = $saovanton4;
    $tinhchatsao = "Dương";
} else if (337.5 < $dohuongnha && $dohuongnha <= 352.5) {
    $huongnha = "Khảm";
    $huong24 = "Nhâm";
    $son24 = "Bính";
    $saohuongtrung = $saovankham1;
    $saosontrung = $saovanly9;
    $tinhchatsao = "Dương";
} else {
    $baoloi .= "Lỗi độ hướng nhà < 360 ";
}*/

// xem sao hướng phi thuận hay nghịch

if ($saohuongtrung == 5) {
    $tinhsaohuong = $tinhchatsao;
} else if ($saohuongtrung == 1 || $saohuongtrung == 9 || $saohuongtrung == 3 || $saohuongtrung == 7) {
    if ($huong24 == "Nhâm" || $huong24 == "Sửu" || $huong24 == "Giáp" || $huong24 == "Thìn" || $huong24 == "Bính" || $huong24 == "Mùi" || $huong24 == "Canh" || $huong24 == "Tuất") {
        $tinhsaohuong = "Dương";
    } else {
        $tinhsaohuong = "Âm";
    }
} else if ($saohuongtrung == 2 || $saohuongtrung == 4 || $saohuongtrung == 6 || $saohuongtrung == 8) {
    if ($huong24 == "Nhâm" || $huong24 == "Sửu" || $huong24 == "Giáp" || $huong24 == "Thìn" || $huong24 == "Bính" || $huong24 == "Mùi" || $huong24 == "Canh" || $huong24 == "Tuất") {
        $tinhsaohuong = "Âm";
    } else {
        $tinhsaohuong = "Dương";
    }
} else {

    $baoloi .= "Lỗi sao hướng";
}

// xem sao sơn, hướng phi thuận hay nghịch

if ($saosontrung == 5) {
    $tinhsaoson = $tinhchatsao;
} else if ($saosontrung == 1 || $saosontrung == 9 || $saosontrung == 3 || $saosontrung == 7) {
    if ($son24 == "Nhâm" || $son24 == "Sửu" || $son24 == "Giáp" || $son24 == "Thìn" || $son24 == "Bính" || $son24 == "Mùi" || $son24 == "Canh" || $son24 == "Tuất") {
        $tinhsaoson = "Dương";
    } else {
        $tinhsaoson = "Âm";
    }
} else if ($saosontrung == 2 || $saosontrung == 4 || $saosontrung == 6 || $saosontrung == 8) {
    if ($son24 == "Nhâm" || $son24 == "Sửu" || $son24 == "Giáp" || $son24 == "Thìn" || $son24 == "Bính" || $son24 == "Mùi" || $son24 == "Canh" || $son24 == "Tuất") {
        $tinhsaoson = "Âm";
    } else {
        $tinhsaoson = "Dương";
    }
} else {

    $baoloi .= "Lỗi sao Sơn";
}


// phi tinh sao hướng
if ($tinhsaohuong == "Dương") {
    if ($saohuongtrung == 9) {
        $saohuongcan6 = 1;
        $saohuongdoai7 = 2;
        $saohuongcan8 = 3;
        $saohuongly9 = 4;
        $saohuongkham1 = 5;
        $saohuongkhon2 = 6;
        $saohuongchan3 = 7;
        $saohuongton4 = 8;
    } else if ($saohuongtrung == 8) {
        $saohuongcan6 = 9;
        $saohuongdoai7 = 1;
        $saohuongcan8 = 2;
        $saohuongly9 = 3;
        $saohuongkham1 = 4;
        $saohuongkhon2 = 5;
        $saohuongchan3 = 6;
        $saohuongton4 = 7;
    } else if ($saohuongtrung == 7) {
        $saohuongcan6 = 8;
        $saohuongdoai7 = 9;
        $saohuongcan8 = 1;
        $saohuongly9 = 2;
        $saohuongkham1 = 3;
        $saohuongkhon2 = 4;
        $saohuongchan3 = 5;
        $saohuongton4 = 6;
    } else if ($saohuongtrung == 6) {
        $saohuongcan6 = 7;
        $saohuongdoai7 = 8;
        $saohuongcan8 = 9;
        $saohuongly9 = 1;
        $saohuongkham1 = 2;
        $saohuongkhon2 = 3;
        $saohuongchan3 = 4;
        $saohuongton4 = 5;
    } else if ($saohuongtrung == 5) {
        $saohuongcan6 = 6;
        $saohuongdoai7 = 7;
        $saohuongcan8 = 8;
        $saohuongly9 = 9;
        $saohuongkham1 = 1;
        $saohuongkhon2 = 2;
        $saohuongchan3 = 3;
        $saohuongton4 = 4;
    } else if ($saohuongtrung == 4) {
        $saohuongcan6 = 5;
        $saohuongdoai7 = 6;
        $saohuongcan8 = 7;
        $saohuongly9 = 8;
        $saohuongkham1 = 9;
        $saohuongkhon2 = 1;
        $saohuongchan3 = 2;
        $saohuongton4 = 3;
    } else if ($saohuongtrung == 3) {
        $saohuongcan6 = 4;
        $saohuongdoai7 = 5;
        $saohuongcan8 = 6;
        $saohuongly9 = 7;
        $saohuongkham1 = 8;
        $saohuongkhon2 = 9;
        $saohuongchan3 = 1;
        $saohuongton4 = 2;
    } else if ($saohuongtrung == 2) {
        $saohuongcan6 = 3;
        $saohuongdoai7 = 4;
        $saohuongcan8 = 5;
        $saohuongly9 = 6;
        $saohuongkham1 = 7;
        $saohuongkhon2 = 8;
        $saohuongchan3 = 9;
        $saohuongton4 = 1;
    } else if ($saohuongtrung == 1) {
        $saohuongcan6 = 2;
        $saohuongdoai7 = 3;
        $saohuongcan8 = 4;
        $saohuongly9 = 5;
        $saohuongkham1 = 6;
        $saohuongkhon2 = 7;
        $saohuongchan3 = 8;
        $saohuongton4 = 9;
    } else {

        $baoloi .= "Lỗi tìm sao hướng";
    }
} else if ($tinhsaohuong == "Âm") {
    if ($saohuongtrung == 9) {
        $saohuongcan6 = 8;
        $saohuongdoai7 = 7;
        $saohuongcan8 = 6;
        $saohuongly9 = 5;
        $saohuongkham1 = 4;
        $saohuongkhon2 = 3;
        $saohuongchan3 = 2;
        $saohuongton4 = 1;
    } else if ($saohuongtrung == 8) {
        $saohuongcan6 = 7;
        $saohuongdoai7 = 6;
        $saohuongcan8 = 5;
        $saohuongly9 = 4;
        $saohuongkham1 = 3;
        $saohuongkhon2 = 2;
        $saohuongchan3 = 1;
        $saohuongton4 = 9;
    } else if ($saohuongtrung == 7) {
        $saohuongcan6 = 6;
        $saohuongdoai7 = 5;
        $saohuongcan8 = 4;
        $saohuongly9 = 3;
        $saohuongkham1 = 2;
        $saohuongkhon2 = 1;
        $saohuongchan3 = 9;
        $saohuongton4 = 8;
    } else if ($saohuongtrung == 6) {
        $saohuongcan6 = 5;
        $saohuongdoai7 = 4;
        $saohuongcan8 = 3;
        $saohuongly9 = 2;
        $saohuongkham1 = 1;
        $saohuongkhon2 = 9;
        $saohuongchan3 = 8;
        $saohuongton4 = 7;
    } else if ($saohuongtrung == 5) {
        $saohuongcan6 = 4;
        $saohuongdoai7 = 3;
        $saohuongcan8 = 2;
        $saohuongly9 = 1;
        $saohuongkham1 = 9;
        $saohuongkhon2 = 8;
        $saohuongchan3 = 7;
        $saohuongton4 = 6;
    } else if ($saohuongtrung == 4) {
        $saohuongcan6 = 3;
        $saohuongdoai7 = 2;
        $saohuongcan8 = 1;
        $saohuongly9 = 9;
        $saohuongkham1 = 8;
        $saohuongkhon2 = 7;
        $saohuongchan3 = 6;
        $saohuongton4 = 5;
    } else if ($saohuongtrung == 3) {
        $saohuongcan6 = 2;
        $saohuongdoai7 = 1;
        $saohuongcan8 = 9;
        $saohuongly9 = 8;
        $saohuongkham1 = 7;
        $saohuongkhon2 = 6;
        $saohuongchan3 = 5;
        $saohuongton4 = 4;
    } else if ($saohuongtrung == 2) {
        $saohuongcan6 = 1;
        $saohuongdoai7 = 9;
        $saohuongcan8 = 8;
        $saohuongly9 = 7;
        $saohuongkham1 = 6;
        $saohuongkhon2 = 5;
        $saohuongchan3 = 4;
        $saohuongton4 = 3;
    } else if ($saohuongtrung == 1) {
        $saohuongcan6 = 9;
        $saohuongdoai7 = 8;
        $saohuongcan8 = 7;
        $saohuongly9 = 6;
        $saohuongkham1 = 5;
        $saohuongkhon2 = 4;
        $saohuongchan3 = 3;
        $saohuongton4 = 2;
    } else {

        $baoloi .= "Lỗi tìm sao hướng";
    }
} else {
    $baoloi .= "Lỗi tìm đường đi của sao hướng";
}


// phi tinh sao sơn
if ($tinhsaoson == "Dương") {
    if ($saosontrung == 9) {
        $saosoncan6 = 1;
        $saosondoai7 = 2;
        $saosoncan8 = 3;
        $saosonly9 = 4;
        $saosonkham1 = 5;
        $saosonkhon2 = 6;
        $saosonchan3 = 7;
        $saosonton4 = 8;
    } else if ($saosontrung == 8) {
        $saosoncan6 = 9;
        $saosondoai7 = 1;
        $saosoncan8 = 2;
        $saosonly9 = 3;
        $saosonkham1 = 4;
        $saosonkhon2 = 5;
        $saosonchan3 = 6;
        $saosonton4 = 7;
    } else if ($saosontrung == 7) {
        $saosoncan6 = 8;
        $saosondoai7 = 9;
        $saosoncan8 = 1;
        $saosonly9 = 2;
        $saosonkham1 = 3;
        $saosonkhon2 = 4;
        $saosonchan3 = 5;
        $saosonton4 = 6;
    } else if ($saosontrung == 6) {
        $saosoncan6 = 7;
        $saosondoai7 = 8;
        $saosoncan8 = 9;
        $saosonly9 = 1;
        $saosonkham1 = 2;
        $saosonkhon2 = 3;
        $saosonchan3 = 4;
        $saosonton4 = 5;
    } else if ($saosontrung == 5) {
        $saosoncan6 = 6;
        $saosondoai7 = 7;
        $saosoncan8 = 8;
        $saosonly9 = 9;
        $saosonkham1 = 1;
        $saosonkhon2 = 2;
        $saosonchan3 = 3;
        $saosonton4 = 4;
    } else if ($saosontrung == 4) {
        $saosoncan6 = 5;
        $saosondoai7 = 6;
        $saosoncan8 = 7;
        $saosonly9 = 8;
        $saosonkham1 = 9;
        $saosonkhon2 = 1;
        $saosonchan3 = 2;
        $saosonton4 = 3;
    } else if ($saosontrung == 3) {
        $saosoncan6 = 4;
        $saosondoai7 = 5;
        $saosoncan8 = 6;
        $saosonly9 = 7;
        $saosonkham1 = 8;
        $saosonkhon2 = 9;
        $saosonchan3 = 1;
        $saosonton4 = 2;
    } else if ($saosontrung == 2) {
        $saosoncan6 = 3;
        $saosondoai7 = 4;
        $saosoncan8 = 5;
        $saosonly9 = 6;
        $saosonkham1 = 7;
        $saosonkhon2 = 8;
        $saosonchan3 = 9;
        $saosonton4 = 1;
    } else if ($saosontrung == 1) {
        $saosoncan6 = 2;
        $saosondoai7 = 3;
        $saosoncan8 = 4;
        $saosonly9 = 5;
        $saosonkham1 = 6;
        $saosonkhon2 = 7;
        $saosonchan3 = 8;
        $saosonton4 = 9;
    } else {

        $baoloi .= "Lỗi tìm sao sơn";
    }
} else if ($tinhsaoson == "Âm") {
    if ($saosontrung == 9) {
        $saosoncan6 = 8;
        $saosondoai7 = 7;
        $saosoncan8 = 6;
        $saosonly9 = 5;
        $saosonkham1 = 4;
        $saosonkhon2 = 3;
        $saosonchan3 = 2;
        $saosonton4 = 1;
    } else if ($saosontrung == 8) {
        $saosoncan6 = 7;
        $saosondoai7 = 6;
        $saosoncan8 = 5;
        $saosonly9 = 4;
        $saosonkham1 = 3;
        $saosonkhon2 = 2;
        $saosonchan3 = 1;
        $saosonton4 = 9;
    } else if ($saosontrung == 7) {
        $saosoncan6 = 6;
        $saosondoai7 = 5;
        $saosoncan8 = 4;
        $saosonly9 = 3;
        $saosonkham1 = 2;
        $saosonkhon2 = 1;
        $saosonchan3 = 9;
        $saosonton4 = 8;
    } else if ($saosontrung == 6) {
        $saosoncan6 = 5;
        $saosondoai7 = 4;
        $saosoncan8 = 3;
        $saosonly9 = 2;
        $saosonkham1 = 1;
        $saosonkhon2 = 9;
        $saosonchan3 = 8;
        $saosonton4 = 7;
    } else if ($saosontrung == 5) {
        $saosoncan6 = 4;
        $saosondoai7 = 3;
        $saosoncan8 = 2;
        $saosonly9 = 1;
        $saosonkham1 = 9;
        $saosonkhon2 = 8;
        $saosonchan3 = 7;
        $saosonton4 = 6;
    } else if ($saosontrung == 4) {
        $saosoncan6 = 3;
        $saosondoai7 = 2;
        $saosoncan8 = 1;
        $saosonly9 = 9;
        $saosonkham1 = 8;
        $saosonkhon2 = 7;
        $saosonchan3 = 6;
        $saosonton4 = 5;
    } else if ($saosontrung == 3) {
        $saosoncan6 = 2;
        $saosondoai7 = 1;
        $saosoncan8 = 9;
        $saosonly9 = 8;
        $saosonkham1 = 7;
        $saosonkhon2 = 6;
        $saosonchan3 = 5;
        $saosonton4 = 4;
    } else if ($saosontrung == 2) {
        $saosoncan6 = 1;
        $saosondoai7 = 9;
        $saosoncan8 = 8;
        $saosonly9 = 7;
        $saosonkham1 = 6;
        $saosonkhon2 = 5;
        $saosonchan3 = 4;
        $saosonton4 = 3;
    } else if ($saosontrung == 1) {
        $saosoncan6 = 9;
        $saosondoai7 = 8;
        $saosoncan8 = 7;
        $saosonly9 = 6;
        $saosonkham1 = 5;
        $saosonkhon2 = 4;
        $saosonchan3 = 3;
        $saosonton4 = 2;
    } else {

        $baoloi .= "Lỗi tìm sao sơn";
    }
} else {
    $baoloi .= "Lỗi tìm đường đi của sao sơn";
}


//xem hướng nhà vào tiểu hay đại không vong
if (19.5 < $dohuongnha && $dohuongnha < 25.5 || 64.5 < $dohuongnha && $dohuongnha < 69.5 || 109.5 < $dohuongnha && $dohuongnha < 115.5 || 154.5 < $dohuongnha && $dohuongnha < 159.5 || 199.5 < $dohuongnha && $dohuongnha < 205.5 || 244.5 < $dohuongnha && $dohuongnha < 249.5 || 289.5 < $dohuongnha && $dohuongnha < 295.5 || 334.5 < $dohuongnha && $dohuongnha < 339.5) {
    $tinhkhongvong = "Đại không vong";
} else if (4.5 < $dohuongnha && $dohuongnha < 10.5 || 34.5 < $dohuongnha && $dohuongnha < 40.5 || 49.5 < $dohuongnha && $dohuongnha < 55.5 || 79.5 < $dohuongnha && $dohuongnha < 85.5 || 94.5 < $dohuongnha && $dohuongnha < 100.5 || 124.5 < $dohuongnha && $dohuongnha < 130.5 || 139.5 < $dohuongnha && $dohuongnha < 145.5 || 169.5 < $dohuongnha && $dohuongnha < 175.5 || 184.5 < $dohuongnha && $dohuongnha < 190.5 || 209.5 < $dohuongnha && $dohuongnha < 215.5 || 229.5 < $dohuongnha && $dohuongnha < 235.5 || 259.5 < $dohuongnha && $dohuongnha < 265.5 || 274.5 < $dohuongnha && $dohuongnha < 280.5 || 304.5 < $dohuongnha && $dohuongnha < 310.5 || 319.5 < $dohuongnha && $dohuongnha < 325.5 || 349.5 < $dohuongnha && $dohuongnha < 355.5) {
    $tinhkhongvong = "Tiểu không vong";
} else {
    $tinhkhongvong = "";
}

//xem hướng nhà với mệnh chủ

if ($quechu == "Càn") {
    $can6 = "Phục Vị";
    $kham1 = "Lục Sát";
    $can8 = "Thiên Y";
    $chan3 = "Ngũ Quỷ";
    $ton4 = "Họa hại";
    $ly9 = "Tuyệt Mệnh";
    $khon2 = "Diên Niên";
    $doai7 = "Sinh khí";
} else if ($quechu == "Khôn") {
    $can6 = "Diên Niên";
    $kham1 = "Tuyệt Mệnh";
    $can8 = "Sinh khí";
    $chan3 = "Họa hại";
    $ton4 = "Ngũ Quỷ";
    $ly9 = "Lục Sát";
    $khon2 = "Phục Vị";
    $doai7 = "Thiên Y";
} else if ($quechu == "Tốn") {
    $can6 = "Họa hại";
    $kham1 = "Sinh khí";
    $can8 = "Tuyệt Mệnh";
    $chan3 = "Diên Niên";
    $ton4 = "Phục Vị";
    $ly9 = "Thiên Y";
    $khon2 = "Ngũ Quỷ";
    $doai7 = "Lục Sát";
} else if ($quechu == "Cấn") {
    $can6 = "Thiên Y";
    $kham1 = "Ngũ Quỷ";
    $can8 = "Phục Vị";
    $chan3 = "Lục Sát";
    $ton4 = "Tuyệt Mệnh";
    $ly9 = "Họa hại";
    $khon2 = "Sinh khí";
    $doai7 = "Diên Niên";
} else if ($quechu == "Đoài") {
    $can6 = "Sinh khí";
    $kham1 = "Họa hại";
    $can8 = "Diên Niên";
    $chan3 = "Tuyệt Mệnh";
    $ton4 = "Lục Sát";
    $ly9 = "Ngũ Quỷ";
    $khon2 = "Thiên Y";
    $doai7 = "Phục Vị";
} else if ($quechu == "Ly") {
    $can6 = "Tuyệt Mệnh";
    $kham1 = "Diên Niên";
    $can8 =  "Họa hại";
    $chan3 = "Sinh khí";
    $ton4 = "Thiên Y";
    $ly9 = "Phục Vị";
    $khon2 = "Lục Sát";
    $doai7 = "Ngũ Quỷ";
} else if ($quechu == "Khảm") {
    $can6 = "Lục Sát";
    $kham1 = "Phục Vị";
    $can8 = "Ngũ Quỷ";
    $chan3 = "Thiên Y";
    $ton4 = "Sinh khí";
    $ly9 = "Diên Niên";
    $khon2 = "Tuyệt Mệnh";
    $doai7 = "Họa hại";
} else if ($quechu == "Chấn") {
    $can6 = "Ngũ Quỷ";
    $kham1 = "Thiên Y";
    $can8 = "Lục Sát";
    $chan3 = "Phục Vị";
    $ton4 = "Diên Niên";
    $ly9 = "Sinh khí";
    $khon2 = "Họa hại";
    $doai7 = "Tuyệt Mệnh";
} else {
    $baoloi .= "Lỗi quẻ chủ ở ";
}

//16 các cục
$numberccton4 = "$saosonton4$saohuongton4";
$numberccly9 = "$saosonly9$saohuongly9";
$numbercckhon2 = "$saosonkhon2$saohuongkhon2";
$numberccdoai7 = "$saosondoai7$saohuongdoai7";
$numbercccan6 = "$saosoncan6$saohuongcan6";
$numbercckham1 = "$saosonkham1$saohuongkham1";
$numbercccan8 = "$saosoncan8$saohuongcan8";
$numberccchan3 = "$saosonchan3$saohuongchan3";

function tinhcachcuc($number33)
{
    if ($number33 == 14 || $number33 == 41) {
        return  "Khôi Tinh";
    } else if ($number33 == 49 || $number33 == 94) {
        return  "Phúc Đức";
    } else if ($number33 == 16 || $number33 == 61 || $number33 == 68 || $number33 == 86) {
        return  "Thôi Quan";
    } else if ($number33 == 12 || $number33 == 21 || $number33 == 15 || $number33 == 51 || $number33 == 35 || $number33 == 53 || $number33 == 45 || $number33 == 54 || $number33 == 25 || $number33 == 52) {
        return  "Tật Ách";
    } else if ($number33 == 47 || $number33 == 74) {
        return  "Phúc Đức";
    } else if ($number33 == 17 || $number33 == 71 || $number33 == 39 || $number33 == 93 || $number33 == 78 || $number33 == 87 || $number33 == 89 || $number33 == 98) {
        return  "Tài Lộc";
    } else if ($number33 == 37 || $number33 == 73) {
        return  "Kiếp Tài";
    } else if ($number33 == 57 || $number33 == 75 || $number33 == 58 || $number33 == 85) {
        return  "Vô Tự";
    } else if ($number33 == 26 || $number33 == 62 || $number33 == 46 || $number33 == 64) {
        return  "Dịch Mã";
    } else if ($number33 == 29 || $number33 == 92 || $number33 == 56 || $number33 == 65) {
        return  "Cô Quả";
    } else if ($number33 == 13 || $number33 == 31 || $number33 == 36 || $number33 == 63 || $number33 == 59 || $number33 == 95 || $number33 == 67 || $number33 == 76 || $number33 == 79 || $number33 == 97) {
        return  "Họa Hại";
    } else if ($number33 == 18 || $number33 == 81 || $number33 == 27 || $number33 == 72 || $number33 == 28 || $number33 == 82) {
        return  "Điền Trạch";
    } else if ($number33 == 24 || $number33 == 42 || $number33 == 38 || $number33 == 83 || $number33 == 48 || $number33 == 84) {
        return  "Đoạt Hồn";
    } else if ($number33 == 23 || $number33 == 32) {
        return  "Tụng Đình";
    } else if ($number33 == 34 || $number33 == 43) {
        return  "Hoan Lạc";
    } else if ($number33 == 19 || $number33 == 91 || $number33 == 69 || $number33 == 96) {
        return  "Diên Thọ";
    } else if ($number33 == 11 || $number33 == 22 || $number33 == 33 || $number33 == 44 || $number33 == 55 || $number33 == 66 || $number33 == 77 || $number33 == 88 || $number33 == 99) {
        return  "";
    } else {
        return  "Lỗi tìm sơn hướng";
    }
};
$cachcuccan6 = tinhcachcuc($numbercccan6);
$cachcuckham1 = tinhcachcuc($numbercckham1);
$cachcuccan8 = tinhcachcuc($numbercccan8);
$cachcucchan3 = tinhcachcuc($numberccchan3);
$cachcucton4 = tinhcachcuc($numberccton4);
$cachcucly9 = tinhcachcuc($numberccly9);
$cachcuckhon2 = tinhcachcuc($numbercckhon2);
$cachcucdoai7 = tinhcachcuc($numberccdoai7);

// 1. Tính xem phạm Thái Tuế không?
//Tìm địa chi
function timdiachi($namsinhcantim)
{
    $diachi = array("Tý", "Sửu", "Dần", "Mão", "Thìn", "Tỵ", "Ngọ", "Mùi", "Thân", "Dậu", "Tuất", "Hợi");
    $sodu = 0;
    if ($namsinhcantim % 12 >= 4) {
        $sodu = ($namsinhcantim % 12 - 4);
    } else {
        $sodu = ($namsinhcantim % 12 + 8);
    }

    return $diachi[$sodu];
}
$diachi = timdiachi($namsinh);

function xemthaitue($diachish, $sonhuong)
{
    if ($diachish == "Ngọ") {
        if ($sonhuong == "Bính" || $sonhuong == "Ngọ" || $sonhuong == "Đinh") {
            return "Phạm";
        } else {
            return "Không phạm";
        }
    } else if ($diachish == "Tý") {
        if ($sonhuong == "Nhâm" || $sonhuong == "Tý" || $sonhuong == "Quý") {
            return "Phạm";
        } else {
            return "Không phạm";
        }
    } else if ($diachish == "Mão") {
        if ($sonhuong == "Giáp" || $sonhuong == "Mão" || $sonhuong == "Ất") {
            return "Phạm";
        } else {
            return "Không phạm";
        }
    } else if ($diachish == "Dậu") {
        if ($sonhuong == "Canh" || $sonhuong == "Dậu" || $sonhuong == "Tân") {
            return "Phạm";
        } else {
            return "Không phạm";
        }
    } else if ($diachish == "Sửu") {
        if ($sonhuong == "Sửu") {
            return "Phạm";
        } else {
            return "Không phạm";
        }
    } else if ($diachish == "Mùi") {
        if ($sonhuong == "Mùi") {
            return "Phạm";
        } else {
            return "Không phạm";
        }
    } else if ($diachish == "Thìn") {
        if ($sonhuong == "Thìn") {
            return "Phạm";
        } else {
            return "Không phạm";
        }
    } else if ($diachish == "Tuất") {
        if ($sonhuong == "Tuất") {
            return "Phạm";
        } else {
            return "Không phạm";
        }
    } else if ($diachish == "Dần") {
        if ($sonhuong == "Dần" || $sonhuong == "Cấn") {
            return "Phạm";
        } else {
            return "Không phạm";
        }
    } else if ($diachish == "Thân") {
        if ($sonhuong == "Thân" || $sonhuong == "Khôn") {
            return "Phạm";
        } else {
            return "Không phạm";
        }
    } else if ($diachish == "Tỵ") {
        if ($sonhuong == "Tỵ" || $sonhuong == "Tốn") {
            return "Phạm";
        } else {
            return "Không phạm";
        }
    } else if ($diachish == "Hợi") {
        if ($sonhuong == "Hợi" || $sonhuong == "Càn") {
            return "Phạm";
        } else {
            return "Không phạm";
        }
    } else {
        return "Lỗi xem Thái Tuế";
    }
}
if (xemthaitue($diachi, $huong24) == "Phạm") {
    $xemthaituehuong = "Hướng $huong24 Phạm";
} else if (xemthaitue($diachi, $son24) == "Phạm") {
    $xemthaituehuong = "Sơn $son24 Phạm";
} else {
    $xemthaituehuong = "Không Phạm";
}


//Tính nạp âm mệnh chủ
function napammenhchu($namsinhs)
{
    $nguhanhnapam = array("Hải trung Kim", "Hải trung Kim", "Lô trung Hỏa", "Lô trung Hỏa", "Đại lâm Mộc", "Đại lâm Mộc", "Lộ bàng Thổ", "Lộ bàng Thổ", "Kiếm phong Kim", "Kiếm phong Kim", "Sơn dầu Hỏa", "Sơn dầu Hỏa", "Giản hạ Thủy", "Giản hạ Thủy", "Thành đầu Thổ", "Thành đầu Thổ", "Bạch lạp Kim", "Bạch lạp Kim", "Dương liễu Mộc", "Dương liễu Mộc", "Tuyền trung Thủy", "Tuyền trung Thủy", "Ốc thượng Thổ", "Ốc thượng Thổ", "Tích lịch Hỏa", "Tích lịch Hỏa", "Tùng bách Mộc", "Tùng bách Mộc", "Tràng lưu Thủy", "Tràng lưu Thủy", "Sa trung Kim", "Sa trung Kim", "Sơn hạ Hỏa", "Sơn hạ Hỏa", "Bình địa Mộc", "Bình địa Mộc", "Bích thượng Thổ", "Bích thượng Thổ", "Kim bạch Kim", "Kim bạch Kim", "Phú đăng Hỏa", "Phú đăng Hỏa", "Thiên hà Thủy", "Thiên hà Thủy", "Đại trạch Thổ", "Đại trạch Thổ", "Thoa xuyến Kim", "Thoa xuyến Kim", "Tang giá Mộc", "Tang giá Mộc", "Đại khê Thủy", "Đại khê Thủy", "Sa trung Thổ", "Sa trung Thổ", "Thiên thượng Hỏa", "Thiên thượng Hỏa", "Thạch lựu Mộc", "Thạch lựu Mộc", "Đại hải Thủy", "Đại hải Thủy");
    $sodu = ($namsinhs - 4) % 60;
    return $nguhanhnapam[$sodu];
}
$napammenh = napammenhchu($namsinh);



echo $test;
echo $baoloi;

?>
<br>
Họ và Tên : <?Php echo $ten; ?>
<br>
Năm sinh : <?Php echo $namsinh; ?>
<br>
Cung Mệnh : <?Php echo $quechu; ?>
<br>
Giới Tính : <?Php echo $gioitinh; ?>
<br>
Hướng nhà : <?Php echo $huong24;
            echo $huongnha;
            ?> được <?Php if ($huongnha == "Càn") {
                        echo $can6;
                    } else if ($huongnha == "Khảm") {
                        echo $kham1;
                    } else if ($huongnha == "Cấn") {
                        echo $can8;
                    } else if ($huongnha == "Chấn") {
                        echo $chan3;
                    } else if ($huongnha == "Tốn") {
                        echo $ton4;
                    } else if ($huongnha == "Ly") {
                        echo $ly9;
                    } else if ($huongnha == "Khôn") {
                        echo $khon2;
                    } else if ($huongnha == "Đoài") {
                        echo $doai7;
                    }
                    ?>
<br>
Thái Tuế : <?php echo $xemthaituehuong  ?>
<br>
Mệnh : <?php echo $napammenh;  ?>
<br>
<?php
echo $tinhkhongvong;
?>
<br>
<table border="1" width="200" cellspacing="1">
    <tbody>
        <tr>
            <td>Đông Nam</td>
            <td></td>
            <td>Nam</td>
            <td></td>
            <td>Tây Nam</td>
        </tr>
        <tr>
            <td></td>
            <td><?php echo $ton4; ?></td>
            <td><?php echo $ly9; ?></td>
            <td><?php echo $khon2; ?></td>
            <td></td>
        </tr>
        <tr>
            <td>Đông</td>
            <td><?php echo $chan3; ?></td>
            <td></td>
            <td><?php echo $doai7; ?></td>
            <td>Tây</td>
        </tr>
        <tr>
            <td></td>
            <td><?php echo $can8; ?></td>
            <td><?php echo $kham1; ?></td>
            <td><?php echo $can6; ?></td>
            <td></td>
        </tr>
        <tr>
            <td>Đông Bắc</td>
            <td></td>
            <td>Bắc</td>
            <td></td>
            <td>Tây Bắc</td>
        </tr>
    </tbody>
</table>


<br>
<table border="1" width="300" cellspacing="1">
    <tbody>
        <tr>
            <td><?php echo $cachcucton4;  ?>
                <br>
                <?php echo $saosonton4;
                echo $saovanton4;
                echo $saohuongton4;  ?>
            </td>
            <td><?php echo $cachcucly9;  ?>
                <br>
                <?php echo $saosonly9;
                echo $saovanly9;
                echo $saohuongly9;  ?>
            </td>
            <td><?php echo $cachcuckhon2;  ?>
                <br>
                <?php echo $saosonkhon2;
                echo $saovankhon2;
                echo $saohuongkhon2;  ?>
            </td>

        </tr>
        <tr>
            <td><?php echo $cachcucchan3;  ?>
                <br>
                <?php echo $saosonchan3;
                echo $saovanchan3;
                echo $saohuongchan3;  ?>
            </td>
            <td>
                <?php echo $saosontrung;
                echo $saovantrung;
                echo $saohuongtrung;  ?></td>
            <td><?php echo $cachcucdoai7;  ?>
                <br>
                <?php echo $saosondoai7;
                echo $saovandoai7;
                echo $saohuongdoai7;  ?>
            </td>
        </tr>
        <tr>
            <td><?php echo $cachcuccan8;  ?>
                <br>
                <?php echo $saosoncan8;
                echo $saovancan8;
                echo $saohuongcan8;  ?>
            </td>
            <td><?php echo $cachcuckham1;  ?>
                <br>
                <?php echo $saosonkham1;
                echo $saovankham1;
                echo $saohuongkham1;  ?>
            </td>
            <td><?php echo $cachcuccan6;  ?>
                <br>
                <?php echo $saosoncan6;
                echo $saovancan6;
                echo $saohuongcan6;  ?>
            </td>
        </tr>
    </tbody>

    <?php
    $ketluanphitinh = "";
    if ($huongnha == "Càn") {
        if ($saosoncan6 == $saovantrung && $saohuongcan6 == $saovantrung) {
            $ketluanphitinh = "Song tinh đáo hướng";
        } elseif ($saosonton4 == $saovantrung && $saohuongton4 == $saovantrung) {
            $ketluanphitinh = "Song tinh đáo tọa";
        } else if ($saohuongcan6 == $saovantrung) {
            $ketluanphitinh = "Vượng Hướng";
        } else if ($saosoncan6 == $saovantrung) {
            $ketluanphitinh = "Vượng Sơn";
        } else {
            $ketluanphitinh .= "ko";
        }
    } else if ($huongnha == "Khảm") {
        if ($saosonkham1 == $saovantrung && $saohuongkham1 == $saovantrung) {
            $ketluanphitinh = "Song tinh đáo hướng";
        } elseif ($saosonly9 == $saovantrung && $saohuongly9 == $saovantrung) {
            $ketluanphitinh = "Song tinh đáo tọa";
        } else if ($saohuongkham1 == $saovantrung) {
            $ketluanphitinh = "Vượng Hướng";
        } else if ($saosonkham1 == $saovantrung) {
            $ketluanphitinh = "Vượng Sơn";
        } else {
            $ketluanphitinh .= "ko";
        }
    } else if ($huongnha == "Cấn") {
        if ($saosoncan8 == $saovantrung && $saohuongcan8 == $saovantrung) {
            $ketluanphitinh = "Song tinh đáo hướng";
        } elseif ($saosonkhon2 == $saovantrung && $saohuongkhon2 == $saovantrung) {
            $ketluanphitinh = "Song tinh đáo tọa";
        } else if ($saohuongcan8 == $saovantrung) {
            $ketluanphitinh = "Vượng Hướng";
        } else if ($saosoncan8 == $saovantrung) {
            $ketluanphitinh = "Vượng Sơn";
        } else {
            $ketluanphitinh .= "ko";
        }
    } else if ($huongnha == "Chấn") {
        if ($saosonchan3 == $saovantrung && $saohuongchan3 == $saovantrung) {
            $ketluanphitinh = "Song tinh đáo hướng";
        } elseif ($saosondoai7 == $saovantrung && $saohuongdoai7 == $saovantrung) {
            $ketluanphitinh = "Song tinh đáo tọa";
        } else if ($saohuongchan3 == $saovantrung) {
            $ketluanphitinh = "Vượng Hướng";
        } else if ($saosonchan3 == $saovantrung) {
            $ketluanphitinh = "Vượng Sơn";
        } else {
            $ketluanphitinh .= "ko";
        }
    } else if ($huongnha == "Tốn") {
        if ($saosonton4 == $saovantrung && $saohuongton4 == $saovantrung) {
            $ketluanphitinh = "Song tinh đáo hướng";
        } elseif ($saosoncan6 == $saovantrung && $saohuongcan6 == $saovantrung) {
            $ketluanphitinh = "Song tinh đáo tọa";
        } else if ($saohuongton4 == $saovantrung) {
            $ketluanphitinh = "Vượng Hướng";
        } else if ($saosonton4 == $saovantrung) {
            $ketluanphitinh = "Vượng Sơn";
        } else {
            $ketluanphitinh .= "ko";
        }
    } else if ($huongnha == "Ly") {
        if ($saosonly9 == $saovantrung && $saohuongly9 == $saovantrung) {
            $ketluanphitinh = "Song tinh đáo hướng";
        } elseif ($saosonkham1 == $saovantrung && $saohuongkham1 == $saovantrung) {
            $ketluanphitinh = "Song tinh đáo tọa";
        } else if ($saohuongly9 == $saovantrung) {
            $ketluanphitinh = "Vượng Hướng";
        } else if ($saosonly9 == $saovantrung) {
            $ketluanphitinh = "Vượng Sơn";
        } else {
            $ketluanphitinh .= "ko";
        }
    } else if ($huongnha == "Khôn") {
        if ($saosonkhon2 == $saovantrung && $saohuongkhon2 == $saovantrung) {
            $ketluanphitinh = "Song tinh đáo hướng";
        } elseif ($saosoncan8 == $saovantrung && $saohuongcan8 == $saovantrung) {
            $ketluanphitinh = "Song tinh đáo tọa";
        } else if ($saohuongkhon2 == $saovantrung) {
            $ketluanphitinh = "Vượng Hướng";
        } else if ($saosonkhon2 == $saovantrung) {
            $ketluanphitinh = "Vượng Sơn";
        } else {
            $ketluanphitinh .= "ko";
        }
    } else if ($huongnha == "Đoài") {
        if ($saosondoai7 == $saovantrung && $saohuongdoai7 == $saovantrung) {
            $ketluanphitinh = "Song tinh đáo hướng";
        } elseif ($saosonchan3 == $saovantrung && $saohuongchan3 == $saovantrung) {
            $ketluanphitinh = "Song tinh đáo tọa";
        } else if ($saohuongdoai7 == $saovantrung) {
            $ketluanphitinh = "Vượng Hướng";
        } else if ($saosondoai7 == $saovantrung) {
            $ketluanphitinh = "Vượng Sơn";
        } else {
            $ketluanphitinh .= "ko";
        }
    } else {
        $baoloi .= "Lỗi hướng kết luận";
    }

    echo $ketluanphitinh;

    ?>
</table>
<br>
<p><a href="../phongthuy/index.html">Home page</a></p>