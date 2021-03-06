<html>
<?php
require_once 'jssdk.php'; 
$jssdk = new JSSDK("wxd8a5b6edc2bfc87e", "fb0525a8dadb41f524ab94627f129f4b");
$signPackage = $jssdk->getSignPackage();
?>
<head>
    <title>iSteward</title>
    <meta name="viewport" content="width=device-width,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="vendor/bootstrap.css">
    <link rel="stylesheet" href="vendor/loading-bar.css">
    <link rel="stylesheet" type="text/css" href="ng.css">
</head>

<body ng-app="app" ng-controller="appCtrl" class="container" ng-class="{'temperature-heat-page': global.curPage === 1, 'config-page': global.curPage === 4, 'equipment-list-page':global.curPage === 2, 'statistic-page':global.curPage === 3, 'humidity-page':global.curPage ===2.5} ">
    <ng-view></ng-view>
    <footer class="footer">
        <div class="row">
            <div class="col-xs-3">
                <a href="#/temperature">
                    <div class="temperature" ng-class="{'Navi-config-page': global.curPage === 1}"></div>
                </a>
            </div>
            <div class="col-xs-3">
                <a href="#/equipmentlist">
                    <div class="equipments" ng-class="{'Navi-ac-page': global.curPage === 2}"></div>
                </a>
            </div>
            <div class="col-xs-3">
                <a href="#/statistic">
                    <div class="statistics" ng-class="{'Navi-chart-page': global.curPage === 3}"></div>
                </a>
            </div>
            <div class="col-xs-3">
                <a href="#/config">
                    <div class="config" ng-class="{'Navi-set-page': global.curPage === 4}"></div>
                </a>
            </div>
        </div>
    </footer>
    <script src="vendor/jquery.min.js"></script>
    <script src="http://res.wx.qq.com/open/js/jweixin-1.1.0.js"></script>
    <script src="vendor/Chart.min.js"></script>
    <script src="vendor/angular.js"></script>
    <script src="vendor/angular-route.js"></script>
    <script src="vendor/angular-resource.js"></script>
    <script src="vendor/angular-touch.js"></script>
    <script src="vendor/angular-animate.js"></script>
    <script src="vendor/loading-bar.js"></script>
    <script src="controller/app.js"></script>
    <script src="service/equipmentservice.js"></script>
    <script src="service/sensorservice.js"></script>
    <script src="controller/config.js"></script>
    <script src="controller/temperature.js"></script>
    <script src="controller/acController.js"></script>
    <script src="controller/equipmentAdd.js"></script>
    <script src="controller/equipmentList.js"></script>
    <script src="controller/humidity.js"></script>
    <script src="controller/lightController.js"></script>
    <script src="controller/statistic.js"></script>
    <script src="directive/linechart.js"></script>
    <script type="text/javascript">
        wx.config({
            beta: true,
            appId: '<?php echo $signPackage["appId"];?>',
            timestamp: <?php echo $signPackage["timestamp"];?>,
            nonceStr: '<?php echo $signPackage["nonceStr"];?>',
            signature: '<?php echo $signPackage["signature"];?>',
            jsApiList: ['openWXDeviceLib', 'getWXDeviceInfos','startScanWXDevice', 'stopScanWXDevice', 'onScanWXDeviceResult', 'onWXDeviceBluetoothStateChange', 'configWXDeviceWiFi', 'getNetworkType']  
        });
            
        wx.ready(function() {
            wx.checkJsApi({
                'jsApiList': ['openWXDeviceLib', 'getWXDeviceInfos','startScanWXDevice', 'stopScanWXDevice', 'onScanWXDeviceResult', 'onWXDeviceBluetoothStateChange', 'configWXDeviceWiFi', 'getNetworkType'],
                'success': function() {
                }
            });

            wx.invoke('openWXDeviceLib', {}, function(res) {
                
            });
            // wx.invoke('getNetworkType', {}, function(res) {
            //     alert(JSON.stringify(res))
            // });       
        });
    </script>
</body>

</html>
