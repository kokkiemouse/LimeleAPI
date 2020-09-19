<?php
//LimeleAPI v2

$url = 'https://smple.com'; //短縮したいurl
$api_url = 'https://riyblog.shop/limele/api/v2/';
$json = file_get_content($api_url.'?url='.$url);
$res = json_decode($json);

if($res['msg'] === '404')
