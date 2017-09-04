<?php
/**
 * Created by PhpStorm.
 * User: crea_
 * Date: 03/09/2017
 * Time: 16:52
 */
$cmds = array ('rm celebration','git clone -b master https://git@github.com/Arturo900105/web-celebration.git celebration');
if (!($connection = ssh2_connect('home687786128.1and1-data.host', 22))) {
    echo "fail: unable to establish connection\n";
} else {
    if (!ssh2_auth_password($connection, 'u89720756', 'Peque1573$')) {
        echo "fail: unable to authenticate\n";
    } else {
        // allright, we're in!
        echo "okay: logged in...\n";

        foreach ($cmds as $cmd) {
            $stream = ssh2_exec($connection, $cmd);
            stream_set_blocking($stream, true);
            $stream_out = ssh2_fetch_stream($stream, SSH2_STREAM_STDIO);
            echo stream_get_contents($stream_out);
        }
    }
}