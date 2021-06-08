<div class="container-fluid p-5">
    <a name=sec2></a>
    <br><br>
    <div>
        <div class="row">
            <div class="col">
                <h4>สถานที่พารามิเตอร์ในประเทศไทย</h4>
                <h5>
                    <font color="#DCDCDC">เเยกตามจังหวัด</font>
                </h5>
                <p>
                    <font color="#DCDCDC">อัปเดตล่าสุด 27/05/2021</font>
                </p>

                <table class="table table-striped">
                    <thead>

                        <tr>
                            <th scope="col">ที่ตั้ง</th>
                        </tr>

                    </thead>
                    <tbody>

                        <tr>
                            <td>มหาวิทยาลัยราชภัฏวไลยอลงกรณ์ ในพระบรมราชูปถัมภ์ ถ. พหลโยธิน ตำบล คลองหนึ่ง อำเภอคลองหลวง ปทุมธานี 13180</td>
                        </tr>

                        <tr>
                            <td>สถานีตำรวจทางหลวง1 กองกำกับการ1 กองบังคับการตำรวจทางหลวง ตำบล เชียงรากน้อย อำเภอบางปะอิน จังหวัดพระนครศรีอยุธยา 12120</td>
                        </tr>

                        <tr>
                            <td>สนามหลวง ถนน ราชดำเนินกลาง แขวงพระบรมมหาราชวัง เขตพระนคร กรุงเทพมหานคร 10200</td>
                        </tr>

                        <tr>
                            <td>วัดตะโก หลวงพ่อรวย 31หมู่2 ดอนหญ้านาง อำเภอ ภาชี จังหวัดพระนครศรีอยุธยา 13140</td>
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
                    ['ราม1', 13.73520, 100.69927],
                    ['พระราม 9 ไก่ย่าง', 13.73520, 100.69927],
                    ['ยอดลาบเป็ดอุดร', 13.73520, 100.69927]
                ];

                function initMap() {
                    const map = new google.maps.Map(document.getElementById("map"), {
                        zoom: 5,
                        center: {
                            lat: 13.75284,
                            lng: 100.61871
                        },
                        mapTypeId: "terrain",
                    });
                    // Define the LatLng coordinates for the polygon's path.
                    const triangleCoords = [{
                            lat: 13.75981,
                            lng: 100.62159
                        },
                        {
                            lat: 13.74605,
                            lng: 100.61270
                        },
                        {
                            lat: 13.74318,
                            lng: 100.63121
                        },
                        {
                            lat: 13.75981,
                            lng: 100.62159
                        },
                    ];
                    // Construct the polygon.
                    const bermudaTriangle = new google.maps.Polygon({
                        paths: triangleCoords,
                        strokeColor: "#FF0000",
                        strokeOpacity: 0.8,
                        strokeWeight: 2,
                        fillColor: "#FF0000",
                        fillOpacity: 0.35,
                    });
                    bermudaTriangle.setMap(map);
                }
            </script>

            <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA-NoP20OejFNd_gxMizvmRCDHwRPg0gJI&callback=initMap" async defer></script>
        </div>
    </div>
</div>