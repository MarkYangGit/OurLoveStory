﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>OUR LOVE STORY SPACE</title>

<style type="text/css">
@font-face {
	font-family: digit;
	src: url('digital-7_mono.ttf') format("truetype");
}
</style>

<link href="css/default.css" type="text/css" rel="stylesheet">
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/garden.js"></script>
<script type="text/javascript" src="js/functions.js"></script>

</head>

<body>
<div style="text-align:center;clear:both;">
<script src="/gg_bd_ad_720x90.js" type="text/javascript"></script>
<script src="/follow.js" type="text/javascript"></script>
</div>
<div id="mainDiv">
	<div id="content">
		<div id="code">
			<span class="comments">/**</span><br />
			<span class="space"/><span class="comments">*2003-06-27,</span><br />
			<span class="space"/><span class="comments">*2003-01-06.</span><br />
			<span class="space"/><span class="comments">*/</span><br />
			Boy name = <span class="keyword">Mr</span> Yang<br />
			Girl name = <span class="keyword">Mrs</span> Wu<br />
			<span class="comments">// Fall in love river. </span><br />
			The boy love the girl;<br />
			<span class="comments">// They love each other.</span><br />
			The girl loved the boy;<br />
			<span class="comments">// AS time goes on.</span><br />
			The boy can not be separated the girl;<br />
			<span class="comments">// At the same time.</span><br />
			The girl can not be separated the boy;<br />
			<span class="comments">// Both wind and snow all over the sky.</span><br />
			<span class="comments">// Whether on foot or 5 kilometers.</span><br />
			<span class="keyword">The boy</span> very <span class="keyword">happy</span>;<br />
			<span class="keyword">The girl</span> is also very <span class="keyword">happy</span>;<br />
			<span class="placeholder"/><span class="comments">// Whether it is right now</span><br />
			<span class="placeholder"/><span class="comments">// Still in the distant future.</span><br />
			<span class="placeholder"/>The boy has but one dream;<br />
			<span class="comments">// The boy wants the girl could well have been happy.</span><br />
			<br>
			<br>
			I want to say:<br />
			Baby, I love you forever;<br />
		</div>
		<div id="loveHeart">
			<canvas id="garden"></canvas>
			<div id="words">
				<div id="messages">
					亲爱的，这是我们相爱在一起的时光。
					<div id="elapseClock"></div>
				</div>
				<div id="loveu">
					爱你直到永永远远。<br/>
					<div class="signature">- Mr Yang</div>
				</div>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript">
var offsetX = $("#loveHeart").width() / 2;
var offsetY = $("#loveHeart").height() / 2 - 55;
var together = new Date();
together.setFullYear(2020, 8, 15);
together.setHours(0);
together.setMinutes(0);
together.setSeconds(0);
together.setMilliseconds(0);

if (!document.createElement('canvas').getContext) {
	var msg = document.createElement("div");
	msg.id = "errorMsg";
	msg.innerHTML = "Your browser doesn't support HTML5!<br/>Recommend use Chrome 14+/IE 9+/Firefox 7+/Safari 4+"; 
	document.body.appendChild(msg);
	$("#code").css("display", "none")
	$("#copyright").css("position", "absolute");
	$("#copyright").css("bottom", "10px");
	document.execCommand("stop");
} else {
	setTimeout(function () {
		startHeartAnimation();
	}, 5000);

	timeElapse(together);
	setInterval(function () {
		timeElapse(together);
	}, 500);

	adjustCodePosition();
	$("#code").typewriter();
}
</script>

<title>OUR LOVER STORY SPACE</title>
    <meta charset="utf-8">
</head>
<body>
    <div name="Head">

    </div>
    <div name="Body">



        <div name="logblock">
            <center>
                <hr/>
                <h2>留言板</h2>
                <table width="800" border="2">
                    <tr>
                       <th>内容</th>
                        <th>留言者</th>
                        <th>时间</th>
                    </tr>
                    <?php
                        $info = rtrim(file_get_contents("./log/ly.db","@"));
                        $list = explode("@@",$info);
                        if(!empty($list) && count($list) >0){
                            foreach($list as $k => $v){
                                $ly = explode("##",$v);
                                echo "<tr>";
                                echo "<td>{$ly[0]}</td>";
                              echo "<td>{$ly[1]}</td>";
                                echo "<td>{$ly[2]}</td>";
                             echo "</tr>";
                           }
                    }
                 ?>
        
                </table>
               <?php include("./menu.php");?>
            </center>
        </div>
    </div>
    
    <div name="Font">
        <center><p>Made by MarkYangKp</p></center>
    </div>
</body>
</html>