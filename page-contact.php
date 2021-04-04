<?php
/*
 * Template Name: お問い合わせ
 */
?>
<?php get_header(); ?>
<script>
  jQuery(function($) {
    $(function() {
      $(".submit").on("click", function() {
        // フォームから入力値を取得
        var name = $('input[name="name"]').val();
        var address = $('input[name="address"]').val();
        var mail = $('input[name="mail"]').val();
        var comment = $('[name="comment"]').val();
        var valid_flg = true;
        var msg = "次の項目を入力してください\n";
        if (name == "") {
          msg = msg + " 氏名 \n";
          valid_flg = false;
        }
        if (address == "") {
          msg = msg + " 住所 \n";
          valid_flg = false;
        }
        if (mail == "") {
          msg = msg + " メールアドレス \n";
          valid_flg = false;
        }
        if (valid_flg) {
          // PHPに送信
          $.ajax({
            type: 'POST',
            url: "<?php echo get_template_directory_uri(); ?>/sendmail.php",
            data: {
              name: name,
              address: address,
              mail: mail,
              comment: comment
            },
            success: function(data) {
              if (data.match(/success/)) {
                alert("送信が完了しました。");
              }
            },
            error: function() {
              alert("予期せぬエラーが発生しました。");
            }
          });
        } else {
          alert(msg);
        }
      });
    });
  });
</script>

<section class="page-contact common">
  <!-- 共通ヘッダー -->
  <div class="page-contact-inner common__inner">
    <div class="common__header">
      <div class="common-header__box">
        <h2 class="common-header__title ">
          <img src="<?php echo get_template_directory_uri(); ?>/img/title-contact.png" alt="">
          <div class="common-header__title-ja">お問い合わせ</div>
        </h2>
      </div>
      <div class="common-header__img">
        <img class="is-sp" src="<?php echo get_template_directory_uri(); ?>/img/header-contact.png" alt="">
        <img class="is-pc" src="<?php echo get_template_directory_uri(); ?>/img/header-contact_sp.png" alt="">
      </div>
    </div><!-- common__header -->
  </div>

  <div class="inner">
    <!-- お問い合わせフォーム -->
    <div class="page-common__item ">
      <!-- 左側 -->
      <div class="page-common__box">
        <h2 class="util__title is-sp"><span class="util__title-en">CONTACT</span>お問い合わせ</h2>
      </div>
      <!-- 右側 -->
      <div class="page-common__main">
        <form id="js-form" method="post">
          <dl class="page-contact__list">
            <!-- お名前 -->
            <div class="page-contact__item">
              <dt class="page-contact__item-title">お名前<span class="page-contact__item-inline">＊必須</span></dt>
              <dd class="page-contact__input-box">
                <input type="text" class="js-require" name="name" required>
              </dd>
            </div>
            <!-- 住所 -->
            <div class="page-contact__item">
              <dt class="page-contact__item-title">住所<span class="page-contact__item-inline">＊必須</span></dt>
              <dd class="page-contact__input-box">
                <input type="text" class="js-require" name="address" required>
              </dd>
            </div>
            <!-- メールアドレス -->
            <div class="page-contact__item">
              <dt class="page-contact__item-title">メールアドレス<span class="page-contact__item-inline">＊必須</span></dt>
              <dd class="page-contact__input-box">
                <input type="email" class="js-require" name="mail" required>
              </dd>
            </div>
            <!-- お問い合わせ内容 -->
            <div class="page-contact__item mod-message">
              <dt class="page-contact__item-title">お問い合わせ内容</dt>
              <dd class="page-contact__input-box">
                <textarea name="comment"></textarea>
              </dd>
            </div>
            <!-- 送信ボタン -->
            <div class="page-contact__item">
              <dt class="page-contact__item-title"></dt>
              <dd class="page-contact__input-box">
                <div class="util__button">
                  <div id="js-submit" class="util__button-link _submit submit" type="submit" target="_blank">送信</div>
                </div>
              </dd>
            </div>
          </dl>
        </form>
      </div>
    </div><!-- inner -->
</section><!-- page-contact -->

<?php get_footer(); ?>