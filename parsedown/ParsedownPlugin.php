<?php
namespace Craft;

/**
 * Parsedown plugin
 */
class ParsedownPlugin extends BasePlugin
{
	function getName()
	{
		return 'Parsedown';
	}

	function getVersion()
	{
		return '1.0';
	}

	function getDeveloper()
	{
		return 'Pixel & Tonic';
	}

	function getDeveloperUrl()
	{
		return 'http://pixelandtonic.com';
	}

	public function addTwigExtension()
	{
		Craft::import('plugins.parsedown.twigextensions.ParsedownTwigExtension');
		return new ParsedownTwigExtension();
	}
}
