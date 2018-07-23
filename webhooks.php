<?php
    $accessToken = "bKw9fBNWU5FOCiEGQ0a22ws6s5rVv3dTCFEEWV5/wsQa3/PFkv7WmsTw/3F0VZH+ZKGpKGMjASekClEhRceD73tc5bydeipJtKnZCLGvGUlCqRSU6GEeflAOtJlj5Ow0KyBWjDuRGcOUATgJswwpOQdB04t89/1O/w1cDnyilFU=";//copy Channel access token ตอนที่ตั้งค่ามาใส่
    
    $content = file_get_contents('php://input');
    $arrayJson = json_decode($content, true);
    
    $arrayHeader = array();
    $arrayHeader[] = "Content-Type: application/json";
    $arrayHeader[] = "Authorization: Bearer {$accessToken}";
    
    //รับข้อความจากผู้ใช้
    $message = $arrayJson['events'][0]['message']['text'];
#ตัวอย่าง Message Type "Text"
    if($message == "ดีงับ"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "ดีงับ";
        replyMsg($arrayHeader,$arrayPostData);
    }
    #ตัวอย่าง Message Type "Sticker"
    else if($message == "ฝันดี"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "sticker";
        $arrayPostData['messages'][0]['packageId'] = "2";
        $arrayPostData['messages'][0]['stickerId'] = "46";
        replyMsg($arrayHeader,$arrayPostData);
    }
    #ตัวอย่าง Message Type "Image"
    else if($message == "ตันอร"){
        $image_url = "https://www.picz.in.th/images/2018/07/21/NXgk2e.jpg";
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "image";
        $arrayPostData['messages'][0]['originalContentUrl'] = $image_url;
        $arrayPostData['messages'][0]['previewImageUrl'] = $image_url;
        replyMsg($arrayHeader,$arrayPostData);
    }
    #ตัวอย่าง Message Type "Text + Sticker ใน 1 ครั้ง"
    else if($message == "ลาก่อน"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "อย่าทิ้งกันไป";
        $arrayPostData['messages'][1]['type'] = "sticker";
        $arrayPostData['messages'][1]['packageId'] = "1";
        $arrayPostData['messages'][1]['stickerId'] = "131";
        replyMsg($arrayHeader,$arrayPostData);
    }
    else if($message == "คิดถึง"){
        $image_url = "https://www.picz.in.th/images/2018/07/23/NGsEgI.jpg";
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "คิดถึงเหมือนกันงับ";
        $arrayPostData['messages'][1]['type'] = "image";
        $arrayPostData['messages'][1]['originalContentUrl'] = $image_url;
        $arrayPostData['messages'][1]['previewImageUrl'] = $image_url;
        replyMsg($arrayHeader,$arrayPostData);
    }
    else if($message == "ขอกำลังใจหน่อย"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "video";
        $arrayPostData['messages'][0]['originalContentUrl'] = "https://dc572.4shared.com/img/nEK3dDddgm/11d30c37/dlink__2Fdownload_2FnEK3dDddgm_3Fsbsr_3D3e55bc0207bce360de49f7980cc3b3949e5_26bip_3DMjAzLjE1OC4xMzEuNTU_26lgfp_3D66_26dsid_3D0kSbKZCM.b7563b4871e57141d90f0d60fb846a00_26bip_3DMjAzLjE1OC4xMzEuNTU_26bip_3DMjAzLjE1OC4xMzEuNTU/preview.mp4?cuid=1262102816&cupa=dc393b16fd5436b82b72e02444bc2ddd";//ใส่ url ของ video ที่ต้องการส่ง
        $arrayPostData['messages'][0]['previewImageUrl'] = "https://www.img.in.th/images/778f4254bcd11a588a01987659b0230a.jpg";//ใส่รูป preview ของ video
        replyMsg($arrayHeader,$arrayPostData);
    }
    else if($message == "อลพ"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "ไปเลยไปคนเฮน";
        replyMsg($arrayHeader,$arrayPostData);
    }
    else if($message == "โหวตเตะอลพ"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "+1 สนับสนุนงับ";
        replyMsg($arrayHeader,$arrayPostData);
    }
else if($message == "แม่ง"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "ตบได้นะ ได้จบๆ";
        replyMsg($arrayHeader,$arrayPostData);
    }
else if($message == "เหี้ย"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "มึงสิเหี้ย";
        replyMsg($arrayHeader,$arrayPostData);
    }
else if($message == "ขอรูปสวยๆ"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "ถ้าไม่สวยเจอดจีย์...";
        replyMsg($arrayHeader,$arrayPostData);
    }
else if($message == "อรคนสวย"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "ดีมากงับ ถ้าสวยกว่านี้ก็นางฟ้าแล้ว";
        replyMsg($arrayHeader,$arrayPostData);
    }
else if($message == "แทน"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "ชอบก็ให้รู้ว่าชอบไปสิงับ";
        $arrayPostData['messages'][0]['text'] = "ชอบก็ให้รู้ว่าชอบไปเลยงับ";
        replyMsg($arrayHeader,$arrayPostData);
    }
function replyMsg($arrayHeader,$arrayPostData){
        $strUrl = "https://api.line.me/v2/bot/message/reply";
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL,$strUrl);
        curl_setopt($ch, CURLOPT_HEADER, false);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $arrayHeader);    
        curl_setopt($ch, CURLOPT_POSTFIELDS,json_encode($arrayPostData));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        $result = curl_exec($ch);
        curl_close ($ch);
    }
   exit;
?>
