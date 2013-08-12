<?php

/*
*
* @author Tommy "ThePanthera" Carvalho Coolen
*
* Please keep in mind that you need to replace the <your-stream> with your stream, aka your goal.
* Saw alot of people having trouble, please keep in mind aswell that file_get_contents might be disabled due to security issues.
* i believe there is a safer way, this is just a quick snippet.
*
*/

$json_file = file_get_contents("http://api.justin.tv/api/stream/list.json?channel=<your-stream>", 0, null, null);
$json_array = json_decode($json_file, true);

if ($json_array[0]['name'] == 'live_user_<your-stream>') {
echo 'ye online';
}
else {
echo 'naw fuck off!';
}