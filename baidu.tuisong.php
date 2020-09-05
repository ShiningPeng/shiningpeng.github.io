$urls = array(
    'https://shiningpeng.top/2020/09/05/article-2/',
    'https://shiningpeng.top/2020/09/04/article-1/',
    'https://shiningpeng.top/about/'
);
$api = 'http://data.zz.baidu.com/urls?site=https://shiningpeng.top&token=iNJUY4y3Ch2lboBP';
$ch = curl_init();
$options =  array(
    CURLOPT_URL => $api,
    CURLOPT_POST => true,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_POSTFIELDS => implode("\n", $urls),
    CURLOPT_HTTPHEADER => array('Content-Type: text/plain'),
);
curl_setopt_array($ch, $options);
$result = curl_exec($ch);
echo $result;