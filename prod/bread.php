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
                  <h1>Упаковка для хлеба и хлебобулочных изделий</h1>
              </div>
              <div class="p-1">
                  <button class="btn btn-info order-product" data-toggle="modal" data-target="#orderModal" data-text="Упаковка для хлеба и хлебобулочных изделий">Заказать</button>
              </div>
          </div>
          <hr/>
          <div class="prod-details">
              <div class="prod-image">
                  <img src="<?=APPLICATION ?>/images/bread/DSC_0844zz.jpg" class="img-fluid" alt="Упаковка для хлеба"/>
              </div>
              <div class="prod-description">
                  <p>Мало кому хочется купить чёрствый или заплесневелый хлеб. Согласитесь? Чтобы избежать этого, хлебобулочные изделия надо упаковывать в пленочные материалы.</p>
                  <p>Хлебобулочные изделия &ndash; быстропортящиеся продукты. Поэтому, упаковка для них должна обладать опредеденными свойствами:</p>
                  <ul>
                      <li>защищать от загрязнений, влаги, насекомых;</li>
                      <li>увеличивать срок хранения, не позволяя продукту черстветь;</li>
                      <li>быть устойчивой к механическим повреждениям.</li>
                  </ul>
                  <p>А кроме того, упаковка должна привлекать внимание покупателей яркими красками и запоминающимся дизайном, увеличивая объемы продаж.</p>
                  <p>И всё это в соответствии с установленными ГОСТами и другими стандартами.</p>
                  <p>Компания &laquo;Принт-Дизайн&raquo; легко объединяет всё вышеперечисленное воедино, создавая упаковку под конкретные потребности и требования производителя.</p>
                  <p>Если Вам нужна надёжная упаковка для:</p>
                  <ul>
                      <li>хлеба и выпечки;</li>
                      <li>вафель, пряников, печенья;</li>
                      <li>рулетов, тортов и конфет,</li>
                  </ul>
                  <p>звоните нам по телефону или оставляйте заявку на обратный звонок на нашем сайте.</p>
              </div>
          </div>
          
          <div class="slideshow-container">
              <!-- Full-width images with number and caption text -->
              <div class="slideshow-mySlides slideshow-fade">
                  <div class="slideshow-numbertext">1 / 12</div>
                  <img src="<?=APPLICATION ?>/images/bread/DSC_0831.jpg" class="img-fluid" />
                  <div class="slideshow-text">Caption Text</div>
              </div>
              <div class="slideshow-mySlides slideshow-fade">
                  <div class="slideshow-numbertext">2 / 12</div>
                  <img src="<?=APPLICATION ?>/images/bread/DSC_0840.jpg" class="img-fluid" />
                  <div class="slideshow-text">Caption Two</div>
              </div>
              <div class="slideshow-mySlides slideshow-fade">
                  <div class="slideshow-numbertext">3 / 12</div>
                  <img src="<?=APPLICATION ?>/images/bread/DSC_0844zz.jpg" class="img-fluid" />
                  <div class="slideshow-text">Caption Three</div>
              </div>
              <div class="slideshow-mySlides slideshow-fade">
                  <div class="slideshow-numbertext">4 / 12</div>
                  <img src="<?=APPLICATION ?>/images/bread/DSC_0846.jpg" class="img-fluid" />
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
              <span class="slideshow-dot" onclick="currentSlide(3)"></span>
              <span class="slideshow-dot" onclick="currentSlide(4)"></span>
          </div>
          <!--Thumbnail images-->
          <div class="row d-none d-md-flex">
              <div class="col-12 d-md-none d-lg-flex col-lg-2"></div>
              <div class="col-12 col-md-3 col-lg-2">
                  <img class="img-fluid img-thumbnail slideshow-demo slideshow-cursor" src="<?=APPLICATION ?>/images/bread/DSC_0831.jpg" onclick="currentSlide(1)" alt="" />
              </div>
              <div class="col-12 col-md-3 col-lg-2">
                  <img class="img-fluid img-thumbnail slideshow-demo slideshow-cursor" src="<?=APPLICATION ?>/images/bread/DSC_0840.jpg" onclick="currentSlide(2)" alt="" />
              </div>
              <div class="col-12 col-md-3 col-lg-2">
                  <img class="img-fluid img-thumbnail slideshow-demo slideshow-cursor" src="<?=APPLICATION ?>/images/bread/DSC_0844zz.jpg" onclick="currentSlide(3)" alt="" />
              </div>
              <div class="col-12 col-md-3 col-lg-2">
                  <img class="img-fluid img-thumbnail slideshow-demo slideshow-cursor" src="<?=APPLICATION ?>/images/bread/DSC_0846.jpg" onclick="currentSlide(4)" alt="" />
              </div>
          </div>
          
          <div class="material-structure-title">Возможные комбинации пленок</div>
          <div class="material-structure-item-title">БОПП</div>
          <div class="material-structure-item">
              <div class="row">
                  <div class="layers col-12 col-md-6">
                      <ol>
                          <li class="z1">
                              <svg class="icon icon-complayred" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 198 113" width="198" height="113" aria-label="Icon composite layer red"><path d="M100.92,1.06,195.61,53a4,4,0,0,1,1.58,5.43A4.09,4.09,0,0,1,195.61,60l-94.69,51.93a4,4,0,0,1-3.84,0L2.39,60A4,4,0,0,1,.81,54.58,4.09,4.09,0,0,1,2.39,53L97.08,1.06A4,4,0,0,1,100.92,1.06Z" style="fill:#b31b34;fill-rule:evenodd"/></svg>
                              <div class="layer-text">Красочный слой, Толщина: 1 мкр</div>
                          </li>
                          <li class="z0">
                              <svg class="icon icon-comlaywhite" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 198 113" width="198" height="113" aria-label="icon composite white"><path d="M100.44,1.93a3,3,0,0,0-2.88,0L2.87,53.87a3,3,0,0,0-1.43,3.47,3,3,0,0,0,1.43,1.79l94.69,51.94a3,3,0,0,0,2.88,0l94.69-51.94a3,3,0,0,0,1.43-3.47,3,3,0,0,0-1.43-1.79Z" style="fill:#fff;fill-rule:evenodd"/><path d="M99,112.44a4,4,0,0,1-1.92-.49L2.39,60A4,4,0,0,1,.48,57.62a4,4,0,0,1,.33-3A4,4,0,0,1,2.39,53L97.08,1.06a4,4,0,0,1,3.84,0L195.61,53a4,4,0,0,1,1.58,5.43A4.09,4.09,0,0,1,195.61,60L100.92,112A4,4,0,0,1,99,112.44ZM99,2.56a1.94,1.94,0,0,0-1,.25L3.35,54.75a2,2,0,0,0,0,3.5L98,110.19a2,2,0,0,0,1.92,0l94.69-51.94a2,2,0,0,0,0-3.5L100,2.81A1.94,1.94,0,0,0,99,2.56Z" style="fill:#4e6172"/></svg>
                              <div class="layer-text">Пленка, Вид: БОПП; Тип: Б, П, МЕТ, Ж; Толщина: 20-35</div>
                          </li>
                      </ol>
                      <div class="layers-products">Хлеба и выпечка.</div>
                  </div>
                  <div class="col-12 col-md-6">
                      <ul>
                          <li>Экономичность , так пленка имеет малый удельный вес</li>
                          <li>Высокая глянцевость или матовость за счет возможности нанесения матового лака</li>
                          <li>Барьерные свойства по влаге</li>
                          <li>Крепкость сварного шва на фасовке</li>
                          <li>Барьер по светопроницаемости</li>
                          <li>Высокая скорость на фасовке</li>
                      </ul>
                  </div>
              </div>
          </div>
          <div class="material-structure-item-title">CПП</div>
          <div class="material-structure-item">
              <div class="row">
                  <div class="layers col-12 col-md-6">
                      <ol>
                          <li class="z1">
                              <svg class="icon icon-complayred" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 198 113" width="198" height="113" aria-label="Icon composite layer red"><path d="M100.92,1.06,195.61,53a4,4,0,0,1,1.58,5.43A4.09,4.09,0,0,1,195.61,60l-94.69,51.93a4,4,0,0,1-3.84,0L2.39,60A4,4,0,0,1,.81,54.58,4.09,4.09,0,0,1,2.39,53L97.08,1.06A4,4,0,0,1,100.92,1.06Z" style="fill:#b31b34;fill-rule:evenodd"/></svg>
                              <div class="layer-text">Красочный слой, Толщина: 1 мкр</div>
                          </li>
                          <li class="z0">
                              <svg class="icon icon-comlaygray" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 198 115" width="198" height="115" aria-label="Icon composite layer gray"><path d="M101,1.09,195.74,54a4,4,0,0,1,1.55,5.44A4,4,0,0,1,195.74,61L101,113.91a4,4,0,0,1-3.9,0L2.26,61A4,4,0,0,1,.71,55.55,4,4,0,0,1,2.26,54L97.05,1.09A4,4,0,0,1,101,1.09Z" style="fill:#84929f;fill-rule:evenodd"/><path d="M99,112.44a4,4,0,0,1-1.92-.49L2.39,60A4,4,0,0,1,.48,57.62a4,4,0,0,1,.33-3A4,4,0,0,1,2.39,53L97.08,1.06a4,4,0,0,1,3.84,0L195.61,53a4,4,0,0,1,1.58,5.43A4.09,4.09,0,0,1,195.61,60L100.92,112A4,4,0,0,1,99,112.44ZM99,2.56a1.94,1.94,0,0,0-1,.25L3.35,54.75a2,2,0,0,0,0,3.5L98,110.19a2,2,0,0,0,1.92,0l94.69-51.94a2,2,0,0,0,0-3.5L100,2.81A1.94,1.94,0,0,0,99,2.56Z" style="fill:#4e6172"/></svg>
                              <div class="layer-text">Пленка, Вид: СПП; Тип: П; Толщина: 20-35</div>
                          </li>
                      </ol>
                      <div class="layers-products"></div>
                  </div>
                  <div class="col-12 col-md-6">
                      <ul>
                          <li>Экономичность , так пленка имеет малый удельный вес</li>
                          <li>Высокая глянцевость или матовость за счет возможности нанесения матового лака</li>
                          <li>Барьерные свойства по влаге</li>
                          <li>Крепкость сварного шва на фасовке</li>
                          <li>Барьер по светопроницаемости</li>
                          <li>Высокая скорость на фасовке</li>
                          <li>Не боится высоких температур</li>
                          <li>Очень устойчив к повреждению острыми предметами</li>
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
                      <div class="layers-products">Вафли, пряники, печенье, групповая упаковка, рулеты, торты, конфеты (шоколадные, батончики, карамель).</div>
                  </div>
                  <div class="col-12 col-md-6">
                      <ul>
                          <li>Улучшенные барьерные свойства по влаге</li>
                          <li>Возможности нанесения печати межслоев пленок</li>
                          <li>Невозможность сцарапать краску, так как. она между двух слоев пленок</li>
                          <li>Высокой прочности характеристики упаковки, стойкость к механическим повреждениям</li>
                          <li>Высокие свойста проницаемости водяных паров</li>
                          <li>Очень матовый или очень глянцевый внешний вид упаковки</li>
                          <li>Повышенный срок храния уже упаковнноего изделия</li>
                          <li>Высокие свойства ароматопроницаемости</li>
                          <li>Высокие свойства по газопроницаемости</li>
                          <li>Низкая влагопроницаемость</li>
                          <li>Крепкость сварного шва на фасовке</li>
                          <li>Защита от проникновения внешних запахов в продукт</li>
                          <li>Позволяет использовать инертный газ в качестве добавления во внутреннею среду упаковки во время фасовки для продления срока годности продукта</li>
                      </ul>
                  </div>
              </div>
          </div>
          <div class="material-structure-item-title">БОПП+ПЭ</div>
          <div class="material-structure-item">
              <div class="row">
                  <div class="layers col-12 col-md-6">
                      <ol>
                          <li class="z2">
                              <svg class="icon icon-comlaywhite" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 198 113" width="198" height="113" aria-label="icon composite white"><path d="M100.44,1.93a3,3,0,0,0-2.88,0L2.87,53.87a3,3,0,0,0-1.43,3.47,3,3,0,0,0,1.43,1.79l94.69,51.94a3,3,0,0,0,2.88,0l94.69-51.94a3,3,0,0,0,1.43-3.47,3,3,0,0,0-1.43-1.79Z" style="fill:#fff;fill-rule:evenodd"/><path d="M99,112.44a4,4,0,0,1-1.92-.49L2.39,60A4,4,0,0,1,.48,57.62a4,4,0,0,1,.33-3A4,4,0,0,1,2.39,53L97.08,1.06a4,4,0,0,1,3.84,0L195.61,53a4,4,0,0,1,1.58,5.43A4.09,4.09,0,0,1,195.61,60L100.92,112A4,4,0,0,1,99,112.44ZM99,2.56a1.94,1.94,0,0,0-1,.25L3.35,54.75a2,2,0,0,0,0,3.5L98,110.19a2,2,0,0,0,1.92,0l94.69-51.94a2,2,0,0,0,0-3.5L100,2.81A1.94,1.94,0,0,0,99,2.56Z" style="fill:#4e6172"/></svg>
                              <div class="layer-text">Пленка, Вид: БОПП; Тип: П; Толщина: 20</div>
                          </li>
                          <li class="z1">
                              <svg class="icon icon-complayred" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 198 113" width="198" height="113" aria-label="Icon composite layer red"><path d="M100.92,1.06,195.61,53a4,4,0,0,1,1.58,5.43A4.09,4.09,0,0,1,195.61,60l-94.69,51.93a4,4,0,0,1-3.84,0L2.39,60A4,4,0,0,1,.81,54.58,4.09,4.09,0,0,1,2.39,53L97.08,1.06A4,4,0,0,1,100.92,1.06Z" style="fill:#b31b34;fill-rule:evenodd"/></svg>
                              <div class="layer-text">Красочный слой, Толщина: 1 мкр</div>
                          </li>
                          <li class="z0">
                              <svg class="icon icon-comlaygray" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 198 115" width="198" height="115" aria-label="Icon composite layer gray"><path d="M101,1.09,195.74,54a4,4,0,0,1,1.55,5.44A4,4,0,0,1,195.74,61L101,113.91a4,4,0,0,1-3.9,0L2.26,61A4,4,0,0,1,.71,55.55,4,4,0,0,1,2.26,54L97.05,1.09A4,4,0,0,1,101,1.09Z" style="fill:gold;fill-rule:evenodd"/><path d="M99,112.44a4,4,0,0,1-1.92-.49L2.39,60A4,4,0,0,1,.48,57.62a4,4,0,0,1,.33-3A4,4,0,0,1,2.39,53L97.08,1.06a4,4,0,0,1,3.84,0L195.61,53a4,4,0,0,1,1.58,5.43A4.09,4.09,0,0,1,195.61,60L100.92,112A4,4,0,0,1,99,112.44ZM99,2.56a1.94,1.94,0,0,0-1,.25L3.35,54.75a2,2,0,0,0,0,3.5L98,110.19a2,2,0,0,0,1.92,0l94.69-51.94a2,2,0,0,0,0-3.5L100,2.81A1.94,1.94,0,0,0,99,2.56Z" style="fill:#4e6172"/></svg>
                              <div class="layer-text">Пленка, Вид: ПЭ ЖР, ЗМ, КЖ; Тип: Б, П; Толщина: 30-75</div>
                          </li>
                      </ol>
                      <div class="layers-products">Вафли, пряники, печенье, групповая упаковка.</div>
                  </div>
                  <div class="col-12 col-md-6">
                      <ul>
                          <li>Отличная герметичность</li>
                          <li>Глянец блеск упаковки или матовость</li>
                          <li>Отчлные характиристики при спайке</li>
                          <li>Межслойная печать,не претерпевает изменений в результате трения и действия низких температур</li>
                          <li>Невозможность сцарапать краску, так как. она между двух слоев пленок</li>
                          <li>Высокая учтойчивость к механическим повреждениям</li>
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
