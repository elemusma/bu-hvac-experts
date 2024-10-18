// start of full width row
fullWidthRowImages = document.querySelectorAll('.img-full-width-row-bg');
imgFullWidthRowCol1 = document.querySelector('#imgFullWidthRowCol1');
imgFullWidthRowCol2 = document.querySelector('#imgFullWidthRowCol2');
imgFullWidthRowCol3 = document.querySelector('#imgFullWidthRowCol3');

fullWidthRowCol1 = document.querySelector('#fullWidthRowCol1');
fullWidthRowCol2 = document.querySelector('#fullWidthRowCol2');
fullWidthRowCol3 = document.querySelector('#fullWidthRowCol3');

fullWidthRowCol1.addEventListener('mouseover', function () {
    imgFullWidthRowCol1.style.opacity = "1";
});
fullWidthRowCol1.addEventListener('mouseout', function () {
    imgFullWidthRowCol1.style.opacity = "0";
});
fullWidthRowCol2.addEventListener('mouseover', function () {
    imgFullWidthRowCol2.style.opacity = "1";
});
fullWidthRowCol2.addEventListener('mouseout', function () {
    imgFullWidthRowCol2.style.opacity = "0";
});
fullWidthRowCol3.addEventListener('mouseover', function () {
    imgFullWidthRowCol3.style.opacity = "1";
});
fullWidthRowCol3.addEventListener('mouseout', function () {
    imgFullWidthRowCol3.style.opacity = "0";
});
// end of full width row