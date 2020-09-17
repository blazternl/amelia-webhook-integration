<?php
/*
 * Amelia integration
 */
function blazter_amelia_booking_completed( $inputData ) {

  // Keep this if-statement if only requests from your own site should be accepted
  if ($_SERVER['REMOTE_ADDR'] !== $_SERVER['SERVER_ADDR']) {
    $result = new WP_REST_Response('403 Forbidden');
    $result->set_status(403);

    return $result;
  }

  // Assign the Amelia appointment data to variables
  $appointmentData = $inputData['appointment'];
  $bookingData = $appointmentData['bookings'];

  // Set the url of the API you want to send a request to
  $url = 'https://example.com';

  // Loop over each booking
  foreach ($bookingData as &$booking) {
    // Prepare the request
    $args = [
      'headers'   => [
        'Content-Type' => 'application/json; charset=utf-8'
      ],
      'method' => 'POST',
      'timeout' => 75,
      'body'=> json_encode($booking),
      'httpversion' => '1.0',
      'sslverify' => false,
    ];

    // Send out the request
    $request = wp_remote_post($url, $args);

    // Prepare the response (Amelia probably doesn't even use the response)
    $result = new WP_REST_Response($request);
    $result->set_status(200);

    return $result;
  }
  unset($booking); // break the reference with the last element
}

add_action( 'rest_api_init', function () {
  register_rest_route(
    'blazter_amelia/v1', '/booking_complete',
    [
      'methods' => ['POST'],
      'callback' => 'blazter_amelia_booking_completed'
    ]
  );
});
