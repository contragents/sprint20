<?
print_r($_SERVER);
print_r($_GET);
$data=file_get_contets("http://openapi.clearspending.ru/restapi/v3/contracts/select/?okdp_okpd={$_GET[okpd]}");
$data=json_decode($data,true);
$total=$data[contracts][total];
foreach($data[contracts][data] as $contract)
printr($contract[productsCountries]);
print_r($data);
print_r($dtat);
exit();
print date('d.m.Y'); 
print 'sprint20'; 
?>
hello