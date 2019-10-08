<?php
/*Rev:26.09.18r0*/

set_time_limit(0);
require './init.php';
$f0ac6ad2b40669833242a10c23cad2e0 = true;
if (!empty(a78BF8d35765be2408C50712CE7A43Ad::$request['username']) && !empty(a78Bf8d35765Be2408c50712Ce7a43ad::$request['password'])) {
    $f6806488699d3315dc5dc1e27a401b3e = a78bF8d35765be2408C50712cE7a43aD::$request['username'];
    $A6a4b4fbceaf0ab570c374f4faaa990f = a78BF8D35765be2408C50712CE7a43AD::$request['password'];
    $cc787cb8dcdf96d84151c7a73aa831bf = empty(A78BF8D35765bE2408C50712CE7A43aD::$request['prev_days']) ? 1 : abs(intval(A78bF8d35765bE2408C50712cE7A43aD::$request['prev_days']));
    $E9bd18f1acef0191a216cfc27a1fcfce = empty(a78bf8d35765Be2408c50712Ce7a43AD::$request['next_days']) ? 1 : abs(intval(A78Bf8d35765BE2408c50712Ce7a43AD::$request['next_days']));
    ini_set('memory_limit', -1);
    if ($C2eef5835abdc711ef2e0b2a24dc4e46 = cD89785224751cCA8017139dAF9e891e::e5550592Aa298Dd1d5ee59CDCe063A12(null, $f6806488699d3315dc5dc1e27a401b3e, $A6a4b4fbceaf0ab570c374f4faaa990f, true, true, true)) {
        if ((is_null($C2eef5835abdc711ef2e0b2a24dc4e46['exp_date']) or $C2eef5835abdc711ef2e0b2a24dc4e46['exp_date'] > time()) and $C2eef5835abdc711ef2e0b2a24dc4e46['admin_enabled'] == 1 and $C2eef5835abdc711ef2e0b2a24dc4e46['enabled'] == 1) {
            $f0ac6ad2b40669833242a10c23cad2e0 = false;
            header('Content-Type: application/xml; charset=utf-8');
            $B1f3e7b388cc5e0a6305e957f3319444 = htmlspecialchars(A78bF8d35765Be2408C50712CE7A43Ad::$settings['server_name'], ENT_XML1 | ENT_QUOTES | ENT_DISALLOWED, 'UTF-8');
            echo '<?xml version="1.0" encoding="utf-8" ?><!DOCTYPE tv SYSTEM "xmltv.dtd">';
            echo "<tv generator-info-name=\"{$B1f3e7b388cc5e0a6305e957f3319444}\" generator-info-url=\"" . a78Bf8d35765BE2408C50712cE7a43Ad::$StreamingServers[SERVER_ID]['site_url'] . '">';
            $f566700a43ee8e1f0412fe10fbdf03df->query('SELECT `stream_display_name`,`stream_icon`,`channel_id`,`epg_id` FROM `streams` WHERE `epg_id` IS NOT NULL');
            $Cd4eabf7ecf553f46c17f0bd5a382c46 = $f566700a43ee8e1f0412fe10fbdf03df->C126fd559932f625CDf6098D86C63880();
            $Bbb7af082729bf21d97453279778fdee = array();
            foreach ($Cd4eabf7ecf553f46c17f0bd5a382c46 as $c72d66b481d02f854f0bef67db92a547) {
                $Fe45388c8d13b941318458fa095983c3 = htmlspecialchars($c72d66b481d02f854f0bef67db92a547['stream_display_name'], ENT_XML1 | ENT_QUOTES | ENT_DISALLOWED, 'UTF-8');
                $f6cb8ff50fa6609892442191828c234b = htmlspecialchars($c72d66b481d02f854f0bef67db92a547['stream_icon'], ENT_XML1 | ENT_QUOTES | ENT_DISALLOWED, 'UTF-8');
                $e818ebc908da0ee69f4f99daba6a1a18 = htmlspecialchars($c72d66b481d02f854f0bef67db92a547['channel_id'], ENT_XML1 | ENT_QUOTES | ENT_DISALLOWED, 'UTF-8');
                echo "<channel id=\"{$e818ebc908da0ee69f4f99daba6a1a18}\">";
                echo "<display-name>{$Fe45388c8d13b941318458fa095983c3}</display-name>";
                if (!empty($c72d66b481d02f854f0bef67db92a547['stream_icon'])) {
                    echo "<icon src=\"{$f6cb8ff50fa6609892442191828c234b}\" />";
                }
                echo '</channel>';
                $Bbb7af082729bf21d97453279778fdee[] = $c72d66b481d02f854f0bef67db92a547['epg_id'];
            }
            $Bbb7af082729bf21d97453279778fdee = array_unique($Bbb7af082729bf21d97453279778fdee);
            $b0f1eb357ed72245e03dfe6268912497 = mysqli_query($f566700a43ee8e1f0412fe10fbdf03df->dbh, 'SELECT * FROM `epg_data` WHERE `epg_id` IN(' . implode(',', $Bbb7af082729bf21d97453279778fdee) . ') AND `start` BETWEEN \'' . date('Y-m-d H:i:00', strtotime("-{$cc787cb8dcdf96d84151c7a73aa831bf} day")) . '\' AND \'' . date('Y-m-d H:i:00', strtotime("+{$E9bd18f1acef0191a216cfc27a1fcfce} day")) . '\'', MYSQLI_USE_RESULT);
            //f1bcbc646b7caf73aa5b0b71be389f78:
            while ($c72d66b481d02f854f0bef67db92a547 = mysqli_fetch_assoc($b0f1eb357ed72245e03dfe6268912497)) {
                $E4416ae8f96620daee43ac43f9515200 = htmlspecialchars(base64_decode($c72d66b481d02f854f0bef67db92a547['title']), ENT_XML1 | ENT_QUOTES | ENT_DISALLOWED, 'UTF-8');
                $d4c3c80b508f5d00d05316e7aa0858de = htmlspecialchars(base64_decode($c72d66b481d02f854f0bef67db92a547['description']), ENT_XML1 | ENT_QUOTES | ENT_DISALLOWED, 'UTF-8');
                $e818ebc908da0ee69f4f99daba6a1a18 = htmlspecialchars($c72d66b481d02f854f0bef67db92a547['channel_id'], ENT_XML1 | ENT_QUOTES | ENT_DISALLOWED, 'UTF-8');
                $A73d5129dfb465fd94f3e09e9b179de0 = new DateTime($c72d66b481d02f854f0bef67db92a547['start']);
                $cdd6af41b10abec2ff03fe043f3df1cf = new DateTime($c72d66b481d02f854f0bef67db92a547['end']);
                $start = $A73d5129dfb465fd94f3e09e9b179de0->format('YmdHis O');
                $ebe823668f9748302d3bd87782a71948 = $cdd6af41b10abec2ff03fe043f3df1cf->format('YmdHis O');
                echo "<programme start=\"{$start}\" stop=\"{$ebe823668f9748302d3bd87782a71948}\" channel=\"{$e818ebc908da0ee69f4f99daba6a1a18}\" >";
                echo '<title>' . $E4416ae8f96620daee43ac43f9515200 . '</title>';
                echo '<desc>' . $d4c3c80b508f5d00d05316e7aa0858de . '</desc>';
                echo '</programme>';
            }
            //cbb7c0585d6bcc07f8df162c7bd39253:
            echo '</tv>';
        }
    }
}
if ($f0ac6ad2b40669833242a10c23cad2e0) {
    http_response_code(401);
    d9f93B7C177E377D0bbfE315EAeAE505();
}
?>
