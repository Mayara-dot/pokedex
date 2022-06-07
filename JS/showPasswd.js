let btn = document.querySelector('#showPasswd');

btn.addEventListener('click', function() {

    let input = document.querySelector('#passwd');

    if(input.getAttribute('type') == 'password') {
        input.setAttribute('type', 'text');
    } else {
        input.setAttribute('type', 'password');
    }

});