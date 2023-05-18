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
    <link rel="stylesheet" href="../public/set/css/style.css">
    <script
            src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/mladenplavsic/bootstrap-navbar-sidebar@master/docs/docs.js"></script>
    <script async defer src="https://buttons.github.io/buttons.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"></script>
<script src="https://code.iconify.design/2/2.0.3/iconify.min.js"></script>
<script src="../public/set/js/system.js"></script>
<script src="../public/set/js/editor.js"></script>
 <style>
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
                <a class="nav-link" href="https://dub.sh/about-us">About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="https://dub.sh/support-us">Support Movement</a>
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
        <textarea class="textarea" id="html-code" name="html-code" contenteditable="true" rows="10"></textarea><br><br>
        <div class="button-at">
        <button class="button-publish" type="button" onclick="encrypt()">
  <i class="iconify" data-icon="game-icons:peace-dove"></i> Publish
</button>
<button class="button-copy" type="button" onclick="copyURL()">
  <i class="iconify" data-icon="bi:clipboard"></i> Copy URL to Clipboard
</button>
</div>
    </form>
    </div>
  </div>
  <div id="man-creator-is-one-he-is-allah"></div>
<div class="editor-buttons">
  <div class="row">
    <div class="col">
      <button class="btn btn-primary" onclick="boldText()">Bold</button>
      <button class="btn btn-primary" onclick="italicText()">Italic</button>
      <button class="btn btn-primary" onclick="underlineText()">Underline</button>
      <button class="btn btn-primary" onclick="paragraph()">Paragraph</button>
    </div>
  </div>
</div>  

<!-- Modal for Help -->
<div class="modal fade" id="help">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Know What You Want to Know</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
        
      </div>
    </div>
  </div>
</div>
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
<div class="preview" id="preview">
<div id="encrypted-url"></div>
</div>
<div class="footer"></div>
</body>
</html>