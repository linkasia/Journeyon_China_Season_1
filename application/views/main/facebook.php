<!DOCTYPE html>
<html
	xmlns="http://www.w3.org/1999/xhtml"
	xmlns:fb="http://www.facebook.com/2008/fbml">
<head>
	<title>permadi.com | Example Of Posting Picture To Facebook Wall Using Javascript Graph API</title>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
</head>
<body>

<div id="fb-root"></div>
<script>
	var APP_ID="198583033513325";

	window.fbAsyncInit = initFacebook;

	function initFacebook()
	{
		FB.init({
		  appId  : APP_ID,
		  status : true, // check login status
		  cookie : false, // enable cookies to allow the server to access the session
		  xfbml  : true  // parse XFBML
		});

		FB.getLoginStatus(onFacebookLoginStatus);
	};

	(function() {
		var e = document.createElement('script');
		e.src = document.location.protocol + '//connect.facebook.net/en_US/all.js';
		e.async = true;
		document.getElementById('fb-root').appendChild(e);
		}());



	function facebookLogout()
	{
		FB.logout();
		var loginButtonDiv=document.getElementById("fb-login-button-div");
		loginButtonDiv.style.display="block";
		var logoutButtonDiv=document.getElementById("fb-logout-button-div");
		logoutButtonDiv.style.display="none";
		var contentDiv=document.getElementById("user-is-authenticated-div");
		contentDiv.style.display="none";
	}

	function facebookLogin()
	{
		var loginUrl="http://www.facebook.com/dialog/oauth/?"+
			"scope=publish_stream&"+
			"client_id="+APP_ID+"&"+
			"redirect_uri="+document.location.href+"&"+
			"response_type=token";
		window.location=loginUrl;
	}

	/*
	* Callback function for FB.login
	*/
	function onFacebookLoginStatus(response)
	{
		if (response.status=="connected" && response.authResponse)
		{
			var loginButtonDiv=document.getElementById("fb-login-button-div");
			loginButtonDiv.style.display="none";
			var logoutButtonDiv=document.getElementById("fb-logout-button-div");
			logoutButtonDiv.style.display="block";
			var contentDiv=document.getElementById("user-is-authenticated-div");
			contentDiv.style.display="block";

		}
		else
		{
			var loginButtonDiv=document.getElementById("fb-login-button-div");
			loginButtonDiv.style.display="block";
			var contentDiv=document.getElementById("user-is-authenticated-div");
			contentDiv.style.display="none";
		}

	}



	function postToWallUsingFBApi()
	{
		var data=
		{
			message: "Posted using FB.api",
			display: 'iframe',
			caption: "Caption",
			name: "Name",
			picture: 'http://www.permadi.com/tutorial/facebook-js-graph-api-post-to-wall/permadi.png',
			link: "http://www.permadi.com/",  // Go here if user click the picture
			description: "Description field",
			actions: [{ name: 'action_links text!', link: 'http://www.permadi.com' }],
		}
		//console.log(data);
		FB.api('/me/feed', 'post', data, onPostToWallCompleted);
	}

	function postToWallUsingFBUiAndAttachment()
	{
		var data=
		{
			method: 'stream.publish',
			message: "Posted using FB.ui.",
			display: 'iframe',
			attachment:
			{
				media: [{
						type: "image",
						src: 'http://www.permadi.com/tutorial/facebook-js-graph-api-post-to-wall/permadi.png',
						href: "http://www.permadi.com/"  // Go here if user click the picture
				}],
				name: "Attachment Name",
				caption: 'Attachment Caption',
				href: "http://www.permadi.com/"			// Go here is user clicks the Attachment Name
			},
			href: "http://www.permadi.com/",
			action_links: [
                { text: 'action_links text!', href: 'http://www.permadi.com' }
            ],
		}
		FB.ui(data, onPostToWallCompleted);
	}

	function postToWallUsingFBUi()
	{
		var data=
		{
			method: 'stream.publish',
			message: "Posted using FB.ui and picture.",
			display: 'iframe',
			caption: "Caption",
			name: "Name",
			picture: 'http://www.permadi.com/tutorial/facebook-js-graph-api-post-to-wall/permadi.png',
			link: "http://www.permadi.com/",  // Go here if user click the picture
			description: "Description field",
			actions: [{ name: 'action_links text!', link: 'http://www.permadi.com' }],
		}
		FB.ui(data, onPostToWallCompleted);
	}

	function onPostToWallCompleted(response)
	{
		if (response)
		{
			//console.log(response);
			if (response.error)
			{
				alert(response.error.message);
			}
			else
			{
				if (response.id)
					alert("Posted as post_id "+response.id);
				else if (response.post_id)
					alert("Posted as post_id "+response.post_id);
				else
					alert("Unknown Error");
			}
		}
		// user cancelled
	}



</script>
<div id="fb-login-button-div" style="display:none;">
	Please login to enjoy all the features of this application:
	<input id="loginButton" type="button" value="Login To Facebook" onclick="javascript:facebookLogin();">
</div>
<div id="fb-logout-button-div" style="display:none;">
	<input id="logoutButton" type="button" value="Logout From Facebook" onclick="javascript:facebookLogout();">
</div>

<div id="user-is-authenticated-div" style="display:none;">
	<input id="postPictureToWall" type="button" value="Post To Wall Using FB.api" onclick="javascript:postToWallUsingFBApi();">
	<br>
	<input id="postToWallWithFBUiPrompt" type="button" value="Post To Wall Using FB.ui and Attachment Parameter" onclick="javascript:postToWallUsingFBUiAndAttachment();">
	<input id="postToWallWithFBUiPrompt" type="button" value="Post To Wall Using FB.ui The New Way" onclick="javascript:postToWallUsingFBUi();">


</div>
<p>
This is a bare-bone demonstration of how to post to walls with Facebook Graph API.  (If you are already logged in, click the Logout button first.)
<br><a target="_blank" href="http://www.permadi.com/blog/2011/04/javascript-facebook-graph-api-posting-feed-with-picture-to-walls/">
http://www.permadi.com/blog/2011/04/javascript-facebook-graph-api-posting-feed-with-picture-to-walls/</a>
</div>
</html>