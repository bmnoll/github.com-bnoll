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

    

    /**

     * Generate the page head section as well as the navbar and open the content section

     * @return string

     */

	public static function render()

	{

		echo static::$content;

	}

}