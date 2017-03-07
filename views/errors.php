<div id="errors">
	The following error(s) happened:
	<ul>
		<?php foreach ($data['errors'] as $error){ ?>
			<li><?php echo $error; ?></li>
		<?php } ?>
	</ul>
</div>

<style>
#errors{
	border: solid 1px red;
	background-color: yellow;
	font-size: 15px;
	color: red;
	margin: 10px;
}</style>