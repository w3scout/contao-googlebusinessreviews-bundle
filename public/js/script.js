"use strict";

(function () {
    document.addEventListener("DOMContentLoaded", function() {
        console.log('Test 2: Google Business Reviews 2');
        let reviews= document.querySelectorAll('.review p.text');
        reviews.forEach(function(r) {
            let t = r.innerText;
            r.innerText = t.slice(0,200);
            // ToDo: Add "..." to the end of the text, onClick show the full text
            // console.log(r.innerText);
        });
    });
})();
