@extends('base')

@section('title', 'Darkyne | Home')

@section('content')
    <section class="main-section primary-section">
        <div class="flex-row">
            <div class="container">
                <div class="flex-col-center">
                    <div class="primary-hero-box">
                        <div class="primary-hero-text">
                            <h1>Hi! I'm Dimitri - aka Darkyne</h1>
                            <p>
                            I'm working as a specialist for system integration at <a href="https://pg.com" target="_BLANK" class="app-link">Procter & Gamble</a>. In my free time I mostly work on websites and dotNET apps.
                            </p>
                        </div>

                        <div class="primary-hero-button">
                            <a href="/github" target="_BLANK" class="app-button-inverted">Check my Github! <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"><path d="M13 3L16.293 6.293 9.293 13.293 10.707 14.707 17.707 7.707 21 11 21 3z"/><path d="M19,19H5V5h7l-2-2H5C3.897,3,3,3.897,3,5v14c0,1.103,0.897,2,2,2h14c1.103,0,2-0.897,2-2v-5l-2-2V19z"/></svg></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
