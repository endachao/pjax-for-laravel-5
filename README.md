在 Laravel 5.* 的版本中，使用 Pjax 实现无刷新效果，以及酷炫的进度条



# 效果

<img src="http://www.phpyc.com/images/pjax.jpg"  align=center />


# 安装

1.在 `composer.json` 的 require里 加入

```
"yuanchao/pjax-for-laravel-5": "dev-master"

```

2.执行 `composer update`


3.在config/app.php 的 `providers` 数组加入一条

```
YuanChao\Pjax\EndaPjaxServiceProvider::class
```

4.在 `Kernel` 的 `$middleware` 数组里添加
```

\YuanChao\Pjax\EndaPjaxMiddleware::class,

```

5.执行 `php artisan vendor:publish`

# 使用


在`布局`文件中，插入以下代码

```

@include('pjax::pjax')


```

# 最后


`求 star`

`求 star`

`求 star`

欢迎加入laravel学习小组交流：`365969825 `

