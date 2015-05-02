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
					if($date != null && $topic != null && $location != null && $speakers != null)
					{
						$events[] = array(
								"date" => $date,
								"topic" => $topic,
								"location" => $location,
								"speakers" => $speakers
							);
					}
				}
			}
			
			return $events;
		}
}

class Scraper_GRC extends Scraper {

		private $events = array();

		public function get_events() {
			$url = 'https://www.grc.org/meetings.aspx?year=2015'; //TODO: append current year
			$container = htmlqp($url, '#ctl00_ContentPlaceHolder_PageContents_GridView_MeetingList');
			$string = "";
			foreach($container->children('tr[onclick]') as $node)
			{
				$onclick_attr = $node->attr('onclick');
				$matches = array();
				$event_url_quoted = preg_match('/\'.*\'/', $onclick_attr, $matches);
				$event_url = "http://www.grc.org/" . str_replace('\'', '', $matches[0]);
				$event_page = htmlqp($event_url, '#ctl00_ContentPlaceHolder_PageContents_Panel_Default');
				$event_info = $event_page->children('.tblProgramsHeader');
				$topic = $event_info->find('.divMeetingsHeaderSubtitle')->text();
				$event_details = $event_info->find('.tdProgramsHeaderMeetingInfo table td:first')->text();
				$event_details_string = explode('Location', $event_details);
				$date = trim(str_replace('Location', '', $event_details_string[0]));
				$location = trim(str_replace('Dates', '', $event_details_string[1]));
				
				//Getting speakers
				$speakers = "";
				$schedule = $event_page->find('table.tblProgram');
				foreach($schedule->find('tr td')->filter('b') as $row)
				{
					$speakers .= $row->children('b')->text() . ', ';
				}
				$speakers = chop($speakers, ', ');
				
				if($date != null && $topic != null && $location != null && $speakers != null)
				{
					$events[] = array(
							"date" => $date,
							"topic" => $topic,
							"location" => $location,
							"speakers" => $speakers
						);
				}
				
			}
			
			return events
		}
}

?>