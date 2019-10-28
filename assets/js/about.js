/*
Name: Brenda Cohen
Assignment: 06
Purpose: Interactive code for about page, toggles css for hiding content
*/

function toggleHide(targetToHide) {
    if (targetToHide.classList.contains('hide')) {
        targetToHide.classList.remove('hide');
    } else {
        targetToHide.classList.add('hide');
    }
}

document.querySelectorAll('.about-item').forEach(function(item) {
    item.querySelector('button').addEventListener('click', function() {
        toggleHide(item.querySelector('.toggle-hide'));
    });
});