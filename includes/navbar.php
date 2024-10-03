<!-- Navbar Start -->
<nav class="d-lg-none d-block navbar navbar-expand-lg navbar-light bg-white sticky-top py-0 px-3 wow fadeIn" data-wow-delay="0.1s">
    <div class="d-flex justify-content-between m-0 p-0 ">
    <a href="index.php" class="navbar-brand ms-1 bg-white pe-3 rounded-end">
        <h1 class="text-primary m-0"><img class="me-2" src="img/icons/icon-1.png" alt="Icon">GPB</h1>
    </a>
    <button type="button" class="navbar-toggler me-1" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    </div>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto p-4 p-lg-0">
            <a href="index.php" class="nav-item nav-link active fw-bold">Home</a>
            <a href="about-us.php" class="nav-item nav-link fw-bold">About Us</a>
            <a href="our-services.php" class="nav-item nav-link fw-bold">Our Services</a>
            <a href="our-projects.php" class="nav-item nav-link fw-bold">Our Projects</a>
            <a href="our-team.php" class="nav-item nav-link fw-bold">Our Team</a>
            <a href="contact-us.php" class="nav-item nav-link fw-bold">Contact Us</a>
        </div>
        <a href="contact-us.php" class="ms-auto btn btn-primary py-3 px-5 fw-bold rounded d-none d-lg-block text-uppercase">Enquire Now</a>
        
    </div>
</nav>
<!-- Navbar End -->



