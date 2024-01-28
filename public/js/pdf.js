function adjustZoomLevel() {
    var documentWidth = window.innerWidth ||
        document.documentElement.clientWidth ||
        document.body.clientWidth;

    // 1 cm = 37.795276px;
    var zoomLevel = documentWidth / (23 * 37.795276);

    // stop zooming when book fits page
    if (zoomLevel >= 1) return;

    document.querySelector(".book").style.transform = "scale(" + zoomLevel + ")";
}

adjustZoomLevel();

window.addEventListener("resize", adjustZoomLevel);