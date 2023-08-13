<nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
    <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
      <a class="navbar-brand brand-logo" href="index.html"><img src="{{asset('template/assets/images/logo.svg')}}" alt="logo" /></a>
      <a class="navbar-brand brand-logo-mini" href="index.html"><img src="{{asset('template/assets/images/logo-mini.svg')}}" alt="logo" /></a>
    </div>
    <div class="navbar-menu-wrapper d-flex align-items-stretch">
      <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
        <span class="mdi mdi-menu"></span>
      </button>
      <ul class="navbar-nav navbar-nav-right">
        <li class="nav-item nav-profile dropdown">
          <a class="nav-link dropdown-toggle" id="profileDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
            <div class="nav-profile-img">
              @if (File_exists(public_path('administrator/users/' . auth()->user()->foto)))
              <img src="{{asset('administrator/users/'.auth()->user()->foto)}}" alt="image">
              @else
              <img src="{{asset('administrator/users/default.svg')}}" alt="image">
              @endif
            </div>
            <div class="nav-profile-text">
              <p class="mb-1 text-black">{{auth()->user()->name}}</p>
            </div>
          </a>
          <div class="dropdown-menu navbar-dropdown dropdown-menu-right p-0 border-0 font-size-sm" aria-labelledby="profileDropdown" data-x-placement="bottom-end">
            <div class="p-3 text-center bg-primary">
              @if (File_exists(public_path('administrator/users/' . auth()->user()->foto)))
              <img class="img-avatar img-avatar48 img-avatar-thumb" src="{{asset('administrator/users/'.auth()->user()->foto)}}" alt="">
              @else
              <img class="img-avatar img-avatar48 img-avatar-thumb" src="{{asset('administrator/users/default.svg')}}" alt="">
              @endif
            </div>
            <div class="p-2">
              <h5 class="dropdown-header text-uppercase pl-2 text-dark">User Options</h5>
              <a class="dropdown-item py-1 d-flex align-items-center justify-content-between" 
              href="#" data-bs-toggle="modal" data-bs-target="#inboxModal">
                <span>Inbox</span>
                <span class="p-0">
                  <span class="badge badge-primary">3</span>
                  <i class="mdi mdi-email-open-outline ml-1"></i>
                </span>
              </a>
              <a class="dropdown-item py-1 d-flex align-items-center justify-content-between" 
              href="#" data-bs-toggle="modal" data-bs-target="#profileModal">
                <span>Profile</span>
                <span class="p-0">
                  <span class="badge badge-success">1</span>
                  <i class="mdi mdi-account-outline ml-1"></i>
                </span>
              </a>
              <a class="dropdown-item py-1 d-flex align-items-center justify-content-between" 
              href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#settingModal">
                <span>Settings</span>
                <i class="mdi mdi-settings"></i>
              </a>
              <div role="separator" class="dropdown-divider"></div>
              <h5 class="dropdown-header text-uppercase  pl-2 text-dark mt-2">Actions</h5>
              <a class="dropdown-item py-1 d-flex align-items-center justify-content-between"
                href="#" data-bs-toggle="modal" data-bs-target="#resetPasswordModal">
                <span>Reset Password</span>
                <i class="mdi mdi-lock ml-1"></i>
              </a>
              <a class="dropdown-item py-1 d-flex align-items-center justify-content-between"
                href="#" data-bs-toggle="modal" data-bs-target="#resetPINModal">
                <span>Reset PIN</span>
                <i class="mdi mdi-lock ml-1"></i>
              </a>
              <a class="dropdown-item py-1 d-flex align-items-center justify-content-between" href="{{route('admin.logout')}}">
                <span>Log Out</span>
                <i class="mdi mdi-logout ml-1"></i>
              </a>
            </div>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link count-indicator dropdown-toggle" id="messageDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
            <i class="mdi mdi-email-outline"></i>
            <span class="count-symbol bg-success"></span>
          </a>
          <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="messageDropdown">
            <h6 class="p-3 mb-0 bg-primary text-white py-4">Messages</h6>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item preview-item">
              <div class="preview-thumbnail">
                <img src="{{asset('template/assets/images/faces/face4.jpg')}}" alt="image" class="profile-pic">
              </div>
              <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                <h6 class="preview-subject ellipsis mb-1 font-weight-normal">Mark send you a message</h6>
                <p class="text-gray mb-0"> 1 Minutes ago </p>
              </div>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item preview-item">
              <div class="preview-thumbnail">
                <img src="{{asset('template/assets/images/faces/face2.jpg')}}" alt="image" class="profile-pic">
              </div>
              <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                <h6 class="preview-subject ellipsis mb-1 font-weight-normal">Cregh send you a message</h6>
                <p class="text-gray mb-0"> 15 Minutes ago </p>
              </div>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item preview-item">
              <div class="preview-thumbnail">
                <img src="{{asset('template/assets/images/faces/face3.jpg')}}" alt="image" class="profile-pic">
              </div>
              <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                <h6 class="preview-subject ellipsis mb-1 font-weight-normal">Profile picture updated</h6>
                <p class="text-gray mb-0"> 18 Minutes ago </p>
              </div>
            </a>
            <div class="dropdown-divider"></div>
            <h6 class="p-3 mb-0 text-center">4 new messages</h6>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-toggle="dropdown">
            <i class="mdi mdi-bell-outline"></i>
            <span class="count-symbol bg-danger"></span>
          </a>
          <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
            <h6 class="p-3 mb-0 bg-primary text-white py-4">Notifications</h6>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item preview-item">
              <div class="preview-thumbnail">
                <div class="preview-icon bg-success">
                  <i class="mdi mdi-calendar"></i>
                </div>
              </div>
              <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                <h6 class="preview-subject font-weight-normal mb-1">Event today</h6>
                <p class="text-gray ellipsis mb-0"> Just a reminder that you have an event today </p>
              </div>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item preview-item">
              <div class="preview-thumbnail">
                <div class="preview-icon bg-warning">
                  <i class="mdi mdi-settings"></i>
                </div>
              </div>
              <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                <h6 class="preview-subject font-weight-normal mb-1">Settings</h6>
                <p class="text-gray ellipsis mb-0"> Update dashboard </p>
              </div>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item preview-item">
              <div class="preview-thumbnail">
                <div class="preview-icon bg-info">
                  <i class="mdi mdi-link-variant"></i>
                </div>
              </div>
              <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                <h6 class="preview-subject font-weight-normal mb-1">Launch Admin</h6>
                <p class="text-gray ellipsis mb-0"> New admin wow! </p>
              </div>
            </a>
            <div class="dropdown-divider"></div>
            <h6 class="p-3 mb-0 text-center">See all notifications</h6>
          </div>
        </li>
      </ul>
      <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
        <span class="mdi mdi-menu"></span>
      </button>
    </div>
  </nav>

