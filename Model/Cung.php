<?php

class Cung
{
    private $name;
    private $namsinh;
    private $ngaysinh;
    private $thangsinh;
    private $giosinh;
    private $gioitinh;
    private $tencung;

    function __construct($name, $gioitinh, $namsinh, $ngaysinh, $thangsinh, $giosinh, $tencung)
    {
        $this->name = $name;
        $this->gioitinh = $gioitinh;
        $this->namsinh = $namsinh;
        $this->ngaysinh = $ngaysinh;
        $this->thangsinh = $thangsinh;
        $this->giosinh = $giosinh;
        $this->tencung = $tencung;
    }
    public function __toString()
    {
        $cungcuocdoi = array("MỆNH", "PHỤ MẪU", "PHÚC ĐỨC", "ĐIỀN TRẠCH", "QUAN LỘC", "NÔ BỘC", "THIÊN DI", "TẬT ÁCH", "TÀI BẠCH", "TỬ TÔN", "PHU THÊ", "HUYNH ĐỆ");
        $vongtruongsinh = array("Trường sinh", "Mộc dục", "Quan đới", "Lâm quan", "Đế vượng", "Suy", "Bệnh", "Tử", "Mộ", "Tuyệt", "Thai", "Dưỡng");
        $diachi12_number = array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11);
        $diachi_12 = array(
            "Tý" => [0, 11, "Thủy"],    // số tt, tháng, ngũ hành
            "Sửu" => [1, 10, "Thổ"],
            "Dần" => [2, 1, "Mộc"],
            "Mão" => [3, 2, "Mộc"],
            "Thìn" => [4, 3, "Thổ"],
            "Tỵ" => [5, 4, "Hỏa"],
            "Ngọ" => [6, 5, "Hỏa"],
            "Mùi" => [7, 6, "Thổ"],
            "Thân" => [8, 7, "Kim"],
            "Dậu" => [9, 8, "Kim"],
            "Tuất" => [10, 9, "Thổ"],
            "Hợi" => [11, 10, "Thủy"],
        );

        $thiencan_10 = array(
            "Giáp" => [1, 4, "Mộc"], // Số thứ tự, đuôi năm, ngũ hành
            "Ất" => [2, 5, "Mộc"],
            "Bính" => [3, 6, "Hỏa"],
            "Đinh" => [4, 7, "Hỏa"],
            "Mậu" => [5, 8, "Thổ"],
            "Kỷ" => [6, 9, "Thổ"],
            "Canh" => [7, 0, "Kim"],
            "Tân" => [8, 1, "Kim"],
            "Nhâm" => [9, 2, "Thủy"],
            "Quý" => [10, 3, "Thủy"],
        );
        $chomsao_thaitue = array("Thái Tuế", "Thiếu Dương", "Tang Môn", "Thiếu Âm", "Quan Phù", "Tử Phù", "Tuế Phá", "Long Đức", "Bạch Hổ", "Phúc Đức", "Điếu Khách", "Trực Phù");
        $chomsao_locton = array("Lộc Tồn", "Lực Sĩ", "Thanh Long", "Tiểu Hao", "Tướng Quân", "Tấu Thư", "Phi Liêm", "Hỷ Thần", "Bệnh Phù", "Đại Hao", "Phục Binh", "Quan Phủ");

        $saotot = array(
            0 => array(),
            1 => array(),
            2 => array(),
            3 => array(),
            4 => array(),
            5 => array(),
            6 => array(),
            7 => array(),
            8 => array(),
            9 => array(),
            10 => array(),
            11 => array(),
        );

        $saoxau = array(
            0 => array(),
            1 => array(),
            2 => array(),
            3 => array(),
            4 => array(),
            5 => array(),
            6 => array(),
            7 => array(),
            8 => array(),
            9 => array(),
            10 => array(),
            11 => array(),
        );
        // vị trí của cung Tý -> Hợi
        $vitri_cuacung = $diachi_12[$this->tencung][0]; // Vị trí khi ở cung chọn

