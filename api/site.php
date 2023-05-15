<?php
$encrypted = '';
if (isset($_SERVER['PATH_INFO'])) {
    $encrypted = substr($_SERVER['PATH_INFO'], 1);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>HTML Encryption using CryptoJS</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/crypto-js/4.1.1/crypto-js.min.js"></script>
    <style>
    </style>
</head>
<body onload="decrypt()">
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
            // Displaying encrypted URL to the user
            document.getElementById('encrypted-url').innerHTML = '<p>Your encrypted URL:</p><pre>' + url + '</pre>';
        }

        // Clear existing HTML from decrypted-html div
        document.getElementById('decrypted-html').innerHTML = '';

        // Append a div element to the decrypted-html div
        var div = document.createElement('div');
        div.innerHTML = htmlCode;
        document.getElementById('decrypted-html').appendChild(div);

        // Hide the form fields
        document.getElementById('html-code').style.display = 'none';
        document.querySelector('form button:first-of-type').style.display = 'none';
        document.querySelector('form button:last-of-type').style.display = 'inline-block';
    }

    function decrypt() {
        <?php if ($encrypted) { ?>
        // Decrypt the encrypted HTML code and write it to the decrypted-html div
        var decrypted = CryptoJS.AES.decrypt(de        codeURI('<?php echo $encrypted ?>')), "SecretKey123");
        document.getElementById('decrypted-html').innerHTML = decrypted.toString(CryptoJS.enc.Utf8);
        <?php } ?>
    }

    function copyURL() {
        var encryptedURL = document.getElementById('encrypted-url').getElementsByTagName('pre')[0].textContent;
        navigator.clipboard.writeText(encryptedURL);
        alert('URL copied to clipboard!');
    }

    // Call the decrypt function on page load
    decrypt();
</script>
<div id="encrypted-url"></div>
</body> </html>