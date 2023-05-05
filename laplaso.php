<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
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
            <option value="1940">1940</option>
            <option value="1941">1941</option>
            <option value="1942">1942</option>
            <option value="1943">1943</option>
            <option value="1944">1944</option>
            <option value="1945">1945</option>
            <option value="1946">1946</option>
            <option value="1947">1947</option>
            <option value="1948">1948</option>
            <option value="1949">1949</option>
            <option value="1950">1950</option>
            <option value="1951">1951</option>
            <option value="1952">1952</option>
            <option value="1953">1953</option>
            <option value="1954">1954</option>
            <option value="1955">1955</option>
            <option value="1956">1956</option>
            <option value="1957">1957</option>
            <option value="1958">1958</option>
            <option value="1959">1959</option>
            <option value="1960">1960</option>
            <option value="1961">1961</option>
            <option value="1962">1962</option>
            <option value="1963">1963</option>
            <option value="1964">1964</option>
            <option value="1965">1965</option>
            <option value="1966">1966</option>
            <option value="1967">1967</option>
            <option value="1968">1968</option>
            <option value="1969">1969</option>
            <option value="1970">1970</option>
            <option value="1971">1971</option>
            <option value="1972">1972</option>
            <option value="1973">1973</option>
            <option value="1974">1974</option>
            <option value="1975">1975</option>
            <option value="1976">1976</option>
            <option value="1977">1977</option>
            <option value="1978">1978</option>
            <option value="1979">1979</option>
            <option value="1980">1980</option>
            <option value="1981">1981</option>
            <option value="1982">1982</option>
            <option value="1983">1983</option>
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
            <option value="2023">2022</option>
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



</body>
</html>

<p><a href="../phongthuychimi/index.html">Home page</a></p>