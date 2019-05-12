###author:xuyaoxiang

进度:文章详情页

laravel5.7

推荐php7.3

安装命令,请先安装composer,在项目根目录
````
composer install
````
生成key
````
php artisan key:generate;
````
数据迁移
````
php artisan migrate
````
更改存储文件目录权限
````
chmod -R 777 /storage /bootstrap/cache
````

还需要安装一下php的扩展和伪静态功能;



