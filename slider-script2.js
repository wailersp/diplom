let dotsTwo = document.getElementsByClassName('dotTwo'),
    dotsAreaTwo = document.getElementById('dots-blockTwo'),
    slidesTwo = document.getElementsByClassName('slider-itemTwo'),
    prevTwo = document.getElementById('prev-btnTwo'),
    nextTwo = document.getElementById('next-btnTwo'),
    slideIndexTwo = 1;

    

showSlidesTwo(slideIndexTwo);

function showSlidesTwo (nTwo) {
    if (nTwo < 1) {
        slideIndexTwo = slidesTwo.length;
    } else if (nTwo > slidesTwo.length) {
        slideIndexTwo = 1;
    }
    for (let i = 0; i < slidesTwo.length; i++) {
        slidesTwo[i].style.display = 'none';
    }
    for (let i = 0; i < dotsTwo.length; i++) {
        dotsTwo[i].classList.remove('dot-activeTwo');
    }
    slidesTwo[slideIndexTwo - 1].style.display = 'block';
    dotsTwo[slideIndexTwo - 1].classList.add('dot-activeTwo');
}

function plusSlidesTwo (nTwo) {
    showSlidesTwo(slideIndexTwo += nTwo);
}
function currentSlideTwo (nTwo) {
    showSlidesTwo(slideIndexTwo = nTwo)
}

prevTwo.onclick = function () {
    plusSlidesTwo(-1);
}
nextTwo.onclick = function () {
    plusSlidesTwo(1);
}
dotsAreaTwo.onclick = function (e) {
    for (let i = 0; i < dotsTwo.length + 1; i++) {
        if (e.target.classList.contains('dotTwo') && e.target == dotsTwo[i - 1]) {
            currentSlideTwo(i);
        }
    }
}
