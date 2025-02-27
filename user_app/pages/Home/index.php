

<main>
  <?php if (!isset($_SESSION["user"]) && $_SESSION["user"] == null) : ?>
    <div class="banner">

      <div class="container">

        <div class="slider-container has-scrollbar">

          <div class="slider-item">

            <img src="/user/images/banner-1.jpg" alt="women's latest fashion sale" class="banner-img">

            <div class="banner-content">

              <p class="banner-subtitle">Трендовый товар</p>

              <h2 class="banner-title">Последняя распродажа женской модной одежды</h2>

              <p class="banner-text">
                начинается с <b>2000</b>.00 тг
              </p>

              <a href="../../user/user/login" class="banner-btn">Купить сейчас</a>

            </div>

          </div>

          <div class="slider-item">

            <img src="/user/images/banner-2.jpg" alt="modern sunglasses" class="banner-img">

            <div class="banner-content">

              <p class="banner-subtitle">Трендовые аксессуары</p>

              <h2 class="banner-title">СОВРЕМЕННЫЕ СОЛНЦЕЗАЩИТНЫЕ ОЧКИ</h2>

              <p class="banner-text">
                начинается с <b>3000</b>.00 тг
              </p>

              <a href="../../user/user/login" class="banner-btn">Купить сейчас</a>

            </div>

          </div>

          <div class="slider-item">

            <img src="/user/images/banner-3.jpg" alt="new fashion summer sale" class="banner-img">

            <div class="banner-content">

              <p class="banner-subtitle">Предложение продажи</p>

              <h2 class="banner-title">НОВАЯ МОДНАЯ ЛЕТНЯЯ РАСПРОДАЖА</h2>

              <p class="banner-text">
                начинается с <b>1990</b>.00 тг
              </p>

              <a href="../../user/user/login" class="banner-btn">Купить сейчас</a>

            </div>

          </div>

        </div>

      </div>

    </div>


    <!--
      - TESTIMONIALS, CTA & SERVICE
     -->
    <div class="container">
      <section class="about-us">
        <div class="about">
          <img src="/user/images/girl.avif" class="pic" />
          <div class="text">
            <h2>About Us</h2>
            <h5>Dress Code - <span>ecommerse website</span></h5>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita natus ad sed harum itaque ullam enim quas, veniam accusantium, quia animi id eos adipisci iusto molestias asperiores explicabo cum vero atque amet corporis! Soluta illum facere consequuntur magni. Ullam dolorem repudiandae cumque voluptate consequatur consectetur, eos provident necessitatibus reiciendis corrupti!</p>

          </div>
        </div>
      </section>
    </div>
    <div class="main_container">
      <h2 class="title">testimonials</h2>
      <div class="container1">

        <div class="box">
          <div class="image">
            <img src="/user/images/img1.jpg">
          </div>
          <div class="name_job">David Chrish</div>
          <div class="rating">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="far fa-star"></i>
            <i class="far fa-star"></i>
            <i class="far fa-star"></i>
          </div>
          <p> Lorem ipsum dolor sitamet, stphen hawkin so adipisicing elit. Ratione disuja doloremque reiciendi nemo.</p>

        </div>
        <div class="box">
          <div class="image">
            <img src="/user/images/img2.png" alt="">
          </div>
          <div class="name_job">Kristina Bellis</div>
          <div class="rating">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="far fa-star"></i>
            <i class="far fa-star"></i>
          </div>
          <p> Lorem ipsum dolor sitamet, stphen hawkin so adipisicing elit. Ratione disuja doloremque reiciendi nemo.</p>

        </div>
        <div class="box">
          <div class="image">
            <img src="/user/images/img3.png" alt="">
          </div>
          <div class="name_job">Stephen Marlo</div>
          <div class="rating">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="far fa-star"></i>
          </div>
          <p> Lorem ipsum dolor sitamet, stphen hawkin so adipisicing elit. Ratione disuja doloremque reiciendi nemo.</p>

        </div>
      </div>
    </div>
    <div>

      <div class="container">

        <div class="testimonials-box">

          <!--
            - TESTIMONIALS
          -->

          <div class="testimonial">

            <h2 class="title">developer</h2>

            <div class="testimonial-card">

              <img src="/user/images/testimonial-1.jpg" alt="alan doe" class="testimonial-banner" width="80" height="80">

              <p class="testimonial-name">Fire Flower</p>

              <p class="testimonial-title">CEO & Founder Invision</p>

              <img src="/user/images/icons/quotes.svg" alt="quotation" class="quotation-img" width="26">

              <p class="testimonial-desc">
                Lorem ipsum dolor sit amet consectetur Lorem ipsum
                dolor dolor sit amet.
              </p>

            </div>

          </div>



          <!--
            - CTA
          -->

          <div class="cta-container">

            <img src="/user/images/cta-banner.jpg" alt="summer collection" class="cta-banner">

            <a href="#" class="cta-content">

              <p class="discount">25% Discount</p>

              <h2 class="cta-title">Summer collection</h2>

              <p class="cta-text">Начинается 1000тг</p>

              <a href="../../user/user/login" class="banner-btn">Купить сейчас</a>

            </a>

          </div>



          <!--
            - SERVICE
          -->

          <div class="service">

            <h2 class="title">Our Services</h2>

            <div class="service-container">

              <a href="#" class="service-item">

                <div class="service-icon">
                  <ion-icon name="boat-outline"></ion-icon>
                </div>

                <div class="service-content">

                  <h3 class="service-title">Worldwide Delivery</h3>
                  <p class="service-desc">For Order Over $100</p>

                </div>

              </a>

              <a href="#" class="service-item">

                <div class="service-icon">
                  <ion-icon name="rocket-outline"></ion-icon>
                </div>

                <div class="service-content">

                  <h3 class="service-title">Next Day delivery</h3>
                  <p class="service-desc">UK Orders Only</p>

                </div>

              </a>

              <a href="#" class="service-item">

                <div class="service-icon">
                  <ion-icon name="call-outline"></ion-icon>
                </div>

                <div class="service-content">

                  <h3 class="service-title">Best Online Support</h3>
                  <p class="service-desc">Hours: 8AM - 11PM</p>

                </div>

              </a>

              <a href="#" class="service-item">

                <div class="service-icon">
                  <ion-icon name="arrow-undo-outline"></ion-icon>
                </div>

                <div class="service-content">

                  <h3 class="service-title">Return Policy</h3>
                  <p class="service-desc">Easy & Free Return</p>

                </div>

              </a>

              <a href="#" class="service-item">

                <div class="service-icon">
                  <ion-icon name="ticket-outline"></ion-icon>
                </div>

                <div class="service-content">

                  <h3 class="service-title">30% money back</h3>
                  <p class="service-desc">For Order Over $100</p>

                </div>

              </a>

            </div>

          </div>

        </div>

      </div>

    </div>
  <?php else : ?>
    <nav class="desktop-navigation-menu">

      <div class="container">

        <ul class="desktop-menu-category-list">

          <li class="menu-category">
            <a href="#" class="menu-title">Home</a>
          </li>

          <li class="menu-category">
            <a href="#" class="menu-title">Categories</a>

            <div class="dropdown-panel">

              <ul class="dropdown-panel-list">

                <li class="menu-title">
                  <a href="#">Electronics</a>
                </li>

                <li class="panel-list-item">
                  <a href="#">Desktop</a>
                </li>

                <li class="panel-list-item">
                  <a href="#">Laptop</a>
                </li>

                <li class="panel-list-item">
                  <a href="#">Camera</a>
                </li>

                <li class="panel-list-item">
                  <a href="#">Tablet</a>
                </li>

                <li class="panel-list-item">
                  <a href="#">Headphone</a>
                </li>

                <li class="panel-list-item">
                  <a href="#">
                    <img src="/user/images/electronics-banner-1.jpg" alt="headphone collection" width="250" height="119">
                  </a>
                </li>

              </ul>

              <ul class="dropdown-panel-list">

                <li class="menu-title">
                  <a href="#">Men's</a>
                </li>

                <li class="panel-list-item">
                  <a href="#">Formal</a>
                </li>

                <li class="panel-list-item">
                  <a href="#">Casual</a>
                </li>

                <li class="panel-list-item">
                  <a href="#">Sports</a>
                </li>

                <li class="panel-list-item">
                  <a href="#">Jacket</a>
                </li>

                <li class="panel-list-item">
                  <a href="#">Sunglasses</a>
                </li>

                <li class="panel-list-item">
                  <a href="#">
                    <img src="/user/images/mens-banner.jpg" alt="men's fashion" width="250" height="119">
                  </a>
                </li>

              </ul>

              <ul class="dropdown-panel-list">

                <li class="menu-title">
                  <a href="#">Women's</a>
                </li>

                <li class="panel-list-item">
                  <a href="#">Formal</a>
                </li>

                <li class="panel-list-item">
                  <a href="#">Casual</a>
                </li>

                <li class="panel-list-item">
                  <a href="#">Perfume</a>
                </li>

                <li class="panel-list-item">
                  <a href="#">Cosmetics</a>
                </li>

                <li class="panel-list-item">
                  <a href="#">Bags</a>
                </li>

                <li class="panel-list-item">
                  <a href="#">
                    <img src="/user/images/womens-banner.jpg" alt="women's fashion" width="250" height="119">
                  </a>
                </li>

              </ul>

              <ul class="dropdown-panel-list">

                <li class="menu-title">
                  <a href="#">Electronics</a>
                </li>

                <li class="panel-list-item">
                  <a href="#">Smart Watch</a>
                </li>

                <li class="panel-list-item">
                  <a href="#">Smart TV</a>
                </li>

                <li class="panel-list-item">
                  <a href="#">Keyboard</a>
                </li>

                <li class="panel-list-item">
                  <a href="#">Mouse</a>
                </li>

                <li class="panel-list-item">
                  <a href="#">Microphone</a>
                </li>

                <li class="panel-list-item">
                  <a href="#">
                    <img src="/user/images/electronics-banner-2.jpg" alt="mouse collection" width="250" height="119">
                  </a>
                </li>

              </ul>

            </div>
          </li>

          <li class="menu-category">
            <a href="#" class="menu-title">Men's</a>

            <ul class="dropdown-list">

              <li class="dropdown-item">
                <a href="#">Shirt</a>
              </li>

              <li class="dropdown-item">
                <a href="#">Shorts & Jeans</a>
              </li>

              <li class="dropdown-item">
                <a href="#">Safety Shoes</a>
              </li>

              <li class="dropdown-item">
                <a href="#">Wallet</a>
              </li>

            </ul>
          </li>

          <li class="menu-category">
            <a href="#" class="menu-title">Women's</a>

            <ul class="dropdown-list">

              <li class="dropdown-item">
                <a href="#">Dress & Frock</a>
              </li>

              <li class="dropdown-item">
                <a href="#">Earrings</a>
              </li>

              <li class="dropdown-item">
                <a href="#">Necklace</a>
              </li>

              <li class="dropdown-item">
                <a href="#">Makeup Kit</a>
              </li>

            </ul>
          </li>

          <li class="menu-category">
            <a href="#" class="menu-title">Jewelry</a>

            <ul class="dropdown-list">

              <li class="dropdown-item">
                <a href="#">Earrings</a>
              </li>

              <li class="dropdown-item">
                <a href="#">Couple Rings</a>
              </li>

              <li class="dropdown-item">
                <a href="#">Necklace</a>
              </li>

              <li class="dropdown-item">
                <a href="#">Bracelets</a>
              </li>

            </ul>
          </li>

          <li class="menu-category">
            <a href="#" class="menu-title">Perfume</a>

            <ul class="dropdown-list">

              <li class="dropdown-item">
                <a href="#">Clothes Perfume</a>
              </li>

              <li class="dropdown-item">
                <a href="#">Deodorant</a>
              </li>

              <li class="dropdown-item">
                <a href="#">Flower Fragrance</a>
              </li>

              <li class="dropdown-item">
                <a href="#">Air Freshener</a>
              </li>

            </ul>
          </li>

          <li class="menu-category">
            <a href="#" class="menu-title">Blog</a>
          </li>

          <li class="menu-category">
            <a href="#" class="menu-title">Hot Offers</a>
          </li>

        </ul>

      </div>

    </nav>
    <div class="mobile-bottom-navigation">

      <button class="action-btn" data-mobile-menu-open-btn>
        <ion-icon name="menu-outline"></ion-icon>
      </button>

      <button class="action-btn">
        <ion-icon name="bag-handle-outline"></ion-icon>

        <span class="count">0</span>
      </button>

      <button class="action-btn">
        <ion-icon name="home-outline"></ion-icon>
      </button>

      <button class="action-btn">
        <ion-icon name="heart-outline"></ion-icon>

        <span class="count">0</span>
      </button>

      <button class="action-btn" data-mobile-menu-open-btn>
        <ion-icon name="grid-outline"></ion-icon>
      </button>

    </div>
    <div class="category">


      <div class="container">

        <div class="category-item-container has-scrollbar">

          <div class="category-item">

            <div class="category-img-box">
              <img src="/user/images/icons/dress.svg" alt="dress & frock" width="30">
            </div>

            <div class="category-content-box">

              <div class="category-content-flex">
                <h3 class="category-item-title">Dress & frock</h3>

                <p class="category-item-amount">(53)</p>
              </div>

              <a href="#" class="category-btn">Show all</a>

            </div>

          </div>

          <div class="category-item">

            <div class="category-img-box">
              <img src="/user/images/icons/coat.svg" alt="winter wear" width="30">
            </div>

            <div class="category-content-box">

              <div class="category-content-flex">
                <h3 class="category-item-title">Winter wear</h3>

                <p class="category-item-amount">(58)</p>
              </div>

              <a href="#" class="category-btn">Show all</a>

            </div>

          </div>

          <div class="category-item">

            <div class="category-img-box">
              <img src="/user/images/icons/glasses.svg" alt="glasses & lens" width="30">
            </div>

            <div class="category-content-box">

              <div class="category-content-flex">
                <h3 class="category-item-title">Glasses & lens</h3>

                <p class="category-item-amount">(68)</p>
              </div>

              <a href="#" class="category-btn">Show all</a>

            </div>

          </div>

          <div class="category-item">

            <div class="category-img-box">
              <img src="/user/images/icons/shorts.svg" alt="shorts & jeans" width="30">
            </div>

            <div class="category-content-box">

              <div class="category-content-flex">
                <h3 class="category-item-title">Shorts & jeans</h3>

                <p class="category-item-amount">(84)</p>
              </div>

              <a href="#" class="category-btn">Show all</a>

            </div>

          </div>

          <div class="category-item">

            <div class="category-img-box">
              <img src="/user/images/icons/tee.svg" alt="t-shirts" width="30">
            </div>

            <div class="category-content-box">

              <div class="category-content-flex">
                <h3 class="category-item-title">T-shirts</h3>

                <p class="category-item-amount">(35)</p>
              </div>

              <a href="#" class="category-btn">Show all</a>

            </div>

          </div>

          <div class="category-item">

            <div class="category-img-box">
              <img src="/user/images/icons/jacket.svg" alt="jacket" width="30">
            </div>

            <div class="category-content-box">

              <div class="category-content-flex">
                <h3 class="category-item-title">Jacket</h3>

                <p class="category-item-amount">(16)</p>
              </div>

              <a href="#" class="category-btn">Show all</a>

            </div>

          </div>

          <div class="category-item">

            <div class="category-img-box">
              <img src="/user/images/icons/watch.svg" alt="watch" width="30">
            </div>

            <div class="category-content-box">

              <div class="category-content-flex">
                <h3 class="category-item-title">Watch</h3>

                <p class="category-item-amount">(27)</p>
              </div>

              <a href="#" class="category-btn">Show all</a>

            </div>

          </div>

          <div class="category-item">

            <div class="category-img-box">
              <img src="/user/images/icons/hat.svg" alt="hat & caps" width="30">
            </div>

            <div class="category-content-box">

              <div class="category-content-flex">
                <h3 class="category-item-title">Hat & caps</h3>

                <p class="category-item-amount">(39)</p>
              </div>

              <a href="#" class="category-btn">Show all</a>

            </div>

          </div>

        </div>

      </div>

    </div>
    <div class="product-container">

      <div class="container">



