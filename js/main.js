// function preloader() {
//     $(() => {
//         setInterval(() => {

//           let p = $('.preloader');

//           p.css('opacity', 0);

//           setInterval(
//             () => p.remove(),
//             parseInt(p.css('--duration')) *1000
//           );

//         }, 1000);

//     });
// }

// preloader();

// setInterval(() => preloader(), 0);

let preloader = document.querySelector('.preloader');

window.addEventListener('load', () => {
  preloader.classList.add('hide');
  setTimeout(() => {
    preloader.remove()
  },600)
});

if (!localStorage.theme) localStorage.theme = "light"
document.body.className = localStorage.theme
DarkMode.innerText = document.body.classList.contains("dark") ? "Светлая тема" : "Тёмная тема"


DarkMode.onclick = () => {
    document.body.classList.toggle("dark")
    DarkMode.innerText = document.body.classList.contains("dark") ? "Светлая тема" : "Тёмная тема"
    localStorage.theme = document.body.className || "light"
}



document.querySelector('.b-7').addEventListener('click' , () => {
  let data = document.querySelector('i-7').innerHTML = '';
});









