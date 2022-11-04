<div>
    <span class="d-none" id="title-nav">{{ $title }}</span>
    <span id="title-main-nav">Students</span>
    @if (isset($errors) && $errors->any())
        <div class="alert alert-danger">
            @foreach ($errors->all() as $error)
                {{ $error }}
            @endforeach
        </div>
    @endif
    @if (session()->has('batal_sumb'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {!! session('batal_sumb') !!}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @elseif(session()->has('no_succ_imp' . auth()->user()->id))
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            {!! session('no_succ_imp' . auth()->user()->id) !!}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="container bg-white p-4 rounded-3 mb-3">
        <h1 class="add">Tambah Data</h1>
        <div class="d-flex ms-3 mt-3">
            <a href="" class="btn my-btn-add px-3 py-2 d-flex align-items-center">
                <svg width="14" height="18" viewBox="0 0 14 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M11.25 0H2.25C1.65326 0 1.08097 0.237053 0.65901 0.65901C0.237053 1.08097 0 1.65326 0 2.25V15.75C0 16.3467 0.237053 16.919 0.65901 17.341C1.08097 17.7629 1.65326 18 2.25 18H11.25C11.8467 18 12.419 17.7629 12.841 17.341C13.2629 16.919 13.5 16.3467 13.5 15.75V2.25C13.5 1.65326 13.2629 1.08097 12.841 0.65901C12.419 0.237053 11.8467 0 11.25 0V0ZM2.8125 3.375H8.4375C8.58668 3.375 8.72976 3.43426 8.83525 3.53975C8.94074 3.64524 9 3.78832 9 3.9375C9 4.08668 8.94074 4.22976 8.83525 4.33525C8.72976 4.44074 8.58668 4.5 8.4375 4.5H2.8125C2.66332 4.5 2.52024 4.44074 2.41475 4.33525C2.30926 4.22976 2.25 4.08668 2.25 3.9375C2.25 3.78832 2.30926 3.64524 2.41475 3.53975C2.52024 3.43426 2.66332 3.375 2.8125 3.375ZM2.8125 5.625H10.6875C10.8367 5.625 10.9798 5.68426 11.0852 5.78975C11.1907 5.89524 11.25 6.03832 11.25 6.1875V15.1875C11.25 15.3367 11.1907 15.4798 11.0852 15.5852C10.9798 15.6907 10.8367 15.75 10.6875 15.75H2.8125C2.66332 15.75 2.52024 15.6907 2.41475 15.5852C2.30926 15.4798 2.25 15.3367 2.25 15.1875V6.1875C2.25 6.03832 2.30926 5.89524 2.41475 5.78975C2.52024 5.68426 2.66332 5.625 2.8125 5.625Z"
                        fill="#4C536C" />
                </svg>
                <span class="ms-2">Formulir</span>
            </a>
            <a href="add/file" class="btn my-btn-add ms-3 px-3 py-2 d-flex align-items-center">
                <svg width="14" height="18" viewBox="0 0 14 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M8.45463 0H2.5C1.90326 0 1.33097 0.237053 0.90901 0.65901C0.487053 1.08097 0.25 1.65326 0.25 2.25V15.75C0.25 16.3467 0.487053 16.919 0.90901 17.341C1.33097 17.7629 1.90326 18 2.5 18H11.5C12.0967 18 12.669 17.7629 13.091 17.341C13.5129 16.919 13.75 16.3467 13.75 15.75V5.29537C13.7499 4.99703 13.6314 4.71093 13.4204 4.5L9.25 0.329625C9.03907 0.118632 8.75297 6.37171e-05 8.45463 0V0ZM8.6875 3.9375V1.6875L12.0625 5.0625H9.8125C9.51413 5.0625 9.22798 4.94397 9.017 4.733C8.80603 4.52202 8.6875 4.23587 8.6875 3.9375ZM5.875 7.03125C5.875 7.14205 5.85318 7.25177 5.81077 7.35414C5.76837 7.45651 5.70622 7.54952 5.62787 7.62787C5.54952 7.70622 5.45651 7.76837 5.35414 7.81077C5.25177 7.85318 5.14205 7.875 5.03125 7.875C4.92045 7.875 4.81073 7.85318 4.70836 7.81077C4.60599 7.76837 4.51298 7.70622 4.43463 7.62787C4.35628 7.54952 4.29413 7.45651 4.25173 7.35414C4.20932 7.25177 4.1875 7.14205 4.1875 7.03125C4.1875 6.80747 4.27639 6.59286 4.43463 6.43463C4.59286 6.27639 4.80747 6.1875 5.03125 6.1875C5.25503 6.1875 5.46964 6.27639 5.62787 6.43463C5.78611 6.59286 5.875 6.80747 5.875 7.03125ZM4.90637 8.766L6.40263 9.76275L8.48837 7.67587C8.53013 7.634 8.58402 7.60635 8.64239 7.59686C8.70076 7.58737 8.76063 7.59652 8.8135 7.623L10.9375 8.71875V10.6875C10.9375 10.8367 10.8782 10.9798 10.7727 11.0852C10.6673 11.1907 10.5242 11.25 10.375 11.25H3.625C3.47582 11.25 3.33274 11.1907 3.22725 11.0852C3.12176 10.9798 3.0625 10.8367 3.0625 10.6875V10.125C3.0625 10.125 4.795 8.69175 4.90637 8.766ZM3.625 12.375H10.375C10.5242 12.375 10.6673 12.4343 10.7727 12.5398C10.8782 12.6452 10.9375 12.7883 10.9375 12.9375C10.9375 13.0867 10.8782 13.2298 10.7727 13.3352C10.6673 13.4407 10.5242 13.5 10.375 13.5H3.625C3.47582 13.5 3.33274 13.4407 3.22725 13.3352C3.12176 13.2298 3.0625 13.0867 3.0625 12.9375C3.0625 12.7883 3.12176 12.6452 3.22725 12.5398C3.33274 12.4343 3.47582 12.375 3.625 12.375ZM3.625 14.625H7C7.14918 14.625 7.29226 14.6843 7.39775 14.7898C7.50324 14.8952 7.5625 15.0383 7.5625 15.1875C7.5625 15.3367 7.50324 15.4798 7.39775 15.5852C7.29226 15.6907 7.14918 15.75 7 15.75H3.625C3.47582 15.75 3.33274 15.6907 3.22725 15.5852C3.12176 15.4798 3.0625 15.3367 3.0625 15.1875C3.0625 15.0383 3.12176 14.8952 3.22725 14.7898C3.33274 14.6843 3.47582 14.625 3.625 14.625Z"
                        fill="#4C536C" />
                </svg>
                <span class="ms-2">File</span>
            </a>
        </div>
    </div>
    <div class="container bg-white p-4 rounded-3 my-table">
        <h1 class="add">Semua Siswa</h1>
        <div class="row header mt-4 p-2">
            <div class="col-2">
                <span class="my-table-header">NIS</span>
            </div>
            <div class="col-3">
                <span class="my-table-header">Nama <svg width="9" height="6" viewBox="0 0 9 6" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M1 1L4.5 5L8 1" stroke="#293049" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </span>
            </div>
            <div class="col-2">
                <span class="my-table-header">Jurusan <svg width="9" height="6" viewBox="0 0 9 6" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M1 1L4.5 5L8 1" stroke="#293049" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </span>
            </div>
            <div class="col-3">
                <span class="my-table-header">Alamat</span>
            </div>
            <div class="col-2">
                <span class="my-table-header">Option</span>
            </div>
        </div>
        @foreach ($students as $item)
            <div class="row table-value p-2">
                <div class="col-2">
                    <span class="my-table-main">{{ $item->nis }}</span>
                </div>
                <div class="col-3">
                    <span class="my-table-main">{{ $item->nama }}</span>
                </div>
                <div class="col-2">
                    <span class="my-table-main">{{ $item->jurusan }}</span>
                </div>
                <div class="col-3">
                    <span class="my-table-main">{{ $item->alamat }}</span>
                </div>
                <div class="col-2">
                    <span class="my-table-main">Option</span>
                </div>
            </div>
        @endforeach
    </div>


</div>
