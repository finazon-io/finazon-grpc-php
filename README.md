# Finazon PHP gRPC Client

This is the official PHP library for Finazon, offering access to:
- Lists of datasets, publishers, markets, and tickers.
- Market data: ticker snapshots, time series, trades, and technical indicators.
- Data from specific datasets such as Benzinga, Binance, Crypto, Forex, SEC, and SIP.

🔑 **API key** is essential. If you haven't got one yet, [sign up here](https://finazon.io/).

## Requirements
Ensure you have PHP 7.4 or later. 

## Installation

[Install gRPC for PHP](https://cloud.google.com/php/grpc)

Add package using [Composer](https://getcomposer.org/)
```
composer require finazon/finazon-grpc-php
```

🔗 View the package on [Packagist](https://packagist.org/packages/finazon/finazon-grpc-php).

## Updating to last version
```shell
composer update finazon/finazon-grpc-php
```

## Quick start

### 1. Set up a new project
```shell
mkdir hello-finazon && cd hello-finazon
```
```shell
composer init --name="example/hello-finazon" --no-interaction 
```
```shell
composer require finazon/finazon-grpc-php
```

### 2. Create `time_series.php` script
```php
<?php
require 'vendor/autoload.php';

use Finazon\Grpc\Api\GetTimeSeriesRequest;
use Finazon\Grpc\Api\TimeSeries;
use Finazon\Grpc\Exception\RequestException;
use Finazon\Grpc\Service\TimeSeriesService;


// Load last OHLCV candles for AAPL
$service = new TimeSeriesService('your_api_key');
$request = new GetTimeSeriesRequest();
$request->setDataset('sip_non_pro')
    ->setTicker('AAPL')
    ->setInterval('1h')
    ->setPageSize(10);

try {
    $response = $service->getTimeSeries($request);
    echo 'Last AAPL OHLCV data' . PHP_EOL;
    foreach ($response->getResult() as $t) {
        /** @var Timeseries $t */
        echo sprintf(
            '%s - %s, %s, %s, %s, %s %s', 
            $t->getTimestamp(), $t->getOpen(), $t->getHigh(), $t->getLow(), $t->getClose(), 
            $t->getVolume(), PHP_EOL,
        );
    }
} catch (RequestException $e) {
    echo sprintf('Received error, code: %s, message: %s%s', $e->getCode(), $e->getMessage(), PHP_EOL);
}
```

### 3. Input your API key
Replace `'your_api_key'` with your actual key.

### 4. Run script
```bash
php time_series.php
```
📝 Expected output:
```
Last AAPL OHLCV data
1709582400 - 175.325, 175.5, 174.95, 175.1, 14962271 
1709578800 - 174.2, 175.645, 173.98, 175.325, 8209663 
1709575200 - 174.05, 174.505, 173.79, 174.205, 7869144 
1709571600 - 174.1112, 174.7, 174.01, 174.05, 7365810 
1709568000 - 174.835, 175.895, 174.1, 174.1201, 8672800 
1709564400 - 174.96, 175.929, 173.9, 174.83, 14265584 
1709560800 - 176.15, 176.9, 174.62, 174.97, 13824038 
1709323200 - 179.9312, 179.97, 179.415, 179.695, 7701993 
1709319600 - 179.315, 180.22, 179.31, 180.005, 6668926 
1709316000 - 178.515, 179.39, 178.33, 179.32, 6103415 
```

👀 Check the full example and other examples [here](https://github.com/finazon-io/finazon-grpc-php/tree/main/examples)


## RPC support

The following table outlines the supported rpc calls:
<!--rpc_table_boundary-->
| Service              | rpc                       | Description                                        |
|----------------------|---------------------------|----------------------------------------------------|
| ApiUsageService      | getApiUsage               | Get a list of products with quota limit/usage      |
| BenzingaService      | getDividentsCalendar      | Returns the dividends calendar from Benzinga       |
| BenzingaService      | getEarningsCalendar       | Returns the earnings calendar from Benzinga        |
| BenzingaService      | getNews                   | Returns the news articles from Benzinga            |
| BenzingaService      | getIPO                    | Returns IPO data from Benzinga                     |
| BinanceService       | getTimeSeries             | Get time series data without technical indicators  |
| CryptoService        | getTimeSeries             | Get time series data for any given ticker          |
| DatasetsService      | getDatasets               | Get a list of all datasets available at Finazon    |
| ExchangeService      | getMarketsCrypto          | Returns a list of supported crypto markets         |
| ExchangeService      | getMarketsStocks          | Returns a list of supported stock markets          |
| ForexService         | getTimeSeries             | Get time series data for any given ticker          |
| PublisherService     | getPublishers             | Get a list of all publishers available at Finazon  |
| SecService           | getFilings                | Real-time and historical access to all forms, filings, and exhibits directly from the SEC's EDGAR system |
| SipService           | getTrades                 | Returns detailed information on trades executed through the Securities Information Processor (SIP) |
| SipService           | getMarketCenter           | Returns a list of market centers                   |
| SnapshotService      | getSnapshot               | This endpoint returns a combination of different data points, such as daily performance, last quote, last trade, minute data, and previous day performance |
| TickersService       | findTickersStocks         | This API call returns an array of stocks tickers available at Finazon Data API. This list is updated daily |
| TickersService       | findTickersCrypto         | This API call returns an array of crypto tickers available at Finazon Data API. This list is updated daily |
| TickersService       | findTickersForex          | This API call returns an array of forex tickers available at Finazon Data API. This list is updated daily |
| TickersService       | findTickerUS              | This API call returns an array of US tickers available at Finazon Data API. This list is updated daily |
| TimeSeriesService    | getTimeSeries             | Get time series data without technical indicators  |
| TimeSeriesService    | getTimeSeriesAtr          | Get time series data for ATR technical indicator   |
| TimeSeriesService    | getTimeSeriesBBands       | Get time series data for BBands technical indicator |
| TimeSeriesService    | getTimeSeriesIchimoku     | Get time series data for Ichimoku technical indicator |
| TimeSeriesService    | getTimeSeriesMa           | Get time series data for Ma technical indicator    |
| TimeSeriesService    | getTimeSeriesMacd         | Get time series data for Macd technical indicator  |
| TimeSeriesService    | getTimeSeriesObv          | Get time series data for Obv technical indicator   |
| TimeSeriesService    | getTimeSeriesRsi          | Get time series data for Rsi technical indicator   |
| TimeSeriesService    | getTimeSeriesSar          | Get time series data for Sar technical indicator   |
| TimeSeriesService    | getTimeSeriesStoch        | Get time series data for Stoch technical indicator |
| TradeService         | getTrades                 | Returns general information on executed trades     |
<!--rpc_table_boundary-->
Here's how you can use `service` and `request` objects:

```php
<?php
require 'vendor/autoload.php';

use Finazon\Grpc\Api\RpcNameRequest;
use Finazon\Grpc\Service\ServiceNameService;

# ...

$service = new ServiceNameService('your_api_key');
$request = new RpcNameRequest();
$response = service->rpcName($request);
```

## Documentation
Delve deeper with our [official documentation](https://finazon.io/docs).

## Examples
Explore practical scenarios in the [examples](https://github.com/finazon-io/finazon-grpc-php/tree/main/examples) directory.

## Support
- 🌐 Visit our [contact page](https://finazon.io/contact-sales).
- 🛠 Or our [support center](https://support.finazon.io/en/).

## Stay updated
- Follow us on [𝕏](https://twitter.com/finazon_io).
- Join our community on [Discord](https://discord.gg/D5u4ZpB7w7).
- Follow us on [LinkedIn](https://www.linkedin.com/company/finazon).

## Contributing
1. Fork and clone: `$ git clone https://github.com/finazon-io/finazon-grpc-php.git`.
2. Branch out: `$ cd finazon-grpc-php && git checkout -b my-feature`.
3. Commit changes and test.
4. Push your branch and open a pull request with a comprehensive description.

For more guidance on contributing, see the [GitHub Docs](https://docs.github.com/en/get-started/quickstart/contributing-to-projects) on GitHub.

## License

This project is licensed under the MIT License. See the `LICENSE.txt` file in this repository for more details.
