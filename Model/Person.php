<?php
$lucthaphoagiap = array(
    "Giáp Tý" => array("Hải trung Kim"),
    "Ất Sửu" => array("Hải trung Kim"),
    "Bính Dần" => array("Lô trung Hỏa"),
    "Đinh Mão" => array("Lô trung Hỏa"),
    "Mậu Thìn" => array("Đại lâm Mộc"),
    "Kỷ Tỵ" => array("Đại lâm Mộc"),
    "Canh Ngọ" => array("Lộ bàng Thổ"),
    "Tân Mùi" => array("Lộ bàng Thổ"),
    "Nhâm Thân" => array("Kiếm phong Kim"),
    "Quý Dậu" => array("Kiếm phong Kim"),
    "Giáp Tuất" => array("Sơn dầu Hỏa"),
    "Ất Hợi" => array("Sơn dầu Hỏa"),
    "Bính Tý" => array("Giản hạ Thủy"),
    "Đinh Sửu" => array("Giản hạ Thủy"),
    "Mậu Dần" => array("Thành đầu Thổ"),
    "Kỷ Mão" => array("Thành đầu Thổ"),
    "Canh Thìn" => array("Bạch lạp Kim"),
    "Tân Tỵ" => array("Bạch lạp Kim"),
    "Nhâm Ngọ" => array("Dương liễu Mộc"),
    "Quý Mùi" => array("Dương liễu Mộc"),
    "Giáp Thân" => array("Tuyền trung Thủy"),
    "Ất Dậu" => array("Tuyền trung Thủy"),
    "Bính Tuất" => array("Ốc thượng Thổ"),
    "Đinh Hợi" => array("Ốc thượng Thổ"),
    "Mậu Tý" => array("Tích lịch Hỏa"),
    "Kỷ Sửu" => array("Tích lịch Hỏa"),
    "Canh Dần" => array("Tùng bách Mộc"),
    "Tân Mão" => array("Tùng bách Mộc"),
    "Nhâm Thìn" => array("Tràng lưu Thủy"),
    "Quý Tỵ" => array("Tràng lưu Thủy"),
    "Giáp Ngọ" => array("Sa trung Kim"),
    "Ất Mùi" => array("Sa trung Kim"),
    "Bính Thân" => array("Sơn hạ Hỏa"),
    "Đinh Dậu" => array("Sơn hạ Hỏa"),
    "Mậu Tuất" => array("Bình địa Mộc"),
    "Kỷ Hợi" => array("Bình địa Mộc"),
    "Canh Tý" => array("Bích thượng Thổ"),
    "Tân Sửu" => array("Bích thượng Thổ"),
    "Nhâm Dần" => array("Kim bạch Kim"),
    "Quý Mão" => array("Kim bạch Kim"),
    "Giáp Thìn" => array("Phú đăng Hỏa"),
    "Ất Tỵ" => array("Phú đăng Hỏa"),
    "Bính Ngọ" => array("Thiên hà Thủy"),
    "Đinh Mùi" => array("Thiên hà Thủy"),
    "Mậu Thân" => array("Đại trạch Thổ"),
    "Kỷ Dậu" => array("Đại trạch Thổ"),
    "Canh Tuất" => array("Thoa xuyến Kim"),
    "Tân Hợi" => array("Thoa xuyến Kim"),
    "Nhâm Tý" => array("Tang giá Mộc"),
    "Quý Sửu" => array("Tang giá Mộc"),
    "Giáp Dần" => array("Đại khê Thủy"),
    "Ất Mão" => array("Đại khê Thủy"),
    "Bính Thìn" => array("Sa trung Thổ"),
    "Đinh Tỵ" => array("Sa trung Thổ"),
    "Mậu Ngọ" => array("Thiên thượng Hỏa"),
    "Kỷ Mùi" => array("Thiên thượng Hỏa"),
    "Canh Thân" => array("Thạch lựu Mộc"),
    "Tân Dậu" => array("Thạch lựu Mộc"),
    "Nhâm Tuất" => array("Đại hải Thủy"),
    "Quý Hợi" => array("Đại hải Thủy")
);


