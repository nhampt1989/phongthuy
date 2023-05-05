<?php

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

