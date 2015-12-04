<?php
/**
 * An helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App{
/**
 * App\Crisis
 *
 * @property-read Headquarter $headquarter
 */
	class Crisis {}
}

namespace App{
/**
 * App\Headquarter
 *
 * @property integer $id
 * @property integer $crisis_id
 * @property string $name
 * @property string $gps_lat
 * @property string $gps_long
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property-read Crisis $crisis
 * @property-read \Illuminate\Database\Eloquent\Collection|SupportCenter[] $support_centers
 * @property-read \Illuminate\Database\Eloquent\Collection|User[] $users
 * @method static \Illuminate\Database\Query\Builder|\App\Headquarter whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Headquarter whereCrisisId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Headquarter whereName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Headquarter whereGpsLat($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Headquarter whereGpsLong($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Headquarter whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Headquarter whereUpdatedAt($value)
 */
	class Headquarter {}
}

namespace App{
/**
 * App\Intervention
 *
 * @property integer $id
 * @property integer $victim_id
 * @property string $type
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static \Illuminate\Database\Query\Builder|\App\Intervention whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Intervention whereVictimId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Intervention whereType($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Intervention whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Intervention whereUpdatedAt($value)
 */
	class Intervention {}
}

namespace App{
/**
 * App\InterventionMeta
 *
 * @property integer $id
 * @property integer $intervention_id
 * @property string $key
 * @property string $value
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static \Illuminate\Database\Query\Builder|\App\InterventionMeta whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\InterventionMeta whereInterventionId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\InterventionMeta whereKey($value)
 * @method static \Illuminate\Database\Query\Builder|\App\InterventionMeta whereValue($value)
 * @method static \Illuminate\Database\Query\Builder|\App\InterventionMeta whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\InterventionMeta whereUpdatedAt($value)
 */
	class InterventionMeta {}
}

namespace App{
/**
 * App\Product
 *
 * @property integer $id
 * @property string $name
 * @property integer $cdiscount_id
 * @property float $price
 * @property string $type
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static \Illuminate\Database\Query\Builder|\App\Product whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Product whereName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Product whereCdiscountId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Product wherePrice($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Product whereType($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Product whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Product whereUpdatedAt($value)
 */
	class Product {}
}

namespace App{
/**
 * App\SupportCenter
 *
 * @property integer $id
 * @property integer $headquarters_id
 * @property string $name
 * @property string $gps_lat
 * @property string $gps_long
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Victim[] $victims
 * @method static \Illuminate\Database\Query\Builder|\App\SupportCenter whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\SupportCenter whereHeadquartersId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\SupportCenter whereName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\SupportCenter whereGpsLat($value)
 * @method static \Illuminate\Database\Query\Builder|\App\SupportCenter whereGpsLong($value)
 * @method static \Illuminate\Database\Query\Builder|\App\SupportCenter whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\SupportCenter whereUpdatedAt($value)
 */
	class SupportCenter {}
}

namespace App{
/**
 * App\User
 *
 * @property integer $id
 * @property string $username
 * @property string $password
 * @property string $email
 * @property string $phone
 * @property string $firstname
 * @property string $lastname
 * @property string $remember_token
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|Headquarter[] $headquarters
 * @property-read \Illuminate\Database\Eloquent\Collection|Headquarter[] $support_centers
 * @method static \Illuminate\Database\Query\Builder|\App\User whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User whereUsername($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User wherePassword($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User whereEmail($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User wherePhone($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User whereFirstname($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User whereLastname($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User whereRememberToken($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User whereUpdatedAt($value)
 */
	class User {}
}

namespace App{
/**
 * App\Victim
 *
 * @property integer $id
 * @property string $lastname
 * @property string $firstname
 * @property string $gender
 * @property string $address
 * @property integer $postal_code
 * @property string $city
 * @property string $country
 * @property string $phone1
 * @property string $phone2
 * @property string $blood_type
 * @property \Carbon\Carbon $birth_date
 * @property string $contraindication
 * @property integer $support_center_id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property string $state
 * @property-read \App\SupportCenter $supportCenter
 * @method static \Illuminate\Database\Query\Builder|\App\Victim whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Victim whereLastname($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Victim whereFirstname($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Victim whereGender($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Victim whereAddress($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Victim wherePostalCode($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Victim whereCity($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Victim whereCountry($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Victim wherePhone1($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Victim wherePhone2($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Victim whereBloodType($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Victim whereBirthDate($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Victim whereContraindication($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Victim whereSupportCenterId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Victim whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Victim whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Victim whereState($value)
 */
	class Victim {}
}

