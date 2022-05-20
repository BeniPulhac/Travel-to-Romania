//  Variables
const txtHint = document.getElementById('txtHint');

//  Function

function showHint(str) {
    if(str.length === 0) {
        txtHint.innerText = '';
    } else {
        const xhr = new XMLHttpRequest();
        xhr.onload = function() {
            txtHint.innerText = this.responseText;
        }
        xhr.open('GET', '../../../includes/tripComponents/tripStartBackend.php?q=' + str);
        xhr.send();
    }
}

