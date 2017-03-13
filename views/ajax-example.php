<html>
	<body>
		<div class="share">
			<div class="symbol">ABCD</div>
			<div id="ABCD" class="price"></div>
		</div>
		<div class="share">
			<div class="symbol">GHIJ</div>
			<div id="GHIJ" class="price"></div>
		</div>
		<div class="share">
			<div class="symbol">WXYZ</div>
			<div id="WXYZ" class="price"></div>
		</div>
		
		<script src="js/jquery.min.js"></script>
		
		<script>
			$(function(){
				var symbols; // comma-separated symbols string

				var populate_symbols = function(){
					symbols = '';
					$('div.price').each(function(){
						var id = $(this).attr('id');
						symbols += id + ',';
					});
				};

				var populate_prices = function(resp){
					//var jresp = JSON.parse(resp);
					//console.log(jresp);
					for(var s in resp){
						//console.log(s);
						var price = parseFloat(resp[s]);
						var old_price = parseFloat($('#' + s).text());
						$('#' + s).html(price);

						if(old_price > price){
							$('#' + s).removeClass('up');
							$('#' + s).addClass('down');
						}else{
							$('#' + s).addClass('up');
							$('#' + s).removeClass('down');
						}
					}
				};
				
				var update = function(){
					$.ajax({
						url: 'ticker.php',
						data: {'symbols': symbols},
						success: populate_prices,
						error: function(){
						}
					});
				};

				populate_symbols();
				setInterval(update, 2000);
			});
		</script>
		
		<style>
			.share{
				border: solid 1px black;
				padding: 10px;
				width: 25%;
				float: left;
			}
			.symbol{ font-weight: bold; }
			.price.down{ color: red; }
			.price.up{ color: green; }
		</style>
	</body>
</html>