<form>
	<input type="text" name="email_search">
	<input type="submit" value="Find by email">
</form>

<table>
	<thead>
		<tr>
			<th>#</th>
			<th>Name</th>
			<th>Email</th>
			<th>DOB</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach($data['students'] as $i => $student){?>
			<tr>
				<td><?php echo $student['id']; ?></td>
				<td><?php echo $student['first_name'] . ' ' . $student['last_name']; ?></td>
				<td><?php echo $student['email']; ?></td>
				<td><?php echo $student['dob']; ?></td>
			</tr>
		<?php } ?>
	</tbody>
</table>

<style>
	th { border-bottom: solid 2px navy; }
	td { 
		border-bottom: dotted 1px silver; 
		border-right: dotted 1px silver; 
		padding: 5px;
	}
</style>