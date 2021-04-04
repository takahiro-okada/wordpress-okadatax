
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
  </head>
  <body>


<!-- 採用ページ用 -->
  <?php
    // 宛先
    $mail_to = "smb.k.fukuyamac@gmail.com";
    // 送信元アドレス
    $mail_from = "contact@okada-tax.com";
    // 件名
    $mail_subject = "【お問い合わせ】メールフォームから送信がありました";
    // 本文
    $mail_body = "";
    $mail_body.= "\n\n■お名前\n".$_POST["name"]."\n\n";
    $mail_body.= "■住所\n".$_POST["address"]."\n\n";
    $mail_body.= "■TEL\n".$_POST["tel"]."\n\n";
    $mail_body.= "■メールアドレス\n".$_POST["mail"]."\n\n";
    $mail_body.= "■年齢\n".$_POST["age"]."\n\n";
    $mail_body.= "■問い合わせ内容\n".$_POST["comment"];
    // 送信処理
    mb_language("Japanese");
    mb_internal_encoding("UTF-8");
    mb_send_mail($mail_to, $mail_subject, $mail_body, "From: <".$mail_from.">");
    $send_flg = true;
    $_POST = array();
    echo "success";
    ?>
    
  </body>
</html>