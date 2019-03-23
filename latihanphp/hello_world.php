<!-- pembuka kode php -->
<?php
echo "hallo world";
echo "<br>";
echo 1;
$b = 2;
$c = 5;
echo "<br>";
echo $hasil = $b+$c;
echo "<br>";
$bolean = true;
$arrayName = array(
	'nama' => 'noval',
	'nilai' => $hasil );
print_r($arrayName);
var_dump($arrayName);

echo ($hasil == 7) ? 'betul' : 'salah' ;

if ($hasil == 7 && $c==$atas || $d <= 5) {
	echo 'betul';
}
else if($hasil == 5){
	echo 'ngaco';

} else {
	echo 'salah';
}

?>