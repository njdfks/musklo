<?php



# Your Email
$mail = "johangurra81@gmail.com";
# Your Password
$pass = "Uddevalla1";




date_default_timezone_set("Asia/Jakarta");
/* START COLOR */
$res="\033[7m";
$hitam="\033[0;30m";
$abu2="\033[1;30m";
$putih="\033[0;37m";
$putih2="\033[1;37m";
$red="\033[0;31m";
$red2="\033[1;31m";
$green="\033[0;32m";
$green2="\033[1;32m";
$yellow="\033[0;33m";
$yellow2="\033[1;33m";
$blue="\033[0;34m";
$blue2="\033[1;34m";
$purple="\033[0;35m";
$purple2="\033[1;35m";
$lblue="\033[0;36m";
$lblue2="\033[1;36m";


system("clear");
echo$yellow2."
██████╗ ██╗███╗   ██╗ ██████╗  ██████╗
██╔══██╗██║████╗  ██║██╔════╝ ██╔═══██╗
██████╔╝██║██╔██╗ ██║██║  ███╗██║   ██║
██╔══██╗██║██║╚██╗██║██║   ██║██║   ██║
██████╔╝██║██║ ╚████║╚██████╔╝╚██████╔╝
╚═════╝ ╚═╝╚═╝  ╚═══╝ ╚═════╝  ╚═════╝
".$lblue2."      Author: ClimaxTech256\n\n\n";



function post($url,$ua,$data){
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, $ua);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
curl_setopt($ch, CURLOPT_COOKIEJAR, "cookie.txt");
curl_setopt($ch, CURLOPT_COOKIEFILE, "cookie.txt");
$r = curl_exec($ch);
return $r;
}


function gett($url,$ua){

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, $ua);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_COOKIEJAR, "cookie.txt");
curl_setopt($ch, CURLOPT_COOKIEFILE, "cookie.txt");
$r = curl_exec($ch);
return $r;
}


while(true){
echo$red."♥♥♥♥♥♥♥♥♥♥♥♥♥♥♥♥♥♥♥♥♥♥♥♥♥♥♥♥♥♥♥♥♥♥♥♥♥♥♥♥♥♥♥\n";
$url = "http://72-251-226-37.cprapid.com/bingo144/api/v1/getuserdata.php";
$ua = array(
"Content-Type: application/x-www-form-urlencoded; charset=UTF-8",
"User-Agent: Dalvik/2.1.0 (Linux; U; Android 6.0.1; ASUS_A007 Build/MMB29P)"
);
$data = "email=".$mail."&password=".$pass."&";
$ok = post($url,$ua,$data);
$js = json_decode($ok);
$bal = $js->poin;
echo$yellow2." Your Poin Balance -> ".$putih2.$bal."\n";


$randclaim = rand(1,18);
$url = "http://72-251-226-37.cprapid.com/bingo144/api/v1/updratescor.php";


$data = "email=".$mail."&password=".$pass."&way=scratch&locationa=Indonesia&FCM_APP_ID=97552d6e-77a8-4fcb-8c2155&token=2021-13-08+17%3A13%3A14&points=".$randclaim."&";
$ok = post($url,$ua,$data);
if($ok == '{"error":false,"message":" data save"}'){
echo$green2." Success Claim Scratch ".$lblue2.$XX."\n";}else{
echo$red2." Failed Claim Scratch ".$lblue2.$XX."\n";
}
sleep(5);
//$js = json_decode($ok);


$data = "email=".$mail."&password=".$pass."&way=Spin_Play1&locationa=Indonesia&FCM_APP_ID=97552d6e-77a8-4fcb-8c2155&token=2021-29-08+18%3A29%3A36&points=".$randclaim."&";
$ok = post($url,$ua,$data);
if($ok == '{"error":false,"message":" data save"}'){
echo$green2." Success Claim Spin ".$lblue2.$XX."\n";}else{
echo$red2." Failed Claim Spin ".$lblue2.$XX."\n";
}
sleep(5);



$data = "email=".$mail."&password=".$pass."&way=math_quiz&locationa=Indonesia&FCM_APP_ID=97552d6e-77a8-4fcb-8c2155&token=2021-33-08+18%3A33%3A41&points=".$randclaim."&";
$ok = post($url,$ua,$data);
if($ok == '{"error":false,"message":" data save"}'){
echo$green2." Success Claim Math ".$lblue2.$XX."\n";}else{
echo$red2." Failed Claim Math ".$lblue2.$XX."\n";
}
sleep(5);



$data = "email=".$mail."&password=".$pass."&way=watch_ads&locationa=Indonesia&FCM_APP_ID=97552d6e-77a8-4fcb-8c2155&token=2021-36-08+18%3A36%3A52&points=".$randclaim."&";
$ok = post($url,$ua,$data);
if($ok == '{"error":false,"message":" data save"}'){
echo$green2." Success Claim Video ".$lblue2.$XX."\n";}else{
echo$red2." Failed Claim Video ".$lblue2.$XX."\n";
}
sleep(5);

echo$red."♥♥♥♥♥♥♥♥♥♥♥♥♥♥♥♥♥♥♥♥♥♥♥♥♥♥♥♥♥♥♥♥♥♥♥♥♥♥♥♥♥♥♥\n\n";

for ($x=180;$x>-1;$x--){
echo "\r \r";
echo$abu2."\r Next claim In  =>  ".$putih2.$x."\r";
sleep(1);
}

}
