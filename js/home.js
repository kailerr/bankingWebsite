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
sr.reveal('.bank-login',{delay:200, origin:'top'});
sr.reveal('.bank-text-dashboard',{delay:200, origin:'top'});
sr.reveal('.container',{delay:200, origin:'top'});
sr.reveal('.atm',{delay:200, origin:'top'});

function openPopOutWindow() {
  var url = 'registration.html';
  var width = 550;
  var height = 550;
  var left = (screen.width - width) / 2;
  var top = (screen.height - height) / 2 + -60;

  window.open(url, 'PopOutWindow', 'width=' + width + ',height=' + height + ',left=' + left + ',top=' + top);
}

function showGreetingMessage(userName) {
  console.log("showGreetingMessage called with user:", userName);
  const atmScreen = document.getElementById("atmScreen");
  const buttonsContainer = document.getElementById("buttonsContainer");
  const greetingMessage = document.getElementById("greetingMessage");

  atmScreen.style.display = "none";
  buttonsContainer.style.display = "block";

  greetingMessage.textContent = `Hello, ${userName}! What would you like to do today?`;
}

function submit() {
  const cardNumber = document.getElementById("cardNumber").value;
  const pin = document.getElementById("pin").value;
  showGreetingMessage("Frank Butt");

  document.getElementById("cardBox").style.display = "block";
  document.getElementById("buttonsContainer").style.display = "block";
}

document.getElementById("cancel").addEventListener("click", function () {
  resetATM();
});

function resetATM() {
  const atmScreen = document.getElementById("atmScreen");
  const buttonsContainer = document.getElementById("buttonsContainer");

  document.getElementById("cardNumber").value = "";
  document.getElementById("pin").value = "";

  atmScreen.style.display = "block";
  cardBox.style.display = "none";
  buttonsContainer.style.display = "none";
}
