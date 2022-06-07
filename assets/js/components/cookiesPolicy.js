//  Variables
// const cookiesOk = document.getElementById('cookiesOk');
// const cookiesDecline = document.getElementById('cookiesDecline');
const cookiesBanner = document.getElementById('cookiesBanner');
//
//
// //  Events
// if(cookiesOk) {
//     cookiesOk.addEventListener('click', () => {
//         cookiesSetOk();
//         cookiesBanner.setAttribute('class', 'd-none');
//     });
// }
//
// if(cookiesDecline) {
//     cookiesDecline.addEventListener('click', () => {
//         cookiesSetDecline();
//     });
// }


//  Functions
// function cookiesSetOk() {
//     let xhr = new XMLHttpRequest();
//     let action = new FormData();
//     action.append('action', 'accept');
//
//     xhr.open('POST', '../../includes/components/cookiesBannerHandling/cookiesAccept.php');
//     xhr.send(action);
// }
//
// function cookiesSetDecline() {
//     let xhr = new XMLHttpRequest();
//     let action = new FormData();
//     action.append('action', 'decline');
//     xhr.open('POST', '../../includes/components/cookiesBannerHandling/cookiesAccept.php');
//     xhr.send(action);
// }

function cookiesSet(action) {
    let actionData = new FormData();
    if (action == 'accept') {
        actionData.append('action', 'accept');
        cookiesBanner.setAttribute('class', 'd-none');
    } else if (action == 'decline') {
        actionData.append('action', 'decline');
    }

    let xhr = new XMLHttpRequest();
    xhr.open('POST', '../../includes/components/cookiesBannerHandling/cookiesAccept.php');
    xhr.send(actionData);
}
