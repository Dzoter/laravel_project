
const formArray = document.getElementsByClassName('form-control');


for (var i = 0, len = formArray.length; i < len; i++) {

    formArray[i].addEventListener('change', set_handler(i),false);
}
function set_handler(i){
    return function (e) {
        if (formArray[i].value.length){
            formArray[i].classList.add('active');
        }else {
            formArray[i].classList.remove('active');
        }
    };
}


