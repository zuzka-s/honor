        <div id="partners" class="section partners">
            <div class="container">
                <h2>Partneři projektu</h2>
                <div class="logo-boxes">
                    <div class="logo-box"><img class="lozad" src="/images/loga/mall_tv.png" alt="MALL.TV"></div>
                    <div class="logo-box"><img class="lozad" src="/images/loga/mallcz.png" alt="MALL.CZ"></div>
                    <div class="logo-box"><img class="lozad" src="/images/loga/dell.png" alt="DELL"></div>
                    <div class="logo-box"><img class="lozad" src="/images/loga/donio.png" alt="Donio"></div>
                    <div class="logo-box"><img class="lozad" src="/images/loga/eon.png" alt="EON"></div>
                    <div class="logo-box"><img class="lozad" src="/images/loga/dopravni_podnik.png" alt="Dopravní podnik"></div>
                    <div class="logo-box"><img class="lozad" src="/images/loga/praha.png" alt="Praha"></div>
                    <div class="logo-box"><img class="lozad" src="/images/loga/reflex.png" alt="Reflex"></div>
                    <div class="logo-box"><img class="lozad" src="/images/loga/visa.png" alt="Visa"></div>
                    <div class="logo-box"><img class="lozad" src="/images/loga/musicserver.png" alt="Music Server"></div>
                    <div class="logo-box"><img class="lozad" src="/images/loga/spark.png" alt="Spark"></div>
                    <div class="logo-box"><img class="lozad" src="/images/loga/fullmoon.png" alt="Fullmoon"></div>                                                                               
                </div>
            </div>
        </div>
        <div id="malltv-newest" class="section newestvideos">
            <div class="container">
                <h2>Nejnovější videa na MALL.TV</h2>
                <div class="carousel-wrap">
                    <div id="mtv-nejnovejsi" class="carousel-container">
                        <div class="carousel-hide-scrollbar-wrapper">
                            <div class="carousel-boxes-container">
                                <?php
                                    $xml_file = "https://martyisdead.mall.tv/xml/embedsekcenejnovejsi.xml";
                                    $xml = simplexml_load_file($xml_file);     

                                    foreach($xml as $video) {
                                        $badge='';
                                        $videolink = str_replace("/embed", "", $video->link);
                                        if($video->new_badge==1) {
                                            $badge = '<div class="malltv-carousel-vid-label">Nové</div>';
                                        }
                                        echo '<div class="malltv-carousel-vid-box">
                                        <a href="https://www.mall.tv'.$videolink.'" target="_blank"
                                            class="ng-isolate-scope video-click select-carousel-item malltv-carousel-vid-box-wrapper">
                                            <div class="malltv-carousel-vid-img" style="background-image: url('.$video->image.');">
                                                '.$badge.'
                                                <div class="malltv-carousel-vid-time">'.$video->duration.'</div>
                                                <div class="malltv-carousel-vid-play-btn"></div>
                                            </div>
                                            <h3>'.$video->title.'</h3>
                                        </a>
                                        <div class="malltv-carousel-vid-info"><a class="malltv-carousel-vid-channel" target="_blank"
                                                href="//mall.tv'.$video->channel_url.'">'.$video->channel_name.'</a>
                                            <span class="malltv-carousel-vid-timestamp">'.$video->timestamp.'</span></div>
                                    </div>';   
                                    }
                                    ?>
                            </div>
                        </div>
                        <a href="javascript:void(0)" class="scroll-left"><span class="arrow"></span></a>
                        <a href="javascript:void(0)" class="scroll-right"><span class="arrow"></span></a>
                    </div>
                </div>
            </div>

        </div>
        <div id="malltv-promo" class="section malltvapp">
            <div class="container">
                <div class="mtvapp100">
                    <h2 class="h2-app">Sledujte MALL.TV na všech zařízeních</h2>
                </div>
                <div class="mtvapp1">
                    <div class="applinksbox">
                        <p>Kultura žije a další oblíbené pořady MALL.TV, můžete sledovat pohodlně v mobilu, ve své Smart
                            TV
                            nebo na XBOXU! Stačí si jen vybrat.</p>
                        <a target="_blank" href="https://apps.apple.com/cz/app/mall-tv/id1446896639"
                            class="store grow"><img src="/images/app-store.png" alt="App Store"></a>
                        <a target="_blank" href="https://play.google.com/store/apps/details?id=mall.tv&amp;hl=cs"
                            class="store grow"><img src="/images/google-play.png" alt="Google Play"></a>
                        <p class="platformy">MALL.TV lze sledovat na všech těchto platformách a zařízeních:</p>
                        <div class="platformy">
                            <img class="lozad" src="/images/platformy/1.png" alt="Apple TV">
                            <img class="lozad" src="/images/platformy/2.png" alt="PC">
                            <img class="lozad" src="/images/platformy/3.png" alt="Tablet">
                            <img class="lozad" src="/images/platformy/4.png" alt="Mobil">
                            <img class="lozad" src="/images/platformy/5.png" alt="Internet">
                            <a href="https://www.microsoft.com/cs-cz/p/malltv/9nqg4rfv1jp3?cid=msft_web_chart"
                                target="_blank"><img class="lozad" src="/images/platformy/6.png" alt="XBOX"></a>
                            <img class="lozad" src="/images/platformy/7.png" alt="Smart TV">
                        </div>
                    </div>
                </div>
                <div class="mtvapp2">
                    <div class="mobil"><img class="lozad" src="/images/aplikace2.png" width="300" alt="mobilní aplikace"></div>
                </div>
            </div>

        </div>

        <div id="footer" class="section">
            <div class="container">
                © 2020 Internet Mall, a. s.
            </div>
        </div>
    </div>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>


    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
        
    <script type="text/javascript" src="/carousel.js"></script>
    <script type="text/javascript" src="/filters.js"></script>
    <script type="text/javascript" src="/filters2.js"></script>
    <script>
    launchCarousel('#mtv-nejnovejsi');
    launchCarousel('#oblibene-profily');
    filterAndLimitBoxes2('#watchnow');
    filterAndLimitBoxes('#forthcoming');
    </script>
</body>

</html>