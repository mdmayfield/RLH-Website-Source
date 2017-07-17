<?php
/* Copyright (C) YOOtheme GmbH, http://www.gnu.org/licenses/gpl.html GNU/GPL */

// generate css for layout
$css[] = sprintf('.wrapper { max-width: %dpx; }', $this['config']->get('template_width'));

$css[] .= sprintf('a, .wk-slideshow .caption a, a.mod_events_daylink:link { color: %s; }', $this['config']->get('link_color'));
$css[] .= sprintf('a:hover, #toolbar ul.menu li a:hover span, .menu-sidebar a.current, #Kunena dl.tabs dt:hover, .menu-sidebar a:hover, menu-sidebar li > span:hover, a.mod_events_daylink:hover { color: %s; }', $this['config']->get('hover_color'));

$css[] .= sprintf('body { color: %s; }', $this['config']->get('body_color'));
$css[] .= sprintf('body { background-color: %s !important; }', $this['config']->get('bg_color'));
$css[] .= sprintf('#toolbar time, #toolbar p, #toolbar ul.menu li span { color: %s; }', $this['config']->get('toolbar_color'));
$css[] .= sprintf('#showcase p, #showcase h1, #showcase h2, #showcase h3, #showcase h4, #showcase h5, #showcase h6 { color: %s; }', $this['config']->get('showcase_color'));
$css[] .= sprintf('.top-bg.show_top_half { background-color: %s; }', $this['config']->get('top_bg_color'));
$css[] .= sprintf('::-webkit-selection { background: %s;}', $this['config']->get('text_highlight_color'));
$css[] .= sprintf('::-moz-selection{ background: %s;}', $this['config']->get('text_highlight_color'));
$css[] .= sprintf('::selection{ background: %s;}', $this['config']->get('text_highlight_color'));
$css[] .= sprintf('.sheet {-webkit-box-shadow: 0 0 0 7px rgba(0, 0, 0, %s);}', $this['config']->get('sheet_border_opacity'));
$css[] .= sprintf('.sheet {-moz-box-shadow: 0 0 0 7px rgba(0, 0, 0, %s);}', $this['config']->get('sheet_border_opacity'));
$css[] .= sprintf('.sheet {box-shadow: 0 0 0 7px rgba(0, 0, 0, %s);}', $this['config']->get('sheet_border_opacity'));
$css[] .= sprintf('.footer-body {background-color: rgba(0, 0, 0, %s) !important;}', $this['config']->get('footer_opacity'));

$css[] .= sprintf('.th .bottom, .th { background-color: %s; }', $this['config']->get('table_header_bottom_border'));
$css[] .= sprintf('.price-tag { background-color: %s !important; }', $this['config']->get('price_tag_background'));
$css[] .= sprintf('.footer-body, #bottom-d p, #bottom-c h4, #copyright p, #footer p { color: %s; }', $this['config']->get('footer_font_color'));
$css[] .= sprintf('#bottom-menu .menu-line a, .footer-body .menu-sidebar a, .footer-body .menu-sidebar li > span, #bottom-d .menu-line a, #bottom-d .menu-line li >span, .footer-body a, #copyright a { color: %s; }', $this['config']->get('footer_link_color'));
$css[] .= sprintf('.footer-body .menu-sidebar a:hover,.footer-body .menu-sidebar li > span:hover, #bottom-d .menu-line a:hover, #bottom-d .menu-line li >span:hover, #copyright a:hover, #bottom-menu .menu-line a:hover, .footer-body a:hover  { color: %s; }', $this['config']->get('footer_link_color_hover'));

//sections
$css[] .= sprintf('.main_texture_0, .main_texture_0  .sheet,.main_texture_0  #top-b,.main_texture_0  #mosaic,.main_texture_0  #bottom-block { background-color: %s; }', $this['config']->get('content_bg_color'));
$css[] .= sprintf('#sidebar-a { background-color: %s; }', $this['config']->get('sidebar_a_bg_color'));
$css[] .= sprintf('#sidebar-b { background-color: %s; }', $this['config']->get('sidebar_b_bg_color'));
$css[] .= sprintf('#bottom-block { background-color: %s; }', $this['config']->get('bottom_block_bg_color'));
$css[] .= sprintf('#bottom-c { background-color: %s; }', $this['config']->get('footer_bg_color'));

