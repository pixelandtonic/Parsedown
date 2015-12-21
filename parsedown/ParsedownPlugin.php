<?php
namespace Craft;

/**
 * Parsedown plugin
 */
class ParsedownPlugin extends BasePlugin
{
	/**
	 * @return string
	 */
	public function getName()
	{
		return 'Parsedown';
	}

	/**
	 * @return string
	 */
	public function getVersion()
	{
		return '1.1';
	}

	/**
	 * @return string
	 */
	public function getSchemaVersion()
	{
		return '1.0.0';
	}

	/**
	 * @return string
	 */
	public function getDeveloper()
	{
		return 'Pixel & Tonic';
	}

	/**
	 * @return string
	 */
	public function getDeveloperUrl()
	{
		return 'http://pixelandtonic.com';
	}

	/**
	 * @return string
	 */
	public function getPluginUrl()
	{
		return 'https://github.com/pixelandtonic/Parsedown';
	}

	/**
	 * @return string
	 */
	public function getDocumentationUrl()
	{
		return $this->getPluginUrl().'/blob/master/README.md';
	}

	/**
	 * @return string
	 */
	public function getReleaseFeedUrl()
	{
		return 'https://raw.githubusercontent.com/pixelandtonic/Parsedown/master/releases.json';
	}

	/**
	 * @return ParsedownTwigExtension
	 */
	public function addTwigExtension()
	{
		Craft::import('plugins.parsedown.twigextensions.ParsedownTwigExtension');
		return new ParsedownTwigExtension();
	}
}
