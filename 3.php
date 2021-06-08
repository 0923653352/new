<div>
    <a name=sec3></a>
    <center>
        <select class="form-select-indicator" style="width: 90px; height: 30px;" aria-label="Default select example">
            <option selected>ประเทศไทย</option>


            <option value="1">
                : พม่า
            </option>

            <option value="2">
                : อังกฤษ
            </option>

            <option value="3">
                : เกาหลี
            </option>

            <option value="4">
                : จีน
            </option>

            <option value="5">
                : ญี่ปุ่น
            </option>

            <option value="6">
                : สเปน
            </option>
        </select>&nbsp;&nbsp;&nbsp;


        <select class="form-select-indicator" style="width: 90px; height: 30px;" aria-label="Default select example">
            <option selected>พารามิเตอร์</option>

            <option value="1">
                : อุณหภูมิ(C)
            </option>

            <option value="2">
                : ความชื้นในอากาศ(%)
            </option>

            <option value="3">
                : ความชื้นในดิน(%)
            </option>

            <option value="4">
                : เเสง(lux)
            </option>

            <option value="5">
                : คุณภาพน้ำ(%)
            </option>

            <option value="6">
                : ระดับน้ำ(%)
            </option>
        </select>&nbsp;&nbsp;&nbsp;


        <select class="form-select-indicator" style="width: 90px; height: 30px;" aria-label="Default select example">
            <option selected>
                <h1>ทุกช่วงเวลา</h1>
            </option>

            <option value="1">
                : 1 วันล่าสุด
            </option>

            <option value="2">
                : 1 สัปดาห์ล่าสุด
            </option>

            <option value="3">
                : 1 เดือนล่าสุด
            </option>

            <option value="4">
                : 1 ไตรมาสล่าสุด
            </option>

            <option value="5">
                : 1 ปีล่าสุด
            </option>
        </select>

    </center>

    <center>
        <div id="curve_chart" style="width: 100%; height: 600px;   "></div>
        <script type="text/javascript">
            google.charts.load('current', {
                'packages': ['corechart']
            });
            google.charts.setOnLoadCallback(drawChart);

            function drawChart() {
                var data = google.visualization.arrayToDataTable([
                    ['month', 'เเสง(lux)'],
                    ['เดือนที่1', 1000],
                    ['เดือนที่2', 1170],
                    ['เดือนที่3', 660],
                    ['เดือนที่4', 1030],
                    ['เดือนที่5', 1000],
                    ['เดือนที่6', 1170],
                    ['เดือนที่7', 660],
                    ['เดือนที่8', 1030],
                    ['เดือนที่9', 1000],
                    ['เดือนที่10', 1170],
                    ['เดือนที่11', 660],
                    ['เดือนที่12', 1030]
                ]);

                var options = {
                    title: '',
                    curveType: 'function',
                    legend: {
                        position: 'bottom'
                    }
                };

                var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

                chart.draw(data, options);
            }
        </script>
    </center>&nbsp;&nbsp;&nbsp;
</div>