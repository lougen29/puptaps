<div class="container-fluid pt-3 pb-2 px-0 h-100 admin-sidebar position-fixed">
    <div class="row align-items-center g-0" style="margin-top: 40px;">
        <div class="col-12 text-center">
            <div class="row align-items-center gx-0">
                <div class="col-5 text-center">
                    <a href="{{ route('admin.homepage') }}" class="text-decoration-none text-white align-items-center">
                        <img src="{{ asset('img/pupLogo.png') }}" style="height: 80px;">
                    </a>
                </div>
                <div class="col-7 text-start">
                    <h5 class="color-pup mt-3 fw-bold mb-0">PUPT - APS</h5>
                    <p class="color-pup fw-bold mt-0">ADMIN</p>
                </div>
            </div>
        </div>
    </div>

    {{-- <hr class="mt-3 mb-3 hr-color opacity-100"> --}}

    <div class="row align-items-center g-0" style="margin-top: 30px;">
        <div class="col-12">
            <div class="w-100 sidebar-buttons">
                <!-- Dashboard -->
                <a type="button" href="{{ route('admin.homepage') }}" class="fw-bold sidebar-button w-100 text-start @yield('active-homepage') py-2">
                    <i class="fa-solid fa-house me-1"></i>
                    Dashboard
                </a>

                <hr class="mt-2 mb-3 hr-color opacity-100">
                <!-- Start: User Manager -->
                <a type="button" href="{{ route('adminUserManagement.getAlumniManager') }}" class="sidebar-button w-100 text-start py-2 @yield('active-alumni-manager')">
                    <i class="fa-solid fa-user-group me-1"></i>
                    Alumni Manager
                </a>

                <!-- Start: Career Management -->
                <a type="button" href="" class="sidebar-button w-100 text-start dropdown-toggle py-2" data-bs-toggle="collapse" data-bs-target="#careerManagement" aria-expanded="false">
                    <i class="fa-solid fa-briefcase me-1"></i>
                    Careers Management
                </a>
                <div class="">
                    <div class="collapse show" id="careerManagement">
                        <a type="button" href="{{ route('adminCareer.getAdminCareerIndex') }}" class="sidebar-button w-100 text-start py-2 @yield('active-career-index')">
                            <span class="ms-4">Career Dashboard</span>
                        </a>
                        <a type="button" href="{{ route('adminCareer.getCareerRequest') }}" class="sidebar-button w-100 text-start py-2 @yield('active-career-approval')">
                            <span class="ms-4">Posting Approval</span>
                        </a>
                    </div>
                </div>
                <!-- End: Career Management -->

                <hr class="mt-3 mb-3 hr-color opacity-100">
                <!-- Start: Reports -->
                <p class="w-100 text-start py-0 mb-1 ms-2 fw-bold color-pup">
                    Reports
                </p>
                <!-- Start: Career Management -->
                <a type="button" href="" class="sidebar-button w-100 text-start dropdown-toggle py-2" data-bs-toggle="collapse" data-bs-target="#formReports" aria-expanded="false">
                    <i class="fa-solid fa-file-lines me-1"></i>
                   Form Reports
                </a>
                <div class="">
                    <div class="collapse show" id="formReports">
                        <a type="button" href="{{ route("adminReports.getFormReports") }}" class="sidebar-button w-100 text-start py-2 @yield('active-form-reports')">
                            <span class="ms-4">Form Reports - PDF</span>
                        </a>
                        <a type="button" href="{{ route('adminReports.getFormReportsCharts') }}" class="sidebar-button w-100 text-start py-2 @yield('active-form-reports-charts')">
                            <span class="ms-4">Form Reports - Charts</span>
                        </a>
                    </div>
                </div>
                <a type="button" href="{{ route("adminReports.getTracerReports") }}" class="sidebar-button w-100 text-start py-2 @yield('active-tracer-reports')">
                    <i class="fa-solid fa-business-time me-1"></i>
                    Tracer Reports
                </a>
                <a type="button" href="{{ route("adminReports.getUserReports") }}" class="sidebar-button w-100 text-start py-2 @yield('active-user-reports')">
                    <i class="fa-solid fa-clipboard-user me-1"></i>
                    Alumni Reports
                </a>
                <!-- End: Reports -->

                <hr class="mt-3 mb-2 hr-color opacity-100">
                <!-- Start: Account Settings -->
                <a type="button" href="{{ route("adminSettings.getAccountSettings") }}" class="sidebar-button w-100 text-start py-2 @yield('active-account-settings')">
                    <i class="fa-solid fa-gear me-1"></i>
                    Account Settings
                </a>
                <!-- End: Account Settings -->
            </div>
        </div>
    </div>
</div>
