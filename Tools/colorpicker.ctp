<div id="main">
<a name="HTML_Color_Picker"></a>
<h2>HTML Color Picker</h2>

<p>Move the vertical slider to chose color and then click into color square on the left to get 
<b>HTML color code</b> for desired color cast.</p>
<p>You can start with your own color by writing its color code in upper input field.</p>

<div id="insertcolor">
	<button onclick="CPklik()" style="float:left">Save color</button>
Insert your color code:
	<input type="text" maxlength="7" value="FFFFFF" id="startcolor" name="startcolor">
	<button id="newcolor">GO</button>
</div>
<div id="CP" class="wrapper">
</div>
<div id="container">
	<div id="yui-picker-bg" class="yui-picker-bg" tabindex="-1" style="background-color:rgb(255,0,0); ">
		<div id="yui-picker-thumb" class="yui-picker-thumb" style="left:-4px; top:-4px; ">
			<img src="http://c632769.r69.cf2.rackcdn.com/picker_thumb.png">
		</div>
	</div>
	<div id="yui-picker-hue-bg" class="yui-picker-hue-bg" tabindex="-1">
		<div id="yui-picker-hue-thumb" class="yui-picker-hue-thumb" style="left:-2px; top:-8px; ">
			<img src="http://c632769.r69.cf2.rackcdn.com/hue_thumb.png">
		</div>
	</div>
	<div id="yui-picker-controls" class="yui-picker-controls">
		<div class="hd">
			<a id="yui-picker-controls-label" href="#"></a>
		</div>
		<div class="bd">
			<ul id="yui-picker-rgb-controls" class="yui-picker-rgb-controls">
				<li>R <input autocomplete="off" size="3" id="yui-picker-r" class="yui-picker-r" name="yui-picker-r"></li>
				<li>G <input autocomplete="off" size="3" id="yui-picker-g" class="yui-picker-g" name="yui-picker-g"></li>
				<li>B <input autocomplete="off" size="3" id="yui-picker-b" class="yui-picker-b" name="yui-picker-b"></li>
			</ul>
			<ul id="yui-picker-hsv-controls" class="yui-picker-hsv-controls">
				<li>H <input autocomplete="off" size="3" id="yui-picker-h" class="yui-picker-h" name="yui-picker-h"> °</li>
				<li>S <input autocomplete="off" size="3" id="yui-picker-s" class="yui-picker-s" name="yui-picker-s"> %</li>
				<li>V <input autocomplete="off" size="3" id="yui-picker-v" class="yui-picker-v" name="yui-picker-v"> %</li>
			</ul>
			<ul id="yui-picker-hex-summary" class="yui-picker-hex_summary" style="display:none; ">
				<li id="yui-picker-rhex">FF</li>
				<li id="yui-picker-ghex">FF</li>
				<li id="yui-picker-bhex">FF</li>
			</ul>
			<div id="yui-picker-hex-controls" class="yui-picker-hex-controls">
				# <input autocomplete="off" size="6" id="yui-picker-hex" class="yui-picker-hex" name="yui-picker-hex">
			</div>
		</div>
	</div>
	<div id="yui-picker-swatch" class="yui-picker-swatch" title="Currently selected color:#FFFFFF" style="background-color:rgb(255,255,255); ">
	</div>
	<div id="yui-picker-websafe-swatch" class="yui-picker-websafe-swatch" title="Closest websafe color:#FFFFFF. Click to select." style="display:none; background-color:rgb(255,255,255); ">
	</div>
</div>
</div>
<script type="text/javascript" language="javascript">
(function(){
	var Event = YAHOO.util.Event,picker,hexcolor;
	Event.onDOMReady(function(){
	picker = new YAHOO.widget.ColorPicker("container"{
	showhsvcontrols:true,showhexcontrols:true,showwebsafe:false
}

);
	picker.skipAnim=true;
	var onRgbChange = function(o){
	setTimeout ("document.getElementById('yui-picker-hex').select()",50);
}

picker.on("rgbChange",onRgbChange);
	Event.on("newcolor","click",function(e){
	hexcolor = cc(document.getElementById('startcolor').value);
	picker.setValue([HexToR(hexcolor),HexToG(hexcolor),HexToB(hexcolor)],false);
}

);});})();
</script>

<script src="https://apis.google.com/_/scs/apps-static/_/js/k=oz.gapi.en.Rf1K0P5IJVE.O/m=plusone/rt=j/sv=1/d=1/ed=1/am=AQ/rs=AGLTcCNZ6t72TrLdRouGl8wNgklzWb5Tig/t=zcms/cb=gapi.loaded_0" ></script>
<script type="text/javascript"  src="https://apis.google.com/js/plusone.js" gapi_processed="true"></script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-814714-1', 'auto');
  ga('require', 'displayfeatures');
  ga('send', 'pageview');

</script>