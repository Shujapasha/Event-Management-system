<div class="box">
    <div class="box-header">
        <h3 class="box-title"><i class="fa iniicon-balancefeesreport"></i> <?=$this->lang->line('panel_title')?></h3>
        <ol class="breadcrumb">
            <li><a href="<?=base_url("dashboard/index")?>"><i class="fa fa-laptop"></i> <?=$this->lang->line('menu_dashboard')?></a></li>
            <li class="active"> <?=$this->lang->line('menu_balancefeesreport')?></li>
        </ol>
    </div><!-- /.box-header -->
    <!-- form start -->
    <div class="box-body">
        <div class="row">
                 <div class="col-sm-12">
                    <ul class="nav nav-tabs">
                        <li class="active"><a data-toggle="tab" href="#home">Degree Wise Report</a></li>
                        <li><a data-toggle="tab" href="#menu1">Date Wise Report</a></li>
                    </ul>

                  <div class="tab-content">
                    <div id="home" class="tab-pane fade in active">
                        <div class="col-sm-12">
                            <div class="form-group col-sm-4" id="classesDiv">
                                <label><?=$this->lang->line("balancefeesreport_class")?></label>
                                <?php
                                    $classesArray = array(
                                        "0" => $this->lang->line("balancefeesreport_please_select"),
                                    );
                                    foreach ($classes as $classaKey => $classa) {
                                        $classesArray[$classa->classesID] = $classa->classes;
                                    }
                                    echo form_dropdown("classesID", $classesArray, set_value("classesID"), "id='classesID' class='form-control select2'");
                                 ?>
                            </div>

                            <div class="form-group col-sm-4" id="sectionDiv">
                                <label><?=$this->lang->line("balancefeesreport_section")?></label>
                                <?php
                                    $sectionArray = array(
                                        "0" => $this->lang->line("balancefeesreport_please_select"),
                                    );
                                    echo form_dropdown("sectionID", $sectionArray, set_value("sectionID"), "id='sectionID' class='form-control select2'");
                                 ?>
                            </div>

                            <div class="form-group col-sm-4" id="studentDiv">
                                <label><?=$this->lang->line("balancefeesreport_student")?></label>
                                <?php
                                    $studentArray = array(
                                        "0" => $this->lang->line("balancefeesreport_please_select"),
                                    );
                                    echo form_dropdown("studentID", $studentArray, set_value("studentID"), "id='studentID' class='form-control select2'");
                                 ?>
                            </div>

                            <div class="col-sm-4">
                                <button id="get_duefeesreport" class="btn btn-success" style="margin-top:23px;"> <?=$this->lang->line("balancefeesreport_submit")?></button>
                            </div>

                        </div>
                    </div>
                    <div id="menu1" class="tab-pane fade">
                      <div class="box-body">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group col-sm-4" id="fromdateDiv">
                                        <label><?='From Date'?><span class="text-red"> * </span></label>
                                       <input class="form-control" type="text" name="fromdate" id="fromdate">
                                    </div>

                                    <div class="form-group col-sm-4" id="todateDiv">
                                        <label><?='To Date'?><span class="text-red"> * </span></label>
                                        <input class="form-control" type="text" name="todate" id="todate">
                                    </div>

                                    <div class="col-sm-4">
                                        <button id="get_classreport" class="btn btn-success" style="margin-top:23px;"> <?='Get Report'?></button>
                                    </div>
                                </div>
                            </div><!-- row -->
                        </div><!-- Body -->
                    </div>
                  </div>
                </div>

        </div><!-- row -->
    </div><!-- Body -->
</div><!-- /.box -->

<div id="load_balancefeesreport"></div>


