<?php
    $content = '';
    foreach ($_POST as $key => $value){
        if($value){
            $content .= "<b>$key</b>: <i>$value</i>\n";
        }
    }
    if(trim($content)){
        $content = "<b>Message from Site</b>\n".$content;
        $apiToken = "6516710471:AAFFlH2GCe0toGB0pX2vxJXDwkm1CPptIZY";
        $data = [
            'chat_id' => '@sushitg1_bot',
            'text' => $content,
            'parse_mode' => 'HTML'
        ];
        $response = file_get_contents("https://api.telegram.org/bot$apiToken/sendMessage?".http_build_query($data))
    }
?>