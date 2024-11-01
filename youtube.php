<?php

$sourceyoutube = file_get_contents( $x );

if (preg_match("/not available/i", "$sourceyoutube")) {
    echo "";
} else {
    print "Youtube.com <a href='$x' target='_blank'>LINK</a></br>";
}

?>