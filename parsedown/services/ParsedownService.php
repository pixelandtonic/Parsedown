<?php
namespace Craft;

/**
 * Parsedown service
 */
class ParsedownService extends BaseApplicationComponent
{
	/**
	 * Parses some text.
	 *
	 * @param string $text
	 * @return string
	 */
	public function parseText($text)
	{
		return $this->_getParsedown()->text($text);
	}

	/**
	 * Parses a single line, without wrapping it in <p>.
	 *
	 * @param string $line
	 * @return string
	 */
	public function parseLine($line)
	{
		return $this->_getParsedown()->line($line);
	}

	/**
	 * Returns a new Parsedown instance.
	 *
	 * @access private
	 * @return \Parsedown
	 */
	private function _getParsedown()
	{
		if (!class_exists('\Parsedown'))
		{
			require_once craft()->path->getPluginsPath().'parsedown/vendor/autoload.php';
		}

		return new \Parsedown();
	}
}
