use student_space;
drop table orders1;
drop table product;
drop table customer;
drop table registration;

CREATE TABLE product 
        (item_no   numeric(4) not null            ,
         ebook_name   varchar(30)not null           ,
         price             numeric(9,2)not null           , 
        inventory    numeric(5)  not null        
     	);
 	
 
		
CREATE TABLE customer 
        (cc_no     numeric(16)                           ,
exp_mo   numeric(2)  not null                            ,
exp_yr      numeric(4)  not null                         ,
name_first               varchar(20)  not null           ,
name_last                varchar(20)  not null           ,
email                       varchar(20) not null         ,
address1                  varchar(50)  not null          ,
address2                  varchar(50)                    ,
city                          varchar(20)  not null      ,
state                         varchar(2)  not null       ,
zip                           numeric(5)  not null       ,
country                    varchar(20)                   ,
phone                    varchar(15)  not null           ,
fax                         varchar(15)  not null        ,
mail_list                numeric(1)  
		)
        ;	
		
CREATE TABLE orders1  
        ( 
		date_sold    date   ,
        cc_no NUMERIC(16),
         item_no NUMERIC(4),
          uantity NUMERIC     
	   	   
	   )
	   ;
	   
CREATE TABLE registration   
        ( username 	varchar(16)     ,
		password 	varbinary(16) not null    ,
		email 		varchar(50) not null     
 	   );
	   
 alter table product
 add constraint product_item_no_pk primary key(item_no);
 
 
  alter table customer
 add constraint customer_cc_no_pk primary key(cc_no); 
  
 
 alter table orders1
 add constraint orders1_date_sold_cc_no_item_no_pk primary key(date_sold,cc_no,item_no);
 
 alter table registration
 add constraint registration_username_pk primary key(username);
 
 
 alter table orders1
 add constraint orders1_cc_no_fk foreign key(cc_no)
 references customer(cc_no);
 
  alter table orders1
 add constraint orders1_item_no_fk foreign key(item_no)
 references product(item_no);
 
 
 ALTER TABLE customer
ADD CONSTRAINT chk_mail_list CHECK (mail_list IN (0, 1));
commit;

insert into product	values(0,'Daniel Plan ',2.99,5);
insert into product	values(1,'Soul Healing ',1.99,5);
insert into product	values(2,'Wheat Belly ',0.99,5);	
insert into product	values(3,'Exercise Cure ',1.99,5);


insert into product	values(4,'What To Expect',3.99,5);	
insert into product	values(5,'The First Year',1.99,5);	
insert into product	values(6,'Hands Free Mama',1.99,5);	
insert into product	values(7,'Talk to Kids',2.99,5);	

commit;