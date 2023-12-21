<?php
session_start();
if (isset($_SESSION['data'])) {
    $data = $_SESSION['data'];
    $username = $data['username'];
} else {
    header('Location: loginScreen.php?message=ログインしてください');
    exit;
}
?>

<h1>ログイン成功</h1>
<p>ようこそ、<?php echo $username; ?>さん</p>
<p><a href="logout.php">ログアウトする</a></p>