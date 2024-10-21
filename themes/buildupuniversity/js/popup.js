// Get all buttons that open modals
var modalBtnsCustom = document.getElementsByClassName("openModalBtnCustom");

// Loop through all buttons and add click event listeners
for (var i = 0; i < modalBtnsCustom.length; i++) {
    modalBtnsCustom[i].onclick = function() {
    var modalId = this.getAttribute('data-modal-id');
    var modal = document.getElementById(modalId);
    modal.style.display = "block";
  }
}

// Get all elements with class="close" (close buttons)
var closeBtnsCustom = document.getElementsByClassName("close-custom");

// Loop through all close buttons and add click event listeners
for (var i = 0; i < closeBtnsCustom.length; i++) {
  closeBtnsCustom[i].onclick = function() {
    var modal = this.parentElement.parentElement;
    modal.style.display = "none";
  }
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target.classList.contains('modal-custom')) {
    event.target.style.display = "none";
  }
}

// let openModalArrowFunction = (elem) => {
//     elemID = elem.getAttribute('id');
//     elemClose = document.querySelector('.modal-content.' + elemID + ' .close');
//     elemOverlay = document.querySelector('.modal-content.' + elemID + ' .bg-overlay');
//     elemContent = document.querySelector('.modal-content.' + elemID);
//     elemContent.classList.add('activate-modal');

//     elemClose.addEventListener('click', function () {
//         elemContent.classList.remove('activate-modal');
//     });
//     elemOverlay.addEventListener('click', function () {
//         elemContent.classList.remove('activate-modal');
//     });
// }

// let openModalBtn = document.querySelectorAll('.open-modal');

// for (i = 0; i < openModalBtn.length; i++) {
//     openModalBtn[i].addEventListener('click', openModal);
//     function openModal() {
//         openModalArrowFunction(this);
//     }
//     function closeModal() {
//         closeModalArrowFunction(this);
//     }
// }

// document.onkeydown = function (evt) {
//     evt = evt || window.event;
//     if (evt.keyCode == 27) {
//         modalContent = document.querySelectorAll('.modal-content');
//         for (i = 0; i < modalContent.length; i++) {
//             if (modalContent[i].classList.contains('activate-modal')) {
//                 modalContent[i].classList.remove('activate-modal');
//             }
//         }
//     }
// };

// // Get all iframe elements on the page
// const iframes = document.querySelectorAll('iframe');

// // Loop through each iframe and set a 16:9 aspect ratio
// iframes.forEach(iframe => {
//     // iframe.style.width = '100%'; // Set full width
//     width = iframe.offsetWidth;

//     height = width * (9 / 16);

//     // iframe.style.height = '0';   // Set initial height to 0
//     // iframe.style.height = height;
//     iframe.setAttribute('style', 'height:' + height + 'px');
//     // iframe.style.paddingBottom = '56.25%'; // 9 / 16 = 56.25% (16:9 aspect ratio)
// });