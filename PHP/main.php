<?php
//LimeleAPI v2

$url = "https://exsmple.com"; //短縮したいurl
$api_url = "https://riyblog.shop/limele/api/v2/";
$json = file_get_content($api_url."?url=".$url);
$res = json_decode($json);

if($res["msg"] === "404"){ //エラー処理
    echo "500";
}else{
    echo $res["ver"]."<br/>"; //APIバージョン
    echo $res["msg"]."<br/>"; //ステータスメッセージ
    echo $res["url"]."<br/>"; //短縮済みURL
}

/**
 * LimeleAPI v2 リファレンス
 * PHPサンプルコード
 * 2020/12/10 (最終更新)
 */
