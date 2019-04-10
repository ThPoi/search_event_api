<?php 
$title = "Advanced Filters";
require('controllers/advanced-filters.php');
include './partials/header.php' ?>

<div class="main__search_container">
    <div class="main_search_background">
        <div class="main_search">
            <div class="main_search_event">
                <svg viewBox="0 0 16 16" role="presentation" aria-hidden="true" focusable="false" style="height: 32; width: 32; display: block; fill: currentcolor;"><path d="m2.5 7c0-2.5 2-4.5 4.5-4.5s4.5 2 4.5 4.5-2 4.5-4.5 4.5-4.5-2-4.5-4.5m13.1 6.9-2.8-2.9c.7-1.1 1.2-2.5 1.2-4 0-3.9-3.1-7-7-7s-7 3.1-7 7 3.1 7 7 7c1.5 0 2.9-.5 4-1.2l2.9 2.8c.2.3.5.4.9.4.3 0 .6-.1.8-.4.5-.5.5-1.2 0-1.7"></path></svg>
                <input placeholder="Rechercher des festivals" />
            </div>
            <div class="search_filter_container">
                <div class="search_filter">
                    <div class="search_filter_type">
                        <div class="search_filter_emoji">🎶</div>
                        <p class="search_filter_name">Catégories</p>
                    </div>
                    <div class="arrow_container">
                        <div class="arrow"></div>
                    </div>
                </div>
                <div class="search_filter">
                    <div class="search_filter_type">
                        <div class="search_filter_emoji">🎉</div>
                        <p class="search_filter_name">Populaires</p>
                    </div>
                    <div class="arrow_container">
                        <div class="arrow"></div>
                    </div>
                </div>
                <div class="search_filter">
                    <div class="search_filter_type">
                        <div class="search_filter_emoji">📍</div>
                        <p class="search_filter_name">Localisation</p>
                    </div>
                    <div class="arrow_container">
                        <div class="arrow"></div>
                    </div>
                </div>
                <div class="search_filter">
                    <div class="search_filter_type">
                        <div class="search_filter_emoji">📅</div>
                        <p class="search_filter_name">Date</p>
                    </div>
                    <div class="arrow_container">
                        <div class="arrow"></div>
                    </div>
                </div>
                <div class="search_filter">
                    <div class="search_filter_type">
                        <div class="search_filter_emoji">💸</div>
                        <p class="search_filter_name">Prix</p>
                    </div>
                    <div class="arrow_container">
                        <div class="arrow"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="search_select_all">
            <div class="search_select-hidden select-0">
                <form action="#" method="get"> 
                    <select name="categorie">    
                        <input type="checkbox" name="arts & theatre"/>
                        <label for="arts">Arts</label>
                        <input type="checkbox" name="sports"/>
                        <label for="arts">Sports</label>
                        <input type="checkbox" name="music"/>
                        <label for="arts">Musique</label>

                    </select>
                    <input class="select-submit" type="submit" value="Appliquer">
                </form>
            </div>
            <div class="search_select-hidden select-1">
                <form action="" method="get"> 
                    <div name="select">    
                        <option value="concert">Concert</option>
                        <option value="festival">Festival</option>
                    </div>
                    <input class="select-submit" type="submit" value="Appliquer">
                </form>
            </div>
            <div class="search_select-hidden select-2">
                <form action="" method="get"> 
                    <div name="select" onclick="getMyPosition()">   ok 
                    </div>
                    <input class="select-submit" type="submit" value="Appliquer">
                </form>
            </div>
            <div class="search_select-hidden select-3">
                <form action="" method="get"> 
                    <select name="select">    
                        <option value="concert">Concert</option>
                        <option value="festival">Festival</option>
                    </select>
                    <input class="select-submit" type="submit" value="Appliquer">
                </form>
            </div>
            <div class="search_select-hidden select-4">
                <form action="" method="get"> 
                    <select name="select">    
                        <option value="concert">Concert</option>
                        <option value="festival">Festival</option>
                    </select>
                    <input class="select-submit" type="submit" value="Appliquer">
                </form>
            </div>
        </div>
    </div>
</div>

<div class="event_container"> 
    <?php foreach($resultFilter->_embedded->events as $event): ?>
    <div class="event_card">
        <p><?= $event->name  ?></p>
        <p><?= $event->id  ?></p>
        <p><?= $event->dates->start->dateTime ?></p>
        <img src="<?= $event->images[9]->url ?>">
    </div>
    <?php endforeach; ?>
</div>

<?php include './partials/footer.php' ?>
