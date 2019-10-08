<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:33:"../template/default/user/api.html";i:1567826232;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>API调用说明</title>
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="format-detection" content="telephone=no">
    <link rel="stylesheet" href="/static/lib/layui/css/layui.css" media="all" />
</head>
<body class="body" style="padding: 15px;">

<h1 style="text-align: center">Api调用说明</h1><br><br>


<blockquote class="layui-elem-quote news_search">
    <div class="layui-inline">
        <p>测试支付页面：<a href="example" target="_blank">http://服务器域名/example/</a></p>
        <p>如果需要使用测试代码，请设置main.php,notify.php,return.php里面的$key为你的通讯密钥</p>
        <p>设置后台的同步回调地址为：http://服务器域名/example/return.php</p>
        <p>设置后台的异步回调地址为：http://服务器域名/example/notify.php</p>

    </div>
</blockquote>

<div class="layui-collapse" lay-filter="test">
    <div class="layui-colla-item">
        <h2 class="layui-colla-title">创建订单</h2>
        <div class="layui-colla-content">

            <div>
                <blockquote class="layui-elem-quote news_search">
                    <div class="layui-inline">
                        请求地址：http://服务器域名/createOrder
                    </div>
                </blockquote>

                <blockquote class="layui-elem-quote news_search">
                    <div class="layui-inline">
                        请求方式：POST/GET
                    </div>
                </blockquote>

                <blockquote class="layui-elem-quote news_search">

                    <p>通讯密钥（示例）：a7cc8678193ee9c70ae3d75fd04ae6a9</p>
                    <p>校验签名（示例）：md5(1547129707139vone66620.1a7cc8678193ee9c70ae3d75fd04ae6a9) = 2b8b5d58c51203162f14939bdbc46a54</p>
                    <p>参数示例（示例）：payId=1547129707139&amp;type=2&amp;price=0.1&amp;sign=2b8b5d58c51203162f14939bdbc46a54&amp;param=vone666&amp;isHtml=0</p>


                    <div class="layui-inline">
                        <p>参数说明:</p>
                    </div>

                    <table class="layui-table">
                        <colgroup>
                            <col>
                            <col>
                        </colgroup>
                        <thead>
                        <tr>
                            <th>参数</th>
                            <th>参数类型</th>
                            <th>参数说明</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>payId</td>
                            <td>字符串</td>
                            <td>【必传】商户订单号，可以是时间戳，不可重复</td>
                        </tr>
                        <tr>
                            <td>type</td>
                            <td>整数</td>
                            <td>【必传】微信支付传入1 支付宝支付传入2</td>
                        </tr>
                        <tr>
                            <td>price</td>
                            <td>小数</td>
                            <td>【必传】订单金额</td>
                        </tr>
                        <tr>
                            <td>sign</td>
                            <td>字符串</td>
                            <td>【必传】签名，计算方式为 md5(payId+param+type+price+通讯密钥)</td>
                        </tr>
                        <tr>
                            <td>param</td>
                            <td>字符串</td>
                            <td>【可选】传输参数，将会原样返回到异步和同步通知接口</td>
                        </tr>
                        <tr>
                            <td>isHtml</td>
                            <td>整数</td>
                            <td>【可选】传入1则自动跳转到支付页面，否则返回创建结果的json数据</td>
                        </tr>
                        <tr>
                            <td>notifyUrl</td>
                            <td>字符串</td>
                            <td>【可选】传入则设置该订单的异步通知接口为该参数，不传或传空则使用后台设置的接口</td>
                        </tr>
                        <tr>
                            <td>returnUrl</td>
                            <td>字符串</td>
                            <td>【可选】传入则设置该订单的同步跳转接口为该参数，不传或传空则使用后台设置的接口</td>
                        </tr>
                        </tbody>
                    </table>


                </blockquote>

                <blockquote class="layui-elem-quote news_search">
                    <p>返回数据（示例）：{"code":1,"msg":"成功","data":{"payId":"1547129707139","orderId":"201901102220147500","payType":2,"price":0.1,"reallyPrice":0.1,"payUrl":"HTTPS://QR.ALIPAY.COM/FKX03500Z2ZYWA0ELYUB5D","isAuto":1,"state":0,"timeOut":5,"date":1547130014}}</p>
                    <div class="layui-inline">
                        返回数据说明:
                    </div>

                    <table class="layui-table">
                        <colgroup>
                            <col>
                            <col>
                        </colgroup>
                        <thead>
                        <tr>
                            <th>返回参数</th>
                            <th>参数类型</th>
                            <th>参数说明</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>code</td>
                            <td>整数</td>
                            <td>返回代码（1：成功，-1：调用失败）</td>
                        </tr>
                        <tr>
                            <td>msg</td>
                            <td>字符串</td>
                            <td>api调用结果说明</td>
                        </tr>
                        <tr>
                            <td>data</td>
                            <td>数组</td>
                            <td>api调用结果（如果code为-1，则data为null）

                                <table class="layui-table">
                                    <colgroup>
                                        <col>
                                        <col>
                                    </colgroup>
                                    <thead>
                                    <tr>
                                        <th>返回参数</th>
                                        <th>参数类型</th>
                                        <th>参数说明</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>payId</td>
                                        <td>字符串</td>
                                        <td>商户订单号</td>
                                    </tr>
                                    <tr>
                                        <td>orderId</td>
                                        <td>字符串</td>
                                        <td>云端订单号，可用于查询订单是否支付成功</td>
                                    </tr>
                                    <tr>
                                        <td>payType</td>
                                        <td>整数</td>
                                        <td>微信支付为1 支付宝支付为2</td>
                                    </tr>
                                    <tr>
                                        <td>price</td>
                                        <td>小数</td>
                                        <td>订单金额</td>
                                    </tr>
                                    <tr>
                                        <td>reallyPrice</td>
                                        <td>小数</td>
                                        <td>实际需付金额</td>
                                    </tr>
                                    <tr>
                                        <td>payUrl</td>
                                        <td>字符串</td>
                                        <td>支付二维码内容</td>
                                    </tr>
                                    <tr>
                                        <td>isAuto</td>
                                        <td>整数</td>
                                        <td>1需要手动输入金额 0扫码后自动输入金额</td>
                                    </tr>
                                    <tr>
                                        <td>state</td>
                                        <td>整数</td>
                                        <td>订单状态：-1|订单过期 0|等待支付 1|完成 2|支付完成但通知失败</td>
                                    </tr>
                                    <tr>
                                        <td>timeOut</td>
                                        <td>整数</td>
                                        <td>订单有效时间（分钟）</td>
                                    </tr>
                                    <tr>
                                        <td>date</td>
                                        <td>长整数</td>
                                        <td>订单创建时间时间戳（10位）</td>
                                    </tr>
                                    </tbody>
                                </table>

                            </td>
                        </tr>
                        </tbody>
                    </table>

                </blockquote>

            </div>
        </div>
    </div>
    <div class="layui-colla-item">
        <h2 class="layui-colla-title">查询订单信息</h2>
        <div class="layui-colla-content">
            <div>

                <blockquote class="layui-elem-quote news_search">
                    <div class="layui-inline">
                        请求地址：http://服务器域名/getOrder
                    </div>
                </blockquote>

                <blockquote class="layui-elem-quote news_search">
                    <div class="layui-inline">
                        请求方式：POST/GET
                    </div>
                </blockquote>

                <blockquote class="layui-elem-quote news_search">

                    <p>参数示例（示例）：orderId=201901102225513177</p>

                    <div class="layui-inline">
                        <p>参数说明:</p>
                    </div>

                    <table class="layui-table">
                        <colgroup>
                            <col>
                            <col>
                        </colgroup>
                        <thead>
                        <tr>
                            <th>参数</th>
                            <th>参数类型</th>
                            <th>参数说明</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>orderId</td>
                            <td>字符串</td>
                            <td>【必传】云端订单号，创建订单返回的</td>
                        </tr>
                        </tbody>
                    </table>


                </blockquote>

                <blockquote class="layui-elem-quote news_search">
                    <p>返回数据（示例）：{"code":1,"msg":"成功","data":{"payId":"1547129707139","orderId":"201901102220147500","payType":2,"price":0.1,"reallyPrice":0.1,"payUrl":"HTTPS://QR.ALIPAY.COM/FKX03500Z2ZYWA0ELYUB5D","isAuto":1,"state":0,"timeOut":5,"date":1547130014}}</p>
                    <div class="layui-inline">
                        返回数据说明:
                    </div>

                    <table class="layui-table">
                        <colgroup>
                            <col>
                            <col>
                        </colgroup>
                        <thead>
                        <tr>
                            <th>返回参数</th>
                            <th>参数类型</th>
                            <th>参数说明</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>code</td>
                            <td>整数</td>
                            <td>返回代码（1：成功，-1：调用失败）</td>
                        </tr>
                        <tr>
                            <td>msg</td>
                            <td>字符串</td>
                            <td>api调用结果说明</td>
                        </tr>
                        <tr>
                            <td>data</td>
                            <td>数组</td>
                            <td>api调用结果（如果code为-1，则data为null）

                                <table class="layui-table">
                                    <colgroup>
                                        <col>
                                        <col>
                                    </colgroup>
                                    <thead>
                                    <tr>
                                        <th>返回参数</th>
                                        <th>参数类型</th>
                                        <th>参数说明</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>payId</td>
                                        <td>字符串</td>
                                        <td>商户订单号</td>
                                    </tr>
                                    <tr>
                                        <td>orderId</td>
                                        <td>字符串</td>
                                        <td>云端订单号，可用于查询订单是否支付成功</td>
                                    </tr>
                                    <tr>
                                        <td>payType</td>
                                        <td>整数</td>
                                        <td>微信支付为1 支付宝支付为2</td>
                                    </tr>
                                    <tr>
                                        <td>price</td>
                                        <td>小数</td>
                                        <td>订单金额</td>
                                    </tr>
                                    <tr>
                                        <td>reallyPrice</td>
                                        <td>小数</td>
                                        <td>实际需付金额</td>
                                    </tr>
                                    <tr>
                                        <td>payUrl</td>
                                        <td>字符串</td>
                                        <td>支付二维码内容</td>
                                    </tr>
                                    <tr>
                                        <td>isAuto</td>
                                        <td>整数</td>
                                        <td>1需要手动输入金额 0扫码后自动输入金额</td>
                                    </tr>
                                    <tr>
                                        <td>state</td>
                                        <td>整数</td>
                                        <td>订单状态：-1|订单过期 0|等待支付 1|完成 2|支付完成但通知失败</td>
                                    </tr>
                                    <tr>
                                        <td>timeOut</td>
                                        <td>整数</td>
                                        <td>订单有效时间（分钟）</td>
                                    </tr>
                                    <tr>
                                        <td>date</td>
                                        <td>长整数</td>
                                        <td>订单创建时间时间戳（10位）</td>
                                    </tr>
                                    </tbody>
                                </table>

                            </td>
                        </tr>
                        </tbody>
                    </table>

                </blockquote>

            </div>

        </div>
    </div>
    <div class="layui-colla-item">
        <h2 class="layui-colla-title">查询订单状态</h2>
        <div class="layui-colla-content">
            <div>


                <blockquote class="layui-elem-quote news_search">
                    <div class="layui-inline">
                        请求地址：http://服务器域名/checkOrder
                    </div>
                </blockquote>

                <blockquote class="layui-elem-quote news_search">
                    <div class="layui-inline">
                        请求方式：POST/GET
                    </div>
                </blockquote>

                <blockquote class="layui-elem-quote news_search">

                    <p>参数示例（示例）：orderId=201901102225513177</p>


                    <div class="layui-inline">
                        <p>参数说明:</p>
                    </div>

                    <table class="layui-table">
                        <colgroup>
                            <col>
                            <col>
                        </colgroup>
                        <thead>
                        <tr>
                            <th>参数</th>
                            <th>参数类型</th>
                            <th>参数说明</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>orderId</td>
                            <td>字符串</td>
                            <td>【必传】云端订单号，创建订单返回的</td>
                        </tr>

                        </tbody>
                    </table>


                </blockquote>

                <blockquote class="layui-elem-quote news_search">
                    <p>返回数据（示例）：{"code":1,"msg":"成功","data":"https://bbs.125.la/?payId=1547130880571&amp;param=vone666&amp;type=2&amp;price=0.1&amp;reallyPrice=0.1&amp;sign=c79f041bd5bc47d73bc19dc8406c9843"}</p>
                    <div class="layui-inline">
                        返回数据说明:
                    </div>

                    <table class="layui-table">
                        <colgroup>
                            <col>
                            <col>
                        </colgroup>
                        <thead>
                        <tr>
                            <th>返回参数</th>
                            <th>参数类型</th>
                            <th>参数说明</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>code</td>
                            <td>整数</td>
                            <td>返回代码（1：订单已被支付，-1：支付失败或还未支付，具体查看msg字段）</td>
                        </tr>
                        <tr>
                            <td>msg</td>
                            <td>字符串</td>
                            <td>调用结果说明</td>
                        </tr>
                        <tr>
                            <td>data</td>
                            <td>字符串</td>
                            <td>
                                如果code为-1，则data为null，否则为该订单支付完成后的跳转地址（带回调参数）
                            </td>
                        </tr>
                        </tbody>
                    </table>

                </blockquote>
            </div>
        </div>
    </div>

    <div class="layui-colla-item">
        <h2 class="layui-colla-title">关闭订单</h2>
        <div class="layui-colla-content">
            <div>


                <blockquote class="layui-elem-quote news_search">
                    <div class="layui-inline">
                        请求地址：http://服务器域名/closeOrder
                    </div>
                </blockquote>

                <blockquote class="layui-elem-quote news_search">
                    <div class="layui-inline">
                        请求方式：POST/GET
                    </div>
                </blockquote>

                <blockquote class="layui-elem-quote news_search">

                    <p>参数示例（示例）：orderId=201901102225513177&amp;sign=7db2d26323dd8ccbb5d130dd61d210a0</p>


                    <div class="layui-inline">
                        <p>参数说明:</p>
                    </div>

                    <table class="layui-table">
                        <colgroup>
                            <col>
                            <col>
                        </colgroup>
                        <thead>
                        <tr>
                            <th>参数</th>
                            <th>参数类型</th>
                            <th>参数说明</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>orderId</td>
                            <td>字符串</td>
                            <td>【必传】云端订单号，创建订单返回的</td>
                        </tr>
                        <tr>
                            <td>sign</td>
                            <td>字符串</td>
                            <td>【必传】md5(云端订单号+通讯密钥)</td>
                        </tr>
                        </tbody>
                    </table>


                </blockquote>

                <blockquote class="layui-elem-quote news_search">
                    <p>返回数据（示例）：{"code":1,"msg":"成功","data":null}</p>
                    <div class="layui-inline">
                        返回数据说明:
                    </div>

                    <table class="layui-table">
                        <colgroup>
                            <col>
                            <col>
                        </colgroup>
                        <thead>
                        <tr>
                            <th>返回参数</th>
                            <th>参数类型</th>
                            <th>参数说明</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>code</td>
                            <td>整数</td>
                            <td>返回代码（1：订单关闭成功，-1：订单关闭失败，具体原因查看msg字段）</td>
                        </tr>
                        <tr>
                            <td>msg</td>
                            <td>字符串</td>
                            <td>调用结果说明</td>
                        </tr>
                        <tr>
                            <td>data</td>
                            <td>字符串</td>
                            <td>
                                无用字段，请忽略
                            </td>
                        </tr>
                        </tbody>
                    </table>

                </blockquote>
            </div>
        </div>
    </div>


    <div class="layui-colla-item">
        <h2 class="layui-colla-title">查询服务端状态</h2>
        <div class="layui-colla-content">
            <div>


                <blockquote class="layui-elem-quote news_search">
                    <div class="layui-inline">
                        请求地址：http://服务器域名/getState
                    </div>
                </blockquote>

                <blockquote class="layui-elem-quote news_search">
                    <div class="layui-inline">
                        请求方式：POST/GET
                    </div>
                </blockquote>

                <blockquote class="layui-elem-quote news_search">

                    <p>参数示例（示例）：t=1547613643&amp;sign=7db2d26323dd8ccbb5d130dd61d210a0</p>


                    <div class="layui-inline">
                        <p>参数说明:</p>
                    </div>

                    <table class="layui-table">
                        <colgroup>
                            <col>
                            <col>
                        </colgroup>
                        <thead>
                        <tr>
                            <th>参数</th>
                            <th>参数类型</th>
                            <th>参数说明</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>t</td>
                            <td>长整数</td>
                            <td>【必传】现行时间戳</td>
                        </tr>
                        <tr>
                            <td>sign</td>
                            <td>字符串</td>
                            <td>【必传】md5(现行时间戳+通讯密钥)</td>
                        </tr>
                        </tbody>
                    </table>


                </blockquote>

                <blockquote class="layui-elem-quote news_search">
                    <p>返回数据（示例）：{"code":1,"msg":"成功","data":{"lastpay":"1547394640","lastheart":"1547613873","state":"1"}}</p>
                    <div class="layui-inline">
                        返回数据说明:
                    </div>

                    <table class="layui-table">
                        <colgroup>
                            <col>
                            <col>
                        </colgroup>
                        <thead>
                        <tr>
                            <th>返回参数</th>
                            <th>参数类型</th>
                            <th>参数说明</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>code</td>
                            <td>整数</td>
                            <td>返回代码（1：成功，-1：失败，具体原因查看msg字段）</td>
                        </tr>
                        <tr>
                            <td>msg</td>
                            <td>字符串</td>
                            <td>调用结果说明</td>
                        </tr>
                        <tr>
                            <td>data</td>
                            <td>字符串</td>
                            <td>api调用结果（如果code为-1，则data为null）

                                <table class="layui-table">
                                    <colgroup>
                                        <col>
                                        <col>
                                    </colgroup>
                                    <thead>
                                    <tr>
                                        <th>返回参数</th>
                                        <th>参数类型</th>
                                        <th>参数说明</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>lastpay</td>
                                        <td>长整数</td>
                                        <td>最后一次监控到支付的时间戳（10位）</td>
                                    </tr>
                                    <tr>
                                        <td>lastheart</td>
                                        <td>长整数</td>
                                        <td>最后一次监控端向服务器发送心跳的时间戳（10位）</td>
                                    </tr>
                                    <tr>
                                        <td>state</td>
                                        <td>整数</td>
                                        <td>监控端状态 1|在线 0|掉线 -1|还未绑定监控端</td>
                                    </tr>
                                    </tbody>
                                </table>

                            </td>
                        </tr>
                        </tbody>
                    </table>

                </blockquote>
            </div>
        </div>
    </div>



    <div class="layui-colla-item">
        <h2 class="layui-colla-title">回调参数说明</h2>
        <div class="layui-colla-content">
            <blockquote class="layui-elem-quote news_search">
                <div class="layui-inline">
                    当系统收到用户收款后，将会向您后台设定的异步通知地址发送GET请求，通知您的服务端订单完成收款
                </div>

                <div class="layui-inline">
                    若您使用的是isHtml=1则在支付完成后会携带参数跳转到您的同步通知接口，若使用isHtml=0则只有异步通知
                </div>
            </blockquote>
            <blockquote class="layui-elem-quote news_search">
                <p>传输参数（示例）：payId=1547130349673&amp;param=vone666&amp;type=2&amp;price=0.1&amp;reallyPrice=0.1&amp;sign=28943820b95019b6a63598a13c46f93f</p>
                <div class="layui-inline">
                    传输参数说明:
                </div>

                <table class="layui-table">
                    <colgroup>
                        <col>
                        <col>
                    </colgroup>
                    <thead>
                    <tr>
                        <th>返回参数</th>
                        <th>参数类型</th>
                        <th>参数说明</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>payId</td>
                        <td>字符串</td>
                        <td>商户订单号</td>
                    </tr>
                    <tr>
                        <td>param</td>
                        <td>字符串</td>
                        <td>创建订单的时候传入的参数</td>
                    </tr>
                    <tr>
                        <td>type</td>
                        <td>整数</td>
                        <td>支付方式 ：微信支付为1 支付宝支付为2</td>
                    </tr>
                    <tr>
                        <td>price</td>
                        <td>小数</td>
                        <td>订单金额</td>
                    </tr>
                    <tr>
                        <td>reallyPrice</td>
                        <td>小数</td>
                        <td>实际支付金额</td>
                    </tr>
                    <tr>
                        <td>sign</td>
                        <td>字符串</td>
                        <td>校验签名，计算方式 = md5(payId + param + type + price + reallyPrice + 通讯密钥)</td>
                    </tr>

                    </tbody>
                </table>



            </blockquote>

            <pre class="layui-code">

