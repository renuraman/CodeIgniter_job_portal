<div class="container-fluid">
<div class="row">
<a href="<?php echo base_url(); ?>admin">back</a> 

<center><h3>Employers</h3></center>
<?php echo "<a href='".base_url()."employer/add/'>Add</a>"; ?>
<table class="table table-bordered table-hover table-striped table-responsive">
<thead>
<tr>
<th>empr_name</th>
<th>actions</th>
</tr>
</thead>
<tbody>
<?php foreach($employers as $emp){
echo "<tr><td>".$emp->empr_name."</td>";
echo "<td><a href='".base_url()."employer/delEmployer/$emp->empr_id'>Delete</a>  ";
echo "<a href=".base_url()."employer/edit/".$emp->empr_id.">Edit</a></td></tr>";



}?>
</tbody>
</table>


</div>



</div>


<?php





?>