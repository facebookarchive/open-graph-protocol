Introduction
----
The [Open Graph protocol](http://www.ogp.me/) enables any web page to become a rich object in a social graph. For instance, this is used on Facebook to enable any web page to have the same functionality as a Facebook Page.

While many different technologies and schemas exist and could be combined together, there isn't a single technology which provides enough information to richly represent any web page within the social graph. The Open Graph protocol builds on these existing technologies and gives developers one thing to implement. Developer simplicity is a key goal of the Open Graph protocol which has informed many of [the technical design decisions](http://www.scribd.com/doc/30715288/The-Open-Graph-Protocol-Design-Decisions).


------
<a id="metadata"></a>
Basic metadata
--
To turn your web pages into graph objects, you need to add basic metadata to your page. We've based the initial version of the protocol on [RDFa](http://en.wikipedia.org/wiki/RDFa) which means that you'll place additional `<meta>` tags in the `<head>` of your web page. The four required properties for every page are:

 * `og:title` - The title of your object as it should appear within the graph, e.g., "The Rock".
 * `og:type` - The [type](#types) of your object, e.g., "movie".  Depending on the type you specify, other properties may also be required.
 * `og:image` - An image URL which should represent your object within the graph.
 * `og:url` - The canonical URL of your object that will be used as its permanent ID in the graph, e.g., "http://www.imdb.com/title/tt0117500/".

As an example, the following is the Open Graph protocol markup for [The Rock on IMDB](http://www.imdb.com/title/tt0117500):

	<html xmlns:og="http://ogp.me/ns#">
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

The following properties are optional for any object and are generally recommended:

 * `og:description` - A one to two sentence description of your object.
 * `og:site_name` - If your object is part of a larger web site, the name which should be displayed for the overall site. e.g., "IMDb".

For example (line-break solely for display purposes):

	<meta property="og:type" content="actor" />
	<meta property="og:description" content="Sean Connery found fame and fortune as the
                                             suave, sophisticated British agent, James
                                             Bond." />
	<meta property="og:site_name" content="IMDb" />

The RDF schema (which relates the Open Graph Protocol to other schemas) can be found at [http://ogp.me/schema](http://ogp.me/schema/?format=rdf).


------
<a id="location"></a>
Specifying location
-----
The Open Graph protocol supports the ability for you to specify location information for your object. This is useful if your object is for a business or anything else with a real-world location. You can specify location via latitude and longitude, a full address, or both. The property names used are defined within the [Microformat hCard](http://microformats.org/wiki/hcard).

In order to specify latitude and longitude, include the following two properties:

* `og:latitude` - e.g., "37.416343".
* `og:longitude` - e.g., "-122.153013".

If you wish to specify a human readable address, include the following five properties:

* `og:street-address` - e.g., "1601 S California Ave"
* `og:locality` - e.g, "Palo Alto"
* `og:region` - e.g., "CA"
* `og:postal-code` e.g., "94304"
* `og:country-name` - e.g., "USA"

For example:

	<html xmlns:og="http://ogp.me/ns#">
	<head>
	...
	[REQUIRED TAGS]
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
<a id="contact"></a>
Specifying contact information
-----
The Open Graph protocol supports the ability for you to specify contact information for your object. It's likely that future versions of the protocol will support extracting this information from the body of your page. In order to specify contact information, include at least one of the following three properties:

* `og:email` - e.g., "me@example.com".
* `og:phone_number` - e.g., "+1-650-123-4567".
* `og:fax_number` - e.g., "+1-415-123-4567".

For example:

	<html xmlns:og="http://ogp.me/ns#">
	<head>
	...
	[REQUIRED TAGS]
	<meta property="og:email" content="me@example.com" />
	<meta property="og:phone_number" content="650-123-4567" />
	<meta property="og:fax_number" content="+1-415-123-4567" />
	...
	</head>

------
<a id="video"></a>
Attach Video Data
----
If you want to attach a video to your Open Graph page you can simply specify a video url:

* `og:video` - e.g., "http://example.com/awesome.flv"

and optionally, you can add additional metadata

* `og:video:height` - e.g. "640"
* `og:video:width` - e.g. "385"
* `og:video:type` - e.g. "application/x-shockwave-flash"

If you don't specify a `og:video:type`, parsers will try to infer the type. A sensible default would be to assume "application/x-shockwave-flash" until HTML5 video becomes more prevalent.

For example:

	<html xmlns:og="http://ogp.me/ns#">
	<head>
	...
	[REQUIRED TAGS]
	<meta property="og:video" content="http://example.com/awesome.flv" />
	<meta property="og:video:height" content="640" />
	<meta property="og:video:width" content="385" />
	<meta property="og:video:type" content="application/x-shockwave-flash" />
	...
	</head>

------
<a id="audio"></a>
Attach Audio Data
----
In a similar fashion to [og:video](#video) you can add an audio file to your markup:

* `og:audio` - e.g., "http://example.com/amazing.mp3"

and optionally

* `og:audio:title` - e.g. "Amazing Soft Rock Ballad"
* `og:audio:artist` - e.g. "Amazing Band"
* `og:audio:album` - e.g. "Amazing Album"
* `og:audio:type` - e.g. "application/mp3"

For example:

	<html xmlns:og="http://ogp.me/ns#">
	<head>
	...
	[REQUIRED TAGS]
	<meta property="og:audio" content="http://example.com/amazing.mp3" />
	<meta property="og:audio:title" content="Amazing Song" />
	<meta property="og:audio:artist" content="Amazing Band" />
	<meta property="og:audio:album" content="Amazing Album" />
	<meta property="og:audio:type" content="application/mp3" />
	...
	</head>

------
<a id="types"></a>
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
* `profile`
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

For products which have a UPC code or ISBN number, you can specify them using the `og:upc` and `og:isbn` properties. These properties help to make more concrete connections between graphs.

### Websites
* `article`
* `blog`
* `website`


<a id='discuss'></a>

------
Discussion and support
-----
You can discuss the Open Graph Protocol on [the developer mailing list](http://groups.google.com/group/open-graph-protocol).
It is currently being consumed by Facebook ([see their documentation](http://developers.facebook.com/docs/opengraph)) and [mixi](http://groups.google.com/group/open-graph-protocol/browse_thread/thread/356d722abf70001d/397ec334ca87f122).
It is being published by IMDb, Microsoft, NHL, Posterous, Rotten Tomatoes, TIME, Yelp, and many many others.


<a id='implementations'></a>
Implementations
----
The open source community has developed a number of parsers and publishing tools. Let the mailing list know if you've built something awesome too!

* [og:it](http://ogit.heroku.com/) - web service which parses web pages for Open Graph protocol markup
* [OpenGraph.in](http://www.opengraph.in/) - another web service which parses web pages for Open Graph protocol markup and outputs HTML and JSON
* [Open Graph Protocol to JSON](http://srv.buzzword.org.uk/opengraph-to-json.html) - web service which converts Open Graph protocol markup to JSON for testing
* [OpenGraph for Java](http://github.com/callumj/opengraph-java) - small Java class used to represent the Open Graph protocol
* [RDF::RDFa::Parser](http://search.cpan.org/~tobyink/RDF-RDFa-Parser/lib/RDF/RDFa/Parser.pm) - Perl RDFa parser which understands the Open Graph protocol
* [Open Graph Protocol helper for PHP](http://github.com/scottmac/opengraph) - a small library for making accessing of Open Graph Protocol data easier in PHP
* [PyOpenGraph](http://pypi.python.org/pypi/PyOpenGraph) - PyOpenGraph is a library written in Python for parsing Open Graph protocol information from web sites
* [OpenGraphNode in PHP](http://buzzword.org.uk/2010/opengraph/#php) - a simple parsers for PHP
* [OpenGraph Ruby](http://github.com/intridea/opengraph) - Ruby Gem which parses web pages and extracts Open Graph protocol markup
* [Kestrel Open Graph (kog)](http://johnwyles.com/2010/05/04/kog-a-ruby-implementation-of-the-open-graph-protocol-by-facebook/) - Another Ruby Gem
* [WordPress plugin](http://wordpress.org/extend/plugins/like) - add the Open Graph protocol markup to your WordPress blog
* [Facebook Linter](http://developers.facebook.com/tools/lint/) - Facebook's official parser and debugger

------
