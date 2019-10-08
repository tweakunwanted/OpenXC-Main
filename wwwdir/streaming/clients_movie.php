<?php
/*Rev:26.09.18r0*/

register_shutdown_function('shutdown');
set_time_limit(0);
require '../init.php';
$f0ac6ad2b40669833242a10c23cad2e0 = true;
if (!isset(a78BF8d35765bE2408c50712CE7a43AD::$request['username']) || !isset(A78bf8D35765be2408C50712cE7a43Ad::$request['password']) || !isset(a78BF8d35765Be2408C50712cE7A43AD::$request['stream'])) {
    die('Missing parameters.');
}
$ded15b7e9c47ec5a3dea3c69332153c8 = new EA991BA3Ec74f0fb90acC94C2D2dE518(GEOIP2_FILENAME);
$E821605d1d9382d422040b86d29632d9 = 0;
$E2e6656d8b1675f70c487f89e4f27a3b = null;
$Cec7b3525ded5578bb4eaefe5020eb98 = null;
$f4889efa84e1f2e30e5e9780973f68cb = CD89785224751CcA8017139Daf9e891e::E1f75a50f74a8f4E2129Ba474F45D670();
$D4f195af96a237479546fa1dccf6173a = empty($_SERVER['HTTP_USER_AGENT']) ? '' : htmlentities(trim($_SERVER['HTTP_USER_AGENT']));
$f6806488699d3315dc5dc1e27a401b3e = a78Bf8d35765be2408C50712CE7A43ad::$request['username'];
$A6a4b4fbceaf0ab570c374f4faaa990f = a78BF8D35765be2408c50712Ce7A43Ad::$request['password'];
$c3a18c26bfa971a25d2e6ada870ff735 = pathinfo(A78bF8d35765Be2408c50712CE7a43aD::$request['stream']);
$ba85d77d367dcebfcc2a3db9e83bb581 = intval($c3a18c26bfa971a25d2e6ada870ff735['filename']);
$F1350a5569e4b73d2f9cb26483f2a0c1 = preg_replace('/[^A-Za-z0-9 ]/', '', trim($c3a18c26bfa971a25d2e6ada870ff735['extension']));
$a28758c1ab974badfc544e11aaf19a57 = empty(a78BF8d35765Be2408C50712cE7a43AD::$request['type']) ? null : a78Bf8D35765be2408c50712ce7a43aD::$request['type'];
if (a78BF8D35765be2408c50712Ce7A43Ad::$settings['use_buffer'] == 0) {
    header('X-Accel-Buffering: no');
}
header('Access-Control-Allow-Origin: *');
$e8d12aa38d4899d2d4d12fbd8d047fb0 = '';
$Cd2953f76721ad9589ab3d88c42b62b9 = empty(A78BF8D35765be2408C50712CE7a43ad::$request['play_token']) ? null : a78bF8d35765Be2408c50712cE7a43AD::$request['play_token'];
if ($a8df9f055e91a1e9240230b69af85555 = cd89785224751CcA8017139daf9E891e::e5550592Aa298dD1d5EE59cdce063a12(null, $f6806488699d3315dc5dc1e27a401b3e, $A6a4b4fbceaf0ab570c374f4faaa990f, true, false, true, array(), false, $f4889efa84e1f2e30e5e9780973f68cb, $D4f195af96a237479546fa1dccf6173a, array(), $Cd2953f76721ad9589ab3d88c42b62b9, $ba85d77d367dcebfcc2a3db9e83bb581)) {
    if (isset($a8df9f055e91a1e9240230b69af85555['mag_invalid_token'])) {
        Cd89785224751CCA8017139daf9E891E::c1591643EaFDAAe33Ff6E69E5E49D651($ba85d77d367dcebfcc2a3db9e83bb581, $a8df9f055e91a1e9240230b69af85555['id'], 'MAG_TOKEN_INVALID', $f4889efa84e1f2e30e5e9780973f68cb);
        die;
    }
    if ($a8df9f055e91a1e9240230b69af85555['bypass_ua'] == 0) {
        cd89785224751CCa8017139Daf9E891e::DFbDd0F64a97ac684cE49c689d9636Ac($D4f195af96a237479546fa1dccf6173a);
    }
    if ($a8df9f055e91a1e9240230b69af85555['is_stalker'] == 1) {
        die;
    }
    if (empty($D4f195af96a237479546fa1dccf6173a) && a78Bf8d35765be2408c50712ce7A43Ad::$settings['disallow_empty_user_agents'] == 1) {
        cd89785224751cCA8017139dAF9E891E::c1591643eaFDaaE33fF6E69E5e49D651($ba85d77d367dcebfcc2a3db9e83bb581, $a8df9f055e91a1e9240230b69af85555['id'], 'EMPTY_UA', $f4889efa84e1f2e30e5e9780973f68cb);
        die;
    }
    if (!is_null($a8df9f055e91a1e9240230b69af85555['exp_date']) && time() >= $a8df9f055e91a1e9240230b69af85555['exp_date']) {
        CD89785224751cCA8017139DAF9e891e::C1591643EaFDAae33FF6e69E5e49D651($ba85d77d367dcebfcc2a3db9e83bb581, $a8df9f055e91a1e9240230b69af85555['id'], 'USER_EXPIRED', $f4889efa84e1f2e30e5e9780973f68cb);
        cD89785224751cCa8017139DaF9E891e::d0B968cD6CfDF340Ca85B1C3d9a40649($a8df9f055e91a1e9240230b69af85555['is_restreamer'], 'show_expired_video', 'expired_video_path');
        die;
    }
    if ($a8df9f055e91a1e9240230b69af85555['admin_enabled'] == 0) {
        cd89785224751cCA8017139DAF9e891e::C1591643EaFDAaE33fF6E69e5e49D651($ba85d77d367dcebfcc2a3db9e83bb581, $a8df9f055e91a1e9240230b69af85555['id'], 'USER_BAN', $f4889efa84e1f2e30e5e9780973f68cb);
        CD89785224751ccA8017139DAF9e891E::D0b968cd6cFDf340cA85B1c3d9A40649($a8df9f055e91a1e9240230b69af85555['is_restreamer'], 'show_banned_video', 'banned_video_path');
        die;
    }
    if ($a8df9f055e91a1e9240230b69af85555['enabled'] == 0) {
        cd89785224751Cca8017139daf9e891e::c1591643eAFDaaE33FF6E69E5e49d651($ba85d77d367dcebfcc2a3db9e83bb581, $a8df9f055e91a1e9240230b69af85555['id'], 'USER_DISABLED', $f4889efa84e1f2e30e5e9780973f68cb);
        cD89785224751CCA8017139DAf9E891e::D0B968cD6Cfdf340CA85B1c3D9a40649($a8df9f055e91a1e9240230b69af85555['is_restreamer'], 'show_banned_video', 'banned_video_path');
        die;
    }
    if (empty($D4f195af96a237479546fa1dccf6173a) && A78bf8d35765be2408C50712ce7a43Ad::$settings['disallow_empty_user_agents'] == 1) {
        Cd89785224751CCA8017139DAF9E891e::c1591643EafDaAe33Ff6E69E5e49d651($ba85d77d367dcebfcc2a3db9e83bb581, $a8df9f055e91a1e9240230b69af85555['id'], 'EMPTY_UA', $f4889efa84e1f2e30e5e9780973f68cb);
        die;
    }
    $A75f2436a5614184bfe3442ddd050ec5 = $ded15b7e9c47ec5a3dea3c69332153c8->C6A76952B4ceF18f3C98C0E6a9dd1274($f4889efa84e1f2e30e5e9780973f68cb)['registered_country']['iso_code'];
    if (!empty($a8df9f055e91a1e9240230b69af85555['allowed_ips']) && !in_array($f4889efa84e1f2e30e5e9780973f68cb, array_map('gethostbyname', $a8df9f055e91a1e9240230b69af85555['allowed_ips']))) {
        cd89785224751CcA8017139daF9E891e::c1591643eAfDAaE33ff6E69E5E49D651($ba85d77d367dcebfcc2a3db9e83bb581, $a8df9f055e91a1e9240230b69af85555['id'], 'IP_BAN', $f4889efa84e1f2e30e5e9780973f68cb);
        die;
    }
    if (!empty($A75f2436a5614184bfe3442ddd050ec5)) {
        $ab59908f6050f752836a953eb8bb8e52 = !empty($a8df9f055e91a1e9240230b69af85555['forced_country']) ? true : false;
        if ($ab59908f6050f752836a953eb8bb8e52 && $a8df9f055e91a1e9240230b69af85555['forced_country'] != 'ALL' && $A75f2436a5614184bfe3442ddd050ec5 != $a8df9f055e91a1e9240230b69af85555['forced_country']) {
            Cd89785224751cca8017139daF9E891E::C1591643eAfDaae33fF6e69E5e49D651($ba85d77d367dcebfcc2a3db9e83bb581, $a8df9f055e91a1e9240230b69af85555['id'], 'COUNTRY_DISALLOW', $f4889efa84e1f2e30e5e9780973f68cb);
            die;
        }
        if (!$ab59908f6050f752836a953eb8bb8e52 && !in_array('ALL', A78BF8D35765Be2408c50712ce7A43aD::$settings['allow_countries']) && !in_array($A75f2436a5614184bfe3442ddd050ec5, a78bF8d35765Be2408c50712ce7A43AD::$settings['allow_countries'])) {
            Cd89785224751CcA8017139Daf9e891e::C1591643EAfdAaE33Ff6E69E5E49D651($ba85d77d367dcebfcc2a3db9e83bb581, $a8df9f055e91a1e9240230b69af85555['id'], 'COUNTRY_DISALLOW', $f4889efa84e1f2e30e5e9780973f68cb);
            die;
        }
    }
    if (!empty($a8df9f055e91a1e9240230b69af85555['allowed_ua']) && !in_array($D4f195af96a237479546fa1dccf6173a, $a8df9f055e91a1e9240230b69af85555['allowed_ua'])) {
        cD89785224751cca8017139dAf9E891e::C1591643EaFdaAE33fF6E69e5e49d651($ba85d77d367dcebfcc2a3db9e83bb581, $a8df9f055e91a1e9240230b69af85555['id'], 'USER_AGENT_BAN', $f4889efa84e1f2e30e5e9780973f68cb);
        die;
    }
    if (isset($a8df9f055e91a1e9240230b69af85555['ip_limit_reached'])) {
        cD89785224751CcA8017139dAF9e891e::C1591643EAfDAAE33fF6E69e5E49D651($ba85d77d367dcebfcc2a3db9e83bb581, $a8df9f055e91a1e9240230b69af85555['id'], 'USER_ALREADY_CONNECTED', $f4889efa84e1f2e30e5e9780973f68cb);
        die;
    }
    if (cD89785224751ccA8017139DAf9E891e::C57799E5196664CB99139813250673E2($f4889efa84e1f2e30e5e9780973f68cb)) {
        Cd89785224751CCA8017139daF9E891e::c1591643eAFdaAE33fF6e69e5e49d651($ba85d77d367dcebfcc2a3db9e83bb581, $a8df9f055e91a1e9240230b69af85555['id'], 'CRACKED', $f4889efa84e1f2e30e5e9780973f68cb);
        die;
    }
    $f0ac6ad2b40669833242a10c23cad2e0 = false;
    if (!cd89785224751Cca8017139daf9E891E::ec7e013CF424bdF03238c1D46aB2a9AE($ba85d77d367dcebfcc2a3db9e83bb581, $a28758c1ab974badfc544e11aaf19a57 == 'movie' ? $a8df9f055e91a1e9240230b69af85555['channel_ids'] : $a8df9f055e91a1e9240230b69af85555['series_ids'], $a28758c1ab974badfc544e11aaf19a57)) {
        http_response_code(406);
        Cd89785224751ccA8017139DaF9E891e::c1591643EafdAAE33FF6E69e5E49d651($ba85d77d367dcebfcc2a3db9e83bb581, $a8df9f055e91a1e9240230b69af85555['id'], 'NOT_IN_BOUQUET', $f4889efa84e1f2e30e5e9780973f68cb);
        die;
    }
    if ($a8df9f055e91a1e9240230b69af85555['max_connections'] != 0) {
        if (!empty($a8df9f055e91a1e9240230b69af85555['pair_line_info'])) {
            if ($a8df9f055e91a1e9240230b69af85555['pair_line_info']['max_connections'] != 0) {
                if ($a8df9f055e91a1e9240230b69af85555['pair_line_info']['active_cons'] >= $a8df9f055e91a1e9240230b69af85555['pair_line_info']['max_connections']) {
                    Cd89785224751CCA8017139DAF9e891E::a813CBd1e7Ea2BB17742De7Bb2392eBf($a8df9f055e91a1e9240230b69af85555['pair_id'], $a8df9f055e91a1e9240230b69af85555['pair_line_info']['max_connections']);
                }
            }
        }
        if ($a8df9f055e91a1e9240230b69af85555['active_cons'] >= $a8df9f055e91a1e9240230b69af85555['max_connections']) {
            Cd89785224751CcA8017139dAF9e891E::a813CBd1e7ea2bB17742de7Bb2392Ebf($a8df9f055e91a1e9240230b69af85555['id'], $a8df9f055e91a1e9240230b69af85555['max_connections']);
        }
    }
    if ($a8df9f055e91a1e9240230b69af85555['isp_violate'] == 1) {
        http_response_code(401);
        CD89785224751CCa8017139DAF9E891E::C1591643EaFDAAe33Ff6e69e5E49d651($ba85d77d367dcebfcc2a3db9e83bb581, $a8df9f055e91a1e9240230b69af85555['id'], 'ISP_LOCK_FAILED', $f4889efa84e1f2e30e5e9780973f68cb, json_encode(array('old' => $a8df9f055e91a1e9240230b69af85555['isp_desc'], 'new' => $a8df9f055e91a1e9240230b69af85555['con_isp_name'])));
        die;
    }
    if ($a8df9f055e91a1e9240230b69af85555['isp_is_server'] == 1) {
        http_response_code(401);
        cd89785224751CCA8017139DAF9E891e::C1591643eAfDAae33fF6e69E5e49D651($ba85d77d367dcebfcc2a3db9e83bb581, $a8df9f055e91a1e9240230b69af85555['id'], 'CON_SVP', $f4889efa84e1f2e30e5e9780973f68cb, json_encode(array('user_agent' => $D4f195af96a237479546fa1dccf6173a, 'isp' => $a8df9f055e91a1e9240230b69af85555['con_isp_name'], 'type' => $a8df9f055e91a1e9240230b69af85555['con_isp_type'])), true);
        die;
    }
    if ($ffb1e0970b62b01f46c2e57f2cded6c2 = cd89785224751cCa8017139daF9e891E::f3C105bcCed491229d4AEd6937f96A8c($ba85d77d367dcebfcc2a3db9e83bb581, $F1350a5569e4b73d2f9cb26483f2a0c1, $a8df9f055e91a1e9240230b69af85555, $f4889efa84e1f2e30e5e9780973f68cb, $A75f2436a5614184bfe3442ddd050ec5, '', $a8df9f055e91a1e9240230b69af85555['con_isp_name'], 'movie')) {
        $a7e968a4f6d75092e74cdeb1b406041a = time();
        $E2e6656d8b1675f70c487f89e4f27a3b = 'VOD';
        $f566700a43ee8e1f0412fe10fbdf03df->query('INSERT INTO `user_activity_now` (`user_id`,`stream_id`,`server_id`,`user_agent`,`user_ip`,`container`,`pid`,`date_start`,`geoip_country_code`,`isp`) VALUES(\'%d\',\'%d\',\'%d\',\'%s\',\'%s\',\'%s\',\'%d\',\'%d\',\'%s\',\'%s\')', $a8df9f055e91a1e9240230b69af85555['id'], $ba85d77d367dcebfcc2a3db9e83bb581, SERVER_ID, $D4f195af96a237479546fa1dccf6173a, $f4889efa84e1f2e30e5e9780973f68cb, $E2e6656d8b1675f70c487f89e4f27a3b, getmypid(), $a7e968a4f6d75092e74cdeb1b406041a, $A75f2436a5614184bfe3442ddd050ec5, $a8df9f055e91a1e9240230b69af85555['con_isp_name']);
        $E821605d1d9382d422040b86d29632d9 = $f566700a43ee8e1f0412fe10fbdf03df->BeB8A0bBA80a0133A23fe13d34dC94D6();
        $Cec7b3525ded5578bb4eaefe5020eb98 = TMP_DIR . $E821605d1d9382d422040b86d29632d9 . '.con';
        $f566700a43ee8e1f0412fe10fbdf03df->cA531F7bDc43b966DEFB4aBA3C8faf22();
        switch ($F1350a5569e4b73d2f9cb26483f2a0c1) {
            case 'mp4':
                header('Content-type: video/mp4');
                break;
            case 'mkv':
                header('Content-type: video/x-matroska');
                break;
            case 'avi':
                header('Content-type: video/x-msvideo');
                break;
            case '3gp':
                header('Content-type: video/3gpp');
                break;
            case 'flv':
                header('Content-type: video/x-flv');
                break;
            case 'wmv':
                header('Content-type: video/x-ms-wmv');
                break;
            case 'mov':
                header('Content-type: video/quicktime');
                break;
            case 'ts':
                header('Content-type: video/mp2t');
                break;
            default:
                header('Content-Type: application/octet-stream');
        }
        $b2ecba26bb0e977abdb88e118b553d51 = !empty($ffb1e0970b62b01f46c2e57f2cded6c2['bitrate']) ? $ffb1e0970b62b01f46c2e57f2cded6c2['bitrate'] * 125 : 0;
        $b2ecba26bb0e977abdb88e118b553d51 += $b2ecba26bb0e977abdb88e118b553d51 * A78bF8D35765BE2408c50712CE7A43AD::$settings['vod_bitrate_plus'] * 0.01;
        $E6dd23f358d554b9a74e3ae676bc8c9b = MOVIES_PATH . $ba85d77d367dcebfcc2a3db9e83bb581 . '.' . $F1350a5569e4b73d2f9cb26483f2a0c1;
        if (file_exists($E6dd23f358d554b9a74e3ae676bc8c9b)) {
            $Ab9f45b38498c3a010f3c4276ad5767c = @fopen($E6dd23f358d554b9a74e3ae676bc8c9b, 'rb');
            $Ff876e96994aa5b09ce92e771efe2038 = filesize($E6dd23f358d554b9a74e3ae676bc8c9b);
            $b362cb2e1492b66663cf3718328409ad = $Ff876e96994aa5b09ce92e771efe2038;
            $start = 0;
            $ebe823668f9748302d3bd87782a71948 = $Ff876e96994aa5b09ce92e771efe2038 - 1;
            header("Accept-Ranges: 0-{$b362cb2e1492b66663cf3718328409ad}");
            if (isset($_SERVER['HTTP_RANGE'])) {
                $dccf2f0f292208ba833261a4da87860d = $start;
                $A34771e85be87aded632236239e94d98 = $ebe823668f9748302d3bd87782a71948;
                list(, $cabafd9509f1a525c1d85143a5372ed8) = explode('=', $_SERVER['HTTP_RANGE'], 2);
                if (strpos($cabafd9509f1a525c1d85143a5372ed8, ',') !== false) {
                    header('HTTP/1.1 416 Requested Range Not Satisfiable');
                    header("Content-Range: bytes {$start}-{$ebe823668f9748302d3bd87782a71948}/{$Ff876e96994aa5b09ce92e771efe2038}");
                    die;
                }
                if ($cabafd9509f1a525c1d85143a5372ed8 == '-') {
                    $dccf2f0f292208ba833261a4da87860d = $Ff876e96994aa5b09ce92e771efe2038 - substr($cabafd9509f1a525c1d85143a5372ed8, 1);
                } else {
                    $cabafd9509f1a525c1d85143a5372ed8 = explode('-', $cabafd9509f1a525c1d85143a5372ed8);
                    $dccf2f0f292208ba833261a4da87860d = $cabafd9509f1a525c1d85143a5372ed8[0];
                    $A34771e85be87aded632236239e94d98 = isset($cabafd9509f1a525c1d85143a5372ed8[1]) && is_numeric($cabafd9509f1a525c1d85143a5372ed8[1]) ? $cabafd9509f1a525c1d85143a5372ed8[1] : $Ff876e96994aa5b09ce92e771efe2038;
                }
                $A34771e85be87aded632236239e94d98 = $A34771e85be87aded632236239e94d98 > $ebe823668f9748302d3bd87782a71948 ? $ebe823668f9748302d3bd87782a71948 : $A34771e85be87aded632236239e94d98;
                if ($dccf2f0f292208ba833261a4da87860d > $A34771e85be87aded632236239e94d98 || $dccf2f0f292208ba833261a4da87860d > $Ff876e96994aa5b09ce92e771efe2038 - 1 || $A34771e85be87aded632236239e94d98 >= $Ff876e96994aa5b09ce92e771efe2038) {
                    header('HTTP/1.1 416 Requested Range Not Satisfiable');
                    header("Content-Range: bytes {$start}-{$ebe823668f9748302d3bd87782a71948}/{$Ff876e96994aa5b09ce92e771efe2038}");
                    die;
                }
                $start = $dccf2f0f292208ba833261a4da87860d;
                $ebe823668f9748302d3bd87782a71948 = $A34771e85be87aded632236239e94d98;
                $b362cb2e1492b66663cf3718328409ad = $ebe823668f9748302d3bd87782a71948 - $start + 1;
                fseek($Ab9f45b38498c3a010f3c4276ad5767c, $start);
                header('HTTP/1.1 206 Partial Content');
            }
            header("Content-Range: bytes {$start}-{$ebe823668f9748302d3bd87782a71948}/{$Ff876e96994aa5b09ce92e771efe2038}");
            header('Content-Length: ' . $b362cb2e1492b66663cf3718328409ad);
            $c41986ad785eace90882e61c64cabb41 = time();
            $b1125d7ae8a179e8c8a4c80974755bd7 = 0;
            $C7558f823ac28009bfd4730a82f1f01b = a78bf8d35765Be2408c50712ce7A43aD::$settings['read_buffer_size'];
            $C48e0083a9caa391609a3c645a2ec889 = 0;
            $b0cd8de619914d3df89e9fc24acad4e6 = 0;
            if (a78bF8d35765bE2408C50712cE7A43aD::$settings['vod_limit_at'] > 0) {
                $F6295a8bab3aa6bb5b9c4a70c99ec761 = intval($b362cb2e1492b66663cf3718328409ad * A78BF8D35765bE2408C50712CE7a43Ad::$settings['vod_limit_at'] / 100);
            } else {
                $F6295a8bab3aa6bb5b9c4a70c99ec761 = $b362cb2e1492b66663cf3718328409ad;
            }
            $A8e591a80910b24673b1a94b8219ab96 = false;
            //D7b3f9d60519ce61242d1941a0c77b14:
            while (!feof($Ab9f45b38498c3a010f3c4276ad5767c) && ($f11bd4ac0a2baf9850141d4517561cff = ftell($Ab9f45b38498c3a010f3c4276ad5767c)) <= $ebe823668f9748302d3bd87782a71948) {
                $B83f861d078c18d9643641c765cefee9 = stream_get_line($Ab9f45b38498c3a010f3c4276ad5767c, $C7558f823ac28009bfd4730a82f1f01b);
                ++$C48e0083a9caa391609a3c645a2ec889;
                if (!$A8e591a80910b24673b1a94b8219ab96 && $b0cd8de619914d3df89e9fc24acad4e6 * $C7558f823ac28009bfd4730a82f1f01b >= $F6295a8bab3aa6bb5b9c4a70c99ec761) {
                    $A8e591a80910b24673b1a94b8219ab96 = true;
                } else {
                    ++$b0cd8de619914d3df89e9fc24acad4e6;
                }
                echo $B83f861d078c18d9643641c765cefee9;
                $b1125d7ae8a179e8c8a4c80974755bd7 += strlen($B83f861d078c18d9643641c765cefee9);
                if (time() - $c41986ad785eace90882e61c64cabb41 >= 30) {
                    file_put_contents($Cec7b3525ded5578bb4eaefe5020eb98, intval($b1125d7ae8a179e8c8a4c80974755bd7 / 1024 / 30));
                    $c41986ad785eace90882e61c64cabb41 = time();
                    $b1125d7ae8a179e8c8a4c80974755bd7 = 0;
                }
                if ($b2ecba26bb0e977abdb88e118b553d51 > 0 && $A8e591a80910b24673b1a94b8219ab96 && $C48e0083a9caa391609a3c645a2ec889 >= ceil($b2ecba26bb0e977abdb88e118b553d51 / $C7558f823ac28009bfd4730a82f1f01b)) {
                    sleep(1);
                    $C48e0083a9caa391609a3c645a2ec889 = 0;
                }
            }
            //f51f3eda71805424934a7449ccdb08d8:
            fclose($Ab9f45b38498c3a010f3c4276ad5767c);
            die;
        }
    } else {
        Cd89785224751cca8017139daF9e891e::D0B968Cd6cfDf340cA85B1c3d9A40649($a8df9f055e91a1e9240230b69af85555['is_restreamer'], 'show_not_on_air_video', 'not_on_air_video_path');
    }
} else {
    cD89785224751CCA8017139daf9e891E::C1591643eaFDaae33FF6e69E5E49D651($ba85d77d367dcebfcc2a3db9e83bb581, 0, 'AUTH_FAILED', $f4889efa84e1f2e30e5e9780973f68cb);
}
function shutdown()
{
    global $f566700a43ee8e1f0412fe10fbdf03df, $E821605d1d9382d422040b86d29632d9, $Cec7b3525ded5578bb4eaefe5020eb98, $a8df9f055e91a1e9240230b69af85555, $E2e6656d8b1675f70c487f89e4f27a3b, $f0ac6ad2b40669833242a10c23cad2e0, $ba85d77d367dcebfcc2a3db9e83bb581, $D4f195af96a237479546fa1dccf6173a, $f4889efa84e1f2e30e5e9780973f68cb, $A75f2436a5614184bfe3442ddd050ec5, $a349f0750f0a814bd31ec4b3da51da95, $a7e968a4f6d75092e74cdeb1b406041a;
    if ($f0ac6ad2b40669833242a10c23cad2e0) {
        D9F93B7c177E377d0BBfE315EAEae505();
        http_response_code(401);
    }
    $f566700a43ee8e1f0412fe10fbdf03df->Ca531F7bdC43b966dEfb4aBA3C8FAf22();
    if ($E821605d1d9382d422040b86d29632d9 != 0) {
        Cd89785224751CCa8017139daf9e891E::e990445b40642e0EfD070e994375f6AF($E821605d1d9382d422040b86d29632d9);
        Cd89785224751ccA8017139daF9e891E::A49C2fb1eBA096c52a352A85C8d09d8d(SERVER_ID, $a8df9f055e91a1e9240230b69af85555['id'], $ba85d77d367dcebfcc2a3db9e83bb581, $a7e968a4f6d75092e74cdeb1b406041a, $D4f195af96a237479546fa1dccf6173a, $f4889efa84e1f2e30e5e9780973f68cb, $E2e6656d8b1675f70c487f89e4f27a3b, $A75f2436a5614184bfe3442ddd050ec5, $a8df9f055e91a1e9240230b69af85555['con_isp_name'], $a349f0750f0a814bd31ec4b3da51da95);
        if (file_exists($Cec7b3525ded5578bb4eaefe5020eb98)) {
            unlink($Cec7b3525ded5578bb4eaefe5020eb98);
        }
    }
    fastcgi_finish_request();
    if ($E821605d1d9382d422040b86d29632d9 != 0 || !file_exists(IPTV_PANEL_DIR . 'kill_pids')) {
        posix_kill(getmypid(), 9);
    }
}
?>
