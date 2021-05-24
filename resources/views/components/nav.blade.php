<nav id="main-nav">
    <div class="container flex-row">
        <div class="nav-logo flex-row-left">
            <div class="logo-box">
                <a href="https://darkyne.com">
                
                </a>
            </div>
        </div>

        <div class="flex-row-right mobile-button-div mobile-unhide">
            <button class="mobile-menu-button" id="mobile-menu-show">
                <svg width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <rect x="4" y="11" width="16" height="2" rx="1"/>
                    <rect x="4" y="6" width="16" height="2" rx="1"/>
                    <rect x="4" y="16" width="16" height="2" rx="1"/>
                </svg>
            </button>
        </div>

        <div>
            <ul class="nav-list flex-row-right">
                @foreach($nav as $item)
                <li class="nav-item">
                    <a href="{{ $item[1] }}"
                        @if($view_name == $item[0]) class="nav-link nav-link-active" @else class="nav-link" @endif
                        @if($item[2] === true) target="_BLANK" @endif>
                        {{ strtoupper($item[0]) }} 
                        @if($item[2] === true) <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"><path d="M13 3L16.293 6.293 9.293 13.293 10.707 14.707 17.707 7.707 21 11 21 3z"/><path d="M19,19H5V5h7l-2-2H5C3.897,3,3,3.897,3,5v14c0,1.103,0.897,2,2,2h14c1.103,0,2-0.897,2-2v-5l-2-2V19z"/></svg> @endif
                    </a>
                </li>
                @endforeach
                <li class="nav-button">
                    <a href="/contact" class="btn btn-inverted">CONTACT ME</a>
                </li>
            </ul>
        </div>
    </div>

    <!-- MOBILE HEADER -->
    <div class="mobile-nav-menu" id="mobilenav">
        <div class="mobile-nav-header">
            <div class="container flex-row">
                <div class="flex-row-left">
                    <div class="logo-box">
                        <a href="https://darkyne.com">
                        
                        </a>
                    </div>
                </div>

                <div class="flex-row-right">
                    <button class="mobile-menu-button" id="mobile-menu-hide">            
                        <svg width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <rect x="6.41421" y="5" width="18" height="2" rx="1" transform="rotate(45 6.41421 5)"/>
                            <rect x="5" y="17.7279" width="18" height="2" rx="1" transform="rotate(-45 5 17.7279)"/>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
        <div class="container">
            <ul class="mobile-nav-list">
                @foreach($nav as $item)
                <li class="mobile-nav-item">
                    <a href="{{ $item[1] }}" class="mobile-nav-link"
                        @if($item[2] === true) target="_BLANK" @endif>
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