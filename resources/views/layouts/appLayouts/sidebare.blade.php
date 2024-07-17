<div class="nk-sidebar nk-sidebar-fixed is-light " data-content="sidebarMenu">
    <div class="nk-sidebar-element nk-sidebar-head">
        <div class="nk-sidebar-brand">
            <a href="html/index.html" class="logo-link nk-sidebar-logo">
                <img class="logo-light logo-img" src="./images/logo.png" srcset="./images/logo2x.png 2x" alt="logo">
                <img class="logo-dark logo-img" src="./images/logo-dark.png" srcset="./images/logo-dark2x.png 2x" alt="logo-dark">
                <img class="logo-small logo-img logo-img-small" src="./images/logo-small.png" srcset="./images/logo-small2x.png 2x" alt="logo-small">
            </a>
        </div>
        <div class="nk-menu-trigger me-n2">
            <a href="#" class="nk-nav-toggle nk-quick-nav-icon d-xl-none" data-target="sidebarMenu"><em class="icon ni ni-arrow-left"></em></a>
            <a href="#" class="nk-nav-compact nk-quick-nav-icon d-none d-xl-inline-flex" data-target="sidebarMenu"><em class="icon ni ni-menu"></em></a>
        </div>
    </div><!-- .nk-sidebar-element -->
    <div class="nk-sidebar-element">
        <div class="nk-sidebar-content">
            <div class="nk-sidebar-menu" data-simplebar>
                <ul class="nk-menu">

                    <li class="nk-menu-item">
                        <a href="index.php" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-home"></em></span>
                            <span class="nk-menu-text">Accueil</span>
                        </a>
                    </li><!-- .nk-menu-item -->
                    <li class="nk-menu-item has-sub">
                        <a href="#" class="nk-menu-link nk-menu-toggle">
                            <span class="nk-menu-icon"><em class="icon ni ni-tile-thumb-fill"></em></span>
                            <span class="nk-menu-text">Annuaires</span>
                        </a>
                        <ul class="nk-menu-sub">
                            <li class="nk-menu-item">
                                <a href="annuaireavocat.php" class="nk-menu-link"><span class="nk-menu-text">Annuaire avocats</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="annuaireexpert.php" class="nk-menu-link"><span class="nk-menu-text">Annuaire experts</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="annuairehuissier.php" class="nk-menu-link"><span class="nk-menu-text">Annuaire huissiers</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="annuairejustice.php" class="nk-menu-link"><span class="nk-menu-text">Annuaire  de justice</span></a>
                            </li>
                        </ul><!-- .nk-menu-sub -->
                    </li><!-- .nk-menu-item -->
                    <li class="nk-menu-item">
                        <a href="message.php" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-msg"></em></span>
                            <span class="nk-menu-text">Message</span>
                        </a>
                    </li><!-- .nk-menu-item -->
                    <li class="nk-menu-item">
                        <a href="{{route('recrutement')}}" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-search"></em></span>
                            <span class="nk-menu-text">Recruter</span>
                        </a>
                    </li><!-- .nk-menu-item -->
                    <li class="nk-menu-item">
                        <a href="{{route('abonnement')}}" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-cc-alt"></em></span>
                            <span class="nk-menu-text">Abonnement</span>
                        </a>
                    </li><!-- .nk-menu-item -->
                    <li class="nk-menu-item">
                        <a href="moncompte.php" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-user"></em></span>
                            <span class="nk-menu-text">Mon compte</span>
                        </a>
                    </li><!-- .nk-menu-item -->
                    <li class="nk-menu-item">
                        <a href="{{url('/logout')}}" class="nk-menu-link" onclick="event.preventDefault();$('#logout_form').submit()">
                            <span class="nk-menu-icon"><em class="icon ni ni-signout"></em></span>
                            <span class="nk-menu-text">Deconnexion</span>
                        </a>
                        <form  id='logout_form' action="{{url('/logout')}}" method="POST">
                            {{csrf_field()}}
                        </form>
                    </li><!-- .nk-menu-item -->

                    <li class="nk-menu-item mt-5">
                        <a href="html/index-analytics.html" class="nk-menu-link " style="background-color: #ff8000;color: white">
                            <span class="nk-menu-icon"><em class="icon ni ni-mail-fill"></em></span>
                            <span class="nk-menu-text">Nous contacter</span>
                        </a>
                    </li><!-- .nk-menu-item -->

                </ul><!-- .nk-menu -->
            </div><!-- .nk-sidebar-menu -->
        </div><!-- .nk-sidebar-content -->
    </div><!-- .nk-sidebar-element -->
</div>