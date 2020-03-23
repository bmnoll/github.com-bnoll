
<?php





class ResortsView

{

    /**

     * Render 1 featured resort to the screen

     * @param $data

     */

    public static function renderFeatured($data){

        

        $title = $data['title'];

        $content = $data['content'];

        $image = '/assets/images/'. $data['image'];

  

        echo  <<<story

            <div class="card" style="margin: 15px; width: 20rem;">

              <img class="card-img-top" src="$image" alt="$title">

              <div class="card-body">

                <h5 class="card-title">$title</h5>

                <p class="card-text">$content</p>

                <a href="#" class="btn btn-primary" role="button">Full Review &raquo;</a>

              </div>

            </div>

story;

    }

    

    /**

     * Accept an array of featured resorts and send them to the render method

     * @param $data

     */

    public static function renderMultipleFeatured($data) {

        

        // Some enclosing HTML

        echo '<div class="container">

                <div class="row">';

        

        // Loop through the resort data

        foreach ( $data as $resort ) {

            echo self::renderFeatured($resort);

        }

        

        // Closing out the enclosing HTML

        echo '    </div>

                <hr>

                </div> <!-- /container -->';

    }

    

    public static function renderResortList($data)

    {

?>

    <table class="table table-striped">

        <thead class="thead-dark">

            <tr>

                <th scope="col" style="width: 16.66%">Image</th>

                <th scope="col" style="width: 16.66%">Title</th>

                <th scope="col" style="width: 50%">Review</th>

                <th scope="col" style="width: 16.66%">Created Date</th>

            </tr>

        </thead>



<?php

        foreach ($data as $resort){

            

            /* Create the data variables  NOTE: you have to create variables here because

             * PHP won't let you use an array variable ($resort['title'] inside the

             * PHP HEREDOC

             */

            $dateCreated = date('M Y',strtotime($resort['date_created']));

            $image = '/assets/images/' . $resort['image'];

            $title = $resort['title'];

            $content = $resort['content'];

            

        // Build the content block.

        echo <<<Layout

        <tr>

            <td><img src="$image" width="100" alt="$title"></td>

            <td>$title</td>

            <td>$content</td>

            <td>$dateCreated</td>

        </tr>

Layout;

        

        }

?>



    </table>

    </div> <!-- /container -->

<?php

    }

}