

// function myFunction() {
//     var a = document.getElementById('myForm').elements[0].value;
//     var b = document.getElementById('myForm').elements[1].value;
//     var c = document.getElementById('myForm').elements[2].value;
//     var d = document.getElementById('myForm').elements[3].value;
//
//     if(a == 0 && b == 0 && c == 0 && d == 0){
//         alert('Form Empty');
//     }else {
//         document.getElementById('myForm').submit(alert(a + '\n' + b + '\n' + c + '\n' + d));
//     }
// }

// -----------------Second Way-----------------

function myFunction () {
    var x = document.getElementById('myForm');
    var text = "";
    var i;

    for (i = 0; i < x.length - 1; i++) {
            text = text + x.elements[i].value + '\n';
    }

    if(text != 0){
        alert(text);
    } else {
        alert('Form Empty');
    }
}