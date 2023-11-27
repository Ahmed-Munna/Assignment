            <div class="sidebar">
                <div class="sidebar-header">
                    <img src="{{asset('assets/img/profile.jpg')}}" alt="Image">
                </div>
                <div class="sidebar-content">
                    <nav class="navbar navbar-expand-md bg-dark navbar-dark">
                        <a href="#" class="navbar-brand">Navigation</a>
                        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarCollapse">
                            <ul class="nav navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('home') }}">Home<i class="fa fa-home"></i></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('about') }}">About<i class="fa fa-address-card"></i></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('projects') }}">Projects<i class="fa fa-file-archive"></i></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('contact') }}">Contact<i class="fa fa-envelope"></i></a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
                <div class="sidebar-footer">
                    <a href="https://twitter.com/AhmedMunna_"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="https://www.linkedin.com/in/ahmed-munna-360112200/"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>