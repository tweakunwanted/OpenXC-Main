<?php
/*Rev:26.09.18r0*/

class A7785208D901bEa02b65446067CFD0b3
{
    static function dEfD75fAA43Cb772D0e9A6D9506178B6($ae4fc7b04e3ca3dc1392a1ed498fd1a5, $B065e352842444ddce37346f0c648660 = array(), $b2157c035e132769495d0acb4e6be575)
    {
        if (!is_array($ae4fc7b04e3ca3dc1392a1ed498fd1a5)) {
            $ae4fc7b04e3ca3dc1392a1ed498fd1a5 = array(intval($ae4fc7b04e3ca3dc1392a1ed498fd1a5));
        }
        $B065e352842444ddce37346f0c648660 = array_map('intval', $B065e352842444ddce37346f0c648660);
        $output = array();
        foreach ($ae4fc7b04e3ca3dc1392a1ed498fd1a5 as $e951d0b9610ba3624d06def5a541cb17) {
            if (!array_key_exists($e951d0b9610ba3624d06def5a541cb17, a78Bf8d35765Be2408c50712ce7a43AD::$StreamingServers)) {
                continue;
            }
            $B83f861d078c18d9643641c765cefee9 = self::bd76A284fcC8AFc18449B28Cd481Ea6F($e951d0b9610ba3624d06def5a541cb17, a78bf8D35765be2408C50712ce7a43Ad::$StreamingServers[$e951d0b9610ba3624d06def5a541cb17]['api_url_ip'] . '&action=pidsAreRunning', array('program' => $b2157c035e132769495d0acb4e6be575, 'pids' => $B065e352842444ddce37346f0c648660));
            if ($B83f861d078c18d9643641c765cefee9) {
                $output[$e951d0b9610ba3624d06def5a541cb17] = array_map('trim', json_decode($B83f861d078c18d9643641c765cefee9, true));
            } else {
                $output[$e951d0b9610ba3624d06def5a541cb17] = false;
            }
            //daeabfc5cea23f69ac49df5a3b95d48f:
        }
        return $output;
    }
    static function eD79A31441202a0d242a25777F316FaC($B5d03ddefb862a50fd6abc8561488d01, $Bc7d327b1510891329ca9859db27320f, $b2157c035e132769495d0acb4e6be575)
    {
        if (is_null($Bc7d327b1510891329ca9859db27320f) || !is_numeric($Bc7d327b1510891329ca9859db27320f) || !array_key_exists($B5d03ddefb862a50fd6abc8561488d01, A78BF8D35765bE2408c50712Ce7a43AD::$StreamingServers)) {
            return false;
        }
        if ($output = self::dEfD75FAA43cB772d0e9a6D9506178B6($B5d03ddefb862a50fd6abc8561488d01, array($Bc7d327b1510891329ca9859db27320f), $b2157c035e132769495d0acb4e6be575)) {
            return $output[$B5d03ddefb862a50fd6abc8561488d01][$Bc7d327b1510891329ca9859db27320f];
        }
        return false;
    }
    static function B95e6892fb5B229151AAFF96d4D172e3($ae4fc7b04e3ca3dc1392a1ed498fd1a5, $b2157c035e132769495d0acb4e6be575)
    {
        $Fd219183e9990a8c0beae39264c6d004 = 'ps ax | grep \'' . basename($b2157c035e132769495d0acb4e6be575) . '\' | awk \'{print $1}\'';
        return self::F320b6A3920944D8A18D7949C8AbacE4($ae4fc7b04e3ca3dc1392a1ed498fd1a5, $Fd219183e9990a8c0beae39264c6d004);
    }
    public static function f320b6A3920944D8a18d7949c8aBACE4($ae4fc7b04e3ca3dc1392a1ed498fd1a5, $bad7a63b7a82143384411c956ca1302b, $a28758c1ab974badfc544e11aaf19a57 = 'array')
    {
        $output = array();
        if (!is_array($ae4fc7b04e3ca3dc1392a1ed498fd1a5)) {
            $ae4fc7b04e3ca3dc1392a1ed498fd1a5 = array(intval($ae4fc7b04e3ca3dc1392a1ed498fd1a5));
        }
        if (empty($bad7a63b7a82143384411c956ca1302b)) {
            foreach ($ae4fc7b04e3ca3dc1392a1ed498fd1a5 as $e951d0b9610ba3624d06def5a541cb17) {
                $output[$e951d0b9610ba3624d06def5a541cb17] = '';
                //E8e0519d9f4ddaafe116df8780760995:
            }
            return $output;
        }
        foreach ($ae4fc7b04e3ca3dc1392a1ed498fd1a5 as $e951d0b9610ba3624d06def5a541cb17) {
            if (!($e951d0b9610ba3624d06def5a541cb17 == SERVER_ID)) {
                if (!array_key_exists($e951d0b9610ba3624d06def5a541cb17, A78Bf8D35765bE2408c50712ce7A43AD::$StreamingServers)) {
                    continue;
                }
                $B83f861d078c18d9643641c765cefee9 = self::BD76a284FCc8Afc18449b28Cd481Ea6F($e951d0b9610ba3624d06def5a541cb17, a78Bf8d35765be2408c50712Ce7a43AD::$StreamingServers[$e951d0b9610ba3624d06def5a541cb17]['api_url_ip'] . '&action=runCMD', array('command' => $bad7a63b7a82143384411c956ca1302b));
                if ($B83f861d078c18d9643641c765cefee9) {
                    $C2eef5835abdc711ef2e0b2a24dc4e46 = json_decode($B83f861d078c18d9643641c765cefee9, true);
                    $output[$e951d0b9610ba3624d06def5a541cb17] = $a28758c1ab974badfc544e11aaf19a57 == 'array' ? $C2eef5835abdc711ef2e0b2a24dc4e46 : implode('
', $C2eef5835abdc711ef2e0b2a24dc4e46);
                } else {
                    $output[$e951d0b9610ba3624d06def5a541cb17] = false;
                }
            } else {
                exec($bad7a63b7a82143384411c956ca1302b, $E83ef9c1ae6fdc258218d0c5cee3f90a);
                $output[$e951d0b9610ba3624d06def5a541cb17] = $a28758c1ab974badfc544e11aaf19a57 == 'array' ? $E83ef9c1ae6fdc258218d0c5cee3f90a : implode('
', $E83ef9c1ae6fdc258218d0c5cee3f90a);
            }
        }
        return $output;
    }
    static function bd76A284fcc8Afc18449b28CD481eA6F($e951d0b9610ba3624d06def5a541cb17, $A13639834e5962095e78381710ff675b, $ac9c3b9090df51bc42ce193bab0bb09c = array())
    {
        if (!A78Bf8d35765BE2408C50712cE7A43ad::$StreamingServers[$e951d0b9610ba3624d06def5a541cb17]['server_online']) {
            return false;
        }
        $output = false;
        $C48e0083a9caa391609a3c645a2ec889 = 1;
        //E35c9cf68a4422ecec17b25133922d2d:
        while ($C48e0083a9caa391609a3c645a2ec889 <= 2) {
            $a10808dda4714bd71fb4e4f1cbf6bf1c = curl_init();
            curl_setopt($a10808dda4714bd71fb4e4f1cbf6bf1c, CURLOPT_URL, $A13639834e5962095e78381710ff675b);
            curl_setopt($a10808dda4714bd71fb4e4f1cbf6bf1c, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:9.0) Gecko/20100101 Firefox/9.0');
            curl_setopt($a10808dda4714bd71fb4e4f1cbf6bf1c, CURLOPT_HEADER, 0);
            curl_setopt($a10808dda4714bd71fb4e4f1cbf6bf1c, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($a10808dda4714bd71fb4e4f1cbf6bf1c, CURLOPT_CONNECTTIMEOUT, 10);
            curl_setopt($a10808dda4714bd71fb4e4f1cbf6bf1c, CURLOPT_TIMEOUT, 10);
            curl_setopt($a10808dda4714bd71fb4e4f1cbf6bf1c, CURLOPT_FOLLOWLOCATION, true);
            curl_setopt($a10808dda4714bd71fb4e4f1cbf6bf1c, CURLOPT_FRESH_CONNECT, true);
            curl_setopt($a10808dda4714bd71fb4e4f1cbf6bf1c, CURLOPT_FORBID_REUSE, true);
            curl_setopt($a10808dda4714bd71fb4e4f1cbf6bf1c, CURLOPT_SSL_VERIFYHOST, 0);
            curl_setopt($a10808dda4714bd71fb4e4f1cbf6bf1c, CURLOPT_SSL_VERIFYPEER, 0);
            if (!empty($ac9c3b9090df51bc42ce193bab0bb09c)) {
                curl_setopt($a10808dda4714bd71fb4e4f1cbf6bf1c, CURLOPT_POST, true);
                curl_setopt($a10808dda4714bd71fb4e4f1cbf6bf1c, CURLOPT_POSTFIELDS, http_build_query($ac9c3b9090df51bc42ce193bab0bb09c));
            }
            $output = curl_exec($a10808dda4714bd71fb4e4f1cbf6bf1c);
            $A5b107fc2090c14646302ac9e8a98992 = curl_getinfo($a10808dda4714bd71fb4e4f1cbf6bf1c, CURLINFO_HTTP_CODE);
            $error = curl_errno($a10808dda4714bd71fb4e4f1cbf6bf1c);
            @curl_close($a10808dda4714bd71fb4e4f1cbf6bf1c);
            if ($error != 0 || $A5b107fc2090c14646302ac9e8a98992 != 200) {
                a78bF8D35765BE2408C50712cE7a43ad::E501281aD19AF8a4bBbF9bEd91eE9299("[MAIN->LB] Response from Server ID {$e951d0b9610ba3624d06def5a541cb17} was Invalid ( ERROR: {$error} | Response Code: {$A5b107fc2090c14646302ac9e8a98992} | Try: {$C48e0083a9caa391609a3c645a2ec889} )");
            } else {
                break;
            }
            $C48e0083a9caa391609a3c645a2ec889++;
        }
        //dfe641221e9b4711f43b3a1822caf97a:
        return $output;
    }
}
?>
