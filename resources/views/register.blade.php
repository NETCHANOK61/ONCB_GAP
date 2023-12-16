<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User management</title>

    <link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css'>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
    <link rel="stylesheet" href="template2/css/register.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@200&display=swap" rel="stylesheet">

    <script src="template2/js/form-validate.js"></script>
    <script src="template2/js/authen.js"></script>
    <style>
        /* Custom CSS to display radio input and label inline */
        input[type="radio"] {
            display: inline-block;
            vertical-align: middle;
            margin-right: 5px;
        }

        label {
            display: inline-block;
            vertical-align: middle;
        }
    </style>

    <!-- sweetalert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>

<body>
    <!-- partial:index.partial.html -->
    <div class="container-fluid px-1 px-md-4 py-5 mx-auto">
        <div class="row d-flex justify-content-center" style="padding-top: 5%;">
            <div class="col-12 col-md-11 col-lg-10 col-xl-9">
                <div class="card card0 border-0">
                    <div class="row">
                        <div class="col-12">
                            <div class="card card00 m-2 border-0">
                                <div class="row text-center justify-content-center px-3">
                                    <!-- <p class="prev"><span class="fa fa-long-arrow-left"> ย้อนกลับ</span></p id="back"> -->
                                    <h3 class="mt-4">กรุณากรอกข้อมูลให้ครบถ้วนเพื่อส่งคำขอสร้างบัญชีใหม่</h3>
                                </div>
                                <hr>
                                <div class="d-flex flex-md-row px-3 mt-4 flex-column-reverse">
                                    <div class="col-md-6">
                                        <div class="card1">
                                            <ul id="progressbar" class="text-center">
                                                <li class="active step0"></li>
                                                <li class="step0"></li>
                                                <li class="step0"></li>
                                                <!-- <li class="step0"></li>  -->
                                            </ul>
                                            <h6 class="mb-5">ข้อกำหนดและข้อตกลง
                                            </h6>
                                            <h6 class="mb-5">ข้อมูลพื้นฐาน</h6>
                                            <h6 class="mb-5">ข้อมูลหน่วยงาน</h6>
                                            <!-- <h6 class="mb-5"></h6> -->
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <!-- 1 -->
                                        <div class="card2 first-screen show ml-2">
                                            <h5>ข้อกำหนดและข้อตกลง</h5>
                                            <div class="agreement">
                                                <b><u>ข้อกำหนด นโยบายความเป็นส่วนตัว</u></b> <br>
                                                <span style="font-size: 12px;">
                                                    นโยบายความเป็นส่วนตัวฉบับนี้ (“นโยบาย”) อธิบายถึงวิธีการที่
                                                    ศูนย์เทคโนโลยีสารสนเทศ สำนักงาน ปปส. (หรือ“เรา”) เก็บรวบรวม ใช้
                                                    และเปิดเผย ข้อมูลส่วนบุคคล (“ข้อมูลส่วนบุคคล”) ที่ท่าน (“ผู้ใช้”
                                                    หรือ “ท่าน”) ได้ให้สำหรับการใช้งานเว็บไซต์ user management
                                                    และผลิตภัณฑ์หรือบริการดังกล่าว (เรียกรวมกันว่า “เว็บไซต์” หรือ
                                                    “บริการ”) เพื่อให้สอดคล้องกับพระราชบัญญัติคุ้มครองข้อมูลส่วนบุคคล
                                                    พ.ศ. 2562 (“PDPA”)</span>
                                                <br>
                                                <b><u>การจัดเก็บข้อมูลส่วนบุคคล</u></b> <br>
                                                <span style="font-size: 12px;">
                                                    เราจะเก็บรักษาข้อมูลส่วนบุคคลของท่านไว้ตามระยะเวลาที่จำเป็นสำหรับการปฏิบัติตามหน้าที่ตามกฎหมายของเรา
                                                    ยุติข้อพิพาท และเพื่อการบังคับใช้สัญญาและข้อกำหนดและเงื่อนไขของเรา
                                                    เว้นเสียแต่มีความจำเป็นที่จะต้องเก็บต่อไปหรือตามที่กฎหมายกำหนด
                                                    เราอาจใช้ข้อมูลที่รวมขึ้นที่ได้มาจากการรวบรวมข้อมูลส่วนบุคคลของท่านที่ได้ทำให้เป็นปัจจุบันหรือลบทิ้งไปแต่เราจะไม่นำมาใช้ในทางที่สามารถระบุตัวตนของท่านได้
                                                    เมื่อครบกำหนดระยะเวลาการจัดเก็บ ข้อมูลส่วนบุคคลจะถูกลบทิ้ง ดังนั้น
                                                    สิทธิขอเข้าถึง สิทธิขอให้ลบ สิทธิขอให้แก้ไข สิทธิขอถ่ายโอนข้อมูล
                                                    จะไม่สามารถบังคับใช้ได้เมื่อครบกำหนดระยะเวลาการจัดเก็บ</span>
                                                <br>
                                            </div>
                                            <div class="row px-3 mt-1 mb-5">
                                                <div class="custom-control custom-checkbox"><input id="customCheck1"
                                                        type="checkbox" class="custom-control-input">
                                                    <label for="customCheck1"
                                                        class="custom-control-label">ฉันเข้าใจและยินยอม</label>
                                                </div>
                                            </div>
                                            <center>
                                                <button id="nextButton" style="display: none;" type="submit"
                                                    class="next-button">
                                                    <span class="fa fa-arrow-right"> ดำเนินการต่อ</span>
                                                </button>
                                            </center>
                                            <br>
                                        </div>
                                        <!-- 2 -->
                                        <div class="card2 ml-2">
                                            <div class="row px-3 mt-4">
                                                <div class="form-group mt-1 mb-1">
                                                    <input type="text" id="cardId" class="form-control" required>
                                                    <label class="ml-3 form-control-placeholder"
                                                        for="cardId">เลขที่บัตรประชาชน 13 หลัก</label>
                                                    {{-- <div id="errorcardId" style="color: red; padding-top: 3px;"></div> --}}
                                                </div>
                                            </div>
                                            <div class="row px-3 mt-4">
                                                <div class="form-group mt-1 mb-1">
                                                    <input type="text" id="firstName" class="form-control" required>
                                                    <label class="ml-3 form-control-placeholder"
                                                        for="firstName">ชื่อ</label>
                                                    {{-- <div id="errorEmail" style="color: red; padding-top: 3px;"></div> --}}
                                                </div>
                                            </div>
                                            <div class="row px-3 mt-4">
                                                <div class="form-group mt-1 mb-1">
                                                    <input type="text" id="lastName" class="form-control" required>
                                                    <label class="ml-3 form-control-placeholder"
                                                        for="lastName">นามสกุล</label>
                                                    {{-- <div id="errorEmail" style="color: red; padding-top: 3px;"></div> --}}
                                                </div>
                                            </div>
                                            <div class="row px-3 mt-4">
                                                <div class="form-group mt-1 mb-1">
                                                    <input type="text" id="telephone" class="form-control" required>
                                                    <label class="ml-3 form-control-placeholder"
                                                        for="telephone">เบอร์โทรศัพท์</label>
                                                    {{-- <div id="errorEmail" style="color: red; padding-top: 3px;"></div> --}}
                                                </div>
                                            </div>
                                            <center>
                                                <br>
                                                <button id="twoBtn" type="submit"
                                                    class="next-button text-center mt-1 ml-2">
                                                    <span class="fa fa-arrow-right">
                                                        ดำเนินการต่อ
                                                    </span>
                                                </button>
                                            </center>
                                            <br>
                                        </div>
                                        <!-- 3 -->
                                        <div class="card2 ml-2">
                                            <div class="row px-3 mt-3">
                                                <div class="form-group mt-3 mb-4">
                                                    <div id="selectProvince" class="select mb-3">
                                                        <p class="mb-0 w-100">จังหวัด</p>
                                                        <select name="province" class="form-control custom-select"
                                                            id="provinceSelect">
                                                            <!-- Options will be added dynamically using JavaScript -->
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <center>
                                                <button type="submit" id="registerBtn"
                                                    class="next-button text-center mt-1 ml-2">
                                                    <span class="fa fa-arrow-right">
                                                        ส่งคำขอ</span>
                                                </button>
                                            </center>
                                            <br>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="col-12">
                                <div class="row px-3">
                                    <h2 class="text-muted get-bonus mt-4 mb-5">เข้าสู่ระบบ<span
                                            class="text-danger"></span></h2>
                                </div>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- partial -->
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
    <script src='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js'></script>
    <script src="template2/js/regis.js"></script>

    <script>
        // Sample data array for options in the select dropdown
        const dataOptions = [
            'กำแพงเพชร',
            'ชัยนาท',
            'นครนายก',
            'นครปฐม',
            'นครสวรรค์',
            'นนทบุรี',
            'ปทุมธานี',
            'พระนครศรีอยุธยา',
            'พิจิตร',
            'พิษณุโลก',
            'เพชรบูรณ์'
        ];

        // Function to create and add options to the select dropdown
        function createOptions() {
            const provinceSelect = document.getElementById("provinceSelect");
            for (let i = 0; i < dataOptions.length; i++) {
                const option = document.createElement("option");
                option.value = dataOptions[i];
                option.text = dataOptions[i];
                provinceSelect.appendChild(option);
            }
        }

        // Call the function to create options when the page loads
        createOptions();

        const checkbox = document.getElementById("customCheck1");
        const nextButton = document.getElementById("nextButton");

        checkbox.addEventListener("change", function() {
            if (checkbox.checked) {
                nextButton.style.display = "block";
            } else {
                nextButton.style.display = "none";
            }
        });

        // Get the input element
        var checkCodeInput = document.getElementById('checkCode');

        // Add an event listener to the input field
        checkCodeInput.addEventListener('blur', async function() {
            // Retrieve the current value of the input field
            var inputValue = checkCodeInput.value;

            // Perform the necessary checks on the input value
            if (inputValue === '') {
                document.getElementById('errorCheckcode').innerText =
                    'กรุณากรอกรหัสยืนยันตัวตนสำหรับเจ้าหน้าที่ เพื่อลงทะเบียน'
                document.getElementById('registerBtn').style.display = 'none';
            } else {
                if (inputValue != "898989") {
                    document.getElementById('errorCheckcode').innerText = 'รหัสยืนยันตัวตนไม่ถูกต้อง'
                    document.getElementById('registerBtn').style.display = 'none';
                } else {
                    document.getElementById('errorCheckcode').innerText = '';
                    document.getElementById('registerBtn').style.display = 'block';
                }
            }
        });
    </script>


</body>

</html>
