
<div class="box">
    <div class="box-header">
        <h3 class="box-title"><i class="fa fa-calendar"></i> <?=$this->lang->line('panel_title')?></h3>
        <ol class="breadcrumb">
            <li><a href="<?=base_url("dashboard/index")?>"><i class="fa fa-laptop"></i> <?=$this->lang->line('menu_dashboard')?></a></li>
            <li><a href="<?=base_url("regtype/index")?>"><?=$this->lang->line('menu_regtype')?></a></li>
            <li class="active"><?=$this->lang->line('menu_add')?> <?=$this->lang->line('menu_regtype')?></li>
        </ol>
    </div><!-- /.box-header -->
    <!-- form start -->
    <div class="box-body">
        <div class="row">
            <div class="col-sm-10">
                <form class="form-horizontal" role="form" method="post">

                    <div class="form-group <?=form_error('regtype') ? 'has-error' : '' ?>" >
                        <label for="title" class="col-sm-2 control-label">
                            <?=$this->lang->line("regtype_title")?> <span class="text-red">*</span>
                        </label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="regtype" name="regtype" value="<?=set_value('regtype')?>" >
                        </div>
                        <span class="col-sm-4 control-label">
                            <?php echo form_error('regtype'); ?>
                        </span>
                    </div>

                    <div class="form-group <?=form_error('amount_pkr') ? 'has-error' : '' ?>" >
                        <label for="title" class="col-sm-2 control-label">
                            Amount PKR <span class="text-red">*</span>
                        </label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="amount_pkr" name="amount_pkr" value="<?=set_value('amount_pkr')?>" >
                        </div>
                        <span class="col-sm-4 control-label">
                            <?php echo form_error('amount_pkr'); ?>
                        </span>
                    </div>

                    <div class="form-group <?=form_error('amount_usd') ? 'has-error' : '' ?>" >
                        <label for="title" class="col-sm-2 control-label">
                            Amount USD <span class="text-red">*</span>
                        </label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="amount_usd" name="amount_usd" value="<?=set_value('amount_usd')?>" >
                        </div>
                        <span class="col-sm-4 control-label">
                            <?php echo form_error('amount_usd'); ?>
                        </span>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-8">
                            <input type="submit" class="btn btn-success" value="<?=$this->lang->line("add_regtype")?>" >
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">

</script>
