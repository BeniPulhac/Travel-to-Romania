//---------------------------Variables---------------------------
const submitBtnSignIn = document.getElementById('submitBtnSignIn');
//Email
const emailSignIn = document.getElementById('emailSignIn');
const emailSignInError = document.getElementById('emailSignInError');
//Password
const passwordSignIn = document.getElementById('passwordSignIn');
const passwordSignInError = document.getElementById('passwordSignInError');
const searchDB = document.getElementById('searchDB');
//Success
const sendSignIn = document.getElementById('sendSignIn');
const showFormSignOut = document.getElementById('showFormSignOut');


//---------------------------Events---------------------------
submitBtnSignIn.addEventListener('click', function () {
    submitForm();
    // location.reload();
    // setTimeout(location.reload(), 3000);
});

if(showFormSignOut) {
    showFormSignOut.addEventListener('click', () => {
        signOut();
    });
}


//---------------------------AJAX Requests---------------------------
function submitForm () {
    let formDataSignIn = new FormData();
    formDataSignIn.append('emailSignIn', emailSignIn.value);
    formDataSignIn.append('passwordSignIn', passwordSignIn.value);


    let xhr = new XMLHttpRequest();
    xhr.open('POST', '../../includes/signInFormData.php', true);
    xhr.send(formDataSignIn);

    xhr.onload = function () {
        let responseSignIn = JSON.parse(xhr.responseText);
        emptyFieldsSignIn();

        //errors
        if(typeof responseSignIn == 'object') {

            for(keys in responseSignIn) {
                errorsSigninDisplay(responseSignIn);
            }
        } else if(typeof responseSignIn == 'string') {
            sendSignIn.innerText = 'Success';
            location.reload();
            // setTimeout(location.reload(), 5000);
        }
    }
}

function signOut() {
    let xhr = new XMLHttpRequest();
    xhr.open('POST', '../../includes/components/signOut.php');
    xhr.send();
    location.reload();
}

//---------------------------Functions---------------------------
function emptyFieldsSignIn() {
    emailSignInError.innerText = '';
    passwordSignInError.innerText = '';
    searchDB.innerText = '';
}

function errorsSigninDisplay(response) {
    if(response.emailSignInEmpty) {
        emailSignInError.innerText = response.emailSignInEmpty;
    }

    if(response.emailSignInValid) {
        emailSignInError.innerText = response.emailSignInValid;
    }

    if(response.passwordSignInEmpty) {
        passwordSignInError.innerText = response.passwordSignInEmpty;
    }

    if((!response.emailSignInEmpty) && (!response.emailSignInValid) && (!response.passwordSignInEmpty)){
        if(response.emailSignIn) {
            searchDB.innerText = response.emailSignIn;
        }
    }

}

