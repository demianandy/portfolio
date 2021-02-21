window.onload = function() {

    // ====================== ПАНЕЛЬ АДМИНА ==========================
    var admin = document.querySelector('.admin');
    var polotno = document.querySelector('.polotno');
    var close = document.querySelector('.close');
    var error = document.querySelector('.error');
    var adminname = document.querySelector('.adminname');
    var enter = document.querySelector('.enter');
    var write = document.querySelector('.write');
    var refresh = document.querySelector('.refresh');
    var lettersend = document.querySelector('.lettersend');
    var letterclose = document.querySelector('.letterclose');
    var refresh = document.querySelector('.refresh');

    admin.addEventListener('click', function(e) {
        e.preventDefault();
        polotno.classList.add('active');
    })

    close.addEventListener('click', function(e) {
        e.preventDefault();
        polotno.classList.remove('active');
        // admin.style.background="transparent";
        error.classList.remove('invalid');
        imput.value = '';
        ikput.value = '';
    })

    close.addEventListener('mousedown', function(){
      this.classList.add('active');
    })

    enter.addEventListener('mousedown', function(){
      this.classList.add('active');
    })

    document.addEventListener('mouseup', function(){
      enter.classList.remove('active');
      close.classList.remove('active');
      write.classList.remove('active');
      lettersend.classList.remove('active');
      letterclose.classList.remove('active');
      refresh.classList.remove('active');
      go.classList.remove('active');
    })

    // ================ ВХОД ДЛЯ АДММИНА ================================
    var administrator = document.getElementById('administrator');

    enter.addEventListener('click', function(){
      if (!(imput.value == "Дмитрий") || !(ikput.value == "649209")){
        event.preventDefault();
        error.classList.add('invalid');
        imput.value = '';
        ikput.value = '';
        // exit();
      } else {
        imput.value = 'Дмитрий';
        ikput.value = '649209';
        error.classList.remove('invalid');
      }
    })

    // =========================== ОТЗЫВЫ =============================
    var letter = document.querySelector('.letter');

    write.addEventListener('mousedown', function(){
      write.classList.add('active');
    })

    write.addEventListener('click', function(){
      letter.classList.add('active');
    })

    refresh.addEventListener('mousedown', function(){
      refresh.classList.add('active');
    })

    lettersend.addEventListener('mousedown', function(){
      this.classList.add('active');
    })

    letterclose.addEventListener('mousedown', function(){
      this.classList.add('active');
    })

    letterclose.addEventListener('click', function(e){
      e.preventDefault();
      nom.value = '';
      message.value = '';

      letter.classList.remove('active');
      error2.classList.remove('invalid');
    })

    // ========================= НАПИСАНИЕ ОТЗЫВА ========================
    var massage = document.querySelector('.massage');
    var nom = document.querySelector('.nom');
    var error2 = document.querySelector('.error2');

    // massage.addEventListener('blur', function(){
    //   if (massage.value.length < 50){
    //       error2.innerHTML = "Слишком короткий текст!";
    //       error2.classList.add('invalid');
    //   }
    // })

    massage.addEventListener('focus', function(){
          error2.classList.remove('invalid');
    })

    nom.addEventListener('focus', function(){
          error2.classList.remove('invalid');
    })

    // lettersend.addEventListener('click', function(e){
    //     if (massage.value.length < 50){
    //       error2.innerHTML = "Слишком короткий текст!";
    //       error2.classList.add('invalid');
    //       e.preventDefault();
    //     } else if (nom.value.length < 4){
    //       error2.innerHTML = "Имя введено некорректно";
    //       error2.classList.add('invalid');
    //       e.preventDefault();
    //     } else {
    //       nom.value = '';
    //       message.value = '';
    //       error2.style.color="green";
    //       error2.classList.add('invalid');
    //       error2.innerHTML = "Отзыв успешно отправлен";
    //       }
    // })
    // ==================== СМОТРЕТЬ В ИСТОЧНИКЕ ========================
    var root = document.querySelectorAll('.root');

    for (let i = 0; i < root.length; i++){
      root[i].addEventListener('mousedown', function(e){
        e.preventDefault();
        root[i].classList.add('active');
      })
    }

    document.addEventListener('mouseup', function(){
      for (let i = 0; i < root.length; i++){
        root[i].classList.remove('active');
      }
    })

    // ======================== ОБРАТНАЯ СВЯЗЬ ===========================
    var go = document.querySelector('.go');
    var error3 = document.querySelector('.error3');
    var avtor = document.querySelector('.avtor');
    var email = document.querySelector('.email');
    var call = document.querySelector('.call');

    go.addEventListener('mousedown', function(e){
      // e.preventDefault();
      go.classList.add('active');
    })

    avtor.addEventListener('focus', function(){
      error3.classList.remove('invalid');
    })

    email.addEventListener('focus', function(){
      error3.classList.remove('invalid');
    })

    call.addEventListener('focus', function(){
      error3.classList.remove('invalid');
    })
    // ===================== КНОПКА МЕНЮ ========================

    var span = document.querySelector('.span');
    var list = document.querySelector('.list');
    var flop = document.querySelectorAll('.flop');

    span.addEventListener('mousedown', function(e){
      e.preventDefault();
      span.classList.add('active');
    })

    span.addEventListener('click', function(e){
      e.preventDefault();
      list.classList.toggle('active');
      span.classList.toggle('active2');
    })

    document.addEventListener('mouseup', function(){
      span.classList.remove('active');
    })

    for (let i = 0; i < flop.length; i++){
      flop[i].addEventListener('click', function(){
        span.classList.remove('active2');
        list.classList.remove('active');
      })
    }
}