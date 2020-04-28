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

        <h1>Resort List</h1>

    

<?php



	

    $sql = "SELECT * FROM meals";



    $res = $db->query($sql);



    $meals = $res->fetchAll();

 

?>



    <table class="table">

        <tr>

            <td>Name</td>

            <td>Description</td>

            <td>Created Date</td>

        </tr>



<?php

        foreach ($meals as $meal){





?>

        <tr>

            <td><?php echo $meal['name']; ?> </td>

            <td><?php echo $meal['description']; ?> </td>

            <td><?php echo $meal['created_date']; ?> </td>

        </tr>



<?php

        }

?>



    </table>





    </div> <!-- /container -->







<?php

    footer::render();



?>