  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

      <ul class="sidebar-nav" id="sidebar-nav">

          <li class="nav-item">
              <a class="nav-link " href="{{ route("admin") }}">
                  <i class="bi bi-grid"></i>
                  <span>Dashboard</span>
              </a>
          </li><!-- End Dashboard Nav -->


          <li class="nav-item">
              <a class="nav-link collapsed" href="{{ route("offer") }}">
                  <i class="bi bi-person"></i>
                  <span>Offers</span>
              </a>
          </li><!-- End Profile Page Nav -->


          <li class="nav-item">
            <a class="nav-link collapsed" href="{{ route("admin.users") }}">
                <i class="bi bi-person"></i>
                <span>Users</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ route("users.offers") }}">
                <i class="bi bi-person"></i>
                <span>Users Offer</span>
            </a>
        </li>

       

      </ul>

  </aside>
  <!-- End Sidebar-->
