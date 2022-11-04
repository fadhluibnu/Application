<div class="container mt-5">

    {{-- banner --}}
    <div class="banner">
        <img src="{{ url('assets/slider/slider1.png') }}" alt="slider">
    </div>

    {{-- Pilih liga --}}
    <section class="pilih-liga mt-4">
        <h3><strong>Pilih Liga</strong></h3>
        <div class="row">
            @foreach ($ligas as $liga)
                <div class="col">
                    <div class="card shadow">
                        <div class="card-body text-center">
                            <img src="{{ url('assets/liga') }}/{{ $liga->gambar }}" alt="{{ $liga->nama }}"
                                class="img-fluid">
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>

    {{-- Best Product --}}
    <section class="best-product mt-4">
        <h3><strong>Best Products</strong></h3>
        <div class="row">
            @foreach ($products as $product)
                <div class="col">
                    <div class="card shadow">
                        <div class="card-body text-center">
                            <img src="{{ url('assets/jersey') }}/{{ $product->gambar }}"
                                alt="{{ $product->nama }}" class="img-fluid">
                            <div class="row">
                                <div class="col-md-12 mt-2">
                                    <h5><strong>{{ $product->nama }}</strong></h5>
                                    <h5>Rp. {{ number_format($product->harga) }}</h5>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-md-12">
                                    <a href="#" class="btn btn-dark d-block">Detail</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
</div>
