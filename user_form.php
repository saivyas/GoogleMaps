<script type="text/javascript" src="<?php print base_url(); ?>assets/js/jquery.ntm.js"></script>

<link rel="stylesheet" href="<?php print base_url(); ?>assets/css/theme.css" />
<style>
li[class*="item-"] {
    border-color: #fff !important;
}
#tree-menu ul{
    margin: 0px !important;
    padding: 0;
}
#tree-menu li{
    margin: 0px 0px 0px 10px !important;
    padding: 0;
}
</style>
<?php

$data = Array
        (
            'id' => '',
            'name' => '',
            'email' => '',
            'access' => '',
            'mobile' => '',
            'password' => '',
            'access_functions' => ''
          
        );

if($records!=''){
  $data = Array
        (
            'id' => $records[0]['id'],
            'name' => $records[0]['name'],
            'email' => $records[0]['email'],
            'access' => $records[0]['access'],
            'mobile' => $records[0]['mobile'],
            'password' => $records[0]['password'],
            'access_functions' => $records[0]['access_functions']
        );
}
?>
              <div class="col-xs-12">
                <!-- PAGE CONTENT BEGINS -->
                <div class="widget-header">
                  <h4 class="widget-title">

<?php
if($records!=''){
print "Update User";
}else
{
print "Add User";
}
?>
                  <a href='javascript:void(0)' class="pull-right" onclick='document.getElementById("claim_body").style.display="none";'> <i class="fa fa-times"></i></a>
                  </h4>
                </div>
                <div class="space-4"></div>
                <form role="form" class="form-horizontal" <?php
            if($records!=''){
              ?>
              action="<?php echo base_url()?>users/userUpdate"<?php
            }else{ ?>
              action="<?php echo base_url('users/userInsert');?>"
              <?php
            }?>  method="post">
            <input type="hidden" value='<?php echo $records[0]['id'];?>' name='id'> 
                  <!-- #section:elements.form -->
                  <div class="form-group">
                    <label for="name" class="col-sm-3 control-label no-padding-right">  Name </label>

                    <div class="col-sm-9">
                      <input type="text" class="col-xs-10 col-sm-5" placeholder="" id="name" name="name" value="<?php echo $data['name'];?>" >
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="role" class="col-sm-3 control-label no-padding-right"> Role </label>

                    <div class="col-sm-9">
                       <select name="role" id="role" class="col-xs-10 col-sm-5" >
                          <option <?php if($records[0]['role']=='Admin'){ echo "selected";}?> value="Admin">Admin</option>
                          <option <?php if($records[0]['role']=='User'){ echo "selected";}?> value="User">User</option>
                        </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="email" class="col-sm-3 control-label no-padding-right">  Email </label>

                    <div class="col-sm-9">
                      <input type="text" class="col-xs-10 col-sm-5" placeholder="" id="email" name="email" value="<?php echo $data['email'];?>" >
                    </div>
                  </div>
                  <div class="form-group" style="display:none;">
                    <label for="password" class="col-sm-3 control-label no-padding-right"> Password </label>

                    <div class="col-sm-9">
                      <input type="text" class="col-xs-10 col-sm-5" placeholder="" id="password" name="password" value="<?php echo $data['password'];?>" >
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="mobile" class="col-sm-3 control-label no-padding-right"> Mobile </label>

                    <div class="col-sm-9">
                      <input type="text" class="col-xs-10 col-sm-5" placeholder="" id="mobile" name="mobile" value="<?php echo $data['mobile'];?>" >
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="access" class="col-sm-3 control-label no-padding-right"> Access Functions </label>
                    <div class="col-sm-6">
                        <label><input type="checkbox" name="alls" id="select_all"> All Functions</label>
                        <div class="checkfunctions">
                            <?php
                            $sql = mysql_query("select * from access_functions");
                            if(mysql_num_rows($sql)>0)
                            {
                                while ($row = mysql_fetch_array($sql)) {
                                    if(in_array($row['id'], explode(",",$data['access_functions']))){
                                     $Cvar = "checked='checked'";
                                    }else{
                                        $Cvar = "";
                                    }
                                   ?>
                                   <label><input type="checkbox" class="ck" name="" value='<?php print $row['id'];?>' class="checkall" <?php print $Cvar;?>> 
                                   <?php print $row['module'];?>
                                   </label>&nbsp; 
                                   <?php
                                }
                            }
                            ?>
                        </div>
                         <input type="hidden" id="access_functions" name="access_functions" value="<?php echo $data['access_functions'];?>">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="access" class="col-sm-3 control-label no-padding-right"> Access </label>

                    <div class="col-sm-9">


                      <div class="tree-menu tree_main col-sm-5" id="tree-menu">
                      <?php 
                      print $tree;
                      ?>
                      </div>

                     
                    </div>
                    <input type="hidden" id="access" name="access" value="<?php echo $data['access'];?>">
                  </div>
                  
                  <div class="form-group col-sm-6">
                <?php
                if($data['id']!='')
                {
                ?>
                  <input type='submit' class="btn btn-info pull-right" value="Update" />
                <?php
                }else
                {
                ?>
                  <input type='submit' class="btn btn-primary pull-right" value="Submit" />
                <?php
                }
                ?>
                  </div>

                </form>
              </div><!-- /.col -->
            </div>
 <script type="text/javascript">
  $(".chckbox input[type='checkbox']").change(function () {
              var moduels=[];
        $(this).parent('a').siblings('ul')
            .find("input[type='checkbox']")
            .prop('checked', this.checked);
               $('#tree-menu input[type=checkbox]:checked').each(function(){
                  moduels.push($(this).val());
               });
           $("#access").val(moduels);
    });

    $(document).ready(function() {
        $('.tree_main').ntm();
    });
    $("#select_all").change(function(){  //"select all" change 
        var access_fun=[];
    var status = this.checked; // "select all" checked status
    $('.ck').each(function(){ //iterate all listed checkbox items
        this.checked = status; //change ".checkbox" checked status
    });
    $('.checkfunctions input[type=checkbox]:checked').each(function(){
                  access_fun.push($(this).val());
               });
        $("#access_functions").val(access_fun);
});

//uncheck "select all", if one of the listed checkbox item is unchecked
$('.ck').change(function(){ //".checkbox" change
var access_fun=[]; 
    if(this.checked == false){ //if this item is unchecked
        $("#select_all")[0].checked = false; 
        //change "select all" checked status to false
    }
     $('.checkfunctions input[type=checkbox]:checked').each(function(){
                  access_fun.push($(this).val());
               });
        $("#access_functions").val(access_fun);
});
</script>           
<script src="<?php echo base_url();?>assets/js/fuelux/fuelux.tree.js"></script>
  <script src="<?php echo base_url();?>assets/js/ace/elements.treeview.js"></script>