// h-menu styles
$css[] .= sprintf('#hmenu { background-color: %s; }', $this['config']->get('menu_header_color'));
$css[] .= sprintf('.menu-dropdown .dropdown-bg > div { background-color: %s; }', $this['config']->get('menu_bg_color'));
$css[] .= sprintf('.menu-dropdown a.level1, .menu-dropdown span.level1, .menu-dropdown a.level2, .menu-dropdown span.level2, .menu-dropdown a.level3, .menu-dropdown span.level3, #call-us h1 { color: %s; }', $this['config']->get('menu_item_font_color'));
$css[] .= sprintf('.level1 span.subtitle { color: %s; }', $this['config']->get('menu_dfn_font_color'));

$css[] .= sprintf('.menu-dropdown li.level2 a:hover { background-color: %s; }', $this['config']->get('menu_item_bg_hover_color'));
$css[] .= sprintf('.menu-dropdown a.level2:hover, .menu-dropdown a.level3:hover, .menu-dropdown a.level2:hover span.subtitle { color: %s; }', $this['config']->get('menu_item_font_hover_color'));
$css[] .= sprintf('.menu-dropdown a.current.level2, .menu-dropdown a.current.level3, .menu-dropdown li.level1.active, .menu-dropdown li.level1:hover, .menu-dropdown li.remain { background-color: %s; }', $this['config']->get('menu_item_bg_current_color'));
$css[] .= sprintf('.menu-dropdown span.level1.active, .menu-dropdown a.level1.active span.subtitle, .menu-dropdown a.level1.active, .menu-dropdown a.level1:hover, .menu-dropdown li.remain a.level1, .menu-dropdown li.remain a.level1 span.subtitle, .menu-dropdown li.remain span.level1, .menu-dropdown a.current.level2, .menu-dropdown a.current.level3, .menu-dropdown a.current.level2 span.subtitle { color: %s; }', $this['config']->get('menu_item_font_current_color'));


// colored sidebar-menu
$css[] .= sprintf('.colored .menu-sidebar a, .colored .menu-sidebar li > span { color: %s; }', $this['config']->get('vmenu_item_font_color'));
$css[] .= sprintf('.colored .menu-sidebar li.level1:hover, .colored .menu-sidebar a.level1:hover > span, .colored .menu-sidebar span.level1:hover > span { color: %s; }', $this['config']->get('vmenu_item_font_hover_color'));
$css[] .= sprintf('.colored .menu-sidebar a.level1.active > span, .colored .menu-sidebar span.level1:hover > span { color: %s; }', $this['config']->get('vmenu_item_font_active_color'));

$css[] .= sprintf('.colored .menu-sidebar a.level1:hover, .colored .menu-sidebar span.level1:hover, .colored .menu-sidebar a.level2:hover, .colored .menu-sidebar span.level2:hover{ background-color: %s !important; }', $this['config']->get('vmenu_item_hover'));
$css[] .= sprintf('.colored .menu-sidebar li.level1.active, .colored .menu-sidebar a.level2.active, .colored .menu-sidebar span.level2.active { background-color: %s; }', $this['config']->get('vmenu_item_active'));


// headings
$css[] .= sprintf('h1 strong, h2 strong, h3 strong, h4 strong, h5 strong, h6 strong, .module-title .color, .module .module-title span.subtitle { color: %s; }', $this['config']->get('title_span_color'));
$css[] .= sprintf('h1, h2, h3, h4, h5, h6, blockquote strong, blockquote p strong, .result h3, header h1.title a, .mod_events_td_dayname, div.pagetitle h2 { color: %s; }', $this['config']->get('heading_color'));
$css[] .= sprintf('.header-content .module-title, .header-content { color: %s; }', $this['config']->get('header_content_color'));


// buttons
$css[] .= sprintf('a.button-color, button.button-color, input[type="submit"].button-color, input[type="submit"].subbutton, input[type="reset"].button-color, input[type="button"].button-color, #content .pagination strong,  .section-title,  ul.white-top a.current, ul.white-top a.current:hover,  #kunena input[type="submit"].kbutton, #Kunena .klist-markallcatsread input.kbutton, #Kunena .kicon-button.kbuttoncomm, #kunena .kbutton.kreply-submit, #Kunena .kbutton-container button.validate, #kpost-buttons input[type="submit"].kbutton, #Kunena span.kheadbtn a, .sprocket-mosaic-filter li.active, .sprocket-mosaic-hover, .sprocket-mosaic-filter li.active, div#jevents dl.tabs dt.open, #jumpto button{ background-color: %s !important; }', $this['config']->get('button_bg_color'));

