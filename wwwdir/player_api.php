<?php
/*Rev:26.09.18r0*/

require 'init.php';
header('Content-Type: application/json');
$f0ac6ad2b40669833242a10c23cad2e0 = true;
$B626d33e939f0dd9b6a026aa3f8c87a3 = $_SERVER['REMOTE_ADDR'];
$D4f195af96a237479546fa1dccf6173a = trim($_SERVER['HTTP_USER_AGENT']);
if (isset($_SERVER['HTTP_ORIGIN'])) {
    header('Access-Control-Allow-Origin: ' . $_SERVER['HTTP_ORIGIN']);
}
header('Access-Control-Allow-Credentials: true');
$Edcf28ccdc0122ea787e348c040427ed = empty(A78bf8d35765be2408c50712Ce7a43AD::$request['params']['offset']) ? 0 : abs(intval(A78Bf8D35765bE2408C50712cE7a43ad::$request['params']['offset']));
$Ffb14fe8aab74bc4aab279b42393475f = empty(A78bf8D35765be2408c50712CE7a43AD::$request['params']['items_per_page']) ? 0 : abs(intval(a78bF8D35765BE2408C50712Ce7A43ad::$request['params']['items_per_page']));
if (!empty(A78bF8d35765BE2408c50712Ce7A43aD::$request['username']) && !empty(A78Bf8D35765be2408C50712ce7A43aD::$request['password'])) {
    ini_set('memory_limit', -1);
    $e4b5e869e986190a8c65320793f9f9c7 = array(200 => 'get_vod_categories', 201 => 'get_live_categories', 202 => 'get_live_streams', 203 => 'get_vod_streams', 204 => 'get_series_info', 205 => 'get_short_epg', 206 => 'get_series_categories', 207 => 'get_simple_data_table', 208 => 'get_series', 209 => 'get_vod_info');
    $f6806488699d3315dc5dc1e27a401b3e = a78bF8D35765bE2408C50712ce7a43aD::$request['username'];
    $A6a4b4fbceaf0ab570c374f4faaa990f = A78bF8d35765be2408c50712cE7A43ad::$request['password'];
    $output = array();
    if ($C2eef5835abdc711ef2e0b2a24dc4e46 = Cd89785224751cCa8017139DAf9E891e::E5550592aA298Dd1D5EE59cDcE063A12(null, $f6806488699d3315dc5dc1e27a401b3e, $A6a4b4fbceaf0ab570c374f4faaa990f, true, true, true, array(), false, '', '', array('offset' => $Edcf28ccdc0122ea787e348c040427ed, 'items_per_page' => $Ffb14fe8aab74bc4aab279b42393475f))) {
        $D3786992403104d27e1032eda43412cb = A78bf8D35765Be2408C50712CE7a43Ad::$settings['mobile_apps'];
        if ($C2eef5835abdc711ef2e0b2a24dc4e46['is_e2'] == 1) {
            if (!empty(a78BF8D35765bE2408C50712cE7a43Ad::$request['token'])) {
                $f566700a43ee8e1f0412fe10fbdf03df->query('SELECT * FROM enigma2_devices WHERE `token` = \'%s\' AND `public_ip` = \'%s\' AND `key_auth` = \'%s\' LIMIT 1', A78Bf8d35765be2408C50712CE7A43ad::$request['token'], $B626d33e939f0dd9b6a026aa3f8c87a3, $D4f195af96a237479546fa1dccf6173a);
                if ($f566700a43ee8e1f0412fe10fbdf03df->d1e5ce3b87bb868B9E6efD39aA355a4F() <= 0) {
                    die;
                }
            } else {
                die;
            }
        }
        $B07dbd32bd4b3504b1aa499feb5ed369 = false;
        if ($C2eef5835abdc711ef2e0b2a24dc4e46['admin_enabled'] == 1 && $C2eef5835abdc711ef2e0b2a24dc4e46['enabled'] == 1 && (is_null($C2eef5835abdc711ef2e0b2a24dc4e46['exp_date']) or $C2eef5835abdc711ef2e0b2a24dc4e46['exp_date'] > time())) {
            $f0ac6ad2b40669833242a10c23cad2e0 = false;
            $B07dbd32bd4b3504b1aa499feb5ed369 = true;
        }
        $b4af8b82d0e004d138b6f62947d7a1fa = !empty(A78BF8d35765BE2408C50712ce7a43Ad::$request['action']) && (in_array(A78Bf8d35765be2408C50712Ce7A43AD::$request['action'], $e4b5e869e986190a8c65320793f9f9c7) || array_key_exists(a78bf8D35765be2408C50712ce7a43aD::$request['action'], $e4b5e869e986190a8c65320793f9f9c7)) && $B07dbd32bd4b3504b1aa499feb5ed369 ? a78BF8D35765BE2408c50712CE7a43AD::$request['action'] : '';
        switch ($b4af8b82d0e004d138b6f62947d7a1fa) {
            case 'get_series_info':
            case 204:
                $acb1d10773fb0d1b6ac8cf2c16ecf1b5 = empty(a78Bf8d35765BE2408C50712ce7a43Ad::$request['series_id']) ? 0 : intval(A78Bf8d35765Be2408C50712Ce7A43aD::$request['series_id']);
                $deff942ee62f1e5c2c16d11aee464729 = A78bf8d35765bE2408c50712cE7A43AD::DCA7AA6Db7C4Ce371E41571A19bCe930();
                if (!empty($deff942ee62f1e5c2c16d11aee464729[$acb1d10773fb0d1b6ac8cf2c16ecf1b5]) && in_array($acb1d10773fb0d1b6ac8cf2c16ecf1b5, $C2eef5835abdc711ef2e0b2a24dc4e46['series_ids'])) {
                    $output['seasons'] = !empty($deff942ee62f1e5c2c16d11aee464729[$acb1d10773fb0d1b6ac8cf2c16ecf1b5]['seasons']) ? array_values(json_decode($deff942ee62f1e5c2c16d11aee464729[$acb1d10773fb0d1b6ac8cf2c16ecf1b5]['seasons'], true)) : array();
                    $output['info'] = array('name' => $deff942ee62f1e5c2c16d11aee464729[$acb1d10773fb0d1b6ac8cf2c16ecf1b5]['title'], 'cover' => $deff942ee62f1e5c2c16d11aee464729[$acb1d10773fb0d1b6ac8cf2c16ecf1b5]['cover'], 'plot' => $deff942ee62f1e5c2c16d11aee464729[$acb1d10773fb0d1b6ac8cf2c16ecf1b5]['plot'], 'cast' => $deff942ee62f1e5c2c16d11aee464729[$acb1d10773fb0d1b6ac8cf2c16ecf1b5]['cast'], 'director' => $deff942ee62f1e5c2c16d11aee464729[$acb1d10773fb0d1b6ac8cf2c16ecf1b5]['director'], 'genre' => $deff942ee62f1e5c2c16d11aee464729[$acb1d10773fb0d1b6ac8cf2c16ecf1b5]['genre'], 'releaseDate' => $deff942ee62f1e5c2c16d11aee464729[$acb1d10773fb0d1b6ac8cf2c16ecf1b5]['releaseDate'], 'last_modified' => $deff942ee62f1e5c2c16d11aee464729[$acb1d10773fb0d1b6ac8cf2c16ecf1b5]['last_modified'], 'rating' => $deff942ee62f1e5c2c16d11aee464729[$acb1d10773fb0d1b6ac8cf2c16ecf1b5]['rating'], 'rating_5based' => number_format($deff942ee62f1e5c2c16d11aee464729[$acb1d10773fb0d1b6ac8cf2c16ecf1b5]['rating'] * 0.5, 1) + 0, 'backdrop_path' => json_decode($deff942ee62f1e5c2c16d11aee464729[$acb1d10773fb0d1b6ac8cf2c16ecf1b5]['backdrop_path'], true), 'youtube_trailer' => $deff942ee62f1e5c2c16d11aee464729[$acb1d10773fb0d1b6ac8cf2c16ecf1b5]['youtube_trailer'], 'episode_run_time' => $deff942ee62f1e5c2c16d11aee464729[$acb1d10773fb0d1b6ac8cf2c16ecf1b5]['episode_run_time'], 'category_id' => !empty($deff942ee62f1e5c2c16d11aee464729[$acb1d10773fb0d1b6ac8cf2c16ecf1b5]['category_id']) ? $deff942ee62f1e5c2c16d11aee464729[$acb1d10773fb0d1b6ac8cf2c16ecf1b5]['category_id'] : null);
                    foreach ($deff942ee62f1e5c2c16d11aee464729[$acb1d10773fb0d1b6ac8cf2c16ecf1b5]['series_data'] as $c0792eb00d656504ed969c0d4d84f7e3 => $E86ff017778d0dc804add84ab1be9052) {
                        $F413fb4a34e3e65ab00d750206ac1bc3 = 1;
                        foreach ($E86ff017778d0dc804add84ab1be9052 as $a14a8f906639aa7f5509518ff935b8f0) {
                            $movie_properties = a78Bf8d35765be2408c50712Ce7A43aD::cAdEb9125B2e81B183688842C5ac3AD7($a14a8f906639aa7f5509518ff935b8f0['stream_id']);
                            $output['episodes'][$c0792eb00d656504ed969c0d4d84f7e3][] = array('id' => $a14a8f906639aa7f5509518ff935b8f0['stream_id'], 'episode_num' => $F413fb4a34e3e65ab00d750206ac1bc3++, 'title' => $a14a8f906639aa7f5509518ff935b8f0['stream_display_name'], 'container_extension' => Dc53aE228dF72D4c140FDa7fD5e7E0bE($a14a8f906639aa7f5509518ff935b8f0['target_container']), 'info' => $movie_properties, 'custom_sid' => $a14a8f906639aa7f5509518ff935b8f0['custom_sid'], 'added' => $a14a8f906639aa7f5509518ff935b8f0['added'], 'season' => $c0792eb00d656504ed969c0d4d84f7e3, 'direct_source' => !empty($a14a8f906639aa7f5509518ff935b8f0['stream_source']) ? json_decode($a14a8f906639aa7f5509518ff935b8f0['stream_source'], true)[0] : '');
                        }
                    }
                }
                break;
            case 'get_series':
            case 208:
                $Fe9028a70727ba5f6b7129f9352b020c = empty(A78BF8d35765Be2408c50712ce7a43ad::$request['category_id']) ? 0 : intval(a78bf8d35765BE2408c50712Ce7a43AD::$request['category_id']);
                $A53459db49b9c062de3f1777e4c87981 = 0;
                if (!empty($C2eef5835abdc711ef2e0b2a24dc4e46['series_ids'])) {
                    $deff942ee62f1e5c2c16d11aee464729 = A78bf8d35765bE2408c50712ce7a43aD::dCA7aa6db7C4Ce371e41571A19bce930();
                    foreach ($deff942ee62f1e5c2c16d11aee464729 as $acb1d10773fb0d1b6ac8cf2c16ecf1b5 => $a62676726d339eb8ed6d6c13795402f9) {
                        if (!in_array($acb1d10773fb0d1b6ac8cf2c16ecf1b5, $C2eef5835abdc711ef2e0b2a24dc4e46['series_ids'])) {
                            continue;
                        }
                        if (!empty($Fe9028a70727ba5f6b7129f9352b020c) && $a62676726d339eb8ed6d6c13795402f9['category_id'] != $Fe9028a70727ba5f6b7129f9352b020c) {
                            continue;
                        }
                        $output[] = array('num' => ++$A53459db49b9c062de3f1777e4c87981, 'name' => $a62676726d339eb8ed6d6c13795402f9['title'], 'series_id' => (int) $a62676726d339eb8ed6d6c13795402f9['id'], 'cover' => $a62676726d339eb8ed6d6c13795402f9['cover'], 'plot' => $a62676726d339eb8ed6d6c13795402f9['plot'], 'cast' => $a62676726d339eb8ed6d6c13795402f9['cast'], 'director' => $a62676726d339eb8ed6d6c13795402f9['director'], 'genre' => $a62676726d339eb8ed6d6c13795402f9['genre'], 'releaseDate' => $a62676726d339eb8ed6d6c13795402f9['releaseDate'], 'last_modified' => $a62676726d339eb8ed6d6c13795402f9['last_modified'], 'rating' => $a62676726d339eb8ed6d6c13795402f9['rating'], 'rating_5based' => number_format($a62676726d339eb8ed6d6c13795402f9['rating'] * 0.5, 1) + 0, 'backdrop_path' => json_decode($a62676726d339eb8ed6d6c13795402f9['backdrop_path'], true), 'youtube_trailer' => $a62676726d339eb8ed6d6c13795402f9['youtube_trailer'], 'episode_run_time' => $a62676726d339eb8ed6d6c13795402f9['episode_run_time'], 'category_id' => !empty($a62676726d339eb8ed6d6c13795402f9['category_id']) ? $a62676726d339eb8ed6d6c13795402f9['category_id'] : null);
                        //e86ad239e7617e97fb21e811e3756ff7:
                    }
                }
                break;
            case 'get_vod_categories':
            case 200:
                $afdd6246d0a110a7f7c2599f764bb8e9 = B303f4B9BCfA8D2Ffc2ae41C5d2Aa387('movie');
                foreach ($afdd6246d0a110a7f7c2599f764bb8e9 as $d623cb8e6629e10f288da34e620b78b9) {
                    if (!Cd89785224751CCA8017139Daf9E891e::bC358DB57d4903BfdDf6652560FAe708($d623cb8e6629e10f288da34e620b78b9['id'], $C2eef5835abdc711ef2e0b2a24dc4e46['bouquet'])) {
                        continue;
                    }
                    $output[] = array('category_id' => $d623cb8e6629e10f288da34e620b78b9['id'], 'category_name' => $d623cb8e6629e10f288da34e620b78b9['category_name'], 'parent_id' => 0);
                    //cc48aa349517f25e6d0523ec57ee0590:
                }
                break;
            case 'get_series_categories':
            case 206:
                $afdd6246d0a110a7f7c2599f764bb8e9 = B303f4B9Bcfa8d2FFc2AE41C5D2aA387('series');
                foreach ($afdd6246d0a110a7f7c2599f764bb8e9 as $d623cb8e6629e10f288da34e620b78b9) {
                    $output[] = array('category_id' => $d623cb8e6629e10f288da34e620b78b9['id'], 'category_name' => $d623cb8e6629e10f288da34e620b78b9['category_name'], 'parent_id' => 0);
                    //eae8f557c49634b874ccca3ec1debbf1:
                }
                break;
            case 'get_live_categories':
            case 201:
                $afdd6246d0a110a7f7c2599f764bb8e9 = b303F4b9Bcfa8d2FFC2Ae41c5D2AA387('live');
                foreach ($afdd6246d0a110a7f7c2599f764bb8e9 as $d623cb8e6629e10f288da34e620b78b9) {
                    if (!Cd89785224751Cca8017139DAf9E891E::Bc358db57d4903bfddF6652560Fae708($d623cb8e6629e10f288da34e620b78b9['id'], $C2eef5835abdc711ef2e0b2a24dc4e46['bouquet'])) {
                        continue;
                    }
                    $output[] = array('category_id' => $d623cb8e6629e10f288da34e620b78b9['id'], 'category_name' => $d623cb8e6629e10f288da34e620b78b9['category_name'], 'parent_id' => 0);
                    //a7bb730f1ea245a9010f69653f9a7e0a:
                }
                break;
            case 'get_simple_data_table':
            case 207:
                $output['epg_listings'] = array();
                if (!empty(a78bf8D35765be2408c50712CE7a43Ad::$request['stream_id'])) {
                    $A7386eca40c08bf499c3668f497f7653 = intval(A78bf8d35765be2408C50712cE7a43aD::$request['stream_id']);
                    $f566700a43ee8e1f0412fe10fbdf03df->query('SELECT `tv_archive_server_id`,`tv_archive_duration`,`channel_id`,`epg_id` FROM `streams` WHERE `id` = \'%d\' AND epg_id IS NOT NULL', $A7386eca40c08bf499c3668f497f7653);
                    if ($f566700a43ee8e1f0412fe10fbdf03df->d1E5CE3B87bb868B9E6EFD39Aa355A4F() > 0) {
                        $Cb52bcec44c66c3338fb465d14935a95 = $f566700a43ee8e1f0412fe10fbdf03df->f1Ed191d78470660EDFf4a007696Bc1f();
                        $f566700a43ee8e1f0412fe10fbdf03df->query('SELECT *,UNIX_TIMESTAMP(start) as start_timestamp,UNIX_TIMESTAMP(end) as stop_timestamp FROM `epg_data` WHERE `epg_id` = \'%d\' AND `channel_id` = \'%s\' ORDER BY `start` ASC', $Cb52bcec44c66c3338fb465d14935a95['epg_id'], $Cb52bcec44c66c3338fb465d14935a95['channel_id']);
                        if ($f566700a43ee8e1f0412fe10fbdf03df->d1E5CE3b87Bb868B9E6eFd39aa355A4F() > 0) {
                            foreach ($f566700a43ee8e1f0412fe10fbdf03df->C126fD559932F625CDF6098D86C63880() as $faca5f1c4c9dec5b739d7a905876b0cd) {
                                $Af72b52dd9e421439dfab285e9497fb5 = 0;
                                $C70062cf7c0eb2a3cb7085217bbb131c = 0;
                                if ($faca5f1c4c9dec5b739d7a905876b0cd['start_timestamp'] <= time() && $faca5f1c4c9dec5b739d7a905876b0cd['stop_timestamp'] >= time()) {
                                    $Af72b52dd9e421439dfab285e9497fb5 = 1;
                                }
                                if (!empty($Cb52bcec44c66c3338fb465d14935a95['tv_archive_duration']) && time() > $faca5f1c4c9dec5b739d7a905876b0cd['stop_timestamp'] && strtotime("-{$Cb52bcec44c66c3338fb465d14935a95['tv_archive_duration']} days") <= $faca5f1c4c9dec5b739d7a905876b0cd['stop_timestamp']) {
                                    $C70062cf7c0eb2a3cb7085217bbb131c = 1;
                                }
                                $faca5f1c4c9dec5b739d7a905876b0cd['now_playing'] = $Af72b52dd9e421439dfab285e9497fb5;
                                $faca5f1c4c9dec5b739d7a905876b0cd['has_archive'] = $C70062cf7c0eb2a3cb7085217bbb131c;
                                $output['epg_listings'][] = $faca5f1c4c9dec5b739d7a905876b0cd;
                            }
                        }
                    }
                }
                break;
            case 'get_short_epg':
            case 205:
                $output['epg_listings'] = array();
                if (!empty(a78Bf8d35765Be2408c50712Ce7a43aD::$request['stream_id'])) {
                    $A7386eca40c08bf499c3668f497f7653 = intval(A78bf8d35765be2408c50712ce7a43ad::$request['stream_id']);
                    $Ffb14fe8aab74bc4aab279b42393475f = empty(a78BF8D35765be2408c50712CE7A43Ad::$request['limit']) ? 4 : intval(A78bF8D35765Be2408c50712ce7A43ad::$request['limit']);
                    $f566700a43ee8e1f0412fe10fbdf03df->query('SELECT `channel_id`,`epg_id` FROM `streams` WHERE `id` = \'%d\' AND epg_id IS NOT NULL', $A7386eca40c08bf499c3668f497f7653);
                    if ($f566700a43ee8e1f0412fe10fbdf03df->D1e5ce3B87BB868b9e6EFD39aa355a4f() > 0) {
                        $faca5f1c4c9dec5b739d7a905876b0cd = $f566700a43ee8e1f0412fe10fbdf03df->F1Ed191d78470660EDff4a007696BC1F();
                        $f566700a43ee8e1f0412fe10fbdf03df->FC53E22AE7ee3bB881cd95fb606914F0("SELECT *,UNIX_TIMESTAMP(start) as start_timestamp, UNIX_TIMESTAMP(end) as stop_timestamp  FROM `epg_data` WHERE `epg_id` = '{$faca5f1c4c9dec5b739d7a905876b0cd['epg_id']}' AND `channel_id` = '{$faca5f1c4c9dec5b739d7a905876b0cd['channel_id']}' AND ('" . date('Y-m-d H:i:00') . '\' BETWEEN `start` AND `end` OR `start` >= \'' . date('Y-m-d H:i:00') . "') ORDER BY `start` LIMIT {$Ffb14fe8aab74bc4aab279b42393475f}");
                        if ($f566700a43ee8e1f0412fe10fbdf03df->d1E5ce3b87Bb868B9e6Efd39AA355a4F() > 0) {
                            $output['epg_listings'] = $f566700a43ee8e1f0412fe10fbdf03df->c126fd559932f625CDf6098d86c63880();
                        }
                    }
                }
                break;
            case 'get_live_streams':
            case 202:
                $Fe9028a70727ba5f6b7129f9352b020c = empty(A78bf8D35765bE2408C50712ce7a43Ad::$request['category_id']) ? 0 : intval(a78BF8d35765be2408c50712Ce7A43ad::$request['category_id']);
                $ffbf5ba007ab5c76700047a4ec5b648e = 0;
                foreach ($C2eef5835abdc711ef2e0b2a24dc4e46['channels'] as $channel) {
                    if ($channel['live'] != 1) {
                        continue;
                    }
                    if (!empty($Fe9028a70727ba5f6b7129f9352b020c) && $channel['category_id'] != $Fe9028a70727ba5f6b7129f9352b020c) {
                        continue;
                    }
                    $f6cb8ff50fa6609892442191828c234b = $channel['stream_icon'];
                    $B9a8ab6cf4c1498733180431a3d477f5 = !empty($channel['tv_archive_server_id']) && !empty($channel['tv_archive_duration']) ? 1 : 0;
                    $output[] = array('num' => ++$ffbf5ba007ab5c76700047a4ec5b648e, 'name' => $channel['stream_display_name'], 'stream_type' => $channel['type_key'], 'stream_id' => (int) $channel['id'], 'stream_icon' => $f6cb8ff50fa6609892442191828c234b, 'epg_channel_id' => $channel['channel_id'], 'added' => $channel['added'], 'category_id' => !empty($channel['category_id']) ? $channel['category_id'] : null, 'custom_sid' => $channel['custom_sid'], 'tv_archive' => $B9a8ab6cf4c1498733180431a3d477f5, 'direct_source' => !empty($channel['stream_source']) ? json_decode($channel['stream_source'], true)[0] : '', 'tv_archive_duration' => $B9a8ab6cf4c1498733180431a3d477f5 ? $channel['tv_archive_duration'] : 0);
                    //E8f474ebb65ec54348db536eaeed50a9:
                }
                break;
            case 'get_vod_info':
            case 209:
                $output['info'] = array();
                if (!empty(a78BF8D35765Be2408C50712cE7A43ad::$request['vod_id'])) {
                    $E3f154d2577bf634396fbfff5a2f8434 = intval(A78bf8d35765BE2408C50712ce7a43ad::$request['vod_id']);
                    if (!empty($C2eef5835abdc711ef2e0b2a24dc4e46['channels'][$E3f154d2577bf634396fbfff5a2f8434])) {
                        $c72d66b481d02f854f0bef67db92a547 = $C2eef5835abdc711ef2e0b2a24dc4e46['channels'][$E3f154d2577bf634396fbfff5a2f8434];
                        $output['info'] = a78bF8d35765be2408c50712ce7A43Ad::CadEB9125B2E81B183688842C5AC3Ad7($E3f154d2577bf634396fbfff5a2f8434);
                        $output['movie_data'] = array('stream_id' => (int) $c72d66b481d02f854f0bef67db92a547['id'], 'name' => $c72d66b481d02f854f0bef67db92a547['stream_display_name'], 'added' => $c72d66b481d02f854f0bef67db92a547['added'], 'category_id' => !empty($c72d66b481d02f854f0bef67db92a547['category_id']) ? $c72d66b481d02f854f0bef67db92a547['category_id'] : null, 'container_extension' => DC53Ae228df72D4C140fda7Fd5e7E0Be($c72d66b481d02f854f0bef67db92a547['target_container']), 'custom_sid' => $c72d66b481d02f854f0bef67db92a547['custom_sid'], 'direct_source' => !empty($c72d66b481d02f854f0bef67db92a547['stream_source']) ? json_decode($c72d66b481d02f854f0bef67db92a547['stream_source'], true)[0] : '');
                    }
                }
                break;
            case 'get_vod_streams':
            case 203:
                $Fe9028a70727ba5f6b7129f9352b020c = empty(a78bf8d35765BE2408C50712ce7a43AD::$request['category_id']) ? 0 : intval(a78BF8d35765bE2408c50712CE7a43ad::$request['category_id']);
                $A53459db49b9c062de3f1777e4c87981 = 0;
                foreach ($C2eef5835abdc711ef2e0b2a24dc4e46['channels'] as $channel) {
                    if ($channel['live'] != 0 || $channel['type_key'] != 'movie') {
                        continue;
                    }
                    if (!empty($Fe9028a70727ba5f6b7129f9352b020c) && $channel['category_id'] != $Fe9028a70727ba5f6b7129f9352b020c) {
                        continue;
                    }
                    $movie_properties = a78Bf8d35765BE2408C50712CE7a43ad::CaDEB9125b2e81b183688842c5Ac3AD7($channel['id']);
                    $output[] = array('num' => ++$A53459db49b9c062de3f1777e4c87981, 'name' => $channel['stream_display_name'], 'stream_type' => $channel['type_key'], 'stream_id' => (int) $channel['id'], 'stream_icon' => $movie_properties['movie_image'], 'rating' => $movie_properties['rating'], 'rating_5based' => number_format($movie_properties['rating'] * 0.5, 1) + 0, 'added' => $channel['added'], 'category_id' => !empty($channel['category_id']) ? $channel['category_id'] : null, 'container_extension' => Dc53Ae228dF72d4C140fdA7fD5e7E0Be($channel['target_container']), 'custom_sid' => $channel['custom_sid'], 'direct_source' => !empty($channel['stream_source']) ? json_decode($channel['stream_source'], true)[0] : '');
                    //fda08156cf8f9416e4e3d8f6df975fe8:
                }
                break;
            default:
                $output['user_info'] = array();
                $e3539ad64f4d9fc6c2e465986c622369 = empty(A78bf8D35765bE2408C50712Ce7a43AD::$StreamingServers[SERVER_ID]['domain_name']) ? A78BF8d35765bE2408C50712ce7A43ad::$StreamingServers[SERVER_ID]['server_ip'] : A78BF8D35765bE2408c50712CE7A43aD::$StreamingServers[SERVER_ID]['domain_name'];
                $output['server_info'] = array('url' => $e3539ad64f4d9fc6c2e465986c622369, 'port' => A78bF8d35765bE2408C50712ce7a43ad::$StreamingServers[SERVER_ID]['http_broadcast_port'], 'https_port' => A78Bf8D35765be2408c50712ce7a43AD::$StreamingServers[SERVER_ID]['https_broadcast_port'], 'server_protocol' => a78bf8D35765Be2408c50712CE7A43Ad::$StreamingServers[SERVER_ID]['server_protocol'], 'rtmp_port' => A78BF8d35765Be2408C50712cE7A43AD::$StreamingServers[SERVER_ID]['rtmp_port'], 'timezone' => a78Bf8d35765Be2408C50712cE7A43Ad::$settings['default_timezone'], 'timestamp_now' => time(), 'time_now' => date('Y-m-d H:i:s'));
                if ($D3786992403104d27e1032eda43412cb == 1) {
                    $output['server_info']['process'] = true;
                }
                $output['user_info']['username'] = $C2eef5835abdc711ef2e0b2a24dc4e46['username'];
                $output['user_info']['password'] = $C2eef5835abdc711ef2e0b2a24dc4e46['password'];
                $output['user_info']['message'] = A78bF8D35765BE2408C50712CE7a43ad::$settings['message_of_day'];
                $output['user_info']['auth'] = 1;
                if (($C2eef5835abdc711ef2e0b2a24dc4e46['admin_enabled'] == 0)) {   
                    $output['user_info']['status'] = 'Active';
                }
                else if (($C2eef5835abdc711ef2e0b2a24dc4e46['enabled'] == 0)) {
                    $output['user_info']['status'] = 'Disabled';  
                }
                if (is_null($C2eef5835abdc711ef2e0b2a24dc4e46['exp_date']) or $C2eef5835abdc711ef2e0b2a24dc4e46['exp_date'] > time()) {
                    $output['user_info']['status'] = 'Expired';
                } else {
                    $output['user_info']['status'] = 'Banned'; 
                    //Aa5927a42f7de3a7f5067e9f5367f680:
                    //goto C990cb8ca4eb2c08f724425da316de5c;
                    //B2a94eefd0d9e3f07bf5d5dde6f8b2a2:
                    //goto C990cb8ca4eb2c08f724425da316de5c;
                }
                $output['user_info']['exp_date'] = $C2eef5835abdc711ef2e0b2a24dc4e46['exp_date'];
                $output['user_info']['is_trial'] = $C2eef5835abdc711ef2e0b2a24dc4e46['is_trial'];
                $output['user_info']['active_cons'] = $C2eef5835abdc711ef2e0b2a24dc4e46['active_cons'];
                $output['user_info']['created_at'] = $C2eef5835abdc711ef2e0b2a24dc4e46['created_at'];
                $output['user_info']['max_connections'] = $C2eef5835abdc711ef2e0b2a24dc4e46['max_connections'];
                $output['user_info']['allowed_output_formats'] = array_keys($C2eef5835abdc711ef2e0b2a24dc4e46['output_formats']);
        }
    } else {
        $output['user_info']['auth'] = 0;
    }
    die(json_encode($output, JSON_PARTIAL_OUTPUT_ON_ERROR));
}
if ($f0ac6ad2b40669833242a10c23cad2e0) {
    D9f93b7c177E377d0BBFE315eAEae505();
}
?>
