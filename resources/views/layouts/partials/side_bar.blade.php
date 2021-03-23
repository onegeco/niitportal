<div class="sidebar-wrapper">
  <div>
      <div class="logo-wrapper"><a href="/"><img class="img-fluid for-light" src="{{asset('/images/logo/logo.png')}}" alt=""><img class="img-fluid for-dark" src="../assets/images/logo/logo_dark.png" alt=""></a>
          <div class="back-btn"><i class="fa fa-angle-left"></i></div>
      <div class="toggle-sidebar"><i class="status_toggle middle sidebar-toggle" data-feather="grid"> </i></div>
  </div>
  <div class="logo-icon-wrapper"><a href="/"><img class="img-fluid" src="{{asset('/images/logo/logo.png')}}" alt=""></a></div>
  <nav class="sidebar-main">
    <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
    <div id="sidebar-menu">
      <ul class="sidebar-links" id="simple-bar">
        <li class="back-btn"><a href="/"><img class="img-fluid" src="{{asset('/images/logo/logo.png')}}" alt=""></a>
          <div class="mobile-back text-end"><span>Back</span><i class="fa fa-angle-right ps-2" aria-hidden="true"></i></div>
        </li>
        <li class="sidebar-main-title">
          <div>
            <h6 class="lan-1">Dashboard</h6>
            <p class="lan-2">Student's updates and activities</p>
          </div>
        </li>
        <li class="sidebar-list "><a class="sidebar-link sidebar-title link-nav" href="/admin/dashboard"><i data-feather="home"></i><span>Dashboard</span></a></li>

        <li class="sidebar-list"><a class="sidebar-link sidebar-title" href="javascript:void(0)"><i data-feather="users"></i><span>Appraisal</span></a>
          <ul class="sidebar-submenu">
            <li><a href="/admin/students">Students</a></li>
            <li><a href="/admin/tutors">Lecturers</a></li>
            <li><a href="/admin/staffs">Staffs</a></li>
          </ul>
        </li>
        <li class="sidebar-list"><a class="sidebar-link sidebar-title" href="javascript:void(0)"><i data-feather="mail"></i><span>MailBox</span></a>
          <ul class="sidebar-submenu">
              <li><a href="email-compose.html">Compose</a></li>
              <li><a href="email-application.html"> Inbox</a></li>
              <li><a href="email-compose.html">Outbox</a></li>
          </ul>
        </li>
        <li class="sidebar-list "><a class="sidebar-link sidebar-title link-nav" href="/admin/report"><i data-feather="home"></i><span>Activity Report</span></a></li>
        <li class="sidebar-list"><a class="sidebar-link sidebar-title link-nav"  href="materials" data-original-title="" title=""><i data-feather="git-pull-request"></i><span>Materials</span></a></li>
        <li class="sidebar-list"><a class="sidebar-link sidebar-title link-nav" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout').submit();"><i data-feather="log-in"> </i><span>Sign Out</span></a><form id="logout" action="{{ route('logout') }}" method="POST" style="display: none;">
          {{ csrf_field() }}
        </form></li>
      </ul>
    </div>
    <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
  </nav>
</div>
</div>