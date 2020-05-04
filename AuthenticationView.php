<?php





class AuthenticationView

{

    /**

     * Render login form

     * @param $data

     */

    public static function loginForm(){

        

        echo <<<loginform

        
        <br/>
        <form method="POST" action="login.php" >

          <div class="form-group row">

            <h3 class="offset-4 col-4">Please Login</h3>

          </div>

          <div class="form-group row">

            <label for="username" class="col-4 col-form-label text-right">Username:</label>

            <div class="col-4">

              <div class="input-group">

                <input id="username" name="username" type="text" class="form-control" aria-describedby="usernameHelpBlock">

              </div>

            </div>

          </div>

          <div class="form-group row">

            <label for="password" class="col-4 col-form-label text-right">Password:</label>

            <div class="col-4">

              <div class="input-group">

                <input id="password" name="password" type="password" class="form-control">

              </div>

            </div>

          </div>

          <div class="form-group row">

            <div class="offset-4 col-4">

              <button name="submit" type="submit" class="btn btn-primary">Submit</button>

            </div>

          </div>

        </form>
        
        <br/>

loginform;


    }

    

}