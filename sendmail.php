$to = trim($_POST['form_user']);
$subject = '메일 인증';
$message = '메일 인증되셨습니다! 로그인 후 서비스를 이용해주시길 바랍니다.';
$headers[] = 'MIME-Version: 1.0';
$headers[] = 'Content-type: text/html; charset=utf-8';
$headers[] = 'From: webmaster<받는사람@gmail.com>';
mail($to, $subject, $message, implode("\r\n", $headers));
echo "편지를 보냈습니다.";
    echo "<script language=javascript> alert('메일인증성공!');  location.replace('http://www.taeriview.com'); </script>";