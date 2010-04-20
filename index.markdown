Introduction
----
The [Open Graph protocol](http://www.opengraphprotocol.org/) enables any web page to become a rich object in a social graph. For instance, this is used on Facebook to enable any web page to have the same functionality as a [Facebook Page](http://www.facebook.com/advertising/?pages).

While many different technologies and schemas exist and could be combined together, there isn't a single technology which provides enough information to richly represent any web page within the social graph. The Open Graph protocol builds on these existing technologies and gives developers one thing to implement.


------
<a name="metadata"></a>
Basic metadata
--
To Open Graph-enable your page, you need to add basic metadata to your page. We've chosen to use [RDFa](http://en.wikipedia.org/wiki/RDFa) which means that you'll place additional `<meta>` tags in the `<head>` of your web page. The four required properties for every Open Graph page are:

 * `og:title` - The title of your object as it should appear within the graph, e.g., "The Rock".
 * `og:type` - The [type](#types) of your object, e.g., "movie".  Depending on the type you specify, other properties may also be required.
 * `og:image` - An image URL which should represent your object within the graph.
 * `og:url` - The canonical URL of your object that will be used as its permanent ID in the graph, e.g., "http://www.imdb.com/title/tt0117500/".

As an example, the following is the Open Graph protocol markup for [The Rock on IMDB](http://www.imdb.com/title/tt0117500):

	<html xmlns:og="http://opengraphprotocol.org/schema/">
	<head>
	<title>The Rock (1996)</title>
	<meta property="og:title" content="The Rock" />
	<meta property="og:type" content="movie" />
	<meta property="og:url" content="http://www.imdb.com/title/tt0117500/" />
	<meta property="og:image" content="http://ia.media-imdb.com/images/rock.jpg" />
	...
	</head>
	...
	</html>

The following properties are optional for any object:

 * `og:description` - A one to two sentence description of your object.
 * `og:site_name` - If your object is part of a larger web site, the name which should be displayed for the overall site. e.g., "IMDb".

For example (line-break solely for display purposes):

	<meta property="og:type" content="actor" />
	<meta property="og:description" content="Sean Connery found fame and fortune as the
	suave, sophisticated British agent, James
	Bond." />


------
<a name="location"></a>
Specifying location
-----
The Open Graph protocol supports the ability for you to specify location information for your object. This is useful if your object is for a business or anything else with a real-world location. You can specify location via latitude and longitude, a full address, or both. The property names used are defined within the [Microformat hCard](http://microformats.org/wiki/hcard).

In order to specify latitude and longitude, include the following two properties:

* `og:latitude` - e.g., "37.416343".
* `og:longitude` - e.g., "-122.153013".

If you wish to specify a human readable address, include the following four properties:

* `og:street-address` - e.g., "1601 S California Ave"
* `og:locality` - e.g, "Palo Alto"
* `og:region` - e.g., "CA"
* `og:postal-code` e.g., "94304"
* `og:country-name` - e.g., "USA"

For example:

	<html xmlns:og="http://opengraphprotocol.org/schema/">
	<head>
	...
	<meta property="og:latitude" content="37.416343" />
	<meta property="og:longitude" content="-122.153013" />
	<meta property="og:street-address" content="1601 S California Ave" />
	<meta property="og:locality" content="Palo Alto" />
	<meta property="og:region" content="CA" />
	<meta property="og:postal-code" content="94304" />
	<meta property="og:country-name" content="USA" />
	...
	</head>


------
<a name="contact"></a>
Specifying contact information
-----
The Open Graph protocol supports the ability for you to specify contact information for your object. It's likely that future versions of the protocol will support extracting this information from the body of your page. In order to specify contact information, include at least one of the following three properties:

* `og:email` - e.g., "me@example.com".
* `og:phone_number` - e.g., "+1-650-123-4567".
* `og:fax_number` - e.g., "+1-415-123-4567".

For example:

	<html xmlns:og="http://opengraphprotocol.org/schema/">
	<head>
	...
	<meta property="og:email" content="me@example.com" />
	<meta property="og:phone_number" content="650-123-4567" />
	<meta property="og:fax_number" content="+1-415-123-4567" />
	...
	</head>


------
<a name="types"></a>
Object types
----
In order for your object to be represented within the graph, you need to specify its type. This is done using the `og:type` property:

	<meta property="og:type" content="product" />

The base schema includes the following types. It's possible that social networks will choose to support only a subset of these types or create additional types based on their niche.

### Activities
* `activity`
* `sport`

### Businesses
* `bar`
* `company`
* `cafe`
* `hotel`
* `restaurant`

### Groups
* `cause`
* `sports_league`
* `sports_team`

### Organizations
* `band`
* `government`
* `non_profit`
* `school`
* `university`

### People
* `actor`
* `athlete`
* `author`
* `director`
* `musician`
* `politician`
* `public_figure`

### Places
* `city`
* `country`
* `landmark`
* `state_province`

### Products and Entertainment
* `album`
* `book`
* `drink`
* `food`
* `game`
* `movie`
* `product`
* `song`
* `tv_show`

### Websites
* `blog`
* `website`


------
Discussion and support
-----
You can discuss the Open Graph Protocol on [the developer mailing list](http://groups.google.com/group/open-graph-protocol). It is currently supported by [Facebook](http://d2.dev.facebook.com/docs/opengraph), etc.