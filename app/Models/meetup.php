<?php namespace App\Models;
/**
 * Created by PhpStorm.
 * User: ninja
 * Date: 9/24/16
 * Time: 10:43 AM
 */
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Meetup extends Model
{

    /** The Database table
     * used by the table
     */
    protected $table = 'meetups';

    /** Attributes that are mass assigned
     *
     */
    protected $fillable = ['title', 'date', 'location', 'descriptio', 'owner_id'];

    /**
     * Relation to owner
     */
    public function owner()
    {
        return $this->belongsTo('App\User', 'owner_id');
    }
    public function register()
    {
        return $this->belongsTo('App\Models\Register', 'regitration_id');
    }

    /**
     * getdate attribute
     *
     */
    public function getDateAttribute($value)
    {
        return Carbon::parse($value)->format('Y-m-d');
    }
    /*
     * set date attribute
     */

    public function setDateAttribute($value)
    {
        $this->attributes['date'] = Carbon::createFromFormat('Y-m-d', $value)->toDateString();
    }


}