<!DOCTYPE html>
<html lang="en">
<head>
<title>Регистрация</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" type="text/css" href="css/util.css">
<link rel="stylesheet" type="text/css" href="css/main.css">

<meta name="robots" content="noindex, follow">
<script nonce="dd9c5db1-500b-40b0-a644-866f752a1abd">(function(w,d){!function(bg,bh,bi,bj){bg[bi]=bg[bi]||{};bg[bi].executed=[];bg.zaraz={deferred:[],listeners:[]};bg.zaraz.q=[];bg.zaraz._f=function(bk){return function(){var bl=Array.prototype.slice.call(arguments);bg.zaraz.q.push({m:bk,a:bl})}};for(const bm of["track","set","debug"])bg.zaraz[bm]=bg.zaraz._f(bm);bg.zaraz.init=()=>{var bn=bh.getElementsByTagName(bj)[0],bo=bh.createElement(bj),bp=bh.getElementsByTagName("title")[0];bp&&(bg[bi].t=bh.getElementsByTagName("title")[0].text);bg[bi].x=Math.random();bg[bi].w=bg.screen.width;bg[bi].h=bg.screen.height;bg[bi].j=bg.innerHeight;bg[bi].e=bg.innerWidth;bg[bi].l=bg.location.href;bg[bi].r=bh.referrer;bg[bi].k=bg.screen.colorDepth;bg[bi].n=bh.characterSet;bg[bi].o=(new Date).getTimezoneOffset();if(bg.dataLayer)for(const bt of Object.entries(Object.entries(dataLayer).reduce(((bu,bv)=>({...bu[1],...bv[1]})))))zaraz.set(bt[0],bt[1],{scope:"page"});bg[bi].q=[];for(;bg.zaraz.q.length;){const bw=bg.zaraz.q.shift();bg[bi].q.push(bw)}bo.defer=!0;for(const bx of[localStorage,sessionStorage])Object.keys(bx||{}).filter((bz=>bz.startsWith("_zaraz_"))).forEach((by=>{try{bg[bi]["z_"+by.slice(7)]=JSON.parse(bx.getItem(by))}catch{bg[bi]["z_"+by.slice(7)]=bx.getItem(by)}}));bo.referrerPolicy="origin";bo.src="/cdn-cgi/zaraz/s.js?z="+btoa(encodeURIComponent(JSON.stringify(bg[bi])));bn.parentNode.insertBefore(bo,bn)};["complete","interactive"].includes(bh.readyState)?zaraz.init():bg.addEventListener("DOMContentLoaded",zaraz.init)}(w,d,"zarazData","script");})(window,document);</script></head>
<body>
<div class="container-login100" style="background-image: url('images/bg-01.jpg');">
<div class="wrap-login100 p-l-55 p-r-55 p-t-80 p-b-30">
<form class="login100-form validate-form" method="POST" action="register.php">
<span class="login100-form-title p-b-37">
Регистрация
</span>
<div class="wrap-input100 validate-input m-b-20" data-validate="">
<input class="input100" type="text" name="login" id="login" placeholder="Имя пользователя">
<span class="focus-input100"></span>
</div>
<div class="wrap-input100 validate-input m-b-25" data-validate="">
<input class="input100" type="email" id="email" name="email" placeholder="email">
<span class="focus-input100"></span>
</div>
<div class="wrap-input100 validate-input m-b-25" data-validate="">
<input class="input100" type="phone" id="phone" name="phone" placeholder="Телефон">
<span class="focus-input100"></span>
</div>
<div class="wrap-input100 validate-input m-b-25" data-validate="">
<input class="input100" type="password" id="password" name="password" placeholder="Пароль">
<span class="focus-input100"></span>
</div>
<div class="wrap-input100 validate-input m-b-25" data-validate="">
<input class="input100" type="password" id="repassword" name="repassword" placeholder="Подтвердить пароль">
<span class="focus-input100"></span>
</div>
<div class="container-login100-form-btn">
<button class="login100-form-btn"><class="ololo">
Зарегистрироваться
</a>
</button>
</form>
</div>
<div class="text-center p-t-57 p-b-20">
  <p>Уже есть аккаунт?</p>
<div class="text-center">
<a href="login.html" class="txt2 hov1">
Войти
</a>
</div>
</form>
</div>
</div>
<div id="dropDownSelect1"></div>

<?php
require_once('connect.php');
if (!empty($_REQUEST['login']) && !empty($_REQUEST['phone']) && !empty($_REQUEST['email']) && !empty($_REQUEST['password']));
$login=$_POST['login'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$password=$_POST['password'];
$repassword=$_POST['repassword'];
if ($password !=$repassword) {
    echo 'Пароль не совпадает';
}
else{
    $passw=password_hash($password, PASSWORD_BCRYPT);
    $sql="INSERT INTO users1 (login, phone, email, password) values ('$login', '$phone', '$email', '$passw')";
    if ($db ->query($sql)=== TRUE) {
        echo "Успешная регистрация";
}
else {
    echo "Ошибка:" .$db->error;
}
}
?>

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-23581568-13');
	</script>
<script defer src="https://static.cloudflareinsights.com/beacon.min.js/v52afc6f149f6479b8c77fa569edb01181681764108816" integrity="sha512-jGCTpDpBAYDGNYR5ztKt4BQPGef1P0giN6ZGVUi835kFF88FOmmn8jBQWNgrNd8g/Yu421NdgWhwQoaOPFflDw==" data-cf-beacon='{"rayId":"7c858714db7216d3","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2023.4.0","si":100}' crossorigin="anonymous"></script>
</body>
</html>
