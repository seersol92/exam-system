<div class="row">
    <!-- left column -->
    <div class="col-md-12">
        <!-- general form elements -->
        <?php echo ($this->session->flashdata('error')) ? error_msg($this->session->flashdata('error')) : ''; ?>
        <?php echo ($this->session->flashdata('success')) ? success_msg($this->session->flashdata('success')) : ''; ?>
        <div class="box box-primary">
            <!-- form start -->

            <form role="form" method="POST" action="<?php echo site_url('admin/settings/update'); ?>" enctype="multipart/form-data">
                <div class="box-body">
                    <div class="row">
                    <div class="col-xs-12">
                    <div class="form-group col-xs-12">
                        <label>Site Title</label>
                        <input type="text" class="form-control" name="site_title" value="<?php echo (isset($settings->site_title)) ? $settings->site_title : ''; ?>" />
                    </div>
                    <div class="form-group col-xs-12">
                        <label>Description</label>
                        <textarea  class="form-control editor" name="description"><?php echo (isset($settings->description)) ? $settings->description : ''; ?></textarea>
                    </div>
                    <div class="form-group col-xs-12">
                        <label>Keywords (comma separated) </label>
                        <input type="text" class="form-control" name="keywords" value="<?php echo (isset($settings->keywords)) ? $settings->keywords : ''; ?>"/>
                    </div>
                    <div class="form-group col-xs-12">
                        <label>Address</label>
                        <input type="text" class="form-control" name="address" value="<?php echo (isset($settings->address)) ? $settings->address : ''; ?>"/>
                    </div>
                    <div class="form-group col-xs-12">
                        <label>city</label>
                        <input type="text" class="form-control" name="city" value="<?php echo (isset($settings->city)) ? $settings->city : ''; ?>"/>
                    </div>
                    <div class="form-group col-xs-12">
                        <label>email</label>
                        <input type="text" class="form-control" name="email" value="<?php echo (isset($settings->email)) ? $settings->email : ''; ?>"/>
                    </div>
                    <div class="form-group col-xs-12">
                        <label>phone</label>
                        <input type="text" class="form-control" name="phone" value="<?php echo (isset($settings->phone)) ? $settings->phone : ''; ?>"/>
                    </div> 
                    <div class="form-group col-xs-12">
                        <label>About Us Page Content</label>
                        <textarea  class="form-control editor"  rows="10" name="aboutus_content"><?php echo (isset($settings->aboutus_content)) ? $settings->aboutus_content : ''; ?></textarea>
                    </div> 
                        
                         <div class="form-group col-xs-12">
                            <label>Date Format</label>
                            <?php 
                            $format = (isset($settings->date_format)) ? $settings->date_format : '';
                            echo date_format_select($format); ?>
                        </div>
                        <div class="form-group col-xs-12">
                            <label>Site Logo</label>
                             <div style="clear:both"></div>
                            <?php
                            if (isset($settings->logo)  && $settings->logo != '') {
                                $image_properties = array(
                                              'src' => (isset($settings->logo)) ? $settings->logo : 'assets/img/15.jpg',
                                              'alt' => 'logo',
                                              'class' => 'col-xs-4',
                                              'title' => 'logo',
                                    );

                                 echo  img($image_properties);
                             }
                             ?>
                              <div style="clear:both"></div> <br>
                            <input type="file" class="form-control" name="logo" />
                        </div>

                        <div class="form-group col-xs-12">
                            <label>Facebook Url</label>
                            <input type="text" class="form-control" name="facebook_url" value="<?php echo (isset($settings->facebook_url)) ? $settings->facebook_url : ''; ?>"/>
                        </div>
                        <div class="form-group col-xs-12">
                            <label>Twitter Url</label>
                            <input type="text" class="form-control" name="twitter_url" value="<?php echo (isset($settings->twitter_url)) ? $settings->twitter_url : ''; ?>"/>
                        </div>
                        <div class="form-group col-xs-12">
                            <label>Instagram Url</label>
                            <input type="text" class="form-control" name="instagram_url" value="<?php echo (isset($settings->instagram_url)) ? $settings->instagram_url : ''; ?>"/>
                        </div>
                        <div class="form-group col-xs-12">
                            <label>Tumblr Url</label>
                            <input type="text" class="form-control" name="tumblr_url" value="<?php echo (isset($settings->tumblr_url)) ? $settings->tumblr_url : ''; ?>"/>
                        </div>


                    </div>
                </div><!-- /.box-body -->

                <div class="box-footer clearfix">
                    <button type="submit" class="btn btn-primary pull-right">Submit</button>
                </div>
            </form>
        </div><!-- /.box -->

    </div><!--/.col (left) -->

</div>