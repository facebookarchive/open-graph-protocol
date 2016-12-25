<?php
/**
 * Open Graph Protocol data class. Define and validate OGP values
 */


/**
 * Validate inputted text against Open Graph Protocol requirements by parameter.
 *
 * @link http://opengraphprotocol.org/ Open Graph Protocol
 * @package open-graph-protocol
 * @version 1.2
 */
class Open_Graph_Protocol {
	/**
	 * Version
	 */
	const VERSION = '1.2';

	/**
	 * Page classification according to a pre-defined set of base types.
	 *
	 * @var string
	 * @since 1.0
	 */
	protected $type;

	/**
	 * The title of your object as it should appear within the graph.
	 *
	 * @var string
	 * @since 1.0
	 */
	protected $title;

	/**
	 * If your object is part of a larger web site, the name which should be displayed for the overall site.
	 *
	 * @var string
	 * @since 1.0
	 */
	protected $site_name;

	/**
	 * A one to two sentence description of your object.
	 *
	 * @var string
	 * @since 1.0
	 */
	protected $description;

	/**
	 * The canonical URL of your object that will be used as its permanent ID in the graph.
	 *
	 * @var string
	 * @since 1.0
	 */
	protected $url;

	/**
	 * An image URL which should represent your object within the graph.
	 *
	 * @var string
	 * @since 1.0
	 */
	protected $image;

	/**
	 * A MP3 audio URL
	 *
	 * @var string
	 * @since 1.2
	 */
	protected $audio;

	/**
	 * A SWF video player URL
	 *
	 * @var string
	 * @since 1.2
	 */
	protected $video;

	/**
	 * Location north or south of the equator
	 *
	 * @var float
	 * @since 1.0
	 */
	protected $latitude;

	/**
	 * Angular distance of a point's meridian from the Prime (Greenwich) Meridian
	 *
	 * @var float
	 * @since 1.0
	 */
	protected $longitude;

	/**
	 * Street-level address. Most commonly defined as a combination of street number, thoroughfare name, thoroughfare type
	 *
	 * @var string
	 * @link http://www.upu.int/en/resources/postcodes/addressing-systems.html Universal Postal Union address spec
	 * @since 1.0
	 */
	protected $street_address;

	/**
	 * Locality, city, or municipality
	 *
	 * @var string
	 * @since 1.0
	 */
	protected $locality;

	/**
	 * Abbreviated region name
	 *
	 * @var string
	 * @todo ISO 3166-2
	 * @since 1.0
	 */
	protected $region;

	/**
	 * ISO 3166-1 alpha-2 country code
	 *
	 * @var string
	 * @since 1.0
	 */
	protected $country_name;

	/**
	 * Postal code sorting used within a country. Known as a ZIP (Zone Improvement Plan) code in the United States and the Philippines and PIN (Postal Index Number) code in India.
	 *
	 * @var string
	 * @link http://www.barnesandnoble.com/help/cds2.asp?PID=8134 Barnes & Noble postal code help
	 * @since 1.0
	 */
	protected $postal_code;

	/**
	 * International Standard Book Number
	 *
	 * @var string
	 * @since 1.1
	 */
	protected $isbn;

	/**
	 * Universal Product Code, widely used product numbers in United States and Canada.
	 *
	 * @var string
	 * @since 1.1
	 */
	protected $upc;

	/**
	 * ITU-T E.164 number describing a voice termination point within a public switched telephone network
	 *
	 * @var string
	 * @since 1.0
	 */
	protected $phone_number;

	/**
	 * ITU-T E.164 number describing a fax data termination point within a public switched telephone network
	 *
	 * @var string
	 * @since 1.0
	 */
	protected $fax_number;

	/**
	 * RFC 822 compliant email address
	 *
	 * @var string
	 * @since 1.0
	 */
	protected $email;

