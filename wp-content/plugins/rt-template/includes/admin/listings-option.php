<?php

function rt_listings_option_page(){
  $listings_opts        = [];
  ?>

  <div class="wrap">
    <h1><?php echo __( 'Add listing', 'rt-template'); ?></h1>

    <form method="POST" action="<?php menu_page_url( 'rt_plugin_listing_opts' ); ?>">
    <input type="hidden" name="action" value="">
      <div class="container">

        <fieldset class="module aligned ">
          <!-- Realtor -->
          <div class="row field-realtor">
            <div class="col-sm-8">
              <label class="required" for="id_realtor"><?php echo __( 'Realtor', 'rt-template'); ?>:</label>
              <div class="related-widget-wrapper">
                <select name="realtor" required id="id_realtor">
                  <option value="" selected>---------</option>
                  <option value="2">Mark Hudson</option>
                  <option value="1">Kyle Brown</option>
                  <option value="3">Jenny Johnson</option>
                </select>
          
                <a class="" id="" data-href-template="" title=""><img src="" alt="Change"></a>
                <a class="" id="" href="" title=""><img src="" alt="Add"></a>
                <a class="" id="" data-href-template="" title=""><img src="" alt="Delete"></a>
          
              </div>       
            </div>     
          </div>
          <!-- Listing title -->
          <div class="row field-title">
            <div class="col-sm-8">
              <label class="required" for="id_title"><?php echo __( 'Title', 'rt-template' ); ?>:</label>
                <input type="text" name="title" class="vTextField" maxlength="200" required id="id_title">
              </div>
          </div>
          <!-- Address -->
          <div class="row field-address">
            <div class="col-sm-8">
              <label class="required" for="id_address"><?php echo __( 'Address', 'rt-template'); ?>:</label>
              <input type="text" name="address" class="vTextField" maxlength="200" required id="id_address">
            </div>
          </div>
          <!-- City -->
          <div class="row field-city">
            <div class="col-sm-8">
              <label class="required" for="id_city"><?php echo __( 'City', 'rt-template' ); ?>:</label>
              <input type="text" name="city" class="vTextField" maxlength="100" required id="id_city">
            </div>
          </div>
          <!-- State -->
          <div class="row field-state">
            <div class="col-sm-8">
              <label class="required" for="id_state"><?php echo __( 'State', 'rt-template' ); ?>:</label>
              <input type="text" name="state" class="vTextField" maxlength="100" required id="id_state">
            </div>
          </div>
          <!-- Zipcode -->
          <div class="row field-zipcode">
            <div class="col-sm-8">
              <label class="required" for="id_zipcode"><?php echo __( 'Zipcode', 'rt-template'); ?>:</label>
              <input type="text" name="zipcode" class="vTextField" maxlength="20" required id="id_zipcode">
            </div>
          </div>
          <!-- Description -->
          <div class="row field-description">
            <div class="col-sm-8">
              <label for="id_description"><?php echo __( 'Description', 'rt-template'); ?>:</label>
              <textarea name="description" cols="40" rows="10" class="vLargeTextField" id="id_description">
              </textarea>
            </div>
          </div>
          <!-- Price -->
          <div class="row field-price">
            <div class="col-sm-8">
              <label class="required" for="id_price"><?php echo __( 'Price', 'rt-template'); ?>:</label>
              <input type="number" name="price" class="vIntegerField" required id="id_price">
            </div>
          </div>
          <!-- Bedrooms -->
          <div class="row field-bedrooms">
            <div class="col-sm-8">
              <label class="required" for="id_bedrooms"><?php echo __( 'Bedrooms', 'rt-template'); ?>s:</label>
              <input type="number" name="bedrooms" class="vIntegerField" required id="id_bedrooms">
            </div>
          </div>
          <!-- Bathrooms -->
          <div class="row field-bathrooms">
            <div class="col-sm-8">
              <label class="required" for="id_bathrooms"><?php echo __( 'Bathrooms', 'rt-template'); ?>:</label>
              <input type="number" name="bathrooms" step="0.1" required id="id_bathrooms">
            </div>
          </div>
          <!-- Garage -->
          <div class="row field-garage">
            <div class="col-sm-8">
              <label class="required" for="id_garage"><?php echo __( 'Garage', 'rt-template'); ?>:</label>
              <input type="number" name="garage" value="0" class="vIntegerField" required id="id_garage">
            </div>
          </div>
          <!-- Squared foot -->
          <div class="row field-sqft">
            <div class="col-sm-8">
              <label class="required" for="id_sqft"><?php echo __( 'Squared foot', 'rt-template'); ?>:</label>
              <input type="number" name="sqft" class="vIntegerField" required id="id_sqft">
            </div>
          </div>
          <!-- Lot size -->
          <div class="row field-lot_size">
            <div class="col-sm-8">
              <label class="required" for="id_lot_size"><?php echo __( 'Lot size', 'rt-template'); ?>:</label>
              <input type="number" name="lot_size" step="0.1" required id="id_lot_size">
            </div>
          </div>
          <!-- Photo main -->
          <div class="row field-photo_main">
            <div class="col-sm-8">
              <label class="required" for="id_photo_main"><?php echo __( 'Photo main', 'rt-template'); ?>:</label>
              <input type="file" name="photo_main" accept="image/*" required id="id_photo_main">
            </div>
          </div>
          <!-- Photo 1 -->
          <div class="row field-photo_1">
            <div class="col-sm-8">
              <label for="id_photo_1"><?php echo __( 'Photo 1', 'rt-template'); ?>:</label>
              <input type="file" name="photo_1" accept="image/*" id="id_photo_1">
            </div>
          </div>
          <!-- Photo 2 -->
          <div class="row field-photo_2">
            <div class="col-sm-8">
              <label for="id_photo_2"><?php echo __( 'Photo 2', 'rt-template'); ?>:</label>
              <input type="file" name="photo_2" accept="image/*" id="id_photo_2">
            </div>
          </div>
          <!-- Photo 3 -->
          <div class="row field-photo_3">
            <div class="col-sm-8">
              <label for="id_photo_3"><?php echo __( 'Photo 3', 'rt-template'); ?>:</label>
              <input type="file" name="photo_3" accept="image/*" id="id_photo_3">
            </div>
          </div>
          <!-- Photo 4 -->
          <div class="row field-photo_4">
            <div class="col-sm-8">
              <label for="id_photo_4"><?php echo __( 'Photo 4', 'rt-template'); ?>:</label>
              <input type="file" name="photo_4" accept="image/*" id="id_photo_4">
            </div>
          </div>
          <!-- Photo 5 -->
          <div class="row field-photo_5">
            <div class="col-sm-8">
              <label for="id_photo_5"><?php echo __( 'Photo 5', 'rt-template'); ?>:</label>
              <input type="file" name="photo_5" accept="image/*" id="id_photo_5">
            </div>
          </div>
          <!-- Photo 6 -->
          <div class="row field-photo_6">
            <div class="col-sm-8">
              <label for="id_photo_6"><?php echo __( 'Photo 6', 'rt-template'); ?>:</label>
              <input type="file" name="photo_6" accept="image/*" id="id_photo_6">
            </div>
          </div>
          <!-- Is published -->
          <div class="row field-is_published">
            <div class="checkbox-row">
              <input type="checkbox" name="is_published" id="id_is_published" checked><label class="vCheckboxLabel" for="id_is_published"><?php echo __( 'Is published', 'rt-template'); ?></label>
            </div>
          </div>
          <!-- List date -->
          <div class="row field-list_date">
            <div class="col-sm-8">
              <label for="id_list_date_0"><?php echo __( 'List date', 'rt-template'); ?>:</label>
              <p class="datetime">
              <?php echo __( 'Date', 'rt-template'); ?>: <input type="text" name="list_date_0" value="2020-03-18" class="vDateField" size="10" id="id_list_date_0">

                <br>
                <?php echo __( 'Time', 'rt-template'); ?>: <input type="text" name="list_date_1" value="20:48:16" class="vTimeField" size="8" id="id_list_date_1">


              </p>
              <input type="hidden" name="initial-list_date_0" value="2020-03-18" id="initial-id_list_date_0">
              <input type="hidden" name="initial-list_date_1" value="20:48:16" id="initial-id_list_date_1">
                              
                          
                          
            </div>
                  
          </div>
          
        </fieldset>
        <!-- Save -->
        <div class="row">
          <button type="submit" class="btn btn-primary"><?php _e('Save', 'rt-template'); ?></button>
          <!-- <input type="submit" value="Save" class="btn btn-primary" name="_save">
          <input type="submit" value="Save and add another" name="_addanother">
          <input type="submit" value="Save and continue editing" name="_continue"> -->
        </div>
        
       <!--  <script type="text/javascript" 
                id="django-admin-add-constants" 
                src="/static/admin/js/change_form.js"
                data-model-name="listing"
                      >
        </script>

        <script type="text/javascript"
                id="django-admin-prepopulated-fields-constants"
                src="/static/admin/js/prepopulate_init.js"
                data-prepopulated-fields="[]">
        </script> -->


      </div>
    </form>
  </div>
  

  <?php



  


}