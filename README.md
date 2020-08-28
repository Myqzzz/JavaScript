# JavaScript（Js基础end）

## 什么是JavaScript

- JavaScript 是一种轻量级的编程语言。
- JavaScript 是可插入 HTML 页面的编程代码。
- JavaScript 插入 HTML 页面后，可由所有的现代浏览器执行。

## JavaScript用途

1. HTML 定义了网页的内容
2. CSS 描述了网页的布局
3. JavaScript 网页的行为

> 脚本放置于 <head> 或者 <body>中，放在 <script> 标签中的脚本与外部引用的脚本运行效果完全一致

## JavaScript 显示数据

- 使用 **window.alert()** 弹出警告框。
- 使用 **document.write()** 方法将内容写到 HTML 文档中。
- 使用 **innerHTML** 写入到 HTML 元素。
- 使用 **console.log()** 写入到浏览器的控制台。

## JavaScript 作用域

- 变量在函数内声明，变量为局部作用域。
- 变量在函数外定义，即为全局变量。
- 变量在函数内没有声明（没有使用 var 关键字），该变量为全局变量

> null是一个只有一个值的特殊类型。表示一个空对象引用。

```javascript
typeof undefined             // undefined
typeof null                  // object
null === undefined           // false
null == undefined            // true
```

```javascript
5 + null    // 返回 5         null 转换为 0
"5" + null  // 返回"5null"   null 转换为 "null"
"5" + 1     // 返回 "51"      1 转换为 "1"  
"5" - 1     // 返回 4         "5" 转换为 5
```

## 正则表达式

**search() 方法** 用于检索字符串中指定的子字符串，或检索与正则表达式相匹配的子字符串，并返回子串的起始位置。

**replace() 方法** 用于在字符串中用一些字符替换另一些字符，或替换一个与正则表达式匹配的子串。

**test() 方法**用于检测一个字符串是否匹配某个模式，如果字符串中含有匹配的文本，则返回 true，否则返回 false。

### 正则表达式修饰符

**修饰符** 可以在全局搜索中不区分大小写:

| 修饰符 | 描述                                                     |
| :----- | :------------------------------------------------------- |
| i      | 执行对大小写不敏感的匹配。                               |
| g      | 执行全局匹配（查找所有匹配而非在找到第一个匹配后停止）。 |
| m      | 执行多行匹配。                                           |

------

### 正则表达式模式

方括号用于查找某个范围内的字符：

| 表达式 | 描述                       |
| :----- | :------------------------- |
| [abc]  | 查找方括号之间的任何字符。 |
| [0-9]  | 查找任何从 0 至 9 的数字。 |
| (x\|y) | 查找任何以 \| 分隔的选项。 |

元字符是拥有特殊含义的字符：

| 元字符 | 描述                                        |
| :----- | :------------------------------------------ |
| \d     | 查找数字。                                  |
| \s     | 查找空白字符。                              |
| \b     | 匹配单词边界。                              |
| \uxxxx | 查找以十六进制数 xxxx 规定的 Unicode 字符。 |

量词:

| 量词 | 描述                                  |
| :--- | :------------------------------------ |
| n+   | 匹配任何包含至少一个 *n* 的字符串。   |
| n*   | 匹配任何包含零个或多个 *n* 的字符串。 |
| n?   | 匹配任何包含零个或一个 *n* 的字符串。 |

## JavaScript异常

**try** 语句测试代码块的错误。

**catch** 语句处理错误。

**throw** 语句创建自定义错误。

**finally** 语句在 try 和 catch 语句之后，无论是否有触发异常，该语句都会执行。

## JavaScript变量

JavaScript 中，函数及变量的声明都将被提升到函数的最顶部。

JavaScript 中，变量可以在使用后声明，也就是变量可以先使用再声明。

JavaScript 只有声明的变量会提升，初始化的不会。



为什么使用严格模式:

- 消除Javascript语法的一些不合理、不严谨之处，减少一些怪异行为;

- 消除代码运行的一些不安全之处，保证代码运行的安全；
- 提高编译器效率，增加运行速度；
- 为未来新版本的Javascript做好铺垫。

> switch 语句会使用恒等计算符(===)进行比较

## JavaScript全局函数

### parseFloat

**parseFloat()** 函数可解析一个字符串，并返回一个浮点数。

- 字符串中只返回第一个数字。

- 开头和结尾的空格是允许的。

- 如果字符串的第一个字符不能被转换为数字，那么 parseFloat() 会返回 NaN。

  ```javascript
  document.write(parseFloat("10") + "<br>");
  document.write(parseFloat("10.33") + "<br>");
  document.write(parseFloat("34 45 66") + "<br>");
  document.write(parseFloat(" 60 ") + "<br>");
  document.write(parseFloat("40 years") + "<br>");
  document.write(parseFloat("He was 40") + "<br>");
  
  10
  10.33
  34
  60
  40
  NaN
  ```

