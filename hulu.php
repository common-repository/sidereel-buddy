<?php

$sourcehulu = file_get_contents( $x );

if (preg_match("/the page may have moved/i", "$sourcehulu")) {
    echo "";
} else {
    print "Hulu.com <a href='$x' target='_blank'>LINK</a></br>";
}

?>