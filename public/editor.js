    $(document).ready(function() {
      var textarea = $('#html-code');
      var dropdown = $('#headings-dropdown');
      var dropdownContent = dropdown.find('.dropdown-content');
      var headings = ['h1', 'h2', 'h3', 'h4', 'h5', 'h6'];
      
      // Add event listener for button clicks
      $('button[data-tag!="a"]').click(function() {
        insertTag($(this).data('tag'), getSelectedText(textarea));
      });
      
      // Add event listener for hyperlink tag click
      $('button[data-tag="a"]').click(function() {
        var url = prompt('Enter URL:', 'https://');
        if (url) {
          insertTag('a', getSelectedText(textarea), ' href="' + url + '"');
        }
      });
      
      // Add event listener for dropdown clicks
      dropdownContent.on('click', 'a', function() {
        insertTag($(this).data('tag'), getSelectedText(textarea));
      });
      
      // Add event listener for textarea selection change
      textarea.on('mouseup keyup', function() {
        var start = textarea[0].selectionStart;
        var end = textarea[0].selectionEnd;
        var text = textarea.val();
        var selectedText = getSelectedText(textarea);
        
        // Update dropdown menu for headings
        dropdownContent.empty();
        for (var i = 0; i < headings.length; i++) {
          var heading = headings[i];
          var option = $('<a>').attr('href', '#').data('tag', heading).text(heading.toUpperCase());
          dropdownContent.append(option);
        }
        if (selectedText.length > 0) {
          dropdown.show();
          var selectedTextPos = textarea[0].offsetLeft + textarea[0].offsetWidth/2;
          dropdown.css('left', selectedTextPos);
        } else {
          dropdown.hide();
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