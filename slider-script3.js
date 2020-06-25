let dotsThree = document.getElementsByClassName('dotThree'),
    dotsAreaThree = document.getElementById('dots-blockThree'),
    slidesThree = document.getElementsByClassName('slider-itemThree'),
    prevThree = document.getElementById('prev-btnThree'),
    nextThree = document.getElementById('next-btnThree'),
    slideIndexThree = 1;

    

showSlidesThree(slideIndexThree);

function showSlidesThree (nThree) {
    if (nThree < 1) {
        slideIndexThree = slidesThree.length;
    } else if (nThree > slidesThree.length) {
        slideIndexThree = 1;
    }
    for (let i = 0; i < slidesThree.length; i++) {
        slidesThree[i].style.display = 'none';
    }
    for (let i = 0; i < dotsThree.length; i++) {
        dotsThree[i].classList.remove('dot-activeThree');
    }
    slidesThree[slideIndexThree - 1].style.display = 'block';
    dotsThree[slideIndexThree - 1].classList.add('dot-activeThree');
}

function plusSlidesThree (nThree) {
    showSlidesThree(slideIndexThree += nThree);
}
function currentSlideThree (nThree) {
    showSlidesThree(slideIndexThree = nThree)
}

prevThree.onclick = function () {
    plusSlidesThree(-1);
}
nextThree.onclick = function () {
    plusSlidesThree(1);
}
dotsAreaThree.onclick = function (e) {
    for (let i = 0; i < dotsThree.length + 1; i++) {
        if (e.target.classList.contains('dotThree') && e.target == dotsThree[i - 1]) {
            currentSlideThree(i);
        }
    }
}
