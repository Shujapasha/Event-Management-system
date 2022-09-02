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
                
                <div id="hide-table">
                    <table id="example1" class="table table-striped table-bordered table-hover dataTable no-footer">
                        <thead>
                            <tr>
                                <th class="col-sm-2"><?=$this->lang->line('slno')?></th>
                                <th class="col-sm-2"><?=$this->lang->line('cabstract_title')?></th> 
                                <th class="col-sm-2">Name</th>
                                <th class="col-sm-2">Email</th>
                                <th class="col-sm-2">Category</th>
                                <th class="col-sm-2">Abstract</th>
                                <th class="col-sm-2">PDF</th>
                                   <?php if(permissionChecker('cabstract_edit')) { ?>
                                <th class="col-lg-1">Status</th>
                                <?php } ?>
                             <!--    <?php if(permissionChecker('cabstract_edit') || permissionChecker('cabstract_delete') || permissionChecker('cabstract_view')) { ?>
                                    <th class="col-sm-2"><?=$this->lang->line('action')?></th>
                                <?php } ?> -->
                            </tr>
                        </thead>
                        <tbody>
                            <?php if(count($cabstracts)) {$i = 1; foreach($cabstracts as $cabstract) { ?>
                                <tr>
                                    <td data-title="<?=$this->lang->line('slno')?>">
                                        <?php echo $i; ?>
                                    </td>
                                    <td data-title="<?=$this->lang->line('cabstract_title')?>">
                                        <?=$cabstract->title;?>
                                    </td> 
                                    <td data-title="Name">
                                        <?=$cabstract->fullName;?>    
                                    </td>
                                    <td data-title="Phone">
                                        <?=$cabstract->emailaddress;?>
                                    </td>
                                    <td data-title="Phone">
                                         
                                        <?=$category[$cabstract->categoryID]->category;?>
                                    </td>
                                    <td data-title="Phone">
                                         
                                        <?=$cabstract->message;?>
                                    </td>
                                    <td data-title="Phone">
                                         <a class="btn btn-primary btn-sm" href="<?=base_url("uploads/documents/$cabstract->pdf");?>" target="_blank">PDF View</a>
                                        
                                    </td>
                                  

                                   <?php if(permissionChecker('cabstract_edit')) { ?>
                                    <td data-title="<?=$this->lang->line('user_status')?>">
                                      <div class="onoffswitch-small" id="<?=$cabstract->abstractID?>">
                                          <input type="checkbox" id="myonoffswitch<?=$cabstract->abstractID?>" class="onoffswitch-small-checkbox" name="paypal_demo" <?php if($cabstract->abstract_status === '1') echo "checked='checked'"; ?>>
                                          <label for="myonoffswitch<?=$cabstract->abstractID?>" class="onoffswitch-small-label">
                                              <span class="onoffswitch-small-inner"></span>
                                              <span class="onoffswitch-small-switch"></span>
                                          </label>
                                      </div>           
                                    </td>
                                    <?php } ?>
                                  <!--   <?php if(permissionChecker('cabstract_edit') || permissionChecker('cabstract_delete') || permissionChecker('cabstract_view')) { ?>

                                        <td data-title="<?=$this->lang->line('action')?>">
                                            <?php echo btn_view('cabstract/view/'.$cabstract->abstractID, $this->lang->line('view')) ?>
                                            <?php echo btn_edit('cabstract/edit/'.$cabstract->abstractID, $this->lang->line('edit')) ?>
                                            <?php echo btn_delete('cabstract/delete/'.$cabstract->abstractID, $this->lang->line('delete')) ?>
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
              url: "<?=base_url('cabstract/active')?>",
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