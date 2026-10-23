# Kanekura

Kanekura adalah website untuk transaksi penjualan sederhana toko. Terdapat dua peran disini yaitu:
1. Operator yang bertugas mengelola akun Kasir dan melihat laporan transaksi.
2. Kasir yang mengelola kategori, produk, melayani pembelian, dan mencetak struk.

### Teknologi

Ini daftar teknologi yang digunakan kala itu:
- Laravel v13.x
- SQLite v3.46.1
- Tailwind CSS v4.3.3
- Vite v8.3.4
- pnpm v12.14.0

### Syarat

- PHP v8.3+
- Composer
- Node.js
- SQLite

### Pengaturan

1. Clone repositori dan masuk ke foldernya:

```bash
   git clone https://github.com/loftynotfound/kanekura.git
   cd kanekura
```

2. Pasang PHP dan JavaScript:

```bash
   composer install
   pnpm install
```

3. Siapkan file .env:

```bash
   cp .env.example .env
   php artisan key:generate
```

4. Jalankan migrasi dengan file yang ada:

```bash
   php artisan migrate
```

5. Jalankan Vite dan server Laravel pada terminal terpisah:

```bash
   pnpm dev
```

```bash
   php artisan serve
```

6. Buka link url yang diberikan melalui browser.

### Struktur

```
kanekura/
├── app/
│   ├── Models/
│   └── Http/
│       └── Controllers/
├── bootstrap/
├── config/
├── database/
│   ├── migrations/
│   └── seeders/
├── public/
├── resources/
│   ├── css/app.css
│   ├── js/app.js
│   └── views/
│       ├── cart/
│       ├── cashier/
│       ├── category/
│       ├── components/
│       ├── layouts/
│       ├── product/
│       ├── report/
│       ├── transaction/
│       ├── dashboard.blade.php
│       ├── login.blade.php
│       └── reset.blade.php
├── routes/
│   └── web.php
├── storage/
├── .env.example
├── .gitattributes
├── .gitignore
├── .prettierignore
├── .prettierrc
├── artisan
├── composer.json
├── package.json
└── README.md
```
