<?php
/* ====================
[BEGIN_COT_EXT]
Hooks=rc
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

if ($cfg['plugin']['fancyboxes']['css'] == 1)
{
	Resources::addFile($cfg['plugins_dir'] .'/fancyboxes/css/jquery.fancybox.css');
}
