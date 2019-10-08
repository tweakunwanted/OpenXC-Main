<?php
/*Rev:26.09.18r0*/

class E3cf480c172e8B47FE10857c2A5AEb48
{
    public static $ipTV_db;
    static function aD09D99Ce37614036D5a527595d569d9($A733a5416ffab6ff47547550f3f9f641)
    {
        if (empty($A733a5416ffab6ff47547550f3f9f641)) {
            return;
        }
        foreach ($A733a5416ffab6ff47547550f3f9f641 as $F3803fa85b38b65447e6d438f8e9176a) {
            if (file_exists(STREAMS_PATH . md5($F3803fa85b38b65447e6d438f8e9176a))) {
                unlink(STREAMS_PATH . md5($F3803fa85b38b65447e6d438f8e9176a));
            }
        }
    }
    static function EeeD2f36fa093b45bC2D622ed0231684($E62a309a7fc72c8c292c032fe0fd23ab)
    {
        self::$ipTV_db->query('
                SELECT * FROM `streams` t1 
                LEFT JOIN `transcoding_profiles` t3 ON t1.transcode_profile_id = t3.profile_id
                WHERE t1.`id` = \'%d\'', $E62a309a7fc72c8c292c032fe0fd23ab);
        $a5fd23cf4a741b0e9eb35bb60849c401 = self::$ipTV_db->f1Ed191D78470660eDFF4a007696Bc1F();
        $a5fd23cf4a741b0e9eb35bb60849c401['cchannel_rsources'] = json_decode($a5fd23cf4a741b0e9eb35bb60849c401['cchannel_rsources'], true);
        $a5fd23cf4a741b0e9eb35bb60849c401['stream_source'] = json_decode($a5fd23cf4a741b0e9eb35bb60849c401['stream_source'], true);
        $a5fd23cf4a741b0e9eb35bb60849c401['pids_create_channel'] = json_decode($a5fd23cf4a741b0e9eb35bb60849c401['pids_create_channel'], true);
        $a5fd23cf4a741b0e9eb35bb60849c401['transcode_attributes'] = json_decode($a5fd23cf4a741b0e9eb35bb60849c401['profile_options'], true);
        if (!array_key_exists('-acodec', $a5fd23cf4a741b0e9eb35bb60849c401['transcode_attributes'])) {
            $a5fd23cf4a741b0e9eb35bb60849c401['transcode_attributes']['-acodec'] = 'copy';
        }
        if (!array_key_exists('-vcodec', $a5fd23cf4a741b0e9eb35bb60849c401['transcode_attributes'])) {
            $a5fd23cf4a741b0e9eb35bb60849c401['transcode_attributes']['-vcodec'] = 'copy';
        }
        $bf1324315496910e8d570f42b29cf7bb = FFMPEG_PATH . ' -fflags +genpts -async 1 -y -nostdin -hide_banner -loglevel quiet -i "{INPUT}" ';
        $bf1324315496910e8d570f42b29cf7bb .= implode(' ', self::F6664C80BDe3e9BbE2C12ceB906D5A11($a5fd23cf4a741b0e9eb35bb60849c401['transcode_attributes'])) . ' ';
        $bf1324315496910e8d570f42b29cf7bb .= '-strict -2 -mpegts_flags +initial_discontinuity -f mpegts "' . CREATED_CHANNELS . $E62a309a7fc72c8c292c032fe0fd23ab . '_{INPUT_MD5}.ts" >/dev/null 2>/dev/null & jobs -p';
        $Ff86147ddc7b314b8090bc97616612a7 = array_diff($a5fd23cf4a741b0e9eb35bb60849c401['stream_source'], $a5fd23cf4a741b0e9eb35bb60849c401['cchannel_rsources']);
        $F7385aab8f8489bee4d3920b1e33eac7 = '';
        foreach ($a5fd23cf4a741b0e9eb35bb60849c401['stream_source'] as $b593cd195ca5474bf633cc7331d67088) {
            $F7385aab8f8489bee4d3920b1e33eac7 .= 'file \'' . CREATED_CHANNELS . $E62a309a7fc72c8c292c032fe0fd23ab . '_' . md5($b593cd195ca5474bf633cc7331d67088) . '.ts\'
';
            //Dacc3a7743606f9081e171abfd8afd70:
        }
        $F7385aab8f8489bee4d3920b1e33eac7 = base64_encode($F7385aab8f8489bee4d3920b1e33eac7);
        if ((!empty($Ff86147ddc7b314b8090bc97616612a7) || $a5fd23cf4a741b0e9eb35bb60849c401['stream_source'] !== $a5fd23cf4a741b0e9eb35bb60849c401['cchannel_rsources'])) {
            //B2698bb5e4373b49b23f6243176db365:
            foreach ($Ff86147ddc7b314b8090bc97616612a7 as $b593cd195ca5474bf633cc7331d67088) {
                $a5fd23cf4a741b0e9eb35bb60849c401['pids_create_channel'][] = a7785208d901bEA02B65446067cFd0b3::F320b6a3920944D8A18D7949c8abaCe4($a5fd23cf4a741b0e9eb35bb60849c401['created_channel_location'], str_ireplace(array('{INPUT}', '{INPUT_MD5}'), array($b593cd195ca5474bf633cc7331d67088, md5($b593cd195ca5474bf633cc7331d67088)), $bf1324315496910e8d570f42b29cf7bb), 'raw')[$a5fd23cf4a741b0e9eb35bb60849c401['created_channel_location']];
                //D55ed4325d42ba3f283b52d86a708783:
            }
            self::$ipTV_db->query('UPDATE `streams` SET pids_create_channel = \'%s\',`cchannel_rsources` = \'%s\' WHERE `id` = \'%d\'', json_encode($a5fd23cf4a741b0e9eb35bb60849c401['pids_create_channel']), json_encode($a5fd23cf4a741b0e9eb35bb60849c401['stream_source']), $E62a309a7fc72c8c292c032fe0fd23ab);
            a7785208d901Bea02B65446067Cfd0b3::f320b6A3920944D8a18d7949C8abaCe4($a5fd23cf4a741b0e9eb35bb60849c401['created_channel_location'], "echo {$F7385aab8f8489bee4d3920b1e33eac7} | base64 --decode > \"" . CREATED_CHANNELS . $E62a309a7fc72c8c292c032fe0fd23ab . '_.list"', 'raw');
            return 1;
        }
        else if (!empty($a5fd23cf4a741b0e9eb35bb60849c401['pids_create_channel'])) {
            foreach ($a5fd23cf4a741b0e9eb35bb60849c401['pids_create_channel'] as $E7cca48cfca85fc445419a32d7d8f973 => $Bc7d327b1510891329ca9859db27320f) {
                if (!a7785208d901Bea02b65446067cfd0B3::eD79a31441202a0d242A25777F316FaC($a5fd23cf4a741b0e9eb35bb60849c401['created_channel_location'], $Bc7d327b1510891329ca9859db27320f, FFMPEG_PATH)) {
                    unset($a5fd23cf4a741b0e9eb35bb60849c401['pids_create_channel'][$E7cca48cfca85fc445419a32d7d8f973]);
                }
            }
            self::$ipTV_db->query('UPDATE `streams` SET pids_create_channel = \'%s\' WHERE `id` = \'%d\'', json_encode($a5fd23cf4a741b0e9eb35bb60849c401['pids_create_channel']), $E62a309a7fc72c8c292c032fe0fd23ab);
            return empty($a5fd23cf4a741b0e9eb35bb60849c401['pids_create_channel']) ? 2 : 1;
        } 
                
        //goto d1cbb96c05439cbb179d4ff78e029ddb;    
        return 2;    
    }
    static function E0A1164567005185e0818F081674E240($C0379dd6700deb6b1021ed6026f648b9, $Aa894918d6f628c53ace2682189e44d5, $f84c1c6145bb73410b3ea7c0f8b4a9f3 = array(), $A7da0ef4553f5ea253d3907a7c9ef7f0 = '')
    {
        $C359d5e5ab36c7a88fca0754166e7996 = abs(intval(a78bf8d35765bE2408C50712CE7A43Ad::$settings['stream_max_analyze']));
        $E1be7e0ba659254273dc1475ae9679e0 = abs(intval(a78bf8D35765bE2408c50712CE7A43Ad::$settings['probesize']));
        $E2862eaf3f4716fdadef0a008a343507 = intval($C359d5e5ab36c7a88fca0754166e7996 / 1000000) + 5;
        $Fd219183e9990a8c0beae39264c6d004 = "{$A7da0ef4553f5ea253d3907a7c9ef7f0}/usr/bin/timeout {$E2862eaf3f4716fdadef0a008a343507}s " . FFPROBE_PATH . " -probesize {$E1be7e0ba659254273dc1475ae9679e0} -analyzeduration {$C359d5e5ab36c7a88fca0754166e7996} " . implode(' ', $f84c1c6145bb73410b3ea7c0f8b4a9f3) . " -i \"{$C0379dd6700deb6b1021ed6026f648b9}\" -v quiet -print_format json -show_streams -show_format";
        $C2eef5835abdc711ef2e0b2a24dc4e46 = a7785208D901BEA02b65446067CFD0b3::F320b6A3920944d8A18D7949c8abAce4($Aa894918d6f628c53ace2682189e44d5, $Fd219183e9990a8c0beae39264c6d004, 'raw', $E2862eaf3f4716fdadef0a008a343507 * 2, $E2862eaf3f4716fdadef0a008a343507 * 2);
        return self::cCBD051C8a19a02Dc5B6dB256Ae31c07(json_decode($C2eef5835abdc711ef2e0b2a24dc4e46[$Aa894918d6f628c53ace2682189e44d5], true));
    }
    public static function CcBd051c8a19a02dc5B6dB256AE31c07($d8c887d4a07ddc3992dca7f1d440e7de)
    {
        if (!empty($d8c887d4a07ddc3992dca7f1d440e7de)) {
            if (!empty($d8c887d4a07ddc3992dca7f1d440e7de['codecs'])) {
                return $d8c887d4a07ddc3992dca7f1d440e7de;
            }
            $output = array();
            $output['codecs']['video'] = '';
            $output['codecs']['audio'] = '';
            $output['container'] = $d8c887d4a07ddc3992dca7f1d440e7de['format']['format_name'];
            $output['filename'] = $d8c887d4a07ddc3992dca7f1d440e7de['format']['filename'];
            $output['bitrate'] = !empty($d8c887d4a07ddc3992dca7f1d440e7de['format']['bit_rate']) ? $d8c887d4a07ddc3992dca7f1d440e7de['format']['bit_rate'] : null;
            $output['of_duration'] = !empty($d8c887d4a07ddc3992dca7f1d440e7de['format']['duration']) ? $d8c887d4a07ddc3992dca7f1d440e7de['format']['duration'] : 'N/A';
            $output['duration'] = !empty($d8c887d4a07ddc3992dca7f1d440e7de['format']['duration']) ? gmdate('H:i:s', intval($d8c887d4a07ddc3992dca7f1d440e7de['format']['duration'])) : 'N/A';
            foreach ($d8c887d4a07ddc3992dca7f1d440e7de['streams'] as $E91d1cd26e7223a0f44a617b8ab51d10) {
                if (!isset($E91d1cd26e7223a0f44a617b8ab51d10['codec_type'])) {
                    continue;
                }
                if ($E91d1cd26e7223a0f44a617b8ab51d10['codec_type'] != 'audio' && $E91d1cd26e7223a0f44a617b8ab51d10['codec_type'] != 'video') {
                    continue;
                }
                $output['codecs'][$E91d1cd26e7223a0f44a617b8ab51d10['codec_type']] = $E91d1cd26e7223a0f44a617b8ab51d10;
                //B118807d702f1626af252cf6e1925be3:
            }
            return $output;
        }
        return false;
    }
    static function C27C26b9eD331706a4c3f0292142fB52($ba85d77d367dcebfcc2a3db9e83bb581, $a10d30316266ccc4dd75c9b1ce4dd026 = false)
    {
        if (file_exists("/home/xtreamcodes/iptv_xtream_codes/streams/{$ba85d77d367dcebfcc2a3db9e83bb581}.monitor")) {
            $e9d30118d498945b35ee33aa90ed9822 = intval(file_get_contents("/home/xtreamcodes/iptv_xtream_codes/streams/{$ba85d77d367dcebfcc2a3db9e83bb581}.monitor"));
            if (self::F198E55FC8231996C50ee056Ac4226E0($e9d30118d498945b35ee33aa90ed9822, "XtreamCodes[{$ba85d77d367dcebfcc2a3db9e83bb581}]")) {
                posix_kill($e9d30118d498945b35ee33aa90ed9822, 9);
            }
        }
        if (file_exists(STREAMS_PATH . $ba85d77d367dcebfcc2a3db9e83bb581 . '_.pid')) {
            $Bc7d327b1510891329ca9859db27320f = intval(file_get_contents(STREAMS_PATH . $ba85d77d367dcebfcc2a3db9e83bb581 . '_.pid'));
            if (self::F198E55fC8231996C50eE056aC4226e0($Bc7d327b1510891329ca9859db27320f, "{$ba85d77d367dcebfcc2a3db9e83bb581}_.m3u8")) {
                posix_kill($Bc7d327b1510891329ca9859db27320f, 9);
            }
        }
        shell_exec('rm -f ' . STREAMS_PATH . $ba85d77d367dcebfcc2a3db9e83bb581 . '_*');
        if ($a10d30316266ccc4dd75c9b1ce4dd026) {
            shell_exec('rm -f ' . DELAY_STREAM . $ba85d77d367dcebfcc2a3db9e83bb581 . '_*');
            self::$ipTV_db->query('UPDATE `streams_sys` SET `bitrate` = NULL,`current_source` = NULL,`to_analyze` = 0,`pid` = NULL,`stream_started` = NULL,`stream_info` = NULL,`stream_status` = 0,`monitor_pid` = NULL WHERE `stream_id` = \'%d\' AND `server_id` = \'%d\'', $ba85d77d367dcebfcc2a3db9e83bb581, SERVER_ID);
        }
    }
    static function F198e55Fc8231996C50eE056ac4226e0($Bc7d327b1510891329ca9859db27320f, $Afd5f79d62d4622597818545a5cf00d1)
    {
        if (file_exists('/proc/' . $Bc7d327b1510891329ca9859db27320f)) {
            $ea5780c60b0a2afa62b1d8395f019e9a = trim(file_get_contents("/proc/{$Bc7d327b1510891329ca9859db27320f}/cmdline"));
            if (stristr($ea5780c60b0a2afa62b1d8395f019e9a, $Afd5f79d62d4622597818545a5cf00d1)) {
                return true;
            }
        }
        return false;
    }
    static function E79092731573697C16A932C339d0A101($ba85d77d367dcebfcc2a3db9e83bb581, $c6a482793047d2f533b0b69299b7d24d = 0)
    {
        $d0ecfdcd1b9396ba72538b60109bf719 = STREAMS_PATH . $ba85d77d367dcebfcc2a3db9e83bb581 . '.lock';
        $Ab9f45b38498c3a010f3c4276ad5767c = fopen($d0ecfdcd1b9396ba72538b60109bf719, 'a+');
        if (flock($Ab9f45b38498c3a010f3c4276ad5767c, LOCK_EX | LOCK_NB)) {
            $c6a482793047d2f533b0b69299b7d24d = intval($c6a482793047d2f533b0b69299b7d24d);
            shell_exec(PHP_BIN . ' ' . TOOLS_PATH . "stream_monitor.php {$ba85d77d367dcebfcc2a3db9e83bb581} {$c6a482793047d2f533b0b69299b7d24d} >/dev/null 2>/dev/null &");
            usleep(300);
            flock($Ab9f45b38498c3a010f3c4276ad5767c, LOCK_UN);
        }
        fclose($Ab9f45b38498c3a010f3c4276ad5767c);
    }
    static function b533E0f5f988919d1c3b076a87f9b0E3($ba85d77d367dcebfcc2a3db9e83bb581)
    {
        if (file_exists(MOVIES_PATH . $ba85d77d367dcebfcc2a3db9e83bb581 . '_.pid')) {
            $Bc7d327b1510891329ca9859db27320f = (int) file_get_contents(MOVIES_PATH . $ba85d77d367dcebfcc2a3db9e83bb581 . '_.pid');
            posix_kill($Bc7d327b1510891329ca9859db27320f, 9);
        }
        shell_exec('rm -f ' . MOVIES_PATH . $ba85d77d367dcebfcc2a3db9e83bb581 . '.*');
        self::$ipTV_db->query('UPDATE `streams_sys` SET `bitrate` = NULL,`current_source` = NULL,`to_analyze` = 0,`pid` = NULL,`stream_started` = NULL,`stream_info` = NULL,`stream_status` = 0 WHERE `stream_id` = \'%d\' AND `server_id` = \'%d\'', $ba85d77d367dcebfcc2a3db9e83bb581, SERVER_ID);
    }
    static function f8aB00514d4DB9462A088927b8D3a8E6($ba85d77d367dcebfcc2a3db9e83bb581)
    {
        $c3a18c26bfa971a25d2e6ada870ff735 = array();
        self::$ipTV_db->query('SELECT * FROM `streams` t1 
                               INNER JOIN `streams_types` t2 ON t2.type_id = t1.type AND t2.live = 0
                               LEFT JOIN `transcoding_profiles` t4 ON t1.transcode_profile_id = t4.profile_id 
                               WHERE t1.direct_source = 0 AND t1.id = \'%d\'', $ba85d77d367dcebfcc2a3db9e83bb581);
        if (self::$ipTV_db->d1E5CE3B87bB868b9e6Efd39AA355A4F() <= 0) {
            return false;
        }
        $c3a18c26bfa971a25d2e6ada870ff735['stream_info'] = self::$ipTV_db->f1ed191d78470660eDfF4A007696bc1f();
        $ecb89a457f7f7216f5564141edfd6269 = json_decode($c3a18c26bfa971a25d2e6ada870ff735['stream_info']['target_container'], true);
        if (json_last_error() === JSON_ERROR_NONE) {
            $c3a18c26bfa971a25d2e6ada870ff735['stream_info']['target_container'] = $ecb89a457f7f7216f5564141edfd6269;
        } else {
            $c3a18c26bfa971a25d2e6ada870ff735['stream_info']['target_container'] = array($c3a18c26bfa971a25d2e6ada870ff735['stream_info']['target_container']);
        }
        self::$ipTV_db->query('SELECT * FROM `streams_sys` WHERE stream_id  = \'%d\' AND `server_id` = \'%d\'', $ba85d77d367dcebfcc2a3db9e83bb581, SERVER_ID);
        if (self::$ipTV_db->D1E5cE3B87bb868B9E6EfD39Aa355a4F() <= 0) {
            return false;
        }
        $c3a18c26bfa971a25d2e6ada870ff735['server_info'] = self::$ipTV_db->f1ed191D78470660EDFF4a007696BC1f();
        self::$ipTV_db->query('SELECT t1.*, t2.* FROM `streams_options` t1, `streams_arguments` t2 WHERE t1.stream_id = \'%d\' AND t1.argument_id = t2.id', $ba85d77d367dcebfcc2a3db9e83bb581);
        $c3a18c26bfa971a25d2e6ada870ff735['stream_arguments'] = self::$ipTV_db->c126FD559932F625CDf6098d86C63880();
        $B16ceb354351bfb3944291018578c764 = urldecode(json_decode($c3a18c26bfa971a25d2e6ada870ff735['stream_info']['stream_source'], true)[0]);
        if (substr($B16ceb354351bfb3944291018578c764, 0, 2) == 's:') {
            $a3cc823f429df879ce4a238c730d5eb1 = explode(':', $B16ceb354351bfb3944291018578c764, 3);
            $dc4f2a655eb3f009a9e741402d02f5fb = $a3cc823f429df879ce4a238c730d5eb1[1];
            if ($dc4f2a655eb3f009a9e741402d02f5fb != SERVER_ID) {
                $ed147a39fb35be93248b6f1c206a8023 = a78Bf8d35765BE2408c50712ce7A43aD::$StreamingServers[$dc4f2a655eb3f009a9e741402d02f5fb]['api_url'] . '&action=getFile&filename=' . urlencode($a3cc823f429df879ce4a238c730d5eb1[2]);
            } else {
                $ed147a39fb35be93248b6f1c206a8023 = $a3cc823f429df879ce4a238c730d5eb1[2];
            }
            $F53be324c8d9391cc021f5be5dacdfc1 = null;
        } else {
            $F53be324c8d9391cc021f5be5dacdfc1 = substr($B16ceb354351bfb3944291018578c764, 0, strpos($B16ceb354351bfb3944291018578c764, '://'));
            $ed147a39fb35be93248b6f1c206a8023 = str_replace(' ', '%20', $B16ceb354351bfb3944291018578c764);
            $be9f906faa527985765b1d8c897fb13a = implode(' ', self::eA860C1D3851c46D06e64911E3602768($c3a18c26bfa971a25d2e6ada870ff735['stream_arguments'], $F53be324c8d9391cc021f5be5dacdfc1, 'fetch'));
        }
        if (!(isset($dc4f2a655eb3f009a9e741402d02f5fb) && $dc4f2a655eb3f009a9e741402d02f5fb == SERVER_ID && $c3a18c26bfa971a25d2e6ada870ff735['stream_info']['movie_symlink'] == 1)) {
            $fd91db723d1a9a2b33d242b8850c593f = json_decode($c3a18c26bfa971a25d2e6ada870ff735['stream_info']['movie_subtitles'], true);
            $cded98e960569a6cd37bbbc155e6a799 = '';
            $C48e0083a9caa391609a3c645a2ec889 = 0;
            //A939828d8872169b1d363ce60f3db680:
            while ($C48e0083a9caa391609a3c645a2ec889 < count($fd91db723d1a9a2b33d242b8850c593f['files'])) {
                $f26614792b40297912d260cb0d2fa273 = urldecode($fd91db723d1a9a2b33d242b8850c593f['files'][$C48e0083a9caa391609a3c645a2ec889]);
                $d8143e98f4313d9c05f0b2697179789c = $fd91db723d1a9a2b33d242b8850c593f['charset'][$C48e0083a9caa391609a3c645a2ec889];
                if ($fd91db723d1a9a2b33d242b8850c593f['location'] == SERVER_ID) {
                    $cded98e960569a6cd37bbbc155e6a799 .= "-sub_charenc \"{$d8143e98f4313d9c05f0b2697179789c}\" -i \"{$f26614792b40297912d260cb0d2fa273}\" ";
                } else {
                    $cded98e960569a6cd37bbbc155e6a799 .= "-sub_charenc \"{$d8143e98f4313d9c05f0b2697179789c}\" -i \"" . a78BF8D35765be2408c50712Ce7a43aD::$StreamingServers[$fd91db723d1a9a2b33d242b8850c593f['location']]['api_url'] . '&action=getFile&filename=' . urlencode($f26614792b40297912d260cb0d2fa273) . '" ';
                }
                $C48e0083a9caa391609a3c645a2ec889++;
            }
            //E404feeb4139fcd9698f5b6a92c598c8:
            $f2130ba0f82d2308b743977b2ba5eaa9 = '';
            $C48e0083a9caa391609a3c645a2ec889 = 0;
            //E6e19d8ac7fbc7bd7196ad89afc70796:
            while ($C48e0083a9caa391609a3c645a2ec889 < count($fd91db723d1a9a2b33d242b8850c593f['files'])) {
                $f2130ba0f82d2308b743977b2ba5eaa9 .= '-map ' . ($C48e0083a9caa391609a3c645a2ec889 + 1) . " -metadata:s:s:{$C48e0083a9caa391609a3c645a2ec889} title={$fd91db723d1a9a2b33d242b8850c593f['names'][$C48e0083a9caa391609a3c645a2ec889]} -metadata:s:s:{$C48e0083a9caa391609a3c645a2ec889} language={$fd91db723d1a9a2b33d242b8850c593f['names'][$C48e0083a9caa391609a3c645a2ec889]} ";
                $C48e0083a9caa391609a3c645a2ec889++;
            }
            //ad3c3b402990229299a009de2ca8b278:
            $af428179032a83d9ec1df565934b1c89 = FFMPEG_PATH . " -y -nostdin -hide_banner -loglevel warning -err_detect ignore_err {FETCH_OPTIONS} -fflags +genpts -async 1 {READ_NATIVE} -i \"{STREAM_SOURCE}\" {$cded98e960569a6cd37bbbc155e6a799}";
            $feb3f2070e6ccf961f6265281e875b1a = '';
            if ($c3a18c26bfa971a25d2e6ada870ff735['stream_info']['read_native'] == 1) {
                $feb3f2070e6ccf961f6265281e875b1a = '-re';
            }
            if ($c3a18c26bfa971a25d2e6ada870ff735['stream_info']['enable_transcode'] == 1) {
                if ($c3a18c26bfa971a25d2e6ada870ff735['stream_info']['transcode_profile_id'] == -1) {
                    $c3a18c26bfa971a25d2e6ada870ff735['stream_info']['transcode_attributes'] = array_merge(self::ea860c1d3851c46d06E64911e3602768($c3a18c26bfa971a25d2e6ada870ff735['stream_arguments'], $F53be324c8d9391cc021f5be5dacdfc1, 'transcode'), json_decode($c3a18c26bfa971a25d2e6ada870ff735['stream_info']['transcode_attributes'], true));
                } else {
                    $c3a18c26bfa971a25d2e6ada870ff735['stream_info']['transcode_attributes'] = json_decode($c3a18c26bfa971a25d2e6ada870ff735['stream_info']['profile_options'], true);
                }
            } else {
                $c3a18c26bfa971a25d2e6ada870ff735['stream_info']['transcode_attributes'] = array();
            }
            $fd85ae68a4de5cc6cec54942d82e8f80 = '-map 0 -copy_unknown ';
            if (empty($c3a18c26bfa971a25d2e6ada870ff735['stream_info']['custom_map'])) {
                $fd85ae68a4de5cc6cec54942d82e8f80 = $c3a18c26bfa971a25d2e6ada870ff735['stream_info']['custom_map'] . ' -copy_unknown ';
            }
            else if ($c3a18c26bfa971a25d2e6ada870ff735['stream_info']['remove_subtitles'] == 1) {
                $fd85ae68a4de5cc6cec54942d82e8f80 = '-map 0:a -map 0:v';
            }
            //ab37a681ced15fd3155a018a6c2e6d1c:
            
            //goto C001984484eb7a1780f704ac0e17f07b;
            if (!array_key_exists('-acodec', $c3a18c26bfa971a25d2e6ada870ff735['stream_info']['transcode_attributes'])) {
                $c3a18c26bfa971a25d2e6ada870ff735['stream_info']['transcode_attributes']['-acodec'] = 'copy';
            }
            if (!array_key_exists('-vcodec', $c3a18c26bfa971a25d2e6ada870ff735['stream_info']['transcode_attributes'])) {
                $c3a18c26bfa971a25d2e6ada870ff735['stream_info']['transcode_attributes']['-vcodec'] = 'copy';
            }
            $A7c6258649492b26d77c75c60c793409 = array();
            foreach ($c3a18c26bfa971a25d2e6ada870ff735['stream_info']['target_container'] as $E2e6656d8b1675f70c487f89e4f27a3b) {
                $A7c6258649492b26d77c75c60c793409[$E2e6656d8b1675f70c487f89e4f27a3b] = "-movflags +faststart -dn {$fd85ae68a4de5cc6cec54942d82e8f80} -ignore_unknown {$f2130ba0f82d2308b743977b2ba5eaa9} " . MOVIES_PATH . $ba85d77d367dcebfcc2a3db9e83bb581 . '.' . $E2e6656d8b1675f70c487f89e4f27a3b . ' ';
                //a346f1a3f8ef9650581483d29e5eaab0:
            }
            foreach ($A7c6258649492b26d77c75c60c793409 as $bca72c242cf770f855c0eae8936335b7 => $cd7bafd64552e6ca58318f09800cbddd) {
                if (($bca72c242cf770f855c0eae8936335b7 == 'mp4')) { 
                    $c3a18c26bfa971a25d2e6ada870ff735['stream_info']['transcode_attributes']['-scodec'] = 'mov_text';
                } else if ($bca72c242cf770f855c0eae8936335b7 == 'mkv') {
                    $c3a18c26bfa971a25d2e6ada870ff735['stream_info']['transcode_attributes']['-scodec'] = 'srt';
                } else {
                    //dbac771c7bb31b3cafe5bd4906c9b6b4:
                    $c3a18c26bfa971a25d2e6ada870ff735['stream_info']['transcode_attributes']['-scodec'] = 'copy';
                    //goto b846d8cb5c86b6cf1d81683bcfa1c327;
                }
                $af428179032a83d9ec1df565934b1c89 .= implode(' ', self::F6664c80BDe3e9bbe2c12CEb906D5A11($c3a18c26bfa971a25d2e6ada870ff735['stream_info']['transcode_attributes'])) . ' ';
                $af428179032a83d9ec1df565934b1c89 .= $cd7bafd64552e6ca58318f09800cbddd;
            }
            
            $af428179032a83d9ec1df565934b1c89 .= ' >/dev/null 2>' . MOVIES_PATH . $ba85d77d367dcebfcc2a3db9e83bb581 . '.errors & echo $! > ' . MOVIES_PATH . $ba85d77d367dcebfcc2a3db9e83bb581 . '_.pid';
            $af428179032a83d9ec1df565934b1c89 = str_replace(array('{FETCH_OPTIONS}', '{STREAM_SOURCE}', '{READ_NATIVE}'), array(empty($be9f906faa527985765b1d8c897fb13a) ? '' : $be9f906faa527985765b1d8c897fb13a, $ed147a39fb35be93248b6f1c206a8023, empty($c3a18c26bfa971a25d2e6ada870ff735['stream_info']['custom_ffmpeg']) ? $feb3f2070e6ccf961f6265281e875b1a : ''), $af428179032a83d9ec1df565934b1c89);
            //ad99fe107711832dc41ace2638e12a08:
            $af428179032a83d9ec1df565934b1c89 = "ln -s \"{$ed147a39fb35be93248b6f1c206a8023}\" " . MOVIES_PATH . $ba85d77d367dcebfcc2a3db9e83bb581 . '.' . pathinfo($ed147a39fb35be93248b6f1c206a8023, PATHINFO_EXTENSION) . ' >/dev/null 2>/dev/null & echo $! > ' . MOVIES_PATH . $ba85d77d367dcebfcc2a3db9e83bb581 . '_.pid';
            //b51196ced3db1f3201f17e394565a638:
            shell_exec($af428179032a83d9ec1df565934b1c89);
            file_put_contents('/tmp/commands', $af428179032a83d9ec1df565934b1c89 . '
', FILE_APPEND);
            $Bc7d327b1510891329ca9859db27320f = intval(file_get_contents(MOVIES_PATH . $ba85d77d367dcebfcc2a3db9e83bb581 . '_.pid'));
            self::$ipTV_db->query('UPDATE `streams_sys` SET `to_analyze` = 1,`stream_started` = \'%d\',`stream_status` = 0,`pid` = \'%d\' WHERE `stream_id` = \'%d\' AND `server_id` = \'%d\'', time(), $Bc7d327b1510891329ca9859db27320f, $ba85d77d367dcebfcc2a3db9e83bb581, SERVER_ID);
            return $Bc7d327b1510891329ca9859db27320f;
            }
        
    }
    static function CEBeee6A9C20e0da24C41A0247cf1244($ba85d77d367dcebfcc2a3db9e83bb581, &$bb1b9dfc97454460e165348212675779, $B71703fbd9f237149967f9ac3c41dc19 = null)
    {
        ++$bb1b9dfc97454460e165348212675779;
        if (file_exists(STREAMS_PATH . $ba85d77d367dcebfcc2a3db9e83bb581 . '_.pid')) {
            unlink(STREAMS_PATH . $ba85d77d367dcebfcc2a3db9e83bb581 . '_.pid');
        }
        $c3a18c26bfa971a25d2e6ada870ff735 = array();
        self::$ipTV_db->query('SELECT * FROM `streams` t1 
                               INNER JOIN `streams_types` t2 ON t2.type_id = t1.type AND t2.live = 1
                               LEFT JOIN `transcoding_profiles` t4 ON t1.transcode_profile_id = t4.profile_id 
                               WHERE t1.direct_source = 0 AND t1.id = \'%d\'', $ba85d77d367dcebfcc2a3db9e83bb581);
        if (self::$ipTV_db->d1E5CE3b87bB868B9E6EFd39Aa355A4f() <= 0) {
            return false;
        }
        $c3a18c26bfa971a25d2e6ada870ff735['stream_info'] = self::$ipTV_db->F1ED191D78470660EDFF4A007696BC1f();
        self::$ipTV_db->query('SELECT * FROM `streams_sys` WHERE stream_id  = \'%d\' AND `server_id` = \'%d\'', $ba85d77d367dcebfcc2a3db9e83bb581, SERVER_ID);
        if (self::$ipTV_db->d1e5Ce3B87Bb868b9E6efd39aA355a4f() <= 0) {
            return false;
        }
        $c3a18c26bfa971a25d2e6ada870ff735['server_info'] = self::$ipTV_db->f1ed191D78470660eDFf4a007696bC1f();
        self::$ipTV_db->query('SELECT t1.*, t2.* FROM `streams_options` t1, `streams_arguments` t2 WHERE t1.stream_id = \'%d\' AND t1.argument_id = t2.id', $ba85d77d367dcebfcc2a3db9e83bb581);
        $c3a18c26bfa971a25d2e6ada870ff735['stream_arguments'] = self::$ipTV_db->c126FD559932f625cdf6098d86C63880();
        if ($c3a18c26bfa971a25d2e6ada870ff735['server_info']['on_demand'] == 1) {
            $E1be7e0ba659254273dc1475ae9679e0 = $c3a18c26bfa971a25d2e6ada870ff735['stream_info']['probesize_ondemand'];
            $C359d5e5ab36c7a88fca0754166e7996 = '10000000';
        } else {
            $C359d5e5ab36c7a88fca0754166e7996 = abs(intval(A78bf8D35765Be2408C50712Ce7A43AD::$settings['stream_max_analyze']));
            $E1be7e0ba659254273dc1475ae9679e0 = abs(intval(A78bf8D35765Be2408c50712cE7A43ad::$settings['probesize']));
        }
        $d1c5b35a94aa4152ee37c6cfedfb2ec3 = intval($C359d5e5ab36c7a88fca0754166e7996 / 1000000) + 7;
        $Fa28e3498375fc4da68f3f818d774249 = "/usr/bin/timeout {$d1c5b35a94aa4152ee37c6cfedfb2ec3}s " . FFPROBE_PATH . " {FETCH_OPTIONS} -probesize {$E1be7e0ba659254273dc1475ae9679e0} -analyzeduration {$C359d5e5ab36c7a88fca0754166e7996} {CONCAT} -i \"{STREAM_SOURCE}\" -v quiet -print_format json -show_streams -show_format";
        $be9f906faa527985765b1d8c897fb13a = array();
        if ($c3a18c26bfa971a25d2e6ada870ff735['server_info']['parent_id'] == 0) {
            $A733a5416ffab6ff47547550f3f9f641 = $c3a18c26bfa971a25d2e6ada870ff735['stream_info']['type_key'] == 'created_live' ? array(CREATED_CHANNELS . $ba85d77d367dcebfcc2a3db9e83bb581 . '_.list') : json_decode($c3a18c26bfa971a25d2e6ada870ff735['stream_info']['stream_source'], true);
        } else {
            $A733a5416ffab6ff47547550f3f9f641 = array(A78bF8d35765be2408C50712ce7A43aD::$StreamingServers[$c3a18c26bfa971a25d2e6ada870ff735['server_info']['parent_id']]['site_url_ip'] . 'streaming/admin_live.php?stream=' . $ba85d77d367dcebfcc2a3db9e83bb581 . '&password=' . A78Bf8d35765BE2408c50712Ce7a43Ad::$settings['live_streaming_pass'] . '&extension=ts');
        }
        if (count($A733a5416ffab6ff47547550f3f9f641) > 0) {
            if (empty($B71703fbd9f237149967f9ac3c41dc19)) {
                if (A78BF8D35765BE2408c50712cE7A43AD::$settings['priority_backup'] != 1) {
                     $A733a5416ffab6ff47547550f3f9f641 = array($B71703fbd9f237149967f9ac3c41dc19);
                }
                else if (!empty($c3a18c26bfa971a25d2e6ada870ff735['server_info']['current_source'])) {
                    $Baee0c34e5755f1cfaa4159ea7e8702e = array_search($c3a18c26bfa971a25d2e6ada870ff735['server_info']['current_source'], $A733a5416ffab6ff47547550f3f9f641);
                    if ($Baee0c34e5755f1cfaa4159ea7e8702e !== false) {
                        $C48e0083a9caa391609a3c645a2ec889 = 0;
                        //B1fcf06a1d6da24af4b5d7d516d25b90:
                        while ($C48e0083a9caa391609a3c645a2ec889 <= $Baee0c34e5755f1cfaa4159ea7e8702e) {
                            $Ad110d626a9e62f0778a8f19383a0613 = $A733a5416ffab6ff47547550f3f9f641[$C48e0083a9caa391609a3c645a2ec889];
                            unset($A733a5416ffab6ff47547550f3f9f641[$C48e0083a9caa391609a3c645a2ec889]);
                            array_push($A733a5416ffab6ff47547550f3f9f641, $Ad110d626a9e62f0778a8f19383a0613);
                            $C48e0083a9caa391609a3c645a2ec889++;
                        }
                        //a4b738a847141a984c3ba7e300b24bc3:
                        $A733a5416ffab6ff47547550f3f9f641 = array_values($A733a5416ffab6ff47547550f3f9f641);
                    }
                }
                //Cc9dcf3a82486cdcbe22b0df03cd3043:
                //goto ac8a864b3489c444d14e1904ec5dfd7e;

                //Addf182f86a94b305381bd0e81174f08:
                $F7b03a1f7467c01c6ea18452d9a5202f = $bb1b9dfc97454460e165348212675779 <= RESTART_TAKE_CACHE ? true : false;
                if (!$F7b03a1f7467c01c6ea18452d9a5202f) {
                    self::Ad09d99ce37614036d5A527595d569D9($A733a5416ffab6ff47547550f3f9f641);
                }
                foreach ($A733a5416ffab6ff47547550f3f9f641 as $F3803fa85b38b65447e6d438f8e9176a) {
                    $B16ceb354351bfb3944291018578c764 = self::ParseStreamURL($F3803fa85b38b65447e6d438f8e9176a);
                    $F53be324c8d9391cc021f5be5dacdfc1 = strtolower(substr($B16ceb354351bfb3944291018578c764, 0, strpos($B16ceb354351bfb3944291018578c764, '://')));
                    $be9f906faa527985765b1d8c897fb13a = implode(' ', self::Ea860c1d3851C46D06E64911E3602768($c3a18c26bfa971a25d2e6ada870ff735['stream_arguments'], $F53be324c8d9391cc021f5be5dacdfc1, 'fetch'));
                    if ($F7b03a1f7467c01c6ea18452d9a5202f && file_exists(STREAMS_PATH . md5($B16ceb354351bfb3944291018578c764))) {
                        $e49460014c491accfafaa768ea84cd9c = json_decode(file_get_contents(STREAMS_PATH . md5($B16ceb354351bfb3944291018578c764)), true);
                        break;
                    }
                    $e49460014c491accfafaa768ea84cd9c = json_decode(shell_exec(str_replace(array('{FETCH_OPTIONS}', '{CONCAT}', '{STREAM_SOURCE}'), array($be9f906faa527985765b1d8c897fb13a, $c3a18c26bfa971a25d2e6ada870ff735['stream_info']['type_key'] == 'created_live' && $c3a18c26bfa971a25d2e6ada870ff735['server_info']['parent_id'] == 0 ? '-safe 0 -f concat' : '', $B16ceb354351bfb3944291018578c764), $Fa28e3498375fc4da68f3f818d774249)), true);
                    if (!empty($e49460014c491accfafaa768ea84cd9c)) {
                        break;
                    }
                }
                if (empty($e49460014c491accfafaa768ea84cd9c)) {
                    if ($c3a18c26bfa971a25d2e6ada870ff735['server_info']['stream_status'] == 0 || $c3a18c26bfa971a25d2e6ada870ff735['server_info']['to_analyze'] == 1 || $c3a18c26bfa971a25d2e6ada870ff735['server_info']['pid'] != -1) {
                        self::$ipTV_db->query('UPDATE `streams_sys` SET `progress_info` = \'\',`to_analyze` = 0,`pid` = -1,`stream_status` = 1 WHERE `server_id` = \'%d\' AND `stream_id` = \'%d\'', SERVER_ID, $ba85d77d367dcebfcc2a3db9e83bb581);
                    }
                    return 0;
                }
                if (!$F7b03a1f7467c01c6ea18452d9a5202f) {
                    file_put_contents(STREAMS_PATH . md5($B16ceb354351bfb3944291018578c764), json_encode($e49460014c491accfafaa768ea84cd9c));
                }
                $e49460014c491accfafaa768ea84cd9c = self::Ccbd051c8A19a02dC5B6db256Ae31C07($e49460014c491accfafaa768ea84cd9c);
                $Ee11a0d09ece7de916fbc0b2ca0136a3 = json_decode($c3a18c26bfa971a25d2e6ada870ff735['stream_info']['external_push'], true);
                $e1dc30615033011f7166d1950e7036ee = 'http://127.0.0.1:' . A78BF8d35765BE2408c50712Ce7a43AD::$StreamingServers[SERVER_ID]['http_broadcast_port'] . "/progress.php?stream_id={$ba85d77d367dcebfcc2a3db9e83bb581}";
                if (empty($c3a18c26bfa971a25d2e6ada870ff735['stream_info']['custom_ffmpeg'])) {
                    $af428179032a83d9ec1df565934b1c89 = FFMPEG_PATH . " -y -nostdin -hide_banner -loglevel warning -err_detect ignore_err {FETCH_OPTIONS} {GEN_PTS} {READ_NATIVE} -probesize {$E1be7e0ba659254273dc1475ae9679e0} -analyzeduration {$C359d5e5ab36c7a88fca0754166e7996} -progress \"{$e1dc30615033011f7166d1950e7036ee}\" {CONCAT} -i \"{STREAM_SOURCE}\" ";
                    if (($c3a18c26bfa971a25d2e6ada870ff735['stream_info']['stream_all'] == 1)) {
                        $fd85ae68a4de5cc6cec54942d82e8f80 = '-map 0 -copy_unknown ';
                    }
                    else if (empty($c3a18c26bfa971a25d2e6ada870ff735['stream_info']['custom_map'])) {
                        $fd85ae68a4de5cc6cec54942d82e8f80 = $c3a18c26bfa971a25d2e6ada870ff735['stream_info']['custom_map'] . ' -copy_unknown ';
                    }
                    if ($c3a18c26bfa971a25d2e6ada870ff735['stream_info']['type_key'] == 'radio_streams') {
                        $fd85ae68a4de5cc6cec54942d82e8f80 = '-map 0:a? ';
                    } else {
                        $fd85ae68a4de5cc6cec54942d82e8f80 = '';
                        //a3b24b9d2c6ec66fd6278ba77698c80f:
                        
                        //goto F7052b7340617388b1314ad99c08b3b6;
                        //Dc744fb7e990d5b473a8aa9a3c2427cb:
                        
                        //goto F7052b7340617388b1314ad99c08b3b6;
                    }
                    
                    if (($c3a18c26bfa971a25d2e6ada870ff735['stream_info']['gen_timestamps'] == 1 || empty($F53be324c8d9391cc021f5be5dacdfc1)) && $c3a18c26bfa971a25d2e6ada870ff735['stream_info']['type_key'] != 'created_live') {
                        $e9652f3db39531a69b91900690d5d064 = '-fflags +genpts -async 1';
                    } else {
                        $e9652f3db39531a69b91900690d5d064 = '-nofix_dts -start_at_zero -copyts -vsync 0 -correct_ts_overflow 0 -avoid_negative_ts disabled -max_interleave_delta 0';
                    }
                    $feb3f2070e6ccf961f6265281e875b1a = '';
                    if ($c3a18c26bfa971a25d2e6ada870ff735['server_info']['parent_id'] == 0 && ($c3a18c26bfa971a25d2e6ada870ff735['stream_info']['read_native'] == 1 or stristr($e49460014c491accfafaa768ea84cd9c['container'], 'hls') or empty($F53be324c8d9391cc021f5be5dacdfc1) or stristr($e49460014c491accfafaa768ea84cd9c['container'], 'mp4') or stristr($e49460014c491accfafaa768ea84cd9c['container'], 'matroska'))) {
                        $feb3f2070e6ccf961f6265281e875b1a = '-re';
                    }
                    if ($c3a18c26bfa971a25d2e6ada870ff735['server_info']['parent_id'] == 0 and $c3a18c26bfa971a25d2e6ada870ff735['stream_info']['enable_transcode'] == 1 and $c3a18c26bfa971a25d2e6ada870ff735['stream_info']['type_key'] != 'created_live') {
                        if ($c3a18c26bfa971a25d2e6ada870ff735['stream_info']['transcode_profile_id'] == -1) {
                            $c3a18c26bfa971a25d2e6ada870ff735['stream_info']['transcode_attributes'] = array_merge(self::EA860c1D3851c46d06E64911E3602768($c3a18c26bfa971a25d2e6ada870ff735['stream_arguments'], $F53be324c8d9391cc021f5be5dacdfc1, 'transcode'), json_decode($c3a18c26bfa971a25d2e6ada870ff735['stream_info']['transcode_attributes'], true));
                        } else {
                            $c3a18c26bfa971a25d2e6ada870ff735['stream_info']['transcode_attributes'] = json_decode($c3a18c26bfa971a25d2e6ada870ff735['stream_info']['profile_options'], true);
                        }
                    } else {
                        $c3a18c26bfa971a25d2e6ada870ff735['stream_info']['transcode_attributes'] = array();
                    }
                    if (!array_key_exists('-acodec', $c3a18c26bfa971a25d2e6ada870ff735['stream_info']['transcode_attributes'])) {
                        $c3a18c26bfa971a25d2e6ada870ff735['stream_info']['transcode_attributes']['-acodec'] = 'copy';
                    }
                    if (!array_key_exists('-vcodec', $c3a18c26bfa971a25d2e6ada870ff735['stream_info']['transcode_attributes'])) {
                        $c3a18c26bfa971a25d2e6ada870ff735['stream_info']['transcode_attributes']['-vcodec'] = 'copy';
                    }
                    if (!array_key_exists('-scodec', $c3a18c26bfa971a25d2e6ada870ff735['stream_info']['transcode_attributes'])) {
                        $c3a18c26bfa971a25d2e6ada870ff735['stream_info']['transcode_attributes']['-scodec'] = 'copy';
                    }
                    //f38db3d39bb5dbf7da7a81bff51d7b2d:
                    $A7c6258649492b26d77c75c60c793409 = array();
                    $A7c6258649492b26d77c75c60c793409['mpegts'][] = '{MAP} -individual_header_trailer 0 -f segment -segment_format mpegts -segment_time ' . a78BF8d35765BE2408c50712CE7a43ad::$SegmentsSettings['seg_time'] . ' -segment_list_size ' . A78bf8D35765bE2408C50712ce7a43ad::$SegmentsSettings['seg_list_size'] . ' -segment_format_options "mpegts_flags=+initial_discontinuity:mpegts_copyts=1" -segment_list_type m3u8 -segment_list_flags +live+delete -segment_list "' . STREAMS_PATH . $ba85d77d367dcebfcc2a3db9e83bb581 . '_.m3u8" "' . STREAMS_PATH . $ba85d77d367dcebfcc2a3db9e83bb581 . '_%d.ts" ';
                    if ($c3a18c26bfa971a25d2e6ada870ff735['stream_info']['rtmp_output'] == 1) {
                        $A7c6258649492b26d77c75c60c793409['flv'][] = '{MAP} {AAC_FILTER} -f flv rtmp://127.0.0.1:' . a78bf8d35765be2408c50712CE7a43aD::$StreamingServers[$c3a18c26bfa971a25d2e6ada870ff735['server_info']['server_id']]['rtmp_port'] . "/live/{$ba85d77d367dcebfcc2a3db9e83bb581} ";
                    }
                    if (!empty($Ee11a0d09ece7de916fbc0b2ca0136a3[SERVER_ID])) {
                        foreach ($Ee11a0d09ece7de916fbc0b2ca0136a3[SERVER_ID] as $b202bc9c1c41da94906c398ceb9f3573) {
                            $A7c6258649492b26d77c75c60c793409['flv'][] = "{MAP} {AAC_FILTER} -f flv \"{$b202bc9c1c41da94906c398ceb9f3573}\" ";
                            //Ee0e2900c8be326931f488fb9c274dea:
                        }
                    }
                    $f32785b2a16d0d92cda0b44ed436f505 = 0;
                    if (!($c3a18c26bfa971a25d2e6ada870ff735['stream_info']['delay_minutes'] > 0 && $c3a18c26bfa971a25d2e6ada870ff735['server_info']['parent_id'] == 0)) {
                        foreach ($A7c6258649492b26d77c75c60c793409 as $bca72c242cf770f855c0eae8936335b7 => $f72c3a34155eca511d79ca3671e1063f) {
                            foreach ($f72c3a34155eca511d79ca3671e1063f as $cd7bafd64552e6ca58318f09800cbddd) {
                                $af428179032a83d9ec1df565934b1c89 .= implode(' ', self::f6664c80bde3e9BBe2c12ceb906d5a11($c3a18c26bfa971a25d2e6ada870ff735['stream_info']['transcode_attributes'])) . ' ';
                                $af428179032a83d9ec1df565934b1c89 .= $cd7bafd64552e6ca58318f09800cbddd;
                            }
                        }
                    } else {
                        $ccac9556cf5f7f83df650c022d673042 = 0;
                        if (file_exists(DELAY_STREAM . $ba85d77d367dcebfcc2a3db9e83bb581 . '_.m3u8')) {
                            $Ca434bcc380e9dbd2a3a588f6c32d84f = file(DELAY_STREAM . $ba85d77d367dcebfcc2a3db9e83bb581 . '_.m3u8');
                            if (stristr($Ca434bcc380e9dbd2a3a588f6c32d84f[count($Ca434bcc380e9dbd2a3a588f6c32d84f) - 1], $ba85d77d367dcebfcc2a3db9e83bb581 . '_')) {
                                if (preg_match('/\\_(.*?)\\.ts/', $Ca434bcc380e9dbd2a3a588f6c32d84f[count($Ca434bcc380e9dbd2a3a588f6c32d84f) - 1], $ae37877cee3bc97c8cfa6ec5843993ed)) {
                                    $ccac9556cf5f7f83df650c022d673042 = intval($ae37877cee3bc97c8cfa6ec5843993ed[1]) + 1;
                                }
                            } else {
                                if (preg_match('/\\_(.*?)\\.ts/', $Ca434bcc380e9dbd2a3a588f6c32d84f[count($Ca434bcc380e9dbd2a3a588f6c32d84f) - 2], $ae37877cee3bc97c8cfa6ec5843993ed)) {
                                    $ccac9556cf5f7f83df650c022d673042 = intval($ae37877cee3bc97c8cfa6ec5843993ed[1]) + 1;
                                }
                            }
                            if (file_exists(DELAY_STREAM . $ba85d77d367dcebfcc2a3db9e83bb581 . '_.m3u8_old')) {
                                file_put_contents(DELAY_STREAM . $ba85d77d367dcebfcc2a3db9e83bb581 . '_.m3u8_old', file_get_contents(DELAY_STREAM . $ba85d77d367dcebfcc2a3db9e83bb581 . '_.m3u8_old') . file_get_contents(DELAY_STREAM . $ba85d77d367dcebfcc2a3db9e83bb581 . '_.m3u8'));
                                shell_exec('sed -i \'/EXTINF\\|.ts/!d\' ' . DELAY_STREAM . $ba85d77d367dcebfcc2a3db9e83bb581 . '_.m3u8_old');
                            } else {
                                copy(DELAY_STREAM . $ba85d77d367dcebfcc2a3db9e83bb581 . '_.m3u8', DELAY_STREAM . $ba85d77d367dcebfcc2a3db9e83bb581 . '_.m3u8_old');
                            }
                        }
                        $af428179032a83d9ec1df565934b1c89 .= implode(' ', self::f6664C80BDe3E9bbe2c12ceB906D5A11($c3a18c26bfa971a25d2e6ada870ff735['stream_info']['transcode_attributes'])) . ' ';
                        $af428179032a83d9ec1df565934b1c89 .= '{MAP} -individual_header_trailer 0 -f segment -segment_format mpegts -segment_time ' . A78bF8D35765bE2408c50712cE7a43Ad::$SegmentsSettings['seg_time'] . ' -segment_list_size ' . $c3a18c26bfa971a25d2e6ada870ff735['stream_info']['delay_minutes'] * 6 . " -segment_start_number {$ccac9556cf5f7f83df650c022d673042} -segment_format_options \"mpegts_flags=+initial_discontinuity:mpegts_copyts=1\" -segment_list_type m3u8 -segment_list_flags +live+delete -segment_list \"" . DELAY_STREAM . $ba85d77d367dcebfcc2a3db9e83bb581 . '_.m3u8" "' . DELAY_STREAM . $ba85d77d367dcebfcc2a3db9e83bb581 . '_%d.ts" ';
                        $Dedb93a1e8822879d8790c1f2fc7d6f1 = $c3a18c26bfa971a25d2e6ada870ff735['stream_info']['delay_minutes'] * 60;
                        if ($ccac9556cf5f7f83df650c022d673042 > 0) {
                            $Dedb93a1e8822879d8790c1f2fc7d6f1 -= ($ccac9556cf5f7f83df650c022d673042 - 1) * 10;
                            if ($Dedb93a1e8822879d8790c1f2fc7d6f1 <= 0) {
                                $Dedb93a1e8822879d8790c1f2fc7d6f1 = 0;
                            }
                        }
                    }
                    $af428179032a83d9ec1df565934b1c89 .= ' >/dev/null 2>>' . STREAMS_PATH . $ba85d77d367dcebfcc2a3db9e83bb581 . '.errors & echo $! > ' . STREAMS_PATH . $ba85d77d367dcebfcc2a3db9e83bb581 . '_.pid';
                    $af428179032a83d9ec1df565934b1c89 = str_replace(array('{INPUT}', '{FETCH_OPTIONS}', '{GEN_PTS}', '{STREAM_SOURCE}', '{MAP}', '{READ_NATIVE}', '{CONCAT}', '{AAC_FILTER}'), array("\"{$B16ceb354351bfb3944291018578c764}\"", empty($c3a18c26bfa971a25d2e6ada870ff735['stream_info']['custom_ffmpeg']) ? $be9f906faa527985765b1d8c897fb13a : '', empty($c3a18c26bfa971a25d2e6ada870ff735['stream_info']['custom_ffmpeg']) ? $e9652f3db39531a69b91900690d5d064 : '', $B16ceb354351bfb3944291018578c764, empty($c3a18c26bfa971a25d2e6ada870ff735['stream_info']['custom_ffmpeg']) ? $fd85ae68a4de5cc6cec54942d82e8f80 : '', empty($c3a18c26bfa971a25d2e6ada870ff735['stream_info']['custom_ffmpeg']) ? $feb3f2070e6ccf961f6265281e875b1a : '', $c3a18c26bfa971a25d2e6ada870ff735['stream_info']['type_key'] == 'created_live' && $c3a18c26bfa971a25d2e6ada870ff735['server_info']['parent_id'] == 0 ? '-safe 0 -f concat' : '', !stristr($e49460014c491accfafaa768ea84cd9c['container'], 'flv') && $e49460014c491accfafaa768ea84cd9c['codecs']['audio']['codec_name'] == 'aac' && $c3a18c26bfa971a25d2e6ada870ff735['stream_info']['transcode_attributes']['-acodec'] == 'copy' ? '-bsf:a aac_adtstoasc' : ''), $af428179032a83d9ec1df565934b1c89);
                    shell_exec($af428179032a83d9ec1df565934b1c89);
                    $Bc7d327b1510891329ca9859db27320f = $D90a38f0f1d7f1bcd1b2eee088e76aca = intval(file_get_contents(STREAMS_PATH . $ba85d77d367dcebfcc2a3db9e83bb581 . '_.pid'));
                    if (SERVER_ID == $c3a18c26bfa971a25d2e6ada870ff735['stream_info']['tv_archive_server_id']) {
                        shell_exec(PHP_BIN . ' ' . TOOLS_PATH . 'archive.php ' . $ba85d77d367dcebfcc2a3db9e83bb581 . ' >/dev/null 2>/dev/null & echo $!');
                    }
                    $Dac1208baefb5d684938829a3a0e0bc6 = $c3a18c26bfa971a25d2e6ada870ff735['stream_info']['delay_minutes'] > 0 && $c3a18c26bfa971a25d2e6ada870ff735['server_info']['parent_id'] == 0 ? true : false;
                    $f32785b2a16d0d92cda0b44ed436f505 = $Dac1208baefb5d684938829a3a0e0bc6 ? time() + $Dedb93a1e8822879d8790c1f2fc7d6f1 : 0;
                    self::$ipTV_db->query('UPDATE `streams_sys` SET `delay_available_at` = \'%d\',`to_analyze` = 0,`stream_started` = \'%d\',`stream_info` = \'%s\',`stream_status` = 0,`pid` = \'%d\',`progress_info` = \'%s\',`current_source` = \'%s\' WHERE `stream_id` = \'%d\' AND `server_id` = \'%d\'', $f32785b2a16d0d92cda0b44ed436f505, time(), json_encode($e49460014c491accfafaa768ea84cd9c), $Bc7d327b1510891329ca9859db27320f, json_encode(array()), $F3803fa85b38b65447e6d438f8e9176a, $ba85d77d367dcebfcc2a3db9e83bb581, SERVER_ID);
                    $Bb37b848bec813a5c13ea0b018962c40 = !$Dac1208baefb5d684938829a3a0e0bc6 ? STREAMS_PATH . $ba85d77d367dcebfcc2a3db9e83bb581 . '_.m3u8' : DELAY_STREAM . $ba85d77d367dcebfcc2a3db9e83bb581 . '_.m3u8';
                    return array('main_pid' => $Bc7d327b1510891329ca9859db27320f, 'stream_source' => $B16ceb354351bfb3944291018578c764, 'delay_enabled' => $Dac1208baefb5d684938829a3a0e0bc6, 'parent_id' => $c3a18c26bfa971a25d2e6ada870ff735['server_info']['parent_id'], 'delay_start_at' => $f32785b2a16d0d92cda0b44ed436f505, 'playlist' => $Bb37b848bec813a5c13ea0b018962c40);
                
                    
                } else {
                    $c3a18c26bfa971a25d2e6ada870ff735['stream_info']['transcode_attributes'] = array();
                    $af428179032a83d9ec1df565934b1c89 = FFMPEG_PATH . " -y -nostdin -hide_banner -loglevel quiet {$d1006c7cc041221972025137b5112b7d} -progress \"{$e1dc30615033011f7166d1950e7036ee}\" " . $c3a18c26bfa971a25d2e6ada870ff735['stream_info']['custom_ffmpeg'];
                }
            }
        }
    }
    public static function customOrder($D099d64305e0e1b9f20300f1ef51f8a7, $E28f7a505c062145e6df747991c0a2d3)
    {
        if (substr($D099d64305e0e1b9f20300f1ef51f8a7, 0, 3) == '-i ') {
            return -1;
        }
        return 1;
    }
    public static function EA860c1D3851C46d06E64911E3602768($c31311861794ebdea68a9eab6a24fd6d, $F53be324c8d9391cc021f5be5dacdfc1, $a28758c1ab974badfc544e11aaf19a57)
    {
        $Eb6e347d24315f277ac38240a6589dd0 = array();
        if (!empty($c31311861794ebdea68a9eab6a24fd6d)) {
            foreach ($c31311861794ebdea68a9eab6a24fd6d as $f091df572e6d2b79881acbf4e5500a7e => $e380987e83a27088358f65f47ff3117f) {
                if ($e380987e83a27088358f65f47ff3117f['argument_cat'] != $a28758c1ab974badfc544e11aaf19a57) {
                    continue;
                }
                if (!is_null($e380987e83a27088358f65f47ff3117f['argument_wprotocol']) && !stristr($F53be324c8d9391cc021f5be5dacdfc1, $e380987e83a27088358f65f47ff3117f['argument_wprotocol']) && !is_null($F53be324c8d9391cc021f5be5dacdfc1)) {
                    continue;
                }
                if ($e380987e83a27088358f65f47ff3117f['argument_type'] == 'text') {
                    $Eb6e347d24315f277ac38240a6589dd0[] = sprintf($e380987e83a27088358f65f47ff3117f['argument_cmd'], $e380987e83a27088358f65f47ff3117f['value']);
                } else {
                    $Eb6e347d24315f277ac38240a6589dd0[] = $e380987e83a27088358f65f47ff3117f['argument_cmd'];
                }
                //e0ffb06cc49d2710bde0e13e6fb02e4c:
            }
        }
        return $Eb6e347d24315f277ac38240a6589dd0;
    }
    public static function F6664c80bdE3E9BBe2C12CeB906D5a11($Bddd92df0619e485304556731bb7ca2f)
    {
        $e80cbed8655f14b141bd53699dbbdc10 = array();
        foreach ($Bddd92df0619e485304556731bb7ca2f as $Baee0c34e5755f1cfaa4159ea7e8702e => $e380987e83a27088358f65f47ff3117f) {
            if (isset($e380987e83a27088358f65f47ff3117f['cmd'])) {
                $Bddd92df0619e485304556731bb7ca2f[$Baee0c34e5755f1cfaa4159ea7e8702e] = $e380987e83a27088358f65f47ff3117f = $e380987e83a27088358f65f47ff3117f['cmd'];
            }
            if (preg_match('/-filter_complex "(.*?)"/', $e380987e83a27088358f65f47ff3117f, $ae37877cee3bc97c8cfa6ec5843993ed)) {
                $Bddd92df0619e485304556731bb7ca2f[$Baee0c34e5755f1cfaa4159ea7e8702e] = trim(str_replace($ae37877cee3bc97c8cfa6ec5843993ed[0], '', $Bddd92df0619e485304556731bb7ca2f[$Baee0c34e5755f1cfaa4159ea7e8702e]));
                $e80cbed8655f14b141bd53699dbbdc10[] = $ae37877cee3bc97c8cfa6ec5843993ed[1];
            }
        }
        if (!empty($e80cbed8655f14b141bd53699dbbdc10)) {
            $Bddd92df0619e485304556731bb7ca2f[] = '-filter_complex "' . implode(',', $e80cbed8655f14b141bd53699dbbdc10) . '"';
        }
        $B54918193a6b3b39c547eb9486c4c2ff = array();
        foreach ($Bddd92df0619e485304556731bb7ca2f as $Baee0c34e5755f1cfaa4159ea7e8702e => $e7ddd0b219bd2e9b7547185c8bccb6a9) {
            if (is_numeric($Baee0c34e5755f1cfaa4159ea7e8702e)) {
                $B54918193a6b3b39c547eb9486c4c2ff[] = $e7ddd0b219bd2e9b7547185c8bccb6a9;
            } else {
                $B54918193a6b3b39c547eb9486c4c2ff[] = $Baee0c34e5755f1cfaa4159ea7e8702e . ' ' . $e7ddd0b219bd2e9b7547185c8bccb6a9;
            }
        }
        $B54918193a6b3b39c547eb9486c4c2ff = array_filter($B54918193a6b3b39c547eb9486c4c2ff);
        uasort($B54918193a6b3b39c547eb9486c4c2ff, array(__CLASS__, 'customOrder'));
        return array_map('trim', array_values(array_filter($B54918193a6b3b39c547eb9486c4c2ff)));
    }
    public static function ParseStreamURL($D849b6918b9e10195509dc8a824f49eb)
    {
        $F53be324c8d9391cc021f5be5dacdfc1 = strtolower(substr($D849b6918b9e10195509dc8a824f49eb, 0, 4));
        if (($F53be324c8d9391cc021f5be5dacdfc1 == 'rtmp')) {
            //C619dc15ff5a81c707d839f9e063654f:
            if (stristr($D849b6918b9e10195509dc8a824f49eb, '$OPT')) {
                $b853b956930a081396b7a6beb8404265 = 'rtmp://$OPT:rtmp-raw=';
                $D849b6918b9e10195509dc8a824f49eb = trim(substr($D849b6918b9e10195509dc8a824f49eb, stripos($D849b6918b9e10195509dc8a824f49eb, $b853b956930a081396b7a6beb8404265) + strlen($b853b956930a081396b7a6beb8404265)));
            }
            $D849b6918b9e10195509dc8a824f49eb .= ' live=1 timeout=10';
            //goto A241a8d3b9b9be4b98784fded18f7b85;
        }
        else if ($F53be324c8d9391cc021f5be5dacdfc1 == 'http') {
            $d412be7a00d131e9be20aca9526c741f = array('youtube.com', 'youtu.be', 'livestream.com', 'ustream.tv', 'twitch.tv', 'vimeo.com', 'facebook.com', 'dailymotion.com', 'cnn.com', 'edition.cnn.com', 'youporn.com', 'pornhub.com', 'youjizz.com', 'xvideos.com', 'redtube.com', 'ruleporn.com', 'pornotube.com', 'skysports.com', 'screencast.com', 'xhamster.com', 'pornhd.com', 'pornktube.com', 'tube8.com', 'vporn.com', 'giniko.com', 'xtube.com');
            $E8cb364637af05312e9ad4e7c0680ce2 = str_ireplace('www.', '', parse_url($D849b6918b9e10195509dc8a824f49eb, PHP_URL_HOST));
            if (in_array($E8cb364637af05312e9ad4e7c0680ce2, $d412be7a00d131e9be20aca9526c741f)) {
                $B13e3f304ca1f14e137f209a5138ea10 = trim(shell_exec(YOUTUBE_PATH . " \"{$D849b6918b9e10195509dc8a824f49eb}\" -q --get-url --skip-download -f best"));
                $D849b6918b9e10195509dc8a824f49eb = explode('
', $B13e3f304ca1f14e137f209a5138ea10)[0];
            }
        }
        return $D849b6918b9e10195509dc8a824f49eb;
    }
}
?>
