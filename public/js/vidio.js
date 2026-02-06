document.addEventListener("DOMContentLoaded", function () {
    const video = document.getElementById("companyVideo");
    const videoWrapper = document.getElementById("videoWrapper");
    const audioBtn = document.getElementById("audioToggle");
    const iconMuted = document.getElementById("iconMuted");
    const iconSound = document.getElementById("iconSound");

    // ==========================================
    // 1. LOGIC PLAY / PAUSE (Klik pada Video)
    // ==========================================
    videoWrapper.addEventListener("click", function (e) {
        // Cegah pause jika yang diklik adalah tombol audio
        if (e.target.closest("#audioToggle")) return;

        if (video.paused) {
            video.play();
            videoWrapper.classList.remove("paused"); // Sembunyikan icon play tengah
        } else {
            video.pause();
            videoWrapper.classList.add("paused"); // Munculkan icon play tengah
        }
    });

    // Sinkronisasi jika video berhenti otomatis atau buffer
    video.addEventListener("play", () => videoWrapper.classList.remove("paused"));
    video.addEventListener("pause", () => videoWrapper.classList.add("paused"));

    // ==========================================
    // 2. LOGIC AUDIO MUTE / UNMUTE
    // ==========================================
    audioBtn.addEventListener("click", function (e) {
        e.stopPropagation(); // Agar tidak men-trigger play/pause wrapper

        // Toggle Mute
        video.muted = !video.muted;

        // Update Icon
        if (video.muted) {
            // Jika Muted (Suara Mati)
            iconMuted.classList.remove("d-none");
            iconSound.classList.add("d-none");
        } else {
            // Jika Unmuted (Ada Suara)
            iconMuted.classList.add("d-none");
            iconSound.classList.remove("d-none");
        }
    });
});