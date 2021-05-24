@extends('base')

@section('title', 'Home')

@section('content')
    <section class="main-section primary-hero">
        <div class="container">
            <div class="v-center">
                <div class="primary-hero-content">
                    <h1>Hi! I'm Dimitri aka Darkyne</h1>
                    <p>I'm a system integrator at Procter & Gamble, hobby developer and gamer.</p>
                    <a href="#skills" class="btn">LEARN MORE</a>
                </div>
            </div>
        </div>
    </section>

    <section class="main-section" id="skills">
        <div class="container">
            <h1 class="section-title">Skills</h1>
            <div class="grid-2 gp-25">
                <div class="skill-card skill-web">
                    <h1><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill:rgba(0, 0, 0, 1);transform:;-ms-filter:"><path d="M20,3H4C2.897,3,2,3.897,2,5v1v3v10c0,1.103,0.897,2,2,2h16c1.103,0,2-0.897,2-2V9V6V5C22,3.897,21.103,3,20,3z M17,6h2v2 h-2V6z M14,6h2v2h-2V6z M4,19v-9h16.001l0.001,9H4z"></path></svg>Web development</h1>
                    <p>Using <a class="app-link" href="https://laravel.com/">Laravel</a>, mySQL, HTML (Blade), SCSS and TypeScript I taught myself how to create functional and good-looking web experiences.</p>
                </div>

                <div class="skill-card skill-hardware">
                    <h1><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill:rgba(0, 0, 0, 1);transform:;-ms-filter:"><path d="M7.999 22h8c1.103 0 2-.897 2-2V4c0-1.103-.897-2-2-2h-8c-1.103 0-2 .897-2 2v16C5.999 21.103 6.896 22 7.999 22zM2.999 7L4.999 7 4.999 5 2.999 5 2.999 5.5 1.999 5.5 1.999 6.5 2.999 6.5zM20.999 5L18.999 5 18.999 7 20.999 7 20.999 6.5 21.999 6.5 21.999 5.5 20.999 5.5zM2.999 11L4.999 11 4.999 9 2.999 9 2.999 9.5 1.999 9.5 1.999 10.5 2.999 10.5zM20.999 9L18.999 9 18.999 11 20.999 11 20.999 10.5 21.999 10.5 21.999 9.5 20.999 9.5zM2.999 15L4.999 15 4.999 13 2.999 13 2.999 13.5 1.999 13.5 1.999 14.5 2.999 14.5zM20.999 13L18.999 13 18.999 15 20.999 15 20.999 14.5 21.999 14.5 21.999 13.5 20.999 13.5zM2.999 19L4.999 19 4.999 17 2.999 17 2.999 17.5 1.999 17.5 1.999 18.5 2.999 18.5zM20.999 17L18.999 17 18.999 19 20.999 19 20.999 18.5 21.999 18.5 21.999 17.5 20.999 17.5z"></path></svg>Hardware</h1>
                    <p>As a trainee Procter & Gamble I have learned a lot about Computers and how they work, Servers, Networking and more. In my spare time I tinker with PCs, Raspberries and Windows Servers.</p>
                </div>

                <div class="skill-card skill-programming">
                    <h1><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill:rgba(0, 0, 0, 1);transform:;-ms-filter:"><path d="M9.585,11.692c2.596,0,4.328,0,4.328,0s2.432,0.039,2.432-2.35c0-2.39,0-3.951,0-3.951S16.714,3,11.936,3 C7.362,3,7.647,4.983,7.647,4.983l0.006,2.055h4.363v0.617H5.92c0,0-2.927-0.332-2.927,4.282c0,4.614,2.555,4.45,2.555,4.45h1.524 v-2.141C7.072,14.246,6.989,11.692,9.585,11.692z M9.529,5.952c-0.435,0-0.785-0.351-0.785-0.785s0.351-0.785,0.785-0.785 c0.434,0,0.785,0.351,0.785,0.785S9.963,5.952,9.529,5.952z"></path><path d="M18.452,7.532h-1.524v2.141c0,0,0.083,2.554-2.513,2.554s-4.328,0-4.328,0s-2.432-0.04-2.432,2.35c0,2.389,0,3.951,0,3.951 s-0.369,2.391,4.409,2.391c4.573,0,4.288-1.983,4.288-1.983l-0.006-2.054h-4.363v-0.617h6.097c0,0,2.927,0.332,2.927-4.282 C21.007,7.369,18.452,7.532,18.452,7.532z M14.471,17.968c0.435,0,0.785,0.351,0.785,0.785c0,0.435-0.351,0.785-0.785,0.785 c-0.434,0-0.785-0.351-0.785-0.785C13.686,18.318,14.037,17.968,14.471,17.968z"></path></svg>Programming</h1>
                    <p>I love programming, period. I'm best with C#, Python and JavaScript/TypeScript but I also got some experience in C/C++, lua and Pascal.</p>
                </div>

                <div class="skill-card skill-gaming">
                    <h1><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill:rgba(0, 0, 0, 1);transform:;-ms-filter:"><path d="M21.986,9.74c-0.002-0.028-0.005-0.058-0.008-0.088C21.802,7.044,19.615,5,17,5H7C4.321,5,2.142,7.076,2.013,9.737 C2.003,9.816,2,9.898,2,9.99v6.51c0,0.925,0.373,1.828,1.022,2.476C3.672,19.627,4.575,20,5.5,20c1.8,0,2.504-1,3.5-3 c0.146-0.292,0.992-2,3-2c1.996,0,2.853,1.707,3,2c1.004,2,1.7,3,3.5,3c0.925,0,1.828-0.373,2.476-1.022 C21.627,18.328,22,17.425,22,16.5V10C22,9.905,21.996,9.82,21.986,9.74z M7,12.031c-1.105,0-2-0.895-2-2s0.895-2,2-2s2,0.895,2,2 S8.105,12.031,7,12.031z M17,7.031c0.553,0,1,0.447,1,1s-0.447,1-1,1s-1-0.447-1-1S16.447,7.031,17,7.031z M15,11.031 c-0.553,0-1-0.447-1-1s0.447-1,1-1s1,0.447,1,1S15.553,11.031,15,11.031z M17,13.031c-0.553,0-1-0.447-1-1s0.447-1,1-1s1,0.447,1,1 S17.553,13.031,17,13.031z M19,11.031c-0.553,0-1-0.447-1-1s0.447-1,1-1s1,0.447,1,1S19.553,11.031,19,11.031z"></path></svg>Gaming</h1>
                    <p>Besides programming gaming is my biggest passion. I like competitive games and story rich rpgs the most. When possible I take positions with responsibility e.g. guild-leader or important support roles.</p>
                </div>
            </div>
        </div>
    </section>
@endsection
