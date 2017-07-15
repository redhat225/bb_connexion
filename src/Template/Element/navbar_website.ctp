<div class="bb-main-background" id="main-wrapper-navbar">
    <nav id='bb_connexion_website_navbar' class="bb-main-background">
        <div class="nav-wrapper">
          <a href="/home" class="brand-logo"><?= $this->Html->image('assets_bb_connexion/business_connexion_logo_transparent_white.png',['style'=>'width:215px;']) ?></a>
          <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="ion-android-menu white-text small"></i></a>
          <ul id="nav-mobile" class="right hide-on-med-and-down">
            <!-- Language Choosing -->
            <li class="futura-text" style="border-right:1px dotted #fff; padding-right:5px;">
               <span class="french-language choosen-language pointer bb-orange-background">FR</span>
               <span class="english-language white-text pointer">EN</span>
            </li>
            <!-- Extended Menu -->
            <li class="futura-text bb-orange-background"><a href="sass.html" class="white-text nav-item-size"> <?= h('Bienvenue sur le Portail') ?> </a></li>
            <li class="futura-text bb_connexion_item"><a href="#!" class="white-text nav-item-size"> <?= h('Présenter sa Société') ?> </a></li>

            <li class="futura-text bb_connexion_item"><a href="#!" class="white-text nav-item-size"> <?= h('Gallerie') ?> </a></li>
            <li class="futura-text bb_connexion_item"><a href="#!" class="white-text nav-item-size"> <?= h('Evenements') ?> </a></li>
            <li class="futura-text bb_connexion_item"><a href="#!" class="white-text nav-item-size"> <?= h('Aide & Contact') ?> </a></li>


            <!-- Registered Member Space B->B Connexion -->
            <li class="futura-text bb-orange-background bb_connexion_member-element pointer" id="trigger-subscriber-meeting"> <span class="left" style="margin-left:5px;"><i class="ion-android-person white-text"></i></span> <span class="right"><a href="#!" style="background:transparent !important;" class="white-text nav-item-size"><?= h('Je Participe') ?></a></span></li>

          </ul>
        </div>
    </nav>
</div>

<!-- SideNav Initialization -->
     <ul class="side-nav bb-main-background" id="mobile-demo">
        <li class="white center" style="border-bottom:1px dotted #1a70fe;"><?= $this->Html->image('assets_bb_connexion/business_connexion_logo_transparent.png',['style'=>'width:250px;']) ?></li>
        <li><a href="#!" class="futura-text white-text sidenav-item-bb-connexion active"><?= h('Bienvenue sur le Portail') ?> </a></li>
        <li><a href="#!" class="futura-text white-text sidenav-item-bb-connexion"><?= h('Gallerie') ?> </a></li>
        <li><a href="#!" class="futura-text white-text sidenav-item-bb-connexion"><?= h('Présenter sa Société') ?> </a></li>
        <li><a href="#!" class="futura-text white-text sidenav-item-bb-connexion"><?= h('Evennements') ?> </a></li>
        <li><a href="#!" class="futura-text white-text sidenav-item-bb-connexion"><?= h('Aide & Contact') ?> </a></li>
        <li><a href="#!" class="futura-text white-text sidenav-item-bb-connexion"><?= h('Participer au meeting') ?> </a></li>
     </ul>