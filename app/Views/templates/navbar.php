
  <!-- navbar -->
  <div class="navigation w-100">
    <div class="container">
      <nav class="navbar navbar-expand-lg navbar-dark p-0">
        <a class="navbar-brand" href="<?php echo base_url(); ?>"><img src="<?php echo base_url(); ?>/public/assets/images/NAKIGAFXLOGO92x92.png" alt="logo"></a>
        <button class="navbar-toggler rounded-0" type="button" data-toggle="collapse" data-target="#navigation"
          aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navigation">
          <ul class="navbar-nav ml-auto text-center">
            <li class="nav-item <?php if($page == 'home') { echo 'active'; } ?>">
              <a class="nav-link" href="<?php echo base_url(); ?>">Home</a>
            </li>
            <li class="nav-item <?php if($page == 'about') { echo 'active'; } ?>">
              <a class="nav-link" href="<?php echo base_url("about"); ?>">About</a>
            </li>

            <li class="nav-item dropdown view <?php if($page == 'forex' || $page == 'commodities' || $page == 'indices' || $page == 'stocks' || $page == 'energies' || $page == 'crypto_currency') { echo 'active'; } ?>">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Our products 
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item <?php if($page == 'forex') { echo 'active'; } ?>" href="<?php echo base_url("forex"); ?>">Forex</a></li>
                <li><a class="dropdown-item <?php if($page == 'commodities' ) { echo 'active'; } ?>" href="<?php echo base_url("commodities"); ?>">Commodities</a></li>
                <li><a class="dropdown-item <?php if($page == 'indices') { echo 'active'; } ?>" href="<?php echo base_url("indices"); ?>">Indices</a></li>
                <li><a class="dropdown-item <?php if($page == 'stocks') { echo 'active'; } ?>" href="<?php echo base_url("stocks"); ?>">Stocks</a></li>
                <li><a class="dropdown-item <?php if($page == 'energies') { echo 'active'; } ?>" href="<?php echo base_url("energies"); ?>">Energies</a></li>
                <li><a class="dropdown-item <?php if($page == 'crypto_currency') { echo 'active'; } ?>" href="<?php echo base_url("crypto_currency"); ?>">Crypto currency</a></li>
              </ul>
            </li>
            <li class="nav-item dropdown view">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Partnership
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="#">IB register</a></li>
                <li><a class="dropdown-item" href="#">IB login</a></li>
              </ul>
            </li>
            <li class="nav-item dropdown view <?php if($page == 'mt5') { echo 'active'; } ?>">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Platforms
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item <?php if($page == 'mt5') { echo 'active'; } ?>" href="<?php echo base_url("mt5"); ?>">MT5</a></li>
              </ul>
            </li>
            <li class="nav-item dropdown view <?php if($page == 'comp_acc' || $page == 'fund_withd') { echo 'active'; } ?>">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Accounts
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item <?php if($page == 'comp_acc') { echo 'active'; } ?>" href="<?php echo base_url("comp_acc"); ?>">Compare accounts</a></li>
                <!-- <li><a class="dropdown-item <//?php if($page == 'fund_withd') { echo 'active'; } ?>" href="<//?php echo base_url("fund_withd"); ?>">Funding and withdrawals</a></li> -->
              </ul>
            </li>
            <li class="nav-item <?php if($page == 'contact') { echo 'active'; } ?>">
              <a class="nav-link" href="<?php echo base_url("contact"); ?>">CONTACT</a>
            </li>

            </ul>
        </div>
      </nav>
    </div>
  </div>
</header>
<!-- /header -->
<!-- Modal -->
<div class="modal fade" id="signupModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content rounded-0 border-0 p-4">
            <div class="modal-header border-0">
                <h3>Register</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="login">
                    <form action="#" class="row">
                        <div class="col-12">
                            <input type="text" class="form-control mb-3" id="signupPhone" name="signupPhone" placeholder="Phone">
                        </div>
                        <div class="col-12">
                            <input type="text" class="form-control mb-3" id="signupName" name="signupName" placeholder="Name">
                        </div>
                        <div class="col-12">
                            <input type="email" class="form-control mb-3" id="signupEmail" name="signupEmail" placeholder="Email">
                        </div>
                        <div class="col-12">
                            <input type="password" class="form-control mb-3" id="signupPassword" name="signupPassword" placeholder="Password">
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary">SIGN UP</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content rounded-0 border-0 p-4">
            <div class="modal-header border-0">
                <h3>Login</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="#" class="row">
                    <div class="col-12">
                        <input type="text" class="form-control mb-3" id="loginPhone" name="loginPhone" placeholder="Phone">
                    </div>
                    <div class="col-12">
                        <input type="text" class="form-control mb-3" id="loginName" name="loginName" placeholder="Name">
                    </div>
                    <div class="col-12">
                        <input type="password" class="form-control mb-3" id="loginPassword" name="loginPassword" placeholder="Password">
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary">LOGIN</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
