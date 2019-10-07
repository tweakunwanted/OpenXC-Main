user  xtreamcodes;
worker_processes  auto;

worker_rlimit_nofile 300000;
events {
    worker_connections  16000;
    use epoll;
	accept_mutex on;
	multi_accept on;
}
thread_pool pool_xtream threads=32 max_queue=0;
http {

    include       mime.types;
    default_type  application/octet-stream;

    sendfile           on;
    tcp_nopush         on;
    tcp_nodelay        on;
	reset_timedout_connection on;
    gzip off;
    fastcgi_read_timeout 200;
	access_log off;
	keepalive_timeout 10;
	include balance.conf;
	send_timeout 20m;	
	sendfile_max_chunk 512k;
	lingering_close off;
	aio threads=pool_xtream;
	client_body_timeout 13s;
	client_header_timeout 13s;
	client_max_body_size 3m;

	limit_req_zone $binary_remote_addr zone=one:30m rate=20r/s;
    server {
        listen 25461;listen 25463 ssl;ssl_certificate server.crt;ssl_certificate_key server.key; ssl_protocols SSLv3 TLSv1.1 TLSv1.2;
        index index.php index.html index.htm;
        root /home/xtreamcodes/iptv_xtream_codes/wwwdir/;
        server_tokens off;
        chunked_transfer_encoding off;

		if ( $request_method !~ ^(GET|POST)$ ) {
			return 200;
		}

        rewrite_log on;
        rewrite ^/live/(.*)/(.*)/(.*)\.(.*)$ /streaming/clients_live.php?username=$1&password=$2&stream=$3&extension=$4 break;
        rewrite ^/movie/(.*)/(.*)/(.*)$ /streaming/clients_movie.php?username=$1&password=$2&stream=$3&type=movie break;
		rewrite ^/series/(.*)/(.*)/(.*)$ /streaming/clients_movie.php?username=$1&password=$2&stream=$3&type=series break;
        rewrite ^/(.*)/(.*)/(.*).ch$ /streaming/clients_live.php?username=$1&password=$2&stream=$3&extension=ts break;
        rewrite ^/(.*)\.ch$ /streaming/clients_live.php?extension=ts&stream=$1&qs=$query_string break;
        rewrite ^/ch(.*)\.m3u8$ /streaming/clients_live.php?extension=m3u8&stream=$1&qs=$query_string break;
		rewrite ^/hls/(.*)/(.*)/(.*)/(.*)/(.*)$ /streaming/clients_live.php?extension=m3u8&username=$1&password=$2&stream=$3&type=hls&segment=$5&token=$4 break;
		rewrite ^/hlsr/(.*)/(.*)/(.*)/(.*)/(.*)/(.*)$ /streaming/clients_live.php?token=$1&username=$2&password=$3&segment=$6&stream=$4&key_seg=$5 break;
		rewrite ^/timeshift/(.*)/(.*)/(.*)/(.*)/(.*)\.(.*)$ /streaming/timeshift.php?username=$1&password=$2&stream=$5&extension=$6&duration=$3&start=$4 break;
		rewrite ^/timeshifts/(.*)/(.*)/(.*)/(.*)/(.*)\.(.*)$ /streaming/timeshift.php?username=$1&password=$2&stream=$4&extension=$6&duration=$3&start=$5 break;
		
		rewrite ^/(.*)/(.*)/(\d+)$ /streaming/clients_live.php?username=$1&password=$2&stream=$3&extension=ts break;
		#add pvr support
		rewrite ^/server/load.php$ /portal.php break;
		
		location /stalker_portal/c {
			alias /home/xtreamcodes/iptv_xtream_codes/wwwdir/c;
		}
		
		#FFmpeg Report Progress
		location = /progress.php {
		    allow 127.0.0.1;
			deny all;
			fastcgi_pass php;
			include fastcgi_params;
			fastcgi_ignore_client_abort on;
			fastcgi_param SCRIPT_FILENAME $document_root$fastcgi_script_name;
			fastcgi_param SCRIPT_NAME $fastcgi_script_name;
		}


        location ~ \.php$ {
			limit_req zone=one burst=8;
            try_files $uri =404;
			fastcgi_index index.php;
			fastcgi_pass php;
			include fastcgi_params;
			fastcgi_buffering on;
			fastcgi_buffers 96 32k;
			fastcgi_buffer_size 32k;
			fastcgi_max_temp_file_size 0;
			fastcgi_keep_conn on;
			fastcgi_param SCRIPT_FILENAME $document_root$fastcgi_script_name;
			fastcgi_param SCRIPT_NAME $fastcgi_script_name;
        }
    }
}
