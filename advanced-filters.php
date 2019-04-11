<?php 
$title = "Advanced Filters";
require('controllers/advanced-filters.php');
include './partials/header.php'; 

?>



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
                        <p class="search_filter_name">Genres</p>
                    </div>
                    <div class="arrow_container">
                        <div class="arrow"></div>
                    </div>
                </div>
                <div class="search_filter">
                    <div class="search_filter_type">
                        <div class="search_filter_emoji">🎉</div>
                        <p class="search_filter_name">Pour les familles</p>
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
            </div>
        </div>
        <div class="search_select_all">
            <div class="search_select-hidden select-0">
                <select class="select-genre">  
                    <option value="all">Tous</option>  
                    <option value="KnvZfZ7vAvv">Alternative</option>
                    <option value="KnvZfZ7vAvd">Blues</option>
                    <option value="KnvZfZ7vAvF">Dance/Electronic</option>
                    <option value="KnvZfZ7vAeJ">Classical</option>
                    <option value="KnvZfZ7vAv6">Country</option>
                    <option value="KnvZfZ7vAv1">Hip-Hop/Rap</option>
                    <option value="KnvZfZ7vAJ6">Latin</option>
                    <option value="KnvZfZ7vAvE">Jazz</option>
                    <option value="KnvZfZ7vAe7">Religious</option>
                    <option value="KnvZfZ7vAvt">Metal</option>                        
                    <option value="KnvZfZ7vAvl">Other</option>
                    <option value="KnvZfZ7vAev">Rock</option>
                    <option value="KnvZfZ7vAee">R&B</option>
                    <option value="KnvZfZ7vAev">Pop</option>
                </select>
                <div class="submit-genre">Appliquer ce genre</div>
            </div>
            <div class="search_select-hidden select-1">
                <div class="checkbox-family">
                    <input class="checkbox-family-input" type="checkbox" name="family"/>
                    <label for="family">Adapté aux familles </label>
                </div>
            </div>
            <div class="search_select-hidden select-2">
                <div> 
                    <div name="select" onclick="getMyPosition()">Autour de moi
                    </div>

                </div>
            </div>
            <div class="search_select-hidden select-3">
                <div> 
                    <input class="select-date" type="date"/>                    
                    <div class="submit-date">Appliquer cette date</div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="loader_container">
    <div>
        <img src="assets/images/loader.gif" alt="loader"/>
    </div>
</div>
<div class="event_container"> 
    <?php foreach($resultFilter->_embedded->events as $event): ?>
    <div class="event_card">
        <div class="card_first_part">
            <img src="<?= $event->images[5]->url ?>">
        </div>
        <div class="card_second_part">
            <div class="card_date">
                <p class="card_date_hours"><?= !empty($event->dates->start->localDate) ? date("d M Y", strtotime($event->dates->start->localDate)) : '' ?></p>
                <p class="card_date_grey"><?= !empty($event->dates->start->localTime) ? date("H:i", strtotime($event->dates->start->localTime)) : '' ?></p>
            </div>
            <div class="card_price">
                <p class="card_price_grey"><?= !empty($event->priceRanges[0]->currency) && !empty($event->priceRanges[0]->min) && !empty($event->priceRanges[0]->max) ? $event->priceRanges[0]->currency .' '. $event->priceRanges[0]->min .'-'. $event->priceRanges[0]->max : ''?></p>
            </div>
        </div>
        <div class="card_third_part">
            <div class="card_info">
                <p class="card_name"><?= $event->name ?></p>
                <p class="card_location"><?= $event->_embedded->venues[0]->city->name .','. $event->_embedded->venues[0]->country->name?></p>
            </div>
            <div class="card_checkout">
                <a href=<?= 'event/'.$event->id ?>>Détails ></a>
            </div>
        </div>  
    </div>
    <?php endforeach; ?>
    </div>
    <div class="pagination_container">
        <?php
    
            $temp = preg_match("/^http:(.*)/", "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'], $lien);
    
            $urlClean = shapeSpace_remove_var($lien[0], 'page');
            $pageActual;
            if(!empty($_GET['page']))
            {
                $pageActual = $_GET['page'];
                $pageActual = (int)$pageActual;
                if($pageActual < 1)
                {
                    $pageActual = 1;
                }
    
            }
            else 
            {
                $pageActual = 1;
            }
            if(!empty($_GET['page'])){
                if ($pageActual >= 1):
                    ?><a href="<?= $urlClean .'&page='. strval($pageActual-1); ?>">Page précédente</a> | <?php
                endif;
            }
            ?><a href="<?= $urlClean .'&page='. strval($pageActual+1); ?>">Page suivante</a><?php
        ?>
    </div>

<?php include './partials/footer.php' ?>
