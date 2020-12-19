<script type="text/javascript" src="https://code.jquery.com/jquery-3.0.0.min.js"></script>
<script src="https://aframe.io/releases/1.1.0/aframe.min.js"></script>

<script type="text/javascript">
    // Load check
    AFRAME.registerComponent('model-loader', {
        init: function () {
            this.el.addEventListener('model-loaded', function () {
                console.log('Finish model load');
                $("#loading").hide();
            });
        }
    });

    // drag logic
    $(function () {
        var kRotateSpeed = 0.27;

        var clicking = false;
        var currentRotation;
        var clickPosX = 0;
        var clickPosY = 0;
        var rotation = {x: 0, y: 0, z: 0};

        // can touch device?
        var isTouch = ('ontouchstart' in window);

        $('#a-scene').bind({
            'touchstart mousedown': function (e) {
                clicking = true;
                rotation = $('#model-parent').attr("rotation");
                clickPosX = (isTouch ? event.changedTouches[0].pageX : e.pageX);
                clickPosY = (isTouch ? event.changedTouches[0].pageY : e.pageY);
            },
            'touchmove mousemove': function (e) {
                if (clicking == false) return;
                //e.preventDefault();
                var x = (isTouch ? event.changedTouches[0].pageX : e.pageX) - clickPosX;
                var y = (isTouch ? event.changedTouches[0].pageY : e.pageY) - clickPosY;
                var rad = rotation.y * Math.PI / 180;

                rotation.y = rotation.y + (x * kRotateSpeed);
                rotation.x = rotation.x + (Math.cos(rad) * y * kRotateSpeed);
                rotation.z = rotation.z + (Math.sin(rad) * y * kRotateSpeed);

                $('#model-parent').attr(
                    "rotation",
                    rotation.x + " " + rotation.y + " " + rotation.z
                );
                clickPosX = (isTouch ? event.changedTouches[0].pageX : e.pageX);
                clickPosY = (isTouch ? event.changedTouches[0].pageY : e.pageY);
            },
            'touchend mouseup mouseout': function (e) {
                clicking = false;
            }
        });
    });
</script>
<body>
<!--Todo: check google ar for more functions-->
<div id="loading">loading...</div>
<a-scene background="color: #ECECEC">
    <a-assets>
        <a-asset-item id="brainstem"
                      src="../../common/assets/images/gltf/Mosque.gltf"></a-asset-item>
    </a-assets>

    <a-entity gltf-model="#brainstem" position="0 1.25 -0.7" scale="0.4 0.4 0.4"
              animation="property: rotation; to: 0 360 0; loop: true; dur: 10000"></a-entity>


    <a-sky color="#FAFAFA"></a-sky>
</a-scene>
</body>
</html>