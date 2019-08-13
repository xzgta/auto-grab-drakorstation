<?php
echo "-------------\ @xzagta /-------------\n";
echo "xixi bg w link drakorna : ";
// $url = fopen ("php://stdin", "r");
// $urldrakor = trim(fgets($url));
// $ch = curl_init($urldrakor);
$ch = curl_init("https://drakorstation.com/empress-terakhir-sub-indo/");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$content = curl_exec($ch);
curl_close($ch); 

// $regex = '/<strong>([0-9-a-z]*)<\/strong> <a[^>]* href="([^"]*)"/' ;
// $regexjudul = '/"dl_box_wowo">[\n]<h4>(.*?)<\/h4>[\r\n]<ul>[\r\n]<li>/';
$regexlink = '/"dl_box_wowo">[\n]<h4>(.*?)<\/h4>[\r\n]<ul>[\r\n]<li><strong>(.*?)<\/strong> <a href="(.*?)"/';
$regex540 = '/<strong>540px<\/strong> <a href="(.*?)"/';
$regex720 = '/<strong>720px<\/strong> <a href="(.*?)"/';
// $judul = preg_match_all($regexjudul, $content, $hasiljudul);
$link = preg_match_all($regexlink, $content, $hasillink);
$link540 = preg_match_all($regex540, $content, $hasil540);
$link720 = preg_match_all($regex720, $content, $hasil720);
$judul = $hasillink[1];
$resolusi = $hasillink[2];
$mylink = $hasillink[3];
$mylink540 = $hasil540[1];
$mylink720 = $hasil720[1];
// echo "Pilih Resolusi ?\n";
// echo "[ 1 ]> 360\n";
// echo "[ 2 ]> 540\n";
// echo "[ 3 ]> 720\n";
// echo "note : anjay luh klo error berarti gda resolusina xixi !!\n []> ";
// $res = fopen ("php://stdin", "r");
// $hasil = trim(fgets($res));
// if ($hasil == "1") {
// 	$len=count($mylink);
// 	for ($i=0;$i<$len;$i++)
//    	echo "360 => ".$judul[$i]."\nLink => ".$mylink[$i]."\n";
// }elseif ($hasil == "2"){
// 	$len=count($mylink);
// 	for ($i=0;$i<$len;$i++)
//    	echo "540 => ".$judul[$i]."\nLink => ".$mylink540[$i]."\n";
// }elseif ($hasil == "3") {
// 	$len=count($mylink);
// 	for ($i=0;$i<$len;$i++)
//    	echo "360 => ".$judul[$i]."\nLink => ".$mylink720[$i]."\n";
// }else{
// 	echo "Error 404";

