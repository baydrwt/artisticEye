<nav class="navbar navbar-expand-lg navbar-light">
      <div class="container">
        <div class="navbar-title">
          <a href="/">artisticEye</a>
        </div>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText"
              aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarText">
              <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                      <a class="nav-link" data-bs-toggle="modal" data-bs-target="#about">About</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" data-bs-toggle="modal" data-bs-target="#contact">Contact</a>
                  </li>
                  <li class="nav-item navbar-user">
                      @auth
                      <div class="dropdown">
                        <div class="navbar-user">
                          <div class="icon-user">
                            <svg width="30" height="30" fill="white" class="bi bi-person-circle" viewBox="0 0 16 16">
                                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                                <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                              </svg>
                          </div>
                          <div class="username">
                            <a class="dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Hallo, {{ auth()->user()->name }}
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                              <li>
                                <a class="dropdown-item" href="/dashboard">
                                  <svg width="20" height="20" fill="#e5e5e5" class="bi bi-layout-wtf me-2" viewBox="0 0 16 16">
                                    <path d="M5 1v8H1V1h4zM1 0a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h4a1 1 0 0 0 1-1V1a1 1 0 0 0-1-1H1zm13 2v5H9V2h5zM9 1a1 1 0 0 0-1 1v5a1 1 0 0 0 1 1h5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H9zM5 13v2H3v-2h2zm-2-1a1 1 0 0 0-1 1v2a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1v-2a1 1 0 0 0-1-1H3zm12-1v2H9v-2h6zm-6-1a1 1 0 0 0-1 1v2a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1v-2a1 1 0 0 0-1-1H9z"/>
                                    </svg>My Dashboard</a>
                              </li>
                              <li><hr class="dropdown-divider"></li>
                              <li>
                                  <form action="/logout" method="POST">
                                      @csrf
                                      <button type="submit" class="dropdown-item d-flex justify-content-start" style="color: #e5e5e5; font-size:16px!important;"> <svg width="20" height="20" fill="#e5e5e5" class="bi bi-box-arrow-right me-2 mt-1" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0v2z"/>
                                        <path fill-rule="evenodd" d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z"/>
                                      </svg>Logout</button>
                                     
                                  </form>
                              </li>
                          </ul>
                          </div>
                        </div>
                       
                      </div>
                      @else
                      <a class="nav-link" href="/dashboard">Login</a>
                      @endauth
                  </li>
              </ul>
          </div>
      </div>
  </nav>
  