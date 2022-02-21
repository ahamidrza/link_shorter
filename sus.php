<?php
if (isset($_GET['nsu'])) {
    if (strpos($_GET['nsu'],".") !== false) {
        $short_characters = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ01234567890!@#$%^&*()_+}{|?|";
        $shorten_url = "";
        for ($i = 0; $i < 6; $i++) {
            $shorten_url .= $short_characters[rand(0, 62)];
        }
        file_put_contents("au.txt", file_get_contents("au.txt") . "||" . $_GET['nsu'] . "=" . $shorten_url);
        echo "bjq.rf.gd?osu=" . $shorten_url;
    } else {
        echo "false_url";
    }
}
?>