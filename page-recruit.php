<?php
/*
* Template Name: 採用情報
*/
?>
<?php get_header(); ?>
<script>
    jQuery(function($){
        $(function () {
            $("#js-submit").on("click", function(){
                // フォームから入力値を取得
                var name = $('input[name="name"]').val();
                var address = $('input[name="address"]').val();
                var tel = $('input[name="tel"]').val();
                var mail = $('input[name="mail"]').val();
                var age = $('[name="age"]').val();
                var comment = $('[name="comment"]').val();
                var valid_flg = true;
                var msg ="次の項目を入力してください\n";
                if (name == ""){
                    msg = msg + " 氏名 \n";
                    valid_flg = false;
                }
                if (address == ""){
                    msg = msg + " 住所 \n";
                    valid_flg = false;
                }
                if (tel == ""){
                    msg = msg + " 電話番号 \n";
                    valid_flg = false;
                }
                if (mail == ""){
                    msg = msg + " メールアドレス \n";
                    valid_flg = false;
                }
                if (age == ""){
                    msg = msg + " 年齢 \n";
                    valid_flg = false;
                }
                if (valid_flg){
                    // PHPに送信
                    $.ajax({
                        type: 'POST',
                        url: "<?php echo get_template_directory_uri(); ?>/sendmail.php",
                        data: {
                            name:name,
                            tel:tel,
                            address:address,
                            mail:mail,
                            age:age,
                            comment:comment
                        },
                        success: function( data ) {
                            if(data.match(/success/)){
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

<section class="page-recruit common">
  <!-- 共通ヘッダー -->
  <div class="page-recruit__inner common__inner">
    <div class="common__header">
      <div class="common-header__box">
      <h2 class="common-header__title ">
					<img src="<?php echo get_template_directory_uri(); ?>/img/title-recruit.png" alt="">
					<div class="common-header__title-ja">採用情報</div>
				</h2>
      </div>
      <div class="common-header__img">
        <img class="is-sp" src="<?php echo get_template_directory_uri(); ?>/img/header-recruit_pc.png" alt="">
        <img class="is-pc" src="<?php echo get_template_directory_uri(); ?>/img/header-recruit_sp.png" alt="">
      </div>
    </div><!-- common__header -->
  </div>
<div class="inner">


      <!-- 採用者メッセージ -->
      <section class="page-common__item _message">
        <div class="page-common__box">
          <h2 class="util__title"><span class="util__title-en">MESSAGE</span>採用者メッセージ</h2>
        </div>
        <div class="page-common__main">
          <div class="page-common__message-text">
            <p>机に向かい、事務的な仕事をこなすだけではありません。
            </p>
            <p>当事務所は、税務会計はもちろん、保険の設計やアドバイス、経営コンサルティング、資産税などの中小企業の経営課題や個人のお客様の抱える相続・資産管理に関する問題解決のために幅広い業務を行っています。<br>
              状況によって、お客様の元へ訪問、セミナーの企画、地域の皆様へ向けたイベント運営なども行います。<br>
              色々な経験を積み、自らの能力を最大限伸ばすことができる環境だと言えます。<br>
              そんな環境で一緒に働いてみませんか？<br>
              共感頂いたあなたを我々はお待ちしています。
            </p>
          </div>
          <div class="page-common__message-pic">
            <img src="<?php echo get_template_directory_uri(); ?>/img/recruit-face.png" alt="">
          </div>
        </div>
      </section>

      <!-- 採用までの流れ -->
      <section class="page-common__item _flow">
        <div class="page-common__box">
          <h2 class="util__title"><span class="util__title-en">FLOW UNTIL ADOPTION</span>採用までの流れ</h2>
        </div>
        <div class="page-common__main">
          <div class="is-pc"><img src="<?php echo get_template_directory_uri(); ?>/img/recruitflow_sp.png" alt=""></div>
          <div class="is-sp"><img src="<?php echo get_template_directory_uri(); ?>/img/recruitflow_pc.png" alt=""></div>
        </div>
      </section>

      <!-- 募集要項 -->
      <section class="page-common__item _info">
        <div class="page-common__box">
          <h2 class="util__title"><span class="util__title-en">INFORMATION
            </span>募集要項</h2>
        </div>
        <div class="page-common__main">
          <div class="recruit-table-title">正社員</div>
          <table class="recruit_info">
            <th>募集職種</th>
            <td colspan="2">税務会計コンサルタント</td>
            </tr>
            <tr>
              <th>雇用形態</th>
              <td colspan="2">正社員</td>
            </tr>
            <tr>
              <th>仕事内容</th>
              <td colspan="2">クライアントの巡回および会計・申告業務
                その他コンサルテーションサービス等</td>
            </tr>
            <tr>
              <th>給　与</th>
              <td colspan="2">月給制（能力・経験により優遇）</td>
            </tr>
            <tr>
              <th>昇　給</th>
              <td colspan="2">原則として年一回（８月）</td>
            </tr>
            <tr>
              <th>賞　与</th>
              <td colspan="2">決算賞与</td>
            </tr>
            <tr>
              <th>待遇</th>
              <td colspan="2">育児中の方、時短勤務も相談できます</td>
            </tr>
            <tr>
              <th>福利厚生</th>
              <td colspan="2">私服通勤可<span class=" is-pc page-recruit-span">※勤務日時はあなたのご都合に合わせて
                  自由に組み立てることができますので、
                  育児や資格試験の勉強と両立して業務に
                  取組むことができます。</span></p>
              </td>
            </tr>
            <tr>
              <th>基本勤務時間</th>
              <td> 9:00 ~ 18:00(休憩60分)</td>
              <td class="border-none" rowspan="2"><span class="is-sp">※勤務日時はあなたのご都合に合わせて
                自由に組み立てることができますので、
                育児や資格試験の勉強と両立して業務に
                取組むことができます。</span></td>
            </tr>
            <tr>
              <th>休日・休暇</th>
              <td>完全週休2日制（土・日・祝祭日）、
                年末年始、夏季休暇など</td>
            </tr>
            <tr>
              <th>勤務地</th>
              <td colspan="2">愛知県名古屋市昭和区塩付通7丁目12-102<br>
                ※当社クライアント先（名古屋市内・名古屋近郊）に訪問していただく場合もあります。</td>
            </tr>
          </table>
          <!-- <div class="util__button">
                  <button id="js-submit" class="util__button-link _submit" type="submit"
                    target="_blank">応募フォームへ</button>
                </div> -->
        </div>
      </section>

      <!-- お問い合わせフォーム -->
      <div class="page-common__item _form">
        <div class="page-common__box">
          <h2 class="util__title"><span class="util__title-en">CONTACT</span>採用応募フォーム</h2>
        </div>
        <!-- 右側 -->
        <div class="page-common__main">
          <form id="js-form"  method="post">
            <dl class="contact__list">
              <!-- お名前 -->
              <div class="contact__item">
                <dt class="contact__item-title">お名前<span class="contact__item-inline">＊必須</span></dt>
                <dd class="contact__input-box">
                  <input type="text" class="js-require" name="name" required>
                </dd>
              </div>
              <!-- 住所 -->
              <div class="contact__item">
                <dt class="contact__item-title">住　所<span class="contact__item-inline">＊必須</span></dt>
                <dd class="contact__input-box">
                  <input type="text" class="js-require" name="address" required>
                </dd>
              </div>
              <!-- 電話番号 -->
              <div class="contact__item">
                <dt class="contact__item-title">電話番号<span class="contact__item-inline">＊必須</span></dt>
                <dd class="contact__input-box">
                  <input type="tel" class="js-require" name="tel" required>
                </dd>
              </div>
              <!-- メールアドレス -->
              <div class="contact__item">
                <dt class="contact__item-title">メールアドレス<span class="contact__item-inline">＊必須</span></dt>
                <dd class="contact__input-box">
                  <input type="email" class="js-require" name="mail" required>
                </dd>
              </div>
              <!-- 年齢 -->
              <div class="contact__item">
                <dt class="contact__item-title">年　齢<span class="contact__item-inline">＊必須</span></dt>
                <dd class="contact__input-box">
                  <input type="number" class="js-require" name="age" required>
                </dd>
              </div>
              <!-- お問い合わせ内容 -->
              <div class="contact__item mod-message">
                <dt class="contact__item-title">お問い合わせ内容</dt>
                <dd class="contact__input-box">
                  <textarea name="comment"></textarea>
                </dd>
              </div>
              <!-- 送信ボタン -->
              <div class="contact__item mod-message">
                <dt class="contact__item-title is-sp"></dt>
                <dd class="contact__input-box">
                <div class="util__button">
                  <div id="js-submit" class="util__button-link _submit submit" >送信</div>
                </div>
                </dd>
              </div>

        </div>
        </dl>
        </form>
        </div>
      </div><!-- page-common__main -->
    </div><!-- page-common__item -->
  </div>
  </div>


  <?php get_footer(); ?>