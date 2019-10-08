<?php
/*Rev:26.09.18r0*/

set_time_limit(0);
require 'init.php';
$f4889efa84e1f2e30e5e9780973f68cb = $_SERVER['REMOTE_ADDR'];
if (!in_array($f4889efa84e1f2e30e5e9780973f68cb, Cd89785224751cca8017139DaF9e891e::Ab69E1103C96eE33FE21a6453d788925()) && !in_array($f4889efa84e1f2e30e5e9780973f68cb, a78bf8d35765BE2408c50712ce7a43ad::$settings['api_ips'])) {
    die(json_encode(array('result' => false, 'IP FORBIDDEN')));
}
if (!empty(A78Bf8D35765be2408c50712cE7A43Ad::$settings['api_pass']) && A78BF8D35765be2408c50712cE7a43ad::$request['api_pass'] != A78Bf8D35765bE2408C50712cE7a43ad::$settings['api_pass']) {
    die(json_encode(array('result' => false, 'KEY WRONG')));
}
$b4af8b82d0e004d138b6f62947d7a1fa = !empty(A78bF8D35765be2408c50712CE7a43ad::$request['action']) ? A78Bf8d35765bE2408C50712cE7A43ad::$request['action'] : '';
$E6ff6085a41cbca3609766e3f9a666ee = !empty(A78Bf8D35765Be2408C50712Ce7A43ad::$request['sub']) ? A78BF8D35765bE2408C50712CE7A43aD::$request['sub'] : '';
switch ($b4af8b82d0e004d138b6f62947d7a1fa) {
    case 'server':
        switch ($E6ff6085a41cbca3609766e3f9a666ee) {
            case 'list':
                $output = array();
                foreach (A78Bf8D35765be2408c50712Ce7A43ad::$StreamingServers as $e951d0b9610ba3624d06def5a541cb17 => $C3af9fee694e49882d2d0c32f538efc8) {
                    $output[] = array('id' => $e951d0b9610ba3624d06def5a541cb17, 'server_name' => $C3af9fee694e49882d2d0c32f538efc8['server_name'], 'online' => $C3af9fee694e49882d2d0c32f538efc8['server_online'], 'info' => json_decode($C3af9fee694e49882d2d0c32f538efc8['server_hardware'], true));
                    //c657bfc83013e3803533d63a251e5086:
                }
                echo json_encode($output);
                break;
        }
        break;
    case 'vod':
        $B5dac75572776cad02b4f375a2781a87 = array_map('intval', A78Bf8D35765Be2408c50712Ce7a43ad::$request['stream_ids']);
        switch ($E6ff6085a41cbca3609766e3f9a666ee) {
            case 'start':
            case 'stop':
                $f9b9c9baaec5b82b03b15c6eb07ec8f9 = empty(a78bF8D35765Be2408C50712Ce7A43AD::$request['servers']) ? array_keys(a78bF8D35765be2408c50712Ce7A43AD::$StreamingServers) : array_map('intval', a78Bf8D35765bE2408C50712CE7a43AD::$request['servers']);
                foreach ($f9b9c9baaec5b82b03b15c6eb07ec8f9 as $e951d0b9610ba3624d06def5a541cb17) {
                    $B13e3f304ca1f14e137f209a5138ea10[$e951d0b9610ba3624d06def5a541cb17] = array('url' => A78BF8D35765be2408C50712ce7A43Ad::$StreamingServers[$e951d0b9610ba3624d06def5a541cb17]['api_url_ip'] . '&action=vod', 'postdata' => array('function' => $E6ff6085a41cbca3609766e3f9a666ee, 'stream_ids' => $B5dac75572776cad02b4f375a2781a87));
                    //df9a384a8b1f6f6f6ae97662b1f5d706:
                }
                A78Bf8D35765be2408c50712Ce7a43AD::D0124AFE61D44214B63588b31303A8c4($B13e3f304ca1f14e137f209a5138ea10);
                echo json_encode(array('result' => true));
                die;
                break;
        }
        break;
    case 'stream':
        switch ($E6ff6085a41cbca3609766e3f9a666ee) {
            case 'start':
            case 'stop':
                $B5dac75572776cad02b4f375a2781a87 = array_map('intval', a78bf8d35765BE2408c50712Ce7a43aD::$request['stream_ids']);
                $f9b9c9baaec5b82b03b15c6eb07ec8f9 = empty(A78Bf8d35765bE2408C50712cE7a43AD::$request['servers']) ? array_keys(a78bF8d35765be2408C50712cE7A43ad::$StreamingServers) : array_map('intval', A78bF8D35765bE2408C50712Ce7A43AD::$request['servers']);
                foreach ($f9b9c9baaec5b82b03b15c6eb07ec8f9 as $e951d0b9610ba3624d06def5a541cb17) {
                    $B13e3f304ca1f14e137f209a5138ea10[$e951d0b9610ba3624d06def5a541cb17] = array('url' => a78bf8d35765be2408c50712CE7a43ad::$StreamingServers[$e951d0b9610ba3624d06def5a541cb17]['api_url_ip'] . '&action=stream', 'postdata' => array('function' => $E6ff6085a41cbca3609766e3f9a666ee, 'stream_ids' => $B5dac75572776cad02b4f375a2781a87));
                    //a7f49c96cd32b78607c69a117274e36f:
                }
                A78Bf8d35765be2408C50712ce7a43aD::d0124afE61D44214B63588b31303A8C4($B13e3f304ca1f14e137f209a5138ea10);
                echo json_encode(array('result' => true));
                die;
                break;
            case 'list':
                $output = array();
                $f566700a43ee8e1f0412fe10fbdf03df->query('SELECT id,stream_display_name FROM `streams` WHERE type <> 2');
                foreach ($f566700a43ee8e1f0412fe10fbdf03df->C126fD559932F625CDf6098d86C63880() as $c72d66b481d02f854f0bef67db92a547) {
                    $output[] = array('id' => $c72d66b481d02f854f0bef67db92a547['id'], 'stream_name' => $c72d66b481d02f854f0bef67db92a547['stream_display_name']);
                    //E283b1770ca1413a7db2234f55ee3b96:
                }
                echo json_encode($output);
                break;
            case 'offline':
                $f566700a43ee8e1f0412fe10fbdf03df->query('SELECT t1.stream_status,t1.server_id,t1.stream_id 
                                  FROM `streams_sys` t1
                                  INNER JOIN `streams` t2 ON t2.id = t1.stream_id AND t2.type <> 2
                                  WHERE t1.stream_status = 1');
                $D465fc5085f41251c6fa7c77b8333b0f = $f566700a43ee8e1f0412fe10fbdf03df->C126FD559932F625cdF6098d86C63880(true, 'stream_id', false, 'server_id');
                $output = array();
                foreach ($D465fc5085f41251c6fa7c77b8333b0f as $ba85d77d367dcebfcc2a3db9e83bb581 => $f9b9c9baaec5b82b03b15c6eb07ec8f9) {
                    $output[$ba85d77d367dcebfcc2a3db9e83bb581] = array_keys($f9b9c9baaec5b82b03b15c6eb07ec8f9);
                    //dc36140b17e2214cd0291f81609d6855:
                }
                echo json_encode($output);
                break;
            case 'online':
                $f566700a43ee8e1f0412fe10fbdf03df->query('SELECT t1.stream_status,t1.server_id,t1.stream_id 
                                  FROM `streams_sys` t1
                                  INNER JOIN `streams` t2 ON t2.id = t1.stream_id AND t2.type <> 2
                                  WHERE t1.pid > 0 AND t1.stream_status = 0');
                $D465fc5085f41251c6fa7c77b8333b0f = $f566700a43ee8e1f0412fe10fbdf03df->c126fd559932f625cDF6098D86c63880(true, 'stream_id', false, 'server_id');
                $output = array();
                foreach ($D465fc5085f41251c6fa7c77b8333b0f as $ba85d77d367dcebfcc2a3db9e83bb581 => $f9b9c9baaec5b82b03b15c6eb07ec8f9) {
                    $output[$ba85d77d367dcebfcc2a3db9e83bb581] = array_keys($f9b9c9baaec5b82b03b15c6eb07ec8f9);
                    //b95fa06e61bc3c48ce56f6bf18da484c:
                }
                echo json_encode($output);
                break;
        }
        break;
    case 'stb':
        switch ($E6ff6085a41cbca3609766e3f9a666ee) {
            case 'info':
                if (!empty(A78BF8d35765Be2408c50712ce7a43aD::$request['mac'])) {
                    $bad0c96fedbc6eccfe927016a4dc3cd6 = a78bf8d35765BE2408C50712ce7a43aD::$request['mac'];
                    $a8df9f055e91a1e9240230b69af85555 = CD89785224751cCa8017139DAF9e891E::f2cBD6b6F59558B819C0CFF8c3b2Ef2c(false, $bad0c96fedbc6eccfe927016a4dc3cd6, true, false, true);
                    if (!empty($a8df9f055e91a1e9240230b69af85555)) {
                        echo json_encode(array_merge(array('result' => true), $a8df9f055e91a1e9240230b69af85555));
                    } else {
                        echo json_encode(array('result' => false, 'error' => 'NOT EXISTS'));
                    }
                } else {
                    echo json_encode(array('result' => false, 'error' => 'PARAMETER ERROR (mac)'));
                }
                break;
            case 'edit':
                if (!empty(a78bf8D35765bE2408C50712cE7a43ad::$request['mac'])) {
                    $bad0c96fedbc6eccfe927016a4dc3cd6 = a78bf8d35765bE2408C50712Ce7a43AD::$request['mac'];
                    $Bf4bb0ad11102aaccbf77b6cdc1fd66f = empty(A78bf8d35765BE2408c50712CE7A43ad::$request['user_data']) ? array() : A78bf8D35765bE2408c50712CE7a43AD::$request['user_data'];
                    $Bf4bb0ad11102aaccbf77b6cdc1fd66f['is_mag'] = 1;
                    $b0f1eb357ed72245e03dfe6268912497 = FBAac025084A44F7876230Ff53A6137F($Bf4bb0ad11102aaccbf77b6cdc1fd66f);
                    if ($f566700a43ee8e1f0412fe10fbdf03df->query("UPDATE `users` SET {$b0f1eb357ed72245e03dfe6268912497} WHERE id = ( SELECT user_id FROM mag_devices WHERE `mac` = '%s' )", base64_encode(strtoupper($bad0c96fedbc6eccfe927016a4dc3cd6)))) {
                        if ($f566700a43ee8e1f0412fe10fbdf03df->e872BE457a7F493D774179C6BdF95b46() > 0) {
                            echo json_encode(array('result' => true));
                            $f566700a43ee8e1f0412fe10fbdf03df->query('INSERT INTO `reg_userlog` ( `owner`, `username`, `password`, `date`, `type` ) VALUES( \'%s\', \'%s\', \'%s\', \'%s\', \'%s\' )', "SYSTEM API[{$f4889efa84e1f2e30e5e9780973f68cb}]", $bad0c96fedbc6eccfe927016a4dc3cd6, '-', time(), '[API->Edit MAG Device]');
                        } else {
                            echo json_encode(array('result' => false));
                        }
                    } else {
                        echo json_encode(array('result' => false, 'error' => 'PARAMETER ERROR'));
                    }
                } else {
                    echo json_encode(array('result' => false, 'error' => 'PARAMETER ERROR (user/pass)'));
                }
                break;
            case 'create':
                $Bf4bb0ad11102aaccbf77b6cdc1fd66f = empty(a78bF8d35765BE2408c50712cE7A43Ad::$request['user_data']) ? array() : a78BF8d35765BE2408c50712ce7A43aD::$request['user_data'];
                if (!empty($Bf4bb0ad11102aaccbf77b6cdc1fd66f['mac'])) {
                    $fb226b0ab56e366f44da9cf9ee107fff = array(1, 2, 3);
                    $bad0c96fedbc6eccfe927016a4dc3cd6 = base64_encode(strtoupper($Bf4bb0ad11102aaccbf77b6cdc1fd66f['mac']));
                    unset($Bf4bb0ad11102aaccbf77b6cdc1fd66f['mac']);
                    $Bf4bb0ad11102aaccbf77b6cdc1fd66f['username'] = a78bF8d35765be2408c50712Ce7a43ad::e5182e3aFA58aC7EC5D69d56B28819cd(10);
                    $Bf4bb0ad11102aaccbf77b6cdc1fd66f['password'] = a78bf8D35765be2408c50712Ce7A43AD::E5182e3afA58AC7Ec5D69D56B28819cd(10);
                    if (!array_key_exists('allowed_ips', $Bf4bb0ad11102aaccbf77b6cdc1fd66f) || !Ef9fcEFFa62DB6eCc4c8a628b9B5A9aF($Bf4bb0ad11102aaccbf77b6cdc1fd66f['allowed_ips'])) {
                        $Bf4bb0ad11102aaccbf77b6cdc1fd66f['allowed_ips'] = json_encode(array());
                    }
                    $Bf4bb0ad11102aaccbf77b6cdc1fd66f['allowed_ua'] = json_encode(array());
                    $Bf4bb0ad11102aaccbf77b6cdc1fd66f['created_at'] = time();
                    $Bf4bb0ad11102aaccbf77b6cdc1fd66f['created_by'] = 0;
                    $Bf4bb0ad11102aaccbf77b6cdc1fd66f['exp_date'] = empty($Bf4bb0ad11102aaccbf77b6cdc1fd66f['exp_date']) ? null : intval($Bf4bb0ad11102aaccbf77b6cdc1fd66f['exp_date']);
                    $Bf4bb0ad11102aaccbf77b6cdc1fd66f['bouquet'] = empty($Bf4bb0ad11102aaccbf77b6cdc1fd66f['bouquet']) || !EF9fCefFa62DB6ECc4c8a628B9B5A9aF($Bf4bb0ad11102aaccbf77b6cdc1fd66f['bouquet']) ? array() : array_map('intval', json_decode($Bf4bb0ad11102aaccbf77b6cdc1fd66f['bouquet'], true));
                    $Bf4bb0ad11102aaccbf77b6cdc1fd66f['is_mag'] = 1;
                    if (array_key_exists('mac', $Bf4bb0ad11102aaccbf77b6cdc1fd66f)) {
                        unset($Bf4bb0ad11102aaccbf77b6cdc1fd66f['mac']);
                    }
                    if (array_key_exists('output_formats', $Bf4bb0ad11102aaccbf77b6cdc1fd66f)) {
                        unset($Bf4bb0ad11102aaccbf77b6cdc1fd66f['output_formats']);
                    }
                    if (!CE15043404aa3e950fc9C9dd8bc0325a('mag_devices', 'mac', $bad0c96fedbc6eccfe927016a4dc3cd6)) {
                        $b0f1eb357ed72245e03dfe6268912497 = b484C4Ff0e3EE69B9d98B92884B88c0F($Bf4bb0ad11102aaccbf77b6cdc1fd66f);
                        if ($f566700a43ee8e1f0412fe10fbdf03df->Fc53e22ae7eE3bb881CD95Fb606914F0("INSERT INTO `users` {$b0f1eb357ed72245e03dfe6268912497}")) {
                            if ($f566700a43ee8e1f0412fe10fbdf03df->e872Be457a7f493d774179c6BDF95B46() > 0) {
                                $E38668abaa324e464e266fb7b7e784b1 = $f566700a43ee8e1f0412fe10fbdf03df->bEB8A0Bba80a0133A23FE13D34dC94D6();
                                foreach ($fb226b0ab56e366f44da9cf9ee107fff as $b1f84f020035bf724cdc2f6d05ee33c3) {
                                    $f566700a43ee8e1f0412fe10fbdf03df->query('INSERT INTO `user_output` ( `user_id`, `access_output_id` )VALUES( \'%d\', \'%d\' )', $E38668abaa324e464e266fb7b7e784b1, $b1f84f020035bf724cdc2f6d05ee33c3);
                                    //D65ea973d5f15f8d2dcfd5c4a658493f:
                                }
                                $f566700a43ee8e1f0412fe10fbdf03df->query('INSERT INTO `mag_devices` ( `user_id`, `mac`, `created` )VALUES( \'%d\', \'%s\', \'%d\' )', $E38668abaa324e464e266fb7b7e784b1, $bad0c96fedbc6eccfe927016a4dc3cd6, time());
                                echo json_encode(array('result' => true));
                                $f566700a43ee8e1f0412fe10fbdf03df->query('INSERT INTO `reg_userlog` ( `owner`, `username`, `password`, `date`, `type` )VALUES( \'%s\', \'%s\', \'%s\', \'%s\', \'%s\' )', "SYSTEM API[{$f4889efa84e1f2e30e5e9780973f68cb}]", base64_decode($bad0c96fedbc6eccfe927016a4dc3cd6), '-', time(), '[API->New MAG Device]');
                            } else {
                                echo json_encode(array('result' => false));
                            }
                        } else {
                            echo json_encode(array('result' => false, 'error' => 'PARAMETER ERROR'));
                        }
                    } else {
                        echo json_encode(array('result' => false, 'error' => 'EXISTS'));
                    }
                } else {
                    echo json_encode(array('result' => false, 'error' => 'PARAMETER ERROR (mac)'));
                }
                break;
        }
        break;
    case 'user':
        switch ($E6ff6085a41cbca3609766e3f9a666ee) {
            case 'info':
                if (!empty(a78Bf8D35765BE2408C50712CE7a43aD::$request['username']) && !empty(a78bF8d35765bE2408c50712ce7a43aD::$request['password'])) {
                    $f6806488699d3315dc5dc1e27a401b3e = A78bF8D35765bE2408C50712Ce7a43Ad::$request['username'];
                    $A6a4b4fbceaf0ab570c374f4faaa990f = A78Bf8D35765be2408c50712Ce7A43aD::$request['password'];
                    $a8df9f055e91a1e9240230b69af85555 = cd89785224751Cca8017139DaF9E891E::E5550592AA298DD1D5Ee59cdCe063a12(false, $f6806488699d3315dc5dc1e27a401b3e, $A6a4b4fbceaf0ab570c374f4faaa990f, true, false, true);
                    if (!empty($a8df9f055e91a1e9240230b69af85555)) {
                        echo json_encode(array('result' => true, 'user_info' => $a8df9f055e91a1e9240230b69af85555));
                    } else {
                        echo json_encode(array('result' => false, 'error' => 'NOT EXISTS'));
                    }
                } else {
                    echo json_encode(array('result' => false, 'error' => 'PARAMETER ERROR (user/pass)'));
                }
                break;
            case 'edit':
                if (!empty(A78bf8D35765BE2408c50712cE7a43aD::$request['username']) && !empty(A78bf8D35765BE2408C50712ce7a43ad::$request['password'])) {
                    $f6806488699d3315dc5dc1e27a401b3e = a78BF8D35765be2408C50712cE7A43aD::$request['username'];
                    $A6a4b4fbceaf0ab570c374f4faaa990f = A78bF8D35765bE2408C50712Ce7a43aD::$request['password'];
                    $Bf4bb0ad11102aaccbf77b6cdc1fd66f = empty(A78BF8d35765BE2408C50712Ce7A43aD::$request['user_data']) ? array() : a78Bf8D35765BE2408C50712Ce7A43aD::$request['user_data'];
                    $f566700a43ee8e1f0412fe10fbdf03df->query('SELECT * FROM `users` WHERE `username` = \'%s\' and `password` = \'%s\'', $f6806488699d3315dc5dc1e27a401b3e, $A6a4b4fbceaf0ab570c374f4faaa990f);
                    if ($f566700a43ee8e1f0412fe10fbdf03df->d1E5CE3B87BB868b9e6efD39Aa355A4F() > 0) {
                        $b0f1eb357ed72245e03dfe6268912497 = fBaaC025084a44F7876230Ff53A6137F($Bf4bb0ad11102aaccbf77b6cdc1fd66f);
                        if ($f566700a43ee8e1f0412fe10fbdf03df->query("UPDATE `users` SET {$b0f1eb357ed72245e03dfe6268912497} WHERE `username` = '%s' and `password` = '%s'", $f6806488699d3315dc5dc1e27a401b3e, $A6a4b4fbceaf0ab570c374f4faaa990f)) {
                            echo json_encode(array('result' => true));
                            $f566700a43ee8e1f0412fe10fbdf03df->query('INSERT INTO `reg_userlog` ( `owner`, `username`, `password`, `date`, `type` )VALUES( \'%s\', \'%s\', \'%s\', \'%s\', \'%s\' )', "SYSTEM API[{$f4889efa84e1f2e30e5e9780973f68cb}]", $f6806488699d3315dc5dc1e27a401b3e, $A6a4b4fbceaf0ab570c374f4faaa990f, time(), '[API->Edit Line]');
                        } else {
                            echo json_encode(array('result' => false, 'error' => 'PARAMETER ERROR'));
                        }
                    } else {
                        echo json_encode(array('result' => false, 'error' => 'NOT EXISTS'));
                    }
                } else {
                    echo json_encode(array('result' => false, 'error' => 'PARAMETER ERROR (user/pass)'));
                }
                break;
            case 'create':
                $fb226b0ab56e366f44da9cf9ee107fff = array(1, 2, 3);
                $Bf4bb0ad11102aaccbf77b6cdc1fd66f = empty(A78bf8D35765be2408c50712cE7A43Ad::$request['user_data']) ? array() : A78bF8d35765be2408c50712ce7A43Ad::$request['user_data'];
                if (!array_key_exists('username', $Bf4bb0ad11102aaccbf77b6cdc1fd66f)) {
                    $Bf4bb0ad11102aaccbf77b6cdc1fd66f['username'] = A78BF8d35765BE2408C50712cE7a43AD::E5182E3afa58AC7ec5D69d56B28819Cd(10);
                }
                if (!array_key_exists('password', $Bf4bb0ad11102aaccbf77b6cdc1fd66f)) {
                    $Bf4bb0ad11102aaccbf77b6cdc1fd66f['password'] = A78BF8d35765be2408c50712Ce7a43Ad::E5182e3AFa58ac7Ec5D69d56B28819CD(10);
                }
                if (!array_key_exists('allowed_ips', $Bf4bb0ad11102aaccbf77b6cdc1fd66f) || !ef9fCeffa62dB6ECC4C8A628B9B5a9aF($Bf4bb0ad11102aaccbf77b6cdc1fd66f['allowed_ips'])) {
                    $Bf4bb0ad11102aaccbf77b6cdc1fd66f['allowed_ips'] = json_encode(array());
                }
                if (!array_key_exists('allowed_ua', $Bf4bb0ad11102aaccbf77b6cdc1fd66f) || !eF9FCEfFa62Db6ecC4C8A628b9b5A9aF($Bf4bb0ad11102aaccbf77b6cdc1fd66f['allowed_ua'])) {
                    $Bf4bb0ad11102aaccbf77b6cdc1fd66f['allowed_ua'] = json_encode(array());
                }
                $Bf4bb0ad11102aaccbf77b6cdc1fd66f['created_at'] = time();
                $Bf4bb0ad11102aaccbf77b6cdc1fd66f['created_by'] = 0;
                $Bf4bb0ad11102aaccbf77b6cdc1fd66f['exp_date'] = empty($Bf4bb0ad11102aaccbf77b6cdc1fd66f['exp_date']) ? null : intval($Bf4bb0ad11102aaccbf77b6cdc1fd66f['exp_date']);
                $Bf4bb0ad11102aaccbf77b6cdc1fd66f['bouquet'] = empty($Bf4bb0ad11102aaccbf77b6cdc1fd66f['bouquet']) || !EF9FcEFFA62dB6Ecc4C8a628b9b5A9af($Bf4bb0ad11102aaccbf77b6cdc1fd66f['bouquet']) ? array() : array_map('intval', json_decode($Bf4bb0ad11102aaccbf77b6cdc1fd66f['bouquet'], true));
                $fb226b0ab56e366f44da9cf9ee107fff = empty($Bf4bb0ad11102aaccbf77b6cdc1fd66f['output_formats']) || !ef9FCefFa62DB6ECC4C8A628B9B5A9AF($Bf4bb0ad11102aaccbf77b6cdc1fd66f['output_formats']) ? $fb226b0ab56e366f44da9cf9ee107fff : array_map('intval', $Bf4bb0ad11102aaccbf77b6cdc1fd66f['output_formats']);
                if (array_key_exists('output_formats', $Bf4bb0ad11102aaccbf77b6cdc1fd66f)) {
                    unset($Bf4bb0ad11102aaccbf77b6cdc1fd66f['output_formats']);
                }
                $f566700a43ee8e1f0412fe10fbdf03df->query('SELECT id FROM `users` WHERE `username` = \'%s\' AND `password` = \'%s\' LIMIT 1', $Bf4bb0ad11102aaccbf77b6cdc1fd66f['username'], $Bf4bb0ad11102aaccbf77b6cdc1fd66f['password']);
                if ($f566700a43ee8e1f0412fe10fbdf03df->d1e5Ce3b87bb868b9E6eFd39aA355a4F() == 0) {
                    $b0f1eb357ed72245e03dfe6268912497 = b484C4FF0E3eE69b9D98b92884B88c0F($Bf4bb0ad11102aaccbf77b6cdc1fd66f);
                    if ($f566700a43ee8e1f0412fe10fbdf03df->fc53e22AE7Ee3bB881cD95fB606914F0("INSERT INTO `users` {$b0f1eb357ed72245e03dfe6268912497}")) {
                        if ($f566700a43ee8e1f0412fe10fbdf03df->e872bE457a7F493D774179C6bDF95B46() > 0) {
                            $E38668abaa324e464e266fb7b7e784b1 = $f566700a43ee8e1f0412fe10fbdf03df->bEB8A0BbA80a0133a23fe13D34DC94D6();
                            foreach ($fb226b0ab56e366f44da9cf9ee107fff as $b1f84f020035bf724cdc2f6d05ee33c3) {
                                $f566700a43ee8e1f0412fe10fbdf03df->query('INSERT INTO `user_output` ( `user_id`, `access_output_id` ) VALUES( \'%d\', \'%d\' )', $E38668abaa324e464e266fb7b7e784b1, $b1f84f020035bf724cdc2f6d05ee33c3);
                                //deafaac83305037a219641703427257d:
                            }
                            echo json_encode(array('result' => true, 'created_id' => $E38668abaa324e464e266fb7b7e784b1, 'username' => $Bf4bb0ad11102aaccbf77b6cdc1fd66f['username'], 'password' => $Bf4bb0ad11102aaccbf77b6cdc1fd66f['password']));
                            $f566700a43ee8e1f0412fe10fbdf03df->query('INSERT INTO `reg_userlog` ( `owner`, `username`, `password`, `date`, `type` )VALUES( \'%s\', \'%s\', \'%s\', \'%s\', \'%s\' )', "SYSTEM API[{$f4889efa84e1f2e30e5e9780973f68cb}]", $Bf4bb0ad11102aaccbf77b6cdc1fd66f['username'], $Bf4bb0ad11102aaccbf77b6cdc1fd66f['password'], time(), '[API->New Line]');
                        } else {
                            echo json_encode(array('result' => false));
                        }
                    } else {
                        echo json_encode(array('result' => false, 'error' => 'PARAMETER ERROR'));
                    }
                } else {
                    echo json_encode(array('result' => false, 'error' => 'EXISTS'));
                }
                break;
        }
        break;
    case 'reg_user':
        switch ($E6ff6085a41cbca3609766e3f9a666ee) {
            case 'list':
                $f566700a43ee8e1f0412fe10fbdf03df->query('SELECT id,username,credits,group_id,group_name,last_login,date_registered,email,ip,status
                            FROM `reg_users` t1
                        INNER JOIN `member_groups` t2 ON t1.member_group_id = t2.group_id');
                $Af301a166badb15e0b00336d72fb9497 = $f566700a43ee8e1f0412fe10fbdf03df->C126fD559932f625CdF6098D86c63880();
                echo json_encode($Af301a166badb15e0b00336d72fb9497);
                break;
            case 'credits':
                if (!empty(a78BF8d35765BE2408C50712ce7a43ad::$request['amount']) && (!empty(a78bf8d35765Be2408c50712cE7A43Ad::$request['id']) || !empty(a78bf8D35765be2408C50712CE7A43aD::$request['username']))) {
                    $Cadd766037a4c84044843f30dd506e37 = sprintf('%.2f', A78bf8D35765bE2408C50712CE7A43AD::$request['amount']);
                    if (!empty(A78bF8d35765Be2408c50712Ce7A43aD::$request['id'])) {
                        $f566700a43ee8e1f0412fe10fbdf03df->query('SELECT * FROM reg_users WHERE `id` = \'%d\'', A78bF8d35765Be2408C50712CE7A43ad::$request['id']);
                    } else {
                        $f566700a43ee8e1f0412fe10fbdf03df->query('SELECT * FROM reg_users WHERE `username` = \'%s\'', A78bF8D35765BE2408C50712CE7a43aD::$request['username']);
                    }
                    if ($f566700a43ee8e1f0412fe10fbdf03df->d1e5cE3b87Bb868b9e6efD39aA355A4F()) {
                        $Eb809884ee4b7eb427d7a2ae5a5fb355 = $f566700a43ee8e1f0412fe10fbdf03df->f1Ed191D78470660edff4a007696Bc1F();
                        $A6f4ecc798bcb285eee6efb4467c6708 = $Cadd766037a4c84044843f30dd506e37 + $Eb809884ee4b7eb427d7a2ae5a5fb355['credits'];
                        if ($A6f4ecc798bcb285eee6efb4467c6708 < 0) {
                            echo json_encode(array('result' => true, 'error' => 'NOT ENOUGH CREDITS'));
                        } else {
                            $f566700a43ee8e1f0412fe10fbdf03df->query('UPDATE reg_users SET `credits` = \'%.2f\' WHERE `id` = \'%d\'', $A6f4ecc798bcb285eee6efb4467c6708, $Eb809884ee4b7eb427d7a2ae5a5fb355['id']);
                            echo json_encode(array('result' => true));
                            $f566700a43ee8e1f0412fe10fbdf03df->query('INSERT INTO `reg_userlog` ( `owner`, `username`, `password`, `date`, `type` )VALUES( \'%s\', \'%s\', \'%s\', \'%s\', \'%s\' )', "SYSTEM API[{$f4889efa84e1f2e30e5e9780973f68cb}]", $Bf4bb0ad11102aaccbf77b6cdc1fd66f['username'], $Bf4bb0ad11102aaccbf77b6cdc1fd66f['password'], time(), "[API->ADD Credits {$Cadd766037a4c84044843f30dd506e37}]");
                        }
                    } else {
                        echo json_encode(array('result' => false, 'error' => 'NOT EXISTS'));
                    }
                } else {
                    echo json_encode(array('result' => false, 'error' => 'PARAMETER ERROR (amount & id||username)'));
                }
                break;
        }
        break;
}
function fbAAC025084A44f7876230ff53A6137f($d76067cf9572f7a6691c85c12faf2a29)
{
    global $f566700a43ee8e1f0412fe10fbdf03df;
    $b0f1eb357ed72245e03dfe6268912497 = '';
    foreach ($d76067cf9572f7a6691c85c12faf2a29 as $bca37bc3b9c255b1666da6076ce9aa30 => $a1daec950dd361ae639ad3a57dc018c0) {
        $bca37bc3b9c255b1666da6076ce9aa30 = preg_replace('/[^a-zA-Z0-9\\_]+/', '', $bca37bc3b9c255b1666da6076ce9aa30);
        if (is_array($a1daec950dd361ae639ad3a57dc018c0)) {  
            $b0f1eb357ed72245e03dfe6268912497 .= "`{$bca37bc3b9c255b1666da6076ce9aa30}` = '" . $f566700a43ee8e1f0412fe10fbdf03df->escape(json_encode($a1daec950dd361ae639ad3a57dc018c0)) . '\',';
        }
        else if (is_null($a1daec950dd361ae639ad3a57dc018c0)) {
            $b0f1eb357ed72245e03dfe6268912497 .= "`{$bca37bc3b9c255b1666da6076ce9aa30}` = null,";
        } else {
            $b0f1eb357ed72245e03dfe6268912497 .= "`{$bca37bc3b9c255b1666da6076ce9aa30}` = '" . $f566700a43ee8e1f0412fe10fbdf03df->escape($a1daec950dd361ae639ad3a57dc018c0) . '\',';
            //c075392751c4828bc4e00e0965478472:
            //goto Eb823b81d52a0b2a1256d64215290521;
        }
        
    }
    return rtrim($b0f1eb357ed72245e03dfe6268912497, ',');
}
function b484c4Ff0e3eE69B9D98B92884B88C0f($d76067cf9572f7a6691c85c12faf2a29)
{
    global $f566700a43ee8e1f0412fe10fbdf03df;
    $b0f1eb357ed72245e03dfe6268912497 = '(';
    foreach (array_keys($d76067cf9572f7a6691c85c12faf2a29) as $bca37bc3b9c255b1666da6076ce9aa30) {
        $bca37bc3b9c255b1666da6076ce9aa30 = preg_replace('/[^a-zA-Z0-9\\_]+/', '', $bca37bc3b9c255b1666da6076ce9aa30);
        $b0f1eb357ed72245e03dfe6268912497 .= "`{$bca37bc3b9c255b1666da6076ce9aa30}`,";
    }
    $b0f1eb357ed72245e03dfe6268912497 = rtrim($b0f1eb357ed72245e03dfe6268912497, ',') . ') VALUES (';
    foreach (array_values($d76067cf9572f7a6691c85c12faf2a29) as $a1daec950dd361ae639ad3a57dc018c0) {
        if (is_array($a1daec950dd361ae639ad3a57dc018c0)) { 
            $b0f1eb357ed72245e03dfe6268912497 .= '\'' . $f566700a43ee8e1f0412fe10fbdf03df->escape(json_encode($a1daec950dd361ae639ad3a57dc018c0)) . '\',';
        }
        else if (is_null($a1daec950dd361ae639ad3a57dc018c0)) {
            $b0f1eb357ed72245e03dfe6268912497 .= 'NULL,';
        } else {
            //cb6f681d4fbd2684f1c003ecc9ac7a91:
            $b0f1eb357ed72245e03dfe6268912497 .= '\'' . $f566700a43ee8e1f0412fe10fbdf03df->escape($a1daec950dd361ae639ad3a57dc018c0) . '\',';
            //goto e1365d05c90b3128c0d7a8cfecb5a3d5;
        }
        
    }
    $b0f1eb357ed72245e03dfe6268912497 = rtrim($b0f1eb357ed72245e03dfe6268912497, ',') . ');';
    return $b0f1eb357ed72245e03dfe6268912497;
}
function eF9fcefFa62Db6ecC4c8a628B9b5a9Af($F999d6c638356ee8a5d971e3eabf821a)
{
    return is_array(json_decode($F999d6c638356ee8a5d971e3eabf821a, true));
}
?>
