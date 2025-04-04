<?php
header("Content-Type: application/json");

$apiKey = "YOUR_GEMINI_API_KEY"; // Replace with your Gemini API Key
$data = json_decode(file_get_contents("php://input"), true);

if (!isset($data["message"])) {
    echo json_encode(["reply" => "Invalid request"]);
    exit;
}

$userMessage = $data["message"];

// Prepare request to Google Gemini API
$apiUrl = "https://generativelanguage.googleapis.com/v1/models/gemini-pro:generateText?key=$apiKey";

$requestBody = json_encode([
    "contents" => [
        ["parts" => [["text" => $userMessage]]]
    ]
]);

$options = [
    "http" => [
        "header"  => "Content-Type: application/json",
        "method"  => "POST",
        "content" => $requestBody
    ]
];

$context  = stream_context_create($options);
$response = file_get_contents($apiUrl, false, $context);
$responseData = json_decode($response, true);

// Extract AI reply
$aiReply = $responseData["candidates"][0]["content"]["parts"][0]["text"] ?? "I couldn't process that request.";

echo json_encode(["reply" => $aiReply]);
?>
