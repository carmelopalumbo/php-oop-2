<body>
    <main>
        <div class="container">
            <div class="row text-center py-4">
                <h1>YOUR FAVOURITE PET STORE!</h1>
            </div>

            <!-- food -->
            <div class="row mb-5">
                <h3 class="text-center py-4">CIBO PER CANI E GATTI</h3>
                <?php foreach ($food_stock as $food) : ?>
                    <div class="col-4 my-4">
                        <div class="card m-auto" style="width: 18rem;">
                            <img src="<?php echo $food->image ?>" class="card-img-top prod-image" alt="<?php echo $food->name ?>">
                            <div class="card-body text-center">
                                <img src="<?php echo $food->category->icon ?>" alt="" class="type-icon">
                                <h5 class="card-title py-2"><?php echo $food->name ?></h5>
                                <p class="card-text"><strong>Taglia: </strong><?php echo $food->weight ?></p>
                                <p class="card-text"><strong>Produttore: </strong><?php echo $food->brand ?> </p>
                                <p class="card-text"><strong>Ingredienti: </strong><?php echo $food->ingredients ?> </p>
                                <p class="card-text"><strong>Data di scadenza: </strong><?php echo $food->expiry_date ?></p>
                                <p class="card-text"><strong>Disponibilità: </strong><?php echo $food->inStore ? 'Disponibile' : 'Esaurito' ?></p>
                                <p class="card-text"><strong>Prezzo: </strong><?php echo $food->price ?>&euro; </p>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>

            <!-- accessory -->
            <div class="row mb-5">
                <h3 class="text-center py-4">ACCESSORI PER CANI E GATTI</h3>
                <?php foreach ($accessory_stock as $accessory) : ?>
                    <div class="col-4 my-4">
                        <div class="card m-auto" style="width: 18rem;">
                            <img src="<?php echo $accessory->image ?>" class="card-img-top prod-image" alt="<?php echo $accessory->name ?>">
                            <div class="card-body text-center">
                                <img src="<?php echo $accessory->category->icon ?>" alt="" class="type-icon">
                                <h5 class="card-title py-2"><?php echo $accessory->name ?></h5>
                                <p class="card-text"><strong>Produttore: </strong><?php echo $accessory->brand ?> </p>
                                <p class="card-text"><strong>Materiali: </strong><?php echo $accessory->material ?> </p>
                                <p class="card-text"><strong>Disponibilità: </strong><?php echo $accessory->inStore ? 'Disponibile' : 'Esaurito' ?></p>
                                <p class="card-text"><strong>Prezzo: </strong><?php echo $accessory->price ?>&euro; </p>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>

            <!-- toys -->
            <div class="row mb-5">
                <h3 class="text-center py-4">GIOCHI PER CANI E GATTI</h3>
                <?php foreach ($toys_stock as $toy) : ?>
                    <div class="col-4 my-4">
                        <div class="card m-auto" style="width: 18rem;">
                            <img src="<?php echo $toy->image ?>" class="card-img-top prod-image" alt="<?php echo $toy->name ?>">
                            <div class="card-body text-center">
                                <h5 class="card-title py-2"><?php echo $toy->name ?></h5>
                                <p class="card-text"><strong>Produttore: </strong><?php echo $toy->brand ?> </p>
                                <p class="card-text"><strong>Per animali taglia: </strong><?php echo $toy->size ?> </p>
                                <p class="card-text"><strong>Disponibilità: </strong><?php echo $toy->inStore ? 'Disponibile' : 'Esaurito' ?></p>
                                <p class="card-text"><strong>Descrizione: </strong><?php echo $toy->feature ?></p>
                                <p class="card-text"><strong>Prezzo: </strong><?php echo $accessory->price ?>&euro; </p>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </main>
</body>