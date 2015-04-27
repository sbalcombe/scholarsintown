<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Scraper {
		
        public function scrape_events($services)
        {
			foreach ($services as $service)
			{
				$scraper = new $service();
				return $scraper->get_events();
			}
        }
}

class Scraper_keystonesymposia extends Scraper {

		private $events = array();

		public function get_events() {
			$url = 'http://www.keystonesymposia.org/index.cfm?e=Web.Meeting.List&tab1';
			$container = htmlqp($url, '#innerscroll3 > div');
			foreach($container->children('a')->not('h3') as $node)
			{
				foreach(htmlqp($node, 'a')->not('[name]') as $event)
				{
					$event->remove('br');
					$topic = htmlqp($event)->remove('span')->text();
					$details = htmlqp($event)->innerHTML(); //contains Date/Location/Organizers
					$break_split = explode('Scientific Organizers:', $details);
					$or_split = explode('|', $break_split[0]);
					
					$date = trim($or_split[0]);
					$location = trim($or_split[1]);
					$speakers = trim($break_split[1]);
					if($date != null && $location != null && $speakers != null)
					{
						$events[] = array(
								"topic" => $topic,
								"location" => $location,
								"speakers" => $speakers
							);
					}
				}
			}
			
			return var_dump($events);
		}
}

?>