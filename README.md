# Laravel 12 基於使用者興趣的社群網路

使用者加入有興趣的討論版以交流訊息、互相討論，自然而然形成了一個社群，是一個匯聚世界上所有有趣事物的地方。

## 使用方式
- 把整個專案複製一份到你的電腦裡，這裡指的「內容」不是只有檔案，而是指所有整個專案的歷史紀錄、分支、標籤等內容都會複製一份下來。
```sh
$ git clone
```
- 將 __.env.example__ 檔案重新命名成 __.env__，如果應用程式金鑰沒有被設定的話，你的使用者 sessions 和其他加密的資料都是不安全的！
- 當你的專案中已經有 composer.lock，可以直接執行指令以讓 Composer 安裝 composer.lock 中指定的套件及版本。
```sh
$ composer install
```
- 產生 Laravel 要使用的一組 32 字元長度的隨機字串 APP_KEY 並存在 .env 內。
```sh
$ php artisan key:generate
```
- 執行 __Artisan__ 指令的 __migrate__ 來執行所有未完成的遷移，並執行資料庫填充（如果要測試的話）。
```sh
$ php artisan migrate --seed
```
- 執行 __Artisan__ 指令的 __storage:link__ 來建立連結符號，讓公用可存取的檔案維持在一個目錄中。
```sh
$ php artisan storage:link
```
- 執行安裝 Vite 和 Laravel 擴充套件引用的依賴項目。
```sh
$ npm install
```
- 執行正式環境版本化資源管道並編譯。
```sh
$ npm run build
```
- 在瀏覽器中輸入已定義的路由 URL 來訪問，例如：http://127.0.0.1:8000。
- 你可以經由 `/` 來瀏覽社群網路。

----

## 畫面截圖
![](https://i.imgur.com/68WsDKc.png)
> 社群如同一個個緊密的小圈子，他們可以非常友善…或是非常凶狠

![](https://i.imgur.com/kBvEvFO.png)
> 讓你的貼文內容保持創意，有趣的內容才能引起關注

![](https://i.imgur.com/5SLA1mg.gif)
> 投票機制表達討論串價值高低
