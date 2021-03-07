<?php

namespace App;

use App\Models\User;

trait Followable
{
    public function follow(User $user)
    {
        return $this->follows()->save($user);
    }

    public function unfollow(User $user)
    {
        return $this->follows()->detach($user);
    }
    public function toggleFollow(User $user)
    {
        if($this->isfollowing($user))
            return $this->unfollow($user);

        return  $this->follow($user);

    }


    public function follows()
    {
         return $this->belongsToMany(
             User::class,
             'follows',
             'user_id',
             'following_user_id'); //a user can follow many user
    }

    public function isFollowing(User $user)  //a  follower is following
    {
        return $this->follows()
        ->where('following_user_id',$user->id)->exists();
    }
}
;

