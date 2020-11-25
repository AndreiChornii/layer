`use strict`;

let hamburger_menu = document.querySelectorAll('.hamburger-menu .menu__box li a');
console.log(hamburger_menu);
for (var i = 0; i < hamburger_menu.length; i++) {
    hamburger_element = hamburger_menu[i];
    hamburger_element.addEventListener('click', function (event) {
//        console.log(event);
        let menu__toggle = document.querySelector('#menu__toggle');
        console.log(menu__toggle);
        menu__toggle.checked = false;
    });
}

function sendedData(form) {
//    console.log(form);
    let from = form[0].value;
    let to = form[1].value;
    let date = form[2].value;
    console.log(from);
    console.log(to);
    console.log(date);
    alert('you mentioned\nleaving from: ' + from + '\nwhant to go: ' + to + '\ndate: ' + date);

}