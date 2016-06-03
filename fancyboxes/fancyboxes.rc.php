<?php
/* ====================
[BEGIN_COT_EXT]
Hooks=rc
[END_COT_EXT]
==================== */

/**
 * fancyBoxes plugin
 *
 * @author  Roffun
 * @copyright Copyright (c) Roffun | https://github.com/Roffun/fancyboxes
 * @license BSD
 */

defined('COT_CODE') or die('Wrong URL.');

if ($cfg['plugin']['fancyboxes']['css'] == 1)
{
	Resources::addFile($cfg['plugins_dir'] .'/fancyboxes/css/jquery.fancybox.css');
}