### isFinite

**isFinite()** 函数用于检查其参数是否是无穷大。

-  number 是 NaN（非数字），或者是正、负无穷大的数，则返回 false

```javascript
document.write(isFinite(123)+ "<br>");
document.write(isFinite(-1.23)+ "<br>");
document.write(isFinite(5-2)+ "<br>");
document.write(isFinite(0)+ "<br>");
document.write(isFinite("Hello")+ "<br>");
document.write(isFinite("2005/12/12")+ "<br>");

true
true
true
true
false
false
```

## JavaScript this关键字

面向对象语言中 this 表示当前对象的一个引用。

 JavaScript 中 this **不是固定不变的**，它会随着执行环境的改变而改变。

- 方法，this 表示该方法所属的对象。
- 单独使用，this 表示全局对象。
- 函数，this 表示全局对象。
- 函数，在严格模式下，this 是未定义的(undefined)。
- 事件，this 表示接收事件的元素。
- 类似 call() 和 apply() 方法可以将 this 引用到任何对象。

### var 和 let

- var不具备块级作用域， {} 外能被访问。

  let在 let 命令代码块 **{}** 有效，在 **{}** 之外不能访问。（ES6）

- 函数体或代码块外，作用域都是全局

- html代码，var全局作用域window对象，let不属于window对象

- **let var重置变量**

  -  **var** 关键字声明的变量在任何地方都可以修改
  - 相同作用域或块级作用域，不能用 **let** 关键字来重置 **var** 关键字声明的变量
  - 相同作用域或块级作用域，不能用 **let** 关键字来重置 **let** 关键字声明的变量:
  - 相同作用域或块级作用域，不能用 **var** 关键字来重置 **let** 关键字声明的变量
  - **let** 关键字在不同作用域，或不同块级作用域中是**可以重新声明**赋值

- **let var变量提升**

  - **var 关键字**定义的变量可以**先使用再声明**
  - l**et 关键字**定义的变量**需要先声明再使用**

- **const 重置变量**

  - 在相同的作用域或块级作用域中，不能使用 **const** 关键字来重置 **var** 和 **let**关键字声明的变量:
  - 在相同的作用域或块级作用域中，不能使用 **const** 关键字来重置 **const** 关键字声明的变量:
  - **const** 关键字在不同作用域，或不同块级作用域中是可以重新声明赋值的

- **const变量提升**

  - **const 关键字**定义的变量**需要先声明再使用**。



## JavaScript void

### href="#"与href="javascript:void(0)"的区别

- **#** 包含了一个位置信息，默认的锚是**#top** 也就是网页的上端

  使用 **#** 来定位页面的具体位置，格式为：**# + id**

- 死链接javascript:void(0)

  - 操作符指定要计算一个表达式但是不返回值

```javascript
<a href="javascript:void(alert('Warning!!!'))">点我!</a>

<a href="javascript:void(0);">点我没有反应的!</a>
<a href="#pos">点我定位到指定位置!</a>
<p id="pos">尾部定位点</p>
```

## JavaScript 异步编程

同步按你的代码顺序执行，异步不按照代码顺序执行，异步的执行效果更高

# JSON

JSON 是用于存储和传输数据的格式。

JSON 通常用于服务端向网页传递数据 。

## 什么是JSON

- JSON 英文全称 **J**ava**S**cript **O**bject **N**otation
- JSON 是一种轻量级的数据交换格式。
- JSON是独立的语言 *****
- JSON 易于理解。

## 为什么使用JSON

#### 使用 XML

- 读取 XML 文档
- 使用 XML DOM 来循环遍历文档
- 读取值并存储在变量中

#### 使用 JSON

- 读取 JSON 字符串
- 用 eval() 处理 JSON 字符串

## 与XML异同

### **同**

- JSON 和 XML 数据都是 "自我描述" ，都易于理解。
- JSON 和 XML 数据都是有层次的结构
- JSON 和 XML 数据可以被大多数编程语言使用

### **异**

- JSON 不需要结束标签
- JSON 更加简短
- JSON 读写速度更快
- JSON 可以使用数组

> **最大的不同是**：XML 需要使用 XML 解析器来解析，JSON 可以使用标准的 JavaScript 函数来解析
>
> **JSON.parse()** ：字符串转换为 JavaScript 对象
>
> **JSON.stringify()**：将 JavaScript 值转换为 JSON 字符串。

##  JSON语法规则

- 数据为 键/值 对。
- 数据由逗号分隔。
- 大括号保存对象
- 方括号保存数组



# AJAX

## 什么是AJAX

- AJAX = 异步 JavaScript 和 XML（ Asynchronous JavaScript and XML
- AJAX 是一种用于创建快速动态网页的技术。
- 通过在后台与服务器进行少量数据交换，AJAX 可以使网页实现异步更新。这意味着可以在不重新加载整个网页的情况下，对网页的某部分进行更新。
- 传统的网页（不使用 AJAX）如果需要更新内容，必需重载整个网页面。

