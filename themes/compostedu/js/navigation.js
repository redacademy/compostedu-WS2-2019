/**
 * File navigation.js.
 *
 * Handles toggling the navigation menu for small screens and enables TAB key
 * navigation support for dropdown menus.
 */


// Toggle primary menu whe button is clicked
(function() {
    let menuButton = document.getElementById('menu-button');
    menuButton.onclick = function(toggle_menu) {
        toggle_menu.preventDefault();
        let primaryMenuItems = document.getElementById('primary-menu');

        if(document.querySelector('.hide-primary-menu')) {
            primaryMenuItems.classList.remove('hide-primary-menu');
            primaryMenuItems.classList.add('show');
            // JS to display menu items
        }
        else {
            primaryMenuItems.classList.remove('show');
            primaryMenuItems.classList.add('hide-primary-menu');
            // JS to hide menu items
        }
    }
}());

// Toggle about us sub menu when arrow right icon is clicked
(function() {
    let arrowRight = document.getElementById('arrow_right-about-us');
    arrowRight.onclick = function(toggle_aboutUs) {
        toggle_aboutUs.preventDefault();
        let aboutUsSubMenuItems = document.getElementById('about-us-submenu');

        if(document.querySelector('.about-us-hide-submenu')) {
            aboutUsSubMenuItems.classList.remove('about-us-hide-submenu');
            aboutUsSubMenuItems.classList.add('show');
            // JS to display sub menu items
        }
        else {
            aboutUsSubMenuItems.classList.remove('show');
            aboutUsSubMenuItems.classList.add('about-us-hide-submenu');
            // JS to hide sub menu items
        }   
    }
}());

// Toggle get involved sub meenu
(function(){
    let arrowGetInvolved = document.getElementById('arrow_right-get-involved');
    arrowGetInvolved.onclick = function(toggle_getInvolved) {
        toggle_getInvolved.preventDefault();
        let getInvolved = document.getElementById('get-involved-submenu');

        if(document.querySelector('.get-involved-hide-submenu')) {
            getInvolved.classList.remove('get-involved-hide-submenu');
            getInvolved.classList.add('show');
        } else {
            getInvolved.classList.remove('show');
            getInvolved.classList.add('get-involved-hide-submenu');
        }
    }
}());

// Toggle resources sub menu
(function(){
    let arrowResources = document.getElementById('arrow_right-resources');
    arrowResources.onclick = function(toggle_resources) {
        toggle_resources.preventDefault();
        let resources = document.getElementById('resources-submenu');

        if(document.querySelector('.resources-hide-submenu')) {
            resources.classList.remove('resources-hide-submenu');
            resources.classList.add('show');
        } else {
            resources.classList.remove('show');
            resources.classList.add('resources-hide-submenu');
        }
    }
}());

// Toggle activities sub menu
(function(){
    let arrowActivities = document.getElementById('arrow_right-activities');
    arrowActivities.onclick = function(toggle_activities) {
        toggle_activities.preventDefault();
        let activities = document.getElementById('activities-submenu');

        if(document.querySelector('.activities-hide-submenu')) {
            activities.classList.remove('activities-hide-submenu');
            activities.classList.add('show');
        } else {
            activities.classList.remove('show');
            activities.classList.add('activities-hide-submenu');
        }
    }
}());

// Toggle school programs sub menu 
(function(){
    let arrowSchool = document.getElementById('arrow_right-school');
    arrowSchool.onclick = function(toggle_school) {
        toggle_school.preventDefault();
        let schoolPrograms = document.getElementById('school-programs-submenu');

        if(document.querySelector('.school-programs-hide-submenu')) {
            schoolPrograms.classList.remove('school-programs-hide-submenu');
            schoolPrograms.classList.add('show');
        } else {
            schoolPrograms.classList.remove('show');
            schoolPrograms.classList.add('school-programs-hide-submenu');
        }
    }
}());


// Toggle heaaling city soils sub menu
(function(){
    let arrowHealing = document.getElementById('arrow_right-healing');
    arrowHealing.onclick = function(toggle_healing) {
        toggle_healing.preventDefault();
        let healingCitySoils = document.getElementById('healing-city-soils-submenu');

        if(document.querySelector('.healing-city-soils-hide-submenu')) {
            healingCitySoils.classList.remove('healing-city-soils-hide-submenu');
            healingCitySoils.classList.add('show');
        } else {
            healingCitySoils.classList.remove('show');
            healingCitySoils.classList.add('healing-city-soils-hide-submenu')
        }
    }
}());