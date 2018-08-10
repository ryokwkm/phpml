<?php
namespace PhpmlExercise;

require __DIR__ . '/vendor/autoload.php';

use Phpml\Dataset\CsvDataset;

$dataset = new CsvDataset('datasets/raw/Tweets.csv',1);

echo '<pre>';
foreach ($dataset->getSamples() as $sample) {
    print_r($sample);
}
echo '</pre>';