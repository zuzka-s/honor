<?php 
$page_type = "home";
include_once('header.php');
include_once('casovyinterval.php'); 
include_once('boxes.php'); ?>

<div class="kzrow profiles">
    <div class="container">
        <h2>Profily oblíbených umělců zapojených do #kulturažije</h2>
        <div id="oblibene-profily" class="carousel-container">
            <div class="carousel-hide-scrollbar-wrapper">
                <div class="carousel-boxes-container subfilter-panel">
                    <div class="profile select-carousel-item">
                        <a href="/profil/americke-jaro/">
                            <div class="profile-img"
                                style="background-image: url('/images/profily/americke-jaro.jpg');">
                            </div>
                            <div class="profile-name">
                                <div>Americké jaro</div>
                            </div>
                        </a>
                    </div>                    
                    <div class="profile select-carousel-item">
                        <a href="/profil/divadlo-polarka/">
                            <div class="profile-img"
                                style="background-image: url('/images/profily/divadlo-polarka.jpg');">
                            </div>
                            <div class="profile-name">
                                <div>Divadlo Polárka</div>
                            </div>
                        </a>
                    </div>
                    <div class="profile active select-carousel-item">
                        <a href="/profil/divadlo-viola/">
                            <div class="profile-img"
                                style="background-image: url('/images/profily/divadlo-viola.jpg');">
                            </div>
                            <div class="profile-name">
                                <div>Divadlo Viola</div>
                            </div>
                        </a>
                    </div>
                    <div class="profile select-carousel-item">
                        <a href="/profil/geisslers/">
                            <div class="profile-img" style="background-image: url('/images/profily/geisslers.jpg');">
                            </div>
                            <div class="profile-name">
                                <div>Geisslers Hofcomoedianten</div>
                            </div>
                        </a>
                    </div>
                    <div class="profile select-carousel-item">
                        <a href="/profil/hudebni-institut/">
                            <div class="profile-img"
                                style="background-image: url('/images/profily/hudebni-institut.jpg');">
                            </div>
                            <div class="profile-name">
                                <div>Hudební Institut</div>
                            </div>
                        </a>
                    </div>
                    <div class="profile select-carousel-item">
                        <a href="/profil/kabaret-caligula/">
                            <div class="profile-img"
                                style="background-image: url('/images/profily/kabaret-caligula.jpg');">
                            </div>
                            <div class="profile-name">
                                <div>Kabaret Caligula</div>
                            </div>
                        </a>
                    </div>
                    <div class="profile select-carousel-item">
                        <a href="/profil/kaznice-live/">
                            <div class="profile-img"
                                style="background-image: url('/images/profily/kaznice.jpg');">
                            </div>
                            <div class="profile-name">
                                <div>Káznice LIVE</div>
                            </div>
                        </a>
                    </div>                    
                    <div class="profile select-carousel-item">
                        <a href="/profil/masopust/">
                            <div class="profile-img" style="background-image: url('/images/profily/masopust.jpg');">
                            </div>
                            <div class="profile-name">
                                <div>Masopust</div>
                            </div>
                        </a>
                    </div>
                    <div class="profile select-carousel-item">
                        <a href="/profil/mhf-lipa-musica/">
                            <div class="profile-img" style="background-image: url('/images/profily/lipa-musica.jpg');">
                            </div>
                            <div class="profile-name">
                                <div>MHF Lípa Musica</div>
                            </div>
                        </a>
                    </div>
                    <div class="profile select-carousel-item">
                        <a href="/profil/o5-radecek/">
                            <div class="profile-img" style="background-image: url('/images/profily/o5aradecek.jpg');">
                            </div>
                            <div class="profile-name">
                                <div>O5 a Radeček</div>
                            </div>
                        </a>
                    </div>
                    <div class="profile select-carousel-item">
                        <a href="/profil/opera-studio-praha/">
                            <div class="profile-img" style="background-image: url('/images/profily/opera-studio.jpg');">
                            </div>
                            <div class="profile-name">
                                <div>Opera studio Praha</div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <a href="javascript:void(0)" class="scroll-left"><span class="arrow"></span></a>
            <a href="javascript:void(0)" class="scroll-right"><span class="arrow"></span></a>
        </div>
    </div>
</div>
<div class="kzrow secondrow">
    <div class="container">
        <div id="watchnow">
            <h2>Představení, na která se můžete podívat hned teď</h2>
            <div class="filter-panel">
                <button class="filter all active">Vše</button>
                <button class="filter theatre"><i class="las la-theater-masks"></i> Divadlo</button>
                <button class="filter music"><i class="las la-headphones"></i> Hudba</button>
                <button class="filter classical-music"><i class="la la-music"></i> Klasická hudba</button>
                <button class="filter reading"><i class="la la-book"></i> Čtení</button>
                <button class="filter talkshow"><i class="las la-comment-alt"></i> Povídání</button>
                <button class="filter for-kids"><i class="las la-hat-wizard"></i> Pro děti</button>
            </div>
            <div class="more-flex">
                <?php echo generateProgrammeBoxes("broadcasted", 12, null, null); ?>
            </div>
            <button class="loadAll"><i class="las la-arrow-down"></i> Načíst další</button>
        </div>
        <div id="forthcoming">
            <h2 class="mt-5">Chystaná představení, která si nemůžete nechat ujít</h2>
            <div class="filter-panel">
            </div>
            <div class="more-flex">
                <?php echo generateProgrammeBoxes("upcoming", 12, null, null); ?>
            </div>
        </div>
        <div class="text-center reg-updated">
            <p>Program je průběžně aktualizován.</p>
        </div>


    </div>
</div>
<?php include("footer.php"); ?>