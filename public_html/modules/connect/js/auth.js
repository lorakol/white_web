 $(document).ready(

function(){
	if(fb_enabled==1) {
		FB.init({ 
		appId:appid, 
		cookie:true,
	        status:true, 
		xfbml:true, 
		version    : 'v2.1'
        	});
	}

	var checkLogin = function() {
		$.get(live_site+"/modules/connect/logged.php", {  }, function(data){ 
		if(data!=0) location.href = live_site+"/index.php";
		else { 
		    $(".error").show();  
		    var error = invalid_login;
		    $(".error").html("<p>"+error+"</p>");
		}
	});
	};

	if(oid_enabled==1) {

		var extensions={"openid.ns.ax" : "http:\/\/openid.net\/srv\/ax\/1.0", "openid.ax.mode" : "fetch_request", "openid.ax.type.namePerson_friendly" : "http:\/\/axschema.org\/namePerson\/friendly", "openid.ax.type.namePerson_first" : "http:\/\/axschema.org\/namePerson\/first", "openid.ax.type.namePerson_last" : "http:\/\/axschema.org\/namePerson\/last", "openid.ax.type.contact_email" : "http:\/\/axschema.org\/contact\/email", "openid.ax.required" : "namePerson_friendly,namePerson_first,namePerson_last,contact_email" };
	} // end if oid_enabled
 
	$(".facebook").bind("click", facebookLogin);

	function facebookLogin() {
		$(".error").hide();
                $(".facebook").unbind("click");

		FB.login(function(response) {
                            if (response.status=='connected') {
                                    FBLogin();
                            } else {
                                $(".facebook").bind("click", facebookLogin);
                            }
                          }, {'scope':'email', return_scopes: true});

	}

	function FBLogin() {

		FB.api('/me?fields=name,email', function(response) {

			if(response.error){ 
			    console.log(response.error.message);
			}
			else {
		    $.post(live_site+"/modules/connect/easyauth.php?auth=facebook", { identity: response.id, name: response.name, email: response.email }, function(data){
			var arr = data.split("|");
			var info = arr[0];
			var error = arr[1];
			if(error) { $(".error").show();  $(".error").html("<p>"+error+"</p>");}
			else {

				if(typeof parent.$.magnificPopup != "undefined") {

					// close window
					parent.location.href = live_site+"/useraccount.php";
					parent.$.magnificPopup.instance.close();
				} 
				else { 
					location.href = live_site+"/useraccount.php";
					window.location.reload;
				}

			}
				//
		    });
		}
		});
	}

// openid

	if(oid_enabled==1) {
	var openidOpener = popupManager.createPopupOpener({
		'onCloseHandler' : checkLogin
	});

	$("#openid_button").click(function(){ 

		$("#openid_div").slideDown();

		if(parent.$.fancybox) {
			// resize window
			setTimeout(function (){ 
	             		parent.$("#fancybox-content").height($(document).height());
         		}, 500);
			
		}

	 })

	$("#openid_submit").click(function(){ 

		// clear default text
		clearInputs();

		var oid_val = $("#openid").val();
		if(!oid_val) { 
			$("#oiderror").html(openid_identity_missing)
			$("#oiderror").show();

			if(parent.$.fancybox) {
				// resize window
				setTimeout(function (){ 
	             			parent.$("#fancybox-content").height($(document).height());
	         		}, 500);
			
			}

		}
		else {
			$.post(live_site+"/modules/connect/build_openid_url.php", { identity: oid_val }, function(data){ 

				var arr = data.split("|");
				var url = arr[0];
				var error = arr[1];

				if(error) { 
					$("#oiderror").html(error)
					$("#oiderror").show();
				}
				else {
					$("#oiderror").hide();
					openidOpener.popup(600, 500, url);
				}

			} );

		}
	 })
	} // end oid_enabled

   });

 
 	// google
	function onSignIn(googleUser) {
		
		var profile = googleUser.getBasicProfile();
		//alert(profile.getId()+"   "+profile.getName()+"   "+profile.getEmail());
		
		  $.post(live_site+"/modules/connect/easyauth.php?auth=google", { identity: profile.getId(), name: profile.getName(), email: profile.getEmail() }, function(data){
			var arr = data.split("|");
			var info = arr[0];
			var error = arr[1];
			if(error) { $(".error").show();  $(".error").html("<p>"+error+"</p>");}
			else {

				if(typeof parent.$.magnificPopup != "undefined") {

					// close window
					parent.location.href = live_site+"/useraccount.php";
					parent.$.magnificPopup.instance.close();
				} 
				else { 
					location.href = live_site+"/useraccount.php";
					window.location.reload;
				}
			}
		  });
		
	}

	function onSuccess(googleUser) {
      console.log('Logged in as: ' + googleUser.getBasicProfile().getName());
    }
    function onFailure(error) {
      console.log(error);
    }

	function onGLoad() {

      gapi.load('auth2,signin2', function() {
        auth2 = gapi.auth2.init({
        client_id: google_client_id
      });
		
		attachSignin(document.getElementById('google'));

            // Rendering g-signin2 button.
            gapi.signin2.render('google', {
				'width': 90,
				'height': 30,
				'theme': 'dark'
            });

      });
    }
	
	function signOut() {
		var auth2 = gapi.auth2.getAuthInstance();
		auth2.signOut().then(function () {
		console.log('User signed out.');
		});
	}
	
	//https://developers.google.com/identity/sign-in/web/build-button
	function attachSignin(element) {
		
    //console.log(element.id);
    auth2.attachClickHandler(element, {},
        function(googleUser) {
        //
        onSignIn(googleUser);
          //document.getElementById('name').innerText = "Signed in: " +
            //  googleUser.getBasicProfile().getName();
        }, function(error) {
          console.log(JSON.stringify(error, undefined, 2));
        });
  }
