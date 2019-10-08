<?php
/*Rev:26.09.18r0*/

class A78Bf8d35765BE2408c50712ce7a43AD
{
    public static $request = array();
    public static $ipTV_db;
    public static $settings = array();
    public static $Bouquets = array();
    public static $StreamingServers = array();
    public static $SegmentsSettings = array();
    public static $blockedUA = array();
    public static $customISP = array();
    public static function fAB9232faa11c27667e20d2b25c46266()
    {
        global $_INFO;
        if (!empty($_GET)) {
            self::Cd74069D0412864c09fB4ED01eaeC324($_GET);
        }
        if (!empty($_POST)) {
            self::cD74069d0412864c09fb4Ed01EaeC324($_POST);
        }
        if (!empty($_SESSION)) {
            self::cD74069d0412864C09Fb4ED01EaEc324($_SESSION);
        }
        if (!empty($_COOKIE)) {
            self::cD74069d0412864c09fb4eD01eaeC324($_COOKIE);
        }
        $d8371b9d492a3a005aae00b32747599b = @self::d0328611B6174b14e3e28130DAa7CEEa($_GET, array());
        self::$request = @self::D0328611B6174b14e3e28130dAa7Ceea($_POST, $d8371b9d492a3a005aae00b32747599b);
        self::$settings = self::f676C856Cdb61B02034dC26129ac9EB5();
        date_default_timezone_set(self::$settings['default_timezone']);
        self::$StreamingServers = self::A3ae6303492B1F90a30Bd57ad7F17760();
        if (FETCH_BOUQUETS) {
            self::$Bouquets = self::dc118DD2B94e5f4e1A21651686ed6719();
        }
        self::$blockedUA = self::A7777eA812B783AE183c0e54B62e833C();
        self::$customISP = self::b8fcbc16dC5DC82293765A61c8469Af9();
        if (self::$StreamingServers[SERVER_ID]['persistent_connections'] != $_INFO['pconnect']) {
            $_INFO['pconnect'] = self::$StreamingServers[SERVER_ID]['persistent_connections'];
            if (!empty($_INFO) && is_array($_INFO) && !empty($_INFO['db_user'])) {
                file_put_contents(IPTV_PANEL_DIR . 'config', base64_encode(EaAB451Ef7A60C6d480e43b6c15A14A1(json_encode($_INFO), CONFIG_CRYPT_KEY)), LOCK_EX);
            }
        }
        self::$SegmentsSettings = self::B142A019701de69Abd16CF1861ae5303();
        eC2283305a3A0aBb64Fab98987118Fb7();
    }
    public static function b7a3b5FA503D2609667A9ccB4e370Bb5($B6893dda06ade8d0d547aa9b6e6f8591)
    {
        $b1adb9f5e0e997d9616b1b6e27bc9b43 = new DateTime('UTC', new DateTimeZone(date_default_timezone_get()));
        $b7adc9791d8ac3e73be919b8186e780b = new DateTime('UTC', new DateTimeZone($B6893dda06ade8d0d547aa9b6e6f8591));
        return $b7adc9791d8ac3e73be919b8186e780b->getTimestamp() - $b1adb9f5e0e997d9616b1b6e27bc9b43->getTimestamp();
    }
    public static function B142A019701de69ABd16cF1861aE5303()
    {
        $Eb8cdb7167980605052c91d6f856fe86 = array();
        $Eb8cdb7167980605052c91d6f856fe86['seg_time'] = 10;
        $Eb8cdb7167980605052c91d6f856fe86['seg_list_size'] = 6;
        return $Eb8cdb7167980605052c91d6f856fe86;
    }
    public static function B8fcbC16dC5dc82293765A61C8469AF9()
    {
        $a0a73187de2a9fa7f9f714c27f33c77c = self::E550705Ec4CE886a5D30a9A137209f2F('customisp_cache');
        if ($a0a73187de2a9fa7f9f714c27f33c77c !== false) {
            return $a0a73187de2a9fa7f9f714c27f33c77c;
        }
        $output = array();
        self::$ipTV_db->query('SELECT id,isp,blocked FROM `isp_addon`');
        $output = self::$ipTV_db->c126FD559932F625cDF6098D86c63880();
        return $output;
    }
    public static function a7777EA812B783ae183C0E54B62E833C()
    {
        $a0a73187de2a9fa7f9f714c27f33c77c = self::e550705eC4CE886A5D30A9A137209f2f('uagents_cache');
        if ($a0a73187de2a9fa7f9f714c27f33c77c !== false) {
            return $a0a73187de2a9fa7f9f714c27f33c77c;
        }
        $output = array();
        self::$ipTV_db->query('SELECT id,exact_match,LOWER(user_agent) as blocked_ua FROM `blocked_user_agents`');
        $output = self::$ipTV_db->C126FD559932f625cDF6098D86c63880(true, 'id');
        return $output;
    }
    public static function dC118dd2B94e5F4E1A21651686eD6719()
    {
        $a0a73187de2a9fa7f9f714c27f33c77c = self::E550705eC4cE886A5D30a9A137209F2F('bouquets_cache');
        if ($a0a73187de2a9fa7f9f714c27f33c77c !== false) {
            return $a0a73187de2a9fa7f9f714c27f33c77c;
        }
        $output = array();
        self::$ipTV_db->query('SELECT `id`,`bouquet_channels`,`bouquet_series` FROM `bouquets`');
        foreach (self::$ipTV_db->C126Fd559932F625CDf6098D86C63880(true, 'id') as $b3c28ce8f38cc88b3954fadda9ca6553 => $B6fc8577128465b7a7ca16798a93f3cd) {
            $output[$b3c28ce8f38cc88b3954fadda9ca6553]['streams'] = json_decode($B6fc8577128465b7a7ca16798a93f3cd['bouquet_channels'], true);
            $output[$b3c28ce8f38cc88b3954fadda9ca6553]['series'] = json_decode($B6fc8577128465b7a7ca16798a93f3cd['bouquet_series'], true);
        }
        return $output;
    }
    public static function F676c856Cdb61b02034dc26129ac9eb5()
    {
        $a0a73187de2a9fa7f9f714c27f33c77c = self::E550705Ec4CE886A5D30a9a137209F2f('settings_cache');
        if ($a0a73187de2a9fa7f9f714c27f33c77c !== false) {
            return $a0a73187de2a9fa7f9f714c27f33c77c;
        }
        $output = array();
        self::$ipTV_db->query('SELECT * FROM `settings`');
        $Cd4eabf7ecf553f46c17f0bd5a382c46 = self::$ipTV_db->f1Ed191D78470660EdFf4A007696Bc1F();
        foreach ($Cd4eabf7ecf553f46c17f0bd5a382c46 as $E7cca48cfca85fc445419a32d7d8f973 => $C5805ed257c09a3079ad7fa87c6d5bb2) {
            $output[$E7cca48cfca85fc445419a32d7d8f973] = $C5805ed257c09a3079ad7fa87c6d5bb2;
            //f97b2b43f2fcdee432532a9877d3e1f9:
        }
        $output['allow_countries'] = json_decode($output['allow_countries'], true);
        $output['allowed_stb_types'] = @array_map('strtolower', json_decode($output['allowed_stb_types'], true));
        $output['stalker_lock_images'] = json_decode($output['stalker_lock_images'], true);
        $output['use_https'] = json_decode($output['use_https'], true);
        $output['stalker_container_priority'] = json_decode($output['stalker_container_priority'], true);
        $output['gen_container_priority'] = json_decode($output['gen_container_priority'], true);
        if (array_key_exists('bouquet_name', $output)) {
            $output['bouquet_name'] = str_replace(' ', '_', $output['bouquet_name']);
        }
        $output['api_ips'] = explode(',', $output['api_ips']);
        return $output;
    }
    public static function fE94F8ADB812129681dEc49f40077358($a0a73187de2a9fa7f9f714c27f33c77c, $d76067cf9572f7a6691c85c12faf2a29)
    {
        $d76067cf9572f7a6691c85c12faf2a29 = '<?php $output = ' . var_export($d76067cf9572f7a6691c85c12faf2a29, true) . '; ?>';
        if (!file_exists(TMP_DIR . $a0a73187de2a9fa7f9f714c27f33c77c . '.php') || md5_file(TMP_DIR . $a0a73187de2a9fa7f9f714c27f33c77c . '.php') != md5($d76067cf9572f7a6691c85c12faf2a29)) {
            file_put_contents(TMP_DIR . $a0a73187de2a9fa7f9f714c27f33c77c . '.php_cache', $d76067cf9572f7a6691c85c12faf2a29, LOCK_EX);
            rename(TMP_DIR . $a0a73187de2a9fa7f9f714c27f33c77c . '.php_cache', TMP_DIR . $a0a73187de2a9fa7f9f714c27f33c77c . '.php');
        }
    }
    public static function e550705Ec4CE886a5D30A9a137209f2F($a0a73187de2a9fa7f9f714c27f33c77c)
    {
        if (file_exists(TMP_DIR . $a0a73187de2a9fa7f9f714c27f33c77c . '.php') && USE_CACHE === true) {
            include TMP_DIR . $a0a73187de2a9fa7f9f714c27f33c77c . '.php';
            return $output;
        }
        return false;
    }
    public static function dCa7aA6Db7c4ce371E41571A19bcE930()
    {
        $output = array();
        if (file_exists(TMP_DIR . 'series_data.php')) {
            include TMP_DIR . 'series_data.php';
        }
        return $output;
    }
    public static function cAdEb9125b2E81b183688842c5Ac3Ad7($ba85d77d367dcebfcc2a3db9e83bb581)
    {
        $movie_properties = array();
        if (file_exists(TMP_DIR . $ba85d77d367dcebfcc2a3db9e83bb581 . '_cache_properties')) {
            $movie_properties = unserialize(file_get_contents(TMP_DIR . $ba85d77d367dcebfcc2a3db9e83bb581 . '_cache_properties'));
        }
        return isset($movie_properties) && is_array($movie_properties) ? $movie_properties : array();
    }
    public static function a3AE6303492B1F90A30Bd57AD7F17760()
    {
        $a0a73187de2a9fa7f9f714c27f33c77c = self::E550705Ec4Ce886a5D30a9A137209F2F('servers_cache');
        if ($a0a73187de2a9fa7f9f714c27f33c77c !== false) {
            return $a0a73187de2a9fa7f9f714c27f33c77c;
        }
        if (empty($_SERVER['REQUEST_SCHEME'])) {
            $_SERVER['REQUEST_SCHEME'] = 'http';
        }
        self::$ipTV_db->query('SELECT * FROM `streaming_servers`');
        $f9b9c9baaec5b82b03b15c6eb07ec8f9 = array();
        $c40aa1cdef4832a8ab2a00328edd21c0 = array(1, 3);
        foreach (self::$ipTV_db->C126FD559932F625Cdf6098d86c63880() as $c72d66b481d02f854f0bef67db92a547) {
            if ((!empty($c72d66b481d02f854f0bef67db92a547['vpn_ip']) && inet_pton($c72d66b481d02f854f0bef67db92a547['vpn_ip']) !== false)) {
                $e3539ad64f4d9fc6c2e465986c622369 = $c72d66b481d02f854f0bef67db92a547['vpn_ip'];
            }
            else if (empty($c72d66b481d02f854f0bef67db92a547['domain_name'])) { 
                $e3539ad64f4d9fc6c2e465986c622369 = str_replace(array('http://', '/', 'https://'), '', $c72d66b481d02f854f0bef67db92a547['domain_name']);
            } else {
                $e3539ad64f4d9fc6c2e465986c622369 = $c72d66b481d02f854f0bef67db92a547['server_ip'];
            }
            $F53be324c8d9391cc021f5be5dacdfc1 = is_array(self::$settings['use_https']) && in_array($c72d66b481d02f854f0bef67db92a547['id'], self::$settings['use_https']) ? 'https' : 'http';
            $A89ab518408ebebb306a354608eb18cd = $F53be324c8d9391cc021f5be5dacdfc1 == 'http' ? $c72d66b481d02f854f0bef67db92a547['http_broadcast_port'] : $c72d66b481d02f854f0bef67db92a547['https_broadcast_port'];
            $c72d66b481d02f854f0bef67db92a547['server_protocol'] = $F53be324c8d9391cc021f5be5dacdfc1;
            $c72d66b481d02f854f0bef67db92a547['request_port'] = $A89ab518408ebebb306a354608eb18cd;
            $c72d66b481d02f854f0bef67db92a547['api_url'] = $F53be324c8d9391cc021f5be5dacdfc1 . '://' . $e3539ad64f4d9fc6c2e465986c622369 . ':' . $A89ab518408ebebb306a354608eb18cd . '/system_api.php?password=' . a78Bf8d35765bE2408c50712Ce7a43aD::$settings['live_streaming_pass'];
            $c72d66b481d02f854f0bef67db92a547['site_url'] = $F53be324c8d9391cc021f5be5dacdfc1 . '://' . $e3539ad64f4d9fc6c2e465986c622369 . ':' . $A89ab518408ebebb306a354608eb18cd . '/';
            $c72d66b481d02f854f0bef67db92a547['rtmp_server'] = 'rtmp://' . $e3539ad64f4d9fc6c2e465986c622369 . ':' . $c72d66b481d02f854f0bef67db92a547['rtmp_port'] . '/live/';
            $c72d66b481d02f854f0bef67db92a547['rtmp_mport_url'] = 'http://127.0.0.1:31210/';
            $c72d66b481d02f854f0bef67db92a547['api_url_ip'] = $F53be324c8d9391cc021f5be5dacdfc1 . '://' . $c72d66b481d02f854f0bef67db92a547['server_ip'] . ':' . $A89ab518408ebebb306a354608eb18cd . '/system_api.php?password=' . A78Bf8d35765Be2408C50712CE7a43AD::$settings['live_streaming_pass'];
            $c72d66b481d02f854f0bef67db92a547['site_url_ip'] = $F53be324c8d9391cc021f5be5dacdfc1 . '://' . $c72d66b481d02f854f0bef67db92a547['server_ip'] . ':' . $A89ab518408ebebb306a354608eb18cd . '/';
            $c72d66b481d02f854f0bef67db92a547['geoip_countries'] = empty($c72d66b481d02f854f0bef67db92a547['geoip_countries']) ? array() : json_decode($c72d66b481d02f854f0bef67db92a547['geoip_countries'], true);
            $c72d66b481d02f854f0bef67db92a547['isp_names'] = empty($c72d66b481d02f854f0bef67db92a547['isp_names']) ? array() : json_decode($c72d66b481d02f854f0bef67db92a547['isp_names'], true);
            $c72d66b481d02f854f0bef67db92a547['server_online'] = in_array($c72d66b481d02f854f0bef67db92a547['status'], $c40aa1cdef4832a8ab2a00328edd21c0) && time() - $c72d66b481d02f854f0bef67db92a547['last_check_ago'] <= 90 || SERVER_ID == $c72d66b481d02f854f0bef67db92a547['id'] ? true : false;
            unset($c72d66b481d02f854f0bef67db92a547['ssh_password'], $c72d66b481d02f854f0bef67db92a547['watchdog_data'], $c72d66b481d02f854f0bef67db92a547['last_check_ago']);
            $f9b9c9baaec5b82b03b15c6eb07ec8f9[intval($c72d66b481d02f854f0bef67db92a547['id'])] = $c72d66b481d02f854f0bef67db92a547;
        }
        return $f9b9c9baaec5b82b03b15c6eb07ec8f9;
    }
    public static function ed16F6D550960EB1cAB1b010B5B676EB($d826bb1b5f455613052c5b3b5949121c, $E7cca48cfca85fc445419a32d7d8f973)
    {
        $d826bb1b5f455613052c5b3b5949121c = explode('|', $d826bb1b5f455613052c5b3b5949121c . '|');
        $e604917258b158ba003c4d7352099362 = base64_decode($d826bb1b5f455613052c5b3b5949121c[0]);
        $d17b616e2ba1c5acd831fc89992d19b8 = base64_decode($d826bb1b5f455613052c5b3b5949121c[1]);
        if (strlen($d17b616e2ba1c5acd831fc89992d19b8) !== mcrypt_get_iv_size(MCRYPT_RIJNDAEL_256, MCRYPT_MODE_CBC)) {
            return false;
        }
        $E7cca48cfca85fc445419a32d7d8f973 = pack('H*', $E7cca48cfca85fc445419a32d7d8f973);
        $D49bad8413a1e326e00365852b39c341 = trim(mcrypt_decrypt(MCRYPT_RIJNDAEL_256, $E7cca48cfca85fc445419a32d7d8f973, $e604917258b158ba003c4d7352099362, MCRYPT_MODE_CBC, $d17b616e2ba1c5acd831fc89992d19b8));
        $bad0c96fedbc6eccfe927016a4dc3cd6 = substr($D49bad8413a1e326e00365852b39c341, -64);
        $D49bad8413a1e326e00365852b39c341 = substr($D49bad8413a1e326e00365852b39c341, 0, -64);
        $Bf8251826e25f660c6052c269250efc7 = hash_hmac('sha256', $D49bad8413a1e326e00365852b39c341, substr(bin2hex($E7cca48cfca85fc445419a32d7d8f973), -32));
        if ($Bf8251826e25f660c6052c269250efc7 !== $bad0c96fedbc6eccfe927016a4dc3cd6) {
            return false;
        }
        $D49bad8413a1e326e00365852b39c341 = unserialize($D49bad8413a1e326e00365852b39c341);
        return $D49bad8413a1e326e00365852b39c341;
    }
    public static function D508D1e2ECC2e304e5BaB85e6a347b23($e3539ad64f4d9fc6c2e465986c622369, $Abc172f3d3864ea14d922df45f999b5c = false)
    {
        if (file_exists(TMP_DIR . md5($e3539ad64f4d9fc6c2e465986c622369)) && time() - filemtime(TMP_DIR . md5($e3539ad64f4d9fc6c2e465986c622369)) <= 300) {
            return false;
        }
        $a10808dda4714bd71fb4e4f1cbf6bf1c = curl_init();
        curl_setopt($a10808dda4714bd71fb4e4f1cbf6bf1c, CURLOPT_URL, $e3539ad64f4d9fc6c2e465986c622369);
        curl_setopt($a10808dda4714bd71fb4e4f1cbf6bf1c, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($a10808dda4714bd71fb4e4f1cbf6bf1c, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($a10808dda4714bd71fb4e4f1cbf6bf1c, CURLOPT_CONNECTTIMEOUT, 3);
        curl_setopt($a10808dda4714bd71fb4e4f1cbf6bf1c, CURLOPT_TIMEOUT, 3);
        curl_setopt($a10808dda4714bd71fb4e4f1cbf6bf1c, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($a10808dda4714bd71fb4e4f1cbf6bf1c, CURLOPT_SSL_VERIFYPEER, 0);
        $a4b23a5f1ec2a1b113ea488d60c770d8 = curl_exec($a10808dda4714bd71fb4e4f1cbf6bf1c);
        $aaafb28417c25d1b17071a7dfdb331d1 = (int) curl_getinfo($a10808dda4714bd71fb4e4f1cbf6bf1c, CURLINFO_HTTP_CODE);
        curl_close($a10808dda4714bd71fb4e4f1cbf6bf1c);
        if ($aaafb28417c25d1b17071a7dfdb331d1 != 200) {
            file_put_contents(TMP_DIR . md5($e3539ad64f4d9fc6c2e465986c622369), 0);
            return false;
        }
        if (file_exists(TMP_DIR . md5($e3539ad64f4d9fc6c2e465986c622369))) {
            unlink(TMP_DIR . md5($e3539ad64f4d9fc6c2e465986c622369));
        }
        return trim($a4b23a5f1ec2a1b113ea488d60c770d8);
    }
    public static function D0124aFE61d44214b63588b31303A8C4($B13e3f304ca1f14e137f209a5138ea10, $Aa83bd79d8568a4b10bd6fee72c2334c = null, $E2862eaf3f4716fdadef0a008a343507 = 5)
    {
        if (empty($B13e3f304ca1f14e137f209a5138ea10)) {
            return array();
        }
        $A40568a91a6a25727824068aebbe8d94 = array();
        $a10808dda4714bd71fb4e4f1cbf6bf1c = array();
        $Af301a166badb15e0b00336d72fb9497 = array();
        $Ca1351297422337811ecdd7968d5753d = curl_multi_init();
        foreach ($B13e3f304ca1f14e137f209a5138ea10 as $E7cca48cfca85fc445419a32d7d8f973 => $C5805ed257c09a3079ad7fa87c6d5bb2) {
            if (a78BF8D35765bE2408c50712ce7a43Ad::$StreamingServers[$E7cca48cfca85fc445419a32d7d8f973]['server_online']) {
                $a10808dda4714bd71fb4e4f1cbf6bf1c[$E7cca48cfca85fc445419a32d7d8f973] = curl_init();
                curl_setopt($a10808dda4714bd71fb4e4f1cbf6bf1c[$E7cca48cfca85fc445419a32d7d8f973], CURLOPT_URL, $C5805ed257c09a3079ad7fa87c6d5bb2['url']);
                curl_setopt($a10808dda4714bd71fb4e4f1cbf6bf1c[$E7cca48cfca85fc445419a32d7d8f973], CURLOPT_RETURNTRANSFER, true);
                curl_setopt($a10808dda4714bd71fb4e4f1cbf6bf1c[$E7cca48cfca85fc445419a32d7d8f973], CURLOPT_FOLLOWLOCATION, true);
                curl_setopt($a10808dda4714bd71fb4e4f1cbf6bf1c[$E7cca48cfca85fc445419a32d7d8f973], CURLOPT_CONNECTTIMEOUT, 5);
                curl_setopt($a10808dda4714bd71fb4e4f1cbf6bf1c[$E7cca48cfca85fc445419a32d7d8f973], CURLOPT_TIMEOUT, $E2862eaf3f4716fdadef0a008a343507);
                curl_setopt($a10808dda4714bd71fb4e4f1cbf6bf1c[$E7cca48cfca85fc445419a32d7d8f973], CURLOPT_SSL_VERIFYHOST, 0);
                curl_setopt($a10808dda4714bd71fb4e4f1cbf6bf1c[$E7cca48cfca85fc445419a32d7d8f973], CURLOPT_SSL_VERIFYPEER, 0);
                if ($C5805ed257c09a3079ad7fa87c6d5bb2['postdata'] != null) {
                    curl_setopt($a10808dda4714bd71fb4e4f1cbf6bf1c[$E7cca48cfca85fc445419a32d7d8f973], CURLOPT_POST, true);
                    curl_setopt($a10808dda4714bd71fb4e4f1cbf6bf1c[$E7cca48cfca85fc445419a32d7d8f973], CURLOPT_POSTFIELDS, http_build_query($C5805ed257c09a3079ad7fa87c6d5bb2['postdata']));
                }
                curl_multi_add_handle($Ca1351297422337811ecdd7968d5753d, $a10808dda4714bd71fb4e4f1cbf6bf1c[$E7cca48cfca85fc445419a32d7d8f973]);
            } else {
                $A40568a91a6a25727824068aebbe8d94[] = $E7cca48cfca85fc445419a32d7d8f973;
            }
        }
        $B06d3729ff277cecf526823e11a5f66d = null;
        //f8f9135c19c279aefd474e2971f57501:
        do {
            $c0bf7fee7cd09c7f7de56880664bba3b = curl_multi_exec($Ca1351297422337811ecdd7968d5753d, $B06d3729ff277cecf526823e11a5f66d);
        } while ($c0bf7fee7cd09c7f7de56880664bba3b == CURLM_CALL_MULTI_PERFORM);
        //f8ac44ecaab1e2ceb975b244d5560e63:
        while ($B06d3729ff277cecf526823e11a5f66d && $c0bf7fee7cd09c7f7de56880664bba3b == CURLM_OK) {
            if (curl_multi_select($Ca1351297422337811ecdd7968d5753d) == -1) {
                usleep(50000);
            }
            //f8b87e0787d67fdb0fda7d78155d823e:
            do {
                $c0bf7fee7cd09c7f7de56880664bba3b = curl_multi_exec($Ca1351297422337811ecdd7968d5753d, $B06d3729ff277cecf526823e11a5f66d);
            } while ($c0bf7fee7cd09c7f7de56880664bba3b == CURLM_CALL_MULTI_PERFORM);
        }
        //Ec95ab1cac3aa73316a84cbea4da8a7d:
        foreach ($a10808dda4714bd71fb4e4f1cbf6bf1c as $E7cca48cfca85fc445419a32d7d8f973 => $C5805ed257c09a3079ad7fa87c6d5bb2) {
            $Af301a166badb15e0b00336d72fb9497[$E7cca48cfca85fc445419a32d7d8f973] = curl_multi_getcontent($C5805ed257c09a3079ad7fa87c6d5bb2);
            if ($Aa83bd79d8568a4b10bd6fee72c2334c != null) {
                $Af301a166badb15e0b00336d72fb9497[$E7cca48cfca85fc445419a32d7d8f973] = call_user_func($Aa83bd79d8568a4b10bd6fee72c2334c, $Af301a166badb15e0b00336d72fb9497[$E7cca48cfca85fc445419a32d7d8f973], true);
            }
            curl_multi_remove_handle($Ca1351297422337811ecdd7968d5753d, $C5805ed257c09a3079ad7fa87c6d5bb2);
        }
        foreach ($A40568a91a6a25727824068aebbe8d94 as $E7cca48cfca85fc445419a32d7d8f973) {
            $Af301a166badb15e0b00336d72fb9497[$E7cca48cfca85fc445419a32d7d8f973] = false;
            //D183a0bf62fb06ee69ac0c7223812377:
        }
        curl_multi_close($Ca1351297422337811ecdd7968d5753d);
        return $Af301a166badb15e0b00336d72fb9497;
    }
    public static function cD74069d0412864c09Fb4Ed01EAec324(&$d76067cf9572f7a6691c85c12faf2a29, $b2498346a25a7820bd3f3257c06295e1 = 0)
    {
        if ($b2498346a25a7820bd3f3257c06295e1 >= 10) {
            return;
        }
        foreach ($d76067cf9572f7a6691c85c12faf2a29 as $Baee0c34e5755f1cfaa4159ea7e8702e => $A97fe3f1c8426c96ebcceda8e06bac83) {
            if (is_array($A97fe3f1c8426c96ebcceda8e06bac83)) {
                self::cd74069d0412864c09fB4eD01eAEC324($d76067cf9572f7a6691c85c12faf2a29[$Baee0c34e5755f1cfaa4159ea7e8702e], ++$b2498346a25a7820bd3f3257c06295e1);
            } else {
                $A97fe3f1c8426c96ebcceda8e06bac83 = str_replace(chr('0'), '', $A97fe3f1c8426c96ebcceda8e06bac83);
                $A97fe3f1c8426c96ebcceda8e06bac83 = str_replace(' ', '', $A97fe3f1c8426c96ebcceda8e06bac83);
                $A97fe3f1c8426c96ebcceda8e06bac83 = str_replace(' ', '', $A97fe3f1c8426c96ebcceda8e06bac83);
                $A97fe3f1c8426c96ebcceda8e06bac83 = str_replace('../', '&#46;&#46;/', $A97fe3f1c8426c96ebcceda8e06bac83);
                $A97fe3f1c8426c96ebcceda8e06bac83 = str_replace('&#8238;', '', $A97fe3f1c8426c96ebcceda8e06bac83);
                $d76067cf9572f7a6691c85c12faf2a29[$Baee0c34e5755f1cfaa4159ea7e8702e] = $A97fe3f1c8426c96ebcceda8e06bac83;
            }
        }
    }
    public static function d0328611b6174b14e3e28130dAa7ceea(&$d76067cf9572f7a6691c85c12faf2a29, $d8371b9d492a3a005aae00b32747599b = array(), $b2498346a25a7820bd3f3257c06295e1 = 0)
    {
        if ($b2498346a25a7820bd3f3257c06295e1 >= 20) {
            return $d8371b9d492a3a005aae00b32747599b;
        }
        if (!is_array($d76067cf9572f7a6691c85c12faf2a29)) {
            return $d8371b9d492a3a005aae00b32747599b;
        }
        foreach ($d76067cf9572f7a6691c85c12faf2a29 as $Baee0c34e5755f1cfaa4159ea7e8702e => $A97fe3f1c8426c96ebcceda8e06bac83) {
            if (is_array($A97fe3f1c8426c96ebcceda8e06bac83)) {
                $d8371b9d492a3a005aae00b32747599b[$Baee0c34e5755f1cfaa4159ea7e8702e] = self::d0328611B6174B14e3e28130DAA7cEea($d76067cf9572f7a6691c85c12faf2a29[$Baee0c34e5755f1cfaa4159ea7e8702e], array(), $b2498346a25a7820bd3f3257c06295e1 + 1);
            } else {
                $Baee0c34e5755f1cfaa4159ea7e8702e = self::cB08394fc6E600FE27f05aEDc447d7bF($Baee0c34e5755f1cfaa4159ea7e8702e);
                $A97fe3f1c8426c96ebcceda8e06bac83 = self::d517eF19e12996f7d59BcE1B4ba03104($A97fe3f1c8426c96ebcceda8e06bac83);
                $d8371b9d492a3a005aae00b32747599b[$Baee0c34e5755f1cfaa4159ea7e8702e] = $A97fe3f1c8426c96ebcceda8e06bac83;
            }
        }
        return $d8371b9d492a3a005aae00b32747599b;
    }
    public static function Cb08394fc6E600fe27F05aEDc447d7bf($E7cca48cfca85fc445419a32d7d8f973)
    {
        if ($E7cca48cfca85fc445419a32d7d8f973 === '') {
            return '';
        }
        $E7cca48cfca85fc445419a32d7d8f973 = htmlspecialchars(urldecode($E7cca48cfca85fc445419a32d7d8f973));
        $E7cca48cfca85fc445419a32d7d8f973 = str_replace('..', '', $E7cca48cfca85fc445419a32d7d8f973);
        $E7cca48cfca85fc445419a32d7d8f973 = preg_replace('/\\_\\_(.+?)\\_\\_/', '', $E7cca48cfca85fc445419a32d7d8f973);
        $E7cca48cfca85fc445419a32d7d8f973 = preg_replace('/^([\\w\\.\\-\\_]+)$/', '$1', $E7cca48cfca85fc445419a32d7d8f973);
        return $E7cca48cfca85fc445419a32d7d8f973;
    }
    public static function d517ef19e12996f7d59BcE1b4bA03104($C5805ed257c09a3079ad7fa87c6d5bb2)
    {
        if ($C5805ed257c09a3079ad7fa87c6d5bb2 == '') {
            return '';
        }
        $C5805ed257c09a3079ad7fa87c6d5bb2 = str_replace('&#032;', ' ', stripslashes($C5805ed257c09a3079ad7fa87c6d5bb2));
        $C5805ed257c09a3079ad7fa87c6d5bb2 = str_replace(array('
', '

', '
'), '
', $C5805ed257c09a3079ad7fa87c6d5bb2);
        $C5805ed257c09a3079ad7fa87c6d5bb2 = str_replace('<!--', '&#60;&#33;--', $C5805ed257c09a3079ad7fa87c6d5bb2);
        $C5805ed257c09a3079ad7fa87c6d5bb2 = str_replace('-->', '--&#62;', $C5805ed257c09a3079ad7fa87c6d5bb2);
        $C5805ed257c09a3079ad7fa87c6d5bb2 = str_ireplace('<script', '&#60;script', $C5805ed257c09a3079ad7fa87c6d5bb2);
        $C5805ed257c09a3079ad7fa87c6d5bb2 = preg_replace('/&amp;#([0-9]+);/s', '&#\\1;', $C5805ed257c09a3079ad7fa87c6d5bb2);
        $C5805ed257c09a3079ad7fa87c6d5bb2 = preg_replace('/&#(\\d+?)([^\\d;])/i', '&#\\1;\\2', $C5805ed257c09a3079ad7fa87c6d5bb2);
        return trim($C5805ed257c09a3079ad7fa87c6d5bb2);
    }
    public static function e501281Ad19Af8a4bbbf9bEd91ee9299($d887d924b23a04b73a6f893291e44509)
    {
        self::$ipTV_db->query('INSERT INTO `panel_logs` (`log_message`,`date`) VALUES(\'%s\',\'%d\')', $d887d924b23a04b73a6f893291e44509, time());
    }
    public static function E5182E3aFA58Ac7ec5D69d56b28819Cd($b362cb2e1492b66663cf3718328409ad = 10)
    {
        $B43652db32be0029c8c77843118069ad = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789qwertyuiopasdfghjklzxcvbnm';
        $A66766c8194fa7aac4791468fd0c7eb6 = '';
        $d873fc242076b9c612acb67939bbd5f4 = strlen($B43652db32be0029c8c77843118069ad) - 1;
        $C48e0083a9caa391609a3c645a2ec889 = 0;
        //F974a8891a578dbe0f93c5544887ecd8:
        while ($C48e0083a9caa391609a3c645a2ec889 < $b362cb2e1492b66663cf3718328409ad) {
            $A66766c8194fa7aac4791468fd0c7eb6 .= $B43652db32be0029c8c77843118069ad[rand(0, $d873fc242076b9c612acb67939bbd5f4)];
            $C48e0083a9caa391609a3c645a2ec889++;
        }
        //cbc5129c28fd36769956e7ee7c6d5ee7:
        return $A66766c8194fa7aac4791468fd0c7eb6;
    }
    public static function C0dA8e7BD7A2028B339e52aF2835A028($e651d3327c00dab0032bac22e53d91e5)
    {
        if (!is_array($e651d3327c00dab0032bac22e53d91e5)) {
            return $e651d3327c00dab0032bac22e53d91e5;
        }
        $F5f4f4f672e887fb30287f13f0faf8c7 = array();
        foreach ($e651d3327c00dab0032bac22e53d91e5 as $a1daec950dd361ae639ad3a57dc018c0) {
            if ((is_scalar($a1daec950dd361ae639ad3a57dc018c0) or is_resource($a1daec950dd361ae639ad3a57dc018c0))) { 
                $F5f4f4f672e887fb30287f13f0faf8c7[] = $a1daec950dd361ae639ad3a57dc018c0;
            }
            else if (is_array($a1daec950dd361ae639ad3a57dc018c0)) {
                $F5f4f4f672e887fb30287f13f0faf8c7 = array_merge($F5f4f4f672e887fb30287f13f0faf8c7, self::c0da8e7bD7A2028B339e52Af2835a028($a1daec950dd361ae639ad3a57dc018c0));
            } 
            //cfbf3d8737cc8265cd7463e40a3ffe3d:
            //goto Bc44b0c2389d014467b76cff7147f450;
        }            
        return $F5f4f4f672e887fb30287f13f0faf8c7;
    }
}
?>
