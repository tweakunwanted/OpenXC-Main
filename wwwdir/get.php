<?php
/*Rev:26.09.18r0*/

require './init.php';
$f6806488699d3315dc5dc1e27a401b3e = A78bf8D35765bE2408C50712cE7a43Ad::$request['username'];
$A6a4b4fbceaf0ab570c374f4faaa990f = A78BF8d35765Be2408c50712cE7A43Ad::$request['password'];
$eb44bb017bb845b562c754c6978bad18 = a78BF8d35765BE2408C50712cE7A43AD::$request['type'];
$bca72c242cf770f855c0eae8936335b7 = empty(a78Bf8D35765BE2408c50712cE7a43Ad::$request['output']) ? '' : A78BF8D35765be2408C50712ce7a43AD::$request['output'];
$f566700a43ee8e1f0412fe10fbdf03df->query('SELECT `id`,`username`,`password` FROM `users` WHERE `username` = \'%s\' AND `password` = \'%s\' LIMIT 1', $f6806488699d3315dc5dc1e27a401b3e, $A6a4b4fbceaf0ab570c374f4faaa990f);
if ($f566700a43ee8e1f0412fe10fbdf03df->D1e5CE3b87Bb868B9e6efd39Aa355A4F() > 0) {
    $c72d66b481d02f854f0bef67db92a547 = $f566700a43ee8e1f0412fe10fbdf03df->f1ED191d78470660edFf4A007696bc1F();
    $E38668abaa324e464e266fb7b7e784b1 = $c72d66b481d02f854f0bef67db92a547['id'];
    if (A78Bf8D35765bE2408C50712ce7A43Ad::$settings['case_sensitive_line'] == 0 || $c72d66b481d02f854f0bef67db92a547['username'] == $f6806488699d3315dc5dc1e27a401b3e && $c72d66b481d02f854f0bef67db92a547['password'] == $A6a4b4fbceaf0ab570c374f4faaa990f) {
        ini_set('memory_limit', -1);
        if ($output = EA3020592126F8E67C0825492484aEf2($E38668abaa324e464e266fb7b7e784b1, $eb44bb017bb845b562c754c6978bad18, $bca72c242cf770f855c0eae8936335b7, true)) {
            echo $output;
            die;
        }
    }
}
D9f93b7C177E377D0BbFe315eAEae505();
http_response_code(404);
?>
