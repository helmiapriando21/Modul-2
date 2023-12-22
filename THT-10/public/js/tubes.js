document.addEventListener("DOMContentLoaded", function () {
    var slider = document.getElementById("hargaSlider");
    var hargaDisplay = document.getElementById("hargaDisplay");
    const tombolDarkModeButton = document.getElementById("tombolDarkMode");

    function tampilkanHargaRealTime() {
        var harga = slider.value;
        hargaDisplay.innerText = "Tiket tersedia mulai dari harga Rp." + harga + ".xx";
    }

    function toggleDarkMode() {
        document.body.classList.toggle("dark-mode");
    }

    slider.addEventListener("input", function () {
        tampilkanHargaRealTime();
    });

    tombolDarkModeButton.addEventListener("click", toggleDarkMode);
});
