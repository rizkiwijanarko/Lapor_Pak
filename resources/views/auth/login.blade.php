{{-- @extends('auth.layouts.auth')

@section('body_class', 'login')

@section('content')
    <div>
        <div class="login_wrapper">
            <div class="animate form login_form">
                <section class="login_content">
                    {{ Form::open(['route' => 'login']) }}
                    <h1>{{ __('views.auth.login.header') }}</h1>

                    <div>
                        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}"
                            placeholder="{{ __('views.auth.login.input_0') }}" required autofocus>
                    </div>
                    <div>
                        <input id="password" type="password" class="form-control" name="password"
                            placeholder="{{ __('views.auth.login.input_1') }}" required>
                    </div> --}}
{{-- <div class="checkbox al_left">
                        <label>
                            <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
                            {{ __('views.auth.login.input_2') }}
                        </label>
                    </div> --}}

{{-- @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    @if (!$errors->isEmpty())
                        <div class="alert alert-danger" role="alert">
                            {!! $errors->first() !!}
                        </div>
                    @endif

                    <div>
                        <button class="btn btn-default submit" type="submit">{{ __('views.auth.login.action_0') }}</button> --}}
{{-- <a class="reset_pass" href="{{ route('password.request') }}">
                            {{ __('views.auth.login.action_1') }}
                        </a> --}}
{{-- </div> --}}

{{-- <div class="clearfix"></div>

                    <div class="separator">
                        <span>{{ __('views.auth.login.message_0') }}</span>
                        <div>
                            <a href="{{ route('social.redirect', ['facebook']) }}" class="btn btn-success btn-facebook">
                                <i class="fa fa-facebook"></i>
                                Facebook
                            </a>
                            <a href="{{ route('social.redirect', ['twitter']) }}" class="btn btn-success btn-twitter">
                                <i class="fa fa-twitter"></i>
                                Twitter
                            </a>
                        </div>
                    </div> --}}

{{-- @if (config('auth.users.registration'))
                        <div class="separator">
                            <p class="change_link">{{ __('views.auth.login.message_1') }}
                                <a href="{{ route('register') }}" class="to_register">
                                    {{ __('views.auth.login.action_2') }} </a>
                            </p>

                            <div class="clearfix"></div>
                            <br />

                            <div>
                                <div class="h1">{{ config('app.name') }}</div>
                                <p>&copy; {{ date('Y') }} {{ config('app.name') }}.
                                    {{ __('views.auth.login.copyright') }}</p>
                            </div>
                        </div>
                    @endif --}}
{{-- {{ Form::close() }}
                </section>
            </div>
        </div>
    </div>
@endsection

@section('styles')
    @parent

    {{ Html::style(mix('assets/auth/css/login.css')) }}
@endsection --}}

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>

    <title>Document</title>
</head>

