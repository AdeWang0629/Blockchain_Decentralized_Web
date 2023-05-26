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