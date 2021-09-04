<?php get_header(); ?>
        <main>
            <div class="swiper-container mySwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img class="swiper-img--sp" src="<?php echo get_template_directory_uri(); ?>/img/swiper-create1--sp.png" alt="">
                        <img class="swiper-img--pc" src="<?php echo get_template_directory_uri(); ?>/img/swiper-create1--ps.png" alt="">
                        <article>
                            <h2>模写コーディングサイト「Codestep」</h2>
                            <ul>
                                <li>
                                    <h3>[ 概要 ]</h3>
                                    <p>コーディング練習サイトのCodestepさんより、日頃コーディングしない縦書きのサイトをチョイス</p>    
                                </li>
                                <li>
                                    <h3>[ リンク ]</h3>
                                    <p>GitHub　ソースコード<a href="https://github.com/non0522/CopiedSites/tree/main/codestep/creation"><br>https://github.com/non0522/CopiedSites/tree/main/codestep/creation</a></p>
                                    <p></p>
                                </li>
                                <li class="swiper-slide__pctext">
                                    <h3>[ Skills ]</h3>
                                    <p>HTML/CSS/SCSS</p>
                                </li>
                            </ul>
                        </article>
                    </div>
                    <div class="swiper-slide">
                        <img class="swiper-img--sp" src="<?php echo get_template_directory_uri(); ?>/img/swiper-create2--sp.png" alt="">
                        <img class="swiper-img--pc" src="<?php echo get_template_directory_uri(); ?>/img/swiper-create2--pc.png" alt="">
                        <article>
                            <h2>模写コーディングサイト「Codestep」</h2>
                            <ul>
                                <li>
                                    <h3>[ ポイント ]</h3>
                                    <p>日本らしい縦書きデザイン</p>  
                                </li>
                                <li>
                                    <h3>[ 説明 ]</h3>
                                    <p>あまり見ることのない縦書きのデザインで、マークアップにかなり苦戦しました。margin, paddingなど１から勉強し直す良い機会となりました。</p>
                                    <p class="swiper-slide__pctext">「writing-mode: vertical-rl;」を使用し、実装しましたが、中央配置やimgの設定など普段とは要素が異なる動きになり、CSS構造を改めて考え直しました。</p>
                                </li>
                            </ul>
                        </article>
                    </div>
                    
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </main>
    <?php get_footer(); ?>