# Pockit
Finance management system to monitor expenses, analyse spending patterns and improve your credit score.

## `users`
The users table stores user credentials and login information.
| Fields              | Type               | Description                       |
|---------------------|--------------------|-----------------------------------|
| `id`                | bigIncrements      | Unique row identifier             |
| `name`              | string             | Name of the user                  |
| `email`             | string:unique      | Users' email address              |
| `email_verified_at` | timestamp:nullable | Datetime of the user verification |
| `password`          | string             | Users' password                   |
| `remember_token`    | string             | Prevents cookie hijacking         |
| `created_at`        | timestamp          | Datetime the user was created     |
| `updated_at`        | timestamp          | Datetime the user was updated     |
| `deleted_at`        | timestamp          | Datetime the user was deleted     |

## `profiles`
The profiles table stores additional information on users and accounts.
| Fields      | Type          | Description                |
|-------------|---------------|----------------------------|
| `id`        | bigIncrements | Unique row identifier      |
| `object_id` | bigInteger    | ID of the linked model     |
| `name`      | string        | Name of the profile field  |
| `value`     | longText      | Value of the profile field |

## `accounts`
The accounts table stores information on the various accounts linked to your spending.
| Field         | Type          | Description                        |
|---------------|---------------|------------------------------------|
| `id`          | bigIncrements | Unique row identifier              |
| `name`        | string        | The name of the account            |
| `description` | text          | A brief description of the account |
| `created_at`  | timestamp     | Datetime the account was created   |
| `updated_at`  | timestamp     | Datetime the account was updated   |
| `deleted_at`  | timestamp     | Datetime the user was deleted      |

## `expenses`
The expenses table stores all of your expenses.
| Field          | Type          | Description                                 |
|----------------|---------------|---------------------------------------------|
| `id`           | bigIncrements | Unique row identifier                       |
| `name`         | string        | The name of the expense item                |
| `description`  | text          | A brief description of the expense          |
| `amount`       | decimal(10,4) | The cost of the expense                     |
| `paid`         | decimal(10,4) | The amount paid towards the expense         |
| `frequency`    | string        | `singular`, `weekly`, `monthly`, `yearly`                       |
| `status`       | string        | pending, partial, sent, rejected, cancelled |
| `recipient_id` | bigInteger    | The account ID (see accounts)               |
| `due_at`       | timestamp     | When the expense is due to go out           |
| `sent_at`      | timestamp     | When the expense was sent                   |
| `created_at`   | timestamp     | Datetime the expense was created            |
| `updated_at`   | timestamp     | Datetime the expense was updated            |
| `deleted_at`   | timestamp     | Datetime the user was deleted               |
