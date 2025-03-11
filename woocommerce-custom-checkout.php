<?php
/**
 * Plugin Name: WooCommerce Custom Checkout
 * Plugin URI: https://www.tiendascanavini.pe
 * Description: Agrega los campos de Provincia y Distrito en el checkout de WooCommerce con dependencias dinámicas de Departamento.
 * Version: 1.1.0
 * Author: Tu Nombre
 * Author URI: https://www.tiendascanavini.pe
 * License: GPL2
 */

if (!defined('ABSPATH')) {
    exit;
}



// Agregar los nuevos campos en el checkout
add_filter( 'wc_city_select_cities', 'my_cities' );

function my_cities( $cities ) {
    $cities['PE'] = array(
        'CAL' => array(
            'Bellavista',
            'Callao',
            'Carmen de la Legua',
            'La Perla',
            'La Punta',
            'Mi Peru',
            'Ventanilla',
        ),
        'LMA' => array(
            'Ancón',
            'Ate',
            'Barranco',
            'Breña',
            'Carabayllo',
            'Chaclacayo',
            'Chorrillos',
            'Cieneguilla',
            'Comas',
            'El Agustino',
            'Independencia',
            'Jesús María',
            'La Molina',
            'La Victoria',
            'Lince',
            'Los Olivos',
            'Lurin',
            'Lurigancho',
            'Magdalena del Mar',
            'Miraflores',
            'Pachacamac',
            'Pueblo Libre',
            'Puente Piedra',
            'Pucusana',
            'Punta Hermosa',
            'Punta Negra',
            'Rímac',
            'San Bartolo',
            'San Borja',
            'San Isidro',
            'San Juan de Lurigancho',
            'San Juan de Miraflores',
            'San Luis',
            'San Martín de Porres',
            'San Miguel',
            'Santa Anita',
            'Santa Maria del Mar',
            'Santa Rosa',
            'Santiago de Surco',
            'Surquillo',
            'Villa El Salvador',
            'Villa María del Triunfo'
        ),
        'AMA' => array(
            'Bagua',
            'Bongara',
            'Chachapoyas',
            'Condorcanqui',
            'Luya',
            'Rodríguez de Mendoza',
            'Utcubamba'
        ),
        'ANC' => array(
            'Aija',
            'Antonio Raimondi',
            'Asunción',
            'Bolognesi',
            'Carlos Fermín Fitzcarrald',
            'Carhuaz',
            'Casma',
            'Corongo',
            'Huaraz',
            'Huaraz',
            'Huari',
            'Huarmey',
            'Huaylas',
            'Mariscal Luzuriaga',
            'Ocros',
            'Pallasca',
            'Pomabamba',
            'Recuay',
            'Santa',
            'Sihuas',
            'Yungay'
        ),
        'APU' => array(
            'Abancay',
            'Andahuaylas',
            'Antabamba',
            'Aymaraes',
            'Chincheros',
            'Cotabambas',
            'Grau'
        ),
        'ARE' => array(
            'Arequipa',
            'Camana',
            'Caraveli',
            'Castilla',
            'Caylloma',
            'Condesuyos',
            'Islay',
            'La Unión'
        ),
        'AYA' => array(
            'Cangallo',
            'Huamanga',
            'Huanca Sancos',
            'Huanta',
            'La Mar',
            'Lucanas',
            'Parinacochas',
            'Paucar Del Sara Sara',
            'Sucre',
            'Víctor Fajardo',
            'Vilcas Huamán'
        ),
        'CAJ' => array(
            'Cajabamba',
            'Cajamarca',
            'Celendín',
            'Chota',
            'Contumaza',
            'Cutervo',
            'Hualgayoc',
            'Jaén',
            'San Ignacio',
            'San Marcos',
            'San Miguel',
            'San Pablo',
            'Santa Cruz'
        ),
        'CUS' => array(
            'Acomayo',
            'Anta',
            'Calca',
            'Canas',
            'Canchis',
            'Chumbivilcas',
            'Cusco',
            'Espinar',
            'La Convencion',
            'Paruro',
            'Paucartambo',
            'Quispicanchi',
            'Urubamba'
        ),
        'HUV' => array(
            'Acobamba',
            'Angaraes',
            'Castrovirreyna',
            'Churcampa',
            'Huancavelica',
            'Huaytara',
            'Tayacaja'
        ),
        'HUC' => array(
            'Ambo',
            'Dos de Mayo',
            'Huacaybamba',
            'Huamalies',
            'Huánuco',
            'Lauricocha',
            'Leoncio Prado',
            'Marañón',
            'Pachitea',
            'Puerto Inca',
            'Yarowilca'
        ),
        'ICA' => array(
            'Chincha',
            'Ica',
            'Nazca',
            'Palpa',
            'Pisco'
        ),
        'JUN' => array(
            'Chanchamayo',
            'Chupaca',
            'Concepción',
            'Huancayo',
            'Jauja',
            'Junín',
            'Satipo',
            'Tarma',
            'Yauli'
        ),
        'LAL' => array(
            'Ascope',
            'Bolívar',
            'Chepén',
            'Gran Chimú',
            'Julcán',
            'Otuzco',
            'Pataz',
            'Pacasmayo',
            'Sánchez Carrión',
            'Santiago de Chuco',
            'Trujillo',
            'Virú'
        ),
        'LAM' => array(
            'Ferreñafe',
            'Lambayeque',
            'Chiclayo'
        ),
        'LIM' => array(
            'Barranca',
            'Cajatambo',
            'Cañéte',
            'Canta',
            'Huacho',
            'Huaral',
            'Huarochirí',
            'Huaura',
            'Oyón',
            'Yauyos'
        ),
        'LOR' => array(
            'Alto Amazonas',
            'Datem del Marañón',
            'Loreto',
            'Mariscal Ramón Castilla',
            'Maynas',
            'Putumayo',
            'Requena',
            'Ucayali'
        ),
        'MDD' => array(
            'Manu',
            'Tahuamanu',
            'Tambopata'
        ),
        'MOQ' => array(
            'General Sánchez Cerro',
            'Ilo', 
            'Mariscal Nieto',
        ),
        'PAS' => array(
            'Daniel Alcides Carrión',
            'Oxapampa',
            'Pasco',
        ),
        'PIU' => array(
            'Ayabaca',
            'Huancabamba',
            'Morropón',
            'Paita',
            'Piura',
            'Sechura',
            'Sullana',
            'Talara'
        ),
        'PUN' => array(
            'Azángaro',
            'Carabaya',
            'Chucuito',
            'El Collao',
            'Huancane',
            'Lampa',
            'Melgar',
            'Moho',
            'Puno',
            'San Antonio de Putina',
            'San Román',
            'Sandía',
            'Yunguyo'
        ),
        'SAM' => array(
            'Bellavista',
            'El Dorado',
            'Huallaga',
            'Lamas',
            'Mariscal Cáceres',
            'Moyobamba',
            'Picota',
            'Rioja',
            'San Martín',
            'Tocache'
        ),
        'TAC' => array(
            'Candarave',
            'Jorge Basadre',
            'Tacna',
            'Tarata'
        ),
        'TUM' => array(
            'Contralmirante Villar',
            'Tumbes',
            'Zarumilla'
        ),
        'UCA' => array(
            'Atalaya',
            'Coronel Portillo',
            'Padre Abad',
            'Purus'
        )
    );
    return $cities;
}
