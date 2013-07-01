#MODEL
###Question


* id : `ID` 问题唯一ID
* title : `问题` 例如 汽车品牌 汽车型号 汽车内饰 奢侈品 当然也可以自定义
* answer : `答案` A B C D E 手工填写
* correct: `正确答案` B
* why: `问题解释` , 例如 只有BMW才有前驱车
* tip: `答案提示` 随便写点什么
* grade:`难度` 
	* easy 简单 
	* normal 略难 
	* hard 超难
* height: `缩率图高度` 480 or 640 默认480
* slice:`切割几份` 6 默认6
* thumbnail:`缩率图` *http://babylearn-thumbnails.b0.upaiyun.com/1367920071.png*
* image:`大图` *http://babylearn-thumbnails.b0.upaiyun.com/13679201.png*
* type:`类型` car or other 默认car

###LEVEL

* level:`阶段` 现在是 1 或者 2,3
* title:`标题` 北京关卡 法国关卡
* amount:`数量` 16题目 题目决定distribution的最小百分比
* distribution: `分布` 80% grade 1 +  20% grade 2 + 5% grade 3 [随即抽取]
* background: `背景图` 640X1136 的背景图 选择有代表性的各种美景


#API
###Level/:N
获得第一关的所有问题

`GET`

* N 代表第n关

`return`

    [
      {
        "id": 103,
        "title": "car brand",
        "answer": {
          "A": "t1",
          "B": "t2",
          "C": "t3",
          "D": "t4"
        },
        "correct": "B",
        "why": "这你都不懂",
        "tip": "xxx",
        "grade": "easy",
        "height": 480,
        "slice": 3,
        "thumbnail": "http://babylearn-thumbnails.b0.upaiyun.com/1367920071.png",
        "image": "http://babylearn-thumbnails.b0.upaiyun.com/13679271.png",
        "type":"car"
      }
    ]

`trap&tip`

要看看 谁家的json decode 能解析成 array的dictionary

###Question/:id

获得单独一个question的内容

`GET`

* id:`questionID`

`return`

      {
        "id": 103,
        "title": "car brand",
        "answer": {
          "A": "t1",
          "B": "t2",
          "C": "t3",
          "D": "t4"
        },
        "correct": "B",
        "why": "这你都不懂",
        "tip": "xxx",
        "grade": "easy",
        "height": 480,
        "slice": 3,
        "thumbnail": "http://babylearn-thumbnails.b0.upaiyun.com/1367920071.png",
        "image": "http://babylearn-thumbnails.b0.upaiyun.com/13679271.png",
        "type":"car"
      }
      

###Level/list

`GET`

* udid : 用户的udid,不同用户随机得到题目的是不同的

`return`

    [
      {
        "level": "1",
        "background": "http://ydkcar.b0.upaiyun.com/13679201.png",
        "title": "北京",
        "amount": 16,
        "questions": {
          "1": 136,
          "2": 137,
          "n": "xxx",
          "15": 156,
          "16": 187
        }
      },
      {
        "level": "2",
        "background": "http://ydkcar.b0.upaiyun.com/13679201.png",
        "title": "上海",
        "amount": 16,
        "questions": {
          "1": 136,
          "2": 137,
          "15": 156,
          "16": 187
        }
      }
    ]

###Notification

`GET`


#Setting

###global

* 分值 答对10分 答错0分 剩余一个方块+1分
* 答错调侃 随机匹配 
* 每个 level 16个题目 4X4排列


#用户

###用户唯一标识
* UDID UUID or macaddress with MD5
* <https://github.com/mactive/UIDevice-with-UniqueIdentifier-for-iOS-5>

###用户注册 /user/register

`POST`

* email:邮箱
* password:密码

`return`

	{"status":"success"}
	{"status":"failed","error":"repeat email"}
	
![](http://chart.7878.com/td/sh600006.gif)

--------

#i18N 多语言

