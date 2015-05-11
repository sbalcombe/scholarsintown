<?php

include('Scraper.php');
$scraper = new Scraper();
echo $scraper->scrape_events(array(
"Scraper_GRC"
));


?>