<select class="col-xs-10 col-sm-5" data-placeholder="Select Parent For This" id="parent" name="parent">
<option value="0">Select Parent</option>
<?php
$par = $_GET['parent'];
if($mid!='')
{
$par = $mid;
}
foreach ($rec as $ele) {
 ?>
 <option value='<?php print $ele['id']; ?>' <?php if($par==$ele['id']){print "selected";}?>><?php print $ele['name']; ?></option>
<?php
}
?>
</select>
