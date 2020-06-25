let dotsFive = document.getElementsByClassName('dotFive'),
    dotsAreaFive = document.getElementById('dots-blockFive'),
    slidesFive = document.getElementsByClassName('slider-itemFive'),
    prevFive = document.getElementById('prev-btnFive'),
    nextFive = document.getElementById('next-btnFive'),
    slideIndexFive = 1;

    

showSlidesFive(slideIndexFive);

function showSlidesFive (nFive) {
    if (nFive < 1) {
        slideIndexFive = slidesFive.length;
    } else if (nFive > slidesFive.length) {
        slideIndexFive = 1;
    }
    for (let i = 0; i < slidesFive.length; i++) {
        slidesFive[i].style.display = 'none';
    }
    for (let i = 0; i < dotsFive.length; i++) {
        dotsFive[i].classList.remove('dot-activeFive');
    }
    slidesFive[slideIndexFive - 1].style.display = 'block';
    dotsFive[slideIndexFive - 1].classList.add('dot-activeFive');
}

function plusSlidesFive (nFive) {
    showSlidesFive(slideIndexFive += nFive);
}
function currentSlideFive (nFive) {
    showSlidesFive(slideIndexFive = nFive)
}

prevFive.onclick = function () {
    plusSlidesFive(-1);
}
nextFive.onclick = function () {
    plusSlidesFive(1);
}
dotsAreaFive.onclick = function (e) {
    for (let i = 0; i < dotsFive.length + 1; i++) {
        if (e.target.classList.contains('dotFive') && e.target == dotsFive[i - 1]) {
            currentSlideFive(i);
        }
    }
}
