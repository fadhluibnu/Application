<div class="d-flex flex-column px-1 py-2">
    <div class="logo py-2">D<span>board</span></div>
    <div class="navigation">
        <h1 class="menu pt-3 mb-3 border-top">Menu</h1>
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link {{ Request::is('/') ? 'active' : '' }} px-3 py-3" href="/">
                    <svg width="15" height="16.73" viewBox="0 0 20 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M14.5 8.39801L5.5 3.20801" stroke="#343434" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" />
                        <path
                            d="M19 14.9979V6.99795C18.9996 6.64722 18.9071 6.30276 18.7315 5.99911C18.556 5.69546 18.3037 5.44331 18 5.26795L11 1.26795C10.696 1.09241 10.3511 1 10 1C9.64893 1 9.30404 1.09241 9 1.26795L2 5.26795C1.69626 5.44331 1.44398 5.69546 1.26846 5.99911C1.09294 6.30276 1.00036 6.64722 1 6.99795V14.9979C1.00036 15.3487 1.09294 15.6931 1.26846 15.9968C1.44398 16.3004 1.69626 16.5526 2 16.7279L9 20.7279C9.30404 20.9035 9.64893 20.9959 10 20.9959C10.3511 20.9959 10.696 20.9035 11 20.7279L18 16.7279C18.3037 16.5526 18.556 16.3004 18.7315 15.9968C18.9071 15.6931 18.9996 15.3487 19 14.9979Z"
                            stroke="#343434" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M1.27002 5.95801L10 11.008L18.73 5.95801" stroke="#343434" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M10 21.078V10.998" stroke="#343434" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg>
                    <span class="ms-2">Overview</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('add*') ? 'active' : '' }} px-3 py-3" href="/add">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="feather feather-file-plus">
                        <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                        <polyline points="14 2 14 8 20 8"></polyline>
                        <line x1="12" y1="18" x2="12" y2="12"></line>
                        <line x1="9" y1="15" x2="15" y2="15"></line>
                    </svg>
                    <span class="ms-2">Add Student</span>
                </a>
            </li>
        </ul>
    </div>
</div>
