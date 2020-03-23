<?php





class story

{

    /**

     * Render 1 story to the screen

     * @param $data

     */

    public static function render($data){

        

        $title = $data['title'];

        $description = $data['description'];

        $image = '/assets/images/'. $data['image'];

  

        echo  <<<story

            <div class="card" style="margin: 15px; width: 20rem;">

              <img class="card-img-top" src="$image" alt="$title">

              <div class="card-body">

                <h5 class="card-title">$title</h5>

                <p class="card-text">$description</p>

                <a href="#" class="btn btn-primary" role="button">Full Review &raquo;</a>

              </div>

            </div>

story;

    }

    

    /**

     * Accept an array of stories and sned them to the render method

     * @param $data

     */

    public static function renderMultiple($data) {

        

        echo '<div class="row">';

        

        foreach ( $data as $story ) {

            echo self::render($story);

        }

    

        echo '</div>';

    }

    

}