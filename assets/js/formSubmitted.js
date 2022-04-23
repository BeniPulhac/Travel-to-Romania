

function myFunction() {
    var a = document.getElementById('myForm').elements[0].value;
    var b = document.getElementById('myForm').elements[1].value;
    var c = document.getElementById('myForm').elements[2].value;
    var d = document.getElementById('myForm').elements[3].value;


    document.getElementById('myForm').submit(alert(a + '\n' + b + '\n' + c + '\n' + d));

}