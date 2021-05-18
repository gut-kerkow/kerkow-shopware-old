<?php


namespace Jett\McNewsletter\Core\API\Client;

use Jett\McNewsletter\Core\API\Converter\AudienceConverter;
use Jett\McNewsletter\Core\API\Converter\BatchConverter;
use Jett\McNewsletter\Core\API\Converter\MemberConverter;
use Jett\McNewsletter\Core\API\Converter\WebhookConverter;
use Jett\McNewsletter\Core\API\Exception\InvalidApiKeyException;
use Jett\McNewsletter\Core\API\Exception\ResponseException;
use Jett\McNewsletter\Core\API\Transfer\Audience;
use Jett\McNewsletter\Core\API\Transfer\Batch;
use Jett\McNewsletter\Core\API\Transfer\Member;
use Jett\McNewsletter\Core\API\Transfer\ResponseList;
use Jett\McNewsletter\Core\API\Transfer\Webhook;

class Client
{
    public const API_URL = '.api.mailchimp.com/3.0';
    /**
     * @var string
     */
    private $apiKey;
    /**
     * @var \GuzzleHttp\Client
     */
    private $client;

    /**
     * @var string
     */
    private $dataCenter;

    /**
     * Client constructor.
     * @param string $apiKey
     * @throws InvalidApiKeyException
     */
    public function __construct(string $apiKey)
    {
        $this->client = new \GuzzleHttp\Client([
            'auth' => ['user', $apiKey]
        ]);

        $this->apiKey = $apiKey;
        $this->dataCenter = $this->getDataCenterFromApiKey($this->apiKey);
    }

    /**
     * @param string $apiKey
     * @return string
     * @throws InvalidApiKeyException
     */
    private function getDataCenterFromApiKey(string $apiKey): string
    {
        $dataCenter = explode('-', $apiKey);

        if (empty($dataCenter[1])) {
            throw new InvalidApiKeyException('could not parse datacenter');
        }

        return $dataCenter[1];
    }

    /**
     * @return string
     */
    private function getApiUrl(): string
    {
        return 'https://' . $this->dataCenter . self::API_URL;
    }

    /**
     * @param string $listId
     * @return Audience
     * @throws ResponseException
     */
    public function audienceGet(string $listId): Audience
    {
        $response = $this->client->get($this->getApiUrl() . '/lists/' . $listId);
        return AudienceConverter::convertResponse($response);
    }

    /**
     * @return ResponseList
     * @throws ResponseException
     */
    public function audienceList(): ResponseList
    {
        $response = $this->client->get($this->getApiUrl() . '/lists/');
        return AudienceConverter::convertList($response);
    }

    /**
     * @param string $listId
     * @param string $subscriberHash
     * @return Member
     * @throws ResponseException
     */
    public function membersGet(string $listId, string $subscriberHash): Member
    {
        $response = $this->client->get($this->getApiUrl() . '/lists/' . $listId . '/members/' . $subscriberHash);
        return MemberConverter::convertResponse($response);
    }

    /**
     * @param string $listId
     * @return ResponseList
     * @throws ResponseException
     */
    public function membersList(string $listId): ResponseList
    {
        $response = $this->client->get($this->getApiUrl() . '/lists/' . $listId . '/members/');
        return MemberConverter::convertList($response);
    }

    /**
     * @param string $listId
     * @return bool
     * @throws ResponseException
     */
    public function membersCreateOrUpdate(string $listId, Member $member): bool
    {
        $response = $this->client->put(
            $this->getApiUrl() . '/lists/' . $listId . '/members/' . md5($member->email),
            [
                'json' => MemberConverter::convertTransfer($member)
            ]
        );

        MemberConverter::checkResponse($response);
        return true;
    }

    /**
     * @param int $batchId
     * @return Batch
     * @throws ResponseException
     */
    public function batchGet(int $batchId): Batch
    {
        $response = $this->client->get($this->getApiUrl() . '/batches/' . $batchId);
        return BatchConverter::convertResponse($response);
    }

    /**
     * @return ResponseList
     * @throws ResponseException
     */
    public function batchList(): ResponseList
    {
        $response = $this->client->get($this->getApiUrl() . '/batches/');
        return BatchConverter::convertList($response);
    }

    /**
     * @param Batch $batch
     * @return bool
     * @throws ResponseException
     */
    public function batchCreate(Batch $batch): bool
    {
        $response = $this->client->post(
            $this->getApiUrl() . '/batches/',
            [
                'json' => MemberConverter::convertTransfer($batch)
            ]
        );

        BatchConverter::checkResponse($response);
        return true;
    }

    /**
     * @param Batch $batch
     * @return bool
     * @throws ResponseException
     */
    public function batchDelete(Batch $batch): bool
    {
        $response = $this->client->post(
            $this->getApiUrl() . '/batches/',
            [
                'json' => MemberConverter::convertTransfer($batch)
            ]
        );

        BatchConverter::checkResponse($response);
        return true;
    }

    /**
     * @param string $webhook
     * @param string $url
     * @return bool
     * @throws ResponseException
     */
    public function webhookCreate(Webhook $webhook)
    {
        $response = $this->client->post(
            $this->getApiUrl() . '/lists/' . $webhook->listId . '/webhooks',
            [
                'json' => WebhookConverter::convertTransfer($webhook)
            ]
        );

        return WebhookConverter::convertResponse($response);
    }

    /**
     * @param string $listId
     * @return ResponseList
     * @throws ResponseException
     */
    public function webhookList(string $listId): ResponseList
    {
        $response = $this->client->get(
            $this->getApiUrl() . '/lists/' . $listId . '/webhooks'
        );

        return WebhookConverter::convertList($response);
    }

    /**
     * @param string $listId
     * @param string $webhookId
     * @return ResponseList
     * @throws ResponseException
     */
    public function webhookDelete(string $listId, string $webhookId): bool
    {
        $response = $this->client->delete(
            $this->getApiUrl() . '/lists/' . $listId . '/webhooks/' . $webhookId
        );

        WebhookConverter::checkResponse($response);
        return true;
    }
}
