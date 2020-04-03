<?php

function rt_realtors_option_page(){
  $realtors_opts        = [];
  global $wpdb;
  ?>

  <div id="content" class="wrap">
        
    <h1><?php echo __( 'Add realtor', 'rt-template'); ?></h1>
    <div id="content-main">
    <?php //menu_page_url( 'rt_plugin_listing_opts' ); ?>

      <form enctype="" action="admin-post.php" method="POST" id="realtor_form" novalidate>
        <input type="hidden" name="action" value="rt_save_realtor">
        <?php //wp_nonce_field( 'rt_options_verify' ); ?>
        <div class="container">
          <fieldset class="module aligned">
            <!-- Name -->
            <div class="row">
              <div class="col-sm-8">
                <label class="required" for="id_name"><?php echo __( 'Name', 'rt-template'); ?>:</label>
                <input type="text" name="name" class="" maxlength="200" required id="id_name">
              </div>
            </div>
            <!-- Upload photo -->
            <div class="row">
              <div class="col-sm-8">
                <label class="required" for="id_photo"><?php echo __( 'Photo', 'rt-template'); ?>:</label>
                <input type="file" name="photo" accept="image/*" required id="id_photo">
              </div>
            </div>
            <!-- Description -->
            <div class="row">
              <div class="col-sm-8">
                <label for="id_description"><?php echo __( 'Description', 'rt-template'); ?>:</label>
                <textarea name="description" cols="40" rows="10" class="vLargeTextField" id="id_description">
                </textarea>
              </div>
            </div>
            <!-- Phone number -->
            <div class="row">
              <div class="col-sm-8">
                <label class="required" for="id_phone"><?php echo __( 'Phone', 'rt-template'); ?>:</label>
                <input type="text" name="phone" class="vTextField" maxlength="20" required id="id_phone">
              </div>
            </div>
            <!-- email -->
            <div class="row">
              <div class="col-sm-8">
                <label class="required" for="id_email"><?php echo __( 'Email', 'rt-template'); ?>:</label>
                <input type="text" name="email" class="vTextField" maxlength="50" required id="id_email">
              </div>
            </div>
            <!-- Is mvp -->
            <div class="row">
              <div class="col-sm-8">
                <input type="checkbox" name="is_mvp" id="id_is_mvp"><label class="vCheckboxLabel" for="id_is_mvp"><?php echo __( 'Is mvp', 'rt-template'); ?></label>
              </div>
            </div>
            <!-- Hire Date -->
            <div class="row">
              <div class="col-sm-8">
                <label for="id_hire_date_0"><?php echo __( 'Hire Date', 'rt-template'); ?>:</label>
                <p class="datetime">
                <?php echo __( 'Date', 'rt-template'); ?>: <input type="text" name="hire_date_0" value="2020-03-18" class="vDateField" size="10" id="id_hire_date_0">

                <br>
                <?php echo __( 'Time', 'rt-template'); ?>: <input type="text" name="hire_date_1" value="21:19:50" class="vTimeField" size="8" id="id_hire_date_1">


                </p>
                <input type="hidden" name="initial-hire_date_0" value="2020-03-18" id="initial-id_hire_date_0"><input type="hidden" name="initial-hire_date_1" value="21:19:50" id="initial-id_hire_date_1">
                                        
              </div> 
            </div>
            
          </fieldset>
          <!-- Save -->
          <!-- <div class="row">
            <button type="submit" class="btn btn-primary"><?php //_e('Save', 'rt-template'); ?></button>
          </div> -->

          <!-- <script type="text/javascript"
                  id="django-admin-form-add-constants"
                  src="/static/admin/js/change_form.js"
                  data-model-name="realtor"
                  >
          </script>

          <script type="text/javascript"
                  id="django-admin-prepopulated-fields-constants"
                  src="/static/admin/js/prepopulate_init.js"
                  data-prepopulated-fields="[]">
          </script> -->

        </div>

        <?php
        // output security fields for the registered setting "wporg_options"
        settings_fields( 'rt_realtor_options' );
        // output setting sections and their fields
        // (sections are registered for "wporg", each field is registered to a specific section)
        do_settings_sections( 'rt_plugin_listing_opts' );
        // output save settings button
        submit_button( __('Save Settings', 'rt-template' ) );
        ?>

      </form>
    </div>
  </div>



  <?php

  


}