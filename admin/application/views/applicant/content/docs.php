<?php

	$connect = mysqli_connect("localhost","root","","filebase");
    if (mysqli_connect_errno())
	{
  		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
	
    $result_ = mysqli_query($connect,"select * from product order by id desc");
	
	//echo $_SERVER['DOCUMENT_ROOT'];
?>


    <table class="table table-striped">
		<tr>
			<th>S/N</th>
			<th>Document Name</th>
			<th>File Name</th>
			<th></th>
			<th></th>
		</tr>
		<?php $i = 1 ; ?>
		<?php  $i = 1; while($row=mysqli_fetch_array($result_)){ ?>
		<tr>
			<td><?php  echo $i ; ?></td>
			<td><?php echo $value->doc_name ; ?></td>
			<td><?php echo $value->path ; ?></td>
			
			
			<td><a href="#" id="aaa<?php echo $value->id ?>"><span  class="fa fa-trash-o"></span></a></td>
			<td><a href="<?php echo site_url('Customer/download_documents/'.encrypt_url($value->id));  ?>"><span class="fa fa-download"></span></a></td>
		</tr>
		<?php $i++; } ?>
	</table>




