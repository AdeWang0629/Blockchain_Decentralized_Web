    // Load saved theme and sidebar position from cookies
    function loadSettings() {
      var cookies = document.cookie.split("; ");
      for (var i = 0; i < cookies.length; i++) {
        var keyValue = cookies[i].split("=");
        if (keyValue[0] === "theme") {
          document.getElementById("theme_select").value = keyValue[1];
          selectTheme(keyValue[1]);
        }
        if (keyValue[0] === "sidebarPosition") {
          var buttons = document.querySelectorAll('.btn-group > button');
          for (var j = 0; j < buttons.length; j++) {
            if (buttons[j].getAttribute('data-class') === keyValue[1]) {
              buttons[j].classList.add('active');
            } else {
              buttons[j].classList.remove('active');
            }
          }
          document.body.className = keyValue[1];
        }
      }
    }

    // Save selected theme and sidebar position as cookies
    function saveSettings() {
      // Get the selected value of the theme_select element
      var theme = document.getElementById("theme_select").value;

      // Get the selected value of the sidebar position and save it as a cookie
      var sidebarPosition = document.querySelector('.btn-group > .active').getAttribute('data-class');
      document.cookie = "sidebarPosition=" + sidebarPosition + "; expires=Fri, 31 Dec 9999 23:59:59 GMT; path=/";

      // Save the theme value as a cookie
      document.cookie = "theme=" + theme + "; expires=Fri, 31 Dec 9999 23:59:59 GMT; path=/";
    }

    // Call the loadSettings function when the page is loaded
    window.onload = loadSettings;