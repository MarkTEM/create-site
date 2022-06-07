const headerbehaviors = document.querySelector('.headerbehaviors');
const temp = localStorage.getItem('temp');
headerbehaviors.dataset.temp = temp;

document.querySelectorAll('button[data-view').forEach(header => {
    header.addEventListener('click', () => {
        const view = header.dataset.view;
        headerbehaviors.dataset.temp = view;
        localStorage.setItem('temp', view);
    });
});



const box__menu = document.querySelector('.box__menu');
// const tempst = localStorage.getItem('tempst');
// box__menu.dataset.tempst = tempst;

document.querySelectorAll('a[data-views').forEach(as => {
    as.addEventListener('click', () => {
        const views = as.dataset.views;
        box__menu.dataset.tempst = views;
        // localStorage.setItem('tempst', views);
    });
});
