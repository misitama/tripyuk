<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class NewUserFromBackOffice
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    private $email;
    private $fullName;
    private $password;
    private $activationKey;
    private $role;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($email,$fullName,$password,$activationKey,$role)
    {
        $this->email = $email;
        $this->fullName = $fullName;
        $this->password = $password;
        $this->activationKey = $activationKey;
        $this->role = $role;
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
    public function getFullName()
    {
        return $this->fullName;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
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
    public function getRole()
    {
        return $this->role;
    }



}
