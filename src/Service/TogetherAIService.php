<?php
namespace App\Service;

use Symfony\Contracts\HttpClient\HttpClientInterface;

class TogetherAIService
{
    private HttpClientInterface $client;
    private string $apiKey;

    public function __construct(HttpClientInterface $client, string $apiKey)
    {
        $this->client = $client;
        $this->apiKey = $apiKey;
    }

    public function generateImage(string $category): ?string
    {
        $prompt = "Generate an artistic image for the category: $category."; // Ajustez le prompt selon vos besoins.

        $response = $this->client->request('POST', 'https://api.together.xyz/v1/chat/completions', [
            'headers' => [
                'Authorization' => 'Bearer ' . $this->apiKey,
                'Content-Type' => 'application/json',
            ],
            'json' => [
                'model' => 'meta-llama/Llama-3.3-70B-Instruct-Turbo',
                'messages' => [
                    ['role' => 'user', 'content' => $prompt],
                ],
            ],
        ]);

        if ($response->getStatusCode() !== 200) {
            throw new \RuntimeException('Failed to generate image: ' . $response->getContent(false));
        }

        $data = $response->toArray();
        return $data['image_url'] ?? null; // Assurez-vous que l'API renvoie une clé `image_url`.
    }
}