	/**
	 * ISO 3166-1 aplha-2 country codes
	 *
	 * @link http://www.iso.org/iso/country_codes/iso_3166_code_lists/english_country_names_and_code_elements.htm Official ISO country code list
	 */
	public static function country_codes() {
		return array(
			array('AF', _('Afghanistan')),
			array('AX', _('Aland Islands')),
			array('AL', _('Albania')),
			array('DZ', _('Algeria')),
			array('AS', _('American Samoa')),
			array('AD', _('Andorra')),
			array('AO', _('Angola')),
			array('AI', _('Anguilla')),
			array('AQ', _('Antarctica')),
			array('AG', _('Antigua and Barbuda')),
			array('AR', _('Argentina')),
			array('AM', _('Armenia')),
			array('AW', _('Aruba')),
			array('AU', _('Australia')),
			array('AT', _('Austria')),
			array('AZ', _('Azerbaijan')),
			array('BS', _('Bahamas')),
			array('BH', _('Bahrain')),
			array('BD', _('Bangladesh')),
			array('BB', _('Barbados')),
			array('BY', _('Belarus')),
			array('BE', _('Belgium')),
			array('BZ', _('Belize')),
			array('BJ', _('Benin')),
			array('BM', _('Bermuda')),
			array('BT', _('Bhutan')),
			array('BO', _('Bolivia')),
			array('BA', _('Bosnia and Herzegovina')),
			array('BW', _('Botswana')),
			array('BV', _('Bouvet Island')),
			array('BR', _('Brazil')),
			array('IO', _('British Indian Ocean Territory')),
			array('BN', _('Brunei Darussalam')),
			array('BG', _('Bulgaria')),
			array('BF', _('Burkina Faso')),
			array('BI', _('Burundi')),
			array('KH', _('Cambodia')),
			array('CM', _('Cameroon')),
			array('CA', _('Canada')),
			array('CV', _('Cape Verde')),
			array('KY', _('Cayman Islands')),
			array('CF', _('Central African Republic')),
			array('TD', _('Chad')),
			array('CL', _('Chile')),
			array('CN', _('China')),
			array('CX', _('Christmas Island')),
			array('CC', _('Cocos (Keeling) Islands')),
			array('CO', _('Colombia')),
			array('KM', _('Comoros')),
			array('CG', _('Congo')),
			array('CD', _('Congo, The Democratic Republic of the')),
			array('CK', _('Cook Islands')),
			array('CR', _('Costa Rica')),
			array('CI', _('Cote d\'Ivoire')),
			array('HR', _('Croatia')),
			array('CU', _('Cuba')),
			array('CY', _('Cyprus')),
			array('CZ', _('Czech Republic')),
			array('DK', _('Denmark')),
			array('DJ', _('Djibouti')),
			array('DM', _('Dominica')),
			array('DO', _('Dominican Republic')),
			array('EC', _('Ecuador')),
			array('EG', _('Egypt')),
			array('SV', _('El Salvador')),
			array('GQ', _('Equatorial Guinea')),
			array('ER', _('Eritrea')),
			array('EE', _('Estonia')),
			array('ET', _('Ethiopia')),
			array('FK', _('Falkland Islands (Malvinas)')),
			array('FO', _('Faroe Islands')),
			array('FJ', _('Fiji')),
			array('FI', _('Finland')),
			array('FR', _('France')),
			array('GF', _('French Guiana')),
			array('PF', _('French Polynesia')),
			array('TF', _('French Southern Territories')),
			array('GA', _('Gabon')),
			array('GM', _('Gambia')),
			array('GE', _('Georgia')),
			array('DE', _('Germany')),
			array('GH', _('Ghana')),
			array('GI', _('Gibraltar')),
			array('GR', _('Greece')),
			array('GL', _('Greenland')),
			array('GD', _('Grenada')),
			array('GP', _('Guadeloupe')),
			array('GU', _('Guam')),
			array('GT', _('Guatemala')),
			array('GG', _('Guernsey')),
			array('GN', _('Guinea')),
			array('GW', _('Guinea-Bissau')),
			array('GY', _('Guyana')),
			array('HT', _('Haiti')),
			array('HM', _('Heard Island and McDonald Islands')),
			array('VA', _('Holy See (Vatican City State)')),
			array('HN', _('Honduras')),
			array('HK', _('Hong Kong')),
			array('HU', _('Hungary')),
			array('IS', _('Iceland')),
			array('IN', _('India')),
			array('ID', _('Indonesia')),
			array('IR', _('Iran, Islamic Republic of')),
			array('IQ', _('Iraq')),
			array('IE', _('Ireland')),
			array('IM', _('Isle of Man')),
			array('IL', _('Israel')),
			array('IT', _('Italy')),
			array('JM', _('Jamaica')),
			array('JP', _('Japan')),
			array('JE', _('Jersey')),
			array('JO', _('Jordan')),
			array('KZ', _('Kazakhstan')),
			array('KE', _('Kenya')),
			array('KI', _('Kiribati')),
			array('KP', _('Korea, Democratic People\'s Republic of')),
			array('KR', _('Korea, Republic of')),
			array('KW', _('Kuwait')),
			array('KG', _('Kyrgyzstan')),
			array('LA', _('Lao People\'s Democratic Republic')),
			array('LV', _('Latvia')),
			array('LB', _('Lebanon')),
			array('LS', _('Lesotho')),
			array('LR', _('Liberia')),
			array('LY', _('Libyan Arab Jamahiriya')),
			array('LI', _('Liechtenstein')),
			array('LT', _('Lithuania')),
			array('LU', _('Luxembourg')),
			array('MO', _('Macao')),
			array('MK', _('Macedonia, The Former Yugoslav Republic of')),
			array('MG', _('Madagascar')),
			array('MW', _('Malawi')),
			array('MY', _('Malaysia')),
			array('MV', _('Maldives')),
			array('ML', _('Mali')),
			array('MT', _('Malta')),
			array('MH', _('Marshall Islands')),
			array('MQ', _('Martinique')),
			array('MR', _('Mauritania')),
			array('MU', _('Mauritius')),
			array('YT', _('Mayotte')),
			array('MX', _('Mexico')),
			array('FM', _('Micronesia, Federated States of')),
			array('MD', _('Moldova')),
			array('MC', _('Monaco')),
			array('MN', _('Mongolia')),
			array('ME', _('Montenegro')),
			array('MS', _('Montserrat')),
			array('MA', _('Morocco')),
			array('MZ', _('Mozambique')),
			array('MM', _('Myanmar')),
			array('NA', _('Namibia')),
			array('NR', _('Nauru')),
			array('NP', _('Nepal')),
			array('NL', _('Netherlands')),
			array('AN', _('Netherlands Antilles')),
			array('NC', _('New Caledonia')),
			array('NZ', _('New Zealand')),
			array('NI', _('Nicaragua')),
			array('NE', _('Niger')),
			array('NG', _('Nigeria')),
			array('NU', _('Niue')),
			array('NF', _('Norfolk Island')),
			array('MP', _('Northern Mariana Islands')),
			array('NO', _('Norway')),
			array('OM', _('Oman')),
			array('PK', _('Pakistan')),
			array('PW', _('Palau')),
			array('PS', _('Palestinian Territory, Occupied')),
			array('PA', _('Panama')),
			array('PG', _('Papua New Guinea')),
			array('PY', _('Paraguay')),
			array('PE', _('Peru')),
			array('PH', _('Philippines')),
			array('PN', _('Pitcairn')),
			array('PL', _('Poland')),
			array('PT', _('Portugal')),
			array('PR', _('Puerto Rico')),
			array('QA', _('Qatar')),
			array('RE', _('Reunion')),
			array('RO', _('Romania')),
			array('RU', _('Russian Federation')),
			array('RW', _('Rwanda')),
			array('BL', _('Saint Barthelemy')),
			array('SH', _('Saint Helena')),
			array('KN', _('Saint Kitts and Nevis')),
			array('LC', _('Saint Lucia')),
			array('MF', _('Saint Martin')),
			array('PM', _('Saint Pierre and Miquelon')),
			array('VC', _('Saint Vincent and the Grenadines')),
			array('WS', _('Samoa')),
			array('SM', _('San Marino')),
			array('ST', _('Sao Tome and Principe')),
			array('SA', _('Saudi Arabia')),
			array('SN', _('Senegal')),
			array('RS', _('Serbia')),
			array('SC', _('Seychelles')),
			array('SL', _('Sierra Leone')),
			array('SG', _('Singapore')),
			array('SK', _('Slovakia')),
			array('SI', _('Slovenia')),
			array('SB', _('Solomon Islands')),
			array('SO', _('Somalia')),
			array('ZA', _('South Africa')),
			array('GS', _('South Georgia and the South Sandwich Islands')),
			array('ES', _('Spain')),
			array('LK', _('Sri Lanka')),
			array('SD', _('Sudan')),
			array('SR', _('Suriname')),
			array('SJ', _('Svalbard and Jan Mayen')),
			array('SZ', _('Swaziland')),
			array('SE', _('Sweden')),
			array('CH', _('Switzerland')),
			array('SY', _('Syrian Arab Republic')),
			array('TW', _('Taiwan, Province of China')),
			array('TJ', _('Tajikistan')),
			array('TZ', _('Tanzania, United Republic of')),
			array('TH', _('Thailand')),
			array('TL', _('Timor-Leste')),
			array('TG', _('Togo')),
			array('TK', _('Tokelau')),
			array('TO', _('Tonga')),
			array('TT', _('Trinidad and Tobago')),
			array('TN', _('Tunisia')),
			array('TR', _('Turkey')),
			array('TM', _('Turkmenistan')),
			array('TC', _('Turks and Caicos Islands')),
			array('TV', _('Tuvalu')),
			array('UG', _('Uganda')),
			array('UA', _('Ukraine')),
			array('AE', _('United Arab Emirates')),
			array('GB', _('United Kingdom')),
			array('US', _('United States')),
			array('UM', _('United States Minor Outlying Islands')),
			array('UY', _('Uruguay')),
			array('UZ', _('Uzbekistan')),
			array('VU', _('Vanuatu')),
			array('VE', _('Venezuela')),
			array('VN', _('Viet Nam')),
			array('VG', _('Virgin Islands, British')),
			array('VI', _('Virgin Islands, U.S.')),
			array('WF', _('Wallis and Futuna')),
			array('EH', _('Western Sahara')),
			array('YE', _('Yemen')),
			array('ZM', _('Zambia')),
			array('ZW', _('Zimbabwe'))
		);
	}

