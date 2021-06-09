## 系統需求
- 安裝 nodejs，安裝後即可使用 npm 指令


## 套件說明
- webpack
    - 打包 JS, CSS, 圖片的套件
- laravel-mix
    - 由於 webpack 的設定檔過於繁雜，laravel-mix 透過本身簡單的 api 來呼叫 webpack 進行打包


## 檔案說明
- package.json
    - 記錄專案名稱、版本、用到的套件
    - `scripts` 區塊
        - 當使用 `npm run xxx` 時，即會執行此區塊的相對應指令
        - 如 `npm run dev` 即會執行 `npm run development`
        - 如 `npm run prod` 即會執行 `npm run production`
    - `dependencies` 區塊
    - `devDependencies` 區塊
        - 因為使用 webpack 打包的關係，所以將所有會用到的套件名稱都放在此
- package-lock.json
    - 自動產生，記錄每個套件的相依套件，可以不用理會
- webpack.mix.js
    - laravel-mix 設定檔
    - 告知 laravel-mix javascript 及 css 的進入點位在何處，及打包後的檔案放至何處
- mix-manifest.json
    - 自動產生，記錄著打包後每個檔案的 hash 值


## 常用指令
- `npm install`
    - 當你的專案目錄底下沒有 `node_modules` 時執行
    - 將 package.json 中的 dependencies, devDependencies 所指定的套件安裝至專案目錄的 `node_modules` 中
- `npm install jquery@1.12.4 --save-dev`
    - 安裝指定版本的套件
- `npm install jquery --save-dev`
    - 安裝最新穩定版本套件
- `npm uninstall jquery`
    - 移除套件
- 當安裝或移除套件後，package.json 中的 dependencies, devDependencies 套件清單也會同時更新


## 打包、編譯
- `npm run dev`
    - 會保留原始結構(換行、空格)、變數名稱、除錯模式 (開發用)
    - 有些套件有除錯模式，如vue，在此打包方式下才能搭配 vue tool 除錯
- `npm run prod`
    - 會壓縮程式碼(去除換行、空格、註解)、最小化變數名稱、移除除錯模式 (Production 用)
- `npm run watch`
    - 偵測到進入點檔案有變更時，自動進行打包動作


## 使用流程
### 新專案
- 在專案底下建立
    - resources/js/app.js
        - 使用 `require()` 引用會用到的套件名稱
        - 只要名稱就好，不用路徑
        - 如 `window.$ = require('jquery')`
        - 如 `window.moment = require('moment')`
    - resources/sass/app.scss
        - 使用 `@import` 引用套件的CSS;
        - 至 `node_modules` 中找你要引用套件的 SCSS 或 CSS 檔路徑
        - 副檔名如為 scss 可以不用寫進去
        - 如 `@import '~bootstrap/scss/bootstrap';`
        - 如 `@import '~@fortawesome/fontawesome-free/scss/fontawesome';`
        - 如 `@import '~animate.css/animate.min.css';`
    - package.json
        - 只要更改 `name`, `version` (只要設定一次，隨便設定即可)，其他設定值不變
    - webpack.mix.js
        - 目前設定 js 進入點為 `resources/js/app.js`, 打包後輸出至專案目錄的 `/js/app.js`
        - 目前設定 sass 進入點為 `resources/sass/app.scss`, 打包後輸出至專案目錄的 `/css/app.css`
        - 只要變更這兩個，其餘保留
        - 更多使用設定可以參考 https://laravel-mix.com/docs/6.0/examples
    - `npm install`
    - `npm run dev` 或 `npm run prod`
    - 即可在網頁看到結果

### 增加套件
- `npm install jquery --save-dev`
- 至 `resources/js/app.js` require 該套件
- `npm run dev` 或 `npm run prod`
- 即可使用該套件
