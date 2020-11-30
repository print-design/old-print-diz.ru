<nav aria-label="breadcrumb" class="d-none d-md-block">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="<?=APPLICATION ?>/">Главная</a></li>
        <?php
        switch ($_SERVER['PHP_SELF']) {
        case APPLICATION.'/manufacture.php':
            echo "<li class='breadcrumb-item active'>Производство</li>";
            break;
        
        case APPLICATION.'/package.php':
            echo "<li class='breadcrumb-item active'>Гибкая упаковка</li>";
            break;

        case APPLICATION.'/label.php':
            echo "<li class='breadcrumb-item active'>Этикетка</li>";
            break;
        
        case APPLICATION.'/film.php':
            echo "<li class='breadcrumb-item active'>Пленка без печати</li>";
            break;
        
        case APPLICATION.'/contact.php':
            echo "<li class='breadcrumb-item active'>Контакты</li>";
            break;
        
        // Гибкая упаковка
        
        case APPLICATION.'/prod/confectionery.php':
            echo "<li class='breadcrumb-item'><a href='".APPLICATION."/package/'>Гибкая упаковка</a></li>";
            echo "<li class='breadcrumb-item active'>Упаковка для кондитерских изделий</li>";
            break;
        
        case APPLICATION.'/prod/grocery.php':
            echo "<li class='breadcrumb-item'><a href='".APPLICATION."/package/'>Гибкая упаковка</a></li>";
            echo "<li class='breadcrumb-item active'>Упаковка для сыпучих продуктов, бакалея</li>";
            break;
        
        case APPLICATION.'/prod/bread.php':
            echo "<li class='breadcrumb-item'><a href='".APPLICATION."/package/'>Гибкая упаковка</a></li>";
            echo "<li class='breadcrumb-item active'>Упаковка для хлеба</li>";
            break;
        
        case APPLICATION.'/prod/snack.php':
            echo "<li class='breadcrumb-item'><a href='".APPLICATION."/package/'>Гибкая упаковка</a></li>";
            echo "<li class='breadcrumb-item active'>Упаковка для снековой продукции</li>";
            break;
        
        case APPLICATION.'/prod/candy.php':
            echo "<li class='breadcrumb-item'><a href='".APPLICATION."/package/'>Гибкая упаковка</a></li>";
            echo "<li class='breadcrumb-item active'>Упаковка для конфет</li>";
            break;
        
        case APPLICATION.'/prod/ice-cream.php':
            echo "<li class='breadcrumb-item'><a href='".APPLICATION."/package/'>Гибкая упаковка</a></li>";
            echo "<li class='breadcrumb-item active'>Упаковка для мороженого</li>";
            break;
        
        case APPLICATION.'/prod/bottle.php':
            echo "<li class='breadcrumb-item'><a href='".APPLICATION."/package/'>Гибкая упаковка</a></li>";
            echo "<li class='breadcrumb-item active'>Этикетка для бутылок</li>";
            break;
        
        case APPLICATION.'/prod/hygiene.php':
            echo "<li class='breadcrumb-item'><a href='".APPLICATION."/package/'>Гибкая упаковка</a></li>";
            echo "<li class='breadcrumb-item active'>Упаковка для средств гигиены</li>";
            break;
        
        case APPLICATION.'/prod/chemicals.php':
            echo "<li class='breadcrumb-item'><a href='".APPLICATION."/package/'>Гибкая упаковка</a></li>";
            echo "<li class='breadcrumb-item active'>Упаковка для бытовой химии</li>";
            break;
        
        case APPLICATION.'/prod/sachet.php':
            echo "<li class='breadcrumb-item'><a href='".APPLICATION."/package/'>Гибкая упаковка</a></li>";
            echo "<li class='breadcrumb-item active'>Упаковка для саше пакетов</li>";
            break;
        
        case APPLICATION.'/prod/medicine.php':
            echo "<li class='breadcrumb-item'><a href='".APPLICATION."/package/'>Гибкая упаковка</a></li>";
            echo "<li class='breadcrumb-item active'>Упаковка для медицинской продукции</li>";
            break;
        
        case APPLICATION.'/prod/milk.php':
            echo "<li class='breadcrumb-item'><a href='".APPLICATION."/package/'>Гибкая упаковка</a></li>";
            echo "<li class='breadcrumb-item active'>Упаковка для молочной продукции</li>";
            break;
        
        case APPLICATION.'/prod/hookah.php':
            echo "<li class='breadcrumb-item'><a href='".APPLICATION."/package/'>Гибкая упаковка</a></li>";
            echo "<li class='breadcrumb-item active'>Упаковка для кальянного табака</li>";
            break;
        
        case APPLICATION.'/prod/sauce.php':
            echo "<li class='breadcrumb-item'><a href='".APPLICATION."/package/'>Гибкая упаковка</a></li>";
            echo "<li class='breadcrumb-item active'>Упаковка для сосудов</li>";
            break;
        
        case APPLICATION.'/prod/prod15.php':
            echo "<li class='breadcrumb-item'><a href='".APPLICATION."/package/'>Гибкая упаковка</a></li>";
            echo "<li class='breadcrumb-item active'>Пленка без печати</li>";
            break;
        }
        ?>
    </ol>
</nav>