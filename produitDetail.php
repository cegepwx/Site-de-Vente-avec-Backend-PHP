<!DOCTYPE html>
<html lang="fr">
  
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>projet-integration</title>
    <link rel="stylesheet" href="produitDetail.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href='https://fonts.googleapis.com/css?family=Roboto:100,200,300,400,500,600,700,800,900;'  rel='stylesheet'
      type='text/css'>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:ital@1&family=Roboto:wght@100;300&display=swap"
      rel="stylesheet">
  </head>

  <?php
    include 'header.php'
  ?>

  <main>

    <div class="detail">

      <div class="ligneaimer">
        <div class="accueil">
          <a href="">Accueil</a>
          <span class="fleche">></span>
          <a href="./index.php">Catégorie de produits</a>
          <span class="fleche">></span>
          <span>Produit #1</span>
        </div>

        <div class="aimer">
          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M21.4326 4.0865C20.2545 2.9082 18.6948 2.26419 17.0299 2.26419C15.3653 2.26419 13.8006 2.91309 12.6226 4.09115L12.0072 4.70648L11.3823 4.08161C10.2041 2.90355 8.63493 2.25 6.97008 2.25C5.31013 2.25 3.74569 2.89866 2.5721 4.07207C1.39403 5.25032 0.745374 6.81481 0.750025 8.4796C0.750025 10.1442 1.40357 11.704 2.58164 12.8823L11.5398 21.8403C11.6637 21.9644 11.8307 22.0312 11.9928 22.0312C12.1551 22.0312 12.3221 21.969 12.446 21.8451L21.4231 12.9014C22.6013 11.7231 23.25 10.1587 23.25 8.49385C23.2549 6.82924 22.6109 5.26457 21.4326 4.0865ZM20.5168 11.9902L11.9928 20.481L3.48811 11.9761C2.5532 11.0411 2.03804 9.80094 2.03804 8.4796C2.03804 7.15831 2.54831 5.91812 3.48322 4.98809C4.41343 4.05782 5.65369 3.54267 6.97008 3.54267C8.29137 3.54267 9.53627 4.05782 10.4712 4.99274L11.5493 6.07064C11.802 6.32357 12.2075 6.32357 12.4605 6.07064L13.5288 5.00228C14.4637 4.06736 15.7086 3.55221 17.0253 3.55221C18.3417 3.55221 19.5819 4.06736 20.5168 4.99739C21.4517 5.93255 21.9623 7.17256 21.9623 8.49385C21.9669 9.81513 21.4517 11.0554 20.5168 11.9902Z" fill="black"/>
          </svg>
          <svg width="24" height="24" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M15.7465 14.6633L15.75 4.14534C15.7293 3.91174 15.5258 3.73486 15.2879 3.73486H12.3319C12.3042 1.98026 10.8212 0.5625 8.99994 0.5625C7.17883 0.5625 5.69578 1.98026 5.66815 3.73486C5.66815 3.73486 2.95345 3.73486 2.71214 3.73486C2.47083 3.73486 2.27074 3.91174 2.25 4.14534L2.25336 14.6633C2.25336 14.6767 2.25 14.6901 2.25 14.7034C2.25 15.901 3.38477 16.875 4.78163 16.875H13.2182C14.6152 16.875 15.75 15.901 15.75 14.7034C15.75 14.6901 15.75 14.6767 15.7465 14.6633ZM8.99994 1.46328C10.3072 1.46328 11.3731 2.47739 11.4005 3.73486H6.59933C6.62697 2.47739 7.69267 1.46328 8.99994 1.46328ZM13.2182 15.9744H4.78163C3.9055 15.9744 3.19515 15.4139 3.18136 14.7235V4.63905H5.66461V6.00664C5.66461 6.25684 5.8716 6.45699 6.13029 6.45699C6.38897 6.45699 6.59597 6.25684 6.59597 6.00664V4.63905H11.4005V6.00664C11.4005 6.25684 11.6075 6.45699 11.8662 6.45699C12.1249 6.45699 12.3319 6.25684 12.3319 6.00664V4.63905H14.7825V14.7235C14.7687 15.4139 14.091 15.9744 13.2182 15.9744Z" fill="black"/>
          </svg>
        </div>
      </div>

      <div class="photo">
        <div class="bigphoto">
          <img src="images/produit1.jpg" alt="photo1">
        </div>
        <div class="smallphoto">
          <div class="smallphoto1">
            <img src="images/produit1-1.jpg" alt="produit1-1">
          </div>
          <div class="smallphoto2">
            <img src="images/produit1-2.jpg" alt="produit1-2">
          </div>
        </div>
      </div>

      <div class="description">
        <p class="nameproduit">Produit #1</p>
        <p class="price">$68.99</p>
        <p class="intro">Care for fiber: at least 50% organic cotton.
          Organic cotton is grown through practices that help us protect 
          biodiversity such as crop rotation or the use of natural fertilizers
        </p>
      </div>

      <div class="aupanier">
        <button>Ajouter au panier</button>
      </div>

    </div>

  </main>

</html>