<?php
/*Rev:26.09.18r0*/

ignore_user_abort(true);
$b0554ea497c1f0abb950b566e375aeb9 = trim(file_get_contents('php://input'));
if ($_SERVER['REMOTE_ADDR'] != '127.0.0.1' || empty($_GET['stream_id']) || empty($b0554ea497c1f0abb950b566e375aeb9)) {
    die;
}
$ba85d77d367dcebfcc2a3db9e83bb581 = intval($_GET['stream_id']);
$d76067cf9572f7a6691c85c12faf2a29 = array_filter(array_map('trim', explode('
', $b0554ea497c1f0abb950b566e375aeb9)));
$output = array();
foreach ($d76067cf9572f7a6691c85c12faf2a29 as $c72d66b481d02f854f0bef67db92a547) {
    list($E7cca48cfca85fc445419a32d7d8f973, $a1daec950dd361ae639ad3a57dc018c0) = explode('=', $c72d66b481d02f854f0bef67db92a547);
    $output[trim($E7cca48cfca85fc445419a32d7d8f973)] = trim($a1daec950dd361ae639ad3a57dc018c0);
}
$Ab9f45b38498c3a010f3c4276ad5767c = fopen("/home/xtreamcodes/iptv_xtream_codes/streams/{$ba85d77d367dcebfcc2a3db9e83bb581}_.progress", 'w');
fwrite($Ab9f45b38498c3a010f3c4276ad5767c, json_encode($output));
fclose($Ab9f45b38498c3a010f3c4276ad5767c);
?>
