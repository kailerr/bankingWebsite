let menu = document.querySelector('#menu-icon');
let navlist = document.querySelector('.navlist');

menu.onclick = () => {
    menu.classList.toggle('bx-x');
    navlist.classList.toggle('open');
};

const sr = ScrollReveal ({
    distance: '65px',
    duration: 2600,
    delay: 450,
    reset: true
});

sr.reveal('.bank-text',{delay:200, origin:'top'});
sr.reveal('.bank-img',{delay:450, origin:'top'});
sr.reveal('.scroll-down',{delay:500, origin:'right'});
sr.reveal('.bank-login',{delay:450, origin:'top'});

function openPopOutWindow() {
  var url = 'registration.html';
  var width = 550;
  var height = 550;
  var left = (screen.width - width) / 2;
  var top = (screen.height - height) / 2 + -60;

  window.open(url, 'PopOutWindow', 'width=' + width + ',height=' + height + ',left=' + left + ',top=' + top);
}
