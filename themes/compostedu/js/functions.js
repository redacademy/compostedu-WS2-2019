// Function to togle search form on header
(function() {
    let searchIcon = document.getElementById('search-submit');
    searchIcon.onclick = function(event) {
        event.preventDefault();
        let searchForm = document.getElementById('search-input');
        let menu = document.getElementById('menu-icon');
        let logo = document.getElementById('logo');

        if ( document.querySelector('.hide-form') ) {
            logo.classList.remove('show');
            logo.classList.add('hide');
            console.log('this hides the logo');

            menu.classList.remove('show');
            menu.classList.add('hide');
            console.log('this hides the menu icon');

            searchForm.classList.remove('hide-form');
            searchForm.classList.add('show');
            console.log('this displays the form input');
        } 

        else {
            logo.classList.remove('hide');
            logo.classList.add('show');
            console.log('this display the logo');

            menu.classList.remove('hide');
            menu.classList.add('show');
            console.log('this display the menu icon');

            searchForm.classList.remove('show');
            searchForm.classList.add('hide-form');
            console.log('this hides the form input');
        }
    };
}());