	/**
	 * Cleans a URL string, then checks to see if a given URL is addressable, returns a 200 OK response, and matches the accepted Internet media types (if provided).
	 *
	 * @param String $url Publicly addressable URL
	 * @param array $accepted_mimes Given URL correspond to an accepted Internet media (MIME) type.
	 * @return String cleaned URL string, or empty string on failure.
	 */
	public static function is_valid_url( $url, array $accepted_mimes = array() ) {
		if ( !is_string( $url ) || empty( $url ) )
			return '';

		/**
		 * Validate URI string by letting PHP break up the string and put it back together again
		 * Excludes username:password and port number URI parts
		 */
		$url_parts = parse_url( $url );
		$url = '';
		if ( isset( $url_parts['scheme'] ) && in_array( $url_parts['scheme'], array('http', 'https'), true ) ) {
			$url = "{$url_parts['scheme']}://{$url_parts['host']}{$url_parts['path']}";
			if ( empty( $url_parts['path'] ) )
				$url .= '/';
			if ( !empty( $url_parts['query'] ) )
				$url .= '?' . $url_parts['query'];
			if ( !empty( $url_parts['fragment'] ) )
				$url .= '#' . $url_parts['fragment'];
		}

		if ( !empty( $url ) ) {
			// test if URL exists
			$ch = curl_init( $url );
			curl_setopt( $ch, CURLOPT_TIMEOUT, 5 );
			curl_setopt( $ch, CURLOPT_FORBID_REUSE, true );
			curl_setopt( $ch, CURLOPT_NOBODY, true ); // HEAD
			curl_setopt( $ch, CURLOPT_USERAGENT, 'Open Graph Protocol validator ' . self::VERSION . ' (+http://opengraphprotocol.org/)' );
			if ( !empty($accepted_mimes) )
				curl_setopt( $ch, CURLOPT_HTTPHEADER, array( 'Accept: ' . implode( ',', $accepted_mimes ) ) );
			$response = curl_exec( $ch );
			if ( curl_getinfo( $ch, CURLINFO_HTTP_CODE ) == 200 ) {
				if ( !empty($accepted_mimes) ) {
					$content_type = explode( ';', curl_getinfo( $ch, CURLINFO_CONTENT_TYPE ) );
					if ( empty( $content_type ) || !in_array( $content_type[0], $accepted_mimes ) )
						return '';
				}
				// CURLINFO_CONTENT_LENGTH_DOWNLOAD
				// height, width absolute and ratio constraints for images
			} else {
				return '';
			}
		}
		return $url;
	}

