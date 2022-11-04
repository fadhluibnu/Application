<div class="col-12">
    <header class="d-flex justify-content-between align-items-center px-4 py-2 bg-white">
        <div class="col-2">
            <div class="title-page" id="title-main-nav"></div>
        </div>
        <div class="col">
            <div class="search">
                <div class="input-group" id="search-input-group">
                    <span class="input-group-text">
                        <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M7.70833 13.6667C11.2061 13.6667 14.0417 10.8311 14.0417 7.33333C14.0417 3.83553 11.2061 1 7.70833 1C4.21053 1 1.375 3.83553 1.375 7.33333C1.375 10.8311 4.21053 13.6667 7.70833 13.6667Z"
                                stroke="#9196A5" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M15.625 15.25L12.1813 11.8063" stroke="#9196A5" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </span>
                    <input type="search" class="form-control" id="input-text" placeholder="Search data in overview" />
                    <span class="input-group-text">
                        <div class="bg-white p-1 px-2 rounded">
                            <svg width="12" height="12" viewBox="0 0 12 12" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M4.125 4.75L1 7.875L4.125 11" stroke="#595E6C" stroke-width="1.5"
                                    stroke-linecap="round" stroke-linejoin="round" />
                                <path
                                    d="M11 1V5.375C11 6.03804 10.7366 6.67393 10.2678 7.14277C9.79893 7.61161 9.16304 7.875 8.5 7.875H1"
                                    stroke="#595E6C" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                            <span class="enter">Enter</span>
                        </div>
                    </span>
                </div>
            </div>
        </div>
        <div class="col-3">
            <div class="profil d-flex justify-content-around align-items-center">
                <div class="dropdown">
                    <button class="btn dropdown-toggle dropdown-toggle1" type="button" id="dropdownMenuButton1"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        <svg width="17" height="19" viewBox="0 0 17 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M13.5 6C13.5 4.67392 12.9732 3.40215 12.0355 2.46447C11.0979 1.52678 9.82608 1 8.5 1C7.17392 1 5.90215 1.52678 4.96447 2.46447C4.02678 3.40215 3.5 4.67392 3.5 6C3.5 11.8333 1 13.5 1 13.5H16C16 13.5 13.5 11.8333 13.5 6Z"
                                stroke="#595E6C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            <path
                                d="M9.94168 16.8333C9.79517 17.0859 9.58488 17.2955 9.33187 17.4413C9.07886 17.587 8.792 17.6637 8.50002 17.6637C8.20803 17.6637 7.92117 17.587 7.66816 17.4413C7.41515 17.2955 7.20486 17.0859 7.05835 16.8333"
                                stroke="#595E6C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                        <div class="pesan p-1">Notif</div>
                    </ul>
                </div>
                <div class="dropdown">
                    <button class="btn dropdown-toggle d-flex align-items-center profile" type="button"
                        id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                        <div class="mask-photo"></div>
                        <style>
                            .mask-photo {
                                width: 40px;
                                height: 40px;
                                background-image: url(assets/pinguin.jpg);
                                background-size: cover;
                                border-radius: 50%;
                            }

                        </style>
                        <span class="ms-2">Hi, {{ Auth()->user()->name }}</span>
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                        <li>
                            <form action="logout" method="POST">
                                @csrf
                                <button type="submit" class="dropdown-item">
                                    <div wire:loading wire:target="logout">
                                        <span class="spinner-border spinner-border-sm" role="status"
                                            aria-hidden="true"></span>
                                        <span class="visually-hidden">Loading...</span>
                                    </div>
                                    <span>Logout</span>
                                </button>
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </header>
</div>
