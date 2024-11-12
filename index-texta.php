<?php $IPATH = $_SERVER["DOCUMENT_ROOT"]."/assets/php/";
    include($IPATH."header.html"); ?>
     
     <style>
 
.animated-content {
  position: absolute;
  bottom: 0;
  left: 0;
  right: 0;
  background: rgba(0, 0, 0, 0.5); /* Semi-transparent background */
  color: #fff;
  padding: 20px;
  top: 2%;
  opacity: 0;
  transform: translateY(100%);
  animation: slideIn 2s ease forwards 1s; /* Delay the animation by 1 second */
  
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  text-align: center;
}

.card-btn {
  margin-top: 20px;
  padding: 10px 30px;
  background-color: #ff9800;
  letter-spacing: 1px;
  border: none;
  color: #fff;
  font-weight: 800;
  cursor: pointer;
  transition: background-color 0.3s ease;
  animation-name: btnslide;
   animation-duration: 1s;
  animation-iteration-count: infinite;
}

.card-btn:hover {
  background-color: #e68a00;
   
}

@keyframes slideIn {
  0% {
    opacity: 0;
    transform: translateY(100%);
  }
  100% {
    opacity: 1;
    transform: translateY(0);
  }
}
@keyframes btnslide {
  0% {
    padding: 10px 30px;
    border-radius: 15px;
  }
  100% {
   padding: 10px 50px;
   border-radius: 10px;
   background-color: #fff;
   color: #e68a00;
  }
}

     </style>
       
 <!--Main Slider-->
        <section class="rev_slider_wrapper">
            <div id="slider1" class="rev_slider" data-version="5.0">

                <ul>
                    <!-- SLIDE  -->
       <!--             <li data-index="rs-7" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="300" data-thumb=" "-->
       <!--                 data-rotate="0" data-saveperformance="off" data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">-->
                        <!-- MAIN IMAGE -->
       <!--                 <img src="images/main-slider/2.png" alt="" title="slide1-h3.jpg" width="1920" height="790" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="15" class="rev-slidebg" data-no-retina>-->
                        <!-- LAYERS -->

                        <!-- LAYER NR. 1 -->
       <!--                 <div class="tp-caption   tp-resizeme rev-midtext" id="slide-7-layer-1" data-x="['left','left','left','left']" data-hoffset="['15','295','15','15']" data-y="['top','top','top','top']" data-voffset="['252','225','300','220']" data-fontsize="['24','24','24','22']"-->
       <!--                     data-lineheight="['24','24','24','22']" data-width="none" data-height="none" data-whitespace="nowrap" data-type="text" data-responsive_offset="on" data-frames='[{"delay":300,"speed":600,"text_c":"transparent","bg_c":"transparent",-->
							<!--"use_text_c":false,"use_bg_c":false,"frame":"0","from":"y:-50px;opacity:0;",-->
							<!--"to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":600,"use_text_c":false,-->
							<!--"use_bg_c":false,"text_c":"transparent","bg_c":"transparent","frame":"999",-->
							<!--"to":"y:-50px;opacity:0;","ease":"Power3.easeInOut"}]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]">Well-Rounded Training for Christia </div>-->

                        <!-- LAYER NR. 2 -->
       <!--                 <div class="tp-caption   tp-resizeme rev-bigtext" id="slide-7-layer-2" data-x="['left','left','left','left']" data-hoffset="['15','295','15','15']" data-y="['top','top','top','top']" data-voffset="['297','275','355','270']" data-fontsize="['90','72','72','52']"-->
       <!--                     data-lineheight="['90','72','72','52']" data-width="none" data-height="none" data-whitespace="nowrap" data-type="text" data-responsive_offset="on" data-frames='[{"delay":500,"speed":600,"text_c":"transparent","bg_c":"transparent",-->
							<!--"use_text_c":false,"use_bg_c":false,"frame":"0","from":"x:-50px;opacity:0;",-->
							<!--"to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":600,"use_text_c":false,-->
							<!--"use_bg_c":false,"text_c":"transparent","bg_c":"transparent","frame":"999",-->
							<!--"to":"x:-50px;opacity:0;","ease":"Power3.easeInOut"}]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]">LIFE AND MINISTRY </div>-->

                        <!-- LAYER NR. 3 -->
       <!--                 <div class="tp-caption   tp-resizeme rev-paratext" id="slide-7-layer-4" data-x="['left','left','left','left']" data-hoffset="['20','300','20','20']" data-y="['top','top','top','top']" data-voffset="['400','370','455','360']" data-fontsize="['20','20','20','14']"-->
       <!--                     data-lineheight="['30','30','30','26']" data-width="none" data-height="none" data-whitespace="nowrap" data-type="text" data-responsive_offset="on" data-frames='[{"delay":700,"speed":600,"text_c":"transparent","bg_c":"transparent",-->
							<!--"use_text_c":false,"use_bg_c":false,"frame":"0","from":"x:50px;opacity:0;",-->
							<!--"to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":600,"use_text_c":false,-->
							<!--"use_bg_c":false,"text_c":"transparent","bg_c":"transparent","frame":"999",-->
							<!--"to":"x:50px;opacity:0;","ease":"Power3.easeInOut"}]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]">We use proven educational concepts to deliver high-quality, easy to<br>understand learning. Our diverse curriculum ensures a well-rounded<br> education, preparing you for success. </div>-->

                        <!-- LAYER NR. 4 -->
       <!--                 <a class="tp-caption rev-btn rev-btn1" href="https://spiritbrood.org/apply.php" target="_blank" id="slide-7-layer-5" data-x="['left','left','left','left']" data-hoffset="['20','300','20','20']" data-y="['top','top','top','top']" data-voffset="['490','470','560','450']" data-fontsize="['16','16','16','14']"-->
       <!--                     data-lineheight="['16','16','16','14']" data-letterspacing="['0','','','']" data-width="['160','160','160','120']" data-height="['55','55','55','36']" data-whitespace="nowrap" data-type="button" data-actions='' data-responsive_offset="on"-->
       <!--                     data-frames='[{"delay":900,"speed":600,"text_c":"transparent","bg_c":"transparent",-->
							<!--"use_text_c":false,"use_bg_c":false,"frame":"0","from":"y:50px;opacity:0;",-->
							<!--"to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":600,-->
							<!--"use_text_c":false,"use_bg_c":false,"text_c":"transparent","bg_c":"transparent",-->
							<!--"frame":"999","to":"y:50px;opacity:0;","ease":"Power3.easeInOut"},-->
							<!--{"frame":"hover","speed":"0","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;",-->
							<!--"style":"c:rgb(37,37,37);bs:solid;bw:0 0 0 0;"}]' data-textAlign="['center','center','center','center']" data-paddingtop="[20,20,20,12]" data-paddingright="[0,0,0,0]" data-paddingbottom="[19,19,19,10]" data-paddingleft="[0,0,0,0]">Enrol Now! </a>-->

                        <!-- LAYER NR. 5 -->
       <!--                 <a class="tp-caption rev-btn rev-btn2" href="https://spiritbrood.org/college-degree-program.php" target="_blank" id="slide-7-layer-6" data-x="['left','left','left','left']" data-hoffset="['205','485','205','170']" data-y="['top','top','top','top']" data-voffset="['490','470','560','450']" data-fontsize="['16','16','16','14']"-->
       <!--                     data-lineheight="['16','16','16','14']" data-letterspacing="['0','','','']" data-width="['160','160','160','120']" data-height="['55','55','55','36']" data-whitespace="nowrap" data-type="button" data-actions='' data-responsive_offset="on"-->
       <!--                     data-frames='[{"delay":900,"speed":600,"text_c":"transparent","bg_c":"transparent",-->
							<!--"use_text_c":false,"use_bg_c":false,"frame":"0","from":"y:50px;opacity:0;",-->
							<!--"to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":600,-->
							<!--"use_text_c":false,"use_bg_c":false,"text_c":"transparent","bg_c":"transparent",-->
							<!--"frame":"999","to":"y:50px;opacity:0;","ease":"Power3.easeInOut"},-->
							<!--{"frame":"hover","speed":"0","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;",-->
							<!--"style":"c:rgb(255,255,255);"}]' data-textAlign="['center','center','center','center']" data-paddingtop="[18,18,18,10]" data-paddingright="[0,0,0,0]" data-paddingbottom="[17,17,17,10]" data-paddingleft="[0,0,0,0]">Learn More </a>-->
       <!--             </li>-->
                    <!-- SLIDE  -->
       <!--             <li data-index="rs-8" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="300" data-thumb=" "-->
       <!--                 data-rotate="0" data-saveperformance="off" data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">-->
                        <!-- MAIN IMAGE -->
       <!--                 <img src="images/main-slider/imgu1.png" alt="" title="slide2-h3.jpg" width="1920" height="791" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="15" class="rev-slidebg" data-no-retina>-->
                        <!-- LAYERS -->

                        <!-- LAYER NR. 6 -->
       <!--                 <div class="tp-caption   tp-resizeme rev-midtext" id="slide-8-layer-1" data-x="['left','left','left','left']" data-hoffset="['490','295','15','15']" data-y="['top','top','top','top']" data-voffset="['252','240','300','220']" data-fontsize="['24','24','24','22']"-->
       <!--                     data-lineheight="['24','24','24','22']" data-width="none" data-height="none" data-whitespace="nowrap" data-type="text" data-responsive_offset="on" data-frames='[{"delay":300,"speed":600,"text_c":"transparent","bg_c":"transparent",-->
							<!--"use_text_c":false,"use_bg_c":false,"frame":"0","from":"y:-50px;opacity:0;",-->
							<!--"to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":600,-->
							<!--"use_text_c":false,"use_bg_c":false,"text_c":"transparent","bg_c":"transparent",-->
							<!--"frame":"999","to":"y:-50px;opacity:0;","ease":"Power3.easeInOut"}]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]">Master Your Learning Journey  </div>-->

                        <!-- LAYER NR. 7 -->
       <!--                 <div class="tp-caption   tp-resizeme rev-bigtext" id="slide-8-layer-2" data-x="['left','left','left','left']" data-hoffset="['490','295','15','15']" data-y="['top','top','top','top']" data-voffset="['297','285','355','270']" data-fontsize="['90','72','72','52']"-->
       <!--                     data-lineheight="['90','72','72','52']" data-width="none" data-height="none" data-whitespace="nowrap" data-type="text" data-responsive_offset="on" data-frames='[{"delay":500,"speed":600,"text_c":"transparent","bg_c":"transparent",-->
							<!--"use_text_c":false,"use_bg_c":false,"frame":"0","from":"x:-50px;opacity:0;",-->
							<!--"to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":600,"use_text_c":false,-->
							<!--"use_bg_c":false,"text_c":"transparent","bg_c":"transparent","frame":"999",-->
							<!--"to":"x:-50px;opacity:0;","ease":"Power3.easeInOut"}]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]">100% TUITION-FREE </div>-->

                        <!-- LAYER NR. 8 -->
       <!--                 <div class="tp-caption   tp-resizeme rev-paratext" id="slide-8-layer-4" data-x="['left','left','left','left']" data-hoffset="['495','300','20','20']" data-y="['top','top','top','top']" data-voffset="['410','380','455','360']" data-fontsize="['20','20','20','14']"-->
       <!--                     data-lineheight="['30','30','30','22']" data-width="none" data-height="none" data-whitespace="nowrap" data-type="text" data-responsive_offset="on" data-frames='[{"delay":700,"speed":600,"text_c":"transparent","bg_c":"transparent",-->
							<!--"use_text_c":false,"use_bg_c":false,"frame":"0","from":"x:50px;opacity:0;","to":"o:1;",-->
							<!--"ease":"Power3.easeInOut"},{"delay":"wait","speed":600,"use_text_c":false,-->
							<!--"use_bg_c":false,"text_c":"transparent","bg_c":"transparent","frame":"999",-->
							<!--"to":"x:50px;opacity:0;","ease":"Power3.easeInOut"}]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]">Enjoy the freedom to learn online at your own pace, with no<br> tuition costs—advance at your speed for a personalized<br> and cost-effective education. </div>-->

                        <!-- LAYER NR. 9 -->
       <!--                 <a class="tp-caption rev-btn rev-btn1" href="https://spiritbrood.org/apply.php" target="_blank" id="slide-8-layer-5" data-x="['left','left','left','left']" data-hoffset="['493','299','20','20']" data-y="['top','top','top','top']" data-voffset="['510','480','560','450']" data-fontsize="['16','16','16','14']"-->
       <!--                     data-lineheight="['16','16','16','14']" data-letterspacing="['0','','','']" data-width="['160','160','160','120']" data-height="['55','55','55','36']" data-whitespace="nowrap" data-type="button" data-actions='' data-responsive_offset="on"-->
       <!--                     data-frames='[{"delay":900,"speed":600,"text_c":"transparent","bg_c":"transparent",-->
							<!--"use_text_c":false,"use_bg_c":false,"frame":"0","from":"y:50px;opacity:0;",-->
							<!--"to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":600,-->
							<!--"use_text_c":false,"use_bg_c":false,"text_c":"transparent","bg_c":"transparent",-->
							<!--"frame":"999","to":"y:50px;opacity:0;","ease":"Power3.easeInOut"},-->
							<!--{"frame":"hover","speed":"0","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;",-->
							<!--"style":"c:rgb(37,37,37);bs:solid;bw:0 0 0 0;"}]' data-textAlign="['center','center','center','center']" data-paddingtop="[20,20,20,12]" data-paddingright="[0,0,0,0]" data-paddingbottom="[19,19,19,10]" data-paddingleft="[0,0,0,0]">Enrol Now! </a>-->

                        <!-- LAYER NR. 10 -->
       <!--                 <a class="tp-caption rev-btn rev-btn2" href="https://spiritbrood.org/college-degree-program.php" target="_blank" id="slide-8-layer-6" data-x="['left','left','left','left']" data-hoffset="['675','485','205','170']" data-y="['top','top','top','top']" data-voffset="['510','480','560','450']" data-fontsize="['16','16','16','14']"-->
       <!--                     data-lineheight="['16','16','16','14']" data-letterspacing="['0','','','']" data-width="['160','160','160','120']" data-height="['55','55','55','36']" data-whitespace="nowrap" data-type="button" data-actions='' data-responsive_offset="on"-->
       <!--                     data-frames='[{"delay":900,"speed":600,"text_c":"transparent","bg_c":"transparent",-->
							<!--"use_text_c":false,"use_bg_c":false,"frame":"0","from":"y:50px;opacity:0;",-->
							<!--"to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":600,-->
							<!--"use_text_c":false,"use_bg_c":false,"text_c":"transparent","bg_c":"transparent",-->
							<!--"frame":"999","to":"y:50px;opacity:0;","ease":"Power3.easeInOut"},-->
							<!--{"frame":"hover","speed":"0","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;",-->
							<!--"style":"c:rgb(255,255,255);"}]' data-textAlign="['center','center','center','center']" data-paddingtop="[18,18,18,10]" data-paddingright="[0,0,0,0]" data-paddingbottom="[17,17,17,10]" data-paddingleft="[0,0,0,0]">Learn More </a>-->
       <!--             </li>-->
                    <!-- SLIDE  -->
       <!--             <li data-index="rs-9" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="300" data-thumb=" "-->
       <!--                 data-rotate="0" data-saveperformance="off" data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">-->
                        <!-- MAIN IMAGE -->
       <!--                 <img src="images/main-slider/Group 77.png" alt="" title="slide3-h3.jpg" width="1920" height="790" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="15" class="rev-slidebg" data-no-retina>-->
                        <!-- LAYERS -->

                        <!-- LAYER NR. 11 -->
       <!--                 <div class="tp-caption   tp-resizeme rev-midtext" id="slide-9-layer-1" data-x="['left','left','left','left']" data-hoffset="['15','295','15','15']" data-y="['top','top','top','top']" data-voffset="['252','240','270','220']" data-fontsize="['24','24','24','22']"-->
       <!--                     data-lineheight="['24','24','24','22']" data-width="none" data-height="none" data-whitespace="nowrap" data-type="text" data-responsive_offset="on" data-frames='[{"delay":300,"speed":600,"text_c":"transparent","bg_c":"transparent",-->
							<!--"use_text_c":false,"use_bg_c":false,"frame":"0","from":"y:-50px;opacity:0;",-->
							<!--"to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":600,-->
							<!--"use_text_c":false,"use_bg_c":false,"text_c":"transparent","bg_c":"transparent",-->
							<!--"frame":"999","to":"y:-50px;opacity:0;","ease":"Power3.easeInOut"}]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]">Empower Your  </div>-->

                        <!-- LAYER NR. 12 -->
       <!--                 <div class="tp-caption   tp-resizeme rev-bigtext" id="slide-9-layer-2" data-x="['left','left','left','left']" data-hoffset="['15','295','15','15']" data-y="['top','top','top','top']" data-voffset="['297','285','355','270']" data-fontsize="['90','72','72','48']"-->
       <!--                     data-lineheight="['90','72','72','48']" data-width="none" data-height="none" data-whitespace="nowrap" data-type="text" data-responsive_offset="on" data-frames='[{"delay":500,"speed":600,"text_c":"transparent","bg_c":"transparent",-->
							<!--"use_text_c":false,"use_bg_c":false,"frame":"0","from":"x:-50px;opacity:0;",-->
							<!--"to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":600,-->
							<!--"use_text_c":false,"use_bg_c":false,"text_c":"transparent","bg_c":"transparent",-->
							<!--"frame":"999","to":"x:-50px;opacity:0;","ease":"Power3.easeInOut"}]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]">MINISTRY </div>-->

                        <!-- LAYER NR. 13 -->
       <!--                 <div class="tp-caption   tp-resizeme rev-paratext" id="slide-9-layer-4" data-x="['left','left','left','left']" data-hoffset="['20','300','20','20']" data-y="['top','top','top','top']" data-voffset="['400','380','455','360']" data-fontsize="['20','20','20','14']"-->
       <!--                     data-lineheight="['30','30','30','22']" data-width="none" data-height="none" data-whitespace="nowrap" data-type="text" data-responsive_offset="on" data-frames='[{"delay":700,"speed":600,"text_c":"transparent","bg_c":"transparent",-->
							<!--"use_text_c":false,"use_bg_c":false,"frame":"0","from":"x:50px;opacity:0;",-->
							<!--"to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":600,"use_text_c":false,-->
							<!--"use_bg_c":false,"text_c":"transparent","bg_c":"transparent","frame":"999",-->
							<!--"to":"x:50px;opacity:0;","ease":"Power3.easeInOut"}]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]">Deepen your understanding of God's Word and enhance your <br> your leadership skills. Our online divinity courses provide in-depth <br> theological education, ministry training, and spiritual growth. </div>-->

                        <!-- LAYER NR. 14 -->
       <!--                 <a class="tp-caption rev-btn rev-btn1" href="https://spiritbrood.org/apply.php" target="_blank" id="slide-9-layer-5" data-x="['left','left','left','left']" data-hoffset="['20','300','20','20']" data-y="['top','top','top','top']" data-voffset="['490','480','560','450']" data-fontsize="['16','16','16','14']"-->
       <!--                     data-lineheight="['16','16','16','14']" data-letterspacing="['0','','','']" data-width="['160','160','160','120']" data-height="['55','55','55','36']" data-whitespace="nowrap" data-type="button" data-actions='' data-responsive_offset="on"-->
       <!--                     data-frames='[{"delay":900,"speed":600,"text_c":"transparent","bg_c":"transparent",-->
							<!--"use_text_c":false,"use_bg_c":false,"frame":"0","from":"y:50px;opacity:0;",-->
							<!--"to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":600,"use_text_c":false,-->
							<!--"use_bg_c":false,"text_c":"transparent","bg_c":"transparent","frame":"999",-->
							<!--"to":"y:50px;opacity:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"0",-->
							<!--"ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;",-->
							<!--"style":"c:rgb(37,37,37);bs:solid;bw:0 0 0 0;"}]' data-textAlign="['center','center','center','center']" data-paddingtop="[20,20,20,12]" data-paddingright="[0,0,0,0]" data-paddingbottom="[19,19,19,10]" data-paddingleft="[0,0,0,0]"> Enrol Now!</a>-->

                        <!-- LAYER NR. 15 -->
       <!--                 <a class="tp-caption rev-btn rev-btn2" href="https://spiritbrood.org/college-degree-program.php" target="_blank" id="slide-9-layer-6" data-x="['left','left','left','left']" data-hoffset="['205','485','205','170']" data-y="['top','top','top','top']" data-voffset="['490','480','560','450']" data-fontsize="['16','16','16','14']"-->
       <!--                     data-lineheight="['16','16','16','14']" data-letterspacing="['0','','','']" data-width="['160','160','160','120']" data-height="['55','55','55','36']" data-whitespace="nowrap" data-type="button" data-actions='' data-responsive_offset="on"-->
       <!--                     data-frames='[{"delay":900,"speed":600,"text_c":"transparent","bg_c":"transparent",-->
							<!--"use_text_c":false,"use_bg_c":false,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;",-->
							<!--"ease":"Power3.easeInOut"},{"delay":"wait","speed":600,"use_text_c":false,-->
							<!--"use_bg_c":false,"text_c":"transparent","bg_c":"transparent","frame":"999",-->
							<!--"to":"y:50px;opacity:0;","ease":"Power3.easeInOut"},{"frame":"hover",-->
							<!--"speed":"0","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;",-->
							<!--"style":"c:rgb(255,255,255);"}]' data-textAlign="['center','center','center','center']" data-paddingtop="[18,18,18,10]" data-paddingright="[0,0,0,0]" data-paddingbottom="[17,17,17,10]" data-paddingleft="[0,0,0,0]">Learn More </a>-->
       <!--             </li>-->
                    
                      <!--SLIDE  -->
                    <li data-index="rs-10" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="300" data-thumb=" "
                        data-rotate="0" data-saveperformance="off" data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                         MAIN IMAGE 
                        <img src="images/main-slider/bg1.png" alt="" title="slide2-h3.jpg" width="1920" height="791" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="15" class="rev-slidebg" data-no-retina>
                         LAYERS 

                         LAYER NR. 6 
                        <div class="tp-caption   tp-resizeme rev-midtext" id="slide-10-layer-1" data-x="['left','left','left','left']" data-hoffset="['490','295','15','15']" data-y="['top','top','top','top']" data-voffset="['252','240','300','220']" data-fontsize="['24','24','24','22']"
                            data-lineheight="['24','24','24','22']" data-width="none" data-height="none" data-whitespace="nowrap" data-type="text" data-responsive_offset="on" data-frames='[{"delay":300,"speed":600,"text_c":"transparent","bg_c":"transparent",
							"use_text_c":false,"use_bg_c":false,"frame":"0","from":"y:-50px;opacity:0;",
							"to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":600,
							"use_text_c":false,"use_bg_c":false,"text_c":"transparent","bg_c":"transparent",
							"frame":"999","to":"y:-50px;opacity:0;","ease":"Power3.easeInOut"}]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]">Fan Your Potentials to  </div>

                         LAYER NR. 7 
                        <div class="tp-caption   tp-resizeme rev-bigtext" id="slide-10-layer-2" data-x="['left','left','left','left']" data-hoffset="['490','295','15','15']" data-y="['top','top','top','top']" data-voffset="['297','285','355','270']" data-fontsize="['90','72','72','52']"
                            data-lineheight="['90','72','72','52']" data-width="none" data-height="none" data-whitespace="nowrap" data-type="text" data-responsive_offset="on" data-frames='[{"delay":500,"speed":600,"text_c":"transparent","bg_c":"transparent",
							"use_text_c":false,"use_bg_c":false,"frame":"0","from":"x:-50px;opacity:0;",
							"to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":600,"use_text_c":false,
							"use_bg_c":false,"text_c":"transparent","bg_c":"transparent","frame":"999",
							"to":"x:-50px;opacity:0;","ease":"Power3.easeInOut"}]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]">FLAME </div>

                         LAYER NR. 8 
                        <div class="tp-caption   tp-resizeme rev-paratext" id="slide-10-layer-4" data-x="['left','left','left','left']" data-hoffset="['495','300','20','20']" data-y="['top','top','top','top']" data-voffset="['410','380','455','360']" data-fontsize="['20','20','20','14']"
                            data-lineheight="['30','30','30','22']" data-width="none" data-height="none" data-whitespace="nowrap" data-type="text" data-responsive_offset="on" data-frames='[{"delay":700,"speed":600,"text_c":"transparent","bg_c":"transparent",
							"use_text_c":false,"use_bg_c":false,"frame":"0","from":"x:50px;opacity:0;","to":"o:1;",
							"ease":"Power3.easeInOut"},{"delay":"wait","speed":600,"use_text_c":false,
							"use_bg_c":false,"text_c":"transparent","bg_c":"transparent","frame":"999",
							"to":"x:50px;opacity:0;","ease":"Power3.easeInOut"}]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]">Our training programs and credentials are designed to fan your <br> potentials to flame and be your springboard to an enhanced career <br> and ministry. </div>

                         LAYER NR. 9 
                        <a class="tp-caption rev-btn rev-btn1" href="https://spiritbrood.org/apply.php" target="_blank" id="slide-10-layer-5" data-x="['left','left','left','left']" data-hoffset="['493','299','20','20']" data-y="['top','top','top','top']" data-voffset="['510','480','560','450']" data-fontsize="['16','16','16','14']"
                            data-lineheight="['16','16','16','14']" data-letterspacing="['0','','','']" data-width="['160','160','160','120']" data-height="['55','55','55','36']" data-whitespace="nowrap" data-type="button" data-actions='' data-responsive_offset="on"
                            data-frames='[{"delay":900,"speed":600,"text_c":"transparent","bg_c":"transparent",
							"use_text_c":false,"use_bg_c":false,"frame":"0","from":"y:50px;opacity:0;",
							"to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":600,
							"use_text_c":false,"use_bg_c":false,"text_c":"transparent","bg_c":"transparent",
							"frame":"999","to":"y:50px;opacity:0;","ease":"Power3.easeInOut"},
							{"frame":"hover","speed":"0","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;",
							"style":"c:rgb(37,37,37);bs:solid;bw:0 0 0 0;"}]' data-textAlign="['center','center','center','center']" data-paddingtop="[20,20,20,12]" data-paddingright="[0,0,0,0]" data-paddingbottom="[19,19,19,10]" data-paddingleft="[0,0,0,0]">Enrol Now! </a>

                         LAYER NR. 10 
                        <a class="tp-caption rev-btn rev-btn2" href="https://spiritbrood.org/college-degree-program.php" target="_blank" id="slide-10-layer-6" data-x="['left','left','left','left']" data-hoffset="['675','485','205','170']" data-y="['top','top','top','top']" data-voffset="['510','480','560','450']" data-fontsize="['16','16','16','14']"
                            data-lineheight="['16','16','16','14']" data-letterspacing="['0','','','']" data-width="['160','160','160','120']" data-height="['55','55','55','36']" data-whitespace="nowrap" data-type="button" data-actions='' data-responsive_offset="on"
                            data-frames='[{"delay":900,"speed":600,"text_c":"transparent","bg_c":"transparent",
							"use_text_c":false,"use_bg_c":false,"frame":"0","from":"y:50px;opacity:0;",
							"to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":600,
							"use_text_c":false,"use_bg_c":false,"text_c":"transparent","bg_c":"transparent",
							"frame":"999","to":"y:50px;opacity:0;","ease":"Power3.easeInOut"},
							{"frame":"hover","speed":"0","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;",
							"style":"c:rgb(255,255,255);"}]' data-textAlign="['center','center','center','center']" data-paddingtop="[18,18,18,10]" data-paddingright="[0,0,0,0]" data-paddingbottom="[17,17,17,10]" data-paddingleft="[0,0,0,0]">Learn More </a>
                    </li>
                    
                     <!-- SLIDE  -->
       <!--             <li data-index="rs-11" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="300" data-thumb=" "-->
       <!--                 data-rotate="0" data-saveperformance="off" data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">-->
                        <!-- MAIN IMAGE -->
       <!--                 <img src="images/main-slider/1 (1).png" alt="" title="slide2-h3.jpg" width="1920" height="791" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="15" class="rev-slidebg" data-no-retina>-->
                        <!-- LAYERS -->

                        <!-- LAYER NR. 6 -->
       <!--                 <div class="tp-caption   tp-resizeme rev-midtext" id="slide-11-layer-1" data-x="['left','left','left','left']" data-hoffset="['490','295','15','15']" data-y="['top','top','top','top']" data-voffset="['252','240','300','220']" data-fontsize="['24','24','24','22']"-->
       <!--                     data-lineheight="['24','24','24','22']" data-width="none" data-height="none" data-whitespace="nowrap" data-type="text" data-responsive_offset="on" data-frames='[{"delay":300,"speed":600,"text_c":"transparent","bg_c":"transparent",-->
							<!--"use_text_c":false,"use_bg_c":false,"frame":"0","from":"y:-50px;opacity:0;",-->
							<!--"to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":600,-->
							<!--"use_text_c":false,"use_bg_c":false,"text_c":"transparent","bg_c":"transparent",-->
							<!--"frame":"999","to":"y:-50px;opacity:0;","ease":"Power3.easeInOut"}]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]">Self-Paced Online </div>-->

                        <!-- LAYER NR. 7 -->
       <!--                 <div class="tp-caption   tp-resizeme rev-bigtext" id="slide-11-layer-2" data-x="['left','left','left','left']" data-hoffset="['490','295','15','15']" data-y="['top','top','top','top']" data-voffset="['297','285','355','270']" data-fontsize="['90','72','72','52']"-->
       <!--                     data-lineheight="['90','72','72','52']" data-width="none" data-height="none" data-whitespace="nowrap" data-type="text" data-responsive_offset="on" data-frames='[{"delay":500,"speed":600,"text_c":"transparent","bg_c":"transparent",-->
							<!--"use_text_c":false,"use_bg_c":false,"frame":"0","from":"x:-50px;opacity:0;",-->
							<!--"to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":600,"use_text_c":false,-->
							<!--"use_bg_c":false,"text_c":"transparent","bg_c":"transparent","frame":"999",-->
							<!--"to":"x:-50px;opacity:0;","ease":"Power3.easeInOut"}]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]">LEARNING </div>-->

                        <!-- LAYER NR. 8 -->
       <!--                 <div class="tp-caption   tp-resizeme rev-paratext" id="slide-11-layer-4" data-x="['left','left','left','left']" data-hoffset="['495','300','20','20']" data-y="['top','top','top','top']" data-voffset="['410','380','455','360']" data-fontsize="['20','20','20','14']"-->
       <!--                     data-lineheight="['30','30','30','22']" data-width="none" data-height="none" data-whitespace="nowrap" data-type="text" data-responsive_offset="on" data-frames='[{"delay":700,"speed":600,"text_c":"transparent","bg_c":"transparent",-->
							<!--"use_text_c":false,"use_bg_c":false,"frame":"0","from":"x:50px;opacity:0;","to":"o:1;",-->
							<!--"ease":"Power3.easeInOut"},{"delay":"wait","speed":600,"use_text_c":false,-->
							<!--"use_bg_c":false,"text_c":"transparent","bg_c":"transparent","frame":"999",-->
							<!--"to":"x:50px;opacity:0;","ease":"Power3.easeInOut"}]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]">Our online degree programs offer self-paced learning accessible from <br> anywhere in the world, allowing you to customize your educational <br> journey according to your individual circumstances and aspirations. </div>-->

                        <!-- LAYER NR. 9 -->
       <!--                 <a class="tp-caption rev-btn rev-btn1" href="https://spiritbrood.org/apply.php" target="_blank" id="slide-11-layer-5" data-x="['left','left','left','left']" data-hoffset="['493','299','20','20']" data-y="['top','top','top','top']" data-voffset="['510','480','560','450']" data-fontsize="['16','16','16','14']"-->
       <!--                     data-lineheight="['16','16','16','14']" data-letterspacing="['0','','','']" data-width="['160','160','160','120']" data-height="['55','55','55','36']" data-whitespace="nowrap" data-type="button" data-actions='' data-responsive_offset="on"-->
       <!--                     data-frames='[{"delay":900,"speed":600,"text_c":"transparent","bg_c":"transparent",-->
							<!--"use_text_c":false,"use_bg_c":false,"frame":"0","from":"y:50px;opacity:0;",-->
							<!--"to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":600,-->
							<!--"use_text_c":false,"use_bg_c":false,"text_c":"transparent","bg_c":"transparent",-->
							<!--"frame":"999","to":"y:50px;opacity:0;","ease":"Power3.easeInOut"},-->
							<!--{"frame":"hover","speed":"0","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;",-->
							<!--"style":"c:rgb(37,37,37);bs:solid;bw:0 0 0 0;"}]' data-textAlign="['center','center','center','center']" data-paddingtop="[20,20,20,12]" data-paddingright="[0,0,0,0]" data-paddingbottom="[19,19,19,10]" data-paddingleft="[0,0,0,0]">Enrol Now! </a>-->

                        <!-- LAYER NR. 10 -->
       <!--                 <a class="tp-caption rev-btn rev-btn2" href="https://spiritbrood.org/college-degree-program.php" target="_blank" id="slide-11-layer-6" data-x="['left','left','left','left']" data-hoffset="['675','485','205','170']" data-y="['top','top','top','top']" data-voffset="['510','480','560','450']" data-fontsize="['16','16','16','14']"-->
       <!--                     data-lineheight="['16','16','16','14']" data-letterspacing="['0','','','']" data-width="['160','160','160','120']" data-height="['55','55','55','36']" data-whitespace="nowrap" data-type="button" data-actions='' data-responsive_offset="on"-->
       <!--                     data-frames='[{"delay":900,"speed":600,"text_c":"transparent","bg_c":"transparent",-->
							<!--"use_text_c":false,"use_bg_c":false,"frame":"0","from":"y:50px;opacity:0;",-->
							<!--"to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":600,-->
							<!--"use_text_c":false,"use_bg_c":false,"text_c":"transparent","bg_c":"transparent",-->
							<!--"frame":"999","to":"y:50px;opacity:0;","ease":"Power3.easeInOut"},-->
							<!--{"frame":"hover","speed":"0","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;",-->
							<!--"style":"c:rgb(255,255,255);"}]' data-textAlign="['center','center','center','center']" data-paddingtop="[18,18,18,10]" data-paddingright="[0,0,0,0]" data-paddingbottom="[17,17,17,10]" data-paddingleft="[0,0,0,0]">Learn More </a>-->
       <!--             </li>-->
                </ul>
            </div>
        </section>
        <!--Main Slider  end-->
        <!-- why choose us -->
        <div class="whychooseus-2">
            <div class="container">
                <div class="mf-services-3 style-1 ">
                    <div class="services-list clearfix">
                        <div class="vc_service-wrapper "><span class="mf-icon"><i class='bx bxs-color bx-why'></i></span>
                            <h3><a href="#" title="100% Free Tuition" style="color: #001029;">100% Free Tuition</a></h3>
                            <div class="desc">All our programs are Spirit Brood Theological Seminary are
                                Tuition-free, and our lectures are released as open-resource materials..</div>
                        </div>
                        <div class="vc_service-wrapper featured-box"><span class="mf-icon"><i class='bx bx-timer bx-why'></i></span>
                            <h3><a href="#" title="Self-paced Programs" style="color: #001029;">Self-paced Programs </a></h3>
                            <div class="desc">You can enroll anytime of the year and learn at your own
                                pace for a personalized and effective educational experience.</div>
                        </div>
                        <div class="vc_service-wrapper"><span class="mf-icon"><i class='bx bx-library bx-why'></i></span>
                            <h3><a href="#" title="High-quality Learning " style="color: #001029;">High-quality Learning  </a></h3>
                            <div class="desc"> Our programs will help deepen your understanding of
                                God’s word, enhance your leadership skills, and prepare you for effective
                                ministry.</div>
                        </div>
                        
                    </div>
                </div>
                <div class="whypara">
                    <!--We Are Excited to Work With You as You Embark on a Fulfilling Academic Adventure</a>-->
                    <p style="font-size: 22px;">As a student of Spirit Brood Theological Seminary, you will greatly benefit from our
                    commitment to quality education at an affordable cost and flexible learning options.
                    </p>
                    
                </div>
            </div>
        </div>
        <!-- why choose us end -->

          <!-- programs -->
         <div class="mf-portfolio  style-3 backbg" id="academic-programs">
            <div class="container-fluid">
        <section id="gallery">
            <div class="container-fluid gallery">
              
                <div class="card">
                    <img src="images/c/c.png" alt="Undergraduate Program">
                    <h3>Certificate Programs</h3>
                    <div class="overlay">
                        <p>Integrate faith and expertise to achieve meaningful impact in Christian Organizations.
                        </p>
                        <a href="certificate-programs.php"><button>Read More <i class='bx bx-right-arrow-alt'></i></button></a>
                    </div>
                </div>
                <div class="card">
                    <img src="images/c/l.png" alt="License Program">
                    <h3>License Programs</h3>
                    <div class="overlay">
                        <p>Lay ministry license and academic credentials to demonstrate proficiency in a field of Christian ministry.</p>
                        <a href="license-programs.php"><button>Read more <i class='bx bx-right-arrow-alt'></i></button></a>
                    </div>
                </div>
                <div class="card">
                    <img src="images/c/u.png" alt="Undergraduate Program">
                    <h3>Bachelor's Programs</h3>
                    <div class="overlay">
                        <p>Foundational training for ministry, equipping you for success in future studies and career.
                        </p>
                        <a href="bachelor-degree-programs.php"><button>Read more <i class='bx bx-right-arrow-alt'></i></button></a>
                    </div>
                </div>
                <div class="card">
                    <img src="images/c/m.png" alt="Masters Program">
                    <h3>Masters Programs</h3>
                    <div class="overlay">
                        <p>Comprehensive training and research work to prepare you for advanced career/ministry roles.</p>
                        <a href="masters-degree-programs.php"><button>Read more <i class='bx bx-right-arrow-alt'></i></button></a>
                    </div>
                </div>
                <div class="card">
                    <img src="images/c/d.png" alt="Doctorate program">
                    <h3 style="font-weight: 900;">Doctorate Programs</h3>
                    <div class="overlay">
                        <p>Gain advanced scholarship and practical competence for core leadership roles.</p>
                       <a href="doctorate-degree-programs.php"> <button>Read more <i class='bx bx-right-arrow-alt'></i></button></a>
                    </div>
                </div>
                  <div class="card">
                    <img src="images/c/7.png" alt="College Programs">
                       <div class="animated-content">
                          <h2 style="color: #fff; margin-top: -10px;">Advance Your Career or Ministry Today</h2>
                         <a href="https://spiritbrood.org/apply.php"><button class="card-btn">Enrol Now!</button></a>
                        </div>
                      </div>
                    <!--<h3>College Programs</h3>-->
                    <!--<div class="overlay">-->
                    <!--    <p>Explore theological studies and apply Christian principles to leadership and management.-->
                    <!--    </p>-->
                    <!--    <button>Read More <i class='bx bx-right-arrow-alt'></i></button>-->
                    <!--</div>-->
                </div>
            </div>
        </section>

       </div>
        </div>
        <!-- programs end -->


    <div class="container-fluid degree-content">
        <div class="content">
            <h1>Fast-Track Dual Degree Program</h1>
            <p>Our Fast-Track Dual Degree Programs at Spirit Brood Theological Seminary allow you to complete two degree programs in less time. You can earn either your Bachelors and Masters degrees or your Masters and Doctorate degrees through our customized fast-track programs.</p>
           <p style="text-align: center;"><a href="https://spiritbrood.org/apply-admission-procedure.php"> <button type="button" class="btn btn-out btn-outline-dark">Enrol Now</button</a></p>
        </div>
        <div class="image img-gra">
            <img src="images/team/1 1.png" alt="Graduate">
        </div>
    </div>
    <div class="container-fluid degree-content degree-content-faq">
        <div class="image">
            <img src="images/team/image 117.png" class="why-img" alt="faq-image">
        </div>
        <div class="content">
            <h1>Why Spirit Brood Theological Seminary?</h1>
            <p>Affordable Tuition — all of our courses are 100% tuition-free.</p><br />
            <p>Our degree programs are 100% self-paced and online. You are allowed to work at your own pace from anywhere in the world.</p><br />
            <p>We use proven educational concepts that deliver high-quality learning in simplified and easy-to-understand formats.</p><br />
            <p style="text-align: center;"><a href="https://spiritbrood.org/apply.php"><button type="button" class="btn btn-out btn-outline-dark">Enrol Now</button></a></p>
        </div>
       
    </div>
    
    <?php 
    include($IPATH."footer.html"); ?>