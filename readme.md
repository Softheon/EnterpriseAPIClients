# Softehon Enterprise API Client Libraries
A collection of libraries for the Softheon Wallet API.  Client libraries are available in the following languages:
* [C#](https://github.com/Softheon/EnterpriseAPIClients/tree/master/CSharp)
* [Go](https://github.com/Softheon/EnterpriseAPIClients/tree/master/Go)
* [Java](https://github.com/Softheon/EnterpriseAPIClients/tree/master/Java)
* [Node.js](https://github.com/Softheon/EnterpriseAPIClients/tree/master/NodeJS)
* [TypeScript](https://github.com/Softheon/EnterpriseAPIClients/tree/master/TypeScript)
* [Python](https://github.com/Softheon/EnterpriseAPIClients/tree/master/Python/softheon)
* [Ruby](https://github.com/Softheon/EnterpriseAPIClients/tree/master/Ruby/generated)
* [PHP](https://github.com/Softheon/EnterpriseAPIClients/tree/master/PHP/Softheon/Enterprise/Api/Client)

To get started using the Softheon Wallet API, please visit https://hack.softheon.io.
Please also visit the [documentation site](https://hack.softheon.io/documentation/enterprise) for more information on how to use the
Softheon Wallet API.

## Overview
Client libraries are generated using the [AutoRest](https://github.com/Azure/autorest) open-source REST API client generation tool.  The
input to AutoRest is a spec file that describes the Softheon Wallet API using the [OpenAPI Specification](https://github.com/OAI/OpenAPI-Specification).
[Swashbuckle](https://github.com/domaindrivendev/Swashbuckle.AspNetCore) was used for spec file generation.

## Getting Started
The client libraries for each language includes all request and response models used by the Softheon Wallet API, as well as methods covering all types
of interactions supported by the Softheon Wallet API.  To get started using the client libraries, create an application using your IDE of choice. Then import the files located in the folder for your selected languge into your application.

### C# Client Example
For an example on how to use a C# generated client, please refer to the [AutoRest C# client documentation](https://github.com/Azure/autorest/tree/master/docs/client).

### Client Runtimes
Some languages requrie additional client runtimes in order to use these libraries. Information on required client runtimes can be found in the 
[AutoRest client runtime documentation](https://github.com/Azure/autorest/blob/master/docs/developer/architecture/Autorest-and-Clientruntimes.md).

## Authentication
In order to make requests to the Softheon Wallet, you must include the `Authorization` request
 header with an OAuth 2.0 ***access token***.

Access tokens are provided by the Softheon Wallet authorization server.  To obtain an access
token, pass the Base64-encoded `client_id:client_secret` credentials in the `Authorization`
header with the authentication type set to `Basic`.

For more information on requesting access tokens, please refer to the [Softheon Enterprise API OAuth 2 documentation](https://hack.softheon.io/documentation/enterprise/topics/oauth2/).

### C# Example
```csharp
var client = new RestClient("https://hack.softheon.io/oauth2/connect/token");
var request = new RestRequest(Method.POST);
request.AddHeader("Authorization", "Basic <Base64-encoded client_id:client_secret>");
request.AddHeader("Content-Type", "application/x-www-form-urlencoded");
request.AddParameter("undefined", "grant_type=client_credentials&scope=enterpriseapi", ParameterType.RequestBody);
IRestResponse response = client.Execute(request);
```
### Go Example
```go
package main

import (
	"fmt"
	"strings"
	"net/http"
	"io/ioutil"
)

func main() {

	url := "https://hack.softheon.io/oauth2/connect/token"

	payload := strings.NewReader("grant_type=client_credentials&scope=enterpriseapi")

	req, _ := http.NewRequest("POST", url, payload)

	req.Header.Add("Content-Type", "application/x-www-form-urlencoded")
	req.Header.Add("Authorization", "Basic <Base64-encoded client_id:client_secret>")

	res, _ := http.DefaultClient.Do(req)

	defer res.Body.Close()
	body, _ := ioutil.ReadAll(res.Body)

	fmt.Println(res)
	fmt.Println(string(body))

}

```

### Java Example
```java
OkHttpClient client = new OkHttpClient();

MediaType mediaType = MediaType.parse("application/x-www-form-urlencoded");
RequestBody body = RequestBody.create(mediaType, "grant_type=client_credentials&scope=enterpriseapi");
Request request = new Request.Builder()
  .url("https://hack.softheon.io/oauth2/connect/token")
  .post(body)
  .addHeader("Content-Type", "application/x-www-form-urlencoded")
  .addHeader("Authorization", "Basic <Base64-encoded client_id:client_secret>")
  .build();

Response response = client.newCall(request).execute();
```

### Node.js Example
```javascript
var qs = require("querystring");
var http = require("https");

var options = {
  "method": "POST",
  "hostname": [
    "hack",
    "softheon",
    "io"
  ],
  "path": [
    "oauth2",
    "connect",
    "token"
  ],
  "headers": {
    "Content-Type": "application/x-www-form-urlencoded",
    "Authorization": "Basic <Base64-encoded client_id:client_secret>",
  }
};

var req = http.request(options, function (res) {
  var chunks = [];

  res.on("data", function (chunk) {
    chunks.push(chunk);
  });

  res.on("end", function () {
    var body = Buffer.concat(chunks);
    console.log(body.toString());
  });
});

req.write(qs.stringify({ grant_type: 'client_credentials', scope: 'enterpriseapi' }));
req.end();
```

### Python Example
```python
import http.client

conn = http.client.HTTPConnection("hack,softheon,io")

payload = "grant_type=client_credentials&scope=enterpriseapi"

headers = {
    'Content-Type': "application/x-www-form-urlencoded",
    'Authorization': "Basic <Base64-encoded client_id:client_secret>",
    }

conn.request("POST", "oauth2,connect,token", payload, headers)

res = conn.getresponse()
data = res.read()

print(data.decode("utf-8"))
```

### Ruby Example
```ruby
require 'uri'
require 'net/http'

url = URI("https://hack.softheon.io/oauth2/connect/token")

http = Net::HTTP.new(url.host, url.port)

request = Net::HTTP::Post.new(url)
request["Content-Type"] = 'application/x-www-form-urlencoded'
request["Authorization"] = 'Basic <Base64-encoded client_id:client_secret>'
request.body = "grant_type=client_credentials&scope=enterpriseapi"

response = http.request(request)
puts response.read_body
```

### PHP Example
```php
<?php

$request = new HttpRequest();
$request->setUrl('https://hack.softheon.io/oauth2/connect/token');
$request->setMethod(HTTP_METH_POST);

$request->setHeaders(array(
  'Authorization' => 'Basic <Base64-encoded client_id:client_secret>',
  'Content-Type' => 'application/x-www-form-urlencoded'
));

$request->setContentType('application/x-www-form-urlencoded');
$request->setPostFields(array(
  'grant_type' => 'client_credentials',
  'scope' => 'enterpriseapi'
));

try {
  $response = $request->send();

  echo $response->getBody();
} catch (HttpException $ex) {
  echo $ex;
}
```
## Acknowledgements
The Softheon Wallet API client libraries are built using the following great open source projects
* [AutoRest](https://github.com/Azure/autorest)
* [Swashbuckle](https://github.com/domaindrivendev/Swashbuckle.AspNetCore)
