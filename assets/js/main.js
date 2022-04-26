//         //Declaretions
// const menu = document.querySelector('.navigation-menu')
// const close = document.querySelector('.navigation-close')
// const nav = document.querySelector('.nav-bar')
//
//         //Events
// menu.addEventListener('click', () => {
//     nav.classList.add('open-nav')
// })
//
// close.addEventListener('click', () => {
//     nav.classList.remove('open-nav')
// })

//                          Mouse Left the Screen

// document.getElementById('testing').addEventListener('mouseleave', mouseLeave);
//
// function mouseLeave() {
//
//     alert('Mouse Left the Screen');
//
// }
//---------------------------------


//                          Scroll to 50%
//     let height = Math.max(
//         document.body.scrollHeight, document.documentElement.scrollHeight,
//         document.body.offsetHeight, document.documentElement.offsetHeight,
//         document.body.clientHeight, document.documentElement.clientHeight
//     );
//
//     var showAlert = true;
//
//     height /= 4;
//
//     window.addEventListener('scroll', function() {
//         if(scrollY >= height && showAlert === true){
//             alert('Yes');
//             showAlert = false;
//         }
//     });




//---------------------------------


//                          Scroll second try
// $(document).ready(function() {
//
//     $(window).scroll(function(e){
//         var scrollTop = $(window).scrollTop();
//         var docHeight = $(document).height();
//         var winHeight = $(window).height();
//         var scrollPercent = (scrollTop) / (docHeight - winHeight);
//         var scrollPercentRounded = Math.round(scrollPercent*100);
//
//         $('#scrollPercentLabel>span').html(scrollPercentRounded);
//         repositionLabel();
//     });
//
//     $(window).resize(function(){
//         repositionLabel();
//     });
//
//     function repositionLabel() {
//         $('#scrollPercentLabel').css({
//             position:'fixed',
//             left: ($(window).width() - $('#scrollPercentLabel').outerWidth()) / 2,
//             top: (($(window).height() - $('#scrollPercentLabel').outerHeight()) / 2) - $('#scrollPercentLabel').height()
//         });
//     }
//
//     repositionLabel();
//
// });

