  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <!-- cabezera -->
      <ul class="navbar-nav">
          <li class="nav-item">
              <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
          </li>

      </ul>

      
      <script>
      var mydate = new Date();
      var year = mydate.getYear();
      if (year < 1000)
          year += 1900;
      var day = mydate.getDay();
      var month = mydate.getMonth() + 1;
      if (month < 10)
          month = "0" + month;
      var daym = mydate.getDate();
      if (daym < 10)
          daym = "0" + daym;
      document.write("<small><h6><font color='000000' face=''><b>" + daym + "/" + month + "/" + year +
          "</b></font></h6></small>")
      </script>

<span id="liveclock" style="position:absolute;left: 50px;top: 14px;">  </span>




      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">
          <!-- Navbar Search -->
          <li class="nav-item">
              <a class="nav-link" data-widget="navbar-search" href="#" role="button">
                  <i class="fas fa-search"></i>
              </a>
              <div class="navbar-search-block">
                  <form class="form-inline">
                      <div class="input-group input-group-sm">
                          <input class="form-control form-control-navbar" type="search" placeholder="Search"
                              aria-label="Search">
                          <div class="input-group-append">
                              <button class="btn btn-navbar" type="submit">
                                  <i class="fas fa-search"></i>
                              </button>
                              <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                                  <i class="fas fa-times"></i>
                              </button>
                          </div>
                      </div>
                  </form>
              </div>
          </li>

  </nav>
  <!-- /.navbar -->