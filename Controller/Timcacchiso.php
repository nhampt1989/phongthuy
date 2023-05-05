
<?php

$ten = "A";
$namsinh = 1979;
$ngaysinh = 18;
$thangsinh = 3;
$giosinh = 5;
$gioitinh = "Nam";
$saohoatinh_linhtinh = "Hỏa Tinh";

function timvitri_diachi_trong12cung($namsinh)
{
    if ($namsinh % 12 == 4) {
        return 0;
    } else if ($namsinh % 12 == 5) {
        return 1;
    } else if ($namsinh % 12 == 6) {
        return 2;
    } else if ($namsinh % 12 == 7) {
        return 3;
    } else if ($namsinh % 12 == 8) {
        return 4;
    } else if ($namsinh % 12 == 9) {
        return 5;
    } else if ($namsinh % 12 == 10) {
        return 6;
    } else if ($namsinh % 12 == 11) {
        return 7;
    } else if ($namsinh % 12 == 0) {
        return 8;
    } else if ($namsinh % 12 == 1) {
        return 9;
    } else if ($namsinh % 12 == 2) {
        return 10;
    } else if ($namsinh % 12 == 3) {
        return 11;
    } else {
        return 12;
    }
}

//array mới địa chi khi biết địa chi khởi đầu, 1 đi thuận,-1 đi nghịch
function mangmoi_12diachikhoituvitrichon($vitridau, $dithuan_nghich)
{
    $sothutu_12diachi = array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11,);
    $so_phantu = count($sothutu_12diachi);
    // xếp lại vòng tròn bắt đầu từ vị trí chọn
    for ($i = ($vitridau - 1); $i < $so_phantu; $i++) {

        $mangmoi_khoituvitrichon[] = $sothutu_12diachi[$i];
    }
    for ($i = 0; $i < ($vitridau - 1); $i++) {

        $mangmoi_khoituvitrichon[] = $sothutu_12diachi[$i];
    }

    // tìm giá trị của cung chính(12 địa chi) khi đếm đến điểm theo -1 chiều nghich, 1 chiều thuận
    if ($dithuan_nghich == 1) {
        $mangmoi = $mangmoi_khoituvitrichon;
    } else if ($dithuan_nghich == -1) {

        for ($i = ($so_phantu - 1); $i > 0; $i--) {

            $mangmoi[] = $mangmoi_khoituvitrichon[$i];
        }
        array_unshift($mangmoi, $mangmoi_khoituvitrichon[0]);
    } else {

        return "Lỗi xếp sao vào 12 cung";
    }
    return $mangmoi;
}

function mangmoi_cuamang_khoituvitrichon($mang, $vitridau, $dithuan_nghich)
{
    $so_phantu = count($mang);
    // xếp lại vòng tròn bắt đầu từ vị trí chọn
    for ($i = ($vitridau - 1); $i < $so_phantu; $i++) {

        $mangmoi_khoituvitrichon[] = $mang[$i];
    }
    for ($i = 0; $i < ($vitridau - 1); $i++) {

        $mangmoi_khoituvitrichon[] = $mang[$i];
    }

    // tìm giá trị của cung chính(12 địa chi) khi đếm đến điểm theo -1 chiều nghich, 1 chiều thuận
    if ($dithuan_nghich == 1) {
        $mangmoi = $mangmoi_khoituvitrichon;
    } else if ($dithuan_nghich == -1) {

        for ($i = ($so_phantu - 1); $i > 0; $i--) {

            $mangmoi[] = $mangmoi_khoituvitrichon[$i];
        }
        array_unshift($mangmoi, $mangmoi_khoituvitrichon[0]);
    } else {

        return "Lỗi xếp sao vào 12 cung";
    }
    return $mangmoi;
}
// Tìm vị trí
function timvitri_cuasao_tren12cung_khibiet($mang, $thutu_cungkhoi, $cachdi, $giatri_demden)
{
    $so_phantu = count($mang);
    $mangmoi_khoituvitrichon = array();
    // xếp lại vòng tròn bắt đầu từ vị trí chọn
    for ($i = ($thutu_cungkhoi - 1); $i < $so_phantu; $i++) {

        $mangmoi_khoituvitrichon[] = $mang[$i];
    }
    for ($i = 0; $i < ($thutu_cungkhoi - 1); $i++) {

        $mangmoi_khoituvitrichon[] = $mang[$i];
    }

    // tìm giá trị của cung chính(12 địa chi) khi đếm đến điểm theo -1 chiều nghich, 1 chiều thuận
    if ($cachdi == 1) {
        $mangmoi = $mangmoi_khoituvitrichon;
    } else if ($cachdi == -1) {

        for ($i = ($so_phantu - 1); $i > 0; $i--) {

            $mangmoi[] = $mangmoi_khoituvitrichon[$i];
        }
        array_unshift($mangmoi, $mangmoi_khoituvitrichon[0]);
    } else {

        return "Lỗi xếp sao vào 12 cung";
    }
    // Tìm vị trí khi đếm đến
    return $mangmoi[$giatri_demden - 1];
}
// xếp lại vòng tròn khi biết khởi điểm tại đâu

// Đưa mảng vể đi thuận : đâu là đầu->cuối, đi nghịch -1 là từ đầu ->cuối->cuối -1...
// khi có mảng mới đưa vị trí đầu lên vị trí định sẵn
function xepsaovao12cung($mang, $vitri, $cachdi)
{
    $mangtao1 = array();
    $mangtao2 = array();
    $so_phantu = count($mang);
    $mangmoi = array();
    // $cachđi = 1 -> đi thuận -> cách đi 2 -> đi nghịch
    if ($cachdi == 1) {
        $mangmoi = $mang;
    } else if ($cachdi == -1) {

        for ($i = ($so_phantu - 1); $i > 0; $i--) {

            $mangmoi[] = $mang[$i];
        }
        array_unshift($mangmoi, $mang[0]);
    } else {

        return "Lỗi xếp sao vào 12 cung";
    }
    // xếp mảng khi biết vị trí
    for ($i = 0; $i < $so_phantu; $i++) {
        if ($i + $vitri < $so_phantu) {
            $mangtao2[] = $mangmoi[$i];
        } else {
            //bỏ qua
        }
    }
    for ($i = 0; $i < $vitri; $i++) {
        $mangtao1[] = $mangmoi[$so_phantu - $vitri + $i];
    }
    return array_merge($mangtao1, $mangtao2);
}