function timthiencan($nam)
{

    if ($nam % 10 == 0) {
        return "Canh";
    } else if ($nam % 10 == 1) {
        return "Tân";
    } else if ($nam % 10 == 2) {
        return "Nhâm";
    } else if ($nam % 10 == 3) {
        return "Quý";
    } else if ($nam % 10 == 4) {
        return "Giáp";
    } else if ($nam % 10 == 5) {
        return "Ất";
    } else if ($nam % 10 == 6) {
        return "Bính";
    } else if ($nam % 10 == 7) {
        return "Đinh";
    } else if ($nam % 10 == 8) {
        return "Mậu";
    } else if ($nam % 10 == 9) {
        return "Kỷ";
    } else {
        return "Lỗi tìm thiên can";
    }
}

function timdiachi($nam)
{

    if ($nam % 12 == 4) {
        return "Tý";
    } else if ($nam % 12 == 5) {
        return "Sửu";
    } else if ($nam % 12 == 6) {
        return "Dần";
    } else if ($nam % 12 == 7) {
        return "Mão";
    } else if ($nam % 12 == 8) {
        return "Thìn";
    } else if ($nam % 12 == 9) {
        return "Tỵ";
    } else if ($nam % 12 == 10) {
        return "Ngọ";
    } else if ($nam % 12 == 11) {
        return "Mùi";
    } else if ($nam % 12 == 0) {
        return "Thân";
    } else if ($nam % 12 == 1) {
        return "Dậu";
    } else if ($nam % 12 == 2) {
        return "Tuất";
    } else if ($nam % 12 == 3) {
        return "Hợi";
    } else {
        return "Lỗi tìm địa chi";
    }
}

// tính cung mệnh khi biết năm sinh, giới tính

function timcungmenh($namsinh, $gioitinh)
{
    $menhchu = array(
        "Nam" => array("Khôn", "Khảm", "Ly", "Cấn", "Đoài", "Càn", "Khôn", "Đoài", "Chấn"),
        "Nữ" => array("Tốn", "Cấn", "Càn", "Đoài", "Cấn", "Ly", "Khảm", "Khôn")
    );
    $cungphi = ((int)($namsinh / 1000) + (int)($namsinh / 100) % 10 + (int)($namsinh / 10) % 10 + $namsinh % 10) % 9;
    return $menhchu[$gioitinh][$cungphi];
};

//Tính nạp âm mệnh chủ khi biết năm sinh
$nguhanhnapam = array("Hải trung Kim", "Hải trung Kim", "Lô trung Hỏa", "Lô trung Hỏa", "Đại lâm Mộc", "Đại lâm Mộc", "Lộ bàng Thổ", "Lộ bàng Thổ", "Kiếm phong Kim", "Kiếm phong Kim", "Sơn dầu Hỏa", "Sơn dầu Hỏa", "Giản hạ Thủy", "Giản hạ Thủy", "Thành đầu Thổ", "Thành đầu Thổ", "Bạch lạp Kim", "Bạch lạp Kim", "Dương liễu Mộc", "Dương liễu Mộc", "Tuyền trung Thủy", "Tuyền trung Thủy", "Ốc thượng Thổ", "Ốc thượng Thổ", "Tích lịch Hỏa", "Tích lịch Hỏa", "Tùng bách Mộc", "Tùng bách Mộc", "Tràng lưu Thủy", "Tràng lưu Thủy", "Sa trung Kim", "Sa trung Kim", "Sơn hạ Hỏa", "Sơn hạ Hỏa", "Bình địa Mộc", "Bình địa Mộc", "Bích thượng Thổ", "Bích thượng Thổ", "Kim bạch Kim", "Kim bạch Kim", "Phú đăng Hỏa", "Phú đăng Hỏa", "Thiên hà Thủy", "Thiên hà Thủy", "Đại trạch Thổ", "Đại trạch Thổ", "Thoa xuyến Kim", "Thoa xuyến Kim", "Tang giá Mộc", "Tang giá Mộc", "Đại khê Thủy", "Đại khê Thủy", "Sa trung Thổ", "Sa trung Thổ", "Thiên thượng Hỏa", "Thiên thượng Hỏa", "Thạch lựu Mộc", "Thạch lựu Mộc", "Đại hải Thủy", "Đại hải Thủy");

