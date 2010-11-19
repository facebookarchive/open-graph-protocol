<?php
/**
 * Open Graph Protocol data class. Define and validate OGP values
 */


/**
 * image (jpg,png)
 * street-address
 * locality
 * region
 * postal-code
 * country-name
 * email
 * phone_number
 * fax_number
 *
 * audio (MP3 only)
 * video (SWF only)
 */
class Open_Graph_Protocol {
	/**
	 * Version
	 */
	const VERSION = '1.0';

	/**
	 * Page classification according to a pre-defined set of base types.
	 */
	protected $type;

	/**
	 * The title of your object as it should appear within the graph.
	 */
	protected $title;

	/**
	 * If your object is part of a larger web site, the name which should be displayed for the overall site.
	 */
	protected $site_name;

	/**
	 * A one to two sentence description of your object.
	 */
	protected $description;

	/**
	 * The canonical URL of your object that will be used as its permanent ID in the graph.
	 */
	protected $url;

	/**
	 * Location north or south of the equator
	 */
	protected $latitude;

	/**
	 * Angular distance of a point's meridian from the Prime (Greenwich) Meridian
	 */
	protected $longitude;

	/**
	 * International Standard Book Number
	 */
	protected $isbn;

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
	 * @param String type
	 */
	public function setType( $type ) {
		if ( is_string($type) && in_array( $type, Open_Graph_Protocol::supported_types(true), true ) )
			$this->type = $type;
		return $this;
	}

	/**
	 * @return String title
	 */
	public function getTitle() {
		return $this->title;
	}

	/**
	 * @param String $title
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
	 * @param String $site_name
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
	 * @param String $description
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
	 * @todo does URL exist?
	 */
	public function setURL( $url ) {
		if ( is_string( $url ) && !empty( $url ) ) {
			$url_parts = parse_url( $url );
			if ( isset( $url_parts['scheme'] ) && in_array( $url_parts['scheme'], array('http', 'https'), true ) ) {
				$this->url = "{$url_parts['scheme']}://{$url_parts['host']}{$url_parts['path']}";
				if ( empty( $url_parts['path'] ) )
					$this->url .= '/';
				if ( !empty( $url_parts['query'] ) )
					$this->url .= '?' . $url_parts['query'];
				if ( !empty( $url_parts['fragment'] ) )
					$this->url .= '#' . $url_parts['fragment'];
			}
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
	 * @return String ISBN
	 */
	public function getISBN() {
		return $this->isbn;
	}

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
}

$ogp = new Open_Graph_Protocol();
$ogp->setType('song');
var_dump( $ogp->getType() );
$ogp->setTitle('01234567890123456789012345678901234567890123456789012345678901234567890123456789012345678901234567890123456789012345678901234567890123456789');
var_dump( $ogp->getTitle() );
$ogp->setSiteName('Awesome Corp');
var_dump( $ogp->getSiteName() );
$ogp->setDescription('We make awesome waffles');
var_dump( $ogp->getDescription() );
$ogp->setURL('http://www.facebook.com/?q=foo&yes=no#bar');
var_dump( $ogp->getURL() );
$ogp->setISBN('0306406152');
var_dump( $ogp->getISBN() );
?>