function timvitri_cungmenh($thangsinh, $giosinh)
{
    $mangkhoitu_thangsinh = mangmoi_12diachikhoituvitrichon($thangsinh + 2, -1);
    return $mangkhoitu_thangsinh[$giosinh - 1];
}
function timvitri_cungthan($thangsinh, $giosinh)
{
    $mangkhoitu_thangsinh = mangmoi_12diachikhoituvitrichon($thangsinh + 2, 1);
    return $mangkhoitu_thangsinh[$giosinh - 1];
}

function timtriso_amduong($namsinh, $gioitinh)
{
    if ($namsinh % 2 == 0) {
        $namduongso = "Dương $gioitinh";
    } else {
        $namduongso = "Âm $gioitinh";
    }

    if ($namduongso == "Dương Nam" || $namduongso == "Âm Nữ") {
        return 1;
    } else if ($namduongso == "Âm Nam" || $namduongso == "Dương Nữ") {
        return -1;
    } else {
        return 8;
    }
}


// Tìm cục của đương số
function tim_cuccuaduongso($namsinh, $thangsinh, $giosinh)
{
    $lucthaphoagiap = array(
        "Giáp Tý" => array("Hải trung Kim", 4),
        "Ất Sửu" => array("Hải trung Kim", 4),
        "Bính Dần" => array("Lô trung Hỏa", 6),
        "Đinh Mão" => array("Lô trung Hỏa", 6),
        "Mậu Thìn" => array("Đại lâm Mộc", 3),
        "Kỷ Tỵ" => array("Đại lâm Mộc", 3),
        "Canh Ngọ" => array("Lộ bàng Thổ", 5),
        "Tân Mùi" => array("Lộ bàng Thổ", 5),
        "Nhâm Thân" => array("Kiếm phong Kim", 4),
        "Quý Dậu" => array("Kiếm phong Kim", 4),
        "Giáp Tuất" => array("Sơn dầu Hỏa", 6),
        "Ất Hợi" => array("Sơn dầu Hỏa", 6),
        "Bính Tý" => array("Giản hạ Thủy", 2),
        "Đinh Sửu" => array("Giản hạ Thủy", 2),
        "Mậu Dần" => array("Thành đầu Thổ", 5),
        "Kỷ Mão" => array("Thành đầu Thổ", 5),
        "Canh Thìn" => array("Bạch lạp Kim", 4),
        "Tân Tỵ" => array("Bạch lạp Kim", 4),
        "Nhâm Ngọ" => array("Dương liễu Mộc", 3),
        "Quý Mùi" => array("Dương liễu Mộc", 3),
        "Giáp Thân" => array("Tuyền trung Thủy", 2),
        "Ất Dậu" => array("Tuyền trung Thủy", 2),
        "Bính Tuất" => array("Ốc thượng Thổ", 5),
        "Đinh Hợi" => array("Ốc thượng Thổ", 5),
        "Mậu Tý" => array("Tích lịch Hỏa", 6),
        "Kỷ Sửu" => array("Tích lịch Hỏa", 6),
        "Canh Dần" => array("Tùng bách Mộc", 3),
        "Tân Mão" => array("Tùng bách Mộc", 3),
        "Nhâm Thìn" => array("Tràng lưu Thủy", 2),
        "Quý Tỵ" => array("Tràng lưu Thủy", 2),
        "Giáp Ngọ" => array("Sa trung Kim", 4),
        "Ất Mùi" => array("Sa trung Kim", 4),
        "Bính Thân" => array("Sơn hạ Hỏa", 6),
        "Đinh Dậu" => array("Sơn hạ Hỏa", 6),
        "Mậu Tuất" => array("Bình địa Mộc", 3),
        "Kỷ Hợi" => array("Bình địa Mộc", 3),
        "Canh Tý" => array("Bích thượng Thổ", 5),
        "Tân Sửu" => array("Bích thượng Thổ", 5),
        "Nhâm Dần" => array("Kim bạch Kim", 4),
        "Quý Mão" => array("Kim bạch Kim", 4),
        "Giáp Thìn" => array("Phú đăng Hỏa", 6),
        "Ất Tỵ" => array("Phú đăng Hỏa", 6),
        "Bính Ngọ" => array("Thiên hà Thủy", 2),
        "Đinh Mùi" => array("Thiên hà Thủy", 2),
        "Mậu Thân" => array("Đại trạch Thổ", 5),
        "Kỷ Dậu" => array("Đại trạch Thổ", 5),
        "Canh Tuất" => array("Thoa xuyến Kim", 4),
        "Tân Hợi" => array("Thoa xuyến Kim", 4),
        "Nhâm Tý" => array("Tang giá Mộc", 3),
        "Quý Sửu" => array("Tang giá Mộc", 3),
        "Giáp Dần" => array("Đại khê Thủy", 2),
        "Ất Mão" => array("Đại khê Thủy", 2),
        "Bính Thìn" => array("Sa trung Thổ", 5),
        "Đinh Tỵ" => array("Sa trung Thổ", 5),
        "Mậu Ngọ" => array("Thiên thượng Hỏa", 6),
        "Kỷ Mùi" => array("Thiên thượng Hỏa", 6),
        "Canh Thân" => array("Thạch lựu Mộc", 3),
        "Tân Dậu" => array("Thạch lựu Mộc", 3),
        "Nhâm Tuất" => array("Đại hải Thủy", 2),
        "Quý Hợi" => array("Đại hải Thủy", 2)
    );

    if (($namsinh % 10) > 3) {
        $canmoi = (($namsinh % 10 - 3) * 2 + 1) % 10;
    } else if (($namsinh % 10) < 3 || ($namsinh % 10) == 3) {
        $canmoi = ((($namsinh % 10) + 7) * 2 + 1) % 10;
    } else {
        $canmoi = 0;
    }


    // Tìm MỆNH xem ở cung nào
    if ($thangsinh - $giosinh == -2) {
        //an 12 cung khi mệnh ở Tý
        $menhocung = "Tý";
    } else if ($thangsinh - $giosinh == -1) {
        //an 12 cung khi mệnh ở Sửu
        $menhocung = "Sửu";
    } else if ($thangsinh - $giosinh == 0) {
        //an 12 cung khi mệnh ở Dần
        $menhocung = "Dần";
    } else if ($thangsinh - $giosinh == 1 || $thangsinh - $giosinh == -11) {
        //an 12 cung khi mệnh ở Mão
        $menhocung = "Mão";
    } else if ($thangsinh - $giosinh == 2 || $thangsinh - $giosinh == -10) {
        //an 12 cung khi mệnh ở Thìn
        $menhocung = "Thìn";
    } else if ($thangsinh - $giosinh == 3 || $thangsinh - $giosinh == -9) {
        //an 12 cung khi mệnh ở Tỵ
        $menhocung = "Tỵ";
    } else if ($thangsinh - $giosinh == 4 || $thangsinh - $giosinh == -8) {
        //an 12 cung khi mệnh ở Ngọ
        $menhocung = "Ngọ";
    } else if ($thangsinh - $giosinh == 5 || $thangsinh - $giosinh == -7) {
        //an 12 cung khi mệnh ở Mùi
        $menhocung = "Mùi";
    } else if ($thangsinh - $giosinh == 6 || $thangsinh - $giosinh == -6) {
        //an 12 cung khi mệnh ở Thân
        $menhocung = "Thân";
    } else if ($thangsinh - $giosinh == 7 || $thangsinh - $giosinh == -5) {
        //an 12 cung khi mệnh ở Dậu
        $menhocung = "Dậu";
    } else if ($thangsinh - $giosinh == 8 || $thangsinh - $giosinh == -4) {
        //an 12 cung khi mệnh ở Tuất
        $menhocung = "Tuất";
    } else if ($thangsinh - $giosinh == 9 || $thangsinh - $giosinh == -3) {
        //an 12 cung khi mệnh ở Hợi
        $menhocung = "Hợi";
    } else {
        $menhocung = "Lỗi an 12 cung MỆNH";
    }

    // Tìm áp can mới vào Dần -> đến Mệnh
    $vongdiachi_khoitudan = array("Dần", "Mão", "Thìn", "Tỵ", "Ngọ", "Mùi", "Thân", "Dậu", "Tuất", "Hợi", "Tý", "Sửu");
    // xếp lại vòng thiên can khởi từ 
    if ($canmoi == 1) {
        $vongthiencan_khoitucanmoi = array("Giáp", "Ất", "Bính", "Đinh", "Mậu", "Kỷ", "Canh", "Tân", "Nhâm", "Quý", "Giáp", "Ất");
    } else if ($canmoi == 3) {
        $vongthiencan_khoitucanmoi = array("Bính", "Đinh", "Mậu", "Kỷ", "Canh", "Tân", "Nhâm", "Quý", "Giáp", "Ất", "Bính", "Đinh");
    } else if ($canmoi == 5) {
        $vongthiencan_khoitucanmoi = array("Mậu", "Kỷ", "Canh", "Tân", "Nhâm", "Quý", "Giáp", "Ất", "Bính", "Đinh", "Nhâm", "Quý");
    } else if ($canmoi == 7) {
        $vongthiencan_khoitucanmoi = array("Canh", "Tân", "Nhâm", "Quý", "Giáp", "Ất", "Bính", "Đinh", "Mậu", "Kỷ", "Canh", "Tân");
    } else if ($canmoi == 9) {
        $vongthiencan_khoitucanmoi = array("Nhâm", "Quý", "Giáp", "Ất", "Bính", "Đinh", "Mậu", "Kỷ", "Canh", "Tân", "Nhâm", "Quý");
    } else {
    }
    $key_menh = array_search($menhocung, $vongdiachi_khoitudan);
    $thiencanmoi = $vongthiencan_khoitucanmoi[$key_menh];
    $canchi_moi = $thiencanmoi . " " . $menhocung;
    $trisocuc = $lucthaphoagiap[$canchi_moi][1];
    return $trisocuc;
}

