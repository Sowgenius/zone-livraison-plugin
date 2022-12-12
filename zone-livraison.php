<?php
/**
 * Plugin Name: Zone Livraison Sn 
 * Author: Amadou Korka Sow
 * Author URI: https://www.korkasow.com
 * Description: This plugin add layers to wp city select to help create shipping zone in Senegal for woocommerce
 * Version: 1.1.0
 * License: GPL2 or later 
 * License URL: http://www.gnu.org/licenses/gpl-2.0.txt
 * text-domain: zone-livraison-sn
*/

defined( 'ABSPATH' ) or die('Please get proper access');

add_filter('woocommerce_states', 'custom_shipping_zone');

function custom_shipping_zone($states) {

    $map = array();
  	
	$cities = array(
        'SN-DK0' => array(
            'city'     => 'Dakar',
            'division' => 'Mermoz',
        ),
        'SN-DK1' => array(
            'city'     => 'Dakar',
            'division' => 'Sacré-Cœur',
        ),
        'SN-DK2' => array(
            'city'     => 'Dakar',
            'division' => 'Ngor',
        ),
        'SN-DK3' => array(
            'city'     => 'Dakar',
            'division' => 'Ouakam',
        ),
        'SN-DK4' => array(
            'city'     => 'Dakar',
            'division' => 'Yoff',
        ),
        'SN-DK5' => array(
            'city'     => 'Dakar',
            'division' => 'Dakar-Plateau',
        ),
        'SN-DK6' => array(
            'city'     => 'Dakar',
            'division' => 'Fann',
        ),
        'SN-DK7' => array(
            'city'     => 'Dakar',
            'division' => 'Point E',
        ),
        'SN-DK8' => array(
            'city'     => 'Dakar',
            'division' => 'Amitié ',
        ),
        'SN-DK9' => array(
            'city'     => 'Dakar',
            'division' => 'Gueule Tapée',
        ),
        'SN-DK10' => array(
            'city'     => 'Dakar',
            'division' => 'Fass',
        ),
        'SN-DK11' => array(
            'city'     => 'Dakar',
            'division' => 'Colobane',
        ),
        'SN-DK12' => array(
            'city'     => 'Dakar',
            'division' => 'Médina',
        ),
        'SN-DK13' => array(
            'city'     => 'Dakar',
            'division' => 'Biscuiterie',
        ),
        'SN-DK14' => array(
            'city'     => 'Dakar',
            'division' => 'Derklé ',
        ),
        'SN-DK15' => array(
            'city'     => 'Dakar',
            'division' => 'Dieuppeul ',
        ),
        'SN-DK16' => array(
            'city'     => 'Dakar',
            'division' => 'Grand Dakar ',
        ),
        'SN-DK17' => array(
            'city'     => 'Dakar',
            'division' => 'Bel-Air',
        ),
        'SN-DK18' => array(
            'city'     => 'Dakar',
            'division' => 'Hann ',
        ),
        'SN-DK19' => array(
            'city'     => 'Dakar',
            'division' => 'HLM ',
        ),
        'SN-DK20' => array(
            'city'     => 'Dakar',
            'division' => 'Sicap-Liberté ',
        ),
        'SN-DK21' => array(
            'city'     => 'Dakar',
            'division' => 'Dieuppeul ',
        ),
        'SN-DK22' => array(
            'city'     => 'Dakar',
            'division' => 'Cambérène ',
        ),
        'SN-DK23' => array(
            'city'     => 'Dakar',
            'division' => 'Grand Yoff ',
        ),
        'SN-DK24' => array(
            'city'     => 'Dakar',
            'division' => 'Parcelles Assainies U1-26',
        ),
        'SN-DK25' => array(
            'city'     => 'Dakar',
            'division' => 'Patte d\'Oie',
        ),
        'SN-DK26' => array(
            'city'     => 'Dakar',
            'division' => 'Zone de Captage ',
        ),
        'SN-DK27' => array(
            'city'     => 'Dakar',
            'division' => 'Front de Terre ',
        ),
        'SN-DK28' => array(
            'city'     => 'Dakar',
            'division' => 'Maristes',
        ),
        'SN-DK29' => array(
            'city'     => 'Dakar',
            'division' => 'Golf',
        ),
        'SN-DK30' => array(
            'city'     => 'Dakar',
            'division' => 'Mamelles',
        ),
        'SN-DK31' => array(
            'city'     => 'Dakar',
            'division' => 'Keur Gorgui ',
        ),
        'SN-DK32' => array(
            'city'     => 'Dakar',
            'division' => 'Djily Mbaye ',
        ),
        'SN-DK33' => array(
            'city'     => 'Dakar',
            'division' => 'Fann',
        ),
        'SN-DK34' => array(
            'city'     => 'Dakar',
            'division' => 'Zone A',
        ),
        'SN-DK35' => array(
            'city'     => 'Dakar',
            'division' => 'Zone B',
        ),
        'SN-DK36' => array(
            'city'     => 'Dakar',
            'division' => 'Reubeuss',
        ),
        'SN-DK37' => array(
            'city'     => 'Dakar',
            'division' => 'Niary Tally',
        ),
        'SN-DK38' => array(
            'city'     => 'Dakar',
            'division' => 'Foire',
        ),
        'SN-DK39' => array(
            'city'     => 'Dakar',
            'division' => 'Fadia',
        ),
        'SN-DK40' => array(
            'city'     => 'Dakar',
            'division' => 'Pikine',
        ),
        'SN-DK41' => array(
            'city'     => 'Dakar',
            'division' => 'Guediawaye',
        ),
        'SN-DK42' => array(
            'city'     => 'Dakar',
            'division' => 'Thiaroye-Sur-Mer',
        ),
        'SN-DK43' => array(
            'city'     => 'Dakar',
            'division' => 'Thiaroye-Azur',
        ),
        'SN-DK44' => array(
            'city'     => 'Dakar',
            'division' => 'Mbao',
        ),
        'SN-DK45' => array(
            'city'     => 'Dakar',
            'division' => 'Diameguene',
        ),
        'SN-DK46' => array(
            'city'     => 'Dakar',
            'division' => 'Sips',
        ),
        'SN-DK47' => array(
            'city'     => 'Dakar',
            'division' => 'Keur Massar',
        ),
        'SN-DK48' => array(
            'city'     => 'Dakar',
            'division' => 'Boune',
        ),
        'SN-DK49' => array(
            'city'     => 'Dakar',
            'division' => 'Malika',
        ),
        'SN-DK50' => array(
            'city'     => 'Dakar',
            'division' => 'Niague',
        ),
        'SN-DK51' => array(
            'city'     => 'Dakar',
            'division' => 'Tivaouane Peulh',
        ),
        'SN-DK52' => array(
            'city'     => 'Dakar',
            'division' => 'Rufisque',
        ),
        'SN-DK53' => array(
            'city'     => 'Dakar',
            'division' => 'Centenaire',
        ),
        'SN-DK54' => array(
            'city'     => 'Dakar',
            'division' => 'Gibraltar',
        ),
        'SN-DK55' => array(
            'city'     => 'Dakar',
            'division' => 'Castors',
        ),
        'SN-DK56' => array(
            'city'     => 'Dakar',
            'division' => 'Sipres',
        ),
        'SN-DK57' => array(
            'city'     => 'Dakar',
            'division' => 'Almadies',
        ),
        'SN-DK58' => array(
            'city'     => 'Dakar',
            'division' => 'Dalifort',
        ),
		'SN-DK59' => array(
            'city'     => 'Dakar',
            'division' => 'Yeumbeul',
        ),
		'SN-DK60' => array(
            'city'     => 'Dakar',
            'division' => 'Bourguiba',
        ),
		'SN-DK61' => array(
            'city'     => 'Dakar',
            'division' => 'Scat Urbam',
        ),
		'SN-DK62' => array(
            'city'     => 'Dakar',
            'division' => 'Virage',
        ),
        'SN-DB' => array(
            'city'     => 'Diourbel',
            'division' => 'Diourbel',
        ),
        'SN-FK' => array(
            'city'     => 'Fatick',
            'division' => 'Fatick',
        ),
        'SN-KA' => array(
            'city'     => 'Kaffrine',
            'division' => 'Kaffrine',
        ),
        'SN-KL' => array(
            'city'     => 'Kaolack',
            'division' => 'Kaolack',
        ),
        'SN-KL01' => array(
            'city'     => 'Kaolack',
            'division' => 'Nioro Du Rip',
        ),
        'SN-KE' => array(
            'city'     => 'Kédougou',
            'division' => 'Kédougou',
        ),
        'SN-KD' => array(
            'city'     => 'Kolda',
            'division' => 'Kolda',
        ),
        'SN-KD' => array(
            'city'     => 'Kolda',
            'division' => 'Vélingara',
        ),
        'SN-LG' => array(
            'city'     => 'Louga',
            'division' => 'Louga',
        ),
        'SN-LG1' => array(
            'city'     => 'Louga',
            'division' => 'Dahra',
        ),
        'SN-LG2' => array(
            'city'     => 'Louga',
            'division' => 'Linguere',
        ),
        'SN-LG2' => array(
            'city'     => 'Louga',
            'division' => 'Kébémer',
        ),
        'SN-MT' => array(
            'city'     => 'Matam',
            'division' => 'Matam',
        ),
        'SN-MT01' => array(
            'city'     => 'Matam',
            'division' => 'Ourossogui',
        ),
        'SN-MT02' => array(
            'city'     => 'Matam',
            'division' => 'Ranerou Ferlo',
        ),
        'SN-MT03' => array(
            'city'     => 'Matam',
            'division' => 'Kanel',
        ),
        'SN-SL' => array(
            'city'     => 'Saint-Louis',
            'division' => 'Saint-Louis',
        ),
        'SN-SL01' => array(
            'city'     => 'Saint-Louis',
            'division' => 'Richard Toll',
        ),
        'SN-SL02' => array(
            'city'     => 'Saint-Louis',
            'division' => 'Dagana',
        ),
        'SN-SL03' => array(
            'city'     => 'Saint-Louis',
            'division' => 'Podor',
        ),
        'SN-SE' => array(
            'city'     => 'Sédhiou',
            'division' => 'Sédhiou',
        ),
        'SN-TC' => array(
            'city'     => 'Tambacounda',
            'division' => 'Tambacounda',
        ),
        'SN-TC01' => array(
            'city'     => 'Tambacounda',
            'division' => 'Kidira',
        ),
        'SN-TC02' => array(
            'city'     => 'Tambacounda',
            'division' => 'Bakel',
        ),
        'SN-TC03' => array(
            'city'     => 'Tambacounda',
            'division' => 'Goudiry',
        ),
        'SN-TC04' => array(
            'city'     => 'Tambacounda',
            'division' => 'Koumpentoum',
        ),
        'SN-TH' => array(
            'city'     => 'Thiès',
            'division' => 'Thiès',
        ),
        'SN-TH1' => array(
            'city'     => 'Thiès',
            'division' => 'Mbour',
        ),
		'SN-TH2' => array(
            'city'     => 'Thiès',
            'division' => 'Saly',
        ),
		'SN-TH3' => array(
            'city'     => 'Thiès',
            'division' => 'Ngaparou',
        ),
		'SN-TH4' => array(
            'city'     => 'Thiès',
            'division' => 'Tivaouane',
        ),
		'SN-TH5' => array(
            'city'     => 'Thiès',
            'division' => 'Diass',
        ),
        'SN-ZG' => array(
            'city'     => 'Ziguinchor',
            'division' => 'Ziguinchor',
        ),
		'SN-ZG1' => array(
            'city'     => 'Ziguinchor',
            'division' => 'Bignona',
        )
    );
		
     foreach ( $cities as $city => $cityValue ) {
        $map[$city] = $cityValue['city'] . ', '. $cityValue['division'];
    }
    
    $states['SN'] = $map;
    
    return $states;
}
