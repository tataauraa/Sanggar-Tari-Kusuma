
        // JavaScript untuk carousel
        const images = [
            "1.jpg",
            "2.jpg",
            "3.jpg",
        ];
        const carouselContainer = document.getElementById("carousel-container");
        const imageElement = carouselContainer.querySelector("img");
        let currentIndex = 0;

        function nextImage() {
            currentIndex = (currentIndex + 1) % images.length;
            imageElement.src = images[currentIndex];
        }

        function prevImage() {
            currentIndex = (currentIndex - 1 + images.length) % images.length;
            imageElement.src = images[currentIndex];
        }

        // Menetapkan ukuran gambar sesuai dengan ukuran container
        const containerWidth = carouselContainer.offsetWidth;
        const containerHeight = carouselContainer.offsetHeight;
        imageElement.style.width = containerWidth + "px";
        imageElement.style.height = containerHeight + "px";