function tim_tieuhan($namsinh, $gioitinh)
{
    $tieuhan = array("Tý", "Sửu", "Dần", "Mão", "Thìn", "Tỵ", "Ngọ", "Mùi", "Thân", "Dậu", "Tuất", "Hợi");

    if ($gioitinh == "Nam") {
        $cachdi = 1;
    } else {
        $cachdi = -1;
    }
    switch (timvitri_diachi_trong12cung($namsinh)) {
        case 2:
            $mangaa = mangmoi_cuamang_khoituvitrichon($tieuhan, 3, $cachdi);
            break;
        case 6:
            $mangaa = mangmoi_cuamang_khoituvitrichon($tieuhan, 12, $cachdi);
            break;
        case 10:
            $mangaa = mangmoi_cuamang_khoituvitrichon($tieuhan, 7, $cachdi);
            break;
        case 8:
            $mangaa = mangmoi_cuamang_khoituvitrichon($tieuhan, 3, $cachdi);
            break;
        case 0:
            $mangaa = mangmoi_cuamang_khoituvitrichon($tieuhan, 11, $cachdi);
            break;
        case 4:
            $mangaa = mangmoi_cuamang_khoituvitrichon($tieuhan, 7, $cachdi);
            break;
        case 5: //Tỵ
            $mangaa = mangmoi_cuamang_khoituvitrichon($tieuhan, 2, $cachdi);
            break;
        case 9: //Dậu
            $mangaa = mangmoi_cuamang_khoituvitrichon($tieuhan, 10, $cachdi);
            break;
        case 1: //Sửu
            $mangaa = mangmoi_cuamang_khoituvitrichon($tieuhan, 7, $cachdi);
            break;
        case 11: //Hợi
            $mangaa = mangmoi_cuamang_khoituvitrichon($tieuhan, 3, $cachdi);
            break;
        case 3: //Mão
            $mangaa = mangmoi_cuamang_khoituvitrichon($tieuhan, 11, $cachdi);
            break;
        case 7: //Mùi
            $mangaa = mangmoi_cuamang_khoituvitrichon($tieuhan, 7, $cachdi);
            break;
    }
    return $mangaa;
}


// Tìm sao Tử Vi khi biết cục và ngày sinh

