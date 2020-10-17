<?php
 //*JANGAN RECODE ASU LU KIRA NGODING GAMPANG 
 //*ANJENK
error_reporting(0);
echo "\n\e[1;32m]========================================================\e[0m \r\n";
echo "\n\e[0;31m] {=>} ...{×} BIN check-\e[0m \r\n";
echo "\n\e[0;31m] {=>} CODER{×} : MR.W4HYU \e[0m \r\n";
echo "\n\e[0;31m] {=>} Team {×}  : INDONESIAN ERROR SYSTEM \e[0m \r\n";
echo "\e[0;35m] kontak Me wahyu.st021@gmail.com\e[0m \r\n";
echo "\e[0;35m] Git Hub https://github.com/wahyuIES\e[0m \r\n";
echo "\n\e[1;32m]========================================================\e[0m \r\n";
echo "\n[+]BIN lu=> ";
$six = trim(fgets(STDIN, 1024));
  // Insert CURL
  function curl($url, $var = null) {
      $curl = curl_init($url);
      curl_setopt($curl, CURLOPT_TIMEOUT, 25);
      if ($var != null) {
          curl_setopt($curl, CURLOPT_POST, true);
          curl_setopt($curl, CURLOPT_POSTFIELDS, $var);
      }
      curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
      curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 2);
      curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
      curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
      $result = curl_exec($curl);
      curl_close($curl);
      return $result;
  }
  // Enam digit Bin Formula
  function defineNUM($bin) {
      return substr($bin,0,6);
  }
  // JSON DATA
    $bin = defineNUM($six);
    $curl = curl("https://lookup.binlist.net/".$bin);
    $json = json_decode($curl);
    $cardBrand = $json->brand ? $json->brand : "not found";
    $cardType = $json->type ? $json->type : "not found";
    $cardScheme = $json->scheme ? ucwords($json->scheme) : "not found";
    $countryCode = $json->country->alpha2 ? $json->country->alpha2 : "not found";
    $countryName = $json->country->name ? $json->country->name : "not found";
    $countryLat = $json->country->latitude ? $json->country->latitude : "not found";
    $countryLong = $json->country->longitude ? $json->country->longitude : "not found";
    $cardName = $json->bank->name ? $json->bank->name : "not found";
    $url = $json->bank->url ? $json->bank->url : "not found";
    $phone = $json->bank->phone ? $json->bank->phone : "not found";
    $cardCity = $json->bank->city ? $json->bank->city : "not found";
echo "\nBank Name ==[> $cardName";
echo "\nType Brand ==[> $cardBrand";
echo "\nCard Type ==[> $cardType";
echo "\nCard Scheme ==[> $cardScheme";
echo "\nCountry Name ==[> $countryName";
echo "\nCountry Code ==[> $countryCode";
echo "\nCity Name ==[> $cardCity";
echo "\nMap ==[> Lat = $countryLat | Long = $countryLong";
echo "\nURL ==[> $url";
echo "\nPhone Number ==[> $phone";
echo "\n\n";
?>
