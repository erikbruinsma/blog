<?php

namespace App\Listeners;

use App\Notifications\ArticlePublished;

/**
 * Class BlogEventSubscriber
 * @package App\Listeners
 */
class ArticleEventSubscriber
{

    /**
     * Handle blog creating events.
     *
     * @param $blog
     */
    public function onCreated($article)
    {
        $article->notify(new ArticlePublished());
    }

    /**
     * Register the listeners for the subscriber.
     *
     * @param  Illuminate\Events\Dispatcher  $events
     */
    public function subscribe($events)
    {
        $events->listen(
            'eloquent.created: App\Article',
            'App\Listeners\BlogEventSubscriber@onCreated'
        );
    }
}
