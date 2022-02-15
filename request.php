<?php include("header.php"); ?>

<script src="https://ajaxzip3.googlecode.com/svn/trunk/ajaxzip3/ajaxzip3-https.js" charset="UTF-8"></script>

	<div id="contents">
			<div class="box">
			<h2><img src="images/page_form_h2_2.png"></h2>
			<p class="mb20"><img src="images/page_form_c1_3.jpg"></p>
			</div>

            <ul class="subtitle">
                <li class="tL"><img src="images/h3_icon.png"></li>
                <li><h3>資料請求フォーム</h3></li>
                <li class="tR"><img src="images/h2_icon_right.png"></li>
            </ul>

<div class="box">

<form action="sendmail.php" method="post">
<table id="form_inf" class="cf">
<tr>
	<th class="cL need" colspan="2">お名前</th>
	<td class="cR">
		姓　 <input style="width:20%;" name="姓" class="form_100" type="text" value="">　
		名　 <input style="width:20%;" name="名" class="form_100" type="text" value="">
	</td>
</tr>
<tr>
	<th class="cL need" colspan="2">フリガナ</th>
	<td class="cR">
		セイ <input style="width:20%;" name="セイ" class="form_100" type="text" value="">　
		メイ <input style="width:20%;" name="メイ" class="form_100" type="text" value="">
	</td>
</tr>
<tr>
	<th class="cL_parent need" rowspan="4">ご住所</th>
	<th class="cL_child">郵便番号</th>
	<td class="cR">
		<input style="width:10%;" name="郵便番号1" class="form_100" type="text" value=""> -
		<input style="width:10%;" name="郵便番号2" class="form_100" type="text" value="" onkeyup="AjaxZip3.zip2addr('郵便番号1','郵便番号2','都道府県','市区町村','それ以降のご住所');">
	</td>
</tr>
<tr>
	<th class="cL_child">都道府県</th>
	<td class="cR">
		<input name="都道府県" class="form_100" type="text" value="">
	</td>
</tr>
<tr>
	<th class="cL_child">市区町村</th>
	<td class="cR">
		<input name="市区町村" class="form_100" type="text" value="">
	</td>
</tr>
<tr>
	<th class="cL_child">それ以降</th>
	<td class="cR">
		<input name="それ以降のご住所" class="form_100" type="text" value="">
	</td>
</tr>
<tr>
	<th class="cL need" colspan="2">お電話番号</th>
	<td class="cR">
		<input style="width:10%;" name="電話番号1" class="form_100" type="text" value=""> -
		<input style="width:10%;" name="電話番号2" class="form_100" type="text" value=""> -
		<input style="width:10%;" name="電話番号3" class="form_100" type="text" value="">
	</td>
</tr>
<tr>
	<th class="cL need" colspan="2">メールアドレス</th>
	<td class="cR">
		<input name="メール" class="form_100" type="text" value="">
	</td>
</tr>
<tr>
	<th class="cL need" colspan="2">メールアドレス(確認)</th>
	<td class="cR">
		<input name="メール確認" class="form_100" type="text" value="">
	</td>
</tr>
<tr>
	<th class="cL" colspan="2">その他ご要望</th>
	<td class="cR">
		<textarea name="その他ご要望" class="form_100" rows="8"></textarea>
	</td>
</tr>
<tr>
<td colspan="3" id="submitbtn"><input id="btn_conform" class="submitbtn sendit" type="submit" value="　"></td>
</tr>
</table>
</form>



		</div>


	</div><!-- close.contents -->

<?php include("side.php"); ?>

</div><!-- close.container -->
<?php include("footer.php"); ?>