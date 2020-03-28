<?php

namespace Src\dmitrii\fundumental\event_channel;

class EventChannel implements EventChannelInterface
{
    protected $topics = [];

    /**
     * Канал событий сохраняет подписчиков на заданные темы
     * @param string $topic
     * @param SubscriberInterface $subscriber
     */
    public function subscribe(string $topic, SubscriberInterface $subscriber)
    {
        $this->topics[$topic][] = $subscriber;
    }

    /**
     * Если есть подписчики на данную тему, то они получают сообщение
     * @param string $data
     * @param string $topic
     */
    public function publish(string $data, string $topic)
    {
        if (isset($this->topics[$topic])) {
            foreach ($this->topics[$topic] as $subscriber) {
                $subscriber->notify($data);
            }
        }
    }
}
