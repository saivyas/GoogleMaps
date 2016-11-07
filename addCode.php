    <?php
    $id='';
    $code='';
    $desc='';
    $parent_code='';
    $industry_standard='';
    $lob='';
    $esd='';
    $eed='';
    $efor='';
    $table_id = '';
    if($action=='edit_record'){
       $id = $record[0]['id'];
    $code = $record[0]['code'];
     $desc = $record[0]['description'];
    $parent_code = $record[0]['parent_code'];
    $industry_standard = $record[0]['industry_standard'];
    $lob = $record[0]['line_of_business'];
    $esd = $record[0]['effective_startdate'];
    $eed = $record[0]['effective_enddate'];
    $efor = $record[0]['effective_for'];
    $table_id = $record[0]['table_id'];
    }

    ?>
    <div class="row">
      <div class="col-xs-12">
        <!-- PAGE CONTENT BEGINS -->
        <div class="widget-header">
          <h4 class="widget-title">
          <?php if($id==''){?>New Code
          <?php }else { ?>Update Code <?php } ?>
          <a href='javascript:void(0)' class="btn-round btn-danger pull-right" onclick="document.getElementById('new_table').innerHTML='';">
            <i class="fa fa-times"></i>
          </a>
          </h4>
        </div>
        <div class="space-4"></div>
        <form role="form" method="post" class="form-horizontal" action="<?php
         if($action=='edit_record'){
          echo base_url('main/codeUpdate/');
        }else{ 
          echo base_url('main/codeInsert');
        }?>" 
        >
          <!-- #section:elements.form -->
          <div class="form-group">
            <label for="code" class="col-sm-3 control-label no-padding-right">Code Table</label>
            <div class="col-sm-9">
            <select name='table_id' class="input-group input-group-sm col-sm-5">
              <?php
              $res = mysql_query("select system_tablename from table_maintenance");
              while ($r = mysql_fetch_array($res)) {
                ?>
                <option value="<?php print $r['system_tablename'];?>" <?php if($table_id==$r['system_tablename']){ print "selected";}?>><?php print $r['system_tablename'];?></option>
                <?php
              }
              ?>
              </select>
            </div>
          </div>
          <div class="form-group">
          <input type="hidden" name="id" value="<?php print $id;?>">
            <label for="code" class="col-sm-3 control-label no-padding-right">Code </label>

            <div class="col-sm-9">
              <input type="text" class="col-xs-10 col-sm-5" placeholder="Code" id="code" name="code" value="<?php echo $code;?>">
            </div>
          </div>
          <div class="form-group">
            <label for="desc" class="col-sm-3 control-label no-padding-right"> Description</label>

            <div class="col-sm-9">
                <div class="input-group input-group-sm col-sm-5">
                  <input type="text" class="form-control hasDatepicker" id="desc" placeholder="Description" name="desc" value="<?php echo $desc;?>">
                </div>
              </div>
          </div>
          <div class="form-group">
            <label for="parent_code" class="col-sm-3 control-label no-padding-right"> Parent Code</label>
            <div class="col-sm-9">
            <div class="input-group input-group-sm col-sm-5">
                <input type="text" class="form-control" id="parent_code" placeholder="Parent Code" name="parent_code" value="<?php echo $parent_code;?>">
            </div>
            </div>
          </div>
          <div class="form-group">
            <label for="industry_standard" class="col-sm-3 control-label no-padding-right"> Industry Statndard </label>
            <div class="col-sm-9">
            <div class="input-group input-group-sm col-sm-5">
                <input type="text" class="form-control" id="industry_standard" placeholder="Industry Standard" name="industry_standard" value="<?php echo $industry_standard;?>">
            </div>
            </div>
          </div>
          <div class="form-group">
            <label for="lob" class="col-sm-3 control-label no-padding-right"> Line Of Business </label>
            <div class="col-sm-9">
            <div class="input-group input-group-sm col-sm-5">
                <input type="text" class="form-control" id="lob" placeholder="Industry Standard" name="lob" value="<?php echo $lob;?>">
            </div>
            </div>
          </div>
          <div class="form-group">
            <label for="esd" class="col-sm-3 control-label no-padding-right"> Effective Start Date </label>
            <div class="col-sm-9">
            <div class="input-group input-group-sm col-sm-5">
                <input type="text" class="form-control datepicker" id="esd" placeholder="Effective Start Date" name="esd" value="<?php echo $esd;?>">
            </div>
            </div>
          </div>
          <div class="form-group">
            <label for="eed" class="col-sm-3 control-label no-padding-right"> Effective End Date  </label>
            <div class="col-sm-9">
            <div class="input-group input-group-sm col-sm-5">
                <input type="text" class="form-control datepicker" id="eed" placeholder="Effective End Date" name="eed" value="<?php echo $eed;?>">
            </div>
            </div>
          </div>
          <div class="form-group">
            <label for="efor" class="col-sm-3 control-label no-padding-right"> Effective For  </label>
            <div class="col-sm-9">
            <div class="input-group input-group-sm col-sm-5">
                <input type="text" class="form-control" id="efor" placeholder="Effective For" name="efor" value="<?php echo $efor;?>">
            </div>
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
              <?php
              if($id!='')
              {
                ?>
                <a href='javascript:void(0)' onclick='deleteCode(<?php print $id; ?>,this)' title='Delete Code'><i class='fa fa-trash'></i></a>
                <?php
              }
              ?>
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
        });
        $('.input-mask-date').mask('99:99:99');
      });
      function deleteCode(id,div) {
        $(div).html("<i class='fa fa-spinner fa-spin'></i>");
        var c = confirm("Are you sure to delete this code");
        if(c)
        {
        $.post("<?php echo base_url();?>main/deleteCode/"+id+"",function(data){
           alert(data);
           $(div).html("<i class='fa fa-trash'></i>");
           location.reload();
        });
      }else{
           $(div).html("<i class='fa fa-trash'></i>");
         }
    }
    </script>
