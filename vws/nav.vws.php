      <div class="container">
          <div class="navbar-translate">
              <a class="navbar-brand " href="index.php">
                  Efiewura
              </a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" aria-expanded="false"
                      aria-label="Toggle navigation">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="navbar-toggler-icon"></span>
                  <span class="navbar-toggler-icon"></span>
                  <span class="navbar-toggler-icon"></span>
              </button>
          </div>
          <div class="collapse navbar-collapse">
              <ul class="navbar-nav ml-auto">
                  <li class="nav-item">
                      <a class="nav-link" title="" href="./">
                          Home
                      </a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" title="" href="?pg=about">
                          About
                      </a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" title="" href="?pg=contact">
                          Contact
                      </a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" title="" href="?pg=host">
                          Provide space
                      </a>
                  </li>
                  <?php if ($pg!='soon'): ?>
                  <li class="nav-item">
                      <a class="nav-link" title="" href="?pg=find">
                          Find Space
                      </a>
                  </li>
                  <form class="form-inline ml-auto" method="GET" accept="./">
                      <div class="form-group no-border">
                          <input type="text" class="form-control" placeholder="Search" name="q">
                      </div>
                      <button type="submit" class="btn btn-white btn-just-icon btn-round">
                          <i class="material-icons">search</i>
                      </button>
                  </form>
                  
                  <?php endif ?>
              </ul>
          </div>
      </div>