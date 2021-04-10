@extends('base')

@section('title', 'Contact')

@section('content')
    <section class="main-section">
        <div class="container">
        @if(session()->has('message'))
            @if(session()->get('success') === false)
                @include('components/warning-banner', ['title' => 'Warning!', 'message' => session()->get('message')])
            @endif
            @if(session()->get('success') === true)
                @include('components/success-banner', ['title' => 'Success!', 'message' => session()->get('message')])
            @endif
        @endif
            <div class="half-size-grid">
                <div class="half-section">
                    <div class="section">
                        <h1 class="section-title">Send me a message...</h1>
                        <form action="{{ route('contact.submit') }}" method="POST" class="card card-nohov form-card">
                        @csrf
                            <div class="form-group">
                                <label for="name">
                                    Name
                                </label>
                                <input id="name" name="name" type="text" placeholder="John Smith" tabindex="1" maxlength="25" required></input>
                            </div>

                            <div class="form-group">
                                <label for="email">
                                    Email
                                </label>
                                <input id="email" name="email" type="email" placeholder="john.smith@example.com" tabindex="2" maxlength="40" required></input>
                            </div>

                            <div class="form-group">
                                <label for="subject">
                                    Subject
                                </label>
                                <input id="subject" name="subject" type="text" placeholder="Subject" tabindex="3" maxlength="50" required></input>
                            </div>

                            <div class="form-group">
                                <label for="message">
                                    Message
                                </label>
                                <textarea id="message" name="message" placeholder="Message" tabindex="4" maxlength="750" required></textarea>
                            </div>

                            <div class="form-group">
                                <input type="submit" value="Send" class="app-button-inverted" tabindex="4"></input>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="half-section flex-col">
                    <section class="section">
                        <h1 class="section-title">...Or choose another medium!</h1>
                        <ul class="icon-button-list">
                            <li class="card pd-10">
                                <a href="/discord" class="icon-button icon-button-discord"> 
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M9.593,10.971c-0.542,0-0.969,0.475-0.969,1.055c0,0.578,0.437,1.055,0.969,1.055c0.541,0,0.968-0.477,0.968-1.055	C10.572,11.445,10.134,10.971,9.593,10.971z M13.061,10.971c-0.542,0-0.969,0.475-0.969,1.055c0,0.578,0.437,1.055,0.969,1.055	c0.541,0,0.968-0.477,0.968-1.055C14.028,11.445,13.602,10.971,13.061,10.971z"/><path d="M17.678,3H4.947C3.874,3,3,3.874,3,4.957v12.844c0,1.083,0.874,1.957,1.947,1.957h10.773l-0.505-1.759l1.217,1.131	l1.149,1.064L19.625,22V4.957C19.625,3.874,18.751,3,17.678,3z M14.01,15.407c0,0-0.342-0.408-0.626-0.771	c1.244-0.352,1.719-1.13,1.719-1.13c-0.39,0.256-0.76,0.438-1.093,0.562c-0.475,0.198-0.93,0.331-1.377,0.408	c-0.912,0.17-1.748,0.123-2.461-0.01c-0.541-0.105-1.006-0.257-1.396-0.41c-0.218-0.085-0.457-0.188-0.693-0.321	c-0.029-0.021-0.057-0.029-0.085-0.048c-0.02-0.01-0.029-0.019-0.039-0.03c-0.171-0.094-0.266-0.16-0.266-0.16	s0.456,0.76,1.663,1.121c-0.285,0.36-0.637,0.789-0.637,0.789c-2.099-0.067-2.896-1.444-2.896-1.444	c0-3.059,1.368-5.538,1.368-5.538c1.368-1.027,2.669-0.998,2.669-0.998l0.095,0.114c-1.71,0.495-2.499,1.245-2.499,1.245	s0.21-0.114,0.561-0.275c1.016-0.446,1.823-0.57,2.156-0.599c0.057-0.009,0.105-0.019,0.162-0.019	c0.58-0.076,1.235-0.095,1.918-0.019c0.903,0.105,1.873,0.371,2.86,0.912c0,0-0.751-0.712-2.366-1.206l0.133-0.152	c0,0,1.302-0.029,2.669,0.998c0,0,1.368,2.479,1.368,5.538C16.917,13.963,16.11,15.34,14.01,15.407z"/></svg>
                                </a>
                                <div class="icon-button-text">
                                    <h2>Discord</h2>
                                    <p>Join my community discord.</p>
                                </div>
                            </li>

                            <li class="card pd-10">
                                <a href="mailto:dev@darkyne.com" class="icon-button icon-button-mail">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M20,4H6C4.897,4,4,4.897,4,6v5h2V8l6.4,4.8c0.178,0.133,0.389,0.2,0.6,0.2s0.422-0.067,0.6-0.2L20,8v9h-8v2h8 c1.103,0,2-0.897,2-2V6C22,4.897,21.103,4,20,4z M13,10.75L6.666,6h12.668L13,10.75z"/><path d="M2 12H9V14H2zM4 15H10V17H4zM7 18H11V20H7z"/></svg>
                                </a>
                                <div class="icon-button-text">
                                    <h2>Email</h2>
                                    <p>Send me a quick and easy email.</p>
                                </div>
                            </li>

                            <li class="card pd-10">
                                <a href="/twitter" class="icon-button icon-button-twitter">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M19.633,7.997c0.013,0.175,0.013,0.349,0.013,0.523c0,5.325-4.053,11.461-11.46,11.461c-2.282,0-4.402-0.661-6.186-1.809	c0.324,0.037,0.636,0.05,0.973,0.05c1.883,0,3.616-0.636,5.001-1.721c-1.771-0.037-3.255-1.197-3.767-2.793	c0.249,0.037,0.499,0.062,0.761,0.062c0.361,0,0.724-0.05,1.061-0.137c-1.847-0.374-3.23-1.995-3.23-3.953v-0.05	c0.537,0.299,1.16,0.486,1.82,0.511C3.534,9.419,2.823,8.184,2.823,6.787c0-0.748,0.199-1.434,0.548-2.032	c1.983,2.443,4.964,4.04,8.306,4.215c-0.062-0.3-0.1-0.611-0.1-0.923c0-2.22,1.796-4.028,4.028-4.028	c1.16,0,2.207,0.486,2.943,1.272c0.91-0.175,1.782-0.512,2.556-0.973c-0.299,0.935-0.936,1.721-1.771,2.22	c0.811-0.088,1.597-0.312,2.319-0.624C21.104,6.712,20.419,7.423,19.633,7.997z"/></svg>
                                </a>
                                <div class="icon-button-text">
                                    <h2>Twitter</h2>
                                    <p>Follow and/or chat with me on Twitter.</p>
                                </div>
                            </li>
                        </ul>
                    </section>

                    <section class="section flex-bottom" id="impressum">
                        <h1 class="section-title">Impressum</h1>
                        <div class="card card-nohov pd-10">
                            <div class="form-group">
                                <h2>Name</h2>
                                <p>Dimitri Kaiser</p>
                            </div>
                            <div class="form-group">
                                <h2>Address</h2>
                                <p>Schlesienstr. 11</p>
                                <p>97828 Marktheidenfeld</p>
                                <p>Germany</p>
                            </div>
                            <div class="form-group">
                                <h2>Email</h2>
                                <p>dev@darkyne.com</p>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </section>
@endsection