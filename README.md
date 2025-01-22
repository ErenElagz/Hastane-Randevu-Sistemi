# Hastane Randevu Otomasyonu
Bu proje, bir hastane randevu yönetim sistemi geliştirmek için hazırlanmıştır. Kullanıcıların giriş yapabileceği, hasta ekleyip çıkarabileceği ve güncelleyebileceği temel bir PHP tabanlı uygulamadır. Veritabanı bağlantısı ve temel işlevler entegre edilmiştir. 

---

## Proje Özellikleri

### Kullanıcı Giriş Sayfası
- **index.php**'yi çalıştırdığınızda bir giriş sayfası ile karşılaşırsınız.
- Kullanıcı adı ve şifreyle sisteme giriş yapılabilir.

### Hasta Yönetimi
- Yeni hasta eklenebilir.
- Mevcut hastalar silinebilir.
- Hasta bilgileri düzenlenebilir (update.php üzerinden).

### Dinamik Veritabanı Entegrasyonu
- **SQL tabanlı veritabanı** kullanılarak hasta bilgileri saklanır.
- Hasta ekleme, silme ve güncelleme işlemleri doğrudan veritabanına yansır.

---

## Kurulum Kılavuzu

### 1. Veritabanı Hazırlığı
1. **MySQL** kullanarak bir veritabanı oluşturun:
   - Veritabanı adı: `hastane`
2. Aşağıdaki iki tabloyu oluşturun:

```sql
-- Veritabanı oluşturma
CREATE DATABASE hastane;

-- Veritabanını kullanma
USE hastane;

-- Randevu tablosu oluşturma
CREATE TABLE randevu (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255),
    surname VARCHAR(255),
    tc VARCHAR(255),
    city VARCHAR(255),
    department VARCHAR(255),
    date VARCHAR(255)
);

-- Kullanıcılar tablosu oluşturma
CREATE TABLE kullanıcılar (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255),
    password VARCHAR(255)
);

-- Kullanıcılar tablosuna veri ekleme
INSERT INTO kullanıcılar (id, name, password) VALUES 
(1, 'Eren', '123');
```

3. Gerekli tabloları oluşturmak için proje klasöründe yer alan **SQL dosyasını** da kullanabilirsiniz.

### 2. Projeyi Çalıştırma
- PHP sunucusunda projeyi çalıştırın.
- Tarayıcınızda **index.php** dosyasını açın.
- Giriş yaptıktan sonra hasta yönetimi sayfasına erişebilirsiniz.

---

## Kullanım

### Hasta Ekleme
1. Form alanlarına hasta bilgilerini girin (ad, yaş, adres, telefon).
2. **"Ekle"** butonuna tıklayın.
3. Yeni hasta listeye eklenir ve sayfa otomatik olarak yenilenir.

### Hasta Silme
1. Listede her hastanın yanında bir **"Sil"** butonu bulunur.
2. **Sil** butonuna tıklayarak hastayı kaldırabilirsiniz.

### Hasta Güncelleme
1. Her hastanın yanında bir **"Güncelle"** butonu bulunur.
2. **Güncelle** butonuna tıkladığınızda, **update.php** sayfasına yönlendirilirsiniz.
3. Burada hasta bilgilerini düzenleyebilirsiniz.

---

## Kullanılan Teknolojiler
1. **HTML**: Sayfa yapısını oluşturmak için kullanıldı.
2. **CSS (Bootstrap)**: Responsive tasarım ve modern görünüm için.
3. **JavaScript**: Dinamik özellikler için birkaç satır kod yazıldı.
4. **PHP**: Sunucu tarafı programlama ve veritabanı işlemleri için.
5. **SQL**: Veritabanı sorguları ve yönetimi için.

---

## Ekran Görüntüleri

### Giriş Sayfası
Hastane Randevu Otomasyonu'nun giriş ekranı modern ve kullanıcı dostudur. 
![Giriş Sayfası](https://github.com/ErenElagz/Hastane-Randevu-Sistemi/assets/125195062/13b551e5-4902-4342-81c5-b9ab23ce47b3)

### Hasta Yönetim Paneli
Sisteme giriş yaptıktan sonra, hastaları görüntüleyebileceğiniz, ekleyebileceğiniz, silebileceğiniz ve güncelleyebileceğiniz bir panel sunulur.
![Hasta Yönetim Paneli](https://github.com/ErenElagz/Hastane-Randevu-Sistemi/assets/125195062/f7fcc7b3-58d6-434d-9468-e269cbc43bf1)

### Hasta Güncelleme Sayfası
Hasta bilgilerini düzenlemek için özel bir form ekranı bulunmaktadır.
![Hasta Güncelleme](https://github.com/ErenElagz/Hastane-Randevu-Sistemi/assets/125195062/f67189f8-2328-421a-8609-8a6536d6e584)

### Mobil Uyumlu Tasarım
Bootstrap sayesinde her ekran boyutunda kolay kullanım sunar.
![Mobil Görünüm](https://github.com/ErenElagz/Hastane-Randevu-Sistemi/assets/125195062/62cfe67e-f0df-4a6e-875a-95976bbf22db)

---

## Lisans ve Güncellemeler
Bu proje, bir dönem sonu projesi olarak geliştirilmiştir. Herkes projeyi indirip istediği gibi güncelleyebilir veya kullanabilir. Geliştirici, projeyi güncelleyerek daha fazla özellik eklemeyi planlamaktadır. Projenin güncellemelerini takip etmek için [GitHub](https://github.com/ErenElagz/Hastane-Randevu-Sistemi) sayfasını ziyaret edebilirsiniz.

> **İyi Çalışmalar!** ❤️

