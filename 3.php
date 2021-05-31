<a name=sec3>
        <center  style="padding-right: 500px;">
              <div class="dropdown" >
              <button class="dropbtn"><img src="Thai.png" width="20px" height="16px">ประเทศไทย<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-down-fill" viewBox="0 0 16 16">
                  <path d="M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z"/>
                </svg></button>
              <div class="dropdown-content">
              <ul class="list-group">
                  <li class="list-group-item">
                    <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
                    : พม่า<img src="myanmar.png">
                  </li>
                  <li class="list-group-item">
                      <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
                      : อังกฤษ<img src="united-kingdom.png">
                  </li>
                  <li class="list-group-item">
                      <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
                      : เกาหลี<img src="south-korea.png">
                  </li>
                  <li class="list-group-item">
                      <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
                    : จีน<img src="vietnam.png">
                    </li>
                  <li class="list-group-item">
                      <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
                      : ญี่ปุ่น<img src="japan.png">
                  </li>
                  <li class="list-group-item">
                      <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
                      : สเปน<img src="spain.png">
                    </li>
                </ul>
              </div>
            </div>&nbsp;&nbsp;&nbsp;
                <div class="dropdown" >
              <button class="dropbtn">พารามิเตอร์<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-down-fill" viewBox="0 0 16 16">
                  <path d="M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z"/>
                </svg></button>
              <div class="dropdown-content">
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
            </div>&nbsp;&nbsp;&nbsp;

            <div class="dropdown">
              <button class="dropbtn">ทุกช่วงเวลา<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-down-fill" viewBox="0 0 16 16">
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
          </center>

        <center>
          <div id="curve_chart" style="width: 1400px; height: 600px;   " ></div>
        
          <div id="flexbox" class="flexbox">
              <font color="#463E3F"> ความหมายของสีกราฟ </font>&nbsp;&nbsp;
              <div id="item" class="item" style="background-color: #009f98;">
                <div id="content" class="content">
                  <p>อุณหภูมิ</p>
                </div>
              </div>
              <div id="item" class="item"  style="background-color: #0066ff;">
                <div id="content" class="content" >
                  <p>ความชื้นในอากาศ</p>
                </div>
              </div>
              <div id="item" class="item"  style="background-color: #5b3701;">
                <div id="content" class="content">
                  <p>ความชื้นในดิน</p>
                </div>
              </div>
              <div id="item" class="item"  style="background-color: #93b200;">
                <div id="content" class="content">
                  <p>เเสง</p>
                </div>
              </div>
              <div id="item" class="item"  style="background-color: #00388d;">
                  <div id="content" class="content">
                    <p>คุณภาพน้ำ</p>
                  </div>
                </div>
                <div id="item" class="item"  style="background-color: #009653;">
                  <div id="content" class="content">
                    <p>ระดับน้ำ</p>
                  </div>
                </div>
            </div>
          </a>
      </center>&nbsp;&nbsp;&nbsp;  