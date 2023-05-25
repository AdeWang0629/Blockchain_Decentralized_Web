function encrypt() {
             var htmlCode = document.getElementById('html-code').value;
             var noteTitle = document.getElementById('note-title').value;
             var encrypted = CryptoJS.AES.encrypt(htmlCode, "ALLAH");
         
             // Update the URL with the encrypted HTML using the pushState method
             if (history.pushState) {
                 var path = "/note/" + encodeURIComponent(encrypted);
                 window.history.pushState({path: path}, '', path);
                 var url = window.location.origin + path;
                 // Displaying encrypted URL to user
                 document.getElementById('encrypted-url').innerHTML = '<p>Your Decentrealized Note URL:</p><pre>' + url + '</pre>';
             }
             
             // Clear existing HTML from decrypted-html div
             document.getElementById('man-creator-is-one-he-is-allah').innerHTML = '';
         
             // Append a div element to the decrypted-html div
             var div = document.createElement('div');
             div.innerHTML = htmlCode;
             document.getElementById('man-creator-is-one-he-is-allah').appendChild(div);
         
             // Hide the form fields
             document.getElementById('html-code').style.display = 'block';
             document.querySelector('form button:first-of-type').style.display = 'block';
             document.querySelector('form button:last-of-type').style.display = 'inline-block';
         }
         
         function decrypt() {
             var urlParams = new URLSearchParams(window.location.search);
             var encryptedHtml = urlParams.get('encrypted-html');
         
             if (encryptedHtml) {
                 var decrypted = CryptoJS.AES.decrypt(encryptedHtml, "ALLAH");
                 document.getElementById('man-creator-is-one-he-is-allah').innerHTML = decrypted.toString(CryptoJS.enc.Utf8);
             }
         }
         
         function copyURL() {
             var encryptedURL = document.getElementById('encrypted-url').getElementsByTagName('pre')[0].textContent;
             navigator.clipboard.writeText(encryptedURL);
             alert('URL copied to clipboard!');
         }
         
         // Call the decrypt function on page load
         if (window.location.pathname.startsWith('/note/') && window.location.pathname.slice(9)) {
             var encrypted = decodeURIComponent(window.location.pathname.slice(9));
             var encryptedHtml = { 'encrypted-html': encrypted };
         
             // Update the URL with the encrypted HTML using the pushState method
             if (history.pushState) {
                 window.history.replaceState({}, '', '/note/' + encodeURIComponent(encrypted));
             }
         
             // Displaying encrypted URL to user
             var url = window.location.origin + window.location.pathname;
             document.getElementById('encrypted-url').innerHTML = '<p>Your Decentrealized Note URL:</p><pre>' + url + '</pre>';
         
             // Decrypt and display the HTML code
             var decrypted = CryptoJS.AES.decrypt(encryptedHtml['encrypted-html'], "ALLAH");
             document.getElementById('man-creator-is-one-he-is-allah').innerHTML = decrypted.toString(CryptoJS.enc.Utf8);
         
             // Hide the form fields
             document.getElementById('html-code').style.display = 'block';
             document.querySelector('form button:first-of-type').style.display = 'block';
             document.querySelector('form button:last-of-type').style.display = 'inline-block';
         } else {
             document.querySelector('form button:first-of-type').style.display = 'inline-block';
         }