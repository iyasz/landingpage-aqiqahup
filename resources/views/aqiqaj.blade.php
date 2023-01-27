<html>
<head>
<title></title>

<script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>


<SCRIPT type="text/javascript" lang="javascript" src="https://cdns.us1.gigya.com/js/gigya.js?apiKey=3_WugZyXF_o91-d760s2bvkQvEE5HN5_A3PAJ8-5dPThh10vYX6sZh5aN5akX7bsiQ&lang=id"></SCRIPT>
</head>
<body>
<div id="runningCodeExample" style="border: 1px solid skyblue; padding: 15px; width: 300px;">
<a href="#" onclick="gigya.accounts.showScreenSet({screenSet:'growhappy-id-RegistrationLogin-wt'});">Login</a>&nbsp;&nbsp;|&nbsp;&nbsp;
<a href="#" onclick="gigya.accounts.showScreenSet({screenSet:'growhappy-id-RegistrationLogin-wt', startScreen:'gigya-register-screen'});">Register</a>
</br></br></br>
<a href="#" onclick="gigya.accounts.showScreenSet({screenSet:'growhappy-id-RegistrationLogin-wt'});">Edit Your Profile</a>
</br></br></br>
<a href="#" onclick="gigya.accounts.logout({callback:onLogout});">Logout</a>
<script>
function onLogout(response) {
if ( response.errorCode == 0 ) {
alert('You are now logged out');
}
else {
alert('Error :' + response.errorMessage);
}
}
</script></div>
</body></html>