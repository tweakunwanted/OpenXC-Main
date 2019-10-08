<?php
/*Rev:26.09.18r0*/

require 'init.php';
ini_set('memory_limit', -1);
$f0ac6ad2b40669833242a10c23cad2e0 = true;
if (!empty(a78BF8d35765bE2408c50712CE7A43ad::$request['username']) && !empty(a78BF8D35765BE2408c50712Ce7A43ad::$request['password'])) {
    $e4b5e869e986190a8c65320793f9f9c7 = array('get_epg');
    $f6806488699d3315dc5dc1e27a401b3e = A78bF8D35765BE2408C50712Ce7A43aD::$request['username'];
    $A6a4b4fbceaf0ab570c374f4faaa990f = a78Bf8d35765be2408c50712Ce7A43ad::$request['password'];
    $b4af8b82d0e004d138b6f62947d7a1fa = !empty(a78BF8d35765be2408C50712Ce7a43Ad::$request['action']) && in_array(A78BF8d35765Be2408C50712ce7A43AD::$request['action'], $e4b5e869e986190a8c65320793f9f9c7) ? A78BF8d35765be2408C50712CE7A43aD::$request['action'] : '';
    $output = array();
    $output['user_info'] = array();
    if ($C2eef5835abdc711ef2e0b2a24dc4e46 = cD89785224751CCA8017139dAF9E891E::E5550592AA298dd1d5Ee59cdce063A12(null, $f6806488699d3315dc5dc1e27a401b3e, $A6a4b4fbceaf0ab570c374f4faaa990f, true, true, true)) {
        $f0ac6ad2b40669833242a10c23cad2e0 = false;
        switch ($b4af8b82d0e004d138b6f62947d7a1fa) {
            case 'get_epg':
                if (!empty(A78bf8d35765BE2408C50712cE7A43AD::$request['stream_id']) && (is_null($C2eef5835abdc711ef2e0b2a24dc4e46['exp_date']) or $C2eef5835abdc711ef2e0b2a24dc4e46['exp_date'] > time())) {
                    $ba85d77d367dcebfcc2a3db9e83bb581 = intval(A78bF8d35765BE2408c50712Ce7A43AD::$request['stream_id']);
                    $ea6531b28219f4f71cfd02aec23a0f33 = !empty(A78bf8d35765bE2408C50712CE7a43ad::$request['from_now']) && A78Bf8d35765bE2408C50712cE7A43AD::$request['from_now'] > 0 ? true : false;
                    $Ebcbee307f9edf43bc23a9acc461bcd6 = B66daC37E77d0b4B60e2De1E5e4fa184($ba85d77d367dcebfcc2a3db9e83bb581, $ea6531b28219f4f71cfd02aec23a0f33);
                    $C48e0083a9caa391609a3c645a2ec889 = 0;
                    while ($C48e0083a9caa391609a3c645a2ec889 < count($Ebcbee307f9edf43bc23a9acc461bcd6)) {
                        if (!isset($Ebcbee307f9edf43bc23a9acc461bcd6[$C48e0083a9caa391609a3c645a2ec889]['start'])) {
                            break;
                        }
                        $Ebcbee307f9edf43bc23a9acc461bcd6[$C48e0083a9caa391609a3c645a2ec889]['start'] = strtotime($Ebcbee307f9edf43bc23a9acc461bcd6[$C48e0083a9caa391609a3c645a2ec889]['start']);
                        $Ebcbee307f9edf43bc23a9acc461bcd6[$C48e0083a9caa391609a3c645a2ec889]['end'] = strtotime($Ebcbee307f9edf43bc23a9acc461bcd6[$C48e0083a9caa391609a3c645a2ec889]['end']);
                        $C48e0083a9caa391609a3c645a2ec889++;
                    }
                    echo json_encode($Ebcbee307f9edf43bc23a9acc461bcd6);
                    die;
                } else {
                    echo json_encode(array());
                    die;
                }
                break;
            default:
                $afdd6246d0a110a7f7c2599f764bb8e9 = B303F4b9BcFa8D2fFc2aE41c5d2AA387();
                $e3539ad64f4d9fc6c2e465986c622369 = empty(A78bF8d35765be2408c50712ce7A43Ad::$StreamingServers[SERVER_ID]['domain_name']) ? a78BF8d35765BE2408c50712Ce7A43ad::$StreamingServers[SERVER_ID]['server_ip'] : a78BF8d35765bE2408C50712cE7A43AD::$StreamingServers[SERVER_ID]['domain_name'];
                $output['server_info'] = array('url' => $e3539ad64f4d9fc6c2e465986c622369, 'port' => a78bF8D35765BE2408c50712CE7a43ad::$StreamingServers[SERVER_ID]['http_broadcast_port'], 'https_port' => a78Bf8d35765BE2408C50712Ce7a43Ad::$StreamingServers[SERVER_ID]['https_broadcast_port'], 'server_protocol' => a78Bf8d35765bE2408C50712ce7A43Ad::$StreamingServers[SERVER_ID]['server_protocol']);
                $output['user_info']['username'] = $C2eef5835abdc711ef2e0b2a24dc4e46['username'];
                $output['user_info']['password'] = $C2eef5835abdc711ef2e0b2a24dc4e46['password'];
                $output['user_info']['auth'] = 1;
                if (($C2eef5835abdc711ef2e0b2a24dc4e46['admin_enabled'] == 0)) {
                     $output['user_info']['status'] = 'Active';
                }
                else if (($C2eef5835abdc711ef2e0b2a24dc4e46['enabled'] == 0)) {
                    $output['user_info']['status'] = 'Disabled';
                }
                else if (is_null($C2eef5835abdc711ef2e0b2a24dc4e46['exp_date']) or $C2eef5835abdc711ef2e0b2a24dc4e46['exp_date'] > time()) {
                      $output['user_info']['status'] = 'Expired';
                } else {
                    //Ceacd43cd89a93754b1ff31f6dce16bb:
                    $output['user_info']['status'] = 'Banned';
                    //goto c4bbc94387ce9cde8ad8382af05a8514;
                    //ab19daedd2a81bf9f05fae25a3e25df3:
                    //goto c4bbc94387ce9cde8ad8382af05a8514;
                }
                $output['user_info']['exp_date'] = $C2eef5835abdc711ef2e0b2a24dc4e46['exp_date'];
                $output['user_info']['is_trial'] = $C2eef5835abdc711ef2e0b2a24dc4e46['is_trial'];
                $output['user_info']['active_cons'] = $C2eef5835abdc711ef2e0b2a24dc4e46['active_cons'];
                $output['user_info']['created_at'] = $C2eef5835abdc711ef2e0b2a24dc4e46['created_at'];
                $output['user_info']['max_connections'] = $C2eef5835abdc711ef2e0b2a24dc4e46['max_connections'];
                $output['user_info']['allowed_output_formats'] = array_keys($C2eef5835abdc711ef2e0b2a24dc4e46['output_formats']);
                $output['categories'] = array();
                foreach ($afdd6246d0a110a7f7c2599f764bb8e9 as $b3c28ce8f38cc88b3954fadda9ca6553 => $d623cb8e6629e10f288da34e620b78b9) {
                    $output['categories'][$d623cb8e6629e10f288da34e620b78b9['category_type']][] = array('category_id' => $d623cb8e6629e10f288da34e620b78b9['id'], 'category_name' => $d623cb8e6629e10f288da34e620b78b9['category_name'], 'parent_id' => 0);
                    //E98143a2296a1b5a9fe04dd4c4131787:
                }
                $output['available_channels'] = array();
                $ffbf5ba007ab5c76700047a4ec5b648e = $A53459db49b9c062de3f1777e4c87981 = 0;
                foreach ($C2eef5835abdc711ef2e0b2a24dc4e46['channels'] as $channel) {
                    $movie_properties = a78Bf8D35765Be2408c50712Ce7a43Ad::caDEb9125B2E81b183688842C5AC3AD7($channel['id']);
                    if ($channel['live'] == 1) {
                        $ffbf5ba007ab5c76700047a4ec5b648e++;
                        $f6cb8ff50fa6609892442191828c234b = $channel['stream_icon'];
                    } else {
                        $A53459db49b9c062de3f1777e4c87981++;
                        $f6cb8ff50fa6609892442191828c234b = $movie_properties['movie_image'];
                    }
                    $B9a8ab6cf4c1498733180431a3d477f5 = !empty($channel['tv_archive_server_id']) && !empty($channel['tv_archive_duration']) ? 1 : 0;
                    $output['available_channels'][$channel['id']] = array('num' => $channel['live'] == 1 ? $ffbf5ba007ab5c76700047a4ec5b648e : $A53459db49b9c062de3f1777e4c87981, 'name' => $channel['stream_display_name'], 'stream_type' => $channel['type_key'], 'type_name' => $channel['type_name'], 'stream_id' => $channel['id'], 'stream_icon' => $f6cb8ff50fa6609892442191828c234b, 'epg_channel_id' => $channel['channel_id'], 'added' => $channel['added'], 'category_name' => $channel['category_name'], 'category_id' => !empty($channel['category_id']) ? $channel['category_id'] : null, 'series_no' => null, 'live' => $channel['live'], 'container_extension' => Dc53AE228DF72D4c140FDa7fd5E7e0BE($channel['target_container']), 'custom_sid' => $channel['custom_sid'], 'tv_archive' => $B9a8ab6cf4c1498733180431a3d477f5, 'direct_source' => !empty($channel['stream_source']) ? json_decode($channel['stream_source'], true)[0] : '', 'tv_archive_duration' => $B9a8ab6cf4c1498733180431a3d477f5 ? $channel['tv_archive_duration'] : 0);
                }
        }
    } else {
        $output['user_info']['auth'] = 0;
    }
    echo json_encode($output, JSON_PARTIAL_OUTPUT_ON_ERROR);
    die;
}
if ($f0ac6ad2b40669833242a10c23cad2e0) {
    D9F93b7c177E377d0BbfE315eAEAE505();
}
?>
