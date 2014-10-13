<?
require "1.php";
if((int)$_SESSION['id']<1){
die("小子,先登录3!");
}
if ($_SESSION['valid_user']=="")  {
die("小子,先登录4!");
}


if ($_GET['username']!=$_SESSION['valid_user'])  {
die("小子,只能登录自己的帐号!");
}


	$exec1 = "select acct from accounts where login='".$_SESSION['valid_user']."' and encrypted_password = '".md5($_SESSION['password_o'])."'";
	$result1 = $db->query($exec1);
	$rs1 = $db->get($result1);
	if ($rs1['acct']!="") {
	}else{
	die("ERROR!!");
	}

	
$user = $_SESSION['valid_user'];
$password = $_SESSION['password'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en"> 
    <head>
        <title>烈焰</title>
		<meta http-equiv="pragma" content="no-cache">  
		<meta http-equiv="cache-control" content="no-cache">  
		<meta http-equiv="expires" content="0">  
        <meta name="google" value="notranslate" />         
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <style type="text/css" media="screen"> 
            html, body  { height:100%; }
            body { margin:0; padding:0; overflow:auto; text-align:center; 
                   background-color: #ffffff; }   
            object:focus { outline:none; }
            #flashContent { display:none; }
        </style>          
        <script type="text/javascript" src="swfobject.js"></script>
        <script type="text/javascript">
			var jsReady = false;
			function isReady() { return jsReady; }
			function pageInit() { jsReady = true; }
			function thisMovie(movieName)
			{
				if (navigator.appName.indexOf("Microsoft") != -1) { return window[movieName]; } 
				else { return document[movieName];	}
			}
				
			function onbeforeunload()
			{
				//thisMovie("iLoader").onbeforeunload();
			}
			
			function getParams()
			{
				 return "http://VIP.YDDZ.COM.CN:81/?server_ip=115.239.231.3&server_port=9001&pass_user_name=<?=$user?>&encrypted_string=<?=$password?>&server_id=test_1&source=0&sub_source=&flags=4&time=1392385580&agent=9377&server=292&is_client=false";
			}
						
			function getCDNPath()
			{
				//一区
				return "http://VIP.YDDZ.COM.CN:81/res/";
			}
			
			function getClientPath()
			{
				return "http://VIP.YDDZ.COM.CN:81/ly.rar";//获取登陆器下载地址
			}
			
			
			function rightButton(btType,m_x,m_y)
			{
				thisMovie("iLoader").rightButton(btType,m_x,m_y);
			}
			
			function getRechargePath()
			{
				return "pay.htm";//获取官网充值页面地址
			}

			function quit()
			{
				location.replace("index.php");
			}
			
			function reload()
			{
									window.location.reload();
							}

            var swfVersionStr = "0.0.0";
            var xiSwfUrlStr = "playerProductInstall.swf";
            var flashvars = {};
            var params = {};
            params.quality = "high";
            params.bgcolor = "#000000";
            params.allowscriptaccess = "always";
            params.allowfullscreen = "true";
            var attributes = {};
            attributes.id = "iLoader";
            attributes.name = "iLoader";
            attributes.align = "middle";
            swfobject.embedSWF(
                "iLoader6.swf", "flashContent", 
                "100%", "100%", 
                swfVersionStr, xiSwfUrlStr, 
                flashvars, params, attributes);
            // JavaScript enabled so display the flashContent div in case it is not replaced with a swf object.
            swfobject.createCSS("#flashContent", "display:block;text-align:left;");
        </script>
    </head>
    <body onload="pageInit();" onbeforeunload="onbeforeunload();">
        <div id="flashContent">
            <p>
                To view this page ensure that Adobe Flash Player version 
                0.0.0 or greater is installed. 
            </p>
            <script type="text/javascript"> 
                var pageHost = ((document.location.protocol == "https:") ? "https://" : "http://"); 
                document.write("<a href='http://www.adobe.com/go/getflashplayer'><img src='" 
                                + pageHost + "www.adobe.com/images/shared/download_buttons/get_flash_player.gif' alt='Get Adobe Flash player' /></a>" ); 
            </script> 
        </div>
        
        <noscript>
            <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="100%" height="100%" id="iLoader">
                <param name="movie" value="iLoader6.swf" />
                <param name="quality" value="high" />
                <param name="bgcolor" value="#ffffff" />
                <param name="allowScriptAccess" value="always" />
                <param name="allowFullScreen" value="true" />
                <!--[if !IE]>-->
                <object type="application/x-shockwave-flash" data="iLoader6.swf" width="100%" height="100%">
                    <param name="quality" value="high" />
                    <param name="bgcolor" value="#ffffff" />
                    <param name="allowScriptAccess" value="always" />
                    <param name="allowFullScreen" value="true" />
                <!--<![endif]-->
                <!--[if gte IE 6]>-->
                    <p> 
                        Either scripts and active content are not permitted to run or Adobe Flash Player version
                        0.0.0 or greater is not installed.
                    </p>
                <!--<![endif]-->
                    <a href="http://www.adobe.com/go/getflashplayer">
                        <img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Get Adobe Flash Player" />
                    </a>
                <!--[if !IE]>-->
                </object>
                <!--<![endif]-->
            </object>
        </noscript>     
   </body>
</html>
