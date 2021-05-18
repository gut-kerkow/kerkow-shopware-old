<?php


namespace Jett\McNewsletter\Core\API\Converter;

use Jett\McNewsletter\Core\API\Exception\ResponseException;
use Jett\McNewsletter\Core\API\Transfer\AbstractTransfer;
use Jett\McNewsletter\Core\API\Transfer\ResponseList;
use Psr\Http\Message\ResponseInterface;

abstract class AbstractConverter
{
    public const LIST_ITEMS_KEY = 'lists';

    /**
     * @param ResponseInterface $response
     * @return AbstractTransfer
     * @throws ResponseException
     */
    public static function convertResponse(ResponseInterface $response): AbstractTransfer
    {
        static::checkResponse($response);
        $data = \GuzzleHttp\json_decode($response->getBody()->getContents(), true);
        return static::convertData($data);
    }

    /**
     * @param AbstractTransfer $transfer
     * @return array
     */
    public static function convertTransfer(AbstractTransfer $transfer): array
    {
        $data = static::convertTransferToData($transfer);

        // TODO: check if rules still apply
        foreach ($data as $key => $value) {
            if ($value === null || $value === '' || (is_array($value) && empty($value))) {
                unset($data[$key]);
            }
        }

        return $data;
    }

    /**
     * @param ResponseInterface $response
     * @return ResponseList
     * @throws ResponseException
     */
    public static function convertList(ResponseInterface $response): ResponseList
    {
        static::checkResponse($response);
        $data = \GuzzleHttp\json_decode($response->getBody()->getContents(), true);
        return static::convertListData($data);
    }

    /**
     * @param ResponseInterface $response
     * @throws ResponseException
     */
    public static function checkResponse(ResponseInterface $response)
    {
        if ($response->getStatusCode() < 200 || $response->getStatusCode() >= 300) {
            throw new ResponseException();
        }
    }

    /**
     * @param array $data
     * @return AbstractTransfer
     */
    abstract protected static function convertData(array $data): AbstractTransfer;

    /**
     * @param array $data
     * @return ResponseList
     */
    protected static function convertListData(array $data): ResponseList
    {
        $responseList = new ResponseList();

        $responseList->total = $data['total_items'];
        $responseList->items = array_map(function (array $itemData) {
            return static::convertData($itemData);
        }, $data[static::LIST_ITEMS_KEY]);

        return $responseList;
    }

    /**
     * @param AbstractTransfer $transfer
     * @return array
     */
    abstract protected static function convertTransferToData(AbstractTransfer $transfer): array;
}
