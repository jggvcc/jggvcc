<?php
ob_start();
$C_K_C1 = "6862793998:AAGsFODhihhHUYv-DUfCgCmHbHHvpmBj6vY";
define('6513089595',$LL_PHP);
function bot($T75BOT,$BOTHSO=[]){
$PBYYT = http_build_query($BOTHSO);
$url = "https://api.telegram.org/bot".API_KEY."/".$T75BOT."?$PBYYT";
$DMMPP = file_get_contents($url);
return json_decode($DMMPP);
}
echo "𝖣𝖾𝗏 @C_K_C1";
$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$text = $update->message->text;
$chat_id = $update->message->chat->id;
$chat_id = $message->chat->id;
$text = $message->text;
$a = strtolower($text);
$from_id = $update->message->from->id;
$message_id = $update->message->message_id;
$from_id = $message->from->id;
$name = $update->message->from->first_name;
$username = $update->message->from->username;
//——————————————————//
$AIi = json_decode(file_get_contents("AIi.json"),true);
$aboKrar = bot('getme',['bot'])->result->username;  //معرف البوت//
$admin = "ايدي";
$LL_PHP = "16307370";
$Dev = array("$admin","$sudo","$C_K_C1");
//——————————————————//
if(isset($update->callback_query)){
$chat_id = $update->callback_query->message->chat->id;
$from_id = $update->callback_query->from->id;
$user = $update->callback_query->from->username;
$name = $update->callback_query->from->first_name;
$message_id = $update->callback_query->message->message_id;
$chid = $update->channel_post->chat->id;
$chtext = $update->channel_post->text;
$messageid = $update->channel_post->message_id;
$document = $update->channel_post->document;
$sticker = $update->channel_post->sticker;
$photo = $update->channel_post->photo;
$video = $update->channel_post->video;
$forward = $update->channel_post->forward_from_chat;
$contact = $update->channel_post->contact;
$audio = $update->channel_post->audio;
$add_id = $update->my_chat_member->from->id;
$document = $message->document;
$file_id = $message->document->file_id;
$caption = $message->caption;
$data = $update->callback_query->data;
}
if(!$update){
return false;
}
if($text == "/start"){
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"
*• اࢪسل الملف الان .*
", 
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
]);
$AIi['DMMPP'][$from_id] = null;
$AIi = json_encode($AIi,32|128|265);
file_put_contents("AIi.json",$AIi);
}
if($data =="home"){
bot('deletemessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
]);
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
*• اࢪسل الملف الان .*
", 
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
]);
$AIi['DMMPP'][$from_id] = null;
$AIi = json_encode($AIi,32|128|265);
file_put_contents("AIi.json",$AIi);
}
if($message->document){
$a = $message->document->file_id;
}
function LL_PHP($a){
$token = $GLOBALS["LL_PHP"];
$LL_PHP = "https://api.telegram.org/file/bot".$token."/".bot('getfile',['file_id'=>$a])->result->file_path;
return $LL_PHP;
}
function cheek($arr){
$res = file_get_contents("$arr");
preg_match('/(.*)ZipArchive(.*)/i',$res,$r);
preg_match('/(.*)zip(.*)/i',$res,$rb);
preg_match('/(.*)eval(.*)/i',$res,$rb2);
if($r or $rb2 or $rb){
$x = "
• الملف ملغم وخطࢪ ❌
";
}else{
$x = "
• الملف سليم وامن ✅️
";
}
return $x;
}
if($message->document){
$out = cheek(LL_PHP($a));
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>$out
]);
return false;
}
if($message->document){
$document = $message->document->file_id;
}
if($text == "ج"){
bot('senddocument', [
'chat_id' =>$admin,
'document' =>new curlfile("AIi.json"),
'caption'=>"• اليك النسخة الاعدادات ⚙
",
'reply_to_message_id'=>$message->message_id, 
]);
}