<script type="text/javascript">

    function printDiv(divID) {
        var oldPage = document.body.innerHTML;
        $('#headerImage').remove();
        $('.footerAll').remove();
        var divElements = document.getElementById(divID).innerHTML;
        var footer = "<center><img src='<?=base_url('uploads/images/'.$siteinfos->photo)?>' style='width:30px;' /></center>";
        var copyright = "<center><?=$siteinfos->footer?> | <?=$this->lang->line('balancefeesreport_hotline')?> : <?=$siteinfos->phone?></center>";
        document.body.innerHTML =
          "<html><head><title></title></head><body>" +
          "<center><img src='<?=base_url('uploads/images/'.$siteinfos->photo)?>' style='width:50px;' /></center>"
          + divElements + footer + copyright + "</body>";

        window.print();
        document.body.innerHTML = oldPage;
        window.location.reload();
    }

    $('.select2').select2();

    $('#fromdate').datepicker({
        autoclose: true,
        format: 'dd-mm-yyyy',
        startDate:'<?=$schoolyearsessionobj->startingdate?>',
        endDate:'<?=$schoolyearsessionobj->endingdate?>',
    });

    $('#todate').datepicker({
        autoclose: true,
        format: 'dd-mm-yyyy',
        startDate:'<?=$schoolyearsessionobj->startingdate?>',
        endDate:'<?=$schoolyearsessionobj->endingdate?>',
    });
    
    $(function(){
        $('#sectionDiv').hide('slow');
        $('#studentDiv').hide('slow');
    });

    $(document).on('change', "#classesID", function() {
        $('#load_balancefeesreport').html("");
        var classesID = $(this).val();
        
        $('#sectionID').val(0);
        $('#studentID').html("<option value='0'>" + "<?=$this->lang->line("balancefeesreport_please_select")?>" +"</option>");
        $('#studentID').val(0);
        
        if(classesID == '0'){
            $("#sectionDiv").hide('slow');
            $("#studentDiv").hide('slow');
        } else {
            $("#sectionDiv").show('slow');
            $("#studentDiv").show('slow');
        }

        if(classesID !=0) {
            $.ajax({
                type: 'POST',
                url: "<?=base_url('balancefeesreport/getSection')?>",
                data: {"classesID" : classesID},
                dataType: "html",
                success: function(data) {
                   $('#sectionID').html(data);
                }
            });
        }
    });

    $(document).on('change', "#sectionID", function() {
        $('#load_balancefeesreport').html("");
        var sectionID = $(this).val();
        
        $('#studentID').html("<option value='0'>" + "<?=$this->lang->line("balancefeesreport_please_select")?>" +"</option>");
        $('#studentID').val(0);

        var classesID = $('#classesID').val();
        if(sectionID != 0 && classesID != 0) {
            $.ajax({
                type: 'POST',
                url: "<?=base_url('balancefeesreport/getStudent')?>",
                data: {"classesID":classesID, "sectionID" : sectionID},
                dataType: "html",
                success: function(data) {
                   $('#studentID').html(data);
                }
            });
        }
    });

    $(document).on('click','#get_duefeesreport,#get_classreport', function() {
        $('#load_balancefeesreport').html("");
        var classesID = $('#classesID').val();
        var sectionID = $('#sectionID').val();
        var studentID = $('#studentID').val();
        var fromdate  = $('#fromdate').val();
        var todate    = $('#todate').val();
        var error = 0;

        var field = {
            "classesID" : classesID,
            "sectionID" : sectionID,
            "studentID" : studentID,
            "fromdate"  : fromdate,
            "todate"    : todate,
        };

        if(fromdate != '' && todate == '') {
            error++;
            $('#todateDiv').addClass('has-error');
        } else{
            $('#todateDiv').removeClass('has-error');
        }

        if(fromdate == '' && todate != '') {
            error++;
            $('#fromdateDiv').addClass('has-error');
        } else {
            $('#fromdateDiv').removeClass('has-error');
        }

        if(fromdate != '' && todate != '') {
            var fromdate = fromdate.split('-');
            var todate = todate.split('-');
            var currentdate = new Date();
            var newfromdate = new Date(fromdate[2], fromdate[1]-1, fromdate[0]);
            var newtodate   = new Date(todate[2], todate[1]-1, todate[0]);

            if(newfromdate.getTime() > newtodate.getTime()) {
                error++;
                $('#todateDiv').addClass('has-error');
            } else {
                $('#todateDiv').removeClass('has-error');
            }

        }

        if(error == 0 ) {
            makingPostDataPreviousofAjaxCall(field);
        }
    });

    function makingPostDataPreviousofAjaxCall(field) {
        passData = field;
        ajaxCall(passData);
    }

    function ajaxCall(passData) {
        $.ajax({
            type: 'POST',
            url: "<?=base_url('balancefeesreport/getBalanceFeesReport')?>",
            data: passData,
            dataType: "html",
            success: function(data) {
                var response = JSON.parse(data);
                renderLoder(response, passData);
            }
        });
    }

    function renderLoder(response, passData) {
        if(response.status) {
            $('#load_balancefeesreport').html(response.render);
            for (var key in passData) {
                if (passData.hasOwnProperty(key)) {
                    $('#'+key).parent().removeClass('has-error');
                }
            }
        } else {
            for (var key in passData) {
                if (passData.hasOwnProperty(key)) {
                    $('#'+key).parent().removeClass('has-error');
                }
            }

            for (var key in response) {
                if (response.hasOwnProperty(key)) {
                    $('#'+key).parent().addClass('has-error');
                }
            }
        }
    }
</script>


