<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

/**
 * App\Models\Credit
 *
 * @property int $id
 * @property int $user_id
 * @property string $summa
 * @property string $percent
 * @property string $term
 * @property string $object
 * @property string $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @method static \Illuminate\Database\Eloquent\Builder|Credit newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Credit newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Credit query()
 * @method static \Illuminate\Database\Eloquent\Builder|Credit whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Credit whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Credit whereObject($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Credit wherePercent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Credit whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Credit whereSumma($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Credit whereTerm($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Credit whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Credit whereUserId($value)
 * @mixin \Eloquent
 */
class Credit extends Model
{
    use HasFactory, Notifiable;
}
