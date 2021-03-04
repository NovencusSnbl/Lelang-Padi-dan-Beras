
CREATE DATABASE /*!32312 IF NOT EXISTS*/ lelang_padi_beras_pa1  /*!40100 DEFAULT CHARACTER SET latin1 */;



USE  lelang_padi_beras_pa1 ;



/*Table structure for table  jenis_padi  */



DROP TABLE IF EXISTS  jenis_padi ;



CREATE TABLE  jenis_padi  (
   id_jenis  int NOT NULL IDENTITY,
   jenis  varchar(50) NOT NULL,
  PRIMARY KEY ( id_jenis )
);



/*Data for the table  jenis_padi  */



insert  into  jenis_padi ( id_jenis , jenis ) values (1,'Padi Lokal'),(2,'Padi Non-Lokal'),(3,'Beras Lokal'),(4,'Beras Non_lokal');



/*Table structure for table  lelang  */



DROP TABLE IF EXISTS  lelang ;



CREATE TABLE  lelang  (
   id_transaksi  int NOT NULL IDENTITY,
   harga  float NOT NULL,
   pelelang  int NOT NULL,
   tanggal_mulai  date NOT NULL,
   penawar  int DEFAULT NULL,
   tanggal_berakhir  date NOT NULL,
   padi  int NOT NULL,
   jumlah_tawar  int DEFAULT 0,
   time_out  tinyint NOT NULL,
   status  tinyint NOT NULL DEFAULT 0,
  PRIMARY KEY ( id_transaksi ));



/*Data for the table  lelang  */



insert  into  lelang ( id_transaksi , harga , pelelang , tanggal_mulai , penawar , tanggal_berakhir , padi , jumlah_tawar , time_out , status ) values (15,378129,4,'2019-05-31',1,'2019-06-03',15,13,0,0),(16,301850,4,'2019-06-01',1,'2019-06-05',16,7,1,0),(27,176000,4,'2019-06-12',1,'2019-06-15',26,1,0,0),(28,275625,4,'2019-06-12',1,'2019-06-15',22,2,0,0);



/*Table structure for table  padi_beras  */



DROP TABLE IF EXISTS  padi_beras ;



CREATE TABLE  padi_beras  (
   id_padi_beras  int NOT NULL IDENTITY,
   nama_padi_beras  varchar(50) NOT NULL,
   harga  float  NOT NULL,
   jenis  int NOT NULL,
   stok  int NOT NULL,
   foto_padi_beras  varchar(50) NOT NULL,
   deskripsi  varchar(500) NOT NULL,
  PRIMARY KEY ( id_padi_beras )
);



/*Data for the table  padi_beras  */



insert  into  padi_beras ( id_padi_beras ,nama_padi_beras ,harga ,jenis ,stok ,foto_padi_beras ,deskripsi ) values (15,'kukubalam',150000,1,1,'blur-close-up-crop-164504.jpg','Beras Murni tampa Penggunaan Pestisida'),(16,'Permaisuri',170000,1,1,'arm-asia-bread-226615.jpg','Tahan lama dan anti kutu'),(22,'Lembang',250000,2,1,'asia-blur-bread-236472.jpg','sangat berkualitas dan tahan kutu'),(24,'aries',210000,3,1,'blur-close-up-crop-164504.jpg','enak'),(25,'pandan wangi',190000,1,1,'blur-close-up-crop-164504.jpg','tidak berbau'),(26,'Serang',160000,1,1,'arm-asia-bread-226615.jpg','harga bersahabat'),(27,'lembang',250000,2,1,'asia-blur-bread-236472.jpg','berkualitas');



/*Table structure for table  role  */



DROP TABLE IF EXISTS  role ;



CREATE TABLE  role  (
   id_role  int NOT NULL IDENTITY,
   role  varchar(20) NOT NULL,
  PRIMARY KEY ( id_role )
);



/*Data for the table  role  */



insert  into  role ( id_role , role ) values (2,'admin'),(3,'penawar');



/*Table structure for table  saran  */



DROP TABLE IF EXISTS  saran ;



CREATE TABLE  saran  (
   idsaran  int NOT NULL IDENTITY,
   nama  varchar(25) NOT NULL,
   deskripsi  varchar(225) NOT NULL,
   email  varchar(45) NOT NULL,
  PRIMARY KEY ( idsaran )
);



/*Data for the table  saran  */



insert  into  saran ( idsaran , nama , deskripsi , email ) values (3,'Ratu Sitorus','saya suka tampilannya, sangat kreatif dan menarik','ratusitorus@gmail.com'),(4,'Yolan Puspita','p','yogilubis@gmail.com'),(5,'Novencus Sinambela','qwe','novencussinambela00@gmail.com');



/*Table structure for table  user  */



DROP TABLE IF EXISTS  user ;



CREATE TABLE  _user  (
   id  int NOT NULL IDENTITY,
   nama  varchar(50) NOT NULL,
   username  varchar(50) NOT NULL,
   password  varchar(50) NOT NULL,
   jenis_kelamin  varchar(50) NOT NULL,
   alamat  varchar(50) NOT NULL,
   role  int NOT NULL DEFAULT 3,
   foto_profil  varchar(100) NOT NULL,
  PRIMARY KEY ( id )
) ;



/*Data for the table  user  */



insert  into  user ( id , nama , username , password , jenis_kelamin , alamat , role , foto_profil ) values (1,'Novencus Sinambela','123','123','Laki-laki','Institut Teknologi Del',3,'Sketch.png'),(2,'Yogi','yogi','123','Laki-laki','Institut Teknologi Del',3,'user.png'),(3,'yolan','yolan1','yolan2','Perempuan','tarutung',3,'user.png'),(4,'admin','admin','kuy','Perempuan','sitorus',2,'user.png'),(5,'ajong','sayang','123','Perempuan','laguboti',3,'user.png'),(6,'yose simamora','katong','123','Laki-laki','Medan',3,'user.png'),(8,'Ginanjar Siagian','gin','123','Laki-laki','Medan',3,'user.png'),(9,'fredrick sulaiman','fd','123','Laki-laki','Medan',3,'user.png'),(10,'yogi septian','yogilubis','123','Laki-laki','siantar',3,'user.png'),(13,'Ginanjar Siagian','1234','123','Laki-laki','Medan',3,'user.png'),(14,'Novencus Sinambela','saya','123','Laki-laki','porsea',3,'user.png'),(15,'Palti Siregar','palti','123','Laki-laki','Sibolga',3,'user.png'),(16,'yogi123','yogi123','123','Laki-laki','siantar',3,'user.png');



/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;

/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;

/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;

/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

