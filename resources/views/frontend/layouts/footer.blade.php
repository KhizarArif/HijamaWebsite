<footer class="footer_main_container">
    <div class="container footer_container">
        <div class="footer_logo">
            <div class="logo_container">
                <img src="{{asset('front_assets/image/logo.png')}}" alt="" class="logo_image">
            </div>
        </div>
        <div class="footer_description_container">
            <ul class="footer_description">
                <li>Acupuncture</li>
                <li>Physiotherapy</li>
                <li>About</li>
                <li>Contact</li>
            </ul>
            <p>All Rights reserved for hijamacuppinginfaisalabad.com</p>
        </div>
        <div class="footer_social_media">

            <div class="footer_social_media_item">
                <i class="fa-brands fa-facebook"></i>
            </div>
            <div class="footer_social_media_item">
                <i class="fa-brands fa-youtube"></i>
            </div>
            <div class="footer_social_media_item">
                <i class="fa-brands fa-instagram"></i>
            </div>
        </div>


    </div>

</footer>


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


<script>
    document.addEventListener("DOMContentLoaded", function() {
        const carousel = document.querySelector(".carousel");
        const arrowBtns = document.querySelectorAll(".wrapper i");
        const wrapper = document.querySelector(".wrapper");

        const firstCard = carousel.querySelector(".card");
        const firstCardWidth = firstCard.offsetWidth;

        let isDragging = false,
            startX,
            startScrollLeft,
            timeoutId;

        const dragStart = (e) => {
            isDragging = true;
            carousel.classList.add("dragging");
            startX = e.pageX;
            startScrollLeft = carousel.scrollLeft;
        };

        const dragging = (e) => {
            if (!isDragging) return;

            // Calculate the new scroll position
            const newScrollLeft = startScrollLeft - (e.pageX - startX);

            // Check if the new scroll position exceeds
            // the carousel boundaries
            if (newScrollLeft <= 0 || newScrollLeft >=
                carousel.scrollWidth - carousel.offsetWidth) {

                // If so, prevent further dragging
                isDragging = false;
                return;
            }

            // Otherwise, update the scroll position of the carousel
            carousel.scrollLeft = newScrollLeft;
        };

        const dragStop = () => {
            isDragging = false;
            carousel.classList.remove("dragging");
        };

        const autoPlay = () => {

            // Return if window is smaller than 800
            if (window.innerWidth < 800) return;

            // Calculate the total width of all cards
            const totalCardWidth = carousel.scrollWidth;

            // Calculate the maximum scroll position
            const maxScrollLeft = totalCardWidth - carousel.offsetWidth;

            // If the carousel is at the end, stop autoplay
            if (carousel.scrollLeft >= maxScrollLeft) return;

            // Autoplay the carousel after every 2500ms
            timeoutId = setTimeout(() =>
                carousel.scrollLeft += firstCardWidth, 2500);
        };

        carousel.addEventListener("mousedown", dragStart);
        carousel.addEventListener("mousemove", dragging);
        document.addEventListener("mouseup", dragStop);
        wrapper.addEventListener("mouseenter", () =>
            clearTimeout(timeoutId));
        wrapper.addEventListener("mouseleave", autoPlay);

        // Add event listeners for the arrow buttons to
        // scroll the carousel left and right
        arrowBtns.forEach(btn => {
            btn.addEventListener("click", () => {
                carousel.scrollLeft += btn.id === "left" ?
                    -firstCardWidth : firstCardWidth;
            });
        });
    });
</script>


</body>

</html>
