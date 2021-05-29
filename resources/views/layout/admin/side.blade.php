 <div class="container-scroller">
 <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
          <a class="sidebar-brand brand-logo" href="index.html"><img src="{{asset('assets/images/logo.jpg') }}" alt="logo" /></a>
          <a class="sidebar-brand brand-logo-mini" href="index.html"><img src="{{asset('assets/images/logo.jpg') }}" alt="logo" /></a>
        </div>
        <ul class="nav">
          <li class="nav-item profile">
            <div class="profile-desc">
              <div class="profile-pic">
                <div class="count-indicator">
                  <img class="img-xs rounded-circle " src="{{asset('assets/images/faces/face15.jpg') }}" alt="">
                  <span class="count bg-success"></span>
                </div>
                <div class="profile-name">
                  <h5 class="mb-0 font-weight-normal"> {{ Auth::user()->name }}</h5>
                  <span>{{ getPosition(Auth::user()->position) }}</span>
                </div>
              </div>
              <a href="#" id="profile-dropdown" data-toggle="dropdown"><i class="mdi mdi-dots-vertical"></i></a>
              <div class="dropdown-menu dropdown-menu-right sidebar-dropdown preview-list" aria-labelledby="profile-dropdown">
                <a href="#" class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-dark rounded-circle">
                      <i class="mdi mdi-settings text-primary"></i>
                    </div>
                  </div>
                  <div class="preview-item-content">
                    <p class="preview-subject ellipsis mb-1 text-small">Account settings</p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-dark rounded-circle">
                      <i class="mdi mdi-onepassword  text-info"></i>
                    </div>
                  </div>
                  <div class="preview-item-content">
                    <p class="preview-subject ellipsis mb-1 text-small">Change Password</p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-dark rounded-circle">
                      <i class="mdi mdi-calendar-today text-success"></i>
                    </div>
                  </div>
                  <div class="preview-item-content">
                    <p class="preview-subject ellipsis mb-1 text-small">To-do list</p>
                  </div>
                </a>
              </div>
            </div>
          </li>
          <li class="nav-item nav-category">
            <span class="nav-link">Navigation</span>
          </li>
          
          @if(isPermission('delete'))
          <li class="nav-item menu-items">
            <a class="nav-link {{ getActiveClass(['DashbordController'],['index','create','edit']) }}" href=" {{ url('admin') }}">
              <span class="menu-icon">  
                <i class=" mdi mdi-view-dashboard"></i>
              </span>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link {{ getActiveClass(['ProviderController'],['index','create','edit']) }}"  href="{{ url('provider_list')}}">
              <span class="menu-icon">
                <i class=" mdi mdi-account"></i>
              </span>
              <span class="menu-arrow">Provider List</span>
                        </a>
            </li>
             @endif
             <li class="nav-item menu-items">
            <a class="nav-link {{ getActiveClass(['CustomerController'],['index','create','edit']) }} " href=" {{ url('customer_list') }}">
              <span class="menu-icon">  
                <i class=" mdi mdi-account"></i>
              </span>
              <span class="menu-title">Customer List </span>
            </a>
          </li>
          @if(isPermission('delete'))
           <li class="nav-item menu-items">
            <a class="nav-link {{ getActiveClass(['TelecallerController'],['index','create','edit']) }} " href=" {{ url('telecaller_list') }}">
              <span class="menu-icon">  
                <i class="mdi mdi-phone-classic"></i>
              </span>
              <span class="menu-title">Telecaller List</span>
            </a>
          </li>
           @endif
             <li class="nav-item menu-items">
            <a class="nav-link {{ getActiveClass(['AssingController'],['index','create','edit']) }} " href=" {{ url('assing_data_list') }}">
              <span class="menu-icon">  
                <i class="  mdi mdi-pencil-lock"></i>
              </span>
              <span class="menu-title">Assign Data </span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link {{ getActiveClass(['CallhistoryController'],['index','create','edit']) }} " href=" {{ url('callhistory_list') }}">
              <span class="menu-icon">  
                <i class="  mdi mdi-phone-plus"></i>
              </span>
              <span class="menu-title">Call History </span>
            </a>
          </li>
          @if(isPermission('delete'))
          <li class="nav-item menu-items">
            <a class="nav-link {{ getActiveClass(['AssingController'],['index','create','edit']) }} " href=" {{ url('') }}">
              <span class="menu-icon">  
                <i class="  mdi mdi-pencil-lock"></i>
              </span>
              <span class="menu-title">Dally Report</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link {{ getActiveClass(['RateController'],['index','create','edit']) }} " href=" {{ url('rate_list') }}">
              <span class="menu-icon">  
                <i class="  mdi mdi-octagon-outline"></i>
              </span>
              <span class="menu-title">Update Rate Today </span>
            </a>
          </li>
           <li class="nav-item menu-items">
            <a class="nav-link {{ getActiveClass(['PermissionController'],['index','create','edit']) }} " href=" {{ url('permission') }}">
              <span class="menu-icon">  
                <i class="  mdi mdi-octagon-outline"></i>
              </span>
              <span class="menu-title">Permission </span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <span class="menu-icon">
                <i class="mdi mdi-laptop"></i>
              </span>
              <span class="menu-title">Inventory</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link {{ getActiveClass(['purchaseController'],['index','create','edit']) }} " href="{{ url('purchase_list') }}">Purchase Data </a></li>
                <li class="nav-item"> <a class="nav-link {{ getActiveClass(['Sale_datatController'],['index','create','edit']) }} " href="{{ url('sale_list') }}">Sale Data</a></li>
              <li class="nav-item"> <a class="nav-link {{ getActiveClass(['MortgageController'],['index','create','edit']) }} " href="{{ url('mortgage_list') }}"> Mortgage Deatail</a></li>
              
              @endif
              </ul>
            
      </nav>
      <!-- partial -->