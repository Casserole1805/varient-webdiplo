<?php
defined('IN_CODE') or die('This script can not be run by itself.');

class TamrielVariant_adjudicatorPreGame extends adjudicatorPreGame {

	protected $countryUnits = array(
		'Cyrodiil' => array('Bru' =>'Army', 'Imp' =>'Army', 'Anv'=>'Fleet', 'Ley'=>'Fleet'),
		'Aldmeri dominion' => array('Eld' =>'Army', 'Clo' =>'fleet', 'Ali'=>'Fleet'),
		'Hammerfell' => array('Cra' =>'Army', 'Sen' =>'Army', 'Heg'=>'Fleet'),
		'Highrock' => array('Way' =>'Army', 'Jeh' =>'Army', 'Dag'=>'Fleet'),
		'Morrowind' => array('Bla' =>'Army', 'Nec' =>'Army', 'Tel'=>'Fleet'),
		'Argonia' => array('Tho' =>'Army', 'Hel' =>'Army', 'Lmo'=>'Fleet'),
	);

}
