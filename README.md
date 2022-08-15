# sacode-phpiii-project06-samuel
Project06 - mysql PHPMyAdmin

### Buat Database
```sql
CREATE DATABASE nama_database;
```

### Hapus Database
```sql
DROP nama_database;
```

### Hapus Table
```sql
DROP nama_table;
```

### Buat Table 
```sql
CREATE TABLE kategori_anggota(
    id int(11) AUTO_INCREMENT PRIMARY KEY,
    kategori VARCHAR (50) NOT NULL
    )
 ```
 ### Insert Table 
 ```sql
 INSERT INTO `kategori_anggota` (`id`, `kategori`) VALUES (NULL, 'Moderator');
  ```

### Ubah Data
```sql
UPDATE `kategori_anggota` WHERE `kategori`='...' 
```

### Hapus Data 
```sql
DELETE FROM kategori_anggota WHERE `kategori_anggota`.`id` = 2
```
