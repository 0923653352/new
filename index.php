<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="หน้าสรุป.css">
    <link href="https://fonts.googleapis.com/css?family=Prompt" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.min.js" integrity="sha384-lpyLfhYuitXl2zRZ5Bn2fqnhNAKOAaM/0Kr9laMspuaMiZfGmfwRNFh8HlMy49eQ" crossorigin="anonymous"></script>  
    <title>เช็คสถานการณ์ Covid-19 ได้ที่นี่</title>

<div>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
    google.charts.load('current', {'packages':['corechart']});
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {

        var data = google.visualization.arrayToDataTable([
        ['Task', 'Hours per Day'],
        ['อุณหภูมิ(C)',     35],
        ['ความชื้นในอากาศ(%)',      100],
        ['ความชื้นในดิน(%)',  49],
        ['ระดับน้ำ(mm)', 76],
        ['เเสง(lux)',    987]
        ]);

        var options = {
        title: 'สภาพอากาศ'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
    }
    </script>
    </div>
    <script id="kaw" type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
    google.charts.load('current', {'packages':['corechart']});
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {
        var data = google.visualization.arrayToDataTable([
        ['month', 'เเสง(lux)', 'ความชื้นในอากาศ(%)' ],
        ['เดือนที่1',  1000,      400],
        ['เดือนที่2',  1170,      460],
        ['เดือนที่3',  660,       1120],
        ['เดือนที่4',  1030,      540],
        ['เดือนที่5',  1000,      400],
        ['เดือนที่6',  1170,      460],
        ['เดือนที่7',  660,       1120],
        ['เดือนที่8',  1030,      540],
        ['เดือนที่9',  1000,      400],
        ['เดือนที่10',  1170,      460],
        ['เดือนที่11',  660,       1120],
        ['เดือนที่12',  1030,      540]
        ]);

        var options = {
        title: '',
        curveType: 'function',
        legend: { position: 'bottom' }
        };

        var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

        chart.draw(data, options);
    }
    </script>
</head>
<style>
    h1, h2, h3, h4, h6, nav, .nav, .menu, button, .button, .btn, .price, ._heading, .wp-block-pullquote blockquote, blockquote, label, legend, a, .card-header, th , display-4 {
    font-family: "Prompt", "Open Sans script=all rev=1" !important;
    font-weight: 700 !important;

        }
    .flexbox {
        display: flex;
        flex-direction: row;
        flex-wrap:wrap;
        justify-content: flex-end;
        align-items: stretch;
        box-sizing: border-box;
        margin: 0px 0px;
        
    }

    .item {
        box-sizing: border-box;
        width: 30%;
        margin-bottom: 20px;
        padding: 0px 0px;
        
    }

    .content {
        color: #ffffff;
        font-weight: 600;
        text-align: center;
        box-sizing: border-box;
        height: 140px;
        padding: 10px;
    }
ิ     h5{
        margin: 0 0 10px;
        padding: 0;
        font-size: 24px;
        }
        input [type="text"] {
        border: none;
        outline: none;
        border-radius: 25px 0 0 25px;
        }
        input [type="submit"]{
        border-radius: 25px 0 0 25px;
        border: none;
        outline: none;
        cursor: pointer;
        background-color: #ffc107;
        color:aliceblue
        }
        input [type="submit"]:hover{
        background: #ff5722;
        }
</style>
<body>
        <?php include('navbar.php.php');  ?>
    
        <?php include('1.php');  ?>
        
        <?php include('2.php');  ?>

        <?php include('3.php');  ?>

            
        

    <a name=sec4>
    <div style="padding-left:1cm; background-color:#e6e6e6 ;">
    <h4>ข้อมูลสภาพอากาศ</h4>
    <h5><font color="#DCDCDC">ได้ที่สถานที่ใดบ้าง</font></h5>
    <p><font color="#DCDCDC">อัปเดตล่าสุด 27/05/2021</font></p>
    <div class="box">
        <h5>Search</h5>
        
        <form>
        <input type="text" name="" placeholder="ค้นหา ชื่อสถานที่ จังหวัด อำเภอ ตำบล">
        <input type="submit" name="" value="Seaech">

        <div class="dropdown"  >&nbsp;&nbsp;&nbsp;        
            <button class="dropbtn">พารามิเตอร์<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-down-fill" viewBox="0 0 16 16">
                <path d="M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z"/>
            </svg></button>
            <div class="dropdown-content " >
            <ul class="list-group">
                <li class="list-group-item">
                <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
                : อุณหภูมิ(C)
                </li>
                <li class="list-group-item">
                <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
                : ความชื้นในอากาศ(%)
                </li>
                <li class="list-group-item">
                <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
                : ความชื้นในดิน(%)
                </li>
                <li class="list-group-item">
                <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
                : เเสง(lux)
                </li>
                <li class="list-group-item">
                <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
                : คุณภาพน้ำ(%)
                </li>
                <li class="list-group-item">
                    <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
                    : ระดับน้ำ(%)
                </li>
            </ul>
            </div>
        </div>
        <div class="dropdown"  >&nbsp;&nbsp;&nbsp;        
            <button class="dropbtn" >ทุกช่วงเวลา<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-down-fill" viewBox="0 0 16 16">
                <path d="M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z"/>
            </svg></button>
            <div class="dropdown-content">
            <ul class="list-group">
                <li class="list-group-item">
                <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
                : 1 วันล่าสุด
                </li>
                <li class="list-group-item">
                <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
                : 1 สัปดาห์ล่าสุด
                </li>
                <li class="list-group-item">
                <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
                : 1 เดือนล่าสุด
                </li>
                <li class="list-group-item">
                <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
                : 1 ไตรมาสล่าสุด
                </li>
                <li class="list-group-item">
                <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
                : 1 ปีล่าสุด
                </li>
                
            </ul>
            </div>
        </div>
        </form>
    </div>


        <div id="carouselExampleIndicators" class="carousel slide " data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
        <table class="table table-striped">
            <thead>
                <tr>
                <th scope="col">ที่ตั้ง</th>
                <th scope="col"><div style="background:#009f88;  width: 20px; height: 20px;"></div></th>
                <th scope="col"><div style="background:#0066ff;  width: 20px; height: 20px;"></div></th>
                <th scope="col"><div style="background:#5b3701;  width: 20px; height: 20px;"></div></th>
                <th scope="col"><div style="background:#93b200;  width: 20px; height: 20px;"></div></th>
                <th scope="col"><div style="background:#00388d;  width: 20px; height: 20px;"></div></th>
                <th scope="col"><div style="background:#009653;  width: 20px; height: 20px;"></div></th>
                <th scope="col">ดาวน์โหลด</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <td>มหาวิทยาลัยราชภัฏวไลยอลงกรณ์ ในพระบรมราชูปถัมภ์  ถ. พหลโยธิน ตำบล คลองหนึ่ง อำเภอคลองหลวง ปทุมธานี 13180</td>
                <td>32</td>
                <td>50</td>
                <td>35</td>
                <td>700</td>
                <td>7.7</td>
                <td>80</td>
                <td><a href="ตัวอย่างข้อมูล Sensor - Sheet1 (1).pdf"><img src="download.png" style="padding-left: 0.4cm ;"></a></td>
                </tr>
                <tr>
                <td>สถานีตำรวจทางหลวง1 กองกำกับการ1 กองบังคับการตำรวจทางหลวง ตำบล เชียงรากน้อย อำเภอบางปะอิน จังหวัดพระนครศรีอยุธยา 12120</td>
                <td>20</td>
                <td>55</td>
                <td>49</td>
                <td>770</td>
                <td>8.0</td>
                <td>88</td>
                <td><a href="ตัวอย่างข้อมูล Sensor - Sheet1 (1).pdf"><img src="download.png " style="padding-left: 0.4cm ;"></a></td>
                </tr>
                <tr>
                <td>สนามหลวง ถนน ราชดำเนินกลาง แขวงพระบรมมหาราชวัง เขตพระนคร กรุงเทพมหานคร 10200</td>
                <td>19</td>
                <td>90</td>
                <td>87</td>
                <td>690</td>
                <td>6.5</td>
                <td>76</td>
                <td><a href="ตัวอย่างข้อมูล Sensor - Sheet1 (1).pdf"><img src="download.png" style="padding-left: 0.4cm ;"></a></td>
                </tr>
                <tr>
                <td>วัดตะโก หลวงพ่อรวย  31หมู่2 ดอนหญ้านาง อำเภอ ภาชี จังหวัดพระนครศรีอยุธยา 13140</td>
                <td>30</td>
                <td>76</td>
                <td>54</td>
                <td>900</td>
                <td>8.0</td>
                <td>89</td>
                <td><a href="ตัวอย่างข้อมูล Sensor - Sheet1 (1).pdf"><img src="download.png" style="padding-left: 0.4cm ;"></a></td>
                </tr>
                <tr>
                <td>วัดพระธาตุดอยสุเทพราชวรวิหาร 9 หมู่ที่ 9 อำเภอเมืองเชียงใหม่ เชียงใหม่ 50200</td>
                <td>33</td>
                <td>66</td>
                <td>88</td>
                <td>777</td>
                <td>5.4</td>
                <td>90</td>
                <td><a href="ตัวอย่างข้อมูล Sensor - Sheet1 (1).pdf"><img src="download.png" style="padding-left: 0.4cm ;"></a></td>
                </tr>
                <tr>
                <td>โรงเรียนประเทืองทิพย์วิทยา 9 หมู่ที่ 1 อำเภอ สายไหม กรุงเทพมหานคร 12120</td>
                <td>30</td>
                <td>87</td>
                <td>56</td>
                <td>987</td>
                <td>4.0</td>
                <td>88</td>
                <td><a href="ตัวอย่างข้อมูล Sensor - Sheet1 (1).pdf"><img src="download.png" style="padding-left: 0.4cm ;"></a></td>
            </tr>
            </tbody>  
        </table>
        </div>
        <div class="carousel-item">
        <table class="table table-striped">
            <thead>
                <tr>
                <th scope="col">ที่ตั้ง</th>
                <th scope="col"><div style="background:#009f88;  width: 20px; height: 20px;"></div></th>
                <th scope="col"><div style="background:#0066ff;  width: 20px; height: 20px;"></div></th>
                <th scope="col"><div style="background:#5b3701;  width: 20px; height: 20px;"></div></th>
                <th scope="col"><div style="background:#93b200;  width: 20px; height: 20px;"></div></th>
                <th scope="col"><div style="background:#00388d;  width: 20px; height: 20px;"></div></th>
                <th scope="col"><div style="background:#009653;  width: 20px; height: 20px;"></div></th>
                <th scope="col">ดาวน์โหลด</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <td>วัดพระธาตุเขาน้อย  89 มหาพรหม ตำบล ผาสิงห์ อำเภอเมืองน่าน น่าน 55000</td>
                <td>32</td>
                <td>50</td>
                <td>35</td>
                <td>700</td>
                <td>7.7</td>
                <td>80</td>
                <td><a href="ตัวอย่างข้อมูล Sensor - Sheet1 (1).pdf"><img src="download.png" style="padding-left: 0.4cm ;"></a></td>
                </tr>
                <tr>
                <td>สถานีตำรวจทางหลวง1 กองกำกับการ1 กองบังคับการตำรวจทางหลวง ตำบล เชียงรากน้อย อำเภอบางปะอิน จังหวัดพระนครศรีอยุธยา 12120</td>
                <td>20</td>
                <td>55</td>
                <td>49</td>
                <td>770</td>
                <td>8.0</td>
                <td>88</td>
                <td><a href="ตัวอย่างข้อมูล Sensor - Sheet1 (1).pdf"><img src="download.png " style="padding-left: 0.4cm ;"></a></td>
                </tr>
                <tr>
                <td>พญาคันคาก ตำบลในเมือง อำเภอเมืองยโสธร ยโสธร 35000</td>
                <td>19</td>
                <td>90</td>
                <td>87</td>
                <td>690</td>
                <td>6.5</td>
                <td>76</td>
                <td><a href="ตัวอย่างข้อมูล Sensor - Sheet1 (1).pdf"><img src="download.png" style="padding-left: 0.4cm ;"></a></td>
                </tr>
                <tr>
                <td>พระธาตุศรีสองรัก ตำบล ด่านซ้าย อำเภอด่านซ้าย เลย 42120</td>
                <td>30</td>
                <td>76</td>
                <td>54</td>
                <td>900</td>
                <td>8.0</td>
                <td>89</td>
                <td><a href="ตัวอย่างข้อมูล Sensor - Sheet1 (1).pdf"><img src="download.png" style="padding-left: 0.4cm ;"></a></td>
                </tr>
                <tr>
                <td>วัดพระธาตุดอยสุเทพราชวรวิหาร 9 หมู่ที่ 9 อำเภอเมืองเชียงใหม่ เชียงใหม่ 50200</td>
                <td>33</td>
                <td>66</td>
                <td>88</td>
                <td>777</td>
                <td>5.4</td>
                <td>90</td>
                <td><a href="ตัวอย่างข้อมูล Sensor - Sheet1 (1).pdf"><img src="download.png" style="padding-left: 0.4cm ;"></a></td>
                </tr>
                <tr>
                <td> น้ำพุร้อนฝาง Chiangmai 4050 Road อำเภอ ฝาง เชียงใหม่ 50110</td>
                <td>30</td>
                <td>87</td>
                <td>56</td>
                <td>987</td>
                <td>4.0</td>
                <td>88</td>
                <td><a href="ตัวอย่างข้อมูล Sensor - Sheet1 (1).pdf"><img src="download.png" style="padding-left: 0.4cm ;"></a></td>
            </tr>
            </tbody>  
        </table>
        </div>
        <div class="carousel-item">
        <table class="table table-striped">
            <thead>
                <tr>
                <th scope="col">ที่ตั้ง</th>
                <th scope="col"><div style="background:#009f88;  width: 20px; height: 20px;"></div></th>
                <th scope="col"><div style="background:#0066ff;  width: 20px; height: 20px;"></div></th>
                <th scope="col"><div style="background:#5b3701;  width: 20px; height: 20px;"></div></th>
                <th scope="col"><div style="background:#93b200;  width: 20px; height: 20px;"></div></th>
                <th scope="col"><div style="background:#00388d;  width: 20px; height: 20px;"></div></th>
                <th scope="col"><div style="background:#009653;  width: 20px; height: 20px;"></div></th>
                <th scope="col">ดาวน์โหลด</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <td>มหาวิทยาลัยราชภัฏวไลยอลงกรณ์ ในพระบรมราชูปถัมภ์  ถ. พหลโยธิน ตำบล คลองหนึ่ง อำเภอคลองหลวง ปทุมธานี 13180</td>
                <td>32</td>
                <td>50</td>
                <td>35</td>
                <td>700</td>
                <td>7.7</td>
                <td>80</td>
                <td><a href="ตัวอย่างข้อมูล Sensor - Sheet1 (1).pdf"><img src="download.png" style="padding-left: 0.4cm ;"></a></td>
                </tr>
                <tr>
                <td>สถานีตำรวจทางหลวง1 กองกำกับการ1 กองบังคับการตำรวจทางหลวง ตำบล เชียงรากน้อย อำเภอบางปะอิน จังหวัดพระนครศรีอยุธยา 12120</td>
                <td>20</td>
                <td>55</td>
                <td>49</td>
                <td>770</td>
                <td>8.0</td>
                <td>88</td>
                <td><a href="ตัวอย่างข้อมูล Sensor - Sheet1 (1).pdf"><img src="download.png " style="padding-left: 0.4cm ;"></a></td>
                </tr>
                <tr>
                <td>สนามหลวง ถนน ราชดำเนินกลาง แขวงพระบรมมหาราชวัง เขตพระนคร กรุงเทพมหานคร 10200</td>
                <td>19</td>
                <td>90</td>
                <td>87</td>
                <td>690</td>
                <td>6.5</td>
                <td>76</td>
                <td><a href="ตัวอย่างข้อมูล Sensor - Sheet1 (1).pdf"><img src="download.png" style="padding-left: 0.4cm ;"></a></td>
                </tr>
                <tr>
                <td>วัดตะโก หลวงพ่อรวย  31หมู่2 ดอนหญ้านาง อำเภอ ภาชี จังหวัดพระนครศรีอยุธยา 13140</td>
                <td>30</td>
                <td>76</td>
                <td>54</td>
                <td>900</td>
                <td>8.0</td>
                <td>89</td>
                <td><a href="ตัวอย่างข้อมูล Sensor - Sheet1 (1).pdf"><img src="download.png" style="padding-left: 0.4cm ;"></a></td>
                </tr>
                <tr>
                <td>ไร่ชาฉุยฟง ตำบล แม่จัน อำเภอแม่จัน เชียงราย 57110</td>
                <td>33</td>
                <td>66</td>
                <td>88</td>
                <td>777</td>
                <td>5.4</td>
                <td>90</td>
                <td><a href="ตัวอย่างข้อมูล Sensor - Sheet1 (1).pdf"><img src="download.png" style="padding-left: 0.4cm ;"></a></td>
                </tr>
                <tr>
                <td>ชิงช้าต้นไม้ หมู่บ้านรักไทย ตำบลชมภู อำเภอเนินมะปราง จังหวัดพิษณุโลก </td>
                <td>30</td>
                <td>87</td>
                <td>56</td>
                <td>987</td>
                <td>4.0</td>
                <td>88</td>
                <td><a href="ตัวอย่างข้อมูล Sensor - Sheet1 (1).pdf"><img src="download.png" style="padding-left: 0.4cm ;"></a></td>
            </tr>
            </tbody>  
        </table>
        </div>
    </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    </div>
</body>
</html>