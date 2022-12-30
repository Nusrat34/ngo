<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">
                <div class="sb-sidenav-menu-heading">Core</div>
                <a class="nav-link" href="{{route('dashboard')}}">
                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                    Dashboard
                </a>
                <a class="nav-link" href="{{route('book')}}">
                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                    Book
                </a>

                <!-- Scholarship -->
                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                    <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                    Scholarship
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="{{ route('scholarships.index')}}">Scholarships</a>
                        <a class="nav-link" href="{{route('scholarship.appliations')}}">Scholarship Applications</a>
                    </nav>
                </div>
                
                <a class="nav-link" href="{{route('transaction.list')}}">
                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                    Transaction
                
                </a>
                
                <a class="nav-link" href="{{route('request.list')}}">
                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                    Student donation list
                
                
                </a>
                <a class="nav-link" href="{{route('b.apply')}}">
                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                    applied book list
                
                
                </a>
                <a class="nav-link" href="{{route('contact.message')}}">
                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                    Contact
                
                
                </a>
                <a class="nav-link" href="{{route('member')}}">
                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                    member
                </a>
                <a class="nav-link" href="{{route('donor')}}">
                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                    donor
                
                </a>
                </a>
                <a class="nav-link" href="{{route('notice')}}">
                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                    notice
                </a>
                <a class="nav-link" href="{{route('report.list')}}">
                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                   book report
                
                </a>
                <a class="nav-link" href="{{route('scholarship.report')}}">
                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                   scholarship report
                
                </a>
            </div>
        </div>
        
    </nav>
</div>