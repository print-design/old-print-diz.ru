<?php
$confectionery_class = "noncurrent";
$grocery_class = "noncurrent";
$bread_class = "noncurrent";
$snack_class = "noncurrent";
$candy_class = "noncurrent";
$ice_cream_class = "noncurrent";
$bottle_class = "noncurrent";
$hygiene_class = "noncurrent";
$chemicals_class = "noncurrent";
$sachet_class = "noncurrent";
$medicine_class = "noncurrent";
$milk_class = "noncurrent";
$hookah_class = "noncurrent";
$sauce_class = "noncurrent";
$film_class = "noncurrent";

switch ($_SERVER['PHP_SELF']) {
    case APPLICATION.'/prod/confectionery.php':
        $confectionery_class = "current";
        break;
    
    case APPLICATION.'/prod/grocery.php':
        $grocery_class = "current";
        break;
    
    case APPLICATION.'/prod/bread.php':
        $bread_class = "current";
        break;
    
    case APPLICATION.'/prod/snack.php':
        $snack_class = "current";
        break;
    
    case APPLICATION.'/prod/candy.php':
        $candy_class = "current";
        break;
    
    case APPLICATION.'/prod/ice-cream.php':
        $ice_cream_class = "current";
        break;
    
    case APPLICATION.'/prod/bottle.php':
        $bottle_class = "current";
        break;
    
    case APPLICATION.'/prod/hygiene.php':
        $hygiene_class = "current";
        break;
    
    case APPLICATION.'/prod/chemicals.php':
        $chemicals_class = "current";
        break;
    
    case APPLICATION.'/prod/sachet.php':
        $sachet_class = "current";
        break;
    
    case APPLICATION.'/prod/medicine.php':
        $medicine_class = "current";
        break;
    
    case APPLICATION.'/prod/milk.php':
        $milk_class = "current";
        break;
    
    case APPLICATION.'/prod/hookah.php':
        $hookah_class = "current";
        break;

    case APPLICATION.'/prod/sauce.php':
        $sauce_class = "current";
        break;
}
?>
<div class="left-freeze-menu menufloat" id="left-freeze-menu">
    <div class="left-menu-title">ПРОДУКЦИЯ</div>
    <p><a href="<?=APPLICATION ?>/confectionery/" title="Упаковка для кондитерских изделий" class="<?=$confectionery_class ?>">Кондитерские изделия</a></p>
    <p><a href="<?=APPLICATION ?>/grocery/" title="Упаковка для сыпучих продуктов, бакалея" class="<?=$grocery_class ?>">Бакалея</a></p>
    <p><a href="<?=APPLICATION ?>/bread/" title="Упаковка для хлеба" class="<?=$bread_class ?>">Хлеб</a></p>
    <p><a href="<?=APPLICATION ?>/snack/" title="Упаковка для снековой продукции" class="<?=$snack_class ?>">Снековая продукция</a></p>
    <p><a href="<?=APPLICATION ?>/candy/" title="Упаковка для конфет" class="<?=$candy_class ?>">Конфеты</a></p>
    <p><a href="<?=APPLICATION ?>/ice-cream/" title="Упаковка для мороженого" class="<?=$ice_cream_class ?>">Мороженое</a></p>
    <p><a href="<?=APPLICATION ?>/bottle/" title="Этикетка на бутылку" class="<?=$bottle_class ?>">Этикетка на бутылку</a></p>
    <p><a href="<?=APPLICATION ?>/hygiene/" title="Упаковка для средств гигиены" class="<?=$hygiene_class ?>">Средства гигиены</a></p>
    <p><a href="<?=APPLICATION ?>/chemicals/" title="Упаковка для бытовой химии" class="<?=$chemicals_class ?>">Бытовая химия</a></p>
    <p><a href="<?=APPLICATION ?>/sachet/" title="Упаковка для саше пакетов" class="<?=$sachet_class ?>">Саше пакеты</a></p>
    <p><a href="<?=APPLICATION ?>/medicine/" title="Упаковка для медицинской продукции" class="<?=$medicine_class ?>">Медицинская продукция</a></p>
    <p><a href="<?=APPLICATION ?>/milk/" title="Упаковка для молочной продукции" class="<?=$milk_class ?>">Молочная продукция</a></p>
    <p><a href="<?=APPLICATION ?>/hookah/" title="Упаковка для кальянного табака" class="<?=$hookah_class ?>">Кальянный табак</a></p>
    <p><a href="<?=APPLICATION ?>/sauce/" title="Упаковка для сосудов" class="<?=$sauce_class ?>">Соусы</a></p>
</div>