$css[] .= sprintf('.button, #Kunena .kicon-button, #kunena input[type="submit"].kbutton, #Kunena .klist-markallcatsread input.kbutton, .button-more, input[type="submit"], input[type="reset"], input[type="button"], button[type="submit"], #content .pagination a, div#jevents dl.tabs dt.closed{ background-color: %s; }', $this['config']->get('light_button_bg_color'));

$css[] .= sprintf('a.button-color:hover, button.button-color:hover, input[type="submit"].button-color:hover, input[type="submit"].subbutton:hover, input[type="reset"].button-color:hover, input[type="button"].button-color:hover, #content .pagination strong:hover, .section-title:hover,  ul.white-top a.current:hover, ul.white-top a.current:hover,  #kunena input[type="submit"].kbutton:hover, #Kunena .klist-markallcatsread input.kbutton:hover, #Kunena .kicon-button.kbuttoncomm:hover, #kunena .kbutton.kreply-submit:hover, #Kunena .kbutton-container button.validate:hover, #kpost-buttons input[type="submit"].kbutton:hover, #Kunena span.kheadbtn a:hover, div#jevents dl.tabs dt.open:hover, #jumpto button:hover{ background-color: %s !important; }', $this['config']->get('button_bg_color_hover'));

$css[] .= sprintf('.button:hover, #Kunena .kicon-button:hover, #kunena input.kbutton[type="submit"]:hover, #Kunena .klist-markallcatsread input.kbutton:hover, .button-more:hover, input[type="submit"]:hover, input[type="reset"]:hover, input[type="button"]:hover, button[type="submit"]:hover,  #content .pagination a:hover, div#jevents dl.tabs dt.closed:hover{ background-color: %s; }', $this['config']->get('light_button_bg_color_hover'));


$css[] .= sprintf('.button:active, a.button-color:active, button.button-color:active, input[type="submit"].button-color:active, input[type="submit"].subbutton:active, input[type="reset"].button-color:active, input[type="button"].button-color:active, #content .pagination strong:active, .section-title:active,  ul.white-top a.current:active, ul.white-top a.current:active,  #kunena input[type="submit"].kbutton:active, #Kunena .klist-markallcatsread input.kbutton:active, #Kunena .kicon-button.kbuttoncomm:active, #kunena .kbutton.kreply-submit:active, #Kunena .kbutton-container button.validate:active, #kpost-buttons input[type="submit"].kbutton:active, #Kunena span.kheadbtn a:active, .sprocket-mosaic-filter li.active, .sprocket-mosaic-hover, div#jevents dl.tabs dt.open:active, #jumpto button:active{ background-color: %s !important; }', $this['config']->get('button_bg_color_active'));

$css[] .= sprintf('.button:active, #Kunena .kicon-button:active, #kunena input.kbutton[type="submit"]:active, #Kunena .klist-markallcatsread input.kbutton:active, .button-more:active, input[type="submit"]:active, input[type="reset"]:active, input[type="button"]:active, button[type="submit"]:active,  #content .pagination a:active, div#jevents dl.tabs dt.closed:active{ background-color: %s !important; }', $this['config']->get('light_button_bg_color_active'));

$css[] .= sprintf('a.button-color, button.button-color, input[type="submit"].button-color, input[type="submit"].subbutton, input[type="reset"].button-color, input[type="button"].button-color, #content .pagination strong,  .section-title,  ul.white-top a.current, ul.white-top a.current:hover,  #kunena input[type="submit"].kbutton, #Kunena .klist-markallcatsread input.kbutton, #Kunena .kicon-button.kbuttoncomm span, #kunena .kbutton.kreply-submit, #Kunena .kbutton-container button.validate,  #kpost-buttons input[type="submit"].kbutton, #Kunena span.kheadbtn a, li.price-tag, .th, div.toolbar-list a, div#jevents dl.tabs dt.open, #jumpto button, .sprocket-mosaic-filter li.active { color: %s !important; }', $this['config']->get('button_color'));

$css[] .= sprintf('.button, #Kunena .kicon-button, #kunena input[type="submit"].kbutton, .button-more, input[type="submit"], input[type="reset"], input[type="button"], button[type="submit"], #content .pagination a, div#jevents dl.tabs dt.closed{ color: %s !important; }', $this['config']->get('light_button_color'));


