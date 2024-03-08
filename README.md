## This is a demo project
## Developed By: Mahendra Kumar mourya
This project having categories, product, ajax user login function
And also have api that is use for getting all type of products and it is work with filter(price range and category name)

#api detail:
url:    http://127.0.0.1:8000/api/get-products <br>
type:   post<br>
post-fields<br>
        price_start:300<br>
        price_end:300<br>
        category:womens<br>

#How run project in local
1. run the below git command<br>
   git clone https://github.com/mahendramourya/img-global.git
2. composer update
3. php artisan migrate:fresh --seed
4. php artisan serve

This open url in browser:
http://127.0.0.1:8000/login


       