        // Tìm vị trí Cung MỆNH
        $vitricung_menh = timvitri_cungmenh($this->thangsinh, $this->giosinh);
        // An 12 cung cuộc đời khi biết MỆNH
        $thutu12cungmenh = xepsaovao12cung($cungcuocdoi, $vitricung_menh, 1);

        // An cung thân khi biêt tháng sinh, giờ sinh
        $cungthan = array("THÂN", "", "", "", "", "", "", "", "", "", "", "");
        $vitri_cungthan = timvitri_cungthan($this->thangsinh, $this->giosinh);
        $ancungthan = xepsaovao12cung($cungthan, $vitri_cungthan, 1);

        //Tìm trị số của cục
        $trisocuc = tim_cuccuaduongso($this->namsinh, $this->thangsinh, $this->giosinh);

        // Đại hạn
        $daihan_12cung = array($trisocuc, $trisocuc + 10, $trisocuc + 20, $trisocuc + 30, $trisocuc + 40, $trisocuc + 50, $trisocuc + 60, $trisocuc + 70, $trisocuc + 80, $trisocuc + 90, $trisocuc + 100, $trisocuc + 110,);

        // Tiểu hạn
        $tieuhan = tim_tieuhan($this->namsinh, $this->gioitinh);
        // An vòng sao Tử Vi khi biết vị trí 
        $thutu_chomsaotuvi = timchomsao_tuvi_ocung($this->namsinh, $this->thangsinh, $this->giosinh, $this->ngaysinh);        
        $thutu_chomsaotuvi[timvitri_saotuvi($trisocuc, $this->ngaysinh)] = "Tử Vi" . " " . tinhchat_saotuvi($vitri_cuacung);
        $thutu_chomsaotuvi[array_search("Vũ Khúc", $thutu_chomsaotuvi)] = 'Vũ Khúc' . " " . tinhchat_saovukhuc($vitri_cuacung);
        $thutu_chomsaotuvi[array_search("Thiên Cơ", $thutu_chomsaotuvi)] = 'Thiên Cơ' . " " . tinhchat_saothienco($vitri_cuacung);
        $thutu_chomsaotuvi[array_search("Thiên Đồng", $thutu_chomsaotuvi)] = 'Thiên Đồng' . " " . tinhchat_saothiendong($vitri_cuacung);
        $thutu_chomsaotuvi[array_search("Liêm Trinh", $thutu_chomsaotuvi)] = 'Liêm Trinh' . " " . tinhchat_saoliemtrinh($vitri_cuacung);
        $thutu_chomsaotuvi[array_search("Thái Dương", $thutu_chomsaotuvi)] = 'Thái Dương' . " " . tinhchat_saothaiduong($vitri_cuacung);

        // Tìm vị trí sao Thiên Phủ khi biết vị trí sao Tử Vi

        $thutu_chomsaothienphu = timchomsao_thienphu_ocung($this->namsinh, $this->thangsinh, $this->giosinh, $this->ngaysinh);
        $thutu_chomsaothienphu[array_search("Thái Âm", $thutu_chomsaothienphu)] = 'Thái Âm' . " " . tinhchat_saothaiam($vitri_cuacung);
        $thutu_chomsaothienphu[array_search("Thiên Lương", $thutu_chomsaothienphu)] = 'Thiên Lương' . " " . tinhchat_saothienluong($vitri_cuacung);
        $thutu_chomsaothienphu[array_search("Thất Sát", $thutu_chomsaothienphu)] = 'Thất Sát' . " " . tinhchat_saothatsat($vitri_cuacung);
        $thutu_chomsaothienphu[array_search("Phá Quân", $thutu_chomsaothienphu)] = 'Phá Quân' . " " . tinhchat_saophaquan($vitri_cuacung);
        $thutu_chomsaothienphu[array_search("Tham Lang", $thutu_chomsaothienphu)] = 'Tham Lang' . " " . tinhchat_saothamlang($vitri_cuacung);
        $thutu_chomsaothienphu[array_search("Cự Môn", $thutu_chomsaothienphu)] = 'Cự Môn' . " " . tinhchat_saocumon($vitri_cuacung);
        $thutu_chomsaothienphu[array_search("Thiên Phủ", $thutu_chomsaothienphu)] = 'Thiên Phủ' . " " . tinhchat_saothienphu($vitri_cuacung);
        $thutu_chomsaothienphu[array_search("Thiên Tướng", $thutu_chomsaothienphu)] = 'Thiên Tướng' . " " . tinhchat_saothientuong($vitri_cuacung);

