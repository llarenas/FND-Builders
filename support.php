<!DOCTYPE HTML >
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>FND</title>

<link href="support.css" rel="stylesheet" type="text/css">

<script type="text/javascript" src="jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="wb.conveyerbelt.min.js"></script>
<script type="text/javascript">

$(document).ready(function()
{
   $(".SlideMenu1_Folder div").click(function()
   {
      $(this).removeClass('sliding');
      if ($(this).parent().find('ul').is(':hidden'))
      {
         $("#SlideMenu1 > ul > li > ul").hide();
         $(this).parent().find('ul').fadeIn();
      }
      else
      {
         $(this).parent().find('ul').fadeOut();
      }
   });
   $(".SlideMenu1_Folder div").hover(function()
   {
      $(this).addClass('sliding');
      setTimeout(function() 
      {
         $('#SlideMenu1 .sliding').click().removeClass('sliding');
      }, 600);
   }, function() 
   {
      $('#SlideMenu1 .sliding').removeClass('sliding');
   });
   $("#SlideShow1").conveyerbelt({speed:6, spacing: 12});
});
</script>



</head>

<body>


<div id="wb_Shape1" style="position:absolute;left:73px;top:274px;width:1117px;height:554px;z-index:0;">
<img src="images/img0002.png" id="Shape1" alt="" style="border-width:0;width:1117px;height:554px;"></div>
<div id="wb_Shape5" style="position:absolute;left:496px;top:343px;width:694px;height:221px;z-index:1;">
<img src="images/img0017.png" id="Shape5" alt="" style="border-width:0;width:694px;height:221px;"></div>
<div id="wb_Shape14" style="position:absolute;left:168px;top:63px;width:1020px;height:108px;z-index:2;">
<img src="images/img0003.png" id="Shape14" alt="" style="border-width:0;width:1020px;height:108px;"></div>
<div id="wb_Text1" style="position:absolute;left:190px;top:68px;width:431px;height:74px;text-align:center;z-index:3;">
<span style="color:#800010;font-family:Arial;font-size:64px;"><em>F</em></span><span style="color:#800010;font-family:Arial;font-size:43px;"><em>ND</em></span><span style="color:#800010;font-family:Arial;font-size:24px;"><strong> </strong></span><span style="color:#800010;font-family:Arial;font-size:29px;"><strong>Builders Company Ltd.</strong></span></div>
<div id="wb_Image6" style="position:absolute;left:183px;top:369px;width:0px;height:0px;z-index:4;">
<img src="" id="Image6" alt="" style="width:0px;height:0px;"></div>
<div id="wb_Text2" style="position:absolute;left:665px;top:34px;width:157px;height:16px;z-index:5;text-align:left;">
&nbsp;</div>
<div id="wb_Shape10" style="position:absolute;left:64px;top:0px;width:122px;height:288px;z-index:6;">
<img src="images/img0004.png" id="Shape10" alt="" style="border-width:0;width:122px;height:288px;"></div>
<div id="wb_Image5" style="position:absolute;left:62px;top:61px;width:119px;height:108px;z-index:7;">
<img src="images/wwb_img1.jpg" id="Image5" alt="" style="width:119px;height:108px;"></div>
<div id="wb_Text6" style="position:absolute;left:245px;top:109px;width:41px;height:16px;z-index:8;text-align:left;">
&nbsp;</div>
<div id="wb_Text4" style="position:absolute;left:291px;top:1062px;width:630px;height:13px;text-align:center;z-index:9;">
<span style="color:#000000;font-family:Tahoma;font-size:11px;">Copyright © 2014 by &quot;Nevermind&quot;&nbsp; ·&nbsp; All Rights reserved&nbsp; ·&nbsp; E-Mail:Secret@yahoo.com</span></div>
<div id="wb_TabMenu1" style="position:absolute;left:208px;top:236px;width:981px;height:40px;z-index:10;overflow:hidden;">
<ul id="TabMenu1">
<li><a href="./index.php">Home</a></li>
<li><a href="./chart.php">Organizational chart</a></li>
<li><a href="./product.php">Products</a></li>
<li><a href="./service.php">Sevices</a></li>
<li><a href="./project.php">Projects</a></li>
<li><a href="./support.php" class="active">Supports</a></li>
<li><a href="./career.php">Career</a></li>
<li><a href="./aboutus.php">About us</a></li>
<li><a href="./contact.php">Contact us</a></li>
</ul>
</div>
<div id="wb_Shape7" style="position:absolute;left:60px;top:916px;width:1126px;height:168px;z-index:11;">
<img src="images/img0005.png" id="Shape7" alt="" style="border-width:0;width:1126px;height:168px;"></div>
<div id="wb_Text7" style="position:absolute;left:309px;top:1065px;width:630px;height:13px;text-align:center;z-index:12;">
<span style="color:#000000;font-family:Tahoma;font-size:11px;">Copyright © 2014 by &quot;Nevermind&quot;&nbsp; ·&nbsp; All Rights reserved&nbsp; ·&nbsp; E-Mail:Secret@yahoo.com</span></div>
<div id="wb_TabMenu2" style="position:absolute;left:211px;top:912px;width:981px;height:40px;z-index:13;overflow:hidden;">
<ul id="TabMenu2">
<li><a href="./index.php">Home</a></li>
<li><a href="./chart.php">Organizational chart</a></li>
<li><a href="./product.php">Products</a></li>
<li><a href="./service.php">Sevices</a></li>
<li><a href="./project.php">Projects</a></li>
<li><a href="./support.php" class="active">Supports</a></li>
<li><a href="./career.php">Career</a></li>
<li><a href="./aboutus.php">About us</a></li>
<li><a href="./contact.php">Contact us</a></li>
</ul>
</div>
<div id="wb_Shape3" style="position:absolute;left:59px;top:948px;width:1127px;height:11px;z-index:14;">
<img src="images/img0006.png" id="Shape3" alt="" style="border-width:0;width:1127px;height:11px;"></div>
<div id="wb_Shape8" style="position:absolute;left:64px;top:818px;width:1126px;height:35px;z-index:15;">
<img src="images/img0009.gif" id="Shape8" alt="" style="border-width:0;width:1126px;height:35px;"></div>
<div id="wb_Shape12" style="position:absolute;left:64px;top:797px;width:1126px;height:35px;z-index:16;">
<img src="images/img0013.gif" id="Shape12" alt="" style="border-width:0;width:1126px;height:35px;"></div>
<div id="wb_Shape2" style="position:absolute;left:64px;top:281px;width:121px;height:547px;z-index:17;">
<img src="images/img0016.gif" id="Shape2" alt="" style="border-width:0;width:121px;height:547px;"></div>
<div id="SlideMenu1" style="position:absolute;left:188px;top:293px;width:308px;height:462px;z-index:18;">
<ul>
   <li class="SlideMenu1_Folder"><div><a>OUR PARTNERS:</a></div><span><!-- empty --></span>
      <ul>
         <li><a href="http://www.u-picardie.fr/mundus_MESC/">MESC</a></li>
         <li><a href="http://www.asibex.com.jo/index.php?option=com_content&view=article&id=33:asibex-profile&Itemid=66">ASIBEX</a></li>
         <li><a href="http://www.govan.com.au/">GOVAN</a></li>
         <li><a href="http://www.riyadh-cables.com/">Riyadh Cables</a></li>
         <li><a href="http://w3.siemens.com/mcms/automation/en/pages/automation-technology.aspx">Siemens Automation</a></li>
         <li><a href="http://www.keyence.com/">Keyence</a></li>
         <li><a href="http://www.ifm.com/ifmgb/web/home.htm">IFM Controls</a></li>
         <li><a href="http://www.yokogawa.com/">Yokogawa</a></li>
         <li><a href="http://www.danfoss.com/north_america/BusinessAreas/DrivesSolutions">Danfoss Drives</a></li>
         <li><a href="https://www.hilti.com/">Hilti</a></li>
         <li><a href="https://eu3a.mitsubishielectric.com/landingpage">Mitsubishi Automation</a></li>
         <li><a href="http://www.schneider-electric.com/site/home/index.cfm/ww/?selectCountry=true">Schneider Electric</a></li>
         <li><a href="http://www.sadenco.net/">Sadenco</a></li>
         <li><a href="http://www.seico.com.sa/">SEICO Glands</a></li>
         <li><a href="http://www.bosch.com/worldsite_startpage/en/default.aspx">Bosch </a></li>
      </ul>
   </li>
