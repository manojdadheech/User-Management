# Laravel User Management with Event-Driven Detail Logging

This Laravel project demonstrates how to manage user records along with their additional background details using an event-driven approach. It includes user creation, editing, deleting, and viewing, with automatic detail logging (e.g., full name, middle initial, gender, and avatar).

---

## 🚀 Features

- User CRUD operations (Create, Read, Update, Delete)
- Auto-generate user details on save
- Event & Listener architecture (`UserSaved` event)
- Dynamic handling of prefix, suffix, and avatar
- Soft and hard deletion with cleanup
- Blade views for user listing, editing, and detail viewing

---

## 📂 Database Tables

### `users` Table
Stores user base information:
- `id`, `prefixname`, `firstname`, `middlename`, `lastname`, `suffixname`, `username`, `email`, `photo`, `type`, `timestamps`

### `details` Table
Stores user background details:
- `id`, `user_id` (FK), `key`, `value`, `timestamps`

---

## 🧠 Relationships

- A `User` has many `Detail`
- A `Detail` belongs to a `User`

```bash
git clone https://github.com/manojdadheech/User-Management.git
cd User-Management

composer install
npm install && npm run dev

cp .env.example .env
php artisan key:generate


create a database in mysql name userdetails

php artisan migrate --seed

Php artisan serve

to see images run
php artisan storage:link
