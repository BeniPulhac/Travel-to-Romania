const newsletterBtn = document.getElementById('newsletterBtn');
const newsletterEmail = document.getElementById('newsletterEmail');
const newsletterResponse = document.getElementById('newsletterResponse');

newsletterBtn.addEventListener('click', function() {
   sendNewsletter();
});

function sendNewsletter() {
    let formData = new FormData();
    formData.append('newsletterEmail', newsletterEmail.value);

    let xhr = new XMLHttpRequest();
    xhr.open('POST', '../includes/footerNewsletter.php', true);
    xhr.send(formData);

    xhr.onload = function() {
        // let response = JSON.parse(xhr.responseText);
        let response = xhr.responseText;
        //clear the response zone
        newsletterResponse.innerText = '';
console.log(typeof response);
        //display the response
        if(typeof response == 'string') {
            if(response === 'Emailed saved in DB') {
                newsletterResponse.innerText = response;
            } else {
                if(response === 'Email already in DB') {
                    newsletterResponse.innerText = response;
                }
            }
        }
    }
}