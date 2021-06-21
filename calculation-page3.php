<?php require('header.html'); ?>
<div class="container-fluid container-color">
<div style="height: 70vh;" class="row">
	<div class="col-md-2">
	</div>
	<div class="col-md-8">
		<!--div class="container"-->		
			<div class="row">
				<div class="col-md-12">
					<h3>Caltulating Ad Budget</h4>
					<div><progress style="width:100%; padding: 12px; margin: 30px 0" id="file" value="60" max="100"></progress></div>
					<a href="calculation-page2.php">
						<button class="roas-calculate-btn"><i class="fas fa-arrow-left arrow-right"></i>BACK</button>
					</a>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 text-center">
					<h3 style="margin-top: 40px;">What is the average value of an order?</h4>
					<input id="numberInput" style="margin-top: 30px;" type="number" min="1"/>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<a href="calculation-page4.php">
						<button id="btn" style="margin-top: 50px;" class="roas-calculate-btn" onclick="avgValue()">NEXT<i class="fas fa-arrow-right arrow-left"></i></button>
					</a>
				</div>					
			</div>
	</div>
</div>	
<script src="./assets/js/script.js"></script>
<script>
function avgValue(){
	var x = document.getElementById('numberInput').value;
	//console.log(sessionStorage.getItem('noOfOrders'));
	sessionStorage.setItem('avgValue',x);
}

document.getElementById('btn').addEventListener('click',avgValue);
</script>


<?php require("footer.html"); ?>			
</div>