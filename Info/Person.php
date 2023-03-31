<?php 

// tính cung mệnh khi biết năm sinh, giới tính

function cungmenh($namsinh, $gioitinh)
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

function napam($namsinh)
{
    $nguhanhnapam = array("Hải trung Kim", "Hải trung Kim", "Lô trung Hỏa", "Lô trung Hỏa", "Đại lâm Mộc", "Đại lâm Mộc", "Lộ bàng Thổ", "Lộ bàng Thổ", "Kiếm phong Kim", "Kiếm phong Kim", "Sơn dầu Hỏa", "Sơn dầu Hỏa", "Giản hạ Thủy", "Giản hạ Thủy", "Thành đầu Thổ", "Thành đầu Thổ", "Bạch lạp Kim", "Bạch lạp Kim", "Dương liễu Mộc", "Dương liễu Mộc", "Tuyền trung Thủy", "Tuyền trung Thủy", "Ốc thượng Thổ", "Ốc thượng Thổ", "Tích lịch Hỏa", "Tích lịch Hỏa", "Tùng bách Mộc", "Tùng bách Mộc", "Tràng lưu Thủy", "Tràng lưu Thủy", "Sa trung Kim", "Sa trung Kim", "Sơn hạ Hỏa", "Sơn hạ Hỏa", "Bình địa Mộc", "Bình địa Mộc", "Bích thượng Thổ", "Bích thượng Thổ", "Kim bạch Kim", "Kim bạch Kim", "Phú đăng Hỏa", "Phú đăng Hỏa", "Thiên hà Thủy", "Thiên hà Thủy", "Đại trạch Thổ", "Đại trạch Thổ", "Thoa xuyến Kim", "Thoa xuyến Kim", "Tang giá Mộc", "Tang giá Mộc", "Đại khê Thủy", "Đại khê Thủy", "Sa trung Thổ", "Sa trung Thổ", "Thiên thượng Hỏa", "Thiên thượng Hỏa", "Thạch lựu Mộc", "Thạch lựu Mộc", "Đại hải Thủy", "Đại hải Thủy");
    $sodu = ($namsinh - 4) % 60;
    return $nguhanhnapam[$sodu];
}



// Tìm thiên can khi biết năm sinh

function thiencan($namsinh)
{

    if ($namsinh % 10 == 0) {
        return "Canh";
    } else if ($namsinh % 10 == 1) {
        return "Tân";
    } else if ($namsinh % 10 == 2) {
        return "Nhâm";
    } else if ($namsinh % 10 == 3) {
        return "Quý";
    } else if ($namsinh % 10 == 4) {
        return "Giáp";
    } else if ($namsinh % 10 == 5) {
        return "Ất";
    } else if ($namsinh % 10 == 6) {
        return "Bính";
    } else if ($namsinh % 10 == 7) {
        return "Đinh";
    } else if ($namsinh % 10 == 8) {
        return "Mậu";
    } else if ($namsinh % 10 == 9) {
        return "Kỷ";
    } else {
        return "Lỗi tìm thiên can";
    }
}



//Tìm địa chi
function diachi($namsinh)
{

    if ($namsinh % 12 == 4) {
        return "Tý";
    } else if ($namsinh % 12 == 5) {
        return "Sửu";
    } else if ($namsinh % 12 == 6) {
        return "Dần";
    } else if ($namsinh % 12 == 7) {
        return "Mão";
    } else if ($namsinh % 12 == 8) {
        return "Thìn";
    } else if ($namsinh % 12 == 9) {
        return "Tỵ";
    } else if ($namsinh % 12 == 10) {
        return "Ngọ";
    } else if ($namsinh % 12 == 11) {
        return "Mùi";
    } else if ($namsinh % 12 == 0) {
        return "Thân";
    } else if ($namsinh % 12 == 1) {
        return "Dậu";
    } else if ($namsinh % 12 == 2) {
        return "Tuất";
    } else if ($namsinh % 12 == 3) {
        return "Hợi";
    } else {
        return "Lỗi tìm địa chi";
    }
}


//Tìm Thái Tuế khi biết năm
$thaituetheonam = array("","Kim Biện Tổ Sư","Trần Tài Tổ Sư");
function thaitue($nam){
    

}