        $thutu_chomsaothaitue = xepsaovao12cung($chomsao_thaitue, timvitri_diachi_trong12cung($this->namsinh), 1);
        $saoxau[array_search("Thái Tuế", $thutu_chomsaothaitue)][] = "Thái Tuế";
        $saotot[array_search("Thiếu Dương", $thutu_chomsaothaitue)][] = "Thiếu Dương";
        $saoxau[array_search("Tang Môn", $thutu_chomsaothaitue)][] = "Tang Môn";
        $saotot[array_search("Thiếu Âm", $thutu_chomsaothaitue)][] = "Thiếu Âm";
        $saoxau[array_search("Quan Phù", $thutu_chomsaothaitue)][] = "Quan Phù";
        $saoxau[array_search("Tử Phù", $thutu_chomsaothaitue)][] = "Tử Phù";
        $saoxau[array_search("Tuế Phá", $thutu_chomsaothaitue)][] = "Tuế Phá";
        $saotot[array_search("Long Đức", $thutu_chomsaothaitue)][] = "Long Đức";
        $saoxau[array_search("Bạch Hổ", $thutu_chomsaothaitue)][] = "Bạch Hổ";
        $saotot[array_search("Phúc Đức", $thutu_chomsaothaitue)][] = "Phúc Đức";
        $saoxau[array_search("Điếu Khách", $thutu_chomsaothaitue)][] = "Điếu Khách";
        $saoxau[array_search("Trực Phù", $thutu_chomsaothaitue)][] = "Trực Phù";


        //tìm vị trí trường sinh khi biết cục
        switch ($trisocuc) {
            case 2:
                $vitri_saotruongsinh = 8;
                break;
            case 3:
                $vitri_saotruongsinh = 11;
                break;
            case 4:
                $vitri_saotruongsinh = 5;
                break;
            case 5:
                $vitri_saotruongsinh = 8;
                break;
            case 6:
                $vitri_saotruongsinh = 2;
                break;
        }

        // Tính Âm Dương của đương số
        $triso_amduong = timtriso_amduong($this->namsinh, $this->gioitinh);
        //An đại hạn ( Dương nam , Âm nữ đi thuận còn Âm nam, Dương nữ đi nghịch)
        $thutu12daihan = xepsaovao12cung($daihan_12cung, $vitricung_menh, $triso_amduong);
        // An chòm sao lộc tồn ( Dương nam , Âm nữ đi thuận còn Âm nam, Dương nữ đi nghịch)
        $vitri_saolocton = timvitri_saolocton($this->namsinh);
        $thutu_chomsaolocton = xepsaovao12cung($chomsao_locton, $vitri_saolocton, $triso_amduong);
        $saotot[array_search("Lộc Tồn", $thutu_chomsaolocton)][] = "Lộc Tồn";
        $saotot[array_search("Lực Sĩ", $thutu_chomsaolocton)][] = "Lực Sĩ";
        $saotot[array_search("Thanh Long", $thutu_chomsaolocton)][] = "Thanh Long";
        $saoxau[array_search("Tiểu Hao", $thutu_chomsaolocton)][] = "Tiểu Hao";
        $saotot[array_search("Tướng Quân", $thutu_chomsaolocton)][] = "Tướng Quân";
        $saotot[array_search("Tấu Thư", $thutu_chomsaolocton)][] = "Tấu Thư";
        $saotot[array_search("Phi Liêm", $thutu_chomsaolocton)][] = "Phi Liêm";
        $saotot[array_search("Hỷ Thần", $thutu_chomsaolocton)][] = "Hỷ Thần";
        $saoxau[array_search("Bệnh Phù", $thutu_chomsaolocton)][] = "Bệnh Phù";
        $saoxau[array_search("Đại Hao", $thutu_chomsaolocton)][] = "Đại Hao";
        $saoxau[array_search("Phục Binh", $thutu_chomsaolocton)][] = "Phục Binh";
        $saoxau[array_search("Quan Phủ", $thutu_chomsaolocton)][] = "Quan Phủ";

