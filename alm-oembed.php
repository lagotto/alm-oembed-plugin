<?php

/* 
	Plugin Name: ALM oEmbed
	Plugin URI: https://github.com/articlemetrics/alm-oembed-plugin
	Description: Enable oEmbed for Article-Level Metrics applications
	Author: Martin Fenner
	Version: 1.0.0
	Author URI: http://blogs.plos.org/mfenner
	
  Copyright 2013 Public Library of Science

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

wp_oembed_add_provider('http://alm.plos.org/*#','http://alm.plos.org/oembed.json?url=/',true);
wp_oembed_add_provider('http://alm.publicknowledgeproject.org/*#','http://alm.publicknowledgeproject.org/oembed.json?url=/',true);
wp_oembed_add_provider('http://alm.copernicus.org/*#','http://alm.copernicus.org/oembed.json?url=/',true);

?>