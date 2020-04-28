<?php



require_once($_SERVER['DOCUMENT_ROOT'].'/csc206/includes/config.php');

require_once(FS_INCLUDES . 'Database.php');





class UploadClass

{

    /**

     * Database connection object

     */

    private $db = null;

    

    /**

     * resorts constructor - makes database connection.

     */

    public function __construct()

    {

        // Connect to the database

        $this->db = new Database(DB_HOST, DB_USER, DB_PASS, DB_NAME);

    }

    

    /**

     * get all resorts from the database

     * @return mixed

     */

    public function getUploadedFile()

    {

        $sql = "SELECT * FROM resorts";

        return $this->executeQuery($sql);

    }

    

}