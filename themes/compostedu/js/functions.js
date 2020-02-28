// Function to togle search form on header
(function() {
    let searchIcon = document.getElementById('search-submit');
    searchIcon.onclick = function(event) {
        event.preventDefault();
        let searchForm = document.getElementById('search-input');
        let menu = document.getElementById('menu-icon');
        let logo = document.getElementById('logo');
        let form = document.getElementById('form-wrapper');

        if ( document.querySelector('.hide-form') ) {
            logo.classList.remove('show');
            logo.classList.add('hide');
            // JS to hide menu

            menu.classList.remove('show');
            menu.classList.add('hide');
            // JS to hide menu icon

            form.classList.add('full-input-form');
            // JS to increase input's field width

            searchForm.classList.remove('hide-form');
            searchForm.classList.add('show');
            // JS to display form input
        } 

        else {
            logo.classList.remove('hide');
            logo.classList.add('show');
            // JS to display the logo

            menu.classList.remove('hide');
            menu.classList.add('show');
            // JS to display the menu icon

            form.classList.remove('full-input-form');
            // JS to remove css that would affect the menu design

            searchForm.classList.remove('show');
            searchForm.classList.add('hide-form');
            // JS to hide the form input
        }
    };
}());