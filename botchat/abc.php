<html>

<head>
  <title>Web PHP tạo phép tính ngẫu nhiên</title>
</head>

<body>

  <?php
  // Bắt đầu một session
  session_start();
  // Nếu trang chưa được tải hoặc đang tải phép tính mới
  if (!isset($_SESSION['num1']) || isset($_POST['reset'])) {
    do {
      // Tạo 2 số ngẫu nhiên từ 0 đến 100
      $_SESSION['num1'] = rand(0, 100);
      $_SESSION['num2'] = rand(0, 100);

      // Chọn ngẫu nhiên phép tính trừ hoặc cộng
      $_SESSION['operator'] = rand(0, 1);
      if ($_SESSION['operator'] == 0) {

        $_SESSION['result'] = $_SESSION['num1'] + $_SESSION['num2'];
        $operator = "+";
      } else {
        $_SESSION['result'] = $_SESSION['num1'] - $_SESSION['num2'];
        $operator = "-";
      }
    } while ($_SESSION['result'] >= 100 || $_SESSION['result'] < 0);
  }
  $_SESSION['num=3'] = $_SESSION['num=4'] = 0;
  // Nếu form đã được gửi
  if (isset($_POST['submit'])) {
    $answer = $_POST['answer'];

    // So sánh kết quả với câu trả lời của người dùng
    if ($answer == $_SESSION['result']) {
      echo "<h2>" . "Đúng" . "</h2>";
      $_SESSION['num3']++;
      //session_destroy();
    } else {
      echo "<h2>". "Sai" . "</h2>";
      $_SESSION['num4']++;
    }
  }
  ?>

  <form action="" method="post">
    <?php
    $operator = "";
    if ($_SESSION['operator'] == 0) {
      $operator = "+";
    } else {
      $operator = "-";
    }

    echo"<h2>" .  $_SESSION['num1'] . " " . $operator . " " . $_SESSION['num2'] . " = ";
    echo "<br>";
    ?>
    
    <input type="text" name="answer" />
    <input type="submit" name="submit" value="Kiểm tra" />
    <input type="submit" name="reset" value="Phép tính mới" />

    <?php
    echo "<br>";
    echo "Lần đúng: " . $_SESSION['num3'];
    echo "<br>";
    echo "Lần sai: " .  $_SESSION['num4'];
    echo "</h2>";
    ?>
  </form>

</body>

</html>