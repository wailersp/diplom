let dotsEight = document.getElementsByClassName('dotEight'),
    dotsAreaEight = document.getElementById('dots-blockEight'),
    slidesEight = document.getElementsByClassName('slider-itemEight'),
    prevEight = document.getElementById('prev-btnEight'),
    nextEight = document.getElementById('next-btnEight'),
    slideIndexEight = 1;

    

showSlidesEight(slideIndexEight);

function showSlidesEight (nEight) {
    if (nEight < 1) {
        slideIndexEight = slidesEight.length;
    } else if (nEight > slidesEight.length) {
        slideIndexEight = 1;
    }
    for (let i = 0; i < slidesEight.length; i++) {
        slidesEight[i].style.display = 'none';
    }
    for (let i = 0; i < dotsEight.length; i++) {
        dotsEight[i].classList.remove('dot-activeEight');
    }
    slidesEight[slideIndexEight - 1].style.display = 'block';
    dotsEight[slideIndexEight - 1].classList.add('dot-activeEight');
}

function plusSlidesEight (nEight) {
    showSlidesEight(slideIndexEight += nEight);
}
function currentSlideEight (nEight) {
    showSlidesEight(slideIndexEight = nEight)
}

prevEight.onclick = function () {
    plusSlidesEight(-1);
}
nextEight.onclick = function () {
    plusSlidesEight(1);
}
dotsAreaEight.onclick = function (e) {
    for (let i = 0; i < dotsEight.length + 1; i++) {
        if (e.target.classList.contains('dotEight') && e.target == dotsEight[i - 1]) {
            currentSlideEight(i);
        }
    }
}
