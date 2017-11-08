<?php
namespace Sellastica\BlueScreen;

class BlueScreen
{
	/**
	 * @param string $message
	 * @param string|null $description
	 * @param string $icon
	 */
	public static function display(
		string $message = null,
		string $description = null,
		$icon = ':('
	): void
	{
		require __DIR__ . '/template.phtml';
	}

	/**
	 * @param string|null $message
	 * @param string|null $description
	 */
	public static function forbidden(
		string $message = null,
		string $description = null
	): void
	{
		self::display($message, $description, '&cross;');
	}
}