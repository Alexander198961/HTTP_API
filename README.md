# HTTP_API
For deploy server environment  need run
vagrant up
 
Calls example : 
1) Upload a new file:
curl --form userfile=@ak.html    http://127.0.0.1:8080/api/

2) Retrieve an uploaded file by name :
curl http://127.0.0.1:8080/api/ak.html

3) Delete an uploaded file by name :
curl -X DELETE  http://127.0.0.1:8080/api/ak.html