        //An vòng trường sinh ( Dương nam , Âm nữ đi thuận còn Âm nam, Dương nữ đi nghịch)
        $thutu_vongtruongsinh = xepsaovao12cung($vongtruongsinh, $vitri_saotruongsinh, $triso_amduong);



        // 8.6 Bộ lục sát
        // Kình Dương, Đà La
        // Tìm lộc tồn ở cung nào- thứ tự địa chi đó     

        if ($vitri_saolocton == 0) {
            $saoxau[11][] = "Đà La";
            $saoxau[1][] = "Kình Dương";
        } else if ($vitri_saolocton == 11) {
            $saoxau[10][] = "Đà La";
            $saoxau[0][] = "Kình Dương";
        } else {
            $saoxau[$vitri_saolocton - 1][] = "Đà La";
            $saoxau[$vitri_saolocton + 1][] = "Kình Dương";
        }
        //B. Địa Không, địa kiếp
        $saoxau[timvitri_cuasao_tren12cung_khibiet($diachi12_number, 12, 1, $this->giosinh)][] = "Địa Kiếp";
        $saoxau[timvitri_cuasao_tren12cung_khibiet($diachi12_number, 12, -1, $this->giosinh)][] = "Địa Không";

        //C.Hỏa tinh, linh tinh
        $saoxau[timvitri_saohoatinh_linhtinh($this->namsinh, $this->giosinh, $this->gioitinh, "Hỏa Tinh")][] = "Hỏa Tinh";
        $saoxau[timvitri_saohoatinh_linhtinh($this->namsinh, $this->giosinh, $this->gioitinh, "Linh Tinh")][] = "Linh Tinh";
        // 8.7       
        $saotot[vitri_saotaphu($this->thangsinh)][] = "Tả Phù";
        $saotot[vitri_saohuubat($this->thangsinh)][] = "Hữu Bật";
        $saotot[vitri_saovankhuc($this->giosinh)][] = "Văn Khúc";
        $saotot[vitri_saovanxuong($this->giosinh)][] = "Văn Xương";
        $saotot[vitri_saolongtri($this->namsinh)][] = "Long Trì";
        $saotot[vitri_saophuongcac($this->namsinh)][] = "Phượng Các";
        $saotot[vitri_saothienkhoi($this->namsinh)][] = "Thiên Khôi";
        $saotot[vitri_saothienviet($this->namsinh)][] = "Thiên Việt";
        $saoxau[vitri_saothienkhoc($this->namsinh)][] = "Thiên Khốc";
        $saoxau[vitri_saothienhu($this->namsinh)][] = "Thiên Hư";
        //8.12
        $saotot[vitri_saotamthai($this->ngaysinh, $this->thangsinh)][] = "Tam Thai";
        $saotot[vitri_saobattoa($this->ngaysinh, $this->thangsinh)][] = "Bát Tọa";
        //8.13
        $saotot[vitri_saothienquy($this->ngaysinh, $this->giosinh)][] = "Thiên Quý";
        $saotot[vitri_saoanquang($this->ngaysinh, $this->giosinh)][] = "Ân Quang";
        //8.14
        $saotot[vitri_saothienduc($this->namsinh)][] = "Thiên Đức";
        $saotot[vitri_saonguyetduc($this->namsinh)][] = "Nguyệt Đức";
        //8.15
        $saoxau[vitri_saothienhinh($this->thangsinh)][] = "Thiên Hình";
        $saoxau[vitri_saothienrieu($this->thangsinh)][] = "Thiên Riêu";
        $saotot[vitri_saothienrieu($this->thangsinh)][] = "Thiên Y";
        //8.16
        $saotot[vitri_saohongloan($this->namsinh)][] = "Hồng Loan";
        $saotot[timvitri_doi(vitri_saohongloan($this->namsinh))][] = "Thiên Hỷ";
        //8.17
        $saotot[vitri_saoquocan($this->namsinh)][] = "Quốc Ấn";
        $saotot[vitri_saoduongphu($this->namsinh)][] = "Đường Phù";
        //8.18
        $saotot[vitri_saothiengiai($this->thangsinh)][] = "Thiên Giải";
        $saotot[vitri_saodiagiai($this->thangsinh)][] = "Địa Giải";
        $saotot[vitri_saophuongcac($this->namsinh)][] = "Giải Thần";
        //8.19
        $saotot[vitri_saothaiphu($this->giosinh)][] = "Thai Phụ";
        $saotot[vitri_saophongcao($this->giosinh)][] = "Phong Cáo";
        // 8.20
        $saotot[vitri_saothientai($this->namsinh, $this->thangsinh, $this->giosinh)][] = "Thiên Tài";
        $saotot[vitri_saothientho($this->namsinh, $this->thangsinh, $this->giosinh)][] = "Thiên Thọ";
        //8.21
        $saoxau[array_search("NÔ BỘC", $thutu12cungmenh)][] = "Thiên Thương";
        $saoxau[array_search("TẬT ÁCH", $thutu12cungmenh)][] = "Thiên Sứ";
        //8.22
        $saoxau[4][] = "Thiên La";
        $saoxau[10][] = "Địa Võng";







