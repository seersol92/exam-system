<div class="row">
<!-- left column -->
<div class="col-md-12">

<div class="box box-primary">

<?php echo (isset($message) && $message != '') ? error_msg($message) : '';?>

<?php echo form_open(uri_string());?>

<div class="box-body">
    <div class="row">
      <div class="col-xs-7"> 
      <div class="form-group col-xs-12">
            <?php echo lang('edit_user_fname_label', 'first_name');?> <br />
            <?php echo form_input($first_name);?>
      </div>

      <div class="form-group col-xs-12">
            <?php echo lang('edit_user_lname_label', 'last_name');?> <br />
            <?php echo form_input($last_name);?>
      </div>

      <div class="form-group col-xs-12">
            <?php echo lang('edit_user_company_label', 'company');?> <br />
            <?php echo form_input($company);?>
      </div>

      <div class="form-group col-xs-12">
            <?php echo lang('edit_user_phone_label', 'phone');?> <br />
            <?php echo form_input($phone);?>
      </div>

      <div class="form-group col-xs-12">
            <?php echo lang('edit_user_password_label', 'password');?> <br />
            <?php echo form_input($password);?>
      </div>

      <div class="form-group col-xs-12">
            <?php echo lang('edit_user_password_confirm_label', 'password_confirm');?><br />
            <?php echo form_input($password_confirm);?>
      </div>

      <?php //if ($this->ion_auth->is_admin()): ?>
      <div class="form-group col-xs-12">  <h4><?php echo lang('edit_user_groups_heading');?></h4>
          <?php foreach ($groups as $group):?>
              <label class="checkbox">
              <?php
                  $gID=$group['id'];
                  $checked = null;
                  $item = null;
                  foreach($currentGroups as $grp) {
                      if ($gID == $grp->id) {
                          $checked= ' checked="checked"';
                      break;
                      }
                  }
              ?>
              <input type="checkbox" name="groups[]" value="<?php echo $group['id'];?>"<?php echo $checked;?>>
              <?php echo htmlspecialchars($group['name'],ENT_QUOTES,'UTF-8');?>
              </label>

          <?php endforeach?>
          </div>
      <?php //endif ?>

      <?php echo form_hidden('id', $user->id);?>
      <?php echo form_hidden($csrf); ?>
              </div>
          </div>
        </div>

        <div class="box-footer clearfix">
            <div class="form-group col-xs-7">
          <button type="submit" class="btn btn-primary  pull-right">Submit</button>
      </div>
      </div>
      <?php echo form_close();?>
    </div>
  </div>
</div>
