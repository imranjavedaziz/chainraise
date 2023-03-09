<div class="app-header-menu app-header-mobile-drawer align-items-stretch" data-kt-drawer="true"
    data-kt-drawer-name="app-header-menu" data-kt-drawer-activate="{default: true, lg: false}"
    data-kt-drawer-overlay="true" data-kt-drawer-width="250px" data-kt-drawer-direction="end"
    data-kt-drawer-toggle="#kt_app_header_menu_toggle" data-kt-swapper="true"
    data-kt-swapper-mode="{default: 'append', lg: 'prepend'}"
    data-kt-swapper-parent="{default: '#kt_app_body', lg: '#kt_app_header_wrapper'}">
    <!--begin::Menu-->
    <div class="menu menu-rounded menu-column menu-lg-row my-5 my-lg-0 align-items-stretch fw-semibold px-2 px-lg-0"
        id="kt_app_header_menu" data-kt-menu="true">
        @hasrole('investor')
        <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="bottom-start"
            class="menu-item menu-lg-down-accordion me-0 me-lg-2">
            <a href="/" target="_blank">
                <span class="menu-link">
                    <span class="menu-title">Offerings</span>
                    <span class="menu-arrow d-lg-none"></span>
                </span>
            </a>
            <a href="{{route('user.account')}}" target="_blank">
                <span class="menu-link">
                    <span class="menu-title">My Account</span>
                    <span class="menu-arrow d-lg-none"></span>
                </span>
            </a>

            <a href="{{route('user.account')}}" target="_blank">
                <span class="menu-link">
                    <span class="menu-title">My Documents</span>
                    <span class="menu-arrow d-lg-none"></span>
                </span>
            </a>

            <a href="{{route('user.account')}}" target="_blank">
                <span class="menu-link">
                    <span class="menu-title">Portfolio</span>
                    <span class="menu-arrow d-lg-none"></span>
                </span>
            </a>
        </div>
        @endhasrole
        
        
        @hasrole('admin|issuer')
        <div  class="menu-item menu-lg-down-accordion me-0 me-lg-2">
        <span class="menu-link">
            <span class="menu-title">
             <a href="{{ route('offers.active.index') }}"> Offerings </a>   
            </span>
            <span class="menu-arrow d-lg-none"></span>
        </span>
         </div>

        <div  class="menu-item menu-lg-down-accordion me-0 me-lg-2">
         <span class="menu-link">
             <span class="menu-title">
              <a href="{{route('user.account')}}"> My Account </a>  
            </span>
             <span class="menu-arrow d-lg-none"></span>
         </span>
        </div>

        <div 
        class="menu-item menu-lg-down-accordion me-0 me-lg-2">
        <span class="menu-link">
            <span class="menu-title">
               
                <a href="{{route('user.account')}}">  My Documents </a>  
            </span>
            <span class="menu-arrow d-lg-none"></span>
        </span>
       </div>

         @endhasrole
        

       

       

    </div>
    <!--end::Menu-->
</div>
