<?php


namespace App\Http\View\Composers;

use Illuminate\View\View;

class BaseComposer
{
    public function compose(View $view): void {
        $nav = [
            ['home', 'home', false],
            ['work', 'work', false],
            ['contact', 'contact', false],
            ['github', 'ext.github', true],
        ];

        $usermenu = [
            ['game', 'game'],
        ];

        $view->with('nav', $nav)->with('usermenu', $usermenu);
        
    }
}
