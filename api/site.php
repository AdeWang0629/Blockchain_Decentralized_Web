<!DOCTYPE html>
<html>
<head>
    <title>Encrypted HTML</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/crypto-js/4.1.1/crypto-js.min.js"></script>
</head>
<body>
    <h1>Encrypted HTML</h1>
    <h2>No form</h2>
    <div id="decrypted-html"></div>

    <script>
        function decrypt() {
            var urlParams = new URLSearchParams(window.location.search);
            var encryptedHtml = urlParams.get("encrypted-html");

            if (encryptedHtml) {
                var decrypted = CryptoJS.AES.decrypt(encryptedHtml, "SecretKey123");
                document.getElementById("decrypted-html").innerHTML = decrypted.toString(CryptoJS.enc.Utf8);
            }
        }

        // Call the decrypt function on page load
        decrypt();
    </script>
</body>
</html>
