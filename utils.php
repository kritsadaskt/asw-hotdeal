<?php

function getProjectName(string $projectCode): ?string {
  $data = [
      [
          "ProjectID" => 6,
          "ProjectCode" => "CAM002",
          "ProjectName" => "แอทโมซ ลาดพร้าว 71",
          "BUID" => 2,
          "BU" => "BUG2"
      ],
      [
          "ProjectID" => 7,
          "ProjectCode" => "CMD004",
          "ProjectName" => "โมดิซ รัชดา 32",
          "BUID" => 3,
          "BU" => "BUG3"
      ],
      [
          "ProjectID" => 8,
          "ProjectCode" => "CBR003",
          "ProjectName" => "บราวน์ รัชดา-ห้วยขวาง",
          "BUID" => 1,
          "BU" => "BUG1"
      ],
      [
          "ProjectID" => 9,
          "ProjectCode" => "CAM003",
          "ProjectName" => "แอทโมซ ลาดพร้าว 15",
          "BUID" => 3,
          "BU" => "BUG3"
      ],
      [
          "ProjectID" => 10,
          "ProjectCode" => "CWN001",
          "ProjectName" => "วินน์ คอนโด",
          "BUID" => 3,
          "BU" => "BUG3"
      ],
      [
          "ProjectID" => 11,
          "ProjectCode" => "CKV001",
          "ProjectName" => "เคฟ",
          "BUID" => 1,
          "BU" => "BUG1"
      ],
      [
          "ProjectID" => 12,
          "ProjectCode" => "CMD002",
          "ProjectName" => "โมดิซ สเตชั่น",
          "BUID" => 3,
          "BU" => "BUG3"
      ],
      [
          "ProjectID" => 13,
          "ProjectCode" => "CMD003",
          "ProjectName" => "โมดิซ อินเตอร์เชนจ์",
          "BUID" => 3,
          "BU" => "BUG3"
      ],
      [
          "ProjectID" => 14,
          "ProjectCode" => "CBR002",
          "ProjectName" => "บราวน์ พหลฯ67",
          "BUID" => 3,
          "BU" => "BUG3"
      ],
      [
          "ProjectID" => 15,
          "ProjectCode" => "CEP001",
          "ProjectName" => "เอพพิโซด",
          "BUID" => 3,
          "BU" => "BUG3"
      ],
      [
          "ProjectID" => 16,
          "ProjectCode" => "CHH007",
          "ProjectName" => "เอชทู โกลว์",
          "BUID" => 3,
          "BU" => "BUG3"
      ],
      [
          "ProjectID" => 17,
          "ProjectCode" => "CMD005",
          "ProjectName" => "โมดิซ สุขุมวิท 50",
          "BUID" => 1,
          "BU" => "BUG1"
      ],
      [
          "ProjectID" => 18,
          "ProjectCode" => "EQC021",
          "ProjectName" => "เคฟ ทาวน์ สเปซ",
          "BUID" => 1,
          "BU" => "BUG1"
      ],
      [
          "ProjectID" => 19,
          "ProjectCode" => "EQC018",
          "ProjectName" => "แอทโมซ รัชดา-ห้วยขวาง",
          "BUID" => 2,
          "BU" => "BUG2"
      ],
      [
          "ProjectID" => 20,
          "ProjectCode" => "HGM001",
          "ProjectName" => "แกลม",
          "BUID" => 3,
          "BU" => "BUG3"
      ],
      [
          "ProjectID" => 21,
          "ProjectCode" => "CBC001",
          "ProjectName" => "บี แคมปัส",
          "BUID" => 3,
          "BU" => "BUG3"
      ],
      [
          "ProjectID" => 22,
          "ProjectCode" => "CBR001",
          "ProjectName" => "บราวน์ คอนโด",
          "BUID" => 3,
          "BU" => "BUG3"
      ],
      [
          "ProjectID" => 24,
          "ProjectCode" => "CMD001",
          "ProjectName" => "โมดิซ ลาดพร้าว18",
          "BUID" => 3,
          "BU" => "BUG3"
      ],
      [
          "ProjectID" => 25,
          "ProjectCode" => "CWN002",
          "ProjectName" => "วินน์ โชคชัย4",
          "BUID" => 3,
          "BU" => "BUG3"
      ],
      [
          "ProjectID" => 26,
          "ProjectCode" => "EQC022",
          "ProjectName" => "เคฟ ทาวน์ ชิฟท์",
          "BUID" => 1,
          "BU" => "BUG1"
      ],
      [
          "ProjectID" => 27,
          "ProjectCode" => "EQC020",
          "ProjectName" => "ไอเวอรี่ รัชดา 32",
          "BUID" => 3,
          "BU" => "BUG3"
      ],
      [
          "ProjectID" => 28,
          "ProjectCode" => "EQC019",
          "ProjectName" => "แอทโมซ แจ้งวัฒนะ",
          "BUID" => 3,
          "BU" => "BUG3"
      ],
      [
          "ProjectID" => 29,
          "ProjectCode" => "EQC025",
          "ProjectName" => "โมดิซ คอลเลคชั่น บางโพ",
          "BUID" => 4,
          "BU" => "BUG4"
      ],
      [
          "ProjectID" => 30,
          "ProjectCode" => "TUC001",
          "ProjectName" => "เคฟ ทียู",
          "BUID" => 1,
          "BU" => "BUG1"
      ],
      [
          "ProjectID" => 31,
          "ProjectCode" => "W1C002",
          "ProjectName" => "โมดิซ ไรห์ม ฮิล",
          "BUID" => 4,
          "BU" => "BUG4"
      ],
      [
          "ProjectID" => 32,
          "ProjectCode" => "CES002",
          "ProjectName" => "เอสต้า บลิซ",
          "BUID" => 3,
          "BU" => "BUG3"
      ],
      [
          "ProjectID" => 33,
          "ProjectCode" => "HHN001",
          "ProjectName" => "ดิ ออเนอร์",
          "BUID" => 5,
          "BU" => "SE"
      ],
      [
          "ProjectID" => 34,
          "ProjectCode" => "ABH001",
          "ProjectName" => "บ้านภูริปุรี ลาดพร้าว 41",
          "BUID" => 3,
          "BU" => "BUG3"
      ],
      [
          "ProjectID" => 35,
          "ProjectCode" => "CHH001",
          "ProjectName" => "เอชทู วูด",
          "BUID" => 3,
          "BU" => "BUG3"
      ],
      [
          "ProjectID" => 36,
          "ProjectCode" => "CHH002",
          "ProjectName" => "เอชทู เมทัล",
          "BUID" => 3,
          "BU" => "BUG3"
      ],
      [
          "ProjectID" => 37,
          "ProjectCode" => "CHH003",
          "ProjectName" => "เอชทู สโตน",
          "BUID" => 3,
          "BU" => "BUG3"
      ],
      [
          "ProjectID" => 38,
          "ProjectCode" => "CHH004",
          "ProjectName" => "เอชทู สตีล",
          "BUID" => 3,
          "BU" => "BUG3"
      ],
      [
          "ProjectID" => 39,
          "ProjectCode" => "CHH005",
          "ProjectName" => "เอชทู โครมร์",
          "BUID" => 3,
          "BU" => "BUG3"
      ],
      [
          "ProjectID" => 40,
          "ProjectCode" => "CHH006",
          "ProjectName" => "เอชทู กลาส",
          "BUID" => 3,
          "BU" => "BUG3"
      ],
      [
          "ProjectID" => 41,
          "ProjectCode" => "ABH003",
          "ProjectName" => "บ้านภูริปุรี พัฒนาการ",
          "BUID" => 3,
          "BU" => "BUG3"
      ],
      [
          "ProjectID" => 42,
          "ProjectCode" => "ABH002",
          "ProjectName" => "บ้านภูริปุรี โฮมออฟฟิศ ลาดพร้าว 41",
          "BUID" => 3,
          "BU" => "BUG3"
      ],
      [
          "ProjectID" => 43,
          "ProjectCode" => "W1C003",
          "ProjectName" => "โมดิซ ไรห์ม คลาวด์",
          "BUID" => 4,
          "BU" => "BUG4"
      ],
      [
          "ProjectID" => 45,
          "ProjectCode" => "CBC002",
          "ProjectName" => "โมดิซ ลอนช์",
          "BUID" => 1,
          "BU" => "BUG1"
      ],
      [
          "ProjectID" => 46,
          "ProjectCode" => "PPC001",
          "ProjectName" => "เคฟ ศาลายา",
          "BUID" => 2,
          "BU" => "BUG2"
      ],
      [
          "ProjectID" => 47,
          "ProjectCode" => "BUC003",
          "ProjectName" => "เคฟ ทาวน์ โคโลนี่",
          "BUID" => 1,
          "BU" => "BUG1"
      ],
      [
          "ProjectID" => 48,
          "ProjectCode" => "106C001",
          "ProjectName" => "เคฟ ทาวน์ ไอส์แลนด์",
          "BUID" => 1,
          "BU" => "BUG1"
      ],
      [
          "ProjectID" => 49,
          "ProjectCode" => "109C001",
          "ProjectName" => "โมดิซ โวยาจ ศรีนครินทร์",
          "BUID" => 4,
          "BU" => "BUG4"
      ],
      [
          "ProjectID" => 50,
          "ProjectCode" => "TUC002",
          "ProjectName" => "เคฟ เอวา",
          "BUID" => 1,
          "BU" => "BUG1"
      ],
      [
          "ProjectID" => 51,
          "ProjectCode" => "PDC001",
          "ProjectName" => "แอทโมซ ซีรีน ศรีราชา",
          "BUID" => 3,
          "BU" => "BUG3"
      ],
      [
          "ProjectID" => 52,
          "ProjectCode" => "W3C001",
          "ProjectName" => "แอทโมซ บางนา",
          "BUID" => 1,
          "BU" => "BUG1"
      ],
      [
          "ProjectID" => 58,
          "ProjectCode" => "M1C001",
          "ProjectName" => "แม็กซี่ ไพร์ม รัชดา-สุทธิสาร",
          "BUID" => 4,
          "BU" => "BUG4"
      ],
      [
          "ProjectID" => 59,
          "ProjectCode" => "EQC032",
          "ProjectName" => "แอทโมซ คาแนล รังสิต",
          "BUID" => 1,
          "BU" => "BUG1"
      ],
      [
          "ProjectID" => 60,
          "ProjectCode" => "W7C001",
          "ProjectName" => "แอทโมซ โอเอซิส อ่อนนุช",
          "BUID" => 2,
          "BU" => "BUG2"
      ],
      [
          "ProjectID" => 61,
          "ProjectCode" => "10C001",
          "ProjectName" => "เคฟ ซี้ด เกษตร",
          "BUID" => 3,
          "BU" => "BUG3"
      ],
      [
          "ProjectID" => 62,
          "ProjectCode" => "EQC034",
          "ProjectName" => "แอทโมซ พอร์เทรต ศรีสมาน",
          "BUID" => 2,
          "BU" => "BUG2"
      ],
      [
          "ProjectID" => 63,
          "ProjectCode" => "W8C001",
          "ProjectName" => "แอทโมซ โฟลว์ มีนบุรี",
          "BUID" => 4,
          "BU" => "BUG4"
      ],
      [
          "ProjectID" => 65,
          "ProjectCode" => "SNH003",
          "ProjectName" => "เอสต้า รังสิต คลอง2",
          "BUID" => 5,
          "BU" => "SE"
      ],
      [
          "ProjectID" => 66,
          "ProjectCode" => "PDC002",
          "ProjectName" => "เคฟ ยูนิ.เวิร์ส บางแสน",
          "BUID" => 3,
          "BU" => "BUG3"
      ],
      [
          "ProjectID" => 71,
          "ProjectCode" => "122C001",
          "ProjectName" => "แอทโมซ พาลาซิโอ ลาดพร้าว-วังหิน",
          "BUID" => 2,
          "BU" => "BUG2"
      ],
      [
          "ProjectID" => 72,
          "ProjectCode" => "119C001",
          "ProjectName" => "แอทโมซ ซีซั่น ลาดกระบัง",
          "BUID" => 1,
          "BU" => "BUG1"
      ],
      [
          "ProjectID" => 73,
          "ProjectCode" => "401H001",
          "ProjectName" => "ดิ ออเนอร์ โยธินพัฒนา",
          "BUID" => 5,
          "BU" => "SE"
      ],
      [
          "ProjectID" => 74,
          "ProjectCode" => "103C005",
          "ProjectName" => "เคฟ เอมบริโอ รังสิต",
          "BUID" => 3,
          "BU" => "BUG3"
      ],
      [
          "ProjectID" => 75,
          "ProjectCode" => "102C027",
          "ProjectName" => "มารูน รัชดา",
          "BUID" => 1,
          "BU" => "BUG1"
      ],
      [
          "ProjectID" => 76,
          "ProjectCode" => "121C001",
          "ProjectName" => "โมดิซ วอลท์ เกษตร ศรีปทุม",
          "BUID" => 2,
          "BU" => "BUG2"
      ],
      [
          "ProjectID" => 78,
          "ProjectCode" => "CES001",
          "ProjectName" => "ESTA ",
          "BUID" => 3,
          "BU" => "BUG3"
      ],
      [
          "ProjectID" => 79,
          "ProjectCode" => "103C008",
          "ProjectName" => "แอทโมซ  แคนวาส  ระยอง",
          "BUID" => 3,
          "BU" => "BUG3"
      ],
      [
          "ProjectID" => 81,
          "ProjectCode" => "124C001",
          "ProjectName" => "เคฟ โคโค่ บางแสน",
          "BUID" => 3,
          "BU" => "BUG3"
      ],
      [
          "ProjectID" => 82,
          "ProjectCode" => "400H005",
          "ProjectName" => "ดิ อาเบอร์ รามอินทรา-วัชรพล",
          "BUID" => 5,
          "BU" => "SE"
      ],
      [
          "ProjectID" => 83,
          "ProjectCode" => "402H001",
          "ProjectName" => "ดิ อาเบอร์ ดอนเมือง-แจ้งวัฒนะ",
          "BUID" => 5,
          "BU" => "SE"
      ],
      [
          "ProjectID" => 84,
          "ProjectCode" => "DUM012",
          "ProjectName" => "โมดิซ บางนา",
          "BUID" => 1,
          "BU" => "BUG1"
      ],
      [
          "ProjectID" => 89,
          "ProjectCode" => "102C028",
          "ProjectName" => "เคฟ ป๊อป ศาลายา",
          "BUID" => 2,
          "BU" => "BUG2"
      ],
      [
          "ProjectID" => 90,
          "ProjectCode" => "400H007",
          "ProjectName" => "เอสต้า ซีรีนิตี้ บรมราชชนนี",
          "BUID" => 5,
          "BU" => "SE"
      ],
      [
          "ProjectID" => 91,
          "ProjectCode" => "400H006",
          "ProjectName" => "ฌาน เดอะ ริเวอร์ไซด์ บรมราชชนนี",
          "BUID" => 5,
          "BU" => "SE"
      ],
      [
          "ProjectID" => 93,
          "ProjectCode" => "102C032",
          "ProjectName" => "เคฟ วันเดอร์แลนด์",
          "BUID" => 1,
          "BU" => "BUG1"
      ],
      [
          "ProjectID" => 94,
          "ProjectCode" => "123C001",
          "ProjectName" => "โมดิซ อาวองการ์ด",
          "BUID" => 1,
          "BU" => "BUG1"
      ],
      [
          "ProjectID" => 96,
          "ProjectCode" => "102C024",
          "ProjectName" => "เคฟ คานิวัล",
          "BUID" => 1,
          "BU" => "BUG1"
      ],
      [
          "ProjectID" => 97,
          "ProjectCode" => "126C001",
          "ProjectName" => "อควารัส จอมเทียน พัทยา",
          "BUID" => 3,
          "BU" => "BUG3"
      ],
      [
          "ProjectID" => 98,
          "ProjectCode" => "125C001",
          "ProjectName" => "เคฟ เพลย์กราวด์ ลาดพร้าว-บดินทรเดชา",
          "BUID" => 4,
          "BU" => "BUG4"
      ],
      [
          "ProjectID" => 99,
          "ProjectCode" => "127C001",
          "ProjectName" => "เคฟ เจเนซิส นครปฐม",
          "BUID" => 2,
          "BU" => "BUG2"
      ],
      [
          "ProjectID" => 101,
          "ProjectCode" => "102C035",
          "ProjectName" => "เคฟ ลูมินัส บางมด",
          "BUID" => 3,
          "BU" => "BUG3"
      ],
      [
          "ProjectID" => 103,
          "ProjectCode" => "102C037",
          "ProjectName" => "แอทโมซ เดอ โซล ทิพวัล สเตชั่น",
          "BUID" => 1,
          "BU" => "BUG1"
      ],
      [
          "ProjectID" => 104,
          "ProjectCode" => "128C001",
          "ProjectName" => "เควาลอน",
          "BUID" => 1,
          "BU" => "BUG1"
      ],
      [
          "ProjectID" => 105,
          "ProjectCode" => "112C001",
          "ProjectName" => "โมดิซ บียอน มีนบุรี",
          "BUID" => 4,
          "BU" => "BUG4"
      ],
      [
          "ProjectID" => 106,
          "ProjectCode" => "100C006",
          "ProjectName" => "เคฟ แอลลี่ แจ้งวัฒนะ",
          "BUID" => 3,
          "BU" => "BUG3"
      ]
  ];

  foreach ($data as $project) {
    if ($project['ProjectCode'] === $projectCode) {
      return $project['ProjectName'];
    }
  }

  return null; // Return null if ProjectCode is not found
}

function getUnits() {
  try {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'https://aswservice.com/hotdealapi/Unit/GetUnits?perPage=10&page=1&isHomeEnable=false');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    
    $response = curl_exec($ch);
    
    if (curl_errno($ch)) {
      throw new Exception(curl_error($ch));
    }
    
    curl_close($ch);
    
    $data = json_decode($response, true);
    return $data['data'];
  } catch (Exception $e) {
    error_log("Error fetching units: " . $e->getMessage());
    return [
      'status' => 500,
      'message' => 'Failed to fetch units',
      'data' => null
    ];
  }
}

?>