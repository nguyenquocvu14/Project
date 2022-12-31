<section class="breadcrumb-section set-bg" data-setbg="images/breadcrumb.jpg"
  style="background-image: url(&quot;images/breadcrumb.jpg&quot;);">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">
        <div class="breadcrumb__text">
          <h2>Vegetables Contact</h2>
        </div>
      </div>
    </div>
  </div>
</section>


<?php

$sql_lh = "SELECT * FROM tbl_lienhe WHERE id =1";
$query_lh = mysqli_query($mysqli, $sql_lh);

?>
<section class="container">
  <div class="container-content">
    <div class="contact-content">
      <h1><span style="font-size: 2.5rem;margin:2rem 0"><strong>LIÊN HỆ</strong></span></h1>

      <p><strong>&ZeroWidthSpace;</strong><span>Nếu quý khách có nhu cầu hợp tác hoặc có những
          câu hỏi/ góp ý khác cần gửi đến cho InfoShop, vui lòng liên hệ với chung tôi qua các kênh:</span></p>
      <?php
      while ($row_lh = mysqli_fetch_array($query_lh)) {
      ?>


      <p><span><em><strong><a
                href="http://www.facebook.com/happyfruitvietnam"><?php echo $row_lh['thongtinlienhe'] ?></a></strong></em></span>
      </p>
      <?php
      }
      ?>
      <p><span>Hoặc gửi thông điệp nhanh tại đây:</span></p>

      &#xFEFF; <div class="row">
        <div class="contact-form">
          <form method="post">
            <label for="name"><span bind-translate="Họ tên">Họ tên</span>:</label> <input id="name" name="name"
              type="text" class="form-control required" maxlength="40">
            <label for="email">Email:</label> <input id="email" name="email" type="text"
              class="form-control required email" maxlength="40">
            <label for="message"><span bind-translate="Thông điệp">Thông điệp</span>:</label> <textarea id="message"
              class="contact-message" name="message" rows="10" cols="0"></textarea>
            <br>

            <button type="button" class="btn btn-success btn-submit"><i class="fa fa-envelope"></i> <span
                bind-translate="Gửi">Gửi</span></button>
          </form>
        </div>

        <p><span>Xin cảm ơn đã liên hệ, InfoShop sẽ hồi đáp nhanh nhất có thể.</span></p>
      </div>
    </div>
</section>