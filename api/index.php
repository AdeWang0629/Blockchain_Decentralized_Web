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
<script src="../public/editor.js"></script>
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


/* Editor */
.dropdown {
      display: inline-block;
      position: relative;
    }
    .dropdown-content {
      display: none;
      position: absolute;
      top: 25px;
      left: 0;
      background-color: #f9f9f9;
      min-width: 160px;
      box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
      z-index: 1;
    }
    .dropdown:hover .dropdown-content {
      display: block;
    }
    .dropdown-content a {
      color: black;
      padding: 12px 16px;
      text-decoration: none;
      display: block;
    }
    .dropdown-content a:hover {
      background-color: #f1f1f1;
    }
    .selected-text {
      background-color: #ffff00;
    }
    .image-form input {
      margin-bottom: 10px;
    }
 </style>
</head>
<body>

<nav style="padding:0px !important;padding-left:1rem !important;padding-right:1rem !important;box-shadow:unset !important;" class="navbar navbar-expand-md navbar-dark bg-primary fixed-top prl-1r bgray">
    
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault"
            aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <a style="margin-right:4rem;" class="navbar-brand" href><img class="h-4rem w-100" src="https://cdn.kiask.xyz/decentrealized-web/images/decentrealized-web.png" alt="Decentrealized Web"></a>

    <div class="collapse navbar-collapse bg-white" id="navbarsExampleDefault">
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
        <label for="html-code">Content:</label><br>
       <div class="dropdown" id="headings-dropdown">
    <button class="dropbtn">Headings</button>
    <div class="dropdown-content">
      <a href="#" data-tag="h1">H1</a>
      <a href="#" data-tag="h2">H2</a>
      <a href="#" data-tag="h3">H3</a>
      <a href="#" data-tag="h4">H4</a>
      <a href="#" data-tag="h5">H5</a>
      <a href="#" data-tag="h6">H6</a>
    </div>
  </div> <button data-tag="a">Link</button> <button data-tag="b">Bold</button> <button data-tag="i">Italic</button> <button data-tag="u">Underline</button> <button data-tag="img">Image</button> <button data-tag="meta">Meta</button> <div class="modal fade" tabindex="-1" role="dialog" id="meta-modal"> <div class="modal-dialog" role="document"> <div class="modal-content"> <div class="modal-header"> <h5 class="modal-title">Meta Head Fields</h5> <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button> </div> <div class="modal-body"> <form id="meta-form" class="image-form"> <div class="form-group"> <label for="title-input">Title:</label> <input type="text" class="form-control" id="title-input" name="title"> </div> <div class="form-group"> <label for="description-input">Description:</label> <input type="text" class="form-control" id="description-input" name="description"> </div> <div class="form-group"> <label for="author-input">Author:</label> <input type="text" class="form-control" id="author-input" name="author"> </div> <div class="form-group"> <label for="keywords-input">Keywords:</label> <input type="text" class="form-control" id="keywords-input" name="keywords"> </div> <div class="form-group"> <label for="charset-input">Charset:</label> <input type="text" class="form-control" id="charset-input" name="charset"> </div> </form> </div> <div class="modal-footer"> <button type="button" class="btn btn-primary" id="meta-submit">OK</button> <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button> </div> </div> </div> </div>
        <textarea id="html-code" name="html-code"></textarea><br><br>
        <button type="button" onclick="encrypt()">Publish</button>
        <button type="button" onclick="copyURL()">Copy URL to Clipboard</button>
    </form>
    <div id="encrypted-html"></div>
