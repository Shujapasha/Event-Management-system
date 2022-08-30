<div class="box">
    <div class="box-header">
        <h3 class="box-title"><i class="fa fa-calendar"></i> <?=$this->lang->line('panel_title')?></h3>


        <ol class="breadcrumb">
            <li><a href="<?=base_url("dashboard/index")?>"><i class="fa fa-laptop"></i> <?=$this->lang->line('menu_dashboard')?></a></li>
            <li class="active"><?=$this->lang->line('panel_title')?></li>
        </ol>
    </div><!-- /.box-header -->
    <!-- form start -->
    <div class="box-body">
        <div class="row">
            <div class="col-sm-12">
                <?php if(permissionChecker('registrations_add')) { ?>
                    <h5 class="page-header">
                        <a href="<?php echo base_url('registrations/add') ?>">
                            <i class="fa fa-plus"></i>
                            <?=$this->lang->line('add_title')?>
                        </a>
                    </h5>
                <?php } ?>
                <div id="hide-table">
                    <table id="example1" class="table table-striped table-bordered table-hover dataTable no-footer">
                        <thead>
                            <tr>
                                <th class="col-sm-2"><?=$this->lang->line('slno')?></th>
                                <th class="col-sm-2"><?=$this->lang->line('registrations_title')?></th>
                                <th class="col-sm-2">Type</th>
                                <th class="col-sm-2">Name</th>
                                <th class="col-sm-2">Phone</th>
                                <th class="col-sm-2">Category</th>
                                   <?php if(permissionChecker('registrations_edit')) { ?>
                                <th class="col-lg-1">Status</th>
                                <?php } ?>
                             <!--    <?php if(permissionChecker('registrations_edit') || permissionChecker('registrations_delete') || permissionChecker('registrations_view')) { ?>
                                    <th class="col-sm-2"><?=$this->lang->line('action')?></th>
                                <?php } ?> -->
                            </tr>
                        </thead>
                        <tbody>
                            <?php if(count($registrationss)) {$i = 1; foreach($registrationss as $registrations) { ?>
                                <tr>
                                    <td data-title="<?=$this->lang->line('slno')?>">
                                        <?php echo $i; ?>
                                    </td>
                                    <td data-title="<?=$this->lang->line('registrations_title')?>">
                                        <?=$registrations->abstract_title;?>
                                    </td>
                                    <td data-title="Type">
                                        <?=$regtype[$registrations->regtypeID]->regtype;?>  <?=$registrations->amount_type;?>  <?=$registrations->amount;?>
                                    </td>
                                    <td data-title="Name">
                                        <?=$registrations->first_name;?>   <?=$registrations->last_name;?>
                                    </td>
                                    <td data-title="Phone">
                                        <?=$registrations->phone_number;?>
                                    </td>
                                    <td data-title="Phone">
                                         
                                        <?=$category[$registrations->categoryID]->category;?>
                                    </td>
                                  

                                   <?php if(permissionChecker('registrations_edit')) { ?>
                                    <td data-title="<?=$this->lang->line('user_status')?>">
                                      <div class="onoffswitch-small" id="<?=$registrations->registrationsID?>">
                                          <input type="checkbox" id="myonoffswitch<?=$registrations->registrationsID?>" class="onoffswitch-small-checkbox" name="paypal_demo" <?php if($registrations->registrations_status === '1') echo "checked='checked'"; ?>>
                                          <label for="myonoffswitch<?=$registrations->registrationsID?>" class="onoffswitch-small-label">
                                              <span class="onoffswitch-small-inner"></span>
                                              <span class="onoffswitch-small-switch"></span>
                                          </label>
                                      </div>           
                                    </td>
                                    <?php } ?>
                                  <!--   <?php if(permissionChecker('registrations_edit') || permissionChecker('registrations_delete') || permissionChecker('registrations_view')) { ?>

                                        <td data-title="<?=$this->lang->line('action')?>">
                                            <?php echo btn_view('registrations/view/'.$registrations->registrationsID, $this->lang->line('view')) ?>
                                            <?php echo btn_edit('registrations/edit/'.$registrations->registrationsID, $this->lang->line('edit')) ?>
                                            <?php echo btn_delete('registrations/delete/'.$registrations->registrationsID, $this->lang->line('delete')) ?>
                                        </td>
                                    <?php } ?> -->
                                </tr>
                            <?php $i++; }} ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>


<script>
  var status = '';
  var id = 0;
  $('.onoffswitch-small-checkbox').click(function() {
      if($(this).prop('checked')) {
          status = 'chacked';
          id = $(this).parent().attr("id");
      } else {
          status = 'unchacked';
          id = $(this).parent().attr("id");
      }

      if((status != '' || status != null) && (id !='')) {
          $.ajax({
              type: 'POST',
              url: "<?=base_url('registrations/active')?>",
              data: "id=" + id + "&status=" + status,
              dataType: "html",
              success: function(data) {
                  if(data == 'Success') {
                      toastr["success"]("Success")
                      toastr.options = {
                        "closeButton": true,
                        "debug": false,
                        "newestOnTop": false,
                        "progressBar": false,
                        "positionClass": "toast-top-right",
                        "preventDuplicates": false,
                        "onclick": null,
                        "showDuration": "500",
                        "hideDuration": "500",
                        "timeOut": "5000",
                        "extendedTimeOut": "1000",
                        "showEasing": "swing",
                        "hideEasing": "linear",
                        "showMethod": "fadeIn",
                        "hideMethod": "fadeOut"
                      }
                  } else {
                      toastr["error"]("Error")
                      toastr.options = {
                        "closeButton": true,
                        "debug": false,
                        "newestOnTop": false,
                        "progressBar": false,
                        "positionClass": "toast-top-right",
                        "preventDuplicates": false,
                        "onclick": null,
                        "showDuration": "500",
                        "hideDuration": "500",
                        "timeOut": "5000",
                        "extendedTimeOut": "1000",
                        "showEasing": "swing",
                        "hideEasing": "linear",
                        "showMethod": "fadeIn",
                        "hideMethod": "fadeOut"
                      }
                  }
              }
          });
      }
  }); 
</script>