	/**
	 * A list of allowed page types in the Open Graph Protocol
	 *
	 * @param Bool $flatten true for grouped types one level deep
	 * @link http://opengraphprotocol.org/#types Open Graph Protocol object types
	 * @return array Array of Open Graph Protocol object types
	 */
	public static function supported_types( $flatten=false ) {
		$types = array(
			_('Activities') => array(
				'activity' => _('Activity'),
				'sport' => _('Sport')
			),
			_('Businesses') => array(
				'company' => _('Company'),
				'bar' => _('Bar'),
				'cafe' => _('Cafe'),
				'hotel' => _('Hotel'),
				'restaurant' => ('Restaurant')
			),
			_('Groups') => array(
				'cause' => _('Cause'),
				'sports_league' => _('Sports league'),
				'sports_team' => _('Sports team')
			),
			_('Organizations') => array(
				'band' => _('Band'),
				'government' => _('Government'),
				'non_profit' => _('Non-profit'),
				'school' => _('School'),
				'university' => _('University')
			),
			_('People') => array(
				'actor' => _('Actor or actress'),
				'author' => _('Author'),
				'director' => _('Director'),
				'musician' => _('Musician'),
				'politician' => _('Politician'),
				'public_figure' => _('Public Figure')
			),
			_('Places') => array(
				'city' => _('City or locality'),
				'country' => _('Country'),
				'landmark' => _('Landmark'),
				'state_province' => _('State or province')
			),
			_('Products and Entertainment') => array(
				'album' => _('Album'),
				'book' => _('Book'),
				'drink' => _('Drink'),
				'food' => _('Food'),
				'game' => _('Game'),
				'movie' => _('Movie'),
				'product' => _('Product'),
				'song' => _('Song'),
				'tv_show' => _('Television show'),
			),
			_('Websites') => array(
				'article' => _('Article'),
				'blog' => _('Blog'),
				'website' => _('Website')
			)
		);
		if ( $flatten === true ) {
			$types_values = array();
			foreach ( $types as $category=>$values ) {
				$types_values = array_merge( $types_values, array_keys($values) );
			}
			return $types_values;
		} else {
			return $types;
		}
	}

	/**
	 * @return String the type slug
	 */
	public function getType() {
		return $this->type;
	}

	/**
	 *
	 * @param String type slug
	 */
	public function setType( $type ) {
		if ( is_string($type) && in_array( $type, self::supported_types(true), true ) )
			$this->type = $type;
		return $this;
	}

	/**
	 * @return String document title
	 */
	public function getTitle() {
		return $this->title;
	}

	/**
	 * @param String $title document title
	 */
	public function setTitle( $title ) {
		if ( is_string($title) ) {
			$title = trim( $title );
			if ( strlen( $title ) > 128 )
				$this->title = substr( $title, 0, 128 );
			else
				$this->title = $title;
		}
		return $this;
	}

	/**
	 * @return String Site name
	 */
	public function getSiteName() {
		return $this->site_name;
	}

	/**
	 * @param String $site_name Site name
	 */
	public function setSiteName( $site_name ) {
		if ( is_string($site_name) && !empty($site_name) ) {
			$site_name = trim( $site_name );
			if ( strlen( $site_name ) > 128 )
				$this->site_name = substr( $site_name, 0, 128 );
			else
				$this->site_name = $site_name;
		}
		return $this;
	}

	/**
	 * @return String Description
	 */
	public function getDescription() {
		return $this->description;
	}

	/**
	 * @param String $description Document description
	 */
	public function setDescription( $description ) {
		if ( is_string($description) && !empty($description) ) {
			$description = trim( $description );
			if ( strlen( $description ) > 255 )
				$this->description = substr( $description, 0, 255 );
			else
				$this->description = $description;
		}
		return $this;
	}

	/**
	 * @return String URL
	 */
	public function getURL() {
		return $this->url;
	}

	/**
	 * @param String $url Canonical URL
	 */
	public function setURL( $url ) {
		if ( is_string( $url ) && !empty( $url ) ) {
			$url = self::is_valid_url( trim($url), array( 'text/html', 'application/xhtml+xml' ) );
			if ( !empty( $url ) )
				$this->url = $url;
		}
		return $this;
	}

	/**
	 * @return Image URI
	 */
	public function getImage() {
		return $this->image;
	}

	/**
	 * @param String $image_uri Image URI
	 */
	public function setImage( $image_uri ) {
		if ( is_string( $image_uri ) && !empty( $image_uri ) ) {
			$image_uri = self::is_valid_url( trim( $image_uri ), array( 'image/jpeg', 'image/png', 'image/gif' ) );
			if ( !empty( $image_uri ) )
				$this->image = $image_uri;
		}
		return $this;
	}

	/**
	 * @return MP3 audio URI
	 */
	public function getAudio() {
		return $this->audio;
	}

	/**
	 * @param String $audio_uri MP3 audio URI
	 */
	public function setAudio( $audio_uri ) {
		if ( is_string( $audio_uri ) && !empty( $audio_uri ) ) {
			$audio_uri = self::is_valid_url( trim( $audio_uri ), array( 'audio/mpeg' ) );
			if ( !empty( $audio_uri ) )
				$this->audio = $audio_uri;
		}
		return $this;
	}

