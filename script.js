const initSlider = () => {
    const imageList = document.querySelector(".slider-wrapper .image-list");
    const slideButtons = document.querySelectorAll(".slider-wrapper .slide-button");
    const sliderScrollbar = document.querySelector(".container .slider-scrollbar");
    const scrollbarThumb = document.querySelector(".scrollbar-thumb");
    const maxScrollleft = imageList.scrollWidth - imageList.clientWidth;
    

    scrollbarThumb.addEventListener("mousedown", (e) => {
        const startX = e.clientX;
        const thumbPosition = scrollbarThumb.offsetLeft;

        //handle scrollbar thumb drag
        const handleMouseMove = (e) => {
            const deltaX = e.clientX - startX;
            const newThumbPosition = thumbPosition + deltaX;
            const maxThumbPosition = sliderScrollbar.getBoundingClientRect().width - scrollbarThumb.offsetWidth;

            const boundedPosition = Math.max(0, Math.min(maxThumbPosition, newThumbPosition));
            const scrollPosition = (boundedPosition / maxThumbPosition) * maxScrollleft;
           

            scrollbarThumb.style.left = `${boundedPosition}px`;
            imageList.scrollLeft = scrollPosition;
        }

        //remove event listeners for mouse up
        const handleMouseUp = () => {
            document.removeEventListener("mousemove", handleMouseMove);
            document.removeEventListener("mouseup", handleMouseUp);
        }

        // add event listeners for drag interaction
        document.addEventListener("mousemove", handleMouseMove);
        document.addEventListener("mouseup", handleMouseUp);

    });
   
    //slide images according to the slide button clicks
    slideButtons.forEach(button => {
        button.addEventListener("click", () => {
           const direction = button.id === "prev-slide" ? -1 : 1;
           const scrollAmount = imageList.clientWidth * direction;
           imageList.scrollBy({ left: scrollAmount, behavior: "smooth" });
        });
    });

    const handleSliderButtons = () => {
       slideButtons[0].style.display = imageList.scrollLeft <= 0 ? "none" : "block";
       slideButtons[1].style.display = imageList.scrollLeft >= maxScrollleft ? "none" : "block";
    }
    
    // update scrollbar thumb position based on image scrolling
    const updateScrollThumbPosition = () => {
        const scrollPosition = imageList.scrollLeft;
        const thumbPosition = (scrollPosition / maxScrollleft) * (sliderScrollbar.clientWidth - scrollbarThumb.offsetWidth);
        scrollbarThumb.style.left = `${thumbPosition}px`;
      
    }
    imageList.addEventListener("scroll", () => {
        handleSliderButtons();
        updateScrollThumbPosition();
    });

}

window.addEventListener("load", initSlider);