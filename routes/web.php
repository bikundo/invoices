<?php

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('qqa',function (){
    $client = new \GuzzleHttp\Client(['verify' => false]);
    $response = $client->request('GET', 'http://project.dev/api/user', [
        'headers' => [
            'Accept' => 'application/json',
            'Authorization' => 'Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6ImJiYWYxZmUxYzMyYmQxNmE5ZTk1YzVjNWUyMjlhOTJmOTQ2NTA3ZTIxM2ZlNzU1OWE1MjFkMDRlMzhjZjNmZDhhNzg3OWYzZGJiMTQyODY2In0.eyJhdWQiOiIyIiwianRpIjoiYmJhZjFmZTFjMzJiZDE2YTllOTVjNWM1ZTIyOWE5MmY5NDY1MDdlMjEzZmU3NTU5YTUyMWQwNGUzOGNmM2ZkOGE3ODc5ZjNkYmIxNDI4NjYiLCJpYXQiOjE1Mzk2ODQ3MTYsIm5iZiI6MTUzOTY4NDcxNiwiZXhwIjoxNTcxMjIwNzE2LCJzdWIiOiIiLCJzY29wZXMiOltdfQ.D7ArZqx7G7Vv24XkdbdqPZTDysYTT3io3vx9GRCeEbkMzAVrmqrQlByZ6-Lq7zP-QRuLokUzgcjZz9bAKwZkTyZzY0HFd6iKmcx_t1efNuPL-_87lpZiSWUxbFtpI2uO3iH1kf35q-y7dQMBw4L5yfcpDHZ8QNSvgb33RAiKtYlD634bH4baN0yDSVpGJYvO33OgaIYiZ7z14pcGE0uTq1M_eEQBQpJiyM9PWjFvhKQ03GY7m_CQce4aXVEy3yO9N80mazLDss5Pwd7KJ2mqP8v5S7i7TNPyh18X5i3p-LjQRsj6HAi1HK0FWTHiqbOza5ghK2LJ3lwArVN5ht0buseKz_o8yr9gH6Ea-COZ_FCkM4mPzDuuJCj8Q2VSR3lDSJomN84ADRFQ8299-KSjEXh13T0ho-zHRvC5U_Rm1dqlNA-PMcS0TpFVoOeYzV7r9DYTWqUb_p2DZR4p4BJBgerV-GYroSoqZnWKlx5JETAnKaVdOFzo1dSUdRavm7VqvK7NHw3mUXQQ6C7pBX-zVLPudpcUQoiZ-EVllQ1oQMpAZLuwPgCbqb5FuaOhT2eGd9EfNV8s6NtZ5w0-EBLcZ71aZnuShw3akeolR6bIHXmpd1G1NdbPdWF2Xa1f57sw-BmU3LbLcw-COD2c4OE5FTmLR_2h3CF4SruYWwVocic' ],
    ]);
    dd($response->getReasonPhrase());
});
