<!DOCTYPE html>
<html>
<head>
	<title>Man Creator is One and He is Allah</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
	<script src="https://cdn.kiask.xyz/decentrealized-web/resources/js/decentrealizedweb.js"></script>
	<style>
	* {
  box-sizing: border-box;
  font-family: Arial, sans-serif;
}

body {
  background-color: #f9f9f9;
  margin: 0;
}

.container {
  max-width: 800px;
  margin: 0 auto;
  background-color: #fff;
  padding: 40px 50px;
  margin-top: 50px;
  border-radius: 10px;
  box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
}

h1 {
  text-align: center;
  font-size: 40px;
  margin-bottom: 20px;
}

p {
  font-size: 20px;
  line-height: 1.5;
}

.actions {
  display: flex;
  justify-content: flex-end;
  align-items: center;
  margin-top: 30px;
}

.actions a {
  display: inline-flex;
  align-items: center;
  padding: 10px 20px;
  border: none;
  background-color: #eeeeee;
  color: #333;
  text-decoration: none;
  font-size: 18px;
  margin-left: 10px;
  border-radius: 5px;
  cursor: pointer;
  transition: all 0.3s ease-in-out;
}

.actions a:hover {
  transform: translateY(-5px);
  box-shadow: 0px 5px 10px rgba(0, 0, 0, 0.2);
}

.share i {
  margin-right: 10px;
  color: #3b5998;
}

.bookmark i {
  margin-right: 10px;
  color: #ed8907;
}
	</style>
</head>
<body>
<div class="container">
      <h1><?php echo urldecode($_GET['title']); ?></h1>
      <p>This is my note. I’m writing some text here for my own reference.</p>
      <div class="actions">
        <a href="#" class="share"><i class="fas fa-share-square"></i> Share</a>
        <a href="#" class="bookmark"><i class="fas fa-bookmark"></i> Bookmark</a>
      </div>
    </div>
<div id="encrypted-html"></div>
<div id="man-creator-is-one-he-is-allah"></div>
<script>
	function encrypt() {
    var htmlCode = document.getElementById('html-code').value;
    var encrypted = CryptoJS.AES.encrypt(htmlCode, "ALLAH");

    // Displaying encrypted URL to user
    var url = window.location.origin + window.location.pathname + '?encrypted-html=' + encodeURIComponent(encrypted);
    document.getElementById('encrypted-url').innerHTML = '<p>Your Decentrealized Web URL:</p><pre>' + url + '</pre>';

    // Clear existing HTML from decrypted-html div
    document.getElementById('man-creator-is-one-he-is-allah').innerHTML = '';

    // Append a div element to the decrypted-html div
    var div = document.createElement('div');
    div.innerHTML = htmlCode;
    document.getElementById('man-creator-is-one-he-is-allah').appendChild(div);

    // Hide the form fields
    document.getElementById('html-code').style.display = 'none';
    document.querySelector('form button:first-of-type').style.display = 'none';
    document.querySelector('form button:last-of-type').style.display = 'inline-block';

    // Update the URL with the encrypted HTML using the pushState method
    if (history.pushState) {
        var newUrl = url;
        window.history.pushState({path: newUrl}, '', newUrl);
    }
}

function decrypt() {
    var path = window.location.pathname;
    var pathParts = path.split('/');

    if (pathParts[1] === 'note' && pathParts[2]) {
        var encryptedHtml = decodeURIComponent(pathParts[2]);
        var decrypted = CryptoJS.AES.decrypt(encryptedHtml, "ALLAH");
        var html = decrypted.toString(CryptoJS.enc.Utf8);
        document.getElementById('man-creator-is-one-he-is-allah').innerHTML = html;

        // Hide the form fields
        document.getElementById('html-code').style.display = 'none';
        document.querySelector('form button:first-of-type').style.display = 'none';
        document.querySelector('form button:last-of-type').style.display = 'none';
    } else {
        // Show the form fields
        document.getElementById('html-code').style.display = 'block';
        document.querySelector('form button:first-of-type').style.display = 'inline-block';
               document.querySelector('form button:last-of-type').style.display = 'none';
    }
}

function copyURL() {
    var encryptedURL = document.getElementById('encrypted-url').getElementsByTagName('pre')[0].textContent;
    navigator.clipboard.writeText(encryptedURL);
    alert('URL copied to clipboard!');
}

// Call the decrypt function on page load
decrypt();

// Hide the form fields if data is available in the URL
var pathParts = window.location.pathname.split('/');
if (pathParts[1] === 'note' && pathParts[2]) {
    document.getElementById('html-code').style.display = 'none';
    document.querySelector('form button:first-of-type').style.display = 'none';
    document.querySelector('form button:last-of-type').style.display = 'none';
} else {
    document.querySelector('form button:first-of-type').style.display = 'inline-block';
}
</script>
<script>
function decodeURLParam(param) {
  return decodeURIComponent(param.replace(/\+/g, ' '));
}

function getNoteTitle() {
  var query = window.location.search.substring(1);
  var params = query.split('&');
  for (var i = 0; i < params.length; i++) {
    var parts = params[i].split('=');
    if (parts[0] === 'title') {
      return decodeURLParam(parts[1]);
    }
  }
  return '';
}

function displayNoteTitle() {
  var noteTitle = getNoteTitle();
  document.querySelector('h1').textContent = noteTitle;
}

displayNoteTitle();
</script>
<div id="encrypted-url"></div> <div id="man-creator-is-one-he-is-allah"></div> </body> </html>