        $html = "";
        $html .= '<div class="cungdiaban">';
        $html .= '<div class="header">';
        // hàng đầu cung mệnh - cung thân
        $html .= '<div class="cungmenhcungthan">';
        $html .= '<div class="cungmenh">' .  $thutu12cungmenh[$vitri_cuacung] . '</div>';
        $html .= '<div class="ancungthan">' .  $ancungthan[$vitri_cuacung] . '</div>';
        $html .= '</div>';
        // kết thúc hàng đầu
        //chính tinh
        $html .= '<div class="chinhtinh">';
        $html .= '<div class="vongtuvi">' .  $thutu_chomsaotuvi[$vitri_cuacung] . '</div>';
        $html .= '<div class="vongthienphu">' .  $thutu_chomsaothienphu[$vitri_cuacung] . '</div>';
        $html .= '</div>';
        //kết thúc chính chinh
        $html .= '<div class="cacsaophu">';
        // sao tốt

        $html .= '<div class="saotot">';
        foreach ($saotot[$vitri_cuacung] as $sao) {
            $html .= $sao . '<br>';
        }
        $html .= '</div>';
        $html .= '<div class="saoxau">';
        foreach ($saoxau[$vitri_cuacung] as $sao) {
            $html .=  $sao . '<br>';
        }
        $html .= '</div>';
        $html .= '</div>';
        //tuần triệt
        $html .= '<div class="saotuantiet">';
        $html .= '<div class="saotuan">';
        $html .= '</div>';
        $html .= '<div class="saotriet">';
        $html .= '</div>';
        $html .= '</div>';
        //ket thuc tuan triet
        //Dòng cuối
        $html .= '<div class="dongcuoicung">';
        $html .= '<div class="daihan">' .  $thutu12daihan[$vitri_cuacung] . '</div>';
        $html .= '<div class="vongtruongsinh">' .  $thutu_vongtruongsinh[$vitri_cuacung] . '</div>';
        $html .= '<div class="tieuhan">' .  $tieuhan[$vitri_cuacung] . '</div>';
        $html .= '</div>';
        // kết thúc dòng cuối

        $html .= '</div>';
        $html .= '</div>';
        return $html;
    }
}
?>

<?php



?>