let fullscreen;
let fsEnter = document.getElementById('fullscr');
let fsEnterIn = "Войти в полноэкранный режим";
let fsEnterOut = "Выйти из полноэкранного режима";
fsEnter.innerHTML = fsEnterIn;
fsEnter.addEventListener('click', function (e) {
    e.preventDefault();
    if (!fullscreen) {
        fullscreen = true;
        document.documentElement.requestFullscreen();
        fsEnter.innerHTML = fsEnterOut;
        } else {
        fullscreen = false;
        document.exitFullscreen();
        fsEnter.innerHTML = fsEnterIn;
    }
});
if (e.keyCode === 27) {
    fsEnter.innerHTML = fsEnterIn;
}

let preloader = document.querySelector('.preloader');

window.addEventListener('load', () => {
  preloader.classList.add('hide');
  setTimeout(() => {
    preloader.remove()
  },600)
});