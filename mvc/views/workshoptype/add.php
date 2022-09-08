
<div class="box">
    <div class="box-header">
        <h3 class="box-title"><i class="fa fa-calendar"></i> <?=$this->lang->line('panel_title')?></h3>
        <ol class="breadcrumb">
            <li><a href="<?=base_url("dashboard/index")?>"><i class="fa fa-laptop"></i> <?=$this->lang->line('menu_dashboard')?></a></li>
            <li><a href="<?=base_url("workshoptype/index")?>"><?=$this->lang->line('menu_workshoptype')?></a></li>
            <li class="active"><?=$this->lang->line('menu_add')?> <?=$this->lang->line('menu_workshoptype')?></li>
        </ol>
    </div><!-- /.box-header -->
    <!-- form start -->
    <div class="box-body">
        <div class="row">
            <div class="col-sm-10">
               <form class="form-horizontal" role="form" method="post">

                    <div class="form-group <?=form_error('workshoptype') ? 'has-error' : '' ?>" >
                        <label for="title" class="col-sm-2 control-label">
                            <?=$this->lang->line("workshoptype_title")?> <span class="text-red">*</span>
                        </label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="workshoptype" name="workshoptype" value="<?=set_value('workshoptype')?>" >
                        </div>
                        <span class="col-sm-4 control-label">
                            <?php echo form_error('workshoptype'); ?>
                        </span>
                    </div>

                    <div class="form-group <?=form_error('amount_type') ? 'has-error' : '' ?>" >
                        <label for="title" class="col-sm-2 control-label">
                            Amount Type <span class="text-red">*</span>
                        </label>
                        <div class="col-sm-6">

                              <?php
                                $array = array();
                                $array['']      = 'Please Select';
                                $array['PKR']   = 'PKR';
                                $array['USD']   = 'USD';

                                
                                echo form_dropdown("amount_type", $array, set_value("amount_type"), "id='amount_type' class='form-control'");
                            ?>
                             
                        </div>
                        <span class="col-sm-4 control-label">
                            <?php echo form_error('amount_type'); ?>
                        </span>
                    </div>

                    <div class="form-group <?=form_error('amount') ? 'has-error' : '' ?>" >
                        <label for="title" class="col-sm-2 control-label">
                            Amount <span class="text-red">*</span>
                        </label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="amount" name="amount" value="<?=set_value('amount')?>" >
                        </div>
                        <span class="col-sm-4 control-label">
                            <?php echo form_error('amount'); ?>
                        </span>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-8">
                            <input type="submit" class="btn btn-success" value="<?=$this->lang->line("add_workshoptype")?>" >
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">

</script>
