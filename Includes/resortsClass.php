<?php



require_once($_SERVER['DOCUMENT_ROOT'].'/csc206/includes/config.php');

require_once(FS_INCLUDES . 'Database.php');





class ResortsClass

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

    public function getResorts()

    {

        $sql = "SELECT * FROM resorts";

        return $this->executeQuery($sql);

    }

    

    /**

     * Fet the featured resorts that will appear on the home page

     * @return mixed

     */

    public function getFeaturedResorts()

    {

        $sql = "SELECT * FROM resorts WHERE featured = 1";

        return $this->executeQuery($sql);

    }

    

    /**

     * Execute a SQL query and return the result

     * @param $sql

     *

     * @return mixed

     */

    private function executeQuery($sql)

    {

        $res = $this->db->query($sql);

        return $res->fetchAll();

    }