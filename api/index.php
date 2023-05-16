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
      <link href="https://getbootstrap.com/4.3.1/assets/css/bootstrap.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/mladenplavsic/bootstrap-navbar-sidebar@master/docs/navbar-fixed-left.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/mladenplavsic/bootstrap-navbar-sidebar@master/docs/docs.css">
    <script
            src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/mladenplavsic/bootstrap-navbar-sidebar@master/docs/docs.js"></script>
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <style>
    .h-4rem {
    height:4rem !important;
    };
    .w-100 {
    width:100%;
    };
    .prl-1r {
    padding-left: 1rem;
    padding-right: 1rem;
    };
    nav.navbar.navbar-expand-md.navbar-dark.bg-primary.px-4.px-0.fixed-left {
    padding: 0;
    };    
    </style>
</head>
<body>

<nav class="navbar navbar-expand-md navbar-dark bg-primary fixed-top prl-1r">
    <a class="navbar-brand" href><img class="h-4rem w-100" src="https://cdn.kiask.xyz/decentrealized-web/images/decentrealized-web.png" alt="Decentrealized Web"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault"
            aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link">About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link">Contact</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                <div class="dropdown-menu">
                    <a class="dropdown-item">Action</a>
                    <a class="dropdown-item">Another action</a>
                    <a class="dropdown-item">Something else here</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item">Separated link</a>
                    <a class="dropdown-item">One more separated link</a>
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
<div class="container">
 <form onsubmit="return false;">
        <label for="html-code">Enter your HTML code:</label><br>
        <textarea id="html-code" name="html-code" rows="10" cols="50"></textarea><br><br>
        <button type="button" onclick="encrypt()">Generate Encrypted URL</button>
        <button type="button" onclick="copyURL()">Copy URL to Clipboard</button>
    </form>
    <div id="encrypted-html"></div>
<div id="decrypted-html"></div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Settings</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
        <div class="btn-group" role="group">
            <button type="button" data-class="fixed-left" class="btn btn-primary">
                <i class="fa fa-arrow-left"></i>
                Fixed Left
            </button>
            <button type="button" data-class="fixed-top" class="btn btn-primary">
                <i class="fa fa-arrow-up"></i>
                Fixed Top
                <small>(original)</small>
            </button>
            <button type="button" data-class="fixed-right" class="btn btn-primary">
                <i class="fa fa-arrow-right"></i>
                Fixed Right
            </button>
        </div>
        <div class="card">
        <div class="card-body">
            <div class="form-group">
                <label>
                    Select another bootstrap theme from
                    <a href="https://bootswatch.com/" target="_blank">Bootswatch</a>
                </label>
                <select class="form-control width-md" id="theme_select" onchange="selectTheme(value)"></select>
            </div>
        </div>
    </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
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

        // Hide the form fields
        document.getElementById('html-code').style.display = 'block';
        document.querySelector('form button:first-of-type').style.display = 'block';
        document.querySelector('form button:last-of-type').style.display = 'inline-block';
    }

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

        // Update the URL with the encrypted HTML using the pushState method
        if (history.pushState) {
            window.history.replaceState({}, '', '/site/' + encodeURIComponent(encrypted));
        }

        // Displaying encrypted URL to user
        var url = window.location.origin + window.location.pathname;
        document.getElementById('encrypted-url').innerHTML = '<p>Your encrypted URL:</p><pre>' + url + '</pre>';

        // Decrypt and display the HTML code
        var decrypted = CryptoJS.AES.decrypt(encryptedHtml['encrypted-html'], "SecretKey123");
        document.getElementById('decrypted-html').innerHTML = decrypted.toString(CryptoJS.enc.Utf8);

        // Hide the form fields
        document.getElementById('html-code').style.display = 'block';
        document.querySelector('form button:first-of-type').style.display = 'block';
        document.querySelector('form button:last-of-type').style.display = 'inline-block';
    } else {
        document.querySelector('form button:first-of-type').style.display = 'inline-block';
    }
</script>
<script type="text/javascript">
 $('#modal').on('shown.bs.modal', function () {
  $('#myInput').trigger('focus')
})
</script>
<div id="encrypted-url"></div>
</body>
</html>