<!-- 
        <div class="sidebar  has-scrollbar" data-mobile-menu>

          <div class="sidebar-category">

            <div class="sidebar-top">
              <h2 class="sidebar-title">Category</h2>

              <button class="sidebar-close-btn" data-mobile-menu-close-btn>
                <ion-icon name="close-outline"></ion-icon>
              </button>
            </div>

            <ul class="sidebar-menu-category-list">

              <li class="sidebar-menu-category">

                <button class="sidebar-accordion-menu" data-accordion-btn>

                  <div class="menu-title-flex">
                    <img src="/user/images/icons/dress.svg" alt="clothes" width="20" height="20" class="menu-title-img">

                    <p class="menu-title">Clothes</p>
                  </div>

                  <div>
                    <ion-icon name="add-outline" class="add-icon"></ion-icon>
                    <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
                  </div>

                </button>

                <ul class="sidebar-submenu-category-list" data-accordion>

                  <li class="sidebar-submenu-category">
                    <a href="#" class="sidebar-submenu-title">
                      <p class="product-name">Shirt</p>
                      <data value="300" class="stock" title="Available Stock">300</data>
                    </a>
                  </li>

                  <li class="sidebar-submenu-category">
                    <a href="#" class="sidebar-submenu-title">
                      <p class="product-name">shorts & jeans</p>
                      <data value="60" class="stock" title="Available Stock">60</data>
                    </a>
                  </li>

                  <li class="sidebar-submenu-category">
                    <a href="#" class="sidebar-submenu-title">
                      <p class="product-name">jacket</p>
                      <data value="50" class="stock" title="Available Stock">50</data>
                    </a>
                  </li>

                  <li class="sidebar-submenu-category">
                    <a href="#" class="sidebar-submenu-title">
                      <p class="product-name">dress & frock</p>
                      <data value="87" class="stock" title="Available Stock">87</data>
                    </a>
                  </li>

                </ul>

              </li>

              <li class="sidebar-menu-category">

                <button class="sidebar-accordion-menu" data-accordion-btn>

                  <div class="menu-title-flex">
                    <img src="/user/images/icons/shoes.svg" alt="footwear" class="menu-title-img" width="20" height="20">

                    <p class="menu-title">Footwear</p>
                  </div>

                  <div>
                    <ion-icon name="add-outline" class="add-icon"></ion-icon>
                    <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
                  </div>

                </button>

                <ul class="sidebar-submenu-category-list" data-accordion>

                  <li class="sidebar-submenu-category">
                    <a href="#" class="sidebar-submenu-title">
                      <p class="product-name">Sports</p>
                      <data value="45" class="stock" title="Available Stock">45</data>
                    </a>
                  </li>

                  <li class="sidebar-submenu-category">
                    <a href="#" class="sidebar-submenu-title">
                      <p class="product-name">Formal</p>
                      <data value="75" class="stock" title="Available Stock">75</data>
                    </a>
                  </li>

                  <li class="sidebar-submenu-category">
                    <a href="#" class="sidebar-submenu-title">
                      <p class="product-name">Casual</p>
                      <data value="35" class="stock" title="Available Stock">35</data>
                    </a>
                  </li>

                  <li class="sidebar-submenu-category">
                    <a href="#" class="sidebar-submenu-title">
                      <p class="product-name">Safety Shoes</p>
                      <data value="26" class="stock" title="Available Stock">26</data>
                    </a>
                  </li>

                </ul>

              </li>

              <li class="sidebar-menu-category">

                <button class="sidebar-accordion-menu" data-accordion-btn>

                  <div class="menu-title-flex">
                    <img src="/user/images/icons/jewelry.svg" alt="clothes" class="menu-title-img" width="20" height="20">

                    <p class="menu-title">Jewelry</p>
                  </div>

                  <div>
                    <ion-icon name="add-outline" class="add-icon"></ion-icon>
                    <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
                  </div>

                </button>

                <ul class="sidebar-submenu-category-list" data-accordion>

                  <li class="sidebar-submenu-category">
                    <a href="#" class="sidebar-submenu-title">
                      <p class="product-name">Earrings</p>
                      <data value="46" class="stock" title="Available Stock">46</data>
                    </a>
                  </li>

                  <li class="sidebar-submenu-category">
                    <a href="#" class="sidebar-submenu-title">
                      <p class="product-name">Couple Rings</p>
                      <data value="73" class="stock" title="Available Stock">73</data>
                    </a>
                  </li>

                  <li class="sidebar-submenu-category">
                    <a href="#" class="sidebar-submenu-title">
                      <p class="product-name">Necklace</p>
                      <data value="61" class="stock" title="Available Stock">61</data>
                    </a>
                  </li>

                </ul>

              </li>

              <li class="sidebar-menu-category">

                <button class="sidebar-accordion-menu" data-accordion-btn>

                  <div class="menu-title-flex">
                    <img src="/user/images/icons/perfume.svg" alt="perfume" class="menu-title-img" width="20" height="20">

                    <p class="menu-title">Perfume</p>
                  </div>

                  <div>
                    <ion-icon name="add-outline" class="add-icon"></ion-icon>
                    <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
                  </div>

                </button>

                <ul class="sidebar-submenu-category-list" data-accordion>

                  <li class="sidebar-submenu-category">
                    <a href="#" class="sidebar-submenu-title">
                      <p class="product-name">Clothes Perfume</p>
                      <data value="12" class="stock" title="Available Stock">12 pcs</data>
                    </a>
                  </li>

                  <li class="sidebar-submenu-category">
                    <a href="#" class="sidebar-submenu-title">
                      <p class="product-name">Deodorant</p>
                      <data value="60" class="stock" title="Available Stock">60 pcs</data>
                    </a>
                  </li>

                  <li class="sidebar-submenu-category">
                    <a href="#" class="sidebar-submenu-title">
                      <p class="product-name">jacket</p>
                      <data value="50" class="stock" title="Available Stock">50 pcs</data>
                    </a>
                  </li>

                  <li class="sidebar-submenu-category">
                    <a href="#" class="sidebar-submenu-title">
                      <p class="product-name">dress & frock</p>
                      <data value="87" class="stock" title="Available Stock">87 pcs</data>
                    </a>
                  </li>

                </ul>

              </li>

              <li class="sidebar-menu-category">

                <button class="sidebar-accordion-menu" data-accordion-btn>

                  <div class="menu-title-flex">
                    <img src="/user/images/icons/cosmetics.svg" alt="cosmetics" class="menu-title-img" width="20" height="20">

                    <p class="menu-title">Cosmetics</p>
                  </div>

                  <div>
                    <ion-icon name="add-outline" class="add-icon"></ion-icon>
                    <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
                  </div>

                </button>

                <ul class="sidebar-submenu-category-list" data-accordion>

                  <li class="sidebar-submenu-category">
                    <a href="#" class="sidebar-submenu-title">
                      <p class="product-name">Shampoo</p>
                      <data value="68" class="stock" title="Available Stock">68</data>
                    </a>
                  </li>

                  <li class="sidebar-submenu-category">
                    <a href="#" class="sidebar-submenu-title">
                      <p class="product-name">Sunscreen</p>
                      <data value="46" class="stock" title="Available Stock">46</data>
                    </a>
                  </li>

                  <li class="sidebar-submenu-category">
                    <a href="#" class="sidebar-submenu-title">
                      <p class="product-name">Body Wash</p>
                      <data value="79" class="stock" title="Available Stock">79</data>
                    </a>
                  </li>

                  <li class="sidebar-submenu-category">
                    <a href="#" class="sidebar-submenu-title">
                      <p class="product-name">Makeup Kit</p>
                      <data value="23" class="stock" title="Available Stock">23</data>
                    </a>
                  </li>

                </ul>

              </li>

              <li class="sidebar-menu-category">

                <button class="sidebar-accordion-menu" data-accordion-btn>

                  <div class="menu-title-flex">
                    <img src="/user/images/icons/glasses.svg" alt="glasses" class="menu-title-img" width="20" height="20">

                    <p class="menu-title">Glasses</p>
                  </div>

                  <div>
                    <ion-icon name="add-outline" class="add-icon"></ion-icon>
                    <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
                  </div>

                </button>

                <ul class="sidebar-submenu-category-list" data-accordion>

                  <li class="sidebar-submenu-category">
                    <a href="#" class="sidebar-submenu-title">
                      <p class="product-name">Sunglasses</p>
                      <data value="50" class="stock" title="Available Stock">50</data>
                    </a>
                  </li>

                  <li class="sidebar-submenu-category">
                    <a href="#" class="sidebar-submenu-title">
                      <p class="product-name">Lenses</p>
                      <data value="48" class="stock" title="Available Stock">48</data>
                    </a>
                  </li>

                </ul>

              </li>

              <li class="sidebar-menu-category">

                <button class="sidebar-accordion-menu" data-accordion-btn>

                  <div class="menu-title-flex">
                    <img src="/user/images/icons/bag.svg" alt="bags" class="menu-title-img" width="20" height="20">

                    <p class="menu-title">Bags</p>
                  </div>

                  <div>
                    <ion-icon name="add-outline" class="add-icon"></ion-icon>
                    <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
                  </div>

                </button>

                <ul class="sidebar-submenu-category-list" data-accordion>

                  <li class="sidebar-submenu-category">
                    <a href="#" class="sidebar-submenu-title">
                      <p class="product-name">Shopping Bag</p>
                      <data value="62" class="stock" title="Available Stock">62</data>
                    </a>
                  </li>

                  <li class="sidebar-submenu-category">
                    <a href="#" class="sidebar-submenu-title">
                      <p class="product-name">Gym Backpack</p>
                      <data value="35" class="stock" title="Available Stock">35</data>
                    </a>
                  </li>

                  <li class="sidebar-submenu-category">
                    <a href="#" class="sidebar-submenu-title">
                      <p class="product-name">Purse</p>
                      <data value="80" class="stock" title="Available Stock">80</data>
                    </a>
                  </li>

                  <li class="sidebar-submenu-category">
                    <a href="#" class="sidebar-submenu-title">
                      <p class="product-name">Wallet</p>
                      <data value="75" class="stock" title="Available Stock">75</data>
                    </a>
                  </li>

                </ul>

              </li>

            </ul>

          </div>

          <div class="product-showcase">

            <h3 class="showcase-heading">best sellers</h3>

            <div class="showcase-wrapper">

              <div class="showcase-container">

                <div class="showcase">

                  <a href="#" class="showcase-img-box">
                    <img src="/user/images/products/1.jpg" alt="baby fabric shoes" width="75" height="75" class="showcase-img">
                  </a>

                  <div class="showcase-content">

                    <a href="#">
                      <h4 class="showcase-title">baby fabric shoes</h4>
                    </a>

                    <div class="showcase-rating">
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                    </div>

                    <div class="price-box">
                      <del>$5.00</del>
                      <p class="price">$4.00</p>
                    </div>

                  </div>

                </div>

                <div class="showcase">

                  <a href="#" class="showcase-img-box">
                    <img src="/user/images/products/2.jpg" alt="men's hoodies t-shirt" class="showcase-img" width="75" height="75">
                  </a>

                  <div class="showcase-content">

                    <a href="#">
                      <h4 class="showcase-title">men's hoodies t-shirt</h4>
                    </a>
                    <div class="showcase-rating">
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star-half-outline"></ion-icon>
                    </div>

                    <div class="price-box">
                      <del>$17.00</del>
                      <p class="price">$7.00</p>
                    </div>

                  </div>

                </div>

                <div class="showcase">

                  <a href="#" class="showcase-img-box">
                    <img src="/user/images/products/3.jpg" alt="girls t-shirt" class="showcase-img" width="75" height="75">
                  </a>

                  <div class="showcase-content">

                    <a href="#">
                      <h4 class="showcase-title">girls t-shirt</h4>
                    </a>
                    <div class="showcase-rating">
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star-half-outline"></ion-icon>
                    </div>

                    <div class="price-box">
                      <del>$5.00</del>
                      <p class="price">$3.00</p>
                    </div>

                  </div>

                </div>

                <div class="showcase">

                  <a href="#" class="showcase-img-box">
                    <img src="/user/images/products/4.jpg" alt="woolen hat for men" class="showcase-img" width="75" height="75">
                  </a>

                  <div class="showcase-content">

                    <a href="#">
                      <h4 class="showcase-title">woolen hat for men</h4>
                    </a>
                    <div class="showcase-rating">
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                    </div>

                    <div class="price-box">
                      <del>$15.00</del>
                      <p class="price">$12.00</p>
                    </div>

                  </div>

                </div>

              </div>

            </div>

          </div>

        </div> -->


        <div class="product-box">


          <!-- <div class="product-minimal">

            <div class="product-showcase">

              <h2 class="title">New Arrivals</h2>

              <div class="showcase-wrapper has-scrollbar">

                <div class="showcase-container">

                  <div class="showcase">

                    <a href="#" class="showcase-img-box">
                      <img src="/user/images/products/clothes-1.jpg" alt="relaxed short full sleeve t-shirt" width="70" class="showcase-img">
                    </a>

                    <div class="showcase-content">

                      <a href="#">
                        <h4 class="showcase-title">Relaxed Short full Sleeve T-Shirt</h4>
                      </a>

                      <a href="#" class="showcase-category">Clothes</a>

                      <div class="price-box">
                        <p class="price">$45.00</p>
                        <del>$12.00</del>
                      </div>

                    </div>

                  </div>

                  <div class="showcase">

                    <a href="#" class="showcase-img-box">
                      <img src="/user/images/products/clothes-2.jpg" alt="girls pink embro design top" class="showcase-img" width="70">
                    </a>

                    <div class="showcase-content">

                      <a href="#">
                        <h4 class="showcase-title">Girls pnk Embro design Top</h4>
                      </a>

                      <a href="#" class="showcase-category">Clothes</a>

                      <div class="price-box">
                        <p class="price">$61.00</p>
                        <del>$9.00</del>
                      </div>

                    </div>

                  </div>

                  <div class="showcase">

                    <a href="#" class="showcase-img-box">
                      <img src="/user/images/products/clothes-3.jpg" alt="black floral wrap midi skirt" class="showcase-img" width="70">
                    </a>

                    <div class="showcase-content">

                      <a href="#">
                        <h4 class="showcase-title">Black Floral Wrap Midi Skirt</h4>
                      </a>

                      <a href="#" class="showcase-category">Clothes</a>

                      <div class="price-box">
                        <p class="price">$76.00</p>
                        <del>$25.00</del>
                      </div>

                    </div>

                  </div>

                  <div class="showcase">

                    <a href="#" class="showcase-img-box">
                      <img src="/user/images/products/shirt-1.jpg" alt="pure garment dyed cotton shirt" class="showcase-img" width="70">
                    </a>

                    <div class="showcase-content">

                      <a href="#">
                        <h4 class="showcase-title">Pure Garment Dyed Cotton Shirt</h4>
                      </a>

                      <a href="#" class="showcase-category">Mens Fashion</a>

                      <div class="price-box">
                        <p class="price">$68.00</p>
                        <del>$31.00</del>
                      </div>

                    </div>

                  </div>

                </div>

                <div class="showcase-container">

                  <div class="showcase">

                    <a href="#" class="showcase-img-box">
                      <img src="/user/images/products/jacket-5.jpg" alt="men yarn fleece full-zip jacket" class="showcase-img" width="70">
                    </a>

                    <div class="showcase-content">

                      <a href="#">
                        <h4 class="showcase-title">MEN Yarn Fleece Full-Zip Jacket</h4>
                      </a>

                      <a href="#" class="showcase-category">Winter wear</a>

                      <div class="price-box">
                        <p class="price">$61.00</p>
                        <del>$11.00</del>
                      </div>

                    </div>

                  </div>

                  <div class="showcase">

                    <a href="#" class="showcase-img-box">
                      <img src="/user/images/products/jacket-1.jpg" alt="mens winter leathers jackets" class="showcase-img" width="70">
                    </a>

                    <div class="showcase-content">

                      <a href="#">
                        <h4 class="showcase-title">Mens Winter Leathers Jackets</h4>
                      </a>

                      <a href="#" class="showcase-category">Winter wear</a>

                      <div class="price-box">
                        <p class="price">$32.00</p>
                        <del>$20.00</del>
                      </div>

                    </div>

                  </div>

                  <div class="showcase">

                    <a href="#" class="showcase-img-box">
                      <img src="/user/images/products/jacket-3.jpg" alt="mens winter leathers jackets" class="showcase-img" width="70">
                    </a>

                    <div class="showcase-content">

                      <a href="#">
                        <h4 class="showcase-title">Mens Winter Leathers Jackets</h4>
                      </a>

                      <a href="#" class="showcase-category">Jackets</a>

                      <div class="price-box">
                        <p class="price">$50.00</p>
                        <del>$25.00</del>
                      </div>

                    </div>

                  </div>

                  <div class="showcase">

                    <a href="#" class="showcase-img-box">
                      <img src="/user/images/products/shorts-1.jpg" alt="better basics french terry sweatshorts" class="showcase-img" width="70">
                    </a>

                    <div class="showcase-content">

                      <a href="#">
                        <h4 class="showcase-title">Better Basics French Terry Sweatshorts</h4>
                      </a>

                      <a href="#" class="showcase-category">Shorts</a>

                      <div class="price-box">
                        <p class="price">$20.00</p>
                        <del>$10.00</del>
                      </div>

                    </div>

                  </div>

                </div>

              </div>

            </div>

            <div class="product-showcase">

              <h2 class="title">Trending</h2>

              <div class="showcase-wrapper  has-scrollbar">

                <div class="showcase-container">

                  <div class="showcase">

                    <a href="#" class="showcase-img-box">
                      <img src="/user/images/products/sports-1.jpg" alt="running & trekking shoes - white" class="showcase-img" width="70">
                    </a>

                    <div class="showcase-content">

                      <a href="#">
                        <h4 class="showcase-title">Running & Trekking Shoes - White</h4>
                      </a>

                      <a href="#" class="showcase-category">Sports</a>

                      <div class="price-box">
                        <p class="price">$49.00</p>
                        <del>$15.00</del>
                      </div>

                    </div>

                  </div>

                  <div class="showcase">

                    <a href="#" class="showcase-img-box">
                      <img src="/user/images/products/sports-2.jpg" alt="trekking & running shoes - black" class="showcase-img" width="70">
                    </a>

                    <div class="showcase-content">

                      <a href="#">
                        <h4 class="showcase-title">Trekking & Running Shoes - black</h4>
                      </a>

                      <a href="#" class="showcase-category">Sports</a>

                      <div class="price-box">
                        <p class="price">$78.00</p>
                        <del>$36.00</del>
                      </div>

                    </div>

                  </div>

                  <div class="showcase">

                    <a href="#" class="showcase-img-box">
                      <img src="/user/images/products/party-wear-1.jpg" alt="womens party wear shoes" class="showcase-img" width="70">
                    </a>

                    <div class="showcase-content">

                      <a href="#">
                        <h4 class="showcase-title">Womens Party Wear Shoes</h4>
                      </a>

                      <a href="#" class="showcase-category">Party wear</a>

                      <div class="price-box">
                        <p class="price">$94.00</p>
                        <del>$42.00</del>
                      </div>

                    </div>

                  </div>

                  <div class="showcase">

                    <a href="#" class="showcase-img-box">
                      <img src="/user/images/products/sports-3.jpg" alt="sports claw women's shoes" class="showcase-img" width="70">
                    </a>

                    <div class="showcase-content">

                      <a href="#">
                        <h4 class="showcase-title">Sports Claw Women's Shoes</h4>
                      </a>

                      <a href="#" class="showcase-category">Sports</a>

                      <div class="price-box">
                        <p class="price">$54.00</p>
                        <del>$65.00</del>
                      </div>

                    </div>

                  </div>

                </div>

                <div class="showcase-container">

                  <div class="showcase">

                    <a href="#" class="showcase-img-box">
                      <img src="/user/images/products/sports-6.jpg" alt="air tekking shoes - white" class="showcase-img" width="70">
                    </a>

                    <div class="showcase-content">

                      <a href="#">
                        <h4 class="showcase-title">Air Trekking Shoes - white</h4>
                      </a>

                      <a href="#" class="showcase-category">Sports</a>

                      <div class="price-box">
                        <p class="price">$52.00</p>
                        <del>$55.00</del>
                      </div>

                    </div>

                  </div>

                  <div class="showcase">

                    <a href="#" class="showcase-img-box">
                      <img src="/user/images/products/shoe-3.jpg" alt="Boot With Suede Detail" class="showcase-img" width="70">
                    </a>

                    <div class="showcase-content">

                      <a href="#">
                        <h4 class="showcase-title">Boot With Suede Detail</h4>
                      </a>

                      <a href="#" class="showcase-category">boots</a>

                      <div class="price-box">
                        <p class="price">$20.00</p>
                        <del>$30.00</del>
                      </div>

                    </div>

                  </div>

                  <div class="showcase">

                    <a href="#" class="showcase-img-box">
                      <img src="/user/images/products/shoe-1.jpg" alt="men's leather formal wear shoes" class="showcase-img" width="70">
                    </a>

                    <div class="showcase-content">

                      <a href="#">
                        <h4 class="showcase-title">Men's Leather Formal Wear shoes</h4>
                      </a>

                      <a href="#" class="showcase-category">formal</a>

                      <div class="price-box">
                        <p class="price">$56.00</p>
                        <del>$78.00</del>
                      </div>

                    </div>

                  </div>

                  <div class="showcase">

                    <a href="#" class="showcase-img-box">
                      <img src="/user/images/products/shoe-2.jpg" alt="casual men's brown shoes" class="showcase-img" width="70">
                    </a>

                    <div class="showcase-content">

                      <a href="#">
                        <h4 class="showcase-title">Casual Men's Brown shoes</h4>
                      </a>

                      <a href="#" class="showcase-category">Casual</a>

                      <div class="price-box">
                        <p class="price">$50.00</p>
                        <del>$55.00</del>
                      </div>

                    </div>

                  </div>

                </div>

              </div>

            </div>

            <div class="product-showcase">

              <h2 class="title">Top Rated</h2>

              <div class="showcase-wrapper  has-scrollbar">

                <div class="showcase-container">

                  <div class="showcase">

                    <a href="#" class="showcase-img-box">
                      <img src="/user/images/products/watch-3.jpg" alt="pocket watch leather pouch" class="showcase-img" width="70">
                    </a>

                    <div class="showcase-content">

                      <a href="#">
                        <h4 class="showcase-title">Pocket Watch Leather Pouch</h4>
                      </a>

                      <a href="#" class="showcase-category">Watches</a>

                      <div class="price-box">
                        <p class="price">$50.00</p>
                        <del>$34.00</del>
                      </div>

                    </div>

                  </div>

                  <div class="showcase">

                    <a href="#" class="showcase-img-box">
                      <img src="/user/images/products/jewellery-3.jpg" alt="silver deer heart necklace" class="showcase-img" width="70">
                    </a>

                    <div class="showcase-content">

                      <a href="#">
                        <h4 class="showcase-title">Silver Deer Heart Necklace</h4>
                      </a>

                      <a href="#" class="showcase-category">Jewellery</a>

                      <div class="price-box">
                        <p class="price">$84.00</p>
                        <del>$30.00</del>
                      </div>

                    </div>

                  </div>

                  <div class="showcase">

                    <a href="#" class="showcase-img-box">
                      <img src="/user/images/products/perfume.jpg" alt="titan 100 ml womens perfume" class="showcase-img" width="70">
                    </a>

                    <div class="showcase-content">

                      <a href="#">
                        <h4 class="showcase-title">Titan 100 Ml Womens Perfume</h4>
                      </a>

                      <a href="#" class="showcase-category">Perfume</a>

                      <div class="price-box">
                        <p class="price">$42.00</p>
                        <del>$10.00</del>
                      </div>

                    </div>

                  </div>

                  <div class="showcase">

                    <a href="#" class="showcase-img-box">
                      <img src="/user/images/products/belt.jpg" alt="men's leather reversible belt" class="showcase-img" width="70">
                    </a>

                    <div class="showcase-content">

                      <a href="#">
                        <h4 class="showcase-title">Men's Leather Reversible Belt</h4>
                      </a>

                      <a href="#" class="showcase-category">Belt</a>

                      <div class="price-box">
                        <p class="price">$24.00</p>
                        <del>$10.00</del>
                      </div>

                    </div>

                  </div>

                </div>

                <div class="showcase-container">

                  <div class="showcase">

                    <a href="#" class="showcase-img-box">
                      <img src="/user/images/products/jewellery-2.jpg" alt="platinum zircon classic ring" class="showcase-img" width="70">
                    </a>

                    <div class="showcase-content">

                      <a href="#">
                        <h4 class="showcase-title">platinum Zircon Classic Ring</h4>
                      </a>

                      <a href="#" class="showcase-category">jewellery</a>

                      <div class="price-box">
                        <p class="price">$62.00</p>
                        <del>$65.00</del>
                      </div>

                    </div>

                  </div>

                  <div class="showcase">

                    <a href="#" class="showcase-img-box">
                      <img src="/user/images/products/watch-1.jpg" alt="smart watche vital plus" class="showcase-img" width="70">
                    </a>

                    <div class="showcase-content">

                      <a href="#">
                        <h4 class="showcase-title">Smart watche Vital Plus</h4>
                      </a>

                      <a href="#" class="showcase-category">Watches</a>

                      <div class="price-box">
                        <p class="price">$56.00</p>
                        <del>$78.00</del>
                      </div>

                    </div>

                  </div>

                  <div class="showcase">

                    <a href="#" class="showcase-img-box">
                      <img src="/user/images/products/shampoo.jpg" alt="shampoo conditioner packs" class="showcase-img" width="70">
                    </a>

                    <div class="showcase-content">

                      <a href="#">
                        <h4 class="showcase-title">shampoo conditioner packs</h4>
                      </a>

                      <a href="#" class="showcase-category">cosmetics</a>

                      <div class="price-box">
                        <p class="price">$20.00</p>
                        <del>$30.00</del>
                      </div>

                    </div>

                  </div>

                  <div class="showcase">

                    <a href="#" class="showcase-img-box">
                      <img src="/user/images/products/jewellery-1.jpg" alt="rose gold peacock earrings" class="showcase-img" width="70">
                    </a>

                    <div class="showcase-content">

                      <a href="#">
                        <h4 class="showcase-title">Rose Gold Peacock Earrings</h4>
                      </a>

                      <a href="#" class="showcase-category">jewellery</a>

                      <div class="price-box">
                        <p class="price">$20.00</p>
                        <del>$30.00</del>
                      </div>

                    </div>

                  </div>

                </div>

              </div>

            </div>

          </div> -->




          <div class="product-featured">

            <h2 class="title">Deal of the day</h2>

            <div class="showcase-wrapper has-scrollbar">

              <div class="showcase-container">

                <div class="showcase">

                  <div class="showcase-banner">
                    <img src="/user/images/products/shampoo.jpg" alt="shampoo, conditioner & facewash packs" class="showcase-img">
                  </div>

                  <div class="showcase-content">

                    <div class="showcase-rating">
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star-outline"></ion-icon>
                      <ion-icon name="star-outline"></ion-icon>
                    </div>

                    <a href="#">
                      <h3 class="showcase-title">shampoo, conditioner & facewash packs</h3>
                    </a>

                    <p class="showcase-desc">
                      Lorem ipsum dolor sit amet consectetur Lorem ipsum
                      dolor dolor sit amet consectetur Lorem ipsum dolor
                    </p>

                    <div class="price-box">
                      <p class="price">$150.00</p>

                      <del>$200.00</del>
                    </div>

                    <button class="add-cart-btn">add to cart</button>

                    <div class="showcase-status">
                      <div class="wrapper">
                        <p>
                          already sold: <b>20</b>
                        </p>

                        <p>
                          available: <b>40</b>
                        </p>
                      </div>

                      <div class="showcase-status-bar"></div>
                    </div>

                    <div class="countdown-box">

                      <p class="countdown-desc">
                        Hurry Up! Offer ends in:
                      </p>

                      <div class="countdown">

                        <div class="countdown-content">

                          <p class="display-number">360</p>

                          <p class="display-text">Days</p>

                        </div>

                        <div class="countdown-content">
                          <p class="display-number">24</p>
                          <p class="display-text">Hours</p>
                        </div>

                        <div class="countdown-content">
                          <p class="display-number">59</p>
                          <p class="display-text">Min</p>
                        </div>

                        <div class="countdown-content">
                          <p class="display-number">00</p>
                          <p class="display-text">Sec</p>
                        </div>

                      </div>

                    </div>

                  </div>

                </div>

              </div>

              <div class="showcase-container">

                <div class="showcase">

                  <div class="showcase-banner">
                    <img src="/user/images/products/jewellery-1.jpg" alt="Rose Gold diamonds Earring" class="showcase-img">
                  </div>

                  <div class="showcase-content">

                    <div class="showcase-rating">
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star-outline"></ion-icon>
                      <ion-icon name="star-outline"></ion-icon>
                    </div>

                    <h3 class="showcase-title">
                      <a href="#" class="showcase-title">Rose Gold diamonds Earring</a>
                    </h3>

                    <p class="showcase-desc">
                      Lorem ipsum dolor sit amet consectetur Lorem ipsum
                      dolor dolor sit amet consectetur Lorem ipsum dolor
                    </p>

                    <div class="price-box">
                      <p class="price">$1990.00</p>
                      <del>$2000.00</del>
                    </div>

                    <button class="add-cart-btn">add to cart</button>

                    <div class="showcase-status">
                      <div class="wrapper">
                        <p> already sold: <b>15</b> </p>

                        <p> available: <b>40</b> </p>
                      </div>

                      <div class="showcase-status-bar"></div>
                    </div>

                    <div class="countdown-box">

                      <p class="countdown-desc">Hurry Up! Offer ends in:</p>

                      <div class="countdown">
                        <div class="countdown-content">
                          <p class="display-number">360</p>
                          <p class="display-text">Days</p>
                        </div>

                        <div class="countdown-content">
                          <p class="display-number">24</p>
                          <p class="display-text">Hours</p>
                        </div>

                        <div class="countdown-content">
                          <p class="display-number">59</p>
                          <p class="display-text">Min</p>
                        </div>

                        <div class="countdown-content">
                          <p class="display-number">00</p>
                          <p class="display-text">Sec</p>
                        </div>
                      </div>

                    </div>

                  </div>

                </div>

              </div>

            </div>

          </div>





          <div class="product-main">

            <h2 class="title">Все Товары</h2>

            <div class="product-grid">
              <?php foreach ($data['products'] as $product) : ?>

                <div class="showcase">

                  <div class="showcase-banner">
                
                  <img src="/user/images/products/<?= htmlspecialchars($product->image_url) ?>" alt="Mens Winter Leathers Jackets" width="300" class="product-img default">
                  <img src="/user/images/products/<?= htmlspecialchars($product->image_url) ?>" alt="Mens Winter Leathers Jackets" width="300" class="product-img hover">
                  
                  
                  <div class="showcase-actions">
                 
                    <form  method="post">
                    <input type="text" name="product_id" value="<?= htmlspecialchars($product->id)?>" hidden>

                        <button type="submit" class="btn-action">
                        
                          <ion-icon name="heart-outline"></ion-icon>
                        </button>
                      </form>

                      <button class="btn-action">
                        <a href="../../user/home/id<?= htmlspecialchars($product->id) ?>">
                          <ion-icon name="eye-outline"></ion-icon>
                        </a>
                      </button>

                    

                    </div>
                  </div>

                  <div class="showcase-content">

                    <a href="#" class="showcase-category"><?= htmlspecialchars($product->name) ?></a>

                    <a href="#">
                      <h3 class="showcase-title"><?= htmlspecialchars($product->brand) ?></h3>
                    </a>

                    <div class="showcase-rating">
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star-outline"></ion-icon>
                      <ion-icon name="star-outline"></ion-icon>
                    </div>

                    <div class="price-box">
                      <p class="price"><?= htmlspecialchars($product->price) - htmlspecialchars($product->discount) ?> тг</p>
                      <del><?= htmlspecialchars($product->price) ?> тг</del>
                    </div>

                  </div>

                </div>
              <?php endforeach ?>
            </div>
            <!-- <div class="showcase">
        
          <div class="showcase-banner">
            <img src="/user/images/products/shirt-1.jpg" alt="Pure Garment Dyed Cotton Shirt" class="product-img default"
              width="300">
            <img src="/user/images/products/shirt-2.jpg" alt="Pure Garment Dyed Cotton Shirt" class="product-img hover"
              width="300">
        
            <p class="showcase-badge angle black">sale</p>
        
            <div class="showcase-actions">
              <button class="btn-action">
                <ion-icon name="heart-outline"></ion-icon>
              </button>
        
              <button class="btn-action">
                <ion-icon name="eye-outline"></ion-icon>
              </button>
        
              <button class="btn-action">
                <ion-icon name="repeat-outline"></ion-icon>
              </button>
        
              <button class="btn-action">
                <ion-icon name="bag-add-outline"></ion-icon>
              </button>
            </div>
          </div>
        
          <div class="showcase-content">
            <a href="#" class="showcase-category">shirt</a>
        
            <h3>
              <a href="#" class="showcase-title">Pure Garment Dyed Cotton Shirt</a>
            </h3>
        
            <div class="showcase-rating">
              <ion-icon name="star"></ion-icon>
              <ion-icon name="star"></ion-icon>
              <ion-icon name="star"></ion-icon>
              <ion-icon name="star-outline"></ion-icon>
              <ion-icon name="star-outline"></ion-icon>
            </div>
        
            <div class="price-box">
              <p class="price">$45.00</p>
              <del>$56.00</del>
            </div>
        
          </div>
        
        </div>

        <div class="showcase">
        
          <div class="showcase-banner">
            <img src="/user/images/products/jacket-5.jpg" alt="MEN Yarn Fleece Full-Zip Jacket" class="product-img default"
              width="300">
            <img src="/user/images/products/jacket-6.jpg" alt="MEN Yarn Fleece Full-Zip Jacket" class="product-img hover"
              width="300">
        
            <div class="showcase-actions">
              <button class="btn-action">
              <a href="https://www.example.com">
        <ion-icon name="heart-outline"></ion-icon>
    </a>
             
              </button>
        
              <button class="btn-action">
                <ion-icon name="eye-outline"></ion-icon>
              </button>
        
              <button class="btn-action">
                <ion-icon name="repeat-outline"></ion-icon>
              </button>
        
              <button class="btn-action">
                <ion-icon name="bag-add-outline"></ion-icon>
              </button>
            </div>
          </div>
        
          <div class="showcase-content">
            <a href="#" class="showcase-category">Jacket</a>
        
            <h3>
              <a href="#" class="showcase-title">MEN Yarn Fleece Full-Zip Jacket</a>
            </h3>
        
            <div class="showcase-rating">
              <ion-icon name="star"></ion-icon>
              <ion-icon name="star"></ion-icon>
              <ion-icon name="star"></ion-icon>
              <ion-icon name="star-outline"></ion-icon>
              <ion-icon name="star-outline"></ion-icon>
            </div>
        
            <div class="price-box">
              <p class="price">$58.00</p>
              <del>$65.00</del>
            </div>
        
          </div>
        
        </div>

        <div class="showcase">
        
          <div class="showcase-banner">
            <img src="/user/images/products/clothes-3.jpg" alt="Black Floral Wrap Midi Skirt" class="product-img default"
              width="300">
            <img src="/user/images/products/clothes-4.jpg" alt="Black Floral Wrap Midi Skirt" class="product-img hover"
              width="300">
        
            <p class="showcase-badge angle pink">new</p>
        
            <div class="showcase-actions">
              <button class="btn-action">
                <ion-icon name="heart-outline"></ion-icon>
              </button>
        
              <button class="btn-action">
                <ion-icon name="eye-outline"></ion-icon>
              </button>
        
              <button class="btn-action">
                <ion-icon name="repeat-outline"></ion-icon>
              </button>
        
              <button class="btn-action">
                <ion-icon name="bag-add-outline"></ion-icon>
              </button>
            </div>
          </div>
        
          <div class="showcase-content">
            <a href="#" class="showcase-category">skirt</a>
        
            <h3>
              <a href="#" class="showcase-title">Black Floral Wrap Midi Skirt</a>
            </h3>
        
            <div class="showcase-rating">
              <ion-icon name="star"></ion-icon>
              <ion-icon name="star"></ion-icon>
              <ion-icon name="star"></ion-icon>
              <ion-icon name="star"></ion-icon>
              <ion-icon name="star"></ion-icon>
            </div>
        
            <div class="price-box">
              <p class="price">$25.00</p>
              <del>$35.00</del>
            </div>
        
          </div>
        
        </div>

        <div class="showcase">
        
          <div class="showcase-banner">
            <img src="/user/images/products/shoe-2.jpg" alt="Casual Men's Brown shoes" class="product-img default"
              width="300">
            <img src="/user/images/products/shoe-2_1.jpg" alt="Casual Men's Brown shoes" class="product-img hover"
              width="300">
        
            <div class="showcase-actions">
              <button class="btn-action">
                <ion-icon name="heart-outline"></ion-icon>
              </button>
        
              <button class="btn-action">
                <ion-icon name="eye-outline"></ion-icon>
              </button>
        
              <button class="btn-action">
                <ion-icon name="repeat-outline"></ion-icon>
              </button>
        
              <button class="btn-action">
                <ion-icon name="bag-add-outline"></ion-icon>
              </button>
            </div>
          </div>
        
          <div class="showcase-content">
            <a href="#" class="showcase-category">casual</a>
        
            <h3>
              <a href="#" class="showcase-title">Casual Men's Brown shoes</a>
            </h3>
        
            <div class="showcase-rating">
              <ion-icon name="star"></ion-icon>
              <ion-icon name="star"></ion-icon>
              <ion-icon name="star"></ion-icon>
              <ion-icon name="star"></ion-icon>
              <ion-icon name="star"></ion-icon>
            </div>
        
            <div class="price-box">
              <p class="price">$99.00</p>
              <del>$105.00</del>
            </div>
        
          </div>
        
        </div>

        <div class="showcase">
        
          <div class="showcase-banner">
            <img src="/user/images/products/watch-3.jpg" alt="Pocket Watch Leather Pouch" class="product-img default"
              width="300">
            <img src="/user/images/products/watch-4.jpg" alt="Pocket Watch Leather Pouch" class="product-img hover"
              width="300">
        
            <p class="showcase-badge angle black">sale</p>
        
            <div class="showcase-actions">
              <button class="btn-action">
                <ion-icon name="heart-outline"></ion-icon>
              </button>
        
              <button class="btn-action">
                <ion-icon name="eye-outline"></ion-icon>
              </button>
        
              <button class="btn-action">
                <ion-icon name="repeat-outline"></ion-icon>
              </button>
        
              <button class="btn-action">
                <ion-icon name="bag-add-outline"></ion-icon>
              </button>
            </div>
          </div>
        
          <div class="showcase-content">
            <a href="#" class="showcase-category">watches</a>
        
            <h3>
              <a href="#" class="showcase-title">Pocket Watch Leather Pouch</a>
            </h3>
        
            <div class="showcase-rating">
              <ion-icon name="star"></ion-icon>
              <ion-icon name="star"></ion-icon>
              <ion-icon name="star"></ion-icon>
              <ion-icon name="star-outline"></ion-icon>
              <ion-icon name="star-outline"></ion-icon>
            </div>
        
            <div class="price-box">
              <p class="price">$150.00</p>
              <del>$170.00</del>
            </div>
        
          </div>
        
        </div>

        <div class="showcase">
        
          <div class="showcase-banner">
            <img src="/user/images/products/watch-1.jpg" alt="Smart watche Vital Plus" class="product-img default"
              width="300">
            <img src="/user/images/products/watch-2.jpg" alt="Smart watche Vital Plus" class="product-img hover" width="300">
        
            <div class="showcase-actions">
              <button class="btn-action">
                <ion-icon name="heart-outline"></ion-icon>
              </button>
        
              <button class="btn-action">
                <ion-icon name="eye-outline"></ion-icon>
              </button>
        
              <button class="btn-action">
                <ion-icon name="repeat-outline"></ion-icon>
              </button>
        
              <button class="btn-action">
                <ion-icon name="bag-add-outline"></ion-icon>
              </button>
            </div>
          </div>
        
          <div class="showcase-content">
            <a href="#" class="showcase-category">watches</a>
        
            <h3>
              <a href="#" class="showcase-title">Smart watche Vital Plus</a>
            </h3>
        
            <div class="showcase-rating">
              <ion-icon name="star"></ion-icon>
              <ion-icon name="star"></ion-icon>
              <ion-icon name="star"></ion-icon>
              <ion-icon name="star"></ion-icon>
              <ion-icon name="star-outline"></ion-icon>
            </div>
        
            <div class="price-box">
              <p class="price">$100.00</p>
              <del>$120.00</del>
            </div>
        
          </div>
        
        </div>

        <div class="showcase">
        
          <div class="showcase-banner">
            <img src="/user/images/products/party-wear-1.jpg" alt="Womens Party Wear Shoes" class="product-img default"
              width="300">
            <img src="/user/images/products/party-wear-2.jpg" alt="Womens Party Wear Shoes" class="product-img hover"
              width="300">
        
            <p class="showcase-badge angle black">sale</p>
        
            <div class="showcase-actions">
              <button class="btn-action">
                <ion-icon name="heart-outline"></ion-icon>
              </button>
        
              <button class="btn-action">
                <ion-icon name="eye-outline"></ion-icon>
              </button>
        
              <button class="btn-action">
                <ion-icon name="repeat-outline"></ion-icon>
              </button>
        
              <button class="btn-action">
                <ion-icon name="bag-add-outline"></ion-icon>
              </button>
            </div>
          </div>
        
          <div class="showcase-content">
            <a href="#" class="showcase-category">party wear</a>
        
            <h3>
              <a href="#" class="showcase-title">Womens Party Wear Shoes</a>
            </h3>
        
            <div class="showcase-rating">
              <ion-icon name="star"></ion-icon>
              <ion-icon name="star"></ion-icon>
              <ion-icon name="star"></ion-icon>
              <ion-icon name="star-outline"></ion-icon>
              <ion-icon name="star-outline"></ion-icon>
            </div>
        
            <div class="price-box">
              <p class="price">$25.00</p>
              <del>$30.00</del>
            </div>
        
          </div>
        
        </div>

        <div class="showcase">
        
          <div class="showcase-banner">
            <img src="/user/images/products/jacket-1.jpg" alt="Mens Winter Leathers Jackets" class="product-img default"
              width="300">
            <img src="/user/images/products/jacket-2.jpg" alt="Mens Winter Leathers Jackets" class="product-img hover"
              width="300">
        
            <div class="showcase-actions">
              <button class="btn-action">
                <ion-icon name="heart-outline"></ion-icon>
              </button>
        
              <button class="btn-action">
                <ion-icon name="eye-outline"></ion-icon>
              </button>
        
              <button class="btn-action">
                <ion-icon name="repeat-outline"></ion-icon>
              </button>
        
              <button class="btn-action">
                <ion-icon name="bag-add-outline"></ion-icon>
              </button>
            </div>
          </div>
        
          <div class="showcase-content">
            <a href="#" class="showcase-category">jacket</a>
        
            <h3>
              <a href="#" class="showcase-title">Mens Winter Leathers Jackets</a>
            </h3>
        
            <div class="showcase-rating">
              <ion-icon name="star"></ion-icon>
              <ion-icon name="star"></ion-icon>
              <ion-icon name="star"></ion-icon>
              <ion-icon name="star"></ion-icon>
              <ion-icon name="star-outline"></ion-icon>
            </div>
        
            <div class="price-box">
              <p class="price">$32.00</p>
              <del>$45.00</del>
            </div>
        
          </div>
        
        </div>

        <div class="showcase">
        
          <div class="showcase-banner">
            <img src="/user/images/products/sports-2.jpg" alt="Trekking & Running Shoes - black" class="product-img default"
              width="300">
            <img src="/user/images/products/sports-4.jpg" alt="Trekking & Running Shoes - black" class="product-img hover"
              width="300">
        
            <p class="showcase-badge angle black">sale</p>
        
            <div class="showcase-actions">
              <button class="btn-action">
                <ion-icon name="heart-outline"></ion-icon>
              </button>
        
              <button class="btn-action">
                <ion-icon name="eye-outline"></ion-icon>
              </button>
        
              <button class="btn-action">
                <ion-icon name="repeat-outline"></ion-icon>
              </button>
        
              <button class="btn-action">
                <ion-icon name="bag-add-outline"></ion-icon>
              </button>
            </div>
          </div>
        
          <div class="showcase-content">
            <a href="#" class="showcase-category">sports</a>
        
            <h3>
              <a href="#" class="showcase-title">Trekking & Running Shoes - black</a>
            </h3>
        
            <div class="showcase-rating">
              <ion-icon name="star"></ion-icon>
              <ion-icon name="star"></ion-icon>
              <ion-icon name="star"></ion-icon>
              <ion-icon name="star-outline"></ion-icon>
              <ion-icon name="star-outline"></ion-icon>
            </div>
        
            <div class="price-box">
              <p class="price">$58.00</p>
              <del>$64.00</del>
            </div>
        
          </div>
        
        </div>

        <div class="showcase">
        
          <div class="showcase-banner">
            <img src="/user/images/products/shoe-1.jpg" alt="Men's Leather Formal Wear shoes" class="product-img default"
              width="300">
            <img src="/user/images/products/shoe-1_1.jpg" alt="Men's Leather Formal Wear shoes" class="product-img hover"
              width="300">
        
            <div class="showcase-actions">
              <button class="btn-action">
                <ion-icon name="heart-outline"></ion-icon>
              </button>
        
              <button class="btn-action">
                <ion-icon name="eye-outline"></ion-icon>
              </button>
        
              <button class="btn-action">
                <ion-icon name="repeat-outline"></ion-icon>
              </button>
        
              <button class="btn-action">
                <ion-icon name="bag-add-outline"></ion-icon>
              </button>
            </div>
          </div>
        
          <div class="showcase-content">
            <a href="#" class="showcase-category">formal</a>
        
            <h3>
              <a href="#" class="showcase-title">Men's Leather Formal Wear shoes</a>
            </h3>
        
            <div class="showcase-rating">
              <ion-icon name="star"></ion-icon>
              <ion-icon name="star"></ion-icon>
              <ion-icon name="star"></ion-icon>
              <ion-icon name="star"></ion-icon>
              <ion-icon name="star-outline"></ion-icon>
            </div>
        
            <div class="price-box">
              <p class="price">$50.00</p>
              <del>$65.00</del>
            </div>
        
          </div>
        
        </div>

        <div class="showcase">
        
          <div class="showcase-banner">
            <img src="/user/images/products/shorts-1.jpg" alt="Better Basics French Terry Sweatshorts"
              class="product-img default" width="300">
            <img src="/user/images/products/shorts-2.jpg" alt="Better Basics French Terry Sweatshorts"
              class="product-img hover" width="300">
        
            <p class="showcase-badge angle black">sale</p>
        
            <div class="showcase-actions">
              <button class="btn-action">
                <ion-icon name="heart-outline"></ion-icon>
              </button>
        
              <button class="btn-action">
                <ion-icon name="eye-outline"></ion-icon>
              </button>
        
              <button class="btn-action">
                <ion-icon name="repeat-outline"></ion-icon>
              </button>
        
              <button class="btn-action">
                <ion-icon name="bag-add-outline"></ion-icon>
              </button>
            </div>
          </div>
        
          <div class="showcase-content">
            <a href="#" class="showcase-category">shorts</a>
        
            <h3>
              <a href="#" class="showcase-title">Better Basics French Terry Sweatshorts</a>
            </h3>
        
            <div class="showcase-rating">
              <ion-icon name="star"></ion-icon>
              <ion-icon name="star"></ion-icon>
              <ion-icon name="star"></ion-icon>
              <ion-icon name="star-outline"></ion-icon>
              <ion-icon name="star-outline"></ion-icon>
            </div>
        
            <div class="price-box">
              <p class="price">$78.00</p>
              <del>$85.00</del>
            </div>
        
          </div>
        
        </div> -->



          </div>

        </div>

      </div>

    </div>

  <?php endif ?>


</main>

<script src="/user/js/script.js"></script>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>