<html lang="en">

<head>
    <meta charset="utf-8">
    <title>
        Web Paint!
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<input id="hex" placeholder="enter hex color"></input>
<canvas id="draw"></canvas>


<script>
var canvas = document.getElementById("draw");

var ctx = canvas.getContext("2d");
resize();

function resize() {
  ctx.canvas.width = window.innerWidth;
  ctx.canvas.height = window.innerHeight;
}

window.addEventListener("resize", resize);
document.addEventListener("mousemove", draw);
document.addEventListener("mousedown", setPosition);
document.addEventListener("mouseenter", setPosition);

var pos = { x: 0, y: 0 };

function setPosition(e) {
  pos.x = e.clientX;
  pos.y = e.clientY;
}

function draw(e) {
  if (e.buttons !== 1) return; 

  var color = document.getElementById("hex").value;

  ctx.beginPath(); 

  ctx.lineWidth = 20; 
  ctx.lineCap = "round"; 
  ctx.strokeStyle = color; 

  ctx.moveTo(pos.x, pos.y); 
  setPosition(e);
  ctx.lineTo(pos.x, pos.y); 

  ctx.stroke(); 
}
</script>
</html>