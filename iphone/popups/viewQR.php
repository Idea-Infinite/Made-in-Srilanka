<div style="max-width: none; min-width: 200px;" data-role="popup" id="viewQR" data-theme="a" class="ui-content">
    <div class="header-title" style="margin-top: -10px; display: flex">
        <h3>Chat with seller</h3>
        <img alt="page_icon" src="../../common/assets/images/icons/qr.png" height="35" width="35">
    </div>
    <div style="width: 100%" id="reader"></div>
    <script src="../../common/js/html5-qrcode.min.js"></script>
    <script>
        function onScanSuccess(qrCodeMessage) {
            // handle on success condition with the decoded message
            $("#viewQR").popup("close");
            $("#qrId").html(qrCodeMessage);
            $("#qrRewards").popup("open");
        }

        var html5QrcodeScanner = new Html5QrcodeScanner(
            "reader", {fps: 10, qrbox: 250});
        html5QrcodeScanner.render(onScanSuccess);
    </script>
</div>