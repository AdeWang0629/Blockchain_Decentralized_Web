       function insertTextBeforeAndAfter(textBefore, textAfter) {
           var txtarea = document.getElementById("html-code");
           var start = txtarea.selectionStart;
           var end = txtarea.selectionEnd;
           var text = txtarea.value;
           var selectedText = text.substring(start, end);
           var newText = textBefore + selectedText + textAfter;
           txtarea.value = text.slice(0, start) + newText + text.slice(end);
       }

       function boldText() {
           insertTextBeforeAndAfter("<b>", "</b>");
       }

       function italicText() {
           insertTextBeforeAndAfter("<i>", "</i>");
       }

       function underlineText() {
           insertTextBeforeAndAfter("<u>", "</u>");
       }
       
       function paragraph() {
           insertTextBeforeAndAfter("<p>", "</p>");
       }
       function h1() {
           insertTextBeforeAndAfter("<h1>", "</h1>");
       }
       function h2() {
           insertTextBeforeAndAfter("<h2>", "</h2>");
       }
       function h3() {
           insertTextBeforeAndAfter("<h3>", "</h3>");
       }
       function h4() {
           insertTextBeforeAndAfter("<h4>", "</h4>");
       }
       function h5() {
           insertTextBeforeAndAfter("<h5>", "</h5>");
       }
       function h6() {
           insertTextBeforeAndAfter("<h6>", "</h6>");
       }

   function addLink() {
    var linkURL = prompt("Enter URL:", "https://");
    if (linkURL != null) {
        insertTextBeforeAndAfter('<a href="' + linkURL + '">', "</a>");
    }
}

       function addImage() {
           var imgURL = prompt("Enter image URL:", "https://");
           if (imgURL != null) {
               insertTextBeforeAndAfter('<img src="' + imgURL + '">', "");
           }
       }