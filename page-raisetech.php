<?php get_header(); ?>
        <main>
            <div class="swiper-container mySwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img class="swiper-img--sp" src="<?php echo get_template_directory_uri(); ?>/img/swiper-raisetech1--sp.png" alt="">
                        <img class="swiper-img--pc" src="<?php echo get_template_directory_uri(); ?>/img/swiper-raisetech1--pc.png" alt="">
                        <article>
                            <h2>RaiseTech　旧サイト</h2>
                            <ul>
                                <li>
                                    <h3>[ 概要 ]</h3>
                                    <p>プログラミングスクールサイト「RaiseTech 旧サイト」の模写</p>    
                                </li>
                                <li>
                                    <h3>[ リンク ]</h3>
                                    <p>GitHub　ソースコード<a href="https://github.com/non0522/RaiseTech_copy"><br>https://github.com/non0522/RaiseTech_copy</a></p>
                                </li>
                                <li class="swiper-slide__pctext">
                                    <h3>[ Skills ]</h3>
                                    <p>HTML/CSS/SCSS/JavaScript</p>
                                </li>
                            </ul>
                        </article>
                    </div>
                    <div class="swiper-slide">
                        <img class="swiper-img--sp" src="<?php echo get_template_directory_uri(); ?>/img/swiper-raisetech2--sp.png" alt="">
                        <img class="swiper-img--pc" src="<?php echo get_template_directory_uri(); ?>/img/swiper-raisetech2--pc.png" alt="">
                        <article>
                            <h2>RaiseTech　旧サイト</h2>
                            <ul>
                                <li>
                                    <h3>[ ポイント ]</h3>
                                    <p>２段階ナビメニューの実装。</p>  
                                </li>
                                <li>
                                    <h3>[ 説明 ]</h3>
                                    <p>ハンバーガーメニューを実装しただけでなく、ホバー時にオープンするサブメニューを実装。</p>
                                    <p class="swiper-slide__pctext">メニュー項目が多いながらもメインメニューとサブメニューを分割することにユーザーに優しいデザイン。しかしながら実装ではコーディングに悪戦苦闘。JavaScriptとCSSを駆使し見本サイトを再現しました。</p>
                                </li>
                            </ul>
                        </article>
                    </div>
                    <div class="swiper-slide">
                        <img class="swiper-img--sp" src="<?php echo get_template_directory_uri(); ?>/img/swiper-raisetech3--sp.png" alt="">
                        <img class="swiper-img--pc" src="<?php echo get_template_directory_uri(); ?>/img/swiper-raisetech3--pc.png" alt="">
                        <article>
                            <h2>RaiseTech　旧サイト</h2>
                            <ul>
                                <li>
                                    <h3>[ ポイント ]</h3>
                                    <p>３枚重ねのバックグラウンド。</p>    
                                </li>
                                <li>
                                    <h3>[ 説明 ]</h3>
                                    <p>メインビジュアルには3枚のバックグラウンドを使用。かつ最背面の画像にはfixedを使用し、動きのあるビジュアルになっています。</p>
                                    <p class="swiper-slide__pctext">初めてかつディベロッパーツールを使用せずコーディングを行なったため、画像の配置方法やサイズの指定等を調べながら本家に限りなく近いフロントに仕上げました。</p>
                                </li>
                            </ul>
                        </article>
                    </div>
                    
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </main>
        <?php get_footer(); ?>