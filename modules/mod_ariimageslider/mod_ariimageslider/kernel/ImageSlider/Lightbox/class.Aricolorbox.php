<?php
/*
 * ARI Image Slider
 *
 * @package		ARI Image Slider
 * @version		1.0.0
 * @author		ARI Soft
 * @copyright	Copyright (c) 2010 www.ari-soft.com. All rights reserved
 * @license		GNU/GPL (http://www.gnu.org/copyleft/gpl.html)
 * 
 */

defined('ARI_FRAMEWORK_LOADED') or die('Direct Access to this location is not allowed.');

AriKernel::import('ImageSlider.Lightbox.LightboxEngine');
AriKernel::import('Web.JSON.JSONHelper');

class AricolorboxImageSliderEngine extends AriImageSliderLightboxEngine 
{
	function preCheck()
	{
		$version = new JVersion();
		$plgPath = JPATH_ROOT . '/plugins/system/aricolorbox/aricolorbox.php';
		if (!@file_exists($plgPath))
		{
			$app = JFactory::getApplication();

			$app->enqueueMessage('<b>ARI Image Slider</b>: "System - ARI Colorbox" plugin isn\'t installed.');
			
			return false;
		}
		
		return true;
	}
	
	function modifyAttrs($lnkAttrs, $imgAttrs, $group, $params)
	{
		if ($group)
			$lnkAttrs['rel'] = $group;
			
		if (empty($lnkAttrs['class']))
			$lnkAttrs['class'] = '';
		else
			$lnkAttrs['class'] .= ' ';
			
		$lnkAttrs['class'] .= 'aricolorbox';

		$link = $lnkAttrs['href'];
		if ($this->isLink($link))
		{
			$lnkParams = array('iframe' => true, 'width' => $params->get('lightbox_width'), 'height' => $params->get('lightbox_height'));
			$lnkAttrs['class'] .= ' ' . str_replace('"', '&quot;', AriJSONHelper::encode($lnkParams));
		}

		return parent::modifyAttrs($lnkAttrs, $imgAttrs, $group, $params);
	}
}