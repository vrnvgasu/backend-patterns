<?php

namespace Src\dmitrii\fundumental\event_channel;

class Publisher implements PublisherInterface
{
    protected $topic;
    protected $eventChannel;

    /**
     * При создании отправителя указываем канал событий, в который будем отправлять данные
     * и название канала для подписчиков
     * PublisherFirst constructor.
     * @param string $topic
     * @param EventChannelInterface $eventChannel
     */
    public function __construct(string $topic, EventChannelInterface $eventChannel)
    {
        $this->topic = $topic;
        $this->eventChannel = $eventChannel;
    }

    /**
     * Отправитель ничего не знает о подписчиках, он только передает данные в канал событий
     * с определенным имененем канала.
     * Рассылку подписчикам организует канал событий
     * @param $data
     */
    public function publish(string $data): void
    {
        $this->eventChannel->publish($data, $this->topic);
    }
}