	/**
	 * @return video SWF player URI
	 */
	public function getVideo() {
		return $this->video;
	}

	/**
	 * @param String $video_uri Video SWF player URI
	 */
	public function setVideo( $video_uri ) {
		if ( is_string( $video_uri ) && !empty( $video_uri ) ) {
			$video_uri = self::is_valid_url( trim( $video_uri ), array( 'application/x-shockwave-flash' ) );
			if ( !empty( $video_uri ) )
				$this->video = $video_uri;
		}
		return $this;
	}

	/**
	 * @return Float latitude
	 */
	public function getLatitude() {
		return $this->latitude;
	}

	/**
	 * @param Float $latitude Latitude
	 */
	public function setLatitude( $latitude ) {
		if ( is_float( $latitude ) && $latidude < 90 && $latitude > -90 ) {
			$this->latitude = $latitude;
		}
		return $this;
	}

	/**
	 * @return Float longitude
	 */
	public function getLongitude() {
		return $this->longitude;
	}

	/**
	 * @param Float $longitude longitude
	 */
	public function setLongitude( $longitude ) {
		if ( is_float( $longitude ) && $longitude < 180 && $longitude > -180 )
			$this->longitude = $longitude;
		return $this;
	}

	/**
	 * @return String Street address
	 */
	public function getStreetAddress() {
		return $this->street_address;
	}

	/**
	 * 40 or less characters. Combination of street number, thoroughfare name, thoroughfare type.
	 * @param String $adr Street Address
	 */
	public function setStreetAddress( $adr ) {
		if ( is_string( $adr ) && !empty( $adr ) ) {
			$adr = trim($adr);
			if ( strlen($adr) <= 40 )
				$this->street_address = $adr;
		}
		return $this;
	}

	/**
	 * @return String Locality
	 */
	public function getLocality() {
		return $this->locality;
	}

	/**
	 * @param String $locality Locality
	 */
	public function setLocality( $locality ) {
		if ( is_string($locality) && !empty($locality) ) {
			$locality = trim($locality);
			if ( strlen($locality) < 40 )
				$this->locality = $locality;
		}
		return $this;
	}

	/**
	 * @return String Region
	 */
	public function getRegion() {
		return $this->region;
	}

	/**
	 * @param String $region Region
	 */
	public function setRegion( $region ) {
		if ( is_string($region) && !empty($region) ) {
			$region = trim($region);
			if ( strlen($region) < 40 )
				$this->region = $region;
		}
		return $this;
	}

	/**
	 * @return String Country code
	 */
	public function getCountryName() {
		return $this->country_name;
	}

	/**
	 * @param String $cc Country code
	 */
	public function setCountryName( $cc ) {
		if ( is_string($cc) ) {
			$cc = trim($cc);
			if ( !empty($cc) && in_array( $cc, array_keys( self::country_codes() ) ) )
				$this->country_name = $cc;
		}
		return $this;
	}

	/**
	 * @return String Postal code
	 */
	public function getPostalCode() {
		return $this->postal_code;
	}

	/**
	 * @param String $postal_code Postal code
	 */
	public function setPostalCode( $postal_code ) {
		if ( is_string( $postal_code ) && !empty($postal_code) ) {
			$postal_code = strtoupper( $postal_code );
			$postal_code = preg_replace( '![^A-Z0-9\xd0\xa3]*!', '', $postal_code ); // include Ukraine literal
			if ( !empty( $postal_code ) && strlen( $postal_code ) >= 2 && strlen( $postal_code ) <= 9 )
				$this->postal_code = $postal_code;
		}
		// maxlength 9
	}

	/**
	 * @return String ISBN
	 */
	public function getISBN() {
		return $this->isbn;
	}

	/**
	 * @link http://en.wikipedia.org/wiki/International_Standard_Book_Number ISBN
	 * @param String $isbn ISBN-10 or ISBN-13 code
	 */
	public function setISBN( $isbn ) {
		if ( is_string( $isbn ) ) {
			$isbn = trim( str_replace('-', '', $isbn) );
			if ( strlen($isbn) === 10 && is_numeric( substr($isbn, 0 , 9) ) ) { // published before 2007
				$verifysum = 0;
				$chars = str_split( $isbn );
				for( $i=0; $i<9; $i++ ) {
					$verifysum += ( (int) $chars[$i] ) * (10 - $i);
				}
				$check_digit = 11 - ($verifysum % 11);
				unset( $verifysum );
				if ( $check_digit == $chars[9] || ($chars[9] == 'X' && $check_digit == 10) )
					$this->isbn = $isbn;
			} elseif ( strlen($isbn) === 13 && is_numeric( substr($isbn, 0, 12 ) ) ) {
				$verifysum = 0;
				$chars = str_split( $isbn );
				for( $i=0; $i<12; $i++ ) {
					$verifysum += ( (int) $chars[$i] ) * ( ( ($i%2) ===0 ) ? 1:3 );
				}
				var_dump($verifysum);
				$check_digit = 10 - ( $verifysum%10 );
				if ( $check_digit == $chars[12] )
					$this->isbn = $isbn;
				
			}
		}
		return $this;
	}

	/**
	 * @return String UPC
	 */
	public function getUPC() {
		return $this->upc;
	}

	/**
	 * @link http://en.wikipedia.org/wiki/Universal_Product_Code Universal Product Code
	 * @param String $upc Universal Product Code
	 * @todo check digit validator if UPC value is restricted to UPC-A
	 */
	public function setUPC( $upc ) {
		if ( is_string( $upc ) ) {
			$upc = trim( $upc );
			/**
			 * UPC-A, -B, -C all use 12 digit codes.
			 * UPC-B is 12 digits without a check digit. It is not possible to know the flavor of UPC inside the 12 digits, therefore no check digit validation
			 */
			if ( strlen($upc)===12 && ctype_digit($upc)  )
				$this->upc = $upc;
		}
		return $this;
	}

