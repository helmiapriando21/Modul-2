document.addEventListener("DOMContentLoaded", function () {
    var slider = document.getElementById("hargaSlider");
    var hargaDisplay = document.getElementById("hargaDisplay");

    function tampilkanHargaRealTime() {
        var harga = slider.value;
        hargaDisplay.innerText = "Tiket tersedia mulai dari harga Rp." + harga + ".xx";
    }

    slider.addEventListener("input", function () {
        tampilkanHargaRealTime();
    });

});
