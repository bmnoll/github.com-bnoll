<?php



class RegisterView

{

    /**

     * Render login form

     *

     * @param $data

     */

    public static function registrationForm()

    {

        echo <<<registration

            <form method="POST" action="register.php" >

                  <div class="form-group row">

                    <h3 class="offset-4 col-4">Please Register</h3>

                  </div>

                <div class="form-group row">

                    <label for="firstname" class="col-4 col-form-label text-right">First Name</label>

                    <div class="col-4">

                        <input id="firstname" name="firstname" type="text" class="form-control" required="required">

                    </div>

                </div>

                <div class="form-group row">

                    <label for="lastname" class="col-4 col-form-label text-right">Last Name</label>

                    <div class="col-4">

                        <input id="lastname" name="lastname" type="text" class="form-control" required="required">

                    </div>

                </div>

                <div class="form-group row">

                    <label for="email" class="col-4 col-form-label text-right">Email Address</label>

                    <div class="col-4">

                        <input id="email" name="email" type="text" class="form-control" required="required">

                    </div>

                </div>

                <div class="form-group row">

                    <label for="username" class="col-4 col-form-label text-right">Username</label>

                    <div class="col-4">

                        <input id="username" name="username" type="text" class="form-control" required="required">

                    </div>

                </div>

                <div class="form-group row">

                    <label for="password" class="col-4 col-form-label text-right">Password</label>

                    <div class="col-4">

                        <input id="password" name="password" type="password" class="form-control" required="required">

                    </div>

                </div>

                <div class="form-group row">

                    <label for="confirm_password" class="col-4 col-form-label text-right">Confirm Password</label>

                    <div class="col-4">

                        <input id="confirm_password" name="confirm_password" type="password" class="form-control" required="required">

                    </div>

                </div>

                <div class="form-group row">

                    <div class="offset-4 col-4">

                        <button name="submit" type="submit" class="btn btn-primary">Create User</button>

                    </div>

                </div>

            </form>

registration;

    }

    

    public static function renderUserList($data)

    {

        ?>

        <table class="table table-striped">

            <thead class="thead-dark">

            <tr>

                <th scope="col">Name</th>

                <th scope="col">Username</th>

                <th scope="col">Email</th>

                <th scope="col">Created Date</th>

                <th scope="col">Actions</th>

            </tr>

            </thead>

            

            <?php

            foreach ( $data as $user ) {

                /* Create the data variables  NOTE: you have to create variables here because

                 * PHP won't let you use an array variable ($resort['title'] inside the

                 * PHP HEREDOC

                 */

                $dateCreated = date('M Y', strtotime($user[ 'date_created' ]));

                $name = $user[ 'lastname' ] . ", " . $user[ 'firstname' ];

                $email = $user[ 'email' ];

                $username = $user[ 'username' ];

                $id = $user[ 'id' ];

                $showUrl = "/showUser.php?id=" . $id;

                

                // Build the content block.

                echo <<<Layout

        <tr>

            <td>$name</td>

            <td>$username</td>

            <td>$email</td>

            <td>$dateCreated</td>

            <td>

                <a href="$showUrl" class="btn btn-sm btn-success d-inline">Show</a>

                <form method="POST" action="deleteUser.php" class="d-inline">

                        <input id="id" name="id" type="hidden" value="$id">

                        <button type="submit" class="btn btn-sm btn-danger">Delete</button>

                    </form></td>

        </tr>

Layout;

            }

            ?>



        </table>

        </div> <!-- /container -->

        <?php

    }

    

    public static function renderSingleUser($data)

    {

?>

        <table class="table table-striped">

            <thead class="thead-dark">

            <tr>

                <th scope="col">Field</th>

                <th scope="col">Value</th>

            </tr>

            </thead>

<?php

    

        foreach ( $data as $name => $value ) {

            echo <<<Layout

                <tr>

                    <td>$name</td>

                    <td>$value</td>

                </tr>

Layout;

        }

        

    }

}