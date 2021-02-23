document.addEventListener("DOMContentLoaded", function(event) {
function getRandomInt(min, max) {
    min = Math.ceil(min);
    max = Math.floor(max);
    return Math.floor(Math.random() * (max - min)) + min;
}
var preloader = document.createElement('div');
preloader.className = "preloader";
preloader.id = "page-preloader";
var loader = document.createElement('div');
loader.className = "loader";
loader.style.backgroundImage = "url('./media/giphy" + getRandomInt(1, 9) + ".gif')";
document.body.append(preloader);
preloader.append(loader);
document.body.onload = function () {

    setTimeout(function () {
        var preloader = document.getElementById('page-preloader');
        if (preloader.classList.contains('done')) {
            preloader.classList.add('done');
        } else {
            preloader.classList.add('done');
        }
    }, 1000)
}
});