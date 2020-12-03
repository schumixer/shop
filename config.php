<?
$sqlQuiries = ['main'=>"SELECT name, price, image_path  FROM products",
              'women'=>"SELECT name, price, image_path  
                        FROM products join products_categories 
                        on id = productID
                        where categoryid in 
                        (Select id 
                        from categories
                        where name ='women')",
                'men'=>"SELECT name, price, image_path  
                FROM products join products_categories 
                on id = productID
                where categoryid in 
                (Select id 
                from categories
                where name ='men')",
                'children'=>"SELECT name, price, image_path  
                FROM products join products_categories 
                on id = productID
                where categoryid in 
                (Select id 
                from categories
                where name ='children')",
                'accessories'=>"SELECT name, price, image_path  
                FROM products join products_categories 
                on id = productID
                where categoryid in 
                (Select id 
                from categories
                where name ='accessories')",
                
                
];

$mainMenuList = ['Главная'=>'/','Новинки'=>'/new','Sale'=>'/sale','Доставка'=>'/delivery'];