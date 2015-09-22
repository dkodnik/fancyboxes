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
 * @author Roffun
 * @copyright (c) 2015 Roffun | https://github.com/roffun/fancyboxes
 * @license BSD
 */

defined('COT_CODE') or die('Wrong URL.');

if ($cfg['plugin']['fancyboxes']['css'] == 1)
{
	Resources::addFile($cfg['plugins_dir'] .'/fancyboxes/css/jquery.fancybox.css');
}
