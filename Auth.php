<?php



require_once($_SERVER[ 'DOCUMENT_ROOT' ] . '\config.php');

require_once 'Database.php';



class Auth

{

    

    /**

     * Authenticate a user and save their info to the session

     *

     * @param $data

     *

     * @return bool

     */

    public static function login($data)

    {

        $username = $_POST[ 'username' ];

        $password = $_POST[ 'password' ];

        

        // If no user record found - return false

        if ( !$user = self::getUser($username) ) return false;

        

        // Process login - invalid password return false

        if ( !password_verify($password, $user[ 'password' ]) ) return false;

        

        // If we got this far we have a valid username/password

        // Save user info (minus password) to session

        unset($user[ 'password' ]);

        

        $_SESSION[ 'user' ] = $user;



//        echo 'Good password<br><pre>';

//        echo print_r($user);

//        echo '</pre>';

    }

    

    /**

     * Logout user by removing their info from the session

     *

     * @return bool

     */

    public function logout()

    {

        unset($_SESSION['user']);

        

        return true;

    }

    

    /**

     * returns true is user is logged in (checks for the

     * existence of a user session variable)

     *

     * @return bool

     */

    public static function check()

    {

        return (array_key_exists('user', $_SESSION));

    }

    

    /**

     * returns true when a user is not logged in (checks to the

     * non-existence of a user session variable)

     * @return bool

     */

    public static function guest()

    {

        return (! array_key_exists('user', $_SESSION));

    }

    

    /**

     * Returns the user record of the logged in user.  Gets data from

     * the session

     *

     * @return bool|mixed

     */

    public static function user()

    {

        if (! array_key_exists('user', $_SESSION)) return false;

        

        return $_SESSION['user'];

    }

    

    

    

    /**

     * Get user record from the database, if it exists

     *

     * @param $username

     *

     * @return mixed

     */

    private static function getUser($username)

    {

        $sql = "select * from users where username = '$username';";

        $results = self::executeQuery($sql);

        

        return $results;

    }

    

    /**

     * Execute a SQL query and return the result

     *

     * @param $sql

     *

     * @return mixed

     */

    private static function executeQuery($sql)

    {

        $db = new Database(DB_HOST, DB_USER, DB_PASS, DB_NAME);

        $res = $db->query($sql);

        return $res->fetch();

    }

    

}