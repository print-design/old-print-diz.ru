<!doctype html>
<html lang="en">
  <head>
    <?php
    include '../include/head.php';
    ?>
  </head>
  <body>
      <?php
      include '../include/header.php';
      include '../include/navigation.php';
      include '../include/left-freeze-menu.php';
      ?>
      <div class="container">
          <?php
          include '../include/breadcrumbs.php';
          ?>
          <div class="d-flex justify-content-between mb-2">
              <div class="p-1">
                  <h1>Этикетка на бутылку</h1>
              </div>
              <div class="p-1">
                  <button class="btn btn-info order-product" data-toggle="modal" data-target="#orderModal" data-text="Этикетка на бутылку">Заказать</button>
              </div>
          </div>
          <hr/>
          <div class="prod-details">
              <div class="prod-image">
                  <img src="<?=APPLICATION ?>/images/bottle/DSC_0108.jpg" class="img-fluid" alt="Этикетка для бутылок"/>
              </div>
              <div class="prod-description">
                  <p>Выбирая товар, первым делом смотрят на этикетку. Именно она &laquo;продает&raquo; товар. Выбирая бутылку, покупатель оценивает её внешний вид и читает, что там написано. Итак, чем привлекательнее этикетка, тем выше продажи и выше доходы производителя.</p>
                  <p>Чтобы привлечь внимание потребителя именно к Вашему товару, мы для бутылочных этикеток используем прозрачную, жемчужную и металлизированную полипропиленовую пленку различной плотности.</p>
                  <p>Преимуществ несколько:</p>
                  <ul>
                      <li>высокая устойчивость против воздействия внешних факторов и против износа: не промокает при контакте с влагой, не плавится от высокой температуры, не прорывается и не деформируется при транспортировке;</li>
                      <li>красивый внешний вид;</li>
                      <li>приятная для тактильных ощущений поверхность;</li>
                      <li>в дизайне можно использовать прозрачный материал, что открывает ряд дополнительных возможностей для придания этикетке стильного и современного внешнего вида;</li>
                      <li>хорошо подходит для современных высокоскоростных этикетировочных линий, на которых можно получать большие тиражи готовой продукции в минимальные сроки.</li>
                  </ul>
                  <p>Плюс, стоимость такой этикетки ниже, за счёт маленького удельгого веса. Но при этом она выглядит очень современно и модно, что положительно сказывается на количестве продаж.</p>
                  <p>Для заказа звоните нам по телефону (4822) 78-18-10, (4822) 78-17-80 или оставляйте заявку на обратный звонок на нашем сайте.</p>
              </div>
          </div>
          
          <div class="slideshow-container">
              <!-- Full-width images with number and caption text -->
              <div class="slideshow-mySlides slideshow-fade">
                  <div class="slideshow-numbertext">1 / 12</div>
                  <img src="<?=APPLICATION ?>/images/bottle/DSC_0105.jpg" class="img-fluid" />
                  <div class="slideshow-text">Caption Text</div>
              </div>
              <div class="slideshow-mySlides slideshow-fade">
                  <div class="slideshow-numbertext">3 / 12</div>
                  <img src="<?=APPLICATION ?>/images/bottle/DSC_0108.jpg" class="img-fluid" />
                  <div class="slideshow-text">Caption Three</div>
              </div>
              <!-- Next and previous buttons -->
              <a class="slideshow-prev" onclick="plusSlides(-1)">&#10094;</a>
              <a class="slideshow-next" onclick="plusSlides(1)">&#10095;</a>
          </div>
          <br />
          <!-- The dots/circles -->
          <div style="text-align:center" class="d-block d-md-none">
              <span class="slideshow-dot" onclick="currentSlide(1)"></span>
              <span class="slideshow-dot" onclick="currentSlide(2)"></span>
          </div>
          <!--Thumbnail images-->
          <div class="row d-none d-md-flex">
              <div class="d-none d-md-flex col-md-3"></div>
              <div class="col-12 col-md-3">
                  <img class="img-fluid img-thumbnail slideshow-demo slideshow-cursor" src="<?=APPLICATION ?>/images/bottle/DSC_0105.jpg" onclick="currentSlide(1)" alt="" />
              </div>
              <div class="col-12 col-md-3">
                  <img class="img-fluid img-thumbnail slideshow-demo slideshow-cursor" src="<?=APPLICATION ?>/images/bottle/DSC_0108.jpg" onclick="currentSlide(2)" alt="" />
              </div>
          </div>
          
          <div class="material-structure-title">Возможные комбинации пленок</div>
          <div class="material-structure-item-title">БОПП жемчужный</div>
          <div class="material-structure-item">
              <div class="row">
                  <div class="layers col-12 col-md-6">
                      <ol>
                          <li class="z2">
                              <svg class="icon icon-comlaygray" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 198 115" width="198" height="115" aria-label="Icon composite layer gray"><path d="M101,1.09,195.74,54a4,4,0,0,1,1.55,5.44A4,4,0,0,1,195.74,61L101,113.91a4,4,0,0,1-3.9,0L2.26,61A4,4,0,0,1,.71,55.55,4,4,0,0,1,2.26,54L97.05,1.09A4,4,0,0,1,101,1.09Z" style="fill:pink;fill-rule:evenodd"/></svg>
                              <div class="layer-text">Поверх лак, Толщина: 1 мкр</div>
                          </li>
                          <li class="z1">
                              <svg class="icon icon-complayred" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 198 113" width="198" height="113" aria-label="Icon composite layer red"><path d="M100.92,1.06,195.61,53a4,4,0,0,1,1.58,5.43A4.09,4.09,0,0,1,195.61,60l-94.69,51.93a4,4,0,0,1-3.84,0L2.39,60A4,4,0,0,1,.81,54.58,4.09,4.09,0,0,1,2.39,53L97.08,1.06A4,4,0,0,1,100.92,1.06Z" style="fill:#b31b34;fill-rule:evenodd"/></svg>
                              <div class="layer-text">Красочный слой, Толщина: 1 мкр</div>
                          </li>
                          <li class="z0">
                              <svg class="icon icon-comlaywhite" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 198 113" width="198" height="113" aria-label="icon composite white"><path d="M100.44,1.93a3,3,0,0,0-2.88,0L2.87,53.87a3,3,0,0,0-1.43,3.47,3,3,0,0,0,1.43,1.79l94.69,51.94a3,3,0,0,0,2.88,0l94.69-51.94a3,3,0,0,0,1.43-3.47,3,3,0,0,0-1.43-1.79Z" style="fill:#fff;fill-rule:evenodd"/><path d="M99,112.44a4,4,0,0,1-1.92-.49L2.39,60A4,4,0,0,1,.48,57.62a4,4,0,0,1,.33-3A4,4,0,0,1,2.39,53L97.08,1.06a4,4,0,0,1,3.84,0L195.61,53a4,4,0,0,1,1.58,5.43A4.09,4.09,0,0,1,195.61,60L100.92,112A4,4,0,0,1,99,112.44ZM99,2.56a1.94,1.94,0,0,0-1,.25L3.35,54.75a2,2,0,0,0,0,3.5L98,110.19a2,2,0,0,0,1.92,0l94.69-51.94a2,2,0,0,0,0-3.5L100,2.81A1.94,1.94,0,0,0,99,2.56Z" style="fill:#4e6172"/></svg>
                              <div class="layer-text">Пленка, Вид: БОПП; Жем 35-40 мкм</div>
                          </li>
                      </ol>
                      <div class="layers-products"></div>
                  </div>
                  <div class="col-12 col-md-6">
                      <ul>
                          <li>Экономичность за счет маленького удельного веса</li>
                          <li>Очень красивый белый цвет за счет белозны материала</li>
                          <li>Хорошие характеристики на стиранеие за счет лака</li>
                          <li>Полная непрозрачность</li>
                          <li>Возможно возможно сделать и матовую и глянцевую этикетку</li>
                          <li>Идеально подходит для переработки на горизонтальных упаковочных автоматах</li>
                      </ul>
                  </div>
              </div>
          </div>
          <div class="material-structure-item-title">БОПП прозрачный</div>
          <div class="material-structure-item">
              <div class="row">
                  <div class="layers col-12 col-md-6">
                      <ol>
                          <li class="z1">
                              <svg class="icon icon-comlaywhite" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 198 113" width="198" height="113" aria-label="icon composite white"><path d="M100.44,1.93a3,3,0,0,0-2.88,0L2.87,53.87a3,3,0,0,0-1.43,3.47,3,3,0,0,0,1.43,1.79l94.69,51.94a3,3,0,0,0,2.88,0l94.69-51.94a3,3,0,0,0,1.43-3.47,3,3,0,0,0-1.43-1.79Z" style="fill:#fff;fill-rule:evenodd"/><path d="M99,112.44a4,4,0,0,1-1.92-.49L2.39,60A4,4,0,0,1,.48,57.62a4,4,0,0,1,.33-3A4,4,0,0,1,2.39,53L97.08,1.06a4,4,0,0,1,3.84,0L195.61,53a4,4,0,0,1,1.58,5.43A4.09,4.09,0,0,1,195.61,60L100.92,112A4,4,0,0,1,99,112.44ZM99,2.56a1.94,1.94,0,0,0-1,.25L3.35,54.75a2,2,0,0,0,0,3.5L98,110.19a2,2,0,0,0,1.92,0l94.69-51.94a2,2,0,0,0,0-3.5L100,2.81A1.94,1.94,0,0,0,99,2.56Z" style="fill:#4e6172"/></svg>
                              <div class="layer-text">Пленка, Вид: БОПП; Тип: Б, П, МЕТ, МАТ; Толщина: 15-30</div>
                          </li>
                          <li class="z0">
                              <svg class="icon icon-complayred" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 198 113" width="198" height="113" aria-label="Icon composite layer red"><path d="M100.92,1.06,195.61,53a4,4,0,0,1,1.58,5.43A4.09,4.09,0,0,1,195.61,60l-94.69,51.93a4,4,0,0,1-3.84,0L2.39,60A4,4,0,0,1,.81,54.58,4.09,4.09,0,0,1,2.39,53L97.08,1.06A4,4,0,0,1,100.92,1.06Z" style="fill:#b31b34;fill-rule:evenodd"/></svg>
                              <div class="layer-text">Красочный слой, Толщина: 1 мкр</div>
                          </li>
                      </ol>
                      <div class="layers-products"></div>
                  </div>
                  <div class="col-12 col-md-6">
                      <ul>
                          <li>Экономичность за счет маленького удельного веса</li>
                          <li>Очень глянцевая этикетка  за счет того что краска находтся со стороны бутылки</li>
                          <li>Нет не обходимости наносить лак посколько краска находтся межно бутылкой и плекой</li>
                          <li>Невозможность сцарапать краску во время транспортировки бутылок в стяге</li>
                          <li>Очень нассыщеннеы краски</li>
                          <li>Барьер по светопроницаемости</li>
                          <li>Прозрачность или непрозрачность этикетки</li>
                      </ul>
                  </div>
              </div>
          </div>
          <div class="material-structure-item-title">БОПП+БОПП</div>
          <div class="material-structure-item">
              <div class="row">
                  <div class="layers col-12 col-md-6">
                      <div class="layers">
                          <ol>
                              <li class="z2">
                                  <svg class="icon icon-comlaywhite" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 198 113" width="198" height="113" aria-label="icon composite white"><path d="M100.44,1.93a3,3,0,0,0-2.88,0L2.87,53.87a3,3,0,0,0-1.43,3.47,3,3,0,0,0,1.43,1.79l94.69,51.94a3,3,0,0,0,2.88,0l94.69-51.94a3,3,0,0,0,1.43-3.47,3,3,0,0,0-1.43-1.79Z" style="fill:#fff;fill-rule:evenodd"/><path d="M99,112.44a4,4,0,0,1-1.92-.49L2.39,60A4,4,0,0,1,.48,57.62a4,4,0,0,1,.33-3A4,4,0,0,1,2.39,53L97.08,1.06a4,4,0,0,1,3.84,0L195.61,53a4,4,0,0,1,1.58,5.43A4.09,4.09,0,0,1,195.61,60L100.92,112A4,4,0,0,1,99,112.44ZM99,2.56a1.94,1.94,0,0,0-1,.25L3.35,54.75a2,2,0,0,0,0,3.5L98,110.19a2,2,0,0,0,1.92,0l94.69-51.94a2,2,0,0,0,0-3.5L100,2.81A1.94,1.94,0,0,0,99,2.56Z" style="fill:#4e6172"/></svg>
                                  <div class="layer-text">Пленка, Вид: БОПП; Тип: Б, П, МЕТ, МАТ; Толщина: 15-30</div>
                              </li>
                              <li class="z1">
                                  <svg class="icon icon-complayred" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 198 113" width="198" height="113" aria-label="Icon composite layer red"><path d="M100.92,1.06,195.61,53a4,4,0,0,1,1.58,5.43A4.09,4.09,0,0,1,195.61,60l-94.69,51.93a4,4,0,0,1-3.84,0L2.39,60A4,4,0,0,1,.81,54.58,4.09,4.09,0,0,1,2.39,53L97.08,1.06A4,4,0,0,1,100.92,1.06Z" style="fill:#b31b34;fill-rule:evenodd"/></svg>
                                  <div class="layer-text">Красочный слой, Толщина: 1 мкр</div>
                              </li>
                              <li class="z0">
                                  <svg class="icon icon-comlaywhite" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 198 113" width="198" height="113" aria-label="icon composite white"><path d="M100.44,1.93a3,3,0,0,0-2.88,0L2.87,53.87a3,3,0,0,0-1.43,3.47,3,3,0,0,0,1.43,1.79l94.69,51.94a3,3,0,0,0,2.88,0l94.69-51.94a3,3,0,0,0,1.43-3.47,3,3,0,0,0-1.43-1.79Z" style="fill:#fff;fill-rule:evenodd"/><path d="M99,112.44a4,4,0,0,1-1.92-.49L2.39,60A4,4,0,0,1,.48,57.62a4,4,0,0,1,.33-3A4,4,0,0,1,2.39,53L97.08,1.06a4,4,0,0,1,3.84,0L195.61,53a4,4,0,0,1,1.58,5.43A4.09,4.09,0,0,1,195.61,60L100.92,112A4,4,0,0,1,99,112.44ZM99,2.56a1.94,1.94,0,0,0-1,.25L3.35,54.75a2,2,0,0,0,0,3.5L98,110.19a2,2,0,0,0,1.92,0l94.69-51.94a2,2,0,0,0,0-3.5L100,2.81A1.94,1.94,0,0,0,99,2.56Z" style="fill:#4e6172"/></svg>
                                  <div class="layer-text">Вид: БОПП; Тип: П, МЕТ; Толщина: 15-35</div>
                              </li>
                          </ol>
                      </div>
                      <div class="layers-products"></div>
                  </div>
                  <div class="col-12 col-md-6">
                      <ul>
                          <li>Возможности нанесения печати межслоев пленок</li>
                          <li>Невозможность сцарапать краску, так как. она между двух слоев пленок</li>
                          <li>Экономичность за счет маленького удельного веса</li>
                          <li>Высокая прочность, не допускающая повреждений в процессе наклейки</li>
                          <li>Возможен матовый стиль упаковки</li>
                          <li>Более высокий «выход» и меньший удельный вес (за счет вспененной структуры)</li>
                          <li>Очень матовый или очень глянцевый внешний вид этикетки</li>
                          <li>Прозрачность или не прозрачность этикетки</li>
                          <li>Защита от прямого воздействия солнечного света</li>
                      </ul>
                  </div>
              </div>
          </div>
          <?php
          include '../include/feedback.php';
          ?>
      </div>
      <?php
      include '../include/footer.php';
      include '../include/prodscript.php';
      ?>
  </body>
</html>
