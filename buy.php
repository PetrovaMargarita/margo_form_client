<?php
foreach ($_POST['form'] as $input ) {
    $data[$input['name']] = $input['value'];
}
$info = file_get_contents('ссылка для выгрузки валюты');
$cur = json_decode($info, true);
$usd = $cur['usd'];
$eur = $cur['eur'];
$rub = $cur['rub'];

$data['form_url'] = $_POST['form_url'];
$data['lang'] = $_POST['lang'];
$lang = $data['lang'];
$pass = 'пароль';
$data['key']= 'ключ';
$data['url'] = 'ссылка успешной оплаты/'.$data['form_url'].'/success.php?lang='.$lang;

switch ($data['currency'])
{
    case 'UAH':
        $data['amount'] = number_format($data['amount'], 2, '.', '');
        break;
    case 'USD':
        $data['amount'] = number_format($data['amount']*$usd , 2, '.', '');
        $data['ext1'] = number_format($data['amount'], 2, '.', '')." USD";
        break;
    case 'EUR':
        $data['amount'] = number_format($data['amount']*$eur , 2, '.', '');
        $data['ext1'] = number_format($data['amount'], 2, '.', '')." EUR";
        break;
    case 'RUB':
        $data['amount'] = number_format($data['amount']*$rub , 2, '.', '');
        $data['ext1'] = number_format($data['amount'], 2, '.', '')." RUB";
        break;
}

$data['sign'] = md5(strtoupper($data['key'].$data['order'].$data['amount'].strrev($pass)));

$url = 'ссылка для отправки запроса';
$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_HEADER, 0);
curl_setopt($curl, CURLOPT_POST, 1);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query($data));
$response = curl_exec($curl);
curl_close($curl);

$json_decode = json_decode($response);
$json_decode1 = $json_decode -> {'short_link'};
$link = $json_decode1;

$data['link'] = $link;

print_r(json_encode($data));