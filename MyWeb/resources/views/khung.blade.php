<!DOCTYPE html>
<html>
<head>
	<title> March 21st </title>
	
	<style type="text/css">
		*{
			padding:0;
			margin: 0;
		}
		button{
			display: inline-block;
		}
	</style>
</head>
<body>
	<script src="{{ asset('js/p5/p5.min.js') }}" type="text/javascript" charset="utf-8"></script>
	<script type="text/javascript" charset="utf-8">
			
		
function setup() {
  createCanvas(1300, 700, WEBGL);
}

function draw() {
  background(255,255,255);

  let locX = mouseX - height / 2;
  let locY = mouseY - width / 2;

  ambientLight(60, 60, 60);
  pointLight(255, 255, 255, locX, locY, 100);

  orbitControl();

  translate(-240, -100, 0);
  push();
  rotateZ(QUARTER_PI);
  normalMaterial();
  cone(50, 100, 64, 64);
  pop();

  translate(240, 0, 0 );
  push();
  rotateZ(QUARTER_PI);
  normalMaterial();
  cone(50, 100, 64, 64);
  pop();
  
	translate( 240, 0, 0);
	push();
  rotateZ(QUARTER_PI);
  normalMaterial();
  cone(50, 100, 64, 64);
  pop();

  translate(-240, 200, 0);
  push();
  rotateZ(QUARTER_PI);
  normalMaterial();
  cone(50, 100, 64, 64);
  pop();
}
function mouseWheel(event) {
  //println(event.delta);
  pos += event.delta;
  posRev = height - 10 - pos;
}


	</script>
</body>
</html>