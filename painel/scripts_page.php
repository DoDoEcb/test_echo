<!--Start of Tawk.to Script-->
<!--<script type="text/javascript">-->
<!--var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();-->
<!--(function(){-->
<!--var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];-->
<!--s1.async=true;-->
<!--s1.src='https://embed.tawk.to/589a7f8ca1e7630ada57edbb/default';-->
<!--s1.charset='UTF-8';-->
<!--s1.setAttribute('crossorigin','*');-->
<!--s0.parentNode.insertBefore(s1,s0);-->
<!--})();-->
<!--</script>-->
<!--End of Tawk.to Script-->

<!-- JAVASCRIPT FILES -->
		<script type="text/javascript">var plugin_path = 'assets/plugins/';</script>
		<script type="text/javascript" src="assets/plugins/jquery/jquery-2.2.3.min.js"></script>
		<script type="text/javascript" src="assets/js/app.js"></script>
		
		<!-- PAGE LEVEL SCRIPT -->
		<script type="text/javascript">
			/* 
				Toastr Notification On Load 

				TYPE:
					primary
					info
					error
					success
					warning

				POSITION
					top-right
					top-left
					top-center
					top-full-width
					bottom-right
					bottom-left
					bottom-center
					bottom-full-width
					
				false = click link (example: "http://www.stepofweb.com")
			*/
