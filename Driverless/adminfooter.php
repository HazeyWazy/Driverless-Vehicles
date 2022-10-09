<!DOCTYPE html>
<html>
    <head>
        <title>Driverless - Footer</title>
    </head>
    <body>
        <div class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="text-container about">
                            <h4>Few Words About Driverless</h4>
                            <p class="white">We're passionate about providing the best information for everyone who are interested in autonomous vehicles and AI Tech.</p>
                        </div> <!-- end of text-container -->
                    </div> <!-- end of col -->
                    <div class="col-md-2">
                        <div class="text-container">
                            <h4>Newsfeed</h4>
                            <ul class="list-unstyled li-space-lg white"> 
                                <li>
                                    <a class="white" href="https://www.bmw.sr/en/topics/fascination-bmw/bmw-personal-copilot.html">BMW</a>
                                </li>
                                <li>
                                    <a class="white" href="https://news.mit.edu/topic/autonomous-vehicles">MIT News</a>
                                </li>
                                <li>
                                    <a class="white" href="https://www.autonews.com/topic/autonomous-vehicle">Automotive News</a>
                                </li>
                            </ul>
                        </div> <!-- end of text-container -->
                    </div> <!-- end of col -->
                    <div class="col-md-2">
                        <div class="text-container">
                            <div id="google_translate_element"></div>
                            <script> 
                                function googleTranslateElementInit() {
                                new google.translate.TranslateElement({
                                    pageLanguage: 'en'
                                }, 'google_translate_element');
                                }
                            </script>
                            <script src="http://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script> 
                        </div> <!-- end of text-container -->
                    </div> <!-- end of col -->
                    <div class="col-md-2">
                        <div class="text-container">
                            <!-- weather widget start -->
                            <div id="m-booked-vertical-one-prime-66726"> 
                                <div class="weather-customize weather-booked-vertical-one-prime" style="width:180px;">  
                                    <div class="booked-vertical-prime-in"> 
                                        <div class="booked-vertical-prime"> 
                                            <div class="bwop-city">San Francisco</div> 
                                                <div class="bwop-icon wm18 "></div> 
                                                    <div class="booked-bwop-today"> 
                                                        <div class="booked-bwop-today-temperature"> 
                                                            <div class="booked-wzs-bwop-val"> 
                                                                <div class="booked-bwop-number"><span class="plus">+</span>15</div> 
                                                                <div class="booked-bwop-dergee"> 
                                                                    <div class="booked-wzs-bwop-dergee-val">&deg;</div> 
                                                                    <div class="booked-wzs-bwop-dergee-name">C</div> 
                                                                </div> 
                                                            </div> 
                                                        </div> 
                                                        <div class="booked-bwop-today-extreme"> 
                                                            <div class="booked-bwop booked-pd-h"><span>High:</span><span class="plus">+</span>16</div> 
                                                            <div class="booked-bwop booked-pd-l"><span>Low:</span><span class="plus">+</span>14</div> 
                                                        </div> 
                                                    </div> 
                                            <div class="bwop-state"> Rain </div> 
                                        </div> 
                                    </div> 
                                </div> 
                            </div>
                                    <script type="text/javascript"> 
                                        var css_file=document.createElement("link"); 
                                        var widgetUrl = location.href; 
                                        css_file.setAttribute("rel","stylesheet"); 
                                        css_file.setAttribute("type","text/css"); 
                                        css_file.setAttribute("href",'https://s.bookcdn.com/css/w/booked-wzs-prime-vertical-one.css?v=0.0.1'); 
                                        document.getElementsByTagName("head")[0].appendChild(css_file); 
                                        function setWidgetData_66726(data) { if(typeof(data) != 'undefined' && data.results.length > 0) { for(var i = 0; i < data.results.length; ++i) { var objMainBlock = document.getElementById('m-booked-vertical-one-prime-66726'); 
                                        if(objMainBlock !== null) { var copyBlock = document.getElementById('m-bookew-weather-copy-'+data.results[i].widget_type); 
                                        objMainBlock.innerHTML = data.results[i].html_code; 
                                        if(copyBlock !== null) objMainBlock.appendChild(copyBlock); } } } else { alert('data=undefined||data.results is empty'); } } var widgetSrc = "https://widgets.booked.net/weather/info?action=get_weather_info;ver=7;cityID=18163;type=7;scode=124;ltid=3458;domid=w209;anc_id=53319;countday=undefined;cmetric=1;wlangID=1;color=137AE9;wwidth=180;header_color=ffffff;text_color=333333;link_color=08488D;border_form=1;footer_color=ffffff;footer_text_color=333333;transparent=0;v=0.0.1";
                                        widgetSrc += ';ref=' + widgetUrl;widgetSrc += ';rand_id=66726';
                                        var weatherBookedScript = document.createElement("script"); 
                                        weatherBookedScript.setAttribute("type", "text/javascript"); 
                                        weatherBookedScript.src = widgetSrc; 
                                        document.body.appendChild(weatherBookedScript) 
                                    </script>
                                <!-- weather widget end -->
                        </div> <!-- end of text-container -->
                    </div> <!-- end of col -->
                </div> <!-- end of row -->
            </div> <!-- end of container -->
        </div> <!-- end of footer -->

        <!-- Copyright -->
        <div class="copyright">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <p class="p-small">Copyright © 2020 - 2021 Driverless</p>
                    </div> <!-- end of col -->
                </div> <!-- enf of row -->
            </div> <!-- end of container -->
        </div> <!-- end of copyright --> 
        <!-- end of copyright -->
    </body>
</html>