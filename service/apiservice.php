<?php
function getHomeBanners() {
  try {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'https://aswservice.com/hotdealapi/HomeContent/GetHomeBanners?resourceTypeID=0');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    
    $response = curl_exec($ch);
    
    if (curl_errno($ch)) {
      throw new Exception(curl_error($ch));
    }
    
    curl_close($ch);
    
    $data = json_decode($response, true);
    return $data;
  } catch (Exception $e) {
    error_log("Error fetching home banners: " . $e->getMessage());
    return [
      'status' => 500,
      'message' => 'Failed to fetch home banners',
      'data' => null
    ];
  }
}
