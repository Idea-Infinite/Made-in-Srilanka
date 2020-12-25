<div style="max-width: none; min-width: 300px; top: 140px; height: 500px;" data-role="popup" id="viewAR" data-theme="a"
     class="ui-content">

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

    <!--Todo: check google ar for more functions-->
    <div id="loading">loading...</div>
    <a-scene
            renderer="colorManagement: true;"
            model-viewer="gltfModel: #man; title: car">
        <a-assets>

            <a-asset-item id="man" src="../../common/assets/models/WoodenPlane.gltf"
                          response-type="arraybuffer" crossorigin="anonymous"></a-asset-item>

            <img id="shadow"
                 src="https://cdn.glitch.com/20600112-c04b-492c-8190-8a5ccc06f37d%2Fshadow.png?v=1606338852399"></img>
        </a-assets>
    </a-scene>
</div>