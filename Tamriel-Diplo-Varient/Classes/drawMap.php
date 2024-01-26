<?php

defined('IN_CODE') or die('This script can not be run by itself.');

class TamrielVariant_drawMap extends drawMap {

	protected $countryColors = array(
		0 => array(226, 198, 158), // Neutral
		1 => array(160,   1,  31), // USSR
		2 => array(1,    92, 135), // NATO
		3 => array(160,   1,  31), // USSR
		4 => array(1,    92, 135), // NATO
		5 => array(160,   1,  31), // USSR
		6 => array(1,    92, 135), // NATO
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