</ul>
</div>
<div id="wb_Shape4" style="position:absolute;left:64px;top:271px;width:1127px;height:19px;z-index:19;">
<img src="images/img0012.png" id="Shape4" alt="" style="border-width:0;width:1127px;height:19px;"></div>
<div id="SlideShow1" style="position:absolute;left:501px;top:348px;width:688px;height:212px;overflow:hidden;z-index:20;">
<img class="image" style="width:212px;height:212px;" src="images/45.jpg" alt="" title="">
<img class="image" style="width:553px;height:212px;display:none;" src="images/download%20%281%29.jpg" alt="" title="">
<img class="image" style="width:302px;height:212px;display:none;" src="images/download%20%282%29.jpg" alt="" title="">
<img class="image" style="width:383px;height:212px;display:none;" src="images/download%20%283%29.jpg" alt="" title="">
<img class="image" style="width:852px;height:212px;display:none;" src="images/download%20%284%29.jpg" alt="" title="">
<img class="image" style="width:212px;height:212px;display:none;" src="images/download%20%285%29.jpg" alt="" title="">
<img class="image" style="width:362px;height:212px;display:none;" src="images/download%20%286%29.jpg" alt="" title="">
<img class="image" style="width:653px;height:212px;display:none;" src="images/download.jpg" alt="" title="">
<img class="image" style="width:370px;height:212px;display:none;" src="images/download.png" alt="" title="">
<img class="image" style="width:933px;height:212px;display:none;" src="images/siemens_logo1.png" alt="" title="">
</div>
</body>
</html>