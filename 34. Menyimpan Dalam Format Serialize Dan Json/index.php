<?php

/**
 * Contoh penggunaan serialize() dan unserialize()
 *
 * @author       Rahmat Effendi <rahmat@effendi.id>
 * @copyright    2015 Rahmat Effendi
 * @license      http://www.opensource.org/licenses/mit-license.php  MIT License
 */

// Data yang akan disimpan
$karyawan    = [
    ['nama' => 'Toni', 'alamat' => 'Bandung'],
    ['nama' => 'Naufal', 'alamat' => 'Bandung'],
    ['nama' => 'Davi', 'alamat' => 'Jakarta']
];

// Serialize data
$data = serialize($karyawan);
// Simpan data ke file
file_put_contents('data.txt', $data);

// Baca data dari file
$output    = file_get_contents('data.txt');
// Unserialize data
$hasil    = unserialize($output);
// Tampilkan hasil
echo "<pre>";
print_r($hasil);
echo "<pre>";

// JSON

$data = json_encode($karyawan);
file_put_contents('data1.txt', $data);
$output    = file_get_contents('data1.txt');
$hasil    = json_decode($output);

echo "<pre>";
print_r($hasil);
echo "<pre>";

/**
 * Simpan data ke file XML
 *
 * @param array $data Data yang akan disimpan
 * @return void
 */
function simpanXML(array $data): void
{
    $xml = new SimpleXMLElement('<karyawan/>');

    foreach ($data as $item) {
        $karyawan = $xml->addChild('karyawan');
        $karyawan->addChild('nama', $item['nama']);
        $karyawan->addChild('alamat', $item['alamat']);
    }

    $xml->asXML('data.xml');
}

simpanXML($karyawan);

// tampilkan data XML 

/**
 * Load XML from file and convert to JSON
 *
 * @param string $file Path to XML file
 * @return string JSON representation of the XML file
 */
function xmlToJson(string $file): string
{
    $xml = simplexml_load_file($file);
    return json_encode($xml);
}

/**
 * Format XML string
 *
 * @param string $xmlString XML string yang akan diformat
 * @return string XML string yang diformat
 */
function formatXmlString($xmlString)
{
    $xmlString = preg_replace('/(>)(<)(\/*)/', "$1\n$2$3", $xmlString);
    return preg_replace('/^\s+|\n|\r|\s+$/m', '', $xmlString);
}

$json = xmlToJson('data.xml');

// Format XML string
$formattedXmlString = formatXmlString($json);

echo "<pre>";
echo $formattedXmlString;
echo "</pre>";
