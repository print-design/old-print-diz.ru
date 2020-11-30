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
                  <h1>Упаковка для медицинской продукции</h1>
              </div>
              <div class="p-1">
                  <button class="btn btn-info order-product" data-toggle="modal" data-target="#orderModal" data-text="Упаковка для медицинской продукции">Заказать</button>
              </div>
          </div>
          <hr/>
          <div class="prod-details">
              <div class="prod-image">
                  <img src="<?=APPLICATION ?>/images/medicine/DSC_0787.jpg" class="img-fluid" alt="Упаковка для медицинской продукции"/>
              </div>
              <div class="prod-description">
                  <p>Специалисты компании &laquo;Принт-Дизайн&raquo; знают и соблюдают все необходимые требования, предъявляемые к упаковке для медицинской продукции.</p>
                  <p>Поэтому, мы можем гарантировать:</p>
                  <ul>
                      <li>правильность её изготовления;</li>
                      <li>прочность и надёжность упаковки;</li>
                      <li>герметичность;</li>
                      <li>товарный вид, повышающий конкурентные и эстетические качества продукции;</li>
                      <li>правильную маркировку;</li>
                      <li>профессиональные печать и дизайн.</li>
                  </ul>
                  <p>Кроме этого, мы создаём такую упаковку которая позволяет:</p>
                  <ul>
                      <li>подвергнуть медицинскую продукцию стерилизации с сохранением стерильности;</li>
                      <li>укомплектовать набор из нескольких предметов &ndash; шприцов, игл и пр.</li>
                  </ul>
                  <p>При производстве мы учтем каждую деталь, чтобы в итоге Вы получили качественную, безопасную, информативную и отвечающую всем требованиям продукцию.</p>
                  <p>Чтобы заказать упаковку свяжитесь с нами по номеру телефона. При необходимости наши ведущие специалисты ответят на все вопросы и предложат решения задач разной сложности.</p>
              </div>
          </div>
          
          <div class="slideshow-container">
              <!-- Full-width images with number and caption text -->
              <div class="slideshow-mySlides slideshow-fade">
                  <div class="slideshow-numbertext">1 / 12</div>
                  <img src="<?=APPLICATION ?>/images/medicine/DSC_0799.jpg" class="img-fluid" />
                  <div class="slideshow-text">Caption Text</div>
              </div>
              <div class="slideshow-mySlides slideshow-fade">
                  <div class="slideshow-numbertext">2 / 12</div>
                  <img src="<?=APPLICATION ?>/images/medicine/DSC_0776.jpg" class="img-fluid" />
                  <div class="slideshow-text">Caption Two</div>
              </div>
              <div class="slideshow-mySlides slideshow-fade">
                  <div class="slideshow-numbertext">3 / 12</div>
                  <img src="<?=APPLICATION ?>/images/medicine/DSC_0784.jpg" class="img-fluid" />
                  <div class="slideshow-text">Caption Three</div>
              </div>
              <div class="slideshow-mySlides slideshow-fade">
                  <div class="slideshow-numbertext">4 / 12</div>
                  <img src="<?=APPLICATION ?>/images/medicine/DSC_0787.jpg" class="img-fluid" />
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
                  <img class="img-fluid img-thumbnail slideshow-demo slideshow-cursor" src="<?=APPLICATION ?>/images/medicine/DSC_0799.jpg" onclick="currentSlide(1)" alt="" />
              </div>
              <div class="col-12 col-md-3 col-lg-2">
                  <img class="img-fluid img-thumbnail slideshow-demo slideshow-cursor" src="<?=APPLICATION ?>/images/medicine/DSC_0776.jpg" onclick="currentSlide(2)" alt="" />
              </div>
              <div class="col-12 col-md-3 col-lg-2">
                  <img class="img-fluid img-thumbnail slideshow-demo slideshow-cursor" src="<?=APPLICATION ?>/images/medicine/DSC_0784.jpg" onclick="currentSlide(3)" alt="" />
              </div>
              <div class="col-12 col-md-3 col-lg-2">
                  <img class="img-fluid img-thumbnail slideshow-demo slideshow-cursor" src="<?=APPLICATION ?>/images/medicine/DSC_0787.jpg" onclick="currentSlide(4)" alt="" />
              </div>
          </div>
          
          <div class="material-structure-title">Возможные комбинации пленок</div>
          <div class="material-structure-item-title">БОПП+БОПП</div>
          <div class="material-structure-item">
              <div class="row">
                  <div class="layers col-12 col-md-6">
                      <ol>
                          <li class="z2">
                              <svg class="icon icon-comlaywhite" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 198 113" width="198" height="113" aria-label="icon composite white"><path d="M100.44,1.93a3,3,0,0,0-2.88,0L2.87,53.87a3,3,0,0,0-1.43,3.47,3,3,0,0,0,1.43,1.79l94.69,51.94a3,3,0,0,0,2.88,0l94.69-51.94a3,3,0,0,0,1.43-3.47,3,3,0,0,0-1.43-1.79Z" style="fill:#fff;fill-rule:evenodd"/><path d="M99,112.44a4,4,0,0,1-1.92-.49L2.39,60A4,4,0,0,1,.48,57.62a4,4,0,0,1,.33-3A4,4,0,0,1,2.39,53L97.08,1.06a4,4,0,0,1,3.84,0L195.61,53a4,4,0,0,1,1.58,5.43A4.09,4.09,0,0,1,195.61,60L100.92,112A4,4,0,0,1,99,112.44ZM99,2.56a1.94,1.94,0,0,0-1,.25L3.35,54.75a2,2,0,0,0,0,3.5L98,110.19a2,2,0,0,0,1.92,0l94.69-51.94a2,2,0,0,0,0-3.5L100,2.81A1.94,1.94,0,0,0,99,2.56Z" style="fill:#4e6172"/></svg>
                              <div class="layer-text">Пленка, Вид: БОПП; Тип: П; Толщина: 15-21</div>
                          </li>
                          <li class="z1">
                              <svg class="icon icon-complayred" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 198 113" width="198" height="113" aria-label="Icon composite layer red"><path d="M100.92,1.06,195.61,53a4,4,0,0,1,1.58,5.43A4.09,4.09,0,0,1,195.61,60l-94.69,51.93a4,4,0,0,1-3.84,0L2.39,60A4,4,0,0,1,.81,54.58,4.09,4.09,0,0,1,2.39,53L97.08,1.06A4,4,0,0,1,100.92,1.06Z" style="fill:#b31b34;fill-rule:evenodd"/></svg>
                              <div class="layer-text">Красочный слой, Толщина: 1 мкр</div>
                          </li>
                          <li class="z0">
                              <svg class="icon icon-comlaywhite" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 198 113" width="198" height="113" aria-label="icon composite white"><path d="M100.44,1.93a3,3,0,0,0-2.88,0L2.87,53.87a3,3,0,0,0-1.43,3.47,3,3,0,0,0,1.43,1.79l94.69,51.94a3,3,0,0,0,2.88,0l94.69-51.94a3,3,0,0,0,1.43-3.47,3,3,0,0,0-1.43-1.79Z" style="fill:#fff;fill-rule:evenodd"/><path d="M99,112.44a4,4,0,0,1-1.92-.49L2.39,60A4,4,0,0,1,.48,57.62a4,4,0,0,1,.33-3A4,4,0,0,1,2.39,53L97.08,1.06a4,4,0,0,1,3.84,0L195.61,53a4,4,0,0,1,1.58,5.43A4.09,4.09,0,0,1,195.61,60L100.92,112A4,4,0,0,1,99,112.44ZM99,2.56a1.94,1.94,0,0,0-1,.25L3.35,54.75a2,2,0,0,0,0,3.5L98,110.19a2,2,0,0,0,1.92,0l94.69-51.94a2,2,0,0,0,0-3.5L100,2.81A1.94,1.94,0,0,0,99,2.56Z" style="fill:#4e6172"/></svg>
                              <div class="layer-text">Пленка, Вид: БОПП; Тип: П; Толщина: 15-21</div>
                          </li>
                      </ol>
                      <div class="layers-products"></div>
                  </div>
                  <div class="col-12 col-md-6">
                      <ul>
                          <li>Барьерные свойства по влаге</li>
                          <li>Возможности нанесения печати межслоев пленок , Невозможность сцарапать краску , тк она меж пленок</li>
                          <li>Высокой прочности характеристики упаковки, стойкость к механическому повреждению</li>
                          <li>Высокие свойста проницаемости водяных паров</li>
                          <li>Очень матовый или очень глянцевый внешний вид упаковки</li>
                          <li>Повышенный срок храния уже упаковнноего кондирерскго изделия</li>
                          <li>Высокие с-ва ароматопроницаемости</li>
                          <li>Высокие свойства по газопроницаемости</li>
                          <li>Низкая влагопроницаемость</li>
                          <li>Крепкость сварного шва на фасовке</li>
                          <li>Защита от проникновения внешних запахов в продукт</li>
                          <li>Позволяет использовать инертный газ в качестве добавления во внутреннею среду упаковки во время фасовки для продления</li>
                      </ul>
                  </div>
              </div>
          </div>
          <div class="material-structure-item-title">ПЭТ+ПЭТ</div>
          <div class="material-structure-item">
              <div class="row">
                  <div class="layers col-12 col-md-6">
                      <div class="layers">
                          <ol>
                              <li class="z2">
                              <svg class="icon icon-complaydot" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 198 115" width="198" height="115" aria-label="Composite layer dotted"><defs><pattern id="fill" width="16" height="16" patternTransform="translate(0 0)" patternUnits="userSpaceOnUse" viewBox="0 0 16 16"><rect width="16" height="16" style="fill:none"/><rect width="16" height="16" style="fill:none"/><circle cx="12" r="0.5"/><circle cx="4" r="0.5"/><circle cx="16" cy="8" r="0.5"/><circle cx="8" cy="8" r="0.5"/><circle cy="8" r="0.5"/><circle cx="12" cy="16" r="0.5"/><circle cx="4" cy="16" r="0.5"/></pattern></defs><path d="M100.46,2a3,3,0,0,0-2.92,0L2.74,54.88a3,3,0,0,0,0,5.24L97.54,113a3,3,0,0,0,2.92,0l94.8-52.92A3,3,0,0,0,196.42,56a2.94,2.94,0,0,0-1.16-1.16Z" style="fill:#fff;fill-rule:evenodd"/><path d="M100.46,2a3,3,0,0,0-2.92,0L2.74,54.88a3,3,0,0,0,0,5.24L97.54,113a3,3,0,0,0,2.92,0l94.8-52.92A3,3,0,0,0,196.42,56a2.94,2.94,0,0,0-1.16-1.16Z" style="fill-rule:evenodd;fill:url(#fill)"/><path d="M99,114.38a4,4,0,0,1-2-.51L2.25,61A3.93,3.93,0,0,1,.71,59.45,4,4,0,0,1,2.25,54L97.05,1.13a4,4,0,0,1,3.9,0L195.75,54a3.93,3.93,0,0,1,1.54,1.54A4,4,0,0,1,195.75,61L101,113.87A4,4,0,0,1,99,114.38ZM99,2.62a2,2,0,0,0-1,.25L3.23,55.75a2,2,0,0,0-.77,2.72,1.93,1.93,0,0,0,.77.78L98,112.13a2,2,0,0,0,1.94,0l94.8-52.92a2,2,0,0,0,.78-2.72,2,2,0,0,0-.78-.78L100,2.87A2,2,0,0,0,99,2.62Z" style="fill:#f02233"/></svg>
                              <div class="layer-text">Пленка, Вид: ПЭТФ; Тип: П; Толщина: 12</div>
                          </li>
                          <li class="z1">
                              <svg class="icon icon-complayred" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 198 113" width="198" height="113" aria-label="Icon composite layer red"><path d="M100.92,1.06,195.61,53a4,4,0,0,1,1.58,5.43A4.09,4.09,0,0,1,195.61,60l-94.69,51.93a4,4,0,0,1-3.84,0L2.39,60A4,4,0,0,1,.81,54.58,4.09,4.09,0,0,1,2.39,53L97.08,1.06A4,4,0,0,1,100.92,1.06Z" style="fill:#b31b34;fill-rule:evenodd"/></svg>
                              <div class="layer-text">Красочный слой, Толщина: 1 мкр</div>
                          </li>
                          <li class="z0">
                              <svg class="icon icon-complaydot" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 198 115" width="198" height="115" aria-label="Composite layer dotted"><defs><pattern id="fill" width="16" height="16" patternTransform="translate(0 0)" patternUnits="userSpaceOnUse" viewBox="0 0 16 16"><rect width="16" height="16" style="fill:none"/><rect width="16" height="16" style="fill:none"/><circle cx="12" r="0.5"/><circle cx="4" r="0.5"/><circle cx="16" cy="8" r="0.5"/><circle cx="8" cy="8" r="0.5"/><circle cy="8" r="0.5"/><circle cx="12" cy="16" r="0.5"/><circle cx="4" cy="16" r="0.5"/></pattern></defs><path d="M100.46,2a3,3,0,0,0-2.92,0L2.74,54.88a3,3,0,0,0,0,5.24L97.54,113a3,3,0,0,0,2.92,0l94.8-52.92A3,3,0,0,0,196.42,56a2.94,2.94,0,0,0-1.16-1.16Z" style="fill:#fff;fill-rule:evenodd"/><path d="M100.46,2a3,3,0,0,0-2.92,0L2.74,54.88a3,3,0,0,0,0,5.24L97.54,113a3,3,0,0,0,2.92,0l94.8-52.92A3,3,0,0,0,196.42,56a2.94,2.94,0,0,0-1.16-1.16Z" style="fill-rule:evenodd;fill:url(#fill)"/><path d="M99,114.38a4,4,0,0,1-2-.51L2.25,61A3.93,3.93,0,0,1,.71,59.45,4,4,0,0,1,2.25,54L97.05,1.13a4,4,0,0,1,3.9,0L195.75,54a3.93,3.93,0,0,1,1.54,1.54A4,4,0,0,1,195.75,61L101,113.87A4,4,0,0,1,99,114.38ZM99,2.62a2,2,0,0,0-1,.25L3.23,55.75a2,2,0,0,0-.77,2.72,1.93,1.93,0,0,0,.77.78L98,112.13a2,2,0,0,0,1.94,0l94.8-52.92a2,2,0,0,0,.78-2.72,2,2,0,0,0-.78-.78L100,2.87A2,2,0,0,0,99,2.62Z" style="fill:#f02233"/></svg>
                              <div class="layer-text">Пленка, Вид: ПЭТФ; Тип: П; Толщина: 12</div>
                          </li>
                          </ol>
                      </div>
                      <div class="layers-products"></div>
                  </div>
                  <div class="col-12 col-md-6">
                      <ul>
                          <li>Очень крепкий шов во время спаивания</li>
                          <li>Не боится повреждений острым предметом</li>
                          <li>Очень глянцевая упаковка</li>
                          <li>Отличные характеристики при скольжении</li>
                          <li>На фасовке можно использовать инертного газа для вытеснения кислорода из упаковки</li>
                          <li>Очень приятные тактильные ощущения после формирования пакета на фасовке</li>
                      </ul>
                  </div>
              </div>
          </div>
          <div class="material-structure-item-title">БОПП+Фольга+ПЭ</div>
          <div class="material-structure-item">
              <div class="row">
                  <div class="layers col-12 col-md-6">
                      <ol>
                          <li class="z3">
                              <svg class="icon icon-comlaywhite" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 198 113" width="198" height="113" aria-label="icon composite white"><path d="M100.44,1.93a3,3,0,0,0-2.88,0L2.87,53.87a3,3,0,0,0-1.43,3.47,3,3,0,0,0,1.43,1.79l94.69,51.94a3,3,0,0,0,2.88,0l94.69-51.94a3,3,0,0,0,1.43-3.47,3,3,0,0,0-1.43-1.79Z" style="fill:#fff;fill-rule:evenodd"/><path d="M99,112.44a4,4,0,0,1-1.92-.49L2.39,60A4,4,0,0,1,.48,57.62a4,4,0,0,1,.33-3A4,4,0,0,1,2.39,53L97.08,1.06a4,4,0,0,1,3.84,0L195.61,53a4,4,0,0,1,1.58,5.43A4.09,4.09,0,0,1,195.61,60L100.92,112A4,4,0,0,1,99,112.44ZM99,2.56a1.94,1.94,0,0,0-1,.25L3.35,54.75a2,2,0,0,0,0,3.5L98,110.19a2,2,0,0,0,1.92,0l94.69-51.94a2,2,0,0,0,0-3.5L100,2.81A1.94,1.94,0,0,0,99,2.56Z" style="fill:#4e6172"/></svg>
                              <div class="layer-text">Пленка, Вид: БОПП; Тип: П; Толщина: 15-21</div>
                          </li>
                          <li class="z2">
                              <svg class="icon icon-complayred" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 198 113" width="198" height="113" aria-label="Icon composite layer red"><path d="M100.92,1.06,195.61,53a4,4,0,0,1,1.58,5.43A4.09,4.09,0,0,1,195.61,60l-94.69,51.93a4,4,0,0,1-3.84,0L2.39,60A4,4,0,0,1,.81,54.58,4.09,4.09,0,0,1,2.39,53L97.08,1.06A4,4,0,0,1,100.92,1.06Z" style="fill:#b31b34;fill-rule:evenodd"/></svg>
                              <div class="layer-text">Красочный слой, Толщина: 1 мкр</div>
                          </li>
                          <li class="z1">
                              <svg class="icon icon-comlaywhite" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 198 113" width="198" height="113" aria-label="icon composite white"><path d="M100.44,1.93a3,3,0,0,0-2.88,0L2.87,53.87a3,3,0,0,0-1.43,3.47,3,3,0,0,0,1.43,1.79l94.69,51.94a3,3,0,0,0,2.88,0l94.69-51.94a3,3,0,0,0,1.43-3.47,3,3,0,0,0-1.43-1.79Z" style="fill:yellow;fill-rule:evenodd"/><path d="M99,112.44a4,4,0,0,1-1.92-.49L2.39,60A4,4,0,0,1,.48,57.62a4,4,0,0,1,.33-3A4,4,0,0,1,2.39,53L97.08,1.06a4,4,0,0,1,3.84,0L195.61,53a4,4,0,0,1,1.58,5.43A4.09,4.09,0,0,1,195.61,60L100.92,112A4,4,0,0,1,99,112.44ZM99,2.56a1.94,1.94,0,0,0-1,.25L3.35,54.75a2,2,0,0,0,0,3.5L98,110.19a2,2,0,0,0,1.92,0l94.69-51.94a2,2,0,0,0,0-3.5L100,2.81A1.94,1.94,0,0,0,99,2.56Z" style="fill:#4e6172"/></svg>
                              <div class="layer-text">Пленка, Вид: Фольга; Тип: Мет; Толщина: 7</div>
                          </li>
                          <li class="z0">
                              <svg class="icon icon-comlaygray" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 198 115" width="198" height="115" aria-label="Icon composite layer gray"><path d="M101,1.09,195.74,54a4,4,0,0,1,1.55,5.44A4,4,0,0,1,195.74,61L101,113.91a4,4,0,0,1-3.9,0L2.26,61A4,4,0,0,1,.71,55.55,4,4,0,0,1,2.26,54L97.05,1.09A4,4,0,0,1,101,1.09Z" style="fill:gold;fill-rule:evenodd"/><path d="M99,112.44a4,4,0,0,1-1.92-.49L2.39,60A4,4,0,0,1,.48,57.62a4,4,0,0,1,.33-3A4,4,0,0,1,2.39,53L97.08,1.06a4,4,0,0,1,3.84,0L195.61,53a4,4,0,0,1,1.58,5.43A4.09,4.09,0,0,1,195.61,60L100.92,112A4,4,0,0,1,99,112.44ZM99,2.56a1.94,1.94,0,0,0-1,.25L3.35,54.75a2,2,0,0,0,0,3.5L98,110.19a2,2,0,0,0,1.92,0l94.69-51.94a2,2,0,0,0,0-3.5L100,2.81A1.94,1.94,0,0,0,99,2.56Z" style="fill:#4e6172"/></svg>
                              <div class="layer-text">Пленка, Вид: ПЭ; Тип: П; Толщина: 40-50</div>
                          </li>
                      </ol>
                      <div class="layers-products">Медицинские изделия под стерилизацию.</div>
                  </div>
                  <div class="col-12 col-md-6">
                      <ul>
                          <li>Очень высокие барьерные свойста</li>
                          <li>Полная свето не проницаемость</li>
                          <li>Очень приятно тактильно материал</li>
                          <li>Очень премиальная упаковка</li>
                          <li>Можно использовать инетрный газ при фасовке</li>
                          <li>Под стерилизацию</li>
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
