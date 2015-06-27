  



  // This is called with the results from from FB.getLoginStatus().
  function statusChangeCallback(response) {
    console.log('statusChangeCallback');
    console.log(response);

    // The response object is returned with a status field that lets the
    // app know the current login status of the person.
    // Full docs on the response object can be found in the documentation
    // for FB.getLoginStatus().
    if (response.status === 'connected') {
      // Logged into your app and Facebook.
      FB.api('/me', function(response) {
        console.log( response);
          $.ajax({
            url: sitesUrl.loginUrl,
            success:function(data){
              //alert("Fue un exito");
              window.location.href = sitesUrl.indexUrl;
            },
            data:{
              nombre: "admin",
              password: "admin",
              remember:"true",
            },
            type:"POST",
            dataType:"json",

          });
      });

    } else if (response.status === 'not_authorized') {
      // The person is logged into Facebook, but not your app.
    } else {
      // The person is not logged into Facebook, so we're not sure if
      // they are logged into this app or not.
      document.getElementById('status').innerHTML = 'Please log ' +
        'into Facebook.';
    }
  }

  // This function is called when someone finishes with the Login
  // Button.  See the onlogin handler attached to it in the sample
  // code below.
  function checkLoginState() {
    FB.getLoginStatus(function(response) {
      statusChangeCallback(response);
    });
  }

  window.fbAsyncInit = function() {
  FB.init({
    appId      : '649295885195991',
    cookie     : true,  // enable cookies to allow the server to access 
                        // the session
    xfbml      : true,  // parse social plugins on this page
    version    : 'v2.3' // use version 2.2
  });

  // Now that we've initialized the JavaScript SDK, we call 
  // FB.getLoginStatus().  This function gets the state of the
  // person visiting this page and can return one of three states to
  // the callback you provide.  They can be:
  //
  // 1. Logged into your app ('connected')
  // 2. Logged into Facebook, but not your app ('not_authorized')
  // 3. Not logged into Facebook and can't tell if they are logged into
  //    your app or not.
  //
  // These three cases are handled in the callback function.

  FB.getLoginStatus(function(response) {
    statusChangeCallback(response);
  });

  };

  /*
  *@Autor: Facebook API - https://developers.facebook.com/docs/facebook-login/login-flow-for-web/v2.3
  *@Descripcion: Funcion para abrir el recuadro de autenticacion con Facebook
  *
  */
  function facebookLogin() {
    FB.api('/me', function(response) {
      console.log('Successful login for: ' + response.name);
      console.log(response);
      window.location.href = sitesUrl.indexUrl;
    });

  }

  /*
  *@Autor: Facebook API - https://developers.facebook.com/docs/facebook-login/login-flow-for-web/v2.3
  *@Descripcion: Funcion para retirar permisos en la aplicacion
  *
  */
  function logOut(){
    FB.logout(function(response) {
          // Person is now logged out
      });
  }

  function openLoginDialog(){
    FB.login(function(response){
      scope: 'public_profile,email,user_friends' // estos son los permisos que necesita la aplicacion
        console.log("Esta es la respuesta");
        console.log(response);
        window.location.href = sitesUrl.indexUrl;

    });
  }

  // Load the SDK asynchronously
  (function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/en_US/sdk.js";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));

  // Here we run a very simple test of the Graph API after login is
  // successful.  See statusChangeCallback() for when this call is made.
  function testAPI() {
    console.log('Welcome!  Fetching your information.... ');
    FB.api('/me', function(response) {
      console.log('Successful login for: ' + response.name);
    });
  }