<style>
    /* .side-nav-bar {
        position: absolute;
        z-index: 170;
        right: 0;
        margin: 30px;
        display: block;
        width: 30px;
    } */

    /* Overlay Navigation 
--------------------------------------------------------------*/
    .nav-overlay {
        position: fixed;
        z-index: 9;
    }

    .nav-overlay:before,
    .nav-overlay:after {
        content: "";
        position: fixed;
        width: 100vw;
        height: 100vh;
        background: rgba(20, 21, 26, 0.6);
        border-bottom-left-radius: 200%;
        z-index: -1;
        -webkit-transition: -webkit-transform cubic-bezier(0.77, 0, 0.175, 1) 0.6s, border-radius linear 0.8s;
        transition: -webkit-transform cubic-bezier(0.77, 0, 0.175, 1) 0.6s, border-radius linear 0.8s;
        transition: transform cubic-bezier(0.77, 0, 0.175, 1) 0.6s, border-radius linear 0.8s;
        transition: transform cubic-bezier(0.77, 0, 0.175, 1) 0.6s, -webkit-transform cubic-bezier(0.77, 0, 0.175, 1) 0.6s, border-radius linear 0.8s;
        -webkit-transform: translateX(100%) translateY(-100%);
        transform: translateX(100%) translateY(-100%);
    }

    .nav-overlay:after {
        background: rgba(9, 9, 12, 1);
        background: var(--dark-color);
        -webkit-transition-delay: 0s;
        transition-delay: 0s;
    }

    .nav-overlay:before {
        -webkit-transition-delay: .2s;
        transition-delay: .2s;
    }

    .nav__content {
        position: fixed;
        visibility: hidden;
        top: 50%;
        margin-top: 20px;
        -webkit-transform: translate(0%, -50%);
        transform: translate(0%, -50%);
        width: 100%;
    }

    .nav__list {
        position: relative;
        padding: 0;
        margin: 0;
        z-index: 2;
    }

    .nav__list-item {
        position: relative;
        display: block;
        -webkit-transition-delay: 0.8s;
        transition-delay: 0.8s;
        opacity: 0;
        color: #fff;
        overflow: hidden;
        font-family: var(--heading-font);
        font-size: 6vh;
        font-weight: 900;
        line-height: 1.15;
        letter-spacing: 3px;
        -webkit-transform: translate(100px, 0%);
        transform: translate(100px, 0%);
        -webkit-transition: opacity .2s ease, -webkit-transform .3s ease;
        transition: opacity .2s ease, -webkit-transform .3s ease;
        transition: opacity .2s ease, transform .3s ease;
        transition: opacity .2s ease, transform .3s ease, -webkit-transform .3s ease;
        margin-top: 0;
        margin-bottom: 0;
    }

    .nav__list-item a {
        position: relative;
        text-decoration: none;
        color: rgba(255, 255, 255, 0.6);
        overflow: hidden;
        cursor: pointer;
        padding-left: 5px;
        padding-right: 5px;
        font-weight: 900;
        z-index: 2;
        display: inline-block;
        text-transform: uppercase;
        -webkit-transition: all 200ms linear;
        transition: all 200ms linear;
    }

    .nav__list-item a:after {
        position: absolute;
        content: '';
        top: 50%;
        margin-top: -2px;
        left: 50%;
        width: 0;
        height: 0;
        opacity: 0;
        background-color: var(--accent-color);
        z-index: 1;
        -webkit-transition: all 200ms linear;
        transition: all 200ms linear;
    }

    .nav__list-item a:hover:after {
        height: 4px;
        opacity: 1;
        left: 0;
        width: 100%;
    }

    .nav__list-item a:hover {
        color: rgba(255, 255, 255, 1);
    }

    .nav__list-item.active-nav a {
        color: rgba(255, 255, 255, 1);
    }

    .nav__list-item.active-nav a:after {
        height: 4px;
        opacity: 1;
        left: 0;
        width: 100%;
    }

    body.nav-active .nav__content {
        visibility: visible;
    }

    body.nav-active .menu-icon__line {
        background-color: #fff;
        -webkit-transform: translate(0px, 0px) rotate(-45deg);
        transform: translate(0px, 0px) rotate(-45deg);
    }

    body.nav-active .menu-icon__line-left {
        width: 15px;
        -webkit-transform: translate(2px, 4px) rotate(45deg);
        transform: translate(2px, 4px) rotate(45deg);
    }

    body.nav-active .menu-icon__line-right {
        width: 15px;
        float: right;
        -webkit-transform: translate(-3px, -3.5px) rotate(45deg);
        transform: translate(-3px, -3.5px) rotate(45deg);
    }

    body.nav-active .menu-icon:hover .menu-icon__line-left,
    body.nav-active .menu-icon:hover .menu-icon__line-right {
        width: 15px;
    }

    body.nav-active .nav-overlay {
        visibility: visible;
    }

    body.nav-active .nav-overlay:before,
    body.nav-active .nav-overlay:after {
        -webkit-transform: translateX(0%) translateY(0%);
        transform: translateX(0%) translateY(0%);
        border-radius: 0;
    }

    body.nav-active .nav-overlay:after {
        -webkit-transition-delay: .1s;
        transition-delay: .1s;
    }

    body.nav-active .nav-overlay:before {
        -webkit-transition-delay: 0s;
        transition-delay: 0s;
    }

    body.nav-active .nav__list-item {
        opacity: 1;
        -webkit-transform: translateX(0%);
        transform: translateX(0%);
        -webkit-transition: opacity .3s ease, color .3s ease, -webkit-transform .3s ease;
        transition: opacity .3s ease, color .3s ease, -webkit-transform .3s ease;
        transition: opacity .3s ease, transform .3s ease, color .3s ease;
        transition: opacity .3s ease, transform .3s ease, color .3s ease, -webkit-transform .3s ease;
    }

    body.nav-active .nav__list-item:nth-child(0) {
        -webkit-transition-delay: 0.7s;
        transition-delay: 0.7s;
    }

    body.nav-active .nav__list-item:nth-child(1) {
        -webkit-transition-delay: 0.8s;
        transition-delay: 0.8s;
    }

    body.nav-active .nav__list-item:nth-child(2) {
        -webkit-transition-delay: 0.9s;
        transition-delay: 0.9s;
    }

    body.nav-active .nav__list-item:nth-child(3) {
        -webkit-transition-delay: 1s;
        transition-delay: 1s;
    }

    body.nav-active .nav__list-item:nth-child(4) {
        -webkit-transition-delay: 1.1s;
        transition-delay: 1.1s;
    }

    body.nav-active .nav__list-item:nth-child(5) {
        -webkit-transition-delay: 1.2s;
        transition-delay: 1.2s;
    }

    body.nav-active .nav__list-item:nth-child(6) {
        -webkit-transition-delay: 1.3s;
        transition-delay: 1.3s;
    }

    body.nav-active .nav__list-item:nth-child(7) {
        -webkit-transition-delay: 1.4s;
        transition-delay: 1.4s;
    }

    body.nav-active .nav__list-item:nth-child(8) {
        -webkit-transition-delay: 1.5s;
        transition-delay: 1.5s;
    }

    body.nav-active .nav__list-item:nth-child(9) {
        -webkit-transition-delay: 1.6s;
        transition-delay: 1.6s;
    }

    body.nav-active .nav__list-item:nth-child(10) {
        -webkit-transition-delay: 1.7s;
        transition-delay: 1.7s;
    }

    @media only screen and (max-width: 580px) {
        .nav__list-item {
            font-size: 5vh;
        }
    }

    .nav__block .nav__block-item {
        display: block;
        opacity: 0;
        transform: translate(100px, 0%);
        transition: opacity .6s ease, transform .6s ease;
    }

    .nav__block .nav__block-item:nth-child(1) {
        transition-delay: 300ms;
    }

    .nav__block .nav__block-item:nth-child(2) {
        transition-delay: 600ms;
    }

    .nav__block .nav__block-item:nth-child(3) {
        transition-delay: 900ms;
    }

    .nav__block .nav__block-item:nth-child(4) {
        transition-delay: 1200ms;
    }

    .nav__block .nav__block-item:nth-child(5) {
        transition-delay: 1500ms;
    }

    .nav__block .nav__block-item:nth-child(6) {
        transition-delay: 1800ms;
    }

    .nav__block .nav__block-item:nth-child(7) {
        transition-delay: 2100ms;
    }

    .nav__block .nav__block-item:nth-child(8) {
        transition-delay: 2400ms;
    }

    .nav__block .nav__block-item:nth-child(9) {
        transition-delay: 2700ms;
    }

    .nav__block .nav__block-item:nth-child(10) {
        transition-delay: 3000ms;
    }

    body.nav-active .nav__block .nav__block-item {
        opacity: 1;
        transform: translateX(0%);
    }



    .side-nav-bar {
        position: absolute;
        z-index: 10;
    }

    header.sticky .side-nav-bar .menu-btn {
        margin: 0 40px;
    }

    .action-menu .side-nav-bar .menu-btn a,
    .action-menu .searchbar a {
        color: #000;
        text-decoration: none;
        line-height: 2.2;
    }

    .side-nav-bar #menu-toggle {
        opacity: 0;
    }

    .side-nav-bar #menu-toggle .menu-btn {
        position: fixed;
        top: 25px;
        right: 40px;
        width: 15px;
        height: 25px;
        cursor: pointer;
        z-index: 3;
    }

    .side-nav-bar #menu-toggle:checked~.menu-btn>span {
        transform: rotate(45deg);
        z-index: 2;
    }

    .side-nav-bar #menu-toggle:checked~.menu-btn>span::before {
        top: 0;
        transform: rotate(0);
        background: #f6f6f6;
    }

    .side-nav-bar #menu-toggle:checked~.menu-btn>span::after {
        top: 0;
        transform: rotate(90deg);
        background: #f6f6f6;
    }

    .side-nav-bar #menu-toggle:checked~.side-nav-menu {
        visibility: visible;
        right: 0;
    }

    .side-nav-bar {
        position: absolute;
        z-index: 170;
        right: 0;
        margin: 30px;
        display: block;
        width: 30px;
    }

    .side-nav-bar .menu-btn {
        position: absolute;
        top: 0;
        display: flex;
        align-items: center;
        width: 20px;
        height: 26px;
        cursor: pointer;
        transition: 0.5s all ease-out;
    }

    .onepage-menu .menu-btn>span,
    .onepage-menu .menu-btn>span::before,
    .onepage-menu .menu-btn>span::after {
        background-color: var(--dark-color);
    }

    .side-nav-bar .menu-btn>span,
    .side-nav-bar .menu-btn>span::before,
    .side-nav-bar .menu-btn>span::after {
        display: block;
        position: absolute;
        width: 100%;
        height: 2px;
        background-color: #f6f6f6;
        transition-duration: .25s;
    }

    .side-nav-bar .menu-btn>span::before {
        content: '';
        top: -8px;
    }

    .side-nav-bar .menu-btn>span::after {
        content: '';
        top: 8px;
    }
    .nav__list-item.active-nav a {
  color: rgba(255, 255, 255, 1);
}

