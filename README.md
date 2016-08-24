# HTTP_API
For deploy server environment  need run
vagrant up
 
Example call : 
upload file with POST to server:
curl --form userfile=@ak.html    http://127.0.0.1:8080/api/

GET file from server by name:
curl http://127.0.0.1:8080/api/ak.html

DELTE file in server :
curl -X DELETE  http://127.0.0.1:8080/api/ak.html
