window.onload = function() {
    var redact = document.querySelectorAll('a');
    var add = document.querySelector('.add');
    var sohr = document.querySelector('.sohr');
    var sozdatel = document.querySelector('.sozdatel');
    var redactor = document.querySelectorAll('.redactor');
    var zaglavie = document.querySelector('.zaglavie');
    var zaglavie2 = document.querySelector('.zaglavie2');

    for(let i=0; i < redact.length; i++) {
        redact[i].addEventListener('mousedown', function(e){   
            e.preventDefault();
            redact[i].classList.add('active');
        })
    }

    document.addEventListener('mouseup', function(){
        for(let i=0; i < redact.length; i++) {
            redact[i].classList.remove('active');
        }
    })

    // add.addEventListener('mousedown', function(e){
    // e.preventDefault();
    // add.classList.add('active');
    // })

    sohr.addEventListener('mousedown', function(e){
    e.preventDefault();
    sohr.classList.add('active');
    })

    document.addEventListener('mouseup', function(e){
        // add.classList.remove('active');
        sohr.classList.remove('active');
    })

    // sozdatel.addEventListener('click', function(){
    //     sozdatel.classList.add('active');
    //     redactor.classList.remove('active');
    // })

    // for (let i = 0; i < redactor.length; i++){
    //     redactor[i].addEventListener('click', function(){
    //         sozdatel.classList.remove('active');
    //         redactor.classList.add('active');
    //     })
    // }

    if (zaglavie.innerHTML == "Режим редактирования"){
        zaglavie.style.color = "red";
    } else {
        zaglavie.style.color = "green";
    }

    if (zaglavie2.innerHTML == "Режим редактирования"){
        zaglavie2.style.color = "red";
    } else {
        zaglavie2.style.color = "green";
    }
// ===================== КНОПКА НА ГЛАВНУЮ =====================

var mail = document.querySelector('.main');

document.addEventListener('mouseup', function(){
    main.classList.remove('active');
    imput.value = '';
    ikput.value = '';
})

main.addEventListener('mousedown', function(){
    main.classList.add('active');
})


}