<div id="kt_docs_aside" class="docs-aside" data-kt-drawer="true" data-kt-drawer-name="aside" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'200px', '300px': '250px'}" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_docs_aside_toggle">
          <!--begin::Logo-->
          <div class="docs-aside-logo flex-column-auto h-75px" id="kt_docs_aside_logo">
            <!--begin::Link-->
            <a href="#">
              <img alt="Logo" src="/assets/img/logo/logo-blue.png" class="h-30px" />
            </a>
            <!--end::Link-->
          </div>
          <!--end::Logo-->
          <!--begin::Menu-->
          <div class="docs-aside-menu flex-column-fluid">
            <!--begin::Aside Menu-->
            <div class="hover-scroll-overlay-y mt-5 mb-5 mt-lg-0 mb-lg-5 pe-lg-n2 me-lg-2" id="kt_docs_aside_menu_wrapper" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-height="auto" data-kt-scroll-dependencies="#kt_docs_aside_logo" data-kt-scroll-wrappers="#kt_docs_aside_menu" data-kt-scroll-offset="10px">
              <!--begin::Menu-->
              <div class="menu menu-column menu-title-gray-800 menu-state-title-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-500" id="#kt_docs_aside_menu" data-kt-menu="true">
                
                <div class="menu-item">
                  <h4 class="menu-content text-muted mb-0 fs-7 text-uppercase">Menu</h4>
                </div>
                <div class="menu-item">
                  <a class="menu-link {{Request::is('dev/home') ? 'active bg-light' : ''}} py-2" href="/dev/home">
                    <i class="fa fa-dashboard"></i>
                    <span class="menu-title">Dashboard</span>
                  </a>
                </div>
                <div class="menu-item">
                  <a class="menu-link {{Request::is('dev/content') ? 'active bg-light' : ''}} py-2" href="/dev/content">
                    <i class="fa fa-newspaper-o"></i>
                    <span class="menu-title">Content</span>
                  </a>
                </div>
                <div class="menu-item">
                  <a class="menu-link {{Request::is('dev/faq') ? 'active bg-light' : ''}} py-2" href="/dev/faq">
                    <i class="fa fa-wechat"></i>
                    <span class="menu-title">FAQ</span>
                  </a>
                </div>
                <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                  <span class="menu-link py-2">
                    <i class="fa fa-gg"></i>
                    <span class="menu-title">EIC</span>
                    <span class="menu-arrow"></span>
                  </span>
                  <div class="menu-sub menu-sub-accordion">
                    <div class="menu-item">
                      <a class="menu-link py-2" href="/dev/category">
                        <span class="menu-bullet">
                          <span class="bullet bullet-dot"></span>
                        </span>
                        <span class="menu-title">Kategori</span>
                      </a>
                    </div>
                  </div>
                </div>

                @if(in_array("6", $previlege))
                <div class="menu-item">
                  <a class="menu-link {{Request::is('dev/master') ? 'active bg-light' : ''}} py-2" href="/dev/master">
                    <i class="fa fa-maxcdn"></i>
                    <span class="menu-title">Data Master</span>
                  </a>
                </div>
                <div class="menu-item">
                  <a class="menu-link {{Request::is('dev/admin') ? 'active bg-light' : ''}} py-2" href="/dev/admin">
                    <i class="bi bi-person-fill-lock"></i>
                    <span class="menu-title">Pengaturan Admin</span>
                  </a>
                </div>
                @endif
                
                <div class="menu-item">
                  <div class="h-30px"></div>
                </div>

              </div>
              <!--end::Menu-->
            </div>
          </div>
          <!--end::Menu-->
        </div>