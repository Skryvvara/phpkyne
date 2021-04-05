@extends('base')

@section('title', 'Darkyne | Contact')

@section('content')
    <section class="main-section">
        <div class="container">
            <div class="half-size-grid">
                <div class="half-section">
                    <h1 class="section-title">Send me a message...</h1>
                    <div class="warning-banner">
                        <h1 class="banner-title">Warning!</h1>
                        <p>This form is not properly working yet.</p>
                    </div>
                    <form action="POST">
                        <div class="form-group">
                            <label for="email">
                                Email
                            </label>
                            <input id="email" type="email" placeholder="your@email.com"></input>
                        </div>

                        <div class="form-group">
                            <label for="subject">
                                Subject
                            </label>
                            <input id="subject" type="text" placeholder="Subject"></input>
                        </div>

                        <div class="form-group">
                            <label for="message">
                                Message
                            </label>
                            <textarea id="message" placeholder="Message"></textarea>
                        </div>

                        <div class="form-group">
                            <input type="submit" value="Send"></input>
                        </div>
                    </form>
                </div>

                <div class="half-section">
                    <h1 class="section-title">...Or join my discord!</h1>
                    <div class="form-group">
                        <p>my Elder Scrolls Online Community Discord</p>
                        <a href="https://darkyne.com/discord" class="app-button">Join Group</a>
                    </div>
                    <h1 class="section-title">Send me an email</h1>
                    <a href="mailto:dev@darkyne.com" class="app-button">dev@darkyne.com</a>
                </div>
            </div>
        </div>
    </section>
@endsection
