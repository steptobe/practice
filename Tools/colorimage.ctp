<div id="colorcodes">
	<div id="main">
		<h1>Get Colors from Image (BETA)</h1>
		<p>With the magic of HTML5 you can get colors from any image with this simple online tool. To use this new color tool it's recomended that you upgrade your web browser to the latest version.<br />(For the full HTML5 support).</p>
		<p><b>Step 1:</b> Select image from your computer and click "Show image" button. Scaled version of the image will show up.</p>
		<p><b>Step 2:</b> Click anywhere on the image to choose an area. 9x9 pixels will be magnified in a small box.</p>
		<p><b>Step 3:</b> Click anywhere in the small box to select desired color.</p>
		<p><b>Step 4:</b> Click again on the image to choose another 9x9 pixels area.</p>
<br />	
<div id="insertcolor" style="width:612px;">
  <input style="float:left;" id="uploadImage" type="file" name="myPhoto" onchange="loadImageFile();" /><button onclick="myFunction()"> Show image </button>
</div>
<div style="width:622px;height:302px;position: relative;background-color: #EEE;">
   <canvas id="myCanvas" width="470" height="300" style="border:1px solid #d3d3d3;position: absolute; left: 0; top: 0; z-index: 0;">Your browser does not support the HTML5 canvas tag.</canvas>
   <canvas id="pixCanvas" width="150" height="150" style="border:1px solid #d3d3d3;position: absolute; left: 470px; top: 0; z-index: 0;">Your browser does not support the HTML5 canvas tag.</canvas>
   <div id="barvadiv" style="border:25px solid #d3d3d3;height:100px;width:102px;background-color:#d3d3d3;position: absolute; left: 470px; top: 152px; z-index: 0;"></div>
</div>
<div id="insertcolor" style="width:612px;font-size:14px;">
	Color Code: <input type="text" maxlength="7" id="pixcolor" name="pixcolor" style="font-size:20px;width:100px;">
</div>

<br /><br />	
<h3>Interesting fact :)</h3>
<p>
This is probably the only tool of this kind that doesn't upload your images on the webserver to do the magic.
Because of the goodies in the HTML5 standard it's now possible to do all the image processing inside the web browser without uploading image.
<br />(This is great for security reasons.)</p>
<br />	
</div>

<img id="slika" src="data:image/svg+xml,%3C%3Fxml%20version%3D%221.0%22%3F%3E%0A%3Csvg%20width%3D%22153%22%20height%3D%22153%22%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%3E%0A%20%3Cg%3E%0A%20%20%3Ctitle%3ENo%20image%3C/title%3E%0A%20%20%3Crect%20id%3D%22externRect%22%20height%3D%22150%22%20width%3D%22150%22%20y%3D%221.5%22%20x%3D%221.500024%22%20stroke-width%3D%223%22%20stroke%3D%22%23666666%22%20fill%3D%22%23e1e1e1%22/%3E%0A%20%20%3Ctext%20transform%3D%22matrix%286.66667%2C%200%2C%200%2C%206.66667%2C%20-960.5%2C%20-1099.33%29%22%20xml%3Aspace%3D%22preserve%22%20text-anchor%3D%22middle%22%20font-family%3D%22Fantasy%22%20font-size%3D%2214%22%20id%3D%22questionMark%22%20y%3D%22181.249569%22%20x%3D%22155.549819%22%20stroke-width%3D%220%22%20stroke%3D%22%23666666%22%20fill%3D%22%23000000%22%3E%3F%3C/text%3E%0A%20%3C/g%3E%0A%3C/svg%3E" alt="Image preview" style="display:none" />
		

	</div>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
<script type="text/javascript">
var ev=0;
var cnvHeight;
var cnvWidth;
var mousePos;
var c;
var ctx;
var cPix;
var ctxPix;
var img;
var imgHeight;
var imgWidth;

oFReader = new FileReader(), rFilter = /^(?:image\/bmp|image\/cis\-cod|image\/gif|image\/ief|image\/jpeg|image\/jpeg|image\/jpeg|image\/pipeg|image\/png|image\/svg\+xml|image\/tiff|image\/x\-cmu\-raster|image\/x\-cmx|image\/x\-icon|image\/x\-portable\-anymap|image\/x\-portable\-bitmap|image\/x\-portable\-graymap|image\/x\-portable\-pixmap|image\/x\-rgb|image\/x\-xbitmap|image\/x\-xpixmap|image\/x\-xwindowdump)$/i;

