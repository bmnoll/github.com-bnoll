
<?php

// Load basic configuration parameters

require('./csc206/includes/application_includes.php');



// Layout code for page

require('./csc206/templates/header.php');

require('./csc206/templates/footer.php');



// Display top of page

header::render();



?>



<div class="container"> 

    <h1>Meal Management</h1> 





<?php

// If this is a GET Request - show the form

if ($requestType == 'GET') {



    echo 'We got a GET Request.';

    // Dispaly the form

?>        

    <form method="POST" action="createmeals.php">

      <div class="form-group row">

        <label for="name" class="col-4 col-form-label">Meal Name</label> 

        <div class="col-8">

          <input id="name" name="name" type="text" class="form-control">

        </div>

      </div>

      <div class="form-group row">

        <label for="description" class="col-4 col-form-label">Description</label> 

        <div class="col-8">

          <input id="description" name="description" type="text" class="form-control">

        </div>

      </div> 

      <div class="form-group row">

        <div class="offset-4 col-8">

          <button name="submit" type="submit" class="btn btn-primary">Submit</button>

        </div>

      </div>

    </form>



<?php



} else {

    

    echo 'We got a POST Request.';

    // Process and validate the form contents



    $data = $_POST;



    // Formattated data

    foreach($data as $key => $value) {



        $value = trim($value);

        $value = stripslashes($value);

        $value = htmlspecialchars($value);



        $data[$key] = trim($value);

    }



    if (validFloating($data['description']) || validInteger($data['description'])){

        // Do something here

        $data['description'] = 'Invalid data provided';

    }





    $sql = "INSERT INTO meals (name, description) VALUES ( '" . $data['name'] . "', '" . $data['description'] . "' )";



    $result = $db->query($sql);



    // Redirect to a listings page





}





?>



</div> <!-- /container -->







<?php

footer::render();





function validInteger($value)

{

    return is_int($value);

}



function validFloating($value)

{

    return is_float($value);

}



function validBoolean($value)

{

    return is_bool($value);

}



function validString($value)

{

    return is_string($value);

}



?>