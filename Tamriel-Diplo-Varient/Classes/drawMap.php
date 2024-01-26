<?php

defined('IN_CODE') or die('This script can not be run by itself.');

class TamrielVariant_drawMap extends drawMap {

	protected $countryColors = array(
		0 => array(162, 162, 162), // Neutral
		1 => array(255, 133, 161), // Cyrodiil
		2 => array(196, 255, 133), // Aldmeri Dominion
		3 => array(255, 208, 133), // Hammerfell
		4 => array(98, 163, 255), // Highrock
		5 => array(136, 245, 187), // Argonia
		6 => array(153, 130, 255), // Morrowind
	);

	protected function resources() {
			return array(
				'map'=>'variants/Tamriel-Diplo-Varient/Resources/territorymap.png',
				'army'=>'contrib/army.png',
				'fleet'=>'contrib/fleet.png',
				'names'=>'variants/Tamriel-Diplo-Varient/Resources/territorynames.png',
				'standoff'=>'images/icons/cross.png'
			);
	}
}

?>
