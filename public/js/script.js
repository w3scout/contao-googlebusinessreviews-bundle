"use strict";

(function () {
    document.addEventListener("DOMContentLoaded", function() {
        let reviews= document.querySelectorAll('.review');
        reviews.forEach(function(r) {
            let t = r.querySelector('.text'),
                readmore = r.querySelector('.readmore');
            if(t.innerText.length >= 200) {
                readmore.style.display = 'block';
                readmore.addEventListener('click', function(e) {
                    e.preventDefault();
                    this.parentNode.classList.toggle('open');
                });
            }
        });
    });
})();
