<?php
/*Rev:26.09.18r0*/

require 'init.php';
header('Content-Type: application/json');
$B626d33e939f0dd9b6a026aa3f8c87a3 = $_SERVER['REMOTE_ADDR'];
$D4f195af96a237479546fa1dccf6173a = trim($_SERVER['HTTP_USER_AGENT']);
if (!empty(A78bf8d35765Be2408C50712cE7A43aD::$request['action']) && A78Bf8d35765be2408c50712CE7a43AD::$request['action'] == 'gen_mac' && !empty(a78bF8d35765Be2408C50712ce7a43ad::$request['pversion'])) {
    if (A78bf8d35765Be2408C50712CE7A43ad::$request['pversion'] != '0.0.1') {
        echo json_encode(strtoupper(implode(':', str_split(substr(md5(mt_rand()), 0, 12), 2))));
    }
    die;
}
if (!empty(A78BF8d35765bE2408C50712cE7a43Ad::$request['action']) && a78bF8d35765Be2408C50712CE7a43Ad::$request['action'] == 'auth') {
    $bad0c96fedbc6eccfe927016a4dc3cd6 = isset(A78bF8D35765BE2408C50712CE7a43aD::$request['mac']) ? htmlentities(A78Bf8d35765BE2408C50712cE7A43Ad::$request['mac']) : '';
    $A772ae3d339199a2063a8114463187e9 = isset(A78Bf8D35765be2408C50712ce7a43ad::$request['mmac']) ? htmlentities(A78bf8d35765be2408c50712ce7A43aD::$request['mmac']) : '';
    $fe0750f7aa30941e1e4cdf60bf6a717c = isset(a78Bf8d35765Be2408C50712ce7a43aD::$request['ip']) ? htmlentities(a78bF8D35765BE2408C50712cE7A43AD::$request['ip']) : '';
    $Ad76f953cd176710f1445b66d793955d = isset(A78BF8D35765be2408C50712CE7A43Ad::$request['version']) ? htmlentities(A78Bf8D35765BE2408C50712ce7a43ad::$request['version']) : '';
    $e001aedbc6e64693ba72fd0337a8fa76 = isset(A78Bf8D35765bE2408c50712ce7a43Ad::$request['type']) ? htmlentities(A78bf8d35765BE2408c50712cE7A43AD::$request['type']) : '';
    $db129c7b99cf0960c74f2c766ce8df9a = isset(A78Bf8D35765BE2408c50712Ce7a43aD::$request['pversion']) ? htmlentities(A78bF8d35765BE2408c50712ce7a43Ad::$request['pversion']) : '';
    $A8dcbd7c47482ea0777db7c412f03a4d = isset(A78Bf8d35765be2408C50712ce7a43ad::$request['lversion']) ? base64_decode(A78BF8D35765bE2408C50712cE7A43Ad::$request['lversion']) : '';
    $b37f0a028a0cad24cae4c9e61119f8de = !empty(a78bf8d35765Be2408C50712ce7A43AD::$request['dn']) ? htmlentities(a78BF8d35765bE2408c50712CE7A43aD::$request['dn']) : '-';
    $b5014e12f754ad55b57d1a8e17efe7b0 = !empty(A78bF8D35765Be2408c50712cE7A43aD::$request['cmac']) ? htmlentities(strtoupper(a78BF8D35765bE2408C50712ce7A43AD::$request['cmac'])) : '';
    $f5cab1816ec764ef073063a4c9596cb6 = array();
    if ($de0eb4ea8ae0aa5b5b8864529380cf22 = Cd89785224751cCa8017139daf9e891e::A2999eeDbe1Ff2D9cE52EF5311680cD4(array('device_id' => null, 'mac' => strtoupper($bad0c96fedbc6eccfe927016a4dc3cd6)))) {
        if ($de0eb4ea8ae0aa5b5b8864529380cf22['enigma2']['lock_device'] == 1) {
            if (!empty($de0eb4ea8ae0aa5b5b8864529380cf22['enigma2']['modem_mac']) && $de0eb4ea8ae0aa5b5b8864529380cf22['enigma2']['modem_mac'] !== $A772ae3d339199a2063a8114463187e9) {
                die(json_encode(array()));
            }
        }
        $Aacb752351b5de80f12830c2026b757e = strtoupper(md5(uniqid(rand(), true)));
        $Fb012ef0b8c84139cf5b45c26d1a4d54 = mt_rand(60, 70);
        $f566700a43ee8e1f0412fe10fbdf03df->query('UPDATE `enigma2_devices` SET `original_mac` = \'%s\',`dns` = \'%s\',`key_auth` = \'%s\',`lversion` = \'%s\',`watchdog_timeout` = \'%d\',`modem_mac` = \'%s\',`local_ip` = \'%s\',`public_ip` = \'%s\',`enigma_version` = \'%s\',`cpu` = \'%s\',`version` = \'%s\',`token` = \'%s\',`last_updated` = \'%d\' WHERE `device_id` = \'%d\'', $b5014e12f754ad55b57d1a8e17efe7b0, $b37f0a028a0cad24cae4c9e61119f8de, $D4f195af96a237479546fa1dccf6173a, $A8dcbd7c47482ea0777db7c412f03a4d, $Fb012ef0b8c84139cf5b45c26d1a4d54, $A772ae3d339199a2063a8114463187e9, $fe0750f7aa30941e1e4cdf60bf6a717c, $B626d33e939f0dd9b6a026aa3f8c87a3, $Ad76f953cd176710f1445b66d793955d, $e001aedbc6e64693ba72fd0337a8fa76, $db129c7b99cf0960c74f2c766ce8df9a, $Aacb752351b5de80f12830c2026b757e, time(), $de0eb4ea8ae0aa5b5b8864529380cf22['enigma2']['device_id']);
        $f5cab1816ec764ef073063a4c9596cb6['details'] = array();
        $f5cab1816ec764ef073063a4c9596cb6['details']['token'] = $Aacb752351b5de80f12830c2026b757e;
        $f5cab1816ec764ef073063a4c9596cb6['details']['username'] = $de0eb4ea8ae0aa5b5b8864529380cf22['user_info']['username'];
        $f5cab1816ec764ef073063a4c9596cb6['details']['password'] = $de0eb4ea8ae0aa5b5b8864529380cf22['user_info']['password'];
        $f5cab1816ec764ef073063a4c9596cb6['details']['watchdog_seconds'] = $Fb012ef0b8c84139cf5b45c26d1a4d54;
    }
    echo json_encode($f5cab1816ec764ef073063a4c9596cb6);
    die;
}
if (empty(A78bf8D35765bE2408C50712Ce7a43Ad::$request['token'])) {
    die(json_encode(array('valid' => false)));
}
$Aacb752351b5de80f12830c2026b757e = a78bf8D35765BE2408c50712cE7A43ad::$request['token'];
$f566700a43ee8e1f0412fe10fbdf03df->query('SELECT * FROM enigma2_devices WHERE `token` = \'%s\' AND `public_ip` = \'%s\' AND `key_auth` = \'%s\' LIMIT 1', $Aacb752351b5de80f12830c2026b757e, $B626d33e939f0dd9b6a026aa3f8c87a3, $D4f195af96a237479546fa1dccf6173a);
if ($f566700a43ee8e1f0412fe10fbdf03df->D1e5CE3b87bB868b9e6efd39aa355A4F() <= 0) {
    die(json_encode(array('valid' => false)));
}
$ef2191c41d898dd4d2c297b9115d985d = $f566700a43ee8e1f0412fe10fbdf03df->F1eD191d78470660edFf4A007696bc1F();
if (time() - $ef2191c41d898dd4d2c297b9115d985d['last_updated'] > $ef2191c41d898dd4d2c297b9115d985d['watchdog_timeout'] + 20) {
    die(json_encode(array('valid' => false)));
}
$Efbabdfbd20db2470efbf8a713287c36 = isset(A78Bf8D35765BE2408c50712ce7a43AD::$request['page']) ? A78bf8d35765bE2408c50712cE7A43ad::$request['page'] : '';
if (!empty($Efbabdfbd20db2470efbf8a713287c36)) {
    if ($Efbabdfbd20db2470efbf8a713287c36 == 'file') {
        if (!empty($_FILES['f']['name'])) {
            if ($_FILES['f']['error'] == 0) {
                $Da45e9a4a377f8bd28389cf977565923 = strtolower($_FILES['f']['tmp_name']);
                $a28758c1ab974badfc544e11aaf19a57 = a78Bf8d35765BE2408C50712ce7A43aD::$request['t'];
                switch ($a28758c1ab974badfc544e11aaf19a57) {
                    case 'screen':
                        move_uploaded_file($_FILES['f']['tmp_name'], ENIGMA2_PLUGIN_DIR . $ef2191c41d898dd4d2c297b9115d985d['device_id'] . '_screen_' . time() . '_' . uniqid() . '.jpg');
                        break;
                }
            }
        }
    } else {
        //Ef9c0fd87485ae4e7ac1168d3ef632c3:
        $f566700a43ee8e1f0412fe10fbdf03df->query('UPDATE `enigma2_devices` SET `last_updated` = \'%d\',`rc` = \'%d\' WHERE `device_id` = \'%d\'', time(), A78Bf8d35765be2408C50712ce7A43aD::$request['rc'], $ef2191c41d898dd4d2c297b9115d985d['device_id']);
        $f566700a43ee8e1f0412fe10fbdf03df->query('SELECT * FROM `enigma2_actions` WHERE `device_id` = \'%d\'', $ef2191c41d898dd4d2c297b9115d985d['device_id']);
        $C2eef5835abdc711ef2e0b2a24dc4e46 = array();
        if ($f566700a43ee8e1f0412fe10fbdf03df->D1e5Ce3B87bb868b9e6Efd39AA355a4f() > 0) {
            $Ce7729bc93110c2030dc45bb29c9f93f = $f566700a43ee8e1f0412fe10fbdf03df->f1eD191d78470660EDff4A007696bC1f();
            if ('message' == $Ce7729bc93110c2030dc45bb29c9f93f['key']) {
                $C2eef5835abdc711ef2e0b2a24dc4e46['message'] = array();
                $C2eef5835abdc711ef2e0b2a24dc4e46['message']['title'] = $Ce7729bc93110c2030dc45bb29c9f93f['command2'];
                $C2eef5835abdc711ef2e0b2a24dc4e46['message']['message'] = $Ce7729bc93110c2030dc45bb29c9f93f['command'];
            }
            if ('ssh' == $Ce7729bc93110c2030dc45bb29c9f93f['key']) {
                $C2eef5835abdc711ef2e0b2a24dc4e46['ssh'] = $Ce7729bc93110c2030dc45bb29c9f93f['command'];
            }
            if ('screen' == $Ce7729bc93110c2030dc45bb29c9f93f['key']) {
                $C2eef5835abdc711ef2e0b2a24dc4e46['screen'] = '1';
            }
            if ('reboot_gui' == $Ce7729bc93110c2030dc45bb29c9f93f['key']) {
                $C2eef5835abdc711ef2e0b2a24dc4e46['reboot_gui'] = 1;
            }
            if ('reboot' == $Ce7729bc93110c2030dc45bb29c9f93f['key']) {
                $C2eef5835abdc711ef2e0b2a24dc4e46['reboot'] = 1;
            }
            if ('update' == $Ce7729bc93110c2030dc45bb29c9f93f['key']) {
                $C2eef5835abdc711ef2e0b2a24dc4e46['update'] = $Ce7729bc93110c2030dc45bb29c9f93f['command'];
            }
            if ('block_ssh' == $Ce7729bc93110c2030dc45bb29c9f93f['key']) {
                $C2eef5835abdc711ef2e0b2a24dc4e46['block_ssh'] = (int) $Ce7729bc93110c2030dc45bb29c9f93f['type'];
            }
            if ('block_telnet' == $Ce7729bc93110c2030dc45bb29c9f93f['key']) {
                $C2eef5835abdc711ef2e0b2a24dc4e46['block_telnet'] = (int) $Ce7729bc93110c2030dc45bb29c9f93f['type'];
            }
            if ('block_ftp' == $Ce7729bc93110c2030dc45bb29c9f93f['key']) {
                $C2eef5835abdc711ef2e0b2a24dc4e46['block_ftp'] = (int) $Ce7729bc93110c2030dc45bb29c9f93f['type'];
            }
            if ('block_all' == $Ce7729bc93110c2030dc45bb29c9f93f['key']) {
                $C2eef5835abdc711ef2e0b2a24dc4e46['block_all'] = (int) $Ce7729bc93110c2030dc45bb29c9f93f['type'];
            }
            if ('block_plugin' == $Ce7729bc93110c2030dc45bb29c9f93f['key']) {
                $C2eef5835abdc711ef2e0b2a24dc4e46['block_plugin'] = (int) $Ce7729bc93110c2030dc45bb29c9f93f['type'];
            }
            $f566700a43ee8e1f0412fe10fbdf03df->query('DELETE FROM enigma2_actions where id = \'%d\'', $Ce7729bc93110c2030dc45bb29c9f93f['id']);
        }
        die(json_encode(array('valid' => true, 'data' => $C2eef5835abdc711ef2e0b2a24dc4e46)));
        //goto a5360c7a142d50608106d75d4ce0aa19;
    }
}
?>
