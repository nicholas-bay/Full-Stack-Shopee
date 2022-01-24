class MyHeader extends HTMLElement {
    connectedCallback() {
        this.innerHTML = `
        <!-- navbar -->
        <style>
            li {margin-left: 20px; margin-right: 20px; }
        </style>
        <navbar class="navbar navbar-expand-lg bg-dark navbar-dark">
            <div class="container">
                <button class="navbar-toggler" type='button' data-bs-toggle='collapse' data-bs-target='#navmenu'>
                    <span class='navbar-toggler-icon'></span>
                </button>
                <div class="collapse navbar-collapse" style='font-size: 13px'>
                    <ul class="navbar-nav mx-auto my-auto">
                        <li class='nav-item' id='navitem'>
                            <a href="#home" class="nav-link">
                                <i class="bi bi-house"></i> Home
                            </a>
                        </li>
                        <li class='nav-item' id='navitem'>
                            <a href="#download" class="nav-link">
                                <i class="bi bi-download"></i> Download
                            </a>
                        </li>
                        <li class='nav-item' id='navitem'>
                            <a href="#notifications" class="nav-link">
                                <i class="bi bi-bell"></i> Notifications
                            </a>
                        </li>
                        <li class='nav-item' id='navitem'>
                            <a href="#help" class="nav-link">
                                <i class="bi bi-info-circle"></i> Help
                            </a>
                        </li>
                        <li class='nav-item' id='navitem'>
                            <a class="nav-link" href="#search">
                                <i class="bi bi-search"></i> Search
                            </a>
                        </li>
                        <li class='nav-item' id='navitem'>
                            <a class="nav-link" href="#cart">
                                <i class="bi bi-cart"></i> Cart
                            </a>
                        </li>
                        <li class='nav-item' id='navitem'>
                            <a href="#signuplogin" class="nav-link">
                                <i class="bi bi-person"></i> <span id='person'>Sign Up | Login</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </navbar>
        `
    }
}
customElements.define(`my-header`, MyHeader)

class MyFooter extends HTMLElement {
    connectedCallback() {
        this.innerHTML = `
        <footer class='fixed-bottom' style='background-color: #F5F5F7; padding: 17px 0px 0px'>
            <section class='container' id='footer'>
                <ul style='list-style: none; margin: 0dp;'>
                    <li style='padding-bottom: 0px'>
                        <p style='color: #79797E;
                            font-size: 12px;
                            line-height: 1.33337;
                            font-weight: 400;
                            letter-spacing: -.01em;
                            font-family: inherit;'>
                            Developers: Nicholas Bay &middot; Ephraim Yee &middot; Chung Hong Wei &middot; Eugene &emsp;
                        </p>
                    </li>
                    <li style='padding-bottom: 0px'>
                        <p style='color: #79797E;
                            font-size: 12px;
                            line-height: 1.33337;
                            font-weight: 400;
                            letter-spacing: -.01em;
                            font-family: inherit;'>
                            Find Us:
                            <a href="#"><img src="assets/facebook_icon.png" width="15" height="15" alt=""></a> &middot;
                            <a href="#"><img src="assets/instagram_icon.png" width="15" height="15" alt=""></a>
                        </p>
                    </li>
                </ul>
                <hr>
            </section>
        </footer>
        `
    }
}
customElements.define(`my-footer`, MyFooter)