<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * App\Models\User
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string $password
 * @property string $profilePic
 * @property string $role
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @method static \Database\Factories\UserFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereProfilePic($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRole($value)
 */
	class User extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\customerMenu
 *
 * @property int $id
 * @property string $ItemName
 * @property int $quantity
 * @property int $OrderID
 * @property float $unitPrice
 * @method static \Database\Factories\customerMenuFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|customerMenu newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|customerMenu newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|customerMenu query()
 * @method static \Illuminate\Database\Eloquent\Builder|customerMenu whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|customerMenu whereItemName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|customerMenu whereOrderID($value)
 * @method static \Illuminate\Database\Eloquent\Builder|customerMenu whereQuantity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|customerMenu whereUnitPrice($value)
 */
	class customerMenu extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\order
 *
 * @property int $id
 * @property string $CustomerName
 * @property string $ContactNo
 * @property string $EventType
 * @property string $EventState
 * @property float $Bill
 * @property string|null $created_at
 * @property string|null $updated_at
 * @method static \Database\Factories\orderFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|order newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|order newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|order query()
 * @method static \Illuminate\Database\Eloquent\Builder|order whereBill($value)
 * @method static \Illuminate\Database\Eloquent\Builder|order whereContactNo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|order whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|order whereCustomerName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|order whereEventState($value)
 * @method static \Illuminate\Database\Eloquent\Builder|order whereEventType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|order whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|order whereUpdatedAt($value)
 */
	class order extends \Eloquent {}
}

