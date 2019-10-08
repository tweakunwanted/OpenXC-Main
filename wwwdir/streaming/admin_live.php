<?php
/*Rev:26.09.18r0*/

header('Access-Control-Allow-Origin: *');
register_shutdown_function('shutdown');
set_time_limit(0);
require '../init.php';
$f4889efa84e1f2e30e5e9780973f68cb = $_SERVER['REMOTE_ADDR'];
if (!in_array($f4889efa84e1f2e30e5e9780973f68cb, cD89785224751CCa8017139dAF9E891e::AB69e1103c96ee33fe21a6453D788925(true))) {
    http_response_code(401);
    die;
}
if (empty(a78Bf8D35765BE2408C50712Ce7A43Ad::$request['stream']) || empty(a78Bf8D35765be2408C50712Ce7a43aD::$request['extension']) || empty(a78BF8d35765be2408c50712CE7a43Ad::$request['password']) || a78Bf8d35765BE2408c50712CE7a43ad::$settings['live_streaming_pass'] != a78Bf8D35765BE2408c50712CE7A43Ad::$request['password']) {
    http_response_code(401);
    die;
}
$A6a4b4fbceaf0ab570c374f4faaa990f = A78bf8D35765BE2408c50712ce7a43AD::$settings['live_streaming_pass'];
$ba85d77d367dcebfcc2a3db9e83bb581 = intval(A78bF8D35765be2408C50712CE7a43AD::$request['stream']);
$F1350a5569e4b73d2f9cb26483f2a0c1 = A78bf8d35765Be2408C50712cE7a43Ad::$request['extension'];
$f566700a43ee8e1f0412fe10fbdf03df->query('SELECT * 
                    FROM `streams` t1
                    INNER JOIN `streams_sys` t2 ON t2.stream_id = t1.id AND t2.server_id = \'%d\'
                    WHERE t1.`id` = \'%d\'', SERVER_ID, $ba85d77d367dcebfcc2a3db9e83bb581);
