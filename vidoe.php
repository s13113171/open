
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="cache-control" content="no-cache">
<meta http-equiv="pragma" content="no-cache">
<meta http-equiv="expires" content="0">
<title>高工好生活</title>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"> </script>
<script type="text/javascript" src="http://1968.freeway.gov.tw/js/swfobject.js"> </script>
<script type="text/javascript" src="http://1968.freeway.gov.tw/js/publicpage.js"> </script>
<script type="text/javascript" src="http://1968.freeway.gov.tw/js/utils.js"> </script>
<script type="text/javascript" src="http://1968.freeway.gov.tw/modules/realtimetraffic/script.js"> </script>
<link href="http://1968.freeway.gov.tw/css/default.css" rel="stylesheet" type="text/css"/>
<link href="http://1968.freeway.gov.tw/css/feedbackstyle.css" rel="stylesheet" type="text/css"/>
<link href="http://1968.freeway.gov.tw/css/grey.css" rel="stylesheet" type="text/css"/>
<link href="http://1968.freeway.gov.tw/modules/realtimetraffic/style.css" rel="stylesheet" type="text/css"/>
<script type="text/javascript">
	var menuDf = 0;
	var lang = "tw";
</script>
<!-- 	gogole analytic code -->
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-21764931-3']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0];
	s.parentNode.insertBefore(ga, s);
  })();

</script>
<script type="text/javascript">
	var fid, loc;
	fid = '10010';loc = '0413';</script>
<script type="text/javascript" src="http://1968.freeway.gov.tw/js/jquery.getUrlParam.js"> </script>
<script type="text/javascript" src="http://1968.freeway.gov.tw/js/jquery.address-1.3.min.js"> </script>
<script type="text/javascript" src="http://1968.freeway.gov.tw/js/utils.js"> </script>
<script type="text/javascript" src="http://1968.freeway.gov.tw/js/sectionpage.js"> </script>
<link href="/css/sectionstyle.css" rel="stylesheet" type="text/css"/>
<!-- Google Map API Key (r11)
<script src="http://maps.google.com/maps?file=api&amp;v=2&amp;sensor=false&amp;key=ABQIAAAAKgym_8Tx3dpmvwgMagKVdBQH1BBgzzCugkWmqendit7IwApQihTw-SJ7YBK7VpkblIHTX-ercHaTaA" type="text/javascript"> </script> 
-->
<!-- Google Map API Key (1968) -->
 <!--<script src="http://maps.google.com/maps?file=api&amp;v=2&amp;sensor=false&amp;key=ABQIAAAAKgym_8Tx3dpmvwgMagKVdBTG7y_iKc15W7jAYVrasEnI-NVuARThjcwGqdAF5sApR7KTifYr_5_RfQ" type="text/javascript"> </script>-->
<script src="http://maps.google.com/maps?file=api&amp;v=2&amp;sensor=false&amp;key=ABQIAAAAKgym_8Tx3dpmvwgMagKVdBQH1BBgzzCugkWmqendit7IwApQihTw-SJ7YBK7VpkblIHTX-ercHaTaA" type="text/javascript"> </script>
</head>
<body onunload="GUnload()">
	<div id="main">
		<!-- 上方共用區塊 -->
		<div id="header">
			<!-- server -->
<!-- id:594-689876545678-->
<script type="text/javascript">
<!--


//開發
function depNav(){
	}
//-->
</script>
<div id="popBox" class="pop_other">
	<img id="popAdd" src="http://1968.freeway.gov.tw/assets/popadd.gif"/>
    <div id="depNav"></div>
</div>
<div id="logo">
	
</div>

		</div>
		
		<!-- 頁面內容 -->
		<div id="content">
			<div class="content_main">
			
				
                <div id="section_search_panel">
					<script type="text/javascript">

$(document).ready(searchPanelInit);

function searchPanelInit(){
	getFreewayMenu();
}

