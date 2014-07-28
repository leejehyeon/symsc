
<!--<div class="Main_image">
	<img src="/static/img/Main_picture.png" usemap="#map" style="position:relative;">
<map name="map">	
    <area shape="poly" coords="0,0,0,360,580,360,380,0" href="http://www.naver.com">
    <area shape="poly" coords="960,360,960,0,380,0,580,360" href="http://www.daum.net">
</map>-->
	<!--<div class="row">
		
	</div>-->
	<!--<div class="main_text">
		<div class="tutor_text">
			<p class="tutor_title_text">튜터(Tutor)란?</p>
			<p class="tutor_descript_text">'개인지도를 해주는 사람'으로써
			<br>튜티들을 가르치며 동시에 후배
			<br>튜티들과 협동학습을 이끌어
			<br>나가는 학생을 의미<br></p>
		</div>
		<div class="tutee_text">
			<p class="tutee_title_text">튜티(Tutee)란?</p>
			<p class="tutee_descript_text">'개인지도를 받는 학생'으로써
			<br>튜터로부터 가르침을 받고 동시에
			<br>동료 튜티들과 서로 도와가며
			<br>함께 공부하는 학생을 의미</p>			
		</div>
	</div>
</div>-->
<div class="Main_image" style="position:relative;">
	<canvas style="width: 960px; height: 360px; position: absolute; left: 0px; top: 0px; padding: 0px; border: 0px; opacity: 1;" height="360" width="960"></canvas>
	<img class="map maphilighted" src="/static/img/Main_picture.png" width="960" height="360" usemap="#mapA" style="opacity: 0; position: absolute; left: 0px; top: 0px; padding: 0px; border: 0px;">
	<!--<img src="/static/img/main_image.png" usemap="#map">-->
<map name="mapA">
    <area shape="poly" coords="0,0,0,360,580,360,380,0" href="#">
    <area shape="poly" coords="960,360,960,0,380,0,580,360" href="#">
</map>
<!--<div class="main_text" style="margin-top:-195px; margin-left:0px; position:absolute; width:960px;">
		<div class="tutor_text" style="width:365px; height:189px;">
			<span class="tutor_title_text">튜터(Tutor)란?</span>
			<p class="tutor_descript_text">'개인지도를 해주는 사람'으로써
			<br>튜티들을 가르치며 동시에 후배
			<br>튜티들과 협동학습을 이끌어
			<br>나가는 학생을 의미<br></p>
		</div>
		<div class="tutee_text" style="width:365px; height:189px;">
			<span class="tutee_title_text">튜티(Tutee)란?</span>
			<p class="tutee_descript_text">'개인지도를 받는 학생'으로써
			<br>튜터로부터 가르침을 받고 동시에
			<br>동료 튜티들과 서로 도와가며
			<br>함께 공부하는 학생을 의미</p>			
		</div>
	</div>-->
</div>

<div class="Main_row">
	<!--<div>
			<div>공지사항</div>
			<?foreach($notice_list5 as $lt){?>
				<?echo $lt -> board_id;?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://tutor.thecakehouse.co.kr/index.php/notice/whole_notice?req_id=<?echo $lt -> board_id;?>"><?echo $lt -> subject;?></a>
			</br>
			<?}?>
	</div>-->
	<div>
		<div class="title_border">
			<p class="main_title">공지사항</p>
			<a href="http://tutor.thecakehouse.co.kr/index.php/notice/whole_notice"><img class="board_more_button"src="/static/img/main_board_more.png"/></a></div>
			<?foreach($notice_list5 as $lt){?>
				<a href="http://tutor.thecakehouse.co.kr/index.php/notice/whole_notice?req_id=<?echo $lt -> board_id; ?>"><li class="latest_board_list"><?echo $lt -> subject; ?></li></a>
			<?} ?>
	</div>
	<div>
		<a class="tutor_applicant_image" href="http://syjeon.ancle.kr/index.php/administration/tutor"><img src="/static/img/tutee_applicant.png" onmouseover="this.src='/static/img/tutee_applicant_hover.png'" onmouseout="this.src='/static/img/tutor_applicant.png'"></a>
		<a class="tutee_applicant_image" href="http://syjeon.ancle.kr/index.php/administration/tuti"><img src="/static/img/tutee_applicant.png" onmouseover="this.src='/static/img/tutee_applicant_hover.png'" onmouseout="this.src='/static/img/tutee_applicant.png'"></a>
		<div>
			<img class="main_home_icon" src="/static/img/main_home_icon.png">
			<p class="msc_center">MSC Center</p>
			<p class="MSC_home_link">http://msc.koreatech.ac.kr</p>
			<p style="clear:both; margin:0px;"></p>
			<a href="http://msc.koreatech.ac.kr"><p class="home_button">바로가기</p></a>
			<img class="graduationcap" src="/static/img/graduationcap.png">
		</div>
	</div>
	<div>
		<div class="title_border">
		<p class="main_title">CUSTOMER</p><p class="main_sub_title">CENTER</p>
		</div>
		<div class="">
			<p class="customer_title">E-메일</p>
			<p class="customer_descript">skyb4@koreatech.ac.kr</p>
			<p class="customer_title" style="padding-bottom:2px;">문의전화</p>
			<p class="customer_number">041-640-8550-1</p>
			<p class="customer_etc">메일로 문의사항을 남겨주세요.</p>
		</div>
	</div>
</div>
<!--
	<img src="/static/img/login.png" style=" margin-right: 45px;"/>
-->


