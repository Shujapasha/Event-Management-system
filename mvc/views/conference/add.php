
<div class="box">
    <div class="box-header">
        <h3 class="box-title"><i class="fa fa-calendar"></i> <?=$this->lang->line('panel_title')?></h3>
        <ol class="breadcrumb">
            <li><a href="<?=base_url("dashboard/index")?>"><i class="fa fa-laptop"></i> <?=$this->lang->line('menu_dashboard')?></a></li>
            <li><a href="<?=base_url("conference/index")?>"><?=$this->lang->line('menu_conference')?></a></li>
            <li class="active"><?=$this->lang->line('menu_add')?> <?=$this->lang->line('menu_conference')?></li>
        </ol>
    </div><!-- /.box-header -->
    <!-- form start -->
    <div class="box-body">
        <div class="row">
            <div class="col-sm-10">
                <form class="form-horizontal" role="form" method="post">


                    <div class="form-group <?=form_error('conference') ? 'has-error' : '' ?>" >
                        <label for="conference" class="col-sm-2 control-label">
                            <?=$this->lang->line("conference_title")?> <span class="text-red">*</span>
                        </label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="conference" name="conference" value="<?=set_value('conference')?>" >
                        </div>
                        <span class="col-sm-4 control-label">
                            <?php echo form_error('conference'); ?>
                        </span>
                    </div>
                    
                    <div class="form-group <?=form_error('conference_date') ? 'has-error' : '' ?>" >
                        <label for="conference_date" class="col-sm-2 control-label">
                            Date <span class="text-red">*</span>
                        </label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="conference_date" name="conference_date" value="<?=set_value('conference_date')?>" >
                        </div>
                        <span class="col-sm-4 control-label">
                            <?php echo form_error('conference_date'); ?>
                        </span>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-8">
                            <input type="submit" class="btn btn-success" value="<?=$this->lang->line("add_conference")?>" >
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
$("#conference_date").datepicker();
</script>
