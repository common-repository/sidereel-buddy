<?php

$sourcevidxden = file_get_contents( $x );

if (preg_match("/No such file/i", "$sourcevidxden")) {
    echo "";
} else {
    print "Vidxden.com <a href='$x' target='_blank'>LINK</a></br>";
}

?>