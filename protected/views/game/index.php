                <script type="text/javascript" src="<?=Yii::app()->request->baseUrl?>/js/UnityObject.js"></script>
		<script type="text/javascript">
		<!--
		function GetUnity() {
			if (typeof unityObject != "undefined") {
				return unityObject.getObjectById("unityPlayer");
			}
			return null;
		}
		if (typeof unityObject != "undefined") {
    var params = {
				disableContextMenu: true
			};
			
                    unityObject.embedUnity("unityPlayer",  "<?=Yii::app()->request->baseUrl?>/games/WebPlayer.unity3d", "900", "600",params);
			
		}
		-->
		</script>
		
                <script type="text/javascript">
                    function replace(src){
                        var replace=document.getElementById("replace");
                        replace.setAttribute("style", "visibility : visible");
                        var unity=document.getElementById("unityPlayer");
                        unity.setAttribute("style", "visibility : hidden");
                        var ifrm=document.createElement("IFRAME");
                        ifrm.setAttribute("src",  src);
                        ifrm.setAttribute("id",  "frame");
                        ifrm.setAttribute("width", "100%");
                        ifrm.setAttribute("height", "100%");
                        
                        //ifrm.setAttribute(width, value)
                        replace.appendChild(ifrm);
                        
                    }
                    function back(){
                        var replace=document.getElementById("replace");
                        replace.setAttribute("style", "visibility : hidden");
                        var unity=document.getElementById("unityPlayer");
                        unity.setAttribute("style", "visibility : visible");
                        var ifrm=document.getElementById("frame")
                        if(ifrm)replace.removeChild(ifrm);
                    }
                </script>
			<div id="unityPlayer">
				<div class="missing">
					<a href="http://unity3d.com/webplayer/" title="Unity Web Player. Install now!">
						<img alt="Unity Web Player. Install now!" src="http://webplayer.unity3d.com/installation/getunity.png" width="193" height="63" />
					</a>
				</div>
			</div>
                    <div id="replace">
                        <a href=# onclick=back()>Vissza a Játékhoz</a>
                        <!--    <iframe id="iframe" src="<?="";//Yii::app()->createUrl("site/login")?>" width="100%" height="100%"></iframe>-->
                       
                    </div>
