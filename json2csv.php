<?php
$target = $argv[1];
$content = file_get_contents($target);
$json = json_decode($content);
echo "url,method,http,status,size,time\n";
foreach($json->log->entries as $entrie) {
	echo $entrie->request->url.",".$entrie->request->method.",".$entrie->request->httpVersion
	.",".$entrie->response->status.",".$entrie->response->content->size.",".$entrie->time
	."\n";
}
?>