<?php
/*Rev:26.09.18r0*/

class dD866CD266d22904Db08ceDe9C891eEb
{
    private $fileStream;
    private $pointerBase;
    private $pointerTestHack;
    private $switchByteOrder;
    private $types = array(0 => 'extended', 1 => 'pointer', 2 => 'utf8_string', 3 => 'double', 4 => 'bytes', 5 => 'uint16', 6 => 'uint32', 7 => 'map', 8 => 'int32', 9 => 'uint64', 10 => 'uint128', 11 => 'array', 12 => 'container', 13 => 'end_marker', 14 => 'boolean', 15 => 'float');
    public function __construct($e3e0ca62aaf647bc5325196a2ed1d857, $Cc70f682f3ee31c123f6100521c49ebc = 0, $E4b8aad42e0cc9d6bd7517288b45b181 = false)
    {
        $this->fileStream = $e3e0ca62aaf647bc5325196a2ed1d857;
        $this->pointerBase = $Cc70f682f3ee31c123f6100521c49ebc;
        $this->pointerTestHack = $E4b8aad42e0cc9d6bd7517288b45b181;
        $this->switchByteOrder = $this->b4463d2f7a75bD1F2F253918215a9EDf();
    }
    public function A13c48203F7686cC9D7129DB62ce01Bd($Edcf28ccdc0122ea787e348c040427ed)
    {
        list(, $fa81eee42906632ae33f6829b4097955) = unpack('C', c71f9A0aA9539E5BbB23f465B5B8a992::Ad87a931cde9286d705b4954D6B159D3($this->fileStream, $Edcf28ccdc0122ea787e348c040427ed, 1));
        $Edcf28ccdc0122ea787e348c040427ed++;
        $a28758c1ab974badfc544e11aaf19a57 = $this->types[$fa81eee42906632ae33f6829b4097955 >> 5];
        if ($a28758c1ab974badfc544e11aaf19a57 === 'pointer') {
            list($ecbe9cf84c74cb6bd2bc530654115271, $Edcf28ccdc0122ea787e348c040427ed) = $this->D3bFf033f4453C1601a7154E94092f42($fa81eee42906632ae33f6829b4097955, $Edcf28ccdc0122ea787e348c040427ed);
            if ($this->pointerTestHack) {
                return array($ecbe9cf84c74cb6bd2bc530654115271);
            }
            list($C2eef5835abdc711ef2e0b2a24dc4e46) = $this->a13C48203f7686cc9D7129Db62ce01BD($ecbe9cf84c74cb6bd2bc530654115271);
            return array($C2eef5835abdc711ef2e0b2a24dc4e46, $Edcf28ccdc0122ea787e348c040427ed);
        }
        if ($a28758c1ab974badfc544e11aaf19a57 === 'extended') {
            list(, $eac64cd3c127d996e1f6721323192f81) = unpack('C', c71f9A0aA9539E5bBB23f465B5b8a992::Ad87A931CdE9286d705B4954D6b159D3($this->fileStream, $Edcf28ccdc0122ea787e348c040427ed, 1));
            $f43977a2711522ef243cc57b97d2da1e = $eac64cd3c127d996e1f6721323192f81 + 7;
            if ($f43977a2711522ef243cc57b97d2da1e < 8) {
                throw new E5fEa4BB1753b166E279e9172AD7b28d('Something went horribly wrong in the decoder. An extended type ' . 'resolved to a type number < 8 (' . $this->types[$f43977a2711522ef243cc57b97d2da1e] . ')');
            }
            $a28758c1ab974badfc544e11aaf19a57 = $this->types[$f43977a2711522ef243cc57b97d2da1e];
            $Edcf28ccdc0122ea787e348c040427ed++;
        }
        list($Ff876e96994aa5b09ce92e771efe2038, $Edcf28ccdc0122ea787e348c040427ed) = $this->C0e9A2980ec8447CbfB3c876fdF04D00($fa81eee42906632ae33f6829b4097955, $Edcf28ccdc0122ea787e348c040427ed);
        return $this->a88dDC37a3f221DB252f2Dd11D32F348($a28758c1ab974badfc544e11aaf19a57, $Edcf28ccdc0122ea787e348c040427ed, $Ff876e96994aa5b09ce92e771efe2038);
    }
    private function a88Ddc37a3F221dB252f2DD11d32F348($a28758c1ab974badfc544e11aaf19a57, $Edcf28ccdc0122ea787e348c040427ed, $Ff876e96994aa5b09ce92e771efe2038)
    {
        switch ($a28758c1ab974badfc544e11aaf19a57) {
            case 'map':
                return $this->a52605CBF8680a519EF750C64BcDD859($Ff876e96994aa5b09ce92e771efe2038, $Edcf28ccdc0122ea787e348c040427ed);
            case 'array':
                return $this->E4b3204157994d7695Ad6CC62487E431($Ff876e96994aa5b09ce92e771efe2038, $Edcf28ccdc0122ea787e348c040427ed);
            case 'boolean':
                return array($this->F9c7A22db968d2E96a93B6B59d77fE91($Ff876e96994aa5b09ce92e771efe2038), $Edcf28ccdc0122ea787e348c040427ed);
        }
        $Ac8c5b61e3afc6a785826ad3f5c2fa60 = $Edcf28ccdc0122ea787e348c040427ed + $Ff876e96994aa5b09ce92e771efe2038;
        $e13ac89e162bcc9913e553b949f755b6 = c71f9a0aa9539E5BbB23f465b5B8A992::aD87a931CDe9286d705b4954d6b159d3($this->fileStream, $Edcf28ccdc0122ea787e348c040427ed, $Ff876e96994aa5b09ce92e771efe2038);
        switch ($a28758c1ab974badfc544e11aaf19a57) {
            case 'utf8_string':
                return array($this->c75187FbCaf407721D54B95Aa5293fb7($e13ac89e162bcc9913e553b949f755b6), $Ac8c5b61e3afc6a785826ad3f5c2fa60);
            case 'double':
                $this->B6D66e5bE7Cb732ca480f552786d9653(8, $Ff876e96994aa5b09ce92e771efe2038);
                return array($this->bB27064A625bE50Ef39f419923eE6F3f($e13ac89e162bcc9913e553b949f755b6), $Ac8c5b61e3afc6a785826ad3f5c2fa60);
            case 'float':
                $this->b6D66E5be7CB732ca480F552786D9653(4, $Ff876e96994aa5b09ce92e771efe2038);
                return array($this->a6F589602A7eBc2C9783B7e68f31F84D($e13ac89e162bcc9913e553b949f755b6), $Ac8c5b61e3afc6a785826ad3f5c2fa60);
            case 'bytes':
                return array($e13ac89e162bcc9913e553b949f755b6, $Ac8c5b61e3afc6a785826ad3f5c2fa60);
            case 'uint16':
            case 'uint32':
                return array($this->D51bB43e3f3096830F5B813802b1F855($e13ac89e162bcc9913e553b949f755b6), $Ac8c5b61e3afc6a785826ad3f5c2fa60);
            case 'int32':
                return array($this->F87748f1ac207C2bf58193D58aE52B5D($e13ac89e162bcc9913e553b949f755b6), $Ac8c5b61e3afc6a785826ad3f5c2fa60);
            case 'uint64':
            case 'uint128':
                return array($this->ed446eDdcE5659Ee3C94b47E3CD1ab95($e13ac89e162bcc9913e553b949f755b6, $Ff876e96994aa5b09ce92e771efe2038), $Ac8c5b61e3afc6a785826ad3f5c2fa60);
            default:
                throw new e5FeA4BB1753B166e279e9172aD7B28d('Unknown or unexpected type: ' . $a28758c1ab974badfc544e11aaf19a57);
        }
    }
    private function b6d66e5bE7Cb732cA480f552786D9653($Aa2d371cdae8f27446af9787110aff7f, $Fa9199fcb99e9c814ddbcb6a44494ded)
    {
        if ($Aa2d371cdae8f27446af9787110aff7f !== $Fa9199fcb99e9c814ddbcb6a44494ded) {
            throw new E5feA4bb1753b166e279e9172AD7b28D('The MaxMind DB file\'s data section contains bad data (unknown data type or corrupt data)');
        }
    }
    private function E4b3204157994d7695AD6cc62487E431($Ff876e96994aa5b09ce92e771efe2038, $Edcf28ccdc0122ea787e348c040427ed)
    {
        $e651d3327c00dab0032bac22e53d91e5 = array();
        $C48e0083a9caa391609a3c645a2ec889 = 0;
        //Ef4075258ae932205e18c356f58e8118:
        while ($C48e0083a9caa391609a3c645a2ec889 < $Ff876e96994aa5b09ce92e771efe2038) {
            list($a1daec950dd361ae639ad3a57dc018c0, $Edcf28ccdc0122ea787e348c040427ed) = $this->a13c48203f7686cc9d7129db62CE01BD($Edcf28ccdc0122ea787e348c040427ed);
            array_push($e651d3327c00dab0032bac22e53d91e5, $a1daec950dd361ae639ad3a57dc018c0);
            $C48e0083a9caa391609a3c645a2ec889++;
        }
        //c10c4d126a9495c09ec72c73258ec878:
        return array($e651d3327c00dab0032bac22e53d91e5, $Edcf28ccdc0122ea787e348c040427ed);
    }
    private function f9c7A22DB968d2e96a93b6B59d77fe91($Ff876e96994aa5b09ce92e771efe2038)
    {
        return $Ff876e96994aa5b09ce92e771efe2038 === 0 ? false : true;
    }
    private function Bb27064a625BE50ef39f419923Ee6F3f($b652ec0c88e2f327fe0d16b777c6b6d5)
    {
        list(, $a607181610c3d763b85072e4f264017a) = unpack('d', $this->E1F8C4dDf340DE46bA06206f1844E677($b652ec0c88e2f327fe0d16b777c6b6d5));
        return $a607181610c3d763b85072e4f264017a;
    }
    private function A6F589602a7ebc2c9783B7E68f31F84D($b652ec0c88e2f327fe0d16b777c6b6d5)
    {
        list(, $F9137721b0baa44b53e499842494d6b9) = unpack('f', $this->e1f8C4dDf340dE46ba06206F1844e677($b652ec0c88e2f327fe0d16b777c6b6d5));
        return $F9137721b0baa44b53e499842494d6b9;
    }
    private function f87748f1Ac207c2bF58193d58ae52b5D($e13ac89e162bcc9913e553b949f755b6)
    {
        $e13ac89e162bcc9913e553b949f755b6 = $this->Fa9ef1a39D56b86513E23ce3e5642F2A($e13ac89e162bcc9913e553b949f755b6, 4);
        list(, $d0d324f3dbb8bbc5fff56e8a848beb7a) = unpack('l', $this->e1f8C4Ddf340DE46ba06206F1844e677($e13ac89e162bcc9913e553b949f755b6));
        return $d0d324f3dbb8bbc5fff56e8a848beb7a;
    }
    private function A52605CbF8680a519ef750C64BcDd859($Ff876e96994aa5b09ce92e771efe2038, $Edcf28ccdc0122ea787e348c040427ed)
    {
        $fd85ae68a4de5cc6cec54942d82e8f80 = array();
        $C48e0083a9caa391609a3c645a2ec889 = 0;
        //f2e2475352ef7e29eeecc0eaf14ba47e:
        while ($C48e0083a9caa391609a3c645a2ec889 < $Ff876e96994aa5b09ce92e771efe2038) {
            list($E7cca48cfca85fc445419a32d7d8f973, $Edcf28ccdc0122ea787e348c040427ed) = $this->A13c48203F7686cc9d7129db62Ce01bd($Edcf28ccdc0122ea787e348c040427ed);
            list($a1daec950dd361ae639ad3a57dc018c0, $Edcf28ccdc0122ea787e348c040427ed) = $this->a13c48203F7686cc9d7129dB62Ce01bd($Edcf28ccdc0122ea787e348c040427ed);
            $fd85ae68a4de5cc6cec54942d82e8f80[$E7cca48cfca85fc445419a32d7d8f973] = $a1daec950dd361ae639ad3a57dc018c0;
            $C48e0083a9caa391609a3c645a2ec889++;
        }
        //Bc21d0a0d4e484dd04213ed0894da5fb:
        return array($fd85ae68a4de5cc6cec54942d82e8f80, $Edcf28ccdc0122ea787e348c040427ed);
    }
    private $pointerValueOffset = array(1 => 0, 2 => 2048, 3 => 526336, 4 => 0);
    private function D3BfF033f4453c1601a7154e94092F42($fa81eee42906632ae33f6829b4097955, $Edcf28ccdc0122ea787e348c040427ed)
    {
        $E7f81375788e92c1cdf085850353643a = ($fa81eee42906632ae33f6829b4097955 >> 3 & 3) + 1;
        $C7558f823ac28009bfd4730a82f1f01b = C71f9a0aA9539E5bBb23f465b5b8A992::ad87A931Cde9286D705b4954D6B159d3($this->fileStream, $Edcf28ccdc0122ea787e348c040427ed, $E7f81375788e92c1cdf085850353643a);
        $Edcf28ccdc0122ea787e348c040427ed = $Edcf28ccdc0122ea787e348c040427ed + $E7f81375788e92c1cdf085850353643a;
        $Df87cb09b2e093a3433e65903b9b2cde = $E7f81375788e92c1cdf085850353643a === 4 ? $C7558f823ac28009bfd4730a82f1f01b : pack('C', $fa81eee42906632ae33f6829b4097955 & 7) . $C7558f823ac28009bfd4730a82f1f01b;
        $b1f89455f192d622d014c1b78397c130 = $this->d51Bb43e3f3096830f5b813802b1F855($Df87cb09b2e093a3433e65903b9b2cde);
        $ecbe9cf84c74cb6bd2bc530654115271 = $b1f89455f192d622d014c1b78397c130 + $this->pointerBase + $this->pointerValueOffset[$E7f81375788e92c1cdf085850353643a];
        return array($ecbe9cf84c74cb6bd2bc530654115271, $Edcf28ccdc0122ea787e348c040427ed);
    }
    private function D51BB43E3F3096830F5B813802B1f855($e13ac89e162bcc9913e553b949f755b6)
    {
        list(, $d0d324f3dbb8bbc5fff56e8a848beb7a) = unpack('N', $this->FA9eF1A39D56B86513E23cE3E5642f2a($e13ac89e162bcc9913e553b949f755b6, 4));
        return $d0d324f3dbb8bbc5fff56e8a848beb7a;
    }
    private function ED446edDCE5659EE3c94B47E3Cd1AB95($e13ac89e162bcc9913e553b949f755b6, $E2904a2e6a49869f6d2fbe19ccac0391)
    {
        $f5df038f9d92972e899e80b312a74edb = log(PHP_INT_MAX, 2) / 8;
        if ($E2904a2e6a49869f6d2fbe19ccac0391 === 0) {
            return 0;
        }
        $B75c4d4b1c917c54469a2bfb0f491c13 = ceil($E2904a2e6a49869f6d2fbe19ccac0391 / 4);
        $c012d00ddcf7e7d2ac0bc81094d928fa = $B75c4d4b1c917c54469a2bfb0f491c13 * 4;
        $adba2a1efd08f93e69c196fb5d42e999 = $this->Fa9eF1A39D56b86513E23ce3e5642f2A($e13ac89e162bcc9913e553b949f755b6, $c012d00ddcf7e7d2ac0bc81094d928fa);
        $b1f89455f192d622d014c1b78397c130 = array_merge(unpack("N{$B75c4d4b1c917c54469a2bfb0f491c13}", $adba2a1efd08f93e69c196fb5d42e999));
        $f725e0e4529c6709a60a12f47958cbc9 = 0;
        $D53d35ea3dd847dc47b4b3b31b6772c4 = '4294967296';
        foreach ($b1f89455f192d622d014c1b78397c130 as $Ce7a3ce27823d61f3d90a906740350e5) {
            if (($E2904a2e6a49869f6d2fbe19ccac0391 <= $f5df038f9d92972e899e80b312a74edb)) {
                
            }
            else if (extension_loaded('gmp')) {
            }
            else if (extension_loaded('bcmath')) {
                $f725e0e4529c6709a60a12f47958cbc9 = bcadd(bcmul($f725e0e4529c6709a60a12f47958cbc9, $D53d35ea3dd847dc47b4b3b31b6772c4), $Ce7a3ce27823d61f3d90a906740350e5);
            } else {
                throw new \A230eEd8a12C16cdB70e7EBdF7b96a36('The gmp or bcmath extension must be installed to read this database.');
                ab545e7193a2d64581466483a508edb7:
                $f725e0e4529c6709a60a12f47958cbc9 = ($f725e0e4529c6709a60a12f47958cbc9 << 32) + $Ce7a3ce27823d61f3d90a906740350e5;
                goto D719ec0ad1c6145b99bdb76160879cd3;
                F2d23abcda98a1b977aedfadf2e5d580:
                $f725e0e4529c6709a60a12f47958cbc9 = A4c71853c5221f8E71fa240a07D00Ee7(E2C20F0b1Ccb3567A11b62d996ef2aaB(ec4c2D69067B7CEA7D7edAFfD229523C($f725e0e4529c6709a60a12f47958cbc9, $D53d35ea3dd847dc47b4b3b31b6772c4), $Ce7a3ce27823d61f3d90a906740350e5));
                goto D719ec0ad1c6145b99bdb76160879cd3;
            }
            }
        return $f725e0e4529c6709a60a12f47958cbc9;
    }
    private function c75187fBCAF407721d54B95aA5293fb7($e13ac89e162bcc9913e553b949f755b6)
    {
        return $e13ac89e162bcc9913e553b949f755b6;
    }
    private function C0E9a2980eC8447cBFb3c876FDF04d00($fa81eee42906632ae33f6829b4097955, $Edcf28ccdc0122ea787e348c040427ed)
    {
        $Ff876e96994aa5b09ce92e771efe2038 = $fa81eee42906632ae33f6829b4097955 & 31;
        $Ae3234ddab2e42837c611f69b424ea66 = $Ff876e96994aa5b09ce92e771efe2038 < 29 ? 0 : $Ff876e96994aa5b09ce92e771efe2038 - 28;
        $e13ac89e162bcc9913e553b949f755b6 = c71F9A0aa9539E5bBb23f465b5B8A992::aD87a931Cde9286D705b4954d6B159d3($this->fileStream, $Edcf28ccdc0122ea787e348c040427ed, $Ae3234ddab2e42837c611f69b424ea66);
        $e604917258b158ba003c4d7352099362 = $this->D51bb43E3F3096830f5B813802B1f855($e13ac89e162bcc9913e553b949f755b6);
        if (!($Ff876e96994aa5b09ce92e771efe2038 === 29)) {
            if (!($Ff876e96994aa5b09ce92e771efe2038 === 30)) {
                if ($Ff876e96994aa5b09ce92e771efe2038 > 30) {
                    $Ff876e96994aa5b09ce92e771efe2038 = ($e604917258b158ba003c4d7352099362 & 268435455 >> 32 - 8 * $Ae3234ddab2e42837c611f69b424ea66) + 65821;
                } else {
                    D13967813388bb221d83f8dac535a114:
                    $Ff876e96994aa5b09ce92e771efe2038 = 29 + $e604917258b158ba003c4d7352099362;
                    goto E34776511fb67c488687c4d1fb35f8c7;
                    F514c16b613c162447d67d4978c87146:
                    $Ff876e96994aa5b09ce92e771efe2038 = 285 + $e604917258b158ba003c4d7352099362;
                    goto E34776511fb67c488687c4d1fb35f8c7;
                }
                return array($Ff876e96994aa5b09ce92e771efe2038, $Edcf28ccdc0122ea787e348c040427ed + $Ae3234ddab2e42837c611f69b424ea66);
            }
        }
    }
    private function fa9eF1a39d56B86513E23CE3E5642f2A($E6e6e898a918aebb540b241917990375, $ed3e6d920db8d2f93868e9da2972cd7e)
    {
        return str_pad($E6e6e898a918aebb540b241917990375, $ed3e6d920db8d2f93868e9da2972cd7e, ' ', STR_PAD_LEFT);
    }
    private function e1f8c4dDf340DE46Ba06206f1844e677($e13ac89e162bcc9913e553b949f755b6)
    {
        return $this->switchByteOrder ? strrev($e13ac89e162bcc9913e553b949f755b6) : $e13ac89e162bcc9913e553b949f755b6;
    }
    private function B4463d2F7a75Bd1F2f253918215A9EDf()
    {
        $Ad31938ddb68ab192074791801b97481 = 255;
        $Df87cb09b2e093a3433e65903b9b2cde = pack('S', $Ad31938ddb68ab192074791801b97481);
        return $Ad31938ddb68ab192074791801b97481 === current(unpack('v', $Df87cb09b2e093a3433e65903b9b2cde));
    }
}
