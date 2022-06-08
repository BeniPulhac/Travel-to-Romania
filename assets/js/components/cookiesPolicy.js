//  Variables

const cookiesBanner = document.getElementById('cookiesBanner');

//  Functions
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
