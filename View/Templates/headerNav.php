<header>
	<canvas id="headerCanvas" width="1090" height="140">
		Your browser does not support the canvas element.
	</canvas>
	<canvas id="timeCanvas" width="100"	height="100" >
		Your browser does not support the canvas element.
	</canvas>
</header>
<nav>
	<ul >
		<li class="hvr-shutter-out-vertical"><a href="#">Main</a></li>
		<li class="hvr-shutter-out-vertical"><a href="#">News</a></li>
		<li class="hvr-shutter-out-vertical"><a href="#">Games</a></li>
		<li class="hvr-shutter-out-vertical"><a href="#">Contact</a></li>
		<li class="hvr-shutter-out-vertical"><a href="#">About</a></li>
	</ul>
</nav>




<script> //headerCanvas
	var canvas = document.getElementById("headerCanvas");
	var ctx=canvas.getContext("2d");

	var img=new Image();
	img.src= "Image/WarZiko.png"

	ctx.font="60px Comic Sans MS";
	ctx.fillStyle = "#00adb5";
	ctx.textAlign = "left";
	ctx.textAlign = "center";
	ctx.fillText("<?php echo $header; ?>", canvas.width/2, (canvas.height/2)+30);
	ctx.drawImage(img,canvas.width/2+130,40);
</script>

<script>//timeCanvas
	var canvas = document.getElementById("timeCanvas");
	var ctx = canvas.getContext("2d");
	var radius = canvas.height / 2;
	ctx.textAlign = "center";
	ctx.translate(radius, radius);
	radius = radius * 0.90
	setInterval(drawClock, 1000);

	function drawClock() {
	  drawFace(ctx, radius);
	  drawNumbers(ctx, radius);
	  drawTime(ctx, radius);
	}

	function drawFace(ctx, radius) {
	  var grad;
	  ctx.beginPath();
	  ctx.arc(0, 0, radius, 0, 2*Math.PI);
	  ctx.fillStyle = '#eee';
	  ctx.fill();
	  grad = ctx.createRadialGradient(0,0,radius*0.95, 0,0,radius*1.05);
	  grad.addColorStop(0, '#333');
	  grad.addColorStop(0.5, '#00adb5');
	  grad.addColorStop(1, '#333');
	  ctx.strokeStyle = grad;
	  ctx.lineWidth = radius*0.1;
	  ctx.stroke();
	  ctx.beginPath();
	  ctx.arc(0, 0, radius*0.1, 0, 2*Math.PI);
	  ctx.fillStyle = '#333';
	  ctx.fill();
	}

	function drawNumbers(ctx, radius) {
	  var ang;
	  var num;
	  ctx.font = radius*0.15 + "px arial";
	  ctx.textBaseline="middle";
	  ctx.textAlign="center";
	  ctx.fillStyle='#00adb5';
	  for(num = 1; num < 13; num++){
	    ang = num * Math.PI / 6;
	    ctx.rotate(ang);
	    ctx.translate(0, -radius*0.85);
	    ctx.rotate(-ang);
	    ctx.fillText(num.toString(), 0, 0);
	    ctx.rotate(ang);
	    ctx.translate(0, radius*0.85);
	    ctx.rotate(-ang);
	  }
	}

	function drawTime(ctx, radius){
	    var now = new Date();
	    var hour = now.getHours();
	    var minute = now.getMinutes();
	    var second = now.getSeconds();
	    //hour
	    hour=hour%12;
	    hour=(hour*Math.PI/6)+
	    (minute*Math.PI/(6*60))+
	    (second*Math.PI/(360*60));

	    drawHand(ctx, hour, radius*0.5, radius*0.07);
	    //minute
	    minute=(minute*Math.PI/30)+(second*Math.PI/(30*60));
	    drawHand(ctx, minute, radius*0.8, radius*0.07);
	    // second
	    second=(second*Math.PI/30);
	    drawHand(ctx, second, radius*0.9, radius*0.02);
	}

	function drawHand(ctx, pos, length, width, color) {
	    ctx.beginPath();
	    ctx.lineWidth = width;
	    ctx.lineCap = "round";
	    ctx.moveTo(0,0);
	    ctx.rotate(pos);
	    ctx.lineTo(0, -length);
	    ctx.stroke();
	    ctx.rotate(-pos);
	}
</script>


