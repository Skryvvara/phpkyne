<nav id="main-nav">
    <div class="container flex-row">
        <div class="nav-logo flex-row-left">
            <a href="https://darkyne.com">
                <img src="https://cdn.cloudflare.steamstatic.com/steamcommunity/public/images/avatars/26/264294e4bb10e46f7ab4b093e0f68448f5ee30c9_full.jpg" alt="">
            </a>
        </div>

        <div>
            <ul class="nav-list flex-row-right">
                @foreach($nav as $item)
                <li class="nav-item">
                    <a href="{{ $item[1] }}" class="nav-link"
                        @if($item[2] === true) target="_blank" @endif>
                        {{ strtoupper($item[0]) }} 
                        @if($item[2] === true) <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"><path d="M13 3L16.293 6.293 9.293 13.293 10.707 14.707 17.707 7.707 21 11 21 3z"/><path d="M19,19H5V5h7l-2-2H5C3.897,3,3,3.897,3,5v14c0,1.103,0.897,2,2,2h14c1.103,0,2-0.897,2-2v-5l-2-2V19z"/></svg> @endif
                    </a>
                </li>
                @endforeach
                <li class="nav-button">
                    <a href="/contact" class="app-button-inverted">CONTACT ME</a>
                </li>
            </ul>
        </div>
    </div>
</nav>