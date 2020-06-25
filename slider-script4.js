let dotsFour = document.getElementsByClassName('dotFour'),
    dotsAreaFour = document.getElementById('dots-blockFour'),
    slidesFour = document.getElementsByClassName('slider-itemFour'),
    prevFour = document.getElementById('prev-btnFour'),
    nextFour = document.getElementById('next-btnFour'),
    slideIndexFour = 1;

    

showSlidesFour(slideIndexFour);

function showSlidesFour (nFour) {
    if (nFour < 1) {
        slideIndexFour = slidesFour.length;
    } else if (nFour > slidesFour.length) {
        slideIndexFour = 1;
    }
    for (let i = 0; i < slidesFour.length; i++) {
        slidesFour[i].style.display = 'none';
    }
    for (let i = 0; i < dotsFour.length; i++) {
        dotsFour[i].classList.remove('dot-activeFour');
    }
    slidesFour[slideIndexFour - 1].style.display = 'block';
    dotsFour[slideIndexFour - 1].classList.add('dot-activeFour');
}

function plusSlidesFour (nFour) {
    showSlidesFour(slideIndexFour += nFour);
}
function currentSlideFour (nFour) {
    showSlidesFour(slideIndexFour = nFour)
}

prevFour.onclick = function () {
    plusSlidesFour(-1);
}
nextFour.onclick = function () {
    plusSlidesFour(1);
}
dotsAreaFour.onclick = function (e) {
    for (let i = 0; i < dotsFour.length + 1; i++) {
        if (e.target.classList.contains('dotFour') && e.target == dotsFour[i - 1]) {
            currentSlideFour(i);
        }
    }
}