function timnapam($namsinh)
{
    $nguhanhnapam = array("Hải trung Kim", "Hải trung Kim", "Lô trung Hỏa", "Lô trung Hỏa", "Đại lâm Mộc", "Đại lâm Mộc", "Lộ bàng Thổ", "Lộ bàng Thổ", "Kiếm phong Kim", "Kiếm phong Kim", "Sơn dầu Hỏa", "Sơn dầu Hỏa", "Giản hạ Thủy", "Giản hạ Thủy", "Thành đầu Thổ", "Thành đầu Thổ", "Bạch lạp Kim", "Bạch lạp Kim", "Dương liễu Mộc", "Dương liễu Mộc", "Tuyền trung Thủy", "Tuyền trung Thủy", "Ốc thượng Thổ", "Ốc thượng Thổ", "Tích lịch Hỏa", "Tích lịch Hỏa", "Tùng bách Mộc", "Tùng bách Mộc", "Tràng lưu Thủy", "Tràng lưu Thủy", "Sa trung Kim", "Sa trung Kim", "Sơn hạ Hỏa", "Sơn hạ Hỏa", "Bình địa Mộc", "Bình địa Mộc", "Bích thượng Thổ", "Bích thượng Thổ", "Kim bạch Kim", "Kim bạch Kim", "Phú đăng Hỏa", "Phú đăng Hỏa", "Thiên hà Thủy", "Thiên hà Thủy", "Đại trạch Thổ", "Đại trạch Thổ", "Thoa xuyến Kim", "Thoa xuyến Kim", "Tang giá Mộc", "Tang giá Mộc", "Đại khê Thủy", "Đại khê Thủy", "Sa trung Thổ", "Sa trung Thổ", "Thiên thượng Hỏa", "Thiên thượng Hỏa", "Thạch lựu Mộc", "Thạch lựu Mộc", "Đại hải Thủy", "Đại hải Thủy");
    $sodu = ($namsinh - 4) % 60;
    return $nguhanhnapam[$sodu];
}

// Tìm nhị hợp, tam hợp khi biết địa chi
function tim_nhihop($diachi)
{
    if ($diachi == "Tý") {
        return "Sửu";
    } else if ($diachi == "Sửu") {
        return "Tý";
    } else if ($diachi == "Dần") {
        return "Hợi";
    } else if ($diachi == "Mão") {
        return "Tuất";
    } else if ($diachi == "Thìn") {
        return "Dậu";
    } else if ($diachi == "Tỵ") {
        return "Thân";
    } else if ($diachi == "Ngọ") {
        return "Mùi";
    } else if ($diachi == "Mùi") {
        return "Ngọ";
    } else if ($diachi == "Thân") {
        return "Tỵ";
    } else if ($diachi == "Dậu") {
        return "Thìn";
    } else if ($diachi == "Tuất") {
        return "Mão";
    } else if ($diachi == "Hợi") {
        return "Dần";
    } else {
        return "Lỗi tìm nhị hợp";
    }
}

function tim_tamhop($diachi)
{
    $tamhop = array();
    if ($diachi == "Dần" || $diachi == "Ngọ" || $diachi == "Tuất") {
        return ["Dần", "Ngọ", "Tuất"];
    } else if ($diachi == "Hợi" || $diachi == "Mão" || $diachi == "Mùi") {
        return ["Hợi", "Mão", "Mùi"];
    } else if ($diachi == "Thân" || $diachi == "Tý" || $diachi == "Thìn") {
        return ["Thân", "Tý", "Thìn"];
    } else if ($diachi == "Tỵ" || $diachi == "Dậu" || $diachi == "Sửu") {
        return ["Tỵ", "Dậu", "Sửu"];
    } else {
        return "Lỗi tìm tam hợp";
    }
}


// Tìm cục cho lá số

function tim_cuc($namsinh)
{
    if (($namsinh % 10) > 3) {
        $canmoi = (($namsinh % 10 - 3) * 2 + 1) % 10;     
    } else if (($namsinh % 10) < 3 || ($namsinh % 10) == 3) {
        $canmoi = ((($namsinh % 10) + 7) * 2 + 1) % 10;
    } else {
        return "Tính can mới sai";
    }

    if ($canmoi == 1) {
        return "Kim";
    } else if ($canmoi == 3) {
        return "Thủy";
    } else if ($canmoi == 5) {
        return "Hỏa";
    } else if ($canmoi == 7) {
        return "Thổ";
    } else if ($canmoi == 9) {
        return "Mộc";
    } else {
        return "Lỗi tìm cục";
    }
}
//Tính âm Dương của mệnh

