<?php get_header(); ?>
        <main>
            <div class="swiper-container mySwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img class="swiper-img--sp" src="<?php echo get_template_directory_uri(); ?>/img/swiper-hamburger1--sp.png" alt="">
                        <img class="swiper-img--pc" src="<?php echo get_template_directory_uri(); ?>/img/swiper-hamburger1--pc.png" alt="">
                        <article>
                            <h2>Hamburger Shop</h2>
                            <ul>
                                <li>
                                    <h3>[ 概要 ]</h3>
                                    <p>プログラミングスクールRaiseTechの最終課題。AdobeXDのカンプからCMS化まで実施。</p>    
                                </li>
                                <li>
                                    <h3>[ リンク ]</h3>
                                    <p>GitHub　ソースコード<a href="https://github.com/non0522/hamburger-shop--wp"><br>https://github.com/non0522/hamburger-shop--wp</a></p>
                                </li>
                                <li class="swiper-slide__pctext">
                                    <h3>[ Skills ]</h3>
                                    <p>HTML/CSS/SCSS/JavaScript/FLOCSS/Git/XD/Wordpress</p>
                                </li>
                            </ul>
                        </article>
                    </div>
                    <div class="swiper-slide">
                        <img class="swiper-img--sp" src="<?php echo get_template_directory_uri(); ?>/img/swiper-hamburger2--sp.png" alt="">
                        <img class="swiper-img--pc" src="<?php echo get_template_directory_uri(); ?>/img/swiper-hamburger2--pc.png" alt="">
                        <article>
                            <h2>Hamburger Shop</h2>
                            <ul>
                                <li>
                                    <h3>[ ポイント ]</h3>
                                    <p>デザインカンプからのコーディング。</p>  
                                </li>
                                <li>
                                    <h3>[ 説明 ]</h3>
                                    <p>AdobeXDのカンプのみを参照し、実際の現場と同環境でHTML、CSS、JavaScriptにて静的ページ５ページを作成。</p>
                                    <p class="swiper-slide__pctext">画像の抽出、フォントの設定、backgroundのfilter等、細かなdetailまで再現。レスポンシブで長さの変化する擬似要素のラインや透過している柄のフィルターも忠実に再現しています。</p>
                                </li>
                            </ul>
                        </article>
                    </div>
                    <div class="swiper-slide">
                        <img class="swiper-img--sp" src="<?php echo get_template_directory_uri(); ?>/img/swiper-hamburger3--sp.png" alt="">
                        <img class="swiper-img--pc" src="<?php echo get_template_directory_uri(); ?>/img/swiper-hamburger3--pc.png" alt="">
                        <article>
                            <h2>Hamburger Shop</h2>
                            <ul>
                                <li>
                                    <h3>[ ポイント ]</h3>
                                    <p>サイトの保守性・効率化を考え、CSS設計FLOCSSを導入。</p>    
                                </li>
                                <li>
                                    <h3>[ 説明 ]</h3>
                                    <p>誰にでもわかりやすいCSS構造に近づけるため、意味を捉えたタグ選定、正確なクラス名、ディレクトリ管理に注視してコーディングをしました。</p>
                                    <p class="swiper-slide__pctext">カード型コンポーネントやタイトルなど、複数回登場する要素は同一クラスで管理し、統一感のあるデザイン及び無駄の少ないコードに近づけました。CSS設計を導入したことで、修正・改装が簡潔に運用できるようになっています。</p>
                                </li>
                            </ul>
                        </article>
                    </div>
                    
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </main>
        <?php get_footer(); ?>