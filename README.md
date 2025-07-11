# Barbershop Laravel Projesi

Bu proje, Laravel ile geliştirilmiş modern bir berber rezervasyon ve tanıtım sitesidir.  
Aşağıda, proje kapsamında yapılan ana geliştirmeler, kullanılan teknolojiler ve mimari hakkında özet bilgi bulabilirsiniz.

---

## Kullanılan Teknolojiler

- **Laravel** (PHP 8+): Sunucu tarafı uygulama çatısı
- **Filament Admin Panel**: Yönetim paneli ve CRUD işlemleri
- **Blade**: Laravel’in şablon motoru
- **TailwindCSS**: Modern ve hızlı CSS framework’ü
- **Vite**: Asset derleyici ve hızlı geliştirme ortamı
- **MySQL**: Veritabanı yönetimi
- **PostCSS & Autoprefixer**: CSS derleme ve tarayıcı uyumluluğu
- **JavaScript (ES6+)**: Dinamik ön yüz işlemleri

---

## Kurulum

1. **Projeyi klonlayın:**
   ```bash
   git clone https://github.com/kullaniciadi/barbershop.git
   cd barbershop
   ```

2. **Bağımlılıkları yükleyin:**
   ```bash
   composer install
   npm install && npm run dev
   ```

3. **.env dosyasını ayarlayın ve veritabanı bilgilerinizi girin.**

4. **Migration işlemlerini çalıştırın:**
   ```bash
   php artisan migrate
   ```

5. **Geliştirme sunucusunu başlatın:**
   ```bash
   php artisan serve
   ```

---

## Proje Özellikleri ve Yapılanlar

- **Blade Parçalama:**  
  Tüm sayfa bölümleri (`sidebar`, `hero`, `about`, `services`, `booking`, `price-list`, `contact`, `footer`) `resources/views/partials` klasörüne taşındı ve ana sayfa üzerinden `@include` ile çağrıldı. Kod okunabilirliği ve yönetilebilirliği artırıldı.

- **Ana Layout Kullanımı:**  
  `resources/views/layouts/app.blade.php` dosyası ile ortak HTML iskeleti oluşturuldu.

- **Dinamik İçerik Yönetimi:**  
  - Ana sayfa hero bölümü ve "Our Story" (berberler) bölümü veritabanından dinamik olarak çekiliyor.
  - `home_contents` tablosu ile ana sayfa başlık ve açıklamaları yönetiliyor.
  - `stories` tablosu ile berberlerin adı, fotoğrafı, biyografisi ve sosyal medya linkleri yönetiliyor.

- **Rezervasyon (Booking) Sistemi:**  
  - Kullanıcılar, rezervasyon formu ile randevu oluşturabiliyor.
  - Formdan gelen veriler doğrulanıyor ve `bookings` tablosuna kaydediliyor.
  - `BookingController` ile form işlemleri yönetiliyor.

- **Filament Admin Panel:**  
  - Rezervasyonlar, hizmetler, berberler ve ana sayfa içerikleri için CRUD işlemleri yapılabiliyor.
  - Yönetici paneli üzerinden içerik ve rezervasyon yönetimi sağlanıyor.

- **Veritabanı Yapısı:**  
  - `bookings` tablosu: Rezervasyon bilgileri (isim, telefon, tarih, saat, şube, kişi sayısı, yorum).
  - `home_contents` tablosu: Ana sayfa dinamik içerikleri için.
  - `stories` tablosu: Berberler ve hikayeleri için.
  - `services` tablosu: Sunulan hizmetler ve fiyatları için.

- **Route Yönetimi:**  
  - Ana sayfa, rezervasyon işlemleri ve diğer bölümler için gerekli route’lar tanımlandı.

- **Validation ve Güvenlik:**  
  - Formlarda CSRF koruması ve sunucu tarafı doğrulama aktif.

- **Geliştirilebilirlik:**  
  Kod yapısı, yeni özelliklerin (admin paneli, rezervasyon listeleme, e-posta bildirimi, kullanıcı yönetimi vb.) kolayca eklenebileceği şekilde düzenlendi.

---

## Sonraki Adımlar (Öneriler)

- Admin paneli ile rezervasyonları ve içerikleri listeleme ve yönetme
- Rezervasyonlara e-posta bildirimi ekleme
- Kullanıcı kayıt/giriş sistemi
- Responsive ve mobil uyumlu tasarım geliştirmeleri

---

Proje ile ilgili daha fazla bilgi veya katkı için lütfen iletişime geçin.