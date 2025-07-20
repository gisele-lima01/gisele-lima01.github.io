<?php
header('Content-Type: application/json');

define('MAX_ATTEMPTS', 3);
$openRouterToken = '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';

$input = json_decode(file_get_contents('php://input'), true);
$cleanMessage = $input['question'] ?? '';

if (!$cleanMessage) {
    http_response_code(400);
    echo json_encode(['error' => 'Pergunta não enviada.']);
    exit;
}

$attempts = 0;
$reply = null;

while ($attempts < MAX_ATTEMPTS && !$reply) {
    $attempts++;
    $openRouterUrl = 'https://openrouter.ai/api/v1/chat/completions';
    $openRouterHeaders = [
        "Authorization: Bearer $openRouterToken",
        "Content-Type: application/json"
    ];

    $openRouterData = json_encode([
        "model" => "deepseek/deepseek-r1",
        "messages" => [
            ["role" => "system", "content" => "Responda sempre em português do Brasil."],
            ["role" => "user", "content" => $cleanMessage]
        ],
        "max_tokens" => 300,
        "n" => 1,
        "temperature" => 0.5
    ]);

    $ch = curl_init($openRouterUrl);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $openRouterHeaders);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $openRouterData);
    curl_setopt($ch, CURLOPT_TIMEOUT, 10);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);


    $response = curl_exec($ch);
    $error = curl_error($ch);
    curl_close($ch);

    if ($error) {
        error_log("Erro ao comunicar-se com o OpenRouter na tentativa $attempts: $error");
        continue;
    }

    $responseData = json_decode($response, true);
    $reply = $responseData['choices'][0]['message']['content'] ?? null;
}

if ($reply) {
    echo json_encode(['answer' => $reply]);
} else {
  echo json_encode([
    'error' => 'Erro na comunicação com o modelo.',
    'retorno' => $error,
    'data' => $responseData
]);

}
