<select class="col-xs-10 col-sm-5" data-placeholder="Select Parent For This" id="parent" name="parent">
<?php
$par = $_GET['parent'];
foreach ($rec as $ele) {
 ?>
 <option value='<?php print $ele['id']; ?>' <?php if($par==$ele['id']){print "selected";}?>><?php print $ele['element']; ?></option>
<?php
}
?>
</select>