function getFreewayMenu(){
	$.ajax({
		   type: "GET",
		   url: webUrl + "common/getfrees",
		   data: "id=sec_selt",
		   success: function(result){
		   		$("#freeway_id_select").append(result);
		   		$("#sec_selt").change(getSectionMenu);
		   		$("#search_btn").click(selectSec);
		   },
		   error: function (xhr, ajaxOptions, thrownError){
				//alert(xhr.status);

				//alert(thrownError);
		   }
	});
}

function getSectionMenu(){
	var freewayId = $(this).val();
	
	if(freewayId != ""){
		$.ajax({
			   type: "GET",
			   url: webUrl + "common/getnodsecs/fid/" + freewayId,
			   data: "cate=1&id=from_selt",
			   success: function(result){
					$("#loc_menu").html(result);
					$("#search_btn").click(sectionSearchBtnClickHandler);
			   }
		});
	
		$(".loc_menu").show();
	}else{
		$(".loc_menu").hide();
	}
}
</script>
<ul id="section_menu_panel">
	<li id="freeway_id_select"><a>高速公路</a> </li>
	
</ul>                    <!--<ul  id="example" class="speed_color">
                           <li id="speed_color_title" class="first"><a class="speed_color_box">圖例</a></li>
                           <li id="color_none"><a class="speed_color_box">資料不足</a></li>
                           <li id="color1_39"><a class="speed_color_box">40以下</a></li>
                           <li id="color40_69"><a class="speed_color_box">40-59</a></li>
                           <li id="color61_79"><a class="speed_color_box">60-79</a></li>
                           <li id="color80up"><a class="speed_color_box">80以上</a></li>
                   </ul>-->
				</div>
                
				<div class="content_body">
					<div id="sec_map">
						<div id="secSWF" class="swfContent">
					       <!--	<h4>此內容需要安裝 Adobe Flash Player 10.0</h4>
					       	<p><a href="http://www.adobe.com/go/getflashplayer"><img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Get Adobe Flash player" /></a></p>-->
					    </div>   
					</div>
					
					<div id="single_section_data">
					
						<div id="section_title">
							<h2 id="location_title"></h2>
							</div>
					<!--地圖-->
						<div id="googlemap">
							<div id="map_canvas"></div>
							<div id="ctrl_panel"></div>
							<div id="map_control">
								<a id="map_ctrl_btn" class="ctrl_btn"><img id="map_ctrl_img" src="http://1968.freeway.gov.tw/assets/map_ctrl_open.png"/></a>
							</div>
						</div>
					<!--地圖-->
					
					<!--路況-->
						<div id="detail">
							<div id="cctv_detail_content">
								<span id="speed"> </span>
								
								<iframe id="cctv_frame" name="cctv_frame" src="/include/cctv_frame.html" frameborder="0" scrolling="no" marginheight="0" marginwidth="0">
								</iframe>
								
								<ul id="cctv_btn_list" class="btn">
									<!-- <li><a id="other_cctvs" class="cctv_btn">其他即時影像</a></li> -->
									<li><a id="reload_cctv" class="cctv_btn">重新讀取</a></li>
								</ul>							
								<hr noshade="noshade"/>
								
								<table id="inc_table" cellpadding="0" cellspacing="0">
								
									<tr id="inc_se_tr">
										<td class="item_title inc_info"></td>
										<td id="inc_se"><a></a></td>
									</tr>
									<tr id="inc_nw_tr">
										<td class="item_title inc_info"></td>
										<td id="inc_nw"><a></a></td>
									</tr>
								</table>
								
							</div>
						</div>
					<!--路況-->	
						
						
					</div>
                    					<!--[if IE]>
					<div id="clear"></div>
					<![endif]-->
				</div>
			</div>
		</div>
		<div id="debug_info"></div>

<div id="footer">
    
  </div>
</div>
	</div>
</body>
</html>