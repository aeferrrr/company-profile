<script>
    function changeVideo(videoSource, title, element) {
        const video = document.getElementById('companyVideo');
        const titleElement = document.getElementById('currentVideoTitle');
        const items = document.querySelectorAll('.video-item');

        if (video.src.includes(videoSource)) return;

        video.pause();
        video.src = videoSource;
        video.load();

        video.onloadeddata = () => video.play();

        titleElement.innerText = title;
        items.forEach(item => item.classList.remove('active'));
        element.classList.add('active');
    }
</script>
