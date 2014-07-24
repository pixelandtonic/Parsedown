<?php
namespace Craft;

/**
 * Parsedown Twig Extension
 */
class ParsedownTwigExtension extends \Twig_Extension
{
	/**
	 * Returns the name of the extension.
	 *
	 * @return string The extension name
	 */
	public function getName()
	{
		return 'Parsedown';
	}

	/**
	 * Returns a list of filters to add to the existing list.
	 *
	 * @return array An array of filters
	 */
	public function getFilters()
	{
		$parsedownFilter = new \Twig_Filter_Method($this, 'parsedownFilter');

		return array(
			'parsedown' => $parsedownFilter,
			'pd'        => $parsedownFilter,
		);
	}

	/**
	 * The Parsedown filter
	 *
	 * @param string $text The text to be parsed
	 * @param string $mode The parsing mode ('text' or 'line').
	 * @param mixed $tags
	 * @return string
	 */
	public function parsedownFilter($text, $parseAs = 'text')
	{
		if ($parseAs == 'line')
		{
			$parsed = craft()->parsedown->parseLine($text);
		}
		else
		{
			$parsed = craft()->parsedown->parseText($text);
		}

		return TemplateHelper::getRaw($parsed);
	}
}
