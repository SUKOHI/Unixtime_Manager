<?php

class Unixtime_Manager {

	const TIME_YEAR = 31536000;
	const TIME_MONTH = 2592000;
	const TIME_WEEK = 604800;
	const TIME_DAY = 86400;
	const TIME_HOUR = 3600;
	const TIME_MINUTE = 60;
	const TIME_SECOND = 1;
	const MODE_BEFORE = 0;
	const MODE_AFTER = 1;
	
	private $_current_time;
	
	public function __construct() {
		
		$this->_current_time = time();
		
	}
	
	public function getCurrentTime() {
		
		return $this->_current_time;
		
	}
	
	public function getYearBefore($year) {
		
		return $this->calc_time(self::MODE_BEFORE, self::TIME_YEAR, $year);
		
	}
	
	public function getMonthBefore($month) {
		
		return $this->calc_time(self::MODE_BEFORE, self::TIME_MONTH, $month);
		
	}
	
	public function getWeekBefore($week) {
		
		return $this->calc_time(self::MODE_BEFORE, self::TIME_WEEK, $week);
		
	}
	
	public function getDayBefore($day) {
		
		return $this->calc_time(self::MODE_BEFORE, self::TIME_DAY, $day);
		
	}
	
	public function getHourBefore($hour) {
		
		return $this->calc_time(self::MODE_BEFORE, self::TIME_HOUR, $hour);
		
	}
	
	public function getMinuteBefore($minute) {
		
		return $this->calc_time(self::MODE_BEFORE, self::TIME_MINUTE, $minute);
		
	}
	
	public function getSecondBefore($second) {
		
		return $this->calc_time(self::MODE_BEFORE, self::TIME_SECOND, $second);
		
	}
	
	public function getYearAfter($year) {
	
		return $this->calc_time(self::MODE_AFTER, self::TIME_YEAR, $year);
	
	}
	
	public function getMonthAfter($month) {
	
		return $this->calc_time(self::MODE_AFTER, self::TIME_MONTH, $month);
	
	}
	
	public function getWeekAfter($week) {
	
		return $this->calc_time(self::MODE_AFTER, self::TIME_WEEK, $week);
	
	}
	
	public function getDayAfter($day) {
	
		return $this->calc_time(self::MODE_AFTER, self::TIME_DAY, $day);
	
	}
	
	public function getHourAfter($hour) {
	
		return $this->calc_time(self::MODE_AFTER, self::TIME_HOUR, $hour);
	
	}
	
	public function getMinuteAfter($minute) {
	
		return $this->calc_time(self::MODE_AFTER, self::TIME_MINUTE, $minute);
	
	}
	
	public function getSecondAfter($second) {
	
		return $this->calc_time(self::MODE_AFTER, self::TIME_SECOND, $second);
	
	}
	
	private function calc_time($mode, $time, $number) {
		
		$time_defference = $time * $number;
		
		if($mode == self::MODE_BEFORE) {
			
			$time_defference *= -1;
			
		}
		
		return $this->_current_time + $time_defference;
		
	}
	
}

/*** sample

	$um = new Unixtime_Manager();
	
	// Current
	
	$um->getCurrentTime();
	
	// Before
	
	$um->getYearBefore(1);
	$um->getMonthBefore(1);
	$um->getWeekBefore(1);
	$um->getDayBefore(1);
	$um->getHourBefore(1);
	$um->getMinuteBefore(1);
	$um->getSecondBefore(1);
	
	// After
	
	$um->getYearAfter(1);
	$um->getMonthAfter(1);
	$um->getWeekAfter(1);
	$um->getDayAfter(1);
	$um->getHourAfter(1);
	$um->getMinuteAfter(1);
	$um->getSecondAfter(1);

***/
