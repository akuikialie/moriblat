{{--Navigasi--}}
@include('partials.navbar');
{{--Konten--}}
{{-- @include('content');--}}
<div class="page-content">
    <div class="page-info container">
        <div class="row">
            <div class="col">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Apps</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                    </ol>
                </nav>
            </div>
        </div>
        {{--konten--}}
    </div>
</div>
{{--Footer--}}
@include('partials.footer');
