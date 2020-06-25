let dotsSix = document.getElementsByClassName('dotSix'),
    dotsAreaSix = document.getElementById('dots-blockSix'),
    slidesSix = document.getElementsByClassName('slider-itemSix'),
    prevSix = document.getElementById('prev-btnSix'),
    nextSix = document.getElementById('next-btnSix'),
    slideIndexSix = 1;

    

showSlidesSix(slideIndexSix);

function showSlidesSix (nSix) {
    if (nSix < 1) {
        slideIndexSix = slidesSix.length;
    } else if (nSix > slidesSix.length) {
        slideIndexSix = 1;
    }
    for (let i = 0; i < slidesSix.length; i++) {
        slidesSix[i].style.display = 'none';
    }
    for (let i = 0; i < dotsSix.length; i++) {
        dotsSix[i].classList.remove('dot-activeSix');
    }
    slidesSix[slideIndexSix - 1].style.display = 'block';
    dotsSix[slideIndexSix - 1].classList.add('dot-activeSix');
}

function plusSlidesSix (nSix) {
    showSlidesSix(slideIndexSix += nSix);
}
function currentSlideSix (nSix) {
    showSlidesSix(slideIndexSix = nSix)
}

prevSix.onclick = function () {
    plusSlidesSix(-1);
}
nextSix.onclick = function () {
    plusSlidesSix(1);
}
dotsAreaSix.onclick = function (e) {
    for (let i = 0; i < dotsSix.length + 1; i++) {
        if (e.target.classList.contains('dotSix') && e.target == dotsSix[i - 1]) {
            currentSlideSix(i);
        }
    }
}
