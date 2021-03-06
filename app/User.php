<?php

namespace App;

use App\Models\City;
use App\Models\Country;
use App\Models\Specialization;
use App\Models\State;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name', 'last_name', 'email', 'password','slug',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function name(){
        return $this->first_name.' '.$this->last_name;
    }

    public function photo(){
        if ($this->user_type == 2){
            $default = asset('img/profile-pictures/default-physio.jpg');
        }else{
            $default = asset('img/profile-pictures/default.jpg');
        }

        $filename = is_null($this->photo) ? $default : $this->photo;

        return $filename;
    }

    /**
     * this verification code will be used to verify
     * @return mixed
     */
    public function emailVerificationCode(){
        return $this->email_verification_code;
    }

    public function emailVerified()
    {
        if($this->verified_at == NULL) {
            return true;
        }else{
            return false;
        }
    }

    /**
     * check if a verification link has been sent to the user.
     * @return bool
     */
    public function verificationSent(){
        if(!is_null($this->verification_sent_at)) {
            return true;
        }else{
            return false;
        }
    }
    public function message(){
        return $this->hasMany(Message::class);
    }

    /**
     * prevent the 'trying to get property of non object' error by returning an empty string if the user has not updated their country
     * @return string
     */
    public function country(){
        is_null($this->country)? $country ='': $country = Country::find($this->country)->name;
        return $country;
    }
    public function city(){
      !is_null($this->city)? $city = City::find($this->city): $city = null;
        return $city;
    }
    public function state(){
     !is_null($this->state)? $state = State::find($this->state): $state = null;
        return $state;
    }

    /**
     * concatenate the city, country and street address into one address line
     * @return null|string
     */
    public function location(){
        $address = !is_null($this->address)? $this->address.','.' ': '';
        $city = !is_null($this->city)? $this->city()->name.','.' ': '';
        $state = !is_null($this->state)? $this->State()->name.'.'.' ': '';
        $country = !is_null($this->country())? $this->country(): '';
        if (is_null($address) && is_null($city) && is_null($country) && is_null($state)) {
            return null;
        }else                {
            return $address . $city . $state ;
        }
    }

    /**
     * the users primary and secondary role is fetched from the specializations table
     * specializations table has an accompanying seeder
     * @return null
     */
    public function Specialization(){
        if ($this->specialization) {
            return Specialization::find($this->specialization);
        }else{
            return null;
        }
    }


    public function otherQualification(){
        if ($this->other_qualification) {
            return Specialization::find($this->other_qualification);
        }else{
            return null;
        }
    }


    /**
     * check if the user has not added any social media link
     * @return bool
     */
    public function hasNoSocial(){
        if(is_null($this->facebook) &&
            is_null($this->twitter) &&
            is_null($this->linkedin) &&
            is_null($this->website)){
            return true;
        }else{
            return false;
        }
    }

    /**
     * calculate actual age of the user from date of birth
     * @return int|null
     */
    public function age(){
        if (is_null($this->date_of_birth)){
            $age = null;
        }else {
            $date = $this->date_of_birth;
            $carbonDate = Carbon::parse($date);
            $age = $carbonDate->diffInYears(Carbon::now());
        }
        return $age;

    }


    /**
     * the user must
     * upload  a profile photo,
     * add a primary role,
     * verify email,
     * atleast add a country to the address line,
     * specify number of hours they are available in a week
     * @return bool
     */
    public  function profileUpdated(){
        if (
            !is_null($this->image_path) &&
            !is_null($this->primary_role) &&
            !is_null($this->verified_at) &&
            !is_null($this->image_path) &&
            !is_null($this->availability) &&
            !is_null($this->date_of_birth) &&
            !is_null($this->country)
        ){
            return true;
        }else{
            return false;
        }
    }

    /**
     * this message shows only when the user's basic profile info has not been updated
     * @return null|string
     */
    public function profileUpdateInfo(){
        if ($this->profileUpdated()){
            return null;
        }else{
            return 'you are not yet available in search, please fill all the areas marked as important';
        }
    }



//
    /**
     * social media function. needs to be modified, append https
     * for now it does the function of telling the browser that the link is in an external server
     * @return string
     */
    public function facebook(){
        return '//'.$this->facebook;
    }
    public function twitter(){
        return '//'.$this->twitter;
    }
    public function linkedin(){
        return '//'.$this->linkedin;
    }
    public function website(){
        return '//'.$this->website;
    }
    public function instagram(){
        return '//'.$this->instagram;
    }
}
