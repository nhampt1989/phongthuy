<?php
// Tìm Hướng nhà khi biết độ hướng nhà
function huongnha_8huong($dohuongnha)
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
}

function huongnha_24son($dohuongnha)
{

    $huong24 = array("Tý", "Quý", "Sửu", "Cấn", "Dần", "Giáp", "Mão", "Ất", "Thìn", "Tốn", "Tỵ", "Bính", "Ngọ", "Đinh", "Mùi", "Khôn", "Thân", "Canh", "Dậu", "Tân", "Tuất", "Càn", "Hợi", "Nhâm");

    if ($dohuongnha <= 360 && 0 <= $dohuongnha) {
        $sodu = 0;
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

// Tìm sơn sau khi biết hướng
function son_24son($huong)
{

    $huongson = array("Tý" => "Ngọ", "Quý" => "Đinh", "Sửu" => "Mùi", "Cấn" => "Khôn", "Dần" => "Thân", "Giáp" => "Canh", "Mão" => "Dậu", "Ất" => "Tân", "Thìn" => "Tuất", "Tốn" => "Càn", "Tỵ" => "Hợi", "Bính" => "Nhâm", "Ngọ" => "Tý", "Đinh" => "Quý", "Mùi" => "Sửu", "Khôn" => "Cấn", "Thân" => "Dần", "Canh" => "Giáp", "Dậu" => "Mão", "Tân" => "Ất", "Tuất" => "Thìn", "Càn" => "Tốn", "Hợi" => "Tỵ", "Nhâm" => "Bính");
    return $huongson[$huong];
}


// Tính chất của 2 cung 
function tinhchat2cung($cung1, $cung2)
{
    if ($cung1 == $cung2) {
        return "Phục vị";
    } else if ($cung1 == "Càn") {
        switch ($cung2) {
            case "Khảm":
                return "Lục sát";
                break;
            case "Cấn":
                return "Thiên y";
                break;
            case "Chấn":
                return "Ngũ Quỷ";
                break;
            case "Tốn":
                return "Họa hại";
                break;
            case "Ly":
                return "Tuyệt mệnh";
                break;
            case "Khôn":
                return "Diên niên";
                break;
            case "Đoài":
                return "Sinh khí";
                break;
            default:
                return "Lỗi cung1 = Càn ";
        }
    } else if ($cung1 == "Khảm") {
        switch ($cung2) {
            case "Càn":
                return "Lục sát";
                break;
            case "Cấn":
                return "Ngũ Quỷ";
                break;
            case "Chấn":
                return "Thiên y";
                break;
            case "Tốn":
                return "Sinh khí";
                break;
            case "Ly":
                return "Diên niên";
                break;
            case "Khôn":
                return "Tuyệt mệnh";
                break;
            case "Đoài":
                return "Họa hại";
                break;
            default:
                return "Lỗi cung1 = Khảm ";
        }
    } else if ($cung1 == "Cấn") {
        switch ($cung2) {
            case "Khảm":
                return "Ngũ Quỷ";
                break;
            case "Càn":
                return "Thiên y";
                break;
            case "Chấn":
                return "Lục sát";
                break;
            case "Tốn":
                return "Tuyệt mệnh";
                break;
            case "Ly":
                return "Họa hại";
                break;
            case "Khôn":
                return "Sinh khí";
                break;
            case "Đoài":
                return "Diên niên";
                break;
            default:
                return "Lỗi cung1 = Cấn ";
        }
    } else if ($cung1 == "Chấn") {
        switch ($cung2) {
            case "Khảm":
                return "Thiên y";
            case "Cấn":
                return "Lục sát";
                break;
                break;
            case "Càn":
                return "Ngũ Quỷ";
                break;
            case "Tốn":
                return "Sinh khí";
                break;
            case "Ly":
                return "Diên niên";
                break;
            case "Khôn":
                return "Tuyệt mệnh";
                break;
            case "Đoài":
                return "Họa hại";
                break;
            default:
                return "Lỗi cung1 = Chấn ";
        }
    } else if ($cung1 == "Tốn") {
        switch ($cung2) {
            case "Khảm":
                return "Sinh khí";
                break;
            case "Cấn":
                return "Tuyệt mệnh";
                break;
            case "Chấn":
                return "Diên niên";
                break;
            case "Càn":
                return "Họa hại";
                break;
            case "Ly":
                return "Thiên y";
                break;
            case "Khôn":
                return "Ngũ Quỷ";
                break;
            case "Đoài":
                return "Lục sát";
                break;
            default:
                return "Lỗi cung1 = Tốn ";
        }
    } else if ($cung1 == "Ly") {
        switch ($cung2) {
            case "Khảm":
                return "Diên niên";
                break;
            case "Cấn":
                return "Họa hại";
                break;
            case "Chấn":
                return "Sinh khí";
                break;
            case "Tốn":
                return "Thiên y";
                break;
            case "Càn":
                return "Tuyệt mệnh";
                break;
            case "Khôn":
                return "Lục sát";
                break;
            case "Đoài":
                return "Ngũ Quỷ";
                break;
            default:
                return "Lỗi cung1 = Ly ";
        }
    } else if ($cung1 == "Khôn") {
        switch ($cung2) {
            case "Khảm":
                return "Tuyệt mệnh";
                break;
            case "Cấn":
                return "Sinh khí";
                break;
            case "Chấn":
                return "Họa hại";
                break;
            case "Tốn":
                return "Ngũ Quỷ";
                break;
            case "Ly":
                return "Lục sát";
                break;
            case "Càn":
                return "Diên niên";
                break;
            case "Đoài":
                return "Thiên y";
                break;
            default:
                return "Lỗi cung1 = Khôn ";
        }
    } else if ($cung1 == "Đoài") {
        switch ($cung2) {
            case "Khảm":
                return "Họa hại";
                break;
            case "Cấn":
                return "Diên niên";
                break;
            case "Chấn":
                return "Tuyệt mệnh";
                break;
            case "Tốn":
                return "Lục sát";
                break;
            case "Ly":
                return "Ngũ Quỷ";
                break;
            case "Khôn":
                return "Thiên y";
                break;
            case "Càn":
                return "Sinh khí";
                break;
            default:
                return "Lỗi cung1 = Đoài ";
        }
    } else {
        return " Lỗi tính chất 2 cung";
    }
}


//xem hướng, sơn có phạm thái tuế không
function xemthaitue_sonhuong($diachish, $sonhuong)
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


//Vòng sao phúc đức
$vongsaophucduc = array(
    "", "Phúc đức", "Ôn hoàng", "Tấn tài", "Trường bệnh", "Tố tụng", "Quan tước",
    "Quan quý", "Tự ải", "Vượng trang", "Hưng phước", "Pháp trường", "Điên cuồng", "Khẩu thiệt", "Vượng tàm",
    "Tấn điền", "Khốc khấp", "Cô quả", "Vinh phú", "Thiếu vong", "Xương dâm", "Thân hôn", "Hoan lạc",
    "Bại tuyệt", "Vượng tài"
);

$khoi_than = array(
    "", "Thân", "Canh", "Dậu", "Tân", "Tuất", "Càn", "Hợi", "Nhâm", "Tý", "Quý", "Sửu", "Cấn",
    "Dần", "Giáp", "Mão", "Ất", "Thìn", "Tốn", "Tỵ", "Bính", "Ngọ", "Đinh", "Mùi", "Khôn"
);
$khoi_dan = array(
    "","Dần", "Giáp", "Mão", "Ất", "Thìn", "Tốn", "Tỵ", "Bính", "Ngọ", "Đinh", "Mùi", "Khôn",
     "Thân", "Canh", "Dậu", "Tân", "Tuất", "Càn", "Hợi", "Nhâm", "Tý", "Quý", "Sửu", "Cấn"    
);
$khoi_giap = array(
    "","Giáp", "Mão", "Ất", "Thìn", "Tốn", "Tỵ", "Bính", "Ngọ", "Đinh", "Mùi", "Khôn","Thân", 
    "Canh", "Dậu", "Tân", "Tuất", "Càn", "Hợi", "Nhâm", "Tý", "Quý", "Sửu", "Cấn","Dần"
);
$khoi_ty = array(
    "", "Tỵ", "Bính", "Ngọ", "Đinh", "Mùi", "Khôn","Thân", "Canh", "Dậu", "Tân", "Tuất", "Càn",
         "Hợi", "Nhâm", "Tý", "Quý", "Sửu", "Cấn","Dần", "Giáp", "Mão", "Ất", "Thìn", "Tốn" 
);
$khoi_hoi = array(
    "", "Hợi", "Nhâm", "Tý", "Quý", "Sửu", "Cấn","Dần", "Giáp", "Mão", "Ất", "Thìn", "Tốn", 
    "Tỵ", "Bính", "Ngọ", "Đinh", "Mùi", "Khôn","Thân", "Canh", "Dậu", "Tân", "Tuất", "Càn" 
);
//vị trí các sao khi biết hướng nhà
function vitri24sao($huong_8huong)
{
    $saophucduc_khoitai = "";
    if ($huong_8huong == "Ly" || $huong_8huong == "Càn") {
        $saophucduc_khoitai = "Thân";
    } else if ($huong_8huong == "Khảm") {
        $saophucduc_khoitai = "Dần";
    } else if ($huong_8huong == "Cấn") {
        $saophucduc_khoitai = "Giáp";
    } else if ($huong_8huong == "Chấn" || $huong_8huong == "Tốn") {
        $saophucduc_khoitai = "Tỵ";
    } else if ($huong_8huong == "Khôn" || $huong_8huong == "Đoài") {
        $saophucduc_khoitai = "Hợi";
    } else {
        return "Lỗi vị trí sao";
    }
}




class House
{
    private $huongnha;
    private $thaitue;
}


class Cung{
    private $namsinh;

}