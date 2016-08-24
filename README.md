# HTTP_API
upload file with POST:
curl --form userfile=@ak.html    http://127.0.0.1:8080/api/

GET file:
curl http://127.0.0.1:8080/api/ak.html

DELTE file:
curl -X DELETE  http://127.0.0.1:8080/api/ak.html
