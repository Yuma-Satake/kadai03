<?php
$message = '';
if (isset($_GET['message'])) {
    $message = $_GET['message'];
}
?>

<!-- ログイン画面 -->
<div style='text-align: center; margin-top: 50px'>
    <p><?php echo $message; ?></p>
    <form method="post" action="loginCheck.php">
        <div class="form-group">
            <label for="user">ユーザ名</label>
            <input type='text' class="form-control" id="user" name="user" placeholder="ユーザー名">
        </div>
        <div class="form-group" style="margin-top: 10px;">
            <label for="password">パスワード</label>
            <input type="password" class="form-control" id="password" name="password" placeholder="パスワードを入力してください">
        </div>
        <button type="submit" class="btn btn-primary" style='margin-top: 10px;'>ログイン</button>
    </form>
</div>