//			_toastr("Bem vindo <?php //echo $my_username ?>// <br>Agora Você Pode Ver Todos os usuarios de sua Rede Até o 5° Nível","top-right","success",false);
			/** SALES CHART
			******************************************* **/
			loadScript(plugin_path + "chart.flot/jquery.flot.min.js", function(){
				loadScript(plugin_path + "chart.flot/jquery.flot.resize.min.js", function(){
					loadScript(plugin_path + "chart.flot/jquery.flot.time.min.js", function(){
						loadScript(plugin_path + "chart.flot/jquery.flot.fillbetween.min.js", function(){
							loadScript(plugin_path + "chart.flot/jquery.flot.orderBars.min.js", function(){
								loadScript(plugin_path + "chart.flot/jquery.flot.pie.min.js", function(){
									loadScript(plugin_path + "chart.flot/jquery.flot.tooltip.min.js", function(){

										if (jQuery("#flot-sales").length > 0) {

											/* DEFAULTS FLOT COLORS */
											var $color_border_color = "#eaeaea",		/* light gray 	*/
												$color_second 		= "#6595b4";		/* blue      	*/


											var d = [
												[1196463600000, 0], [1196550000000, 0], [1196636400000, 0], [1196722800000, 77], [1196809200000, 3636], [1196895600000, 3575], [1196982000000, 2736], [1197068400000, 1086], [1197154800000, 676], [1197241200000, 1205], [1197327600000, 906], [1197414000000, 710], [1197500400000, 639], [1197586800000, 540], [1197673200000, 435], [1197759600000, 301], [1197846000000, 575], [1197932400000, 481], [1198018800000, 591], [1198105200000, 608], [1198191600000, 459], [1198278000000, 234], [1198364400000, 4568], [1198450800000, 686], [1198537200000, 4122], [1198623600000, 449], [1198710000000, 468], [1198796400000, 392], [1198882800000, 282], [1198969200000, 208], [1199055600000, 229], [1199142000000, 177], [1199228400000, 374], [1199314800000, 436], [1199401200000, 404], [1199487600000, 544], [1199574000000, 500], [1199660400000, 476], [1199746800000, 462], [1199833200000, 500], [1199919600000, 700], [1200006000000, 750], [1200092400000, 600], [1200178800000, 500], [1200265200000, 900], [1200351600000, 930], [1200438000000, 1200], [1200524400000, 980], [1200610800000, 950], [1200697200000, 900], [1200783600000, 1000], [1200870000000, 1050], [1200956400000, 1150], [1201042800000, 1100], [1201129200000, 1200], [1201215600000, 1300], [1201302000000, 1700], [1201388400000, 1450], [1201474800000, 1500], [1201561200000, 1510], [1201647600000, 1510], [1201734000000, 1510], [1201820400000, 1700], [1201906800000, 1800], [1201993200000, 1900], [1202079600000, 2000], [1202166000000, 2100], [1202252400000, 2200], [1202338800000, 2300], [1202425200000, 2400], [1202511600000, 2550], [1202598000000, 2600], [1202684400000, 2500], [1202770800000, 2700], [1202857200000, 2750], [1202943600000, 2800], [1203030000000, 3245], [1203116400000, 3345], [1203202800000, 3000], [1203289200000, 3200], [1203375600000, 3300], [1203462000000, 3400], [1203548400000, 3600], [1203634800000, 3700], [1203721200000, 3800], [1203807600000, 4000], [1203894000000, 4500]];

//											for (var i = 0; i < d.length; ++i) {
//												d[i][0] += 60 * 60 * 1000;
//											}

											var options = {

												xaxis : {
//													mode : "time",
													tickLength : 5
												},

												series : {
													lines : {
														show : true,
														lineWidth : 1,
														fill : true,
														fillColor : {
															colors : [{
																opacity : 0.1
															}, {
																opacity : 0.15
															}]
														}
													},
												   //points: { show: true },
													shadowSize : 0
												},

												selection : {
													mode : "x"
												},

												grid : {
													hoverable : true,
													clickable : true,
													tickColor : $color_border_color,
													borderWidth : 0,
													borderColor : $color_border_color,
												},

												tooltip : true,

												tooltipOpts : {
													content : "Bitcoin: %x <span class='block'>$%y</span>",
													dateFormat : "%y-%0m-%0d",
													defaultTheme : false
												},

												colors : [$color_second],

											};

											var plot = jQuery.plot(jQuery("#flot-sales"), [d], options);
										}

									});
								});
							});
						});
					});
				});
			});
			</script>

		<!-- PAGE LEVEL SCRIPTS -->
		<script type="text/javascript">
			jQuery(window).ready(function() {

				loadScript(plugin_path + 'jquery/jquery-ui.min.js', function() { /** jQuery UI **/
					loadScript(plugin_path + 'jquery/jquery.ui.touch-punch.min.js', function() { /** Mobile Touch Slider **/
						loadScript(plugin_path + 'form.slidebar/jquery-ui-slider-pips.min.js', function() { /** Slider Script **/

							/** Slider 0
							******************** **/
							var months 		= ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"];
							var $slidern 	= jQuery("#slider").slider({
								range: "min",
								animate: true,
								min: 0,
								max: 11,
								value: 5
							});

							$slidern.slider("pips", { rest: "label", labels: months });
							$slidern.slider("float" , { labels: months });
							$slidern.on("slidechange", function(e,ui) {
								jQuery("#monthOutput").text(months[ui.value]);
							});


							/** Slider 1
							******************** **/
							var $slider1 = jQuery("#slider1").slider({
								range: true,
								animate: true,
								min: 0,
								max: 10,
								values: [2, 8]
							});

							jQuery("#slider1").slider("pips", { first: "pip", last: "pip" });



							/** Slider 2
							******************** **/
							jQuery( "#slider2" ).slider({
								range: "min",
								animate: true,
								value: <?php echo $percentual ?>
								min: 0.000,
								max: 200,
								step: 10,
								slide: function(event, ui) {
									jQuery("#amount").val("%" + ui.value);
								}
							});

							jQuery("#amount").val( "%" + jQuery("#slider2").slider("value"));
							jQuery("#slider2").slider("pips", { rest: "label", prefix: "%", suffix: "" });
							jQuery("#slider2").slider("float", { prefix: "%", suffix: "", pips: true });



							/** Slider 3
							******************** **/
							jQuery("#slider3").slider({
								range: "max",
								animate: true,
								min: 1,
								max: 10,
								value: 2,
								slide: function(event, ui) {
									jQuery("#bedrooms").val(ui.value);
								}
							});

							jQuery("#bedrooms").val( $("#slider3").slider("value"));
							jQuery("#slider3").slider("pips",{ rest: "label" });



							/** Slider 4
							******************** **/
							var select 		= jQuery("#guests");
							var guestnumber = jQuery("#slider4").slider({
								min: 1,
								max: 10,
								animate: true,
								range: "min",
								value: select[0].selectedIndex + 1,
								slide: function(event, ui) {
									select[0].selectedIndex = ui.value - 1;
								}
							});

							jQuery("#guests").change(function() {
								guestnumber.slider("value", this.selectedIndex + 1);
							});

							jQuery("#slider4").slider("pips" , {
								rest: false
							});



							/** Slider 5
							******************** **/
							jQuery("#slider5").slider({
								value:100,
								animate: true,
								min: 0,
								max: 500,
								step: 50,
								range: "min",
								slide: function(event, ui) {
									jQuery("#donation").val(ui.value);
								}
							});

							jQuery("#donation").val(jQuery("#slider5").slider("value"));
							jQuery("#donation").blur(function() {
									jQuery("#slider5").slider("value", jQuery(this).val());
							});


							/** Vertical 1
							******************** **/
							var $sliderv = jQuery("#eq > .sliderv-wrapper").each(function() {
								var value = parseInt(jQuery(this).text(), 10);
									jQuery(this).empty().slider({
									value: value,
									range: "min",
									step: 10,
									animate: true,
									orientation: "vertical"
								});
							});

							$sliderv.slider("pips", {
								first: "pip",
								last: "pip"
							});


							/** Vertical 2
							******************** **/
							var $sliderv1 	= $("#eq2 > .sliderv-wrapper").each(function() {
								var value 	= parseInt(jQuery(this).text(), 10);
									jQuery(this).empty().slider({
									value: value,
									range: "min",
									step: 5,
									animate: true,
									orientation: "vertical"
								});
							});

							$sliderv1.slider("pips", {
								first: "pip",
								last: "pip"
							});


						});
					});
				});

			});
		</script>
		