if (a78BF8D35765Be2408c50712cE7A43aD::$settings['use_buffer'] == 0) {
    header('X-Accel-Buffering: no');
}
if ($f566700a43ee8e1f0412fe10fbdf03df->D1E5Ce3b87bb868b9E6eFD39aa355a4F() > 0) {
    $ffb1e0970b62b01f46c2e57f2cded6c2 = $f566700a43ee8e1f0412fe10fbdf03df->F1eD191d78470660Edff4a007696Bc1f();
    $f566700a43ee8e1f0412fe10fbdf03df->CA531f7bDc43b966dEfB4abA3c8FAF22();
    $Bb37b848bec813a5c13ea0b018962c40 = STREAMS_PATH . $ba85d77d367dcebfcc2a3db9e83bb581 . '_.m3u8';
    if (!cd89785224751CCa8017139daF9E891E::bCaa9B8A7b46eb36Cd507A218fa64474($ffb1e0970b62b01f46c2e57f2cded6c2['pid'], $ba85d77d367dcebfcc2a3db9e83bb581)) {
        if ($ffb1e0970b62b01f46c2e57f2cded6c2['on_demand'] == 1) {
            if (!CD89785224751ccA8017139Daf9E891E::CDa72Bc41975C364BC559dB25648a5B2($ffb1e0970b62b01f46c2e57f2cded6c2['monitor_pid'], $ba85d77d367dcebfcc2a3db9e83bb581)) {
                E3Cf480C172e8b47Fe10857C2A5aeb48::e79092731573697C16a932C339d0a101($ba85d77d367dcebfcc2a3db9e83bb581);
            }
        } else {
            http_response_code(403);
            die;
        }
    }
    switch ($F1350a5569e4b73d2f9cb26483f2a0c1) {
        case 'm3u8':
            if (CD89785224751cca8017139dAf9e891e::cFE2e5b7A9107cd2B2FDb629c199787D($Bb37b848bec813a5c13ea0b018962c40, $ffb1e0970b62b01f46c2e57f2cded6c2['pid'])) {
                if (empty(a78bF8d35765be2408C50712ce7a43Ad::$request['segment'])) {
                    if ($F3803fa85b38b65447e6d438f8e9176a = CD89785224751cca8017139dAF9e891E::B18C6Bf534aE0B9b94354Db508d52a48($Bb37b848bec813a5c13ea0b018962c40, $A6a4b4fbceaf0ab570c374f4faaa990f, $ba85d77d367dcebfcc2a3db9e83bb581)) {
                        header('Content-Type: application/vnd.apple.mpegurl');
                        header('Content-Length: ' . strlen($F3803fa85b38b65447e6d438f8e9176a));
                        ob_end_flush();
                        echo $F3803fa85b38b65447e6d438f8e9176a;
                    }
                } else {
                    $fe9d0d199fc51f64065055d8bcade279 = STREAMS_PATH . str_replace(array('\\', '/'), '', urldecode(A78BF8d35765bE2408c50712Ce7A43aD::$request['segment']));
                    if (file_exists($fe9d0d199fc51f64065055d8bcade279)) {
                        $e13ac89e162bcc9913e553b949f755b6 = filesize($fe9d0d199fc51f64065055d8bcade279);
                        header('Content-Length: ' . $e13ac89e162bcc9913e553b949f755b6);
                        header('Content-Type: video/mp2t');
                        readfile($fe9d0d199fc51f64065055d8bcade279);
                    }
                }
            }
            break;
        default:
            header('Content-Type: video/mp2t');
            $C325d28e238c3a646bd7b095aa1ffa85 = cd89785224751cCA8017139DAf9e891E::b8430212cC8301200A4976571dbA202c($Bb37b848bec813a5c13ea0b018962c40, a78bF8d35765bE2408C50712cE7A43aD::$settings['client_prebuffer']);
            if (empty($C325d28e238c3a646bd7b095aa1ffa85)) {
                if (!file_exists($Bb37b848bec813a5c13ea0b018962c40)) {
                    $E76c20c612d64210f5bcc0611992d2f7 = -1;
                } else {
                    die;
                    //aec5a54201786b5bbe6573ae6b2aad85:
                    if (is_array($C325d28e238c3a646bd7b095aa1ffa85)) {
                        foreach ($C325d28e238c3a646bd7b095aa1ffa85 as $fe9d0d199fc51f64065055d8bcade279) {
                            readfile(STREAMS_PATH . $fe9d0d199fc51f64065055d8bcade279);
                            A6ef4ccb381ec4a6b0c8c43e66d85825:
                        }
                        preg_match('/_(.*)\\./', array_pop($C325d28e238c3a646bd7b095aa1ffa85), $adb24597b0e7956b0f3baad7c260916d);
                        $E76c20c612d64210f5bcc0611992d2f7 = $adb24597b0e7956b0f3baad7c260916d[1];
                    } else {
                        $E76c20c612d64210f5bcc0611992d2f7 = $C325d28e238c3a646bd7b095aa1ffa85;
                    }
                    //goto f4dce90a7951c4692e46b0303393f7a4;
                }
                $c45cc215a073632a9e20d474ea91f7e3 = 0;
                $f065eccc0636f7fd92043c7118f7409b = A78Bf8D35765bE2408c50712ce7a43ad::$SegmentsSettings['seg_time'] * 2;
                //d9f748ce9f53402f322a8d21a1736957:
                while (true) {
                    $c5f97e03cbf94a57a805526a8288042f = sprintf('%d_%d.ts', $ba85d77d367dcebfcc2a3db9e83bb581, $E76c20c612d64210f5bcc0611992d2f7 + 1);
                    $Bf3da9b14ae368d39b642b3f83d656fc = sprintf('%d_%d.ts', $ba85d77d367dcebfcc2a3db9e83bb581, $E76c20c612d64210f5bcc0611992d2f7 + 2);
                    $a88c8d86d7956601164a5f156d5df985 = 0;
                    E2548032ad734253ca2cc2ebbf6269b0:
                    while (!file_exists(STREAMS_PATH . $c5f97e03cbf94a57a805526a8288042f) && $a88c8d86d7956601164a5f156d5df985 <= $f065eccc0636f7fd92043c7118f7409b * 10) {
                        usleep(100000);
                        ++$a88c8d86d7956601164a5f156d5df985;
                    }
                    //eeb90bfe4c28dc9b04209fedc32ff5a3:
                    if (!file_exists(STREAMS_PATH . $c5f97e03cbf94a57a805526a8288042f)) {
                        die;
                    }
                    if (empty($ffb1e0970b62b01f46c2e57f2cded6c2['pid']) && file_exists(STREAMS_PATH . $ba85d77d367dcebfcc2a3db9e83bb581 . '_.pid')) {
                        $ffb1e0970b62b01f46c2e57f2cded6c2['pid'] = intval(file_get_contents(STREAMS_PATH . $ba85d77d367dcebfcc2a3db9e83bb581 . '_.pid'));
                    }
                    $c45cc215a073632a9e20d474ea91f7e3 = 0;
                    $Ab9f45b38498c3a010f3c4276ad5767c = fopen(STREAMS_PATH . $c5f97e03cbf94a57a805526a8288042f, 'r');
                    //D2d24958a6f2888a694ed67016b06229:
                    while ($c45cc215a073632a9e20d474ea91f7e3 <= $f065eccc0636f7fd92043c7118f7409b && !file_exists(STREAMS_PATH . $Bf3da9b14ae368d39b642b3f83d656fc)) {
                        $d76067cf9572f7a6691c85c12faf2a29 = stream_get_line($Ab9f45b38498c3a010f3c4276ad5767c, a78bf8d35765bE2408C50712CE7A43ad::$settings['read_buffer_size']);
                        if (empty($d76067cf9572f7a6691c85c12faf2a29)) {
                            sleep(1);
                            if (!is_resource($Ab9f45b38498c3a010f3c4276ad5767c) || !file_exists(STREAMS_PATH . $c5f97e03cbf94a57a805526a8288042f)) {
                                die;
                            }
                            ++$c45cc215a073632a9e20d474ea91f7e3;
                            continue;
                        }
                        echo $d76067cf9572f7a6691c85c12faf2a29;
                        $c45cc215a073632a9e20d474ea91f7e3 = 0;
                    }
                    //ef89f77163837836531e009abed1ed0a:
                    if (CD89785224751Cca8017139daF9e891e::ps_running($ffb1e0970b62b01f46c2e57f2cded6c2['pid'], FFMPEG_PATH) && $c45cc215a073632a9e20d474ea91f7e3 <= $f065eccc0636f7fd92043c7118f7409b && file_exists(STREAMS_PATH . $c5f97e03cbf94a57a805526a8288042f) && is_resource($Ab9f45b38498c3a010f3c4276ad5767c)) {
                        $F19b64ffad55876d290cb6f756a2dea5 = filesize(STREAMS_PATH . $c5f97e03cbf94a57a805526a8288042f);
                        $C73fe796a6baad7ca2e4251886562ef0 = $F19b64ffad55876d290cb6f756a2dea5 - ftell($Ab9f45b38498c3a010f3c4276ad5767c);
                        if ($C73fe796a6baad7ca2e4251886562ef0 > 0) {
                            echo stream_get_line($Ab9f45b38498c3a010f3c4276ad5767c, $C73fe796a6baad7ca2e4251886562ef0);
                        }
                    } else {
                        die;
                    }
                    fclose($Ab9f45b38498c3a010f3c4276ad5767c);
                    $c45cc215a073632a9e20d474ea91f7e3 = 0;
                    $E76c20c612d64210f5bcc0611992d2f7++;
                }
                //a10c19f796b5df61809eb2fe8ea2a035:
            }
    }
} else {
    http_response_code(403);
}
function shutdown()
{
    fastcgi_finish_request();
}
?>
