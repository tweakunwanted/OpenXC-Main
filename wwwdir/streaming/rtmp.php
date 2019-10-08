<?php
/*Rev:26.09.18r0*/

if ($_SERVER['REMOTE_ADDR'] != '127.0.0.1') {
    die;
}
set_time_limit(0);
require '../init.php';
if (a78Bf8d35765be2408c50712Ce7A43aD::$request['call'] == 'publish') {
    if (!in_array(a78bf8d35765BE2408c50712CE7a43aD::$request['addr'], CD89785224751CCa8017139daF9E891E::a0218A0e77b606feF8d734AC4510ddB1())) {
        http_response_code(404);
        die;
    } else {
        http_response_code(200);
        die;
    }
}
if (a78bf8d35765be2408C50712ce7a43aD::$request['call'] == 'play_done') {
    cd89785224751cca8017139daF9E891E::bA58BB30969E80d158dA7DB06421d0d8(a78bf8D35765bE2408C50712ce7a43AD::$request['clientid']);
    http_response_code(200);
    die;
}
if (empty(A78bF8d35765bE2408C50712CE7a43aD::$request['username']) && empty(A78Bf8d35765Be2408C50712Ce7A43Ad::$request['password']) && in_array(a78BF8D35765Be2408C50712cE7A43AD::$request['addr'], cd89785224751CcA8017139DaF9e891E::Ab69e1103C96Ee33FE21A6453D788925())) {
    http_response_code(200);
    die;
}
if (!isset(a78Bf8d35765be2408c50712ce7a43AD::$request['username']) || !isset(a78bf8D35765BE2408C50712cE7A43aD::$request['password']) || !isset(a78bF8d35765be2408c50712CE7A43aD::$request['tcurl']) || !isset(A78bf8D35765bE2408C50712ce7A43aD::$request['app'])) {
    http_response_code(404);
    die('Missing parameters.');
}
$ba85d77d367dcebfcc2a3db9e83bb581 = intval(A78bF8D35765bE2408c50712CE7A43Ad::$request['name']);
$f4889efa84e1f2e30e5e9780973f68cb = A78Bf8D35765BE2408C50712ce7A43AD::$request['addr'];
$f6806488699d3315dc5dc1e27a401b3e = A78Bf8D35765BE2408c50712ce7A43Ad::$request['username'];
$A6a4b4fbceaf0ab570c374f4faaa990f = a78bf8D35765bE2408C50712CE7a43ad::$request['password'];
$F1350a5569e4b73d2f9cb26483f2a0c1 = 'rtmp';
$a349f0750f0a814bd31ec4b3da51da95 = '';
if ($a8df9f055e91a1e9240230b69af85555 = CD89785224751cCA8017139dAF9E891E::e5550592Aa298dd1D5eE59cDce063A12(null, $f6806488699d3315dc5dc1e27a401b3e, $A6a4b4fbceaf0ab570c374f4faaa990f, true, false, true, array(), false, $f4889efa84e1f2e30e5e9780973f68cb)) {
    if (!is_null($a8df9f055e91a1e9240230b69af85555['exp_date']) && time() >= $a8df9f055e91a1e9240230b69af85555['exp_date']) {
        CD89785224751cCA8017139dAf9e891e::c1591643EAFdaAe33ff6e69e5E49d651($ba85d77d367dcebfcc2a3db9e83bb581, $a8df9f055e91a1e9240230b69af85555['id'], 'USER_EXPIRED', $f4889efa84e1f2e30e5e9780973f68cb);
        http_response_code(404);
        die;
    }
    if ($a8df9f055e91a1e9240230b69af85555['admin_enabled'] == 0) {
        CD89785224751cca8017139Daf9e891e::C1591643EaFdAAe33fF6E69E5E49d651($ba85d77d367dcebfcc2a3db9e83bb581, $a8df9f055e91a1e9240230b69af85555['id'], 'USER_BAN', $f4889efa84e1f2e30e5e9780973f68cb);
        http_response_code(404);
        die;
    }
    if ($a8df9f055e91a1e9240230b69af85555['enabled'] == 0) {
        cD89785224751cCA8017139Daf9e891e::c1591643eafdAaE33ff6e69E5E49D651($ba85d77d367dcebfcc2a3db9e83bb581, $a8df9f055e91a1e9240230b69af85555['id'], 'USER_DISABLED', $f4889efa84e1f2e30e5e9780973f68cb);
        http_response_code(404);
        die;
    }
    $ded15b7e9c47ec5a3dea3c69332153c8 = new eA991Ba3ec74f0Fb90Acc94c2D2De518(GEOIP2_FILENAME);
    $A75f2436a5614184bfe3442ddd050ec5 = $ded15b7e9c47ec5a3dea3c69332153c8->c6A76952B4cEf18f3C98C0E6a9Dd1274($f4889efa84e1f2e30e5e9780973f68cb)['registered_country']['iso_code'];
    $ded15b7e9c47ec5a3dea3c69332153c8->close();
    if (!empty($a8df9f055e91a1e9240230b69af85555['allowed_ips']) && !in_array($f4889efa84e1f2e30e5e9780973f68cb, array_map('gethostbyname', $a8df9f055e91a1e9240230b69af85555['allowed_ips']))) {
        cD89785224751CCA8017139daF9E891e::C1591643eaFdAae33Ff6e69E5E49d651($ba85d77d367dcebfcc2a3db9e83bb581, $a8df9f055e91a1e9240230b69af85555['id'], 'IP_BAN', $f4889efa84e1f2e30e5e9780973f68cb);
        http_response_code(404);
    }
    if (!empty($A75f2436a5614184bfe3442ddd050ec5)) {
        $ab59908f6050f752836a953eb8bb8e52 = !empty($a8df9f055e91a1e9240230b69af85555['forced_country']) ? true : false;
        if ($ab59908f6050f752836a953eb8bb8e52 && $a8df9f055e91a1e9240230b69af85555['forced_country'] != 'ALL' && $A75f2436a5614184bfe3442ddd050ec5 != $a8df9f055e91a1e9240230b69af85555['forced_country']) {
            Cd89785224751cCA8017139DAf9E891E::c1591643eaFdAAe33Ff6E69e5E49D651($ba85d77d367dcebfcc2a3db9e83bb581, $a8df9f055e91a1e9240230b69af85555['id'], 'COUNTRY_DISALLOW', $f4889efa84e1f2e30e5e9780973f68cb);
            http_response_code(404);
            die;
        }
        if (!$ab59908f6050f752836a953eb8bb8e52 && !in_array('ALL', A78bf8D35765Be2408c50712Ce7a43ad::$settings['allow_countries']) && !in_array($A75f2436a5614184bfe3442ddd050ec5, a78bf8D35765BE2408c50712ce7a43AD::$settings['allow_countries'])) {
            cd89785224751cCA8017139DAf9E891e::c1591643eaFDAaE33fF6e69e5E49D651($ba85d77d367dcebfcc2a3db9e83bb581, $a8df9f055e91a1e9240230b69af85555['id'], 'COUNTRY_DISALLOW', $f4889efa84e1f2e30e5e9780973f68cb);
            http_response_code(404);
            die;
        }
    }
    if (isset($a8df9f055e91a1e9240230b69af85555['ip_limit_reached'])) {
        Cd89785224751cCa8017139DAF9E891e::c1591643eafdaaE33FF6E69E5E49d651($ba85d77d367dcebfcc2a3db9e83bb581, $a8df9f055e91a1e9240230b69af85555['id'], 'USER_ALREADY_CONNECTED', $f4889efa84e1f2e30e5e9780973f68cb);
        http_response_code(404);
        die;
    }
    if (Cd89785224751CcA8017139dAf9E891e::C57799e5196664CB99139813250673E2($f4889efa84e1f2e30e5e9780973f68cb)) {
        cd89785224751ccA8017139dAf9E891e::C1591643EaFdaaE33Ff6e69E5E49D651($ba85d77d367dcebfcc2a3db9e83bb581, $a8df9f055e91a1e9240230b69af85555['id'], 'CRACKED', $f4889efa84e1f2e30e5e9780973f68cb);
        http_response_code(404);
        die;
    }
    if (!array_key_exists($F1350a5569e4b73d2f9cb26483f2a0c1, $a8df9f055e91a1e9240230b69af85555['output_formats'])) {
        cd89785224751ccA8017139dAF9E891e::C1591643EAFDAae33ff6e69E5E49D651($ba85d77d367dcebfcc2a3db9e83bb581, $a8df9f055e91a1e9240230b69af85555['id'], 'USER_DISALLOW_EXT', $f4889efa84e1f2e30e5e9780973f68cb);
        http_response_code(404);
        die;
    }
    if (!in_array($ba85d77d367dcebfcc2a3db9e83bb581, $a8df9f055e91a1e9240230b69af85555['channel_ids'])) {
        CD89785224751cCa8017139dAF9e891e::c1591643eAfDaae33fF6E69e5E49D651($ba85d77d367dcebfcc2a3db9e83bb581, $a8df9f055e91a1e9240230b69af85555['id'], 'NOT_IN_BOUQUET', $f4889efa84e1f2e30e5e9780973f68cb);
        http_response_code(404);
        die;
    }
    if ($a8df9f055e91a1e9240230b69af85555['max_connections'] != 0) {
        if (!empty($a8df9f055e91a1e9240230b69af85555['pair_line_info'])) {
            if ($a8df9f055e91a1e9240230b69af85555['pair_line_info']['max_connections'] != 0) {
                if ($a8df9f055e91a1e9240230b69af85555['pair_line_info']['active_cons'] >= $a8df9f055e91a1e9240230b69af85555['pair_line_info']['max_connections']) {
                    cD89785224751cca8017139daF9E891e::A813cbD1E7ea2Bb17742de7bB2392eBf($a8df9f055e91a1e9240230b69af85555['pair_id'], $a8df9f055e91a1e9240230b69af85555['pair_line_info']['max_connections']);
                }
            }
        }
        if ($a8df9f055e91a1e9240230b69af85555['active_cons'] >= $a8df9f055e91a1e9240230b69af85555['max_connections']) {
            cD89785224751ccA8017139daF9e891e::a813cbD1E7EA2bB17742de7Bb2392ebF($a8df9f055e91a1e9240230b69af85555['id'], $a8df9f055e91a1e9240230b69af85555['max_connections']);
        }
    }
    if ($a8df9f055e91a1e9240230b69af85555['isp_violate'] == 1) {
        http_response_code(401);
        Cd89785224751Cca8017139dAf9E891E::C1591643eAFdAaE33Ff6e69E5e49D651($ba85d77d367dcebfcc2a3db9e83bb581, $a8df9f055e91a1e9240230b69af85555['id'], 'ISP_LOCK_FAILED', $f4889efa84e1f2e30e5e9780973f68cb, json_encode(array('old' => $a8df9f055e91a1e9240230b69af85555['isp_desc'], 'new' => $a8df9f055e91a1e9240230b69af85555['con_isp_name'])));
        die;
    }
    if ($a8df9f055e91a1e9240230b69af85555['isp_is_server'] == 1) {
        Cd89785224751CCA8017139dAf9e891E::C1591643eAfDAAe33Ff6E69e5E49D651($ba85d77d367dcebfcc2a3db9e83bb581, $a8df9f055e91a1e9240230b69af85555['id'], 'CON_SVP', $f4889efa84e1f2e30e5e9780973f68cb, json_encode(array('user_agent' => $D4f195af96a237479546fa1dccf6173a, 'isp' => $a8df9f055e91a1e9240230b69af85555['con_isp_name'], 'type' => $a8df9f055e91a1e9240230b69af85555['con_isp_type'])), true);
        http_response_code(401);
        die;
    }
    if ($ffb1e0970b62b01f46c2e57f2cded6c2 = Cd89785224751ccA8017139dAF9E891E::F3c105BccEd491229D4Aed6937F96A8C($ba85d77d367dcebfcc2a3db9e83bb581, $F1350a5569e4b73d2f9cb26483f2a0c1, $a8df9f055e91a1e9240230b69af85555, $f4889efa84e1f2e30e5e9780973f68cb, $A75f2436a5614184bfe3442ddd050ec5, $a349f0750f0a814bd31ec4b3da51da95, $a8df9f055e91a1e9240230b69af85555['con_isp_name'], 'live')) {
        $Bb37b848bec813a5c13ea0b018962c40 = STREAMS_PATH . $ba85d77d367dcebfcc2a3db9e83bb581 . '_.m3u8';
        if (!cd89785224751cCA8017139dAf9E891E::ps_running($ffb1e0970b62b01f46c2e57f2cded6c2['pid'], FFMPEG_PATH) && $ffb1e0970b62b01f46c2e57f2cded6c2['on_demand'] == 1) {
            e3cF480C172e8B47fE10857c2A5AeB48::e79092731573697c16A932C339D0a101($ba85d77d367dcebfcc2a3db9e83bb581);
            sleep(5);
        }
        if ($a8df9f055e91a1e9240230b69af85555['max_connections'] == 0 || $a8df9f055e91a1e9240230b69af85555['active_cons'] < $a8df9f055e91a1e9240230b69af85555['max_connections']) {
            $f566700a43ee8e1f0412fe10fbdf03df->query('INSERT INTO `user_activity_now` (`user_id`,`stream_id`,`server_id`,`user_agent`,`user_ip`,`container`,`pid`,`date_start`,`geoip_country_code`,`isp`,`external_device`) VALUES(\'%d\',\'%d\',\'%d\',\'%s\',\'%s\',\'%s\',\'%d\',\'%d\',\'%s\',\'%s\',\'%s\')', $a8df9f055e91a1e9240230b69af85555['id'], $ba85d77d367dcebfcc2a3db9e83bb581, SERVER_ID, '', $f4889efa84e1f2e30e5e9780973f68cb, $F1350a5569e4b73d2f9cb26483f2a0c1, A78Bf8D35765bE2408C50712Ce7A43AD::$request['clientid'], time(), $A75f2436a5614184bfe3442ddd050ec5, $a8df9f055e91a1e9240230b69af85555['con_isp_name'], $a349f0750f0a814bd31ec4b3da51da95);
            $E821605d1d9382d422040b86d29632d9 = $f566700a43ee8e1f0412fe10fbdf03df->BeB8a0BBa80A0133a23FE13d34dC94d6();
            $f566700a43ee8e1f0412fe10fbdf03df->CA531F7BdC43b966DEFB4aBA3c8Faf22();
            http_response_code(200);
            die;
        }
    }
} else {
    cd89785224751CcA8017139daf9e891e::c1591643EafDAAE33FF6E69E5e49d651($ba85d77d367dcebfcc2a3db9e83bb581, 0, 'AUTH_FAILED', $f4889efa84e1f2e30e5e9780973f68cb);
    http_response_code(404);
    die;
}
http_response_code(404);
?>