function timvitri_saotuvi($cuc, $ngaysinh)
{
    if ($cuc == 2) {
        if ($ngaysinh == 22 || $ngaysinh == 23) {
            return 0;
        } else if ($ngaysinh == 1 || $ngaysinh == 24 || $ngaysinh == 25) {
            return 1;
        } else if ($ngaysinh == 2 || $ngaysinh == 3 || $ngaysinh == 26 || $ngaysinh == 27) {
            return 2;
        } else if ($ngaysinh == 4 || $ngaysinh == 5 || $ngaysinh == 28 || $ngaysinh == 29) {
            return 3;
        } else if ($ngaysinh == 6 || $ngaysinh == 7 || $ngaysinh == 30) {
            return 4;
        } else if ($ngaysinh == 8 || $ngaysinh == 9) {
            return 5;
        } else if ($ngaysinh == 10 || $ngaysinh == 11) {
            return 6;
        } else if ($ngaysinh == 12 || $ngaysinh == 13) {
            return 7;
        } else if ($ngaysinh == 14 || $ngaysinh == 15) {
            return 8;
        } else if ($ngaysinh == 16 || $ngaysinh == 17) {
            return 9;
        } else if ($ngaysinh == 18 || $ngaysinh == 19) {
            return 10;
        } else if ($ngaysinh == 20 || $ngaysinh == 21) {
            return 11;
        } else {
            return  "Lỗi tìm sao Tử Vi là cục Thủy";
        }
    } else if ($cuc == 3) {
        if ($ngaysinh == 25) {
            return 0;
        } else if ($ngaysinh == 2 || $ngaysinh == 28) {
            return 1;
        } else if ($ngaysinh == 3 || $ngaysinh == 5) {
            return 2;
        } else if ($ngaysinh == 6 || $ngaysinh == 8) {
            return 3;
        } else if ($ngaysinh == 1 || $ngaysinh == 9 || $ngaysinh == 11) {
            return 4;
        } else if ($ngaysinh == 4 || $ngaysinh == 12 || $ngaysinh == 14) {
            return 5;
        } else if ($ngaysinh == 7 || $ngaysinh == 15 || $ngaysinh == 17) {
            return 6;
        } else if ($ngaysinh == 10 || $ngaysinh == 18 || $ngaysinh == 20) {
            return 7;
        } else if ($ngaysinh == 13 || $ngaysinh == 21 || $ngaysinh == 23) {
            return 8;
        } else if ($ngaysinh == 16 || $ngaysinh == 24 || $ngaysinh == 26) {
            return 9;
        } else if ($ngaysinh == 19 || $ngaysinh == 27 || $ngaysinh == 29) {
            return 10;
        } else if ($ngaysinh == 22 || $ngaysinh == 30) {
            return 11;
        } else {
            return  "Lỗi tìm sao Tử Vi là cục Mộc";
        }
    } else if ($cuc == 4) {
        if ($ngaysinh == 5) {
            return 0;
        } else if ($ngaysinh == 3 || $ngaysinh == 9) {
            return 1;
        } else if ($ngaysinh == 4 || $ngaysinh == 7 || $ngaysinh == 13) {
            return 2;
        } else if ($ngaysinh == 8 || $ngaysinh == 11 || $ngaysinh == 17) {
            return 3;
        } else if ($ngaysinh == 2 || $ngaysinh == 12 || $ngaysinh == 15 || $ngaysinh == 21) {
            return 4;
        } else if ($ngaysinh == 6 || $ngaysinh == 16 || $ngaysinh == 19 || $ngaysinh == 25) {
            return 5;
        } else if ($ngaysinh == 10 || $ngaysinh == 20 || $ngaysinh == 23 || $ngaysinh == 29) {
            return 6;
        } else if ($ngaysinh == 14 || $ngaysinh == 24 || $ngaysinh == 27) {
            return 7;
        } else if ($ngaysinh == 8 || $ngaysinh == 18) {
            return 8;
        } else if ($ngaysinh == 22) {
            return 9;
        } else if ($ngaysinh == 26) {
            return 10;
        } else if ($ngaysinh == 1 || $ngaysinh == 306) {
            return 11;
        } else {
            return  "Lỗi tìm sao Tử Vi là cục Mộc";
        }
    } else if ($cuc == 5) {
        if ($ngaysinh == 7) {
            return 0;
        } else if ($ngaysinh == 4 || $ngaysinh == 12) {
            return 1;
        } else if ($ngaysinh == 5 || $ngaysinh == 9 || $ngaysinh == 17) {
            return 2;
        } else if ($ngaysinh == 10 || $ngaysinh == 14 || $ngaysinh == 22) {
            return 3;
        } else if ($ngaysinh == 3 || $ngaysinh == 15 || $ngaysinh == 19 || $ngaysinh == 27) {
            return 4;
        } else if ($ngaysinh == 8 || $ngaysinh == 20 || $ngaysinh == 24) {
            return 5;
        } else if ($ngaysinh == 1 || $ngaysinh == 13 || $ngaysinh == 25 || $ngaysinh == 29) {
            return 6;
        } else if ($ngaysinh == 6 || $ngaysinh == 18 || $ngaysinh == 30) {
            return 7;
        } else if ($ngaysinh == 11 || $ngaysinh == 23) {
            return 8;
        } else if ($ngaysinh == 16 || $ngaysinh == 28) {
            return 9;
        } else if ($ngaysinh == 21) {
            return 10;
        } else if ($ngaysinh == 2 || $ngaysinh == 26) {
            return 11;
        } else {
            return  "Lỗi tìm sao Tử Vi là cục Mộc";
        }
    } else if ($cuc == 6) {
        if ($ngaysinh == 9 || $ngaysinh == 19) {
            return 0;
        } else if ($ngaysinh == 5 || $ngaysinh == 15 || $ngaysinh == 25) {
            return 1;
        } else if ($ngaysinh == 6 || $ngaysinh == 11 || $ngaysinh == 21) {
            return 2;
        } else if ($ngaysinh == 12 || $ngaysinh == 17 || $ngaysinh == 27) {
            return 3;
        } else if ($ngaysinh == 4 || $ngaysinh == 18 || $ngaysinh == 23) {
            return 4;
        } else if ($ngaysinh == 10 || $ngaysinh == 24 || $ngaysinh == 29) {
            return 5;
        } else if ($ngaysinh == 2 || $ngaysinh == 16 || $ngaysinh == 30) {
            return 6;
        } else if ($ngaysinh == 8 || $ngaysinh == 22) {
            return 7;
        } else if ($ngaysinh == 14 || $ngaysinh == 18) {
            return 8;
        } else if ($ngaysinh == 1 || $ngaysinh == 20) {
            return 9;
        } else if ($ngaysinh == 7 || $ngaysinh == 26) {
            return 10;
        } else if ($ngaysinh == 3 || $ngaysinh == 13) {
            return 11;
        } else {
            return "Lỗi tìm sao Tử Vi là cục Mộc";
        }
    } else {
        return  "Lỗi tìm sao Tử Vi";
    }
}

