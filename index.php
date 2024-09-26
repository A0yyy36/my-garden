<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>お問い合わせフォーム</title>
<style type="text/css">
	body {
		background-color: #f9fff2;
	}
	.input-area {
		margin-bottom: 20px;
	}
	input[type="text"],input[type="email"],select {
		width: 300px;
		height: 30px;
	}
	textarea {
		width: 300px;
	}
	p {
		font-weight: bold;
		font-size: 20px;
	}
	.btn-border {
		display: inline-block;
		max-width: 180px;
		text-align: left;
		border: 2px solid #9ec34b;
		font-size: 15px;
		color: #9ec34b;
		text-decoration: none;
		font-weight: bold;
		padding: 8px 16px;
		border-radius: 4px;
		transition: .4s;
	}
	.btn-border:hover {
		background-color: #9ec34b;
		border-color: #cbe585;
		color: #FFF;
	}
</style>
</head>
<body>
    <form action="confirm.php" method="post">
        <h2>お問い合わせフォーム</h2>
        <div class="input-area">
            <p>名前</p>
            <input type="text" name="name" placeholder="例）田中　太郎" required>
		</div>

		<div class="input-area">
            <p>メール</p>
            <input type="email" name="email" placeholder="例）abc@abc.com" required>
        </div>

        <div class="input-area">
            <p>性別</p>
            <label><input type="radio" name="sex" value="男性" checked>男性</label>
            <label><input type="radio" name="sex" value="女性">女性</label>
        </div>

        <div class="input-area">
            <p>お住まいの地域</p>
            <select name="pref" required>
                <option value="">-選択-</option>
                <option value="北海道">北海道</option>
                <option value="青森県">青森県</option>
                <option value="岩手県">岩手県</option>
                <option value="宮城県">宮城県</option>
                <option value="秋田県">秋田県</option>
                <option value="山形県">山形県</option>
                <option value="福島県">福島県</option>
                <option value="茨城県">茨城県</option>
                <option value="栃木県">栃木県</option>
                <option value="群馬県">群馬県</option>
                <option value="埼玉県">埼玉県</option>
                <option value="千葉県">千葉県</option>
                <option value="東京都">東京都</option>
                <option value="神奈川県">神奈川県</option>
                <option value="新潟県">新潟県</option>
                <option value="富山県">富山県</option>
                <option value="石川県">石川県</option>
                <option value="福井県">福井県</option>
                <option value="山梨県">山梨県</option>
                <option value="長野県">長野県</option>
                <option value="岐阜県">岐阜県</option>
                <option value="静岡県">静岡県</option>
                <option value="愛知県">愛知県</option>
                <option value="三重県">三重県</option>
                <option value="滋賀県">滋賀県</option>
                <option value="京都府">京都府</option>
                <option value="大阪府">大阪府</option>
                <option value="兵庫県">兵庫県</option>
                <option value="奈良県">奈良県</option>
                <option value="和歌山県">和歌山県</option>
                <option value="鳥取県">鳥取県</option>
                <option value="島根県">島根県</option>
                <option value="岡山県">岡山県</option>
                <option value="広島県">広島県</option>
                <option value="山口県">山口県</option>
                <option value="徳島県">徳島県</option>
                <option value="香川県">香川県</option>
                <option value="愛媛県">愛媛県</option>
                <option value="高知県">高知県</option>
                <option value="福岡県">福岡県</option>
                <option value="佐賀県">佐賀県</option>
                <option value="長崎県">長崎県</option>
                <option value="熊本県">熊本県</option>
                <option value="大分県">大分県</option>
                <option value="宮崎県">宮崎県</option>
                <option value="鹿児島県">鹿児島県</option>
                <option value="沖縄県">沖縄県</option>

            </select>
        </div>

        <div class="input-area">
            <p>お問い合わせ理由</p>
            <label><input type="checkbox" name="reason[]" value="質問">質問</label>
            <label><input type="checkbox" name="reason[]" value="ご意見ご要望">ご意見ご要望</label>
            <label><input type="checkbox" name="reason[]" value="資料請求">資料請求</label>
            <label><input type="checkbox" name="reason[]" value="掲載依頼">掲載依頼</label>
            <label><input type="checkbox" name="reason[]" value="その他">その他</label>
        </div>

		<div class="input-area">
            <p>お問い合わせ内容</p>
            <textarea name="contact_body" rows="5" placeholder="例）具体的な内容を記載" required></textarea>
		</div>
        <div class="input-area">
            <input type="submit" name="submit" value="確認画面へ" class="btn-border">
        </div>
	</form>
</body>
</html>