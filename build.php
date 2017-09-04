<?php
set_include_path(get_include_path() . PATH_SEPARATOR . 'phpseclib');
include('Net/SSH2.php');
/**
 * Created by PhpStorm.
 * User: crea_
 * Date: 03/09/2017
 * Time: 16:52
 */
$ssh = new Net_SSH2('home687786128.1and1-data.host');
if (!$ssh->login('u89720756', 'Peque1573$')) {
    exit('Login Failed');
}

echo $ssh->exec('rm -r celebration');
echo $ssh->exec('git clone -b master https://git@github.com/Arturo900105/web-celebration.git celebration');
echo $ssh->exec('cd celebration; ls');

