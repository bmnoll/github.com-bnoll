<?php



require_once 'config.php';

require_once 'Database.php';



class RegisterClass

{

    

    /**

     * Authenticate a user and save their info to the session

     *

     * @param $data

     *

     * @return bool

     */

    public static function register($data)

    {

        return self::create($data);

    }

    

    /**

     * Get all users from the database

     *

     * @return mixed

     */

    public function getUsers()

    {

        $sql = "SELECT * FROM users";

        return $this->executeQuery($sql);

    }

    

    /**

     * Get user record from the database, if it exists

     *

     * @param $username

     *

     * @return mixed

     */

    private static function create($user)

    {

        // Create hashed password to store

        $password = password_hash($user[ 'password' ], PASSWORD_DEFAULT);

        

        $fn = $user[ 'firstname' ];

        $ln = $user[ 'lastname' ];

        $email = $user[ 'email' ];

        $username = $user[ 'username' ];

        $date_created = date('Y-m-d h:i:s');

        

        // Build the SQL

        $sql = "INSERT into users (firstname, lastname, email, username, password, date_created) values (";

        $sql .= " '$fn', ";

        $sql .= " '$ln', ";

        $sql .= " '$email', ";

        $sql .= " '$username', ";

        $sql .= " '$password', ";

        $sql .= " '$date_created' )";

        

        $results = self::executeQueryNoData($sql);

        

        return $results;

    }

    

    /**

     * Delete a user based on the primary key

     *

     * @param $id

     *

     * @return bool

     */

    public function delete($id)

    {

        $sql = "delete from users where id = " . $id . ";";

        self::executeQueryNoData($sql);

        

        return true;

    }

    

    public function update($data)

    {

    }

    

    /**

     * Return the first (only) user that matches the id

     *

     * @param $id

     *

     * @return mixed

     */

    public function show($id)

    {

        $sql = "SELECT * FROM users where id = " . $id . ";";

        $users = $this->executeQuery($sql);

        return $users[0];

    }

    

    /**

     * Execute a SQL query and return the result

     *

     * @param $sql

     *

     * @return mixed

     */

    private static function executeQueryNoData($sql)

    {

        $db = new Database(DB_HOST, DB_USER, DB_PASS, DB_NAME);

        $res = $db->query($sql);

        return $res;

    }

    

    /**

     * Execute a SQL query and return the result

     *

     * @param $sql

     *

     * @return mixed

     */

    private function executeQuery($sql)

    {

        $db = new Database(DB_HOST, DB_USER, DB_PASS, DB_NAME);

        $res = $db->query($sql);

        return $res->fetchAll();

    }

    

}