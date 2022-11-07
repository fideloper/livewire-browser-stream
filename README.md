# Browser Stream

Stream content to your browser using Livewire and AlpineJS.

## Setup

We'll setup a Laravel project, and install the [Laravel Websockets](https://beyondco.de/docs/laravel-websockets/getting-started/installation) package.
```bash
composer create-project laravel/laravel browser-strea

cd browser-stream

composer require beyondcode/laravel-websockets
php artisan vendor:publish --provider="BeyondCode\LaravelWebSockets\WebSocketsServiceProvider" --tag="migrations"
php artisan vendor:publish --provider="BeyondCode\LaravelWebSockets\WebSocketsServiceProvider" --tag="config"

composer require pusher/pusher-php-server:7.0.2

# A bug prevents us from using the latest
# composer require pusher/pusher-php-server

npm install --save-dev laravel-echo pusher-js

composer require laravel/breeze --dev
php artisan breeze:install

# Assuming your database is setup
php artisan migrate

npm install
npm run dev
```

Add the following to `.env`:

```ini
BROADCAST_DRIVER=pusher

PUSHER_APP_ID=123456
PUSHER_APP_KEY=xxx
PUSHER_APP_SECRET=yyy
PUSHER_HOST=127.0.0.1
PUSHER_PORT=6001
PUSHER_SCHEME=http
```

We can edit our `resources/js/bootstrap.js` file to uncomment the Pusher/Echo library:

```javascript
import Echo from 'laravel-echo';

import Pusher from 'pusher-js';
window.Pusher = Pusher;

window.Echo = new Echo({
    broadcaster: 'pusher',
    key: import.meta.env.VITE_PUSHER_APP_KEY,
    wsHost: import.meta.env.VITE_PUSHER_HOST ? import.meta.env.VITE_PUSHER_HOST : `ws-${import.meta.env.VITE_PUSHER_APP_CLUSTER}.pusher.com`,
    wsPort: import.meta.env.VITE_PUSHER_PORT ?? 80,
    wssPort: import.meta.env.VITE_PUSHER_PORT ?? 443,
    forceTLS: (import.meta.env.VITE_PUSHER_SCHEME ?? 'https') === 'https',
    enabledTransports: ['ws', 'wss'],
});
```

Then compile our static assets:

```bash
npm run dev
```

We can make a new event. We'll have it broadcast "publicly" so we don't need to mess with authentication settings:

```bash
php artisan make:event ContentUpdated
```

That file:

```php
<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class ContentUpdated implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(public string $content) {}

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return new Channel('content');
    }
}
```

On the frontend:

Layout need:

```html
@vite(['resources/css/app.css', 'resources/js/app.js'])
```

And then we can use Echo somewhere (script tag!?)

```html
<script type="module">
    Echo.channel('content')
        .listen('ContentUpdated', (e) => {
            console.log(e);
        });
</script>
```

MORE HERE: https://laravel-livewire.com/docs/2.x/laravel-echo 

