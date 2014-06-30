<?php

/*
	Plugin Name: ALM oEmbed
	Plugin URI: https://github.com/articlemetrics/alm-oembed-plugin
	Description: Enable oEmbed for Article-Level Metrics applications
	Author: Martin Fenner
	Version: 1.0.3
	Author URI: http://blog.martinfenner.org
  GitHub Plugin URI: https://github.com/articlemetrics/alm-oembed-plugin
  GitHub Branch: master

  Copyright 2013-2014 Public Library of Science

  This program is free software; you can redistribute it and/or modify
  it under the terms of the GNU General Public License, version 2, as
  published by the Free Software Foundation.

  This program is distributed in the hope that it will be useful,
  but WITHOUT ANY WARRANTY; without even the implied warranty of
  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
  GNU General Public License for more details.

  You should have received a copy of the GNU General Public License
  along with this program; if not, write to the Free Software
  Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA

	Usage:
  This plugin enables embedding of Article-Level Metrics.

*/

wp_oembed_add_provider('http://alm.plos.org/articles/*','http://alm.plos.org/oembed');
wp_oembed_add_provider('http://pkp-alm.lib.sfu.ca/articles/*','http://pkp-alm.lib.sfu.ca/oembed');
wp_oembed_add_provider('http://metricus.copernicus.org/articles/*','http://metricus.copernicus.org/oembed');
wp_oembed_add_provider('http://labs.crowdometer.org/articles/*','http://labs.crowdometer.org/oembed');
wp_oembed_add_provider('http://alm.labs.crossref.org/articles/*','http://alm.labs.crossref.org/oembed');
wp_oembed_add_provider('http://alm.svr.elifesciences.org/articles/*','http://alm.svr.elifesciences.org/oembed');

?>
