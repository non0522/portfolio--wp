<?php get_header(); ?>
        <main class="p-main">
            <section class="p-mainvidual js-sec1">
                <!-- <div class="u-align--main"></div> -->
                <article class="p-mainvidual__contents">
                    <p class="js-typ">Hello,</p>
                    <p class="js-typ">I am a Web Designer</p>
                    <p class="js-typ">Nozomu Dokoh</p>
                </article>
            </section><!-- /.p-mainvidual -->
            <section id="about" class="p-about js-sec2">
                <h2 class="c-subtitle c-subtitle--vertical">ABOUT ME</h2>
                <article>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/aboutme-color.jpg" alt="" class="c-image--color">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/black_and_white.png" alt="" class="c-image--white">
                </article>
                <article class="c-introduce">
                    <p>土光 希望（どこう のぞむ）
                        <br>神奈川県相模原市出身
                    </p>
                    <p>2010年大学卒業。IT商社、消防士、人力車車夫を経験。
                        <br>2021年5月〜Web制作をフリーランスで行っています。
                        <br>将来目標は海外にてストリートチルドレンのボランティアをすること。
                    </p>
                </article>
            </section><!-- /.p-about -->
            <section id="skills" class="p-skills js-sec3">
                <h2 class="c-subtitle c-subtitle--skills">SKILLS</h2>
                <article class="p-skills__catch">
                    <ul>
                        <li>
                            <article class="p-catch">
                                <div class="c-hexagon">

                                    <img class="c-icon" src="<?php echo get_template_directory_uri(); ?>/img/icon-eye.svg">
                                    <h3>Direct</h3>
                                </div>
                                <p>一目で伝わるサイト構築。
                                    <br>直感的UIとリッチなデザインを提供。
                                </p>
                            </article>
                        </li>
                        <li>
                            <article class="p-catch">
                                <div class="c-hexagon">

                                    <img class="c-icon" src="<?php echo get_template_directory_uri(); ?>/img/icon-responsive.svg">
                                    <h3>Responsive</h3>
                                </div>
                                <p>どんなデバイスにも対応。
                                    <br>レイアウト崩れのしない設計。
                                </p>
                            </article>
                        </li>
                        <li>
                            <article class="p-catch">
                                <div class="c-hexagon">

                                    <img class="c-icon" src="<?php echo get_template_directory_uri(); ?>/img/icon-rocket.svg">
                                    <h3>Speed</h3>
                                </div>
                                <p>表示速度に重点を置いた設計。
                                    <br>ユーザーストレスを0.1秒でも解消。
                                </p>
                            </article>
                        </li>
                        <li>
                            <article class="p-catch">
                                <div class="c-hexagon">
                                    <img class="c-icon" src="<?php echo get_template_directory_uri(); ?>/img/icon-heart.svg">
                                    <h3>Love</h3>
                                </div>
                                <p>愛情第一主義。
                                    <br>子育てのように大事に制作。
                                </p>
                            </article>
                        </li>
                    </ul>
                </article><!-- /.p-skills__catch -->
                <section class="p-skills__wrap">
                    <article class="c-diagram">
                        <!-- <p>↓Let's Hover↓</p> -->
                        <div class="c-diagram__upper c-diagram__base js-slide">
                            <p class="">Codeing</p>
                        </div>
                        <div class="c-diagram__middle--right">Perfect!!</div>
                        <div class="c-diagram__under c-diagram__base js-slide">
                            <p class="">Design</p>
                        </div>
                        <div class="c-diagram__middle--left">So-so...</div>
                        <!-- <img src="" alt=""> -->
                    </article>
                    <article class="p-chart">
                        <ul>
                            <li class="c-bar">
                                <div class="c-bar__fill js-animation" style="width:90%">
                                    <div class="c-bar__fill__tag">CSS</div>
                                </div>
                                <span>90%</span>
                            </li>
                            <li class="c-bar">
                                <div class="c-bar__fill js-animation" style="width:90%">
                                    <div class="c-bar__fill__tag">HTML</div>
                                </div>
                                <span>90%</span>
                            </li>
                            <li class="c-bar">
                                <div class="c-bar__fill js-animation" style="width:70%">
                                    <div class="c-bar__fill__tag">SCSS</div>
                                </div>
                                <span>70%</span>
                            </li>
                            <li class="c-bar">
                                <div class="c-bar__fill js-animation" style="width:80%">
                                    <div class="c-bar__fill__tag">FLOCSS</div>
                                </div>
                                <span>80%</span>
                            </li>
                            <li class="c-bar">
                                <div class="c-bar__fill js-animation" style="width:80%">
                                    <div class="c-bar__fill__tag">JavaScript</div>
                                </div>
                                <span>80%</span>
                            </li>
                            <li class="c-bar">
                                <div class="c-bar__fill js-animation" style="width:70%">
                                    <div class="c-bar__fill__tag">Git</div>
                                </div>
                                <span>70%</span>
                            </li>
                            <li class="c-bar">
                                <div class="c-bar__fill js-animation" style="width:80%">
                                    <div class="c-bar__fill__tag">WordPress</div>
                                </div>
                                <span>80%</span>
                            </li>
                        </ul>
                    </article><!-- /.p-chart -->
                </section>
            </section><!-- /.p-skills -->
            <section id="works" class="p-works js-sec4">
                <h2 class="c-subtitle c-subtitle--works">WORKS</h2>
                <section class="p-works__list">
                    <a href="<?php echo esc_url( home_url() ) ;?>/tagara">
                        <div class="p-works__imgframe">
                            <img class="p-works__img--sp" src="<?php echo get_template_directory_uri(); ?>/img/work-tagara--sp.png" alt="">
                            <img class="p-works__img--tab" src="<?php echo get_template_directory_uri(); ?>/img/work-tagara.png" alt="">
                        </div>
                        <p class="p-works__hide">詳しく見る</p>
                        <p>ダンススクールHP</p>
                        <h4>タガラバレエサークル</h4>
                    </a>
                    <a href="<?php echo esc_url( home_url() ) ;?>/hamburger">
                        <div class="p-works__imgframe">
                            <img class="p-works__img--sp" src="<?php echo get_template_directory_uri(); ?>/img/work-hamburger--sp.png" alt="">
                            <img class="p-works__img--tab" src="<?php echo get_template_directory_uri(); ?>/img/work-hamburger.png" alt="">
                        </div>
                        <p class="p-works__hide">詳しく見る</p>
                        <p>飲食店HP (架空サイト)</p>
                        <h4>ハンバーガーショップ</h4>
                    </a>
                    <a href="<?php echo esc_url( home_url() ) ;?>/raisetech">
                        <div class="p-works__imgframe">
                            <img class="p-works__img--sp" src="<?php echo get_template_directory_uri(); ?>/img/work-raisetech--sp.png" alt="">
                            <img class="p-works__img--tab" src="<?php echo get_template_directory_uri(); ?>/img/work-raisetech.png" alt="">
                        </div>
                        <p class="p-works__hide">詳しく見る</p>
                        <p>プログラミングスクールHP</p>
                        <h4>RaiseTech 旧サイト</h4>
                    </a>
                    <a href="<?php echo esc_url( home_url() ) ;?>/create">
                        <div class="p-works__imgframe">
                            <img class="p-works__img--sp" src="<?php echo get_template_directory_uri(); ?>/img/work-sosaku--sp.png" alt="">
                            <img class="p-works__img--tab" src="<?php echo get_template_directory_uri(); ?>/img/work-sosaku.png" alt="">
                        </div>
                        <p class="p-works__hide">詳しく見る</p>
                        <p>ECサイト (架空サイト)</p>
                        <h4>CREATIVE</h4>
                    </a>
                </section>
            </section><!-- /p.skills -->
            <section id="contact" class="p-contact js-sec5">
                <div class="c-triangle">
                    <div class="c-triangle__left"></div>
                    <div class="c-triangle__right"></div>
                </div>
                <h2 class="c-subtitle c-subtitle--works">CONTACT</h2>

                <?php echo do_shortcode('[contact-form-7 id="13" title="Contact form 1"]'); ?>

            </section>
        </main><!-- /.p-main -->
    <?php get_footer(); ?>