&lt;?php

ini_set(&quot;error_reporting&quot;,&quot;E_ALL &amp; ~E_NOTICE&quot;);

$key = &quot;83d551f0b3609781a22536ca2658473d&quot;;//通讯密钥


$payId = $_GET[&#x27;payId&#x27;];//商户订单号
$param = $_GET[&#x27;param&#x27;];//创建订单的时候传入的参数
$type = $_GET[&#x27;type&#x27;];//支付方式 ：微信支付为1 支付宝支付为2
$price = $_GET[&#x27;price&#x27;];//订单金额
$reallyPrice = $_GET[&#x27;reallyPrice&#x27;];//实际支付金额
$sign = $_GET[&#x27;sign&#x27;];//校验签名，计算方式 = md5(payId + param + type + price + reallyPrice + 通讯密钥)

//开始校验签名
$_sign =  md5($payId . $param . $type . $price . $reallyPrice . $key);
if ($_sign != $sign) {
    echo &quot;error_sign&quot;;//sign校验不通过
    exit();
}


echo &quot;success&quot;;
//继续业务流程
//echo &quot;商户订单号：&quot;.$payId .&quot;&lt;br&gt;自定义参数：&quot;. $param .&quot;&lt;br&gt;支付方式：&quot;. $type .&quot;&lt;br&gt;订单金额：&quot;. $price .&quot;&lt;br&gt;实际支付金额：&quot;. $reallyPrice;

?&gt;
            </pre>

        </div>
    </div>
</div>


<script type="text/javascript" src="/static/lib/layui/layui.js"></script>
<script>
    layui.use(['element','code'], function(){
        var element = layui.element;
        layui.element.render();
        layui.code({
            title: 'PHP回调示例代码'
        });

    });
</script>
<!--


<script>
    layui.use(['element', 'layer'], function(){
        var element = layui.element;
        var layer = layui.layer;

    });
</script>
</body>
</html>
-->