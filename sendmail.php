<?php
header('Content-Type: text/html; charset=utf-8');

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//
// 基本設定
//
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


//このファイルの名前（ファイル名と同じにしてください）

$filename = "sendmail.php";


//このファイルからform.htmlまでのパス

$formpath = "index_test.html";


//このファイルからconfig.phpまでのパス

$configpath = "config.php";


/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//
// フォームからのメールを受け取る人の設定
//
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


//メールアドレス(このメールアドレスにフォームの内容が送信されます。)

$myMail = "info@comoencasa.jp";

//送信者名(メールソフトの「送信者」の箇所に表示されます)

$sender = "コモエンカサ";


//受信メール件名(メールソフトの「件名」の箇所に表示されます)

$mailTitle = "お問い合せフォームから";


//受信メール内容のメッセージ("EOF"は消さないでください。)

$mailText = <<<EOF

お問い合せフォームより以下のメールを受付ました。

--------------------------------------------------------------------------------------------
EOF;


/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//
// フォームからメールを送った人に自動で返信するメールの設定
//
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


//自動返信メール("1" で送信する "0" で送信しない)

$remailflg = 1;


//自動返信メール件名(メールソフトの「件名」の箇所に表示されます)

$remailTitle = "お問い合せありがとうございました";


//自動返信メール内容の上段メッセージ("EOF"は消さないでください。)

$remailTop = <<<EOF

この度はコモエンカサへお問い合せ頂き誠にありがとうございました。
改めて担当者よりご連絡をさせていただきます。


─ご送信内容の確認─────────────────
EOF;


//自動返信メール内容の下段メッセージ("EOF"は消さないでください。)

$remailBottom = <<<EOF

──────────────────────────

このメールに心当たりの無い場合は、お手数ですが
下記連絡先までお問い合わせください。

この度はお問い合わせ重ねてお礼申し上げます。


EOF;


//署名

$sign = <<<EOF
━━━━━━━━━━━━━━━━━━━━━━━━━━
　コモエンカサ / como en casa
　東京都渋谷区神宮前4-3-15 東京セントラル表参道
　TEL / 03-6432-9323　FAX / 011-832-8698
　http://www.comoencasa.jp/
━━━━━━━━━━━━━━━━━━━━━━━━━━

EOF;


/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//
// 確認画面、エラー画面、送信後画面設定
//
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


//確認画面、エラー画面のメッセージ(HTML使用可。"EOF"は消さないでください。)

$explain = <<<EOF
<p>
内容をご確認の上、「送信」ボタンを押してください。<br />
<span style="color: #d44;">赤文字</span>が表示されている箇所は入力エラーです。<br />
お手数ですが、入力画面より再度入力してください。
</p><br /><br />
EOF;


//メール送信の成功メッセージ設定(HTML使用可。"EOF"は消さないでください。)

$thanks = <<<EOF
<p class='thnk'><img src='img/thanks_thanks.png'></p>

<h2><img src='img/thankyou.png'><br>送信完了<span>Complete!<div class='line_d'></div></span></h2>
<div class='lead_text'>
	<h4>お問い合わせありがとうございました</h4>

	<a href='index.html'>
		<p class='thnk link'>
			<img src='img/logo1.png'><br>
			<h1>TOPへ戻る</h1>
		</p>
	</a>
</div><!-- lead_text -->
EOF;


//メール送信の失敗メッセージ設定(HTML使用可。"EOF"は消さないでください。)

$errorMsg = <<<EOF
送信に失敗しました。<br />
お手数ですが、入力画面より再度入力をお願いいたします。
EOF;


//エラー内容のテキストカラー

$color = "#d44";


//必須項目エラーのテキスト

$absErr = "必須項目です。入力してください。";


//入力エラーのテキスト

$inputErr = "入力が正しくありません。";


//メールアドレス不一致エラーのテキスト

$mailErr = "メールアドレスが一致していません。";


//半角数字入力エラーのテキスト

$fontErr = "半角数字で入力してください。";



/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
require $configpath; //消さないで！！


//テンプレートタグの設定(カンマ区切りで複数指定してください。)

$post = array(

"お名前" => output("お名前","true"),
"メールアドレス" => mailAdd("メール","true"),
"その他ご要望" => output("メッセージ本文","true")

);



/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//
// テンプレートタグ一覧（コピーして$postに追加してください。また、name値はinputの設定に応じてに変更してください。）
//
//　　"テキスト、セレクト、ラジオボタンなど" => output("name値","false","テキスト","テキスト"),
//
//    "お名前" => name("姓","名","true"),
//
//    "生年月日" => birthday("年","月","日","false","西暦"),
//
//    "郵便番号" => postcode("郵便番号1","郵便番号2","false"),
//
//    "電話番号" => tel("電話番号1","電話番号2","電話番号3","false"),
//
//    "メールアドレス(確認なし)" => mailAdd("メール","true"),
//
//    "メールアドレス(確認あり)" => mailAdd("メール","メール確認","true"),
//
//    "メールアドレス(確認用)" => mailAdd("メール確認","メール","true"),
//
//    "チェックボックス" => checkBox("name値","区切り文字","false"),
//
//    "input連結用(2個)" => connect("name値1","name値2","false","テキスト","テキスト","テキスト"),
//
//    "input連結用(3個)" => multi("name値1","name値2","name値3","false","テキスト","テキスト","テキスト","テキスト"),
//
//
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//
// 確認画面、エラー画面について
//
//    メール確認画面テンプレートの表示は以下のようにtableレイアウトになっています。
//
//    <table>
//    <tr>
//    <th>項目名</th>
//    <td>入力内容</td>
//    </tr>
//    </table>
//
//   「confirm.php」の中に記述されていますので、必要がある場合は変更してください。
//
//
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


require "confirm.php";
?>