<body class="flex justify-center items-center font-['Poppins'] h-screen">
    <div class="bg-white w-[923px] border rounded-sm shadow">
        <div class="flex flex-wrap items-center">
            <div class="w-1/2">
                <div class="px-26 py-16 text-center">
                    <a class="mb-10 flex gap-3 mx-auto w-fit items-center" href="/">
                        <img class="" src="{{ asset('img/logo tail.png') }}" alt="Logo" />
                        <div class="text-2xl font-medium">LaporPak</div>
                    </a>

                    <p class="text-gray-600 px-20 mb-10 text-sm">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit
                        suspendisse.
                    </p>

                    <div class="mt-15">
                        <img src="{{ asset('svg/illustration-03.svg') }}" class="mx-auto w-72" alt="illustration" />
                    </div>
                </div>
            </div>
            <div class="w-1/2 border-l-2">
                <div class="p-16">
                    <span class="mb-2 text-gray-600 block font-medium">Start for free</span>
                    <h2 class="text-3xl font-semibold text-gray-800 mb-9">
                        Sign In to LaporPak
                    </h2>

                    <form action="{{ route('login') }}" method="POST">
                        @csrf
                        <div class="mb-4">
                            <label class="mb-2 block font-medium text-gray-800">Email</label>
                            <div class="relative">
                                <input type="email" placeholder="Enter your email" name="email"
                                    value="{{ old('email') }}"
                                    class="w-full py-4 pl-6 pr-10 bg-transparent border rounded-lg outline-none focus:border-blue-500 focus-visible:shadow-none transition-all" />

                                <span class="absolute right-4 top-4">
                                    <svg class="fill-current" width="22" height="22" viewBox="0 0 22 22"
                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g opacity="0.5">
                                            <path
                                                d="M19.2516 3.30005H2.75156C1.58281 3.30005 0.585938 4.26255 0.585938 5.46567V16.6032C0.585938 17.7719 1.54844 18.7688 2.75156 18.7688H19.2516C20.4203 18.7688 21.4172 17.8063 21.4172 16.6032V5.4313C21.4172 4.26255 20.4203 3.30005 19.2516 3.30005ZM19.2516 4.84692C19.2859 4.84692 19.3203 4.84692 19.3547 4.84692L11.0016 10.2094L2.64844 4.84692C2.68281 4.84692 2.71719 4.84692 2.75156 4.84692H19.2516ZM19.2516 17.1532H2.75156C2.40781 17.1532 2.13281 16.8782 2.13281 16.5344V6.35942L10.1766 11.5157C10.4172 11.6875 10.6922 11.7563 10.9672 11.7563C11.2422 11.7563 11.5172 11.6875 11.7578 11.5157L19.8016 6.35942V16.5688C19.8703 16.9125 19.5953 17.1532 19.2516 17.1532Z"
                                                fill="" />
                                        </g>
                                    </svg>
                                </span>
                            </div>
                        </div>

                        <div class="mb-6">
                            <label class="mb-2 block font-medium text-gray-800">Password</label>
                            <div class="relative">
                                <input type="password" placeholder="*******" name="password"
                                    value="{{ old('password') }}"
                                    class="w-full py-4 pl-6 pr-10 bg-transparent border rounded-lg outline-none focus:border-blue-500 focus-visible:shadow-none transition-all" />

                                <span class="absolute right-4 top-4">
                                    <svg class="fill-current" width="22" height="22" viewBox="0 0 22 22"
                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g opacity="0.5">
                                            <path
                                                d="M16.1547 6.80626V5.91251C16.1547 3.16251 14.0922 0.825009 11.4797 0.618759C10.0359 0.481259 8.59219 0.996884 7.52656 1.95938C6.46094 2.92188 5.84219 4.29688 5.84219 5.70626V6.80626C3.84844 7.18438 2.33594 8.93751 2.33594 11.0688V17.2906C2.33594 19.5594 4.19219 21.3813 6.42656 21.3813H15.5016C17.7703 21.3813 19.6266 19.525 19.6266 17.2563V11C19.6609 8.93751 18.1484 7.21876 16.1547 6.80626ZM8.55781 3.09376C9.31406 2.40626 10.3109 2.06251 11.3422 2.16563C13.1641 2.33751 14.6078 3.98751 14.6078 5.91251V6.70313H7.38906V5.67188C7.38906 4.70938 7.80156 3.78126 8.55781 3.09376ZM18.1141 17.2906C18.1141 18.7 16.9453 19.8688 15.5359 19.8688H6.46094C5.05156 19.8688 3.91719 18.7344 3.91719 17.325V11.0688C3.91719 9.52189 5.15469 8.28438 6.70156 8.28438H15.2953C16.8422 8.28438 18.1141 9.52188 18.1141 11V17.2906Z"
                                                fill="" />
                                            <path
                                                d="M10.9977 11.8594C10.5852 11.8594 10.207 12.2031 10.207 12.65V16.2594C10.207 16.6719 10.5508 17.05 10.9977 17.05C11.4102 17.05 11.7883 16.7063 11.7883 16.2594V12.6156C11.7883 12.2031 11.4102 11.8594 10.9977 11.8594Z"
                                                fill="" />
                                        </g>
                                    </svg>
                                </span>
                            </div>
                        </div>
                        <button
                            class="text-white w-full p-4 bg-blue-500 hover:bg-blue-600 active:bg-blue-700 transition-all rounded-lg">Sign
                            In</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
