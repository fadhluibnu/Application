<div class="col p-4 pt-0 header_side border-end" style="overflow-y: auto" id="scroll-side">
    <nav class="navbar-light border-top">
        <ul class="navbar-nav mt-4">
            <li class="nav-item">
                <a href="/" class="nav-link {{ Request::is('/') ? 'active' : '' }}">
                    <svg width="17" height="20" viewBox="0 0 20 23" fill="none" xmlns="http://www.w3.org/2000/svg">
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
                    <span>Overview</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="/add" class="nav-link {{ Request::is('add') ? 'active' : '' }}">
                    <svg width="17" height="17" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M10 19H19" stroke="#343434" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" />
                        <path
                            d="M14.5 2.49998C14.8978 2.10216 15.4374 1.87866 16 1.87866C16.2786 1.87866 16.5544 1.93353 16.8118 2.04014C17.0692 2.14674 17.303 2.303 17.5 2.49998C17.697 2.69697 17.8532 2.93082 17.9598 3.18819C18.0665 3.44556 18.1213 3.72141 18.1213 3.99998C18.1213 4.27856 18.0665 4.55441 17.9598 4.81178C17.8532 5.06915 17.697 5.303 17.5 5.49998L5 18L1 19L2 15L14.5 2.49998Z"
                            stroke="#343434" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    <span>Add Student</span>
                </a>
            </li>
        </ul>
    </nav>
</div>