function timvitri_doiqua_danthan($vitri)
{
    switch ($vitri) {
        case 0:
            return 4;
            break;
        case 1:
            return 3;
            break;
        case 2:
            return 2;
            break;
        case 3:
            return 2;
            break;
        case 4:
            return 0;
            break;
        case 5:
            return 11;
            break;
        case 6:
            return 10;
            break;
        case 7:
            return 9;
            break;
        case 8:
            return 8;
            break;
        case 9:
            return 7;
            break;
        case 10:
            return 6;
            break;
        case 11:
            return 5;
            break;
        default:
            return 12;
    }
}
function timvitri_doi($vitri)
{
    switch ($vitri) {
        case 0:
            return 6;
            break;
        case 1:
            return 7;
            break;
        case 2:
            return 8;
            break;
        case 3:
            return 9;
            break;
        case 4:
            return 10;
            break;
        case 5:
            return 11;
            break;
        case 6:
            return 0;
            break;
        case 7:
            return 1;
            break;
        case 8:
            return 2;
            break;
        case 9:
            return 3;
            break;
        case 10:
            return 4;
            break;
        case 11:
            return 5;
            break;
        default:
            return 12;
    }
}


//Tính chất sao Tử vi
function tinhchat_saotuvi($vitri)
{
    switch ($vitri) {
        case 5:
            return "(M)";
            break;
        case 6:
            return "(M)";
            break;
        case 3:
            return "(M)";
            break;
        case 8:
            return "(M)";
            break;
        case 4:
            return "(V)";
            break;
        case 10:
            return "(V)";
            break;
        case 1:
            return "(Đ)";
            break;
        case 7:
            return "(Đ)";
            break;
        case 11:
            return "(B)";
            break;
        case 0:
            return "(B)";
            break;
        case 3:
            return "(B)";
            break;
        case 9:
            return "(B)";
            break;
    }
}
function tinhchat_saovukhuc($vitri)
{
    switch ($vitri) {
        case 4:
            return "(M)";
            break;
        case 10:
            return "(M)";
            break;
        case 1:
            return "(M)";
            break;
        case 7:
            return "(M)";
            break;
        case 2:
            return "(V)";
            break;
        case 8:
            return "(V)";
            break;
        case 0:
            return "(V)";
            break;
        case 6:
            return "(V)";
            break;
        case 2:
            return "(Đ)";
            break;
        case 3:
            return "(Đ)";
            break;
        case 5:
            return "(H)";
            break;
        case 11:
            return "(H)";
            break;
    }
}
function tinhchat_saothienco($vitri)
{
    switch ($vitri) {
        case 4:
            return "(M)";
            break;
        case 10:
            return "(M)";
            break;
        case 3:
            return "(M)";
            break;
        case 9:
            return "(M)";
            break;
        case 5:
            return "(V)";
            break;
        case 8:
            return "(V)";
            break;
        case 0:
            return "(Đ)";
            break;
        case 1:
            return "(Đ)";
            break;
        case 6:
            return "(Đ)";
            break;
        case 7:
            return "(Đ)";
            break;
        case 2:
            return "(H)";
            break;
        case 11:
            return "(H)";
            break;
    }
}
function tinhchat_saothaiam($vitri)
{
    switch ($vitri) {
        case 9:
            return "(M)";
            break;
        case 10:
            return "(M)";
            break;
        case 11:
            return "(M)";
            break;
        case 8:
            return "(V)";
            break;
        case 0:
            return "(V)";
            break;
        case 1:
            return "(Đ)";
            break;
        case 7:
            return "(Đ)";
            break;
        case 6:
            return "(Đ)";
            break;
        case 2:
            return "(H)";
            break;
        case 3:
            return "(H)";
            break;
        case 4:
            return "(H)";
            break;
        case 5:
            return "(H)";
            break;
    }
}
function tinhchat_saothiendong($vitri)
{
    switch ($vitri) {
        case 2:
            return "(M)";
            break;
        case 8:
            return "(M)";
            break;
        case 0:
            return "(V)";
            break;
        case 3:
            return "(Đ)";
            break;
        case 5:
            return "(Đ)";
            break;
        case 11:
            return "(Đ)";
            break;
        case 4:
            return "(H)";
            break;
        case 10:
            return "(H)";
            break;
        case 1:
            return "(H)";
            break;
        case 7:
            return "(H)";
            break;
        case 6:
            return "(H)";
            break;
        case 9:
            return "(H)";
            break;
    }
}

function tinhchat_saothienluong($vitri)
{
    switch ($vitri) {
        case 6:
            return "(M)";
            break;
        case 4:
            return "(M)";
            break;
        case 10:
            return "(M)";
            break;
        case 0:
            return "(V)";
            break;
        case 3:
            return "(V)";
            break;
        case 2:
            return "(V)";
            break;
        case 8:
            return "(V)";
            break;
        case 1:
            return "(Đ)";
            break;
        case 7:
            return "(Đ)";
            break;
        case 9:
            return "(H)";
            break;
        case 0:
            return "(H)";
            break;
        case 11:
            return "(H)";
            break;
    }
}

function tinhchat_saothatsat($vitri)
{
    switch ($vitri) {
        case 2:
            return "(M)";
            break;
        case 8:
            return "(M)";
            break;
        case 0:
            return "(M)";
            break;
        case 6:
            return "(M)";
            break;
        case 5:
            return "(V)";
            break;
        case 11:
            return "(V)";
            break;
        case 1:
            return "(Đ)";
            break;
        case 7:
            return "(Đ)";
            break;
        case 3:
            return "(H)";
            break;
        case 9:
            return "(H)";
            break;
        case 4:
            return "(H)";
            break;
        case 10:
            return "(H)";
            break;
    }
}
function tinhchat_saophaquan($vitri)
{
    switch ($vitri) {
        case 0:
            return "(M)";
            break;
        case 6:
            return "(M)";
            break;
        case 1:
            return "(V)";
            break;
        case 7:
            return "(V)";
            break;
        case 4:
            return "(Đ)";
            break;
        case 10:
            return "(Đ)";
            break;
        case 3:
            return "(H)";
            break;
        case 9:
            return "(H)";
            break;
        case 2:
            return "(H)";
            break;
        case 8:
            return "(H)";
            break;
        case 5:
            return "(H)";
            break;
        case 11:
            return "(H)";
            break;
    }
}

