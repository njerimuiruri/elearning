@extends('layout')

@section('content')
<!-- ======= Pricing Section ======= -->
<section id="pricing" class="pricing">
    <div class="container" data-aos="fade-up">
        <header class="section-header">
            <h2>Subscription Plans</h2>
            <p>Choose the plan that suits your learning needs</p>
        </header>
        <div class="row gy-4" data-aos="fade-left">

            @foreach ($packages as $package)
            <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="{{ $loop->iteration * 100 }}">
                <div class="box">
                    <h3 style="color: {{ $package['color'] ?? '#07d5c0' }}">{{ $package['name'] }}</h3>
                    <div class="price"><sup>$</sup>{{ $package['price'] }}<span> / mo</span></div>
                    <img src="{{ $package['image'] }}" class="img-fluid" alt="{{ $package['name'] }}">
                    <ul>
                        @foreach ($package['features'] as $feature)
                        <li>{{ $feature }}</li>
                        @endforeach
                    </ul>
                    <a href="{{ route('subscribe', ['package' => $package['name']]) }}" class="btn-buy">{{ $package['button_text'] ?? 'Activate' }}</a>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</section><!-- End Pricing Section -->
@endsection