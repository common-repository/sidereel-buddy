<?php

$sourcenovamov = file_get_contents( $x );

if (preg_match("/file no longer exists/i", "$sourcenovamov")) {
    echo "";
} else {
    print "NovaMov.com <a href='$x' target='_blank'>LINK</a></br>";
}

?>