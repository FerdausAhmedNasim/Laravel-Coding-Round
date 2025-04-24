---

### ✅ `README.md`

```markdown
# Laravel Coding Round API - BlogApp

This is a Laravel-based RESTful API developed as part of a coding round assignment. It includes:

- ✅ Blog Post CRUD API
- ✅ User Registration API
- ✅ Task Management API

---

## 🔧 Setup Instructions

1. **Clone the repository**

```bash
git clone https://github.com/FerdausAhmedNasim/blogapp-api.git
cd blogapp-api
```

2. **Install dependencies**

```bash
composer install
```

3. **Copy `.env` and set your DB credentials**

```bash
cp .env.example .env
```

Edit `.env`:

```
DB_DATABASE=blog_app
DB_USERNAME=root
DB_PASSWORD=
```

4. **Generate application key**

```bash
php artisan key:generate
```

5. **Run migrations**

```bash
php artisan migrate
```

6. **Start local development server**

```bash
php artisan serve
```

API will be available at: `http://127.0.0.1:8000`

---

## 📮 API Endpoints

### 📝 Blog Post API

| Method | Endpoint         | Description           |
|--------|------------------|-----------------------|
| POST   | `/api/posts`     | Create a new post     |
| GET    | `/api/posts`     | Get all posts         |
| GET    | `/api/posts/{id}`| Get a single post     |

**Example Request:**
```json
POST /api/posts
{
  "title": "My First Post",
  "content": "This is my content."
}
```

---

### 👤 User Registration API

| Method | Endpoint         | Description               |
|--------|------------------|---------------------------|
| POST   | `/api/register`  | Register a new user       |

**Validation Rules:**

- `name` - required, min 3 characters
- `email` - required, must be unique
- `password` - required, min 8 characters

**Example Request:**
```json
{
  "name": "Jane Doe",
  "email": "jane@example.com",
  "password": "password123"
}
```

---

### ✅ Task Management API

| Method | Endpoint                | Description                  |
|--------|-------------------------|------------------------------|
| POST   | `/api/tasks`            | Add a new task               |
| PATCH  | `/api/tasks/{id}`       | Mark a task as completed     |
| GET    | `/api/tasks/pending`    | Get all pending tasks        |

**Example Request to Add Task:**
```json
{
  "title": "Finish Laravel test"
}
```

**Example Request to Complete Task:**
```json
PATCH /api/tasks/1
{
  "is_completed": true
}
```

---

## ✅ Folder Structure

```
app/
  Http/
    Controllers/
      PostController.php
      AuthController.php
      TaskController.php
  Models/
    Post.php
    User.php
    Task.php

database/
  migrations/
    create_posts_table.php
    create_users_table.php
    create_tasks_table.php

routes/
  api.php
```

---

## ✍️ Author

**Ferdaus Ahmed Nasim**  
📍 Konapara, Demra, Dhaka  
📧 isdbbisewroundnasim@gmail.com  
📞 01776177802  
🔗 [GitHub](https://github.com/FerdausAhmedNasim)

---

```

---

এই `README.md` ফাইলটি `BlogApp` প্রজেক্টের মূল ফোল্ডারে রাখবেন।  
