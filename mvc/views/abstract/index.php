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
                <?php if(permissionChecker('abstract_add')) { ?>
                    <h5 class="page-header">
                        <a href="<?php echo base_url('abstract/add') ?>">
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
                                <th class="col-sm-2"><?=$this->lang->line('abstract_title')?></th>
                                <?php if(permissionChecker('abstract_edit') || permissionChecker('abstract_delete') || permissionChecker('abstract_view')) { ?>
                                    <th class="col-sm-2"><?=$this->lang->line('action')?></th>
                                <?php } ?>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if(count($abstracts)) {$i = 1; foreach($abstracts as $abstract) { ?>
                                <tr>
                                    <td data-title="<?=$this->lang->line('slno')?>">
                                        <?php echo $i; ?>
                                    </td>
                                    <td data-title="<?=$this->lang->line('abstract_title')?>">
                                        <?=$abstract->title;?>
                                    </td>
                                    <?php if(permissionChecker('abstract_edit') || permissionChecker('abstract_delete') || permissionChecker('abstract_view')) { ?>

                                        <td data-title="<?=$this->lang->line('action')?>">
                                            <?php echo btn_view('abstract/view/'.$abstract->abstractID, $this->lang->line('view')) ?>
                                            <?php echo btn_edit('abstract/edit/'.$abstract->abstractID, $this->lang->line('edit')) ?>
                                            <?php echo btn_delete('abstract/delete/'.$abstract->abstractID, $this->lang->line('delete')) ?>
                                        </td>
                                    <?php } ?>
                                </tr>
                            <?php $i++; }} ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>