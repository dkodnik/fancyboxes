<?php
/* ====================
[BEGIN_COT_EXT]
Code=boxes
Hooks=footer.tags
Order=10
[END_COT_EXT]
==================== */
/**
 * FancyBoxes plugin
 *
 * @package fancyboxes
 * @version 1.0
 * @author Script fancyBox: Janis Skarnelis | Cotonti plugin FancyBoxes: Roffun
 * @copyright Script fancyBox (c) 2012 Janis Skarnelis | Cotonti plugin FancyBoxes (c) 2015 Roffun | http://olro.net/blog/blog-internet/fancyboxes-plugin-cotonti
 * @license BSD
 */

defined('COT_CODE') or die('Wrong URL.');

if ($cfg['plugin']['fancyboxes']['f_choose'] == 'fgallery')
{
	$fclass = 'fancybox';
	$fgroup = 'gallery';
}
if ($cfg['plugin']['fancyboxes']['f_choose'] == 'fbuttons')
{
	$fclass = 'fancybox-buttons';
	$fgroup = 'button';
}
if ($cfg['plugin']['fancyboxes']['f_choose'] == 'fthumbs')
{
	$fclass = 'fancybox-thumbs';
	$fgroup = 'thumb';
}

$fa_conf =
	'$(document).ready(function() {$("a[href]").filter(function() {return /\.(jpg|jpeg|png|gif)$/i.test(this.href);}).attr({"class":"' .
	$fclass . '","data-fancybox-group":"' . $fgroup . '"})});';
$fa_conf .= Resources::minify(file_get_contents($cfg['plugins_dir'] .
	'/fancyboxes/js/fancyboxes.cfg.js'),'js');

if ($cfg['plugin']['fancyboxes']['f_nomainjs'])
{
	if ($env['ext'] != 'index' && $env['location'] != 'home')
	{
		Resources::linkFileFooter($cfg['plugins_dir'] .
			'/fancyboxes/js/jquery.fancybox.pack.js');
		Resources::embedFooter($fa_conf);
	}
}
else
{
	Resources::linkFileFooter($cfg['plugins_dir'] .
		'/fancyboxes/js/jquery.fancybox.pack.js');
	Resources::embedFooter($fa_conf);
}
