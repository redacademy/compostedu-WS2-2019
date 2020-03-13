/**
 * File navigation.js.
 *
 * Handles toggling the navigation menu for small screens and enables TAB key
 * navigation support for dropdown menus.
 */
(function() {
  let container, button, menu, links, i, len;

  container = document.getElementById('site-navigation');
  if (!container) {
    return;
  }

  button = container.getElementsByTagName('button')[0];
  if ('undefined' === typeof button) {
    return;
  }

  menu = container.getElementsByTagName('ul')[0];

  // Hide menu toggle button if menu is empty and return early.
  if ('undefined' === typeof menu) {
    button.style.display = 'none';
    return;
  }

  menu.setAttribute('aria-expanded', 'false');
  if (-1 === menu.className.indexOf('nav-menu')) {
    menu.className += ' nav-menu';
  }

  button.onclick = function() {
    if (-1 !== container.className.indexOf('toggled')) {
      container.className = container.className.replace(' toggled', '');
      button.setAttribute('aria-expanded', 'false');
      menu.setAttribute('aria-expanded', 'false');
    } else {
      container.className += ' toggled';
      button.setAttribute('aria-expanded', 'true');
      menu.setAttribute('aria-expanded', 'true');
    }
  };

  // Get all the link elements within the menu.
  // links = menu.getElementsByTagName('a');

  // Each time a menu link is focused or blurred, toggle focus.
  // for (i = 0, len = links.length; i < len; i++) {
  //   links[i].addEventListener('focus', toggleFocus, true);
  // }

  /**
   * Sets or removes .focus class on an element.
   */
  function toggleFocus() {
    let self = this;

    // Move up through the ancestors of the current link until we hit .nav-menu.
    while (-1 === self.className.indexOf('nav-menu')) {
      // On li elements toggle the class .focus.
      
      // if ('li' === self.tagName.toLowerCase()) {
      //   if (-1 !== self.className.indexOf('focus')) {
      //     self.className = self.className.replace(' focus', '');
      //   } else {
      //     self.className += ' focus';
      //   }
      // }

      self = self.parentElement;
    }
  }

  /**
   * Toggles `focus` class to allow submenu access on tablets.
   */
  // (function(container) {
    // let touchStartFn,
    //   i,
    //   parentLink = container.querySelectorAll(
    //     '.menu-item-has-children > a, .page_item_has_children > a'
    //   );

    // if ('ontouchstart' in window) {
    //   touchStartFn = function(e) {
    //     let menuItem = this.parentNode,
    //       i;

    //     if (!menuItem.classList.contains('focus')) {
    //       e.preventDefault();
    //       for (i = 0; i < menuItem.parentNode.children.length; ++i) {
    //         if (menuItem === menuItem.parentNode.children[i]) {
    //           continue;
    //         }
    //         menuItem.parentNode.children[i].classList.remove('focus');
    //       }
    //       menuItem.classList.add('focus');
    //     } else {
    //       menuItem.classList.remove('focus');
    //     }
    //   };

    //   for (i = 0; i < parentLink.length; ++i) {
    //     parentLink[i].addEventListener('touchstart', touchStartFn, false);
    //   }
    // }
  // })(container);
})();

// Remove href from 'li's to change them to titles
jQuery('li ul').siblings('a').removeAttr('href');

// Add Arro Right icon to 'li's that have a sub-menu
jQuery("li ul").siblings("a").append('<img id="arrow-right" src="' + compostedu_vars.directory + '/images/header/arrow-right.svg" alt="Arrow Right">');

// Function to toggle sub-menus when icon is clicked
(function() {
    let menuIcon = document.getElementById('arrow-right');
    menuIcon.onclick = function(toggle_menu) {
        toggle_menu.preventDefault();
        let menuItems = document.getElementById('menu-bar');

        if(document.querySelector('.hide-menu')) {
            menuItems.classList.remove('hide-menu');
            menuItems.classList.add('show');
            // JS to display menu items
        }
        else {
            menuItems.classList.remove('show');
            menuItems.classList.add('hide-menu');
            // JS to hide menu items
        }
    }
}());