## AJAX运用

- 运用XHTML+CSS来表达资讯；
- 运用JavaScript操作DOM（Document Object Model）来执行动态效果；
- 运用XML和XSLT操作资料;
- 运用XMLHttpRequest或新的Fetchasync：true（异步）或 false（同步） API与网页服务器进行异步资料交换；
- 注意：AJAX与Flash、Silverlight和Java Applet等RIA技术是有区分的。

## AJAX实践

- **创建 XMLHttpRequest 对象**
  -  所有现代浏览器（IE7+、Firefox、Chrome、Safari 以及 Opera）均内建 XMLHttpRequest 对象
  - 老版本的 Internet Explorer （IE5 和 IE6）使用 ActiveX 对象
- **向服务器发送请求**
  - 使用 XMLHttpRequest 对象的 open() 和 send() 方法
    - **open(method,url,async)**	规定请求的类型、URL 以及是否异步处理请求。
      - ***method***：请求的类型（GET 或 POST）
      - ***url***：文件在服务器上的位置
      - ***async***：true（异步）或 false（同步）
    - **send(string)**	将请求发送到服务器。
      - ***string***：仅用于POST请求
- **服务器响应**
  - **responseText**：获取字符串形式的响应数据
  - **responseXML**：获取XML形式的响应数据
  - **XMLHttpRequest** 对象的三个重要的属性
    - ***onreadystatechange***
      - 存储函数，**readyState**属性改变，调用该函数
    - ***readyState***
      - 0：请求未初始化
      - 1：服务器连接已建立
      - 2：请求已接受
      - 3：请求处理中
      - 4：请求已完成，响应已就绪
    - ***status***
      - 200：“OK”
      - 404：未找到页面

## GET 还是 POST？

与 POST 相比，**GET 更简单也更快**，在**大部分情况下都能用**。

在以下情况中，请使用 POST 请求：

- 无法使用缓存文件（更新服务器上的文件或数据库）

- 向服务器发送大量数据（POST没有数据量限制）

- 发送包含未知字符的用户输入时，POST 比 GET 更稳定也更可靠

**setRequestHeader(header,value)**	向请求添加 HTTP 头。

- ***header***: 规定头的名称
- ***value***: 规定头的值

# jQuery

## 什么是jQuery

jQuery是一个JavaScript函数库。

jQuery是一个轻量级的"写的少，做的多"的JavaScript库。

jQuery库包含以下功能：

- HTML 元素选取
- HTML 元素操作
- CSS 操作
- HTML 事件函数
- JavaScript 特效和动画
- HTML DOM 遍历和修改
- AJAX
- Utilities

## jQuery语法

jQuery 语法是通过选取 HTML 元素，并对选取的元素执行某些操作。

基础语法： **$(selector).action()**

- 美元符号定义 jQuery
- 选择符（selector）"查询"和"查找" HTML 元素
- jQuery 的 action() 执行对元素的操作

实例:

- **$(this).hide()** - 隐藏当前元素
- **$("p").hide()** - 隐藏所有 <p> 元素
- **$("p.test").hide()** - 隐藏所有 class="test" 的 <p> 元素
- **$("#test").hide()** - 隐藏 id="test" 的元素

# jQuery事件

页面对不同访问者的响应叫做事件。

事件处理程序指的是当 HTML 中发生某些事件时所调用的方法。

| 鼠标事件                                                     | 键盘事件                                                     | 表单事件                                                  | 文档/窗口事件                                             |
| :----------------------------------------------------------- | :----------------------------------------------------------- | :-------------------------------------------------------- | :-------------------------------------------------------- |
| [click](https://www.runoob.com/jquery/event-click.html)      | [keypress](https://www.runoob.com/jquery/event-keypress.html) | [submit](https://www.runoob.com/jquery/event-submit.html) | [load](https://www.runoob.com/jquery/event-load.html)     |
| [dblclick](https://www.runoob.com/jquery/event-dblclick.html) | [keydown](https://www.runoob.com/jquery/event-keydown.html)  | [change](https://www.runoob.com/jquery/event-change.html) | [resize](https://www.runoob.com/jquery/event-resize.html) |
| [mouseenter](https://www.runoob.com/jquery/event-mouseenter.html) | [keyup](https://www.runoob.com/jquery/event-keyup.html)      | [focus](https://www.runoob.com/jquery/event-focus.html)   | [scroll](https://www.runoob.com/jquery/event-scroll.html) |
| [mouseleave](https://www.runoob.com/jquery/event-mouseleave.html) |                                                              | [blur](https://www.runoob.com/jquery/event-blur.html)     | [unload](https://www.runoob.com/jquery/event-unload.html) |
| [hover](https://www.runoob.com/jquery/event-hover.html)      |                                                              |                                                           |                                                           |