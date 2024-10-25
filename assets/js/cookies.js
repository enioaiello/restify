const closeCookie = document.querySelector('#close-cookies');
const cookie = document.querySelector('.cookies');

closeCookie.addEventListener('click', () => {
    cookie.style.display = 'none';
    localStorage.setItem('cookie', 'closed');
});

if (localStorage.getItem('cookie') === 'closed') {
    cookie.style.display = 'none';
}