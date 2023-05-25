<!-- La Ilaha Illallah Mohammadur Rasulullah -->
<!DOCTYPE html>
<html>
   <head>
      <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Decentrealized Web - A More Secure, Private, and Free Anonymous Internet</title>
        <link rel="icon" type="image/png" href="favicon.png">
        <meta name="description" content="Create and manage your own decentrealized website with ease using our Web-3 powered CMS. Experience the benefits of a more secure, private, and free internet. Get started today and join the movement towards a decentrealized web!">
        <meta name="keywords" content="decentrealized web, web3, internet freedom, online privacy, anonymous internet">
    <script src="https://cdn.kiask.xyz/decentrealized-web/resources/js/decentrealizedweb.js"></script>
    <link rel="stylesheet"
          id="theme_link"
          href="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/4.3.1/materia/bootstrap.min.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/mladenplavsic/bootstrap-navbar-sidebar@master/docs/navbar-fixed-right.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/mladenplavsic/bootstrap-navbar-sidebar@master/docs/navbar-fixed-left.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/mladenplavsic/bootstrap-navbar-sidebar@master/docs/docs.css">
    <link rel="stylesheet" href="https://cdn.kiask.xyz/decentrealized-web/resources/css/style.css">
    <script
            src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/mladenplavsic/bootstrap-navbar-sidebar@master/docs/docs.js"></script>
    <script async defer src="https://buttons.github.io/buttons.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"></script>
 <style>
  .bgray {
    --tw-bg-opacity: 1;
    background-color: #f3f4f6;
    background-color: rgb(243 244 246/var(--tw-bg-opacity)) !important;
}
  .navbar a{
    --tw-text-opacity: 1;
    color: #111827 !important;
    color: rgb(17 24 39/var(--tw-text-opacity)) !important;
}
  .bg-white {
    --tw-bg-opacity: 1;
    background-color: #fff !important;
    background-color: rgb(255 255 255/var(--tw-bg-opacity)) !important;
}
  .navbar-dark .navbar-toggler-icon {
    background-image: url("data:image/svg+xml,%3csvg viewBox='0 0 30 30' xmlns='http://www.w3.org/2000/svg'%3e%3cpath stroke='rgba(17, 24, 39, 0.8)' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e") !important;
}
 </style>
   </head>
   <body>
      <nav style="padding:0px !important;padding-left:1rem !important;padding-right:1rem !important;box-shadow:unset !important;" class="navbar navbar-expand-md navbar-dark bg-primary fixed-top prl-1r bgray">
         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault"
            aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
         </button>
         <a style="margin-right:4rem;" class="navbar-brand" href="/"><img class="h-4rem w-100" src="https://cdn.kiask.xyz/decentrealized-web/images/decentrealized-web.png" alt="Decentrealized Web"></a>
         <div class="collapse navbar-collapse bg-white" id="navbarsExampleDefault">
            <ul class="navbar-nav">
               <li class="nav-item">
                  <a class="nav-link" href="/">Home</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="https://dub.sh/about-us">About Decentrealized Web</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="https://dub.sh/support-us">Support Movement</a>
               </li>
               <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Plugins</a>
                  <div class="dropdown-menu">
                     <a class="dropdown-item" href="/decentrealizednotes">Decentrealized Notes</a>
                  </div>
               </li>
            </ul>
            <ul class="navbar-nav">
               <li class="nav-item">
                  <a class="nav-link" data-toggle="modal" data-target="#exampleModalCenter">
                  <i class="fa fa-arrow-left"></i>
                  Settings
                  </a>
               </li>
            </ul>
         </div>
      </nav>
      <!-- Content --->
      <div class="container">
      <div class="row">
      <div class="col">
         <div class="row">
            <div class="col">
               <button class="btn btn-secondary" data-toggle="collapse" data-target="#headings">Headings</button>
               <button id="link-btn" class="btn btn-secondary" onclick="addLink()">Links</button>
               <button id="image-btn" class="btn btn-secondary" onclick="addImage()">Images</button>
               <button class="btn btn-secondary" data-toggle="modal" data-target="#help">Help</button>
            </div>
         </div>
         <div class="row">
            <div class="col">
               <div id="headings" class="collapse">
                  <button class="btn btn-secondary" onclick="h1()">H1</button>
                  <button class="btn btn-secondary" onclick="h2()">H2</button>
                  <button class="btn btn-secondary" onclick="h3()">H3</button>
                  <button class="btn btn-secondary" onclick="h4()">H4</button>
                  <button class="btn btn-secondary" onclick="h5()">H5</button>
                  <button class="btn btn-secondary" onclick="h6()">H6</button>
               </div>
            </div>
         </div>
         <div class="row">
            <div class="col">
               <form onsubmit="return false;">
                  <textarea class="textarea" id="html-code" name="html-code" contenteditable="true" rows="10"></textarea>
                  <br><br>
                  <div class="button-at">
                     <button class="button-publish" type="button" onclick="encrypt()">
                     <i class="iconify" data-icon="game-icons:peace-dove"></i> Peace
                     </button>
                     <button class="button-copy" type="button" onclick="copyURL()">
                     <i class="iconify" data-icon="bi:clipboard"></i> Copy URL to Clipboard
                     </button>
                  </div>
               </form>
            </div>
         
      <script>
         function encrypt() {
    var htmlCode = document.getElementById('html-code').value;
    var encrypted = CryptoJS.AES.encrypt(htmlCode, "ALLAH");

    // Update the URL with the encrypted HTML using the pushState method
    if (history.pushState) {
        var path = "/site/" + encodeURIComponent(encrypted);
        window.history.pushState({ path: path }, '', path);
        var url = window.location.origin + path;

        // Displaying encrypted URL to user
        document.getElementById('encrypted-url').innerHTML = '<p>Your Decentralized Web URL:</p><pre>' + url + '</pre>';
         
        // Displaying encrypted HTML to user
        document.getElementById('encrypted-data').innerHTML = '<p>Your Encrypted HTML:</p><pre>' + encrypted + '</pre>'; 
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
         if (window.location.pathname.startsWith('/site/') && window.location.pathname.slice(9)) {
             var encrypted = decodeURIComponent(window.location.pathname.slice(9));
             var encryptedHtml = { 'encrypted-html': encrypted };
         
             // Update the URL with the encrypted HTML using the pushState method
             if (history.pushState) {
                 window.history.replaceState({}, '', '/site/' + encodeURIComponent(encrypted));
             }
         
             // Displaying encrypted URL to user
             var url = window.location.origin + window.location.pathname;
             document.getElementById('encrypted-url').innerHTML = '<p>Your Decentrealized Web URL:</p><pre>' + url + '</pre>';
         
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
      </script>
   </body>
</html>