// widgets
$css[] .= sprintf('.mejs-controls .mejs-time-rail .mejs-time-loaded { background-color: %s !important; }', $this['config']->get('media_track_color'));
$css[] .= sprintf('.mod-color { background-color: %s; }', $this['config']->get('block_color'));
$css[] .= sprintf('.mod-color { border: 1px solid %s; }', $this['config']->get('block_border_color'));
$css[] .= sprintf('.mod-color { color: %s; }', $this['config']->get('block_font_color'));	
$css[] .= sprintf('.tag-body, .tag-body:hover, .tag-body, .tag-body .tag:before { color: %s !important; }', $this['config']->get('tags_font_color'));	
$css[] .= sprintf('.tag-body, .tag-body .tag:before, .label-info[href] { background-color: %s; }', $this['config']->get('tags_bg_color'));
$css[] .= sprintf('.sprocket-tabs-nav > li.active > .sprocket-tabs-inner { background-color: %s !important; }', $this['config']->get('tabs_active_button_bg'));	
$css[] .= sprintf('.sprocket-tabs-nav > li.active > .sprocket-tabs-inner { color: %s !important; }', $this['config']->get('tabs_active_font_color'));	
$css[] .= sprintf('.sprocket-tabs-nav{border-bottom: 1px solid %s !important; }', $this['config']->get('tabs_active_button_border'));

// extensions
$css[] .= sprintf('body #Kunena .kblock div.kheader, body #Kunena div.kblock > div.kheader { background-color: %s; }', $this['config']->get('kunena_bg_color'));


// generate css for 3-column-layout
$sidebar_a       = '';
$sidebar_b       = '';
$maininner_width = 100;
$sidebar_a_width = intval($this['config']->get('sidebar-a_width'));
$sidebar_b_width = intval($this['config']->get('sidebar-b_width'));
$sidebar_classes = "";
$rtl             = $this['config']->get('direction') == 'rtl';
$body_config	 = array();

// set widths
if ($this['modules']->count('sidebar-a')) {
	$sidebar_a = $this['config']->get('sidebar-a'); 
	$maininner_width -= $sidebar_a_width;
	$css[] = sprintf('#sidebar-a { width: %d%%; }', $sidebar_a_width);
}

if ($this['modules']->count('sidebar-b')) {
	$sidebar_b = $this['config']->get('sidebar-b'); 
	$maininner_width -= $sidebar_b_width;
	$css[] = sprintf('#sidebar-b { width: %d%%; }', $sidebar_b_width);
}

$css[] = sprintf('#maininner { width: %d%%; }', $maininner_width);

// all sidebars right
if (($sidebar_a == 'right' || !$sidebar_a) && ($sidebar_b == 'right' || !$sidebar_b)) {
	$sidebar_classes .= ($sidebar_a) ? 'sidebar-a-right ' : '';
	$sidebar_classes .= ($sidebar_b) ? 'sidebar-b-right ' : '';

// all sidebars left
} elseif (($sidebar_a == 'left' || !$sidebar_a) && ($sidebar_b == 'left' || !$sidebar_b)) {
	$sidebar_classes .= ($sidebar_a) ? 'sidebar-a-left ' : '';
	$sidebar_classes .= ($sidebar_b) ? 'sidebar-b-left ' : '';
	$css[] = sprintf('#maininner { float: %s; }', $rtl ? 'left' : 'right');

// sidebar-a left and sidebar-b right
} elseif ($sidebar_a == 'left') {
	$sidebar_classes .= 'sidebar-a-left sidebar-b-right ';
	$css[] = '#maininner, #sidebar-a { position: relative; }';
	$css[] = sprintf('#maininner { %s: %d%%; }', $rtl ? 'right' : 'left', $sidebar_a_width);
	$css[] = sprintf('#sidebar-a { %s: -%d%%; }', $rtl ? 'right' : 'left', $maininner_width);

// sidebar-b left and sidebar-a right
} elseif ($sidebar_b == 'left') {
	$sidebar_classes .= 'sidebar-a-right sidebar-b-left ';
	$css[] = '#maininner, #sidebar-a, #sidebar-b { position: relative; }';
	$css[] = sprintf('#maininner, #sidebar-a { %s: %d%%; }', $rtl ? 'right' : 'left', $sidebar_b_width);
	$css[] = sprintf('#sidebar-b { %s: -%d%%; }', $rtl ? 'right' : 'left', $maininner_width + $sidebar_a_width);
}

// number of sidebars
if ($sidebar_a && $sidebar_b) {
	$sidebar_classes .= 'sidebars-2 ';
} elseif ($sidebar_a || $sidebar_b) {
	$sidebar_classes .= 'sidebars-1 ';
}

// generate css for dropdown menu
foreach (array(1 => '.dropdown', 2 => '.columns2', 3 => '.columns3', 4 => '.columns4') as $i => $class) {
	$css[] = sprintf('#menu %s { width: %dpx; }', $class, $i * intval($this['config']->get('menu_width')));
}

