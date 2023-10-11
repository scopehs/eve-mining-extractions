@extends('auth.master')

@section('title')login
 {{ $title }}
@endsection

@push('css')
@endpush

@section('content')
    <section>
    <div class="container-fluid p-0">
        <div class="row">
            <div class="col-12">
                <div class="login-card">
                    <form class="theme-form login-form">
                        <h4>Moon Extraction - Login</h4>
                        <h6>Log to view your moon extractions</h6>
                        <div class="form-group">
                            <ul class="login-social">
                                <li>
                                    <a href="{{ route('login_with_eve') }}"><img src="{{asset('assets/images/eve/eve-sso-login-black-large.png')}}"></a>
                                </li>
                            </ul>
                        </div>
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

	
    @push('scripts')
    @endpush

@endsection