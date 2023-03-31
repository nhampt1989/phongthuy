<!DOCTYPE HTML>
<html>

<head>
    <style>
        .text1 {
            width: 250px;
            height: 180px;

        }

        .text13 {
            width: 500px;
            height: 180px;

        }

        .table {
            margin-top: 10vmin;
            margin-right: 10vmin;
            margin-left: 10vmin;
            margin-bottom: 10vmin;
            -webkit-box-sizing: content-box;
            -moz-box-sizing: content-box;
            box-sizing: content-box;
        }

        p.left {
            text-align: left;
        }

        p.right {
            text-align: right;
        }

        p.center {
            text-align: center;
        }

        .td {
            width: 250px;
            height: 180px;


        }
    </style>
</head>

<body>

    <?php
    // define variables and set to empty values
    $ten = $gioitinh = $giosinh = "";
    $ngaysinh = $thangsinh = $namsinh = 0;
    //
    //$atc = array("Giáp", "Ất", "Bính", "Đinh", "Mậu", "Kỷ", "Canh", "Tân", "Nhâm", "Quý");
    //Định nghĩa các ô thiên bàn
    $ty = "Tý";
    $suu = "Sửu";
    $dan = "Dần";
    $mao = "Mão";
    $thin = "Thìn";
    $ti = "Tỵ";
    $ngo = "Ngọ";
    $mui = "Mùi";
    $than = "Thân";
    $dau = "Dậu";
    $tuat = "Tuất";
    $hoi = "Hợi";
    //Định nghĩa
    $thiencan = $diachi = "";
    $nienhanty = $nienhansuu = $nienhandan = $nienhanmao = $nienhanthin = $nienhanti = $nienhanngo = $nienhanmui = $nienhanthan = $nienhandau = $nienhantuat = $nienhanhoi = 0;
    $chinhtinhty = $chinhtinhsuu = $chinhtinhdan = $chinhtinhmao = $chinhtinhthin = $chinhtinhti = $chinhtinhngo = $chinhtinhmui = $chinhtinhthan = $chinhtinhdau = $chinhtinhtuat = $chinhtinhhoi = array('', '');
    $saototty = $saototsuu = $saototdan = $saototmao = $saototthin = $saototti = $saototngo = $saototmui = $saototthan = $saototdau = $saotottuat = $saotothoi = array();
    $saoxauty = $saoxausuu = $saoxaudan = $saoxaumao = $saoxauthin = $saoxauti = $saoxaungo = $saoxaumui = $saoxauthan = $saoxaudau = $saoxautuat = $saoxauhoi = array();
    $cungcuocdoi = "";
    $cungthan = "";
    $cuc = "";
    $saochumenh = $saochuthan = "";
    //Lỗi
    $baoloi = "";

    //Lấy giá trị trong bảng
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
    ?>

    <h2>Thiên Bàn</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        Tên: <input type="text" name="ten">
        <br><br>
        Giới Tính:
        <input type="radio" name="gioitinh" value="Nữ" >Nữ
        <input type="radio" name="gioitinh" value="Nam" checked>Nam
        <br><br>
        Ngày Sinh: <select name="ngaysinh">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>
            <option value="11">11</option>
            <option value="12">12</option>
            <option value="13">13</option>
            <option value="14">14</option>
            <option value="15">15</option>
            <option value="16">16</option>
            <option value="17">17</option>
            <option value="18">18</option>
            <option value="19">19</option>
            <option value="20">20</option>
            <option value="21">21</option>
            <option value="22">22</option>
            <option value="23">23</option>
            <option value="24">24</option>
            <option value="25">25</option>
            <option value="26">26</option>
            <option value="27">27</option>
            <option value="28">28</option>
            <option value="29">29</option>
            <option value="30">30</option>

        </select>
        Tháng Sinh: <select name="thangsinh">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>
            <option value="11">11</option>
            <option value="12">12</option>
        </select>
        <br><br>
        Năm Sinh: <select name="namsinh">
            <option value="1984">1984</option>
            <option value="1985">1985</option>
            <option value="1986">1986</option>
            <option value="1987">1987</option>
            <option value="1988">1988</option>
            <option value="1989">1989</option>
            <option value="1990">1990</option>
            <option value="1991">1991</option>
            <option value="1992">1992</option>
            <option value="1993">1993</option>
            <option value="1994">1994</option>
            <option value="1995">1995</option>
            <option value="1996">1996</option>
            <option value="1997">1997</option>
            <option value="1998">1998</option>
            <option value="1999">1999</option>
            <option value="2000">2000</option>
            <option value="2001">2001</option>
            <option value="2002">2002</option>
            <option value="2003">2003</option>
            <option value="2004">2004</option>
            <option value="2005">2005</option>
            <option value="2006">2006</option>
            <option value="2022">2022</option>
        </select>

        <br><br>
        Giờ sinh: <select name="giosinh">
            <option value="1">Tý ( 23h - 1h)</option>
            <option value="2">Sửu ( 1h - 3h)</option>
            <option value="3">Dần ( 3h - 5h)</option>
            <option value="4">Mão ( 5h - 7h)</option>
            <option value="5">Thìn ( 7h - 9h)</option>
            <option value="6">Tị ( 9h - 11h)</option>
            <option value="7">Ngọ ( 11h - 13h)</option>
            <option value="8">Mùi ( 13h - 15h)</option>
            <option value="9">Thân ( 15h - 17h)</option>
            <option value="10">Dậu ( 17h - 19h)</option>
            <option value="11">Tuất ( 19h - 21h)</option>
            <option value="12">Hợi ( 21h - 23h)</option>
        </select>
        <br><br>
        <input type="submit" name="submit" value="Submit">
    </form>
    <p><a href="../phongthuy/index.html">Home page</a></p>
    <?php

    $nienmenh = "";

    //Tìm thiên can
    if ($namsinh % 10 == 0) {
        $thiencan = "Canh";
    } else if ($namsinh % 10 == 1) {
        $thiencan = "Tân";
    } else if ($namsinh % 10 == 2) {
        $thiencan = "Nhâm";
    } else if ($namsinh % 10 == 3) {
        $thiencan = "Quý";
    } else if ($namsinh % 10 == 4) {
        $thiencan = "Giáp";
    } else if ($namsinh % 10 == 5) {
        $thiencan = "Ất";
    } else if ($namsinh % 10 == 6) {
        $thiencan = "Bính";
    } else if ($namsinh % 10 == 7) {
        $thiencan = "Đinh";
    } else if ($namsinh % 10 == 8) {
        $thiencan = "Mậu";
    } else if ($namsinh % 10 == 9) {
        $thiencan = "Kỷ";
    } else {
        $baoloi .= "Lỗi tìm thiên can\n";
    }
    //Tìm địa chi
    if ($namsinh % 12 == 4) {
        $diachi = "Tý";
    } else if ($namsinh % 12 == 5) {
        $diachi = "Sửu";
    } else if ($namsinh % 12 == 6) {
        $diachi = "Dần";
    } else if ($namsinh % 12 == 7) {
        $diachi = "Mão";
    } else if ($namsinh % 12 == 8) {
        $diachi = "Thìn";
    } else if ($namsinh % 12 == 9) {
        $diachi = "Tỵ";
    } else if ($namsinh % 12 == 10) {
        $diachi = "Ngọ";
    } else if ($namsinh % 12 == 11) {
        $diachi = "Mùi";
    } else if ($namsinh % 12 == 0) {
        $diachi = "Thân";
    } else if ($namsinh % 12 == 1) {
        $diachi = "Dậu";
    } else if ($namsinh % 12 == 2) {
        $diachi = "Tuất";
    } else if ($namsinh % 12 == 3) {
        $diachi = "Hợi";
    } else {
        $baoloi .= "Lỗi tìm địa chi\n";
    }

    //Tìm ngũ hành của chủ quẻ
    $hanhtc = 0;
    $hanhdc = 0;
    $hanh = "";
    if ($thiencan == "Giáp" || $thiencan == "Ất") {
        $hanhtc = 1;
    } else if ($thiencan == "Bính" || $thiencan == "Đinh") {
        $hanhtc = 2;
    } else if ($thiencan == "Mậu" || $thiencan == "Kỷ") {
        $hanhtc = 3;
    } else if ($thiencan == "Canh" || $thiencan == "Tân") {
        $hanhtc = 4;
    } else if ($thiencan == "Nhâm" || $thiencan == "Quý") {
        $hanhtc = 5;
    } else {
        $baoloi .= "Lỗi tính hành thiên can\n";
    }
    if ($diachi == "Tý" || $diachi == "Sửu" || $diachi == "Ngọ" || $diachi == "Mùi") {
        $hanhdc = 0;
    } else if ($diachi == "Dần" || $diachi == "Mão" || $diachi == "Thân" || $diachi == "Dậu") {
        $hanhdc = 1;
    } else if ($diachi == "Thìn" || $diachi == "Tỵ" || $diachi == "Tuất" || $diachi == "Hợi") {
        $hanhdc = 2;
    } else {
        $baoloi .= "Lỗi tính hành địa chi\n";
    }

    if (($hanhtc + $hanhdc) == 1 || ($hanhtc + $hanhdc) == 6) {
        $hanh = "Kim";
    } else if (($hanhtc + $hanhdc) == 2 || ($hanhtc + $hanhdc) == 7) {
        $hanh = "Thủy";
    } else if (($hanhtc + $hanhdc) == 3 || ($hanhtc + $hanhdc) == 8) {
        $hanh = "Hỏa";
    } else if (($hanhtc + $hanhdc) == 4) {
        $hanh = "Thổ";
    } else if (($hanhtc + $hanhdc) == 5) {
        $hanh = "Mộc";
    } else {
        $baoloi .= "Lỗi tính ngũ hành\n";
    }



    //An cung MỆNH, 12 cung cuộc đời
    // Tìm cục cho lá số
    $socuoinamsinh = $namsinh % 10;

    if ($socuoinamsinh > 3) {
        $canmoi = (($socuoinamsinh - 3) * 2 + 1) % 10;
        echo $canmoi;
    } else if ($socuoinamsinh < 3 || $socuoinamsinh == 3) {
        $canmoi = (($socuoinamsinh + 7) * 2 + 1) % 10;
        echo $canmoi;
    } else {
        $baoloi .= "Tính can mới sai";
    }

    if ($thangsinh - $giosinh == -2) {
        //an 12 cung khi mệnh ở Tý
        $ty .= "<MỆNH>";
        $suu .= "<PHỤ MẪU>";
        $dan .= "<PHÚC ĐỨC>";
        $mao .= "<ĐIỀN TRẠCH>";
        $thin .= "<QUAN LỘC>";
        $ti .= "<NÔ BỘC>";
        $ngo .= "<THIÊN DI>";
        $mui .= "<TẬT ÁCH>";
        $than .= "<TÀI BẠCH>";
        $dau .= "<TỬ TÔN>";
        $tuat .= "<PHU THÊ>";
        $hoi .= "<HUYNH ĐỆ>";
        //tìm cục khi mệnh ở Tý
        //Tìm năm niên hạn khi biết cục
        if ($canmoi == 1) {
            $cuc = "Kim"; //giáp tý
            $nienhanty = 4;
        } else if ($canmoi == 3) {
            $cuc = "Thủy"; // bính tý
            $nienhanty = 2;
        } else if ($canmoi == 5) {
            $cuc = "Hỏa"; //mậu tý
            $nienhanty = 6;
        } else if ($canmoi == 7) {
            $cuc = "Thổ"; //canh tý
            $nienhanty = 5;
        } else if ($canmoi == 9) {
            $cuc = "Mộc"; //nhâm tý
            $nienhanty = 3;
        } else {
            $baoloi .= "Lỗi tìm cục khi MỆNH ở Tý";
        }
    } else if ($thangsinh - $giosinh == -1) {
        //an 12 cung khi mệnh ở Sửu
        $suu .= "<MỆNH>";
        $dan .= "<PHỤ MẪU>";
        $mao .= "<PHÚC ĐỨC>";
        $thin .= "<ĐIỀN TRẠCH>";
        $ti .= "<QUAN LỘC>";
        $ngo .= "<NÔ BỘC>";
        $mui .= "<THIÊN DI>";
        $than .= "<TẬT ÁCH>";
        $dau .= "<TÀI BẠCH>";
        $tuat .= "<TỬ TÔN>";
        $hoi .= "<PHU THÊ>";
        $ty .= "<HUYNH ĐỆ>";
        if ($canmoi == 1) {
            $cuc = "Kim"; //ất sửu
            $nienhanty = 14;
        } else if ($canmoi == 3) {
            $cuc = "Thủy"; //đinh sửu
            $nienhanty = 12;
        } else if ($canmoi == 5) {
            $cuc = "Hỏa"; //kỷ sửu
            $nienhanty = 16;
        } else if ($canmoi == 7) {
            $cuc = "Thổ"; //tân sửu
            $nienhanty = 15;
        } else if ($canmoi == 9) {
            $cuc = "Mộc"; //quý sửu
            $nienhanty = 13;
        } else {
            $baoloi .= "Lỗi tìm cục khi MỆNH ở Sửu";
        }
    } else if ($thangsinh - $giosinh == 0) {
        //an 12 cung khi mệnh ở Dần
        $dan .= "<MỆNH>";
        $mao .= "<PHỤ MẪU>";
        $thin .= "<PHÚC ĐỨC>";
        $ti .= "<ĐIỀN TRẠCH>";
        $ngo .= "<QUAN LỘC>";
        $mui .= "<NÔ BỘC>";
        $than .= "<THIÊN DI>";
        $dau .= "<TẬT ÁCH>";
        $tuat .= "<TÀI BẠCH>";
        $hoi .= "<TỬ TÔN>";
        $ty .= "<PHU THÊ>";
        $suu .= "<HUYNH ĐỆ>";
        if ($canmoi == 1) {
            $cuc = "Thủy"; //giáp dần
            $nienhanty = 22;
        } else if ($canmoi == 3) {
            $cuc = "Hỏa"; //bính dần
            $nienhanty = 26;
        } else if ($canmoi == 5) {
            $cuc = "Thổ"; //mậu dần
            $nienhanty = 25;
        } else if ($canmoi == 7) {
            $cuc = "Mộc"; //canh dần
            $nienhanty = 23;
        } else if ($canmoi == 9) {
            $cuc = "Kim"; //nhâm dần
            $nienhanty = 24;
        } else {
            $baoloi .= "Lỗi tìm cục khi MỆNH ở Dần";
        }
    } else if ($thangsinh - $giosinh == 1 || $thangsinh - $giosinh == -11) {
        //an 12 cung khi mệnh ở Mão
        $mao .= "<MỆNH>";
        $thin .= "<PHỤ MẪU>";
        $ti .= "<PHÚC ĐỨC>";
        $ngo .= "<ĐIỀN TRẠCH>";
        $mui .= "<QUAN LỘC>";
        $than .= "<NÔ BỘC>";
        $dau .= "<THIÊN DI>";
        $tuat .= "<TẬT ÁCH>";
        $hoi .= "<TÀI BẠCH>";
        $ty .= "<TỬ TÔN>";
        $suu .= "<PHU THÊ>";
        $dan .= "<HUYNH ĐỆ>";
        if ($canmoi == 1) {
            $cuc = "Thủy"; //ất mão
            $nienhanty = 32;
        } else if ($canmoi == 3) {
            $cuc = "Hỏa"; //đinh mão
            $nienhanty = 36;
        } else if ($canmoi == 5) {
            $cuc = "Thổ"; //kỷ mão
            $nienhanty = 35;
        } else if ($canmoi == 7) {
            $cuc = "Mộc"; //tân mão
            $nienhanty = 33;
        } else if ($canmoi == 9) {
            $cuc = "Kim"; //quý mão
            $nienhanty = 34;
        } else {
            $baoloi .= "Lỗi tìm cục khi MỆNH ở Mão";
        }
    } else if ($thangsinh - $giosinh == 2 || $thangsinh - $giosinh == -10) {
        //an 12 cung khi mệnh ở Thìn
        $thin .= "<MỆNH>";
        $ti .= "<PHỤ MẪU>";
        $ngo .= "<PHÚC ĐỨC>";
        $mui .= "<ĐIỀN TRẠCH>";
        $than .= "<QUAN LỘC>";
        $dau .= "<NÔ BỘC>";
        $tuat .= "<THIÊN DI>";
        $hoi .= "<TẬT ÁCH>";
        $ty .= "<TÀI BẠCH>";
        $suu .= "<TỬ TÔN>";
        $dan .= "<PHU THÊ>";
        $mao .= "<HUYNH ĐỆ>";
        if ($canmoi == 1) {
            $cuc = "Thổ"; //bính thìn
            $nienhanty = 45;
        } else if ($canmoi == 3) {
            $cuc = "Mộc"; //mậu thìn
            $nienhanty = 43;
        } else if ($canmoi == 5) {
            $cuc = "Kim"; //canh thìn
            $nienhanty = 44;
        } else if ($canmoi == 7) {
            $cuc = "Thủy"; //nhâm thìn
            $nienhanty = 42;
        } else if ($canmoi == 9) {
            $cuc = "Hỏa"; //giáp thìn
            $nienhanty = 46;
        } else {
            $baoloi .= "Lỗi tìm cục khi MỆNH ở Thìn";
        }
    } else if ($thangsinh - $giosinh == 3 || $thangsinh - $giosinh == -9) {
        //an 12 cung khi mệnh ở Tỵ
        $ti .= "<MỆNH>";
        $ngo .= "<PHỤ MẪU>";
        $mui .= "<PHÚC ĐỨC>";
        $than .= "<ĐIỀN TRẠCH>";
        $dau .= "<QUAN LỘC>";
        $tuat .= "<NÔ BỘC>";
        $hoi .= "<THIÊN DI>";
        $ty .= "<TẬT ÁCH>";
        $suu .= "<TÀI BẠCH>";
        $dan .= "<TỬ TÔN>";
        $mao .= "<PHU THÊ>";
        $thin .= "<HUYNH ĐỆ>";
        if ($canmoi == 1) {
            $cuc = "Thổ"; //đinh tỵ
            $nienhanty = 55;
        } else if ($canmoi == 3) {
            $cuc = "Mộc"; //kỷ tỵ
            $nienhanty = 53;
        } else if ($canmoi == 5) {
            $cuc = "Kim"; //tân tỵ
            $nienhanty = 54;
        } else if ($canmoi == 7) {
            $cuc = "Thủy"; //quý tỵ
            $nienhanty = 52;
        } else if ($canmoi == 9) {
            $cuc = "Hỏa"; //ất tỵ
            $nienhanty = 56;
        } else {
            $baoloi .= "Lỗi tìm cục khi MỆNH ở Tỵ";
        }
    } else if ($thangsinh - $giosinh == 4 || $thangsinh - $giosinh == -8) {
        //an 12 cung khi mệnh ở Ngọ
        $ngo .= "<MỆNH>";
        $mui .= "<PHỤ MẪU>";
        $than .= "<PHÚC ĐỨC>";
        $dau .= "<ĐIỀN TRẠCH>";
        $tuat .= "<QUAN LỘC>";
        $hoi .= "<NÔ BỘC>";
        $ty .= "<THIÊN DI>";
        $suu .= "<TẬT ÁCH>";
        $dan .= "<TÀI BẠCH>";
        $mao .= "<TỬ TÔN>";
        $thin .= "<PHU THÊ>";
        $ti .= "<HUYNH ĐỆ>";
        if ($canmoi == 1) {
            $cuc = "Hỏa"; //mậu ngọ
            $nienhanty = 66;
        } else if ($canmoi == 3) {
            $cuc = "Thổ"; //tân ngọ
            $nienhanty = 65;
        } else if ($canmoi == 5) {
            $cuc = "Mộc"; //quý ngọ
            $nienhanty = 63;
        } else if ($canmoi == 7) {
            $cuc = "Kim"; //ất ngọ
            $nienhanty = 64;
        } else if ($canmoi == 9) {
            $cuc = "Thủy"; //đinh ngọ
            $nienhanty = 62;
        } else {
            $baoloi .= "Lỗi tìm cục khi MỆNH ở Ngọ";
        }
    } else if ($thangsinh - $giosinh == 5 || $thangsinh - $giosinh == -7) {
        //an 12 cung khi mệnh ở Mùi
        $mui .= "<MỆNH>";
        $than .= "<PHỤ MẪU>";
        $dau .= "<PHÚC ĐỨC>";
        $tuat .= "<ĐIỀN TRẠCH>";
        $hoi .= "<QUAN LỘC>";
        $ty .= "<NÔ BỘC>";
        $suu .= "<THIÊN DI>";
        $dan .= "<TẬT ÁCH>";
        $mao .= "<TÀI BẠCH>";
        $thin .= "<TỬ TÔN>";
        $ti .= "<PHU THÊ>";
        $ngo .= "<HUYNH ĐỆ>";
        if ($canmoi == 1) {
            $cuc = "Hỏa"; //kỷ mùi
            $nienhanty = 76;
        } else if ($canmoi == 3) {
            $cuc = "Thổ"; //tân mùi
            $nienhanty = 75;
        } else if ($canmoi == 5) {
            $cuc = "Mộc"; //quý mùi
            $nienhanty = 73;
        } else if ($canmoi == 7) {
            $cuc = "Kim"; //ất mùi
            $nienhanty = 74;
        } else if ($canmoi == 9) {
            $cuc = "Thủy"; //đinh mùi
            $nienhanty = 72;
        } else {
            $baoloi .= "Lỗi tìm cục khi MỆNH ở Mùi";
        }
    } else if ($thangsinh - $giosinh == 6 || $thangsinh - $giosinh == -6) {
        //an 12 cung khi mệnh ở Thân
        $than .= "<MỆNH>";
        $dau .= "<PHỤ MẪU>";
        $tuat .= "<PHÚC ĐỨC>";
        $hoi .= "<ĐIỀN TRẠCH>";
        $ty .= "<QUAN LỘC>";
        $suu .= "<NÔ BỘC>";
        $dan .= "<THIÊN DI>";
        $mao .= "<TẬT ÁCH>";
        $thin .= "<TÀI BẠCH>";
        $ti .= "<TỬ TÔN>";
        $ngo .= "<PHU THÊ>";
        $mui .= "<HUYNH ĐỆ>";
        if ($canmoi == 1) {
            $cuc = "Mộc"; //canh thân
            $nienhanty = 83;
        } else if ($canmoi == 3) {
            $cuc = "Kim"; //nhâm thân
            $nienhanty = 84;
        } else if ($canmoi == 5) {
            $cuc = "Thủy"; //giáp thân
            $nienhanty = 82;
        } else if ($canmoi == 7) {
            $cuc = "Hỏa"; //bính thân
            $nienhanty = 86;
        } else if ($canmoi == 9) {
            $cuc = "Thổ"; //mậu thân
            $nienhanty = 85;
        } else {
            $baoloi .= "Lỗi tìm cục khi MỆNH ở Thân";
        }
    } else if ($thangsinh - $giosinh == 7 || $thangsinh - $giosinh == -5) {
        //an 12 cung khi mệnh ở Dậu
        $dau .= "<MỆNH>";
        $tuat .= "<PHỤ MẪU>";
        $hoi .= "<PHÚC ĐỨC>";
        $ty .= "<ĐIỀN TRẠCH>";
        $suu .= "<QUAN LỘC>";
        $dan .= "<NÔ BỘC>";
        $mao .= "<THIÊN DI>";
        $thin .= "<TẬT ÁCH>";
        $ti .= "<TÀI BẠCH>";
        $ngo .= "<TỬ TÔN>";
        $mui .= "<PHU THÊ>";
        $than .= "<HUYNH ĐỆ>";
        if ($canmoi == 1) {
            $cuc = "Mộc"; //tân dậu
            $nienhanty = 93;
        } else if ($canmoi == 3) {
            $cuc = "Kim"; //quý dậu
            $nienhanty = 94;
        } else if ($canmoi == 5) {
            $cuc = "Thủy"; //ất dậu
            $nienhanty = 92;
        } else if ($canmoi == 7) {
            $cuc = "Hỏa"; //đinh dậu
            $nienhanty = 96;
        } else if ($canmoi == 9) {
            $cuc = "Thổ"; //kỷ dậu
            $nienhanty = 95;
        } else {
            $baoloi .= "Lỗi tìm cục khi MỆNH ở Dậu";
        }
    } else if ($thangsinh - $giosinh == 8 || $thangsinh - $giosinh == -4) {
        //an 12 cung khi mệnh ở Tuất
        $tuat .= "<MỆNH>";
        $hoi .= "<PHỤ MẪU>";
        $ty .= "<PHÚC ĐỨC>";
        $suu .= "<ĐIỀN TRẠCH>";
        $dan .= "<QUAN LỘC>";
        $mao .= "<NÔ BỘC>";
        $thin .= "<THIÊN DI>";
        $ti .= "<TẬT ÁCH>";
        $ngo .= "<TÀI BẠCH>";
        $mui .= "<TỬ TÔN>";
        $than .= "<PHU THÊ>";
        $dau .= "<HUYNH ĐỆ>";
        if ($canmoi == 1) {
            $cuc = "Thủy"; //nhâm tuất
            $nienhanty = 104;
        } else if ($canmoi == 3) {
            $cuc = "Hỏa"; //giáp tuất
            $nienhanty = 102;
        } else if ($canmoi == 5) {
            $cuc = "Thổ"; //bính tuất
            $nienhanty = 106;
        } else if ($canmoi == 7) {
            $cuc = "Mộc"; //mậu tuất
            $nienhanty = 105;
        } else if ($canmoi == 9) {
            $cuc = "Kim"; //canh tuất
            $nienhanty = 103;
        } else {
            $baoloi .= "Lỗi tìm cục khi MỆNH ở Tuất";
        }
    } else if ($thangsinh - $giosinh == 9 || $thangsinh - $giosinh == -3) {
        //an 12 cung khi mệnh ở Hợi
        $hoi .= "<MỆNH>";
        $ty .= "<PHỤ MẪU>";
        $suu .= "<PHÚC ĐỨC>";
        $dan .= "<ĐIỀN TRẠCH>";
        $mao .= "<QUAN LỘC>";
        $thin .= "<NÔ BỘC>";
        $ti .= "<THIÊN DI>";
        $ngo .= "<TẬT ÁCH>";
        $mui .= "<TÀI BẠCH>";
        $than .= "<TỬ TÔN>";
        $dau .= "<PHU THÊ>";
        $tuat .= "<HUYNH ĐỆ>";
        if ($canmoi == 1) {
            $cuc = "Thủy"; //quý hợi
            $nienhanty = 114;
        } else if ($canmoi == 3) {
            $cuc = "Hỏa"; //ất hợi
            $nienhanty = 112;
        } else if ($canmoi == 5) {
            $cuc = "Thổ"; //đinh hợi
            $nienhanty = 116;
        } else if ($canmoi == 7) {
            $cuc = "Mộc"; //kỷ hợi
            $nienhanty = 115;
        } else if ($canmoi == 9) {
            $cuc = "Kim"; //tân hợi
            $nienhanty = 113;
        } else {
            $baoloi .= "Lỗi tìm cục khi MỆNH ở Hợi";
        }
    } else {
        echo "Lỗi an 12 cung MỆNH";
    }

    //Tính năm hạn khi biết năm hạn ở Tý

    if ($nienhanty < 7) {
        $nienhansuu = $nienhanty + 110;
        $nienhandan = $nienhanty + 100;
        $nienhanmao = $nienhanty + 90;
        $nienhanthin = $nienhanty + 80;
        $nienhanti = $nienhanty + 70;
        $nienhanngo = $nienhanty + 60;
        $nienhanmui = $nienhanty + 50;
        $nienhanthan = $nienhanty + 40;
        $nienhandau = $nienhanty + 30;
        $nienhantuat = $nienhanty + 20;
        $nienhanhoi = $nienhanty + 10;
    } else if (7 < $nienhanty and $nienhanty < 17) {
        $nienhansuu = $nienhanty - 10;
        $nienhandan = $nienhanty + 100;
        $nienhanmao = $nienhanty + 90;
        $nienhanthin = $nienhanty + 80;
        $nienhanti = $nienhanty + 70;
        $nienhanngo = $nienhanty + 60;
        $nienhanmui = $nienhanty + 50;
        $nienhanthan = $nienhanty + 40;
        $nienhandau = $nienhanty + 30;
        $nienhantuat = $nienhanty + 20;
        $nienhanhoi = $nienhanty + 10;
    } else if (17 < $nienhanty and $nienhanty < 27) {
        $nienhansuu = $nienhanty - 10;
        $nienhandan = $nienhanty - 20;
        $nienhanmao = $nienhanty + 90;
        $nienhanthin = $nienhanty + 80;
        $nienhanti = $nienhanty + 70;
        $nienhanngo = $nienhanty + 60;
        $nienhanmui = $nienhanty + 50;
        $nienhanthan = $nienhanty + 40;
        $nienhandau = $nienhanty + 30;
        $nienhantuat = $nienhanty + 20;
        $nienhanhoi = $nienhanty + 10;
    } else if (27 < $nienhanty and $nienhanty < 37) {
        $nienhansuu = $nienhanty - 10;
        $nienhandan = $nienhanty - 20;
        $nienhanmao = $nienhanty - 30;
        $nienhanthin = $nienhanty + 80;
        $nienhanti = $nienhanty + 70;
        $nienhanngo = $nienhanty + 60;
        $nienhanmui = $nienhanty + 50;
        $nienhanthan = $nienhanty + 40;
        $nienhandau = $nienhanty + 30;
        $nienhantuat = $nienhanty + 20;
        $nienhanhoi = $nienhanty + 10;
    } else if (37 < $nienhanty and $nienhanty < 47) {
        $nienhansuu = $nienhanty - 10;
        $nienhandan = $nienhanty - 20;
        $nienhanmao = $nienhanty - 30;
        $nienhanthin = $nienhanty - 40;
        $nienhanti = $nienhanty + 70;
        $nienhanngo = $nienhanty + 60;
        $nienhanmui = $nienhanty + 50;
        $nienhanthan = $nienhanty + 40;
        $nienhandau = $nienhanty + 30;
        $nienhantuat = $nienhanty + 20;
        $nienhanhoi = $nienhanty + 10;
    } else if (47 < $nienhanty and $nienhanty < 57) {
        $nienhansuu = $nienhanty - 10;
        $nienhandan = $nienhanty - 20;
        $nienhanmao = $nienhanty - 30;
        $nienhanthin = $nienhanty - 40;
        $nienhanti = $nienhanty - 50;
        $nienhanngo = $nienhanty + 60;
        $nienhanmui = $nienhanty + 50;
        $nienhanthan = $nienhanty + 40;
        $nienhandau = $nienhanty + 30;
        $nienhantuat = $nienhanty + 20;
        $nienhanhoi = $nienhanty + 10;
    } else if (57 < $nienhanty and $nienhanty < 67) {
        $nienhansuu = $nienhanty - 10;
        $nienhandan = $nienhanty - 20;
        $nienhanmao = $nienhanty - 30;
        $nienhanthin = $nienhanty - 40;
        $nienhanti = $nienhanty - 50;
        $nienhanngo = $nienhanty - 60;
        $nienhanmui = $nienhanty + 50;
        $nienhanthan = $nienhanty + 40;
        $nienhandau = $nienhanty + 30;
        $nienhantuat = $nienhanty + 20;
        $nienhanhoi = $nienhanty + 10;
    } else if (67 < $nienhanty and $nienhanty < 77) {
        $nienhansuu = $nienhanty - 10;
        $nienhandan = $nienhanty - 20;
        $nienhanmao = $nienhanty - 30;
        $nienhanthin = $nienhanty - 40;
        $nienhanti = $nienhanty - 50;
        $nienhanngo = $nienhanty - 60;
        $nienhanmui = $nienhanty - 70;
        $nienhanthan = $nienhanty + 40;
        $nienhandau = $nienhanty + 30;
        $nienhantuat = $nienhanty + 20;
        $nienhanhoi = $nienhanty + 10;
    } else if (77 < $nienhanty and $nienhanty < 87) {
        $nienhansuu = $nienhanty - 10;
        $nienhandan = $nienhanty - 20;
        $nienhanmao = $nienhanty - 30;
        $nienhanthin = $nienhanty - 40;
        $nienhanti = $nienhanty - 50;
        $nienhanngo = $nienhanty - 60;
        $nienhanmui = $nienhanty - 70;
        $nienhanthan = $nienhanty - 80;
        $nienhandau = $nienhanty + 30;
        $nienhantuat = $nienhanty + 20;
        $nienhanhoi = $nienhanty + 10;
    } else if (87 < $nienhanty and $nienhanty < 97) {
        $nienhansuu = $nienhanty - 10;
        $nienhandan = $nienhanty - 20;
        $nienhanmao = $nienhanty - 30;
        $nienhanthin = $nienhanty - 40;
        $nienhanti = $nienhanty - 50;
        $nienhanngo = $nienhanty - 60;
        $nienhanmui = $nienhanty - 70;
        $nienhanthan = $nienhanty - 80;
        $nienhandau = $nienhanty - 90;
        $nienhantuat = $nienhanty + 20;
        $nienhanhoi = $nienhanty + 10;
    } else if (97 < $nienhanty and $nienhanty < 107) {
        $nienhansuu = $nienhanty - 10;
        $nienhandan = $nienhanty - 20;
        $nienhanmao = $nienhanty - 30;
        $nienhanthin = $nienhanty - 40;
        $nienhanti = $nienhanty - 50;
        $nienhanngo = $nienhanty - 60;
        $nienhanmui = $nienhanty - 70;
        $nienhanthan = $nienhanty - 80;
        $nienhandau = $nienhanty - 90;
        $nienhantuat = $nienhanty - 100;
        $nienhanhoi = $nienhanty + 10;
    } else if (107 < $nienhanty) {
        $nienhansuu = $nienhanty - 10;
        $nienhandan = $nienhanty - 20;
        $nienhanmao = $nienhanty - 30;
        $nienhanthin = $nienhanty - 40;
        $nienhanti = $nienhanty - 50;
        $nienhanngo = $nienhanty - 60;
        $nienhanmui = $nienhanty - 70;
        $nienhanthan = $nienhanty - 80;
        $nienhandau = $nienhanty - 90;
        $nienhantuat = $nienhanty - 100;
        $nienhanhoi = $nienhanty - 110;
    } else {
        $baoloi .= "lỗi tính năm hạn\n";
    }

    //Tìm sao Tử Vi khi biết cục và ngày sinh

    if ($cuc == "Thủy") {
        if ($ngaysinh == 22 || $ngaysinh == 23) {
            $chinhtinhty[0] = "Tử Vi";
        } else if ($ngaysinh == 1 || $ngaysinh == 24 || $ngaysinh == 25) {
            $chinhtinhsuu[0] = "Tử Vi";
        } else if ($ngaysinh == 2 || $ngaysinh == 3 || $ngaysinh == 26 || $ngaysinh == 27) {
            $chinhtinhdan[0] = "Tử Vi";
        } else if ($ngaysinh == 4 || $ngaysinh == 5 || $ngaysinh == 28 || $ngaysinh == 29) {
            $chinhtinhmao[0] = "Tử Vi";
        } else if ($ngaysinh == 6 || $ngaysinh == 7 || $ngaysinh == 30) {
            $chinhtinhthin[0] = "Tử Vi";
        } else if ($ngaysinh == 8 || $ngaysinh == 9) {
            $chinhtinhti[0] = "Tử Vi";
        } else if ($ngaysinh == 10 || $ngaysinh == 11) {
            $chinhtinhngo[0] = "Tử Vi";
        } else if ($ngaysinh == 12 || $ngaysinh == 13) {
            $chinhtinhmui[0] = "Tử Vi";
        } else if ($ngaysinh == 14 || $ngaysinh == 15) {
            $chinhtinhthan[0] = "Tử Vi";
        } else if ($ngaysinh == 16 || $ngaysinh == 17) {
            $chinhtinhdau[0] = "Tử Vi";
        } else if ($ngaysinh == 18 || $ngaysinh == 19) {
            $chinhtinhtuat[0] = "Tử Vi";
        } else if ($ngaysinh == 20 || $ngaysinh == 21) {
            $chinhtinhhoi[0] = "Tử Vi";
        } else {
            $baoloi .= "Lỗi tìm sao Tử Vi là cục Thủy";
        }
    } else if ($cuc == "Mộc") {
        if ($ngaysinh == 25) {
            $chinhtinhty[0] = "Tử Vi";
        } else if ($ngaysinh == 2 || $ngaysinh == 28) {
            $chinhtinhsuu[0] = "Tử Vi";
        } else if ($ngaysinh == 3 || $ngaysinh == 5) {
            $chinhtinhdan[0] = "Tử Vi";
        } else if ($ngaysinh == 6 || $ngaysinh == 8) {
            $chinhtinhmao[0] = "Tử Vi";
        } else if ($ngaysinh == 1 || $ngaysinh == 9 || $ngaysinh == 11) {
            $chinhtinhthin[0] = "Tử Vi";
        } else if ($ngaysinh == 4 || $ngaysinh == 12 || $ngaysinh == 14) {
            $chinhtinhti[0] = "Tử Vi";
        } else if ($ngaysinh == 7 || $ngaysinh == 15 || $ngaysinh == 17) {
            $chinhtinhngo[0] = "Tử Vi";
        } else if ($ngaysinh == 10 || $ngaysinh == 18 || $ngaysinh == 20) {
            $chinhtinhmui[0] = "Tử Vi";
        } else if ($ngaysinh == 13 || $ngaysinh == 21 || $ngaysinh == 23) {
            $chinhtinhthan[0] = "Tử Vi";
        } else if ($ngaysinh == 16 || $ngaysinh == 24 || $ngaysinh == 26) {
            $chinhtinhdau[0] = "Tử Vi";
        } else if ($ngaysinh == 19 || $ngaysinh == 27 || $ngaysinh == 29) {
            $chinhtinhtuat[0] = "Tử Vi";
        } else if ($ngaysinh == 22 || $ngaysinh == 30) {
            $chinhtinhhoi[0] = "Tử Vi";
        } else {
            $baoloi .= "Lỗi tìm sao Tử Vi là cục Mộc";
        }
    } else if ($cuc == "Kim") {
        if ($ngaysinh == 5) {
            $chinhtinhty = "Tử Vi";
        } else if ($ngaysinh == 3 || $ngaysinh == 9) {
            $chinhtinhsuu[0] = "Tử Vi";
        } else if ($ngaysinh == 4 || $ngaysinh == 7 || $ngaysinh == 13) {
            $chinhtinhdan[0] = "Tử Vi";
        } else if ($ngaysinh == 8 || $ngaysinh == 11 || $ngaysinh == 17) {
            $chinhtinhmao[0] = "Tử Vi";
        } else if ($ngaysinh == 2 || $ngaysinh == 12 || $ngaysinh == 15 || $ngaysinh == 21) {
            $chinhtinhthin[0] = "Tử Vi";
        } else if ($ngaysinh == 6 || $ngaysinh == 16 || $ngaysinh == 19 || $ngaysinh == 25) {
            $chinhtinhti[0] = "Tử Vi";
        } else if ($ngaysinh == 10 || $ngaysinh == 20 || $ngaysinh == 23 || $ngaysinh == 29) {
            $chinhtinhngo[0] = "Tử Vi";
        } else if ($ngaysinh == 14 || $ngaysinh == 24 || $ngaysinh == 27) {
            $chinhtinhmui[0] = "Tử Vi";
        } else if ($ngaysinh == 8 || $ngaysinh == 18) {
            $chinhtinhthan[0] = "Tử Vi";
        } else if ($ngaysinh == 22) {
            $chinhtinhdau[0] = "Tử Vi";
        } else if ($ngaysinh == 26) {
            $chinhtinhtuat[0] = "Tử Vi";
        } else if ($ngaysinh == 1 || $ngaysinh == 306) {
            $chinhtinhhoi[0] = "Tử Vi";
        } else {
            $baoloi .= "Lỗi tìm sao Tử Vi là cục Mộc";
        }
    } else if ($cuc == "Thổ") {
        if ($ngaysinh == 7) {
            $chinhtinhty[0] = "Tử Vi";
        } else if ($ngaysinh == 4 || $ngaysinh == 12) {
            $chinhtinhsuu[0] = "Tử Vi";
        } else if ($ngaysinh == 5 || $ngaysinh == 9 || $ngaysinh == 17) {
            $chinhtinhdan[0] = "Tử Vi";
        } else if ($ngaysinh == 10 || $ngaysinh == 14 || $ngaysinh == 22) {
            $chinhtinhmao[0] = "Tử Vi";
        } else if ($ngaysinh == 3 || $ngaysinh == 15 || $ngaysinh == 19 || $ngaysinh == 27) {
            $chinhtinhthin[0] = "Tử Vi";
        } else if ($ngaysinh == 8 || $ngaysinh == 20 || $ngaysinh == 24) {
            $chinhtinhti[0] = "Tử Vi";
        } else if ($ngaysinh == 1 || $ngaysinh == 13 || $ngaysinh == 25 || $ngaysinh == 29) {
            $chinhtinhngo[0] = "Tử Vi";
        } else if ($ngaysinh == 6 || $ngaysinh == 18 || $ngaysinh == 30) {
            $chinhtinhmui[0] = "Tử Vi";
        } else if ($ngaysinh == 11 || $ngaysinh == 23) {
            $chinhtinhthan[0] = "Tử Vi";
        } else if ($ngaysinh == 16 || $ngaysinh == 28) {
            $chinhtinhdau[0] = "Tử Vi";
        } else if ($ngaysinh == 21) {
            $chinhtinhtuat[0] = "Tử Vi";
        } else if ($ngaysinh == 2 || $ngaysinh == 26) {
            $chinhtinhhoi[0] = "Tử Vi";
        } else {
            $baoloi .= "Lỗi tìm sao Tử Vi là cục Mộc";
        }
    } else if ($cuc == "Hỏa") {
        if ($ngaysinh == 9 || $ngaysinh == 19) {
            $chinhtinhty[0] = "Tử Vi";
        } else if ($ngaysinh == 5 || $ngaysinh == 15 || $ngaysinh == 25) {
            $chinhtinhsuu[0] = "Tử Vi";
        } else if ($ngaysinh == 6 || $ngaysinh == 11 || $ngaysinh == 21) {
            $chinhtinhdan[0] = "Tử Vi";
        } else if ($ngaysinh == 12 || $ngaysinh == 17 || $ngaysinh == 27) {
            $chinhtinhmao[0] = "Tử Vi";
        } else if ($ngaysinh == 4 || $ngaysinh == 18 || $ngaysinh == 23) {
            $chinhtinhthin[0] = "Tử Vi";
        } else if ($ngaysinh == 10 || $ngaysinh == 24 || $ngaysinh == 29) {
            $chinhtinhti[0] = "Tử Vi";
        } else if ($ngaysinh == 2 || $ngaysinh == 16 || $ngaysinh == 30) {
            $chinhtinhngo[0] = "Tử Vi";
        } else if ($ngaysinh == 8 || $ngaysinh == 22) {
            $chinhtinhmui[0] = "Tử Vi";
        } else if ($ngaysinh == 14 || $ngaysinh == 18) {
            $chinhtinhthan[0] = "Tử Vi";
        } else if ($ngaysinh == 1 || $ngaysinh == 20) {
            $chinhtinhdau[0] = "Tử Vi";
        } else if ($ngaysinh == 7 || $ngaysinh == 26) {
            $chinhtinhtuat[0] = "Tử Vi";
        } else if ($ngaysinh == 3 || $ngaysinh == 13) {
            $chinhtinhhoi[0] = "Tử Vi";
        } else {
            $baoloi .= "Lỗi tìm sao Tử Vi là cục Mộc";
        }
    } else {
        $baoloi .= "Lỗi tìm sao Tử Vi";
    }

    //An chòm sao Tử Vi , Thiên Phủ
    if ($chinhtinhty[0] == "Tử Vi") {
        $chinhtinhthin[0] = "Liêm Trinh";
        $chinhtinhmui[0] = "Thiên Đồng";
        $chinhtinhthan[0] = "Vũ Khúc";
        $chinhtinhdau[0] = "Thái Dương";
        $chinhtinhhoi[0] = "Cơ";

        $chinhtinhthin[1] = "Thiên Phủ";
        $chinhtinhti[1] = "Thái Âm";
        $chinhtinhngo[1] = "Tham Lang";
        $chinhtinhmui[1] = "Cự Môn";
        $chinhtinhthan[1] = "Thiên Tướng";
        $chinhtinhdau[1] = "Thiên Lương";
        $chinhtinhtuat[1] = "Thất Sát";
        $chinhtinhdan[1] = "Phá Quân";
    } else if ($chinhtinhsuu[0] == "Tử Vi") {
        $chinhtinhti[0] = "Liêm Trinh";
        $chinhtinhthan[0] = "Thiên Đồng";
        $chinhtinhdau[0] = "Vũ Khúc";
        $chinhtinhtuat[0] = "Thái Dương";
        $chinhtinhty[0] = "Cơ";

        $chinhtinhmao[1] = "Thiên Phủ";
        $chinhtinhthin[1] = "Thái Âm";
        $chinhtinhty[1] = "Tham Lang";
        $chinhtinhngo[1] = "Cự Môn";
        $chinhtinhmui[1] = "Thiên Tướng";
        $chinhtinhthan[1] = "Thiên Lương";
        $chinhtinhdau[1] = "Thất Sát";
        $chinhtinhsuu[1] = "Phá Quân";
    } else if ($chinhtinhdan[0] == "Tử Vi") {
        $chinhtinhngo[0] = "Liêm Trinh";
        $chinhtinhdau[0] = "Thiên Đồng";
        $chinhtinhtuat[0] = "Vũ Khúc";
        $chinhtinhhoi[0] = "Thái Dương";
        $chinhtinhsuu[0] = "Cơ";

        $chinhtinhdan[1] = "Thiên Phủ";
        $chinhtinhmao[1] = "Thái Âm";
        $chinhtinhthin[1] = "Tham Lang";
        $chinhtinhti[1] = "Cự Môn";
        $chinhtinhngo[1] = "Thiên Tướng";
        $chinhtinhmui[1] = "Thiên Lương";
        $chinhtinhthan[1] = "Thất Sát";
        $chinhtinhty[1] = "Phá Quân";
    } else if ($chinhtinhmao[0] == "Tử Vi") {
        $chinhtinhmui[0] = "Liêm Trinh";
        $chinhtinhtuat[0] = "Thiên Đồng";
        $chinhtinhhoi[0] = "Vũ Khúc";
        $chinhtinhty[0] = "Thái Dương";
        $chinhtinhdan[0] = "Cơ";

        $chinhtinhsuu[1] = "Thiên Phủ";
        $chinhtinhdan[1] = "Thái Âm";
        $chinhtinhmao[1] = "Tham Lang";
        $chinhtinhthin[1] = "Cự Môn";
        $chinhtinhti[1] = "Thiên Tướng";
        $chinhtinhngo[1] = "Thiên Lương";
        $chinhtinhmui[1] = "Thất Sát";
        $chinhtinhhoi[1] = "Phá Quân";
    } else if ($chinhtinhthin[0] == "Tử Vi") {
        $chinhtinhthan[0] = "Liêm Trinh";
        $chinhtinhhoi[0] = "Thiên Đồng";
        $chinhtinhty[0] = "Vũ Khúc";
        $chinhtinhsuu[0] = "Thái Dương";
        $chinhtinhmao[0] = "Cơ";

        $chinhtinhty[1] = "Thiên Phủ";
        $chinhtinhsuu[1] = "Thái Âm";
        $chinhtinhdan[1] = "Tham Lang";
        $chinhtinhmao[1] = "Cự Môn";
        $chinhtinhthin[1] = "Thiên Tướng";
        $chinhtinhti[1] = "Thiên Lương";
        $chinhtinhngo[1] = "Thất Sát";
        $chinhtinhtuat[1] = "Phá Quân";
    } else if ($chinhtinhti[0] == "Tử Vi") {
        $chinhtinhdau[0] = "Liêm Trinh";
        $chinhtinhty[0] = "Thiên Đồng";
        $chinhtinhsuu[0] = "Vũ Khúc";
        $chinhtinhdan[0] = "Thái Dương";
        $chinhtinhthin[0] = "Cơ";

        $chinhtinhhoi[1] = "Thiên Phủ";
        $chinhtinhty[1] = "Thái Âm";
        $chinhtinhsuu[1] = "Tham Lang";
        $chinhtinhdan[1] = "Cự Môn";
        $chinhtinhmao[1] = "Thiên Tướng";
        $chinhtinhthin[1] = "Thiên Lương";
        $chinhtinhti[1] = "Thất Sát";
        $chinhtinhdau[1] = "Phá Quân";
    } else if ($chinhtinhngo[0] == "Tử Vi") {
        $chinhtinhtuat[0] = "Liêm Trinh";
        $chinhtinhsuu[0] = "Thiên Đồng";
        $chinhtinhdan[0] = "Vũ Khúc";
        $chinhtinhmao[0] = "Thái Dương";
        $chinhtinhti[0] = "Cơ";

        $chinhtinhtuat[1] = "Thiên Phủ";
        $chinhtinhhoi[1] = "Thái Âm";
        $chinhtinhty[1] = "Tham Lang";
        $chinhtinhsuu[1] = "Cự Môn";
        $chinhtinhdan[1] = "Thiên Tướng";
        $chinhtinhmao[1] = "Thiên Lương";
        $chinhtinhthin[1] = "Thất Sát";
        $chinhtinhthan[1] = "Phá Quân";
    } else if ($chinhtinhmui[0] == "Tử Vi") {
        $chinhtinhhoi[0] = "Liêm Trinh";
        $chinhtinhdan[0] = "Thiên Đồng";
        $chinhtinhmao[0] = "Vũ Khúc";
        $chinhtinhthin[0] = "Thái Dương";
        $chinhtinhngo[0] = "Cơ";

        $chinhtinhdau[1] = "Thiên Phủ";
        $chinhtinhtuat[1] = "Thái Âm";
        $chinhtinhhoi[1] = "Tham Lang";
        $chinhtinhty[1] = "Cự Môn";
        $chinhtinhsuu[1] = "Thiên Tướng";
        $chinhtinhdan[1] = "Thiên Lương";
        $chinhtinhmao[1] = "Thất Sát";
        $chinhtinhmui[1] = "Phá Quân";
    } else if ($chinhtinhthan[0] == "Tử Vi") {
        $chinhtinhty[0] = "Liêm Trinh";
        $chinhtinhmao[0] = "Thiên Đồng";
        $chinhtinhthin[0] = "Vũ Khúc";
        $chinhtinhti[0] = "Thái Dương";
        $chinhtinhmui[0] = "Cơ";

        $chinhtinhthan[1] = "Thiên Phủ";
        $chinhtinhdau[1] = "Thái Âm";
        $chinhtinhtuat[1] = "Tham Lang";
        $chinhtinhhoi[1] = "Cự Môn";
        $chinhtinhty[1] = "Thiên Tướng";
        $chinhtinhsuu[1] = "Thiên Lương";
        $chinhtinhdan[1] = "Thất Sát";
        $chinhtinhngo[1] = "Phá Quân";
    } else if ($chinhtinhdau[0] == "Tử Vi") {
        $chinhtinhsuu[0] = "Liêm Trinh";
        $chinhtinhthin[0] = "Thiên Đồng";
        $chinhtinhti[0] = "Vũ Khúc";
        $chinhtinhngo[0] = "Thái Dương";
        $chinhtinhthan[0] = "Cơ";

        $chinhtinhmui[1] = "Thiên Phủ";
        $chinhtinhthan[1] = "Thái Âm";
        $chinhtinhdau[1] = "Tham Lang";
        $chinhtinhtuat[1] = "Cự Môn";
        $chinhtinhhoi[1] = "Thiên Tướng";
        $chinhtinhty[1] = "Thiên Lương";
        $chinhtinhsuu[1] = "Thất Sát";
        $chinhtinhthin[1] = "Phá Quân";
    } else if ($chinhtinhtuat[0] == "Tử Vi") {
        $chinhtinhdan[0] = "Liêm Trinh";
        $chinhtinhti[0] = "Thiên Đồng";
        $chinhtinhngo[0] = "Vũ Khúc";
        $chinhtinhmui[0] = "Thái Dương";
        $chinhtinhdau[0] = "Cơ";

        $chinhtinhngo[1] = "Thiên Phủ";
        $chinhtinhmui[1] = "Thái Âm";
        $chinhtinhthan[1] = "Tham Lang";
        $chinhtinhdau[1] = "Cự Môn";
        $chinhtinhtuat[1] = "Thiên Tướng";
        $chinhtinhhoi[1] = "Thiên Lương";
        $chinhtinhty[1] = "Thất Sát";
        $chinhtinhthin[1] = "Phá Quân";
    } else if ($chinhtinhhoi[0] == "Tử Vi") {
        $chinhtinhmao[0] = "Liêm Trinh";
        $chinhtinhngo[0] = "Thiên Đồng";
        $chinhtinhmui[0] = "Vũ Khúc";
        $chinhtinhthan[0] = "Thái Dương";
        $chinhtinhtuat[0] = "Cơ";

        $chinhtinhti[1] = "Thiên Phủ";
        $chinhtinhngo[1] = "Thái Âm";
        $chinhtinhmui[1] = "Tham Lang";
        $chinhtinhthan[1] = "Cự Môn";
        $chinhtinhdau[1] = "Thiên Tướng";
        $chinhtinhtuat[1] = "Thiên Lương";
        $chinhtinhhoi[1] = "Thất Sát";
        $chinhtinhmao[1] = "Phá Quân";
    } else {

        $baoloi .= "Lỗi an chính Tinh";
    }

    //An cung THÂN

    if ($thangsinh + $giosinh == 12) {
        $ty .= "THÂN";
    } else if ($thangsinh + $giosinh == 13) {
        $suu .= "THÂN";
    } else if ($thangsinh + $giosinh == 2 || $thangsinh + $giosinh == 14) {
        $dan .= "THÂN";
    } else if ($thangsinh + $giosinh == 3 || $thangsinh + $giosinh == 15) {
        $mao .= "THÂN";
    } else if ($thangsinh + $giosinh == 4 || $thangsinh + $giosinh == 16) {
        $thin .= "THÂN";
    } else if ($thangsinh + $giosinh == 5 || $thangsinh + $giosinh == 17) {
        $ti .= "THÂN";
    } else if ($thangsinh + $giosinh == 6 || $thangsinh + $giosinh == 18) {
        $ngo .= "THÂN";
    } else if ($thangsinh + $giosinh == 7 || $thangsinh + $giosinh == 19) {
        $mui .= "THÂN";
    } else if ($thangsinh + $giosinh == 8 || $thangsinh + $giosinh == 20) {
        $than .= "THÂN";
    } else if ($thangsinh + $giosinh == 9 || $thangsinh + $giosinh == 21) {
        $dau .= "THÂN";
    } else if ($thangsinh + $giosinh == 10 || $thangsinh + $giosinh == 22) {
        $tuat .= "THÂN";
    } else if ($thangsinh + $giosinh == 11 || $thangsinh + $giosinh == 23) {
        $hoi .= "THÂN";
    } else {
        echo "Lỗi tháng ngày";
    }

    //an chòm sao Thái Tuế. Trùng với địa chi năm sinh
    if ($diachi == "Tý") {
        $saototty[] = "Thái Tuế";
        $saototsuu[] = "Thiếu Dương";
        $saototdan[] = "Tang Môn";
        $saototmao[] = "Thiếu Âm";
        $saototthin[] = "Quan Phù";
        $saototti[] = "Tử Phù";
        $saototngo[] = "Tuế Phá";
        $saototmui[] = "Long Đức";
        $saototthan[] = "Bạch Hổ";
        $saototdau[] = "Phúc Đúc";
        $saotottuat[] = "Điếu Khách";
        $saotothoi[] = "Trực Phù";
    } else if ($diachi == "Sửu") {
        $saototsuu[] = "Thái Tuế";
        $saototdan[] = "Thiếu Dương";
        $saototmao[] = "Tang Môn";
        $saototthin[] = "Thiếu Âm";
        $saototti[] = "Quan Phù";
        $saototngo[] = "Tử Phù";
        $saototmui[] = "Tuế Phá";
        $saototthan[] = "Long Đức";
        $saototdau[] = "Bạch Hổ";
        $saotottuat[] = "Phúc Đúc";
        $saotothoi[] = "Điếu Khách";
        $saototty[] = "Trực Phù";
    } else if ($diachi == "Dần") {
        $saototdan[] = "Thái Tuế";
        $saototmao[] = "Thiếu Dương";
        $saototthin[] = "Tang Môn";
        $saototti[] = "Thiếu Âm";
        $saototngo[] = "Quan Phù";
        $saototmui[] = "Tử Phù";
        $saototthan[] = "Tuế Phá";
        $saototdau[] = "Long Đức";
        $saotottuat[] = "Bạch Hổ";
        $saotothoi[] = "Phúc Đúc";
        $saototty[] = "Điếu Khách";
        $saototsuu[] = "Trực Phù";
    } else if ($diachi == "Mão") {
        $saototmao[] = "Thái Tuế";
        $saototthin[] = "Thiếu Dương";
        $saototti[] = "Tang Môn";
        $saototngo[] = "Thiếu Âm";
        $saototmui[] = "Quan Phù";
        $saototthan[] = "Tử Phù";
        $saototdau[] = "Tuế Phá";
        $saotottuat[] = "Long Đức";
        $saotothoi[] = "Bạch Hổ";
        $saototty[] = "Phúc Đúc";
        $saototsuu[] = "Điếu Khách";
        $saototdan[] = "Trực Phù";
    } else if ($diachi == "Thìn") {
        $saototthin[] = "Thái Tuế";
        $saototti[] = "Thiếu Dương";
        $saototngo[] = "Tang Môn";
        $saototmui[] = "Thiếu Âm";
        $saototthan[] = "Quan Phù";
        $saototdau[] = "Tử Phù";
        $saotottuat[] = "Tuế Phá";
        $saotothoi[] = "Long Đức";
        $saototty[] = "Bạch Hổ";
        $saototsuu[] = "Phúc Đúc";
        $saototdan[] = "Điếu Khách";
        $saototmao[] = "Trực Phù";
    } else if ($diachi == "Tỵ") {
        $saototti[] = "Thái Tuế";
        $saototngo[] = "Thiếu Dương";
        $saototmui[] = "Tang Môn";
        $saototthan[] = "Thiếu Âm";
        $saototdau[] = "Quan Phù";
        $saotottuat[] = "Tử Phù";
        $saotothoi[] = "Tuế Phá";
        $saototty[] = "Long Đức";
        $saototsuu[] = "Bạch Hổ";
        $saototdan[] = "Phúc Đúc";
        $saototmao[] = "Điếu Khách";
        $saototthin[] = "Trực Phù";
    } else if ($diachi == "Mão") {
        $saototngo[] = "Thái Tuế";
        $saototmui[] = "Thiếu Dương";
        $saototthan[] = "Tang Môn";
        $saototdau[] = "Thiếu Âm";
        $saotottuat[] = "Quan Phù";
        $saotothoi[] = "Tử Phù";
        $saototty[] = "Tuế Phá";
        $saototsuu[] = "Long Đức";
        $saototdan[] = "Bạch Hổ";
        $saototmao[] = "Phúc Đúc";
        $saototthin[] = "Điếu Khách";
        $saototti[] = "Trực Phù";
    } else if ($diachi == "Mùi") {
        $saototmui[] = "Thái Tuế";
        $saototthan[] = "Thiếu Dương";
        $saototdau[] = "Tang Môn";
        $saotottuat[] = "Thiếu Âm";
        $saotothoi[] = "Quan Phù";
        $saototty[] = "Tử Phù";
        $saototsuu[] = "Tuế Phá";
        $saototdan[] = "Long Đức";
        $saototmao[] = "Bạch Hổ";
        $saototthin[] = "Phúc Đúc";
        $saototti[] = "Điếu Khách";
        $saototngo[] = "Trực Phù";
    } else if ($diachi == "Thân") {
        $saototthan[] = "Thái Tuế";
        $saototdau[] = "Thiếu Dương";
        $saotottuat[] = "Tang Môn";
        $saotothoi[] = "Thiếu Âm";
        $saototty[] = "Quan Phù";
        $saototsuu[] = "Tử Phù";
        $saototdan[] = "Tuế Phá";
        $saototmao[] = "Long Đức";
        $saototthin[] = "Bạch Hổ";
        $saototti[] = "Phúc Đúc";
        $saototngo[] = "Điếu Khách";
        $saototmui[] = "Trực Phù";
    } else if ($diachi == "Dậu") {
        $saototdau[] = "Thái Tuế";
        $saotottuat[] = "Thiếu Dương";
        $saotothoi[] = "Tang Môn";
        $saototty[] = "Thiếu Âm";
        $saototsuu[] = "Quan Phù";
        $saototdan[] = "Tử Phù";
        $saototmao[] = "Tuế Phá";
        $saototthin[] = "Long Đức";
        $saototti[] = "Bạch Hổ";
        $saototngo[] = "Phúc Đúc";
        $saototmui[] = "Điếu Khách";
        $saototthan[] = "Trực Phù";
    } else if ($diachi == "Tuất") {
        $saotottuat[] = "Thái Tuế";
        $saotothoi[] = "Thiếu Dương";
        $saototty[] = "Tang Môn";
        $saototsuu[] = "Thiếu Âm";
        $saototdan[] = "Quan Phù";
        $saototmao[] = "Tử Phù";
        $saototthin[] = "Tuế Phá";
        $saototti[] = "Long Đức";
        $saototngo[] = "Bạch Hổ";
        $saototmui[] = "Phúc Đúc";
        $saototthan[] = "Điếu Khách";
        $saototdau[] = "Trực Phù";
    } else if ($diachi == "Hợi") {
        $saotothoi[] = "Thái Tuế";
        $saototty[] = "Thiếu Dương";
        $saototsuu[] = "Tang Môn";
        $saototdan[] = "Thiếu Âm";
        $saototmao[] = "Quan Phù";
        $saototthin[] = "Tử Phù";
        $saototti[] = "Tuế Phá";
        $saototngo[] = "Long Đức";
        $saototmui[] = "Bạch Hổ";
        $saototthan[] = "Phúc Đúc";
        $saototdau[] = "Điếu Khách";
        $saotottuat[] = "Trực Phù";
    } else {
        $baoloi .= "Lỗi an chòm sao Thái Tuế";
    }
    //An sao Lộc Tồn. dựa theo can năm sinh
    //An Kình Dương , Đà La
    if ($thiencan == "Quý") {
        $saototty[] = "Lộc Tồn";
        $saototsuu[] = "Kình Dương";
        $saotothoi[] = "Đà La";
    } else if ($thiencan == "Giáp") {
        $saototdan[] = "Lộc Tồn";
        $saototmao[] = "Kình Dương";
        $saototsuu[] = "Đà La";
    } else if ($thiencan == "Ất") {
        $saototmao[] = "Lộc Tồn";
        $saototthin[] = "Kình Dương";
        $saototdan[] = "Đà La";
    } else if ($thiencan == "Bính" || $thiencan == "Mậu") {
        $saototti[] = "Lộc Tồn";
        $saototngo[] = "Kình Dương";
        $saototthin[] = "Đà La";
    } else if ($thiencan == "Đinh" || $thiencan == "Kỷ") {
        $saototngo[] = "Lộc Tồn";
        $saototmui[] = "Kình Dương";
        $saototi[] = "Đà La";
    } else if ($thiencan == "Canh") {
        $saototthan[] = "Lộc Tồn";
        $saototdau[] = "Kình Dương";
        $saototmui[] = "Đà La";
    } else if ($thiencan == "Tân") {
        $saototdau[] = "Lộc Tồn";
        $saotottuat[] = "Kình Dương";
        $saototthan[] = "Đà La";
    } else if ($thiencan == "Nhâm") {
        $saotothoi[] = "Lộc Tồn";
        $saototty[] = "Kình Dương";
        $saotottuat[] = "Đà La";
    } else {
        $baoloi .= "Lỗi an sao Lộc Tồn";
    }

    //Tính âm Dương của mệnh
    $banchatgioitinh = "";
    $chisogioitinh = 0;
    if ($thiencan == "Giáp" || $thiencan == "Bính" || $thiencan == "Mậu" || $thiencan == "Canh" || $thiencan == "Nhâm") {
        $banchatgioitinh = "Dương $gioitinh";
        if ($gioitinh == "Nam") {
            $chisogioitinh = 1;
        } else if ($gioitinh == "Nữ") {
            $chisogioitinh = -1;
        } else {
            $baoloi .= "Chỉ số giới tính Dương";
        }
    } else if ($thiencan == "Ất" || $thiencan == "Đinh" || $thiencan == "Kỷ" || $thiencan == "Tân" || $thiencan == "Quý") {
        $banchatgioitinh = "Âm $gioitinh";
        if ($gioitinh == "Nam") {
            $chisogioitinh = -1;
        } else if ($gioitinh == "Nữ") {
            $chisogioitinh = 1;
        } else {
            $baoloi .= "Chỉ số giới tính Âm";
        }
    } else {
        $baoloi .= "Lỗi tính bản chất Chủ quẻ";
    }
    // an vòng sao Trường Sinh
    if ($cuc == "Kim") {
        $saototty[] = "Trường Sinh";
        if ($chisogioitinh == 1) {
            $saototsuu[] = "Mộc Dục";
            $saototdan[] = "Quan Đới";
            $saototmao[] = "Lâm Quan";
            $saototthin[] = "Đế Vượng";
            $saototti[] = "Suy";
            $saototngo[] = "Bệnh";
            $saototmui[] = "Tử";
            $saototthan[] = "Mộ";
            $saototdau[] = "Tuyệt";
            $saotottuat[] = "Thai";
            $saotothoi[] = "Dưỡng";
        } else if ($chisogioitinh == -1) {
            $saotothoi[] = "Mộc Dục";
            $saotottuat[] = "Quan Đới";
            $saototdau[] = "Lâm Quan";
            $saototthan[] = "Đế Vượng";
            $saototmui[] = "Suy";
            $saototngo[] = "Bệnh";
            $saototti[] = "Tử";
            $saototthin[] = "Mộ";
            $saototmao[] = "Tuyệt";
            $saototdan[] = "Thai";
            $saototsuu[] = "Dưỡng";
        } else {
            $baoloi .= "Lỗi vòng trường sinh ở cục Kim";
        }
    } else if ($cuc == "Mộc") {
        $saotothoi[] = "Trường Sinh";
        if ($chisogioitinh == 1) {
            $saototty[] = "Mộc Dục";
            $saototsuu[] = "Quan Đới";
            $saototdan[] = "Lâm Quan";
            $saototmao[] = "Đế Vượng";
            $saototthin[] = "Suy";
            $saototti[] = "Bệnh";
            $saototngo[] = "Tử";
            $saototmui[] = "Mộ";
            $saototthan[] = "Tuyệt";
            $saototdau[] = "Thai";
            $saotottuat[] = "Dưỡng";
        } else if ($chisogioitinh == -1) {
            $saotottuat[] = "Mộc Dục";
            $saototdau[] = "Quan Đới";
            $saototthan[] = "Lâm Quan";
            $saototmui[] = "Đế Vượng";
            $saototngo[] = "Suy";
            $saototty[] = "Bệnh";
            $saototthin[] = "Tử";
            $saototmao[] = "Mộ";
            $saototdan[] = "Tuyệt";
            $saototsuu[] = "Thai";
            $saototty[] = "Dưỡng";
        } else {
            $baoloi .= "Lỗi vòng trường sinh ở cục Mộc";
        }
    } else if ($cuc == "Hỏa") {
        $saototdan[] = "Trường Sinh";
        if ($chisogioitinh == 1) {
            $saototmao[] = "Mộc Dục";
            $saototthin[] = "Quan Đới";
            $saototti[] = "Lâm Quan";
            $saototngo[] = "Đế Vượng";
            $saototmui[] = "Suy";
            $saototthan[] = "Bệnh";
            $saototdau[] = "Tử";
            $saotottuat[] = "Mộ";
            $saotothoi[] = "Tuyệt";
            $saototty[] = "Thai";
            $saototsuu[] = "Dưỡng";
        } else if ($chisogioitinh == -1) {
            $saototsuu[] = "Mộc Dục";
            $saototty[] = "Quan Đới";
            $saotothoi[] = "Lâm Quan";
            $saotottuat[] = "Đế Vượng";
            $saototdau[] = "Suy";
            $saototthan[] = "Bệnh";
            $saototmui[] = "Tử";
            $saototngo[] = "Mộ";
            $saototti[] = "Tuyệt";
            $saototthin[] = "Thai";
            $saototmao[] = "Dưỡng";
        } else {
            $baoloi .= "Lỗi vòng trường sinh ở cục Hỏa";
        }
    } else if ($cuc == "Thủy" || $cuc == "Thổ") {
        $saototthan[] = "Trường Sinh";
        if ($chisogioitinh == 1) {
            $saototdau[] = "Mộc Dục";
            $saotottuat[] = "Quan Đới";
            $saotothoi[] = "Lâm Quan";
            $saototty[] = "Đế Vượng";
            $saototsuu[] = "Suy";
            $saototdan[] = "Bệnh";
            $saototmao[] = "Tử";
            $saototthin[] = "Mộ";
            $saototti[] = "Tuyệt";
            $saototngo[] = "Thai";
            $saototmui[] = "Dưỡng";
        } else if ($chisogioitinh == -1) {
            $saototmui[] = "Mộc Dục";
            $saototngo[] = "Quan Đới";
            $saototty[] = "Lâm Quan";
            $saototthin[] = "Đế Vượng";
            $saototmao[] = "Suy";
            $saototdan[] = "Bệnh";
            $saototsuu[] = "Tử";
            $saototty[] = "Mộ";
            $saotothoi[] = "Tuyệt";
            $saotottuat[] = "Thai";
            $saototdau[] = "Dưỡng";
        } else {
            $baoloi .= "Lỗi vòng trường sinh ở cục Thủy và Thổ";
        }
    } else {
        $baoloi .= "Lỗi an chòm sao Trường Sinh";
    }

    //An Địa Kiếp, Địa Không
    if ($giosinh == 1) {
        $saotothoi[] = "Địa Kiếp";
        $saotothoi[] = "Địa Không";
    } else if ($giosinh == 2) {
        $saototy[] = "Địa Kiếp";
        $saotottuat[] = "Địa Không";
    } else if ($giosinh == 3) {
        $saototsuu[] = "Địa Kiếp";
        $saototdau[] = "Địa Không";
    } else if ($giosinh == 4) {
        $saototdan[] = "Địa Kiếp";
        $saototthan[] = "Địa Không";
    } else if ($giosinh == 5) {
        $saototmao[] = "Địa Kiếp";
        $saototmui[] = "Địa Không";
    } else if ($giosinh == 6) {
        $saototthin[] = "Địa Kiếp";
        $saototngo[] = "Địa Không";
    } else if ($giosinh == 7) {
        $saototti[] = "Địa Kiếp";
        $saototti[] = "Địa Không";
    } else if ($giosinh == 8) {
        $saototngo[] = "Địa Kiếp";
        $saototthin[] = "Địa Không";
    } else if ($giosinh == 9) {
        $saototmui[] = "Địa Kiếp";
        $saototmao[] = "Địa Không";
    } else if ($giosinh == 10) {
        $saototthan[] = "Địa Kiếp";
        $saototdan[] = "Địa Không";
    } else if ($giosinh == 11) {
        $saototdau[] = "Địa Kiếp";
        $saototsuu[] = "Địa Không";
    } else if ($giosinh == 12) {
        $saototthuat[] = "Địa Kiếp";
        $saototty[] = "Địa Không";
    } else {
        $baoloi .= "Lỗi An sao Địa Không, Địa Kiếp";
    }


    echo $baoloi;


    ?>



    <table width="300" border="0" class="table">
        <tbody>
            <tr>
                <td><textarea class="text1">
                <?php echo $ti;
                echo "<br/>";
                for ($x = 0; $x < count($chinhtinhti); $x++) {
                    echo $chinhtinhti[$x];
                    echo "<br/>";
                }

                for ($x = 0; $x < count($saototti); $x++) {
                    echo $saototti[$x];
                    echo "+";
                }
                for ($x = 0; $x < count($saoxauti); $x++) {
                    echo $saoxauti[$x];
                    echo "-";
                }

                echo $nienhanti;
                ?>                 
                </textarea></td>

                <td><textarea class="text1">
                <?php echo $ngo;
                for ($x = 0; $x < count($chinhtinhngo); $x++) {
                    echo $chinhtinhngo[$x];
                    echo "<br/>";
                }

                for ($x = 0; $x < count($saototngo); $x++) {
                    echo $saototngo[$x];
                    echo "+";
                }
                for ($x = 0; $x < count($saoxaungo); $x++) {
                    echo $saoxaungo[$x];
                    echo "-";
                }
                echo $nienhanngo;
                ?>                 
                </textarea></td>

                <td><textarea class="text1">
                <?php echo $mui;
                for ($x = 0; $x < count($chinhtinhmui); $x++) {
                    echo $chinhtinhmui[$x];
                    echo "<br>";
                }

                for ($x = 0; $x < count($saototmui); $x++) {
                    echo $saototmui[$x];
                    echo "<br>";
                }
                for ($x = 0; $x < count($saoxaumui); $x++) {
                    echo $saoxaumui[$x];
                    echo "<br>";
                }
                echo $nienhanmui;
                ?>                 
                </textarea></td>

                <td><textarea class="text1">
                <?php echo $than;
                for ($x = 0; $x < count($chinhtinhthan); $x++) {
                    echo $chinhtinhthan[$x];
                    echo "<br>";
                }

                for ($x = 0; $x < count($saototthan); $x++) {
                    echo $saototthan[$x];
                    echo "<br>";
                }
                for ($x = 0; $x < count($saoxauthan); $x++) {
                    echo $saoxauthan[$x];
                    echo "<br>";
                }
                echo $nienhanthan;
                ?>                 
                </textarea></td>
            </tr>
            <tr>
                <td><textarea class="text1">
                <?php echo $thin;
                for ($x = 0; $x < count($chinhtinhthin); $x++) {
                    echo $chinhtinhthin[$x];
                    echo "<br>";
                }

                for ($x = 0; $x < count($saototthin); $x++) {
                    echo $saototthin[$x];
                    echo "<br>";
                }
                for ($x = 0; $x < count($saoxauthin); $x++) {
                    echo $saoxauthin[$x];
                    echo "<br>";
                }
                echo $nienhanthin;
                ?>                 
                </textarea></td>
                <td>
                    <p class="right">Họ tên :</p>
                    <p class="right">Ngày sinh :</p>
                    <p class="right">Năm sinh :</p>
                    <p class="right">Giờ sinh :</p>
                    <p class="right">Tuổi :</p>

                </td>
                <td>
                    <p class="left"><?php echo $ten ?> </p>
                    <p class="left"><?php echo "$ngaysinh tháng $thangsinh"; ?> </p>
                    <p class="left"><?php echo "$thiencan $diachi"; ?> </p>
                    <p class="left"><?php echo $giosinh ?> <strong><br></strong></p>
                    <p class="left"><?php
                                    echo $banchatgioitinh;
                                    ?> </p>

                </td>

                <td><textarea class="text1">
                <?php echo $dau;
                for ($x = 0; $x < count($chinhtinhdau); $x++) {
                    echo $chinhtinhdau[$x];
                    echo "<br>";
                }

                for ($x = 0; $x < count($saototdau); $x++) {
                    echo $saototdau[$x];
                    echo "<br>";
                }
                for ($x = 0; $x < count($saoxaudau); $x++) {
                    echo $saoxaudau[$x];
                    echo "<br>";
                }
                echo $nienhandau;
                ?>                 
                </textarea></td>

            </tr>
            <tr>
                <td><textarea class="text1">
                <?php echo $mao;
                for ($x = 0; $x < count($chinhtinhmao); $x++) {
                    echo $chinhtinhmao[$x];
                    echo "<br>";
                }

                for ($x = 0; $x < count($saototmao); $x++) {
                    echo $saototmao[$x];
                    echo "<br>";
                }
                for ($x = 0; $x < count($saoxaumao); $x++) {
                    echo $saoxaumao[$x];
                    echo "<br>";
                }
                echo $nienhanmao;
                ?>                 
                </textarea></td>
                <td>
                    <p class="right">Niên mệnh :</p>
                    <p class="right">Cục :</p>
                    <p class="right"></p>
                </td>
                <td>
                    <p class="left"><?php echo $hanh; ?> </p>
                    <p class="left"><?php echo $cuc; ?> </p>
                    <p class="left">
                        <?php
                        //xem ngũ hành của cục với niên mệnh
                        if ($hanh == "Kim") {
                            if ($cuc == "Thổ") {
                                echo "Cục sinh cho mệnh";
                            } else if ($cuc == "Hỏa") {
                                echo "Cục khắc mệnh";
                            } else {
                                echo "Bình thường";
                            }
                        } else if ($hanh == "Thủy") {
                            if ($cuc == "Kim") {
                                echo "Cục sinh cho mệnh";
                            } else if ($cuc == "Thổ") {
                                echo "Cục khắc mệnh";
                            } else {
                                echo "Bình thường";
                            }
                        } else if ($hanh == "Hỏa") {
                            if ($cuc == "Mộc") {
                                echo "Cục sinh cho mệnh";
                            } else if ($cuc == "Thủy") {
                                echo "Cục khắc mệnh";
                            } else {
                                echo "Bình thường";
                            }
                        } else if ($hanh == "Thổ") {
                            if ($cuc == "Hỏa") {
                                echo "Cục sinh cho mệnh";
                            } else if ($cuc == "Mộc") {
                                echo "Cục khắc mệnh";
                            } else {
                                echo "Bình thường";
                            }
                        } else if ($hanh == "Mộc") {
                            if ($cuc == "Thủy") {
                                echo "Cục sinh cho mệnh";
                            } else if ($cuc == "Kim") {
                                echo "Cục khắc mệnh";
                            } else {
                                echo "Bình thường";
                            }
                        } else {
                            echo "lỗi xem mệnh cục";
                        }
                        ?></p>
                </td>

                <td><textarea class="text1">
                <?php echo $tuat;
                for ($x = 0; $x < count($chinhtinhtuat); $x++) {
                    echo $chinhtinhtuat[$x];
                    echo "<br>";
                }

                for ($x = 0; $x < count($saotottuat); $x++) {
                    echo $saotottuat[$x];
                    echo "<br>";
                }
                for ($x = 0; $x < count($saoxautuat); $x++) {
                    echo $saoxautuat[$x];
                    echo "<br>";
                }
                echo $nienhantuat;
                ?>                 
                </textarea></td>
            </tr>
            <tr>
                <td><textarea class="text1">
                <?php echo $dan;
                for ($x = 0; $x < count($chinhtinhdan); $x++) {
                    echo $chinhtinhdan[$x];
                    echo "<br>";
                }

                for ($x = 0; $x < count($saototdan); $x++) {
                    echo $saototdan[$x];
                    echo "<br>";
                }
                for ($x = 0; $x < count($saoxaudan); $x++) {
                    echo $saoxaudan[$x];
                    echo "<br>";
                }
                echo $nienhandan;
                ?>                 
                </textarea></td>

                <td><textarea class="text1">
                <?php echo $suu;
                for ($x = 0; $x < count($chinhtinhsuu); $x++) {
                    echo $chinhtinhsuu[$x];
                    echo "<br>";
                }

                for ($x = 0; $x < count($saototsuu); $x++) {
                    echo $saototsuu[$x];
                    echo "<br>";
                }
                for ($x = 0; $x < count($saoxausuu); $x++) {
                    echo $saoxausuu[$x];
                    echo "<br>";
                }
                echo $nienhansuu;
                ?>                 
                </textarea></td>
                <td><textarea class="text1">
                <?php echo $ty;
                for ($x = 0; $x < count($chinhtinhty); $x++) {
                    echo $chinhtinhty[$x];
                    echo "<br>";
                }

                for ($x = 0; $x < count($saototty); $x++) {
                    echo $saototty[$x];
                    echo "<br>";
                }
                for ($x = 0; $x < count($saoxauty); $x++) {
                    echo $saoxauty[$x];
                    echo "<br>";
                }
                echo $nienhanty;
                ?>                 
                </textarea></td>
                <td><textarea class="text1">
                <?php echo $hoi;
                for ($x = 0; $x < count($chinhtinhhoi); $x++) {
                    echo $chinhtinhhoi[$x];
                    echo "<br>";
                }

                for ($x = 0; $x < count($saotothoi); $x++) {
                    echo $saotothoi[$x];
                    echo "<br>";
                }
                for ($x = 0; $x < count($saoxauhoi); $x++) {
                    echo $saoxauhoi[$x];
                    echo "<br>";
                }
                echo $nienhanhoi;
                ?>                 
                </textarea></td>
            </tr>
        </tbody>
    </table>
    <br>
    
</body>

</html>