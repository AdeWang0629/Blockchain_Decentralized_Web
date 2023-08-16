var content = document.documentElement.outerHTML;
function encrypt() {
            // Get the content to be encrypted
            var contentToEncrypt = content;

            // Encrypt the content using CryptoJS
            var encrypted = CryptoJS.AES.encrypt(contentToEncrypt, "ALLAH").toString();

            // Display the encrypted HTML to the user
           // var encryptedHtmlElement = document.getElementById('encrypted-html');
           // encryptedHtmlElement.innerText = encrypted;

            // Creating a link to open the encrypted HTML in a new tab
            var openLinkElement = document.getElementById('d-web-link');
            openLinkElement.href = 'https://decentralized-web.vercel.app/site/' + encodeURIComponent(encrypted);
            openLinkElement.style.display = 'inline';
        }