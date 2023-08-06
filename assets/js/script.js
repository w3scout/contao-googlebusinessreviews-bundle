"use strict";

(function () {
    document.addEventListener("DOMContentLoaded", function() {

        function initToggles() {
            function toggleText(el) {
                el.parentNode.classList.contains('open') ? el.innerText = el.getAttribute('data-readless') : el.innerText = el.getAttribute('data-readmore');
            }

            let reviews= document.querySelectorAll('.review');
            reviews.forEach(function(review) {
                let t = review.querySelector('.text'),
                    r = review.querySelector('.readmore');
                if(t.innerText.length >= 200) {
                    review.classList.contains('open') ? r.innerText = r.getAttribute('data-readless') : r.innerText = r.getAttribute('data-readmore')
                    r.style.display = 'block';
                    r.addEventListener('click', function(e) {
                        e.preventDefault();
                        this.parentNode.classList.toggle('open');
                        toggleText(this);
                    });
                }
            });
        }
        initToggles();
    });
})();
