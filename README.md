# JavaScript��Js����end��

## ʲô��JavaScript

- JavaScript ��һ���������ı�����ԡ�
- JavaScript �ǿɲ��� HTML ҳ��ı�̴��롣
- JavaScript ���� HTML ҳ��󣬿������е��ִ������ִ�С�

## JavaScript��;

1. HTML ��������ҳ������
2. CSS ��������ҳ�Ĳ���
3. JavaScript ��ҳ����Ϊ

> �ű������� <head> ���� <body>�У����� <script> ��ǩ�еĽű����ⲿ���õĽű�����Ч����ȫһ��

## JavaScript ��ʾ����

- ʹ�� **window.alert()** ���������
- ʹ�� **document.write()** ����������д�� HTML �ĵ��С�
- ʹ�� **innerHTML** д�뵽 HTML Ԫ�ء�
- ʹ�� **console.log()** д�뵽������Ŀ���̨��

## JavaScript ������

- �����ں���������������Ϊ�ֲ�������
- �����ں����ⶨ�壬��Ϊȫ�ֱ�����
- �����ں�����û��������û��ʹ�� var �ؼ��֣����ñ���Ϊȫ�ֱ���

> null��һ��ֻ��һ��ֵ���������͡���ʾһ���ն������á�

```javascript
typeof undefined             // undefined
typeof null                  // object
null === undefined           // false
null == undefined            // true
```

```javascript
5 + null    // ���� 5         null ת��Ϊ 0
"5" + null  // ����"5null"   null ת��Ϊ "null"
"5" + 1     // ���� "51"      1 ת��Ϊ "1"  
"5" - 1     // ���� 4         "5" ת��Ϊ 5
```

## ������ʽ

**search() ����** ���ڼ����ַ�����ָ�������ַ������������������ʽ��ƥ������ַ������������Ӵ�����ʼλ�á�

**replace() ����** �������ַ�������һЩ�ַ��滻��һЩ�ַ������滻һ����������ʽƥ����Ӵ���

**test() ����**���ڼ��һ���ַ����Ƿ�ƥ��ĳ��ģʽ������ַ����к���ƥ����ı����򷵻� true�����򷵻� false��

### ������ʽ���η�

**���η�** ������ȫ�������в����ִ�Сд:

| ���η� | ����                                                     |
| :----- | :------------------------------------------------------- |
| i      | ִ�жԴ�Сд�����е�ƥ�䡣                               |
| g      | ִ��ȫ��ƥ�䣨��������ƥ��������ҵ���һ��ƥ���ֹͣ���� |
| m      | ִ�ж���ƥ�䡣                                           |

------

### ������ʽģʽ

���������ڲ���ĳ����Χ�ڵ��ַ���

| ���ʽ | ����                       |
| :----- | :------------------------- |
| [abc]  | ���ҷ�����֮����κ��ַ��� |
| [0-9]  | �����κδ� 0 �� 9 �����֡� |
| (x\|y) | �����κ��� \| �ָ���ѡ� |

Ԫ�ַ���ӵ�����⺬����ַ���

| Ԫ�ַ� | ����                                        |
| :----- | :------------------------------------------ |
| \d     | �������֡�                                  |
| \s     | ���ҿհ��ַ���                              |
| \b     | ƥ�䵥�ʱ߽硣                              |
| \uxxxx | ������ʮ�������� xxxx �涨�� Unicode �ַ��� |

����:

| ���� | ����                                  |
| :--- | :------------------------------------ |
| n+   | ƥ���κΰ�������һ�� *n* ���ַ�����   |
| n*   | ƥ���κΰ���������� *n* ���ַ����� |
| n?   | ƥ���κΰ��������һ�� *n* ���ַ����� |

## JavaScript�쳣

**try** �����Դ����Ĵ���

**catch** ��䴦�����

**throw** ��䴴���Զ������

