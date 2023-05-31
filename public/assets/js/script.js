// ATUR UKURAN MAPS
const maps = document.querySelector('iframe[loading="lazy"]');

if (maps != null) {
    maps.style.width = "800px";
    maps.style.height = "600px";
    maps.classList.add('my-8', 'block', 'mx-auto');
}

const searchTipePenginapan = document.getElementById("search-tipe");
const inputKategori = document.getElementById("input-kategori");
const parentKategori = document.querySelector("#dropdown-kategori > ul");
const listKategori = parentKategori.querySelectorAll("li");

for (let i=0; i<listKategori.length; i++) {
    listKategori[i].addEventListener("click", function() {
        // mengganti judul tipe pencarian
        const nilai = listKategori[i].querySelector("button[type='button']");
        searchTipePenginapan.innerHTML = nilai.textContent;

        // menambahkan value input
        inputKategori.setAttribute("value", nilai.textContent);
    })
}