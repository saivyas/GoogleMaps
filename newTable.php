    <div class="row">
      <div class="col-xs-12">
        <!-- PAGE CONTENT BEGINS -->
        <div class="widget-header">
          <h4 class="widget-title">New Table
          <a href='javascript:void(0)' class="btn-round btn-danger pull-right" onclick="document.getElementById('new_table').innerHTML='';">
            <i class="fa fa-times"></i>
          </a>
          </h4>
        </div>
        <div class="space-4"></div>
        <form role="form" method="post" class="form-horizontal" action="<?php
         if($action=='edit_record'){
          echo base_url('main/tableUpdate/'.$diary_id.'');
        }else{ 
          echo base_url('main/tableInsert');
        }?>" 
        >
          <!-- #section:elements.form -->
          <div class="form-group">
            <label for="system_table_name" class="col-sm-3 control-label no-padding-right">System Table Name </label>

            <div class="col-sm-9">
              <input type="text" class="col-xs-10 col-sm-5" placeholder="System Table Name" id="system_table_name" name="system_table_name" value="<?php echo $system_table_name;?>">
            </div>
          </div>
          <div class="form-group">
            <label for="user_table_name" class="col-sm-3 control-label no-padding-right"> User Table Name </label>

            <div class="col-sm-9">
                <div class="input-group input-group-sm col-sm-5">
                  <input type="text" class="form-control hasDatepicker" id="user_table_name" placeholder="User Table Name" name="user_table_name" value="<?php echo $user_table_name;?>">
                </div>
              </div>
          </div>
          <div class="form-group">
            <label for="attached_records" class="col-sm-3 control-label no-padding-right"> Parent Name</label>

            <div class="col-sm-9">
               <input type="text" id="parent_name" class="col-xs-10 col-sm-5" placeholder="Parent Name" readonly name="parent_name" value="<?php echo $parent_name;?>">
            </div>
          </div>
          <div class="form-group">
            <label for="parent_table" class="col-sm-3 control-label no-padding-right"> Parent Table Required </label>

            <div class="col-sm-9">
            <input type="checkbox" id="parent_table" class="col-xs-10 col-sm-5" placeholder="Enter Work Activity" name="parent_table" value="<?php echo $parent_table;?>">
            </div>
          </div>
          <div class="form-group">
            <label for="industry_standarad_table" class="col-sm-3 control-label no-padding-right"> Industry Standard Table </label>

            <div class="col-sm-9">
              <input type="text" class="col-xs-10 col-sm-5" placeholder="Industry Standard Table" id="industry_standarad_table" name="industry_standarad_table" value="<?php echo $industry_standarad_table;?>">
            </div>
          </div>
          <div class="form-group">
            <label for="industry_table_required" class="col-sm-3 control-label no-padding-right"> Industry Standard Table required </label>

            <div class="col-sm-9">
              <input type="checkbox" class="col-xs-10 col-sm-5" id="industry_table_required" name="industry_table_required">
            </div>
          </div>
          <div class="form-group">
            <label for="allow_attachmwnt" class="col-sm-3 control-label no-padding-right"> Allow Attachment </label>

            <div class="col-sm-9">
              <input type="checkbox" name="allow_attachmwnt" id="allow_attachmwnt" placeholder="Allow Attachment User" class="col-xs-10 col-sm-5">
            </div>
          </div>
          <div class="form-group">
            <label for="tree_view" class="col-sm-3 control-label no-padding-right">Tree View </label>

            <div class="col-sm-9">
              <input type="checkbox" name="tree_view" id="tree_view" placeholder="Tree View" class="col-xs-10 col-sm-5">
            </div>
          </div>
           <div class="form-group">
            <label for="lineof_business" class="col-sm-3 control-label no-padding-right">Line Of Business Required</label>

            <div class="col-sm-9">
              <input type="checkbox" name="lineof_business" id="lineof_business" placeholder="Line OF Business required" class="col-xs-10 col-sm-5">
            </div>
          </div>
          
          <div class="clearfix form-actions">
            <div class="col-md-offset-3 col-md-9">
              <button type="submit" class="btn btn-info">
                <i class="ace-icon fa fa-check bigger-110"></i>
                Submit
              </button>
              &nbsp; &nbsp; &nbsp;
              <button type="reset" class="btn">
                <i class="ace-icon fa fa-undo bigger-110"></i>
                Reset
              </button>
            </div>
          </div>
        </form>
      </div><!-- /.col -->
    </div>

<script type="text/javascript">
      jQuery(function($) {
        
        $('#modal-wizard-container').ace_wizard();
        $('#modal-wizard .wizard-actions .btn[data-dismiss=modal]').removeAttr('disabled');
        $( ".datepicker" ).datepicker({
          showOtherMonths: true,
          selectOtherMonths: false,
          //isRTL:true,
      
          
          /*
          changeMonth: true,
          changeYear: true,
          
          showButtonPanel: true,
          beforeShow: function() {
            //change button colors
            var datepicker = $(this).datepicker( "widget" );
            setTimeout(function(){
              var buttons = datepicker.find('.ui-datepicker-buttonpane')
              .find('button');
              buttons.eq(0).addClass('btn btn-xs');
              buttons.eq(1).addClass('btn btn-xs btn-success');
              buttons.wrapInner('<span class="bigger-110" />');
            }, 0);
          }
      */
        });
        $('.input-mask-date').mask('99:99:99');
      });
    </script>
