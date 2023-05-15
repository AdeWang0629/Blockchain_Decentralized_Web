<!DOCTYPE html>
<html>
<head>
    <title>HTML Encryption using CryptoJS</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/crypto-js/4.1.1/crypto-js.min.js"></script>
    <style>
    </style>
</head>
<body>
    <h1>HTML Encryption using CryptoJS</h1>
    <form onsubmit="return false;">
        <label for="html-code">Enter your HTML code:</label><br>
        <textarea id="html-code" name="html-code" rows="10" cols="50"></textarea><br><br>
        <button type="button" onclick="encrypt()">Generate Encrypted URL</button>
        <button type="button" onclick="copyURL()">Copy URL to Clipboard</button>
    </form>
    <div id="encrypted-html"></div>
<div id="decrypted-html"></div>
<script>
    function encrypt() {
        var htmlCode = document.getElementById('html-code').value;
        var encrypted = CryptoJS.AES.encrypt(htmlCode, "SecretKey123");

        // Update the URL with the encrypted HTML using the pushState method
        if (history.pushState) {
            var path = "/site/" + encodeURIComponent(encrypted);
            window.history.pushState({path: path}, '', path);
            var url = window.location.origin + path;
            // Displaying encrypted URL to user
            document.getElementById('encrypted-url').innerHTML = '<p>Your encrypted URL:</p><pre>' + url + '</pre>';
        }
        
        // Clear existing HTML from decrypted-html div
        document.getElementById('decrypted-html').innerHTML = '';

        // Append a div element to the decrypted-html div
        var div = document.createElement('div');
        div.innerHTML = htmlCode;
        document.getElementById('decrypted-html').appendChild(div);

        

    function decrypt() {
        var urlParams = new URLSearchParams(window.location.search);
        var encryptedHtml = urlParams.get('encrypted-html');

        if (encryptedHtml) {
            var decrypted = CryptoJS.AES.decrypt(encryptedHtml, "SecretKey123");
            document.getElementById('decrypted-html').innerHTML = decrypted.toString(CryptoJS.enc.Utf8);
        }
    }

    function copyURL() {
        var encryptedURL = document.getElementById('encrypted-url').getElementsByTagName('pre')[0].textContent;
        navigator.clipboard.writeText(encryptedURL);
        alert('URL copied to clipboard!');
    }

    // Call the decrypt function on page load
    if (window.location.pathname.startsWith('/site/') && window.location.pathname.slice(6)) {
        var encrypted = decodeURIComponent(window.location.pathname.slice(6));
        var encryptedHtml = { 'encrypted-html': encrypted };

        // Decrypt and display the HTML code
        var decrypted = CryptoJS.AES.decrypt(encryptedHtml['encrypted-html'], "SecretKey123");
        document.getElementById('decrypted-html').innerHTML = decrypted.toString(CryptoJS.enc.Utf8);

        // Hide the form fields
        document.getElementById('html-code').style.display = 'none';
        document.querySelector('form button:first-of-type').style.display = 'none';
        document.querySelector('form button:last-of-type').style.display = 'inline-block';
    } else {
        document.querySelector('form button:first-of-type').style.display = 'inline-block';
    }
</script>
<div id="encrypted-url"></div>
</body> </html>