<div id="man-creator-is-one-he-is-allah"></div>
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
    $(document).ready(function() {
      var textarea = $('#html-code');
      var headingsDropdown = $('#headings-dropdown');
      var headingsDropdownContent = headingsDropdown.find('.dropdown-content');
      var nonHeadingsButtons = $('button:not([data-tag="h1"], [data-tag="h2"], [data-tag="h3"], [data-tag="h4"], [data-tag="h5"], [data-tag="h6"], [data-tag="meta"], [data-tag="title"], [data-tag="img"])');
      var metaModal = $('#meta-modal');
      
      // Add event listener for button clicks
      nonHeadingsButtons.click(function() {
        insertTag($(this).data('tag'), getSelectedText(textarea));
      });

      // Add event listener for hyperlink tag click
      $('button[data-tag="a"]').click(function() {
        var url = prompt('Enter URL:', 'http://');
        if (url) {
          insertTag('a', getSelectedText(textarea), ' href="' + url + '"');
        }
      });

      // Add event listener for image tag click
      $('button[data-tag="img"]').click(function() {
        var url = prompt('Enter image URL:', 'http://');
        if (url) {
          insertTag('img', '', ' src="' + url + '"');
        }
      });

      // Add event listener for meta tag click
      $('button[data-tag="meta"]').click(function() {
        metaModal.modal('show');
      });

      // Add event listener for meta modal submit button click
      $('#meta-submit').click(function() {
        var form = $('#meta-form');
        var title = form.find('input[name="title"]').val();
        var description = form.find('input[name="description"]').val();
        var author = form.find('input[name="author"]').val();
        var keywords = form.find('input[name="keywords"]').val();
        var charset = form.find('input[name="charset"]').val();

        if (title.length > 0) {
          insertTag('title', title);
        }
        if (description.length > 0) {
          insertTag('meta', '', ' name="description" content="' + description + '"');
        }
        if (author.length > 0) {
          insertTag('meta', '', ' name="author" content="' + author + '"');
        }
        if (keywords.length > 0) {
          insertTag('meta', '', ' name="keywords" content="' + keywords + '"');
        }
        if (charset.length > 0) {
          insertTag('meta', '', ' charset="' + charset + '"');
        }

        metaModal.modal('hide');
      });

      // Add event listener for dropdown clicks
      headingsDropdownContent.on('click', 'a', function() {
        insertTag($(this).data('tag'), getSelectedText(textarea));
      });

      // Add event listener for textarea selection change
      textarea.on('mouseup keyup', function() {
        var start = textarea[0].selectionStart;
        var end = textarea[0].selectionEnd;
        var text = textarea.val();
        var selectedText = getSelectedText(textarea);
        var hasText = (text.length > 0 && text.replace(/<\/?[^>]+(>|$)/g, '').length > 0);
        var headings = ['h1', 'h2', 'h3', 'h4', 'h5', 'h6'];

        // Update dropdown menu for headings
        headingsDropdownContent.empty();
        for (var i = 0; i < headings.length; i++) {
          var heading = headings[i];
          var option = $('<a>').attr('href', '#').data('tag', heading).text(heading.toUpperCase());
          headingsDropdownContent.append(option);
        }
        if (selectedText.length > 0) {
          headingsDropdown.show();
          var selectedTextPos = textarea[0].offsetLeft + textarea[0].offsetWidth/2;
          headingsDropdown.css('left', selectedTextPos);
        } else if (hasText) {
          headingsDropdown.show();
          var textPos = textarea[0].offsetLeft + textarea[0].offsetWidth/2;
          headingsDropdown.css('left', textPos);
        } else {
          headingsDropdown.hide();
        }

        // Highlight selected text
        var newText = text.replace('<span class="selected-text">', '').replace('</span>', '');
        if (selectedText.length > 0) {
          newText = newText.slice(0, start) + '<span class="selected-text">' + newText.slice(start, end) + '</span>' + newText.slice(end);
        }
        textarea.val(newText);
      });

      function insertTag(tag, selectedText, attributes) {
        if (attributes === undefined) {
          attributes = '';
        }
            var start = textarea[0].selectionStart;
    var end = textarea[0].selectionEnd;
    var text = textarea.val();
    var newText = text.slice(0, start) + '<' + tag + attributes + '>' + selectedText + '</' + tag + '>' + text.slice(end);
    textarea.val(newText);
  }

  function getSelectedText() {
    var start = textarea[0].selectionStart;
    var end = textarea[0].selectionEnd;
    var text = textarea.val();
    var selectedText = text.slice(start, end);
    return selectedText;
  }
});

</script>


<script>
    function encrypt() {
        var htmlCode = document.getElementById('html-code').value;
        var encrypted = CryptoJS.AES.encrypt(htmlCode, "ALLAH");

        // Update the URL with the encrypted HTML using the pushState method
        if (history.pushState) {
            var path = "/site/" + encodeURIComponent(encrypted);
            window.history.pushState({path: path}, '', path);
            var url = window.location.origin + path;
            // Displaying encrypted URL to user
            document.getElementById('encrypted-url').innerHTML = '<p>Your encrypted URL:</p><pre>' + url + '</pre>';
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
<script type="text/javascript">
 $('#modal').on('shown.bs.modal', function () {
  $('#myInput').trigger('focus')
})
</script>
<div id="encrypted-url"></div>
</body>
</html>