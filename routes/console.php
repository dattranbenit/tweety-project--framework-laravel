<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;

/*
|--------------------------------------------------------------------------
| Console Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of your Closure based console
| commands. Each Closure is bound to a command instance allowing a
| simple approach to interacting with each command's IO methods.
|
<x-master>
    <div>
        @include('_publish-tweet-panel')
        @include('_timeline')
    </div>
</x-master>

{{$tweets->links()}}



<?php

namespace App\Http\Controllers;

use App\Tweet;

class TweetsController extends Controller
{
    public function index()
    {
        return view('tweets.index', [
            'tweets' => auth()
                ->user()
                ->timeline(),
        ]);
    }

    public function store()
    {
        $attributes = request()->validate([
            'body' => 'required|max:255',
        ]);

        Tweet::create([
            'user_id' => auth()->id(),
            'body' => $attributes['body'],
        ]);

        return redirect()->route('home');
    }
}




<div class="border border-gray-300 rounded-lg">
    <div class="flex p-4">
        <div class="mr-2 flex-shrink-0">
            <a href="{{$tweet->user->path()}}">
                <img src="{{$tweet->user->avatar}}"
                    alt=""
                    class="rounded-full mr-2"
                    width="57"
                    height="57"
                >
            </a>
        </div>
        <div>
            <h5 class="font-bold mb-4">
                <a href="{{$tweet->user->path()}}">
                    {{$tweet->user->name}}
                </a>
            </h5>
            <p class="text-sm mb-3">
                {{$tweet ->body}}
            </p>
            @auth
            <x-like-buttons :tweet="$tweet"/>
            @endauth

        </div>
    </div>

</div>
*/

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->describe('Display an inspiring quote');
