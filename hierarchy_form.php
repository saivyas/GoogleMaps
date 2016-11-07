<?php
  //add and edit diary list
  if($action=='add_record' || $action=='edit_record'){
    $id='';
    $element='';
    $parent='';
    $type='';
    if($action=='edit_record'){
      $id = $record[0]['id'];
      $element = $record[0]['element'];
      $parent = $record[0]['parent'];
      $type = $record[0]['type'];
    }
    ?>
      <div class="col-xs-12">
        <!-- PAGE CONTENT BEGINS -->
        <div class="widget-header">
          <h4 class="widget-title"><?php if($action=='edit_record'){echo "Edit Element";}else{echo "Add Element";}?><a href='javascript:void(0)' class='pull-right' onclick='document.getElementById("hierarchy_div").innerHTML="";'><i class='fa fa-times'></i></a></h4>
        </div>
        <div class="space-4"></div>
        <form role="form" method="post" class="form-horizontal" action="<?php
         if($action=='edit_record'){
          echo base_url('main/orgUpdate/'.$diary_id.'');
        }else{ 
          echo base_url('main/orgInsert');
        }?>" 
        >
        <input type="hidden" name="id" value="<?php echo $id;?>">
          <!-- #section:elements.form -->
          <div class="form-group">
            <label for="task_name" class="col-sm-3 control-label no-padding-right"> Element </label>

            <div class="col-sm-9">
              <input type="text" class="col-xs-10 col-sm-5" placeholder="Enter Org. Element" id="element" name="element" value="<?php echo $element;?>" required>
            </div>
          </div>
          <div class="form-group">
            <label for="parent" class="col-sm-3 control-label no-padding-right"> Parent</label>

            <div class="col-sm-9 getlist">
              <select class="col-xs-10 col-sm-5" data-placeholder="Select Parent For This" id="parent" name="parent">
                <option value="">Select Parent For This</option>
              </select>
             
            </div>
          </div>
          <div class="form-group">
            <label for="type" class="col-sm-3 control-label no-padding-right">Type</label>

            <div class="col-sm-9">
              <input type="text" name="type" id="type" placeholder="Enter type" class="col-xs-10 col-sm-5" value="<?php echo $type;?>">
            </div>
          </div>
          
          
          <div class="clearfix form-actions">
            <div class="col-md-offset-3 col-md-9">
            <?php if($action=='edit_record'){
                ?>
                <button type="submit" class="btn btn-info">
                  <i class="ace-icon fa fa-check bigger-110"></i>
                  Update
                </button>
                <?php
              }else{
              ?>
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
              }
              ?>
            </div>
          </div>
        </form>
      </div><!-- /.col -->

    <?php
  }
  ?>
<script type="text/javascript">
      jQuery(function($) {
        
        $.get("<?php echo base_url();?>main/getHierarchy/1",{"list":'list',"parent":'<?php print $parent;?>'},function(data){
          $('.getlist').html(data);
        });

       });
</script>
