//  Variables
const cookiesOk = document.getElementById('cookiesOk');
const cookiesDecline = document.getElementById('cookiesDecline');
const cookiesBanner = document.getElementById('cookiesBanner');


//  Events
cookiesOk.addEventListener('click', () => {
    cookiesSetOk();
});

cookiesDecline.addEventListener('click', () => {
    // cookiesBanner.setAttribute('class', 'd-none');
    cookiesSetDecline();
});

//  Functions
function cookiesSetOk() {
    let xhr = new XMLHttpRequest();
    xhr.open('POST', '../../includes/components/cookiesBannerHandling/cookiesAccept.php');
    xhr.send();
}

function cookiesSetDecline() {
    let xhr = new XMLHttpRequest();
    xhr.open('POST', '../../includes/components/cookiesBannerHandling/cookiesDecline.php');
    xhr.send();
}