function tinhchat_saoliemtrinh($vitri)
{
    switch ($vitri) {
        case 4:
            return "(M)";
            break;
        case 10:
            return "(M)";
            break;
        case 0:
            return "(V)";
            break;
        case 6:
            return "(V)";
            break;
        case 2:
            return "(V)";
            break;
        case 8:
            return "(V)";
            break;
        case 1:
            return "(Đ)";
            break;
        case 7:
            return "(Đ)";
            break;
        case 5:
            return "(H)";
            break;
        case 11:
            return "(H)";
            break;
        case 3:
            return "(H)";
            break;
        case 9:
            return "(H)";
            break;
    }
}
function tinhchat_saothamlang($vitri)
{
    switch ($vitri) {
        case 1:
            return "(M)";
            break;
        case 7:
            return "(M)";
            break;
        case 4:
            return "(V)";
            break;
        case 10:
            return "(V)";
            break;
        case 2:
            return "(Đ)";
            break;
        case 8:
            return "(Đ)";
            break;
        case 5:
            return "(H)";
            break;
        case 11:
            return "(H)";
            break;
        case 0:
            return "(H)";
            break;
        case 6:
            return "(H)";
            break;
        case 3:
            return "(H)";
            break;
        case 9:
            return "(H)";
            break;
    }
}
function tinhchat_saocumon($vitri)
{
    switch ($vitri) {
        case 3:
            return "(M)";
            break;
        case 9:
            return "(M)";
            break;
        case 0:
            return "(V)";
            break;
        case 6:
            return "(V)";
            break;
        case 2:
            return "(V)";
            break;
        case 8:
            return "(Đ)";
            break;
        case 11:
            return "(Đ)";
            break;
        case 4:
            return "(H)";
            break;
        case 10:
            return "(H)";
            break;
        case 1:
            return "(H)";
            break;
        case 7:
            return "(H)";
            break;
        case 5:
            return "(H)";
            break;
    }
}
function tinhchat_saothaiduong($vitri)
{
    switch ($vitri) {
        case 5:
            return "(M)";
            break;
        case 6:
            return "(M)";
            break;
        case 2:
            return "(V)";
            break;
        case 3:
            return "(V)";
            break;
        case 4:
            return "(V)";
            break;
        case 1:
            return "(Đ)";
            break;
        case 7:
            return "(Đ)";
            break;
        case 8:
            return "(H)";
            break;
        case 9:
            return "(H)";
            break;
        case 10:
            return "(H)";
            break;
        case 11:
            return "(H)";
            break;
        case 0:
            return "(H)";
            break;
    }
}
function tinhchat_saothienphu($vitri)
{
    switch ($vitri) {
        case 2:
            return "(M)";
            break;
        case 8:
            return "(M)";
            break;
        case 0:
            return "(M)";
            break;
        case 6:
            return "(M)";
            break;
        case 4:
            return "(V)";
            break;
        case 10:
            return "(V)";
            break;
        case 0:
            return "(Đ)";
            break;
        case 5:
            return "(Đ)";
            break;
        case 7:
            return "(Đ)";
            break;
        case 3:
            return "(B)";
            break;
        case 9:
            return "(B)";
            break;
        case 1:
            return "(B)";
            break;
    }
}
function tinhchat_saothientuong($vitri)
{
    switch ($vitri) {
        case 2:
            return "(M)";
            break;
        case 8:
            return "(M)";
            break;
        case 4:
            return "(V)";
            break;
        case 10:
            return "(V)";
            break;
        case 0:
            return "(V)";
            break;
        case 6:
            return "(V)";
            break;
        case 1:
            return "(Đ)";
            break;
        case 7:
            return "(Đ)";
            break;
        case 5:
            return "(Đ)";
            break;
        case 11:
            return "(Đ)";
            break;
        case 3:
            return "(H)";
            break;
        case 9:
            return "(H)";
            break;
    }
}


//Tìm vị trí sao lộc tồn
function timvitri_saolocton($nam)
{

    if ($nam % 10 == 0) {
        return 9;
    } else if ($nam % 10 == 1) {
        return 10;
    } else if ($nam % 10 == 2) {
        return 11;
    } else if ($nam % 10 == 3) {
        return 0;
    } else if ($nam % 10 == 4) {
        return 2;
    } else if ($nam % 10 == 5) {
        return 3;
    } else if ($nam % 10 == 6) {
        return 5;
    } else if ($nam % 10 == 7) {
        return 6;
    } else if ($nam % 10 == 8) {
        return 5;
    } else if ($nam % 10 == 9) {
        return 6;
    } else {
        return 12;
    }
}


function timvitri_saohoatinh_linhtinh($namsinh, $giosinh, $gioitinh, $saohoatinh_linhtinh)
{
    $trisodi = timtriso_amduong($namsinh, $gioitinh);
    $vitri_diachiduongsu = timvitri_diachi_trong12cung($namsinh) + 1;

    if ($vitri_diachiduongsu == 3 || $vitri_diachiduongsu == 7 || $vitri_diachiduongsu == 11) {
        if ($saohoatinh_linhtinh == "Hỏa Tinh") {
            $vitrikhoi = 2;
        } else if ($saohoatinh_linhtinh == "Linh Tinh") {
            $vitrikhoi = 4;
        } else {
            return "Sai tên sao Hỏa tinh hoặc Linh tinh";
        }
    } else if ($vitri_diachiduongsu == 1 || $vitri_diachiduongsu == 5 || $vitri_diachiduongsu == 9) {
        if ($saohoatinh_linhtinh == "Hỏa Tinh") {
            $vitrikhoi = 3;
        } else if ($saohoatinh_linhtinh == "Linh Tinh") {
            $vitrikhoi = 11;
        } else {
            return "Sai tên sao Hỏa tinh hoặc Linh tinh";
        }
    } else if ($vitri_diachiduongsu == 6 || $vitri_diachiduongsu == 10 || $vitri_diachiduongsu == 2) {
        if ($saohoatinh_linhtinh == "Hỏa Tinh") {
            $vitrikhoi = 4;
        } else if ($saohoatinh_linhtinh == "Linh Tinh") {
            $vitrikhoi = 11;
        } else {
            return "Sai tên sao Hỏa tinh hoặc Linh tinh";
        }
    } else if ($vitri_diachiduongsu == 12 || $vitri_diachiduongsu == 8 || $vitri_diachiduongsu == 4) {
        if ($saohoatinh_linhtinh == "Hỏa Tinh") {
            $vitrikhoi = 10;
        } else if ($saohoatinh_linhtinh == "Linh Tinh") {
            $vitrikhoi = 11;
        } else {
            return "Sai tên sao Hỏa tinh hoặc Linh tinh";
        }
    } else {
        return "Sai vị trí năm sinh đương sự";
    }

    if ($saohoatinh_linhtinh == "Hỏa Tinh") {
        if ($trisodi == 1) {
            $chieudi = 1;
        } else {
            $chieudi = -1;
        }
    } else if ($saohoatinh_linhtinh == "Linh Tinh") {
        if ($trisodi == 1) {
            $chieudi = -1;
        } else {
            $chieudi = 1;
        }
    } else {
        return "Sai cách đi sao Hỏa tinh hoặc Linh tinh";
    }
    $mangaa = mangmoi_12diachikhoituvitrichon($vitrikhoi, $chieudi);
    return $mangaa[$giosinh - 1];
}


