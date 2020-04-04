<?php

//echo shell_exec('date');
//string(29) "Wed Mar  6 14:18:08 PST 2013\n"
//echo exec('date');
//string(28) "Wed Mar  6 14:18:12 PST 2013"

echo shell_exec('whoami');
//string(9) "mark\n"
echo exec('whoami');
//string(8) "mark"

echo shell_exec('ipconfig');
//string(1244) "eth0      Link encap:Ethernet  HWaddr 10:bf:44:44:22:33  \n          inet addr:192.168.0.90  Bcast:192.168.0.255  Mask:255.255.255.0\n          inet6 addr: fe80::12bf:ffff:eeee:2222/64 Scope:Link\n          UP BROADCAST RUNNING MULTICAST  MTU:1500  Metric:1\n          RX packets:16264200 errors:0 dropped:1 overruns:0 frame:0\n          TX packets:7205647 errors:0 dropped:0 overruns:0 carrier:0\n          collisions:0 txqueuelen:1000 \n          RX bytes:13151177627 (13.1 GB)  TX bytes:2779457335 (2.7 GB)\n"...
echo exec('ipconfig');
//string(0) ""