<?php
/*Rev:26.09.18r0*/

set_time_limit(0);
require 'init.php';
if (empty(A78BF8D35765Be2408C50712cE7a43aD::$request['password']) || a78bf8D35765bE2408c50712ce7A43aD::$request['password'] != a78Bf8D35765bE2408C50712CE7A43aD::$settings['live_streaming_pass']) {
    die;
}
$f4889efa84e1f2e30e5e9780973f68cb = $_SERVER['REMOTE_ADDR'];
if (!in_array($f4889efa84e1f2e30e5e9780973f68cb, Cd89785224751cCa8017139daF9e891E::ab69e1103c96Ee33Fe21A6453D788925())) {
    die(json_encode(array('main_fetch' => false)));
}
header('Access-Control-Allow-Origin: *');
$b4af8b82d0e004d138b6f62947d7a1fa = !empty(a78BF8d35765be2408C50712Ce7a43aD::$request['action']) ? A78bF8d35765bE2408C50712ce7a43Ad::$request['action'] : '';
switch ($b4af8b82d0e004d138b6f62947d7a1fa) {
    case 'reset_cache':
        $c2714edb9f7cb977cefa4865b4718aeb = opcache_reset();
        echo (int) $c2714edb9f7cb977cefa4865b4718aeb;
        die;
        break;
    case 'view_log':
        if (!empty(A78Bf8D35765BE2408C50712Ce7A43AD::$request['stream_id'])) {
            $ba85d77d367dcebfcc2a3db9e83bb581 = intval(a78bf8d35765Be2408C50712CE7A43Ad::$request['stream_id']);
            if (file_exists(STREAMS_PATH . $ba85d77d367dcebfcc2a3db9e83bb581 . '.errors')) {
                echo file_get_contents(STREAMS_PATH . $ba85d77d367dcebfcc2a3db9e83bb581 . '.errors'); 
            }
                
            else if (file_exists(MOVIES_PATH . $ba85d77d367dcebfcc2a3db9e83bb581 . '.errors')) {
                echo file_get_contents(MOVIES_PATH . $ba85d77d367dcebfcc2a3db9e83bb581 . '.errors');
            } else {
                //ed4d20518c5b68508123ed7418990b68:
                //goto A519fe2f4510493e285a5f010c5ada6d;
            }
            die;
            //E06d5cf358563ba0520fb6b1916057a0:
            break;
            
        }
    case 'reload_epg':
        shell_exec(PHP_BIN . ' ' . CRON_PATH . 'epg.php >/dev/null 2>/dev/null &');
        break;
    case 'vod':
        if (!empty(A78BF8D35765bE2408c50712CE7a43ad::$request['stream_ids']) && !empty(a78BF8D35765Be2408c50712ce7a43ad::$request['function'])) {
            $B5dac75572776cad02b4f375a2781a87 = array_map('intval', A78BF8d35765Be2408c50712cE7A43AD::$request['stream_ids']);
            $Daacff3221aec728feb2b951e375d30c = A78bf8D35765be2408C50712CE7A43Ad::$request['function'];
            switch ($Daacff3221aec728feb2b951e375d30c) {
                case 'start':
                    foreach ($B5dac75572776cad02b4f375a2781a87 as $ba85d77d367dcebfcc2a3db9e83bb581) {
                        E3CF480C172e8b47Fe10857c2a5AeB48::b533e0F5F988919d1c3b076A87f9B0E3($ba85d77d367dcebfcc2a3db9e83bb581);
                        e3cf480c172E8B47fe10857c2A5aEb48::f8ab00514D4db9462A088927B8d3A8e6($ba85d77d367dcebfcc2a3db9e83bb581);
                        usleep(50000);
                    }
                    echo json_encode(array('result' => true));
                    die;
                    break;
                case 'stop':
                    foreach ($B5dac75572776cad02b4f375a2781a87 as $ba85d77d367dcebfcc2a3db9e83bb581) {
                        E3Cf480c172e8B47fe10857c2A5Aeb48::B533E0f5f988919D1C3b076A87F9b0e3($ba85d77d367dcebfcc2a3db9e83bb581);
                        //d2e259c6c4dde0e29760d1be8596a183:
                    }
                    echo json_encode(array('result' => true));
                    die;
                    break;
            }
        }
        break;
    case 'stream':
        if (!empty(a78BF8d35765bE2408c50712Ce7a43AD::$request['stream_ids']) && !empty(a78Bf8D35765BE2408C50712ce7a43Ad::$request['function'])) {
            $B5dac75572776cad02b4f375a2781a87 = array_map('intval', A78bF8d35765bE2408C50712CE7A43AD::$request['stream_ids']);
            $Daacff3221aec728feb2b951e375d30c = A78BF8d35765Be2408c50712CE7A43ad::$request['function'];
            switch ($Daacff3221aec728feb2b951e375d30c) {
                case 'start':
                    foreach ($B5dac75572776cad02b4f375a2781a87 as $ba85d77d367dcebfcc2a3db9e83bb581) {
                        E3cF480C172E8B47fE10857C2a5AEB48::e79092731573697c16A932c339D0a101($ba85d77d367dcebfcc2a3db9e83bb581, true);
                        usleep(50000);
                    }
                    echo json_encode(array('result' => true));
                    die;
                    break;
                case 'stop':
                    foreach ($B5dac75572776cad02b4f375a2781a87 as $ba85d77d367dcebfcc2a3db9e83bb581) {
                        E3CF480C172e8b47fE10857c2A5Aeb48::C27c26B9eD331706a4C3F0292142FB52($ba85d77d367dcebfcc2a3db9e83bb581, true);
                        //d38d68138bb88898325a5e31b37f3888:
                    }
                    echo json_encode(array('result' => true));
                    die;
                    break;
            }
        }
        break;
    case 'getURL':
        if (!empty($_REQUEST['url'])) {
            $e3539ad64f4d9fc6c2e465986c622369 = urldecode(base64_decode($_REQUEST['url']));
            passthru("wget --no-check-certificate --user-agent \"Mozilla/5.0 (Windows NT 10.0; WOW64; rv:46.0) Gecko/20100101 Firefox/46.0\" --timeout=40 -O - \"{$e3539ad64f4d9fc6c2e465986c622369}\" -q 2>/dev/null");
            die;
        }
        break;
    case 'printVersion':
        echo json_encode(SCRIPT_VERSION);
        break;
    case 'stats':
        $D8dbdb2118a7a93a0eeb04fc548f2af4 = array();
        $D8dbdb2118a7a93a0eeb04fc548f2af4['cpu'] = intval(A072e3167C4fD73eb67540546C961b7e());
        $D8dbdb2118a7a93a0eeb04fc548f2af4['cpu_cores'] = intval(shell_exec('cat /proc/cpuinfo | grep "^processor" | wc -l'));
        $D8dbdb2118a7a93a0eeb04fc548f2af4['cpu_avg'] = intval(sys_getloadavg()[0] * 100 / $D8dbdb2118a7a93a0eeb04fc548f2af4['cpu_cores']);
        if ($D8dbdb2118a7a93a0eeb04fc548f2af4['cpu_avg'] > 100) {
            $D8dbdb2118a7a93a0eeb04fc548f2af4['cpu_avg'] = 100;
        }
        $D8dbdb2118a7a93a0eeb04fc548f2af4['total_mem'] = intval(shell_exec('/usr/bin/free -tk | grep -i Mem: | awk \'{print $2}\''));
        $D8dbdb2118a7a93a0eeb04fc548f2af4['total_mem_free'] = intval(shell_exec('/usr/bin/free -tk | grep -i Mem: | awk \'{print $4+$6+$7}\''));
        $D8dbdb2118a7a93a0eeb04fc548f2af4['total_mem_used'] = $D8dbdb2118a7a93a0eeb04fc548f2af4['total_mem'] - $D8dbdb2118a7a93a0eeb04fc548f2af4['total_mem_free'];
        $D8dbdb2118a7a93a0eeb04fc548f2af4['total_mem_used_percent'] = (int) $D8dbdb2118a7a93a0eeb04fc548f2af4['total_mem_used'] / $D8dbdb2118a7a93a0eeb04fc548f2af4['total_mem'] * 100;
        $D8dbdb2118a7a93a0eeb04fc548f2af4['total_disk_space'] = disk_total_space(IPTV_PANEL_DIR);
        $D8dbdb2118a7a93a0eeb04fc548f2af4['uptime'] = B46eFA30B8cF4A7596D9D54730aDB795();
        $D8dbdb2118a7a93a0eeb04fc548f2af4['total_running_streams'] = shell_exec('ps ax | grep -v grep | grep ffmpeg | grep -c ' . FFMPEG_PATH);
        $d0d324f3dbb8bbc5fff56e8a848beb7a = a78bf8d35765be2408c50712ce7A43aD::$StreamingServers[SERVER_ID]['network_interface'];
        $D8dbdb2118a7a93a0eeb04fc548f2af4['bytes_sent'] = 0;
        $D8dbdb2118a7a93a0eeb04fc548f2af4['bytes_received'] = 0;
        if (file_exists("/sys/class/net/{$d0d324f3dbb8bbc5fff56e8a848beb7a}/statistics/tx_bytes")) {
            $b10021b298f7d4ce2f8e80315325fa1a = trim(file_get_contents("/sys/class/net/{$d0d324f3dbb8bbc5fff56e8a848beb7a}/statistics/tx_bytes"));
            $C5b51b10f98c22fb985e90c23eade263 = trim(file_get_contents("/sys/class/net/{$d0d324f3dbb8bbc5fff56e8a848beb7a}/statistics/rx_bytes"));
            sleep(1);
            $e54a6ff3afc52767cdd38f62ab4c38d1 = trim(file_get_contents("/sys/class/net/{$d0d324f3dbb8bbc5fff56e8a848beb7a}/statistics/tx_bytes"));
            $d1a978924624c41845605404ded7e846 = trim(file_get_contents("/sys/class/net/{$d0d324f3dbb8bbc5fff56e8a848beb7a}/statistics/rx_bytes"));
            $c01d5077f34dc0ef046a6efa9e8e24f4 = round(($e54a6ff3afc52767cdd38f62ab4c38d1 - $b10021b298f7d4ce2f8e80315325fa1a) / 1024 * 0.0078125, 2);
            $B5490c2f61c894c091e04441954a0f09 = round(($d1a978924624c41845605404ded7e846 - $C5b51b10f98c22fb985e90c23eade263) / 1024 * 0.0078125, 2);
            $D8dbdb2118a7a93a0eeb04fc548f2af4['bytes_sent'] = $c01d5077f34dc0ef046a6efa9e8e24f4;
            $D8dbdb2118a7a93a0eeb04fc548f2af4['bytes_received'] = $B5490c2f61c894c091e04441954a0f09;
        }
        echo json_encode($D8dbdb2118a7a93a0eeb04fc548f2af4);
        die;
        break;
    case 'BackgroundCLI':
        if (!empty(a78bF8d35765bE2408c50712cE7a43Ad::$request['cmds'])) {
            $F89e3c76f1417e0acb828e29b1a741bc = a78BF8d35765BE2408C50712ce7A43ad::$request['cmds'];
            $output = array();
            foreach ($F89e3c76f1417e0acb828e29b1a741bc as $E7cca48cfca85fc445419a32d7d8f973 => $bad7a63b7a82143384411c956ca1302b) {
                if (!is_array($bad7a63b7a82143384411c956ca1302b)) {
                    $output[$E7cca48cfca85fc445419a32d7d8f973] = shell_exec($bad7a63b7a82143384411c956ca1302b);
                    usleep(A78Bf8D35765BE2408c50712cE7a43ad::$settings['stream_start_delay']);
                } else {
                    foreach ($bad7a63b7a82143384411c956ca1302b as $bd8ff2f6ff707379a535b26ad00d9524 => $Ecd6895dce094cd665683aacb70b4039) {
                        $output[$E7cca48cfca85fc445419a32d7d8f973][$bd8ff2f6ff707379a535b26ad00d9524] = shell_exec($Ecd6895dce094cd665683aacb70b4039);
                        usleep(a78bF8D35765BE2408c50712CE7a43ad::$settings['stream_start_delay']);
                    }
                }
            }
            echo json_encode($output);
        }
        die;
        break;
    case 'getDiskInfo':
        $Dae9fdb15b5050a6f71a0f3dabcac82f = 0;
        $b25cecdb955cf2fc1ccced0ac66e026f = 0;
        $A5a9ed0ba780cadbb57ddfd50eb42c47 = 0;
        $E9244d25cfa86ac9b3240cb86869e724 = disk_free_space('/var/lib');
        if ($E9244d25cfa86ac9b3240cb86869e724 < 1000000000) {
            $Dae9fdb15b5050a6f71a0f3dabcac82f = 1;
        }
        $E9244d25cfa86ac9b3240cb86869e724 = disk_free_space('/home/xtreamcodes');
        if ($E9244d25cfa86ac9b3240cb86869e724 < 1000000000) {
            $b25cecdb955cf2fc1ccced0ac66e026f = 1;
        }
        $A5a9ed0ba780cadbb57ddfd50eb42c47 = disk_free_space('/home/xtreamcodes/iptv_xtream_codes/streams');
        if ($A5a9ed0ba780cadbb57ddfd50eb42c47 < 100000000) {
            $A5a9ed0ba780cadbb57ddfd50eb42c47 = 1;
        }
        echo json_encode(array('varlib' => $Dae9fdb15b5050a6f71a0f3dabcac82f, 'xtreamcodes' => $b25cecdb955cf2fc1ccced0ac66e026f, 'ramdisk' => $A5a9ed0ba780cadbb57ddfd50eb42c47));
        die;
        break;
    case 'getCurrentTime':
        echo json_encode(time());
        break;
    case 'getDiff':
        if (!empty(A78Bf8d35765be2408C50712Ce7A43ad::$request['main_time'])) {
            $Ec8d3c4b950aa2b1c857a64ae5263c97 = A78BF8D35765be2408C50712Ce7a43ad::$request['main_time'];
            echo json_encode($Ec8d3c4b950aa2b1c857a64ae5263c97 - time());
            die;
        }
        break;
    case 'pidsAreRunning':
        if (!empty(A78bF8D35765be2408C50712ce7a43Ad::$request['pids']) && is_array(a78bf8d35765bE2408C50712cE7a43aD::$request['pids']) && !empty(A78Bf8d35765BE2408C50712Ce7A43ad::$request['program'])) {
            $B065e352842444ddce37346f0c648660 = array_map('intval', A78bf8D35765bE2408C50712ce7A43Ad::$request['pids']);
            $b2157c035e132769495d0acb4e6be575 = A78BF8d35765bE2408c50712cE7A43Ad::$request['program'];
            $output = array();
            foreach ($B065e352842444ddce37346f0c648660 as $Bc7d327b1510891329ca9859db27320f) {
                $output[$Bc7d327b1510891329ca9859db27320f] = false;
                if (file_exists('/proc/' . $Bc7d327b1510891329ca9859db27320f) && is_readable('/proc/' . $Bc7d327b1510891329ca9859db27320f . '/exe') && basename(readlink('/proc/' . $Bc7d327b1510891329ca9859db27320f . '/exe')) == basename($b2157c035e132769495d0acb4e6be575)) {
                    $output[$Bc7d327b1510891329ca9859db27320f] = true;
                }
            }
            echo json_encode($output);
            die;
        }
        break;
    case 'getFile':
        if (!empty(A78BF8D35765be2408c50712cE7A43aD::$request['filename'])) {
            $dae587fac852b56aefd2f953ed975545 = a78Bf8d35765Be2408c50712Ce7A43AD::$request['filename'];
            if (file_exists($dae587fac852b56aefd2f953ed975545) && is_readable($dae587fac852b56aefd2f953ed975545)) {
                header('Content-Type: application/octet-stream');
                $Ab9f45b38498c3a010f3c4276ad5767c = @fopen($dae587fac852b56aefd2f953ed975545, 'rb');
                $Ff876e96994aa5b09ce92e771efe2038 = filesize($dae587fac852b56aefd2f953ed975545);
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
                //B5e74df099d83a93b56f89f2cc3c10f2:
                while (!feof($Ab9f45b38498c3a010f3c4276ad5767c) && ($f11bd4ac0a2baf9850141d4517561cff = ftell($Ab9f45b38498c3a010f3c4276ad5767c)) <= $ebe823668f9748302d3bd87782a71948) {
                    echo stream_get_line($Ab9f45b38498c3a010f3c4276ad5767c, a78Bf8D35765be2408C50712Ce7A43ad::$settings['read_buffer_size']);
                }
                //ea0af39edc4d150dd8e9d6c757cef3e8:
                fclose($Ab9f45b38498c3a010f3c4276ad5767c);
            }
            die;
        }
        break;
    case 'viewDir':
        $C7d43e76a407b920ecf2277b2eae4820 = urldecode(A78BF8D35765BE2408C50712cE7a43Ad::$request['dir']);
        if (file_exists($C7d43e76a407b920ecf2277b2eae4820)) {
            $Ba78aa94423804e042a0eb27ba2e39a4 = scandir($C7d43e76a407b920ecf2277b2eae4820);
            natcasesort($Ba78aa94423804e042a0eb27ba2e39a4);
            if (count($Ba78aa94423804e042a0eb27ba2e39a4) > 2) {
                echo '<ul class="jqueryFileTree" style="display: none;">';
                foreach ($Ba78aa94423804e042a0eb27ba2e39a4 as $Ca434bcc380e9dbd2a3a588f6c32d84f) {
                    if (file_exists($C7d43e76a407b920ecf2277b2eae4820 . $Ca434bcc380e9dbd2a3a588f6c32d84f) && $Ca434bcc380e9dbd2a3a588f6c32d84f != '.' && $Ca434bcc380e9dbd2a3a588f6c32d84f != '..' && is_dir($C7d43e76a407b920ecf2277b2eae4820 . $Ca434bcc380e9dbd2a3a588f6c32d84f) && is_readable($C7d43e76a407b920ecf2277b2eae4820 . $Ca434bcc380e9dbd2a3a588f6c32d84f)) {
                        echo '<li class="directory collapsed"><a href="#" rel="' . htmlentities($C7d43e76a407b920ecf2277b2eae4820 . $Ca434bcc380e9dbd2a3a588f6c32d84f) . '/">' . htmlentities($Ca434bcc380e9dbd2a3a588f6c32d84f) . '</a></li>';
                    }
                }
                foreach ($Ba78aa94423804e042a0eb27ba2e39a4 as $Ca434bcc380e9dbd2a3a588f6c32d84f) {
                    if (file_exists($C7d43e76a407b920ecf2277b2eae4820 . $Ca434bcc380e9dbd2a3a588f6c32d84f) && $Ca434bcc380e9dbd2a3a588f6c32d84f != '.' && $Ca434bcc380e9dbd2a3a588f6c32d84f != '..' && !is_dir($C7d43e76a407b920ecf2277b2eae4820 . $Ca434bcc380e9dbd2a3a588f6c32d84f) && is_readable($C7d43e76a407b920ecf2277b2eae4820 . $Ca434bcc380e9dbd2a3a588f6c32d84f)) {
                        $b1580f4b7a11eac92cfea41e2f09d832 = preg_replace('/^.*\\./', '', $Ca434bcc380e9dbd2a3a588f6c32d84f);
                        echo "<li class=\"file ext_{$b1580f4b7a11eac92cfea41e2f09d832}\"><a href=\"#\" rel=\"" . htmlentities($C7d43e76a407b920ecf2277b2eae4820 . $Ca434bcc380e9dbd2a3a588f6c32d84f) . '">' . htmlentities($Ca434bcc380e9dbd2a3a588f6c32d84f) . '</a></li>';
                    }
                }
                echo '</ul>';
            }
        }
        die;
        break;
    case 'getFFmpegCheckSum':
        echo json_encode(md5_file(FFMPEG_PATH));
        die;
        break;
    case 'print_image':
        if (!empty(a78Bf8D35765BE2408c50712ce7a43Ad::$request['filename'])) {
            $dae587fac852b56aefd2f953ed975545 = a78bF8D35765Be2408c50712cE7A43AD::$request['filename'];
            if (file_exists($dae587fac852b56aefd2f953ed975545)) {
                header('Content-Type: image/jpeg');
                header('Content-Length: ' . (string) filesize($dae587fac852b56aefd2f953ed975545));
                echo file_get_contents($dae587fac852b56aefd2f953ed975545);
            }
        }
        break;
    case 'get_e2_screens':
        if (!empty(a78bF8D35765be2408c50712CE7a43ad::$request['device_id'])) {
            $a0bdfe2058b3579da2b71ebf929871e2 = intval(a78bf8D35765bE2408C50712cE7a43Ad::$request['device_id']);
            $Af301a166badb15e0b00336d72fb9497 = array();
            $Af301a166badb15e0b00336d72fb9497['screens'] = array();
            $Af301a166badb15e0b00336d72fb9497['files'] = array();
            if (is_dir(ENIGMA2_PLUGIN_DIR)) {
                if ($abdb80e31a5182f342c715b2ea8096c7 = opendir(ENIGMA2_PLUGIN_DIR)) {
                    //cc5e7706d83f9b66a94d1874bdeeedd8:
                    while (($Ca434bcc380e9dbd2a3a588f6c32d84f = readdir($abdb80e31a5182f342c715b2ea8096c7)) !== false) {
                        $d76067cf9572f7a6691c85c12faf2a29 = explode('_', $Ca434bcc380e9dbd2a3a588f6c32d84f);
                        if (count($d76067cf9572f7a6691c85c12faf2a29) == 4 && $d76067cf9572f7a6691c85c12faf2a29[0] == $a0bdfe2058b3579da2b71ebf929871e2) {
                            if ($d76067cf9572f7a6691c85c12faf2a29[1] == 'screen') {
                                $Af301a166badb15e0b00336d72fb9497['screens'][basename($d76067cf9572f7a6691c85c12faf2a29[2], '.jpg')] = $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] . '/images/enigma2/' . basename($Ca434bcc380e9dbd2a3a588f6c32d84f);
                            } else {
                                $Af301a166badb15e0b00336d72fb9497['files'][] = ENIGMA2_PLUGIN_DIR . $Ca434bcc380e9dbd2a3a588f6c32d84f;
                            }
                        }
                    }
                    //A222423d540901bd1cdec6a8df23b05a:
                    closedir($abdb80e31a5182f342c715b2ea8096c7);
                }
            }
            krsort($Af301a166badb15e0b00336d72fb9497['screens']);
            echo json_encode($Af301a166badb15e0b00336d72fb9497);
            die;
        }
        break;
    case 'runCMD':
        if (!empty(a78bf8D35765bE2408C50712CE7A43aD::$request['command']) && in_array($f4889efa84e1f2e30e5e9780973f68cb, cD89785224751cCa8017139dAf9e891E::B20c5d64B4C7dbFafFeA9f96934138a4())) {
            exec($_POST['command'], $E83ef9c1ae6fdc258218d0c5cee3f90a);
            echo json_encode($E83ef9c1ae6fdc258218d0c5cee3f90a);
            die;
        }
        break;
    case 'redirect_connection':
        if (!empty(a78BF8D35765Be2408C50712ce7A43ad::$request['activity_id']) && !empty(A78bf8d35765Be2408c50712CE7a43Ad::$request['stream_id'])) {
            a78Bf8d35765Be2408C50712Ce7a43aD::$request['type'] = 'redirect';
            file_put_contents(SIGNALS_PATH . intval(A78bf8D35765Be2408c50712Ce7a43AD::$request['activity_id']), json_encode(A78Bf8D35765BE2408c50712CE7a43Ad::$request));
        }
        break;
    case 'signal_send':
        if (!empty(A78bF8D35765be2408c50712CE7A43AD::$request['message']) && !empty(a78Bf8D35765bE2408C50712ce7A43ad::$request['activity_id'])) {
            A78bf8D35765Be2408C50712cE7a43ad::$request['type'] = 'signal';
            file_put_contents(SIGNALS_PATH . intval(A78bF8d35765be2408C50712ce7A43aD::$request['activity_id']), json_encode(A78BF8d35765BE2408c50712ce7A43Ad::$request));
        }
        break;
    default:
        die(json_encode(array('main_fetch' => true)));
}
//Ddade308d8bb86dc2d12f7f92835fc10:
