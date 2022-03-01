var menuHamburger = document.getElementById("menu");

var accueil = document.getElementById("test");

menuHamburger.onclick = () => {
    accueil.style.display = "flex";
}

let produits = document.querySelectorAll(".item1");
var moreProduits = document.getElementById("plusproduits");

moreProduits.onclick = () => {
    for (const produit of produits) {
        produit.style.display = "block";
        produit.style.margin = "35px 5px";

        let p = produit.querySelector("p");
        p.style.margintop = "15px";
        p.style.fontsize = "large";

        let img = produit.querySelector("img");
        img.style.height = "100%";
        img.style.width = "100%";
        img.style.objectfit = "cover";
    }
}