**finally** ����� try �� catch ���֮�������Ƿ��д����쳣������䶼��ִ�С�

## JavaScript����

JavaScript �У����������������������������������������

JavaScript �У�����������ʹ�ú�������Ҳ���Ǳ���������ʹ����������

JavaScript ֻ�������ı�������������ʼ���Ĳ��ᡣ



Ϊʲôʹ���ϸ�ģʽ:

- ����Javascript�﷨��һЩ���������Ͻ�֮��������һЩ������Ϊ;

- �����������е�һЩ����ȫ֮������֤�������еİ�ȫ��
- ��߱�����Ч�ʣ����������ٶȣ�
- Ϊδ���°汾��Javascript�����̵档

> switch ����ʹ�ú�ȼ����(===)���бȽ�

## JavaScriptȫ�ֺ���

### parseFloat

**parseFloat()** �����ɽ���һ���ַ�����������һ����������

- �ַ�����ֻ���ص�һ�����֡�

- ��ͷ�ͽ�β�Ŀո�������ġ�

- ����ַ����ĵ�һ���ַ����ܱ�ת��Ϊ���֣���ô parseFloat() �᷵�� NaN��

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

**isFinite()** �������ڼ��������Ƿ��������

-  number �� NaN�������֣��������������������������򷵻� false

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

## JavaScript this�ؼ���

������������� this ��ʾ��ǰ�����һ�����á�

 JavaScript �� this **���ǹ̶������**����������ִ�л����ĸı���ı䡣

- ������this ��ʾ�÷��������Ķ���
- ����ʹ�ã�this ��ʾȫ�ֶ���
- ������this ��ʾȫ�ֶ���
- ���������ϸ�ģʽ�£�this ��δ�����(undefined)��
- �¼���this ��ʾ�����¼���Ԫ�ء�
- ���� call() �� apply() �������Խ� this ���õ��κζ���

### var �� let

- var���߱��鼶������ {} ���ܱ����ʡ�

  let�� let �������� **{}** ��Ч���� **{}** ֮�ⲻ�ܷ��ʡ���ES6��

- ������������⣬��������ȫ��

- html���룬varȫ��������window����let������window����

- **let var���ñ���**

  -  **var** �ؼ��������ı������κεط��������޸�
  - ��ͬ�������鼶�����򣬲����� **let** �ؼ��������� **var** �ؼ��������ı���
  - ��ͬ�������鼶�����򣬲����� **let** �ؼ��������� **let** �ؼ��������ı���:
  - ��ͬ�������鼶�����򣬲����� **var** �ؼ��������� **let** �ؼ��������ı���
  - **let** �ؼ����ڲ�ͬ�����򣬻�ͬ�鼶����������**������������**��ֵ

- **let var��������**

  - **var �ؼ���**����ı�������**��ʹ��������**
  - l**et �ؼ���**����ı���**��Ҫ��������ʹ��**

- **const ���ñ���**

  - ����ͬ���������鼶�������У�����ʹ�� **const** �ؼ��������� **var** �� **let**�ؼ��������ı���:
  - ����ͬ���������鼶�������У�����ʹ�� **const** �ؼ��������� **const** �ؼ��������ı���:
  - **const** �ؼ����ڲ�ͬ�����򣬻�ͬ�鼶���������ǿ�������������ֵ��

- **const��������**

  - **const �ؼ���**����ı���**��Ҫ��������ʹ��**��



## JavaScript void

### href="#"��href="javascript:void(0)"������

- **#** ������һ��λ����Ϣ��Ĭ�ϵ�ê��**#top** Ҳ������ҳ���϶�

  ʹ�� **#** ����λҳ��ľ���λ�ã���ʽΪ��**# + id**

- ������javascript:void(0)

  - ������ָ��Ҫ����һ�����ʽ���ǲ�����ֵ