.nav__list-item.active-nav a:after {
  height: 4px;
  opacity: 1;
  left: 0;
  width: 100%;
}

</style>




<div class="nav nav-overlay">
    <div class="nav__content">
        <div class="container">
            <div class="row p-4 p-md-0 flex-column-reverse flex-md-row g-5 nav__block">
                <!-- Navigation Links Section -->
                <div class="col-md-5">
                    <ul class="nav__list d-none d-md-block">
                        <li class="nav__list-item"><a href="index.php" class="hover-target active"><b class="text-info">Home</b></a></li>
                        <li class="nav__list-item"><a href="about-us.php" class="hover-target"><b class="text-info">About-Us</b></a></li>
                        <li class="nav__list-item"><a href="our-services.php" class="hover-target"><b class="text-info">Our-Services</b></a></li>
                        <li class="nav__list-item"><a href="our-projects.php" class="hover-target"><b class="text-info">Our-Projects</b></a></li>
                        <li class="nav__list-item"><a href="our-team.php" class="hover-target"><b class="text-info">Our-Team</b></a></li>
                        <li class="nav__list-item"><a href="contact-us.php" class="hover-target"><b class="text-info">Contact-Us</b></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
 

<div class="side-nav-bar d-none d-sm-block  border border-dark border-2 bg-info ps-1 shadow">
    <input id="menu-toggle" type="checkbox" />
    <label class="menu-btn" for="menu-toggle">
        <span></span>
    </label>
</div>


<script>
    //Overlay Menu Navigation
    var overlayMenu = function() {

        if (!document.querySelector('.nav-overlay')) {
            return false;
        }

        var body = document.querySelector('body');
        var menuToggle = document.querySelector('#menu-toggle');
        var menuItems = document.querySelectorAll('.nav__list-item');

        var applyListeners = function() {
            menuToggle.addEventListener('change', function() {
                toggleClass(body, 'nav-active');
            });
        };

        var toggleClass = function(element, stringClass) {
            if (element.classList.contains(stringClass)) {
                element.classList.remove(stringClass);
            } else {
                element.classList.add(stringClass);
            }
        };

        applyListeners();
    };

    overlayMenu();
</script>