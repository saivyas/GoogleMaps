<?php
  //add and edit diary list
  if($action=='add_record' || $action=='edit_record'){
    $id='';
    $name='';
    $url='';
    $status='';
    $position='';
    $parent = 0;
    if($action=='edit_record'){
      $id = $record[0]['id'];
      $name = $record[0]['name'];
      $url = $record[0]['url'];
      $status = $record[0]['status'];
      $position = $record[0]['position'];
      $parent = $record[0]['parent'];
    }
    ?>
    <div class="row">
      <div class="col-xs-12">
        <!-- PAGE CONTENT BEGINS -->
        <div class="widget-header">
          <h4 class="center"><?php if($action=='edit_record'){echo "Edit Module";}else{echo "Add Module";}?>
          <a href='javascript:void(0)' class='pull-right' onclick='document.getElementById("module_div").innerHTML="";' title='Close Div'><i class='fa fa-times'></i></a></h4>
        </div>
        <div class="space-4"></div>
        <form role="form" method="post" class="form-horizontal" action="<?php
         if($action=='edit_record'){
          echo base_url('modules/moduleUpdate/'.$id.'');
        }else{ 
          echo base_url('modules/moduleInsert');
        }?>" 
        >
        <input type="hidden" name="id" value="<?php echo $id;?>">
          <!-- #section:elements.form -->
          <div class="form-group">
            <label for="state_abbrevation" class="col-sm-3 control-label no-padding-right"> Name  </label>
            <div class="col-sm-9">
              <input type="text" class="col-xs-10 col-sm-5" placeholder="Enter module name." id="name" name="name" required value="<?php echo $name;?>" >
            </div>
          </div>
          <div class="form-group">
            <label for='state_description' class="col-sm-3 control-label no-padding-right"> URL  </label>
            <div class="col-sm-9">
                <div class="input-group input-group-sm col-sm-5">
                <input type="text" class="form-control" id="url" placeholder="Enter URL" name="url" required value="<?php echo $url;?>" />
                </div>
              </div>
          </div>
          <div class="form-group">
            <label for='state_description' class="col-sm-3 control-label no-padding-right"> Status  </label>
            <div class="col-sm-9">
                <div class="input-group input-group-sm col-sm-5">
               <label><input type='radio' name='status' value='1' <?php if($tatus==1){print "checked";};?>/>Active</label>
               <label><input type='radio' name='status' value='0' <?php if($tatus==0){print "checked";};?>/>InActive</label>
                </div>
              </div>
          </div>
          <div class="form-group">
            <label for='state_description' class="col-sm-3 control-label no-padding-right"> Parent  </label>
            <div class="col-sm-9">
                <div class="input-group input-group-sm col-sm-5 getlist">
                <select class="col-xs-10 col-sm-5" data-placeholder="Select Parent For This" id="parent" name="parent">
                <option value="">Select Parent</option>

                </select>
                </div>
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
    </div>
        <script type="text/javascript">
      jQuery(function($) {
        $.get("<?php echo base_url();?>modules/getModules/<?php print $parent;?>",{"list":'list',"parent":'<?php print $parent;?>'},function(data){
          $('.getlist').html(data);
        });

       });
</script>

    <?php
  }
  ?>