// load css
$this['asset']->addFile('css', 'css:base.css');
$this['asset']->addFile('css', 'css:extensions.css');
$this['asset']->addFile('css', 'css:tools.css');
$this['asset']->addFile('css', 'css:layout.css');
$this['asset']->addFile('css', 'css:menus.css');
$this['asset']->addString('css', implode("\n", $css));
$this['asset']->addFile('css', 'css:modules.css');
$this['asset']->addFile('css', 'css:system.css');
$this['asset']->addFile('css', 'css:k2.css');
if (($font = $this['config']->get('font1')) && $this['path']->path("css:/font1/$font.css")) { $this['asset']->addFile('css', "css:/font1/$font.css"); }
if (($font = $this['config']->get('font2')) && $this['path']->path("css:/font2/$font.css")) { $this['asset']->addFile('css', "css:/font2/$font.css"); }
if (($font = $this['config']->get('font3')) && $this['path']->path("css:/font3/$font.css")) { $this['asset']->addFile('css', "css:/font3/$font.css"); }
if (($font = $this['config']->get('font4')) && $this['path']->path("css:/font4/$font.css")) { $this['asset']->addFile('css', "css:/font4/$font.css"); }
if ($this['config']->get('direction') == 'rtl') $this['asset']->addFile('css', 'css:rtl.css');
$this['asset']->addFile('css', 'css:style.css');
$this['asset']->addFile('css', 'css:responsive.css');
$this['asset']->addFile('css', 'css:print.css');
$this['asset']->addFile('css', 'css:custom.css');

// load fonts
$http  = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? 'https' : 'http';
$fonts = array(
	'colaborate' => 'template:fonts/colaborate.css',
	'droidsans' => 'template:fonts/droidsans.css',
	'economica' => 'template:fonts/economica.css',
	'kreon' => 'template:fonts/kreon.css',
	'league' => 'template:fonts/league_gothic.css',
	'marvel' => 'template:fonts/marvel.css',
	'opensans' => 'template:fonts/opensans.css',
	'patuaone' => 'template:fonts/patuaone.css',
	'gudea' => $http.'://fonts.googleapis.com/css?family=Gudea',
	'istok' => $http.'://fonts.googleapis.com/css?family=Istok+Web',
	'mavenpro' => $http.'://fonts.googleapis.com/css?family=Maven+Pro',
	'play' => $http.'://fonts.googleapis.com/css?family=Play',
	'ropasans' => $http.'://fonts.googleapis.com/css?family=Ropa+Sans',
	'signika' => $http.'://fonts.googleapis.com/css?family=Signika+Negative',
	'yanonekaffeesatz' => $http.'://fonts.googleapis.com/css?family=Yanone+Kaffeesatz:regular,light');


foreach (array_unique(array($this['config']->get('font1'), $this['config']->get('font2'), $this['config']->get('font3'), $this['config']->get('font4'),)) as $font) {
	if (isset($fonts[$font])) {
		$this['asset']->addFile('css', $fonts[$font]);
	}
}

// set body css classes
$body_classes  = $sidebar_classes.' ';
$body_classes .= $this['system']->isBlog() ? 'isblog ' : 'noblog ';
$body_classes .= $this['config']->get('page_class');

$this['config']->set('body_classes', $body_classes);

// add social buttons
$body_config['twitter'] = (int) $this['config']->get('twitter', 0);
$body_config['plusone'] = (int) $this['config']->get('plusone', 0);
$body_config['facebook'] = (int) $this['config']->get('facebook', 0);

$this['config']->set('body_config', json_encode($body_config));

// add javascripts
$this['asset']->addFile('js', 'js:warp.js');
$this['asset']->addFile('js', 'js:responsive.js');
$this['asset']->addFile('js', 'js:accordionmenu.js');
$this['asset']->addFile('js', 'js:dropdownmenu.js');
$this['asset']->addFile('js', 'js:template.js');

// internet explorer
if ($this['useragent']->browser() == 'msie') {

	// add conditional comments
	$head[] = sprintf('<!--[if lte IE 8]><script src="%s"></script><![endif]-->', $this['path']->url('js:html5.js'));
	$head[] = sprintf('<!--[if IE 8]><link rel="stylesheet" href="%s" /><![endif]-->', $this['path']->url('css:ie8.css'));

}

// add $head
if (isset($head)) {
	$this['template']->set('head', implode("\n", $head));
}