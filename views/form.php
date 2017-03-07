<form method="post" action="handle-form.php">
	Name
	<input type="text" name="name">
	<br>
	<input type="checkbox" name="agree" value="1"> I agree!
	<br>
	<select name="hobbies[]" multiple size="4">
		<?php foreach($data['hobbies'] as $id => $hobby){ ?>
			<option value="<?php echo $id; ?>">
				<?php echo $hobby; ?>
			</option>
		<?php } ?>
	</select>
	
	<input type="submit" value="Send" name="submit">
</form>