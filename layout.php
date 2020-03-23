
<?php



/**

 * Renders HTML layouts to the screen

 *  layout

 */

class layout {

    

    /**

     * Holds the content to be rendered

     * @var string

     */

    public static $content = '';

    

	public static function render($titleString = '')

	{

        static::$content = str_replace('{{TITLE_STRING}}', $titleString, static::$content);

		echo static::$content;

	}

}