function vitri_saotaphu($thangsinh)
{
    $mangkhoitu_cungthin = mangmoi_12diachikhoituvitrichon(5, 1);
    return $mangkhoitu_cungthin[$thangsinh - 1];
}
function vitri_saohuubat($thangsinh)
{
    $mangkhoitu_cungtuat = mangmoi_12diachikhoituvitrichon(11, -1);
    return $mangkhoitu_cungtuat[$thangsinh - 1];
}

function vitri_saovanxuong($giosinh)
{
    $mangkhoitu_cungtuat = mangmoi_12diachikhoituvitrichon(11, -1);
    return $mangkhoitu_cungtuat[$giosinh - 1];
}
function vitri_saovankhuc($giosinh)
{
    $mangkhoitu_cungthin = mangmoi_12diachikhoituvitrichon(5, 1);
    return $mangkhoitu_cungthin[$giosinh - 1];
}
function vitri_saolongtri($namsinh)
{
    $mangkhoitu_cungthin = mangmoi_12diachikhoituvitrichon(5, 1);
    return $mangkhoitu_cungthin[timvitri_diachi_trong12cung($namsinh)];
}
function vitri_saophuongcac($namsinh)
{
    $mangkhoitu_cungtuat = mangmoi_12diachikhoituvitrichon(11, -1);
    return $mangkhoitu_cungtuat[timvitri_diachi_trong12cung($namsinh)];
}
function vitri_saothienkhoi($namsinh)
{
    if ($namsinh % 10 == 4 || $namsinh % 10 == 4) {
        return 1;
    } else if ($namsinh % 10 == 5 || $namsinh % 10 == 9) {
        return 0;
    } else if ($namsinh % 10 == 0 || $namsinh % 10 == 1) {
        return 6;
    } else if ($namsinh % 10 == 3 || $namsinh % 10 == 4) {
        return 11;
    } else if ($namsinh % 10 == 2 || $namsinh % 10 == 3) {
        return 3;
    } else {
        return 12;
    }
}
function vitri_saothienviet($namsinh)
{
    if ($namsinh % 10 == 4 || $namsinh % 10 == 4) {
        return 7;
    } else if ($namsinh % 10 == 5 || $namsinh % 10 == 9) {
        return 8;
    } else if ($namsinh % 10 == 0 || $namsinh % 10 == 1) {
        return 2;
    } else if ($namsinh % 10 == 3 || $namsinh % 10 == 4) {
        return 9;
    } else if ($namsinh % 10 == 2 || $namsinh % 10 == 3) {
        return 5;
    } else {
        return 12;
    }
}

function vitri_saothienkhoc($namsinh)
{
    $mangkhoitu_cungngo = mangmoi_12diachikhoituvitrichon(7, -1);
    return $mangkhoitu_cungngo[timvitri_diachi_trong12cung($namsinh)];
}

function vitri_saothienhu($namsinh)
{
    $mangkhoitu_cungngo = mangmoi_12diachikhoituvitrichon(7, 1);
    return $mangkhoitu_cungngo[timvitri_diachi_trong12cung($namsinh)];
}

function vitri_saotamthai($ngaysinh, $thangsinh)
{
    $mangkhoitu_cungtaphu = mangmoi_12diachikhoituvitrichon(vitri_saotaphu($thangsinh) + 1, 1);
    return $mangkhoitu_cungtaphu[$ngaysinh % 12 - 1];
}

function vitri_saobattoa($ngaysinh, $thangsinh)
{
    $mangkhoitu_cunghuubat = mangmoi_12diachikhoituvitrichon(vitri_saohuubat($thangsinh) + 1, -1);
    return $mangkhoitu_cunghuubat[$ngaysinh % 12 - 1];
}

function vitri_saoanquang($ngaysinh, $giosinh)
{
    $mangkhoitu_cungvanxuong = mangmoi_12diachikhoituvitrichon(vitri_saovanxuong($giosinh) + 1, 1);
    return $mangkhoitu_cungvanxuong[$ngaysinh % 12 - 2];
}

function vitri_saothienquy($ngaysinh, $giosinh)
{
    $mangkhoitu_cungvankhuc = mangmoi_12diachikhoituvitrichon(vitri_saovankhuc($giosinh) + 1, -1);
    return $mangkhoitu_cungvankhuc[$ngaysinh % 12 - 2];
}

function vitri_saothienduc($namsinh)
{
    $mangkhoitu_cungdau = mangmoi_12diachikhoituvitrichon(10, 1);
    return $mangkhoitu_cungdau[timvitri_diachi_trong12cung($namsinh)];
}
function vitri_saonguyetduc($namsinh)
{
    $mangkhoitu_cungty = mangmoi_12diachikhoituvitrichon(6, 1);
    return $mangkhoitu_cungty[timvitri_diachi_trong12cung($namsinh)];
}

function vitri_saothienhinh($thangsinh)
{
    $mangkhoitu_cungdau = mangmoi_12diachikhoituvitrichon(10, 1);
    return $mangkhoitu_cungdau[$thangsinh - 1];
}
function vitri_saothienrieu($thangsinh)
{
    $mangkhoitu_cungsuu = mangmoi_12diachikhoituvitrichon(2, 1);
    return $mangkhoitu_cungsuu[$thangsinh - 1];
}

function vitri_saohongloan($namsinh)
{
    $mangkhoitu_cungmao = mangmoi_12diachikhoituvitrichon(4, -1);
    return $mangkhoitu_cungmao[timvitri_diachi_trong12cung($namsinh)];
}
// khi dùng mangmoi_12diachikhoituvitrichon thì vị trí +1
function vitri_saoquocan($namsinh)
{
    $mangkhoitu_saolocton = mangmoi_12diachikhoituvitrichon(timvitri_saolocton($namsinh) + 1, 1);
    return $mangkhoitu_saolocton[8];
}

function vitri_saoduongphu($namsinh)
{
    $mangkhoitu_saolocton = mangmoi_12diachikhoituvitrichon(timvitri_saolocton($namsinh) + 1, -1);
    return $mangkhoitu_saolocton[7];
}

