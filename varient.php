<?php

defined('IN_CODE') or die('This script can not be run by itself.');

class ColdWarVariant extends WDVariant {
	public $id         = 91;
	public $mapID      = 91;
	public $name       = 'Tamriel';
	public $fullName   = 'Tamriel 4E 202';
	public $description= 'New 6 player yr 202 Tamriel varient of Diplomacy!';
	public $adapter    = 'Firehawk & Safari';
	public $version    = '1';
	public $codeVersion= '1.0.6';

	public $countries=array('Morrowind','Cyrodiil','Highrock','Hammerfell','Aldmeri dominion','Argonia');

	public function initialize() {
		parent::initialize();
		$this->supplyCenterTarget = 16;
	}

	public function __construct() {
		parent::__construct();
		$this->variantClasses['drawMap']            = 'Tamriel';
		$this->variantClasses['adjudicatorPreGame'] = 'Tamriel';
	}

	public function turnAsDate($turn) {
		if ( $turn==-1 ) return "Pre-game";
		else return ( $turn % 2 ? "Autumn, " : "Spring, " ).(floor($turn/2) + 202);
	}

	public function turnAsDateJS() {
		return 'function(turn) {
			if( turn==-1 ) return "Pre-game";
			else return ( turn%2 ? "Autumn, " : "Spring, " )+(Math.floor(turn/2) + 202);
		};';
	}
}

?>
