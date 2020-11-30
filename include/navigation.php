<?php
$index_status = $_SERVER['PHP_SELF'] == APPLICATION.'/index.php' ? ' disabled' : '';
$manufacture_status = $_SERVER['PHP_SELF'] == APPLICATION.'/manufacture.php' ? ' disabled' : '';
$package_status = $_SERVER['PHP_SELF'] == APPLICATION.'/package.php' ? ' disabled' : '';
$label_status = $_SERVER['PHP_SELF'] == APPLICATION.'/label.php' ? ' disabled' : '';
$film_status = $_SERVER['PHP_SELF'] == APPLICATION.'/film.php' ? ' disabled' : '';
$contact_status = $_SERVER['PHP_SELF'] == APPLICATION.'/contact.php' ? ' disabled' : '';
?>
<nav class="navbar navbar-light navbar-expand-md" style="transform: translateY(0px);" id="navbar">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarPrintDesign" aria-controls="navbarPrintDesign" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarPrintDesign">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link<?=$index_status ?>" href="<?=APPLICATION ?>/">О компании</a>
            </li>
            <li class="nav-item">
                <a class="nav-link<?=$manufacture_status ?>" href="<?=APPLICATION ?>/manufacture/">Производство</a>
            </li>
            <li class="nav-item">
                <a class="nav-link<?=$package_status ?>" href="<?=APPLICATION ?>/package/">Гибкая упаковка</a>
            </li>
            <li class="nav-item">
                <a class="nav-link<?=$label_status ?>" href="<?=APPLICATION ?>/label/">Этикетка</a>
            </li>
            <li class="nav-item">
                <a class="nav-link<?=$film_status ?>" href="<?=APPLICATION ?>/film/">Пленка без печати</a>
            </li>
            <li class="nav-item">
                <a class="nav-link<?=$contact_status ?>" href="<?=APPLICATION ?>/contact/">Контакты</a>
            </li>
        </ul>
    </div>
</nav>
<div id="navbarPlaceholder"></div>