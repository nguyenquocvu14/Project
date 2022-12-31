<?php
// khong cho nguoi dung vao trang index khi chua login
session_start();
if (!isset($_SESSION['dangnhap'])) {
  header("Location:login.php");
}
//end
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="./css/styleadmin.css">
  <link rel="stylesheet" href="./giaodienadmin/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="./giaodienadmin/dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <!-- morris -->
  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
</head>

<body>
  <div class="warpper">
    <!-- <h3>Trang Admin</h3> -->
    <?php
    include("./config/config.php");
    include("./modules/header.php");
    include("./modules/menu.php");
    include("./modules/main.php");
    include("./modules/footer.php");
    ?>
  </div>
</body>

<!-- Begin Thong Ke -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script src="//cdn.ckeditor.com/4.20.1/standard/ckeditor.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>

<script>
CKEDITOR.replaceAll('thongtinlienhe');
CKEDITOR.replaceAll('tomtat');
CKEDITOR.replaceAll('noidung');
</script>


<script type="text/javascript">
$(document).ready(function() {
  thongke();
  var char = new Morris.Area({

    element: 'chart',

    xkey: 'date',

    ykeys: ['date', 'order', 'sales', 'quantity'],

    labels: ['Đơn hàng', 'Doanh thu', 'Số lượng bán ra', 'Số lượng']
  });

  $('.select-date').change(function() {
    var thoigian = $(this).val();
    if (thoigian == '7ngay') {
      var text = '7 ngày qua';
    } else if (thoigian == '28ngay') {
      var text = '28 ngày qua';
    } else if (thoigian == '90ngay') {
      var text = '90 ngày qua';
    } else {
      var text = '365 ngày qua';
    }

    $.ajax({
      url: 'modules/thongke.php',
      method: "POST",
      dataType: "JSON",
      data: {
        thoigian: thoigian
      },
      success: function(data) {
        char.setData(data);
        $('#text-date').text(text);
      }
    });
  })

  function thongke() {
    var text = '365 ngày qua';
    $('#text-date').text(text);
    $.ajax({
      url: 'modules/thongke.php',
      method: "POST",
      dataType: "JSON",
      success: function(data) {
        char.setData(data);
        $('#text-date').text(text);
      }
    });
  }
});
</script>


<!-- end thong ke -->


</html>