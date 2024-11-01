<?php

$sourcevideobb = file_get_contents( $x );

if (preg_match("/Video is not available/i", "$sourcevideobb")) {
    echo "";
} else {
    print "VideoBB.com <a href='$x' target='_blank'>LINK</a></br>";
}

?>