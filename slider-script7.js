let dotsSeven = document.getElementsByClassName('dotSeven'),
    dotsAreaSeven = document.getElementById('dots-blockSeven'),
    slidesSeven = document.getElementsByClassName('slider-itemSeven'),
    prevSeven = document.getElementById('prev-btnSeven'),
    nextSeven = document.getElementById('next-btnSeven'),
    slideIndexSeven = 1;

    

showSlidesSeven(slideIndexSeven);

function showSlidesSeven (nSeven) {
    if (nSeven < 1) {
        slideIndexSeven = slidesSeven.length;
    } else if (nSeven > slidesSeven.length) {
        slideIndexSeven = 1;
    }
    for (let i = 0; i < slidesSeven.length; i++) {
        slidesSeven[i].style.display = 'none';
    }
    for (let i = 0; i < dotsSeven.length; i++) {
        dotsSeven[i].classList.remove('dot-activeSeven');
    }
    slidesSeven[slideIndexSeven - 1].style.display = 'block';
    dotsSeven[slideIndexSeven - 1].classList.add('dot-activeSeven');
}

function plusSlidesSeven (nSeven) {
    showSlidesSeven(slideIndexSeven += nSeven);
}
function currentSlideSeven (nSeven) {
    showSlidesSeven(slideIndexSeven = nSeven)
}

prevSeven.onclick = function () {
    plusSlidesSeven(-1);
}
nextSeven.onclick = function () {
    plusSlidesSeven(1);
}
dotsAreaSeven.onclick = function (e) {
    for (let i = 0; i < dotsSeven.length + 1; i++) {
        if (e.target.classList.contains('dotSeven') && e.target == dotsSeven[i - 1]) {
            currentSlideSeven(i);
        }
    }
}