	/**
	 * Test a given telephone number against ITU-T E.164 rules
	 *
	 * @link http://en.wikipedia.org/wiki/E.164 ITU E.164
	 * @param String $number_str phone number provided by user
	 * @return String cleaned phone number, or empty string if phone number provided is not valid
	 */
	public static function is_valid_phone_number( $number_str ) {
		// remove common human-facing text formatters from the given number. only digits remain
		$number_str = preg_replace( '/[\D]*/', '', $number_str );
		if ( !empty( $number_str ) && strlen( $number_str ) <= 15 ) {
			return $number_str;
		}
		return '';
	}

	/**
	 * @return String phone number
	 */
	public function getPhoneNumber() {
		return $this->phone_number;
	}

	/**
	 * @param String phone number
	 */
	public function setPhoneNumber( $phone_number ) {
		if ( is_string( $phone_number ) ) {
			$phone_number = self::is_valid_phone_number( $phone_number );
			if ( !empty( $phone_number ) )
				$this->phone_number = $phone_number;
		}
		return $this;
	}

	/**
	 * @return String fax number
	 */
	public function getFaxNumber() {
		return $this->fax_number;
	}

	/**
	 * @param String fax number
	 */
	public function setFaxNumber( $fax_number ) {
		if ( is_string( $fax_number ) ) {
			$fax_number = self::is_valid_phone_number( $fax_number );
			if ( !empty( $fax_number ) )
				$this->fax_number = $fax_number;
		}
		return $this;
	}

