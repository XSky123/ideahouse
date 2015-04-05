<?php 
include_once("simple_html_dom.php");
// $html = file_get_html('http://www.btspread.com/search/SUN-005');
// $handle = fopen("http://www.btspread.com/search/SUN-005","r");
// echo $handle;
// $content = stream_get_contents($handle, 1024 * 1024);
// echo $content;
// foreach ($html->find('li') as $item){
//   echo $item."<br>";
// }

function GETBySocket($URL, $port=80) {
    //get host from url
    preg_match('/\/\/.*\//sU',$URL,$host_array);//"http://*/"
    if(!$host_array[0]) {
        $URL.='/';
        preg_match('/\/\/.*\//sU',$URL,$host_array);
    }
    $host=substr($host_array[0],2,-1);
    //connect
    $fp = stream_socket_client("$host:$port", $errcode, $errstr, 1);// or die("get ". $host ." failed");
    $header = "GET ". $URL. " HTTP/1.1\r\n"; 
    $header .= "Accept: */*\r\n"; 
    $header .= "Accept-Language: zh-cn\r\n";
    //$header .= "HTTP_CONNECTION: Keep-Alive\r\n"; 
    $header .= "HTTP_ACCEPT: text/xml,application/xml,application/xhtml+xml,text/html;q=0.9,text/plain;q=0.8,image/png,*/*;q=0.5\r\n"; 
    $header .= "HTTP_ACCEPT_CHARSET: gbk,*,utf-8\r\n";
    //$header .= "Accept-Encoding: gzip, deflate\r\n"; 
    $header .= "User-Agent: Mozilla/5.0 (X11; Linux i686) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/41.0.2272.101 Safari/537.36\r\n"; 
    $header .= "Host: ". $host ."\r\n"; 
    //$header .= "Connection: Keep-Alive\r\n"; 
    //$header .= "Cookie: cnzz02=2; rtime=1; ltime=1148456424859; cnzz_eid=56601755-\r\n\r\n"; 
    $header .= "Connection: close\r\n\r\n";
    stream_socket_sendto($fp, $header);
    ///////////////////$content=stream_socket_recvfrom($fp,1000,STREAM_PEEK);
    $content=stream_get_contents($fp);
    fclose($fp);
    $position_header=strpos($content, "\r\n\r\n");
    if (stripos(substr($content, 0 ,$position_header), 'Transfer-Encoding: chunked')) {
        return substr($content, strpos($content, "\r\n", $position_header +4)+2);
    }  else {
        return substr($content, $position_header +4);
    }

}
function FetchBtspread($keyword){
  /* Note:
  The Result is an Array.
  Include:
    result["lnkName"]
    result["lnkSize"]
    result["lnkPage"] */

  //****Build URL****
  $baseURL = "http://www.btspread.com/search/";
  $baseURL .= $keyword;

  //****Get HTML****
  $html = GETBySocket($baseURL);

  //****Get Each Item****
  preg_match("/<tbody>(.*?)<\/tbody>/",$html,$target);
  preg_match_all("/<tr>(.*?)<\/tr>/",$target[1],$matches);

  //****Fetch Each Item****
  foreach ($matches[0] as $i=>$item) {
    preg_match("/class=\"btn\" title=\"(.*?)\"/", $item,$tmp["lnkName"]);
    preg_match("/class=\"files-size\">(.*?)<\/td>/", $item,$tmp["lnkSize"]);
    preg_match("/<td class=\"action\"><a href=\"(.*?)\"/", $item,$tmp["lnkPage"]);
    // $detailHTML=GETBySocket($tmp["lnkPage"][1]);
    // preg_match("/readonly>(.*?)<\/textarea>/",$detailHTML,$tmp["lnkDetail"]);
    foreach ($tmp as $key => $value)
      $result[$i][$key]=$value[1];
  }

  //****Return the result****
  return $result;
}

function test($result){
  foreach ($result as $item) {
    print_r($item);
    echo "<br>";
  }
}

test(FetchBtspread("NNSS"))
// foreach ($html->find('tr') as $item){
//   echo $item."<br>";
// }
?>