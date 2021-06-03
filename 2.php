<a name=sec2>
  <br><br>
    <div class="container-fluid"  style="padding-left: 1cm;">
        <div class="row">
            <div class="col">
                    <h4>สถานที่พารามิเตอร์ในประเทศไทย</h4>
                    <h5><font color="#DCDCDC">เเยกตามจังหวัด</font></h5>
                    <p><font color="#DCDCDC">อัปเดตล่าสุด 27/05/2021</font></p>
                
                    <table class="table table-striped">
                        <thead>
                            <tr>
                            <th scope="col">ที่ตั้ง</th>
                            
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                            <td>มหาวิทยาลัยราชภัฏวไลยอลงกรณ์ ในพระบรมราชูปถัมภ์  ถ. พหลโยธิน ตำบล คลองหนึ่ง อำเภอคลองหลวง ปทุมธานี 13180</td>
                            </tr>
                            <tr>
                            <td>สถานีตำรวจทางหลวง1 กองกำกับการ1 กองบังคับการตำรวจทางหลวง ตำบล เชียงรากน้อย อำเภอบางปะอิน จังหวัดพระนครศรีอยุธยา 12120</td>
                            </tr>
                            <tr>
                            <td>สนามหลวง ถนน ราชดำเนินกลาง แขวงพระบรมมหาราชวัง เขตพระนคร กรุงเทพมหานคร 10200</td>
                            </tr>
                            <tr>
                            <td>วัดตะโก หลวงพ่อรวย  31หมู่2 ดอนหญ้านาง อำเภอ ภาชี จังหวัดพระนครศรีอยุธยา 13140</td>
                            </tr>
                            <tr>
                            <td>วัดพระธาตุดอยสุเทพราชวรวิหาร 9 หมู่ที่ 9 อำเภอเมืองเชียงใหม่ เชียงใหม่ 50200</td>
                            </tr>
                            <tr>
                            <td>ดอยอินทนนท์ ตำบล บ้านหลวง อำเภอจอมทอง เชียงใหม่ 50270 </td>
                            </tr>
                            <tr>
                            <td>ดอยเสมอดาว ตำบล ศรีษะเกษ อำเภอนาน้อย น่าน 55150 </td>
                            </tr>
                        </tbody>  
                    </table>
                </div>
                <div id="map"></div>
                <script>

                var locations = [
                    ['วัดลาดปลาเค้า', 13.846876, 100.604481],
                    ['หมู่บ้านอารียา', 13.847766, 100.605768],
                    ['สปีดเวย์', 13.845235, 100.602711],
                    ['สเต็ก ลุงหนวด',13.862970, 100.613834]
                ];

                    function initMap() {
                    var mapOptions = {
                    center: {lat: 13.847860, lng: 100.604274},
                    zoom: 15,
                    }
                    
                    var maps = new google.maps.Map(document.getElementById("map"),mapOptions);
                    
                    var marker, i, info;

                    for (i = 0; i < locations.length; i++) {  

                    marker = new google.maps.Marker({
                        position: new google.maps.LatLng(locations[i][1], locations[i][2]),
                        map: maps,
                        title: locations[i][0]
                    });

                    info = new google.maps.InfoWindow();

                    google.maps.event.addListener(marker, 'click', (function(marker, i) {
                    return function() {
                        info.setContent(locations[i][0]);
                        info.open(maps, marker);
                    }
                    })(marker, i));

                    }

                }
                </script>
                <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAK3RgqSLy1toc4lkh2JVFQ5ipuRB106vU&callback=initMap" async defer></script>         
        </div>
    </div>
        </div>
       
     