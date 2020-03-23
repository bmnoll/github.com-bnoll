<?php



class createform extends layout

{

    public static $content =  <<<formlayout

        <form method="POST" action="createresort.php">

          <div class="form-group row">

            <label for="text" class="col-3 col-form-label">Title</label>

            <div class="col-9">

              <input id="text" name="text" placeholder="Resort Name" type="text" aria-describedby="textHelpBlock" required="required" class="form-control">

              <span id="textHelpBlock" class="form-text text-muted">Name of resort being reviewed</span>

            </div>

          </div>

          <div class="form-group row">

            <label for="review" class="col-3 col-form-label">Review</label>

            <div class="col-9">

              <textarea id="review" name="review" cols="40" rows="6" aria-describedby="reviewHelpBlock" required="required" class="form-control"></textarea>

              <span id="reviewHelpBlock" class="form-text text-muted">Here is where you write your review</span>

            </div>

          </div>

          <div class="form-group row">

            <label class="col-3">Featured</label>

            <div class="col-9">

              <div class="custom-control custom-radio custom-control-inline">

                <input name="featured" id="featured_0" type="radio" aria-describedby="featuredHelpBlock" class="custom-control-input" value="1">

                <label for="featured_0" class="custom-control-label">Yes</label>

              </div>

              <div class="custom-control custom-radio custom-control-inline">

                <input name="featured" id="featured_1" type="radio" aria-describedby="featuredHelpBlock" class="custom-control-input" value="0">

                <label for="featured_1" class="custom-control-label">No</label>

              </div>

              <span id="featuredHelpBlock" class="form-text text-muted">Is this a featured resort</span>

            </div>

          </div>

          <div class="form-group row">

            <div class="offset-3 col-9">

              <button name="submit" type="submit" class="btn btn-primary">Create</button>

            </div>

          </div>

        </form>



formlayout;



}