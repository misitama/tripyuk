<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class NewUserRegister
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    private $email;
    private $activationKey;
    private $userLevel;
    private $password;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($email,$activationKey,$userLevel,$password)
    {
        $this->activationKey = $activationKey;
        $this->email = $email;
        $this->userLevel = $userLevel;
        $this->password = $password;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return new PrivateChannel('channel-name');
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @return mixed
     */
    public function getActivationKey()
    {
        return $this->activationKey;
    }

    /**
     * @return mixed
     */
    public function getUserLevel()
    {
        return $this->userLevel;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }



}
