# Repository Pattern in Laravel

این پروژه برای آموزش و پیاده‌سازی **Repository Pattern در لاراول** ساخته شده است.  
هدف این پترن جداسازی لایه دسترسی به داده (Data Access Layer) از منطق تجاری (Business Logic) است تا کدها تمیزتر (Clean Code)، قابل نگهداری‌تر و تست‌پذیرتر باشند.

## آموزش کامل
آموزش مرحله به مرحله این پترن را می‌توانید در مقاله زیر مطالعه کنید:  
👉 [Repository Pattern in Laravel (Part 1) - Ditty.ir](https://ditty.ir/posts/repository-pattern-in-laravel-part-1/XOjjn)
👉 [Repository Pattern in Laravel (Part 2) - Ditty.ir](https://ditty.ir/posts/repository-pattern-in-laravel-part-2/5d1En)

## ویژگی‌ها
- جداسازی Queryها از کنترلر
- پیاده‌سازی یک لایه واسط (Interface)
- استفاده از کلاس‌های Abstraction
- قابلیت تست‌نویسی ساده‌تر
- افزایش خوانایی و نگهداشت کد

## اجرا
1. مخزن را کلون کنید:
   ```bash
   git clone https://github.com/aieghbal/LaravelRepositoryPattern.git
   cd LaravelRepositoryPattern