	/**
	 * RFC 822/2822/5322 email parser
	 *
	 * @author Cal Henderson <cal@iamcal.com>
	 * @license http://www.gnu.org/licenses/gpl.html GPLv3
	 * @link https://github.com/iamcal/rfc822/blob/master/rfc822.php RFC 822 PHP script on Github
	 */
	public static function is_valid_email_address( $email, $options=array() ) {

		// this was previously 256 based on RFC3696, but dominic's errata was accepted.
		if ( strlen($email) > 254 )
			return false;

		/**
		 * you can pass a few different named options as a second argument,
		 * but the defaults are usually a good choice.
		 */
		$defaults = array(
			'allow_comments'	=> true,
			'public_internet'	=> true, # turn this off for 'strict' mode
		);

		$opts = array();
		foreach ($defaults as $k => $v) $opts[$k] = isset($options[$k]) ? $options[$k] : $v;
		$options = $opts;
		

		/**
		 * NO-WS-CTL       =       %d1-8 /         ; US-ASCII control characters
		 *                         %d11 /          ;  that do not include the
		 *                         %d12 /          ;  carriage return, line feed,
		 *                         %d14-31 /       ;  and white space characters
		 *                         %d127
		 * ALPHA          =  %x41-5A / %x61-7A   ; A-Z / a-z
		 * DIGIT          =  %x30-39
		 */
		$no_ws_ctl	= "[\\x01-\\x08\\x0b\\x0c\\x0e-\\x1f\\x7f]";
		$alpha		= "[\\x41-\\x5a\\x61-\\x7a]";
		$digit		= "[\\x30-\\x39]";
		$cr		= "\\x0d";
		$lf		= "\\x0a";
		$crlf		= "(?:$cr$lf)";


		/**
		 * obs-char        =       %d0-9 / %d11 /          ; %d0-127 except CR and
		 *                         %d12 / %d14-127         ;  LF
		 * obs-text        =       *LF *CR *(obs-char *LF *CR)
		 * text            =       %d1-9 /         ; Characters excluding CR and LF
		 *                        %d11 /
		 *                         %d12 /
		 *                         %d14-127 /
		 *                         obs-text
		 * obs-qp          =       "\" (%d0-127)
		 * quoted-pair     =       ("\" text) / obs-qp
		 */
		$obs_char	= "[\\x00-\\x09\\x0b\\x0c\\x0e-\\x7f]";
		$obs_text	= "(?:$lf*$cr*(?:$obs_char$lf*$cr*)*)";
		$text		= "(?:[\\x01-\\x09\\x0b\\x0c\\x0e-\\x7f]|$obs_text)";

		/**
		 * there's an issue with the definition of 'text', since 'obs_text' can
		 * be blank and that allows qp's with no character after the slash. we're
		 * treating that as bad, so this just checks we have at least one
		 * (non-CRLF) character
		 */
		$text		= "(?:$lf*$cr*$obs_char$lf*$cr*)";
		$obs_qp		= "(?:\\x5c[\\x00-\\x7f])";
		$quoted_pair	= "(?:\\x5c$text|$obs_qp)";


		/**
		 * obs-FWS         =       1*WSP *(CRLF 1*WSP)
		 * FWS             =       ([*WSP CRLF] 1*WSP) /   ; Folding white space
		 *                         obs-FWS
		 * ctext           =       NO-WS-CTL /     ; Non white space controls
		 *                         %d33-39 /       ; The rest of the US-ASCII
		 *                         %d42-91 /       ;  characters not including "(",
		 *                         %d93-126        ;  ")", or "\"
		 * ccontent        =       ctext / quoted-pair / comment
		 * comment         =       "(" *([FWS] ccontent) [FWS] ")"
		 * CFWS            =       *([FWS] comment) (([FWS] comment) / FWS)
		 *
		 * note: we translate ccontent only partially to avoid an infinite loop
		 * instead, we'll recursively strip *nested* comments before processing
		 * the input. that will leave 'plain old comments' to be matched during
		 * the main parse.
		 */
		$wsp		= "[\\x20\\x09]";
		$obs_fws	= "(?:$wsp+(?:$crlf$wsp+)*)";
		$fws		= "(?:(?:(?:$wsp*$crlf)?$wsp+)|$obs_fws)";
		$ctext		= "(?:$no_ws_ctl|[\\x21-\\x27\\x2A-\\x5b\\x5d-\\x7e])";
		$ccontent	= "(?:$ctext|$quoted_pair)";
		$comment	= "(?:\\x28(?:$fws?$ccontent)*$fws?\\x29)";
		$cfws		= "(?:(?:$fws?$comment)*(?:$fws?$comment|$fws))";


		/**
		 * these are the rules for removing *nested* comments. we'll just detect
		 * outer comment and replace it with an empty comment, and recurse until
		 * we stop.
		 */
		$outer_ccontent_dull	= "(?:$fws?$ctext|$quoted_pair)";
		$outer_ccontent_nest	= "(?:$fws?$comment)";
		$outer_comment		= "(?:\\x28$outer_ccontent_dull*(?:$outer_ccontent_nest$outer_ccontent_dull*)+$fws?\\x29)";


		/**
		 * atext           =       ALPHA / DIGIT / ; Any character except controls,
		 *                        "!" / "#" /     ;  SP, and specials.
		 *                         "$" / "%" /     ;  Used for atoms
		 *                         "&" / "'" /
		 *                         "*" / "+" /
		 *                         "-" / "/" /
		 *                         "=" / "?" /
		 *                         "^" / "_" /
		 *                         "`" / "{" /
		 *                         "|" / "}" /
		 *                         "~"
		 * atom            =       [CFWS] 1*atext [CFWS]
		 */
		$atext		= "(?:$alpha|$digit|[\\x21\\x23-\\x27\\x2a\\x2b\\x2d\\x2f\\x3d\\x3f\\x5e\\x5f\\x60\\x7b-\\x7e])";
		$atom		= "(?:$cfws?(?:$atext)+$cfws?)";


		/**
		 * qtext           =       NO-WS-CTL /     ; Non white space controls
		 *                         %d33 /          ; The rest of the US-ASCII
		 *                         %d35-91 /       ;  characters not including "\"
		 *                         %d93-126        ;  or the quote character
		 * qcontent        =       qtext / quoted-pair
		 * quoted-string   =       [CFWS]
		 *                         DQUOTE *([FWS] qcontent) [FWS] DQUOTE
		 *                         [CFWS]
		 * word            =       atom / quoted-string
		 */
		$qtext		= "(?:$no_ws_ctl|[\\x21\\x23-\\x5b\\x5d-\\x7e])";
		$qcontent	= "(?:$qtext|$quoted_pair)";
		$quoted_string	= "(?:$cfws?\\x22(?:$fws?$qcontent)*$fws?\\x22$cfws?)";

		
		// changed the '*' to a '+' to require that quoted strings are not empty
		$quoted_string	= "(?:$cfws?\\x22(?:$fws?$qcontent)+$fws?\\x22$cfws?)";
		$word		= "(?:$atom|$quoted_string)";


		/**
		 * obs-local-part  =       word *("." word)
		 * obs-domain      =       atom *("." atom)
		 */
		$obs_local_part	= "(?:$word(?:\\x2e$word)*)";
		$obs_domain	= "(?:$atom(?:\\x2e$atom)*)";


		/**
		 * dot-atom-text   =       1*atext *("." 1*atext)
		 * dot-atom        =       [CFWS] dot-atom-text [CFWS]
		 */
		$dot_atom_text	= "(?:$atext+(?:\\x2e$atext+)*)";
		$dot_atom	= "(?:$cfws?$dot_atom_text$cfws?)";


		/**
		 * domain-literal  =       [CFWS] "[" *([FWS] dcontent) [FWS] "]" [CFWS]
		 * dcontent        =       dtext / quoted-pair
		 * dtext           =       NO-WS-CTL /     ; Non white space controls
		 * 
		 *                         %d33-90 /       ; The rest of the US-ASCII
		 *                         %d94-126        ;  characters not including "[",
		 *                                         ;  "]", or "\"
		 */
		$dtext		= "(?:$no_ws_ctl|[\\x21-\\x5a\\x5e-\\x7e])";
		$dcontent	= "(?:$dtext|$quoted_pair)";
		$domain_literal	= "(?:$cfws?\\x5b(?:$fws?$dcontent)*$fws?\\x5d$cfws?)";


		/**
		 * local-part      =       dot-atom / quoted-string / obs-local-part
		 * domain          =       dot-atom / domain-literal / obs-domain
		 * addr-spec       =       local-part "@" domain
		 */
		$local_part	= "(($dot_atom)|($quoted_string)|($obs_local_part))";
		$domain		= "(($dot_atom)|($domain_literal)|($obs_domain))";
		$addr_spec	= "$local_part\\x40$domain";


		// we need to strip nested comments first - we replace them with a simple comment
		if ( $options['allow_comments'] )
			$email = self::email_strip_comments($outer_comment, $email, '(x)');


		// now match what's left
		if ( !preg_match("!^$addr_spec$!", $email, $m) )
			return false;

		$bits = array(
			'local'			=> isset($m[1]) ? $m[1] : '',
			'local-atom'		=> isset($m[2]) ? $m[2] : '',
			'local-quoted'		=> isset($m[3]) ? $m[3] : '',
			'local-obs'		=> isset($m[4]) ? $m[4] : '',
			'domain'		=> isset($m[5]) ? $m[5] : '',
			'domain-atom'		=> isset($m[6]) ? $m[6] : '',
			'domain-literal'	=> isset($m[7]) ? $m[7] : '',
			'domain-obs'		=> isset($m[8]) ? $m[8] : '',
		);


		/**
		 * we need to now strip comments from $bits[local] and $bits[domain],
		 * since we know they're in the right place and we want them out of the
		 * way for checking IPs, label sizes, etc
		 */
		if ( $options['allow_comments'] ) {
			$bits['local']	= self::email_strip_comments($comment, $bits['local']);
			$bits['domain']	= self::email_strip_comments($comment, $bits['domain']);
		}


		// length limits on segments
		if ( strlen( $bits['local'] ) > 64 )
			return false;
		if ( strlen( $bits['domain'] ) > 255 )
			return false;


		/**
		 * restrictions on domain-literals from RFC2821 section 4.1.3
		 *
		 * RFC4291 changed the meaning of :: in IPv6 addresses - i can mean one or
		 * more zero groups (updated from 2 or more).
		 */
		if ( strlen($bits['domain-literal']) ) {

			$Snum			= "(\d{1,3})";
			$IPv4_address_literal	= "$Snum\.$Snum\.$Snum\.$Snum";

			$IPv6_hex		= '(?:[0-9a-fA-F]{1,4})';

			$IPv6_full		= "IPv6\:$IPv6_hex(?:\:$IPv6_hex){7}";

			$IPv6_comp_part		= "(?:$IPv6_hex(?:\:$IPv6_hex){0,7})?";
			$IPv6_comp		= "IPv6\:($IPv6_comp_part\:\:$IPv6_comp_part)";

			$IPv6v4_full		= "IPv6\:$IPv6_hex(?:\:$IPv6_hex){5}\:$IPv4_address_literal";

			$IPv6v4_comp_part	= "$IPv6_hex(?:\:$IPv6_hex){0,5}";
			$IPv6v4_comp		= "IPv6\:((?:$IPv6v4_comp_part)?\:\:(?:$IPv6v4_comp_part\:)?)$IPv4_address_literal";


			 // IPv4 is simple
			if ( preg_match( "!^\[$IPv4_address_literal\]$!", $bits['domain'], $m ) ) {
				if ( intval($m[1]) > 255 )
					return false;
				if ( intval($m[2]) > 255 )
					return false;
				if ( intval($m[3]) > 255 )
					return false;
				if ( intval($m[4]) > 255 )
					return false;

			} else {
				// this should be IPv6 - a bunch of tests are needed here :)
				while (true) {

					if ( preg_match( "!^\[$IPv6_full\]$!", $bits['domain'] ) ) {
						break;
					}

					if ( preg_match( "!^\[$IPv6_comp\]$!", $bits['domain'], $m ) ) {
						list($a, $b) = explode('::', $m[1]);
						$folded = (strlen($a) && strlen($b)) ? "$a:$b" : "$a$b";
						$groups = explode(':', $folded);
						if (count($groups) > 7)
							return false;
						break;
					}

					if ( preg_match( "!^\[$IPv6v4_full\]$!", $bits['domain'], $m ) ) {

						if ( intval($m[1]) > 255 )
							return false;
						if ( intval($m[2]) > 255 )
							return false;
						if ( intval($m[3]) > 255 )
							return false;
						if ( intval($m[4]) > 255 )
							return false;
						break;
					}

					if ( preg_match( "!^\[$IPv6v4_comp\]$!", $bits['domain'], $m ) ) {
						list($a, $b) = explode('::', $m[1]);
						$b = substr($b, 0, -1); # remove the trailing colon before the IPv4 address
						$folded = (strlen($a) && strlen($b)) ? "$a:$b" : "$a$b";
						$groups = explode(':', $folded);
						if ( count($groups) > 5 )
							return false;
						break;
					}

					return false;
				}
			}			
		} else {

			/**
			 * the domain is either dot-atom or obs-domain - either way, it's
			 * made up of simple labels and we split on dots
			 */

			$labels = explode( '.', $bits['domain'] );


			/**
			 * this is allowed by both dot-atom and obs-domain, but is un-routeable on the
			 * public internet, so we'll fail it (e.g. user@localhost)
			 */
			if ( $options['public_internet'] ){
				if (count($labels) == 1)
					return false;
			}


			// checks on each label
			foreach ( $labels as $label ){
				if (strlen($label) > 63)
					return false;
				if (substr($label, 0, 1) == '-')
					return false;
				if (substr($label, -1) == '-')
					return false;
			}


			// last label can't be all numeric
			if ( $options['public_internet'] ){
				if ( preg_match('!^[0-9]+$!', array_pop($labels)) )
					return false;
			}
		}

		return true;
	}

	public static function email_strip_comments( $comment, $email, $replace='' ){
		while (true) {
			$new = preg_replace( "!$comment!", $replace, $email );
			if ( strlen($new) == strlen($email) )
				return $email;
			$email = $new;
		}
	}

	/**
	 * @return String email address
	 */
	public function getEmail() {
		return $this->email;
	}

	/**
	 * @param String $email email address
	 */
	public function setEmail( $email ) {
		if ( is_string($email) ) {
			$email = trim($email);
			if ( self::is_valid_email_address($email) )
				$this->email = $email;
		}
		return $this;
	}
}
?>