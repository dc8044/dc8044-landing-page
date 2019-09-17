<?php

session_start();

$url = 'https://dc8044.com'; //ticket link

if($_SESSION['code']) {
    if($_REQUEST['code'] === $_SESSION['code']) {
        header('Location: '.$url);
        exit;
    }
}
else $_SESSION['code'] = sha1(uniqid('', true));

$arr = str_split($_SESSION['code']);

foreach($arr as $v) {

    $ord = ord($v);

    if(mt_rand(0, 1)) $hash[] = $ord;
    else $hash[] = '0x'.dechex($ord);

}

$hash = '\u0053\u0074\u0072\u0069\u006e\u0067.\u0066\u0072\u006f\u006d\u0043\u0068\u0061\u0072\u0043\u006f\u0064\u0065('.join($hash, ',').')';

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="wp-content/themes/dc8044/favicon.ico">
    <title>DC8044 :: BLACKOUT()</title>
    <link href="wp-content/themes/dc8044/bootstrap.min.css" rel="stylesheet">
    <link href="wp-content/themes/dc8044/style.css" rel="stylesheet">
</head>

<body class="guide-page">
    <div class="guide-body guide-body-bo19">
        <h2 class="hacked title-bo19">Do you wanna get to <span class="title-shadow-bo19">DC8044 :: BLACKOUT()</span>?</h2>

        <form class="form-bo19" onsubmit="invite();return/**/false">
            <div class="input-group">
                <input type="text" id="code" class="form-control form-control-lg form-control-bo19" placeholder="Enter the secret code">

                <div class="input-group-append">
                    <button class="btn btn-secondary btn-lg btn-bo19" type="submit">INVITE ME!</button>
                </div>
            </div>
        </form>
    </div>

    <footer>
        <a href="index.php" class="link_main">
            MAIN PAGE
        </a>
        <img src="wp-content/themes/dc8044/X_pic.png" alt="" class="img-fluid main_img">
    </footer>

    <script>
        function sha1(r){function o(r,o){return r<<o|r>>>32-o}function e(r){var o,e='';for(o=7;0<=o;o--)e+=(r>>>4*o&15).toString(16);return e}var a,t,h,n,C,c,f,d,u,A=new Array(80),s=1732584193,g=4023233417,i=2562383102,p=271733878,S=3285377520,l=(r=function(r){r=r.replace(/\r\n/g,'\n');for(var o='',e=0;e<r.length;e++){var a=r.charCodeAt(e);a<128?o+=String.fromCharCode(a):(127<a&&a<2048?o+=String.fromCharCode(a>>6|192):(o+=String.fromCharCode(a>>12|224),o+=String.fromCharCode(a>>6&63|128)),o+=String.fromCharCode(63&a|128))}return o}(r)).length,m=new Array;for(t=0;t<l-3;t+=4)h=r.charCodeAt(t)<<24|r.charCodeAt(t+1)<<16|r.charCodeAt(t+2)<<8|r.charCodeAt(t+3),m.push(h);switch(l%4){case 0:t=2147483648;break;case 1:t=r.charCodeAt(l-1)<<24|8388608;break;case 2:t=r.charCodeAt(l-2)<<24|r.charCodeAt(l-1)<<16|32768;break;case 3:t=r.charCodeAt(l-3)<<24|r.charCodeAt(l-2)<<16|r.charCodeAt(l-1)<<8|128}for(m.push(t);m.length%16!=14;)m.push(0);for(m.push(l>>>29),m.push(l<<3&4294967295),a=0;a<m.length;a+=16){for(t=0;t<16;t++)A[t]=m[a+t];for(t=16;t<=79;t++)A[t]=o(A[t-3]^A[t-8]^A[t-14]^A[t-16],1);for(n=s,C=g,c=i,f=p,d=S,t=0;t<=19;t++)u=o(n,5)+(C&c|~C&f)+d+A[t]+1518500249&4294967295,d=f,f=c,c=o(C,30),C=n,n=u;for(t=20;t<=39;t++)u=o(n,5)+(C^c^f)+d+A[t]+1859775393&4294967295,d=f,f=c,c=o(C,30),C=n,n=u;for(t=40;t<=59;t++)u=o(n,5)+(C&c|C&f|c&f)+d+A[t]+2400959708&4294967295,d=f,f=c,c=o(C,30),C=n,n=u;for(t=60;t<=79;t++)u=o(n,5)+(C^c^f)+d+A[t]+3395469782&4294967295,d=f,f=c,c=o(C,30),C=n,n=u;s=s+n&4294967295,g=g+C&4294967295,i=i+c&4294967295,p=p+f&4294967295,S=S+d&4294967295}return(u=e(s)+e(g)+e(i)+e(p)+e(S)).toLowerCase()}function invite(){sha1(document.getElementById('code').value)===<?= $hash ?>?(\u006C\u006F\u0063\u0061\u0074\u0069\u006F\u006E='\u003f\u0063\u006f\u0064\u0065\u003d'+<?= $hash ?>):alert('Nope.');}
    </script>
</body>
</html>