function tim_amduong($thiencan, $gioitinh)
{
    if ($thiencan == "Giáp" || $thiencan == "Bính" || $thiencan == "Mậu" || $thiencan == "Canh" || $thiencan == "Nhâm") {
        return "Dương $gioitinh";
    } else if ($thiencan == "Ất" || $thiencan == "Đinh" || $thiencan == "Kỷ" || $thiencan == "Tân" || $thiencan == "Quý") {
        return "Âm $gioitinh";
    } else {
        return "Lỗi tìm âm dương ";
    }
}

// Tìm MỆNH trên trong 12 cung dựa vào tháng sinh, giờ sinh

function xepmangtheothutu($mang, $number)
{
    $mangtao = array();
    $mangtao2 = array();
    $soluongmang = count($mang);
    
    for ($i = 0; $i < $soluongmang; $i++) {
        if ($i + $number < $soluongmang) {
            $mangtao2[] = $mang[$i];
        } else {
            //$mangtao2[] = $mang2[$c-$i];
        }
    }

    for ($i = 0; $i < $number; $i++) {
        $mangtao[] = $mang[$soluongmang - $number + $i];
    }

    return array_merge($mangtao, $mangtao2);
}

function tim_menhtaicungnao($thangsinh, $giosinh)
{
    if ($thangsinh - $giosinh == -2) {
        //an 12 cung khi mệnh ở Tý
        return 0;
    } else if ($thangsinh - $giosinh == -1) {
        //an 12 cung khi mệnh ở Sửu
        return 1;
    } else if ($thangsinh - $giosinh == 0) {
        //an 12 cung khi mệnh ở Dần
        return 2;
    } else if ($thangsinh - $giosinh == 1 || $thangsinh - $giosinh == -11) {
        //an 12 cung khi mệnh ở Mão
        return 3;
    } else if ($thangsinh - $giosinh == 2 || $thangsinh - $giosinh == -10) {
        //an 12 cung khi mệnh ở Thìn
        return 4;
    } else if ($thangsinh - $giosinh == 3 || $thangsinh - $giosinh == -9) {
        //an 12 cung khi mệnh ở Tỵ
        return 5;
    } else if ($thangsinh - $giosinh == 4 || $thangsinh - $giosinh == -8) {
        //an 12 cung khi mệnh ở Ngọ
        return 6;
    } else if ($thangsinh - $giosinh == 5 || $thangsinh - $giosinh == -7) {
        //an 12 cung khi mệnh ở Mùi
        return 7;
    } else if ($thangsinh - $giosinh == 6 || $thangsinh - $giosinh == -6) {
        //an 12 cung khi mệnh ở Thân
        return 8;
    } else if ($thangsinh - $giosinh == 7 || $thangsinh - $giosinh == -5) {
        //an 12 cung khi mệnh ở Dậu
        return 9;
    } else if ($thangsinh - $giosinh == 8 || $thangsinh - $giosinh == -4) {
        //an 12 cung khi mệnh ở Tuất
        return 10;
    } else if ($thangsinh - $giosinh == 9 || $thangsinh - $giosinh == -3) {
        //an 12 cung khi mệnh ở Hợi
        return 11;
    } else {
        echo "Lỗi an 12 cung MỆNH";
    }
}

?>


<?php

class Person
{
    public $name;
    public int $namsinh;
    public $gioitinh;

    # getter and setter methods
    function set_name($name)
    {
        $this->name = $name;
    }
    function get_name()
    {
        return $this->name;
    }
    function set_namsinh($namsinh)
    {
        $this->namsinh = $namsinh;
    }
    function get_namsinh()
    {
        return $this->namsinh;
    }
    function set_gioitinh($gioitinh)
    {
        $this->gioitinh = $gioitinh;
    }
    function get_gioitinh()
    {
        return $this->gioitinh;
    }

    /////
    function info()
    {
        return $this->name . " has " . $this->namsinh . " Năm Sinh";
    }

    function tim_thiencan()
    {
        return timthiencan($this->namsinh);
    }

    function tim_diachi()
    {
        return timdiachi($this->namsinh);
    }

    function tim_cungmenh()
    {
        return timcungmenh($this->namsinh, $this->gioitinh);
    }

    function tim_napam()
    {
        return timnapam($this->namsinh);
    }
}