oFReader.onload = function (oFREvent) {
  document.getElementById("slika").src = oFREvent.target.result;
};

function loadImageFile() {
  if (document.getElementById("uploadImage").files.length === 0) { return; }
  var oFile = document.getElementById("uploadImage").files[0];
  if (!rFilter.test(oFile.type)) { alert("You must select a valid image file!"); return; }
  oFReader.readAsDataURL(oFile);

}

var onclickListener = function(evt) {
	imageData = ctxPix.getImageData(0,0,150,150);
	var barva='#'+d2h(imageData.data[45300+0])+d2h(imageData.data[45300+1])+d2h(imageData.data[45300+2]);
	document.getElementById("pixcolor").value = barva;
	document.getElementById("pixcolor").select();
	document.getElementById("barvadiv").style.backgroundColor=barva;
	istat=!istat;
};

function myFunction()
{
	istat=true;
	cnvWidth=470;
	cnvHeight=300;

	c=document.getElementById("myCanvas");
	ctx=c.getContext("2d");

	cPix=document.getElementById("pixCanvas");
	ctxPix=cPix.getContext("2d");

	ctxPix.mozImageSmoothingEnabled = false;
	ctxPix.webkitImageSmoothingEnabled = false;

	img=document.getElementById("slika");
	imgHeight = img.height;
	imgWidth = img.width;
	
	if (imgHeight<cnvHeight && imgWidth<cnvWidth){
		ctx.mozImageSmoothingEnabled = false;
		ctx.webkitImageSmoothingEnabled = false;
	}

	if ((imgWidth/imgHeight)<1.56667){
		cnvWidth=imgWidth/imgHeight*cnvHeight;
	}else{
		cnvHeight=cnvWidth/(imgWidth/imgHeight);
	}
	ctx.clearRect(0, 0, c.width, c.height);
	ctx.drawImage(img,0,0,cnvWidth,cnvHeight);
	
	var onmoveListener = function(evt) {
		ev=1;
		if (istat){
			mousePos = getMousePos(c, evt);
			drawPix(cPix, ctxPix, img, Math.round(mousePos.x*(imgWidth/cnvWidth)), Math.round(mousePos.y*(imgHeight/cnvHeight)));
		}
	};
	c.addEventListener('mousemove', onmoveListener, false);
	c.addEventListener('mousedown', onclickListener, false);
	
	var onMiniclickListener = function(evt) {
		mousePos = getMousePos(cPix, evt);
		imageData = ctxPix.getImageData(0,0,150,150);
		var loc= Math.round(mousePos.y)*600+Math.round(mousePos.x)*4;
		var barva='#'+d2h(imageData.data[loc+0])+d2h(imageData.data[loc+1])+d2h(imageData.data[loc+2]);
		document.getElementById("pixcolor").value = barva;
		document.getElementById("pixcolor").select();
		document.getElementById("barvadiv").style.backgroundColor=barva;
	};
	cPix.addEventListener('mousedown', onMiniclickListener, false);
	  
}
function drawPix(cPix, ctxPix, img, x, y) {
	ctxPix.clearRect(0, 0, cPix.width, cPix.height);
	if (x<5) x=5;
	if (y<5) y=5;
	if (x>imgWidth-4) x=imgWidth-4;
	if (y>imgHeight-4) y=imgHeight-4;
	ctxPix.drawImage(img,x-5,y-5,9,9,0,0,cPix.width,cPix.height);
}
function getMousePos(canvas, evt) {
	var rect = canvas.getBoundingClientRect();
	return { x: evt.clientX - rect.left, y: evt.clientY - rect.top	};
}
function d2h(d){
	return ("0"+d.toString(16)).slice(-2).toUpperCase();
}
function greenbox(c, x, y){
	c.beginPath();
    c.rect(x-5, y-5, 9, 9);
    c.lineWidth = 1;
    c.strokeStyle = '#00FF00';
    c.stroke();
}

</script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-814714-1', 'auto');
  ga('require', 'displayfeatures');
  ga('send', 'pageview');

</script>

</div>