```javascript
<a href="javascript:void(alert('Warning!!!'))">����!</a>

<a href="javascript:void(0);">����û�з�Ӧ��!</a>
<a href="#pos">���Ҷ�λ��ָ��λ��!</a>
<p id="pos">β����λ��</p>
```

## JavaScript �첽���

ͬ������Ĵ���˳��ִ�У��첽�����մ���˳��ִ�У��첽��ִ��Ч������

# JSON

JSON �����ڴ洢�ʹ������ݵĸ�ʽ��

JSON ͨ�����ڷ��������ҳ�������� ��

## ʲô��JSON

- JSON Ӣ��ȫ�� **J**ava**S**cript **O**bject **N**otation
- JSON ��һ�������������ݽ�����ʽ��
- JSON�Ƕ��������� *****
- JSON ������⡣

## Ϊʲôʹ��JSON

#### ʹ�� XML

- ��ȡ XML �ĵ�
- ʹ�� XML DOM ��ѭ�������ĵ�
- ��ȡֵ���洢�ڱ�����

#### ʹ�� JSON

- ��ȡ JSON �ַ���
- �� eval() ���� JSON �ַ���

## ��XML��ͬ

### **ͬ**

- JSON �� XML ���ݶ��� "��������" ����������⡣
- JSON �� XML ���ݶ����в�εĽṹ
- JSON �� XML ���ݿ��Ա�������������ʹ��

### **��**

- JSON ����Ҫ������ǩ
- JSON ���Ӽ��
- JSON ��д�ٶȸ���
- JSON ����ʹ������

> **���Ĳ�ͬ��**��XML ��Ҫʹ�� XML ��������������JSON ����ʹ�ñ�׼�� JavaScript ����������
>
> **JSON.parse()** ���ַ���ת��Ϊ JavaScript ����
>
> **JSON.stringify()**���� JavaScript ֵת��Ϊ JSON �ַ�����

##  JSON�﷨����

- ����Ϊ ��/ֵ �ԡ�
- �����ɶ��ŷָ���
- �����ű������
- �����ű�������



# AJAX

## ʲô��AJAX

- AJAX = �첽 JavaScript �� XML�� Asynchronous JavaScript and XML
- AJAX ��һ�����ڴ������ٶ�̬��ҳ�ļ�����
- ͨ���ں�̨������������������ݽ�����AJAX ����ʹ��ҳʵ���첽���¡�����ζ�ſ����ڲ����¼���������ҳ������£�����ҳ��ĳ���ֽ��и��¡�
- ��ͳ����ҳ����ʹ�� AJAX�������Ҫ�������ݣ���������������ҳ�档

## AJAX����

- ����XHTML+CSS�������Ѷ��
- ����JavaScript����DOM��Document Object Model����ִ�ж�̬Ч����
- ����XML��XSLT��������;
- ����XMLHttpRequest���µ�Fetchasync��true���첽���� false��ͬ���� API����ҳ�����������첽���Ͻ�����
- ע�⣺AJAX��Flash��Silverlight��Java Applet��RIA�����������ֵġ�

## AJAXʵ��

- **���� XMLHttpRequest ����**
  -  �����ִ��������IE7+��Firefox��Chrome��Safari �Լ� Opera�����ڽ� XMLHttpRequest ����
  - �ϰ汾�� Internet Explorer ��IE5 �� IE6��ʹ�� ActiveX ����
- **���������������**
  - ʹ�� XMLHttpRequest ����� open() �� send() ����
    - **open(method,url,async)**	�涨��������͡�URL �Լ��Ƿ��첽��������
      - ***method***����������ͣ�GET �� POST��
      - ***url***���ļ��ڷ������ϵ�λ��
      - ***async***��true���첽���� false��ͬ����
    - **send(string)**	�������͵���������
      - ***string***��������POST����
- **��������Ӧ**
  - **responseText**����ȡ�ַ�����ʽ����Ӧ����
  - **responseXML**����ȡXML��ʽ����Ӧ����
  - **XMLHttpRequest** �����������Ҫ������
    - ***onreadystatechange***
      - �洢������**readyState**���Ըı䣬���øú���
    - ***readyState***
      - 0������δ��ʼ��
      - 1�������������ѽ���
      - 2�������ѽ���
      - 3����������
      - 4����������ɣ���Ӧ�Ѿ���
    - ***status***
      - 200����OK��
      - 404��δ�ҵ�ҳ��

## GET ���� POST��

�� POST ��ȣ�**GET ����Ҳ����**����**�󲿷�����¶�����**��

����������У���ʹ�� POST ����

- �޷�ʹ�û����ļ������·������ϵ��ļ������ݿ⣩

- ����������ʹ������ݣ�POSTû�����������ƣ�

- ���Ͱ���δ֪�ַ����û�����ʱ��POST �� GET ���ȶ�Ҳ���ɿ�

**setRequestHeader(header,value)**	��������� HTTP ͷ��

- ***header***: �涨ͷ������
- ***value***: �涨ͷ��ֵ

# jQuery

## ʲô��jQuery

jQuery��һ��JavaScript�����⡣

jQuery��һ����������"д���٣����Ķ�"��JavaScript�⡣

jQuery��������¹��ܣ�

- HTML Ԫ��ѡȡ
- HTML Ԫ�ز���
- CSS ����
- HTML �¼�����
- JavaScript ��Ч�Ͷ���
- HTML DOM �������޸�
- AJAX
- Utilities

## jQuery�﷨

jQuery �﷨��ͨ��ѡȡ HTML Ԫ�أ�����ѡȡ��Ԫ��ִ��ĳЩ������

�����﷨�� **$(selector).action()**

- ��Ԫ���Ŷ��� jQuery
- ѡ�����selector��"��ѯ"��"����" HTML Ԫ��
- jQuery �� action() ִ�ж�Ԫ�صĲ���

ʵ��:

- **$(this).hide()** - ���ص�ǰԪ��
- **$("p").hide()** - �������� <p> Ԫ��
- **$("p.test").hide()** - �������� class="test" �� <p> Ԫ��
- **$("#test").hide()** - ���� id="test" ��Ԫ��

# jQuery�¼�

ҳ��Բ�ͬ�����ߵ���Ӧ�����¼���

�¼��������ָ���ǵ� HTML �з���ĳЩ�¼�ʱ�����õķ�����

| ����¼�                                                     | �����¼�                                                     | ���¼�                                                  | �ĵ�/�����¼�                                             |
| :----------------------------------------------------------- | :----------------------------------------------------------- | :-------------------------------------------------------- | :-------------------------------------------------------- |
| [click](https://www.runoob.com/jquery/event-click.html)      | [keypress](https://www.runoob.com/jquery/event-keypress.html) | [submit](https://www.runoob.com/jquery/event-submit.html) | [load](https://www.runoob.com/jquery/event-load.html)     |
| [dblclick](https://www.runoob.com/jquery/event-dblclick.html) | [keydown](https://www.runoob.com/jquery/event-keydown.html)  | [change](https://www.runoob.com/jquery/event-change.html) | [resize](https://www.runoob.com/jquery/event-resize.html) |
| [mouseenter](https://www.runoob.com/jquery/event-mouseenter.html) | [keyup](https://www.runoob.com/jquery/event-keyup.html)      | [focus](https://www.runoob.com/jquery/event-focus.html)   | [scroll](https://www.runoob.com/jquery/event-scroll.html) |
| [mouseleave](https://www.runoob.com/jquery/event-mouseleave.html) |                                                              | [blur](https://www.runoob.com/jquery/event-blur.html)     | [unload](https://www.runoob.com/jquery/event-unload.html) |
| [hover](https://www.runoob.com/jquery/event-hover.html)      |                                                              |                                                           |                                                           |