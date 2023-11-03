const Foodies = document.querySelector("section.pemesanan section.form-pemesanan form .data-pemesanan .blok-makanan #foodies");
const Amounts = document.querySelector("section.pemesanan section.form-pemesanan form .data-pemesanan .blok-jumlah #amounts");
const vouchers = document.querySelector("section.pemesanan section.form-pemesanan form .data-pemesanan .blok-voucher #vouchers");
const buttons = document.querySelector("section.pemesanan section.form-pemesanan form .buttons");

const name_desc = document.querySelector("section.pemesanan section.result p span.name");
const amount_desc = document.querySelector("section.pemesanan section.result p span.amount");
const discounts_desc = document.querySelector("section.pemesanan section.result p span.discounts");
const price_desc = document.querySelector("section.pemesanan section.result p span.price");

const namaPesanan = buttons.addEventListener("click", () => {
    event.preventDefault();
    let nama = "";
    if (Foodies.value == 75000) {
        nama = "Sushi";
    } else if (Foodies.value == 32000) {
        nama = "Ramen";
    } else if (Foodies.value == 30000) {
        nama = "Croissant";
    } else if (Foodies.value == 45000) {
        nama = " Pancake";
    }

    let totalDiscount = 0;
    let discount = 0;
    if (vouchers.value == "ASPRAKLEONGANTENG") {
        totalDiscount = 0.2;
        discount = 20;
    }
    let totalHarga = Foodies.value * Amounts.value;
    totalDiscount *= totalHarga;
    totalHarga -= totalDiscount;

    name_desc.textContent = nama;
    amount_desc.textContent = Amounts.value;
    discounts_desc.textContent = discount + "%";
    price_desc.textContent = totalHarga;
});