<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Robot controller</title>
	<link rel="stylesheet" type="text/css" href="main.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i,600,600i">
	<link rel="stylesheet" href="assets/fonts/simple-line-icons.min.css">
</head>

<body>
    <div class="navbar">
		<ul><a id="home" href="#">Robot controller</a></ul>
    </div>
    <main class="body">
        <section id="maain">
            <div class="text";>
				<div class="roww">
					<h2 class="coll";>Motor 1</h2>
					<input id="slider1" class="sliders" max="180" name="m1" type="range" style="opacity: 1;font-size: 17px;width: 296px;border-style: none;">
					<input id="box1" min="0" max="180" value="90" type="number"</input>
				</div>
				<div class="roww">
					<h2 class="coll";>Motor 2</h2>
					<input id="slider2" class="sliders" max="180" name="m2" type="range" style="opacity: 1;font-size: 17px;width: 296px;border-style: none;">
					<input id="box2" min="0" max="180" value="90" type="number"</input>
				</div>
				<div class="roww">
					<h2 class="coll";>Motor 3</h2>
					<input id="slider3" class="sliders" max="180" name="m3" type="range" style="opacity: 1;font-size: 17px;width: 296px;border-style: none;">
					<input id="box3" min="0" max="180" value="90" type="number"</input>
				</div>
				<div class="roww">
					<h2 class="coll";>Motor 4</h2>
					<input id="slider4" class="sliders" max="180" name="m4" type="range" style="opacity: 1;font-size: 17px;width: 296px;border-style: none;">
					<input id="box4" min="0" max="180" value="90" type="number"</input>
				</div>
				<div class="roww">
					<h2 class="coll";>Motor 5</h2>
					<input id="slider5" class="sliders" max="180" name="m5" type="range" style="opacity: 1;font-size: 17px;width: 296px;border-style: none;">
					<input id="box5" min="0" max="180" value="90" type="number"</input>
				</div>
				<div class="roww">
					<h2 class="coll";>Motor 6</h2>
					<input id="slider6" class="sliders" max="180" name="m6" type="range" style="opacity: 1;font-size: 17px;width: 296px;border-style: none;">
					<input id="box6" min="0" max="180" value="90" type="number"</input>
				</div>
			
			
            
			
				<div class="roww">
					
					<form method="post" >
						<button id="submit" type="submit" onclick="return sendDataOn()" name=insert  class="btn btn-outline-light btn-lg" type="button" style="padding: 6px 16px;margin: 33px;" >Sumbit</button>
						<button id="stop" class="btn btn-outline-light btn-lg" onclick="return sendDataOff()" type="submit" onclick="offdata()" type="button" style="padding: 6px 16px;margin: 33px;">Stop</button>
						
					</form>
					
				</div>
				

            </div>

        </section>
    </main>
	<script type="text/javascript" src="js/jquery.js"> </script>
	<script type="text/javascript" src="js/jquery-ui.js"> </script>
	<script type="text/javascript" src="js/main.js"> </script>
</body>

</html>