function vitri_saothiengiai($thangsinh)
{
    $mangkhoitu_cungthan = mangmoi_12diachikhoituvitrichon(9, 1);
    return $mangkhoitu_cungthan[$thangsinh - 1];
}
function vitri_saodiagiai($thangsinh)
{
    $mangkhoitu_cungmui = mangmoi_12diachikhoituvitrichon(8, 1);
    return $mangkhoitu_cungmui[$thangsinh - 1];
}

function vitri_saothaiphu($giosinh)
{
    $mangkhoitu_saovankhuc = mangmoi_12diachikhoituvitrichon(vitri_saovankhuc($giosinh) + 1, 1);
    return $mangkhoitu_saovankhuc[2];
}

function vitri_saophongcao($giosinh)
{
    $mangkhoitu_saovankhuc = mangmoi_12diachikhoituvitrichon(vitri_saovankhuc($giosinh) + 1, -1);
    return $mangkhoitu_saovankhuc[2];
}

function vitri_saothientai($namsinh, $thangsinh, $giosinh)
{
    $mangkhoitu_cungmenh = mangmoi_12diachikhoituvitrichon(timvitri_cungmenh($thangsinh, $giosinh) + 1, 1);
    return $mangkhoitu_cungmenh[timvitri_diachi_trong12cung($namsinh)];
}

function vitri_saothientho($namsinh, $thangsinh, $giosinh)
{
    $mangkhoitu_cungmenh = mangmoi_12diachikhoituvitrichon(timvitri_cungthan($thangsinh, $giosinh) + 1, 1);
    return $mangkhoitu_cungmenh[timvitri_diachi_trong12cung($namsinh)];
}

function timchomsao_tuvi_ocung($namsinh, $thangsinh, $giosinh, $ngaysinh)
{
    $chomsao_tuvi = array("Tử Vi", "", "", "", "Liêm Trinh", "", "", "Thiên Đồng", "Vũ Khúc", "Thái Dương", "", "Thiên Cơ");
    $thutu_chomsaotuvi = xepsaovao12cung($chomsao_tuvi, timvitri_saotuvi(tim_cuccuaduongso($namsinh, $thangsinh, $giosinh), $ngaysinh), 1);
    return $thutu_chomsaotuvi;
}

function timchomsao_thienphu_ocung($namsinh, $thangsinh, $giosinh, $ngaysinh)
{
    $chomsao_thienphu = array("Thiên Phủ", "Thái Âm", "Tham Lang", "Cự Môn", "Thiên Tướng", "Thiên Lương", "Thất Sát", "", "", "", "Phá Quân", "");
    $vitri_saothienphu = timvitri_doiqua_danthan(timvitri_saotuvi(tim_cuccuaduongso($namsinh, $thangsinh, $giosinh), $ngaysinh));
    $thutu_chomsaothienphu = xepsaovao12cung($chomsao_thienphu, $vitri_saothienphu, 1);

    return $thutu_chomsaothienphu;
}

function vitri_bosao_tuhoa($namsinh, $thangsinh, $giosinh, $ngaysinh, $saotim)
{
    $thutu_chomsaotuvi = timchomsao_tuvi_ocung($namsinh, $thangsinh, $giosinh, $ngaysinh);
    $thutu_chomsaothienphu = timchomsao_thienphu_ocung($namsinh, $thangsinh, $giosinh, $ngaysinh);
    switch ($namsinh % 10) {
        case 4: //Giáp
            switch ($saotim) { //1 : Hóa Khoa, 2: Hóa Quyền , 3: Hóa Khoa , 4: Hóa Kỵ
                case 1:
                    return array_search("Liêm Trinh", $thutu_chomsaotuvi);
                    break;
                case 2:
                    return array_search("Phá Quân", $thutu_chomsaothienphu);
                    break;
                case 3:
                    return array_search("Vũ Khúc", $thutu_chomsaotuvi);
                    break;
                case 4:
                    return array_search("Thái Dương", $thutu_chomsaotuvi);
                    break;
            }
            break;
        case 5: //Ất
            switch ($saotim) {
                case 1:
                    return array_search("Thiên Cơ", $thutu_chomsaotuvi);
                    break;
                case 2:
                    return array_search("Thiên Lương", $thutu_chomsaothienphu);
                    break;
                case 3:
                    return array_search("Tử Vi", $thutu_chomsaotuvi);
                    break;
                case 4:
                    return array_search("Thái Âm", $thutu_chomsaothienphu);
                    break;
            }
            break;
        case 6: //Bính
            switch ($saotim) {
                case 1:
                    return array_search("Thiên Đồng", $thutu_chomsaotuvi);
                    break;
                case 2:
                    return array_search("Thiên Cơ", $thutu_chomsaotuvi);
                    break;
                case 3: // Văn Xương

                    break;
                case 4:
                    return array_search("Liêm Trinh", $thutu_chomsaotuvi);
                    break;
            }
            break;
        case 7: //Đinh
            switch ($saotim) {
                case 1:
                    return array_search("Thái Âm", $thutu_chomsaothienphu);                    
                    break;
                case 2:
                    return array_search("Thiên Đồng", $thutu_chomsaotuvi);                    
                    break;
                case 3: 
                    return array_search("Thiên Cơ", $thutu_chomsaotuvi);
                    break;
                case 4:
                    return array_search("Cự Môn", $thutu_chomsaothienphu);
                    break;
            }
            break;
            case 8: //Mậu
                switch ($saotim) {
                    case 1:
                        return array_search("Tham Lang", $thutu_chomsaothienphu);  
                        break;
                    case 2:
                        return array_search("Thái Âm", $thutu_chomsaothienphu);                                          
                        break;
                    case 3: // Hữu Bật
                        
                        break;
                    case 4:
                        return array_search("Thiên Cơ", $thutu_chomsaotuvi);
                        break;
                }
                break;
                case 9: //Kỷ
                    switch ($saotim) {
                        case 1:
                            return array_search("Vũ Khúc", $thutu_chomsaotuvi);  
                            break;
                        case 2:
                            return array_search("Tham Lang", $thutu_chomsaothienphu);                                          
                            break;
                        case 3:
                            return array_search("Thiên Lương", $thutu_chomsaothienphu);  
                            break;
                        case 4:
                            return array_search("Vũ Khúc", $thutu_chomsaotuvi);  
                            break;
                    }
                    break;
    }
}





















?>



